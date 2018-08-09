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


      <script>
          $( function() {
            
            $( "#fecha_alert" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_ini" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_fin" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });

          } );
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
                                        <h3 class="panel-title">MÓDULO DE ALERTAS </h3>
                                    </div>
                                    <div class="panel-body">

                                         

                                </br>



                                  
                                  <div class="col-xs-12 col-md-2" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">FECHA: </label>                                            
                                      <input type="text" class="form-control" id="fecha_alert">
                                                                        
                                  </div>

                                  <div class="col-xs-12 col-md-1" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">FOLIO: </label>                                            
                                      <input type="text" class="form-control" id="folio_alert" disabled>
                                                                        
                                  </div>

                                  <div id="div_cirugia" class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">NOMBRE COMPLETO: </label>
                                      <input type="text" class="form-control" id="nombre_alert" disabled>                                        
                                  </div>


                                  <div id="div_cirugia" class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">INVENTARIO: </label>
                                      <input type="text" class="form-control" id="inv_alert" disabled>                                        
                                  </div>

                                  <div id="div_cirugia" class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">MOTIVO: </label>
                                      <input type="text" class="form-control" id="mot_alert" disabled>                                        
                                  </div>






                                  <div id="div_cirugia" class="col-xs-12 col-md-2" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">TELÉFONO: </label>
                                      <input type="text" class="form-control" id="tel_alert" disabled>                                        
                                  </div>

                                  <div id="div_cirugia" class="col-xs-12 col-md-2" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">CÉLULAR: </label>
                                      <input type="text" class="form-control" id="cel_alert" disabled>                                        
                                  </div>

                                  <div id="div_cirugia" class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">E-MAIL: </label>
                                      <input type="text" class="form-control" id="email_alert" disabled>                                        
                                  </div>

                                  <div id="div_cirugia" class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">DESCRIPCIÓN: </label>
                                      <textarea class="form-control" id="desc_alert" rows="4" onKeyUp="this.value=this.value.toUpperCase();"></textarea>                                       
                                  </div>

                                  <div id="div_cirugia" class="col-xs-12 col-md-2" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">ESTADO: </label>
                                      <select id="cant_producto" class="seleccion form-control" style="text-align: center;">
                                      <option>URGENTE</option>
                                      <option>SEGUIMIENTO</option>
                                      <option>NO LE INTERESA</option>
                                      <option>ATENDIDA</option>
                                      </select>                                        
                                  </div>

                                  <div id="div_cirugia" class="col-xs-12 col-md-1">  
                                      <input type="text" class="form-control" id="id_alerta" disabled style="visibility:hidden; width: 5px;"> 
                                  </div>


                                    <div class="col-xs-12 col-md-3 pull-right" style="padding-top: 20PX; padding-bottom: 20px;">
                                        <button class="btn btn-primary btn-block" onclick="guardarAlerta()">
                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                            &nbsp;GUARDAR
                                        </button>
                                    </div>


                                  <hr>

                                  <h3 style="color: #337ab7; ">FILTROS ALERTAS </h3></br>

                                  <div class="col-xs-12 col-md-2">
                                    <label for="producto_alert">FECHA INICIO: </label>
                                    <input type="text" class="form-control" id="fecha_ini">
                                  </div>

                                  <div class="col-xs-12 col-md-2">
                                    <label for="producto_alert">FECHA FIN: </label>
                                    <input type="text" class="form-control" id="fecha_fin">
                                  </div>

                                  <div id="div_cirugia" class="col-xs-12 col-md-2" >
                                      <label for="producto_alert">PRODUCTO: </label>
                                      <select id="selec_producto" class="seleccion form-control" style="text-align: center;">
                                      <option>PROCEDIMIENTO_CIRUGIA</option>
                                      <option>MEDICINA_ESTETICA</option>
                                      <option>TRATAMIENTO_SPA</option>
                                      <option>PRODUCTOS</option>
                                      <option>CUMPLEA&Ntilde;OS</option>
                                      </select>                                        
                                  </div>

                                  <div id="div_cirugia" class="col-xs-12 col-md-2" >
                                      <label for="producto_alert">ESTADO: </label>
                                      <select id="selec_estado" class="seleccion form-control" style="text-align: center;">
                                      <option>URGENTE</option>
                                      <option>SEGUIMIENTO</option>
                                      <option>NO LE INTERESA</option>
                                      <option>ATENDIDA</option>
                                      </select>                                        
                                  </div>

                                  <div class="col-xs-12 col-md-3 pull-right" style="padding-top: 20PX; padding-bottom: 20px;">
                                        <button class="btn btn-primary btn-block" onclick="buscarAlerta()">
                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                            &nbsp;BUSCAR
                                        </button>
                                    </div>


                                  </br></br>

                                  



  

                                    <div class="row">
                                        <div id="agenda_results" class="col-xs-12 table-responsive" style="padding-top: 5PX;">

                                            <table class="table table-hover table-condensed table-responsive table-bordered table-scroll" >
                                                            <thead>
                                                                <tr id="titulo_consultas_alerta">                                                                    
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
                                                            <tbody id="data_consultas_alerta"></tbody>
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
    
    <script type="text/javascript" src="js/funcion_alertas.js"></script>

</body>
</html>
