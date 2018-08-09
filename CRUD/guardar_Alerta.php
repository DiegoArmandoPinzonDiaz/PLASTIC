<?php

     if(isset($_POST["texto"]) && isset($_POST["texto1"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"])  )
      {
            if($_POST["texto"]){
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val = $_POST["texto"];
                  $val1 = $_POST["texto1"];
                  $val2 = $_POST["texto2"];
                  $val3 = $_POST["texto3"];
                  $val4 = $_POST["texto4"];
                  $val5 = $_POST["texto5"];

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM ".$val2." WHERE ".$val5." = '".$_POST["texto3"]."' ");
                         
                        $contar = mysqli_num_rows($sql);

                        while($row=mysqli_fetch_array($sql)){

                              $DURACION = $row['DURACION'];                              

                              $nuevafecha = date('Y-m-d', strtotime("$val4 + ".$DURACION." day"));

                              //ECHO $nuevafecha;

                              //HACER EL INSERT INTO
                              mysqli_select_db($con, 'test');

                              $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO) VALUES (null,'$val4','$nuevafecha','$val','$val2','$val3',NULL,"URGENTE")"); 

                              if (!$sql)
                                {
                                    echo("Error description: " . mysqli_error($con));
                                }   
                                echo "REGISTRO GUARDADO";   


                        }
                         
                        /*if($contar == 0 || $val14 > 0){

                        	
                              if($val14 > 0){

                                    //HACER EL INSERT INTO
                                    mysqli_select_db($con, 'test');

                                    $sql = mysqli_query($con, "UPDATE CONSULTAS SET ID_PACIENTE = '".$val."', SEL_CIRUGIA = '".$val1."', SEL_MEDICINA= '".$val2."', SEL_SPA = '".$val3."', FECHA_CONSULTA = '".$val4."',DESCRIP_CIRUGIA= '".$val5."',DESCRIP_MEDICINA= '".$val6."',DESCRIP_SPA= '".$val7."',CANTIDAD_PRODUCTO= '".$val8."',VALOR_PRODUCTO= '".$val9."',NOMBRE_PRODUCTO= '".$val10."',TOTAL= '".$val11."',TOTAL_PRODUCTO= '".$val12."',DESCRIP_PRODUCTO= '".$val13."' WHERE ID_CONSULTA = '".$val14."' "); 

                                    if (!$sql)
                                      {
                                          echo("Error description: " . mysqli_error($con));
                                      }   
                                      echo "REGISTRO GUARDADO";   

                               }
                              else{
                                    //HACER EL INSERT INTO
                              	mysqli_select_db($con, 'test');

                              	$sql = mysqli_query($con, "INSERT INTO CONSULTAS (ID_CONSULTA,ID_PACIENTE,SEL_CIRUGIA,SEL_MEDICINA,SEL_SPA,FECHA_CONSULTA,DESCRIP_CIRUGIA,DESCRIP_MEDICINA,DESCRIP_SPA,CANTIDAD_PRODUCTO,VALOR_PRODUCTO,NOMBRE_PRODUCTO,TOTAL,TOTAL_PRODUCTO,DESCRIP_PRODUCTO) VALUES (null,'$val','$val1','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9','$val10','$val11','$val12','$val13')"); 

                              	if (!$sql)
            				  {
            				  	echo("Error description: " . mysqli_error($con));
            				  }	
            				  echo "REGISTRO GUARDADO";	
                              } 	


							
                        }else{
                              echo "ESTA CONSULTA YA EXISTE EN ESTA FECHA.";
                              
                        }*/
                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>