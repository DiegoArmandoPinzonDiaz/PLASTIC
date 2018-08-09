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
                    $val8=$_GET['fecha_envio'];
                    $val9=$_GET['quien_envia'];
                    $val10=$_GET['quien_recibe'];
                    $val11=$_GET['motivo_envio'];
                    $val12=$_GET['resumen_clinico'];
                    $val13=$_GET['app2'];
                    $val14=$_GET['pa2'];
                    $val15=$_GET['fr_referencia'];
                    $val16=$_GET['fc_referencia'];
                    $val17=$_GET['ta_referencia'];
                    $val18=$_GET['ta2_referencia'];
                    $val19=$_GET['temp_referencia'];
                    $val20=$_GET['peso_referencia'];
                    $val21=$_GET['talla_referencia'];
                    $val22=$_GET['expliracion_fisica'];
                    $val23=$_GET['laboratorio'];
                    $val24=$_GET['tratamiento_actual'];
                    $val25=$_GET['categorizacion'];
                    $val26=$_GET['hora'];
                    $val27=$_GET['imc_referencia'];

                    $val28=$_GET['radio'];
                    $val29=$_GET['electro'];
                    $val30=$_GET['tomo'];
                    $val31=$_GET['quimica']; 
                    $val32=$_GET['biometria'];
                    $val33=$_GET['tp'];
                    $val34=$_GET['ego'];
                    $val35=$_GET['perfil'];  

                    if($val7 = 1){ $val7 = 'MASCULINO';}
                    else{  $val7 = 'FEMENINO';  }


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


$IMC = '';
if($val20 > 0 && $val21 > 0){ $IMC = ($val20)/($val21 * $val21); }



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



                              
if($val31==1){

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val4."' AND ESTUDIO_LAB = '1' ORDER BY FECHA_LAB DESC LIMIT 1");

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

}


if($val32==1){

            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val4."' AND ESTUDIO_LAB = '2' ORDER BY FECHA_LAB DESC LIMIT 1");

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

}

if($val33==1){

            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val4."' AND ESTUDIO_LAB = '3' ORDER BY FECHA_LAB DESC LIMIT 1");

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

}

if($val34==1){

            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val4."' AND ESTUDIO_LAB = '4' ORDER BY FECHA_LAB DESC LIMIT 1");

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

}


if($val35==1){

            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM LABORATORIOS WHERE FOLIO_LAB = '".$val4."' AND ESTUDIO_LAB = '5' ORDER BY FECHA_LAB DESC LIMIT 1");

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

}

if($val28==1){

            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val4."' AND ESTUDIOS_GABINETE = '1' ORDER BY FECHA_GABINETE DESC LIMIT 1");

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
}


if($val29==1){

            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val4."' AND ESTUDIOS_GABINETE = '3' ORDER BY FECHA_GABINETE DESC LIMIT 1");

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
}

if($val30==1){

            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val4."' AND ESTUDIOS_GABINETE = '2' ORDER BY FECHA_GABINETE DESC LIMIT 1");

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
}







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

