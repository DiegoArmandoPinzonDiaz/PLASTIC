<?php 

					use Dompdf\Adapter\CPDF;
					use Dompdf\Dompdf;
					use Dompdf\Exception;
					# Cargamos la librería dompdf.
					//require_once 'lib/pdf/dompdf_config.inc.php';
					require_once 'dompdf/autoload.inc.php';



     //if(isset($_POST["texto"]) && isset($_POST["texto2"]) )
	//function generarPDF1()
      //{

					$val=$_GET['index'];
        			$val2=$_GET['nombre'];
        			$val3=$_GET['fecha'];
                    $val4=$_GET['folio'];
                    $val5=$_GET['folioP'];
                    $val6=$_GET['diagnostico'];
                    $val7=$_GET['cirujano'];
                    $val8=$_GET['beneficios'];
                    $val9=$_GET['riesgos_consentimiento'];
                    $val10=$_GET['procedimiento_consentimiento'];
                    $val11=$_GET['alergias'];
                    $val12=$_GET['intervencion'];
                    $val13=$_GET['servicios'];
                    $val14=$_GET['cama_consentimiento'];
                    $val15=$_GET['lugar_consentimiento'];
                    $val16=$_GET['telefono_consentimiento'];
                    $val17=$_GET['unidad_medica'];
                    $val18=$_GET['familiar_alta'];
                    $val19=$_GET['familiar_alta2'];
                    $val20=$_GET['nombre_paciente'];
                    $val21=$_GET['edad'];
                    $val22=$_GET['cual'];
                    $val23=$_GET['sexo'];


$val2 = utf8_decode($val2);
$val3 = utf8_decode($val3);
$val4 = utf8_decode($val4);
$val5 = utf8_decode($val5);
$val6 = utf8_decode($val6);
$val7 = utf8_decode($val7);
$val8 = utf8_decode($val8);
$val9 = utf8_decode($val9);
$val10 = utf8_decode($val10);
$val11 = utf8_decode($val11);
$val12 = utf8_decode($val12);
$val13 = utf8_decode($val13);
$val14 = utf8_decode($val14);
$val15 = utf8_decode($val15);
$val16 = utf8_decode($val16);
$val17 = utf8_decode($val17);
$val18 = utf8_decode($val18);
$val19 = utf8_decode($val19);
$val20 = utf8_decode($val20);
$val21 = utf8_decode($val21);
$val22 = utf8_decode($val22);
$val23 = utf8_decode($val23);


                    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","Ñ");
                    $permitidas= array ("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&ntilde;","&Ntilde;");
                    $val2 = str_replace($no_permitidas, $permitidas ,$val2);
                    $val3 = str_replace($no_permitidas, $permitidas ,$val3);
                    $val4 = str_replace($no_permitidas, $permitidas ,$val4);
                    $val5 = str_replace($no_permitidas, $permitidas ,$val5);
                    $val6 = str_replace($no_permitidas, $permitidas ,$val6);
                    $val7 = str_replace($no_permitidas, $permitidas ,$val7);
                    $val8 = str_replace($no_permitidas, $permitidas ,$val8);
                    $val9 = str_replace($no_permitidas, $permitidas ,$val9);
                    $val10 = str_replace($no_permitidas, $permitidas ,$val10);
                    $val11 = str_replace($no_permitidas, $permitidas ,$val11);
                    $val12 = str_replace($no_permitidas, $permitidas ,$val12);
                    $val13 = str_replace($no_permitidas, $permitidas ,$val13);
                    $val14 = str_replace($no_permitidas, $permitidas ,$val14);
                    $val15 = str_replace($no_permitidas, $permitidas ,$val15);
                    $val16 = str_replace($no_permitidas, $permitidas ,$val16);
                    $val17 = str_replace($no_permitidas, $permitidas ,$val17);
                    $val18 = str_replace($no_permitidas, $permitidas ,$val18);
                    $val19 = str_replace($no_permitidas, $permitidas ,$val19);
                    $val20 = str_replace($no_permitidas, $permitidas ,$val20);
                    $val21 = str_replace($no_permitidas, $permitidas ,$val21);
                    $val22 = str_replace($no_permitidas, $permitidas ,$val22);
                    $val23 = str_replace($no_permitidas, $permitidas ,$val23);

