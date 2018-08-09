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
                    $val5=$_GET['edad'];
                    $val6=$_GET['folioP'];
                    $val7=$_GET['diagnostico'];
                    $val8=$_GET['cirugia'];
                    $val9=$_GET['cirujano'];
                    $val10=$_GET['tipo_cirugia'];
                    $val11=$_GET['anestesia'];
                    $val12=$_GET['riesgo'];
                    $val13=$_GET['hemoderivados'];
                    $val14=$_GET['cuenta'];
                    $val15=$_GET['sangrado'];
                    $val16=$_GET['complicaciones'];
                    $val17=$_GET['pieza'];
                    $val18=$_GET['tecnica'];
                    $val19=$_GET['fc_nota'];
                    $val20=$_GET['fr_nota'];
                    $val21=$_GET['ta_nota'];
                    $val22=$_GET['ta2_nota'];
                    $val23=$_GET['temp_nota'];
                    $val24=$_GET['exploracion'];
                    $val25=$_GET['idx'];
                    $val26=$_GET['indicaciones'];
                    $val27=$_GET['hora'];
                    $val28=$_GET['talla_nota'];
                    $val29=$_GET['imc_nota'];
                    $val30=$_GET['peso_nota'];


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
$val24 = utf8_decode($val24);
$val25 = utf8_decode($val25);
$val26 = utf8_decode($val26);
$val27 = utf8_decode($val27);
$val28 = utf8_decode($val28);
$val29 = utf8_decode($val29);
$val30 = utf8_decode($val30);


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
                    $val24 = str_replace($no_permitidas, $permitidas ,$val24);
                    $val25 = str_replace($no_permitidas, $permitidas ,$val25);
                    $val26 = str_replace($no_permitidas, $permitidas ,$val26);
                    $val27 = str_replace($no_permitidas, $permitidas ,$val27);
                    $val28 = str_replace($no_permitidas, $permitidas ,$val28);
                    $val29 = str_replace($no_permitidas, $permitidas ,$val29);
                    $val30 = str_replace($no_permitidas, $permitidas ,$val30);

sleep(5);




      				//$val = $_POST["texto"];
                  	//$val2 = $_POST["texto2"];

					
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

#firma { position: fixed; left: 30%; bottom: 110px; right: 0px; height: 75px; width: 250px; text-align: center; }

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

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                        </div>-->

                                    <br><br><br><br><br><br><br>
                                        
                                        <div class="row" style=" font-size: 11px; text-align: center;">

                                            <!--<B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V.<br></B>-->

                                            <b>NOTA POST-OPERATORIA</b>
                                            

                                        </div>                             

    



                                    <div class="row" style="text-align: justify; font-family: Georgia;  <!--background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat; z-index: 1;-->">
                                   
                                            

                                                <table class="table table-bordered" style="font-size:9px;">
                                                    <tr style=" color:black;  text-align:center;">
                                                        <td class="tabla" style=" solid black; width:100px;" ><b>FECHA:</b>&nbsp;&nbsp;'.$val3.' </td>
                                                         <td class="tabla" style="border-top: 1px solid black; width:100px;"><b>HORA:</b>&nbsp;&nbsp;'.$val27.'</td>
                                                    </tr>
                                                </table>
                                                <table class="table table-bordered" style="font-size:9px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:left;  ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:540px;" > <b>NOMBRE:</b>&nbsp;&nbsp; '.$val2.'</td>                                                       
                                                        <td class="tabla" style="border-top: 1px solid black; width:199px;" > <b>EDAD:</b> &nbsp;&nbsp;'.$val5.'</td>
                                                    </tr> 

                                                </table>

                                                <table class="table table-bordered" style="font-size:9px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:left; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>DIAGNOSTICO POST-OPERATORIO: </b>'.$val7.'</td>                                                     
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;" > <b>CIRUG&Iacute;A REALIZADA: </b>'.$val8.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;" > <b>CIRUJANO: </b>'.$val9.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;" > <b>TIPO DE CIRUG&Iacute;A: </b>'.$val10.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;" > <b>ANESTESIA: </b>'.$val11.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;" > <b>RIESGO QUIR&Uacute;RGICO: </b>'.$val12.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;" > <b>HEMODERIVADOS: </b>'.$val13.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;" > <b>CUENTA: </b>'.$val14.'</td> 
                                                    </tr>  
                                                    <tr style=" color:black;  text-align:left;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;" > <b>SANGRADO: </b>'.$val15.'</td> 
                                                    </tr> 
                                                    <tr style=" color:black;  text-align:left;  ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px; text-align:left; vertical-align:text-top;" > <b>COMPLICACIONES: </b>'.$val16.'</td> 
                                                    </tr>  
                                                    <tr style=" color:black;  text-align:left; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;" > <b>PIEZA: </b>'.$val17.'</td> 
                                                    </tr> 
                                                    <tr style=" color:black;  text-align:justify; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px; text-align:justify; vertical-align:text-top; font-size:8px;" > <b>T&Eacute;CNICA QUIR&Uacute;RGICA: </b>'.$val18.'</td>                                                     
                                                    </tr>                                                    
                                                            
                                                </table>

                                                <table class="table table-bordered" style="font-size:9px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:center; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>Signos Vitales: </b></td>                                                     
                                                    </tr>
                                                </table>
                                                <table class="table table-bordered" style="font-size:9px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:center; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:98px;" > <b>FC: </b>'.$val19.' X MIN</td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:98px;" > <b>FR: </b>'.$val20.' X MIN</td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:98px;" > <b>TA: </b>'.$val21.'-'.$val22.' </td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:98px;" > <b>TEMP: </b>'.$val23.' C</td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:98px;" > <b>TALLA: </b>'.$val28.' M</td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:97px;" > <b>PESO: </b>'.$val30.' Kg</td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:97px;" > <b>IMC: </b>'.$val29.' </td> 

                                                    </tr>
                                                </table>
                                                <table class="table table-bordered" style="font-size:9px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:justify; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;  text-align:justify; vertical-align:text-top;" > <b>Exploraci&oacute;n F&iacute;sica: </b>'.$val24.'</td>                                                     
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>IDx: </b>'.$val7.'</td>                                                     
                                                    </tr>
                                                </table>

                                                <table class="table table-bordered" style="font-size:9px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:center; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px; " > <b>Indicaciones Post-Operator&iacute;as: </b></td>                                                     
                                                    </tr>

                                                    <tr style=" color:black;  text-align:justify;  ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:700px;  text-align:justify; vertical-align:text-top;" > '.$val26.'</td>                                                     
                                                    </tr>
                                                </table>                                                
                                           
                                    </div>
                                    <br><br>


                                    <div class="row" style="text-align: center; font-family: Georgia; z-index: 1; font-size:9px; position:fixed; bottom:115px;">
                                    <b>'.$val9.'</b><br>____________________________________________________________<br>
                                    Nombre y Firma del M&eacute;dico

                                    </div>

                                    <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            
                                        <img id="firma" src="firmas/'.$val9.'_firmaMedico.png">

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