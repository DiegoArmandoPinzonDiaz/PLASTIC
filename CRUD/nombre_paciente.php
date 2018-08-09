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
                   
                        $sql = mysqli_query($con, "SELECT * FROM PACIENTES WHERE FOLIO = '".$val."' ");

                        while($row=mysqli_fetch_array($sql)){
                              $ID_PAC = $row['ID_PAC'];
                              $folio = $row['FOLIO'];
                              $curp = $row['CURP'];
                              $nom = $row['NOMBRE'];
                              $apellido_1 = $row['APELLIDO_1'];
                              $apellido_2 = $row['APELLIDO_2'];
                              $fecha_nac = $row['FECHA_NAC'];
                              $lugar_nac = $row['LUGAR_NAC'];
                              $sexo = $row['SEXO'];
                              $domicilio = $row['DOMICILIO'];
                              $colonia = $row['COLONIA'];
                              $delegacion = $row['DELEGACION'];
                              $estado = $row['ESTADO_RES'];
                              $religion = $row['RELIGION'];
                              $escolaridad = $row['ESCOLARIDAD'];
                              $estado_civil = $row['ESTADO_CIVIL'];
                              $telefono = $row['TELEFONO'];
                              $celular = $row['CELULAR'];
                              $e_mail = $row['E_MAIL'];
                              $grupo_sang = $row['GRUPO_SANG'];
                              $cuenta_seg = $row['CUENTA_SEG'];
                              $seguro_medico = $row['SEGURO_MEDICO'];
                              $ocupacion = $row['OCUPACION'];
                              $contacto = $row['CONTACTO'];
                              $recomendado = $row['RECOMENDADO'];
                              $otro = $row['OTRO'];
                              $foto = $row['FOTO'];
                              //echo $nom;
                              $arrayPHP=array("id_pac"=>$ID_PAC,"folio"=>$folio, "curp"=>$curp, "nom"=>$nom, "apellido_1"=>$apellido_1, "apellido_2"=>$apellido_2, "fecha_nac"=>$fecha_nac, "lugar_nac"=>$lugar_nac, "sexo"=>$sexo, "domicilio"=>$domicilio, "colonia"=>$colonia, "delegacion"=>$delegacion, "estado"=>$estado, "religion"=>$religion, "escolaridad"=>$escolaridad, "estado_civil"=>$estado_civil, "telefono"=>$telefono, "celular"=>$celular, "e_mail"=>$e_mail, "grupo_sang"=>$grupo_sang, "cuenta_seg"=>$cuenta_seg, "seguro_medico"=>$seguro_medico, "ocupacion"=>$ocupacion, "contacto"=>$contacto, "recomendado"=>$recomendado, "otro"=>$otro, "foto"=>$foto);                              
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