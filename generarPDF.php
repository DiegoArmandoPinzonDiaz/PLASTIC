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

#firma { position: fixed; left: 55%; bottom: 130px; right: 0px; height: 100px; width: 280px; text-align: center; }


	</style>


					</head>
					<body style="margin: 0px;">

								 	
					 		 	<div id="content" style=" font-size: 15px; page-break-after:always;">     

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                        </div>-->

                                    <br>
                                        
                                        <div class="row" style=" font-size: 16px; text-align: center;">

                                            <B>
                                            <!--PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. -->
                                            <br>
                                            <br>
                                            <br>
                                            <br>

                                            AVISO DE PRIVACIDAD PARA PROTECCI&Oacute;N DE DATOS PERSONALES</B>
                                            

                                        </div>

                                    <br>
                                    <br>
    


                                        <div class="row" style="text-align: center; font-family: Georgia; font-style: italic; ">

                                            <B><div id="fecha_pdf">'.$val3.'</div></B>                                           

                                        </div>

                                    <br>

                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px; <!--background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat;--> ">
                                            

                                            En t&eacute;rminos de lo previsto en la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares (en lo sucesivo denominada como "la Ley"), te pedimos que leas cuidadosamente los T&eacute;rminos y Condiciones contenidos en este Aviso de Privacidad, ya que la simple aportaci&oacute;n que   hagas de tus datos Personales mediante su env&iacute;o a Plastic and Beauty Medical Group S.A de C.V.,        ya sea a trav&eacute;s de nuestras p&aacute;ginas de  Internet  (http://www.plasticandbeautymexico.com);  y/o  a trav&eacute;s de las diferentes  redes  sociales; y/o  al  correo  electr&oacute;nico  de  los  diferentes  representantes de Plastic and Beauty Medical Group S.A de C.V.; y/o a trav&eacute;s  de reclutadores, agentes,  colaboradores, constituye la aceptaci&oacute;n de estos T&eacute;rminos y Condiciones y en consecuencia nos autorizas expresamente al tratamiento de tus datos personales:

                                        <br><br>

                                        T&eacute;rminos y Condiciones

                                    <br><br>

                                            1. El presente Aviso tiene por objeto la protecci&oacute;n de tus datos personales, mediante su tratamiento leg&iacute;timo, controlado e informado, a efecto de garantizar su privacidad, as&iacute; como tu derecho a la autodeterminaci&oacute;n informativa.
                                        <br><br>
                                            2.- Conforme al art&iacute;culo 3, fracci&oacute;n V, de la Ley, se entiende por Datos Personales: Cualquier informaci&oacute;n concerniente a una persona f&iacute;sica identificada o identificable.
                                        <br><br>
                                            3.- Plastic and Beauty Medical Group S.A. de C.V.  (en  lo  sucesivo  "Plastic  &  Beauty"),  de conformidad a lo dispuesto por la fracci&oacute;n I del art&iacute;culo 16 de la Ley, ser&aacute; el Responsable de tu informaci&oacute;n personal (Datos Personales).
                                        <br><br>
                                            4.- Plastic & Beauty tiene como objetivo mantener informados a sus socios/as, pacientes, clientes, ciberseguidores, y para tal efecto proporciona diversos  servicios  los  cuales  de  manera  enunciativa m&aacute;s no limitativa consisten en los siguientes: Comunicaci&oacute;n constante a trav&eacute;s de correo electr&oacute;nico, llamada telef&oacute;nica, SMS, redes sociales sobre eventos, campa&ntilde;as, promociones, ofertas, recopilaci&oacute;n   de datos con fines estad&iacute;sticos, env&iacute;o de newsletters, etc. Para proporcionarte dichos servicios es necesario tratar y en algunos casos, transferir algunos de tus datos personales.
                                        <br><br>
                                    </div>
                                    <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 0px; margin-right: 0px;  height: 270px; z-index: 1;">


                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px;">


                                            5.- Al enviar v&iacute;a correo electr&oacute;nico tus datos personales a los diferentes representantes de Plastic & Beauty; y/o cumplimentar cualquiera de las solicitudes en l&iacute;nea que aparecen en la p&aacute;gina de Internet  de Plastic & Beauty; y/o cumplimentar los formatos de asociaci&oacute;n para pacientes, clientes o socios; y/
                                            o proporcionar tus datos a trav&eacute;s de las diversas plataformas y redes sociales; y/o al proporcionarlos   v&iacute;a telef&oacute;nica a los diferentes representantes de Plastic & Beauty, aceptas y autorizas  a  Plastic & Beauty a utilizar y tratar de forma automatizada tus datos personales e informaci&oacute;n suministrados, los cuales formar&aacute;n parte de nuestra base de datos con la finalidad de usarlos en forma enunciativa, m&aacute;s  no limitativa para: identificarte, ubicarte, comunicarte, contactarte, enviarte informaci&oacute;n, actualizar nuestra base de datos, obtener estad&iacute;sticas, promocionar los servicios, programas, cursos y eventos    de Plastic & Beauty.<br>

                                        </div>

                                            

                                    </div>

                                    <!--<div id="pie" style="background-image: url(imagenes/piePagina.png); background-position: left; background-repeat:no-repeat; background-size: 820px 900px; z-index: -1;">-->
                                        



                                </div> 




                                <div id="content2" style=" font-size: 15px; page-break-before">     

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="12%" height="12%">
                                            </div>
                                        </div>-->

                                    <br>
                                        
                                        <div class="row" style=" font-size: 16px; text-align: center;">

                                            <B>
                                            <!--PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. -->
                                            <br>
                                            <br>
                                            <br>
                                            <br>

                                            AVISO DE PRIVACIDAD PARA PROTECCI&Oacute;N DE DATOS PERSONALES</B>
                                            

                                        </div>

                                    <br>
                                    <br>
    

                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px; <!--background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat;--> ">
                                            

                                            6.- La temporalidad del manejo de tus Datos Personales ser&aacute; indefinida a partir de la fecha en que nos
                                            los proporciones, pudiendo oponerte al manejo de los mismos en cualquier momento que lo consideres
                                            oportuno.

                                            <br><br>

                                            7.- Plastic & Beauty como responsable del tratamiento de tus datos personales, est&aacute; obligada a
                                            cumplir con los principios de licitud, consentimiento, informaci&oacute;n, calidad, finalidad, lealtad,
                                            proporcionalidad y responsabilidad tutelados en la Ley; por tal motivo con fundamento en los art&iacute;culos
                                            13 y 14 de la Ley, Plastic & Beauty se compromete a guardar estricta confidencialidad de tus datos
                                            personales, as&iacute; como a mantener las medidas de seguridad administrativas, t&eacute;cnicas y f&iacute;sicas que
                                            permitan protegerlos contra cualquier da&ntilde;o, p&eacute;rdida, alteraci&oacute;n, acceso o tratamiento no autorizado.

                                            <br><br>


                                            8.- En t&eacute;rminos de lo establecido por el art&iacute;culo 22 de la Ley, tienes derecho en cualquier momento a
                                            ejercer tus derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n al tratamiento de tus datos
                                            personales, mediante la solicitud v&iacute;a correo electr&oacute;nico dirigido a Andr&eacute;s Callejas
                                            S&aacute;nchez (drcallejasplasticbeauty@gmail.com) para asuntos relacionados con la Base de datos y/o
                                            Atenci&oacute;n a Socios, o por escrito en nuestro domicilio ubicado en Profesa No. 32, Col. Valle de
                                            Santa M&oacute;nica, Tlalnepantla, CP. 54057, Estado de M&eacute;xico, M&eacute;xico. En cumplimiento al art&iacute;culo 29
                                            de la Ley, dicha solicitud deber&aacute; contener los siguientes datos: a) Tu nombre y domicilio u
                                            otro medio para comunicarte la respuesta a tu solicitud; b) Los documentos que acrediten tu identidad
                                            o, en su caso, la representaci&oacute;n legal de la persona que realiza la solicitud a tu nombre; c) La
                                            descripci&oacute;n clara y precisa de los datos personales respecto de los que buscas ejercer alguno de
                                            los derechos mencionados en el p&aacute;rrafo anterior, y d) Cualquier otro elemento o documento
                                            que facilite la localizaci&oacute;n de tus datos personales. En caso de solicitar la rectificaci&oacute;n de
                                            datos personales, adicionalmente deber&aacute;s indicar las modificaciones a realizarse y aportar la
                                            documentaci&oacute;n que sustente tu petici&oacute;n. La respuesta a tu solicitud se te comunicar&aacute; en un plazo de
                                            veinte d&iacute;as h&aacute;biles, contados desde la fecha en que se recibi&oacute;, pudiendo ampliarse a veinte d&iacute;as m&aacute;s en
                                            los casos que as&iacute; lo establezcan la Ley; a efecto de que de resultar procedente, se lleven a cabo las
                                            medidas adoptadas para cumplir con tu solicitud, mismas que se llevar&aacute;n a cabo dentro de los quince
                                            d&iacute;as h&aacute;biles siguientes a la fecha en que se comunique la respuesta.

                                            <br><br>


                                            9.- Plastic & Beauty ocasionalmente modificar&aacute; y corregir&aacute; este Aviso de Privacidad, por lo tanto te
                                            pedimos que revises este aviso regularmente en la p&aacute;gina (http://www.plasticandbeautymexico.com)
                                            para que est&eacute;s enterado de los cambios y veas c&oacute;mo te pueden afectar.

                                    <br><br>

                                    </div>
                                    <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 0px; margin-right: 0px;  height: 270px;">


                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px;">


                                            10.- Te sugerimos conocer y analizar el contenido de la Ley Federal de Protecci&oacute;n de Datos
                                            Personales en Posesi&oacute;n de los Particulares. Estamos a tus &oacute;rdenes para cualquier aclaraci&oacute;n a
                                            este respecto a la direcci&oacute;n de correo electr&oacute;nico Andr&eacute;s Callejas
                                            S&aacute;nchez (drcallejasplasticbeauty@gmail.com) para asuntos relacionados con la Base de datos y/o
                                            Atenci&oacute;n a Socios, o por escrito en nuestro domicilio ubicado en Profesa No. 32, Col. Valle de
                                            Santa M&oacute;nica, Tlalnepantla, CP. 54057, Estado de M&eacute;xico, M&eacute;xico.                                            

                                        </div>

                                    <br><br><br><br>  


                                        <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            <B>'.$val2.'</B>
                                            <img id="firma" src="firmas/'.$val4.'_firma.png">

                                        </div>


                                        <div  style="text-align: center; font-family: Georgia; font-style: italic; z-index: 1;">

                                            <B>_____________________________________</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>___________________________________</B>

                                        </div>

                                        <div style="text-align: center; font-family: Georgia; font-style: italic; margin-left: 30px; text-align: left; z-index: 1;">

                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nombre Completo del Paciente o Cliente</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Firma del Paciente o Cliente</B>

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