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
                  $val4 = $_POST["texto4"];
                  $val5 = $_POST["texto5"];
                  $val6 = $_POST["texto6"];
                  $val7 = $_POST["texto7"];
                  $val8 = $_POST["texto8"];
                  $val9 = $_POST["texto9"];

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //HACER EL INSERT INTO
                        mysqli_select_db($con, 'test');

                        $sql = mysqli_query($con, "SELECT * FROM LABORATORIOS WHERE ID_LAB = '".$val9."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    $sql = mysqli_query($con, "UPDATE LABORATORIOS SET FECHA_LAB = '".$val2."', TIROIDEO1 = '".$val3."', TIROIDEO2 = '".$val4."', TIROIDEO3 = '".$val5."', TIROIDEO4 = '".$val6."', TIROIDEO5 = '".$val7."', TIROIDEO6 = '".$val8."'  WHERE ID_LAB = '".$val9."' "); 


                  			if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }
                  
                        }	

                  }    
	
      }


?>