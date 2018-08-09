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
                   
                        $sql = mysqli_query($con, "SELECT * FROM ANTECEDENTES_PAT WHERE FOLIO = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $DIABETES = $row['DIABETES'];
                                          $DIABETES_TIEM = $row['DIABETES_TIEM'];
                                          $HIPER = $row['HIPER'];
                                          $HIPER_TIEM = $row['HIPER_TIEM'];
                                          $PRO_COR = $row['PRO_COR'];
                                          $PRO_COR_TIEM = $row['PRO_COR_TIEM'];
                                          $DERMA = $row['DERMA'];
                                          $DERMA_TIEM = $row['DERMA_TIEM'];
                                          $ENDO = $row['ENDO'];
                                          $ENDO_TIEM = $row['ENDO_TIEM'];
                                          $TIROI = $row['TIROI'];
                                          $TIROI_TIEM = $row['TIROI_TIEM'];
                                          
                                          $ALERGIAS = $row['ALERGIAS'];

                                          $ALERGIAS_TIEM = $row['ALERGIAS_TIEM'];
                                          $ENFER_QSI = $row['ENFER_QSI'];

                                          $ENFER_QSI_TIEM = $row['ENFER_QSI_TIEM'];
                                          $EPILEPSIA = $row['EPILEPSIA'];
                                          $EPILEPSIA_TIEM = $row['EPILEPSIA_TIEM'];
                                          $OTRAS = $row['OTRAS'];

                                          $CIRUGIAS = $row['CIRUGIAS'];
                                          $TIPO_CIRU = $row['TIPO_CIRU'];
                                          $FECHA_CIRU = $row['FECHA_CIRU'];

                                          $TIPO_CIRU_2 = $row['TIPO_CIRU_2'];
                                          $FECHA_CIRU_2 = $row['FECHA_CIRU_2'];

                                          $TIPO_CIRU_3 = $row['TIPO_CIRU_3'];
                                          $FECHA_CIRU_3 = $row['FECHA_CIRU_3'];

                                          $TIPO_CIRU_4 = $row['TIPO_CIRU_4'];
                                          $FECHA_CIRU_4 = $row['FECHA_CIRU_4'];

                                          $TIPO_CIRU_5 = $row['TIPO_CIRU_5'];
                                          $FECHA_CIRU_5 = $row['FECHA_CIRU_5'];



                                          $HOSP = $row['HOSP'];
                                          $MOTIVO_HOSP = $row['MOTIVO_HOSP'];
                                          $FECHA_HOSP = $row['FECHA_HOSP'];

                                          $MOTIVO_HOSP_2 = $row['MOTIVO_HOSP_2'];
                                          $FECHA_HOSP_2 = $row['FECHA_HOSP_2'];

                                          $MOTIVO_HOSP_3 = $row['MOTIVO_HOSP_3'];
                                          $FECHA_HOSP_3 = $row['FECHA_HOSP_3'];


                                          $DIABETES_CUAL = $row['DIABETES_CUAL'];
                                          $DIABETES_TRAT = $row['DIABETES_TRAT'];
                                          $DIABETES_CANT = $row['DIABETES_CANT'];
                                          $DIABETES_FREC = $row['DIABETES_FREC'];

                                          $HIPER_CUAL = $row['HIPER_CUAL'];
                                          $HIPER_TRAT = $row['HIPER_TRAT'];
                                          $HIPER_CANT = $row['HIPER_CANT'];
                                          $HIPER_FREC = $row['HIPER_FREC'];

                                          $PRO_COR_CUAL = $row['PRO_COR_CUAL'];
                                          $PRO_COR_TRAT = $row['PRO_COR_TRAT'];
                                          $PRO_COR_CANT = $row['PRO_COR_CANT'];
                                          $PRO_COR_FREC = $row['PRO_COR_FREC'];

                                          $DERMA_CUAL = $row['DERMA_CUAL'];
                                          $DERMA_TRAT = $row['DERMA_TRAT'];
                                          $DERMA_CANT = $row['DERMA_CANT'];
                                          $DERMA_FREC = $row['DERMA_FREC'];

                                          $ENDO_CUAL = $row['ENDO_CUAL'];
                                          $ENDO_TRAT = $row['ENDO_TRAT'];
                                          $ENDO_CANT = $row['ENDO_CANT'];
                                          $ENDO_FREC = $row['ENDO_FREC'];

                                          $ALERGIAS_CUAL = $row['ALERGIAS_CUAL']; 
                                          $ALERGIAS_TRAT = $row['ALERGIAS_TRAT'];
                                          $ALERGIAS_CANT = $row['ALERGIAS_CANT'];
                                          $ALERGIAS_FREC = $row['ALERGIAS_FREC'];

                                          $ENFER_QSI_CUAL = $row['ENFER_QSI_CUAL'];
                                          $ENFER_QSI_TRAT = $row['ENFER_QSI_TRAT'];
                                          $ENFER_QSI_CANT = $row['ENFER_QSI_CANT'];
                                          $ENFER_QSI_FREC = $row['ENFER_QSI_FREC'];

                                          $EPILEPSIA_CUAL = $row['EPILEPSIA_CUAL'];
                                          $EPILEPSIA_TRAT = $row['EPILEPSIA_TRAT'];
                                          $EPILEPSIA_CANT = $row['EPILEPSIA_CANT'];
                                          $EPILEPSIA_FREC = $row['EPILEPSIA_FREC'];

                                          $TRANSF = $row['TRANSF'];
                                          $MOTIVO_TRANSF =  $row['MOTIVO_TRANSF'];
                                          $FECHA_TRANSF = $row['FECHA_TRANSF'];
                                          $MOTIVO_TRANSF_2 =  $row['MOTIVO_TRANSF_2'];
                                          $FECHA_TRANSF_2 = $row['FECHA_TRANSF_2'];
                                          $MOTIVO_TRANSF_3 =  $row['MOTIVO_TRANSF_3'];
                                          $FECHA_TRANSF_3 =  $row['FECHA_TRANSF_3'];

                                          $OTRO_CIRUGIA =  $row['OTRO_CIRUGIA'];


                                          $DIABETES_TRAT_2 = $row['DIABETES_TRAT_2'];
                                          $DIABETES_CANT_2 = $row['DIABETES_CANT_2'];
                                          $DIABETES_FREC_2 = $row['DIABETES_FREC_2'];

                                          $DIABETES_TRAT_3 = $row['DIABETES_TRAT_3'];
                                          $DIABETES_CANT_3 = $row['DIABETES_CANT_3'];
                                          $DIABETES_FREC_3 = $row['DIABETES_FREC_3'];

                                          $HIPER_TRAT_2 = $row['HIPER_TRAT_2'];
                                          $HIPER_CANT_2 = $row['HIPER_CANT_2'];
                                          $HIPER_FREC_2 = $row['HIPER_FREC_2'];

                                          $HIPER_TRAT_3 = $row['HIPER_TRAT_3'];
                                          $HIPER_CANT_3 = $row['HIPER_CANT_3'];
                                          $HIPER_FREC_3 = $row['HIPER_FREC_3'];



                                          $HEPA = $row['HEPA'];
                                          $HEPA_CUAL = $row['HEPA_CUAL'];
                                          $HEPA_TIEM = $row['HEPA_TIEM'];
                                          $HEPA_TRAT = $row['HEPA_TRAT'];
                                          $HEPA_CANT = $row['HEPA_CANT'];
                                          $HEPA_FREC = $row['HEPA_FREC'];

                                          $NEFRO = $row['NEFRO'];
                                          $NEFRO_CUAL = $row['NEFRO_CUAL'];
                                          $NEFRO_TIEM = $row['NEFRO_TIEM'];
                                          $NEFRO_TRAT = $row['NEFRO_TRAT'];
                                          $NEFRO_CANT = $row['NEFRO_CANT'];
                                          $NEFRO_FREC = $row['NEFRO_FREC'];

                                          $ENDOCRI = $row['ENDOCRI'];
                                          $ENDOCRI_CUAL = $row['ENDOCRI_CUAL'];
                                          $ENDOCRI_TIEM = $row['ENDOCRI_TIEM'];
                                          $ENDOCRI_TRAT = $row['ENDOCRI_TRAT'];
                                          $ENDOCRI_CANT = $row['ENDOCRI_CANT'];
                                          $ENDOCRI_FREC = $row['ENDOCRI_FREC'];

                                          $PSI = $row['PSI'];
                                          $PSI_CUAL = $row['PSI_CUAL'];
                                          $PSI_TIEM = $row['PSI_TIEM'];
                                          $PSI_TRAT = $row['PSI_TRAT'];
                                          $PSI_CANT = $row['PSI_CANT'];
                                          $PSI_FREC = $row['PSI_FREC'];

                                          $CANCER = $row['CANCER'];
                                          $CANCER_CUAL = $row['CANCER_CUAL'];
                                          $CANCER_TIEM = $row['CANCER_TIEM'];
                                          $CANCER_TRAT = $row['CANCER_TRAT'];
                                          $CANCER_CANT = $row['CANCER_CANT'];
                                          $CANCER_FREC = $row['CANCER_FREC'];

                                          $ALERGIA = $row['ALERGIA'];
                                          $ALERGIA_1 = $row['ALERGIA_1'];
                                          $ALERGIA_2 = $row['ALERGIA_2'];
                                          $ALERGIA_3 = $row['ALERGIA_3'];
                                          $ALERGIA_4 = $row['ALERGIA_4'];
                                          $ALERGIA_5 = $row['ALERGIA_5'];
                                          $ALERGIA_6 = $row['ALERGIA_6'];



                                          //echo $nom;
                                          $arrayPHP=array("DIABETES"=>$DIABETES, "DIABETES_TIEM"=>$DIABETES_TIEM, "HIPER"=>$HIPER, "HIPER_TIEM"=>$HIPER_TIEM, "PRO_COR"=>$PRO_COR, "PRO_COR_TIEM"=>$PRO_COR_TIEM, "DERMA"=>$DERMA, "DERMA_TIEM"=>$DERMA_TIEM, "ENDO"=>$ENDO, "ENDO_TIEM"=>$ENDO_TIEM, "TIROI"=>$TIROI, "TIROI_TIEM"=>$TIROI_TIEM, "ALERGIAS"=>$ALERGIAS, "ALERGIAS_TIEM"=>$ALERGIAS_TIEM, "ENFER_QSI"=>$ENFER_QSI, "ENFER_QSI_TIEM"=>$ENFER_QSI_TIEM, "EPILEPSIA"=>$EPILEPSIA, "EPILEPSIA_TIEM"=>$EPILEPSIA_TIEM, "OTRAS"=>$OTRAS, "CIRUGIAS"=>$CIRUGIAS, "TIPO_CIRU"=>$TIPO_CIRU, "FECHA_CIRU"=>$FECHA_CIRU, "HOSP"=>$HOSP, "MOTIVO_HOSP"=>$MOTIVO_HOSP, "FECHA_HOSP"=>$FECHA_HOSP, "TIPO_CIRU_2"=>$TIPO_CIRU_2, "FECHA_CIRU_2"=>$FECHA_CIRU_2, "TIPO_CIRU_3"=>$TIPO_CIRU_3, "FECHA_CIRU_3"=>$FECHA_CIRU_3, "MOTIVO_HOSP_2"=>$MOTIVO_HOSP_2, "FECHA_HOSP_2"=>$FECHA_HOSP_2, "MOTIVO_HOSP_3"=>$MOTIVO_HOSP_3, "FECHA_HOSP_3"=>$FECHA_HOSP_3, "DIABETES_CUAL"=>$DIABETES_CUAL, "DIABETES_TRAT"=>$DIABETES_TRAT, "DIABETES_CANT"=>$DIABETES_CANT, "DIABETES_FREC"=>$DIABETES_FREC, "HIPER_CUAL"=>$HIPER_CUAL, "HIPER_TRAT"=>$HIPER_TRAT, "HIPER_CANT"=>$HIPER_CANT, "HIPER_FREC"=>$HIPER_FREC, "PRO_COR_CUAL"=>$PRO_COR_CUAL, "PRO_COR_TRAT"=>$PRO_COR_TRAT, "PRO_COR_CANT"=>$PRO_COR_CANT, "PRO_COR_FREC"=>$PRO_COR_FREC, "DERMA_CUAL"=>$DERMA_CUAL, "DERMA_TRAT"=>$DERMA_TRAT, "DERMA_CANT"=>$DERMA_CANT, "DERMA_FREC"=>$DERMA_FREC, "ENDO_CUAL"=>$ENDO_CUAL, "ENDO_TRAT"=>$ENDO_TRAT, "ENDO_CANT"=>$ENDO_CANT, "ENDO_FREC"=>$ENDO_FREC, "ALERGIAS_CUAL"=>$ALERGIAS_CUAL, "ALERGIAS_TRAT"=>$ALERGIAS_TRAT, "ALERGIAS_CANT"=>$ALERGIAS_CANT, "ALERGIAS_FREC"=>$ALERGIAS_FREC, "ENFER_QSI_CUAL"=>$ENFER_QSI_CUAL, "ENFER_QSI_TRAT"=>$ENFER_QSI_TRAT, "ENFER_QSI_CANT"=>$ENFER_QSI_CANT, "ENFER_QSI_FREC"=>$ENFER_QSI_FREC, "EPILEPSIA_CUAL"=>$EPILEPSIA_CUAL, "EPILEPSIA_TRAT"=>$EPILEPSIA_TRAT, "EPILEPSIA_CANT"=>$EPILEPSIA_CANT, "EPILEPSIA_FREC"=>$EPILEPSIA_FREC, "TRANSF"=>$TRANSF, "MOTIVO_TRANSF"=>$MOTIVO_TRANSF, "FECHA_TRANSF"=>$FECHA_TRANSF, "MOTIVO_TRANSF_2"=>$MOTIVO_TRANSF_2, "FECHA_TRANSF_2"=>$FECHA_TRANSF_2, "MOTIVO_TRANSF_3"=>$MOTIVO_TRANSF_3, "FECHA_TRANSF_3"=>$FECHA_TRANSF_3, "OTRO_CIRUGIA"=>$OTRO_CIRUGIA,

                                                "DIABETES_TRAT_2"=>$DIABETES_TRAT_2, "DIABETES_CANT_2"=>$DIABETES_CANT_2, "DIABETES_FREC_2"=>$DIABETES_FREC_2, "DIABETES_TRAT_3"=>$DIABETES_TRAT_3, "DIABETES_CANT_3"=>$DIABETES_CANT_3, "DIABETES_FREC_3"=>$DIABETES_FREC_3, "HIPER_TRAT_2"=>$HIPER_TRAT_2, "HIPER_CANT_2"=>$HIPER_CANT_2, "HIPER_FREC_2"=>$HIPER_FREC_2, "HIPER_TRAT_3"=>$HIPER_TRAT_3, "HIPER_CANT_3"=>$HIPER_CANT_3, "HIPER_FREC_3"=>$HIPER_FREC_3

                                                , "HEPA"=>$HEPA, "HEPA_CUAL"=>$HEPA_CUAL, "HEPA_TIEM"=>$HEPA_TIEM, "HEPA_TRAT"=>$HEPA_TRAT, "HEPA_CANT"=>$HEPA_CANT, "HEPA_FREC"=>$HEPA_FREC, "NEFRO"=>$NEFRO, "NEFRO_CUAL"=>$NEFRO_CUAL, "NEFRO_TIEM"=>$NEFRO_TIEM, "NEFRO_TRAT"=>$NEFRO_TRAT, "NEFRO_CANT"=>$NEFRO_CANT, "NEFRO_FREC"=>$NEFRO_FREC, "ENDOCRI"=>$ENDOCRI, "ENDOCRI_CUAL"=>$ENDOCRI_CUAL, "ENDOCRI_TIEM"=>$ENDOCRI_TIEM, "ENDOCRI_TRAT"=>$ENDOCRI_TRAT, "ENDOCRI_CANT"=>$ENDOCRI_CANT, "ENDOCRI_FREC"=>$ENDOCRI_FREC, "PSI"=>$PSI, "PSI_CUAL"=>$PSI_CUAL, "PSI_TIEM"=>$PSI_TIEM, "PSI_TRAT"=>$PSI_TRAT, "PSI_CANT"=>$PSI_CANT, "PSI_FREC"=>$PSI_FREC, "CANCER"=>$CANCER, "CANCER_CUAL"=>$CANCER_CUAL, "CANCER_TIEM"=>$CANCER_TIEM, "CANCER_TRAT"=>$CANCER_TRAT, "CANCER_CANT"=>$CANCER_CANT, "CANCER_FREC"=>$CANCER_FREC

                                                , "TIPO_CIRU_4"=>$TIPO_CIRU_4, "FECHA_CIRU_4"=>$FECHA_CIRU_4, "TIPO_CIRU_5"=>$TIPO_CIRU_5, "FECHA_CIRU_5"=>$FECHA_CIRU_5, "ALERGIA"=>$ALERGIA, "ALERGIA_1"=>$ALERGIA_1, "ALERGIA_2"=>$ALERGIA_2, "ALERGIA_3"=>$ALERGIA_3, "ALERGIA_4"=>$ALERGIA_4, "ALERGIA_5"=>$ALERGIA_5, "ALERGIA_6"=>$ALERGIA_6
                                                
                                           ); 

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