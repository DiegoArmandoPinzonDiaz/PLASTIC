<?php 

					use Dompdf\Adapter\CPDF;
					use Dompdf\Dompdf;
					use Dompdf\Exception;
					# Cargamos la librería dompdf.
					//require_once 'lib/pdf/dompdf_config.inc.php';
					require_once 'dompdf/autoload.inc.php';

                //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";



     //if(isset($_POST["texto"]) && isset($_POST["texto2"]) )
	//function generarPDF1()
      //{

			  $val=$_GET['folio'];
                    $val2=$_GET['index'];
                    $val3=$_GET['fecha'];

                    $val4=$_GET['pais'];
                    $val5=$_GET['estado'];
                    $val6=$_GET['delegacion'];

                    $val7=$_GET['estado2'];
                    $val8=$_GET['delegacion2'];

                    $doctor=$_GET['medico'];

                              $folio = '';
                              $curp = '';
                              $nom = '';
                              $apellido_1 = '';
                              $apellido_2 = '';
                              $fecha_nac = '';
                              $lugar_nac = '';
                              $sexo = '';
                              $domicilio = '';
                              $colonia = '';
                              $delegacion = '';
                              $estado = '';
                              $religion = '';
                              $escolaridad = '';
                              $estado_civil = '';
                              $telefono = '';
                              $celular = '';
                              $e_mail = '';
                              $grupo_sang = '';
                              $cuenta_seg = '';
                              $seguro_medico = '';
                              $ocupacion = '';
                              $contacto ='';
                              $recomendado = '';
                              $otro = '';
                              $foto = '';
                              $fecha_reg  ='';
                              $edad = '';

                              $RFC='';
                              $RAZON_SOCIAL='';
                              $TIPO_PERSONA='';
                              $CODIGO_POSTAL='';


                                          $DIABETES = '';
                                          $HIPER_ART = '';
                                          $CANCER = '';
                                          $CARDIO = '';
                                          $HEPATO = '';
                                          $NEFRO = '';
                                          $ENFERM_ENDO = '';
                                          $ENFERM_QSIQ = '';
                                          $EPILEP = '';
                                          $ASMA = '';
                                          $HEMAT = '';
                                          $PRO_COA = '';
                                          
                                          $OTRAS = '';


                                          $DIABETES_QUIEN = '';
                                          $HIPER_ART_QUIEN = '';
                                          $CANCER1 = '';
                                          $CANCER1_QUIEN = '';
                                          $CANCER2 = '';
                                          $CANCER2_QUIEN = '';
                                          $CANCER3 = '';
                                          $CANCER3_QUIEN = '';
                                          $CANCER4 = '';
                                          $CANCER4_QUIEN = '';
                                          $CARDIO_QUIEN = '';
                                          $HEPATO_QUIEN = '';
                                          $NEFRO_QUIEN = '';
                                          $ENFERM_ENDO_QUIEN = '';                                          
                                          $ENFERM_QSIQ_QUIEN = '';
                                          $EPILEP_QUIEN = '';
                                          $ASMA_QUIEN = '';
                                          $HEMAT_QUIEN = '';



                                          $MASC = '';
                                          $TIPO_MASC = '';

                                          $ACTI_FISI = '';
                                          $ACTI_FISI_CUAL = '';
                                          $ACTI_FISI_TIEM = '';
                                          $ACTI_FISI_FREC = '';

                                          $CONS_ALCO = '';
                                          $CONS_ALCO_CUAL = '';
                                          $CONS_ALCO_TIEM = '';
                                          $CONS_ALCO_FREC = '';

                                          $TABAQ = '';
                                          $TABAQ_CUAL = '';
                                          $TABAQ_TIEM = '';
                                          $TABAQ_FREC = '';

                                          $USO_DROG = '';
                                          $USO_DROG_CUAL = '';
                                          $USO_DROG_TIEM = '';
                                          $USO_DROG_FREC = '';

                                          $USO_DROG_CUAL_2 = '';
                                          $USO_DROG_TIEM_2 = '';
                                          $USO_DROG_FREC_2 = '';
                                          $USO_DROG_CUAL_3 = '';
                                          $USO_DROG_TIEM_3 = '';
                                          $USO_DROG_FREC_3 = '';

                                          $ING_MED_SUP = '';
                                          $ING_MED_SUP_CUAL = '';

                                          $TATUAJES = '';
                                          $TATUAJES_FREC = '';

                                          $ING_ASP_REG = '';
                                          $ING_ASP_REG_OCA = '';




                                          $DIABETES2 = '';
                                          $DIABETES_TIEM = '';
                                          $HIPER = '';
                                          $HIPER_TIEM = '';
                                          $PRO_COR = '';
                                          $PRO_COR_TIEM = '';
                                          $DERMA = '';
                                          $DERMA_TIEM = '';
                                          $ENDO = '';
                                          $ENDO_TIEM = '';
                                          $TIROI = '';
                                          $TIROI_TIEM = '';
                                          
                                          $ALERGIAS = '';

                                          $ALERGIAS_TIEM = '';
                                          $ENFER_QSI = '';

                                          $ENFER_QSI_TIEM = '';
                                          $EPILEPSIA = '';
                                          $EPILEPSIA_TIEM = '';
                                          $OTRAS = '';

                                          $HEPA = '';
                                          $NEFRO2 = '';
                                          $ENDOCRI = '';
                                          $PSI = '';
                                          $CANCER = '';



                                          $ALERGIA = '';
                                          $ALERGIA_1 = '';
                                          $ALERGIA_2 = '';
                                          $ALERGIA_3 = '';
                                          $ALERGIA_4 = '';
                                          $ALERGIA_5 = '';
                                          $ALERGIA_6 = '';



                                          $CIRUGIAS = '';
                                          $TIPO_CIRU = '';
                                          $FECHA_CIRU = '';

                                          $TIPO_CIRU_2 = '';
                                          $FECHA_CIRU_2 = '';

                                          $TIPO_CIRU_3 = '';
                                          $FECHA_CIRU_3 = '';



                                          $TIPO_CIRU_4 = '';
                                          $FECHA_CIRU_4 = '';

                                          $TIPO_CIRU_5 = '';
                                          $FECHA_CIRU_5 = '';



                                          $HOSP = '';
                                          $MOTIVO_HOSP = '';
                                          $FECHA_HOSP = '';

                                          $MOTIVO_HOSP_2 = '';
                                          $FECHA_HOSP_2 = '';

                                          $MOTIVO_HOSP_3 = '';
                                          $FECHA_HOSP_3 = '';



                                          $DIABETES_CUAL = '';
                                          $DIABETES_TRAT = '';
                                          $DIABETES_CANT = '';
                                          $DIABETES_FREC = '';

                                          $DIABETES_TRAT_2 = '';
                                          $DIABETES_CANT_2 = '';
                                          $DIABETES_FREC_2 = '';
                                          $DIABETES_TRAT_3 = '';
                                          $DIABETES_CANT_3 = '';
                                          $DIABETES_FREC_3 = '';

                                          $HIPER_CUAL = '';
                                          $HIPER_TRAT = '';
                                          $HIPER_CANT = '';
                                          $HIPER_FREC = '';

                                          $HIPER_TRAT_2 = '';
                                          $HIPER_CANT_2 = '';
                                          $HIPER_FREC_2 = '';
                                          $HIPER_TRAT_3 = '';
                                          $HIPER_CANT_3 = '';
                                          $HIPER_FREC_3 = '';

                                          $PRO_COR_CUAL = '';
                                          $PRO_COR_TRAT = '';
                                          $PRO_COR_CANT = '';
                                          $PRO_COR_FREC = '';

                                          $DERMA_CUAL = '';
                                          $DERMA_TRAT = '';
                                          $DERMA_CANT = '';
                                          $DERMA_FREC = '';

                                          $ENDO_CUAL = '';
                                          $ENDO_TRAT = '';
                                          $ENDO_CANT = '';
                                          $ENDO_FREC = '';

                                          $ALERGIAS_CUAL = ''; 
                                          $ALERGIAS_TRAT = '';
                                          $ALERGIAS_CANT = '';
                                          $ALERGIAS_FREC = '';

                                          $ENFER_QSI_CUAL = '';
                                          $ENFER_QSI_TRAT = '';
                                          $ENFER_QSI_CANT = '';
                                          $ENFER_QSI_FREC = '';

                                          $EPILEPSIA_CUAL = '';
                                          $EPILEPSIA_TRAT = '';
                                          $EPILEPSIA_CANT = '';
                                          $EPILEPSIA_FREC = '';


                                          $HEPA_CUAL = '';
                                          $HEPA_TRAT = '';
                                          $HEPA_CANT = '';
                                          $HEPA_FREC = '';
                                          $HEPA_TIEM = '';

                                          $NEFRO_CUAL = '';
                                          $NEFRO_TRAT = '';
                                          $NEFRO_CANT = '';
                                          $NEFRO_FREC = '';
                                          $NEFRO_TIEM = '';

                                          $ENDOCRI_CUAL = '';
                                          $ENDOCRI_TRAT = '';
                                          $ENDOCRI_CANT = '';
                                          $ENDOCRI_FREC = '';
                                          $ENDOCRI_TIEM = '';

                                          $PSI_CUAL = '';
                                          $PSI_TRAT = '';
                                          $PSI_CANT = '';
                                          $PSI_FREC = '';
                                          $PSI_TIEM = '';

                                          $CANCER_CUAL = '';
                                          $CANCER_TRAT = '';
                                          $CANCER_CANT = '';
                                          $CANCER_FREC = '';
                                          $CANCER_TIEM = '';



                                          $TRANSF = '';
                                          $MOTIVO_TRANSF =  '';
                                          $FECHA_TRANSF = '';
                                          $MOTIVO_TRANSF_2 =  '';
                                          $FECHA_TRANSF_2 = '';
                                          $MOTIVO_TRANSF_3 =  '';
                                          $FECHA_TRANSF_3 =  '';




                                          $INI_MENS = '';
                                          $CICLO_REG = '';
                                          $CICLO_IRE = '';
                                          $FECHA_MENS = '';
                                          $INI_VID = '';
                                          $NUM_EMB = '';
                                          $NUM_PARTOS = '';
                                          $NUM_CESARIA = '';
                                          $ABORTOS = '';
                                          $CUAN_ABOR = '';
                                          $MET_PLAN = '';
                                          $CUAL_MET_PLAN = '';
                                          
                                          $MED_HORM = '';

                                          $CUAL_MED_HORM = '';
                                          $EXPO_SOLAR = '';

                                          $TIEMPO_EXPO = '';
                                          $ID_HORA_EXPO = '';
                                          $USO_PROT = '';
                                          $MARCA_PROT = '';

                                          $FPS = '';



                                          $PROD_TOXINA = '';
                                          $FECHA_TOXINA = '';
                                          $PROD_RELLENO = '';
                                          $FECHA_RELLENO = '';
                                          $PROD_HILOS = '';
                                          $FECHA_HILOS = '';
                                          $PROD_PEELING = '';
                                          $FECHA_PEELING = '';
                                          $PROD_RADIO = '';
                                          $FECHA_RADIO = '';
                                          $PROD_CARBO = '';
                                          $FECHA_CARBO = '';
                                          
                                          $PROD_RADIO_CORP = '';

                                          $FECHA_RADIO_CORP = '';
                                          $PROD_ULTRA = '';

                                          $FECHA_ULTRA = '';
                                          $PROD_HIDRO = '';
                                          $FECHA_HIDRO = '';
                                          $PROD_CRIO = '';

                                          $FECHA_CRIO = '';


                                          $PROD_DEPILA = '';
                                          $FECHA_DEPILA = '';
                                          $PROD_OTRO = '';
                                          $FECHA_OTRO = '';
                                          $PROD_DEPILA_CORP = '';
                                          $FECHA_DEPILA_CORP = '';
                                          $PROD_OTRO_CORP = '';
                                          $FECHA_OTRO_CORP = '';



                                          $ESPECIFICAR = '';
                                          $ID_FITZ = '';
                                          $ID_GLOGAU = '';
                                          $ID_TIP_ROSTRO = '';
                                          $ID_TIP_PIEL = '';
                                          $LESIONES = '';
                                          $FC = '';
                                          $FR = '';
                                          $TABLA = '';
                                          $TEMP = '';
                                          $PESO = '';
                                          $TALLA = '';
                                          
                                          $IMC = '';

                                          $TABLA2 = '';

                                          $EXAMEN = '';
                                          $CABEZA = '';
                                          $CUELLO = '';
                                          $TORAX = '';
                                          $ABDOMEN = '';
                                          $EXTSUP = '';
                                          $EXTINF = '';

                                          $HABITUS = '';
                                          $GENITALES = '';
                                          $NERVIOSO = '';


                                          $PADECIMIENTO = '';
                                          $SIGNOS = '';
                                          $APARATO_CAR = '';
                                          $APARATO_RES = '';
                                          $APARATO_DIG = '';
                                          $SISTEMA_NEF = '';
                                          $SISTEMA_END = '';
                                          $SISTEMA_HEM = '';
                                          $SISTEMA_NER = '';
                                          $SISTEMA_MUS = '';
                                          $PIEL = '';
                                          $ORGANOS = '';
                                          $ESFERA = '';
                                          $INDICACIONT = '';
                                          $PRONOSTICO = '';


                                          $SANGUINEA1 = '';
                                          $SANGUINEA2 = '';
                                          $SANGUINEA3 = '';
                                          $SANGUINEA4 = '';
                                          $SANGUINEA5 = '';
                                          $SANGUINEA6 = '';
                                          $SANGUINEA7 = '';
                                          $SANGUINEA8 = '';
                                          $SANGUINEA9 = '';
                                          $SANGUINEA10 = '';
                                          $SANGUINEA11 = '';
                                          $SANGUINEA12 = '';
                                          $SANGUINEA13 = '';
                                          $SANGUINEA14 = '';
                                          $SANGUINEA15 = '';
                                          $SANGUINEA16 = '';
                                          $SANGUINEA17 = '';
                                          $SANGUINEA18 = '';
                                          $SANGUINEA19 = '';

                                          $HEMATICA1 = '';
                                          $HEMATICA2 = '';
                                          $HEMATICA3 = '';
                                          $HEMATICA4 = '';
                                          $HEMATICA5 = '';
                                          $HEMATICA6 = '';
                                          $HEMATICA7 = '';
                                          $HEMATICA8 = '';

                                          $TP1 = '';
                                          $TP2 = '';
                                          $TP3 = '';

                                          $EGO1 = '';
                                          $EGO2 = '';
                                          $EGO3 = '';
                                          $EGO4 = '';
                                          $EGO5 = '';
                                          $EGO6 = '';
                                          $EGO7 = '';

                                          $TIROIDEO1 = '';
                                          $TIROIDEO2 = '';
                                          $TIROIDEO3 = '';
                                          $TIROIDEO4 = '';
                                          $TIROIDEO5 = '';
                                          $TIROIDEO6 = '';


                                          $GABINETE1 = '';
                                          $GABINETE2 = '';
                                          $GABINETE3 = '';
                                          $GABINETE4 = '';
                                          $GABINETE5 = '';
                                          $GABINETE6 = '';
                                          $GABINETE7 = '';
                                          $GABINETE8 = '';
                                          $GABINETE9 = '';

                                          $DIAGNOSTICO1 = '';
                                          $DIAGNOSTICO2 = '';



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
                              //$fecha_nac = $row['FECHA_NAC'];
                              $fecha_nac = date("d-m-Y", strtotime($row['FECHA_NAC']));
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
                              $fecha_reg  = date("d-m-Y", strtotime($row['FECHA_REG'])); 
                              //echo $nom;
                                $cumpleanos = new DateTime($fecha_nac);
                                $hoy = new DateTime();
                                $annos = $hoy->diff($cumpleanos);
                                $edad =  $annos->y;

                              $RFC=$row['RFC'];
                              $RAZON_SOCIAL=$row['RAZON_SOCIAL'];
                              $TIPO_PERSONA=$row['TIPO_PERSONA'];
                              $CODIGO_POSTAL=$row['CODIGO_POSTAL'];


                              $DOMICILIO_FISCAL=$row['DOMICILIO_FISCAL'];
                              $COLONIA_FISCAL=$row['COLONIA_FISCAL'];
                              $ESTADO_FISCAL=$row['ESTADO_FISCAL'];
                              $MUNICIPIO_FISCAL=$row['MUNICIPIO_FISCAL'];
                              $E_MAIL_FISCAL=$row['E_MAIL_FISCAL'];
                              $PAIS=$row['PAIS'];
                              $CODIGO_POSTAL_2=$row['CODIGO_POSTAL_2'];

                            }

                        if (!$sql)
                        {
                            echo("Error description: " . mysqli_error($con));
                        }   

                  }




                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM ANTECEDENTES WHERE FOLIO = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $DIABETES = $row['DIABETES'];
                                          $HIPER_ART = $row['HIPER_ART'];
                                          $CANCER = $row['CANCER'];
                                          $CARDIO = $row['CARDIO'];
                                          $HEPATO = $row['HEPATO'];
                                          $NEFRO2 = $row['NEFRO'];
                                          $ENFERM_ENDO = $row['ENFERM_ENDO'];
                                          $ENFERM_QSIQ = $row['ENFERM_QSIQ'];
                                          $EPILEP = $row['EPILEP'];
                                          $ASMA = $row['ASMA'];
                                          $HEMAT = $row['HEMAT'];
                                          $PRO_COA = $row['PRO_COA'];

                                          $DISLIPI = $row['DISLIPI'];
                                          $INFECCIOSAS = $row['INFECCIOSAS'];
                                          
                                          $OTRAS = $row['OTRAS'];


                                          $DIABETES_QUIEN = $row['DIABETES_QUIEN'];
                                          $HIPER_ART_QUIEN = $row['HIPER_ART_QUIEN'];
                                          $CANCER1 = $row['CANCER1'];
                                          $CANCER1_QUIEN = $row['CANCER1_QUIEN'];
                                          $CANCER2 = $row['CANCER2'];
                                          $CANCER2_QUIEN = $row['CANCER2_QUIEN'];
                                          $CANCER3 = $row['CANCER3'];
                                          $CANCER3_QUIEN = $row['CANCER3_QUIEN'];
                                          $CANCER4 = $row['CANCER4'];
                                          $CANCER4_QUIEN = $row['CANCER4_QUIEN'];
                                          $CARDIO_QUIEN = $row['CARDIO_QUIEN'];
                                          $HEPATO_QUIEN = $row['HEPATO_QUIEN'];
                                          $NEFRO_QUIEN = $row['NEFRO_QUIEN'];
                                          $ENFERM_ENDO_QUIEN = $row['ENFERM_ENDO_QUIEN'];                                          
                                          $ENFERM_QSIQ_QUIEN = $row['ENFERM_QSIQ_QUIEN'];
                                          $EPILEP_QUIEN = $row['EPILEP_QUIEN'];
                                          $ASMA_QUIEN = $row['ASMA_QUIEN'];
                                          $HEMAT_QUIEN = $row['HEMAT_QUIEN'];

                                          $DISLIPI_QUIEN = $row['DISLIPI_QUIEN'];
                                          $INFECCIOSAS_QUIEN = $row['INFECCIOSAS_QUIEN'];



                                          $MASC = $row['MASC'];
                                          $TIPO_MASC = $row['TIPO_MASC'];

                                          $ACTI_FISI = $row['ACTI_FISI'];
                                          $ACTI_FISI_CUAL = $row['ACTI_FISI_CUAL'];
                                          $ACTI_FISI_TIEM = $row['ACTI_FISI_TIEM'];
                                          $ACTI_FISI_FREC = $row['ACTI_FISI_FREC'];

                                          $CONS_ALCO = $row['CONS_ALCO'];
                                          $CONS_ALCO_CUAL = $row['CONS_ALCO_CUAL'];
                                          $CONS_ALCO_TIEM = $row['CONS_ALCO_TIEM'];
                                          $CONS_ALCO_FREC = $row['CONS_ALCO_FREC'];

                                          $TABAQ = $row['TABAQ'];
                                          $TABAQ_CUAL = $row['TABAQ_CUAL'];
                                          $TABAQ_TIEM = $row['TABAQ_TIEM'];
                                          $TABAQ_FREC = $row['TABAQ_FREC'];

                                          $USO_DROG = $row['USO_DROG'];
                                          $USO_DROG_CUAL = $row['USO_DROG_CUAL'];
                                          $USO_DROG_TIEM = $row['USO_DROG_TIEM'];
                                          $USO_DROG_FREC = $row['USO_DROG_FREC'];

                                          $USO_DROG_CUAL_2 = $row['USO_DROG_CUAL_2'];
                                          $USO_DROG_TIEM_2 = $row['USO_DROG_TIEM_2'];
                                          $USO_DROG_FREC_2 = $row['USO_DROG_FREC_2'];
                                          $USO_DROG_CUAL_3 = $row['USO_DROG_CUAL_3'];
                                          $USO_DROG_TIEM_3 = $row['USO_DROG_TIEM_3'];
                                          $USO_DROG_FREC_3 = $row['USO_DROG_FREC_3'];

                                          $TATUAJES = $row['TATUAJES'];
                                          $TATUAJES_FREC = $row['TATUAJES_FREC'];

                                          $ING_MED_SUP = $row['ING_MED_SUP'];
                                          $ING_MED_SUP_CUAL = $row['ING_MED_SUP_CUAL'];

                                          $ING_ASP_REG = $row['ING_ASP_REG'];
                                          $ING_ASP_REG_OCA = $row['ING_ASP_REG_OCA'];

                                      }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }



                $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM ANTECEDENTES_PAT WHERE FOLIO = '".$val."' ");




                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $DIABETES2 = $row['DIABETES'];
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

                                          $HEPA = $row['HEPA'];
                                          $HEPA_TIEM = $row['HEPA_TIEM'];

                                          $NEFRO = $row['NEFRO'];
                                          $NEFRO_TIEM = $row['NEFRO_TIEM'];

                                          $ENDOCRI = $row['ENDOCRI'];
                                          $ENDOCRI_TIEM = $row['ENDOCRI_TIEM'];

                                          $PSI = $row['PSI'];
                                          $PSI_TIEM = $row['PSI_TIEM'];

                                          $CANCER = $row['CANCER'];
                                          $CANCER_TIEM = $row['CANCER_TIEM'];



                                          $ALERGIA = $row['ALERGIA'];
                                          $ALERGIA_1 = $row['ALERGIA_1'];
                                          $ALERGIA_2 = $row['ALERGIA_2'];
                                          $ALERGIA_3 = $row['ALERGIA_3'];
                                          $ALERGIA_4 = $row['ALERGIA_4'];
                                          $ALERGIA_5 = $row['ALERGIA_5'];
                                          $ALERGIA_6 = $row['ALERGIA_6'];



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

                                          $DIABETES_TRAT_2 = $row['DIABETES_TRAT_2'];
                                          $DIABETES_CANT_2 = $row['DIABETES_CANT_2'];
                                          $DIABETES_FREC_2 = $row['DIABETES_FREC_2'];
                                          $DIABETES_TRAT_3 = $row['DIABETES_TRAT_3'];
                                          $DIABETES_CANT_3 = $row['DIABETES_CANT_3'];
                                          $DIABETES_FREC_3 = $row['DIABETES_FREC_3'];

                                          $HIPER_CUAL = $row['HIPER_CUAL'];
                                          $HIPER_TRAT = $row['HIPER_TRAT'];
                                          $HIPER_CANT = $row['HIPER_CANT'];
                                          $HIPER_FREC = $row['HIPER_FREC'];

                                          $HIPER_TRAT_2 = $row['HIPER_TRAT_2'];
                                          $HIPER_CANT_2 = $row['HIPER_CANT_2'];
                                          $HIPER_FREC_2 = $row['HIPER_FREC_2'];
                                          $HIPER_TRAT_3 = $row['HIPER_TRAT_3'];
                                          $HIPER_CANT_3 = $row['HIPER_CANT_3'];
                                          $HIPER_FREC_3 = $row['HIPER_FREC_3'];

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


                                          $HEPA_CUAL = $row['HEPA_CUAL'];
                                          $HEPA_TRAT = $row['HEPA_TRAT'];
                                          $HEPA_CANT = $row['HEPA_CANT'];
                                          $HEPA_FREC = $row['HEPA_FREC'];

                                          $NEFRO_CUAL = $row['NEFRO_CUAL'];
                                          $NEFRO_TRAT = $row['NEFRO_TRAT'];
                                          $NEFRO_CANT = $row['NEFRO_CANT'];
                                          $NEFRO_FREC = $row['NEFRO_FREC'];

                                          $ENDOCRI_CUAL = $row['ENDOCRI_CUAL'];
                                          $ENDOCRI_TRAT = $row['ENDOCRI_TRAT'];
                                          $ENDOCRI_CANT = $row['ENDOCRI_CANT'];
                                          $ENDOCRI_FREC = $row['ENDOCRI_FREC'];

                                          $PSI_CUAL = $row['PSI_CUAL'];
                                          $PSI_TRAT = $row['PSI_TRAT'];
                                          $PSI_CANT = $row['PSI_CANT'];
                                          $PSI_FREC = $row['PSI_FREC'];

                                          $CANCER_CUAL = $row['CANCER_CUAL'];
                                          $CANCER_TRAT = $row['CANCER_TRAT'];
                                          $CANCER_CANT = $row['CANCER_CANT'];
                                          $CANCER_FREC = $row['CANCER_FREC'];



                                          $TRANSF = $row['TRANSF'];
                                          $MOTIVO_TRANSF =  $row['MOTIVO_TRANSF'];
                                          $FECHA_TRANSF = $row['FECHA_TRANSF'];
                                          $MOTIVO_TRANSF_2 =  $row['MOTIVO_TRANSF_2'];
                                          $FECHA_TRANSF_2 = $row['FECHA_TRANSF_2'];
                                          $MOTIVO_TRANSF_3 =  $row['MOTIVO_TRANSF_3'];
                                          $FECHA_TRANSF_3 =  $row['FECHA_TRANSF_3'];
                                          $OTRO_CIRUGIA =  $row['OTRO_CIRUGIA'];

                                          

                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }     
            } 



              $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM ANTECEDENTES_GINECO WHERE FOLIO = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $INI_MENS = $row['INI_MENS'];
                                          $CICLO_REG = $row['CICLO_REG'];
                                          $CICLO_IRE = $row['CICLO_IRE'];
                                          $FECHA_MENS = $row['FECHA_MENS'];
                                          $INI_VID = $row['INI_VID'];
                                          $NUM_EMB = $row['NUM_EMB'];
                                          $NUM_PARTOS = $row['NUM_PARTOS'];
                                          $NUM_CESARIA = $row['NUM_CESARIA'];
                                          $ABORTOS = $row['ABORTOS'];
                                          $CUAN_ABOR = $row['CUAN_ABOR'];
                                          $MET_PLAN = $row['MET_PLAN'];
                                          $CUAL_MET_PLAN = $row['CUAL_MET_PLAN'];
                                          
                                          $MED_HORM = $row['MED_HORM'];

                                          $CUAL_MED_HORM = $row['CUAL_MED_HORM'];
                                          $EXPO_SOLAR = $row['EXPO_SOLAR'];

                                          $TIEMPO_EXPO = $row['TIEMPO_EXPO'];
                                          $ID_HORA_EXPO = $row['ID_HORA_EXPO'];
                                          $USO_PROT = $row['USO_PROT'];
                                          $MARCA_PROT = $row['MARCA_PROT'];

                                          $FPS = $row['FPS'];

                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  } 




            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM TRATAMIENTOS WHERE FOLIO = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $PROD_TOXINA = $row['PROD_TOXINA'];
                                          $FECHA_TOXINA = $row['FECHA_TOXINA'];
                                          $PROD_RELLENO = $row['PROD_RELLENO'];
                                          $FECHA_RELLENO = $row['FECHA_RELLENO'];
                                          $PROD_HILOS = $row['PROD_HILOS'];
                                          $FECHA_HILOS = $row['FECHA_HILOS'];
                                          $PROD_PEELING = $row['PROD_PEELING'];
                                          $FECHA_PEELING = $row['FECHA_PEELING'];
                                          $PROD_RADIO = $row['PROD_RADIO'];
                                          $FECHA_RADIO = $row['FECHA_RADIO'];
                                          $PROD_CARBO = $row['PROD_CARBO'];
                                          $FECHA_CARBO = $row['FECHA_CARBO'];
                                          
                                          $PROD_RADIO_CORP = $row['PROD_RADIO_CORP'];

                                          $FECHA_RADIO_CORP = $row['FECHA_RADIO_CORP'];
                                          $PROD_ULTRA = $row['PROD_ULTRA'];

                                          $FECHA_ULTRA = $row['FECHA_ULTRA'];
                                          $PROD_HIDRO = $row['PROD_HIDRO'];
                                          $FECHA_HIDRO = $row['FECHA_HIDRO'];
                                          $PROD_CRIO = $row['PROD_CRIO'];

                                          $FECHA_CRIO = $row['FECHA_CRIO'];


                                          $PROD_DEPILA = $row['PROD_DEPILA'];
                                          $FECHA_DEPILA = $row['FECHA_DEPILA'];
                                          $PROD_OTRO = $row['PROD_OTRO'];
                                          $FECHA_OTRO = $row['FECHA_OTRO'];
                                          $PROD_DEPILA_CORP = $row['PROD_DEPILA_CORP'];
                                          $FECHA_DEPILA_CORP = $row['FECHA_DEPILA_CORP'];
                                          $PROD_OTRO_CORP = $row['PROD_OTRO_CORP'];
                                          $FECHA_OTRO_CORP = $row['FECHA_OTRO_CORP'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }





            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM MOTIVO_CONSULTA WHERE FOLIO = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $ESPECIFICAR = $row['ESPECIFICAR'];
                                          $ID_FITZ = $row['ID_FITZ'];
                                          $ID_GLOGAU = $row['ID_GLOGAU'];
                                          $ID_TIP_ROSTRO = $row['ID_TIP_ROSTRO'];
                                          $ID_TIP_PIEL = $row['ID_TIP_PIEL'];
                                          $LESIONES = $row['LESIONES'];
                                          $FC = $row['FC'];
                                          $FR = $row['FR'];
                                          $TABLA = $row['TABLA'];
                                          $TEMP = $row['TEMP'];
                                          $PESO = $row['PESO'];
                                          $TALLA = $row['TALLA'];
                                          
                                          $IMC = $row['IMC'];

                                          $TABLA2 = $row['TABLA2'];

                                          $EXAMEN = $row['EXAMEN'];
                                          $CABEZA = $row['CABEZA'];
                                          $CUELLO = $row['CUELLO'];
                                          $TORAX = $row['TORAX'];
                                          $ABDOMEN = $row['ABDOMEN'];
                                          $EXTSUP = $row['EXTSUP'];
                                          $EXTINF = $row['EXTINF'];

                                          $HABITUS = $row['HABITUS'];
                                          $GENITALES = $row['GENITALES'];
                                          $NERVIOSO = $row['NERVIOSO'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }



            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM HISTORIA_CLINICA WHERE FOLIO_HIST = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $PADECIMIENTO = $row['PADECIMIENTO'];
                                          $SIGNOS = $row['SIGNOS'];
                                          $APARATO_CAR = $row['APARATO_CAR'];
                                          $APARATO_RES = $row['APARATO_RES'];
                                          $APARATO_DIG = $row['APARATO_DIG'];
                                          $SISTEMA_NEF = $row['SISTEMA_NEF'];
                                          $SISTEMA_END = $row['SISTEMA_END'];
                                          $SISTEMA_HEM = $row['SISTEMA_HEM'];
                                          $SISTEMA_NER = $row['SISTEMA_NER'];
                                          $SISTEMA_MUS = $row['SISTEMA_MUS'];
                                          $PIEL = $row['PIEL'];
                                          $ORGANOS = $row['ORGANOS'];
                                          $ESFERA = $row['ESFERA'];
                                          $INDICACIONT = $row['INDICACIONT'];
                                          $PRONOSTICO = $row['PRONOSTICO'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }



            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val."' AND ESTUDIO_LAB = '1' ORDER BY FECHA_LAB DESC LIMIT 1");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

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


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }  



            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val."' AND ESTUDIO_LAB = '2' ORDER BY FECHA_LAB DESC LIMIT 1");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $HEMATICA1 = $row['HEMATICA1'];
                                          $HEMATICA2 = $row['HEMATICA2'];
                                          $HEMATICA3 = $row['HEMATICA3'];
                                          $HEMATICA4 = $row['HEMATICA4'];
                                          $HEMATICA5 = $row['HEMATICA5'];
                                          $HEMATICA6 = $row['HEMATICA6'];
                                          $HEMATICA7 = $row['HEMATICA7'];
                                          $HEMATICA8 = $row['HEMATICA8'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }  


            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val."' AND ESTUDIO_LAB = '3' ORDER BY FECHA_LAB DESC LIMIT 1");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $TP1 = $row['TP1'];
                                          $TP2 = $row['TP2'];
                                          $TP3 = $row['TP3'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  } 



            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val."' AND ESTUDIO_LAB = '4' ORDER BY FECHA_LAB DESC LIMIT 1");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $EGO1 = $row['EGO1'];
                                          $EGO2 = $row['EGO2'];
                                          $EGO3 = $row['EGO3'];
                                          $EGO4 = $row['EGO4'];
                                          $EGO5 = $row['EGO5'];
                                          $EGO6 = $row['EGO6'];
                                          $EGO7 = $row['EGO7'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }


             $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val."' AND ESTUDIO_LAB = '5' ORDER BY FECHA_LAB DESC LIMIT 1");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $TIROIDEO1 = $row['TIROIDEO1'];
                                          $TIROIDEO2 = $row['TIROIDEO2'];
                                          $TIROIDEO3 = $row['TIROIDEO3'];
                                          $TIROIDEO4 = $row['TIROIDEO4'];
                                          $TIROIDEO5 = $row['TIROIDEO5'];
                                          $TIROIDEO6 = $row['TIROIDEO6'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }         



            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val."' AND ESTUDIOS_GABINETE = '1' ORDER BY FECHA_GABINETE DESC LIMIT 1");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $GABINETE1 = $row['FECHA_GABINETE'];
                                          $GABINETE2 = $row['ESTUDIOS_GABINETE'];
                                          $GABINETE3 = $row['RESULTADOS_GABINETE'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }  


            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val."' AND ESTUDIOS_GABINETE = '2' ORDER BY FECHA_GABINETE DESC LIMIT 1");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $GABINETE4 = $row['FECHA_GABINETE'];
                                          $GABINETE5 = $row['ESTUDIOS_GABINETE'];
                                          $GABINETE6 = $row['RESULTADOS_GABINETE'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  } 


            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val."' AND ESTUDIOS_GABINETE = '3' ORDER BY FECHA_GABINETE DESC LIMIT 1");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $GABINETE7 = $row['FECHA_GABINETE'];
                                          $GABINETE8 = $row['ESTUDIOS_GABINETE'];
                                          $GABINETE9 = $row['RESULTADOS_GABINETE'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }   


            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM DIAGNOSTICO WHERE FOLIO_DIAGNOSTICO = '".$val."' ORDER BY FECHA_DIAGNOSTICO DESC LIMIT 1 ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $DIAGNOSTICO1 = $row['FECHA_DIAGNOSTICO'];
                                          $DIAGNOSTICO2 = $row['ESTUDIO_DIAGNOSTICO'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }           

              





