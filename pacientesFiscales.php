<?php include 'sesion.php'; ?>



<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLASTIC & BEAUTY</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_nav.css" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


    <link href="css/estilo_sist.css" rel="stylesheet" type="text/css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--font awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
      <script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>


</head>
<body>
   
            <div id="wrapper">
                
                <?php include 'nav.php'; ?>

<!-- Navigation -->
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    &iexcl;Bienvenido!,      <i id="nombre"> <?php echo $x; ?>  </i>  
                                                
                                </h1>
                            </div>
                        </div>
                        <div class="row"><?php include 'nav3.php'; ?></div></br>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">HISTORIA CLINICA </h3>
                                    </div>
                                    <div class="panel-body">


                                        <?php include 'nav2.php'; ?>

                                </br>
                                    

                                    <div class="row">
                                         <div class="panel-heading">
                                            <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">DATOS FISCALES: </h1>
                                        </div>
                                    </div>
                             

                                        <div class="col-xs-12 col-md-6">

                                            <div class="form-group">
                                                <label for="rfc">RFC: </label>
                                                <input type="text" class="form-control" id="rfc" placeholder="RFC" onKeyUp="this.value=this.value.toUpperCase();" onblur="validarRFC()">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="razonS">RAZ&Oacute;N SOCIAL: </label>
                                                <input type="text" class="form-control" id="razonS" placeholder="Raz&oacute; Social" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                            <div class="form-group">
                                                <label for="tipoP">TIPO DE PERSONA: </label>

                                                <select id="tipoP" class="form-control" style="text-transform: uppercase;" onchange="municipios()">

                                                    <option value="1">PERSONA F&Iacute;SICA</option><option value="2">PERSONA MORAL</option>

                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label for="domicilioF">DOMICILIO: </label>
                                                <input type="text" class="form-control" id="domicilioF" placeholder="Domicilio" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>    

                                            <div class="form-group">
                                                <label for="coloniaF">COLONIA: </label>
                                                <input type="text" class="form-control" id="coloniaF" placeholder="Colonia" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>                                                                                   
                                                    
                                        </div>


                                        <div class="col-xs-12 col-md-6">

                                            <div class="form-group">
                                                <label for="estadoF">ESTADO: </label>

                                                <select id="estadoF" class="form-control" style="text-transform: uppercase;" onchange="municipios()">

                                                    <option value="1">﻿Aguascalientes</option><option value="2">Baja California</option><option value="3">Baja California Sur</option><option value="4">Campeche</option><option value="5">Coahuila de Zaragoza</option><option value="6">Colima</option><option value="7">Chiapas</option><option value="8">Chihuahua</option><option value="9">Ciudad de M&eacute;xico</option><option value="10">Durango</option><option value="11">Guanajuato</option><option value="12">Guerrero</option><option value="13">Hidalgo</option><option value="14">Jalisco</option><option value="15">M&eacute;xico</option><option value="16">Michoac&aacute;n de Ocampo</option><option value="17">Morelos</option><option value="18">Nayarit</option><option value="19">Nuevo Le&oacute;n</option><option value="20">Oaxaca</option><option value="21">Puebla</option><option value="22">Quer&eacute;taro</option><option value="23">Quintana Roo</option><option value="24">San Luis Potos&iacute;</option><option value="25">Sinaloa</option><option value="26">Sonora</option><option value="27">Tabasco</option><option value="28">Tamaulipas</option><option value="29">Tlaxcala</option><option value="30">Veracruz de Ignacio de la Llave</option><option value="31">Yucat&aacute;n</option><option value="32">Zacatecas</option> 
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label for="municipioF">MUNICIPIO: </label>
                                                <select id="municipioF" class="form-control" style="text-transform: uppercase;" >


                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="codigoP">CODIGO POSTAL: </label>
                                                <input type="text" class="form-control" id="codigoP" placeholder="Codigo Postal" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                            <div class="form-group">
                                                <label for="e_mailF">CORREO PARA ENVIAR FACTURA: </label>
                                                <input id="e_mailF" type="text" class="form-control" placeholder="E mail" value="" onblur="validarCorreo2()">
                                            </div>                                            
                                          
                                        </div>



                                        <div class="col-xs-12 col-md-3 pull-right">
                                            <button  class="btn btn-primary btn-block" onclick="guardarFisPac()">
                                                <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                &nbsp;Guardar
                                            </button>
                                        </div>                                                                        
                             
                             

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->


            </div>



    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funcion_sis.js"></script>
    <script type="text/javascript" src="js/funcion_pacientes.js"></script>

</body>
</html>