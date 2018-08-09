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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
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


          <script>
          $( function() {
            
            $( "#fecha_con_lab" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });

          });

        </script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.61.0-2013.06.06/jquery.blockUI.min.js"></script>


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
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px; text-align: left;">RESULTADOS DE LABORATORIO: </h1>
                                    </div>
                                </div>

                                </br>
                                
<input type="text" class="form-control" id="id_laboratorio" style="display: none;">

                                            <div class="form-group campos">

                                                 <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">FECHA: </label></br>
                                                      <input type="text" class="form-control" id="fecha_con_lab">

                                                 </div>



                                                 <div class="col-xs-12 col-md-8">                                                

                                                        <label for="estudios_diagnostico">DIAGN&Oacute;STICOS: </label>
                                                        <!--<input type="text" class="form-control diagnosticos" id="estudios_diagnostico" onblur="this.value=this.value.toUpperCase();" >   -->
                                                        <select id="estudios_lab" class="form-control " onchange="laboratorio()" >
                                                            <option value="1">QU&Iacute;MICA SANGU&Iacute;NEA</option>
                                                            <option value="2">BIOMETR&Iacute;A HEM&Aacute;TICA</option>
                                                            <option value="3">TP</option>
                                                            <option value="4">EGO</option>
                                                            <option value="5">PERFIL TIROIDEO</option>
                                                        </select>
                                                        <!--<label for="contacto">RESULTADOS: </label></br>
                                                        <input type="text" class="form-control" id="recomendado2" value="" disabled onKeyUp="this.value=this.value.toUpperCase();">-->
                                                        <!--<textarea rows="5" id="resultados_diagnostico"  onKeyUp="this.value=this.value.toUpperCase();" type="text" class="form-control"></textarea>-->
                                                  </div>
                                                
                                            </div>

                                            </br></br></br></br>

                                            <div class="form-group sanguinea_grupo">

                                                  <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">GLUCOSA: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea1">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">UREA: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea2">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">BUN: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea3">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">CREATININA: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea4">

                                                 </div>

                                                 </br></br></br></br>

                                                 <!--*************************************************************** -->

                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">&Aacute;CIDO &Uacute;RICO: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea5">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">COLESTEROL: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea6">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">TRIGLIC&Eacute;RIDOS: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea7">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">ALB&Uacute;MINA: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea8">

                                                 </div>

                                                 </br></br></br></br>

                                                  <!--*************************************************************** -->

                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">GLOBULINA: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea9">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">BT: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea10">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">BD: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea11">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">BI: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea12">

                                                 </div>

                                                 </br></br></br></br>


                                                   <!--*************************************************************** -->

                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">TGO: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea13">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">TGP: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea14">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">FA: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea15">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">GGT: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea16">

                                                 </div>

                                                 </br></br></br></br>

                                                  <!--*************************************************************** -->

                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">NA: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea17">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">K: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea18">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">CL: </label></br>
                                                      <input type="text" class="form-control" id="sanguinea19">

                                                 </div>
                                              

                                            </div>


                                            <div class="form-group hematica_grupo" style="display: none;">

                                                  <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">LEU: </label></br>
                                                      <input type="text" class="form-control" id="hematica1">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">ERI: </label></br>
                                                      <input type="text" class="form-control" id="hematica2">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">HG: </label></br>
                                                      <input type="text" class="form-control" id="hematica3">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">HTO: </label></br>
                                                      <input type="text" class="form-control" id="hematica4">

                                                 </div>

                                                 </br></br></br></br>

                                                 <!--*************************************************************** -->

                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">PLQ: </label></br>
                                                      <input type="text" class="form-control" id="hematica5">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">NEUTR&Oacute;FILOS: </label></br>
                                                      <input type="text" class="form-control" id="hematica6">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">LINFOCITOS: </label></br>
                                                      <input type="text" class="form-control" id="hematica7">

                                                 </div>

                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">MONOCITOS: </label></br>
                                                      <input type="text" class="form-control" id="hematica8">

                                                 </div>
                                              

                                            </div>



                                            <div class="form-group tp_grupo" style="display: none;">

                                                  <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">% ACTIVIDAD: </label></br>
                                                      <input type="text" class="form-control" id="tp1">

                                                 </div>


                                                 <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">INR: </label></br>
                                                      <input type="text" class="form-control" id="tp2">

                                                 </div>


                                                 <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">TTP: </label></br>
                                                      <input type="text" class="form-control" id="tp3">

                                                 </div>
                                              

                                            </div>



                                            <div class="form-group ego_grupo" style="display: none;">

                                                  <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">COLOR: </label></br>
                                                      <input type="text" class="form-control" id="ego1">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">DENSIDAD: </label></br>
                                                      <input type="text" class="form-control" id="ego2">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">PH: </label></br>
                                                      <input type="text" class="form-control" id="ego3">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">LEU: </label></br>
                                                      <input type="text" class="form-control" id="ego4">

                                                 </div>

                                                 </br></br></br></br>

                                                 <!--*************************************************************** -->

                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">GLUC: </label></br>
                                                      <input type="text" class="form-control" id="ego5">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">CETONAS: </label></br>
                                                      <input type="text" class="form-control" id="ego6">

                                                 </div>


                                                 <div class="col-xs-12 col-md-3">

                                                      <label for="contacto">HG: </label></br>
                                                      <input type="text" class="form-control" id="ego7">

                                                 </div>
                                              

                                            </div>



                                            <div class="form-group tiroideo_grupo" style="display: none;">

                                                  <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">T3: </label></br>
                                                      <input type="text" class="form-control" id="tiroideo1">

                                                 </div>


                                                 <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">T4: </label></br>
                                                      <input type="text" class="form-control" id="tiroideo2">

                                                 </div>


                                                 <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">T4 LIBRE: </label></br>
                                                      <input type="text" class="form-control" id="tiroideo3">

                                                 </div>

                                                 </br></br></br></br>

                                                 <!--*************************************************************** -->

                                                 <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">TSH: </label></br>
                                                      <input type="text" class="form-control" id="tiroideo4">

                                                 </div>


                                                 <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">T7: </label></br>
                                                      <input type="text" class="form-control" id="tiroideo5">

                                                 </div>


                                                 <div class="col-xs-12 col-md-4">

                                                      <label for="contacto">IODO: </label></br>
                                                      <input type="text" class="form-control" id="tiroideo6">

                                                 </div>
                                              

                                            </div>


                                            </br></br></br></br>

                                            <div class="col-xs-12 col-md-3 pull-right" style="padding-top: 20PX;">
                                                <button class="btn btn-primary btn-block" onclick="guardarLAB()">
                                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                    &nbsp;Guardar
                                                </button>
                                            </div>


                                             <div class="row">
                                                <div id="agenda_results" class="col-xs-12 table-responsive" style="padding-top: 20PX;">

                                                    <table class="table table-hover table-condensed table-responsive table-bordered table-scroll" >
                                                                    <thead>
                                                                        <tr id="titulo_laboratorios">
                                                                            <!--<th style="vertical-align: middle;">FECHA</th>
                                                                            <th style="vertical-align: middle;">DIAGN&Oacute;STICOS</th>
                                                                            <th style="vertical-align: middle;">ACCIONES</th>-->
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="data_laboratorios"></tbody>
                                                    </table>
                                                </div>
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
    <script type="text/javascript" src="js/funcion_sis_pac.js"></script>
    <script type="text/javascript" src="js/funcion_pacientes.js"></script>
    <script type="text/javascript" src="js/funcion_laboratorios.js"></script>

</body>
</html>