if($cuenta_seg  == 1){  $cuenta_seg = 'SI';  }
else{   $cuenta_seg = 'NO';  }  
                   
if($sexo  == 1){  $sexo = 'MASCULINO';  }
else{   $sexo = 'FEMENINO';  }  

$aplica='';
if($sexo == 'MASCULINO') { $aplica='NO APLICA';}


if($contacto == 1){  $contacto = 'Revista';   }   
else if($contacto == 2){  $contacto = 'Facebook';   }      
else if($contacto == 3){  $contacto = 'Recomendado';   }   
else if($contacto == 4){  $contacto = 'Web';   } 
else if($contacto == 5){  $contacto = 'Youtube';   } 
else if($contacto == 6){  $contacto = 'Twitter';   }  
else if($contacto == 7){  $contacto = 'Instagram';   }  
else if($contacto == 8){  $contacto = 'Otro';   }  



if($estado_civil == 1){  $estado_civil = 'Casado';   }   
else if($estado_civil == 2){  $estado_civil = 'Soltero';   }      
else if($estado_civil == 3){  $estado_civil = 'Viudo';   }   
else if($estado_civil == 4){  $estado_civil = 'Divorciado';   } 
else if($estado_civil == 5){  $estado_civil = 'Uni&oacute;n libre';   }       
else if($estado_civil == 6){  $estado_civil = 'Separado';   }       


if($grupo_sang == 1){  $grupo_sang = 'O-';   }   
else if($grupo_sang == 2){  $grupo_sang = 'O+';   }      
else if($grupo_sang == 3){  $grupo_sang = 'A-';   }   
else if($grupo_sang == 4){  $grupo_sang = 'A+';   } 
else if($grupo_sang == 5){  $grupo_sang = 'B-';   } 
else if($grupo_sang == 6){  $grupo_sang = 'B+';   }  
else if($grupo_sang == 7){  $grupo_sang = 'AB-';   }  
else if($grupo_sang == 8){  $grupo_sang = 'AB+';   }   



if( $DIABETES == 1){  $DIABETES = 'X';  }
else{  $DIABETES = ''; }

if( $HIPER_ART == 1){  $HIPER_ART = 'X';  }
else{  $HIPER_ART = ''; }

if( $CANCER == 1){  $CANCER = 'X';  }
else{  $CANCER = ''; }

if( $CARDIO == 1){  $CARDIO = 'X';  }
else{  $CARDIO = ''; }

if( $HEPATO == 1){  $HEPATO = 'X';  }
else{  $HEPATO = ''; }

if( $NEFRO2 == 1){  $NEFRO2 = 'X';  }
else{  $NEFRO2 = ''; }

if( $ENFERM_ENDO == 1){  $ENFERM_ENDO = 'X';  }
else{  $ENFERM_ENDO = ''; }

if( $ENFERM_QSIQ == 1){  $ENFERM_QSIQ = 'X';  }
else{  $ENFERM_QSIQ = ''; }

if( $EPILEP == 1){  $EPILEP = 'X';  }
else{  $EPILEP = ''; }

if( $ASMA == 1){  $ASMA = 'X';  }
else{  $ASMA = ''; }

if( $DISLIPI == 1){  $DISLIPI = 'X';  }
else{  $DISLIPI = ''; }

if( $INFECCIOSAS == 1){  $INFECCIOSAS = 'X';  }
else{  $INFECCIOSAS = ''; }

if( $HEMAT == 1){  $HEMAT = 'X';  }
else{  $HEMAT = ''; }

if( $PRO_COA == 1){  $PRO_COA = 'X';  }
else{  $PRO_COA = ''; }

if( $MASC == 1){  $MASC = 'SI';  }
else{  $MASC = 'NO'; }

if( $ACTI_FISI == 1){  $ACTI_FISI = 'SI';  }
else{  $ACTI_FISI = 'NO'; }

if( $CONS_ALCO == 1){  $CONS_ALCO = 'SI';  }
else{  $CONS_ALCO = 'NO'; }

if( $TABAQ == 1){  $TABAQ = 'SI';  }
else{  $TABAQ = 'NO'; }

if( $USO_DROG == 1){  $USO_DROG = 'SI';  }
else{  $USO_DROG = 'NO'; }

if( $ING_MED_SUP == 1){  $ING_MED_SUP = 'SI';  }
else{  $ING_MED_SUP = 'NO'; }

if( $ING_ASP_REG == 1){  $ING_ASP_REG = 'SI';  }
else{  $ING_ASP_REG = 'NO'; }


if( $DIABETES2 == 1){  $DIABETES2 = 'SI';  }
else{  $DIABETES2 = 'NO'; }

if( $CICLO_REG == 1){  $CICLO_REG = 'REGULARES';  }
else{  $CICLO_REG = 'IRREGULARES'; }

if( $ALERGIA == 1){  $ALERGIA = 'SI';  }
else{  $ALERGIA = 'NO'; }

if( $CIRUGIAS == 1){  $CIRUGIAS = 'SI';  }
else{  $CIRUGIAS = 'NO'; }

if( $HOSP == 1){  $HOSP = 'SI';  }
else{  $HOSP = 'NO'; }

if( $TRANSF == 1){  $TRANSF = 'SI';  }
else{  $TRANSF = 'NO'; }


if( $HIPER == 1){  $HIPER = 'SI';  }
else{  $HIPER = 'NO'; }

if( $PRO_COR == 1){  $PRO_COR = 'SI';  }
else{  $PRO_COR = 'NO'; }

if( $DERMA == 1){  $DERMA = 'SI';  }
else{  $DERMA = 'NO'; }

if( $ENDO == 1){  $ENDO = 'SI';  }
else{  $ENDO = 'NO'; }

if( $ALERGIAS == 1){  $ALERGIAS = 'SI';  }
else{  $ALERGIAS = 'NO'; }

if( $ENFER_QSI == 1){  $ENFER_QSI = 'SI';  }
else{  $ENFER_QSI = 'NO'; }

if( $EPILEPSIA == 1){  $EPILEPSIA = 'SI';  }
else{  $EPILEPSIA = 'NO'; }



if( $HEPA == 1){  $HEPA = 'SI';  }
else{  $HEPA = 'NO'; }

if( $NEFRO == 1){  $NEFRO = 'SI';  }
else{  $NEFRO = 'NO'; }

if( $ENDOCRI == 1){  $ENDOCRI = 'SI';  }
else{  $ENDOCRI = 'NO'; }

if( $PSI == 1){  $PSI = 'SI';  }
else{  $PSI = 'NO'; }

if( $CANCER == 1){  $CANCER = 'SI';  }
else{  $CANCER = 'NO'; }



if( $ABORTOS == 1){  $ABORTOS = 'SI';  }
else{  $ABORTOS = 'NO'; }

if( $MET_PLAN == 1){  $MET_PLAN = 'SI';  }
else{  $MET_PLAN = 'NO'; }

if( $MED_HORM == 1){  $MED_HORM = 'SI';  }
else{  $MED_HORM = 'NO'; }

