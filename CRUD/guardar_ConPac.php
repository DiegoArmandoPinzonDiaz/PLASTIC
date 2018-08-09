<?php

     if(isset($_POST["texto"]) && isset($_POST["texto1"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]) && isset($_POST["texto8"]) && isset($_POST["texto9"]) && isset($_POST["texto10"]) && isset($_POST["texto11"]) && isset($_POST["texto12"]) && isset($_POST["texto13"]) && isset($_POST["texto14"]) && isset($_POST["texto15"]) && isset($_POST["texto16"]) && isset($_POST["texto17"]) && isset($_POST["texto18"]) && isset($_POST["texto19"]) && isset($_POST["texto20"])  )
      {
            if($_POST["texto"]){
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val = $_POST["texto"];
                  $val1 = $_POST["texto1"];
                  $val2 = $_POST["texto2"];
                  $val3 = $_POST["texto3"];
                  $val4 = $_POST["texto4"];
                  $val5 = $_POST["texto5"];
                  $val6 = $_POST["texto6"];
                  $val7 = $_POST["texto7"];
                  $val8 = $_POST["texto8"];
                  $val9 = $_POST["texto9"];
                  $val10 = $_POST["texto10"];
                  $val11 = $_POST["texto11"];
                  $val12 = $_POST["texto12"];
                  $val13 = $_POST["texto13"];
                  $val14 = $_POST["texto14"];
                  $val15 = $_POST["texto15"];
                  $val16 = $_POST["texto16"];
                  $val17 = $_POST["texto17"];
                  $val18 = $_POST["texto18"];
                  $val19 = $_POST["texto19"];
                  $val20 = $_POST["texto20"];
                  $val21 = $_POST["texto21"];


                  date_default_timezone_set("America/Mexico_City");

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //mysqli_select_db($con, 'test');
                   
                        //$sql = mysqli_query($con, "SELECT * FROM CONSULTAS WHERE ID_PACIENTE = '".$_POST["texto"]."' AND FECHA_CONSULTA = '".$_POST["texto4"]."' ");
                         
                        //$contar = mysqli_num_rows($sql);

                        /*while($row=mysqli_fetch_array($sql)){

                              $ID_PACIENTE = $row['ID_PACIENTE'];
                              $FECHA_CONSULTA = $row['FECHA_CONSULTA'];

                              echo "-".$ID_PACIENTE."-".$FECHA_CONSULTA."-".$_POST["texto4"]."-";
                        }*/

                         
                        //if($contar == 0 || $val14 > 0){

                        	
                              if($val14 > 0){


                                    //Actualizar el stock de los productos al editar un procedimiento
                                    //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                    //SINO ESTO YA NO SIRVE
                                    

                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO INNER JOIN CONSULTAS ON MATERIAL_PROCEDIMIENTO.PROCEDIMIENTO = CONSULTAS.SEL_CIRUGIA WHERE CONSULTAS.ID_CONSULTA = '".$val14."'  ";

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



                                          //-------------------------------------SEL MEDICINA


                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO INNER JOIN CONSULTAS ON MATERIAL_PROCEDIMIENTO.PROCEDIMIENTO = CONSULTAS.SEL_MEDICINA WHERE CONSULTAS.ID_CONSULTA = '".$val14."'  ";

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



                                          //------------------------------------ SEL SPA


                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO INNER JOIN CONSULTAS ON MATERIAL_PROCEDIMIENTO.PROCEDIMIENTO = CONSULTAS.SEL_SPA WHERE CONSULTAS.ID_CONSULTA = '".$val14."'  ";

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

                                          $consulta = "SELECT * FROM  CONSULTAS  WHERE ID_CONSULTA = '".$val14."'  ";

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






                                    //HACER EL INSERT INTO
                                    mysqli_select_db($con, 'test');

                                    $sql = mysqli_query($con, "UPDATE CONSULTAS SET ID_PACIENTE = '".$val."', SEL_CIRUGIA = '".$val1."', SEL_MEDICINA= '".$val2."', SEL_SPA = '".$val3."', FECHA_CONSULTA = '".$val4."',DESCRIP_CIRUGIA= '".$val5."',DESCRIP_MEDICINA= '".$val6."',DESCRIP_SPA= '".$val7."',CANTIDAD_PRODUCTO= '".$val8."',VALOR_PRODUCTO= '".$val9."',NOMBRE_PRODUCTO= '".$val10."',TOTAL= '".$val11."',TOTAL_PRODUCTO= '".$val12."', DESCRIP_PRODUCTO= '".$val13."', TARJETA= '".$val15."', ESTADO_TARJETA= '".$val18."', FACTURA= '".$val16."', COMISION= '".$val17."', EFECTIVO = '".$val19."', TRANSFERENCIA = '".$val20."', SUCURSAL = '".$val21."' WHERE ID_CONSULTA = '".$val14."' "); 

                                    if (!$sql)
                                      {
                                          echo("Error description: " . mysqli_error($con));
                                      }   
                                      echo "REGISTRO GUARDADO";





                                    //Actualizar el stock de los productos
                                    //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                    //SINO ESTO YA NO SIRVE
                                    if($val1 != ""){

                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '$val1' ";

                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){

                                                $CANTIDAD = $row['CANTIDAD'];
                                                $MATERIAL = $row['MATERIAL'];


                                                mysqli_select_db($con, 'test');

                                                $consulta = "UPDATE MATERIALES SET STOCK_ACTUAL= STOCK_ACTUAL-'$CANTIDAD' WHERE MATERIAL='$MATERIAL' "; 

                                                $sql2 = mysqli_query($con, $consulta); 


                                                mysqli_select_db($con, 'test');
                                                $consulta = "SELECT * FROM MATERIALES WHERE MATERIAL='$MATERIAL' "; 
                                                $sql4 = mysqli_query($con, $consulta);  

                                                while($row=mysqli_fetch_array($sql4)){

                                                      $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                      $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                      if( $STOCK_ACTUAL <= $STOCK_MINIMO ){

                                                            mysqli_select_db($con, 'test');

                                                            $consulta = "SELECT * FROM ALERTAS WHERE MOTIVO = '$MATERIAL' ";

                                                            $sql5 = mysqli_query($con, $consulta); 

                                                            $cuenta = mysqli_num_rows($sql5);


                                                            if($cuenta == 0)
                                                            {
                                                                        mysqli_select_db($con, 'test');

                                                                        $FECHAS = date('Y-m-d');
                                                                        //ECHO $FECHAS;

                                                                        $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$FECHAS','$FECHAS','100000','MATERIALES','$MATERIAL','','URGENTE','100000')"); 

                                                                        if (!$sql)
                                                                          {
                                                                              echo("Error description: " . mysqli_error($con));
                                                                          } 
                                                            }


                                                      }

                                                }                                              

                                          } 
                                    }
                                    ///------------------------------------------------------------------------------------------------------------    



                                    //--------------------------------------------MEDICINA ESTETICA------------------------------------//
                                    //Actualizar el stock de los productos
                                    //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                    //SINO ESTO YA NO SIRVE
                                    if($val2 != ""){

                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '$val2' ";

                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){

                                                $CANTIDAD = $row['CANTIDAD'];
                                                $MATERIAL = $row['MATERIAL'];


                                                mysqli_select_db($con, 'test');

                                                $consulta = "UPDATE MATERIALES SET STOCK_ACTUAL= STOCK_ACTUAL-'$CANTIDAD' WHERE MATERIAL='$MATERIAL' "; 

                                                $sql2 = mysqli_query($con, $consulta); 


                                                mysqli_select_db($con, 'test');
                                                $consulta = "SELECT * FROM MATERIALES WHERE MATERIAL='$MATERIAL' "; 
                                                $sql4 = mysqli_query($con, $consulta);  

                                                while($row=mysqli_fetch_array($sql4)){

                                                      $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                      $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                      if( $STOCK_ACTUAL <= $STOCK_MINIMO ){

                                                            mysqli_select_db($con, 'test');

                                                            $consulta = "SELECT * FROM ALERTAS WHERE MOTIVO = '$MATERIAL' ";

                                                            $sql5 = mysqli_query($con, $consulta); 

                                                            $cuenta = mysqli_num_rows($sql5);


                                                            if($cuenta == 0)
                                                            {
                                                                        mysqli_select_db($con, 'test');

                                                                        $FECHAS = date('Y-m-d');
                                                                        //ECHO $FECHAS;

                                                                        $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$FECHAS','$FECHAS','100000','MATERIALES','$MATERIAL','','URGENTE','100000')"); 

                                                                        if (!$sql)
                                                                          {
                                                                              echo("Error description: " . mysqli_error($con));
                                                                          } 
                                                            }


                                                      }

                                                }                                              

                                          } 
                                    }
                                    ///------------------------------------------------------------------------------------------------------------   




                                     //--------------------------------------------SPA------------------------------------//
                                    //Actualizar el stock de los productos
                                    //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                    //SINO ESTO YA NO SIRVE
                                    if($val3 != ""){

                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '$val3' ";

                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){

                                                $CANTIDAD = $row['CANTIDAD'];
                                                $MATERIAL = $row['MATERIAL'];


                                                mysqli_select_db($con, 'test');

                                                $consulta = "UPDATE MATERIALES SET STOCK_ACTUAL= STOCK_ACTUAL-'$CANTIDAD' WHERE MATERIAL='$MATERIAL' "; 

                                                $sql2 = mysqli_query($con, $consulta); 


                                                mysqli_select_db($con, 'test');
                                                $consulta = "SELECT * FROM MATERIALES WHERE MATERIAL='$MATERIAL' "; 
                                                $sql4 = mysqli_query($con, $consulta);  

                                                while($row=mysqli_fetch_array($sql4)){

                                                      $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                      $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                      if( $STOCK_ACTUAL <= $STOCK_MINIMO ){

                                                            mysqli_select_db($con, 'test');

                                                            $consulta = "SELECT * FROM ALERTAS WHERE MOTIVO = '$MATERIAL' ";

                                                            $sql5 = mysqli_query($con, $consulta); 

                                                            $cuenta = mysqli_num_rows($sql5);


                                                            if($cuenta == 0)
                                                            {
                                                                        mysqli_select_db($con, 'test');

                                                                        $FECHAS = date('Y-m-d');
                                                                        //ECHO $FECHAS;

                                                                        $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$FECHAS','$FECHAS','100000','MATERIALES','$MATERIAL','','URGENTE','100000')"); 

                                                                        if (!$sql)
                                                                          {
                                                                              echo("Error description: " . mysqli_error($con));
                                                                          } 
                                                            }


                                                      }

                                                }                                              

                                          } 
                                    }
                                    ///------------------------------------------------------------------------------------------------------------  



                                    //-------------------------------------PRODUCTOS---------------------------
                                    //Actualizar el stock de los productos
                                    //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                    //SINO ESTO YA NO SIRVE
                                    if($val10 != ""){

                                          /*mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM PRODUCTOS WHERE PRODUCTOS = '$val10' ";

                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){*/


                                                mysqli_select_db($con, 'test');

                                                $consulta = "UPDATE PRODUCTOS SET STOCK_ACTUAL = STOCK_ACTUAL-'$val8' WHERE PRODUCTOS='$val10' "; 

                                                $sql2 = mysqli_query($con, $consulta); 


                                                mysqli_select_db($con, 'test');
                                                $consulta = "SELECT * FROM PRODUCTOS WHERE PRODUCTOS='$val10' "; 
                                                $sql4 = mysqli_query($con, $consulta);  

                                                while($row=mysqli_fetch_array($sql4)){

                                                      $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                      $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                      if( $STOCK_ACTUAL <= $STOCK_MINIMO ){

                                                            mysqli_select_db($con, 'test');

                                                            $consulta = "SELECT * FROM ALERTAS WHERE MOTIVO = '$val10' ";

                                                            $sql5 = mysqli_query($con, $consulta); 

                                                            $cuenta = mysqli_num_rows($sql5);


                                                            if($cuenta == 0)
                                                            {
                                                                        mysqli_select_db($con, 'test');

                                                                        $FECHAS = date('Y-m-d');
                                                                        //ECHO $FECHAS;

                                                                        $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$FECHAS','$FECHAS','100000','PRODUCTOS','$val10','','URGENTE','100000')"); 

                                                                        if (!$sql)
                                                                          {
                                                                              echo("Error description: " . mysqli_error($con));
                                                                          } 
                                                            }


                                                      }

                                                }                                              

                                          //} 
                                    }
                                    ///------------------------------------------------------------------------------------------------------------ 









                                          $ID_CONSULTA = $val14;

                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM ALERTAS WHERE FECHA_INIT = '".$val4."' ";
                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){


                                                mysqli_select_db($con, 'test');
                     
                                                $sql = mysqli_query($con, "DELETE FROM ALERTAS WHERE ID_CONSULTA = '".$val14."' ");

                                                if (!$sql)
                                                {
                                                    echo("Error description: " . mysqli_error($con));
                                                } 
                                          }

                                          //$nuevo_string = substr($val1, 1);
                                          //$val1 = $nuevo_string;

                                          $porciones = explode("/", $val1);

                                          for ($i=0; $i < count($porciones); $i++) {  

                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "SELECT * FROM PROCEDIMIENTO_CIRUGIA WHERE PRO = '".$porciones[$i]."' ";
                                                                                     
                                                      $sql2 = mysqli_query($con, $consulta);

                                                      while($row=mysqli_fetch_array($sql2)){

                                                            $DURACION = $row['DURACION'];  
                                                            $DURACION  = $DURACION - 2;                            

                                                            $nuevafecha = date('Y-m-d', strtotime("$val4 + ".$DURACION." day"));

                                                                  //HACER EL INSERT INTO
                                                                  mysqli_select_db($con, 'test');

                                                                  $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$val4','$nuevafecha','$val','PROCEDIMIENTO_CIRUGIA','$porciones[$i]','','URGENTE','$ID_CONSULTA')"); 

                                                                  if (!$sql)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }   
                                                      }                                                     

                                          }

                                          //$nuevo_string = substr($val2, 1);
                                          //$val2 = $nuevo_string;

                                          $porciones = explode("/", $val2);

                                          for ($i=0; $i < count($porciones); $i++) {  

                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "SELECT * FROM MEDICINA_ESTETICA WHERE MEDICINA = '".$porciones[$i]."' ";
                                                                                     
                                                      $sql2 = mysqli_query($con, $consulta);

                                                      while($row=mysqli_fetch_array($sql2)){

                                                            $DURACION = $row['DURACION']; 
                                                            $DURACION  = $DURACION - 2;                             

                                                            $nuevafecha = date('Y-m-d', strtotime("$val4 + ".$DURACION." day"));

                                                                  //HACER EL INSERT INTO
                                                                  mysqli_select_db($con, 'test');

                                                                  $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$val4','$nuevafecha','$val','MEDICINA_ESTETICA','$porciones[$i]','','URGENTE','$ID_CONSULTA')"); 

                                                                  if (!$sql)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }   
                                                      }                                                     

                                          }

                                          //$nuevo_string = substr($val3, 1);
                                          //$val3 = $nuevo_string;

                                          $porciones = explode("/", $val3);

                                          for ($i=0; $i < count($porciones); $i++) {  

                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "SELECT * FROM TRATAMIENTO_SPA WHERE SPA = '".$porciones[$i]."' ";
                                                                                     
                                                      $sql2 = mysqli_query($con, $consulta);

                                                      while($row=mysqli_fetch_array($sql2)){

                                                            $DURACION = $row['DURACION'];  
                                                            $DURACION  = $DURACION - 2;                            

                                                            $nuevafecha = date('Y-m-d', strtotime("$val4 + ".$DURACION." day"));

                                                                  //HACER EL INSERT INTO
                                                                  mysqli_select_db($con, 'test');

                                                                  $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$val4','$nuevafecha','$val','TRATAMIENTO_SPA','$porciones[$i]','','URGENTE','$ID_CONSULTA')"); 

                                                                  if (!$sql)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }   
                                                      }                                                     

                                          }

                                          //$nuevo_string = substr($val10, 1);
                                          //$val10 = $nuevo_string;

                                          $porciones = explode("/", $val10);

                                          for ($i=0; $i < count($porciones); $i++) {  

                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "SELECT * FROM PRODUCTOS WHERE PRODUCTOS = '".$porciones[$i]."' ";
                                                                                     
                                                      $sql2 = mysqli_query($con, $consulta);

                                                      while($row=mysqli_fetch_array($sql2)){

                                                            $DURACION = $row['DURACION'];   
                                                            $DURACION  = $DURACION - 2;                       

                                                            $nuevafecha = date('Y-m-d', strtotime("$val4 + ".$DURACION." day"));

                                                                  //HACER EL INSERT INTO
                                                                  mysqli_select_db($con, 'test');

                                                                  $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$val4','$nuevafecha','$val','PRODUCTOS','$porciones[$i]','','URGENTE','$ID_CONSULTA')"); 

                                                                  if (!$sql)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }   
                                                      }                                                     

                                          }


                               }
                              else{
                                    //HACER EL INSERT INTO
                              	mysqli_select_db($con, 'test');

                              	$sql = mysqli_query($con, "INSERT INTO CONSULTAS (ID_CONSULTA,ID_PACIENTE,SEL_CIRUGIA,SEL_MEDICINA,SEL_SPA,FECHA_CONSULTA,DESCRIP_CIRUGIA,DESCRIP_MEDICINA,DESCRIP_SPA,CANTIDAD_PRODUCTO,VALOR_PRODUCTO,NOMBRE_PRODUCTO,TOTAL,TOTAL_PRODUCTO,DESCRIP_PRODUCTO,TARJETA,ESTADO_TARJETA,FACTURA,COMISION, EFECTIVO, TRANSFERENCIA, SUCURSAL) VALUES (null,'$val','$val1','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9','$val10','$val11','$val12','$val13','$val15', '$val18','$val16','$val17','$val19','$val20','$val21')"); 


                                    //Actualizar el stock de los productos
                                    //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                    //SINO ESTO YA NO SIRVE
                                    if($val1 != ""){

                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '$val1' ";

                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){

                                                $CANTIDAD = $row['CANTIDAD'];
                                                $MATERIAL = $row['MATERIAL'];


                                                mysqli_select_db($con, 'test');

                                                $consulta = "UPDATE MATERIALES SET STOCK_ACTUAL= STOCK_ACTUAL-'$CANTIDAD' WHERE MATERIAL='$MATERIAL' "; 

                                                $sql2 = mysqli_query($con, $consulta); 


                                                mysqli_select_db($con, 'test');
                                                $consulta = "SELECT * FROM MATERIALES WHERE MATERIAL='$MATERIAL' "; 
                                                $sql4 = mysqli_query($con, $consulta);  

                                                while($row=mysqli_fetch_array($sql4)){

                                                      $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                      $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                      if( $STOCK_ACTUAL <= $STOCK_MINIMO ){

                                                            mysqli_select_db($con, 'test');

                                                            $consulta = "SELECT * FROM ALERTAS WHERE MOTIVO = '$MATERIAL' ";

                                                            $sql5 = mysqli_query($con, $consulta); 

                                                            $cuenta = mysqli_num_rows($sql5);


                                                            if($cuenta == 0)
                                                            {
                                                                        mysqli_select_db($con, 'test');

                                                                        $FECHAS = date('Y-m-d');
                                                                        //ECHO $FECHAS;

                                                                        $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$FECHAS','$FECHAS','100000','MATERIALES','$MATERIAL','','URGENTE','100000')"); 

                                                                        if (!$sql)
                                                                          {
                                                                              echo("Error description: " . mysqli_error($con));
                                                                          } 
                                                            }


                                                      }

                                                }                                              

                                          } 
                                    }
                                    ///------------------------------------------------------------------------------------------------------------



                                    //---------------------------------------MEDICINA ESTETICA--------------------------------//
                                    //Actualizar el stock de los productos
                                    //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                    //SINO ESTO YA NO SIRVE
                                    if($val2 != ""){

                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '$val2' ";

                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){

                                                $CANTIDAD = $row['CANTIDAD'];
                                                $MATERIAL = $row['MATERIAL'];


                                                mysqli_select_db($con, 'test');

                                                $consulta = "UPDATE MATERIALES SET STOCK_ACTUAL= STOCK_ACTUAL-'$CANTIDAD' WHERE MATERIAL='$MATERIAL' "; 

                                                $sql2 = mysqli_query($con, $consulta); 


                                                mysqli_select_db($con, 'test');
                                                $consulta = "SELECT * FROM MATERIALES WHERE MATERIAL='$MATERIAL' "; 
                                                $sql4 = mysqli_query($con, $consulta);  

                                                while($row=mysqli_fetch_array($sql4)){

                                                      $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                      $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                      if( $STOCK_ACTUAL <= $STOCK_MINIMO ){

                                                            mysqli_select_db($con, 'test');

                                                            $consulta = "SELECT * FROM ALERTAS WHERE MOTIVO = '$MATERIAL' ";

                                                            $sql5 = mysqli_query($con, $consulta); 

                                                            $cuenta = mysqli_num_rows($sql5);


                                                            if($cuenta == 0)
                                                            {
                                                                        mysqli_select_db($con, 'test');

                                                                        $FECHAS = date('Y-m-d');
                                                                        //ECHO $FECHAS;

                                                                        $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$FECHAS','$FECHAS','100000','MATERIALES','$MATERIAL','','URGENTE','100000')"); 

                                                                        if (!$sql)
                                                                          {
                                                                              echo("Error description: " . mysqli_error($con));
                                                                          } 
                                                            }


                                                      }

                                                }                                              

                                          } 
                                    }
                                    ///------------------------------------------------------------------------------------------------------------




                                     //---------------------------------------SPA--------------------------------//
                                    //Actualizar el stock de los productos
                                    //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                    //SINO ESTO YA NO SIRVE
                                    if($val3 != ""){

                                          mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '$val3' ";

                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){

                                                $CANTIDAD = $row['CANTIDAD'];
                                                $MATERIAL = $row['MATERIAL'];


                                                mysqli_select_db($con, 'test');

                                                $consulta = "UPDATE MATERIALES SET STOCK_ACTUAL= STOCK_ACTUAL-'$CANTIDAD' WHERE MATERIAL='$MATERIAL' "; 

                                                $sql2 = mysqli_query($con, $consulta); 


                                                mysqli_select_db($con, 'test');
                                                $consulta = "SELECT * FROM MATERIALES WHERE MATERIAL='$MATERIAL' "; 
                                                $sql4 = mysqli_query($con, $consulta);  

                                                while($row=mysqli_fetch_array($sql4)){

                                                      $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                      $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                      if( $STOCK_ACTUAL <= $STOCK_MINIMO ){

                                                            mysqli_select_db($con, 'test');

                                                            $consulta = "SELECT * FROM ALERTAS WHERE MOTIVO = '$MATERIAL' ";

                                                            $sql5 = mysqli_query($con, $consulta); 

                                                            $cuenta = mysqli_num_rows($sql5);


                                                            if($cuenta == 0)
                                                            {
                                                                        mysqli_select_db($con, 'test');

                                                                        $FECHAS = date('Y-m-d');
                                                                        //ECHO $FECHAS;

                                                                        $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$FECHAS','$FECHAS','100000','MATERIALES','$MATERIAL','','URGENTE','100000')"); 

                                                                        if (!$sql)
                                                                          {
                                                                              echo("Error description: " . mysqli_error($con));
                                                                          } 
                                                            }


                                                      }

                                                }                                              

                                          } 
                                    }
                                    ///------------------------------------------------------------------------------------------------------------


                                    //-------------------------------------PRODUCTOS---------------------------
                                    //Actualizar el stock de los productos
                                    //PILAS ESTO SOLO APLICA PARA EL CODIGO QUE SOLO SE ALMACENE UN PRODUCTO A LA VEZ
                                    //SINO ESTO YA NO SIRVE
                                    if($val10 != ""){

                                          /*mysqli_select_db($con, 'test');

                                          $consulta = "SELECT * FROM PRODUCTOS WHERE PRODUCTOS = '$val10' ";

                                          $sql3 = mysqli_query($con, $consulta);

                                          while($row=mysqli_fetch_array($sql3)){*/


                                                mysqli_select_db($con, 'test');

                                                $consulta = "UPDATE PRODUCTOS SET STOCK_ACTUAL = STOCK_ACTUAL-'$val8' WHERE PRODUCTOS='$val10' "; 

                                                $sql2 = mysqli_query($con, $consulta); 


                                                mysqli_select_db($con, 'test');
                                                $consulta = "SELECT * FROM PRODUCTOS WHERE PRODUCTOS='$val10' "; 
                                                $sql4 = mysqli_query($con, $consulta);  

                                                while($row=mysqli_fetch_array($sql4)){

                                                      $STOCK_ACTUAL = $row['STOCK_ACTUAL'];
                                                      $STOCK_MINIMO = $row['STOCK_MINIMO'];


                                                      if( $STOCK_ACTUAL <= $STOCK_MINIMO ){

                                                            mysqli_select_db($con, 'test');

                                                            $consulta = "SELECT * FROM ALERTAS WHERE MOTIVO = '$val10' ";

                                                            $sql5 = mysqli_query($con, $consulta); 

                                                            $cuenta = mysqli_num_rows($sql5);


                                                            if($cuenta == 0)
                                                            {
                                                                        mysqli_select_db($con, 'test');

                                                                        $FECHAS = date('Y-m-d');
                                                                        //ECHO $FECHAS;

                                                                        $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$FECHAS','$FECHAS','100000','PRODUCTOS','$val10','','URGENTE','100000')"); 

                                                                        if (!$sql)
                                                                          {
                                                                              echo("Error description: " . mysqli_error($con));
                                                                          } 
                                                            }


                                                      }

                                                }                                              

                                          //} 
                                    }
                                    ///------------------------------------------------------------------------------------------------------------




                              	if (!$sql)
            				  {
            				  	echo("Error description: " . mysqli_error($con));
            				  }	
            				  echo "REGISTRO GUARDADO";


                                    mysqli_select_db($con, 'test');

                                    $consulta = "SELECT ID_CONSULTA FROM CONSULTAS WHERE ID_PACIENTE = '".$val."' AND FECHA_CONSULTA = '".$val4."' AND SEL_CIRUGIA = '".$val1."' AND SEL_MEDICINA = '".$val2."' AND SEL_SPA = '".$val3."' AND NOMBRE_PRODUCTO = '".$val10."' ";

                                    $sql3 = mysqli_query($con, $consulta);

                                    while($row=mysqli_fetch_array($sql3)){

                                          $ID_CONSULTA = $row['ID_CONSULTA']; 

                                    } 




                                          //$nuevo_string = substr($val1, 1);
                                          //$val1 = $nuevo_string;

                                          $porciones = explode("/", $val1);

                                          for ($i=0; $i < count($porciones); $i++) {  

                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "SELECT * FROM PROCEDIMIENTO_CIRUGIA WHERE PRO = '".$porciones[$i]."' ";
                                                                                     
                                                      $sql2 = mysqli_query($con, $consulta);

                                                      while($row=mysqli_fetch_array($sql2)){

                                                            $DURACION = $row['DURACION'];  
                                                            $DURACION  = $DURACION - 2;                            

                                                            $nuevafecha = date('Y-m-d', strtotime("$val4 + ".$DURACION." day"));

                                                                  //HACER EL INSERT INTO
                                                                  mysqli_select_db($con, 'test');

                                                                  $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$val4','$nuevafecha','$val','PROCEDIMIENTO_CIRUGIA','$porciones[$i]','','URGENTE','$ID_CONSULTA')"); 

                                                                  if (!$sql)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }   
                                                      }                                                     

                                          }

                                          //$nuevo_string = substr($val2, 1);
                                          //$val2 = $nuevo_string;

                                          $porciones = explode("/", $val2);

                                          for ($i=0; $i < count($porciones); $i++) {  

                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "SELECT * FROM MEDICINA_ESTETICA WHERE MEDICINA = '".$porciones[$i]."' ";
                                                                                     
                                                      $sql2 = mysqli_query($con, $consulta);

                                                      while($row=mysqli_fetch_array($sql2)){

                                                            $DURACION = $row['DURACION']; 
                                                            $DURACION  = $DURACION - 2;                             

                                                            $nuevafecha = date('Y-m-d', strtotime("$val4 + ".$DURACION." day"));

                                                                  //HACER EL INSERT INTO
                                                                  mysqli_select_db($con, 'test');

                                                                  $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$val4','$nuevafecha','$val','MEDICINA_ESTETICA','$porciones[$i]','','URGENTE','$ID_CONSULTA')"); 

                                                                  if (!$sql)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }   
                                                      }                                                     

                                          }

                                          //$nuevo_string = substr($val3, 1);
                                          //$val3 = $nuevo_string;

                                          $porciones = explode("/", $val3);

                                          for ($i=0; $i < count($porciones); $i++) {  

                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "SELECT * FROM TRATAMIENTO_SPA WHERE SPA = '".$porciones[$i]."' ";
                                                                                     
                                                      $sql2 = mysqli_query($con, $consulta);

                                                      while($row=mysqli_fetch_array($sql2)){

                                                            $DURACION = $row['DURACION'];  
                                                            $DURACION  = $DURACION - 2;                            

                                                            $nuevafecha = date('Y-m-d', strtotime("$val4 + ".$DURACION." day"));

                                                                  //HACER EL INSERT INTO
                                                                  mysqli_select_db($con, 'test');

                                                                  $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$val4','$nuevafecha','$val','TRATAMIENTO_SPA','$porciones[$i]','','URGENTE','$ID_CONSULTA')"); 

                                                                  if (!$sql)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }   
                                                      }                                                     

                                          }

                                          //$nuevo_string = substr($val10, 1);
                                          //$val10 = $nuevo_string;

                                          $porciones = explode("/", $val10);

                                          for ($i=0; $i < count($porciones); $i++) {  

                                                      mysqli_select_db($con, 'test');

                                                      $consulta = "SELECT * FROM PRODUCTOS WHERE PRODUCTOS = '".$porciones[$i]."' ";
                                                                                     
                                                      $sql2 = mysqli_query($con, $consulta);

                                                      while($row=mysqli_fetch_array($sql2)){

                                                            $DURACION = $row['DURACION'];   
                                                            $DURACION  = $DURACION - 2;                       

                                                            $nuevafecha = date('Y-m-d', strtotime("$val4 + ".$DURACION." day"));

                                                                  //HACER EL INSERT INTO
                                                                  mysqli_select_db($con, 'test');

                                                                  $sql = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO,ID_CONSULTA) VALUES (null,'$val4','$nuevafecha','$val','PRODUCTOS','$porciones[$i]','','URGENTE','$ID_CONSULTA')"); 

                                                                  if (!$sql)
                                                                    {
                                                                        echo("Error description: " . mysqli_error($con));
                                                                    }   
                                                      }                                                     

                                          }




                              } 	


							
                        /*}else{
                              echo "ESTA CONSULTA YA EXISTE EN ESTA FECHA.";
                              
                        }*/
                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>