<?php

     if(isset($_POST["texto"]))
      {
            if($_POST["texto"]){
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val = $_POST["texto"];

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM PDF WHERE FOLIO = '".$val."' ORDER BY FECHA DESC, ORDEN ASC ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $ID_PDF = $row['ID_PDF'];
                                          $FOLIO = $row['FOLIO'];
                                          $PDF = $row['PDF'];
                                          $FECHA = $row['FECHA'];
                                        
                                          $FECHA =  date("d/m/Y", strtotime($FECHA));
                                          


                                          echo "<tr><td>".$FECHA."</td><td>".$PDF."</td><td>
                                                                    <button type='button' class='btn btn_ac1' onclick='ver_pdf( ".$ID_PDF." )'><i class='glyphicon glyphicon-pencil'></i>   VER PDF</button></br></br>
                                                                    <button type='button' class='btn btn_ac1' onclick='enviar_pdf( ".$ID_PDF." )'><i class='glyphicon glyphicon-envelope'></i>   ENVIAR PDF</button></br></br>
                                                                    <button type='button' class='btn btn_ac1' onclick='imprimir_pdf( ".$ID_PDF." )'><i class='glyphicon glyphicon-print'></i>   IMPRIMIR PDF</button></br></br>
                                                                    <button type='button' class='btn btn_ac2' onclick='borrar_pdf( ".$ID_PDF." )'><i class='glyphicon glyphicon-trash'></i>   BORRAR PDF</button>
                                                              </td>
                                                              </tr>";
                                        }

                        }else{ echo "NO HAY PDF's"; }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>