<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) )
      {
            
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val = $_POST["texto"];
                  $val2 = $_POST["texto2"];


                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //HACER EL INSERT INTO
                        mysqli_select_db($con, 'test');

                        $sql = mysqli_query($con, "SELECT * FROM CONSULTAS WHERE ID_CONSULTA = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    $sql = mysqli_query($con, "UPDATE CONSULTAS SET ESTADO_TARJETA = '".$val2."' WHERE ID_CONSULTA = '".$val."' "); 


                  			if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }
                  
                        }	

                  }	
	     
	
      }


?>