if( $EXPO_SOLAR == 1){  $EXPO_SOLAR = 'SI';  }
else{  $EXPO_SOLAR = 'NO'; }

if( $USO_PROT == 1){  $USO_PROT = 'SI';  }
else{  $USO_PROT = 'NO'; }


if( $TIPO_PERSONA == 1){  $TIPO_PERSONA = 'PERSONA F&Iacute;SICA';  }
else{  $TIPO_PERSONA = 'PERSONA MORAL'; }


if($ID_FITZ == 1){  $ID_FITZ = 'I';   }   
else if($ID_FITZ == 2){  $ID_FITZ = 'II';   }      
else if($ID_FITZ == 3){  $ID_FITZ = 'III';   }   
else if($ID_FITZ == 4){  $ID_FITZ = 'IV';   } 
else if($ID_FITZ == 5){  $ID_FITZ = 'V';   } 
else if($ID_FITZ == 6){  $ID_FITZ = 'VI';   }  


if($ID_GLOGAU == 1){  $ID_GLOGAU = 'I';   }   
else if($ID_GLOGAU == 2){  $ID_GLOGAU = 'II';   }      
else if($ID_GLOGAU == 3){  $ID_GLOGAU = 'III';   }   
else if($ID_GLOGAU == 4){  $ID_GLOGAU = 'IV';   } 


if($ID_TIP_ROSTRO == 1){  $ID_TIP_ROSTRO = 'REDONDO';   }   
else if($ID_TIP_ROSTRO == 2){  $ID_TIP_ROSTRO = 'ALARGADO';   }      
else if($ID_TIP_ROSTRO == 3){  $ID_TIP_ROSTRO = 'DIAMANTE';   }   
else if($ID_TIP_ROSTRO == 4){  $ID_TIP_ROSTRO = 'OVALADO';   } 
else if($ID_TIP_ROSTRO == 5){  $ID_TIP_ROSTRO = 'TRIANGULO';   } 
else if($ID_TIP_ROSTRO == 6){  $ID_TIP_ROSTRO = 'TRIANGULO INVERTIDO';   }  
else if($ID_TIP_ROSTRO == 7){  $ID_TIP_ROSTRO = 'CUADRADO';   } 


if($ID_TIP_PIEL == 1){  $ID_TIP_PIEL = 'NORMAL';   }   
else if($ID_TIP_PIEL == 2){  $ID_TIP_PIEL = 'SECA';   }      
else if($ID_TIP_PIEL == 3){  $ID_TIP_PIEL = 'GRASA';   }   
else if($ID_TIP_PIEL == 4){  $ID_TIP_PIEL = 'MIXTA';   }  






$contacto =  strtoupper ( $contacto );
$estado_civil =  strtoupper ( $estado_civil );
$recomendado =  strtoupper ( $recomendado );

$CANCER1 =  strtoupper ( $CANCER1 );
$CANCER2 =  strtoupper ( $CANCER2 );
$CANCER3 =  strtoupper ( $CANCER3 );
$CANCER4 =  strtoupper ( $CANCER4 );

$CANCER1_QUIEN = str_replace(',', ', ',$CANCER1_QUIEN);
$CANCER2_QUIEN = str_replace(',', ', ',$CANCER2_QUIEN);
$CANCER3_QUIEN = str_replace(',', ', ',$CANCER3_QUIEN);
$CANCER4_QUIEN = str_replace(',', ', ',$CANCER4_QUIEN);

$DIABETES_QUIEN = str_replace(',', ', ',$DIABETES_QUIEN);
$HIPER_ART_QUIEN = str_replace(',', ', ',$HIPER_ART_QUIEN);
$CARDIO_QUIEN = str_replace(',', ', ',$CARDIO_QUIEN);
$HEPATO_QUIEN = str_replace(',', ', ',$HEPATO_QUIEN);
$NEFRO_QUIEN = str_replace(',', ', ',$NEFRO_QUIEN);
$ENFERM_ENDO_QUIEN = str_replace(',', ', ',$ENFERM_ENDO_QUIEN);                                          
$ENFERM_QSIQ_QUIEN = str_replace(',', ', ',$ENFERM_QSIQ_QUIEN);
$EPILEP_QUIEN = str_replace(',', ', ',$EPILEP_QUIEN);
$ASMA_QUIEN = str_replace(',', ', ',$ASMA_QUIEN);
$HEMAT_QUIEN = str_replace(',', ', ',$HEMAT_QUIEN);

$DISLIPI_QUIEN = str_replace(',', ', ',$DISLIPI_QUIEN);
$INFECCIOSAS_QUIEN = str_replace(',', ', ',$INFECCIOSAS_QUIEN);

$CANCER1_QUIEN = substr($CANCER1_QUIEN,1); 
$CANCER2_QUIEN = substr($CANCER2_QUIEN,1); 
$CANCER3_QUIEN = substr($CANCER3_QUIEN,1);
$CANCER4_QUIEN = substr($CANCER4_QUIEN,1); 

$DIABETES_QUIEN = substr($DIABETES_QUIEN,1); 
$HIPER_ART_QUIEN = substr($HIPER_ART_QUIEN,1); 
$CARDIO_QUIEN = substr($CARDIO_QUIEN,1); 
$HEPATO_QUIEN = substr($HEPATO_QUIEN,1); 
$NEFRO_QUIEN = substr($NEFRO_QUIEN,1); 
$ENFERM_ENDO_QUIEN = substr($ENFERM_ENDO_QUIEN,1);                                          
$ENFERM_QSIQ_QUIEN = substr($ENFERM_QSIQ_QUIEN,1); 
$EPILEP_QUIEN = substr($EPILEP_QUIEN,1); 
$ASMA_QUIEN = substr($ASMA_QUIEN,1); 
$DISLIPI_QUIEN = substr($DISLIPI_QUIEN,1); 
$INFECCIOSAS_QUIEN = substr($INFECCIOSAS_QUIEN,1); 
$HEMAT_QUIEN = substr($HEMAT_QUIEN,1); 


$CANCER1_QUIEN =  strtoupper ( $CANCER1_QUIEN );
$CANCER2_QUIEN =  strtoupper ( $CANCER2_QUIEN );
$CANCER3_QUIEN =  strtoupper ( $CANCER3_QUIEN );
$CANCER4_QUIEN =  strtoupper ( $CANCER4_QUIEN );


$DIABETES_QUIEN =  strtoupper ( $DIABETES_QUIEN );
$HIPER_ART_QUIEN =  strtoupper ( $HIPER_ART_QUIEN );
$CARDIO_QUIEN =  strtoupper ( $CARDIO_QUIEN );
$HEPATO_QUIEN =  strtoupper ( $HEPATO_QUIEN );
$NEFRO_QUIEN =  strtoupper ( $NEFRO_QUIEN );
$ENFERM_ENDO_QUIEN =  strtoupper ( $ENFERM_ENDO_QUIEN );
$ENFERM_QSIQ_QUIEN =  strtoupper ( $ENFERM_QSIQ_QUIEN );
$EPILEP_QUIEN =  strtoupper ( $EPILEP_QUIEN );
$ASMA_QUIEN =  strtoupper ( $ASMA_QUIEN );
$HEMAT_QUIEN =  strtoupper ( $HEMAT_QUIEN );

$DISLIPI_QUIEN =  strtoupper ( $DISLIPI_QUIEN );
$INFECCIOSAS_QUIEN =  strtoupper ( $INFECCIOSAS_QUIEN );


sleep(5);



$folio = utf8_decode($folio);
$curp = utf8_decode($curp);
$nom = utf8_decode($nom);
$apellido_1 = utf8_decode($apellido_1);
$apellido_2 = utf8_decode($apellido_2);
$fecha_nac = utf8_decode($fecha_nac);
$lugar_nac = utf8_decode($lugar_nac);
$sexo = utf8_decode($sexo);
$domicilio = utf8_decode($domicilio);
$colonia = utf8_decode($colonia);
$delegacion = utf8_decode($delegacion);
$estado = utf8_decode($estado);
$religion = utf8_decode($religion);
$escolaridad = utf8_decode($escolaridad);
$estado_civil = utf8_decode($estado_civil);
$telefono = utf8_decode($telefono);
$celular = utf8_decode($celular);
$e_mail = utf8_decode($e_mail);
$grupo_sang = utf8_decode($grupo_sang);
$cuenta_seg = utf8_decode($cuenta_seg);
$seguro_medico = utf8_decode($seguro_medico);
$ocupacion = utf8_decode($ocupacion);
$contacto = utf8_decode($contacto);
$recomendado = utf8_decode($recomendado);
$otro = utf8_decode($otro);
$foto = utf8_decode($foto);
$fecha_reg  = utf8_decode($fecha_reg);
$edad = utf8_decode($edad);

$RFC = utf8_decode($RFC);
$RAZON_SOCIAL = utf8_decode($RAZON_SOCIAL);
$TIPO_PERSONA = utf8_decode($TIPO_PERSONA);
$CODIGO_POSTAL = utf8_decode($CODIGO_POSTAL);


$DOMICILIO_FISCAL = utf8_decode($DOMICILIO_FISCAL);
$COLONIA_FISCAL = utf8_decode($COLONIA_FISCAL);
$ESTADO_FISCAL = utf8_decode($ESTADO_FISCAL);
$MUNICIPIO_FISCAL = utf8_decode($MUNICIPIO_FISCAL);
$E_MAIL_FISCAL = utf8_decode($E_MAIL_FISCAL);
$PAIS = utf8_decode($PAIS);
$CODIGO_POSTAL_2 = utf8_decode($CODIGO_POSTAL_2);


$DIABETES = utf8_decode($DIABETES);
$HIPER_ART = utf8_decode($HIPER_ART);
$CANCER = utf8_decode($CANCER);
$CARDIO = utf8_decode($CARDIO);
$HEPATO = utf8_decode($HEPATO);
$NEFRO = utf8_decode($NEFRO);
$ENFERM_ENDO = utf8_decode($ENFERM_ENDO);
$ENFERM_QSIQ = utf8_decode($ENFERM_QSIQ);
$EPILEP = utf8_decode($EPILEP);
$ASMA = utf8_decode($ASMA);
$HEMAT = utf8_decode($HEMAT);
$PRO_COA = utf8_decode($PRO_COA);

$DISLIPI = utf8_decode($DISLIPI);
$INFECCIOSAS = utf8_decode($INFECCIOSAS);

$OTRAS = utf8_decode($OTRAS);


$DIABETES_QUIEN = utf8_decode($DIABETES_QUIEN);
$HIPER_ART_QUIEN = utf8_decode($HIPER_ART_QUIEN);
$CANCER1 = utf8_decode($CANCER1);
$CANCER1_QUIEN = utf8_decode($CANCER1_QUIEN);
$CANCER2 = utf8_decode($CANCER2);
$CANCER2_QUIEN = utf8_decode($CANCER2_QUIEN);
$CANCER3 = utf8_decode($CANCER3);
$CANCER3_QUIEN = utf8_decode($CANCER3_QUIEN);
$CANCER4 = utf8_decode($CANCER4);
$CANCER4_QUIEN = utf8_decode($CANCER4_QUIEN);
$CARDIO_QUIEN = utf8_decode($CARDIO_QUIEN);
$HEPATO_QUIEN = utf8_decode($HEPATO_QUIEN);
$NEFRO_QUIEN = utf8_decode($NEFRO_QUIEN);
$ENFERM_ENDO_QUIEN = utf8_decode($ENFERM_ENDO_QUIEN);                                         
$ENFERM_QSIQ_QUIEN = utf8_decode($ENFERM_QSIQ_QUIEN);
$EPILEP_QUIEN = utf8_decode($EPILEP_QUIEN);
$ASMA_QUIEN = utf8_decode($ASMA_QUIEN);
$HEMAT_QUIEN = utf8_decode($HEMAT_QUIEN);

$INFECCIOSAS_QUIEN = utf8_decode($INFECCIOSAS_QUIEN);
$DISLIPI_QUIEN = utf8_decode($DISLIPI_QUIEN);



$MASC = utf8_decode($MASC);
$TIPO_MASC = utf8_decode($TIPO_MASC);

$ACTI_FISI = utf8_decode($ACTI_FISI);
$ACTI_FISI_CUAL = utf8_decode($ACTI_FISI_CUAL);
$ACTI_FISI_TIEM = utf8_decode($ACTI_FISI_TIEM);
$ACTI_FISI_FREC = utf8_decode($ACTI_FISI_FREC);

$CONS_ALCO = utf8_decode($CONS_ALCO);
$CONS_ALCO_CUAL = utf8_decode($CONS_ALCO_CUAL);
$CONS_ALCO_TIEM = utf8_decode($CONS_ALCO_TIEM);
$CONS_ALCO_FREC = utf8_decode($CONS_ALCO_FREC);

$TABAQ = utf8_decode($TABAQ);
$TABAQ_CUAL = utf8_decode($TABAQ_CUAL);
$TABAQ_TIEM = utf8_decode($TABAQ_TIEM);
$TABAQ_FREC = utf8_decode($TABAQ_FREC);

$USO_DROG = utf8_decode($USO_DROG);
$USO_DROG_CUAL = utf8_decode($USO_DROG_CUAL);
$USO_DROG_TIEM = utf8_decode($USO_DROG_TIEM);
$USO_DROG_FREC = utf8_decode($USO_DROG_FREC);

$USO_DROG_CUAL_2 = utf8_decode($USO_DROG_CUAL_2);
$USO_DROG_TIEM_2 = utf8_decode($USO_DROG_TIEM_2);
$USO_DROG_FREC_2 = utf8_decode($USO_DROG_FREC_2);
$USO_DROG_CUAL_3 = utf8_decode($USO_DROG_CUAL_3);
$USO_DROG_TIEM_3 = utf8_decode($USO_DROG_TIEM_3);
$USO_DROG_FREC_3 = utf8_decode($USO_DROG_FREC_3);

$TATUAJES = utf8_decode($TATUAJES);
$TATUAJES_FREC = utf8_decode($TATUAJES_FREC);

$ING_MED_SUP = utf8_decode($ING_MED_SUP);
$ING_MED_SUP_CUAL = utf8_decode($ING_MED_SUP_CUAL);

$ING_ASP_REG = utf8_decode($ING_ASP_REG);
$ING_ASP_REG_OCA = utf8_decode($ING_ASP_REG_OCA);




$DIABETES2 = utf8_decode($DIABETES2);
$DIABETES_TIEM = utf8_decode($DIABETES_TIEM);
$HIPER = utf8_decode($HIPER);
$HIPER_TIEM = utf8_decode($HIPER_TIEM);
$PRO_COR = utf8_decode($PRO_COR);
$PRO_COR_TIEM = utf8_decode($PRO_COR_TIEM);
$DERMA = utf8_decode($DERMA);
$DERMA_TIEM = utf8_decode($DERMA_TIEM);
$ENDO = utf8_decode($ENDO);
$ENDO_TIEM = utf8_decode($ENDO_TIEM);
$TIROI = utf8_decode($TIROI);
$TIROI_TIEM = utf8_decode($TIROI_TIEM);

$ALERGIAS = utf8_decode($ALERGIAS);

$ALERGIAS_TIEM = utf8_decode($ALERGIAS_TIEM);
$ENFER_QSI = utf8_decode($ENFER_QSI);

$ENFER_QSI_TIEM = utf8_decode($ENFER_QSI_TIEM);
$EPILEPSIA = utf8_decode($EPILEPSIA);
$EPILEPSIA_TIEM = utf8_decode($EPILEPSIA_TIEM);
$OTRAS = utf8_decode($OTRAS);



$HEPA = utf8_decode($HEPA);
$HEPA_TIEM = utf8_decode($HEPA_TIEM);

$NEFRO = utf8_decode($NEFRO);
$NEFRO_TIEM = utf8_decode($NEFRO_TIEM);

$ENDOCRI = utf8_decode($ENDOCRI);
$ENDOCRI_TIEM = utf8_decode($ENDOCRI_TIEM);

$PSI = utf8_decode($PSI);
$PSI_TIEM = utf8_decode($PSI_TIEM);

$CANCER = utf8_decode($CANCER);
$CANCER_TIEM = utf8_decode($CANCER_TIEM);


$ALERGIA = utf8_decode($ALERGIA);
$ALERGIA_1 = utf8_decode($ALERGIA_1);
$ALERGIA_1 = utf8_decode($ALERGIA_1);
$ALERGIA_1 = utf8_decode($ALERGIA_1);
$ALERGIA_1 = utf8_decode($ALERGIA_1);
$ALERGIA_1 = utf8_decode($ALERGIA_1);


$CIRUGIAS = utf8_decode($CIRUGIAS);
$TIPO_CIRU = utf8_decode($TIPO_CIRU);
$FECHA_CIRU = utf8_decode($FECHA_CIRU);

$TIPO_CIRU_2 = utf8_decode($TIPO_CIRU_2);
$FECHA_CIRU_2 = utf8_decode($FECHA_CIRU_2);

$TIPO_CIRU_3 = utf8_decode($TIPO_CIRU_3);
$FECHA_CIRU_3 = utf8_decode($FECHA_CIRU_3);


$TIPO_CIRU_4 = utf8_decode($TIPO_CIRU_4);
$FECHA_CIRU_4 = utf8_decode($FECHA_CIRU_4);

$TIPO_CIRU_5 = utf8_decode($TIPO_CIRU_5);
$FECHA_CIRU_5 = utf8_decode($FECHA_CIRU_5);




$HOSP = utf8_decode($HOSP);
$MOTIVO_HOSP = utf8_decode($MOTIVO_HOSP);
$FECHA_HOSP = utf8_decode($FECHA_HOSP);

$MOTIVO_HOSP_2 = utf8_decode($MOTIVO_HOSP_2);
$FECHA_HOSP_2 = utf8_decode($FECHA_HOSP_2);

$MOTIVO_HOSP_3 = utf8_decode($MOTIVO_HOSP_3);
$FECHA_HOSP_3 = utf8_decode($FECHA_HOSP_3);



$DIABETES_CUAL = utf8_decode($DIABETES_CUAL);
$DIABETES_TRAT = utf8_decode($DIABETES_TRAT);
$DIABETES_CANT = utf8_decode($DIABETES_CANT);
$DIABETES_FREC = utf8_decode($DIABETES_FREC);

$DIABETES_TRAT_2 = utf8_decode($DIABETES_TRAT_2);
$DIABETES_CANT_2 = utf8_decode($DIABETES_CANT_2);
$DIABETES_FREC_2 = utf8_decode($DIABETES_FREC_2);

$DIABETES_TRAT_3 = utf8_decode($DIABETES_TRAT_3);
$DIABETES_CANT_3 = utf8_decode($DIABETES_CANT_3);
$DIABETES_FREC_3 = utf8_decode($DIABETES_FREC_3);

$HIPER_CUAL = utf8_decode($HIPER_CUAL);
$HIPER_TRAT = utf8_decode($HIPER_TRAT);
$HIPER_CANT = utf8_decode($HIPER_CANT);
$HIPER_FREC = utf8_decode($HIPER_FREC);

$HIPER_TRAT_2 = utf8_decode($HIPER_TRAT_2);
$HIPER_CANT_2 = utf8_decode($HIPER_CANT_2);
$HIPER_FREC_2 = utf8_decode($HIPER_FREC_2);
$HIPER_TRAT_3 = utf8_decode($HIPER_TRAT_3);
$HIPER_CANT_3 = utf8_decode($HIPER_CANT_3);
$HIPER_FREC_3 = utf8_decode($HIPER_FREC_3);

$PRO_COR_CUAL = utf8_decode($PRO_COR_CUAL);
$PRO_COR_TRAT = utf8_decode($PRO_COR_TRAT);
$PRO_COR_CANT = utf8_decode($PRO_COR_CANT);
$PRO_COR_FREC = utf8_decode($PRO_COR_FREC);

$DERMA_CUAL = utf8_decode($DERMA_CUAL);
$DERMA_TRAT = utf8_decode($DERMA_TRAT);
$DERMA_CANT = utf8_decode($DERMA_CANT);
$DERMA_FREC = utf8_decode($DERMA_FREC);

$ENDO_CUAL = utf8_decode($ENDO_CUAL);
$ENDO_TRAT = utf8_decode($ENDO_TRAT);
$ENDO_CANT = utf8_decode($ENDO_CANT);
$ENDO_FREC = utf8_decode($ENDO_FREC);

$ALERGIAS_CUAL = utf8_decode($ALERGIAS_CUAL);
$ALERGIAS_TRAT = utf8_decode($ALERGIAS_TRAT);
$ALERGIAS_CANT = utf8_decode($ALERGIAS_CANT);
$ALERGIAS_FREC = utf8_decode($ALERGIAS_FREC);

$ENFER_QSI_CUAL = utf8_decode($ENFER_QSI_CUAL);
$ENFER_QSI_TRAT = utf8_decode($ENFER_QSI_TRAT);
$ENFER_QSI_CANT = utf8_decode($ENFER_QSI_CANT);
$ENFER_QSI_FREC = utf8_decode($ENFER_QSI_FREC);

