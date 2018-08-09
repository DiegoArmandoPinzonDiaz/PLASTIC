<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]) && isset($_POST["texto8"]) && isset($_POST["texto9"]) )
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
                  $val9 = $_POST["texto9"];

                  
                  if (file_exists('../imgPacientes/'.$val2) && strlen(strstr($val2,'_DERECHO_FACIAL_'))<=0 ) {     echo "LA PRIMERA IMAGEN YA EXISTE";  }
                  else if (file_exists('../imgPacientes/'.$val3) && strlen(strstr($val3,'_3_4DERECHO_FACIAL_'))<=0) {     echo "LA SEGUNDA IMAGEN YA EXISTE";  }
                  else if (file_exists('../imgPacientes/'.$val4) && strlen(strstr($val4,'_FRENTE_FACIAL_'))<=0) {     echo "LA TERCERA IMAGEN YA EXISTE";  }
                  else if (file_exists('../imgPacientes/'.$val5) && strlen(strstr($val5,'_3_4IZQUIERDO_FACIAL_'))<=0) {     echo "LA CUARTA IMAGEN YA EXISTE";  }
                  else if (file_exists('../imgPacientes/'.$val6) && strlen(strstr($val6,'_IZQUIERDO_FACIAL_'))<=0) {     echo "LA QUINTA IMAGEN YA EXISTE";  }
                  else if (file_exists('../imgPacientes/'.$val9) && strlen(strstr($val9,'_POSTERIOR_'))<=0) {     echo "LA SEXTA IMAGEN YA EXISTE";  }
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
                                                        $imagen1 = $row['FOTO4_1'];
                                                        $imagen2 = $row['FOTO4_2'];
                                                        $imagen3 = $row['FOTO4_3'];
                                                        $imagen4 = $row['FOTO4_4'];
                                                        $imagen5 = $row['FOTO4_5'];
                                                        $imagen6 = $row['FOTO4_6'];
                                          }

                                          if($imagen1 != ""){  $ruta = "../imgPacientes/".$imagen1;  unlink($ruta);  }
                                          if($imagen2 != ""){  $ruta = "../imgPacientes/".$imagen2;  unlink($ruta);  }
                                          if($imagen3 != ""){  $ruta = "../imgPacientes/".$imagen3;  unlink($ruta);  }
                                          if($imagen4 != ""){  $ruta = "../imgPacientes/".$imagen4;  unlink($ruta);  }
                                          if($imagen5 != ""){  $ruta = "../imgPacientes/".$imagen5;  unlink($ruta);  } 
                                          if($imagen6 != ""){  $ruta = "../imgPacientes/".$imagen6;  unlink($ruta);  }                                   


                                                $sql = mysqli_query($con, "UPDATE SEGUIMIENTO_FOTOGRAFICO SET FOTO4_1 = '".$val2."', FOTO4_2 = '".$val3."', FOTO4_3 = '".$val4."', FOTO4_4 = '".$val5."', FOTO4_5 = '".$val6."', DESCRIPCION_4 = '".$val7."', FECHA_4 = '".$val8."', FOTO4_6 = '".$val9."'  WHERE FOLIO = '".$val."' "); 


                                                if($sql){ echo "REGISTRO GUARDADO";}
                                                else{ echo "Error: ".mysqli_error($con); }

                                          
                        
                              }else{ 
                                    
                                          $sql = mysqli_query($con, "INSERT INTO SEGUIMIENTO_FOTOGRAFICO (FOLIO, FOTO4_1, FOTO4_2, FOTO4_3, FOTO4_4, FOTO4_5, DESCRIPCION_4, FECHA_4, FOTO4_6 ) VALUES ('$val','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9' ) "); 


                                          if($sql){ echo "REGISTRO GUARDADO";}
                                          else{ echo "Error: ".mysqli_error($con); }


                              }     

                        }     
                  }


                 
           
      
      }


?>