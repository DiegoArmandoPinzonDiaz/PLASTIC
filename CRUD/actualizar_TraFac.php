<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]) && isset($_POST["texto8"]) && isset($_POST["texto9"]) && isset($_POST["texto10"]) && isset($_POST["texto11"]) && isset($_POST["texto12"]) && isset($_POST["texto13"]) && isset($_POST["texto14"]) && isset($_POST["texto15"])  )
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
                  $val10 = $_POST["texto10"];
                  $val11 = $_POST["texto11"];
                  $val12 = $_POST["texto12"];
                  $val13 = $_POST["texto13"];
                  $val14 = $_POST["texto14"];
                  $val15 = $_POST["texto15"];

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //HACER EL INSERT INTO
                        mysqli_select_db($con, 'test');

                        $sql = mysqli_query($con, "SELECT * FROM TRATAMIENTOS WHERE FOLIO = '".$val11."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    $sql = mysqli_query($con, "UPDATE TRATAMIENTOS SET PROD_TOXINA = '".$val."', FECHA_TOXINA = '".$val2."', PROD_RELLENO = '".$val3."', FECHA_RELLENO = '".$val4."' , PROD_HILOS = '".$val5."', FECHA_HILOS = '".$val6."', PROD_PEELING = '".$val7."', FECHA_PEELING = '".$val8."', PROD_RADIO = '".$val9."' , FECHA_RADIO = '".$val10."', PROD_DEPILA = '".$val12."', FECHA_DEPILA = '".$val13."', PROD_OTRO = '".$val14."', FECHA_OTRO = '".$val15."'  WHERE FOLIO = '".$val11."' "); 


                  			if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }
                  
                        }else{ 
                              
                                    $sql = mysqli_query($con, "INSERT INTO TRATAMIENTOS (FOLIO, PROD_TOXINA, FECHA_TOXINA, PROD_RELLENO, FECHA_RELLENO, PROD_HILOS, FECHA_HILOS, PROD_PEELING, FECHA_PEELING, PROD_RADIO, FECHA_RADIO, PROD_DEPILA, FECHA_DEPILA, PROD_OTRO, FECHA_OTRO) VALUES ('$val11','$val','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9','$val12','$val13' ,'$val14' ,'$val15'  )   "); 


                                    if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }


                        }	

                  }	
        
	
      }


?>