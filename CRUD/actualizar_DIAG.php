<?php

     if(isset($_POST["texto"]) )
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

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //HACER EL INSERT INTO
                        mysqli_select_db($con, 'test');                        
                              
                        $sql = mysqli_query($con, "INSERT INTO DIAGNOSTICO (ID_DIAGNOSTICO, FECHA_DIAGNOSTICO, ESTUDIO_DIAGNOSTICO, FOLIO_DIAGNOSTICO) VALUES (NULL,'$val2','$val3','$val') "); 

                        if($sql){ echo "REGISTRO GUARDADO";}
                        else{ echo "Error: ".mysqli_error($con); }


                  }    
	
      }


?>