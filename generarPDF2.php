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


                    $val2 = utf8_decode($val2);

                    $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","Ñ");
                    $permitidas= array ("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&ntilde;","&Ntilde;");
                    $val2 = str_replace($no_permitidas, $permitidas ,$val2);


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

#firma { position: fixed; left: 5%; bottom: 350px; right: 0px; height: 100px; width: 280px; text-align: center; }
#firma2 { position: fixed; left: 55%; bottom: 350px; right: 0px; height: 100px; width: 280px; text-align: center; }


	</style>


					</head>
					<body style="margin: 0px;">

								 	
					 		 	<div id="content" style=" font-size: 14.5px; page-break-after:always;">     

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                        </div>-->

                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                                        
                                        <div class="row" style=" font-size: 16px; text-align: center;">

                                            <B>
                                            <!--PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. <br>-->

                                            AUTORIZACI&Oacute;N PARA LA CAPTURA DE IM&Aacute;GENES</B>
                                            

                                        </div>

                                    <br>
                                    <br>
                                    <br>

    


                                        <div class="row" style="text-align: left; font-family: Georgia; font-style: italic;  margin-left: 35px;">

                                            <B><div id="fecha_pdf">'.$val3.'</div></B>                                           

                                        </div>
                                        <br>

                                    


                                    <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px; <!--background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat; z-index: 1;--> ">
                                            

                                            De una parte <b>Plastic and Beauty Medical Group S.A. de C.V.</b> con domicilio en Profesa 32, Valle de Santa M&oacute;nica, Tlalnepantla, Estado de M&eacute;xico, CP 54057, en adelante DENOMINADA <b> PLASTIC & BEAUTY.</b>

                                        <br><br><br>

                                        Y de otra (Nombre del Paciente o Cliente): '.$val2.' en adelante DENOMINADO EL PACIENTE. Por este contrato y expresamente:

                                    <br><br><br>
                                            El paciente Declara:
                                        <br><br>
                                            El paciente autoriza a Plastic & Beauty, as&iacute; como a todas aquellas terceras personas f&iacute;sicas o jur&iacute;dicas a las que la empresa pueda ceder los derechos de explotaci&oacute;n sobre las im&aacute;genes, o parte de las mismas, a que indistintamente puedan utilizar todas la im&aacute;genes, o partes de las mismas en las que intervengo como modelo anat&oacute;mico.
                                        <br><br>
                                            Mi autorizaci&oacute;n tiene &aacute;mbito geogr&aacute;fico determinado por lo que la empresa y otras personas f&iacute;sicas o jur&iacute;dicas a las que la empresa pueda ceder los derechos de explotaci&oacute;n sobre las fotograf&iacute;as, o partes de las mismas, en las que intervengo como la cualquier otro pa&iacute;s.
                                        <br><br><br>
                                            Mi autorizaci&oacute;n se refiere a la totalidad de usos que puedan tener las im&aacute;genes, o partes de las mismas, en las que aparezco como modelo anat&oacute;mico, utilizando los medios t&eacute;cnicos conocidos en la actualidad y los que pudieran desarrollarse en el futuro, y para cualquier aplicaci&oacute;n. Todo ello con la &uacute;nica salvedad y limitaci&oacute;n de aquellas utilizaciones o aplicaciones que pudieran atentar al derecho al honor en los t&eacute;rminos previstos en la Ley Org&aacute;nica 1/85, de 5 de Mayo, de Protecci&oacute;n Civil al Derecho al Honor, la Intimidad Personal y familiar y a la Propia Imagen.
                                        <br><br><br>
                                            Y al art. 87 de la Ley Federal del Derecho de Autor: "El retrato de una persona s&oacute;lo puede ser usado o publicado, con su consentimiento expreso, o bien con el de sus representantes o los t&iacute;tulares de los derechos correspondientes. La autorizaci&oacute;n de usar o publicar el retrato podr&aacute; revocarse por quien la otorg&oacute; qui&eacute;n, en su caso, responder&aacute; por los da&ntilde;os y perjuicios que pudiera ocasionar dicha revocaci&oacute;n.
                                        <br><br><br>
                                            Cuando una persona se dejare retratar, se presume de que ha otrogado el consentimiento a que se refiere el p&aacute;rrafo anterior y no tendr&aacute; derecho a revocarlo, siempre que se utilice en los t&eacute;rminos y para los fines pactados.
                                        <br><br><br>
                                            No ser&aacute; necesario el consentimiento a que se refiere este art&iacute;culo cuando se trate del retrato de una persona que forme parte menor de un conjunto o la imagen sea tomada en un lugar p&uacute;blico y con fines informativos, m&eacute;dicos, cient&iacute;ficos o period&iacute;sticos."<br>
                                    </div>
                                    

                                    <!--<div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">
                                    </div>-->
                                        



                                </div> 




                                <div id="content2" style=" font-size: 15px; page-break-before">     

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="12%" height="12%">
                                            </div>
                                        </div>-->

                                    <br><br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                        
                                        <div class="row" style=" font-size: 16px; text-align: center;">

                                            <B>
                                            <!--PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. <br>-->

                                            AUTORIZACI&Oacute;N PARA LA CAPTURA DE IM&Aacute;GENES</B>
                                            

                                        </div>

                                    <br>
                                    <br><br>
                                    <br><br><br>
                                    <br>
    

                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px; <!--background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat;--> ">
                                            

                                            Mi autorizaci&oacute;n fija l&iacute;mite de tiempo para su concesi&oacute;n y para la explotaci&oacute;n de las im&aacute;genes, o parte de las mismas, en las que aparezco como modelo, por lo que mi autorizaci&oacute;n se considera concedida por un plazo de tiempo ilimitado para televisi&oacute;n y cualquier medio electr&oacute;nico, incluyendo internet. y para cualquier medio impreso.

                                            <br><br><br>

                                            Se considera como inicio del tiempo, una vez que la toma de im&aacute;genes se realice, salga por primera vez al aire o este por primera vez en alg&uacute;n medio impreso, respectivamente.

                                            <br><br><br>


                                            Los pacientes liberan de cualquier cuesti&oacute;n jur&iacute;dica, al cliente final, PLASTIC & BEAUTY y sus representantes f&iacute;sicos y legales, en el presente o futuro, debiendo de sujetarse a lo acordado en este contrato, con parte PLASTIC & BEAUTY.

                                            <br><br><br>


                                            Cesi&oacute;n de mis derechos de imagen sobre las fotograf&iacute;as y/ filmaci&oacute;n tomadas, aceptando estar conforme con el citado acuerdo. 

                                    <br><br>

                                    </div>
                                    <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 0px; margin-right: 0px;  height: 270px;">



                                    <br><br><br><br>  


                                        <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            
                                            <img id="firma" src="firmas/'.$val4.'_firma.png">

                                        </div>

                                         <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1; margin-left:50%;  width:50%;">

                                            
                                            <img id="firma2" src="firmas/ANDRES CALLEJAS SANCHEZ_firmaMedico.png">
                                            <br>
                                            <b>ANDR&Eacute;S CALLEJAS S&Aacute;NCHEZ</b>

                                        </div>


                                        <div  style="text-align: center; font-family: Georgia; font-style: italic; z-index: 1;">

                                            <B>_____________________________________</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>______________________________________</B>

                                        </div>

                                        <div style="text-align: center; font-family: Georgia; font-style: italic; margin-left: 100px; text-align: left; z-index: 1;">

                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Firma del Paciente</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>PLASTIC & BEAUTY</B>

                                        </div>

                                        <!--<div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">-->



                                        </div>

                                            

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