<?php
 
//Codigo para validar la sesion de entrada//
$prueba = "";

      if(isset($_POST["texto"]) )
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
                       
                            $sql = mysqli_query($con, "SELECT * FROM PACIENTES");   
                             
                            $contar = mysqli_num_rows($sql);  

                            //echo $contar;                   
                            
                            $arrayCompleto = array();

                            while($row=mysqli_fetch_array($sql)){

                                                $NOMBRE = $row['NOMBRE'];
                                                $APELLIDO_1 = $row['APELLIDO_1'];
                                                $APELLIDO_2 = $row['APELLIDO_2'];

                                                //echo $NOMBRE;

                                                $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú");
                                                $permitidas= array ("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;");

                                               /* $NOMBRE2 = utf8_decode($NOMBRE);
                                                $NOMBRE2 = str_replace($no_permitidas, $permitidas ,$NOMBRE2);

                                                /*$APELLIDO_1 = utf8_decode($APELLIDO_1);
                                                $APELLIDO_1 = str_replace($no_permitidas, $permitidas ,$APELLIDO_1);

                                                $APELLIDO_2 = utf8_decode($APELLIDO_2);
                                                $APELLIDO_2 = str_replace($no_permitidas, $permitidas ,$APELLIDO_2);*/

                              $arrayPHP=array($NOMBRE, $APELLIDO_1, $APELLIDO_2 );   
                              //array_push($arrayPHP, array($NOMBRE, $APELLIDO_1, $APELLIDO_2 ));   
                              $arrayCompleto = array_merge($arrayCompleto, $arrayPHP);                 


                            }

                            echo json_encode($arrayCompleto); 

                      }

            }else{
                  echo "He recibido un campo vacio";
            }
      }
    
?>