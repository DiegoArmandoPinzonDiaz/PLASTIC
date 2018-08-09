<?php


     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]) && isset($_POST["texto8"]) && isset($_POST["texto9"]) )
      {
            if($_POST["texto"]){
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

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM PACIENTES WHERE FOLIO = '".$_POST["texto"]."' ");
                         
                        $contar = mysqli_num_rows($sql);
                         
                        if($contar == 0){


                              //session_start();

                                          include '../sesion.php';
                                          require_once '../google-api-php-client/src/Google/autoload.php';

                                          $folioCarpeta = $val.'. '.$val3.' '.$val4.' '.$val2;
                                          $client->setAccessToken($_SESSION['access_token']);
                                          $service = new Google_Service_Drive($client);

                                          //$folderId = '1UsC2H6HSHrxBJZnVZ2gNRrStnzqgsQ4y';
                                          $folderId = '0BxkLmQs_YN_vZ05adFJEVGVLa2c';

                                          $fileMetadata = new Google_Service_Drive_DriveFile(array(
                                                      'name' => $folioCarpeta,
                                                      'mimeType' => 'application/vnd.google-apps.folder',
                                                      'parents' => array($folderId)
                                              ));
                                          $file = $service->files->create($fileMetadata, array());



                        	//HACER EL INSERT INTO
                        	mysqli_select_db($con, 'test');

                        	$sql = mysqli_query($con, "INSERT INTO PACIENTES (ID_PAC,FOLIO,NOMBRE,APELLIDO_1,APELLIDO_2,TELEFONO,CELULAR,E_MAIL,FECHA_REG,FECHA_NAC) VALUES (null,'$val','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9')");


                                    mysqli_select_db($con, 'test');

                                    $sql2 = mysqli_query($con, "SELECT * FROM PACIENTES WHERE FOLIO = '$val' ");

                                    $contar = mysqli_num_rows($sql2);
                                     
                                    if($contar > 0){ 

                                                while($row=mysqli_fetch_array($sql2)){

                                                            $ID_PAC = $row['ID_PAC'];
                                                            //ECHO $ID_PAC;

                                                            $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO) VALUES (null,'$val9','$val9','$ID_PAC','CUMPLEANOS','CUMPLEANOS','','URGENTE')"); 
                                                      }

                                          }  

                        	if (!$sql)
							  {
							  	echo("Error description: " . mysqli_error($con));
							  }	
							  echo "PACIENTE GUARDADO";	


                              if (!$sql2)
                                            {
                                                echo("Error description: " . mysqli_error($con));
                                            }   
                                                        			
							
                        }else{
                              echo "ESTE FOLIO YA EXISTE";
                              
                        }
                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>