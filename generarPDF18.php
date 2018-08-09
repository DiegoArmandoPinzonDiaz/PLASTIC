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


					          $val=$_GET['index'];
        			      $val2=$_GET['nombre_paciente'];
        			      $val3=$_GET['fecha'];
                    $val4=$_GET['folio'];
                    $val5=$_GET['edad'];
                    $val6=$_GET['folioP'];
                    $val7=$_GET['sexo'];
                    
                    $val8=$_GET['clinica'];
                    $val9=$_GET['procedimiento'];                   
                    $val10=$_GET['fecha2'];

                    $val11=$_GET['hora'];


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

//sleep(5);


                                     




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
	margin-left: 10px;
	margin-right: 30px;
	margin-bottom: 0px;
 }

 html {
margin: 0;
margin-left: 10px;
margin-right: 30px;
margin-top: 30px;
}
body {
font-family: "Times New Roman", serif;
margin: 45mm 8mm 2mm 8mm;
}

#pie { position: fixed; left: 0px; bottom: -240px; right: 0px; height: 650px; text-align: center; }

#firma {  height: 40px; width: 90px;  }
#firma2 { position: fixed; left: 30%; bottom: 410px; right: 0px; height: 75px; width: 280px; text-align: center; }
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

    position: fixed; left: 5%; bottom: 1010px; right: 0px; height: 120px; width: 280px; text-align: center;

}


	</style>


					</head>
					<body style="margin: 0px;">

								 	
					 		 	<div id="content" style=" font-size: 11px; ">     

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-14 col-md-14">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                        </div>-->

                                        


                             <br><br><br><br><br><br><br>
                                        
                                        <div class="row" style=" font-size: 12px; text-align: center;">

                                            <b>INDICACIONES PREOPERATORIAS</b>                                            

                                        </div>  

                                        <br>



                                         <table class="table1 " >
                                                    <tr> 

                                                      <td style=" width:400px; font-size:10px;  text-align:left;" class="td1" >

                                                                                                                 

                                                      </td>                                     

                                                      <td style=" width:196px; font-size:12px;  text-align:left;" class="td2" >

                                                            <b>FECHA:</b>   &nbsp; &nbsp;  '.$val3.'                                                         

                                                      </td>
                                                      <td style=" width:163px; font-size:12px;  text-align:left;" class="td2" >

                                                            <b>FOIO:</b>   &nbsp; &nbsp;  '.$val6.'                                                         

                                                      </td>
                                                    </tr>                                       

                                          </table> 

                                                                                      

                                                <table class="table1 " style="margin-top: -2px; ">
                                                   <tr> 

                                                      <td style=" width:400px; font-size:12px; text-align:left;" class="td1"  >

                                                                                                        

                                                      </td>   

                                                      <td style=" width:196px; font-size:12px; text-align:left;" class="td2" >

                                                                <b>SEXO:</b>   &nbsp; &nbsp;    '.$val7.'                                                 

                                                      </td> 

                                                      <td style=" width:163px; font-size:12px; text-align:left;" class="td2" >

                                                                <b>EDAD:</b>   &nbsp; &nbsp;    '.$val5.'                                                 

                                                      </td>                                                      

                                                    </tr>                                                                                       

                                                </table> 


                                                <table class="table " style="margin-top: -2px; ">
                                                   <tr>   

                                                      <td style=" width:781px; font-size:12px; text-align:left;"  >

                                                                <b>NOMBRE:</b>   &nbsp; &nbsp;    '.$val2.'                                                 

                                                      </td> 

                                                    </tr>                                                                                       

                                                </table> 



                                                <table class="table1" style="margin-top: -2px; font-size: 12px; " >
                                                    <tr> 
                                                      <td style=" width:780px; height:30px;  text-align:left; text-align:left; vertical-align:text-top;" class="td2" >
<br>
                                                             Un Mes previo a la cirug&iacute;a.<br><br>

                                                              1. No fumar, ni estar cerca de gente que fume.<br>
                                                              2. No tomar ning&uacute;n medicamento no prescrito por el cirujano.<br>
                                                              3. Suspender cualquier tratamiento hormonal, homeop&aacute;tico, vitaminas, aspirina, etc.<br>
                                                              4. Para el post-operatorio necesitar&aacute; de los siguientes materiales: Gasas de 10 x 10 cm (20 gasas), Microporo de 1/2 pulgada, Pa&ntilde;ales desechables de adulto (1 paquete), Estericide (350ml).<br><br>

                                                              Un dia previo a la cirug&iacute;a.    <br><br>
                                                              1. Ayuno de 8 hrs previo a la cirug&iacute;a, no consumir ning&uacute;n alimento s&oacute;lido o l&iacute;quido durante ese periodo.<br>
                                                              2. Ba&ntilde;o normal de manera habitual dos horas previas a la cirug&iacute;a, no rasurar, no aplicar ning&uacute;n ung&uuml;ento, crema, o sustancia despu&eacute;s del ba&ntilde;o.<br>
                                                              3. No usar maquillaje, ni joyas.<br>
                                                              4. U&ntilde;as despintadas y sin u&ntilde;as postizas.<br>
                                                              5. Llevar ropa c&oacute;moda y floja para despu&eacute;s de la cirug&iacute;a.<br>
                                                              6. Llevar todos sus ex&aacute;menes preoperatorios en copias.<br>
                                                              7. Llegar 30 min antes de la hora de su cirug&iacute;a a la cl&iacute;nica u hospital.
                                               

                                                      </td>
                                                    </tr> 
                                                </table>



                                                <table class="table " style="margin-top: -2px; ">
                                                   <tr>   

                                                      <td style=" width:781px; font-size:12px; text-align:left;"  >

                                                                <b>CL&Iacute;NICA:</b>   &nbsp; &nbsp;    '.$val8.'                                                 

                                                      </td> 

                                                    </tr>                                                                                       

                                                </table> 
                                                <table class="table " style="margin-top: -2px; ">
                                                   <tr>   

                                                      <td style=" width:781px; font-size:12px; text-align:left;"  >

                                                                <b>FECHA CIRUG&Iacute;A:</b>   &nbsp; &nbsp;    '.$val10.'                                                 

                                                      </td> 

                                                    </tr>                                                                                       

                                                </table> 





                                            </table>




                                   <div id="texto_firma" style="float:left;  position: absolute; bottom: 290;">   

                                                <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:100%; ">

                                                        <B>____________________________________________</B>
                                                        

                                                </div>

                                                <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:95%; margin-left:15px; font-size:12px;">

                                                        <b>'.$val2.' </b>
                                                        

                                                </div>

                                    </div>       


                                    <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            
                                        <img id="firma2" src="firmas/'.$val4.'_firma.png">

                                    </div>

                                             
                                                                         



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


