<?php include 'sesion.php'; ?>
<?php include 'busq_pac.php'; ?>

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

    <link href="css/estilo_sist.css" rel="stylesheet" type="text/css">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--font awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


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
                                
                                    <i id="nombre"> <?php echo $x; ?>  </i>  
                                                
                                </h1>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">MODULO PACIENTES</h3>
                                    </div>
                                    <div class="panel-body">

                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="method">Tipo de b&uacute;squeda: </label>
                                                            <select id="method" class="form-control">
                                                                <option value="0" disabled="" selected="">Seleciona una opci&oacute;n</option>
                                                                <option value="1">Folio</option>
                                                                <option value="2" selected>Nombre</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="query">B&uacute;squeda: </label>
                                                            <input type="search" id="query" class="form-control" placeholder="Escribe algo..." onKeyUp="this.value=this.value.toUpperCase();">
                                                        </div>
                                                    </div>
                                                </div>

                                                  <div class="row">
                                                    <div id="agenda_results" class="col-xs-12 table-responsive">

                                                        <table class="table table-hover table-condensed table-responsive table-bordered table-scroll">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>FOLIO</th>
                                                                                <th>NOMBRE</th>
                                                                                <th>APELLIDO PATERNO</th>
                                                                                <th>APELLIDO MATERNO</th>
                                                                                <th>TELEFONO</th>
                                                                                <th>CELULAR</th>
                                                                                <th>E-MAIL</th>
                                                                                <th>ACCIONES</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="data_inv"></tbody>


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



            <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; text-align: center; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style="color: #fff;">VALIDACIÓN DE CONTRASEÑA</h4>
                        </div>
                        <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-5" style="text-align: center;">
                                                      <div class="form-group">
                                                            <label for="exp">INGRESE CONTRASEÑA: </label>
                                                      </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-5" >
                                                        <div class="form-group">                                               
                                                          <input type="password" class="form-control" id="clave_pass">                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-2" >
                                                        <div class="form-group">                                               
                                                            <button type="submit" class="btn btn-primary btn-block" onclick="validarContra()">
                                                                Validar
                                                            </button>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="text" id="index" disabled style="visibility:hidden; width: 5px;">
                        </div>
                      </div>
                      
                    </div>
                  </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funcion_busq_pac.js"></script>
    <script type="text/javascript" src="js/funcion_pacientes.js"></script>

</body>
</html>