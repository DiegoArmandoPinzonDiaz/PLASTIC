<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]))
      {
            if($_POST["texto"] && $_POST["texto2"]){
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



                  date_default_timezone_set("America/Mexico_City");
                  $fecha = date('Y-m-d');

                  //$nuevafecha = date('Y-d-m', strtotime($val4));
                  if($val4 != ""){ 

                        $date = DateTime::createFromFormat('d/m/Y', $val4);
                        $nuevafecha = $date->format('Y-m-d');
                  }
                  else{

                       $nuevafecha = $fecha; 
                  }
                  //$convertedDate= DateTime::createFromFormat('d/m/Y', $start_date)->format('Y-m-d');


                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        

                  	//HACER EL INSERT INTO
                  	mysqli_select_db($con, 'test');

                  	$sql = mysqli_query($con, "INSERT INTO PDF ( ID_PDF, FOLIO, PDF, FECHA, ORDEN) VALUES (null,'$val','$val2','$nuevafecha','$val3')"); 

                  	if (!$sql)
				  {
				  	echo("Error description: " . mysqli_error($con));
				  }	
				  echo "REGISTRO GUARDADO";				
							
                      
                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>