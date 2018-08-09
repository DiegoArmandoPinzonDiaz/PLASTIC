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


    <style type='text/css'>
      /* Style to hide Dates / Months */
      .ui-datepicker-calendar,.ui-datepicker-month { display: none; }
    </style>


      <script>
          $( function() {
            $( "#datepicker3" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
              });
            $( "#datepicker4" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });
            $( "#datepicker5" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });
            $( "#datepicker6" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });
            $( "#datepicker7" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });
            $( "#datepicker8" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });
            $( "#datepicker9" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });
            $( "#datepicker10" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });
            $( "#datepicker11" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });

            $( "#datepicker12" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });

            $( "#datepicker13" ).datepicker({ 
                              changeMonth: false,
                              changeYear: true,
                              showButtonPanel: true,
                              yearRange: '1950:2020',
                              dateFormat: 'yy',
                              onClose: function(dateText, inst) { 
                                  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                  $(this).datepicker('setDate', new Date(year, 0, 1));
                                }
             });

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
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">ANTECEDENTES PERSONALES PATOL&Oacute;GICOS: </h1>
                                    </div>
                                </div>

                                 <div class="col-xs-12 col-md-12" style="padding-top: 20PX;">
                                  <div class="col-xs-12 col-md-6" style="text-align: center;">                                    
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 18px;">PATOLOG&Iacute;A: </h1>                                    
                                  </div>
                                  <div class="col-xs-12 col-md-6" style="text-align: center;">                                    
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 18px;">TIEMPO DE EVOLUCI&Oacute;N / TRATAMIENTO ACTUAL / LOCALIZACI&Oacute;N: </h1>                                    
                                  </div>
                                </div>


                              

                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX;">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">DIABETES MELLITUS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="dia1" id="dia1" value="option1" >
                                          <label class="form-check-label" for="dia1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="dia2" id="dia2" value="option2" checked>
                                          <label class="form-check-label" for="dia2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="diabetes1" placeholder="COMENTARIOS:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="diabetes2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="diabetes3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="diabetes4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="diabetes5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>


                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="diabetes6" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="diabetes7" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="diabetes8" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>

                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="diabetes9" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="diabetes10" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="diabetes11" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>


                                      
                                  </div>

                                  <div class="col-xs-12 col-md-12" >
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">HIPERTENSI&Oacute;N ARTERIAL: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="hip1" id="hip1" value="option1" >
                                          <label class="form-check-label" for="hip1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="hip2" id="hip2" value="option2" checked>
                                          <label class="form-check-label" for="hip2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="hipertension1" placeholder="COMENTARIOS:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="hipertension2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="hipertension3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="hipertension4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="hipertension5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>


                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="hipertension6" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="hipertension7" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="hipertension8" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>

                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="hipertension9" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="hipertension10" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="hipertension11" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>


                                  </div>

                                  <div class="col-xs-12 col-md-12" >
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">CARDIOPAT&Iacute;AS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="pro1" id="pro1" value="option1" >
                                          <label class="form-check-label" for="pro1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="pro2" id="pro2" value="option2" checked>
                                          <label class="form-check-label" for="pro2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="problemas1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="problemas2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="problemas3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="problemas4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="problemas5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12" >
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">DISLIPIDEMIAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="der1" id="der1" value="option1" >
                                          <label class="form-check-label" for="der1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="der2" id="der2" value="option2" checked>
                                          <label class="form-check-label" for="der2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="dermatologicas1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="dermatologicas2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="dermatologicas3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="dermatologicas4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="dermatologicas5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">NEUROL&Oacute;GICAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="end1" id="end1" value="option1" >
                                          <label class="form-check-label" for="end1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="end2" id="end2" value="option2" checked>
                                          <label class="form-check-label" for="end2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="endocrinologicas1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="endocrinologicas2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="endocrinologicas3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="endocrinologicas4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="endocrinologicas5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>

                                  <!--<div class="col-xs-12 col-md-12" >
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">TIROIDES: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="tir1" id="tir1" value="option1" >
                                          <label class="form-check-label" for="tir1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="tir2" id="tir2" value="option2" checked>
                                          <label class="form-check-label" for="tir2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                        <input type="text" class="form-control" id="tiroides1" disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                  </div>-->

                                  <div class="col-xs-12 col-md-12" >
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">RESPIRATORIAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="ale1" id="ale1" value="option1" >
                                          <label class="form-check-label" for="ale1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="ale2" id="ale2" value="option2" checked>
                                          <label class="form-check-label" for="ale2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="alergias1" placeholder="TIPO DE ALERG&Iacute;AS:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="alergias2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="alergias3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="alergias4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="alergias5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">HEMATOL&Oacute;GICAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="enf1" id="enf1" value="option1" >
                                          <label class="form-check-label" for="enf1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="enf2" id="enf2" value="option2" checked>
                                          <label class="form-check-label" for="enf2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="enfermedades1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="enfermedades2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="enfermedades3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="enfermedades4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="enfermedades5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>


                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">INFECCIOSAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="epi1" id="epi1" value="option1" >
                                          <label class="form-check-label" for="epi1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="epi2" id="epi2" value="option2" checked>
                                          <label class="form-check-label" for="epi2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="epilepsia1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="epilepsia2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="epilepsia3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="epilepsia4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="epilepsia5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>



                                   <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">HEPATOPAT&Iacute;AS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="hepa1" id="hepa1" value="option1" >
                                          <label class="form-check-label" for="hepa1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="hepa2" id="hepa2" value="option2" checked>
                                          <label class="form-check-label" for="hepa2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="hepatitis1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="hepatitis2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="hepatitis3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="hepatitis4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="hepatitis5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>


                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">NEFROPAT&Iacute;AS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="nefro1" id="nefro1" value="option1" >
                                          <label class="form-check-label" for="nefro1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="nefro2" id="nefro2" value="option2" checked>
                                          <label class="form-check-label" for="nefro2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="nefropatias1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="nefropatias2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="nefropatias3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="nefropatias4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="nefropatias5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>



                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">ENDOCRINOL&Oacute;GICAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="endocri1" id="endocri1" value="option1" >
                                          <label class="form-check-label" for="endocri1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="endocri2" id="endocri2" value="option2" checked>
                                          <label class="form-check-label" for="endocri2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="endocrinologicas_1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="endocrinologicas_2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="endocrinologicas_3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="endocrinologicas_4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="endocrinologicas_5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>


                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">PSIQUI&Aacute;TRICAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="psi1" id="psi1" value="option1" >
                                          <label class="form-check-label" for="psi1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="psi2" id="psi2" value="option2" checked>
                                          <label class="form-check-label" for="psi2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="psiquiatricas1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="psiquiatricas2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="psiquiatricas3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="psiquiatricas4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="psiquiatricas5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>


                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">C&Aacute;NCER: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="can1" id="can1" value="option1" >
                                          <label class="form-check-label" for="can1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="can2" id="can2" value="option2" checked>
                                          <label class="form-check-label" for="can2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="cancer_1" placeholder="CU&Aacute;L ENFERMEDAD:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="cancer_2" placeholder="TIEMPO DE DIAGN&Oacute;STICO:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                      </div>
                                      <div class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="cancer_3" placeholder="TRATAMIENTO ACTUAL (MEDICAMENTO):"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                      <div class="col-xs-12 col-md-1">
                                        <input type="text" class="form-control" id="cancer_4" placeholder="CANTIDAD:" onkeypress="return isNumberKey(event)" disabled>
                                      </div> 
                                      <div class="col-xs-12 col-md-2">
                                        <!--<input type="text" class="form-control" id="diabetes5" placeholder="FRECUENCIA:"  disabled onKeyUp="this.value=this.value.toUpperCase();"></br>-->
                                        <select id="cancer_5" class="selectpicker seleccion" style="text-align: center;" disabled>
                                        <option disabled selected value> FRECUENCIA: </option>
                                        <option>CADA 8 HORAS</option>
                                        <option>CADA 12 HORAS</option>
                                        <option>CADA 24 HORAS</option>
                                        <option>DIARIO</option>
                                        <option>SEMANAL</option>
                                        <option>QUINCENAL</option>
                                        <option>MENSUAL</option>
                                        </select>  
                                      </div>
                                  </div>
                                  

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        <div class="form-group">
                                                <label for="exp">OTRAS: </label>
                                        </div>
                                      </div>
                                      
                                      <div class="col-xs-12 col-md-6">
                                        <input type="text" class="form-control" id="otras1"  onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                  </div>


