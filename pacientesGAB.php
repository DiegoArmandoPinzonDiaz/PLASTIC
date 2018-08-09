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
            
            $( "#fecha_con_gabinete" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });

          } );
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
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px; text-align: center;">RESULTADOS DE GABINETE: </h1>
                                    </div>
                                </div>
                                
<input type="text" class="form-control" id="id_gabinete" style="display: none;">

                                            <div class="form-group">

                                                <label for="contacto">FECHA: </label></br>
                                                <input type="text" class="form-control" id="fecha_con_gabinete"></br>

                                                <label for="estudios_gabinete">ESTUDIOS: </label>
                                                <select id="estudios_gabinete" class="form-control">
                                                    <option value="1">RADIOGRAF&Iacute;A</option><option value="2">TOMOGRAF&Iacute;A</option><option value="3">ELECTROCARDIOGRAMA</option>
                                                </select></br>
                                                <label for="contacto">RESULTADOS: </label></br>
                                                <!--<input type="text" class="form-control" id="recomendado2" value="" disabled onKeyUp="this.value=this.value.toUpperCase();">-->
                                                <textarea rows="5" id="resultados_gabinete"  onKeyUp="this.value=this.value.toUpperCase();" type="text" class="form-control"></textarea>
                                                
                                            </div>


                                            <div class="col-xs-12 col-md-3 pull-right" style="padding-top: 20PX;">
                                                <button class="btn btn-primary btn-block" onclick="guardarGAB()">
                                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                    &nbsp;Guardar
                                                </button>
                                            </div>




                                             <div class="row">
                                                <div id="agenda_results" class="col-xs-12 table-responsive" style="padding-top: 20PX;">

                                                    <table class="table table-hover table-condensed table-responsive table-bordered table-scroll" >
                                                                    <thead>
                                                                        <tr id="titulo_estudios">
                                                                            <th style="vertical-align: middle;">FECHA</th>
                                                                            <th style="vertical-align: middle;">ESTUDIOS</th>
                                                                            <th style="vertical-align: middle;">RESULTADOS</th>
                                                                            <th style="vertical-align: middle;">ACCIONES</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="data_estudios"></tbody>
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

</body>
</html>