<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) )
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

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM MEDICOS WHERE NOMBRE_MEDICO = '".$_POST["texto"]."'  ");
                         
                        $contar = mysqli_num_rows($sql);
                         
                        if($contar == 0){


                        	//HACER EL INSERT INTO
                        	mysqli_select_db($con, 'test');

                        	$sql = mysqli_query($con, "INSERT INTO MEDICOS (ID_MEDICO, NOMBRE_MEDICO, CEDULA_MEDICO, TELEFONO_MEDICO, FIRMA_MEDICO) VALUES (NULL,'$val','$val2','$val3','$val4')"); 

                        	if (!$sql)
      				  {
      				  	echo("Error description: " . mysqli_error($con));
      				  }	
      				  echo "REGISTRO GUARDADO";				
							
                        }else{
                              echo "EL MEDICO YA EXISTEN";
                              
                        }
                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>