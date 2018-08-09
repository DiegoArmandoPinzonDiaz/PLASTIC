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
                  $val2 = $_POST["texto2"];

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val."' ORDER BY FECHA_LAB DESC ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $FOLIO_LAB = $row['FOLIO_LAB'];
                                          $FECHA_LAB = $row['FECHA_LAB'];
                                          $ID_LAB = $row['ID_LAB'];

                                          $SANGUINEA1 = $row['SANGUINEA1'];
                                          $SANGUINEA2 = $row['SANGUINEA2'];
                                          $SANGUINEA3 = $row['SANGUINEA3'];
                                          $SANGUINEA4 = $row['SANGUINEA4'];
                                          $SANGUINEA5 = $row['SANGUINEA5'];
                                          $SANGUINEA6 = $row['SANGUINEA6'];
                                          $SANGUINEA7 = $row['SANGUINEA7'];
                                          $SANGUINEA8 = $row['SANGUINEA8'];
                                          $SANGUINEA9 = $row['SANGUINEA9'];                                          
                                          $SANGUINEA10 = $row['SANGUINEA10'];
                                          $SANGUINEA11 = $row['SANGUINEA11'];
                                          $SANGUINEA12 = $row['SANGUINEA12'];
                                          $SANGUINEA13 = $row['SANGUINEA13'];
                                          $SANGUINEA14 = $row['SANGUINEA14'];
                                          $SANGUINEA15 = $row['SANGUINEA15'];                                          
                                          $SANGUINEA16 = $row['SANGUINEA16'];
                                          $SANGUINEA17 = $row['SANGUINEA17'];
                                          $SANGUINEA18 = $row['SANGUINEA18'];
                                          $SANGUINEA19 = $row['SANGUINEA19'];

                                          $HEMATICA1 = $row['HEMATICA1'];
                                          $HEMATICA2 = $row['HEMATICA2'];
                                          $HEMATICA3 = $row['HEMATICA3'];
                                          $HEMATICA4 = $row['HEMATICA4'];
                                          $HEMATICA5 = $row['HEMATICA5'];                                          
                                          $HEMATICA6 = $row['HEMATICA6'];
                                          $HEMATICA7 = $row['HEMATICA7'];
                                          $HEMATICA8 = $row['HEMATICA8'];

                                          $TP1 = $row['TP1'];
                                          $TP2 = $row['TP2'];
                                          $TP3 = $row['TP3'];

                                          $EGO1 = $row['EGO1'];
                                          $EGO2 = $row['EGO2'];
                                          $EGO3 = $row['EGO3'];
                                          $EGO4 = $row['EGO4'];
                                          $EGO5 = $row['EGO5'];                                          
                                          $EGO6 = $row['EGO6'];
                                          $EGO7 = $row['EGO7'];

                                          $TIROIDEO1 = $row['TIROIDEO1'];
                                          $TIROIDEO2 = $row['TIROIDEO2'];
                                          $TIROIDEO3 = $row['TIROIDEO3'];
                                          $TIROIDEO4 = $row['TIROIDEO4'];
                                          $TIROIDEO5 = $row['TIROIDEO5'];                                          
                                          $TIROIDEO6 = $row['TIROIDEO6'];

                                          $FECHA_LAB =  date("d/m/Y", strtotime($FECHA_LAB));



                                          if( $val2 == 1 && $SANGUINEA1 != ''){

                                                echo "<tr><td>".$FECHA_LAB."</td><td>".$SANGUINEA1."</td><td>".$SANGUINEA2."</td><td>".$SANGUINEA3."</td><td>".$SANGUINEA4."</td><td>".$SANGUINEA5."</td><td>".$SANGUINEA6."</td><td>".$SANGUINEA7."</td><td>".$SANGUINEA8."</td><td>".$SANGUINEA9."</td><td>".$SANGUINEA10."</td><td>".$SANGUINEA11."</td><td>".$SANGUINEA12."</td><td>".$SANGUINEA13."</td><td>".$SANGUINEA14."</td><td>".$SANGUINEA15."</td><td>".$SANGUINEA16."</td><td>".$SANGUINEA17."</td><td>".$SANGUINEA18."</td><td>".$SANGUINEA19."</td>
                                                            <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$ID_LAB."' onclick='editar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$ID_LAB."' onclick='borrar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          else if( $val2 == 2 && $HEMATICA1 != ''){

                                                echo "<tr><td>".$FECHA_LAB."</td><td>".$HEMATICA1."</td><td>".$HEMATICA2."</td><td>".$HEMATICA3."</td><td>".$HEMATICA4."</td><td>".$HEMATICA5."</td><td>".$HEMATICA6."</td><td>".$HEMATICA7."</td><td>".$HEMATICA8."</td>
                                                            <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$ID_LAB."' onclick='editar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$ID_LAB."' onclick='borrar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          else if( $val2 == 3 && $TP1 != ''){

                                                echo "<tr><td>".$FECHA_LAB."</td><td>".$TP1."</td><td>".$TP2."</td><td>".$TP3."</td>
                                                            <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$ID_LAB."' onclick='editar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$ID_LAB."' onclick='borrar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          else if( $val2 == 4 && $EGO1 != ''){

                                                echo "<tr><td>".$FECHA_LAB."</td><td>".$EGO1."</td><td>".$EGO2."</td><td>".$EGO3."</td><td>".$EGO4."</td><td>".$EGO5."</td><td>".$EGO6."</td><td>".$EGO7."</td>
                                                            <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$ID_LAB."' onclick='editar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$ID_LAB."' onclick='borrar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }
                                          else if( $val2 == 5 && $TIROIDEO1 != ''){

                                                echo "<tr><td>".$FECHA_LAB."</td><td>".$TIROIDEO1."</td><td>".$TIROIDEO2."</td><td>".$TIROIDEO3."</td><td>".$TIROIDEO4."</td><td>".$TIROIDEO5."</td><td>".$TIROIDEO6."</td>
                                                            <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$ID_LAB."' onclick='editar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-pencil'></i> EDITAR</button></br></br>
                                                                    <button type='button' class='btn btn_ac2 boton_".$ID_LAB."' onclick='borrar_lab( ".$ID_LAB." )'><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";
                                          }


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