#firma { position: fixed; left: 5%; bottom: 160px; right: 0px; height: 175px; width: 280px; text-align: center; }
#firma2 { position: fixed; left: 60%; bottom: 160px; right: 0px; height: 175px; width: 280px; text-align: center; }
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

								 	
					 		 	<div id="content" style=" font-size: 10px; ">     

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-14 col-md-14">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                        </div>-->

                                    <BR><BR><BR><BR><BR><BR>
                                        
                                        <div class="row" style=" font-size: 12px; text-align: center;">

                                            <B>
                                            <!--PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V.<br>-->

                                            NOTA DE REFERENCIA / CONTRAREFERENCIA</B>
                                            

                                        </div>                             


                                    <div class="row" style="text-align: justify; font-family: Georgia;  <!--background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat;--> z-index: 1;">



                                                <table class="table1 " >
                                                   <tr>   

                                                      <td  style=" width:400px; font-size:10px; text-align:center;"  >

                                                                                                                    

                                                      </td>                                    

                                                      <td style=" width:166px;  text-align:left;" class="td2" >

                                                             <b>FECHA:</b>  '.$val3.'                                                         

                                                      </td>
                                                       <td style=" width:166px;  text-align:left;" class="td2" >

                                                             <b>FOLIO:</b>   '.$val6.'                                            
                                                                
                                                      </td>
                                                    </tr>                                       

                                                </table> 

                                                <table class="table1"  style="margin-top: -2px;">
                                                    <tr>   

                                                      <td style=" width:400px; font-size:10px; text-align:center;" class="top_sin"  >

                                                                                                                    

                                                      </td> 
                                                      <td style=" width:166px;  text-align:left; font-size:10px;" class="td2" >

                                                            <b>EDAD:</b> &nbsp; &nbsp;  '.$val5.'                                                          

                                                      </td>
                                                      <td style=" width:166px;  text-align:left; font-size:10px;" class="td2" >

                                                            <b>SEXO:</b> &nbsp; &nbsp;  '.$val7.'                                                           

                                                      </td>

                                                    </tr>   
                                                                                                                                    

                                                </table> 

                                                <table class="table1"  style="margin-top: -2px;">
                                                   <tr>   

                                                      <td style=" width:400px; font-size:10px; text-align:center;" class="top_sin" >

                                                                                                                    

                                                      </td> 
                                                      <td style=" width:343px;  text-align:left; font-size:10px;" class="td2" >

                                                            <b>NOMBRE:</b> &nbsp; &nbsp;  '.$val2.'                                                          

                                                      </td>

                                                    </tr> 
                                                </table> 

                                                 <table class="table " style="margin-top: -2px; ">
                                                   <tr>   

                                                      <td style=" width:400px; font-size:10px; text-align:left;"  >

                                                                <b>FECHA Y HORA DEL ENV&Iacute;O:</b>                                                    

                                                      </td>                                    
                                                      <td style=" width:166px;  text-align:left;" class="td2" >

                                                             <b>FECHA</b>  '.$val8.'                                                         

                                                      </td>
                                                       <td style=" width:166px;  text-align:left;" class="td2" >

                                                             <b>HORA</b> '.$val26.'                                            
                                                                
                                                      </td>
                                                    </tr>                                       

                                                </table> 

                                                <table class="table1" style="margin-top: -2px; " >
                                                    <tr> 
                                                      <td style=" width:753px;  text-align:left;" class="td2" >

                                                             <b>QUIEN ENV&Iacute;A:</b> &nbsp; &nbsp;  '.$val9.'                                                           

                                                      </td>
                                                    </tr> 
                                                    <tr> 
                                                      <td style=" width:753px;  text-align:left;" class="td2" >

                                                             <b>QUIEN RECIBE:</b> &nbsp; &nbsp;  '.$val10.'                                                           

                                                      </td>
                                                    </tr> 
                                                    <tr> 
                                                      <td style=" width:753px;   text-align:justify; vertical-align:text-top;" class="td2" >

                                                             <b>MOTIVO DEL ENV&Iacute;O:</b> &nbsp; &nbsp;  '.$val11.'                                                           

                                                      </td>
                                                    </tr> 
                                                    <tr> 
                                                      <td style=" width:753px; font-size:9px;   text-align:justify; vertical-align:text-top;" class="td2" >

                                                             <b>RESUMEN CL&Iacute;NICO:</b> &nbsp; &nbsp;  '.$val12.'                                                           

                                                      </td>
                                                    </tr>  
                                                    <tr> 
                                                      <td style=" width:753px; font-size:9px;   text-align:justify; vertical-align:text-top;" class="td2" >

                                                             <b>APP:</b> &nbsp; &nbsp;  '.$val13.'                                                           

                                                      </td>
                                                    </tr>  
                                                    <tr> 
                                                      <td style=" width:753px; font-size:9px;   text-align:justify; vertical-align:text-top;" class="td2" >

                                                             <b>PA:</b> &nbsp; &nbsp;  '.$val14.'                                                           

                                                      </td>
                                                    </tr>                                       

                                                </table>




                                                <table class="table " style="margin-top: -2px; ">
                                                    <tr> 
                                                      <td style=" width:753px;  text-align:center;" class="td2" >

                                                             <b>SIGNOS VITALES</b>                                                           

                                                      </td>
                                                    </tr>  
                                                </table>  
                                                <table class="table table-bordered" style="font-size:10px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:center; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:180px;" > <b>FR: &nbsp; &nbsp; </b>'.$val15.' &nbsp; &nbsp; X MIN</td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:180px;" > <b>FC: &nbsp; &nbsp; </b>'.$val16.' &nbsp; &nbsp; X MIN</td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:180px;" > <b>TA (DIAST&Oacute;LICA): &nbsp; &nbsp;</b>'.$val17.' </td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:180px;" > <b>TA (SIST&Oacute;LICA):  &nbsp; &nbsp;</b>'.$val18.' </td> 
                                                        

                                                    </tr>
                                                </table>
                                                <table class="table table-bordered" style="font-size:10px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:center; margin:100px; padding:100px;">
                                                      <td class="tabla" style="border-top: 1px solid black; width:180px;" > <b>TEMP: &nbsp; &nbsp;</b>'.$val19.' &nbsp; &nbsp; C</td>
                                                      <td class="tabla" style="border-top: 1px solid black; width:180px;" > <b>PESO: &nbsp; &nbsp;</b>'.$val20.' &nbsp; &nbsp; Kg</td>
                                                      <td class="tabla" style="border-top: 1px solid black; width:180px;" > <b>TALLA: &nbsp; &nbsp;</b>'.$val21.' &nbsp; &nbsp; M</td>
                                                      <td class="tabla" style="border-top: 1px solid black; width:180px;" > <b>IMC: &nbsp; &nbsp;</b>'.$IMC.' </td> 
                                                    </tr>
                                                </table>



                                                <table class="table " style="margin-top: -2px; ">
                                                    <tr> 
                                                      <td style=" width:753px; font-size:9px;  text-align:justify; vertical-align:text-top;" class="td2" >

                                                             <b>EXPLORACI&Oacute;N F&Iacute;SICA:</b> &nbsp; &nbsp; '.$val22.'                                                          

                                                      </td>
                                                    </tr>
                                                </table>     





                                                <table class="table1" style="margin-top: -2px; font-size:10px; " >
                                                    <tr> 
                                                      <td style=" width:753px; text-align:center; vertical-align:text-top; font-size:10px;" class="td2" >

                                                             <b>RESULTADOS DE LABORATORIO</b>                                                      

                                                      </td>
                                                    </tr>
                                                </table>      ';




