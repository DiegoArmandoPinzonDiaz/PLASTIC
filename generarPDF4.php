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
                    $val14=$_GET['complicaciones'];
                    $val15=$_GET['pronostico'];
                    $val16=$_GET['resumen'];
                    $val17=$_GET['app'];
                    $val18=$_GET['pa_nota'];
                    $val19=$_GET['fc_nota'];
                    $val20=$_GET['fr_nota'];
                    $val21=$_GET['ta_nota'];
                    $val22=$_GET['ta2_nota'];
                    $val23=$_GET['temp_nota'];
                    $val24=$_GET['exploracion'];
                    $val25=$_GET['idx'];
                    $val26=$_GET['plan'];
                    $val27=$_GET['hora'];
                    $val28=$_GET['talla_nota'];
                    $val29=$_GET['imc_nota'];
                    $val30=$_GET['laboratorio_nota'];
                    $val31=$_GET['peso_nota'];

                    $val32=$_GET['radio'];
                    $val33=$_GET['electro'];
                    $val34=$_GET['tomo'];
                    $val35=$_GET['quimica'];
                    $val36=$_GET['biometria'];
                    $val37=$_GET['tp'];
                    $val38=$_GET['ego'];
                    $val39=$_GET['perfil'];

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
$val31 = utf8_decode($val31);

