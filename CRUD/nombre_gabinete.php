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
                   
                        $sql = mysqli_query($con, "SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val."' ORDER BY FECHA_GABINETE DESC ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $ID_GABINETE = $row['ID_GABINETE'];
                                          $FECHA_GABINETE = $row['FECHA_GABINETE'];
                                          $ESTUDIOS_GABINETE = $row['ESTUDIOS_GABINETE'];
                                          $RESULTADOS_GABINETE = $row['RESULTADOS_GABINETE'];
                                        
                                          $FECHA_GABINETE =  date("d/m/Y", strtotime($FECHA_GABINETE));

                                          $color = array(  
                                                  '1' => 'RADIOGRAF&Iacute;A',  
                                                  '2' => 'TOMOGRAF&Iacute;A', 
                                                  '3' => 'ELECTROCARDIOGRAMA'
                                              );                                          


                                          echo "<tr><td>".$FECHA_GABINETE."</td><td>".$color[$ESTUDIOS_GABINETE]."</td><td>".$RESULTADOS_GABINETE."</td><td>
                                                <button type='button' class='btn btn_ac1' onclick='editar_gabinete( ".$ID_GABINETE." )'><i class='glyphicon glyphicon-pencil'></i>  EDITAR</button></br></br>
                                                <button type='button' class='btn btn_ac2' onclick='borrar_gabinete( ".$ID_GABINETE." )'><i class='glyphicon glyphicon-envelope'></i>   BORRAR </button>
                                          </td>
                                          </tr>";
                                      
                                      }

                        }else{ echo "NO HAY RESULTADOS"; }                

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