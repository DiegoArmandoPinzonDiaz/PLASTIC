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
                    
                    $val7=$_GET['cirugia_presupuesto'];
                    $val8=$_GET['tarjeta_cirugia'];                   
                    $val9=$_GET['n_opciones'];

                    $val10=$_GET['valor_presupuesto1'];
                    $val11=$_GET['valor_presupuesto2'];
                    $val12=$_GET['valor_presupuesto3'];
                    $val13=$_GET['incluye_presupuesto'];  
                    $val14=$_GET['efectivo_cirugia'];                    

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

sleep(5);

$val9 =  substr($val9,1); 
$num_opcion = strlen ($val9);

$opcion1="";
$opcion2="";
$opcion3="";

$valor1="";
$valor2="";
$valor3="";


if( $num_opcion == 1){

    if($val9 == 0){ $opcion1='HOSPITAL SATELITE'; $valor1=$val10; }
    else if($val9 == 1){ $opcion1='HOSPITAL METROPOLITANO'; $valor1=$val11; }
    else if($val9 == 2){ $opcion1='HOSPITAL INTERLOMAS'; $valor1=$val12; }
}
else if( $num_opcion == 3){

    if( substr($val9, 0, 1) == 0){ 

            $opcion1='HOSPITAL SATELITE'; $valor1=$val10; 

            if( substr($val9, 2, 1) == 1){   $opcion2='HOSPITAL METROPOLITANO'; $valor2=$val11;  }
            else{ $opcion2='HOSPITAL INTERLOMAS'; $valor2=$val13; }
    }
    else{

            $opcion1='HOSPITAL METROPOLITANO';  $valor1=$val11; 
            $opcion2='HOSPITAL INTERLOMAS';     $valor2=$val12; 

    }

}
else if( $num_opcion == 5){

    $opcion1='HOSPITAL SATELITE';       $valor1=$val10; 
    $opcion2='HOSPITAL METROPOLITANO';  $valor2=$val11; 
    $opcion3='HOSPITAL INTERLOMAS';     $valor3=$val12; 

}






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

#firma {  height: 60px; width: 90px;  }
#firma2 { position: fixed; left: 60%; bottom: 110px; right: 0px; height: 75px; width: 280px; text-align: center; }
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
    border: 13px solid #fca4c4;
    border-spacing:10;
    padding:10;
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

    border: 1px solid #56bce1;

}

