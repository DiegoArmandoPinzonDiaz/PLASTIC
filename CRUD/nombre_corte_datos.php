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

                  $cuenta = 0;


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM CONSULTAS INNER JOIN PACIENTES ON CONSULTAS.ID_PACIENTE = PACIENTES.ID_PAC WHERE ID_CONSULTA = '".$val."'  ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                              $ID_CONSULTA = $row['ID_CONSULTA'];  
                                              $FECHA_CONSULTA = $row['FECHA_CONSULTA'];
                                              $FOLIO = $row['FOLIO'];
                                              $NOMBRE = $row['NOMBRE'];
                                              $APELLIDO_1 = $row['APELLIDO_1'];
                                              $APELLIDO_2 = $row['APELLIDO_2'];
                                              $SEL_CIRUGIA = $row['SEL_CIRUGIA'];
                                              $SEL_MEDICINA = $row['SEL_MEDICINA'];
                                              $SEL_SPA = $row['SEL_SPA'];
                                              $NOMBRE_PRODUCTO = $row['NOMBRE_PRODUCTO'];
                                              $DESCRIP_CIRUGIA = $row['DESCRIP_CIRUGIA'];
                                              $DESCRIP_MEDICINA = $row['DESCRIP_MEDICINA'];
                                              $DESCRIP_SPA = $row['DESCRIP_SPA'];
                                              $DESCRIP_PRODUCTO = $row['DESCRIP_PRODUCTO'];

                                              /*$ID_PACIENTE = $row['ID_PACIENTE'];
                                              $FECHA_CONSULTA = $row['FECHA_CONSULTA'];
                                              $SEL_CIRUGIA = $row['SEL_CIRUGIA'];
                                              $SEL_MEDICINA = $row['SEL_MEDICINA'];
                                              $SEL_SPA = $row['SEL_SPA'];
                                              $DESCRIP_CIRUGIA = $row['DESCRIP_CIRUGIA'];
                                              $DESCRIP_MEDICINA = $row['DESCRIP_MEDICINA'];
                                              $DESCRIP_SPA = $row['DESCRIP_SPA'];
                                              $CANTIDAD_PRODUCTO = $row['CANTIDAD_PRODUCTO'];
                                              $NOMBRE_PRODUCTO = $row['NOMBRE_PRODUCTO'];
                                              $TOTAL = $row['TOTAL'];
                                              $DESCRIP_PRODUCTO = $row['DESCRIP_PRODUCTO'];
                                              $TARJETA = $row['TARJETA'];
                                              $ESTADO_TARJETA = $row['ESTADO_TARJETA'];
                                              $FACTURA = $row['FACTURA'];
                                              $COMISION = $row['COMISION'];

                                              $FOLIO = $row['FOLIO'];
                                              $NOMBRE = $row['NOMBRE'];
                                              $APELLIDO_1 = $row['APELLIDO_1'];
                                              $APELLIDO_2 = $row['APELLIDO_2'];

                                              $FECHA_CONSULTA =  date("d/m/Y", strtotime($FECHA_CONSULTA));

                                                                                            
                                              $arrayPHP=array("ID_CONSULTA"=>$ID_CONSULTA,"ID_PACIENTE"=>$ID_PACIENTE,"FECHA_CONSULTA"=>$FECHA_CONSULTA,"FOLIO"=>$FOLIO,"NOMBRE"=>$NOMBRE,"APELLIDO_1"=>$APELLIDO_1,"APELLIDO_2"=>$APELLIDO_2, "SEL_CIRUGIA"=>$SEL_CIRUGIA, "SEL_MEDICINA"=>$SEL_MEDICINA, "SEL_SPA"=>$SEL_SPA, "NOMBRE_PRODUCTO"=>$NOMBRE_PRODUCTO,       "DESCRIP_CIRUGIA"=>$DESCRIP_CIRUGIA, "DESCRIP_MEDICINA"=>$DESCRIP_MEDICINA, "DESCRIP_SPA"=>$DESCRIP_SPA, "DESCRIP_PRODUCTO"=>$DESCRIP_PRODUCT0 );*/

                                              $arrayPHP=array("ID_CONSULTA"=>$ID_CONSULTA,"FECHA_CONSULTA"=>$FECHA_CONSULTA,"FOLIO"=>$FOLIO,"NOMBRE"=>$NOMBRE,"APELLIDO_1"=>$APELLIDO_1,"APELLIDO_2"=>$APELLIDO_2,"SEL_CIRUGIA"=>$SEL_CIRUGIA, "SEL_MEDICINA"=>$SEL_MEDICINA, "SEL_SPA"=>$SEL_SPA, "NOMBRE_PRODUCTO"=>$NOMBRE_PRODUCTO, "DESCRIP_CIRUGIA"=>$DESCRIP_CIRUGIA, "DESCRIP_MEDICINA"=>$DESCRIP_MEDICINA,"DESCRIP_SPA"=>$DESCRIP_SPA, "DESCRIP_PRODUCTO"=>$DESCRIP_PRODUCTO );

                                              echo json_encode($arrayPHP);
                                              
                                        }

                        }else{ echo "NO HAY CONSULTAS"; }                

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