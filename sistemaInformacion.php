
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

    <script>

          $( function() {
            
            $( "#fecha_alerta" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });  

            var usuario = "<?php echo $x; ?>";

            if( usuario == "ADMINISTRADOR"){ $("#boton_msn").css('visibility','visible'); }          

          });
          

      </script>



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
                                    ¡Bienvenido!,      <i id="nombre"> <?php echo $x; ?>  </i>  
                                                
                                </h1>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">SISTEMA DE INFORMACION </h3>
                                    </div>
                                    <div class="panel-body">
                                            <div>

                                                    <button class="btn btn-primary btn-block navbar-right" id="boton_msn" onclick="modal_mensaje()" style="width: 4%; margin-right: 1%; visibility:hidden;">
                                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>                                                    
                                                    </button>
                                                
                                            </div>
                                            <div class="alert alert-default text-center">
                                                <strong>OK!</strong> Bienvenido al sistema de información de Plastic & Beauty.
                                            </div>
                                            <div id="mensajes">
                                                
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->


                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">SISTEMA DE ALERTAS DE PACIENTES </h3>
                                    </div>
                                    <div class="panel-body">
                                            <div class="alert alert-default text-center">
                                                 Bienvenido al sistema de alertas de pacientes de Plastic & Beauty.
                                            </div>

                                            <table class="table table-hover table-condensed table-responsive table-bordered table-scroll" >
                                                            <thead>
                                                                <tr id="titulo_consultas">                                                                    
                                                                    <th style="vertical-align: middle;">FOLIO</th>
                                                                    <th style="vertical-align: middle;">NOMBRE COMPLETO</th>                                                                    
                                                                    <th style="vertical-align: middle;">TELÉFONO</th>
                                                                    <th style="vertical-align: middle;">CÉLULAR</th>
                                                                    <th style="vertical-align: middle;">E-MAIL</th>
                                                                    <th style="vertical-align: middle;">FECHA</th>
                                                                    <th style="vertical-align: middle;">INVENTARIO</th>
                                                                    <th style="vertical-align: middle;">MOTIVO</th>
                                                                    <th style="vertical-align: middle;">DESCRIPCIÓN</th>
                                                                    <th style="vertical-align: middle;">ESTADO</th>  
                                                                    <th style="vertical-align: middle;">ACCIONES</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="data_consultas"></tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->


                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">SISTEMA DE ALERTAS CUMPLEAÑEROS </h3>
                                    </div>
                                    <div class="panel-body">
                                            <div class="alert alert-default text-center">
                                                Bienvenido al sistema de alertas de cumpleañeros de Plastic & Beauty.
                                            </div>

                                            <table class="table table-hover table-condensed table-responsive table-bordered table-scroll" >
                                                            <thead>
                                                                <tr id="titulo_consultas2">                                                                    
                                                                    <th style="vertical-align: middle;">FOLIO</th>
                                                                    <th style="vertical-align: middle;">NOMBRE COMPLETO</th>                                                                    
                                                                    <th style="vertical-align: middle;">TELÉFONO</th>
                                                                    <th style="vertical-align: middle;">CÉLULAR</th>
                                                                    <th style="vertical-align: middle;">E-MAIL</th>
                                                                    <th style="vertical-align: middle;">FECHA</th>
                                                                    <th style="vertical-align: middle;">INVENTARIO</th>
                                                                    <th style="vertical-align: middle;">MOTIVO</th>
                                                                    <th style="vertical-align: middle;">DESCRIPCIÓN</th>
                                                                    <th style="vertical-align: middle;">ESTADO</th>  
                                                                </tr>
                                                            </thead>
                                                            <tbody id="data_consultas2"></tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->



                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">SISTEMA DE ALERTAS STOCK </h3>
                                    </div>
                                    <div class="panel-body">
                                            <div class="alert alert-default text-center">
                                                Bienvenido al sistema de alertas de stock de Plastic & Beauty.
                                            </div>

                                            <table class="table table-hover table-condensed table-responsive table-bordered table-scroll" >
                                                            <thead>
                                                                <tr id="titulo_consultas2">  
                                                                    <th style="vertical-align: middle;">FECHA</th>
                                                                    <th style="vertical-align: middle;">INVENTARIO</th>
                                                                    <th style="vertical-align: middle;">MOTIVO</th>
                                                                    <th style="vertical-align: middle;">STOCK ACTUAL</th>
                                                                    <th style="vertical-align: middle;">STOCK MINIMO</th>
                                                                    <th style="vertical-align: middle;">DESCRIPCIÓN</th>
                                                                    <th style="vertical-align: middle;">ESTADO</th> 
                                                                    <th style="vertical-align: middle;">ACCIONES</th> 
                                                                </tr>
                                                            </thead>
                                                            <tbody id="data_consultas3"></tbody>
                                            </table>
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
                  <div class="modal fade" id="myModal" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">EDITAR ALERTA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                
                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" id="fecha_alerta" class="form-control" >
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>FOLIO:</label>

                                                        <input type="text" id="FOLIO" disabled class="form-control">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>NOMBRE:</label>

                                                        <input type="text" id="NOMBRE" disabled class="form-control">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>INVENTARIO:</label>

                                                        <input type="text" id="inventario" disabled class="form-control">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>MOTIVO:</label>

                                                        <input type="text" id="motivo" disabled class="form-control">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>ESTADO:</label>

                                                          <select id="selec_estado" class="form-control" style="text-align: center;">
                                                          <option>URGENTE</option>
                                                          <option>SEGUIMIENTO</option>
                                                          <option>NO LE INTERESA</option>
                                                          <option>ATENDIDA</option>
                                                          </select> 
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <label>DESCRIPCIÓN:</label>
                                                        <textarea class="form-control" id="desc_alert" rows="4" onKeyUp="this.value=this.value.toUpperCase();"></textarea>

                                                </div>

                                                <input type="text" id="id" disabled class="form-control" disabled style="visibility:hidden; width: 5px;">

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="guardarAlerta_SI()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;GUARDAR
                                                        </button>

                                                </div>                                                

                                                

                        </div>
                      </div>
                      
                    </div>
                  </div>





                  <!-- Modal -->
                  <div class="modal fade" id="myModal2" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">NUEVO MENSAJE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>TITULO:</label>

                                                        <input type="text" id="titulo" class="form-control" onKeyUp="this.value=this.value.toUpperCase();">
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <label>MENSAJE:</label>
                                                        <textarea class="form-control" id="mensaje" rows="4" onKeyUp="this.value=this.value.toUpperCase();"></textarea>

                                                </div>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="guardarMensaje()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;GUARDAR
                                                        </button>

                                                </div>                                              

                        </div>
                      </div>
                      
                    </div>
                  </div>





                  <!-- Modal -->
                  <div class="modal fade" id="myModal3" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">EDITAR ALERTA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                
                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" id="fecha_alerta_stock" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>INVENTARIO:</label>

                                                        <input type="text" id="inventario_stock" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>MOTIVO:</label>

                                                        <input type="text" id="motivo_stock" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>STOCK ACTUAL:</label>

                                                        <input type="number" id="actual_stock" class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>STOCK MÍNIMO:</label>

                                                        <input type="number" id="minimo_stock" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>ESTADO:</label>

                                                          <input type="text" id="estado_stock" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <label>DESCRIPCIÓN:</label>
                                                        <textarea class="form-control" id="desc_alert_stock" rows="4" onKeyUp="this.value=this.value.toUpperCase();"></textarea>

                                                </div>

                                                <input type="text" id="id_stock" disabled class="form-control" disabled style="visibility:hidden; width: 5px;">

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="guardarAlerta_STOCK()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;GUARDAR
                                                        </button>

                                                </div>                                                

                                                

                        </div>
                      </div>
                      
                    </div>
                  </div>




                     <!-- Modal -->
                  <div class="modal fade" id="myModal4" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">EDITAR ALERTA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                
                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" id="fecha_alerta_stock2" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>INVENTARIO:</label>

                                                        <input type="text" id="inventario_stock2" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>MOTIVO:</label>

                                                        <input type="text" id="motivo_stock2" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>STOCK ACTUAL:</label>

                                                        <input type="number" id="actual_stock2" class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>STOCK MÍNIMO:</label>

                                                        <input type="number" id="minimo_stock2" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>ESTADO:</label>

                                                          <input type="text" id="estado_stock2" disabled class="form-control" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <label>DESCRIPCIÓN:</label>
                                                        <textarea class="form-control" id="desc_alert_stock2" rows="4" onKeyUp="this.value=this.value.toUpperCase();"></textarea>

                                                </div>

                                                <input type="text" id="id_stock2" disabled class="form-control" disabled style="visibility:hidden; width: 5px;">

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="guardarAlerta_STOCK2()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;GUARDAR
                                                        </button>

                                                </div>                                                

                                                

                        </div>
                      </div>
                      
                    </div>
                  </div>







    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funcion_sis.js"></script>

</body>
</html>