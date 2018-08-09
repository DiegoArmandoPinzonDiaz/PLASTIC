<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) )
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

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');

                        $consulta = "SELECT * FROM CONSULTAS INNER JOIN PACIENTES ON CONSULTAS.ID_PACIENTE = PACIENTES.ID_PAC WHERE";


                        if($val3 == "PROCEDIMIENTO_CIRUGIA"){ $consulta = $consulta." CONSULTAS.SEL_CIRUGIA != '' AND"; }
                        else if($val3 == "MEDICINA_ESTETICA"){ $consulta = $consulta." CONSULTAS.SEL_MEDICINA != '' AND"; }
                        else if($val3 == "TRATAMIENTO_SPA"){ $consulta = $consulta." CONSULTAS.SEL_SPA != '' AND"; }
                        else if($val3 == "PRODUCTOS"){ $consulta = $consulta." CONSULTAS.NOMBRE_PRODUCTO != '' AND"; }
                        else { $consulta = $consulta.""; }


                        if($val4 == "EFECTIVO"){ $consulta = $consulta." CONSULTAS.EFECTIVO = '1' AND"; }
                        else if($val4 == "TRANSFERENCIA"){ $consulta = $consulta." CONSULTAS.TRANSFERENCIA = '1' AND"; }
                        else if($val4 == "TARJETA"){ $consulta = $consulta." CONSULTAS.TARJETA = '1' AND"; }
                        else { $consulta = $consulta.""; }


                        if($val5 == "SI"){ $consulta = $consulta." CONSULTAS.FACTURA = '1' AND"; }
                        else if($val5 == "NO"){ $consulta = $consulta." CONSULTAS.FACTURA = '0' AND"; }
                        else { $consulta = $consulta.""; }

                        if($val6 == "ROMA SUR"){ $consulta = $consulta." CONSULTAS.SUCURSAL = 'ROMA SUR' AND"; }
                        else if($val6 == "HOSPITAL METROPOLITANO"){ $consulta = $consulta." CONSULTAS.SUCURSAL = 'HOSPITAL METROPOLITANO' AND"; }
                        else { $consulta = $consulta.""; }


                        $consulta = $consulta." CONSULTAS.FECHA_CONSULTA BETWEEN '".$val."' AND '".$val2."' ORDER BY FECHA_CONSULTA ASC ";
                   
                        /*$sql = mysqli_query($con, "SELECT * FROM CONSULTAS INNER JOIN PACIENTES ON CONSULTAS.ID_PACIENTE = PACIENTES.ID_PAC WHERE ALERTAS.ESTADO = '".$val4."' AND ALERTAS.INVENTARIO = '".$val3."' AND ALERTAS.FECHA_ALERTA BETWEEN '".$val."' AND '".$val2."'   ORDER BY FECHA_CONSULTA ASC ");*/

                        $sql = mysqli_query($con, $consulta);

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

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
                                              $NOMBRE_PRODUCTO = $row['NOMBRE_PRODUCTO'];
                                              $TOTAL = $row['TOTAL'];
                                              $DESCRIP_PRODUCTO = $row['DESCRIP_PRODUCTO'];
                                              $TARJETA = $row['TARJETA'];
                                              $EFECTIVO = $row['EFECTIVO'];
                                              $TRANSFERENCIA = $row['TRANSFERENCIA'];
                                              $ESTADO_TARJETA = $row['ESTADO_TARJETA'];
                                              $FACTURA = $row['FACTURA'];
                                              $COMISION = $row['COMISION'];

                                              $SUCURSAL = $row['SUCURSAL'];

                                              $FOLIO = $row['FOLIO'];
                                              $NOMBRE = $row['NOMBRE'];
                                              $APELLIDO_1 = $row['APELLIDO_1'];
                                              $APELLIDO_2 = $row['APELLIDO_2'];
                                              $TELEFONO = $row['TELEFONO'];
                                              
                                              $CELULAR = $row['CELULAR'];

                                              $E_MAIL = $row['E_MAIL'];

                                              $FECHA_CONSULTA =  date("d/m/Y", strtotime($FECHA_CONSULTA));

                                              $color = array(  
                                                  '1' => '#FFCCD4',  
                                                  '0' => '#fff', 
                                              );

                                              $letra = array(

                                                  'PENDIENTE' => 'bold',  
                                                  'COMPLETO' => 'normal',  
                                                  '' => 'normal',

                                              );  

                                              $PAGO = array(  
                                                  '1' => 'SI',  
                                                  '0' => ' ', 
                                              ); 

                                              
                                              echo "<tr style='background-color: ".$color[$FACTURA]."; font-weight: ".$letra[$ESTADO_TARJETA].";'>
                                              <td>".$FOLIO."</td><td>".$FECHA_CONSULTA."</td><td>".$NOMBRE." ".$APELLIDO_1." ".$APELLIDO_2."</td><td>".$CELULAR."</td>";

                                              if($SEL_CIRUGIA != ""){

                                                    echo "<td>PROCEDIMIENTO_CIRUGIA</td><td>".$SEL_CIRUGIA."</td><td>".$DESCRIP_CIRUGIA."</td>";
                                              }
                                              else if($SEL_MEDICINA != ""){

                                                    echo "<td>MEDICINA_ESTETICA</td><td>".$SEL_MEDICINA."</td><td>".$DESCRIP_MEDICINA."</td>";
                                              }
                                              else if($SEL_SPA != ""){

                                                    echo "<td>TRATAMIENTO_SPA</td><td>".$SEL_SPA."</td><td>".$DESCRIP_SPA."</td>";
                                              }
                                              else if($NOMBRE_PRODUCTO != ""){

                                                    echo "<td>PRODUCTOS</td><td>".$NOMBRE_PRODUCTO."</td><td>".$DESCRIP_PRODUCTO."</td>";
                                              }

                                              echo "<td>".$PAGO[$EFECTIVO]."</td><td>".$PAGO[$TRANSFERENCIA]."</td><td>".$PAGO[$TARJETA]."</td><td>".$PAGO[$FACTURA]."</td><td>".$COMISION."</td><td>".$SUCURSAL."</td><td>$".$TOTAL."</td>";
                                                                  
                                                                ECHO"<td>";
                                                                      
                                               if ($ESTADO_TARJETA == 'PENDIENTE') {

                                                                    echo "<button type='button' class='btn btn_ac1' onclick='editar_corte( ".$ID_CONSULTA." )' ><i class='glyphicon glyphicon-pencil'></i> EDITAR</button>";
                                                                  }
                                              echo "</td></tr>";
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