$val32 = utf8_decode($val32);
$val33 = utf8_decode($val33);
$val34 = utf8_decode($val34);
$val35 = utf8_decode($val35);
$val36 = utf8_decode($val36);
$val37 = utf8_decode($val37);
$val38 = utf8_decode($val38);
$val39 = utf8_decode($val39);

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
                    $val31 = str_replace($no_permitidas, $permitidas ,$val31);

                    $val32 = str_replace($no_permitidas, $permitidas ,$val32);
                    $val33 = str_replace($no_permitidas, $permitidas ,$val33);
                    $val34 = str_replace($no_permitidas, $permitidas ,$val34);
                    $val35 = str_replace($no_permitidas, $permitidas ,$val35);
                    $val36 = str_replace($no_permitidas, $permitidas ,$val36);
                    $val37 = str_replace($no_permitidas, $permitidas ,$val37);
                    $val38 = str_replace($no_permitidas, $permitidas ,$val38);
                    $val39 = str_replace($no_permitidas, $permitidas ,$val39);


                    $val17 = str_replace('-', '<br>' ,$val17);


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



                              
if($val35==1){

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


if($val36==1){

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

if($val37==1){

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

if($val38==1){

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


if($val39==1){

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

if($val32==1){

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


if($val33==1){

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

if($val34==1){

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

#firma { position: fixed; left: 30%; bottom: 100px; right: 0px; height: 75px; width: 250px; text-align: center; }

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

								 	
					 		 	<div id="content" style=" font-size: 10px; ">     

                                        <!--<div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img style="margin-left: 200px;" src="imagenes/logo2.png" width="12%" height="12%">
                                                <img style="margin-left: 220px;" class="pull-right" src="imagenes/logo3.png" class="pull-right" width="11%" height="11%">
                                            </div>
                                        </div>-->

                                    
 <BR><BR><BR><BR><BR><BR>  <BR><BR>                                     
                                        <div class="row" style=" font-size: 10px; text-align: center;">

                                            <!--<B>
                                            PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V.<br></B>-->

                                            <b>NOTA PREOPERATORIA</b>
                                            

                                        </div>                             

    



                                    <div class="row" style="text-align: justify; font-family: Georgia;  <!--background-image: url(imagenes/fondo.png); background-position: center; background-repeat:no-repeat; z-index: 1;-->  ">
                                   
                                            

                                                <table class="table table-bordered" style="font-size:8px;">
                                                    <tr style=" color:black;  text-align:center;">
                                                        <td class="tabla" style=" solid black; width:150px;" > <b>Fecha:</b> '.$val3.' </td>
                                                        <td class="tabla" style="border-top: 1px solid black; width:150px;"> <b>Hora:</b> '.$val27.'</td>
                                                    </tr>
                                                </table>
                                                <table class="table table-bordered" style="font-size:8px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:540px;" > <b>Nombre:</b> '.$val2.'</td>                                                       
                                                        <td class="tabla" style="border-top: 1px solid black; width:200px;" > <b>Edad:</b> '.$val5.'</td>
                                                    </tr> 

                                                </table>
                                                
                                                <table class="table table-bordered" style="font-size:7px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:751px;" > <b>DIAGN&Oacute;STICO PREOPERATOR&Iacute;A: </b>'.$val7.'</td>                                                     
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>CIRUG&Iacute;A PROYECTADA: </b>'.$val8.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>CIRUJANO: </b>'.$val9.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>TIPO DE CIRUG&Iacute;A: </b>'.$val10.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>ANESTESIA SUGERIDA: </b>'.$val11.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>RIESGO QUIR&Uacute;RGICO: </b>'.$val12.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>HEMODERIVADOS: </b>'.$val13.'</td> 
                                                    </tr>
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:750px;" > <b>POSIBLES COMPLICACIONES: </b>'.$val14.'</td> 
                                                    </tr>                                                    
                                                            
                                                </table>
                                                
                                                 <table class="table table-bordered" style="font-size:7px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:751px;  text-align:left; vertical-align:text-top;" > <b>PRON&Oacute;STICO: </b>'.$val15.'</td>                                                     
                                                    </tr>
                                                    <tr style=" color:black;  text-align:justify; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:740px;  text-align:left; vertical-align:text-top;" > <b>RESUMEN CL&Iacute;NICO: </b>'.$val16.'</td>                                                     
                                                    </tr>
                                                    <tr style=" color:black;  text-align:justify; margin:100px; padding:100px; font-size:7px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:740px;   text-align:left; vertical-align:text-top;" > <b>APP: </b>'.$val17.'</td>                                                     
                                                    </tr>
                                                </table>
                                                <table class="table table-bordered" style="font-size:7px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:left; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:751px;   text-align:left; vertical-align:text-top;" > <b>PA: </b>'.$val18.'</td>                                                     
                                                    </tr>
                                                </table>

                                                

                                                <table class="table table-bordered tabla" style="font-size:8px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:center;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:751px;" > <b>SIGNOS VITALES: </b></td>                                                     
                                                    </tr>
                                                </table>
                                                <table class="table table-bordered" style="font-size:7px; margin-top: -2px; ">
                                                    <tr style=" color:black;  text-align:center; ">
                                                        <td style="width:99px;"> <b>FC: </b>'.$val19.' X MIN</td> 
                                                        <td style="width:99px;"> <b>FR: </b>'.$val20.' X MIN</td> 
                                                        <td style="width:99px;"> <b>TA: </b>'.$val21.'-'.$val22.' </td> 
                                                        <td style="width:99px;"> <b>TEMP: </b>'.$val23.' C</td> 
                                                        <td style="width:99px;"> <b>TALLA: </b>'.$val28.' M</td> 
                                                        <td style="width:98px;"> <b>PESO: </b>'.$val31.' Kg</td> 
                                                        <td style="width:99px;"> <b>IMC: </b>'.$val29.' </td> 

                                                    </tr>
                                                </table>
                                                <table class="table table-bordered" style="font-size:7px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:justify; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:751px;   text-align:justify; vertical-align:text-top;" > <b>EXPLORACI&Oacute;N F&Iacute;SICA: </b>'.$val24.'</td>                                                     
                                                    </tr>
                                                </table>     






                                                <table class="table1" style="margin-top: -2px; font-size:8px; " >
                                                    <tr> 
                                                      <td style=" width:752px; text-align:center; vertical-align:text-top;" class="td2" >

                                                             <b>RESULTADOS DE LABORATORIO</b>                                                      

                                                      </td>
                                                    </tr>
                                                </table>      ';




if($val35==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:7px; " >
                           <tr> 
                            <td style=" width:752px; text-align:left; vertical-align:text-top; font-size:7px;" class="td2" >

                                   <b>QU&Iacute;MICA SANGU&Iacute;NEA:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:7px; " >
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
                            <td style=" width:144px; text-align:left; vertical-align:text-top; " class="td2" >

                                                                                 

                            </td>
                          </tr>
            </table>  


                           ';

}



if($val36==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:7px; " >
                           <tr> 
                            <td style=" width:752px; text-align:left; vertical-align:text-top; font-size:7px;" class="td2" >

                                   <b>BIOMETR&Iacute;A HEM&Aacute;TICA:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:7px; " >
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
                            <td style=" width:182px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>MONOCITOS:</b>   &nbsp; &nbsp;    '.$HEMATICA8.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}


if($val37==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:7px; " >
                           <tr> 
                            <td style=" width:752px; text-align:left; vertical-align:text-top; font-size:7px;" class="td2" >

                                   <b>TP:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:7px; " >
                           <tr> 
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>% ACTIVIDAD:</b>  &nbsp; &nbsp;    '.$TP1.'                                                       

                            </td>
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>INR:</b>   &nbsp; &nbsp;    '.$TP2.'                                                      

                            </td>
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>TTP:</b>   &nbsp; &nbsp;    '.$TP3.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}


if($val38==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:7px; " >
                           <tr> 
                            <td style=" width:752px; text-align:left; vertical-align:text-top; font-size:7px;" class="td2" >

                                   <b>EGO:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:7px; " >
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
                            <td style=" width:182px; text-align:left; vertical-align:text-top; " class="td2" >

                                                                                 

                            </td>
                          </tr>
            </table>  


                           ';
}


if($val39==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:7px; " >
                           <tr> 
                            <td style=" width:752px; text-align:left; vertical-align:text-top; font-size:7px;" class="td2" >

                                   <b>PERFIL TIROIDEO:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:7px; " >
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
                            <td style=" width:244px; text-align:left; vertical-align:text-top; " class="td2" >

                                   <b>IODO:</b>   &nbsp; &nbsp;    '.$TIROIDEO6.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}                                                









                                  $html=$html.' 


                                                <table class="table1" style="margin-top: -2px; font-size:7px; " >
                                                    <tr> 
                                                      <td style=" width:752px; text-align:center; vertical-align:text-top; font-size:8px;" class="td2" >

                                                             <b>RESULTADOS DE GABINETE</b>                                                      

                                                      </td>
                                                    </tr>                                                                                                                                     

                                                </table>';



 if($val32==1){


         $html=$html.'


            <table class="table1" style="margin-top: -2px; font-size:7px; " >
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

  if($val34==1){


         $html=$html.'


            <table class="table1" style="margin-top: -2px; font-size:7px; " >
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

  if($val33==1){


         $html=$html.'


            <table class="table1" style="margin-top: -2px; font-size:7px; " >
                           <tr> 
                            <td style=" width:223px; text-align:center; vertical-align:text-top;  " class="td2" >

                                   <b>ELECTROCARDIOGRAMA:</b>                                                     

                            </td>
                            <td style=" width:519px; text-align:left; vertical-align:text-top;  " class="td2" >

                                     '.$GABINETE6.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}                                             










                                $html=$html.'


                                                <table class="table table-bordered" style="font-size:7px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:justify; ">
                                                        <td class="tabla" style="border-top: 1px solid black; width:751px;" > <b>IDx: </b>'.$val25.'</td>                                                     
                                                    </tr>
                                                    <tr style=" color:black;  text-align:justify;">
                                                        <td class="tabla" style="border-top: 1px solid black;width:751px;  text-align:justify; vertical-align:text-top;" > <b>PLAN: </b>'.$val26.'</td>                                                     
                                                    </tr>
                                                </table>                                                
                                           
                                    </div>
                                  

                                    

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