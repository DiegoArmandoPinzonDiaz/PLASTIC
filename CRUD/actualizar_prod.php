<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]) && isset($_POST["texto8"]))
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


                  date_default_timezone_set("America/Mexico_City");

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM PRODUCTOS WHERE IMAGEN = '".$_POST["texto6"]."' ");
                         
                        $contar = mysqli_num_rows($sql);
                         
                        if($contar == 0){

                                    if($val6 != "YA EXISTE"){
                                          $sql = mysqli_query($con, "SELECT IMAGEN FROM PRODUCTOS WHERE ID_PRODUCTOS = '".$val5."' ");

                                          while($row=mysqli_fetch_array($sql)){
                                            $imagen = $row['IMAGEN'];
                                          }

                                          if($imagen != ""){
                                                $ruta = "../imgProductos/productos/".$imagen;
                                                //echo $ruta;
                                                unlink($ruta);
                                          }

                                          //HACER EL INSERT INTO
                                          mysqli_select_db($con, 'test');

                                          $sql = mysqli_query($con, "UPDATE PRODUCTOS SET PRODUCTOS = '".$val."', VALOR = '".$val2."', MARCA = '".$val3."', DURACION = '".$val4."' , IMAGEN = '".$val6."',  STOCK_ACTUAL = '".$val7."', STOCK_MINIMO = '".$val8."' WHERE ID_PRODUCTOS = '".$val5."' "); 
                                    }else{

                                                                                    //HACER EL INSERT INTO
                                          mysqli_select_db($con, 'test');

                                          $sql = mysqli_query($con, "UPDATE PRODUCTOS SET PRODUCTOS = '".$val."', VALOR = '".$val2."', MARCA = '".$val3."', DURACION = '".$val4."',  STOCK_ACTUAL = '".$val7."', STOCK_MINIMO = '".$val8."' WHERE ID_PRODUCTOS = '".$val5."' "); 

                                    }



                                     //actualizar alertas con el stock del producto

                                  $sql3 = mysqli_query($con, "SELECT * FROM PRODUCTOS WHERE PRODUCTOS = '".$val."' ");

                                    while ($row=mysqli_fetch_array($sql3)) {

                                          $STOCK_ACTUAL =$row['STOCK_ACTUAL'];
                                          $STOCK_MINIMO =$row['STOCK_MINIMO'];


                                          if( $STOCK_ACTUAL > $STOCK_MINIMO){

                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "DELETE FROM ALERTAS WHERE MOTIVO = '".$val."' ";

                                                      $sql5 = mysqli_query($con, $consulta); 

                                                     if (!$sql5)
                                                      {
                                                          echo("Error description: " . mysqli_error($con));
                                                      } 

                                          }else{

                                                      mysqli_select_db($con, 'test');

                                                      $FECHAS = date('Y-m-d');
                                                      //ECHO $FECHAS;

                                                      $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$FECHAS','$FECHAS','100000','PRODUCTOS','$val','','URGENTE','100000')"); 

                                                      if (!$sql)
                                                        {
                                                            echo("Error description: " . mysqli_error($con));
                                                        } 
                                             }
                                    } 

                          //----------------------------------------------------------------------------------     





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