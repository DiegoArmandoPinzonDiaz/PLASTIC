<?php
 
//Codigo para validar la sesion de entrada//
//OR concat(NOMBRE,' ',APELLIDO_1,' ',APELLIDO_2) LIKE '%".$_POST["texto2"]."%'
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
mysqli_set_charset ( $con , 'utf1' );
                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                            mysqli_select_db($con, 'plasticand_plastic');
                       
                            if($_POST["texto"] == "1"){   $sql = mysqli_query($con, "SELECT * FROM PACIENTES WHERE FOLIO LIKE '%".$_POST["texto2"]."%' ORDER BY FOLIO ASC");  }
                            else{  $sql = mysqli_query($con, "SELECT * FROM PACIENTES WHERE replace(NOMBRE,'Ã','I') LIKE '%".$_POST["texto2"]."%' OR replace(NOMBRE,'Ãš','U') LIKE '%".$_POST["texto2"]."%' OR replace(NOMBRE,'Ã‰','E') LIKE '%".$_POST["texto2"]."%' OR replace(NOMBRE,'Ã“','O') LIKE '%".$_POST["texto2"]."%' OR replace(NOMBRE,'Ã','A') LIKE '%".$_POST["texto2"]."%' OR 

                            replace(APELLIDO_1  ,'Ã','I') LIKE '%".$_POST["texto2"]."%' OR replace(APELLIDO_1  ,'Ãš','U') LIKE '%".$_POST["texto2"]."%' OR replace(APELLIDO_1  ,'Ã‰','E') LIKE '%".$_POST["texto2"]."%' OR replace(APELLIDO_1  ,'Ã“','O') LIKE '%".$_POST["texto2"]."%' OR replace(APELLIDO_1  ,'Ã','A') LIKE '%".$_POST["texto2"]."%' OR

                            replace(APELLIDO_2  ,'Ã','I') LIKE '%".$_POST["texto2"]."%' OR replace(APELLIDO_2  ,'Ãš','U') LIKE '%".$_POST["texto2"]."%' OR replace(APELLIDO_2  ,'Ã‰','E') LIKE '%".$_POST["texto2"]."%' OR replace(APELLIDO_2  ,'Ã“','O') LIKE '%".$_POST["texto2"]."%' OR replace(APELLIDO_2  ,'Ã','A') LIKE '%".$_POST["texto2"]."%'

                            OR concat(NOMBRE,' ',APELLIDO_1,' ',APELLIDO_2) LIKE '%".$_POST["texto2"]."%'

                            OR concat(NOMBRE,' ',APELLIDO_2) LIKE '%".$_POST["texto2"]."%'

                             ORDER BY FOLIO ASC ");   }
                             
                            $contar = mysqli_num_rows($sql);
                             
                            if($contar == 0){
                                  //echo "Su correo o contraseÃ±a son incorrectas";

                            }else{

                                  if($_POST["texto"] == "1"){

                                          while($row=mysqli_fetch_array($sql)){
                                                              $id = $row['ID_PAC'];
                                                              $folio = $row['FOLIO'];
                                                              $nombre = $row['NOMBRE'];
                                                              $apellido1 = $row['APELLIDO_1'];
                                                              $apellido2 = $row['APELLIDO_2'];
                                                              $telefono = $row['TELEFONO'];
                                                              $celular = $row['CELULAR'];
                                                              $e_mail = $row['E_MAIL'];

                                                              //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                              echo "<tr><td>".$folio."</td><td>".$nombre."</td><td>".$apellido1."</td><td>".$apellido2."</td><td>".$telefono."</td><td>".$celular."</td><td>".$e_mail."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='abrir_pac( ".$id." )'><i class='glyphicon glyphicon-plus-sign'></i> CONSULTAR</button></br></br>

                                                                    <a href='tel:".$celular."' style='color:white;'><button type='button' class='btn btn_ac1 boton_".$id."' ><i class='glyphicon glyphicon glyphicon-earphone'></i> LLAMAR</button></a></br></br>

                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_pac( ".$id." )' ><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
                                                              </td>
                                                              </tr>";

                                          }
                                          
                                  }else{
                                          while($row=mysqli_fetch_array($sql)){
                                                              $id = $row['ID_PAC'];
                                                              $folio = $row['FOLIO'];
                                                              $nombre = $row['NOMBRE'];
                                                              $apellido1 = $row['APELLIDO_1'];
                                                              $apellido2 = $row['APELLIDO_2'];
                                                              $telefono = $row['TELEFONO'];
                                                              $celular = $row['CELULAR'];
                                                              $e_mail = $row['E_MAIL'];

                                                              //echo $id." - ".$nombre."-".$valor."-".$tiempo."-".$duracion."-";
                                                              echo "<tr><td>".$folio."</td><td>".$nombre."</td><td>".$apellido1."</td><td>".$apellido2."</td><td>".$telefono."</td><td>".$celular."</td><td>".$e_mail."</td>
                                                              <td>
                                                                    <button type='button' class='btn btn_ac1 boton_".$id."' onclick='abrir_pac( ".$id." )'><i class='glyphicon glyphicon-plus-sign'></i> CONSULTAR</button></br></br>

                                                                    <a href='tel:".$celular."' style='color:white;'><button type='button' class='btn btn_ac1 boton_".$id."' ><i class='glyphicon glyphicon glyphicon-earphone'></i> LLAMAR</button></a></br></br>

                                                                    <button type='button' class='btn btn_ac2 boton_".$id."' onclick='borrar_pac(".$id.")' ><i class='glyphicon glyphicon-trash'></i> BORRAR</button>
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