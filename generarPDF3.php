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

                    $val2 = utf8_decode($val2);
                    $val7 = utf8_decode($val7);

                    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","Ñ");
                    $permitidas= array ("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&ntilde;","&Ntilde;");
                    $val2 = str_replace($no_permitidas, $permitidas ,$val2);
                    $val7 = str_replace($no_permitidas, $permitidas ,$val7);


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

#firma { position: fixed; left: 10%; bottom: 310px; right: 0px; height: 175px; width: 280px; text-align: center; }

.tabla {
    border: 1px solid black;    
}


	</style>


					</head>
					<body style="margin: 0px;">

								 	
					 		 	<!--<div id="content" style=" font-size: 14.5px; ">     

                                        <div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                        </div>-->

                                    <br>
                                    <br>
                                        
                                        <div class="row" style=" font-size: 16px; text-align: center;">

                                            <B><!--PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. <br>-->
                                            <br>
                                            <br>
                                            <br>
                                            <br>

                                            HOJA FRONTAL</B>
                                            

                                        </div>                             

    



                                    <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px; <!--background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat; z-index: 1;"-- 
                                    >
                                            
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                            <div class="row" style="margin-left:70px;">

                                                <table class="table table-bordered">
                                                    <tr style=" color:white; font-size:20px; text-align:center;">
                                                        <td class="tabla" width="100" style="background-color: #74C7E9; margin:0px; ">M&eacute;xico, D.F. a: </td>
                                                        
                                                        <td class="tabla" width="300" style="background-color: #74C7E9;">FOLIO</td>
                                                    </tr>
                                                    <tr style=" color:black; font-size:20px; text-align:center;">
                                                        <td class="tabla" style="border-top: 0px solid black;" >'.$val3.' </td>
                                                        
                                                        <td class="tabla" style="border-top: 0px solid black;">'.$val6.'</td>
                                                    </tr>
                                                    <tr style=" color:black; font-size:20px; text-align:center;">
                                                        <td class="tabla" style="border-top: 1px solid black; " > Paciente: </td>                                                       
                                                        <td class="tabla" style="border-top: 1px solid black; ">'.$val2.'</td>
                                                    </tr>
                                                    <tr style=" color:black; font-size:20px; text-align:center;">
                                                        <td class="tabla" style="border-top: 1px solid black; " > Diagn&oacute;stico: </td>                                                       
                                                        <td class="tabla" style="border-top: 1px solid black; font-size:14px; " >'.$val7.'</td>
                                                    </tr>
                                                    <tr style=" color:black; font-size:20px; text-align:center;">
                                                        <td class="tabla" style="border-top: 1px solid black; " > Edad: </td>                                                       
                                                        <td class="tabla" style="border-top: 1px solid black; " >'.$val5.'</td>
                                                    </tr>

   
                                                </table>
                                            </div>

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>        
                                           
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