$EPILEPSIA_CUAL = utf8_decode($EPILEPSIA_CUAL);
$EPILEPSIA_TRAT = utf8_decode($EPILEPSIA_TRAT);
$EPILEPSIA_CANT = utf8_decode($EPILEPSIA_CANT);
$EPILEPSIA_FREC = utf8_decode($EPILEPSIA_FREC);



$HEPA_CUAL = utf8_decode($HEPA_CUAL);
$HEPA_TRAT = utf8_decode($HEPA_TRAT);
$HEPA_CANT = utf8_decode($HEPA_CANT);
$HEPA_FREC = utf8_decode($HEPA_FREC);

$NEFRO_CUAL = utf8_decode($NEFRO_CUAL);
$NEFRO_TRAT = utf8_decode($NEFRO_TRAT);
$NEFRO_CANT = utf8_decode($NEFRO_CANT);
$NEFRO_FREC = utf8_decode($NEFRO_FREC);

$ENDOCRI_CUAL = utf8_decode($ENDOCRI_CUAL);
$ENDOCRI_TRAT = utf8_decode($ENDOCRI_TRAT);
$ENDOCRI_CANT = utf8_decode($ENDOCRI_CANT);
$ENDOCRI_FREC = utf8_decode($ENDOCRI_FREC);

$PSI_CUAL = utf8_decode($PSI_CUAL);
$PSI_TRAT = utf8_decode($PSI_TRAT);
$PSI_CANT = utf8_decode($PSI_CANT);
$PSI_FREC = utf8_decode($PSI_FREC);

$CANCER_CUAL = utf8_decode($CANCER_CUAL);
$CANCER_TRAT = utf8_decode($CANCER_TRAT);
$CANCER_CANT = utf8_decode($CANCER_CANT);
$CANCER_FREC = utf8_decode($CANCER_FREC);



$TRANSF = utf8_decode($TRANSF);
$MOTIVO_TRANSF = utf8_decode($MOTIVO_TRANSF);
$FECHA_TRANSF = utf8_decode($FECHA_TRANSF);
$MOTIVO_TRANSF_2 = utf8_decode($MOTIVO_TRANSF_2);
$FECHA_TRANSF_2 = utf8_decode($FECHA_TRANSF_2);
$MOTIVO_TRANSF_3 = utf8_decode($MOTIVO_TRANSF_3);
$FECHA_TRANSF_3 = utf8_decode($FECHA_TRANSF_3);
$OTRO_CIRUGIA = utf8_decode($OTRO_CIRUGIA);



$INI_MENS = utf8_decode($INI_MENS);
$CICLO_REG = utf8_decode($CICLO_REG);
$CICLO_IRE = utf8_decode($CICLO_IRE);
$FECHA_MENS = utf8_decode($FECHA_MENS);
$INI_VID = utf8_decode($INI_VID);
$NUM_EMB = utf8_decode($NUM_EMB);
$NUM_PARTOS = utf8_decode($NUM_PARTOS);
$NUM_CESARIA = utf8_decode($NUM_CESARIA);
$ABORTOS = utf8_decode($ABORTOS);
$CUAN_ABOR = utf8_decode($CUAN_ABOR);
$MET_PLAN = utf8_decode($MET_PLAN);
$CUAL_MET_PLAN = utf8_decode($CUAL_MET_PLAN);

$MED_HORM = utf8_decode($MED_HORM);

$CUAL_MED_HORM = utf8_decode($CUAL_MED_HORM);
$EXPO_SOLAR = utf8_decode($EXPO_SOLAR);

$TIEMPO_EXPO = utf8_decode($TIEMPO_EXPO);
$ID_HORA_EXPO = utf8_decode($ID_HORA_EXPO);
$USO_PROT = utf8_decode($USO_PROT);
$MARCA_PROT = utf8_decode($MARCA_PROT);

$FPS = utf8_decode($FPS);



$PROD_TOXINA = utf8_decode($PROD_TOXINA);
$PROD_HILOS = utf8_decode($PROD_HILOS);
$FECHA_HILOS = utf8_decode($FECHA_HILOS);
$PROD_PEELING = utf8_decode($PROD_PEELING);
$FECHA_PEELING = utf8_decode($FECHA_PEELING);
$PROD_RADIO = utf8_decode($PROD_RADIO);
$FECHA_RADIO = utf8_decode($FECHA_RADIO);
$PROD_CARBO = utf8_decode($PROD_CARBO);
$FECHA_CARBO = utf8_decode($FECHA_CARBO);

$PROD_RADIO_CORP = utf8_decode($PROD_RADIO_CORP);

$FECHA_RADIO_CORP = utf8_decode($FECHA_RADIO_CORP);
$PROD_ULTRA = utf8_decode($PROD_ULTRA);

$FECHA_ULTRA = utf8_decode($FECHA_ULTRA);
$PROD_HIDRO = utf8_decode($PROD_HIDRO);
$FECHA_HIDRO = utf8_decode($FECHA_HIDRO);
$PROD_CRIO = utf8_decode($PROD_CRIO);

$FECHA_CRIO = utf8_decode($FECHA_CRIO);


$PROD_DEPILA = utf8_decode($PROD_DEPILA);
$FECHA_DEPILA = utf8_decode($FECHA_DEPILA);
$PROD_OTRO = utf8_decode($PROD_OTRO);
$FECHA_OTRO = utf8_decode($FECHA_OTRO);
$PROD_DEPILA_CORP = utf8_decode($PROD_DEPILA_CORP);
$FECHA_DEPILA_CORP = utf8_decode($FECHA_DEPILA_CORP);
$PROD_OTRO_CORP = utf8_decode($PROD_OTRO_CORP);
$FECHA_OTRO_CORP = utf8_decode($FECHA_OTRO_CORP);



$ESPECIFICAR = utf8_decode($ESPECIFICAR);
$ID_FITZ = utf8_decode($ID_FITZ);
$ID_GLOGAU = utf8_decode($ID_GLOGAU);
$ID_TIP_ROSTRO = utf8_decode($ID_TIP_ROSTRO);
$ID_TIP_PIEL = utf8_decode($ID_TIP_PIEL);
$LESIONES = utf8_decode($LESIONES);
$FC = utf8_decode($FC);
$FR = utf8_decode($FR);
$TABLA = utf8_decode($TABLA);
$TEMP = utf8_decode($TEMP);
$PESO = utf8_decode($PESO);
$TALLA = utf8_decode($TALLA);

$IMC = utf8_decode($IMC);

$TABLA2 = utf8_decode($TABLA2);

$EXAMEN = utf8_decode($EXAMEN);
$CABEZA = utf8_decode($CABEZA);
$CUELLO = utf8_decode($CUELLO);
$TORAX = utf8_decode($TORAX);
$ABDOMEN = utf8_decode($ABDOMEN);
$EXTSUP = utf8_decode($EXTSUP);
$EXTINF = utf8_decode($EXTINF);

$HABITUS = utf8_decode($HABITUS);
$GENITALES = utf8_decode($GENITALES);
$NERVIOSO = utf8_decode($NERVIOSO);


$PADECIMIENTO = utf8_decode($PADECIMIENTO);
$SIGNOS = utf8_decode($SIGNOS);
$APARATO_CAR = utf8_decode($APARATO_CAR);
$APARATO_RES = utf8_decode($APARATO_RES);
$APARATO_DIG = utf8_decode($APARATO_DIG);
$SISTEMA_NEF = utf8_decode($SISTEMA_NEF);
$SISTEMA_END = utf8_decode($SISTEMA_END);
$SISTEMA_HEM = utf8_decode($SISTEMA_HEM);
$SISTEMA_NER = utf8_decode($SISTEMA_NER);
$SISTEMA_MUS = utf8_decode($SISTEMA_MUS);
$PIEL = utf8_decode($PIEL);
$ORGANOS = utf8_decode($ORGANOS);
$ESFERA = utf8_decode($ESFERA);
$INDICACIONT = utf8_decode($INDICACIONT);
$PRONOSTICO = utf8_decode($PRONOSTICO);


$SANGUINEA1 = utf8_decode($SANGUINEA1);
$SANGUINEA2 = utf8_decode($SANGUINEA2);
$SANGUINEA3 = utf8_decode($SANGUINEA3);
$SANGUINEA4 = utf8_decode($SANGUINEA4);
$SANGUINEA5 = utf8_decode($SANGUINEA5);
$SANGUINEA6 = utf8_decode($SANGUINEA6);
$SANGUINEA7 = utf8_decode($SANGUINEA7);
$SANGUINEA8 = utf8_decode($SANGUINEA8);
$SANGUINEA9 = utf8_decode($SANGUINEA9);
$SANGUINEA10 = utf8_decode($SANGUINEA10);
$SANGUINEA11 = utf8_decode($SANGUINEA11);
$SANGUINEA12 = utf8_decode($SANGUINEA12);
$SANGUINEA13 = utf8_decode($SANGUINEA13);
$SANGUINEA14 = utf8_decode($SANGUINEA14);
$SANGUINEA15 = utf8_decode($SANGUINEA15);
$SANGUINEA16 = utf8_decode($SANGUINEA16);
$SANGUINEA17 = utf8_decode($SANGUINEA17);
$SANGUINEA18 = utf8_decode($SANGUINEA18);
$SANGUINEA19 = utf8_decode($SANGUINEA19);


$HEMATICA1 = utf8_decode($HEMATICA1);
$HEMATICA2 = utf8_decode($HEMATICA2);
$HEMATICA3 = utf8_decode($HEMATICA3);
$HEMATICA4 = utf8_decode($HEMATICA4);
$HEMATICA5 = utf8_decode($HEMATICA5);
$HEMATICA6 = utf8_decode($HEMATICA6);
$HEMATICA7 = utf8_decode($HEMATICA7);
$HEMATICA8 = utf8_decode($HEMATICA8);


$TP1 = utf8_decode($TP1);
$TP2 = utf8_decode($TP2);
$TP3 = utf8_decode($TP3);

$EGO1 = utf8_decode($EGO1);
$EGO2 = utf8_decode($EGO2);
$EGO3 = utf8_decode($EGO3);
$EGO4 = utf8_decode($EGO4);
$EGO5 = utf8_decode($EGO5);
$EGO6 = utf8_decode($EGO6);
$EGO7 = utf8_decode($EGO7);

$TIROIDEO1 = utf8_decode($TIROIDEO1);
$TIROIDEO2 = utf8_decode($TIROIDEO2);
$TIROIDEO3 = utf8_decode($TIROIDEO3);
$TIROIDEO4 = utf8_decode($TIROIDEO4);
$TIROIDEO5 = utf8_decode($TIROIDEO5);
$TIROIDEO6 = utf8_decode($TIROIDEO6);


$GABINETE1 = utf8_decode($GABINETE1);
$GABINETE2 = utf8_decode($GABINETE2);
$GABINETE3 = utf8_decode($GABINETE3);
$GABINETE4 = utf8_decode($GABINETE4);
$GABINETE5 = utf8_decode($GABINETE5);
$GABINETE6 = utf8_decode($GABINETE6);
$GABINETE7 = utf8_decode($GABINETE7);
$GABINETE8 = utf8_decode($GABINETE8);
$GABINETE9 = utf8_decode($GABINETE9);


$DIAGNOSTICO1 = utf8_decode($DIAGNOSTICO1);
$DIAGNOSTICO2 = utf8_decode($DIAGNOSTICO2);


$val4 = utf8_decode($val4);
$val5 = utf8_decode($val5);
$val6 = utf8_decode($val6);

$val7 = utf8_decode($val7);
$val8 = utf8_decode($val8);




//-----

    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","Ñ");
    $permitidas= array ("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&ntilde;","&Ntilde;");


$val4 = str_replace($no_permitidas, $permitidas ,$val4);
$val5 = str_replace($no_permitidas, $permitidas ,$val5);
$val6 = str_replace($no_permitidas, $permitidas ,$val6);
$val7 = str_replace($no_permitidas, $permitidas ,$val7);
$val8 = str_replace($no_permitidas, $permitidas ,$val8);

$RFC = str_replace($no_permitidas, $permitidas ,$RFC);
$RAZON_SOCIAL = str_replace($no_permitidas, $permitidas ,$RAZON_SOCIAL);
$TIPO_PERSONA = str_replace($no_permitidas, $permitidas ,$TIPO_PERSONA);
$CODIGO_POSTAL = str_replace($no_permitidas, $permitidas ,$CODIGO_POSTAL);


