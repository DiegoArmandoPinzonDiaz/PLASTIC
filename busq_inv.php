
<?php
 
//Codigo para validar la sesion de entrada//
$prueba = "";

      if(isset($_POST["texto"]) && isset($_POST["texto2"]))
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
                       
                            if($_POST["texto"] == "1"){   $sql = mysqli_query($con, "SELECT * FROM PROCEDIMIENTO_CIRUGIA WHERE PRO LIKE '%".$_POST["texto2"]."%' ORDER BY PRO ASC ");  }
                            elseif ($_POST["texto"] == "2") {   $sql = mysqli_query($con, "SELECT * FROM TRATAMIENTO_SPA WHERE SPA LIKE '%".$_POST["texto2"]."%' ORDER BY SPA ASC "); }
                            elseif ($_POST["texto"] == "3") {   $sql = mysqli_query($con, "SELECT * FROM MEDICINA_ESTETICA WHERE MEDICINA LIKE '%".$_POST["texto2"]."%' ORDER BY MEDICINA ASC "); }
                            elseif ($_POST["texto"] == "4") {   $sql = mysqli_query($con, "SELECT * FROM PRODUCTOS WHERE PRODUCTOS LIKE '%".$_POST["texto2"]."%' ORDER BY PRODUCTOS ASC ");  }
                            elseif ($_POST["texto"] == "6") {   $sql = mysqli_query($con, "SELECT * FROM MEDICOS WHERE NOMBRE_MEDICO LIKE '%".$_POST["texto2"]."%' ORDER BY NOMBRE_MEDICO ASC ");  }
                            elseif ($_POST["texto"] == "7") {   $sql = mysqli_query($con, "SELECT * FROM MEDICAMENTOS WHERE NOMBRE_GEN LIKE '%".$_POST["texto2"]."%' OR NOMBRE_COM LIKE '%".$_POST["texto2"]."%' ORDER BY NOMBRE_GEN ASC ");  }
                            elseif ($_POST["texto"] == "8") {   $sql = mysqli_query($con, "SELECT * FROM CLINICA WHERE NOMBRE_CLI LIKE '%".$_POST["texto2"]."%' ORDER BY NOMBRE_CLI ASC ");  }
                            else{  $sql = mysqli_query($con, "SELECT * FROM MATERIALES WHERE MATERIAL LIKE '%".$_POST["texto2"]."%' ORDER BY MATERIAL ASC ");   }
                             
                            $contar = mysqli_num_rows($sql);
                             
                            if($contar == 0){
                                  //echo "Su correo o contraseña son incorrectas";

                            }else{

                                  if($_POST["texto"] == "1"){

                                          while($row=mysqli_fetch_array($sql)){
                                                              $id = $row['ID_PRO'];
                                                              $nombre = $row['PRO'];
                                                              $valor = $row['VALOR'];
                                                              $tiempo = $row['TIEMPO'];
                                                              $duracion = $row['DURACION'];
                                                              $imagen = $row['IMAGEN'];

                                                              $valor_efectivo = $row['VALOR_EFECTIVO'];
                                                              $riesgos = $row['RIESGOS'];
                                                              $tecnica = $row['TECNICA'];
                                                              $indicaciones = $row['INDICACIONES'];

                                                              $costo_opc1 = $row['COSTO_OPC1'];
                                                              $costo_opc2 = $row['COSTO_OPC2'];
                                                              $costo_opc3 = $row['COSTO_OPC3'];
                                                              $incluye = $row['INCLUYE'];

                                                            /*  //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                              echo "<tr><td>".$id."</td><td>".$nombre."</td><td>$".$valor."</td><td>$".$valor_efectivo."</td><td>".$tiempo."</td><td>".$duracion."</td><td>".$riesgos."</td><td>".$tecnica."</td><td>".$indicaciones."</td><td width='150px' height='150px'><img src='./imgProductos/procedimientos/".$imagen."' width='100%' height='100%'></td>
                                                              <td>";*/

                                                              echo "<tr><td>".$nombre."</td><td>$".$valor."</td><td>$".$valor_efectivo."</td><td>".$tiempo."</td><td>".$duracion."</td><td>".$riesgos."</td><td>".$tecnica."</td><td>".$indicaciones."</td><td width='150px' height='150px'><img src='./imgProductos/procedimientos/".$imagen."' width='100%' height='100%'></td>
                                                              <td>";


                                                                  mysqli_select_db($con, 'test');
                   
                                                                  $sql2 = mysqli_query($con, "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '".$nombre."' ");

                                                                  $materiales="";

                                                                  while($row2=mysqli_fetch_array($sql2)){
                                                                      $cantidad = $row2['CANTIDAD'];
                                                                      $material = $row2['MATERIAL'];

                                                                      $materiales=$materiales." ".$cantidad." - ".$material."</br>";

                                                                    }


                                                              echo $materiales;



                                                              echo "</td><td>$".$costo_opc1."</td><td>$".$costo_opc2."</td><td>$".$costo_opc3."</td><td>".$incluye."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_pro( ".$id.",".$valor.",".$tiempo.",".$duracion." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_pro( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";

                                          }
                                          
                                  }elseif ($_POST["texto"] == "2") {

                                          while($row=mysqli_fetch_array($sql)){
                                                              $id = $row['ID_SPA'];
                                                              $nombre = $row['SPA'];
                                                              $valor = $row['VALOR'];
                                                              $tiempo = $row['TIEMPO'];
                                                              $duracion = $row['DURACION'];
                                                              $imagen = $row['IMAGEN'];

                                                              $valor_efectivo = $row['VALOR_EFECTIVO'];
                                                              $riesgos = $row['RIESGOS'];
                                                              $tecnica = $row['TECNICA'];
                                                              $indicaciones = $row['INDICACIONES'];

                                                              //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                              /*echo "<tr><td>".$id."</td><td>".$nombre."</td><td>$".$valor."</td><td>$".$valor_efectivo."</td><td>".$tiempo."</td><td>".$duracion."</td><td>".$riesgos."</td><td>".$tecnica."</td><td>".$indicaciones."</td><td width='150px' height='150px'><img src='./imgProductos/spa/".$imagen."' width='100%' height='100%'></td>
                                                              <td>";*/

                                                              echo "<tr><td>".$nombre."</td><td>$".$valor."</td><td>$".$valor_efectivo."</td><td>".$tiempo."</td><td>".$duracion."</td><td>".$riesgos."</td><td>".$tecnica."</td><td>".$indicaciones."</td><td width='150px' height='150px'><img src='./imgProductos/spa/".$imagen."' width='100%' height='100%'></td>
                                                              <td>";


                                                               mysqli_select_db($con, 'test');
                   
                                                                  $sql2 = mysqli_query($con, "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '".$nombre."' ");

                                                                  $materiales="";

                                                                  while($row2=mysqli_fetch_array($sql2)){
                                                                      $cantidad = $row2['CANTIDAD'];
                                                                      $material = $row2['MATERIAL'];

                                                                      $materiales=$materiales." ".$cantidad." - ".$material."</br>";

                                                                    }


                                                              echo $materiales;






                                                              echo "</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_spa( ".$id.",".$valor.",".$tiempo.",".$duracion." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_spa( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          
                                  }elseif ($_POST["texto"] == "3") {

                                          while($row=mysqli_fetch_array($sql)){
                                                              $id = $row['ID_MED'];
                                                              $nombre = $row['MEDICINA'];
                                                              $valor = $row['VALOR'];
                                                              $tiempo = $row['TIEMPO'];
                                                              $duracion = $row['DURACION'];
                                                              $imagen = $row['IMAGEN'];

                                                              $valor_efectivo = $row['VALOR_EFECTIVO'];
                                                              $riesgos = $row['RIESGOS'];
                                                              $tecnica = $row['TECNICA'];
                                                              $indicaciones = $row['INDICACIONES'];

                                                              //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                             /* echo "<tr><td>".$id."</td><td>".$nombre."</td><td>$".$valor."</td><td>$".$valor_efectivo."</td><td>".$tiempo."</td><td>".$duracion."</td><td>".$riesgos."</td><td>".$tecnica."</td><td>".$indicaciones."</td><td width='150px' height='150px'><img src='./imgProductos/medicina/".$imagen."' width='100%' height='100%'></td>
                                                              <td>";*/

                                                              echo "<tr><td>".$nombre."</td><td>$".$valor."</td><td>$".$valor_efectivo."</td><td>".$tiempo."</td><td>".$duracion."</td><td>".$riesgos."</td><td>".$tecnica."</td><td>".$indicaciones."</td><td width='150px' height='150px'><img src='./imgProductos/medicina/".$imagen."' width='100%' height='100%'></td>
                                                              <td>";


                                                              mysqli_select_db($con, 'test');
                   
                                                                  $sql2 = mysqli_query($con, "SELECT * FROM MATERIAL_PROCEDIMIENTO WHERE PROCEDIMIENTO = '".$nombre."' ");

                                                                  $materiales="";

                                                                  while($row2=mysqli_fetch_array($sql2)){
                                                                      $cantidad = $row2['CANTIDAD'];
                                                                      $material = $row2['MATERIAL'];

                                                                      $materiales=$materiales." ".$cantidad." - ".$material."</br>";

                                                                    }


                                                              echo $materiales;



                                                              echo "</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_med( ".$id.",".$valor.",".$tiempo.",".$duracion." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_med( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          
                                  }elseif ($_POST["texto"] == "4") {

                                          while($row=mysqli_fetch_array($sql)){
                                                              $id = $row['ID_PRODUCTOS'];
                                                              $nombre = $row['PRODUCTOS'];
                                                              $valor = $row['VALOR'];
                                                              $marca = $row['MARCA'];
                                                              $duracion = $row['DURACION'];
                                                              $imagen = $row['IMAGEN'];
                                                              $actual = $row['STOCK_ACTUAL'];
                                                              $minimo = $row['STOCK_MINIMO'];
                                                              //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                             /* echo "<tr><td>".$id."</td><td>".$nombre."</td><td>$".$valor."</td><td>".$marca."</td><td>".$duracion."</td><td width='150px' height='150px'><img src='./imgProductos/productos/".$imagen."' width='100%' height='100%'></td>
                                                              <td>".$actual."</td>
                                                              <td>".$minimo."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_prod( ".$id.",".$valor.",".$duracion.",".$actual.",".$minimo." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_prod( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";*/

                                                              echo "<tr><td>".$nombre."</td><td>$".$valor."</td><td>".$marca."</td><td>".$duracion."</td><td width='150px' height='150px'><img src='./imgProductos/productos/".$imagen."' width='100%' height='100%'></td>
                                                              <td>".$actual."</td>
                                                              <td>".$minimo."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_prod( ".$id.",".$valor.",".$duracion.",".$actual.",".$minimo." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_prod( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          
                                  }elseif ($_POST["texto"] == "6") {

                                          while($row=mysqli_fetch_array($sql)){
                                                              $id = $row['ID_MEDICO'];
                                                              $nombre = $row['NOMBRE_MEDICO'];
                                                              $cedula = $row['CEDULA_MEDICO'];
                                                              $telefono = $row['TELEFONO_MEDICO'];
                                                              $firma = $row['FIRMA_MEDICO'];
                                                              //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                             /* echo "<tr><td>".$id."</td><td>".$nombre."</td><td>$".$valor."</td><td>".$marca."</td><td>".$duracion."</td><td width='150px' height='150px'><img src='./imgProductos/productos/".$imagen."' width='100%' height='100%'></td>
                                                              <td>".$actual."</td>
                                                              <td>".$minimo."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_prod( ".$id.",".$valor.",".$duracion.",".$actual.",".$minimo." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_prod( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";*/

                                                              echo "<tr><td>".$nombre."</td><td>".$cedula."</td><td>".$telefono."</td><td width='250px' height='200px'><img src='./firmas/".$firma."' width='100%' height='100%'></td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_medico( ".$id." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_medico( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          
                                  }elseif ($_POST["texto"] == "7") {

                                          while($row=mysqli_fetch_array($sql)){
                                                              $ID_MEDICAMENTO = $row['ID_MEDICAMENTO'];
                                                              $NOMBRE_GEN = $row['NOMBRE_GEN'];
                                                              $NOMBRE_COM = $row['NOMBRE_COM'];
                                                              $POSOLOGIA = $row['POSOLOGIA'];
                                                              $PRESENTACION = $row['PRESENTACION'];
                                                              $VIA = $row['VIA'];
                                                              $DOSIS = $row['DOSIS'];
                                                              $HORARIO = $row['HORARIO'];
                                                              $TIEMPO = $row['TIEMPO'];
                                                              //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                             /* echo "<tr><td>".$id."</td><td>".$nombre."</td><td>$".$valor."</td><td>".$marca."</td><td>".$duracion."</td><td width='150px' height='150px'><img src='./imgProductos/productos/".$imagen."' width='100%' height='100%'></td>
                                                              <td>".$actual."</td>
                                                              <td>".$minimo."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_prod( ".$id.",".$valor.",".$duracion.",".$actual.",".$minimo." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_prod( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";*/

                                                              echo "<tr><td>".$NOMBRE_GEN."</td><td>".$NOMBRE_COM."</td><td>".$POSOLOGIA."</td><td>".$PRESENTACION."</td><td>".$VIA."</td><td>".$DOSIS."</td><td>".$HORARIO."</td><td>".$TIEMPO."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$ID_MEDICAMENTO."' onclick='editar_medicamento( ".$ID_MEDICAMENTO." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$ID_MEDICAMENTO."' onclick='borrar_medicamento( ".$ID_MEDICAMENTO." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          
                                  }elseif ($_POST["texto"] == "8") {

                                          while($row=mysqli_fetch_array($sql)){
                                                              $ID_CLINICA = $row['ID_CLINICA'];
                                                              $NOMBRE_CLI = $row['NOMBRE_CLI'];
                                                              $DIRECCION_CLI = $row['DIRECCION_CLI'];
                                                              $REFERENCIA_CLI = $row['REFERENCIA_CLI'];
                                                             
                                                              //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                             /* echo "<tr><td>".$id."</td><td>".$nombre."</td><td>$".$valor."</td><td>".$marca."</td><td>".$duracion."</td><td width='150px' height='150px'><img src='./imgProductos/productos/".$imagen."' width='100%' height='100%'></td>
                                                              <td>".$actual."</td>
                                                              <td>".$minimo."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_prod( ".$id.",".$valor.",".$duracion.",".$actual.",".$minimo." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_prod( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";*/

                                                              echo "<tr><td>".$NOMBRE_CLI."</td><td>".$DIRECCION_CLI."</td><td>".$REFERENCIA_CLI."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$ID_CLINICA."' onclick='editar_clinica( ".$ID_CLINICA." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$ID_CLINICA."' onclick='borrar_clinica( ".$ID_CLINICA." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          
                                  }else {

                                          while($row=mysqli_fetch_array($sql)){
                                                              $id = $row['ID_MAT'];
                                                              $material = $row['MATERIAL'];
                                                              $marca = $row['MARCA'];
                                                              $proveedor = $row['PROVEEDOR'];
                                                              $actual = $row['STOCK_ACTUAL'];
                                                              $minimo = $row['STOCK_MINIMO'];
                                                              //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                             /* echo "<tr><td>".$id."</td><td>".$material."</td><td>".$marca."</td><td>".$proveedor."</td>
                                                              <td>".$actual."</td>
                                                              <td>".$minimo."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_mat( ".$id.",".$actual.",".$minimo." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_mat( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";*/


                                                              echo "<tr><td>".$material."</td><td>".$marca."</td><td>".$proveedor."</td>
                                                              <td>".$actual."</td>
                                                              <td>".$minimo."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='editar_mat( ".$id.",".$actual.",".$minimo." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_mat( ".$id." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          
                                        }      

                                  }


                      }

            }else{
                  echo "He recibido un campo vacio";
            }
      }
    
?>