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
                                             
                        /*mysqli_select_db($con, 'test');

                        $consulta = "SELECT FECHA_CONSULTA FROM CONSULTAS WHERE ID_CONSULTA = '".$val."' ";
                        $sql3 = mysqli_query($con, $consulta);

                        while($row=mysqli_fetch_array($sql3)){

                              $FECHA_CONSULTA = $row['FECHA_CONSULTA'];
                              //echo "  -".$FECHA_CONSULTA."  -  ";
                              //Borrar las alertas asociadas a la consulta del paciente*/
                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM ALERTAS WHERE ID_CONSULTA = '".$val."' ";
                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){

                                                $ID_ALERTA = $row['ID_ALERTA'];
                                                //echo($ID_ALERTA);
                                                mysqli_select_db($con, 'test');
                     
                                                $sql = mysqli_query($con, "DELETE FROM ALERTAS WHERE ID_CONSULTA = '".$val."' ");

                                                if (!$sql)
                                                {
                                                    echo("Error description: " . mysqli_error($con));
                                                } 
                                          }



                                          //ACTUALIZAR STOCK DE INVENTARIO Y ACTUALIZAR LAS ALERTAS
                                           //Actualizar el stock de los productos al editar un procedimiento
                                          //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                          //SINO ESTO YA NO SIRVE
                                          

                                                mysqli_select_db($con, 'test');

                                                $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO INNER JOIN CONSULTAS ON MATERIAL_PROCEDIMIENTO.PROCEDIMIENTO = CONSULTAS.SEL_CIRUGIA WHERE CONSULTAS.ID_CONSULTA = '".$val."'  ";

                                                $sql3 = mysqli_query($con, $consulta);

                                                while($row=mysqli_fetch_array($sql3)){

                                                      $CANTIDAD = $row['CANTIDAD'];
                                                      $MATERIAL = $row['MATERIAL'];


                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "UPDATE MATERIALES SET STOCK_ACTUAL= STOCK_ACTUAL+'$CANTIDAD' WHERE MATERIAL='$MATERIAL' "; 

                                                      $sql2 = mysqli_query($con, $consulta); 


                                                      mysqli_select_db($con, 'test');
                                                      $consulta = "SELECT * FROM MATERIALES WHERE MATERIAL='$MATERIAL' "; 
                                                      $sql4 = mysqli_query($con, $consulta);  

                                                      while($row=mysqli_fetch_array($sql4)){

                                                            $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                            $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                            if( $STOCK_ACTUAL > $STOCK_MINIMO ){

                                                                  mysqli_select_db($con, 'test');

                                                                  $consulta = "DELETE FROM ALERTAS WHERE MOTIVO = '$MATERIAL' ";

                                                                  $sql5 = mysqli_query($con, $consulta); 

                                                                   if (!$sql5)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }                                                          

                                                            }

                                                      }                                              

                                                } 
                                          
                                          ///------------------------------------------------------------------------------------------------------------

                                          // MEDICINA ESTETICA
                                                //ACTUALIZAR STOCK DE INVENTARIO Y ACTUALIZAR LAS ALERTAS
                                           //Actualizar el stock de los productos al editar un procedimiento
                                          //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                          //SINO ESTO YA NO SIRVE
                                          

                                                mysqli_select_db($con, 'test');

                                                $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO INNER JOIN CONSULTAS ON MATERIAL_PROCEDIMIENTO.PROCEDIMIENTO = CONSULTAS.SEL_MEDICINA WHERE CONSULTAS.ID_CONSULTA = '".$val."'  ";

                                                $sql3 = mysqli_query($con, $consulta);

                                                while($row=mysqli_fetch_array($sql3)){

                                                      $CANTIDAD = $row['CANTIDAD'];
                                                      $MATERIAL = $row['MATERIAL'];


                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "UPDATE MATERIALES SET STOCK_ACTUAL= STOCK_ACTUAL+'$CANTIDAD' WHERE MATERIAL='$MATERIAL' "; 

                                                      $sql2 = mysqli_query($con, $consulta); 


                                                      mysqli_select_db($con, 'test');
                                                      $consulta = "SELECT * FROM MATERIALES WHERE MATERIAL='$MATERIAL' "; 
                                                      $sql4 = mysqli_query($con, $consulta);  

                                                      while($row=mysqli_fetch_array($sql4)){

                                                            $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                            $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                            if( $STOCK_ACTUAL > $STOCK_MINIMO ){

                                                                  mysqli_select_db($con, 'test');

                                                                  $consulta = "DELETE FROM ALERTAS WHERE MOTIVO = '$MATERIAL' ";

                                                                  $sql5 = mysqli_query($con, $consulta); 

                                                                   if (!$sql5)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }                                                          

                                                            }

                                                      }                                              

                                                } 
                                          
                                          ///------------------------------------------------------------------------------------------------------------


                                          // SPA
                                                //ACTUALIZAR STOCK DE INVENTARIO Y ACTUALIZAR LAS ALERTAS
                                           //Actualizar el stock de los productos al editar un procedimiento
                                          //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                          //SINO ESTO YA NO SIRVE
                                          

                                                mysqli_select_db($con, 'test');

                                                $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO INNER JOIN CONSULTAS ON MATERIAL_PROCEDIMIENTO.PROCEDIMIENTO = CONSULTAS.SEL_SPA WHERE CONSULTAS.ID_CONSULTA = '".$val."'  ";

                                                $sql3 = mysqli_query($con, $consulta);

                                                while($row=mysqli_fetch_array($sql3)){

                                                      $CANTIDAD = $row['CANTIDAD'];
                                                      $MATERIAL = $row['MATERIAL'];


                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "UPDATE MATERIALES SET STOCK_ACTUAL= STOCK_ACTUAL+'$CANTIDAD' WHERE MATERIAL='$MATERIAL' "; 

                                                      $sql2 = mysqli_query($con, $consulta); 


                                                      mysqli_select_db($con, 'test');
                                                      $consulta = "SELECT * FROM MATERIALES WHERE MATERIAL='$MATERIAL' "; 
                                                      $sql4 = mysqli_query($con, $consulta);  

                                                      while($row=mysqli_fetch_array($sql4)){

                                                            $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                            $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                            if( $STOCK_ACTUAL > $STOCK_MINIMO ){

                                                                  mysqli_select_db($con, 'test');

                                                                  $consulta = "DELETE FROM ALERTAS WHERE MOTIVO = '$MATERIAL' ";

                                                                  $sql5 = mysqli_query($con, $consulta); 

                                                                   if (!$sql5)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }                                                          

                                                            }

                                                      }                                              

                                                } 
                                          
                                          ///------------------------------------------------------------------------------------------------------------



                                              //------------------------------------ PRODUCTOS


                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM  CONSULTAS  WHERE ID_CONSULTA = '".$val."'  ";

                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){

                                                $NOMBRE_PRODUCTO = $row['NOMBRE_PRODUCTO'];
                                                $CANTIDAD_PRODUCTO = $row['CANTIDAD_PRODUCTO'];


                                                mysqli_select_db($con, 'test');

                                                $consulta = "UPDATE PRODUCTOS SET STOCK_ACTUAL= STOCK_ACTUAL+'$CANTIDAD_PRODUCTO' WHERE PRODUCTOS='$NOMBRE_PRODUCTO' "; 

                                                $sql2 = mysqli_query($con, $consulta); 


                                                mysqli_select_db($con, 'test');
                                                $consulta = "SELECT * FROM PRODUCTOS WHERE PRODUCTOS='$NOMBRE_PRODUCTO' "; 
                                                $sql4 = mysqli_query($con, $consulta);  

                                                while($row=mysqli_fetch_array($sql4)){

                                                      $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                      $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                      if( $STOCK_ACTUAL > $STOCK_MINIMO ){

                                                            mysqli_select_db($con, 'test');

                                                            $consulta = "DELETE FROM ALERTAS WHERE MOTIVO = '$NOMBRE_PRODUCTO' ";

                                                            $sql5 = mysqli_query($con, $consulta); 

                                                             if (!$sql5)
                                                              {
                                                                  echo("Error description: " . mysqli_error($con));
                                                              }                                                          

                                                      }

                                                }                                              

                                          } 

                                    
                                    ///------------------------------------------------------------------------------------------------------------




                        //}

                        mysqli_select_db($con, 'test');
                     
                        $sql = mysqli_query($con, "DELETE FROM CONSULTAS WHERE ID_CONSULTA = '".$val."' ");

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