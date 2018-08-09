<?php


error_reporting(E_ALL);
ini_set('display_errors', '1');

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
                              
                        $sql = mysqli_query($con, " UPDATE DIAGNOSTICO SET ESTUDIO_DIAGNOSTICO = '".$val2."', FECHA_DIAGNOSTICO = '".$val3."'  WHERE ID_DIAGNOSTICO = '".$val."' "); 

                        /*if($sql){ echo "REGISTRO GUARDADO";}
                        else{ echo "Error: ".mysqli_error($con); }*/


                  }    
	
      }


?>