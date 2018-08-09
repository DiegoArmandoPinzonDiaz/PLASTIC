<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]) && isset($_POST["texto8"]) && isset($_POST["texto9"]) && isset($_POST["texto10"]) && isset($_POST["texto11"]) && isset($_POST["texto12"]) && isset($_POST["texto13"]) && isset($_POST["texto14"]) && isset($_POST["texto15"]) && isset($_POST["texto16"]) && isset($_POST["texto17"]) && isset($_POST["texto18"]) && isset($_POST["texto19"]) && isset($_POST["texto20"]) && isset($_POST["texto21"]) && isset($_POST["texto22"]) && isset($_POST["texto23"]) && isset($_POST["texto24"]) && isset($_POST["texto25"]))
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
                  $val22 = $_POST["texto22"];
                  $val23 = $_POST["texto23"];
                  $val24 = $_POST["texto24"];
                  $val25 = $_POST["texto25"];
                  $val26 = $_POST["texto26"];

                  $val27 = $_POST["texto27"];

            
                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //HACER EL INSERT INTO
                        mysqli_select_db($con, 'test');

                        $sql = mysqli_query($con, "UPDATE PACIENTES SET FOLIO = '".$val."', NOMBRE = '".$val2."', CURP = '".$val3."', APELLIDO_1 = '".$val4."' , APELLIDO_2 = '".$val5."', FECHA_NAC = '".$val6."', LUGAR_NAC = '".$val7."', SEXO = '".$val8."', DOMICILIO = '".$val9."' , COLONIA = '".$val10."', DELEGACION = '".$val11."', ESTADO_RES = '".$val12."', RELIGION = '".$val13."', ESCOLARIDAD = '".$val14."' , ESTADO_CIVIL = '".$val15."', TELEFONO = '".$val16."', CELULAR = '".$val17."', E_MAIL = '".$val18."', GRUPO_SANG = '".$val19."' , CUENTA_SEG = '".$val20."', SEGURO_MEDICO = '".$val21."', OCUPACION = '".$val22."', CONTACTO = '".$val23."', RECOMENDADO = '".$val24."', CODIGO_POSTAL = '".$val26."' , PAIS = '".$val27."'   WHERE ID_PAC = '".$val25."' "); 


                        mysqli_select_db($con, 'test');



                              $sql = mysqli_query($con, "SELECT * FROM ALERTAS WHERE FOLIO = '$val25' AND INVENTARIO = 'CUMPLEANOS' ");

                              $contar = mysqli_num_rows($sql);

                              if($contar > 0){

                                          while($row=mysqli_fetch_array($sql)){

                                                $ID_ALERTA = $row['ID_ALERTA']; 

                                               $sql2 = mysqli_query($con, "UPDATE ALERTAS SET FECHA_ALERTA = '".$val6."', FECHA_INIT = '".$val6."' WHERE ID_ALERTA = '$ID_ALERTA'  "); 

                                          } 

                              } else{

                                          $sql3 = mysqli_query($con, "INSERT INTO ALERTAS (ID_ALERTA,FECHA_INIT,FECHA_ALERTA,FOLIO,INVENTARIO,MOTIVO,DESCRIPCION,ESTADO) VALUES (null,'$val6','$val6','$val25','CUMPLEANOS','CUMPLEANOS','','URGENTE')"); 

                              }                                                        


         

      			if($sql){ echo "REGISTRO GUARDADO";}
                        else{ echo "Error: ".mysqli_error($con); }

                              
                        }				
							
                  

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>