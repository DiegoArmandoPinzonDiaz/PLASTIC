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
                   
                        $sql = mysqli_query($con, "SELECT * FROM PACIENTES WHERE ID_PAC = '".$val."' ");

                        while($row=mysqli_fetch_array($sql)){
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

                              $RFC = $row['RFC'];
                              $RAZON_SOCIAL = $row['RAZON_SOCIAL'];
                              $TIPO_PERSONA = $row['TIPO_PERSONA'];
                              $DOMICILIO_FISCAL = $row['DOMICILIO_FISCAL'];
                              $COLONIA_FISCAL = $row['COLONIA_FISCAL'];
                              $ESTADO_FISCAL = $row['ESTADO_FISCAL'];
                              $MUNICIPIO_FISCAL = $row['MUNICIPIO_FISCAL'];
                              $CODIGO_POSTAL = $row['CODIGO_POSTAL'];
                              $E_MAIL_FISCAL = $row['E_MAIL_FISCAL'];

                              $CODIGO_POSTAL_2 = $row['CODIGO_POSTAL_2'];

                              $PAIS = $row['PAIS'];
                              //echo $nom;
                              $arrayPHP=array("folio"=>$folio, "curp"=>$curp, "nom"=>$nom, "apellido_1"=>$apellido_1, "apellido_2"=>$apellido_2, "fecha_nac"=>$fecha_nac, "lugar_nac"=>$lugar_nac, "sexo"=>$sexo, "domicilio"=>$domicilio, "colonia"=>$colonia, "delegacion"=>$delegacion, "estado"=>$estado, "religion"=>$religion, "escolaridad"=>$escolaridad, "estado_civil"=>$estado_civil, "telefono"=>$telefono, "celular"=>$celular, "e_mail"=>$e_mail, "grupo_sang"=>$grupo_sang, "cuenta_seg"=>$cuenta_seg, "seguro_medico"=>$seguro_medico, "ocupacion"=>$ocupacion, "contacto"=>$contacto, "recomendado"=>$recomendado, "otro"=>$otro, "foto"=>$foto, "RFC"=>$RFC, "RAZON_SOCIAL"=>$RAZON_SOCIAL, "TIPO_PERSONA"=>$TIPO_PERSONA, "DOMICILIO_FISCAL"=>$DOMICILIO_FISCAL, "COLONIA_FISCAL"=>$COLONIA_FISCAL, "ESTADO_FISCAL"=>$ESTADO_FISCAL, "MUNICIPIO_FISCAL"=>$MUNICIPIO_FISCAL, "CODIGO_POSTAL"=>$CODIGO_POSTAL, "E_MAIL_FISCAL"=>$E_MAIL_FISCAL, "PAIS"=>$PAIS, "CODIGO_POSTAL_2"=>$CODIGO_POSTAL_2);   

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