$DOMICILIO_FISCAL = str_replace($no_permitidas, $permitidas ,$DOMICILIO_FISCAL);
$COLONIA_FISCAL = str_replace($no_permitidas, $permitidas ,$COLONIA_FISCAL);
$ESTADO_FISCAL = str_replace($no_permitidas, $permitidas ,$ESTADO_FISCAL);
$MUNICIPIO_FISCAL = str_replace($no_permitidas, $permitidas ,$MUNICIPIO_FISCAL);
$E_MAIL_FISCAL = str_replace($no_permitidas, $permitidas ,$E_MAIL_FISCAL);
$PAIS = str_replace($no_permitidas, $permitidas ,$PAIS);
$CODIGO_POSTAL_2 = str_replace($no_permitidas, $permitidas ,$CODIGO_POSTAL_2);



        $folio = str_replace($no_permitidas, $permitidas ,$folio);
        $curp = str_replace($no_permitidas, $permitidas ,$curp);
        $nom = str_replace($no_permitidas, $permitidas ,$nom);
        $apellido_1 = str_replace($no_permitidas, $permitidas ,$apellido_1);
        $apellido_2 = str_replace($no_permitidas, $permitidas ,$apellido_2);
        $fecha_nac = str_replace($no_permitidas, $permitidas ,$fecha_nac);
        $lugar_nac = str_replace($no_permitidas, $permitidas ,$lugar_nac);
        $sexo = str_replace($no_permitidas, $permitidas ,$sexo);
        $domicilio = str_replace($no_permitidas, $permitidas ,$domicilio);
        $colonia = str_replace($no_permitidas, $permitidas ,$colonia);
        $delegacion = str_replace($no_permitidas, $permitidas ,$delegacion);
        $estado = str_replace($no_permitidas, $permitidas ,$estado);
        $religion = str_replace($no_permitidas, $permitidas ,$religion);
        $escolaridad = str_replace($no_permitidas, $permitidas ,$escolaridad);
        $estado_civil = str_replace($no_permitidas, $permitidas ,$estado_civil);
        $telefono = str_replace($no_permitidas, $permitidas ,$telefono);
        $celular = str_replace($no_permitidas, $permitidas ,$celular);
        $e_mail = str_replace($no_permitidas, $permitidas ,$e_mail);
        $grupo_sang = str_replace($no_permitidas, $permitidas ,$grupo_sang);
        $cuenta_seg = str_replace($no_permitidas, $permitidas ,$cuenta_seg);
        $seguro_medico = str_replace($no_permitidas, $permitidas ,$seguro_medico);
        $ocupacion = str_replace($no_permitidas, $permitidas ,$ocupacion);
        $contacto = str_replace($no_permitidas, $permitidas ,$contacto);
        $recomendado = str_replace($no_permitidas, $permitidas ,$recomendado);
        $otro = str_replace($no_permitidas, $permitidas ,$otro);
        $foto = str_replace($no_permitidas, $permitidas ,$foto);
        $fecha_reg  = str_replace($no_permitidas, $permitidas ,$fecha_reg);
        $edad = str_replace($no_permitidas, $permitidas ,$edad);

        $DIABETES = str_replace($no_permitidas, $permitidas ,$DIABETES);
        $HIPER_ART = str_replace($no_permitidas, $permitidas ,$HIPER_ART);
        $CANCER = str_replace($no_permitidas, $permitidas ,$CANCER);
        $CARDIO = str_replace($no_permitidas, $permitidas ,$CARDIO);
        $HEPATO = str_replace($no_permitidas, $permitidas ,$HEPATO);
        $NEFRO = str_replace($no_permitidas, $permitidas ,$NEFRO);
        $ENFERM_ENDO = str_replace($no_permitidas, $permitidas ,$ENFERM_ENDO);
        $ENFERM_QSIQ = str_replace($no_permitidas, $permitidas ,$ENFERM_QSIQ);
        $EPILEP = str_replace($no_permitidas, $permitidas ,$EPILEP);
        $ASMA = str_replace($no_permitidas, $permitidas ,$ASMA);
        $HEMAT = str_replace($no_permitidas, $permitidas ,$HEMAT);
        $PRO_COA = str_replace($no_permitidas, $permitidas ,$PRO_COA);

        $DISLIPI = str_replace($no_permitidas, $permitidas ,$DISLIPI);
        $INFECCIOSAS = str_replace($no_permitidas, $permitidas ,$INFECCIOSAS);

        $OTRAS = str_replace($no_permitidas, $permitidas ,$OTRAS);


        $DIABETES_QUIEN = str_replace($no_permitidas, $permitidas ,$DIABETES_QUIEN);
        $HIPER_ART_QUIEN = str_replace($no_permitidas, $permitidas ,$HIPER_ART_QUIEN);
        $CANCER1 = str_replace($no_permitidas, $permitidas ,$CANCER1);
        $CANCER1_QUIEN = str_replace($no_permitidas, $permitidas ,$CANCER1_QUIEN);
        $CANCER2 = str_replace($no_permitidas, $permitidas ,$CANCER2);
        $CANCER2_QUIEN = str_replace($no_permitidas, $permitidas ,$CANCER2_QUIEN);
        $CANCER3 = str_replace($no_permitidas, $permitidas ,$CANCER3);
        $CANCER3_QUIEN = str_replace($no_permitidas, $permitidas ,$CANCER3_QUIEN);
        $CANCER4 = str_replace($no_permitidas, $permitidas ,$CANCER4);
        $CANCER4_QUIEN = str_replace($no_permitidas, $permitidas ,$CANCER4_QUIEN);
        $CARDIO_QUIEN = str_replace($no_permitidas, $permitidas ,$CARDIO_QUIEN);
        $HEPATO_QUIEN = str_replace($no_permitidas, $permitidas ,$HEPATO_QUIEN);
        $NEFRO_QUIEN = str_replace($no_permitidas, $permitidas ,$NEFRO_QUIEN);
        $ENFERM_ENDO_QUIEN = str_replace($no_permitidas, $permitidas ,$ENFERM_ENDO_QUIEN);                                        
        $ENFERM_QSIQ_QUIEN = str_replace($no_permitidas, $permitidas ,$ENFERM_QSIQ_QUIEN);
        $EPILEP_QUIEN = str_replace($no_permitidas, $permitidas ,$EPILEP_QUIEN);
        $ASMA_QUIEN = str_replace($no_permitidas, $permitidas ,$ASMA_QUIEN);
        $HEMAT_QUIEN = str_replace($no_permitidas, $permitidas ,$HEMAT_QUIEN);

        $DISLIPI_QUIEN = str_replace($no_permitidas, $permitidas ,$DISLIPI_QUIEN);
        $INFECCIOSAS_QUIEN = str_replace($no_permitidas, $permitidas ,$INFECCIOSAS_QUIEN);



        $MASC = str_replace($no_permitidas, $permitidas ,$MASC);
        $TIPO_MASC = str_replace($no_permitidas, $permitidas ,$TIPO_MASC);

        $ACTI_FISI = str_replace($no_permitidas, $permitidas ,$ACTI_FISI);
        $ACTI_FISI_CUAL = str_replace($no_permitidas, $permitidas ,$ACTI_FISI_CUAL);
        $ACTI_FISI_TIEM = str_replace($no_permitidas, $permitidas ,$ACTI_FISI_TIEM);
        $ACTI_FISI_FREC = str_replace($no_permitidas, $permitidas ,$ACTI_FISI_FREC);

        $CONS_ALCO = str_replace($no_permitidas, $permitidas ,$CONS_ALCO);
        $CONS_ALCO_CUAL = str_replace($no_permitidas, $permitidas ,$CONS_ALCO_CUAL);
        $CONS_ALCO_TIEM = str_replace($no_permitidas, $permitidas ,$CONS_ALCO_TIEM);
        $CONS_ALCO_FREC = str_replace($no_permitidas, $permitidas ,$CONS_ALCO_FREC);

        $TABAQ = str_replace($no_permitidas, $permitidas ,$TABAQ);
        $TABAQ_CUAL = str_replace($no_permitidas, $permitidas ,$TABAQ_CUAL);
        $TABAQ_TIEM = str_replace($no_permitidas, $permitidas ,$TABAQ_TIEM);
        $TABAQ_FREC = str_replace($no_permitidas, $permitidas ,$TABAQ_FREC);

        $USO_DROG = str_replace($no_permitidas, $permitidas ,$USO_DROG);
        $USO_DROG_CUAL = str_replace($no_permitidas, $permitidas ,$USO_DROG_CUAL);
        $USO_DROG_TIEM = str_replace($no_permitidas, $permitidas ,$USO_DROG_TIEM);
        $USO_DROG_FREC = str_replace($no_permitidas, $permitidas ,$USO_DROG_FREC);
        $USO_DROG_CUAL_2 = str_replace($no_permitidas, $permitidas ,$USO_DROG_CUAL_2);
        $USO_DROG_TIEM_2 = str_replace($no_permitidas, $permitidas ,$USO_DROG_TIEM_2);
        $USO_DROG_FREC_2 = str_replace($no_permitidas, $permitidas ,$USO_DROG_FREC_2);
        $USO_DROG_CUAL_3 = str_replace($no_permitidas, $permitidas ,$USO_DROG_CUAL_3);
        $USO_DROG_TIEM_3 = str_replace($no_permitidas, $permitidas ,$USO_DROG_TIEM_3);
        $USO_DROG_FREC_3 = str_replace($no_permitidas, $permitidas ,$USO_DROG_FREC_3);

        $TATUAJES = str_replace($no_permitidas, $permitidas ,$TATUAJES);
        $TATUAJES_FREC = str_replace($no_permitidas, $permitidas ,$TATUAJES_FREC);

        $ING_MED_SUP = str_replace($no_permitidas, $permitidas ,$ING_MED_SUP);
        $ING_MED_SUP_CUAL = str_replace($no_permitidas, $permitidas ,$ING_MED_SUP_CUAL);

        $ING_ASP_REG = str_replace($no_permitidas, $permitidas ,$ING_ASP_REG);
        $ING_ASP_REG_OCA = str_replace($no_permitidas, $permitidas ,$ING_ASP_REG_OCA);




        $DIABETES2 = str_replace($no_permitidas, $permitidas ,$DIABETES2);
        $DIABETES_TIEM = str_replace($no_permitidas, $permitidas ,$DIABETES_TIEM);
        $HIPER = str_replace($no_permitidas, $permitidas ,$HIPER);
        $HIPER_TIEM = str_replace($no_permitidas, $permitidas ,$HIPER_TIEM);
        $PRO_COR = str_replace($no_permitidas, $permitidas ,$PRO_COR);
        $PRO_COR_TIEM = str_replace($no_permitidas, $permitidas ,$PRO_COR_TIEM);
        $DERMA = str_replace($no_permitidas, $permitidas ,$DERMA);
        $DERMA_TIEM = str_replace($no_permitidas, $permitidas ,$DERMA_TIEM);
        $ENDO = str_replace($no_permitidas, $permitidas ,$ENDO);
        $ENDO_TIEM = str_replace($no_permitidas, $permitidas ,$ENDO_TIEM);
        $TIROI = str_replace($no_permitidas, $permitidas ,$TIROI);
        $TIROI_TIEM = str_replace($no_permitidas, $permitidas ,$TIROI_TIEM);

        $ALERGIAS = str_replace($no_permitidas, $permitidas ,$ALERGIAS);

        $ALERGIAS_TIEM = str_replace($no_permitidas, $permitidas ,$ALERGIAS_TIEM);
        $ENFER_QSI = str_replace($no_permitidas, $permitidas ,$ENFER_QSI);

        $ENFER_QSI_TIEM = str_replace($no_permitidas, $permitidas ,$ENFER_QSI_TIEM);
        $EPILEPSIA = str_replace($no_permitidas, $permitidas ,$EPILEPSIA);
        $EPILEPSIA_TIEM = str_replace($no_permitidas, $permitidas ,$EPILEPSIA_TIEM);
        $OTRAS = str_replace($no_permitidas, $permitidas ,$OTRAS);



        $HEPA = str_replace($no_permitidas, $permitidas ,$HEPA);
        $HEPA_TIEM = str_replace($no_permitidas, $permitidas ,$HEPA_TIEM);

        $NEFRO = str_replace($no_permitidas, $permitidas ,$NEFRO);
        $NEFRO_TIEM = str_replace($no_permitidas, $permitidas ,$NEFRO_TIEM);

        $ENDOCRI = str_replace($no_permitidas, $permitidas ,$ENDOCRI);
        $ENDOCRI_TIEM = str_replace($no_permitidas, $permitidas ,$ENDOCRI_TIEM);

        $PSI = str_replace($no_permitidas, $permitidas ,$PSI);
        $PSI_TIEM = str_replace($no_permitidas, $permitidas ,$PSI_TIEM);

        $CANCER = str_replace($no_permitidas, $permitidas ,$CANCER);
        $CANCER_TIEM = str_replace($no_permitidas, $permitidas ,$CANCER_TIEM);



        $ALERGIA = str_replace($no_permitidas, $permitidas ,$ALERGIA);
        $ALERGIA_1 = str_replace($no_permitidas, $permitidas ,$ALERGIA_1);
        $ALERGIA_2 = str_replace($no_permitidas, $permitidas ,$ALERGIA_2);
        $ALERGIA_3 = str_replace($no_permitidas, $permitidas ,$ALERGIA_3);
        $ALERGIA_4 = str_replace($no_permitidas, $permitidas ,$ALERGIA_4);
        $ALERGIA_5= str_replace($no_permitidas, $permitidas ,$ALERGIA_5);
        $ALERGIA_6 = str_replace($no_permitidas, $permitidas ,$ALERGIA_6);




        $CIRUGIAS = str_replace($no_permitidas, $permitidas ,$CIRUGIAS);
        $TIPO_CIRU = str_replace($no_permitidas, $permitidas ,$TIPO_CIRU);
        $FECHA_CIRU = str_replace($no_permitidas, $permitidas ,$FECHA_CIRU);

        $TIPO_CIRU_2 = str_replace($no_permitidas, $permitidas ,$TIPO_CIRU_2);
        $FECHA_CIRU_2 = str_replace($no_permitidas, $permitidas ,$FECHA_CIRU_2);

        $TIPO_CIRU_3 = str_replace($no_permitidas, $permitidas ,$TIPO_CIRU_3);
        $FECHA_CIRU_3 = str_replace($no_permitidas, $permitidas ,$FECHA_CIRU_3);

        $TIPO_CIRU_4 = str_replace($no_permitidas, $permitidas ,$TIPO_CIRU_4);
        $FECHA_CIRU_4 = str_replace($no_permitidas, $permitidas ,$FECHA_CIRU_4);

        $TIPO_CIRU_5 = str_replace($no_permitidas, $permitidas ,$TIPO_CIRU_5);
        $FECHA_CIRU_5 = str_replace($no_permitidas, $permitidas ,$FECHA_CIRU_5);



        $HOSP = str_replace($no_permitidas, $permitidas ,$HOSP);
        $MOTIVO_HOSP = str_replace($no_permitidas, $permitidas ,$MOTIVO_HOSP);
        $FECHA_HOSP = str_replace($no_permitidas, $permitidas ,$FECHA_HOSP);

        $MOTIVO_HOSP_2 = str_replace($no_permitidas, $permitidas ,$MOTIVO_HOSP_2);
        $FECHA_HOSP_2 = str_replace($no_permitidas, $permitidas ,$FECHA_HOSP_2);

        $MOTIVO_HOSP_3 = str_replace($no_permitidas, $permitidas ,$MOTIVO_HOSP_3);
        $FECHA_HOSP_3 = str_replace($no_permitidas, $permitidas ,$FECHA_HOSP_3);



        $DIABETES_CUAL = str_replace($no_permitidas, $permitidas ,$DIABETES_CUAL);
        $DIABETES_TRAT = str_replace($no_permitidas, $permitidas ,$DIABETES_TRAT);
        $DIABETES_CANT = str_replace($no_permitidas, $permitidas ,$DIABETES_CANT);
        $DIABETES_FREC = str_replace($no_permitidas, $permitidas ,$DIABETES_FREC);

        $DIABETES_TRAT_2 = str_replace($no_permitidas, $permitidas ,$DIABETES_TRAT_2);
        $DIABETES_CANT_2 = str_replace($no_permitidas, $permitidas ,$DIABETES_CANT_2);
        $DIABETES_FREC_2 = str_replace($no_permitidas, $permitidas ,$DIABETES_FREC_2);
        $DIABETES_TRAT_3 = str_replace($no_permitidas, $permitidas ,$DIABETES_TRAT_3);
        $DIABETES_CANT_3 = str_replace($no_permitidas, $permitidas ,$DIABETES_CANT_3);
        $DIABETES_FREC_3 = str_replace($no_permitidas, $permitidas ,$DIABETES_FREC_3);

        $HIPER_CUAL = str_replace($no_permitidas, $permitidas ,$HIPER_CUAL);
        $HIPER_TRAT = str_replace($no_permitidas, $permitidas ,$HIPER_TRAT);
        $HIPER_CANT = str_replace($no_permitidas, $permitidas ,$HIPER_CANT);
        $HIPER_FREC = str_replace($no_permitidas, $permitidas ,$HIPER_FREC);

        $HIPER_TRAT_2 = str_replace($no_permitidas, $permitidas ,$HIPER_TRAT_2);
        $HIPER_CANT_2 = str_replace($no_permitidas, $permitidas ,$HIPER_CANT_2);
        $HIPER_FREC_2 = str_replace($no_permitidas, $permitidas ,$HIPER_FREC_2);
        $HIPER_TRAT_3 = str_replace($no_permitidas, $permitidas ,$HIPER_TRAT_3);
        $HIPER_CANT_3 = str_replace($no_permitidas, $permitidas ,$HIPER_CANT_3);
        $HIPER_FREC_3 = str_replace($no_permitidas, $permitidas ,$HIPER_FREC_3);

        $PRO_COR_CUAL = str_replace($no_permitidas, $permitidas ,$PRO_COR_CUAL);
        $PRO_COR_TRAT = str_replace($no_permitidas, $permitidas ,$PRO_COR_TRAT);
        $PRO_COR_CANT = str_replace($no_permitidas, $permitidas ,$PRO_COR_CANT);
        $PRO_COR_FREC = str_replace($no_permitidas, $permitidas ,$PRO_COR_FREC);

        $DERMA_CUAL = str_replace($no_permitidas, $permitidas ,$DERMA_CUAL);
        $DERMA_TRAT = str_replace($no_permitidas, $permitidas ,$DERMA_TRAT);
        $DERMA_CANT = str_replace($no_permitidas, $permitidas ,$DERMA_CANT);
        $DERMA_FREC = str_replace($no_permitidas, $permitidas ,$DERMA_FREC);

        $ENDO_CUAL = str_replace($no_permitidas, $permitidas ,$ENDO_CUAL);
        $ENDO_TRAT = str_replace($no_permitidas, $permitidas ,$ENDO_TRAT);
        $ENDO_CANT = str_replace($no_permitidas, $permitidas ,$ENDO_CANT);
        $ENDO_FREC = str_replace($no_permitidas, $permitidas ,$ENDO_FREC);

        $ALERGIAS_CUAL = str_replace($no_permitidas, $permitidas ,$ALERGIAS_CUAL);
        $ALERGIAS_TRAT = str_replace($no_permitidas, $permitidas ,$ALERGIAS_TRAT);
        $ALERGIAS_CANT = str_replace($no_permitidas, $permitidas ,$ALERGIAS_CANT);
        $ALERGIAS_FREC = str_replace($no_permitidas, $permitidas ,$ALERGIAS_FREC);

        $ENFER_QSI_CUAL = str_replace($no_permitidas, $permitidas ,$ENFER_QSI_CUAL);
        $ENFER_QSI_TRAT = str_replace($no_permitidas, $permitidas ,$ENFER_QSI_TRAT);
        $ENFER_QSI_CANT = str_replace($no_permitidas, $permitidas ,$ENFER_QSI_CANT);
        $ENFER_QSI_FREC = str_replace($no_permitidas, $permitidas ,$ENFER_QSI_FREC);

        $EPILEPSIA_CUAL = str_replace($no_permitidas, $permitidas ,$EPILEPSIA_CUAL);
        $EPILEPSIA_TRAT = str_replace($no_permitidas, $permitidas ,$EPILEPSIA_TRAT);
        $EPILEPSIA_CANT = str_replace($no_permitidas, $permitidas ,$EPILEPSIA_CANT);
        $EPILEPSIA_FREC = str_replace($no_permitidas, $permitidas ,$EPILEPSIA_FREC);




        $HEPA_CUAL = str_replace($no_permitidas, $permitidas ,$HEPA_CUAL);
        $HEPA_TRAT = str_replace($no_permitidas, $permitidas ,$HEPA_TRAT);
        $HEPA_CANT = str_replace($no_permitidas, $permitidas ,$HEPA_CANT);
        $HEPA_FREC = str_replace($no_permitidas, $permitidas ,$HEPA_FREC);

        $NEFRO_CUAL = str_replace($no_permitidas, $permitidas ,$NEFRO_CUAL);
        $NEFRO_TRAT = str_replace($no_permitidas, $permitidas ,$NEFRO_TRAT);
        $NEFRO_CANT = str_replace($no_permitidas, $permitidas ,$NEFRO_CANT);
        $NEFRO_FREC = str_replace($no_permitidas, $permitidas ,$NEFRO_FREC);

        $ENDOCRI_CUAL = str_replace($no_permitidas, $permitidas ,$ENDOCRI_CUAL);
        $ENDOCRI_TRAT = str_replace($no_permitidas, $permitidas ,$ENDOCRI_TRAT);
        $ENDOCRI_CANT = str_replace($no_permitidas, $permitidas ,$ENDOCRI_CANT);
        $ENDOCRI_FREC = str_replace($no_permitidas, $permitidas ,$ENDOCRI_FREC);

        $PSI_CUAL = str_replace($no_permitidas, $permitidas ,$PSI_CUAL);
        $PSI_TRAT = str_replace($no_permitidas, $permitidas ,$PSI_TRAT);
        $PSI_CANT = str_replace($no_permitidas, $permitidas ,$PSI_CANT);
        $PSI_FREC = str_replace($no_permitidas, $permitidas ,$PSI_FREC);

        $CANCER_CUAL = str_replace($no_permitidas, $permitidas ,$CANCER_CUAL);
        $CANCER_TRAT = str_replace($no_permitidas, $permitidas ,$CANCER_TRAT);
        $CANCER_CANT = str_replace($no_permitidas, $permitidas ,$CANCER_CANT);
        $CANCER_FREC = str_replace($no_permitidas, $permitidas ,$CANCER_FREC);




        $TRANSF = str_replace($no_permitidas, $permitidas ,$TRANSF);
        $MOTIVO_TRANSF = str_replace($no_permitidas, $permitidas ,$MOTIVO_TRANSF);
        $FECHA_TRANSF = str_replace($no_permitidas, $permitidas ,$FECHA_TRANSF);
        $MOTIVO_TRANSF_2 = str_replace($no_permitidas, $permitidas ,$MOTIVO_TRANSF_2);
        $FECHA_TRANSF_2 = str_replace($no_permitidas, $permitidas ,$FECHA_TRANSF_2);
        $MOTIVO_TRANSF_3 = str_replace($no_permitidas, $permitidas ,$MOTIVO_TRANSF_3);
        $FECHA_TRANSF_3 = str_replace($no_permitidas, $permitidas ,$FECHA_TRANSF_3);
        $OTRO_CIRUGIA = str_replace($no_permitidas, $permitidas ,$OTRO_CIRUGIA);



        $INI_MENS = str_replace($no_permitidas, $permitidas ,$INI_MENS);
        $CICLO_REG = str_replace($no_permitidas, $permitidas ,$CICLO_REG);
        $CICLO_IRE = str_replace($no_permitidas, $permitidas ,$CICLO_IRE);
        $FECHA_MENS = str_replace($no_permitidas, $permitidas ,$FECHA_MENS);
        $INI_VID = str_replace($no_permitidas, $permitidas ,$INI_VID);
        $NUM_EMB = str_replace($no_permitidas, $permitidas ,$NUM_EMB);
        $NUM_PARTOS = str_replace($no_permitidas, $permitidas ,$NUM_PARTOS);
        $NUM_CESARIA = str_replace($no_permitidas, $permitidas ,$NUM_CESARIA);
        $ABORTOS = str_replace($no_permitidas, $permitidas ,$ABORTOS);
        $CUAN_ABOR = str_replace($no_permitidas, $permitidas ,$CUAN_ABOR);
        $MET_PLAN = str_replace($no_permitidas, $permitidas ,$MET_PLAN);
        $CUAL_MET_PLAN = str_replace($no_permitidas, $permitidas ,$CUAL_MET_PLAN);

        $MED_HORM = str_replace($no_permitidas, $permitidas ,$MED_HORM);

        $CUAL_MED_HORM = str_replace($no_permitidas, $permitidas ,$CUAL_MED_HORM);
        $EXPO_SOLAR = str_replace($no_permitidas, $permitidas ,$EXPO_SOLAR);

        $TIEMPO_EXPO = str_replace($no_permitidas, $permitidas ,$TIEMPO_EXPO);
        $ID_HORA_EXPO = str_replace($no_permitidas, $permitidas ,$ID_HORA_EXPO);
        $USO_PROT = str_replace($no_permitidas, $permitidas ,$USO_PROT);
        $MARCA_PROT = str_replace($no_permitidas, $permitidas ,$MARCA_PROT);

        $FPS = str_replace($no_permitidas, $permitidas ,$FPS);



       
        $PROD_TOXINA = str_replace($no_permitidas, $permitidas ,$PROD_TOXINA);
        $PROD_HILOS = str_replace($no_permitidas, $permitidas ,$PROD_HILOS);
        $FECHA_HILOS = str_replace($no_permitidas, $permitidas ,$FECHA_HILOS);
        $PROD_PEELING = str_replace($no_permitidas, $permitidas ,$PROD_PEELING);
        $FECHA_PEELING = str_replace($no_permitidas, $permitidas ,$FECHA_PEELING);
        $PROD_RADIO = str_replace($no_permitidas, $permitidas ,$PROD_RADIO);
        $FECHA_RADIO = str_replace($no_permitidas, $permitidas ,$FECHA_RADIO);
        $PROD_CARBO = str_replace($no_permitidas, $permitidas ,$PROD_CARBO);
        $FECHA_CARBO = str_replace($no_permitidas, $permitidas ,$FECHA_CARBO);

        $PROD_RADIO_CORP = str_replace($no_permitidas, $permitidas ,$PROD_RADIO_CORP);

        $FECHA_RADIO_CORP = str_replace($no_permitidas, $permitidas ,$FECHA_RADIO_CORP);
        $PROD_ULTRA = str_replace($no_permitidas, $permitidas ,$PROD_ULTRA);

        $FECHA_ULTRA = str_replace($no_permitidas, $permitidas ,$FECHA_ULTRA);
        $PROD_HIDRO = str_replace($no_permitidas, $permitidas ,$PROD_HIDRO);
        $FECHA_HIDRO = str_replace($no_permitidas, $permitidas ,$FECHA_HIDRO);
        $PROD_CRIO = str_replace($no_permitidas, $permitidas ,$PROD_CRIO);

        $FECHA_CRIO = str_replace($no_permitidas, $permitidas ,$FECHA_CRIO);


        $PROD_DEPILA = str_replace($no_permitidas, $permitidas ,$PROD_DEPILA);
        $FECHA_DEPILA = str_replace($no_permitidas, $permitidas ,$FECHA_DEPILA);
        $PROD_OTRO = str_replace($no_permitidas, $permitidas ,$PROD_OTRO);
        $FECHA_OTRO = str_replace($no_permitidas, $permitidas ,$FECHA_OTRO);
        $PROD_DEPILA_CORP = str_replace($no_permitidas, $permitidas ,$PROD_DEPILA_CORP);
        $FECHA_DEPILA_CORP = str_replace($no_permitidas, $permitidas ,$FECHA_DEPILA_CORP);
        $PROD_OTRO_CORP = str_replace($no_permitidas, $permitidas ,$PROD_OTRO_CORP);
        $FECHA_OTRO_CORP = str_replace($no_permitidas, $permitidas ,$FECHA_OTRO_CORP);



        $ESPECIFICAR = str_replace($no_permitidas, $permitidas ,$ESPECIFICAR);
        $ID_FITZ = str_replace($no_permitidas, $permitidas ,$ID_FITZ);
        $ID_GLOGAU = str_replace($no_permitidas, $permitidas ,$ID_GLOGAU);
        $ID_TIP_ROSTRO = str_replace($no_permitidas, $permitidas ,$ID_TIP_ROSTRO);
        $ID_TIP_PIEL = str_replace($no_permitidas, $permitidas ,$ID_TIP_PIEL);
        $LESIONES = str_replace($no_permitidas, $permitidas ,$LESIONES);
        $FC = str_replace($no_permitidas, $permitidas ,$FC);
        $FR = str_replace($no_permitidas, $permitidas ,$FR);
        $TABLA = str_replace($no_permitidas, $permitidas ,$TABLA);
        $TEMP = str_replace($no_permitidas, $permitidas ,$TEMP);
        $PESO = str_replace($no_permitidas, $permitidas ,$PESO);
        $TALLA = str_replace($no_permitidas, $permitidas ,$TALLA);

        $IMC = str_replace($no_permitidas, $permitidas ,$IMC);

        $TABLA2 = str_replace($no_permitidas, $permitidas ,$TABLA2);

        $EXAMEN = str_replace($no_permitidas, $permitidas ,$EXAMEN);
        $CABEZA = str_replace($no_permitidas, $permitidas ,$CABEZA);
        $CUELLO = str_replace($no_permitidas, $permitidas ,$CUELLO);
        $TORAX = str_replace($no_permitidas, $permitidas ,$TORAX);
        $ABDOMEN = str_replace($no_permitidas, $permitidas ,$ABDOMEN);
        $EXTSUP = str_replace($no_permitidas, $permitidas ,$EXTSUP);
        $EXTINF = str_replace($no_permitidas, $permitidas ,$EXTINF);

        $HABITUS = str_replace($no_permitidas, $permitidas ,$HABITUS);
        $GENITALES = str_replace($no_permitidas, $permitidas ,$GENITALES);
        $NERVIOSO = str_replace($no_permitidas, $permitidas ,$NERVIOSO);



        $PADECIMIENTO = str_replace($no_permitidas, $permitidas ,$PADECIMIENTO);
        $SIGNOS = str_replace($no_permitidas, $permitidas ,$SIGNOS);
        $APARATO_CAR = str_replace($no_permitidas, $permitidas ,$APARATO_CAR);
        $APARATO_RES = str_replace($no_permitidas, $permitidas ,$APARATO_RES);
        $APARATO_DIG = str_replace($no_permitidas, $permitidas ,$APARATO_DIG);
        $SISTEMA_NEF = str_replace($no_permitidas, $permitidas ,$SISTEMA_NEF);
        $SISTEMA_END = str_replace($no_permitidas, $permitidas ,$SISTEMA_END);
        $SISTEMA_HEM = str_replace($no_permitidas, $permitidas ,$SISTEMA_HEM);
        $SISTEMA_NER = str_replace($no_permitidas, $permitidas ,$SISTEMA_NER);
        $SISTEMA_MUS = str_replace($no_permitidas, $permitidas ,$SISTEMA_MUS);
        $PIEL = str_replace($no_permitidas, $permitidas ,$PIEL);
        $ORGANOS = str_replace($no_permitidas, $permitidas ,$ORGANOS);
        $ESFERA = str_replace($no_permitidas, $permitidas ,$ESFERA);
        $INDICACIONT = str_replace($no_permitidas, $permitidas ,$INDICACIONT);
        $PRONOSTICO = str_replace($no_permitidas, $permitidas ,$PRONOSTICO);




        $SANGUINEA1 = str_replace($no_permitidas, $permitidas ,$SANGUINEA1);
        $SANGUINEA2 = str_replace($no_permitidas, $permitidas ,$SANGUINEA2);
        $SANGUINEA3 = str_replace($no_permitidas, $permitidas ,$SANGUINEA3);
        $SANGUINEA4 = str_replace($no_permitidas, $permitidas ,$SANGUINEA4);
        $SANGUINEA5 = str_replace($no_permitidas, $permitidas ,$SANGUINEA5);
        $SANGUINEA6 = str_replace($no_permitidas, $permitidas ,$SANGUINEA6);
        $SANGUINEA7 = str_replace($no_permitidas, $permitidas ,$SANGUINEA7);
        $SANGUINEA8 = str_replace($no_permitidas, $permitidas ,$SANGUINEA8);
        $SANGUINEA9 = str_replace($no_permitidas, $permitidas ,$SANGUINEA9);
        $SANGUINEA10 = str_replace($no_permitidas, $permitidas ,$SANGUINEA10);
        $SANGUINEA11 = str_replace($no_permitidas, $permitidas ,$SANGUINEA11);
        $SANGUINEA12 = str_replace($no_permitidas, $permitidas ,$SANGUINEA12);
        $SANGUINEA13 = str_replace($no_permitidas, $permitidas ,$SANGUINEA13);
        $SANGUINEA14 = str_replace($no_permitidas, $permitidas ,$SANGUINEA14);
        $SANGUINEA15 = str_replace($no_permitidas, $permitidas ,$SANGUINEA15);
        $SANGUINEA16 = str_replace($no_permitidas, $permitidas ,$SANGUINEA16);
        $SANGUINEA17 = str_replace($no_permitidas, $permitidas ,$SANGUINEA17);
        $SANGUINEA18 = str_replace($no_permitidas, $permitidas ,$SANGUINEA18);
        $SANGUINEA19 = str_replace($no_permitidas, $permitidas ,$SANGUINEA19);


        $HEMATICA1 = str_replace($no_permitidas, $permitidas ,$HEMATICA1);
        $HEMATICA2 = str_replace($no_permitidas, $permitidas ,$HEMATICA2);
        $HEMATICA3 = str_replace($no_permitidas, $permitidas ,$HEMATICA3);
        $HEMATICA4 = str_replace($no_permitidas, $permitidas ,$HEMATICA4);
        $HEMATICA5 = str_replace($no_permitidas, $permitidas ,$HEMATICA5);
        $HEMATICA6 = str_replace($no_permitidas, $permitidas ,$HEMATICA6);
        $HEMATICA7 = str_replace($no_permitidas, $permitidas ,$HEMATICA7);
        $HEMATICA8 = str_replace($no_permitidas, $permitidas ,$HEMATICA8);

        $TP1 = str_replace($no_permitidas, $permitidas ,$TP1);
        $TP2 = str_replace($no_permitidas, $permitidas ,$TP2);
        $TP3 = str_replace($no_permitidas, $permitidas ,$TP3);

        $EGO1 = str_replace($no_permitidas, $permitidas ,$EGO1);
        $EGO2 = str_replace($no_permitidas, $permitidas ,$EGO2);
        $EGO3 = str_replace($no_permitidas, $permitidas ,$EGO3);
        $EGO4 = str_replace($no_permitidas, $permitidas ,$EGO4);
        $EGO5 = str_replace($no_permitidas, $permitidas ,$EGO5);
        $EGO6 = str_replace($no_permitidas, $permitidas ,$EGO6);
        $EGO7 = str_replace($no_permitidas, $permitidas ,$EGO7);

        $TIROIDEO1 = str_replace($no_permitidas, $permitidas ,$TIROIDEO1);
        $TIROIDEO2 = str_replace($no_permitidas, $permitidas ,$TIROIDEO2);
        $TIROIDEO3 = str_replace($no_permitidas, $permitidas ,$TIROIDEO3);
        $TIROIDEO4 = str_replace($no_permitidas, $permitidas ,$TIROIDEO4);
        $TIROIDEO5 = str_replace($no_permitidas, $permitidas ,$TIROIDEO5);
        $TIROIDEO6 = str_replace($no_permitidas, $permitidas ,$TIROIDEO6);

        $GABINETE1 = str_replace($no_permitidas, $permitidas ,$GABINETE1);
        $GABINETE2 = str_replace($no_permitidas, $permitidas ,$GABINETE2);
        $GABINETE3 = str_replace($no_permitidas, $permitidas ,$GABINETE3);
        $GABINETE4 = str_replace($no_permitidas, $permitidas ,$GABINETE4);
        $GABINETE5 = str_replace($no_permitidas, $permitidas ,$GABINETE5);
        $GABINETE6 = str_replace($no_permitidas, $permitidas ,$GABINETE6);        
        $GABINETE7 = str_replace($no_permitidas, $permitidas ,$GABINETE7);
        $GABINETE8 = str_replace($no_permitidas, $permitidas ,$GABINETE8);
        $GABINETE9 = str_replace($no_permitidas, $permitidas ,$GABINETE9);

        $DIAGNOSTICO1 = str_replace($no_permitidas, $permitidas ,$DIAGNOSTICO1);
        $DIAGNOSTICO2 = str_replace($no_permitidas, $permitidas ,$DIAGNOSTICO2);



        $DIAGNOSTICO2 = str_replace('/', '<br>' ,$DIAGNOSTICO2);



                    if($FECHA_TOXINA.substr(0,1) == 0 ){$FECHA_TOXINA='';}
                    if($FECHA_RELLENO.substr(0,1) == 0 ){$FECHA_RELLENO='';}
                    if($FECHA_HILOS.substr(0,1) == 0 ){$FECHA_HILOS='';}
                    if($FECHA_PEELING.substr(0,1) == 0 ){$FECHA_PEELING='';}
                    if($FECHA_RADIO.substr(0,1) == 0 ){$FECHA_RADIO='';}
                    if($FECHA_DEPILA.substr(0,1) == 0 ){$FECHA_DEPILA='';}
                    if($FECHA_OTRO.substr(0,1) == 0 ){$FECHA_OTRO='';}

                    if($FECHA_CARBO.substr(0,1) == 0 ){$FECHA_CARBO='';}
                    if($FECHA_RADIO_CORP.substr(0,1) == 0 ){$FECHA_RADIO_CORP='';}
                    if($FECHA_ULTRA.substr(0,1) == 0 ){$FECHA_ULTRA='';}
                    if($FECHA_HIDRO.substr(0,1) == 0 ){$FECHA_HIDRO='';}
                    if($FECHA_CRIO.substr(0,1) == 0 ){$FECHA_CRIO='';}
                    if($FECHA_DEPILA_CORP.substr(0,1) == 0 ){$FECHA_DEPILA_CORP='';}
                    if($FECHA_OTRO_CORP.substr(0,1) == 0 ){$FECHA_OTRO_CORP='';}

					
					# Contenido HTML del documento que queremos generar en PDF.
					$html='
					<html>
					<head>
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<title>Ejemplo de Documento en PDF.</title>

    <style>
