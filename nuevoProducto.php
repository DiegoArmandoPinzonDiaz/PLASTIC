
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

    <link href="css/estilo_sist.css" rel="stylesheet" type="text/css">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--font awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>

    <script>
          $( function() {
            
                

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
                                        <div class="alert alert-default text-center" id="botones" >

                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_reg" id="boton_procedimiento" onclick="inventario3()" ><i class="fas fa-user-circle"></i></br><i id="text_boton">Procedimientos</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_pro" id="boton_nuevo_pro" style="display: none;"><i class="fas fa-hospital"></i></br><i id="text_boton">Cirug&iacute;as</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_med" id="boton_nuevo_med" style="display: none;"><i class="fa fa-user-md"></i></br><i id="text_boton">Medicina Est&eacute;tica</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_tra" id="boton_nuevo_tra" style="display: none;"><i class="fas fa-user-plus"></i></br><i id="text_boton">Spa</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_prod" id="boton_nuevo_prod" style="display: none;" ><i class="fas fa-ambulance"></i></br><i id="text_boton">Productos</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_mat" id="boton_nuevo_mat" style="display: none;" ><i class="fas fa-cart-plus"></i></br><i id="text_boton">Materiales</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_inv" id="boton_nuevo_inv" onclick="inventario()"><i class="fas fa-indent"></i></br><i id="text_boton">Inventario</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_medicos" id="medicos" ><i class="fas fa-user-md"></i></br><i id="text_boton">M&eacute;dicos</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_medicamento" id="medicamentos" style="display: none;" ><i class="fas fa-plus"></i></br><i id="text_boton">Medicamentos</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_clinica" id="clinicas"  ><i class="fas fa-building"></i></br><i id="text_boton">Cl&iacute;nicas</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_reg" id="boton_regresar" onclick="inventario2()" style="display: none;"><i class="fas fa-backward"></i></br><i id="text_boton">Regresar</i></button>
                                            <button type="button" class="btn boton" data-toggle="modal" data-target="#nuevo_reg" id="boton_regresar2" onclick="inventario4()" style="display: none;"><i class="fas fa-backward"></i></br><i id="text_boton">Regresar</i></button>

                                            
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


            <div class="modal fade" id="nuevo_pro" role="dialog" style="overflow-y: scroll;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">NUEVO PROCEDIMIENTO DE CIRUGIA</h3>
                        </div>
                        <div class="modal-body">
                           
                                <div class="form-group">
                                    <label for="nombre_pro">Nombre: </label>
                                    <input id="nombre_pro" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="valor_pro">Precio: (Costo Total a meses sin Interes)</label>
                                    <input id="valor_pro" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="valor_pro_efectivo">Precio: (Efectivo)</label>
                                    <input id="valor_pro_efectivo" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="marca_pro">Tiempo del Procedimiento: (Minutos)</label>
                                    <input id="marca_pro" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="duracion_pro">Duraci&oacute;n del Procedimiento: (D&iacute;as)</label>
                                    <input id="duracion_pro" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
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
                                        <tbody id="data_inv"></tbody>
                                    </table>
                                </div>
                                <div>
                                    <input name="file-input" id="file-input-pro" type="file" class="btn" accept="image/*"/>
                                       <br />
                                       <img id="imgSalida-pro" width="40%" height="40%" align="middle" src="" />
                                </div>

                                <div class="form-group">
                                    <label for="riesgos_pro">Riesgos: </label>
                                     <textarea rows="10" id="riesgos_pro" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tecnica_pro">T&eacute;cnica Quir&uacute;rgica: </label>
                                    <textarea rows="10" id="tecnica_pro" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="indicaciones_pro">Indicaciones: </label>
                                    <textarea rows="10" id="indicaciones_pro" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
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


                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="guardar_pro()">
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
                            <h3 class="modal-title">NUEVO PROCEDIMIENTO DE SPA</h3>
                        </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="nombre_spa">Nombre: </label>
                                    <input id="nombre_spa" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="valor_spa">Precio: (Costo Total a meses sin Interes)</label>
                                    <input id="valor_spa" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="valor_spa_efectivo">Precio: (Efectivo)</label>
                                    <input id="valor_spa_efectivo" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="marca_spa">Tiempo del Procedimiento: (Minutos)</label>
                                    <input id="marca_spa" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="duracion_spa">Duraci&oacute;n del Procedimiento: (D&iacute;as)</label>
                                    <input id="duracion_spa" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
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
                                        <tbody id="data_inv_spa"></tbody>
                                    </table>
                                </div>
                                 <div>
                                    <input name="file-input" id="file-input-spa" type="file" class="btn" accept="image/*"/>
                                       <br />
                                       <img id="imgSalida-spa" width="40%" height="40%" align="middle" src="" />
                                </div>

                                 <div class="form-group">
                                    <label for="riesgos_spa">Riesgos: </label>
                                     <textarea rows="10" id="riesgos_spa" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tecnica_spa">T&eacute;cnica Quir&uacute;rgica: </label>
                                    <textarea rows="10" id="tecnica_spa" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="indicaciones_spa">Indicaciones: </label>
                                    <textarea rows="10" id="indicaciones_spa" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
                                </div>

                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="guardar_spa()">
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
                            <h3 class="modal-title">NUEVO PRODUCTO</h3>
                        </div>
                        <div class="modal-body">
                           
                                <div class="form-group">
                                    <label for="nombre_prod">Nombre: </label>
                                    <input id="nombre_prod" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="valor_prod">Precio: (Costo Total a meses sin Interes)</label>
                                    <input id="valor_prod" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="marca_prod">Marca del Producto: </label>
                                    <input id="marca_prod" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="duracion_prod">Duraci&oacute;n del Producto: (D&iacute;as)</label>
                                    <input id="duracion_prod" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
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
                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="guardar_prod()">
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
                            <h3 class="modal-title">NUEVO PROCEDIMIENTO DE MEDICINA ESTETICA</h3>
                        </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="nombre_med">Nombre: </label>
                                    <input id="nombre_med" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="valor_med">Precio: (Costo Total a meses sin Interes)</label>
                                    <input id="valor_med" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="valor_med_efectivo">Precio: (Efectivo)</label>
                                    <input id="valor_med_efectivo" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="marca_med">Tiempo del Procedimiento: (Minutos)</label>
                                    <input id="marca_med" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="duracion_med">Duraci&oacute;n del Procedimiento: (D&iacute;as)</label>
                                    <input id="duracion_med" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
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
                                     <textarea rows="10" id="riesgos_med" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tecnica_med">T&eacute;cnica Quir&uacute;rgica: </label>
                                    <textarea rows="10" id="tecnica_med" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="indicaciones_med">Indicaciones: </label>
                                    <textarea rows="10" id="indicaciones_med" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();"></textarea>
                                </div>


                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="guardar_med()">
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
                            <h3 class="modal-title">NUEVO MATERIAL</h3>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST" role="form" name="formularioprod">
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
                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="guardar_mat()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                            </form>
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



        <div class="modal fade" id="nuevo_medicos" role="dialog" style="overflow-y: scroll;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">NUEVO M&Eacute;DICO</h3>
                        </div>
                        <div class="modal-body">
                           
                                <div class="form-group">
                                    <label for="nombre_medico">Nombre del M&eacute;dico: </label>
                                    <input id="nombre_medico" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();" onblur="validaNombreM()">
                                </div>
                                <div class="form-group">
                                    <label for="cedula_medico">C&eacute;dula Profesional: </label>
                                    <input id="cedula_medico" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="telefono_medico">Tel&eacute;fono de Contacto: </label>
                                    <input id="telefono_medico" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                              

                                <div class="form-group" style="text-align: left;">

                                    <label for="telefono_medico" >Firma: </label></br>
                                    
                                    <button type="button" class="btn btn_ac1" onclick="firmaMedico()" id="boton_firma_medico" style="width: 200px; margin-left: 30%;" disabled >FIRMAR</button>
                                      
                                    <img id="imgfirma_medico" width="40%" height="40%" align="middle" src="" style="display: none;" />
                                </div>


                                <button id="boton_medico" type="button" class="btn btn-primary btn-block" data-id="" onclick="guardar_medico()" disabled>
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
                                                    
                                                        <canvas id="sig-canvas19" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn19" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn19" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>



<!-- Modal medicamentos nuevos   -->

            <div class="modal fade" id="nuevo_medicamento" role="dialog" style="overflow-y: scroll;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">NUEVO MEDICAMENTO</h3>
                        </div>
                        <div class="modal-body">
                           
                                <div class="form-group">
                                    <label for="nombre_gen">Nombre Gen&eacute;rico: </label>
                                    <input id="nombre_gen" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="nombre_comer">Nombre Comercial: </label>
                                    <input id="nombre_comer" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
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
                                    <label for="via">V&iacute;a de Administraci&oacute;n: </label>
                                    <input id="via" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="dosis">Dosis</label>
                                    <input id="dosis" type="number" class="form-control" min="0" value="" step="1" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group">
                                    <label for="horario">Horario: </label>
                                    <input id="horario" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="tiempo_medicamento">Tiempo: </label>
                                    <input id="tiempo_medicamento" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>                              


                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="guardar_medicamento()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                          
                        </div>
                    </div>
                </div>
            </div>







<!-- Modal clinica nuevos   -->

            <div class="modal fade" id="nuevo_clinica" role="dialog" style="overflow-y: scroll;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header titulo_modal">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">NUEVO CL&Iacute;NICA</h3>
                        </div>
                        <div class="modal-body">
                           
                                <div class="form-group">
                                    <label for="nombre_cli">Nombre: </label>
                                    <input id="nombre_cli" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="direccion_cli">Direcci&oacute;n: </label>
                                    <input id="direccion_cli" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="referencia_cli">Referencia: </label>
                                    <input id="referencia_cli" type="text" class="form-control" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                </div>    

                                <button id="update_item" type="button" class="btn btn-primary btn-block" data-id="" onclick="guardar_clinica()">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                    &nbsp;Guardar
                                </button>
                          
                        </div>
                    </div>
                </div>
            </div>            





    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funcion_sis.js"></script>

    <script src="js/signature19.js"></script>

</body>
</html>