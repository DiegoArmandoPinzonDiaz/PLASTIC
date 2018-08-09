<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]))
      {
            if($_POST["texto"]){
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
                  $val10 = $_POST["texto10"];

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM MEDICINA_ESTETICA WHERE IMAGEN = '".$_POST["texto6"]."' ");
                         
                        $contar = mysqli_num_rows($sql);
                         
                        if($contar == 0){

                                    if($val6 != "YA EXISTE"){
                                          $sql = mysqli_query($con, "SELECT IMAGEN FROM MEDICINA_ESTETICA WHERE ID_MED = '".$val5."' ");

                                          while($row=mysqli_fetch_array($sql)){
                                            $imagen = $row['IMAGEN'];
                                          }

                                          if($imagen != ""){
                                                $ruta = "../imgProductos/medicina/".$imagen;
                                                //echo $ruta;
                                                unlink($ruta);
                                          }

                                          //HACER EL INSERT INTO
                                          mysqli_select_db($con, 'test');

                                          $sql = mysqli_query($con, "UPDATE MEDICINA_ESTETICA SET MEDICINA = '".$val."', VALOR = '".$val2."', TIEMPO = '".$val3."', DURACION = '".$val4."' , IMAGEN = '".$val6."', VALOR_EFECTIVO = '".$val7."', RIESGOS = '".$val8."', TECNICA = '".$val9."', INDICACIONES = '".$val10."' WHERE ID_MED = '".$val5."' "); 
                                    }else{

                                                                                    //HACER EL INSERT INTO
                                          mysqli_select_db($con, 'test');

                                          $sql = mysqli_query($con, "UPDATE MEDICINA_ESTETICA SET MEDICINA = '".$val."', VALOR = '".$val2."', TIEMPO = '".$val3."', DURACION = '".$val4."', VALOR_EFECTIVO = '".$val7."', RIESGOS = '".$val8."', TECNICA = '".$val9."', INDICACIONES = '".$val10."' WHERE ID_MED = '".$val5."' "); 

                                    }



                                    if (!$sql)
                                                  {
                                                      echo("Error description: " . mysqli_error($con));
                                                  }   
                                    echo "REGISTRO GUARDADO";

                        }else{
                              echo "ESTA IMAGEN YA EXISTE";
                              
                        }                       
                                          
                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }     
      }

?>