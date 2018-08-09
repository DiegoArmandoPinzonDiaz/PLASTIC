<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]) && isset($_POST["texto8"]) )
      {

            
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val = $_POST["texto"];
                  $val2 = $_POST["texto2"];
                  $val3 = $_POST["texto3"];
                  $val4 = $_POST["texto4"];
                  $val5 = $_POST["texto5"];
                  $val6 = $_POST["texto6"];
                  $val7 = $_POST["texto7"];
                  $val8 = $_POST["texto8"];



                  if (file_exists('../imgPacientes/'.$val2) && strlen(strstr($val2,'_DERECHO_FACIAL_'))<=0 && $val2 != '') {     echo "LA PRIMERA IMAGEN YA EXISTE";  }
                  else if (file_exists('../imgPacientes/'.$val3) && strlen(strstr($val3,'_3_4DERECHO_FACIAL_'))<=0 && $val3 != '') {     echo "LA SEGUNDA IMAGEN YA EXISTE";  }
                  else if (file_exists('../imgPacientes/'.$val4) && strlen(strstr($val4,'_FRENTE_FACIAL_'))<=0 && $val4 != '') {     echo "LA TERCERA IMAGEN YA EXISTE";  }
                  else if (file_exists('../imgPacientes/'.$val5) && strlen(strstr($val5,'_3_4IZQUIERDO_FACIAL_'))<=0 && $val5 != '') {     echo "LA CUARTA IMAGEN YA EXISTE";  }
                  else if (file_exists('../imgPacientes/'.$val6) && strlen(strstr($val6,'_IZQUIERDO_FACIAL_'))<=0 && $val6 != '') {     echo "LA QUINTA IMAGEN YA EXISTE";  }
                  else{ 


                         $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                        if(mysqli_connect_errno()){
                              echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                        }else{

                              //HACER EL INSERT INTO
                              mysqli_select_db($con, 'test');

                              $sql = mysqli_query($con, "SELECT * FROM SEGUIMIENTO_FOTOGRAFICO WHERE FOLIO = '".$val."' ");

                              $contar = mysqli_num_rows($sql);
                               
                              if($contar > 0){ 


                                          mysqli_select_db($con, 'test');
                   
                                          $sql = mysqli_query($con, "SELECT * FROM SEGUIMIENTO_FOTOGRAFICO WHERE FOLIO = '".$_POST["texto"]."' ");


                                          while($row=mysqli_fetch_array($sql)){
                                                        $imagen1 = $row['FOTO1_1'];
                                                        $imagen2 = $row['FOTO1_2'];
                                                        $imagen3 = $row['FOTO1_3'];
                                                        $imagen4 = $row['FOTO1_4'];
                                                        $imagen5 = $row['FOTO1_5'];
                                          }

                                          if($imagen1 != ""){  $ruta = "../imgPacientes/".$imagen1;  unlink($ruta);  }
                                          if($imagen2 != ""){  $ruta = "../imgPacientes/".$imagen2;  unlink($ruta);  }
                                          if($imagen3 != ""){  $ruta = "../imgPacientes/".$imagen3;  unlink($ruta);  }
                                          if($imagen4 != ""){  $ruta = "../imgPacientes/".$imagen4;  unlink($ruta);  }
                                          if($imagen5 != ""){  $ruta = "../imgPacientes/".$imagen5;  unlink($ruta);  }                                   


                                                $sql = mysqli_query($con, "UPDATE SEGUIMIENTO_FOTOGRAFICO SET FOTO1_1 = '".$val2."', FOTO1_2 = '".$val3."', FOTO1_3 = '".$val4."', FOTO1_4 = '".$val5."', FOTO1_5 = '".$val6."', DESCRIPCION_1 = '".$val7."', FECHA_1 = '".$val8."'  WHERE FOLIO = '".$val."' "); 


                                                if($sql){ echo "REGISTRO GUARDADO";}
                                                else{ echo "Error: ".mysqli_error($con); }

                                          
                        
                              }else{ 
                                    
                                          $sql = mysqli_query($con, "INSERT INTO SEGUIMIENTO_FOTOGRAFICO (FOLIO, FOTO1_1, FOTO1_2, FOTO1_3, FOTO1_4, FOTO1_5, DESCRIPCION_1, FECHA_1 ) VALUES ('$val','$val2','$val3','$val4','$val5','$val6','$val7','$val8' ) "); 


                                          if($sql){ echo "REGISTRO GUARDADO";}
                                          else{ echo "Error: ".mysqli_error($con); }


                              }     

                        }     
                  }


                 
           
      
      }


?>