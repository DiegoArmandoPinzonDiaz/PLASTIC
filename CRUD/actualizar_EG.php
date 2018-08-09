<?php

 /*    if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]) && isset($_POST["texto8"]) )
      {*/
            
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
                  $val10 = $_POST["texto10"];
                  $val11 = $_POST["texto11"];


                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //HACER EL INSERT INTO
                        mysqli_select_db($con, 'test');

                        $sql = mysqli_query($con, "SELECT * FROM MOTIVO_CONSULTA WHERE FOLIO = '".$val8."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    $sql = mysqli_query($con, "UPDATE MOTIVO_CONSULTA SET EXAMEN = '".$val."', CABEZA = '".$val2."', CUELLO = '".$val3."', TORAX = '".$val4."', ABDOMEN = '".$val5."', EXTSUP = '".$val6."', EXTINF = '".$val7."', HABITUS = '".$val9."', GENITALES = '".$val10."', NERVIOSO = '".$val11."'  WHERE FOLIO = '".$val8."' "); 


                  			if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }
                  
                        }else{ 
                              
                                    $sql = mysqli_query($con, "INSERT INTO MOTIVO_CONSULTA (FOLIO, EXAMEN, CABEZA, CUELLO, TORAX, ABDOMEN, EXTSUP, EXTINF, HABITUS, GENITALES, NERVIOSO) VALUES ('$val8','$val','$val2','$val3','$val4','$val5','$val6','$val7','$val9','$val10','$val11' ) "); 


                                    if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }


                        }	

                  }	
	     
	
     // }


?>