.td3{

    border: 1px solid #56bce1; 

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

                                        


                                    <div class="row" style="text-align: justify; font-family: Georgia;  background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat; z-index: 1;  ">



                                    <table class="table" >
                                       <tr> 
                                          <td style=" width:400px; font-size:12px; text-align:center;" >







                                                <table class="table1" >
                                                   <tr> 
                                                      <td rowspan="2" style=" width:120px; font-size:12px; text-align:center; height:10px;" >

                                                             <img id="firma" src="imagenes/hospital.png" style="height:45px; width:100px;">                                                     

                                                      </td> 
                                                      <td style=" width:350px;  text-align:center; font-size:12px; height:10px; " >

                                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V.</B>                                                          

                                                      </td>
                                                      <td style=" background-color:#56bce1; width:200px; height:10px;  text-align:center; font-size:12px; color:white;" class="td2" >

                                                              Ciudad de M&eacute;xico a:                                                        

                                                      </td>

                                                    </tr>
                                                    <tr>                                      

                                                      <td style="  font-size:13px;  text-align:center; vertical-align:text-top; height:10px;"  >

                                                             PRESUPUESTO                                                       

                                                      </td>
                                                      <td style="  font-size:13px;  text-align:center;" class="td2" >

                                                             '.$val3.'                                                         

                                                      </td>
                                                    </tr>                                       

                                                </table> 


                                                <table class="table1 " style=" margin-top: -15px;" >
                                                   <tr> 
                                                      <td  style=" width:690px; font-size:12px; text-align:left;" class="td2" >

                                                        <b>Paciente:</b>  &nbsp; &nbsp;  '.$val2.'                                                     

                                                      </td>                                                      
                                                  </tr>                 
                                                  <tr> 
                                                    <td  style=" width:690px; font-size:12px; text-align:left;" class="td2" >

                                                        Cirug&iacute;a:  &nbsp; &nbsp;  '.$val7.'                                                     

                                                    </td>                                                      
                                                  </tr> 
                                                </table> 
                                                
                                                <table class="td2 "  style=" margin-top: -28px;" >  
                                                  <tr> 
                                                    <td rowspan="2"  style=" width:120px; font-size:12px; text-align:left; vertical-align:text-top;"  >

                                                        Honorarios:                                                     

                                                    </td> 
                                                    <td  style=" width:350px; font-size:15px; text-align:center;"   >

                                                        Normal:   &nbsp; &nbsp;  $'.$val8.'                                                    

                                                    </td> 
                                                    <td rowspan="2"  style=" width:201px; font-size:13px; text-align:left;"  >

                                                                                                           

                                                    </td>                                                      
                                                  </tr>  
                                                  <tr> 
                                                    <td  style=" width:350px; font-size:15px; text-align:center;"  >

                                                        Efectivo:   &nbsp; &nbsp;  $'.$val14.'                                                     

                                                    </td>                                                      
                                                  </tr>                                      

                                                </table> 


                                                <table class="table1" style="margin-top: -28px;" >
                                                   <tr> 
                                                      <td  style=" width:690px; font-size:13px; text-align:left;" class="td3" >

                                                        Costo de Hospitalizaci&oacute;n:                                                   

                                                      </td>                                                      
                                                  </tr>    
                                                </table> 


                                                <table class="td2" style=" margin-top: -28px;" >
                                                   <tr> 
                                                      <td  style=" width:479px; font-size:12px; text-align:left; height:20px;"  >

                                                        Opc. 1: &nbsp; &nbsp;  '.$opcion1.'                                                   

                                                      </td> 
                                                      <td  style=" width:150px; font-size:12px; text-align:left;"  >

                                                        $ &nbsp; &nbsp;  '.$valor1.'                                                

                                                      </td>
                                                      <td  style=" width:43px; font-size:12px; text-align:left;"  >

                                                        Aprox.                                                  

                                                      </td>                                                      
                                                  </tr>
                                                  <tr> 
                                                      <td  style=" width:479px; font-size:12px; text-align:left; height:20px;"  >

                                                        Opc. 2:  &nbsp; &nbsp;  '.$opcion2.'                                                

                                                      </td> 
                                                      <td  style=" width:150px; font-size:12px; text-align:left;" >

                                                        $  &nbsp; &nbsp;   '.$valor2.'                                               

                                                      </td> 
                                                      <td  style=" width:43px; font-size:12px; text-align:left;"  >

                                                        Aprox.                                                  

                                                      </td>                                                     
                                                  </tr>    
                                                  <tr> 
                                                      <td  style=" width:479px; font-size:12px; text-align:left; height:20px;"  >

                                                        Opc. 3:  &nbsp; &nbsp;  '.$opcion3.'                                                

                                                      </td> 
                                                      <td  style=" width:150px; font-size:12px; text-align:left;"  >

                                                        $ &nbsp; &nbsp;   '.$valor3.'                                                

                                                      </td>
                                                      <td  style=" width:43px; font-size:12px; text-align:left;"  >

                                                        Aprox.                                                  

                                                      </td>                                                      
                                                  </tr>        
                                                </table> 


                                                <table class="td2" style=" margin-top: -28px;" >
                                                   <tr>
                                                      <td  style=" width:400px; font-size:10px; text-align:right; height:20px;"  >

                                                        TOTAL = Honorarios (Normal / Efectivo) + Costo de Hospitalizaci&oacute;n (Opc. 1 / Opc. 2 / Opc. 3)                                                  

                                                      </td>  
                                                      <td  style=" width:70px; font-size:13px; text-align:right; height:30px;"  >

                                                        <B>TOTAL:</B>                                                   

                                                      </td> 
                                                      <td  style=" width:203px; font-size:13px; text-align:left;"  >

                                                        $                                                 

                                                      </td>                                                     
                                                  </tr>       
                                                </table> 


                                                <table class="td2" style=" margin-top: -28px;" >
                                                   <tr> 
                                                      <td  style=" width:409px; font-size:13px; text-align:left; height:10px; vertical-align:text-top;"  >

                                                          Incluye: <br>
                                                          '.$val13.'                                                

                                                      </td> 
                                                      <td rowspan="2"  style=" width:273px; font-size:8px; text-align:center; vertical-align:text-top;"  >

                                                          <br><br>

                                                           <img id="firma" style="height:65px; width:65px;" src="imagenes/qr.png">   <br>

                                                            Tlacotalpan 59, Consultorio 735, Torre Diamante, Hospital Angeles Metropolitano. 
                                                            <br>
                                                            Col. Roma Sur, Cuauht&eacute;moc, Ciudad de M&eacute;xico. CP. 06760  <br>
                                                            Tel. 5559897928. <br>
                                                            www.plasticandbeautymexico.com                                              

                                                      </td>                                                     
                                                  </tr> 
                                                  <tr> 
                                                      <td  style=" width:409px; font-size:10px; text-align:justify; height:20px;"  >

                                                          <B>IMPORTANTE:</B>  <BR>
                                                          1. Los costos de hospitalizaci&oacute;n son un aproximado y puede variar sin previo aviso.  <br>
                                                          2. Para agendar una fecha para cualquier tipo de procedimiento se requiere cubrir el <br>
                                                          10% del costo total del procedimiento. <br>
                                                          3. Este presupuesto s&oacute;lo tendr&acute; vigencia de 3 meses a partir de la fecha de expedici&oacute;n.                                            

                                                      </td>                                                     
                                                  </tr>      
                                                </table> 




                                         </td>
                                      </tr>                                       

                                  </table> 
                                                                                     

                                           
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


