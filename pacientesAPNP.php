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
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">ANTECEDENTES PERSONALES NO PATOL&Oacute;GICOS: </h1>
                                    </div>
                                </div>

                             
                                  <div class="col-xs-12 col-md-12" style="padding-top: 10PX;">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">MASCOTAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="mas1" id="mas1" value="option1" >
                                          <label class="form-check-label" for="mas1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="mas2" id="mas2" value="option2" checked>
                                          <label class="form-check-label" for="mas2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                        <input type="text" class="form-control" id="mascotas" placeholder="TIPO:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">ACTIVIDAD F&Iacute;SICA: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="act1" id="act1" value="option1" >
                                          <label class="form-check-label" for="act1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="act2" id="act2" value="option2" checked>
                                          <label class="form-check-label" for="act2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="actividad1" placeholder="CU&Aacute;L?:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <!--<input type="text" class="form-control" id="actividad3" placeholder="FRECUENCIA:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                                 <select id="actividad3" class="selectpicker seleccion" style="text-align: center;" disabled>
                                                    <option disabled selected value> FRECUENCIA: </option>
                                                    <option>DIARIO</option>
                                                    <option>CADA 3ER D&Iacute;A</option>
                                                    <option>SEMANAL</option>
                                                    <option>QUINCENAL</option>
                                                    <option>MENSUAL</option>
                                                    <option>OCASIONAL</option>
                                                </select>  
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="actividad2" placeholder="TIEMPO: (MESES)" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            
                                      </div>
                                  </div>  

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">CONSUME ALCOHOL: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="con1" id="con1" value="option1" >
                                          <label class="form-check-label" for="con1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="con2" id="con2" value="option2" checked>
                                          <label class="form-check-label" for="con2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="alcohol1" placeholder="CANTIDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <!--<input type="text" class="form-control" id="alcohol3" placeholder="FRECUENCIA:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                                <select id="alcohol3" class="selectpicker seleccion" style="text-align: center;" disabled>
                                                    <option disabled selected value> FRECUENCIA: </option>
                                                    <option>DIARIO</option>
                                                    <option>CADA 3ER D&Iacute;A</option>
                                                    <option>SEMANAL</option>
                                                    <option>QUINCENAL</option>
                                                    <option>MENSUAL</option>
                                                    <option>OCASIONAL</option>
                                                </select> 
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="alcohol2" placeholder="TIEMPO: (A&Ntilde;OS)" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            
                                      </div>
                                  </div>  

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">TABAQUISMO: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tab1" id="tab1" value="option1" >
                                          <label class="form-check-label" for="tab1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="tab2" id="tab2" value="option2" checked>
                                          <label class="form-check-label" for="tab2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="tabaquismo1" placeholder="CANTIDAD:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <!--<input type="text" class="form-control" id="tabaquismo3" placeholder="FRECUENCIA:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                                <select id="tabaquismo3" class="selectpicker seleccion" style="text-align: center;" disabled>
                                                    <option disabled selected value> FRECUENCIA: </option>
                                                    <option>DIARIO</option>
                                                    <option>CADA 3ER D&Iacute;A</option>
                                                    <option>SEMANAL</option>
                                                    <option>QUINCENAL</option>
                                                    <option>MENSUAL</option>
                                                    <option>OCASIONAL</option>
                                                </select> 
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="tabaquismo2" placeholder="TIEMPO: (A&Ntilde;OS)" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            
                                      </div>
                                  </div> 

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">USO DE DROGAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="uso1" id="uso1" value="option1" >
                                          <label class="form-check-label" for="uso1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="uso2" id="uso2" value="option2" checked>
                                          <label class="form-check-label" for="uso2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="drogas1" placeholder="CU&Aacute;LES?:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <!--<input type="text" class="form-control" id="drogas3" placeholder="FRECUENCIA:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                                <select id="drogas3" class="selectpicker seleccion" style="text-align: center;" disabled>
                                                    <option disabled selected value> FRECUENCIA: </option>
                                                    <option>DIARIO</option>
                                                    <option>CADA 3ER D&Iacute;A</option>
                                                    <option>SEMANAL</option>
                                                    <option>QUINCENAL</option>
                                                    <option>MENSUAL</option>
                                                    <option>OCASIONAL</option>
                                                </select> 
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="drogas2" placeholder="TIEMPO: (A&Ntilde;OS)" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            
                                      </div>
                                  </div>


                                  <div class="col-xs-12 col-md-12 pull-right ">
                                      <div class="col-xs-12 col-md-6 pull-right ">
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="drogas4" placeholder="CU&Aacute;LES?:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <!--<input type="text" class="form-control" id="drogas3" placeholder="FRECUENCIA:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                                <select id="drogas5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                                    <option disabled selected value> FRECUENCIA: </option>
                                                    <option>DIARIO</option>
                                                    <option>CADA 3ER D&Iacute;A</option>
                                                    <option>SEMANAL</option>
                                                    <option>QUINCENAL</option>
                                                    <option>MENSUAL</option>
                                                    <option>OCASIONAL</option>
                                                </select> 
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="drogas6" placeholder="TIEMPO: (A&Ntilde;OS)" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            
                                      </div>
                                  </div>
                                  <div class="col-xs-12 col-md-12 pull-right ">
                                      <div class="col-xs-12 col-md-6 pull-right ">
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="drogas7" placeholder="CU&Aacute;LES?:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <!--<input type="text" class="form-control" id="drogas3" placeholder="FRECUENCIA:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                                <select id="drogas8" class="selectpicker seleccion" style="text-align: center;" disabled>
                                                    <option disabled selected value> FRECUENCIA: </option>
                                                    <option>DIARIO</option>
                                                    <option>CADA 3ER D&Iacute;A</option>
                                                    <option>SEMANAL</option>
                                                    <option>QUINCENAL</option>
                                                    <option>MENSUAL</option>
                                                    <option>OCASIONAL</option>
                                                </select> 
                                            </div>
                                            <div class="col-xs-12 col-md-4">
                                                <input type="text" class="form-control" id="drogas9" placeholder="TIEMPO: (A&Ntilde;OS)" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                            </div>
                                            
                                      </div>
                                  </div>



                                   <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">TATUAJES O PERFORACIONES: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tat1" id="tat1" value="option1" >
                                          <label class="form-check-label" for="tat1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="tat2" id="tat2" value="option2" checked>
                                          <label class="form-check-label" for="tat2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                        <input type="text" class="form-control" id="tatuajes1" placeholder="CUANDO: (A&Ntilde;OS):" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                  </div>   

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">INGIERE ALG&Uacute;N SUPLEMENTO ALIMENTICIO: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="ing1" id="ing1" value="option1" >
                                          <label class="form-check-label" for="ing1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="ing2" id="ing2" value="option2" checked>
                                          <label class="form-check-label" for="ing2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                        <input type="text" class="form-control" id="medicamento1" placeholder="CU&Aacute;L?:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                  </div> 

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">INGIERE ASPIRINA REGULARMENTE: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="asp1" id="asp1" value="option1" >
                                          <label class="form-check-label" for="asp1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="asp2" id="asp2" value="option2" checked>
                                          <label class="form-check-label" for="asp2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                        <!--<input type="text" class="form-control" id="aspirina1" placeholder="FRECUENCIA:" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="aspirina1" class="selectpicker seleccion" style="text-align: center;" disabled>
                                            <option disabled selected value> FRECUENCIA: </option>
                                            <option>DIARIO</option>
                                            <option>CADA 3ER D&Iacute;A</option>
                                            <option>SEMANAL</option>
                                            <option>QUINCENAL</option>
                                            <option>MENSUAL</option>
                                            <option>OCASIONAL</option>
                                        </select> 
                                      </div>
                                  </div> 


                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="tiposanguineo">TIPO SANGU&Iacute;NEO: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6 pull-right">
                                          <select id="tiposanguineo" class="form-control">
                                              <option value="0" selected="" disabled="">Selecciona una opci&oacute;n</option>
                                              <option value="1">O-</option><option value="2">O+</option><option value="3">A-</option><option value="4">A+</option><option value="5">B-</option><option value="6">B+</option><option value="7">AB-</option><option value="8">AB+</option>                                               
                                          </select>
                                      </div>
                                  </div>
                                </br></br></br>



                                    <div class="col-xs-12 col-md-3 pull-right">
                                        <button class="btn btn-primary btn-block" onclick="guardarAntPer()">
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
    <script type="text/javascript" src="js/funcion_sis_pac.js"></script>
    <script type="text/javascript" src="js/funcion_pacientes.js"></script>

</body>
</html>