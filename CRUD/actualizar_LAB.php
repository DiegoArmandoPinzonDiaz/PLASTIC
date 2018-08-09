<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

     if(isset($_POST["texto"]) )
      {
            
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
                  $val28 = $_POST["texto28"];
                  $val29 = $_POST["texto29"];
                  $val30 = $_POST["texto30"];
                  $val31 = $_POST["texto31"];
                  $val32 = $_POST["texto32"];
                  $val33 = $_POST["texto33"];
                  $val34 = $_POST["texto34"];
                  $val35 = $_POST["texto35"];
                  $val36 = $_POST["texto36"];
                  $val37 = $_POST["texto37"];
                  $val38 = $_POST["texto38"];
                  $val39 = $_POST["texto39"];
                  $val40 = $_POST["texto40"];
                  $val41 = $_POST["texto41"];
                  $val42 = $_POST["texto42"];
                  $val43 = $_POST["texto43"];
                  $val44 = $_POST["texto44"];
                  $val45 = $_POST["texto45"];
                  $val46 = $_POST["texto46"];

                  $val47 = $_POST["texto47"];

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //HACER EL INSERT INTO
                        mysqli_select_db($con, 'test');

                        $sql = mysqli_query($con, "SELECT * FROM LABORATORIOS WHERE ID_LAB = '".$val47."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    $sql = mysqli_query($con, "UPDATE LABORATORIOS SET FECHA_LAB = '".$val2."', SANGUINEA1 = '".$val4."', SANGUINEA2 = '".$val5."', SANGUINEA3 = '".$val6."', SANGUINEA4 = '".$val7."', SANGUINEA5 = '".$val8."', SANGUINEA6 = '".$val9."', SANGUINEA7 = '".$val10."', SANGUINEA8 = '".$val11."', SANGUINEA9 = '".$val12."', SANGUINEA10 = '".$val13."', SANGUINEA11 = '".$val14."', SANGUINEA12 = '".$val15."', SANGUINEA13 = '".$val16."', SANGUINEA14 = '".$val17."', SANGUINEA15 = '".$val18."', SANGUINEA16 = '".$val19."', SANGUINEA17 = '".$val20."', SANGUINEA18 = '".$val21."', SANGUINEA19 = '".$val22."', HEMATICA1 = '".$val23."', HEMATICA2 = '".$val24."', HEMATICA3 = '".$val25."', HEMATICA4 = '".$val26."', HEMATICA5= '".$val27."', HEMATICA6 = '".$val28."', HEMATICA7 = '".$val29."', HEMATICA8 = '".$val30."', TP1 = '".$val31."', TP2 = '".$val32."', TP3 = '".$val33."', EGO1 = '".$val34."', EGO2 = '".$val35."', EGO3 = '".$val36."', EGO4 = '".$val37."', EGO5 = '".$val38."', EGO6 = '".$val39."', EGO7 = '".$val40."', TIROIDEO1 = '".$val41."', TIROIDEO2 = '".$val42."', TIROIDEO3 = '".$val43."', TIROIDEO4 = '".$val44."', TIROIDEO5 = '".$val45."', TIROIDEO6 = '".$val46."'  WHERE ID_LAB = '".$val47."' "); 


                  			if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }
                  
                        }else{ 

                                    //$sql = mysqli_query($con, "INSERT INTO LABORATORIOS (ID_LAB, FOLIO_LAB, FECHA_LAB, ESTUDIO_LAB ) VALUES (NULL, '$val','$val2') "); 
                              
                                    $sql = mysqli_query($con, "INSERT INTO LABORATORIOS (ID_LAB, FOLIO_LAB, FECHA_LAB, ESTUDIO_LAB, SANGUINEA1, SANGUINEA2, SANGUINEA3, SANGUINEA4, SANGUINEA5, SANGUINEA6, SANGUINEA7, SANGUINEA8, SANGUINEA9, SANGUINEA10, SANGUINEA11, SANGUINEA12, SANGUINEA13, SANGUINEA14, SANGUINEA15, SANGUINEA16, SANGUINEA17, SANGUINEA18, SANGUINEA19, HEMATICA1, HEMATICA2, HEMATICA3, HEMATICA4, HEMATICA5, HEMATICA6, HEMATICA7, HEMATICA8, TP1, TP2, TP3, EGO1, EGO2, EGO3, EGO4, EGO5, EGO6, EGO7, TIROIDEO1, TIROIDEO2, TIROIDEO3, TIROIDEO4, TIROIDEO5, TIROIDEO6  ) VALUES (NULL, '$val','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9','$val10','$val11','$val12','$val13','$val14','$val15','$val16','$val17','$val18','$val19','$val20','$val21','$val22','$val23','$val24','$val25','$val26','$val27','$val28','$val29','$val30','$val31','$val32','$val33','$val34','$val35','$val36','$val37','$val38','$val39','$val40','$val41','$val42','$val43','$val44','$val45','$val46')   "); 


                                    if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }


                        }	

                  }    
	
      }


?>