@page { margin-top: 30px;
	margin-left: 30px;
	margin-right: 30px;
	margin-bottom: 0px;
 }

 html {
margin: 0;
margin-left: 30px;
margin-right: 30px;
margin-top: 30px;
}
body {
font-family: "Times New Roman", serif;
margin: 45mm 8mm 2mm 8mm;
}

#pie { position: fixed; left: 0px; bottom: -240px; right: 0px; height: 650px; text-align: center; }

#firma { position: fixed; left: 5%; bottom: 550px; right: 0px; height: 120px; width: 280px; text-align: center; }
#firma2 { position: fixed; left: 55%; bottom: 550px; right: 0px; height: 120px; width: 280px; text-align: center; }
#firma3 { position: fixed; left: 60%; bottom: 50px; right: 0px; height: 175px; width: 280px; text-align: center; }

.tabla {
    border: 1px solid black; 
    border-collapse: collapse;   
    border-radius: 1500px;
}


table {
    border-left: 0.01em solid black;
    border-right: 0;
    border-top: 0.01em solid black;
    border-bottom: 0;
    border-collapse: collapse;
    
    border-radius: 1500px;
    border: 1px solid black;
    border-spacing:0;
}

.table1 {
    border-left: 0.01em solid red;
    border-right: 0;
    border-top: 0.01em solid red;
    border-bottom: 0;
    border-collapse: collapse;
    
    border-radius: 1500px;
    border: 1px solid white;
    border-spacing:0;
}

.td2{

    border: 1px solid black;

}

.td3{

    border: 1px solid black;
    background-color:#8bd2ea;
    padding:0px 0px 0px 0px;
    text-align:center; font-size:7px;

}

table td,
table th {
    border-left: 0;
    border-right: 0.01em solid black;
    border-top: 0;
    border-bottom: 0.01em solid black;
    margin:0px;
    padding:3px 5px 3px 5px;
}

texto_firma{

position: fixed; left: 5%; bottom: 50px; right: 0px; height: 120px; width: 280px; text-align: center;

}


	</style>


</head>
<body style="margin: 0px;">

								 	
					<div id="content" style="font-size: 11px;">  

<br><br><br>
<br><br><br>

                                    <!--<div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                    </div>-->

                                    

                                   
                                    <table class="table1 " >
                                       <tr>   

                                          <td rowspan="2" style=" width:400px; font-size:11px; text-align:center;"  >

                                                                                                        

                                          </td> 
                                          <td style=" width:166px;  text-align:center; font-size:7px;" class="td3" >

                                                FECHA                                                          

                                          </td>
                                           <td style=" width:166px;  text-align:center; font-size:7px;" class="td3" >

                                                FOLIO                                               
                                                    
                                          </td>

                                        </tr>
                                        <tr>                                      

                                          <td style=" width:166px;  text-align:center;" class="td2" >

                                                <b>'.$val3.' </b>                                                         

                                          </td>
                                           <td style=" width:166px;  text-align:center;" class="td2" >

                                                <b>'.$folio.'  </b>                                             
                                                    
                                          </td>
                                        </tr>                                       

                                    </table> 
                                


                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                       <tr >

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>HISTORIA CL&Iacute;NICA</B>

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td>

                                               NOMBRE:&nbsp;&nbsp; <b> '.$nom.' &nbsp;&nbsp; '.$apellido_1.' &nbsp;&nbsp; '.$apellido_2.'     </b>                                            

                                          </td>
                                        </tr>
                                    </table>

                                     <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:372px;">

                                                EDAD: &nbsp;&nbsp; <b>'.$edad.'  </b>                                               
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                FECHA DE NACIMIENTO: &nbsp;&nbsp; <b>'.$fecha_nac.'  </b>                                               
                                                   

                                          </td>
                                        </tr>
                                    </TABLE>

                                    <table class="table table-bordered" style="margin-top: -2px;" style="font-size:11px;" >       
                                        <tr >  
                                          <td style=" width:754px; text-align:center;" >

                                                <b>FICHA DE IDENTIFICACI&Oacute;N</b>                                                 

                                          </td>
                                        </tr>                                     

                                    </table> 

                                    <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:372px;">

                                                SEXO: &nbsp;&nbsp; <b>'.$sexo.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                LUGAR DE NACIMIENTO: &nbsp;&nbsp; <b>'.$lugar_nac.' </b>                                                
                                                   

                                          </td>
                                        </tr>
                                    </TABLE> 

                                    <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:372px;">

                                                DOMICILIO: CALLE &nbsp;&nbsp; <b>'.$domicilio.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                COLONIA: &nbsp;&nbsp; <b>'.$colonia.'</b>                                                 
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                                DELEGACI&Oacute;N / MUNICIPIO: &nbsp;&nbsp; <b>'.$val6.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                ESTADO: &nbsp;&nbsp; <b>'.$val5.'</b>                                                 
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                                PA&Iacute;S: &nbsp;&nbsp; <b>'.$val4.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                CODIGO POSTAL: &nbsp;&nbsp; <b>'.$estado.'</b>                                                 
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                                RELIGI&Oacute;N: &nbsp;&nbsp; <b>'.$religion.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                OCUPACI&Oacute;N: &nbsp;&nbsp; <b>'.$ocupacion.'</b>                                                 
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                                ESCOLARIDAD: &nbsp;&nbsp; <b>'.$escolaridad.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                ESTADO CIVIL: &nbsp;&nbsp; <b>'.$estado_civil.'</b>                                                 
                                                   

                                          </td>
                                        </tr>
                                    </TABLE>  

                                    <table class="table table-bordered" style="margin-top: -2px;" style="font-size:11px;" >       
                                        <tr >  
                                          <td style=" width:754px; text-align:left;" >

                                                COMO NOS CONTACTASTE: &nbsp;&nbsp; <b>'.$contacto.'    &nbsp;&nbsp;     '.$recomendado.'</b>                                          

                                          </td>
                                        </tr>                                     

                                    </table>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:372px;">

                                                TEL&Eacute;FONO FIJO: &nbsp;&nbsp; <b>'.$telefono.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                TEL&Eacute;FONO CELULAR: &nbsp;&nbsp; <b>'.$celular.'</b>                                                 
                                                   

                                          </td>
                                        </tr>
                                    </TABLE> 


                                    <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:372px;">

                                                E-MAIL: &nbsp;&nbsp; <b>'.$e_mail.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                GRUPO SANGU&Iacute;NEO: &nbsp;&nbsp; <b>'.$grupo_sang.' </b>                                        
                                                   

                                          </td>
                                        </tr>
                                    </TABLE> 

                                     <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:372px;">

                                                CUENTAS CON SEGURO M&Eacute;DICO: &nbsp;&nbsp; <b>'.$cuenta_seg.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                CU&Aacute;L: &nbsp;&nbsp; <b>'.$seguro_medico.'</b>                                         
                                                   

                                          </td>
                                        </tr>
                                    </TABLE> 





                                    <br>                                      
                                                     
                                    
                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                       <tr >

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>DATOS FISCALES:</B>

                                          </td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:372px;">

                                                RFC: &nbsp;&nbsp; <b>'.$RFC.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                ESTADO: &nbsp;&nbsp; <b>'.$val7.'</b>                                                 
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                                RAZ&Oacute;N SOCIAL: &nbsp;&nbsp; <b>'.$RAZON_SOCIAL.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                MUNICIPIO: &nbsp;&nbsp; <b>'.$val8.'</b>                                                 
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                                TIPO DE PERSONA: &nbsp;&nbsp; <b>'.$TIPO_PERSONA.'</b>                                                 
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                CODIGO POSTAL: &nbsp;&nbsp; <b>'.$CODIGO_POSTAL_2.' </b>                                                
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                                DOMICILIO: &nbsp;&nbsp; <b>'.$DOMICILIO_FISCAL.' </b>                                                
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                                CORREO: &nbsp;&nbsp; <b>'.$E_MAIL_FISCAL.'</b>                                                 
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                                COLONIA: &nbsp;&nbsp; <b>'.$COLONIA_FISCAL.' </b>                                                
                                                   

                                          </td>
                                          <td style=" width:372px;">
                                                                                                

                                          </td>
                                        </tr>
                                    </TABLE> 




                                    <br>                                      
                                                     
                                    
                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                       <tr >

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>ANTECEDENTES FAMILIARES:</B>
                                                    <BR>
                                                    (VIVOS O FINADOS), SELECCIONES CUAL Y ESPECIFIQUE EN EL ESPACIO VAC&Iacute;O QUE FAMILIAR.

                                          </td>
                                        </tr>
                                    </table>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:372px;">

                                               <b> DIABETES MELLITUS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$DIABETES.'  
                                                 </b>                                            
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                              <b>  HIPERTENSI&Oacute;N ARTERIAL: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$HIPER_ART.' 
                                                 </b>                                        
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                 '.$DIABETES_QUIEN.'                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                 '.$HIPER_ART_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                              <b>  CARDIOPAT&Iacute;AS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$CARDIO.'  
                                                 </b>                                           
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                              <b>  HEPATOPAT&Iacute;AS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$HEPATO.'  
                                                 </b>                                       
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                 '.$CARDIO_QUIEN.'                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                 '.$HEPATO_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                             <b>   NEFROPAT&Iacute;AS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                 '.$NEFRO2.'  
                                                 </b>                                            
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                            <b>    ENDOCRINOL&Oacute;GICAS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$ENFERM_ENDO.' 
                                                 </b>                                        
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                 '.$NEFRO_QUIEN.'                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                 '.$ENFERM_ENDO_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                             <b>   PSIQUI&Aacute;TRICAS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$ENFERM_QSIQ.'  
                                                 </b>                                            
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                             <b>   NEUROL&Oacute;GICAS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$EPILEP.'  
                                                 </b>                                       
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                 '.$ENFERM_QSIQ_QUIEN.'                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                 '.$EPILEP_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                            <b>    RESPIRATORIAS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$ASMA.' 
                                                 </b>                                             
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                             <b>   HERMATOL&Oacute;GICAS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$HEMAT.'  
                                                 </b>                                       
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                 '.$ASMA_QUIEN.'                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                 '.$HEMAT_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px;">

                                            <b>    DISLIPIDEMIAS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$DISLIPI.' 
                                                 </b>                                             
                                                   

                                          </td>
                                          <td style=" width:372px;">

                                             <b>   INFECCIOSAS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 '.$INFECCIOSAS.'  
                                                 </b>                                       
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                 '.$DISLIPI_QUIEN.'                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                 '.$INFECCIOSAS_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>

                                    </TABLE>                               

                                 

                                    

                                    <!--<div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">
                                    </div>-->
                                        



                              </div> 



                              <div id="content2" style=" font-size: 11px; page-break-before:always;">

