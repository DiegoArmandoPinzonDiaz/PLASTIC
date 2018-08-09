
<?php include 'sesion.php'; ?>
<?php include 'busq_inv.php'; ?>

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
                                        <h3 class="panel-title">MODULO DE INVENTARIO</h3>
                                    </div>
                                    <div class="panel-body">

                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="method">Tipo de b&uacute;squeda: </label>
                                                            <select id="method" class="form-control">
                                                                <option value="0" disabled="" selected="">Seleciona una opci&oacute;n</option>
                                                                <option value="1">Cirug&iacute;as</option>
                                                                <option value="2">Spa</option>
                                                                <option value="3">Medicina Est&eacute;tica</option>
                                                                <option value="4">Productos</option>
                                                                <option value="5">Materiales</option>
                                                                <option value="6">M&eacute;dicos</option>
                                                                <option value="7">Medicamentos</option>
                                                                <option value="8">Cl&iacute;nicas</option>
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
                                                                        <thead id="data_title">
                                                                            <!--<tr>
                                                                                <th>ID</th>
                                                                                <th>NOMBRE</th>
                                                                                <th>PRECIO: (COSTO TOTAL A MESES SIN INTERES)</th>
                                                                                <th>MARCA / TIEMPO (MINUTOS)</th>
                                                                                <th>DURACION (DÍAS)</th>
                                                                                <th>IMAGEN</th>
                                                                                <th>ACCIONES</th>
                                                                            </tr>-->
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


