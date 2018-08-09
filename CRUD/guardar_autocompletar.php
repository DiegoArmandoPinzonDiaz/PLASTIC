<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]))
      {
           // if($_POST["texto"] && $_POST["texto2"]){
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


                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        

                  	//HACER EL INSERT INTO
                  	mysqli_select_db($con, 'test');

                  	$sql = mysqli_query($con, "INSERT INTO AUTOCOMPLETAR ( DIAGNOSTICO, MOTIVO, QUIEN, PA, TRATAMIENTO, UNIDAD_MEDICA, LUGAR) VALUES ('$val','$val2','$val3','$val4','$val5','$val6','$val7')"); 

                  	if (!$sql)
				  {
				  	echo("Error description: " . mysqli_error($con));
				  }	
				  echo "REGISTRO GUARDADO";				
							
                      
                  }

           /* }
            else{
                  echo "He recibido un campo vacio";
            }	*/
      }

?>