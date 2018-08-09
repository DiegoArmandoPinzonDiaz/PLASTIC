<?php

     if(isset($_POST["texto"])   )
      {
            if($_POST["texto"]){
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val = $_POST["texto"];


                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{


                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '".$val."' ");

                        $contar = mysqli_num_rows($sql);

                        if($contar > 0){

                              $sql = mysqli_query($con, "DELETE FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '".$val."' ");
                        }						 		
							
                        
                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>