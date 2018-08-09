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
                    
                    $val8=$_GET['cuadro'];
                    $val9=$_GET['tratamiento'];                   
                    $val10=$_GET['medicamento'];

                    $val11=$_GET['pronostico'];
                    $val12=$_GET['diagnostico'];
                    $val13=$_GET['hora'];
                    $val14=$_GET['quien']; 


                    $val15=$_GET['radio'];
                    $val16=$_GET['electro'];
                    $val17=$_GET['tomo'];
                    $val18=$_GET['quimica']; 
                    $val19=$_GET['biometria'];
                    $val20=$_GET['tp'];
                    $val21=$_GET['ego'];
                    $val22=$_GET['perfil'];  


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

//sleep(5);

if($val7==1){ $val7 = 'MASCULINO';}
else{ $val7 = 'FEMENINO';}



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

                                          $FC='';
                                          $FR='';
                                          $TABLA='';
                                          $TEMP='';
                                          $PESO='';
                                          $TALLA='';
                                          $IMC='';
                                          $TABLA2='';



if($val18==1){

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


if($val19==1){

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

if($val20==1){

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

if($val21==1){

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


if($val22==1){

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

if($val15==1){

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


if($val16==1){

            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val4."' AND ESTUDIOS_GABINETE = '2' ORDER BY FECHA_GABINETE DESC LIMIT 1");

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

if($val17==1){

            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val4."' AND ESTUDIOS_GABINETE = '3' ORDER BY FECHA_GABINETE DESC LIMIT 1");

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




$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, " SELECT * FROM MOTIVO_CONSULTA WHERE FOLIO = '".$val4."' ");

                        $contar = mysqli_num_rows($sql);
                    
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $FC = $row['FC'];
                                          $FR = $row['FR'];
                                          $TABLA = $row['TABLA'];
                                          $TEMP = $row['TEMP'];
                                          $PESO = $row['PESO'];
                                          $TALLA = $row['TALLA'];
                                          $IMC = $row['IMC'];
                                          $TABLA2 = $row['TABLA2'];


                                        }

                        }else{ 
                            //echo "NO HAY CAMPOS"; 
                        }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  } 




$val10 = str_replace(',', ' ' ,$val10);
$otro = explode(" ", $val10);
$cuenta = count($otro);

$medicamento=array();

for ($i=0; $i < $cuenta; $i++) { 


                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM MEDICAMENTOS WHERE ID_MEDICAMENTO = '".$otro[$i]."' ");

                        $contar = mysqli_num_rows($sql);
                    
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $ID_MEDICAMENTO = $row['ID_MEDICAMENTO'];
                                          $NOMBRE_GEN = $row['NOMBRE_GEN'];
                                          $NOMBRE_COM = $row['NOMBRE_COM'];
                                          $POSOLOGIA = $row['POSOLOGIA'];
                                          $PRESENTACION = $row['PRESENTACION'];
                                          $VIA = $row['VIA'];
                                          $DOSIS = $row['DOSIS'];
                                          $HORARIO = $row['HORARIO'];
                                          $TIEMPO = $row['TIEMPO'];

                                          array_push($medicamento, $NOMBRE_GEN.' / '.$NOMBRE_COM.' / '.$POSOLOGIA.' / '.$PRESENTACION.' / '.$VIA.'<br>'.$DOSIS.' / '.$PRESENTACION.' / '.$POSOLOGIA.' / '.$VIA.' / '.$HORARIO.' / '.$TIEMPO);


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
#firma2 { position: fixed; left: 30%; bottom: 110px; right: 0px; height: 75px; width: 280px; text-align: center; }
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

    position: fixed; left: 5%; bottom: 10px; right: 0px; height: 120px; width: 280px; text-align: center;

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

                                            <b>NOTA DE EVOLUCI&Oacute;N</b>                                            

                                        </div>  



                                         <table class="table1 " >
                                                    <tr> 

                                                      <td style=" width:400px; font-size:10px;  text-align:left;" class="td1" >

                                                                                                                 

                                                      </td>                                     

                                                      <td style=" width:196px; font-size:10px;  text-align:left;" class="td2" >

                                                            <b>FECHA:</b>   &nbsp; &nbsp;  '.$val3.'                                                         

                                                      </td>
                                                      <td style=" width:163px; font-size:10px;  text-align:left;" class="td2" >

                                                            <b>FOIO:</b>   &nbsp; &nbsp;  '.$val6.'                                                         

                                                      </td>
                                                    </tr>                                       

                                                </table> 

                                                </table>                                                  

                                                <table class="table " style="margin-top: -2px; ">
                                                   <tr> 

                                                      <td style=" width:400px; font-size:10px; text-align:left;"  >

                                                               <b>HORA:</b> &nbsp; &nbsp;  '.$val13.'                                                  

                                                      </td>   

                                                      <td style=" width:196px; font-size:10px; text-align:left;"  >

                                                                <b>SEXO:</b>   &nbsp; &nbsp;    '.$val7.'                                                 

                                                      </td> 

                                                      <td style=" width:165px; font-size:10px; text-align:left;"  >

                                                                <b>EDAD:</b>   &nbsp; &nbsp;    '.$val5.'                                                 

                                                      </td>                                                      

                                                    </tr>                                                                                       

                                                </table> 


                                                <table class="table " style="margin-top: -2px; ">
                                                   <tr>   

                                                      <td style=" width:781px; font-size:10px; text-align:left;"  >

                                                                <b>NOMBRE:</b>   &nbsp; &nbsp;    '.$val2.'                                                 

                                                      </td> 

                                                    </tr>                                                                                       

                                                </table> 



                                                <table class="table1" style="margin-top: -2px; font-size: 10px; " >
                                                    <tr> 
                                                      <td style=" width:780px; height:30px;  text-align:left; text-align:left; vertical-align:text-top;" class="td2" >

                                                             <b>EVOLUCI&Oacute;N DEL CUADRO CL&Iacute;NICO:</b> &nbsp; &nbsp;    '.$val8.'                                                         

                                                      </td>
                                                    </tr> 
                                                </table>

                                                
                                                <table class="table " style="margin-top: -2px; ">
                                                    <tr> 
                                                      <td style=" width:780px;  text-align:center;" class="td2" >

                                                             <b>SIGNOS VITALES</b>                                                           

                                                      </td>
                                                    </tr>  
                                                </table>  
                                                <table class="table table-bordered" style="font-size:10px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:center; margin:100px; padding:100px;">
                                                        <td class="tabla" style="border-top: 1px solid black; width:187px;" > <b>FR: &nbsp; &nbsp; </b>'.$FR.' &nbsp; &nbsp; X MIN</td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:187px;" > <b>FC: &nbsp; &nbsp; </b>'.$FC.' &nbsp; &nbsp; X MIN</td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:187px;" > <b>TA (DIAST&Oacute;LICA): &nbsp; &nbsp;</b>'.$TABLA.' </td> 
                                                        <td class="tabla" style="border-top: 1px solid black; width:186px;" > <b>TA (SIST&Oacute;LICA):  &nbsp; &nbsp;</b>'.$TABLA2.' </td> 
                                                        

                                                    </tr>
                                                </table>
                                                <table class="table table-bordered" style="font-size:10px; margin-top: -2px;">
                                                    <tr style=" color:black;  text-align:center; margin:100px; padding:100px;">
                                                      <td class="tabla" style="border-top: 1px solid black; width:187px;" > <b>TEMP: &nbsp; &nbsp;</b>'.$TEMP.' &nbsp; &nbsp; C</td>
                                                      <td class="tabla" style="border-top: 1px solid black; width:187px;" > <b>PESO: &nbsp; &nbsp;</b>'.$PESO.' &nbsp; &nbsp; Kg</td>
                                                      <td class="tabla" style="border-top: 1px solid black; width:187px;" > <b>TALLA: &nbsp; &nbsp;</b>'.$TALLA.' &nbsp; &nbsp; M</td>
                                                      <td class="tabla" style="border-top: 1px solid black; width:186px;" > <b>IMC: &nbsp; &nbsp;</b>'.$IMC.' </td> 
                                                    </tr>
                                                </table>                                           



                                                <table class="table1" style="margin-top: -2px; font-size:10px; " >
                                                    <tr> 
                                                      <td style=" width:780px; text-align:center; vertical-align:text-top; font-size:10px;" class="td2" >

                                                             <b>RESULTADOS DE LABORATORIO</b>                                                      

                                                      </td>
                                                    </tr>
                                                </table>      ';



if($val18==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:780px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>QU&Iacute;MICA SANGU&Iacute;NEA:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>GLUCOSA:</b>  &nbsp; &nbsp;    '.$SANGUINEA1.'                                                       

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>UREA:</b>   &nbsp; &nbsp;    '.$SANGUINEA2.'                                                      

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>BUN:</b>   &nbsp; &nbsp;    '.$SANGUINEA3.'                                                      

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>CREATININA:</b>   &nbsp; &nbsp;    '.$SANGUINEA4.'                                                      

                            </td>
                            <td style=" width:148px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>&Aacute;CIDO &Uacute;RICO:</b>      &nbsp; &nbsp;    '.$SANGUINEA5.'                                                   

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>COLESTEROL:</b>  &nbsp; &nbsp;    '.$SANGUINEA6.'                                                       

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>TRIGLIC&Eacute;RIDOS:</b>   &nbsp; &nbsp;    '.$SANGUINEA7.'                                                      

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>ALB&Uacute;MINA:</b>   &nbsp; &nbsp;    '.$SANGUINEA8.'                                                      

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>GLOBULINA:</b>   &nbsp; &nbsp;    '.$SANGUINEA9.'                                                      

                            </td>
                            <td style=" width:148px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>BT:</b>      &nbsp; &nbsp;    '.$SANGUINEA10.'                                                   

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>BD:</b>  &nbsp; &nbsp;    '.$SANGUINEA11.'                                                       

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>BI:</b>   &nbsp; &nbsp;    '.$SANGUINEA12.'                                                      

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>TGO:</b>   &nbsp; &nbsp;    '.$SANGUINEA13.'                                                      

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>TGP:</b>   &nbsp; &nbsp;    '.$SANGUINEA14.'                                                      

                            </td>
                            <td style=" width:148px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>FA:</b>      &nbsp; &nbsp;    '.$SANGUINEA15.'                                                   

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>GGT:</b>  &nbsp; &nbsp;    '.$SANGUINEA16.'                                                       

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>NA:</b>   &nbsp; &nbsp;    '.$SANGUINEA17.'                                                      

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>K:</b>   &nbsp; &nbsp;    '.$SANGUINEA18.'                                                      

                            </td>
                            <td style=" width:147px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>CL:</b>   &nbsp; &nbsp;    '.$SANGUINEA19.'                                                      

                            </td>
                            <td style=" width:148px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                                                                 

                            </td>
                          </tr>
            </table>  


                           ';

}



if($val19==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:780px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>BIOMETR&Iacute;A HEM&Aacute;TICA:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>LEU:</b>  &nbsp; &nbsp;    '.$HEMATICA1.'                                                       

                            </td>
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>ERI:</b>   &nbsp; &nbsp;    '.$HEMATICA2.'                                                      

                            </td>
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>HG:</b>   &nbsp; &nbsp;    '.$HEMATICA3.'                                                      

                            </td>
                            <td style=" width:186px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>HTO:</b>   &nbsp; &nbsp;    '.$HEMATICA4.'                                                      

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>PLQ:</b>  &nbsp; &nbsp;    '.$HEMATICA5.'                                                       

                            </td>
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>NEUTR&Oacute;FILOS:</b>   &nbsp; &nbsp;    '.$HEMATICA6.'                                                      

                            </td>
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>LINFOCITOS:</b>   &nbsp; &nbsp;    '.$HEMATICA7.'                                                      

                            </td>
                            <td style=" width:186px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>MONOCITOS:</b>   &nbsp; &nbsp;    '.$HEMATICA8.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}


if($val20==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:780px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>TP:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:253px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>% ACTIVIDAD:</b>  &nbsp; &nbsp;    '.$TP1.'                                                       

                            </td>
                            <td style=" width:253px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>INR:</b>   &nbsp; &nbsp;    '.$TP2.'                                                      

                            </td>
                            <td style=" width:252px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>TTP:</b>   &nbsp; &nbsp;    '.$TP3.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}


if($val21==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:780px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>EGO:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>COLOR:</b>  &nbsp; &nbsp;    '.$EGO1.'                                                       

                            </td>
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>DENSIDAD:</b>   &nbsp; &nbsp;    '.$EGO2.'                                                      

                            </td>
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>PH:</b>   &nbsp; &nbsp;    '.$EGO3.'                                                      

                            </td>
                            <td style=" width:186px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>LEU:</b>   &nbsp; &nbsp;    '.$EGO4.'                                                      

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>GLUC:</b>  &nbsp; &nbsp;    '.$EGO5.'                                                       

                            </td>
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>CETONAS:</b>   &nbsp; &nbsp;    '.$EGO6.'                                                      

                            </td>
                            <td style=" width:187px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>HG:</b>   &nbsp; &nbsp;    '.$EGO7.'                                                      

                            </td>
                            <td style=" width:186px; text-align:left; vertical-align:text-top; font-size:10x;" class="td2" >

                                                                                 

                            </td>
                          </tr>
            </table>  


                           ';
}


if($val20==1){


         $html=$html.'

           <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:780px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>PERFIL TIROIDEO:</b>                                                      

                            </td>
                          </tr>
            </table> 


            <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:253px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>T3:</b>  &nbsp; &nbsp;    '.$TIROIDEO1.'                                                       

                            </td>
                            <td style=" width:253px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>T4:</b>   &nbsp; &nbsp;    '.$TIROIDEO2.'                                                      

                            </td>
                            <td style=" width:252px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>T4 LIBRE:</b>   &nbsp; &nbsp;    '.$TIROIDEO3.'                                                      

                            </td>
                          </tr>
                          <tr> 
                            <td style=" width:253px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>TSH:</b>  &nbsp; &nbsp;    '.$TIROIDEO4.'                                                       

                            </td>
                            <td style=" width:253px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>T7:</b>   &nbsp; &nbsp;    '.$TIROIDEO5.'                                                      

                            </td>
                            <td style=" width:252px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>IODO:</b>   &nbsp; &nbsp;    '.$TIROIDEO6.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}



                                              



                                 $html=$html.' 


                                                <table class="table1" style="margin-top: -2px; font-size:10px; " >
                                                    <tr> 
                                                      <td style=" width:780px; text-align:center; vertical-align:text-top; font-size:10px;" class="td2" >

                                                             <b>RESULTADOS DE GABINETE</b>                                                      

                                                      </td>
                                                    </tr>                                                                                                                                     

                                                </table>';



  if($val20==1){


         $html=$html.'


            <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:250px; text-align:center; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>RADIOGRAF&Iacute;A:</b>                                                     

                            </td>
                            <td style=" width:519px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                     '.$GABINETE2.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}   

  if($val21==1){


         $html=$html.'


            <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:250px; text-align:center; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>TOMOGRAF&Iacute;A:</b>                                                     

                            </td>
                            <td style=" width:519px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                     '.$GABINETE5.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}  

  if($val22==1){


         $html=$html.'


            <table class="table1" style="margin-top: -2px; font-size:10px; " >
                           <tr> 
                            <td style=" width:250px; text-align:center; vertical-align:text-top; font-size:10px;" class="td2" >

                                   <b>ELECTROCARDIOGRAMA:</b>                                                     

                            </td>
                            <td style=" width:519px; text-align:left; vertical-align:text-top; font-size:10px;" class="td2" >

                                     '.$GABINETE8.'                                                      

                            </td>
                          </tr>
            </table>  


                           ';
}     







                            $html=$html.'


                                                <table class="table1" style="margin-top: -2px; font-size: 10px; " >
                                                    <tr> 
                                                      <td style=" width:780px; height:30px;  text-align:left; text-align:left; vertical-align:text-top;" class="td2" >

                                                             <b>DIAGN&Oacute;STICOS:</b> &nbsp; &nbsp;    '.$val12.'                                                         

                                                      </td>
                                                    </tr>   
                                                    <tr> 
                                                      <td style=" width:780px; text-align:left; text-align:left; vertical-align:text-top;" class="td2" >

                                                             <b>PRON&Oacute;STICO:</b> &nbsp; &nbsp;    '.$val11.'                                                         

                                                      </td>
                                                    </tr>   
                                                    <tr> 
                                                      <td style=" width:780px; height:30px;  text-align:left; text-align:left; vertical-align:text-top;" class="td2" >

                                                             <b>TRATAMIENTO E INDICACIONES:</b> &nbsp; &nbsp;    '.$val9.'                                                         

                                                      </td>
                                                    </tr>   
                                                </table>


                                                <table class="table1" style="margin-top: -2px; font-size:10px; " >
                                                    <tr> 
                                                      <td style=" width:780px; text-align:center; vertical-align:text-top; font-size:10px;" class="td2" >

                                                             <b>MEDICAMENTOS</b> 
                                                      </td>
                                                    </tr>';



for ($i=0; $i < $cuenta; $i++) { 

                

                $html=$html.'  <tr> 
                                  <td style=" width:780px; text-align:center; vertical-align:text-top; font-size:10px;" class="td2" >

                                         '.$medicamento[$i].' 
                                  </td>
                                </tr>';



}



                     $html=$html.'               </table>




                                   <div id="texto_firma" style="float:left;  position: absolute; bottom: 75;">   

                                                <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:100%; ">

                                                        <B>____________________________________________</B>
                                                        

                                                </div>

                                                <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:95%; margin-left:15px; font-size:12px;">

                                                        <b>'.$val14.' </b>
                                                        

                                                </div>

                                    </div>       


                                    <div  style="text-align: center; font-family: Georgia; font-style: italic;  z-index: 1;  width:50%;">

                                            
                                        <img id="firma2" src="firmas/'.$val14.'_firmaMedico.png">

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