if($val31==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:753px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>QU&Iacute;MICA SANGU&Iacute;NEA:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:9px; " >
                           <tr> 
                            <td style=" width:142px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>GLUCOSA:</b>  &nbsp; &nbsp;    '.$SANGUINEA1.'                                                       

                            </td>
                            <td style=" width:142px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>UREA:</b>   &nbsp; &nbsp;    '.$SANGUINEA2.'                                                      

                            </td>
                            <td style=" width:142px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>BUN:</b>   &nbsp; &nbsp;    '.$SANGUINEA3.'                                                      

                            </td>
                            <td style=" width:142px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>CREATININA:</b>   &nbsp; &nbsp;    '.$SANGUINEA4.'                                                      

                            </td>
                            <td style=" width:141px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>&Aacute;CIDO &Uacute;RICO:</b>      &nbsp; &nbsp;    '.$SANGUINEA5.'                                                   

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>COLESTEROL:</b>  &nbsp; &nbsp;    '.$SANGUINEA6.'                                                       

                            </td>
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>TRIGLIC&Eacute;RIDOS:</b>   &nbsp; &nbsp;    '.$SANGUINEA7.'                                                      

                            </td>
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>ALB&Uacute;MINA:</b>   &nbsp; &nbsp;    '.$SANGUINEA8.'                                                      

                            </td>
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>GLOBULINA:</b>   &nbsp; &nbsp;    '.$SANGUINEA9.'                                                      

                            </td>
                            <td style=" width:128px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>BT:</b>      &nbsp; &nbsp;    '.$SANGUINEA10.'                                                   

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>BD:</b>  &nbsp; &nbsp;    '.$SANGUINEA11.'                                                       

                            </td>
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>BI:</b>   &nbsp; &nbsp;    '.$SANGUINEA12.'                                                      

                            </td>
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>TGO:</b>   &nbsp; &nbsp;    '.$SANGUINEA13.'                                                      

                            </td>
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>TGP:</b>   &nbsp; &nbsp;    '.$SANGUINEA14.'                                                      

                            </td>
                            <td style=" width:128px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>FA:</b>      &nbsp; &nbsp;    '.$SANGUINEA15.'                                                   

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>GGT:</b>  &nbsp; &nbsp;    '.$SANGUINEA16.'                                                       

                            </td>
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>NA:</b>   &nbsp; &nbsp;    '.$SANGUINEA17.'                                                      

                            </td>
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>K:</b>   &nbsp; &nbsp;    '.$SANGUINEA18.'                                                      

                            </td>
                            <td style=" width:127px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>CL:</b>   &nbsp; &nbsp;    '.$SANGUINEA19.'                                                      

                            </td>
                            <td style=" width:128px; text-align:left; vertical-align:text-top; " class="td2" >

                                                                                 

                            </td>
                          </tr>
            </table>  


                           ';

}



