<?php
 
//Codigo para validar la sesion de entrada//


      if(isset($_POST["texto"]) && isset($_POST["texto2"]))
      {
            if($_POST["texto"]){
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM PERSONAL WHERE E_MAIL = '".$_POST["texto"]."'  AND  PASS = '".$_POST["texto2"]."' ");
                         
                        $contar = mysqli_num_rows($sql);
                         
                        if($contar == 0){
                              echo "Su correo o contraseña son incorrectas";

                        }else{
                              echo "DATOS VALIDOS";
                              session_start(); 
                              $_SESSION["var_sesion"] = $_POST["texto"]; 
                              $_SESSION["autenticado"]= "SI";
                              $_SESSION['tiempo']=time();
                        }
                  }


            }
            else{
                  echo "He recibido un campo vacio";
            }
      }
 

?>