$servicio1='';
$servicio2='';
$servicio3='';

if($val13 != ''){ $servicio1 = 'X'; $servicio3 = $val13; }
else{ $servicio2 = 'X';}

$servicio4='';
$servicio5='';

if($val12 == 'ELECTIVA'){ $servicio4 = 'X'; }
else if($val12 == 'URGENTE'){ $servicio5 = 'X';}


$servicio6='';
$servicio7='';

if($val11 == 'NEGADA'){ $servicio6 = 'X'; }
else if($val11 == 'POSITIVA'){ $servicio7 = 'X';}
      				//$val = $_POST["texto"];
                  	//$val2 = $_POST["texto2"];


sleep(5);
					
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

#pie { position: fixed; left: 0px; bottom: -260px; right: 0px; height: 650px; text-align: center; }

#texto_pie{ font-size: 11px;  color: black;}

#firma { position: fixed; left: 5%; bottom: 235px; right: 0px; height: 60px; width: 280px; text-align: center; }
#firma2 { position: fixed; left: 55%; bottom: 235px; right: 0px; height: 60px; width: 280px; text-align: center; }
#firma3 { position: fixed; left: 55%; bottom: 135px; right: 0px; height: 50px; width: 280px; text-align: center; }
#firma4 { position: fixed; left: 5%; bottom: 135px; right: 0px; height: 50px; width: 280px; text-align: center; }


#campo_fima1{  position: fixed; left: 5%; bottom: 180px; right: 0px; height: 60px; width: 100%; text-align: center;   }
#campo_fima2{  position: fixed; left: 5%; bottom: 70px; right: 0px; height: 60px; width: 100%; text-align: center;   }

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
table td,
table th {
    border-left: 0;
    border-right: 0.01em solid black;
    border-top: 0;
    border-bottom: 0.01em solid black;
    margin:0px;
    padding:3px 5px 3px 5px;
}




	</style>


					</head>
					<body style="margin: 0px;">

								 	
					 		 	<div id="content" style=" font-size: 11px; ">  
