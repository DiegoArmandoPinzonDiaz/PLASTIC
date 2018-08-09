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
                    
                            $sql = mysqli_query($con, "SELECT * FROM CLINICA");   
                             
                            $contar = mysqli_num_rows($sql);

                            if($contar != 0){

                                  while($row=mysqli_fetch_array($sql)){
                                                        $ID_CLINICA = $row['ID_CLINICA'];
                                                        $NOMBRE_CLI = $row['NOMBRE_CLI'];
                                                        $DIRECCION_CLI = $row['DIRECCION_CLI'];
                                                        $REFERENCIA_CLI = $row['REFERENCIA_CLI'];

                                                      

                                                        echo "<option value=".$ID_CLINICA."  >".$NOMBRE_CLI."</option>";
                                      } 

                            }

                      }

            }else{
                  echo "He recibido un campo vacio";
                }
            
      }
    
?>