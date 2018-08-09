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
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val."' AND ESTUDIO_LAB = '5' ORDER BY FECHA_LAB DESC LIMIT 1");

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


                                          //echo $nom;
                                          $arrayPHP=array("FOLIO_LAB"=>$FOLIO_LAB, "FECHA_LAB"=>$FECHA_LAB, "ID_LAB"=>$ID_LAB, "SANGUINEA1"=>$SANGUINEA1, "SANGUINEA2"=>$SANGUINEA2, "SANGUINEA3"=>$SANGUINEA3, "SANGUINEA4"=>$SANGUINEA4, "SANGUINEA5"=>$SANGUINEA5, "SANGUINEA6"=>$SANGUINEA6, "SANGUINEA7"=>$SANGUINEA7, "SANGUINEA8"=>$SANGUINEA8, "SANGUINEA9"=>$SANGUINEA9, "SANGUINEA10"=>$SANGUINEA10, "SANGUINEA11"=>$SANGUINEA11, "SANGUINEA12"=>$SANGUINEA12, "SANGUINEA13"=>$SANGUINEA13, "SANGUINEA14"=>$SANGUINEA14, "SANGUINEA15"=>$SANGUINEA15, "SANGUINEA16"=>$SANGUINEA16, "SANGUINEA17"=>$SANGUINEA17, "SANGUINEA18"=>$SANGUINEA18, "SANGUINEA19"=>$SANGUINEA19, "HEMATICA1"=>$HEMATICA1, "HEMATICA2"=>$HEMATICA2, "HEMATICA3"=>$HEMATICA3, "HEMATICA4"=>$HEMATICA4, "HEMATICA5"=>$HEMATICA5, "HEMATICA6"=>$HEMATICA6, "HEMATICA7"=>$HEMATICA7, "HEMATICA8"=>$HEMATICA8, "TP1"=>$TP1, "TP2"=>$TP2, "TP3"=>$TP3, "EGO1"=>$EGO1, "EGO2"=>$EGO2, "EGO3"=>$EGO3, "EGO4"=>$EGO4, "EGO5"=>$EGO5, "EGO6"=>$EGO6, "EGO7"=>$EGO7, "TIROIDEO1"=>$TIROIDEO1, "TIROIDEO2"=>$TIROIDEO2, "TIROIDEO3"=>$TIROIDEO3, "TIROIDEO4"=>$TIROIDEO4, "TIROIDEO5"=>$TIROIDEO5, "TIROIDEO6"=>$TIROIDEO6);  

                                          echo json_encode($arrayPHP);
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