<br><br><br>
<br><br><br>
                                  <!--  <div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                    </div>-->



                                     <table class="table " >
                                       <tr >
                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>C&Aacute;NCER:</B>
                                                    

                                          </td>
                                        </tr>
                                    </table>

                                     <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 TIPO                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                '.$CANCER1.'                                                 
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                '.$CANCER1_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 TIPO                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                '.$CANCER2.'                                                 
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                '.$CANCER2_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 TIPO                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                '.$CANCER3.'                                                 
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                '.$CANCER3_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 TIPO                                              
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;" class="td3">

                                                 QUIEN                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td style=" width:372px; text-align:center;">

                                                '.$CANCER4.'                                                 
                                                   

                                          </td>
                                          <td style=" width:372px; text-align:center;">

                                                '.$CANCER4_QUIEN.'                                         
                                                   

                                          </td>
                                        </tr>
                                    </TABLE> 

                                    <br>

                                     <table class="table table-bordered" style="margin-top: -2px;"  >
                                       <tr >

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>ANTECEDENTES PERSONALES NO PATOL&Oacute;GICOS:</B>
                                                    

                                          </td>
                                        </tr>
                                    </table>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:300px;">

                                                MASCOTAS                                             
                                                   

                                          </td>
                                          <td style=" width:72px; text-align:center;">

                                                '.$MASC.'                                                 
                                                   

                                          </td>
                                          <td style=" width:362px;">

                                                TIPO: &nbsp;&nbsp; '.$TIPO_MASC.'                                         
                                                   

                                          </td>
                                        </tr>
                                    </TABLE> 

                                    <table class="table table-bordered" style="margin-top: -2px; z-index: 1;"  >    
                                        <tr >  
                                          <td rowspan="2" style=" width:300px;">

                                                ACTIVIDAD F&Iacute;SICA:                                             
                                                   

                                          </td>
                                          <td rowspan="2" style=" width:72px; text-align:center;">

                                                '.$ACTI_FISI.'                                                 
                                                   

                                          </td>
                                          <td style=" width:115px;" class="td3">

                                                CU&Aacute;L:                                         
                                                   

                                          </td>
                                          <td style=" width:115px;" class="td3">

                                               TIEMPO                                         
                                                   

                                          </td>
                                          <td style=" width:112px;" class="td3">

                                                FRECUENCIA                                         
                                                   

                                          </td>
                                        </tr>
                                        
                                        <tr>
                                           <td style=" width:115px; text-align:center;">

                                                '.$ACTI_FISI_CUAL.'                                         
                                                   

                                          </td>
                                          <td style=" width:115px; text-align:center;">

                                                '.$ACTI_FISI_TIEM.'                                        
                                                   

                                          </td>
                                          <td style=" width:112px; text-align:center;">

                                                '.$ACTI_FISI_FREC.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td rowspan="2" style=" width:300px;">

                                                CONSUME ALCOHOL:                                             
                                                   

                                          </td>
                                          <td rowspan="2" style=" width:72px; text-align:center;">

                                                '.$CONS_ALCO.'                                                 
                                                   

                                          </td>
                                          <td style=" width:115px;" class="td3">

                                                CANTIDAD:                                         
                                                   

                                          </td>
                                          <td style=" width:115px;" class="td3">

                                               TIEMPO                                         
                                                   

                                          </td>
                                          <td style=" width:112px;" class="td3">

                                                &Uacute;LTIMA OCASI&Oacute;N                                         
                                                   

                                          </td>
                                        </tr>
                                        
                                        <tr>
                                          <td style=" width:115px; text-align:center;">

                                                '.$CONS_ALCO_CUAL.'                                         
                                                   

                                          </td>
                                          <td style=" width:115px; text-align:center;">

                                                '.$CONS_ALCO_TIEM.'                                           
                                                   

                                          </td>
                                          <td style=" width:112px; text-align:center;">

                                                '.$CONS_ALCO_FREC.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td rowspan="2" style=" width:300px;">

                                                TABAQUISMO:                                             
                                                   

                                          </td>
                                          <td rowspan="2" style=" width:72px; text-align:center;">

                                                '.$TABAQ.'                                                 
                                                   

                                          </td>
                                          <td style=" width:115px;" class="td3">

                                                CANTIDAD:                                         
                                                   

                                          </td>
                                          <td style=" width:115px;" class="td3">

                                               TIEMPO                                         
                                                   

                                          </td>
                                          <td style=" width:112px;" class="td3">

                                                &Uacute;LTIMA OCASI&Oacute;N                                         
                                                   

                                          </td>
                                        </tr>
                                        
                                        <tr>
                                          <td style=" width:115px; text-align:center;">

                                                '.$TABAQ_CUAL.'                                         
                                                   

                                          </td>
                                          <td style=" width:115px; text-align:center;">

                                                '.$TABAQ_TIEM.'                                           
                                                   

                                          </td>
                                          <td style=" width:112px; text-align:center;">

                                                '.$TABAQ_FREC.'                                         
                                                   

                                          </td>
                                        </tr>
                                        <tr >  
                                          <td rowspan="4" style=" width:300px;">

                                                USO DE DROGAS:                                             
                                                   

                                          </td>
                                          <td rowspan="4" style=" width:72px; text-align:center;">

                                                '.$USO_DROG.'                                                 
                                                   

                                          </td>
                                          <td style=" width:115px;" class="td3">

                                                CUALES:                                         
                                                   

                                          </td>
                                          <td style=" width:115px;" class="td3">

                                               TIEMPO                                         
                                                   

                                          </td>
                                          <td style=" width:112px;" class="td3">

                                                &Uacute;LTIMA OCASI&Oacute;N                                         
                                                   

                                          </td>
                                        </tr>
                                        
                                        <tr>
                                          <td style=" width:115px; text-align:center;">

                                                '.$USO_DROG_CUAL.'                                         
                                                   

                                          </td>
                                          <td style=" width:115px; text-align:center;">

                                                '.$USO_DROG_TIEM.'                                           
                                                   

                                          </td>
                                          <td style=" width:112px; text-align:center;">

                                                '.$USO_DROG_FREC.'                                         
                                                   

                                          </td>
                                          <tr>
                                          <td style=" width:115px; text-align:center;">

                                                '.$USO_DROG_CUAL_2.'                                         
                                                   

                                          </td>
                                          <td style=" width:115px; text-align:center;">

                                                '.$USO_DROG_FREC_2.'                                           
                                                   

                                          </td>
                                          <td style=" width:112px; text-align:center;">

                                                '.$USO_DROG_TIEM_2.'                                         
                                                   

                                          </td>
                                          <tr>
                                          <td style=" width:115px; text-align:center;">

                                                '.$USO_DROG_CUAL_3.'                                         
                                                   

                                          </td>
                                          <td style=" width:115px; text-align:center;">

                                                '.$USO_DROG_FREC_3.'                                           
                                                   

                                          </td>
                                          <td style=" width:112px; text-align:center;">

                                                '.$USO_DROG_TIEM_3.'                                         
                                                   

                                          </td>
                                        </tr>
                                    </TABLE> 

                                    <table class="table table-bordered" style="margin-top: -2px; z-index:1;"  >    
                                        <tr >  
                                          <td style=" width:300px;">

                                                TATUAJES O PERFORACIONES:                                             
                                                   

                                          </td>
                                          <td style=" width:72px; text-align:center;">

                                                '.$TATUAJES.'                                                 
                                                   

                                          </td>
                                          <td style=" width:362px;">

                                                CU&Aacute;L: &nbsp;&nbsp; '.$TATUAJES_FREC.'                                         
                                                   

                                          </td>
                                        </tr>
                                    </TABLE>

                                    <table class="table table-bordered" style="margin-top: -2px; z-index:1;"  >    
                                        <tr >  
                                          <td style=" width:300px;">

                                                Ingiere alg&uacute;n medicamento o suplemento alimenticio                                             
                                                   

                                          </td>
                                          <td style=" width:72px; text-align:center;">

                                                '.$ING_MED_SUP.'                                                 
                                                   

                                          </td>
                                          <td style=" width:362px;">

                                                CU&Aacute;L: &nbsp;&nbsp; '.$ING_MED_SUP_CUAL.'                                         
                                                   

                                          </td>
                                        </tr>
                                    </TABLE>

                                    <table class="table table-bordered" style="margin-top: -2px; z-index:1;"  >    
                                        <tr >  
                                          <td style=" width:300px;">

                                                INGIERE ASPIRINA REGULARMENTE                                             
                                                   

                                          </td>
                                          <td style=" width:72px; text-align:center;">

                                                '.$ING_ASP_REG.'                                                 
                                                   

                                          </td>
                                          <td style=" width:362px;">

                                                &Uacute;LTIMA OCASI&Oacute;N: &nbsp;&nbsp; '.$ING_ASP_REG_OCA.'                                         
                                                   

                                          </td>
                                        </tr>
                                    </TABLE> 



                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>ANTECEDENTES PATOL&Oacute;GICOS:</B>

                                          </td>
                                        </tr>
                                    </TABLE>
                                    <table class="table table-bordered" style="margin-top: -2px;"  >    
                                        <tr >  
                                          <td style=" width:146px; text-align:center;" style="font-size:11px;">

                                                PATOL&Oacute;GIA                                                 

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               SI / NO                                                 

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                CUAL ENFERMEDAD                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                TIEMPO                                                 

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                TRATAMIENTO ACTUAL                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                CANTIDAD                                                 

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                FRECUENCIA                                                 

                                          </td>
                                        </tr>

                                        <tr>  
                                          <td rowspan="3" style=" width:146px; text-align:left;" style="font-size:11px;">

                                                DIABETES MELLITUS                                                 

                                          </td>
                                          <td rowspan="3" style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$DIABETES2.'                                               

                                          </td>
                                          <td rowspan="3" style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_CUAL.'                                              

                                          </td>
                                          <td rowspan="3" style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_TIEM.'                                              

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_FREC.'                                                 

                                          </td>
                                        </tr>

                                        <tr>                                           
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_TRAT_2.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_CANT_2.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_FREC_2.'                                                 

                                          </td>
                                        </tr>

                                        <tr>                                           
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_TRAT_3.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_CANT_3.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DIABETES_FREC_3.'                                                 

                                          </td>
                                        </tr>

                                       <tr>  
                                          <td rowspan="3" style=" width:146px; text-align:left;" style="font-size:11px;">

                                                HIPERTENSI&Oacute;N ARTERIAL                                                 

                                          </td>
                                          <td rowspan="3" style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$HIPER.'                                               

                                          </td>
                                          <td rowspan="3" style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_CUAL.'                                              

                                          </td>
                                          <td rowspan="3" style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_FREC.'                                                 

                                          </td>
                                        </tr>

                                        <tr>                                           
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_TRAT_2.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_CANT_2.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_FREC_2.'                                                 

                                          </td>
                                        </tr>

                                        <tr>                                           
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_TRAT_3.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_CANT_3.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$HIPER_FREC_3.'                                                 

                                          </td>
                                        </tr>

                                        <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                CARDIOPAT&Iacute;AS                                                

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$PRO_COR.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$PRO_COR_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$PRO_COR_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$PRO_COR_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$PRO_COR_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$PRO_COR_FREC.'                                                 

                                          </td>
                                        </tr>

                                        <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                DISLIPIDEMIAS                                                

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$DERMA.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DERMA_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$DERMA_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DERMA_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$DERMA_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$DERMA_FREC.'                                                 

                                          </td>
                                        </tr>

                                        <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                NEUROL&Oacute;GICAS                                                

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$ENDO.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ENDO_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$ENDO_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ENDO_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$ENDO_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ENDO_FREC.'                                                 

                                          </td>
                                        </tr>

                                        <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                RESPIRATORIAS                                                

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$ALERGIAS.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIAS_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIAS_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIAS_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIAS_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIAS_FREC.'                                                 

                                          </td>
                                        </tr>


                                         <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                HEMATOL&Oacute;GICAS                                                

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$ENFER_QSI.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ENFER_QSI_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$ENFER_QSI_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ENFER_QSI_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$ENFER_QSI_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ENFER_QSI_FREC.'                                                 

                                          </td>
                                        </tr>


                                        <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                INFECCIOSAS                                               

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$EPILEPSIA.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$EPILEPSIA_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$EPILEPSIA_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$EPILEPSIA_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$EPILEPSIA_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$EPILEPSIA_FREC.'                                                 

                                          </td>
                                    </tr>

                                   <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                HEPATITIS                                               

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$HEPA.'                                               

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$HEPA_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$HEPA_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$HEPA_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$HEPA_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$HEPA_FREC.'                                                 

                                          </td>
                                    </tr>
                                    <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                NEFROPAT&Iacute;AS                                               

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$NEFRO.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$NEFRO_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$NEFRO_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$NEFRO_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$NEFRO_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$NEFRO_FREC.'                                                 

                                          </td>
                                    </tr>
                                    <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                ENDOCRINOL&Oacute;GICAS                                               

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$ENDOCRI.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ENDOCRI_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$ENDOCRI_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ENDOCRI_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$ENDOCRI_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$ENDOCRI_FREC.'                                                 

                                          </td>
                                    </tr>
                                    <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                PSIQUI&Aacute;TRICAS                                               

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$PSI.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$PSI_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$PSI_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$PSI_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$PSI_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$PSI_FREC.'                                                 

                                          </td>
                                    </tr>
                                    <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                C&Aacute;NCER                                               

                                          </td>
                                          <td style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$CANCER.'                                               

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$CANCER_CUAL.'                                              

                                          </td>
                                          <td style=" width:60px; text-align:center;" style="font-size:11px;">

                                                '.$CANCER_TIEM.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$CANCER_TRAT.'                                                

                                          </td>
                                          <td style=" width:50px; text-align:center;" style="font-size:11px;">

                                                '.$CANCER_CANT.'                                                

                                          </td>
                                          <td style=" width:130px; text-align:center;" style="font-size:11px;">

                                                '.$CANCER_FREC.'                                                 

                                          </td>
                                        </tr>
                                    </TABLE>


                                    <table class="table table-bordered" style="margin-top: -2px;"  >        

                                        <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                OTRAS                                               

                                          </td>
                                          <td style=" width:598px; text-align:center;" style="font-size:11px;">

                                               '.$OTRAS.'                                               

                                          </td>
                                         
                                        </tr>

                                    </table>

                                   




                                    <!--<div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">
                                    </div>-->

                              </div>





                              <div id="content3" style=" font-size: 11px; page-break-before:always;">
<br><br><br>
<br><br><br>

                                  <!--  <div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                    </div>-->




                                    <table class="table table-bordered" style="margin-top: -2px;"  >

                                          <tr>  
                                          <td rowspan="3" style=" width:146px; text-align:left;" style="font-size:11px;">

                                                ALERG&Iacute;AS                                               

                                          </td>
                                          <td rowspan="3" style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$ALERGIA.'                                               

                                          </td>
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIA_1.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIA_2.'                                                 

                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIA_3.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIA_4.'                                                 

                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIA_5.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$ALERGIA_6.'                                                 

                                          </td>
                                          
                                        </tr>

                                       <tr>  
                                          <td rowspan="5" style=" width:146px; text-align:left;" style="font-size:11px;">

                                                CIRUG&Iacute;AS                                               

                                          </td>
                                          <td rowspan="5" style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$CIRUGIAS.'                                               

                                          </td>
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$TIPO_CIRU.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_CIRU.'                                                 

                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$TIPO_CIRU_2.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_CIRU_2.'                                                 

                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$TIPO_CIRU_3.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_CIRU_3.'                                                 

                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$TIPO_CIRU_4.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_CIRU_4.'                                                 

                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$TIPO_CIRU_5.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_CIRU_5.'                                                 

                                          </td>
                                          
                                        </tr>


                                        <tr>  
                                          <td rowspan="3" style=" width:146px; text-align:left;" style="font-size:11px;">

                                                HOSPITALIZACIONES PREVIAS                                              

                                          </td>
                                          <td rowspan="3" style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$HOSP.'                                               

                                          </td>
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$MOTIVO_HOSP.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_HOSP.'                                                 

                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$MOTIVO_HOSP_2.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_HOSP_2.'                                                 

                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$MOTIVO_HOSP_3.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_HOSP_3.'                                                 

                                          </td>
                                          
                                        </tr>


                                        <tr>  
                                          <td rowspan="3" style=" width:146px; text-align:left;" style="font-size:11px;">

                                                TRANSFUSIONES                                              

                                          </td>
                                          <td rowspan="3" style=" width:40px; text-align:center;" style="font-size:11px;">

                                               '.$TRANSF.'                                               
                                          </td>
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$MOTIVO_TRANSF.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_TRANSF.'                                                 
                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$MOTIVO_TRANSF_2.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_TRANSF_2.'                                               
                                          </td>
                                          
                                        </tr>
                                        <tr>  
                                          <td style=" width:360px; text-align:center;" style="font-size:11px;">

                                                '.$MOTIVO_TRANSF_3.'                                              

                                          </td>
                                          <td style=" width:178px; text-align:center;" style="font-size:11px;">

                                                '.$FECHA_TRANSF_3.'                                                 
                                          </td>
                                          
                                        </tr>
                                    </TABLE>

                                     <table class="table table-bordered" style="margin-top: -2px;"  >        

                                        <tr>  
                                          <td style=" width:146px; text-align:left;" style="font-size:11px;">

                                                OTRAS                                               

                                          </td>
                                          <td style=" width:598px; text-align:center;" style="font-size:11px;">

                                               '.$OTRO_CIRUGIA.'                                               

                                          </td>
                                         
                                        </tr>

                                    </table>

                                    <br>
                                    <br>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>ANTECEDENTES GINECO - OBST&Eacute;TRICOS: <div style="font-size:15px;">'.$aplica.'</div></B>

                                          </td>
                                        </tr>
                                    </TABLE>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >

                                       <tr>  
                                          <td  style=" width:246px; text-align:left;" style="font-size:11px;">

                                                INICIO DE MENSTRUACI&Oacute;N                                              

                                          </td>
                                          <td  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                   '.$INI_MENS.'                                           

                                          </td>
                                          <td  style=" width:186px; text-align:left;" style="font-size:11px;">

                                                CICLOS                                               

                                          </td>
                                          <td  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                 '.$CICLO_REG.'                                             

                                          </td>
                                       </tr>
                                       <tr>  
                                          <td  style=" width:246px; text-align:left;" style="font-size:11px;">

                                                FECHA DE &Uacute;LTIMA DE MENSTRUACI&Oacute;N                                              

                                          </td>
                                          <td  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                   '.$FECHA_MENS.'                                           

                                          </td>
                                          <td  style=" width:186px; text-align:left;" style="font-size:11px;">

                                                INICIO DE VIDA SEXUAL                                               

                                          </td>
                                          <td  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                 '.$INI_VID.'                                             

                                          </td>
                                       </tr>

                                    </table>


                                    <table class="table table-bordered" style="margin-top: -2px;"  >

                                       <tr>  
                                          <td  style=" width:135px; text-align:center;" style="font-size:11px;" class="td3">

                                                NO. DE EMBARAZOS                                              

                                          </td>
                                          <td  style=" width:135px; text-align:center;" style="font-size:11px;" class="td3">

                                                NO. DE PARTOS                                             

                                          </td>
                                          <td  style=" width:134px; text-align:center;" style="font-size:11px;" class="td3">

                                               NO. DE CESARIAS                                                

                                          </td>
                                          <td rowspan="2" style=" width:100px; text-align:left;" style="font-size:11px;">

                                                  ABORTOS                                            

                                          </td>
                                          <td rowspan="2"  style=" width:100px; text-align:center;" style="font-size:11px;">

                                                   '.$ABORTOS.'                                             

                                          </td>
                                          <td  style=" width:100px; text-align:center;" style="font-size:11px;" class="td3">

                                                 CUANTOS                                             

                                          </td>
                                       </tr>

                                        <tr>  
                                          <td  style=" width:135px; text-align:center;" style="font-size:11px;">

                                                '.$NUM_EMB.'                                              

                                          </td>
                                          <td  style=" width:135px; text-align:center;" style="font-size:11px;">

                                                 '.$NUM_PARTOS.'                                             

                                          </td>
                                          <td  style=" width:134px; text-align:center;" style="font-size:11px;">

                                                 '.$NUM_CESARIA.'                                               

                                          </td>                                          
                                          <td  style=" width:100px; text-align:center;" style="font-size:11px;">

                                                 '.$CUAN_ABOR.'                                              

                                          </td>
                                       </tr>
                                     

                                    </table>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >

                                       <tr>  
                                          <td  style=" width:246px; text-align:left;" style="font-size:11px;">

                                                M&Eacute;TODO DE PLANIFICACI&Oacute;N FAMILIAR                                              

                                          </td>
                                          <td  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                   '.$MET_PLAN.'                                           

                                          </td>
                                          <td  style=" width:342px; text-align:left;" style="font-size:11px;">

                                                CU&Aacute;L:  &nbsp;&nbsp; '.$CUAL_MET_PLAN.'                                                

                                          </td>
                                       </tr> 

                                       <tr>  
                                          <td  style=" width:246px; text-align:left; font-size:10px;">

                                                HAS TOMADO MEDICAMENTOS HORMONALES                                              

                                          </td>
                                          <td  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                   '.$MED_HORM.'                                           

                                          </td>
                                          <td  style=" width:342px; text-align:left;" style="font-size:11px;">

                                                CU&Aacute;L:  &nbsp;&nbsp; '.$CUAL_MED_HORM.'                                                

                                          </td>
                                       </tr>                                      

                                    </table>



                                    <br>
                                    <br>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>
                                                    ANTECEDENTES DERMO - EST&Eacute;TICOS:
                                                    <br>
                                                    FOTO PROTECCI&Oacute;N
                                                    </B>

                                          </td>
                                        </tr>
                                    </TABLE>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >

                                       <tr>  
                                          <td rowspan="2"  style=" width:246px; text-align:left;" style="font-size:11px;">

                                                EXPOSICI&Oacute;N SOLAR                                              

                                          </td>
                                          <td rowspan="2"  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                   '.$EXPO_SOLAR.'                                           

                                          </td>
                                          <td rowspan="2"   style=" width:186px; text-align:left; font-size:9px;">

                                                TIEMPO DE EXPOSICI&Oacute;N SOLAR AL D&Iacute;A:                                                

                                          </td>
                                          <td  style=" width:146px; text-align:center;" class="td3" >

                                                    MINUTOS                                           

                                          </td>
                                       </tr> 
                                       <tr>
                                          <td style=" width:146px; text-align:center;" >

                                                   '.$TIEMPO_EXPO.'                                             

                                          </td>
                                       </tr>  
                                    </TABLE>

                                    <table class="table table-bordered" style="margin-top: -2px; z-index: 1;"  >

                                       <tr>  
                                          <td  style=" width:246px; text-align:left;" style="font-size:11px;">

                                                USO DE PROTECCI&Oacute;N SOLAR                                              

                                          </td>
                                          <td  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                   '.$USO_PROT.'                                           

                                          </td>
                                          <td  style=" width:186px; text-align:left;" style="font-size:11px;">

                                                MARCA DEL PROTECTOR SOLAR                                                

                                          </td>
                                          <td  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                    '.$MARCA_PROT.'                                            

                                          </td>
                                       </tr> 
                                    </TABLE>

                                    <table class="table table-bordered" style="margin-top: -2px; z-index: 1;"  >

                                       <tr>  
                                          <td rowspan="2" style=" width:246px; text-align:left;" style="font-size:11px;">

                                                FPS:                                               

                                          </td>
                                          <td  style=" width:146px; text-align:center;" class="td3">

                                                  (% PROTECCI&Oacute;N)                                           

                                          </td>                                          
                                       </tr> 
                                       <tr>  
                                          <td  style=" width:146px; text-align:center;" style="font-size:11px;">

                                                 '.$FPS.'                                           

                                          </td>                                          
                                       </tr> 
                                    </TABLE>



                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>
                                                    TRATAMIENTOS EST&Eacute;TICOS PREVIOS:
                                                    <br>
                                                    FACIALES
                                                    </B>

                                          </td>
                                        </tr>
                                    </TABLE>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >

                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                PROCEDIMIENTO                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                  PRODUCTO / MARCA                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                FECHA DE APLICACI&Oacute;N                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                TOXINA BOTULINICA TIPO A:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                '.$PROD_TOXINA.'                                             

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_TOXINA.'                                             

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                RELLENO FACIAL:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                '.$PROD_RELLENO.'                                             

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_RELLENO.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                HILOS DE SUSTENTACI&Oacute;N:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                '.$PROD_HILOS.'                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_HILOS.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                PEELING:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                  '.$PROD_PEELING.'                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_PEELING.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                RADIOFRECUENCIA:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                 '.$PROD_RADIO.'                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_RADIO.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                DEPILACI&Oacute;N LASER                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                  '.$PROD_DEPILA.'                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_DEPILA.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                OTROS                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                  '.$PROD_OTRO.'                                          

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_OTRO.'                                           

                                          </td>                                         
                                       </tr>

                                      
                                    </TABLE>


                                    <!--<div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">
                                    </div>-->

                              </div>





                              <div id="content4" style=" font-size: 11px; page-break-before:always;">