<!--Modales-->
            <div class="modal fade" id="nuevo_pro">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">EDITAR CIRUGIAS</h3>
                        </div>
                        <div class="modal-body">
                           
                                <div class="form-group">
                                    <label for="id_pro">ID: </label>
                                    <input id="id_pro" type="number" class="form-control" min="0" value="" step="1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nombre_pro">Nombre: </label>
                                    <input id="nombre_pro" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="valor_pro">Precio: (Costo Total a meses sin Interes)</label>
                                    <input id="valor_pro" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="valor_pro_efectivo">Precio: (Efectivo)</label>
                                    <input id="valor_pro_efectivo" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="marca_pro">Tiempo del Procedimiento: (Minutos)</label>
                                    <input id="marca_pro" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="duracion_pro">Duraci&oacute;n del Procedimiento: (D&iacute;as)</label>
                                    <input id="duracion_pro" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="duracion_pro">Material:</label>
                                    <button class="btn btn-primary btn-block all-right" onclick="agregar_mat()" >AGREGAR</button> </br>
                                    <table class="table table-hover table-condensed table-responsive table-bordered table-scroll">
                                        <thead id="data_title">
                                            <tr>
                                                <th>CANTIDAD</th>
                                                <th>NOMBRE</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_inv3"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <input name="file_input" id="file-input-pro" type="file" class="btn" accept="image/*"/>
                                       <br />
                                       <img id="imgSalida-pro" width="40%" height="40%" align="middle" src="" />
                                </div>

                                 <div class="form-group">
                                    <label for="riesgos_pro">Riesgos: </label>
                                     <textarea rows="10" id="riesgos_pro" type="text" class="form-control" value="" onblur="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tecnica_pro">T&eacute;cnica Quir&uacute;rgica: </label>
                                    <textarea rows="10" id="tecnica_pro" type="text" class="form-control" value="" onblur="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="indicaciones_pro">Indicaciones: </label>
                                    <textarea rows="10" id="indicaciones_pro" type="text" class="form-control" value="" onblur="this.value=this.value.toUpperCase();"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="valor_pro_opc1">Costo Hospitalizaci&oacute;n Satelite</label>
                                    <input id="valor_pro_opc1" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="valor_pro_opc2">Costo Hospitalizaci&oacute;n Metropolitano</label>
                                    <input id="valor_pro_opc2" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="valor_pro_opc3">Costo Hospitalizaci&oacute;n Interlomas</label>
                                    <input id="valor_pro_opc3" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="incluye_pro">Incluye: </label>
                                    <textarea rows="6" id="incluye_pro" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
                                </div>

                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="actualizar_pro()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                           
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="nuevo_tra">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">EDITAR SPA</h3>
                        </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="id_spa">ID: </label>
                                    <input id="id_spa" type="number" class="form-control" min="0" value="" step="1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nombre_spa">Nombre: </label>
                                    <input id="nombre_spa" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="valor_spa">Precio: (Costo Total a meses sin Interes)</label>
                                    <input id="valor_spa" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                 <div class="form-group">
                                    <label for="valor_spa_efectivo">Precio: (Efectivo)</label>
                                    <input id="valor_spa_efectivo" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="marca_spa">Tiempo del Procedimiento: (Minutos)</label>
                                    <input id="marca_spa" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="duracion_spa">Duraci&oacute;n del Procedimiento: (D&iacute;as)</label>
                                    <input id="duracion_spa" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="duracion_spa">Material:</label>
                                    <button class="btn btn-primary btn-block all-right" onclick="agregar_mat()" >AGREGAR</button> </br>
                                    <table class="table table-hover table-condensed table-responsive table-bordered table-scroll">
                                        <thead id="data_title">
                                            <tr>
                                                <th>CANTIDAD</th>
                                                <th>NOMBRE</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_inv_spa"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <input name="file_input" id="file-input-spa" type="file" class="btn" accept="image/*"/>
                                       <br />
                                       <img id="imgSalida-spa" width="40%" height="40%" align="middle" src="" />
                                </div>

                                 <div class="form-group">
                                    <label for="riesgos_spa">Riesgos: </label>
                                     <textarea rows="10" id="riesgos_spa" type="text" class="form-control" value="" onblur="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tecnica_spa">T&eacute;cnica Quir&uacute;rgica: </label>
                                    <textarea rows="10" id="tecnica_spa" type="text" class="form-control" value="" onblur="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="indicaciones_spa">Indicaciones: </label>
                                    <textarea rows="10" id="indicaciones_spa" type="text" class="form-control" value="" onblur="this.value=this.value.toUpperCase();"></textarea>
                                </div>

                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="actualizar_spa()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="nuevo_med">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">EDITAR MEDICINA ESTETICA</h3>
                        </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="id_med">ID: </label>
                                    <input id="id_med" type="number" class="form-control" min="0" value="" step="1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nombre_med">Nombre: </label>
                                    <input id="nombre_med" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="valor_med">Precio: (Costo Total a meses sin Interes)</label>
                                    <input id="valor_med" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="valor_med_efectivo">Precio: (Efectivo)</label>
                                    <input id="valor_med_efectivo" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="marca_med">Tiempo del Procedimiento: (Minutos)</label>
                                    <input id="marca_med" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="duracion_med">Duraci&oacute;n del Procedimiento: (D&iacute;as)</label>
                                    <input id="duracion_med" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                 <div class="form-group">
                                    <label for="duracion_med">Material:</label>
                                    <button class="btn btn-primary btn-block all-right" onclick="agregar_mat()" >AGREGAR</button> </br>
                                    <table class="table table-hover table-condensed table-responsive table-bordered table-scroll">
                                        <thead id="data_title">
                                            <tr>
                                                <th>CANTIDAD</th>
                                                <th>NOMBRE</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_inv_med"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <input name="file-input" id="file-input-med" type="file" class="btn" accept="image/*"/>
                                       <br />
                                       <img id="imgSalida-med" width="40%" height="40%" align="middle" src="" />
                                </div>

                                <div class="form-group">
                                    <label for="riesgos_med">Riesgos: </label>
                                     <textarea rows="10" id="riesgos_med" type="text" class="form-control" value="" onblur="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tecnica_med">T&eacute;cnica Quir&uacute;rgica: </label>
                                    <textarea rows="10" id="tecnica_med" type="text" class="form-control" value="" onblur="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="indicaciones_med">Indicaciones: </label>
                                    <textarea rows="10" id="indicaciones_med" type="text" class="form-control" value="" onblur="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                               
                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="actualizar_med()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                        
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="nuevo_prod">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">EDITAR PRODUCTO</h3>
                        </div>
                        <div class="modal-body">
                        
                                <div class="form-group">
                                    <label for="id_prod">ID: </label>
                                    <input id="id_prod" type="number" class="form-control" min="0" value="" step="1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nombre_prod">Nombre: </label>
                                    <input id="nombre_prod" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="valor_prod">Precio: (Costo Total a meses sin Interes)</label>
                                    <input id="valor_prod" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="marca_prod">Marca del Producto: </label>
                                    <input id="marca_prod" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="duracion_prod">Duraci&oacute;n del Producto: (D&iacute;as)</label>
                                    <input id="duracion_prod" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="valor_prod">Stock Actual:</label>
                                    <input id="stockActual_prod" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="valor_prod">Stock M&iacute;nimo:</label>
                                    <input id="stockMinimo_prod" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div>
                                    <input name="file-input" id="file-input-prod" type="file" class="btn" accept="image/*"/>
                                       <br />
                                       <img id="imgSalida-prod" width="40%" height="40%" align="middle" src="" />
                                </div>
                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="actualizar_prod()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                           
                        </div>
                    </div>
                </div>
            </div>



        <div class="modal fade" id="nuevo_mat">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">EDITAR MATERIAL</h3>
                        </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="id_mat">ID: </label>
                                    <input id="id_mat" type="number" class="form-control" min="0" value="" step="1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nombre_mat">Nombre: </label>
                                    <input id="nombre_mat" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="marca_mat">Marca del Producto: </label>
                                    <input id="marca_mat" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="duracion_mat">Proveedor: </label>
                                    <input id="duracion_mat" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="stockActual_mat">Stock Actual:</label>
                                    <input id="stockActual_mat" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="stockMinimo_mat">Stock M&iacute;nimo:</label>
                                    <input id="stockMinimo_mat" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="actualizar_mat()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="nuevo_material" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">AGREGAR MATERIAL PROCEDIMIENTO</h3>
                        </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="cantidad_material">Cantidad: </label>
                                    <div class="form-group">
                                      <select id="cant_producto" class="seleccion" style="text-align: center;">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                      <option>8</option>
                                      <option>9</option>
                                      <option>10</option>
                                      </select>   
                                    </div>   
                                </div>
                                <div class="form-group">
                                    <label for="nombre_material">Material:</label>
                                    <div class="form-group ">
                                      <select id="sel_material" class="seleccion"  style="text-align: center;">
                                      </select>   
                                    </div>  
                                </div>

                                <button type="button" class="btn btn-primary btn-block" onclick="agregar_material()">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>

                            </br>

                                <div class="form-group">
                                    <table class="table table-hover table-condensed table-responsive table-bordered table-scroll">
                                        <thead id="data_title">
                                            <tr>
                                                <th>CANTIDAD</th>
                                                <th>NOMBRE</th>
                                                <th>ELIMINAR</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_inv2"></tbody>
                                    </table>
                                </div>

                                </br></br></br>


                                <button id="update_item" type="button" class="btn btn-primary btn-block"  onclick="guardar_datos()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                               
                            
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="nuevo_medico">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">EDITAR M&Eacute;DICOS</h3>
                        </div>
                        <div class="modal-body">
                        
                                <div class="form-group">
                                    <label for="id_medico">ID: </label>
                                    <input id="id_medico" type="number" class="form-control" min="0" value="" step="1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nombre_medico">Nombre: </label>
                                    <input id="nombre_medico" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="cedula_medico">C&eacute;dula: </label>
                                    <input id="cedula_medico" type="number" class="form-control" min="0" value="" step="1" >
                                </div>
                                <div class="form-group">
                                    <label for="telefono_medico">Tel&eacute;fono: </label>
                                    <input id="telefono_medico" type="number" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>                               
                                <div>                                    
                                    <button type="button" class="btn btn_ac1" onclick="firmaMedico()" id="boton_firma_medico" style="width: 200px; margin-left: 30%;" >FIRMAR</button>
                                       <br />
                                       <img id="imgSalida_medico" width="40%" height="40%" align="middle" src="" />
                                </div>
                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="actualizar_medico()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                           
                        </div>
                    </div>
                </div>
            </div>



             <!-- Modal firma_medico -->
                  <div class="modal fade" id="firma_medico" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas20" height="500" width="800"  >
                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn20" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn20" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>




<!--  MODAL NUEVO MEDICAMENTO  -->

            <div class="modal fade" id="nuevo_medicamento">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">EDITAR MEDICAMENTOS</h3>
                        </div>
                        <div class="modal-body">
                        
                                <div class="form-group">
                                    <label for="id_medicamento">ID: </label>
                                    <input id="id_medicamento" type="number" class="form-control" min="0" value="" step="1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nombre_generico">Nombre Gen&eacute;rico: </label>
                                    <input id="nombre_generico" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="nombre_comercial">Nombre Comercial: </label>
                                    <input id="nombre_comercial" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="posologia">Posolog&iacute;a: </label>
                                    <input id="posologia" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="presentacion">Presentaci&oacute;n: </label>
                                    <input id="presentacion" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="via">V&iacute;a: </label>
                                    <input id="via" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>                                
                                <div class="form-group">
                                    <label for="dosis">Dosis: </label>
                                    <input id="dosis" type="number" class="form-control" min="0" value="" step="1" >
                                </div> 
                                <div class="form-group">
                                    <label for="horario">Horario: </label>
                                    <input id="horario" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="tiempo">Tiempo: </label>
                                    <input id="tiempo" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div> 


                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="actualizar_medicamento()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                           
                        </div>
                    </div>
                </div>
            </div>      



<!--  MODAL NUEVO CLINICA -->

            <div class="modal fade" id="nuevo_clinica">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">EDITAR CLINICA</h3>
                        </div>
                        <div class="modal-body">
                        
                                <div class="form-group">
                                    <label for="id_clinica">ID: </label>
                                    <input id="id_clinica" type="number" class="form-control" min="0" value="" step="1" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nombre_clinica">Nombre: </label>
                                    <input id="nombre_clinica" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="direccion_clinica">Direcci&oacute;n: </label>
                                    <input id="direccion_clinica" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="referencia_clinica">Referencia: </label>
                                    <input id="referencia_clinica" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                             



                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="actualizar_clinica()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                           
                        </div>
                    </div>
                </div>
            </div>      





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funcion_busq_inv.js"></script>

    <script src="js/signature20.js"></script>

</body>
</html>