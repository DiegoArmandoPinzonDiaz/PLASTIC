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
        			$val2=$_GET['nombre_paciente'];
        			$val3=$_GET['fecha'];
                    $val4=$_GET['folio'];
                    $val5=$_GET['edad'];
                    $val6=$_GET['folioP'];                    
                    $val7=$_GET['procedimiento'];
                    $val8=$_GET['fecha_revision'];                   
                    $val9=$_GET['doctor'];
                    $val10=$_GET['familiar'];
                    $val11=$_GET['sexo'];
                    $val12=$_GET['telefono_indicaciones'];
                    $val13=$_GET['hora1'];
                    $val14=$_GET['fecha_revision'];
                    $val15=$_GET['indicaciones'];

                    

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






sleep(4);
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

#firma { position: fixed; left: 63%; bottom: 160px; right: 0px; height: 60px; width: 180px; text-align: center; }
#firma2 { position: fixed; left: 63%; bottom: 100px; right: 0px; height: 60px; width: 180px; text-align: center; }
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
    border-right: 0;
    border-top: 0;
    border-bottom: 0;
    margin:0px;
    padding:3px 5px 3px 5px;
}

.top_sin{

    border-left: 0;
    border-right: 0.01em solid black;
    border-top: 0;
    border-bottom: 0;
    margin:0px;
    padding:3px 5px 3px 5px;
}


	</style>


					</head>
					<body style="margin: 0px;">

								 	
					 		 	<div id="content" style=" font-size: 12px; ">     

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-14 col-md-14">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                        </div>-->

                                    
                                        
                                        <div class="row" style=" font-size: 14px; text-align: center;">
<BR><BR><BR><BR><BR><BR>
                                            
                                            
                                            INDICACIONES POST-'.$val7.'                                           

                                        </div>                             

    
                                        <BR><BR>

                                        <div style=" font-size: 14px;" >
                                            
                                            Fecha: '.$val3.'   <div style="display:inline; margin-left:50%;">Nombre: '.$val2.' </div>                                   

                                        </div> 

                                        

                                        <div style=" font-size: 14px;" >
                                            
                                            Folio: '.$val6.'   <div style="display:inline; margin-left:54%;">Edad: '.$val5.' </div>                                      

                                        </div> 


                                        

                                        <div style=" font-size: 14px; text-align: left; margin-left:64.5%;" >
                                            
                                            Sexo: '.$val11.'                                      

                                        </div>  

                                       

                                        <div style=" font-size: 14px; text-align: left; float:left;" >
                                            
                                            Hora: '.$val13.'hrs                                      

                                        </div>   

                                        <BR><BR>

                                        INDICACIONES POST-'.$val7.'   

                                        <BR><BR>

                                         <table class="table1"  style="margin-top: -2px;">
                                           <tr>                                                         
                                              <td style=" text-align: justify; font-size:11px; height:520px; vertical-align:text-top;" >

                                                   '.$val15.'                                                          

                                              </td>    
                                           </tr>                                                                              
                                        </table> 





                                    

                                    <div class="row" style="text-align: left; font-family: Georgia; z-index: 1; font-size:14px;">

                                    	Pr&oacute;xima Cita: &nbsp;&nbsp; &nbsp;&nbsp; '.$val14.'

                                    	<br>

                                    	Cualquier duda, cambio en la evoluci&oacute;n o urgencia, se deber&aacute; de comunicar con el 

                                    	<br>

                                    	Dr.(a): &nbsp;&nbsp; &nbsp;&nbsp; '.$val9.'  &nbsp;&nbsp; &nbsp;&nbsp;  al tel&eacute;fono:  &nbsp;&nbsp; &nbsp;&nbsp;  '.$val12.'

                                    	<br><br>

                                      Paciente: &nbsp; &nbsp; '.$val2.'    <div style="display:inline; float:right; margin-right:33%;">Firma:</div>

                                      <br><br><br>

                                      Familiar:  &nbsp; &nbsp; '.$val10.'  <div style="display:inline; float:right; margin-right:33%;">Firma:</div>

                                    </div>

                                    <BR>


                                    <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            
                                        <img id="firma" src="firmas/'.$val4.'_firma.png">

                                    </div>

                                    <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            
                                        <img id="firma2" src="firmas/'.$val4.'_firmaF.png">

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