<br> <br>
<br> <br><br> <br>
<br> <br>
                                   <!-- <table class="table table-bordered" style="font-size:11px;">
                                       <tr >
                                          <td rowspan="3" style=" width:372px; text-align:center; font-size:13px;">

                                                    <div>
                                                        <img style="margin-top: -10px;"  class="pull-left" src="imagenes/logo1.png" width="30%" height="30%">
                                                        <img style="margin-top: -14px; margin-left: 30px;" src="imagenes/logo2.png" width="17%" height="17%">
                                                        <img style="margin-top: -6px; margin-left: 30px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="18%" height="18%">
                                                    </div>
                                                    <div style="margin-top: -6px;"><b>CARTA DE CONSENTIMIENTO BAJO INFORMACI&Oacute;N</b></div>

                                          </td>

                                          <td style=" width:372px;">

                                                <b>UNIDAD M&Eacute;DICA:</b>
                                                    <BR>
                                                    '.$val17.'
                                          </td>

                                       </tr>
                                       <tr>
                                          <td style=" height:65px;">

                                                <b>NOMBRE:</b>
                                                    <BR>
                                                    '.$val20.'

                                          </td>
                                       </tr>

                                    </table> --> 

                                    <table class="table table-bordered" style="margin-top: -30px;" style="font-size:10px;">
                                       <tr style="font-size:10px;">

                                          <td rowspan="7" style=" width:372px; text-align:justify;" style="font-size:10px;">

                                                                    <div style="font-size:12px; text-align:center;"><b>CARTA DE CONSENTIMIENTO BAJO INFORMACI&Oacute;N</b><br></div><br>

                                                    
                                                    CON FUNDAMENTO EN REGLAMENTO DE LA LEY GENERAL DE SALUD EN MATERIA DE PRESTACI&Oacute;N DE SERVICIOS DE ATENCI&Oacute;N MEDICA. ART&Iacute;CULOS 80, 81, 83, Y A LA NORMA OFICIAL MEXICANA NOM-168-SSA1-1998. DEL EXPEDIENTE CL&Iacute;NICO FRACCIONES 10.1.1.1 A LA 10.1.1.4.

                                          </td>
                                          <td style="font-size:10px;">
                                                

                                                <b>UNIDAD M&Eacute;DICA:</b>
                                                    '.$val17.'    

                                          </td>
                                        </tr>
                                        <tr>
                                          <td>

                                                <b>NOMBRE:</b>
                                                    '.$val20.'

                                          </td>
                                       </tr>
                                        <tr>
                                          <td >

                                               <b>FOLIO:</b>
                                                    
                                                    '.$val5.'

                                          </td>
                                       </tr>
                                        <tr style="font-size:10px;">  
                                          <td style=" width:372px;">

                                                <b>EDAD:</b>
                                                    
                                                    '.$val21.'

                                          </td>
                                        </tr>
                                        <tr style="font-size:10px;">  
                                          <td style=" width:372px;">

                                                <b>SEXO:</b>
                                                    
                                                    '.$val23.'

                                          </td>
                                        </tr>
                                        <tr style="font-size:10px;">  
                                          <td>

                                                <b>TEL&Eacute;FONO(S):</b>
                                                    
                                                    '.$val16.'

                                          </td>
                                        </tr>
                                        <tr>  
                                          <td style="font-size:10px;">

                                                <b>LUGAR Y FECHA:</b>
                                                   
                                                    '.$val15.' '.$val3.'

                                          </td>

                                        </tr>

                                        <tr style="font-size:10px;">

                                          <td style=" width:372px; text-align:center;">

                                                    
                                                    SERVICIO: <B>CIRUG&Iacute;A PL&Aacute;STICA, EST&Eacute;TICA Y RECONSTRUCTIVA.</B>

                                          </td>
                                          <td>

                                                <b>CAMA:</b>
                                                    
                                                    '.$val14.'

                                          </td>
                                        </tr>

                                    </table>   

                                       
                                                     
                                    
 



                                    <div class="row" style="text-align: justify; font-family: Georgia; z-index: 1;">
                                   
                                        <br> 

                                        Yo:  '.$val20.'
                                        <br>
                                        <br>

                                        Expreso mi libre voluntad para autorizar el procedimiento o intervenci&oacute;n quir&uacute;rgica se&ntilde;alada en este documento despu&eacute;s de haberme proporcionado la informaci&oacute;n completa sobre mi enfermedad y estado actual, la cual fue realizada en forma amplia, precisa y suficiente en un lenguaje claro y sencillo, informandome sobre los posibles riesgos, complicaciones y secuelas, de igual forma los beneficios.

                                        <br>
                                        <br>

                                        El m&eacute;dico me informo la existencia de procedimientos alternativos, el derecho a cambiar mi decisi&oacute;n en cualquier momento y manifestaria antes del procedimiento o intervenci&oacute;n. Con el proposito de que mi atenci&oacute;n sea adecuada, me comprometo a proporcionar informaci&oacute;n completa y veraz, as&iacute; como seguir las indicaciones m&eacute;dicas.

                                        <br>
                                        <br>

                                        Otorgo mi autorizaci&oacute;n al personal de salud para la atenci&oacute;n de contingencias y urgencia derivadas del acto m&eacute;dico se&ntilde;alado, atendiendo al principio de libertad prescriptiva.

                                        <br>
                                        <br>

                                        Doy mi completo consentimiento, para la utilizaci&oacute;n de im&aacute;genes y videos derivados de mi intervenci&oacute;n quir&uacute;rgica, con fines educativos y m&eacute;dicos, guardando y resguardando mi imagen e identidad como privada.

                                        <br>
                                        <br>

                                        Cuenta con Servicios M&eacute;dicos de Salud
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Si &nbsp;&nbsp; <b>'.$servicio1.'</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        No &nbsp;&nbsp;<b>'.$servicio2.'</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Cu&aacute;l: &nbsp;&nbsp; <b>'.$servicio3.'</b>

                                        <br>
                                        <br>

                                        Procedimiento o Intervenci&oacute;n Quir&uacute;rgica   
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Electiva  &nbsp;&nbsp; <b>'.$servicio4.'</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Urgente  &nbsp;&nbsp; <b>'.$servicio5.'</b>


                                        <br>
                                        <br>

                                        Alerg&iacute;as:   
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Negada: &nbsp;&nbsp; <b>'.$servicio6.'</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Positiva: &nbsp;&nbsp; <b>'.$servicio7.'</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Cu&aacute;l:
                                        &nbsp;&nbsp;
                                        '.$val22.'

                                        <br>
                                        <br>

                                        Diagn&oacute;stico previo al procedimiento o intervenci&oacute;n quir&uacute;rgica:

                                        <br>

                                        '.$val6.'

                                        <br>
                                        <br>

                                        Procedimiento o intervenci&oacute;n quir&uacute;rgica proyectada:

                                        <br>

                                        '.$val10.'

                                        <br>
                                        <br>

                                        Riesgos m&aacute;s frecuentes inherentes al procedimiento o intervenci&oacute;n quir&uacute;rgica y a las condiciones actuales del paciente:

                                        <br>

                                        '.$val9.'

                                        <br>
                                        <br>

                                        Beneficios:

                                        <br>

                                        '.$val8.'

                                        <br>
                                        <br>
                                                                                         
                                           
                                    </div>


                                    


                                    <div id="campo_fima1">

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1; float:left;  width:50%; ">

                                                    <B>'.$val2.'</B>                                            

                                            </div>

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1; float:right;  width:50%; ">

                                                    <B>'.$val18.'</B>                                            

                                            </div>

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:100%;">

                                                    <B>___________________________________________________
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    __________________________________________________</B>
                                                    

                                            </div>

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:95%;">

                                                    <B>Nombre completo y firma del paciente. familiar, tutor o
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    Nombre completo y firma del testigo</B>
                                                    

                                            </div>

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:70%;">

                                                    <B>persona legalmente responsable
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </B>
                                                    

                                            </div>

                                    </div>

                                    <br>
                                    <br>
                                    <br>

                                    <div id="campo_fima2">

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1; float:left;  width:50%; ">

                                                    <B>'.$val7.'</B>                                            

                                            </div>

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1; float:right;  width:50%; ">

                                                    <B>'.$val19.'</B>                                            

                                            </div>


                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:100%;">

                                                    <B>___________________________________________________
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    __________________________________________________</B>
                                                    

                                            </div>

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:95%;">

                                                    <B>Nombre completo, cedula y firma del m&eacute;dico tratante
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    Nombre completo y firma del testigo</B>
                                                    

                                            </div>


                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                                    
                                                <img id="firma" src="firmas/'.$val4.'_firma.png">

                                            </div>

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                                    
                                                <img id="firma2" src="firmas/'.$val4.'_firmaT1.png">

                                            </div>

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                                    
                                                <img id="firma3" src="firmas/'.$val4.'_firmaT2.png">

                                            </div>

                                            <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                                    
                                                <img id="firma4" src="firmas/'.$val7.'_firmaMedico.png">

                                            </div>
                                    </div>


                                    



                        
                                    <!--

                                    <div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">
 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                                        <div id="texto_pie">
<br>
<br>
                                            Tlacotalpan 59, Consultorio 735, Torre Diamante, Hospital Angeles Metropolitano. 
                                            <br>
                                            Col. Roma Sur, Cuauht&eacute;moc, Ciudad de M&eacute;xico. CP. 06760

                                        </div>

                                    </div>
                                    -->
                                        



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
                    file_put_contents('PDF/'.$val.'.pdf', $pdf);
sleep(5);

                    //unlink('firmas/'.$val4.'_firma.png');

					# Enviamos el fichero PDF al navegador.
					//$mipdf ->stream($val.'.pdf');

					//$mipdf->stream($val.".pdf", array("Attachment" => 0));

					//exit(0);


                    header("Location: pacienteNotas.php?index=".$val4);  

				


	//}
?>