if($val32==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:753px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>BIOMETR&Iacute;A HEM&Aacute;TICA:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:9px; " >
                           <tr> 
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>LEU:</b>  &nbsp; &nbsp;    '.$HEMATICA1.'                                                       

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>ERI:</b>   &nbsp; &nbsp;    '.$HEMATICA2.'                                                      

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>HG:</b>   &nbsp; &nbsp;    '.$HEMATICA3.'                                                      

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>HTO:</b>   &nbsp; &nbsp;    '.$HEMATICA4.'                                                      

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:180px; text-align:left; vertical-align:text-top;" class="td2" >

                                   <b>PLQ:</b>  &nbsp; &nbsp;    '.$HEMATICA5.'                                                       

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>NEUTR&Oacute;FILOS:</b>   &nbsp; &nbsp;    '.$HEMATICA6.'                                                      

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>LINFOCITOS:</b>   &nbsp; &nbsp;    '.$HEMATICA7.'                                                      

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>MONOCITOS:</b>   &nbsp; &nbsp;    '.$HEMATICA8.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}


if($val33==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:753px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>TP:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:9px; " >
                           <tr> 
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>% ACTIVIDAD:</b>  &nbsp; &nbsp;    '.$TP1.'                                                       

                            </td>
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>INR:</b>   &nbsp; &nbsp;    '.$TP2.'                                                      

                            </td>
                            <td style=" width:243px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>TTP:</b>   &nbsp; &nbsp;    '.$TP3.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}


if($val34==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:753px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>EGO:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:9ppx; " >
                           <tr> 
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>COLOR:</b>  &nbsp; &nbsp;    '.$EGO1.'                                                       

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>DENSIDAD:</b>   &nbsp; &nbsp;    '.$EGO2.'                                                      

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>PH:</b>   &nbsp; &nbsp;    '.$EGO3.'                                                      

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>LEU:</b>   &nbsp; &nbsp;    '.$EGO4.'                                                      

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>GLUC:</b>  &nbsp; &nbsp;    '.$EGO5.'                                                       

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>CETONAS:</b>   &nbsp; &nbsp;    '.$EGO6.'                                                      

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>HG:</b>   &nbsp; &nbsp;    '.$EGO7.'                                                      

                            </td>
                            <td style=" width:180px; text-align:left; vertical-align:text-top; " class="td2" >

                                                                                 

                            </td>
                          </tr>
            </table>  


                           ';
}


if($val35==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:753px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>PERFIL TIROIDEO:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:9px; " >
                           <tr> 
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>T3:</b>  &nbsp; &nbsp;    '.$TIROIDEO1.'                                                       

                            </td>
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>T4:</b>   &nbsp; &nbsp;    '.$TIROIDEO2.'                                                      

                            </td>
                            <td style=" width:243px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>T4 LIBRE:</b>   &nbsp; &nbsp;    '.$TIROIDEO3.'                                                      

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>TSH:</b>  &nbsp; &nbsp;    '.$TIROIDEO4.'                                                       

                            </td>
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>T7:</b>   &nbsp; &nbsp;    '.$TIROIDEO5.'                                                      

                            </td>
                            <td style=" width:243px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>IODO:</b>   &nbsp; &nbsp;    '.$TIROIDEO6.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}                                                









                                  $html=$html.' 


                                                <table class="table1" style="margin-top: -2px; font-size:10px; " >
                                                    <tr> 
                                                      <td style=" width:753px; text-align:center; vertical-align:text-top; font-size:10px;" class="td2" >

                                                             <b>RESULTADOS DE GABINETE</b>                                                      

                                                      </td>
                                                    </tr>                                                                                                                                     

                                                </table>';



 if($val28==1){


         $html=$html.'


            <table class="table1" style="margin-top: -2px; font-size:9px; " >
                           <tr> 
                            <td style=" width:223px; text-align:center; vertical-align:text-top; " class="td2" >

                                   <b>RADIOGRAF&Iacute;A:</b>                                                     

                            </td>
                            <td style=" width:519px; text-align:left; vertical-align:text-top; " class="td2" >

                                     '.$GABINETE3.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}   

  if($val30==1){


         $html=$html.'


            <table class="table1" style="margin-top: -2px; font-size:9px; " >
                           <tr> 
                            <td style=" width:223px; text-align:center; vertical-align:text-top; " class="td2" >

                                   <b>TOMOGRAF&Iacute;A:</b>                                                     

                            </td>
                            <td style=" width:519px; text-align:left; vertical-align:text-top; " class="td2" >

                                     '.$GABINETE9.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}  

  if($val29==1){


         $html=$html.'


            <table class="table1" style="margin-top: -2px; font-size:9px; " >
                           <tr> 
                            <td style=" width:223px; text-align:center; vertical-align:text-top; font-size:9px; " class="td2" >

                                   <b>ELECTROCARDIOGRAMA:</b>                                                     

                            </td>
                            <td style=" width:519px; text-align:left; vertical-align:text-top; font-size:9px; " class="td2" >

                                     '.$GABINETE6.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}                                             










                                $html=$html.'

                                                <table class="table " style="margin-top: -2px; ">
                                                    <tr> 
                                                      <td style=" width:753px;  text-align:left;" class="td2" >

                                                             <b>TRATAMIENTO ACTUAL:</b> &nbsp; &nbsp; '.$val24.'                                                          

                                                      </td>
                                                    </tr>  
                                                    <tr> 
                                                      <td style=" width:753px;  text-align:left;" class="td2" >

                                                             <b>CATEGORIZACI&Oacute;N PRIORIDAD:</b> &nbsp; &nbsp; '.$val25.'                                                          

                                                      </td>
                                                    </tr>  
                                                </table>  
                                   
                                            

                                           

                                           
                                    </div>


                                    <br><br><br>

                                    <div class="row" style="text-align: center; font-family: Georgia; z-index: 1; font-size:11px;">
                                    ____________________________________________________________<br>
                                    Nombre y Firma del M&eacute;dico

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