<br><br><br>
<br><br><br>

                                  <!--  <div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                    </div>-->
                                    <BR>
                                    <BR>


                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>
                                                    TRATAMIENTOS EST&Eacute;TICOS PREVIOS:
                                                    <br>
                                                    CORPORALES
                                                    </B>

                                          </td>
                                        </tr>
                                    </TABLE>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >

                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                PROCEDIMIENTO                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                  PRODUCTO / MARCA                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                FECHA DE APLICACI&Oacute;N                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                CARBOXITERAPIA:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                '.$PROD_CARBO.'                                             

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_CARBO.'                                             

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                RADIOFRECUENCIA:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                '.$PROD_RADIO.'                                             

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_RADIO.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                ULTRASONIDO:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                '.$PROD_ULTRA.'                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_ULTRA.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                HIDROLIPOCLASIA:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                  '.$PROD_HIDRO.'                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_HIDRO.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                CRIOLIPOLISIS:                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                 '.$PROD_CRIO.'                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_CRIO.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                DEPILACI&Oacute;N LASER                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                  '.$PROD_DEPILA_CORP.'                                           

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_DEPILA_CORP.'                                           

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:243px; text-align:center;" style="font-size:11px;">

                                                OTROS                                               

                                          </td>
                                          <td  style=" width:246px; text-align:center;" >

                                                  '.$PROD_OTRO_CORP.'                                          

                                          </td>  
                                          <td  style=" width:245px; text-align:center;" >

                                                '.$FECHA_OTRO_CORP.'                                           

                                          </td>                                         
                                       </tr>

                                      
                                    </TABLE>

                                    <br>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>
                                                    HISTORIA CL&Iacute;NICA
                                                    </B>

                                          </td>
                                        </tr>
                                        <tr>

                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">

                                                    
                                                    <B>
                                                    PADECIMIENTO ACTUAL
                                                    </B>

                                          </td>
                                        </tr>
                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                  
                                                    '.$PADECIMIENTO.'
                                                    

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">

                                                    
                                                    <B>
                                                    INTERROGATORIO POR APARATOS Y SISTEMAS
                                                    </B>

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                   
                                                    SIGNOS Y SÍNTOMAS GENERALES: &nbsp;&nbsp; '.$SIGNOS.'
                                                 

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                    
                                                    APARATO CARDIOVASCULAR: &nbsp;&nbsp; '.$APARATO_CAR.'
                                                   

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                   
                                                    APARATO RESPIRATORIO: &nbsp;&nbsp; '.$APARATO_RES.'
                                                  

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                    
                                                    APARATO DIGESTIVO: &nbsp;&nbsp; '.$APARATO_DIG.'
                                                  

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                  
                                                    SISTEMA NEFROUROL&Oacute;GICO: &nbsp;&nbsp; '.$SISTEMA_NEF.'
                                                   

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                  
                                                    SISTEMA ENDOCRINO Y METABOLISMO: &nbsp;&nbsp; '.$SISTEMA_END.'
                                                  

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                 
                                                    SISTEMA HEMATOPOY&Eacute;TICO: &nbsp;&nbsp; '.$SISTEMA_HEM.'
                                                

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                  
                                                    SISTEMA NERVIOSO: &nbsp;&nbsp; '.$SISTEMA_NER.'
                                                   

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                    
                                                    SISTEMA MUSCULO ESQUEL&Eacute;TICO: &nbsp;&nbsp; '.$SISTEMA_MUS.'
                                                   

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                    
                                                    PIEL Y TEGUMENTOS: &nbsp;&nbsp; '.$PIEL.'
                                                   

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                    
                                                    &Oacute;RGANOS DE LOS SENTIDOS: &nbsp;&nbsp; '.$ORGANOS.'
                                                   

                                          </td>
                                        </tr>

                                        <tr>

                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">

                                                    
                                                    
                                                    ESFERA PS&Iacute;QUICA: &nbsp;&nbsp; '.$ESFERA.'
                                                    

                                          </td>
                                        </tr>

                                    </TABLE>




                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>

                                          <td  style=" width:754px; text-align:center;" style="font-size:11px;">

                                                    
                                                    <B>
                                                    EXPLORACI&Oacute;N F&Iacute;SICA INICIAL
                                                    </B>

                                          </td>
                                        </tr>
                                        <tr>

                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">

                                                    
                                                    <B>
                                                    SIGNOS VITALES
                                                    </B>

                                          </td>
                                        </tr>
                                    </table>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                      <tr>  
                                          <td  style=" width:181px; text-align:center;" style="font-size:11px;">

                                                FC: &nbsp;&nbsp; '.$FC.' &nbsp;&nbsp; X MIN                                               

                                          </td>
                                          <td  style=" width:181px; text-align:center;" >

                                                FR: &nbsp;&nbsp; '.$FR.' &nbsp;&nbsp; X MIN                                             

                                          </td>  
                                          <td  style=" width:181px; text-align:center;" >

                                                TA (DIAST&Oacute;LICA): &nbsp;&nbsp; '.$TABLA.'                                           

                                          </td>  
                                          <td  style=" width:181px; text-align:center;" >

                                               TA (SIST&Oacute;LICA) &nbsp;&nbsp; '.$TABLA2.'                                            

                                          </td>                                         
                                       </tr>
                                       <tr>  
                                          <td  style=" width:181px; text-align:center;" style="font-size:11px;">

                                                TEMP: &nbsp;&nbsp; '.$TEMP.' &nbsp;&nbsp; C                                               

                                          </td>
                                          <td  style=" width:181px; text-align:center;" >

                                                PESO: &nbsp;&nbsp; '.$PESO.' &nbsp;&nbsp; Kg                                             

                                          </td>  
                                          <td  style=" width:181px; text-align:center;" >

                                                TALLA: &nbsp;&nbsp; '.$TALLA.'  &nbsp;&nbsp; Metros                                         

                                          </td>  
                                          <td  style=" width:181px; text-align:center;" >

                                               IMC &nbsp;&nbsp; '.$IMC.'                                            

                                          </td>                                         
                                       </tr>
                                    </table>

                                    
                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <!--<tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    HABITUS EXTERIOR:  &nbsp;&nbsp; '.$HABITUS.'                                                  

                                          </td>
                                        </tr>-->
                                        <tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    INSPECCI&Oacute;N GENERAL:  &nbsp;&nbsp; '.$EXAMEN.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    CR&Aacute;NEO:  &nbsp;&nbsp; '.$CABEZA.'                                                  

                                          </td>
                                        </tr>

                                    </table>    

                                    <!--<div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">
                                    </div>-->

                              </div>





                              <div id="content5" style=" font-size: 11px; page-break-before:always;">
<br><br><br>
<br><br><br>

                                  <!--  <div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                    </div>-->


                                    <table class="table table-bordered" style="margin-top: 10px;"  >  

                                        <tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    CUELLO:  &nbsp;&nbsp; '.$CUELLO.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    T&Oacute;RAX:  &nbsp;&nbsp; '.$TORAX.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    ABDOMEN:  &nbsp;&nbsp; '.$ABDOMEN.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    GENITALES:  &nbsp;&nbsp; '.$GENITALES.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    EXTREMIDADES SUPERIORES:  &nbsp;&nbsp; '.$EXTSUP.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    EXTREMIDADES INFERIORES:  &nbsp;&nbsp; '.$EXTINF.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:754px; text-align:justify;" style="font-size:11px;">                                                    
                                                    
                                                    SISTEMA NERVIOSOS:  &nbsp;&nbsp; '.$NERVIOSO.'                                                  

                                          </td>
                                        </tr>
                                         
                                    </table>



                                    <table class="table table-bordered" style="margin-top: -2px;"  >   
                                        <tr>  
                                          <td  style=" width:181px; text-align:center;" style="font-size:11px;">

                                                FITZPATRICK: &nbsp;&nbsp; '.$ID_FITZ.'                                                

                                          </td>
                                          <td  style=" width:181px; text-align:center;" >

                                                GLOGAU TIPO: &nbsp;&nbsp; '.$ID_GLOGAU.'                                             

                                          </td>  
                                          <td  style=" width:181px; text-align:center;" >

                                                TIPO ROSTRO: &nbsp;&nbsp; '.$ID_TIP_ROSTRO.'                                          

                                          </td>  
                                          <td  style=" width:181px; text-align:center;" >

                                               TIPO PIEL: &nbsp;&nbsp; '.$ID_TIP_PIEL.'                                            

                                          </td>                                         
                                       </tr>
                                    </table>

                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    LESIONES DERMATOL&Oacute;GICAS::  &nbsp;&nbsp; '.$LESIONES.'                                                  

                                          </td>
                                        </tr>                                      

                                    </table>    


                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>RESULTADOS DE LABORATORIO</b>                                                  

                                          </td>
                                        </tr>  
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>QU&Iacute;MICA SANGU&Iacute;NEA:</b>                                                  

                                          </td>
                                        </tr>                                     

                                    </table>  

                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    GLUCOSA: &nbsp;&nbsp; '.$SANGUINEA1.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    UREA: &nbsp;&nbsp; '.$SANGUINEA2.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    BUN: &nbsp;&nbsp; '.$SANGUINEA3.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                
                                                    CREATININA: &nbsp;&nbsp; '.$SANGUINEA4.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    &Aacute;CIDO &Uacute;RICO: &nbsp;&nbsp; '.$SANGUINEA5.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    COLESTEROL: &nbsp;&nbsp; '.$SANGUINEA6.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    TRIGLIC&Eacute;RIDOS: &nbsp;&nbsp; '.$SANGUINEA7.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    ALB&Uacute;MINA: &nbsp;&nbsp; '.$SANGUINEA8.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    GLOBULINA: &nbsp;&nbsp; '.$SANGUINEA9.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    BT: &nbsp;&nbsp; '.$SANGUINEA10.'                                                  

                                          </td>
                                        </tr> 
                                        <tr>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    BD: &nbsp;&nbsp; '.$SANGUINEA11.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    BI: &nbsp;&nbsp; '.$SANGUINEA12.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    TGO: &nbsp;&nbsp; '.$SANGUINEA13.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    TGP: &nbsp;&nbsp; '.$SANGUINEA14.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    FA: &nbsp;&nbsp; '.$SANGUINEA15.'                                                  

                                          </td>
                                        </tr>   
                                        <tr>
                                          <td  style=" width:143px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    GGT: &nbsp;&nbsp; '.$SANGUINEA16.'                                                  

                                          </td>
                                          <td  style=" width:143px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    NA: &nbsp;&nbsp; '.$SANGUINEA17.'                                                  

                                          </td>
                                          <td  style=" width:143px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    K: &nbsp;&nbsp; '.$SANGUINEA18.'                                                  

                                          </td>
                                          <td  style=" width:143px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    CL: &nbsp;&nbsp; '.$SANGUINEA19.'                                                  

                                          </td>
                                          <td  style=" width:142px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                                                                  

                                          </td>
                                        </tr>   
                                    </table> 

                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>BIOMETR&Iacute;A HEM&Aacute;TICA:</b>                                                  

                                          </td>
                                        </tr>                                                                            

                                    </table>  

                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>
                                          <td  style=" width:181px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    LEU: &nbsp;&nbsp; '.$HEMATICA1.'                                                  

                                          </td>
                                          <td  style=" width:181px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    ERI: &nbsp;&nbsp; '.$HEMATICA2.'                                                  

                                          </td>
                                          <td  style=" width:181px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    HG: &nbsp;&nbsp; '.$HEMATICA3.'                                                  

                                          </td>
                                          <td  style=" width:181px; text-align:left;" style="font-size:10px;">                                                    
                                                
                                                    HTO: &nbsp;&nbsp; '.$HEMATICA4.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    PLQ: &nbsp;&nbsp; '.$HEMATICA5.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    NEUTR&Oacute;FILOS: &nbsp;&nbsp; '.$HEMATICA6.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    LINFOCITOS: &nbsp;&nbsp; '.$HEMATICA7.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    MONOCITOS: &nbsp;&nbsp; '.$HEMATICA8.'                                                  

                                          </td>
                                        </tr> 
                                       
                                    </table> 


                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>TP:</b>                                                  

                                          </td>
                                        </tr>                                                                      
                                    </table>
                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>
                                          <td  style=" width:244px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    % ACTIVIDAD: &nbsp;&nbsp; '.$TP1.'                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    INR: &nbsp;&nbsp; '.$TP2.'                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    TTP: &nbsp;&nbsp; '.$TP3.'                                                  

                                          </td>
                                        </tr>
                                       
                                    </table>  


                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>EGO:</b>                                                  

                                          </td>
                                        </tr>                                                                      
                                    </table>

                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>
                                          <td  style=" width:181px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    COLOR: &nbsp;&nbsp; '.$EGO1.'                                                  

                                          </td>
                                          <td  style=" width:181px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    DENSIDAD: &nbsp;&nbsp; '.$EGO2.'                                                  

                                          </td>
                                          <td  style=" width:181px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    PH: &nbsp;&nbsp; '.$EGO3.'                                                  

                                          </td>
                                          <td  style=" width:181px; text-align:left;" style="font-size:10px;">                                                    
                                                
                                                    LEU: &nbsp;&nbsp; '.$EGO4.'                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    GLUC: &nbsp;&nbsp; '.$EGO5.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                   CETONAS: &nbsp;&nbsp; '.$EGO6.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    HG: &nbsp;&nbsp; '.$EGO7.'                                                  

                                          </td>
                                          <td  style=" width:140px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                                                                   

                                          </td>
                                        </tr> 
                                       
                                    </table> 




                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>PERFIL TIROIDEO:</b>                                                  

                                          </td>
                                        </tr>                                                                      
                                    </table>

                                     <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>
                                          <td  style=" width:244px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                   T3: &nbsp;&nbsp; '.$TIROIDEO1.'                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    T4: &nbsp;&nbsp; '.$TIROIDEO2.'                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    T4 LIBRE: &nbsp;&nbsp; '.$TIROIDEO3.'                                                  

                                          </td>
                                        </tr>

                                        <tr>
                                          <td  style=" width:244px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    TSH: &nbsp;&nbsp; '.$TIROIDEO4.'                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    T7: &nbsp;&nbsp; '.$TIROIDEO5.'                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:left;" style="font-size:10px;">                                                    
                                                    
                                                    IODO: &nbsp;&nbsp; '.$TIROIDEO6.'                                                  

                                          </td>
                                        </tr>
                                       
                                    </table>



                              </div>





                              <div id="content5" style=" font-size: 11px; page-break-before:always;">
<br><br><br>
<br><br><br>

                                  <!--  <div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                    </div>-->



                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>RESULTADOS DE GABINETE:</b>                                                  

                                          </td>
                                        </tr>                                                                      
                                    </table>


                                    <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>
                                          <td  style=" width:244px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                   '.$GABINETE1.'                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                   RADIOGRAF&Iacute;A                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                    '.$GABINETE3.'                                                  

                                          </td>
                                        </tr>

                                        <tr>
                                          <td  style=" width:244px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                    '.$GABINETE4.'                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                    TOMOGRAF&Iacute;A                                                

                                          </td>
                                          <td  style=" width:245px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                    '.$GABINETE6.'                                                  

                                          </td>
                                        </tr>

                                        <tr>
                                          <td  style=" width:244px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                   '.$GABINETE7.'                                                  

                                          </td>
                                          <td  style=" width:245px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                    ELECTROCARDIOGRAMA                                                 

                                          </td>
                                          <td  style=" width:245px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                    '.$GABINETE9.'                                                  

                                          </td>
                                        </tr>
                                       
                                    </table>


                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>DIAGN&Oacute;STICOS:</b>                                                  

                                          </td>
                                        </tr>                                                                      
                                    </table>

                                     <table class="table table-bordered" style="margin-top: -2px;"  >
                                        <tr>
                                          <td  style=" width:181px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                    '.$DIAGNOSTICO1.'                                                  

                                          </td>
                                          <td  style=" width:563px; text-align:center;" style="font-size:10px;">                                                    
                                                    
                                                    '.$DIAGNOSTICO2.'                                                  

                                          </td>
                                        </tr>
                                       
                                    </table> 


                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>PRON&Oacute;STICO:</b>                                                  

                                          </td>
                                        </tr>
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    '.$PRONOSTICO.'                                                 

                                          </td>
                                        </tr>                                                                      
                                    </table>



                                    <table class="table table-bordered" style="margin-top: 10px;"  >
                                        <tr>
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    <b>INDICACI&Oacute;N TERAP&Eacute;UTICA:</b>                                                  

                                          </td>
                                        </tr>
                                        <tr>  
                                          <td  style=" width:754px; text-align:left;" style="font-size:11px;">                                                    
                                                    
                                                    '.$INDICACIONT.'                                                 

                                          </td>
                                        </tr>                                                                      
                                    </table>


                                    <!--<BR>
                                    <BR>
                                    <BR>
                                    <BR>
                                    <BR>
                                    <BR>
                                    <BR>
                                    <BR>
                                    <BR>
                                    <BR>-->

                                    <div id="texto_firma" style="float:left;  position: absolute; bottom: 390;">                                    

                                                <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%; font-size:14px; float:left;">

                                                      '.$nom.' &nbsp;&nbsp; '.$apellido_1.' &nbsp;&nbsp; '.$apellido_2.'                                             

                                                </div>


                                                <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%; font-size:14px; float:right;">

                                                      '.$doctor.'                                           

                                                </div>

                                                <BR>
                                                


                                                <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:100%; ">

                                                        <B>___________________________________________________
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        __________________________________________________</B>
                                                        

                                                </div>

                                                <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:95%; margin-left:25px; font-size:13px;">

                                                        <B>Nombre y firma del Paciente
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Nombre completo y firma del M&eacute;dico</B>
                                                        

                                                </div>

                                    </div>            


                                    <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            
                                        <img id="firma" src="firmas/'.$val.'_firma.png">

                                    </div>


                                    <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            
                                        <img id="firma2" src="firmas/'.$doctor.'_firmaMedico.png">

                                    </div>





                                    <!--<div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">
                                    </div>-->

                              </div>




                                  		


					
			</body>
	</html>';

					# Instanciamos un objeto de la clase DOMPDF.
					$mipdf = new DOMPDF();

					# Definimos el tamaño y orientación del papel que queremos.
					# O por defecto cogerá el que está en el fichero de configuración.
					$mipdf ->set_paper("letter", "portrait");

					# Cargamos el contenido HTML.
                              $mipdf ->load_html(utf8_decode($html));
sleep(5);
					# Renderizamos el documento PDF.
					$mipdf ->render();


                    #creamos el pdf en fisico
                    $pdf = $mipdf->output();

                    #ENVIAMOS EL PDF AL SERVIDOR
                    file_put_contents('PDF/'.$val2.'.pdf', $pdf);

sleep(5);
                    //unlink('firmas/'.$val4.'_firma.png');

					# Enviamos el fichero PDF al navegador.
					//$mipdf ->stream($val.'.pdf');

					//$mipdf->stream($val.".pdf", array("Attachment" => 0));

					//exit(0);


                    header("Location: pacienteNotas.php?index=".$val);  

				


	//}
?>


