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
                   
                        $sql = mysqli_query($con, "SELECT * FROM CONSULTAS WHERE ID_CONSULTA = '".$val."' ");

                        while($row=mysqli_fetch_array($sql)){

                                          $ID_CONSULTA = $row['ID_CONSULTA'];
                                          $ID_PACIENTE = $row['ID_PACIENTE'];
                                          $FECHA_CONSULTA = $row['FECHA_CONSULTA'];
                                          $SEL_CIRUGIA = $row['SEL_CIRUGIA'];
                                          $SEL_MEDICINA = $row['SEL_MEDICINA'];
                                          $SEL_SPA = $row['SEL_SPA'];
                                          $DESCRIP_CIRUGIA = $row['DESCRIP_CIRUGIA'];
                                          $DESCRIP_MEDICINA = $row['DESCRIP_MEDICINA'];
                                          $DESCRIP_SPA = $row['DESCRIP_SPA'];
                                          $CANTIDAD_PRODUCTO = $row['CANTIDAD_PRODUCTO'];
                                          $VALOR_PRODUCTO = $row['VALOR_PRODUCTO'];
                                          $NOMBRE_PRODUCTO = $row['NOMBRE_PRODUCTO'];
                                          
                                          $TOTAL = $row['TOTAL'];

                                          $TOTAL_PRODUCTO = $row['TOTAL_PRODUCTO'];
                                          $DESCRIP_PRODUCTO = $row['DESCRIP_PRODUCTO'];

                                          $TARJETA = $row['TARJETA'];
                                          $EFECTIVO = $row['EFECTIVO'];
                                          $TRANSFERENCIA = $row['TRANSFERENCIA'];
                                          $FACTURA = $row['FACTURA'];
                                          $COMISION = $row['COMISION'];

                                          $SUCURSAL = $row['SUCURSAL'];

                                          //$FECHA_CONSULTA =  date("m/d/Y", strtotime($FECHA_CONSULTA));
                              

                                          $arrayPHP=array("ID_CONSULTA"=>$ID_CONSULTA,"ID_PACIENTE"=>$ID_PACIENTE,"FECHA_CONSULTA"=>$FECHA_CONSULTA,"SEL_CIRUGIA"=>$SEL_CIRUGIA,"SEL_MEDICINA"=>$SEL_MEDICINA,"SEL_SPA"=>$SEL_SPA,"DESCRIP_CIRUGIA"=>$DESCRIP_CIRUGIA,"DESCRIP_MEDICINA"=>$DESCRIP_MEDICINA,"DESCRIP_SPA"=>$DESCRIP_SPA,"CANTIDAD_PRODUCTO"=>$CANTIDAD_PRODUCTO,"VALOR_PRODUCTO"=>$VALOR_PRODUCTO,"NOMBRE_PRODUCTO"=>$NOMBRE_PRODUCTO,"TOTAL"=>$TOTAL,"TOTAL_PRODUCTO"=>$TOTAL_PRODUCTO,"DESCRIP_PRODUCTO"=>$DESCRIP_PRODUCTO, "TARJETA"=>$TARJETA,"FACTURA"=>$FACTURA,"COMISION"=>$COMISION, "EFECTIVO"=>$EFECTIVO, "TRANSFERENCIA"=>$TRANSFERENCIA, "SUCURSAL"=>$SUCURSAL);

                                echo json_encode($arrayPHP);
                            }

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