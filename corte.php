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


      <script>
          $( function() {
            
            $( "#fecha_alert" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_ini" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_fin" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });            

          } );
      </script>

      <style type="text/css">
        
              a.export,
              a.export:visited {
                display: inline-block;
                text-decoration: none;
                color: #000;
                background-color: #ddd;
                border: 1px solid #ccc;
                padding: 8px;
              }

      </style>


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
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">M&Oacute;DULO DE CORTE </h3>

                                        
                                    </div>
                                    <div class="panel-body">

                                      <div class="col-xs-12 col-md-3 pull-right" style="padding-top: 20PX; padding-bottom: 20px;">
                                            <button class="btn btn-primary btn-block" id="export">
                                                <span class="glyphicon glyphicon-save-file" aria-hidden="true"></span>
                                                &nbsp;EXPORTAR
                                            </button>
                                        </div>

                                                              
                                 

                                  <h3 style="color: #337ab7; ">FILTROS CORTES </h3></br>

                                  <div class="col-xs-12 col-md-1" id="textEF_titulos">
                                    <label for="producto_alert">FECHA INICIO: </label>
                                    <input type="text" class="form-control" id="fecha_ini">
                                  </div>

                                  <div class="col-xs-12 col-md-1" id="textEF_titulos">
                                    <label for="producto_alert">FECHA FIN: </label>
                                    <input type="text" class="form-control" id="fecha_fin">
                                  </div>

                                  <div id="procedimiento" class="col-xs-12 col-md-2" >
                                      <label for="procedimiento" id="textEF_titulos">PROCEDIMIENTO: </label>
                                      <select id="selec_producto" class="seleccion form-control" style="text-align: center;">
                                      <option selected value> TODOS </option>
                                      <option>PROCEDIMIENTO_CIRUGIA</option>
                                      <option>MEDICINA_ESTETICA</option>
                                      <option>TRATAMIENTO_SPA</option>
                                      <option>PRODUCTOS</option>                                      
                                      </select>                                        
                                  </div>

                                  <div id="tarjeta" class="col-xs-12 col-md-2" >
                                      <label for="tarjeta" id="textEF_titulos">M&Eacute;TODO DE PAGO: </label>
                                      <select id="selec_tarjeta" class="seleccion form-control" style="text-align: center;">
                                      <option selected value> TODOS </option>
                                      <!--<option>SI</option>
                                      <option>NO</option>-->
                                      <option>EFECTIVO</option>
                                      <option>TRANSFERENCIA</option>
                                      <option>TARJETA</option>
                                      </select>                                        
                                  </div>

                                  <div id="factura" class="col-xs-12 col-md-2" >
                                      <label for="factura" id="textEF_titulos">FACTURACI&Oacute;N: </label>
                                      <select id="selec_factura" class="seleccion form-control" style="text-align: center;">
                                      <option selected value> TODOS </option>
                                      <option>SI</option>
                                      <option>NO</option>
                                      </select>                                        
                                  </div>

                                  <div id="sucursal1" class="col-xs-12 col-md-2" >
                                      <label for="factura" id="textEF_titulos">SUCURSAL: </label>
                                      <select id="selec_sucursal" class="seleccion form-control" style="text-align: center;">
                                      <option selected value> TODOS </option>
                                      <option>ROMA SUR</option>
                                      <option>HOSPITAL METROPOLITANO</option>
                                      </select>                                        
                                  </div>

                                  <div class="col-xs-12 col-md-2" id="textEF_titulos">
                                    <label for="producto_alert">TOTAL GLOBAL: </label>
                                    <input type="text" class="form-control" id="totalG">
                                  </div>

                                  <div class="col-xs-12 col-md-3 pull-right" style="padding-top: 20PX; padding-bottom: 20px;">
                                        <button class="btn btn-primary btn-block" onclick="buscarCorte()">
                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                            &nbsp;BUSCAR
                                        </button>
                                    </div>


                                  </br></br>

                                  



  

                                    <div class="row">
                                        <div id="corte_resultados" class="col-xs-12 table-responsive" style="padding-top: 5PX;">

                                            <table class="table table-hover table-condensed table-responsive table-bordered table-scroll dataTable" >
                                                            <thead>
                                                                <tr id="titulo_consultas_corte"> 
                                                                    <th style="vertical-align: middle;">FOLIO</th>
                                                                    <th style="vertical-align: middle;">FECHA</th>                                                                   
                                                                    
                                                                    <th style="vertical-align: middle;">NOMBRE COMPLETO</th>
                                                                    <th style="vertical-align: middle;">C&Eacute;LULAR</th>
                                                                    <th style="vertical-align: middle;">PROCEDIMIENTO</th>  
                                                                    <th style="vertical-align: middle;">MOTIVO</th>                                                                   
                                                                    <th style="vertical-align: middle;">DESCRIPCI&Oacute;N</th>
                                                                    
                                                                    <th style="vertical-align: middle;">EFECTIVO</th>
                                                                    <th style="vertical-align: middle;">TRANSFERENCIA</th>
                                                                    <th style="vertical-align: middle;">TARJETA</th>
                                                                    <th style="vertical-align: middle;">FACTURACI&Oacute;N</th> 
                                                                    <th style="vertical-align: middle;">COMISI&Oacute;N</th> 

                                                                    <th style="vertical-align: middle;">SUCURSAL</th>  

                                                                    <th style="vertical-align: middle;">TOTAL</th>
                                                                    <th style="vertical-align: middle;">ACCIONES</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="data_consultas_corte"></tbody>
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
                  <div class="modal fade" id="myModal" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">EDITAR CONSULTA TARJETA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                
                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" id="fecha_corte" disabled class="form-control" >
                                                    
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

                                                          <select id="selec_estado_tarjeta" class="form-control" style="text-align: center;">
                                                          <option>PENDIENTE</option>
                                                          <option>COMPLETO</option>
                                                          </select> 
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <label>DESCRIPCIÓN:</label>
                                                        <textarea class="form-control" id="desc_alert" rows="4" disabled></textarea>

                                                </div>

                                                <input type="text" id="id" disabled class="form-control" disabled style="visibility:hidden; width: 5px;">

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="guardar_corte()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;GUARDAR
                                                        </button>

                                                </div>                                                

                                                

                        </div>
                      </div>
                      
                    </div>
                  </div>





    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/funcion_corte.js"></script>

</body>
</html>