<hr/>


                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">ALERG&Iacute;AS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="ale_1" id="ale_1" value="option1" >
                                          <label class="form-check-label" for="ale_1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="ale_2" id="ale_2" value="option2" checked>
                                          <label class="form-check-label" for="ale_2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="alergias_1"   placeholder="ALERG&Iacute;A:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="alergias_2"   placeholder="TRATAMIENTO ACTUAL:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                       
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="alergias_3"   placeholder="ALERG&Iacute;A:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="alergias_4"   placeholder="TRATAMIENTO ACTUAL:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                       
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="alergias_5"   placeholder="ALERG&Iacute;A:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="alergias_6"   placeholder="TRATAMIENTO ACTUAL:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                       
                                      </div>
                                  </div>






                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">CIRUG&Iacute;AS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="cir1" id="cir1" value="option1" >
                                          <label class="form-check-label" for="cir1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="cir2" id="cir2" value="option2" checked>
                                          <label class="form-check-label" for="cir2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="cirugias1"   placeholder="TIPO DE CIRUG&Iacute;A:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker3" disabled>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="cirugias2"   placeholder="TIPO DE CIRUG&Iacute;A:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker5" disabled>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="cirugias3"   placeholder="TIPO DE CIRUG&Iacute;A:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker6" disabled>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      </div>
                                  </div>

                                   <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="cirugias4"   placeholder="TIPO DE CIRUG&Iacute;A:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker12" disabled>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="cirugias5"   placeholder="TIPO DE CIRUG&Iacute;A:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker13" disabled>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      </div>
                                  </div>



                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">HOSPITALIZACIONES PREVIAS: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="hos1" id="hos1" value="option1" >
                                          <label class="form-check-label" for="hos1" id="SI" >SI</label>
                                          <input class="form-check-input" type="radio" name="hos2" id="hos2" value="option2" checked>
                                          <label class="form-check-label" for="hos2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="hospitalizaciones1"   placeholder="MOTIVO:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker4" disabled>
                                                </div>
                                            </div>                                    
                                        </div>
                                      </div>
                                    </div>


                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="hospitalizaciones2"   placeholder="MOTIVO:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker7" disabled>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="hospitalizaciones3"   placeholder="MOTIVO:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker8" disabled>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      </div>
                                  </div>





                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">TRANSFUSIONES: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="trans1" id="trans1" value="option1" >
                                          <label class="form-check-label" for="trans1" id="SI" >SI</label>
                                          <input class="form-check-input" type="radio" name="trans2" id="trans2" value="option2" checked>
                                          <label class="form-check-label" for="trans2">NO</label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="transfusiones1"   placeholder="MOTIVO:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker9" disabled>
                                                </div>
                                            </div>                                    
                                        </div>
                                      </div>
                                    </div>


                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="transfusiones2"   placeholder="MOTIVO:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker10" disabled>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      </div>
                                  </div>

                                  <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-6" >
                                        
                                      </div>                                     
                                      <div class="col-xs-12 col-md-6">
                                        <div class="col-xs-12 col-md-9">
                                          <div class="form-group">
                                            <input type="text" class="form-control" id="transfusiones3"   placeholder="MOTIVO:" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="datepicker11" disabled>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      </div>
                                  </div>


                                   <div class="col-xs-12 col-md-12">
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-group">
                                                <label for="exp">OTRAS: </label>
                                        </div>
                                      </div>
                                      
                                      <div class="col-xs-12 col-md-10">
                                        <input type="text" class="form-control" id="otras_cirugias"  onKeyUp="this.value=this.value.toUpperCase();"></br>
                                      </div>
                                  </div>




                                 



                                    <div class="col-xs-12 col-md-3 pull-right">
                                        <button class="btn btn-primary btn-block" onclick="guardarAntPat()">
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