<?php

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) && isset($_POST["texto5"]) && isset($_POST["texto6"]) && isset($_POST["texto7"]) && isset($_POST["texto8"]) && isset($_POST["texto9"]) && isset($_POST["texto10"]) && isset($_POST["texto11"]) && isset($_POST["texto12"]) && isset($_POST["texto13"]) && isset($_POST["texto14"]) && isset($_POST["texto15"]) && isset($_POST["texto16"]) && isset($_POST["texto17"]) && isset($_POST["texto18"]) && isset($_POST["texto19"]) && isset($_POST["texto20"]) && isset($_POST["texto21"]) && isset($_POST["texto22"]) && isset($_POST["texto23"]) )
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


                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //HACER EL INSERT INTO
                        mysqli_select_db($con, 'test');

                        $sql = mysqli_query($con, "SELECT * FROM ANTECEDENTES WHERE FOLIO = '".$val23."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    $sql = mysqli_query($con, "UPDATE ANTECEDENTES SET MASC = '".$val."', TIPO_MASC = '".$val2."', ACTI_FISI = '".$val3."', ACTI_FISI_CUAL = '".$val4."' , ACTI_FISI_TIEM = '".$val5."', ACTI_FISI_FREC = '".$val6."', CONS_ALCO = '".$val7."', CONS_ALCO_CUAL = '".$val8."', CONS_ALCO_TIEM = '".$val9."' , CONS_ALCO_FREC = '".$val10."', TABAQ = '".$val11."', TABAQ_CUAL = '".$val12."', TABAQ_TIEM = '".$val13."', TABAQ_FREC = '".$val14."', USO_DROG = '".$val15."', USO_DROG_CUAL = '".$val16."', USO_DROG_TIEM = '".$val17."', USO_DROG_FREC = '".$val18."', ING_MED_SUP = '".$val19."', ING_MED_SUP_CUAL = '".$val20."', ING_ASP_REG = '".$val21."', ING_ASP_REG_OCA = '".$val22."',
                                          USO_DROG_CUAL_2 = '".$val25."', USO_DROG_TIEM_2='".$val26."', USO_DROG_FREC_2='".$val27."', USO_DROG_CUAL_3='".$val28."', USO_DROG_TIEM_3='".$val29."', USO_DROG_FREC_3='".$val30."', TATUAJES='".$val24."', TATUAJES_FREC='".$val31."'  WHERE FOLIO = '".$val23."' "); 


                  			if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }
                  
                        }else{ 
                              
                                    $sql = mysqli_query($con, "INSERT INTO ANTECEDENTES (FOLIO, MASC, TIPO_MASC, ACTI_FISI, ACTI_FISI_CUAL, ACTI_FISI_TIEM, ACTI_FISI_FREC, CONS_ALCO, CONS_ALCO_CUAL, CONS_ALCO_TIEM, CONS_ALCO_FREC, TABAQ, TABAQ_CUAL, TABAQ_TIEM, TABAQ_FREC, USO_DROG, USO_DROG_CUAL, USO_DROG_TIEM, USO_DROG_FREC, ING_MED_SUP, ING_MED_SUP_CUAL, ING_ASP_REG, ING_ASP_REG_OCA, USO_DROG_CUAL_2, USO_DROG_TIEM_2, USO_DROG_FREC_2, USO_DROG_CUAL_3, USO_DROG_TIEM_3, USO_DROG_FREC_3, TATUAJES, TATUAJES_FREC) VALUES ('$val23','$val','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9','$val10','$val11','$val12','$val13','$val14','$val15','$val16','$val17','$val18','$val19','$val20','$val21','$val22','$val25','$val26','$val27','$val28','$val29','$val30','$val24','$val31')   "); 


                                    if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }


                        }	

                  }	
							
                  

            
	
      }


?>