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
                   
                        $sql = mysqli_query($con, "SELECT * FROM DIAGNOSTICO WHERE FOLIO_DIAGNOSTICO = '".$val."' ORDER BY FECHA_DIAGNOSTICO DESC LIMIT 1 ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $ID_DIAGNOSTICO = $row['ID_DIAGNOSTICO'];
                                          $FECHA_DIAGNOSTICO = $row['FECHA_DIAGNOSTICO'];
                                          $ESTUDIO_DIAGNOSTICO = $row['ESTUDIO_DIAGNOSTICO'];
                                          $FOLIO_DIAGNOSTICO = $row['FOLIO_DIAGNOSTICO'];
                                        
                                          $FECHA_DIAGNOSTICO =  date("d/m/Y", strtotime($FECHA_DIAGNOSTICO)); 

                                          $ESTUDIO_DIAGNOSTICO = str_replace("/", "\n", $ESTUDIO_DIAGNOSTICO);   



                                          $arrayPHP=array("ESTUDIO_DIAGNOSTICO"=>$ESTUDIO_DIAGNOSTICO,"ID_DIAGNOSTICO"=>$ID_DIAGNOSTICO,"FECHA_DIAGNOSTICO"=>$FECHA_DIAGNOSTICO);  

                                          echo json_encode($arrayPHP);  

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