<?php

     if(isset($_POST["texto"]))
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
                   
                        $sql = mysqli_query($con, "SELECT * FROM TRATAMIENTOS WHERE FOLIO = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $PROD_TOXINA = $row['PROD_TOXINA'];
                                          $FECHA_TOXINA = $row['FECHA_TOXINA'];
                                          $PROD_RELLENO = $row['PROD_RELLENO'];
                                          $FECHA_RELLENO = $row['FECHA_RELLENO'];
                                          $PROD_HILOS = $row['PROD_HILOS'];
                                          $FECHA_HILOS = $row['FECHA_HILOS'];
                                          $PROD_PEELING = $row['PROD_PEELING'];
                                          $FECHA_PEELING = $row['FECHA_PEELING'];
                                          $PROD_RADIO = $row['PROD_RADIO'];
                                          $FECHA_RADIO = $row['FECHA_RADIO'];
                                          $PROD_CARBO = $row['PROD_CARBO'];
                                          $FECHA_CARBO = $row['FECHA_CARBO'];
                                          
                                          $PROD_RADIO_CORP = $row['PROD_RADIO_CORP'];

                                          $FECHA_RADIO_CORP = $row['FECHA_RADIO_CORP'];
                                          $PROD_ULTRA = $row['PROD_ULTRA'];

                                          $FECHA_ULTRA = $row['FECHA_ULTRA'];
                                          $PROD_HIDRO = $row['PROD_HIDRO'];
                                          $FECHA_HIDRO = $row['FECHA_HIDRO'];
                                          $PROD_CRIO = $row['PROD_CRIO'];

                                          $FECHA_CRIO = $row['FECHA_CRIO'];


                                          $PROD_DEPILA = $row['PROD_DEPILA'];
                                          $FECHA_DEPILA = $row['FECHA_DEPILA'];
                                          $PROD_OTRO = $row['PROD_OTRO'];
                                          $FECHA_OTRO = $row['FECHA_OTRO'];
                                          $PROD_DEPILA_CORP = $row['PROD_DEPILA_CORP'];
                                          $FECHA_DEPILA_CORP = $row['FECHA_DEPILA_CORP'];
                                          $PROD_OTRO_CORP = $row['PROD_OTRO_CORP'];
                                          $FECHA_OTRO_CORP = $row['FECHA_OTRO_CORP'];


                                          
                                          //echo $nom;
                                          $arrayPHP=array("PROD_TOXINA"=>$PROD_TOXINA, "FECHA_TOXINA"=>$FECHA_TOXINA, "PROD_RELLENO"=>$PROD_RELLENO, "FECHA_RELLENO"=>$FECHA_RELLENO, "PROD_HILOS"=>$PROD_HILOS, "FECHA_HILOS"=>$FECHA_HILOS, "PROD_PEELING"=>$PROD_PEELING, "FECHA_PEELING"=>$FECHA_PEELING, "PROD_RADIO"=>$PROD_RADIO, "FECHA_RADIO"=>$FECHA_RADIO, "PROD_CARBO"=>$PROD_CARBO, "FECHA_CARBO"=>$FECHA_CARBO, "PROD_RADIO_CORP"=>$PROD_RADIO_CORP, "FECHA_RADIO_CORP"=>$FECHA_RADIO_CORP, "PROD_ULTRA"=>$PROD_ULTRA, "FECHA_ULTRA"=>$FECHA_ULTRA, "PROD_HIDRO"=>$PROD_HIDRO, "FECHA_HIDRO"=>$FECHA_HIDRO, "PROD_CRIO"=>$PROD_CRIO, "FECHA_CRIO"=>$FECHA_CRIO, "PROD_DEPILA"=>$PROD_DEPILA, "FECHA_DEPILA"=>$FECHA_DEPILA, "PROD_OTRO"=>$PROD_OTRO, "FECHA_OTRO"=>$FECHA_OTRO, "PROD_DEPILA_CORP"=>$PROD_DEPILA_CORP, "FECHA_DEPILA_CORP"=>$FECHA_DEPILA_CORP, "PROD_OTRO_CORP"=>$PROD_OTRO_CORP, "FECHA_OTRO_CORP"=>$FECHA_OTRO_CORP );  

                                          echo json_encode($arrayPHP);
                                        }

                        }else{ echo "NO HAY CAMPOS"; }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>