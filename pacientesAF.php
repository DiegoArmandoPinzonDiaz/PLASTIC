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
            
                $("#diabetes_select").prop("disabled", true); 
                $("#hipertension_select").prop("disabled", true); 
                $("#cardio_select").prop("disabled", true); 
                $("#hepatopatias_select").prop("disabled", true); 
                $("#nefropatias_select").prop("disabled", true); 
                $("#endocrinas_select").prop("disabled", true); 
                $("#qsiquiatricas_select").prop("disabled", true); 
                $("#epilepsia_select").prop("disabled", true); 
                $("#asma_select").prop("disabled", true); 
                $("#hermatologias_select").prop("disabled", true); 
                $("#cancer1_select").prop("disabled", true); 
                $("#cancer2_select").prop("disabled", true); 
                $("#cancer3_select").prop("disabled", true); 

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
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">ANTECEDENTES HEREDO-FAMILIARES: </h1>
                                    </div>
                                </div>

                                

                                    <div class="col-xs-12 col-md-5"  id="bloqueAF">

                                   
                                        <div class="form-check">          
                                          <input class="form-check-input" type="checkbox" value="" id="diabetes">                                
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">DIABETES MELLITUS.</label>
                                          <select name="diabetes_select" id="diabetes_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div></br>
                                        <div class="form-check">  
                                          <input class="form-check-input" type="checkbox" value="" id="hipertension">                                        
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">HIPERTENSI&Oacute;N ARTERIAL.</label>
                                          <select name="hipertension_select" id="hipertension_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div></br>
                                        <div class="form-check"> 
                                          <input class="form-check-input" type="checkbox" value="" id="cardio">                                         
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">CARDIOPAT&Iacute;AS.</label>
                                          <select name="cardio_select" id="cardio_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div></br>
                                        <div class="form-check"> 
                                          <input class="form-check-input" type="checkbox" value="" id="dislipi">                                         
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">DISLIPIDEMIAS.</label>
                                          <select name="dislipi_select" id="dislipi_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div>
                                                                                              
                                                
                                    </div>
                                    

                                    <div class="col-xs-12 col-md-5"  id="bloqueAF">

                                        <div class="form-check">   
                                          <input class="form-check-input" type="checkbox" value="" id="hepatopatias">                                       
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">HEPATOPAT&Iacute;AS.</label>
                                          <select name="hepatopatias_select" id="hepatopatias_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div></br>
                                        <div class="form-check"> 
                                          <input class="form-check-input" type="checkbox" value="" id="nefropatias">                                         
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">NEFROPAT&Iacute;AS.</label>
                                          <select name="nefropatias_select" id="nefropatias_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div></br>
                                        <div class="form-check"> 
                                          <input class="form-check-input" type="checkbox" value="" id="endocrinas">                                         
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">ENDOCRINOL&Oacute;GICAS</label>
                                          <select name="endocrinas_select" id="endocrinas_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div></br>
                                        <div class="form-check"> 
                                          <input class="form-check-input" type="checkbox" value="" id="qsiquiatricas">                                         
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">PSIQUI&Aacute;TRICAS.</label>
                                          <select name="qsiquiatricas_select" id="qsiquiatricas_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div>

                                    </div>
                                    

                                    <div class="col-xs-12 col-md-5"  id="bloqueAF">

                                        <div class="form-check">      
                                          <input class="form-check-input" type="checkbox" value="" id="epilepsia">                                    
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">NEUROL&Oacute;GICAS.</label>
                                          <select name="epilepsia_select" id="epilepsia_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div></br>
                                        <div class="form-check">  
                                          <input class="form-check-input" type="checkbox" value="" id="asma">                                        
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">RESPIRATORIAS.</label>
                                          <select name="asma_select" id="asma_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div></br>
                                        <div class="form-check">   
                                          <input class="form-check-input" type="checkbox" value="" id="hermatologias">                                       
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">HEMATOL&Oacute;GICAS.</label>
                                          <select name="hermatologias_select" id="hermatologias_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div></br>
                                        <div class="form-check">   
                                          <input class="form-check-input" type="checkbox" value="" id="infecciosas">                                       
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">INFECCIOSAS.</label>
                                          <select name="infecciosas_select" id="infecciosas_select" multiple="multiple" class="selectpicker seleccion">
                                              <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                          </select>
                                        </div>
                                        <!--<div class="form-check">   
                                          <input class="form-check-input" type="checkbox" value="" id="coagulacion">                                       
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF"> Problemas de coagulación.</label>
                                        </div> -->                                       

                                    </div>


                                     <div class="col-xs-12 col-md-5"  id="bloqueAF" style="padding-bottom: 0px;">

                                        <div class="form-check">   
                                          <input class="form-check-input" type="checkbox" value="" id="cancer">                                                                                
                                          <label class="form-check-label" for="defaultCheck1" style="color: #FBF4F6;" id="textAF">C&Aacute;NCER.</label>

                                          <div class="col-xs-12 col-md-12">
                                              <div class="col-xs-12 col-md-6">
                                                <input class="form-control" type="text" value="" id="cancer1" placeholder="TIPO DE C&Aacute;NCER:" disabled onblur="this.value=this.value.toUpperCase();">  
                                              </div>
                                              <div class="col-xs-12 col-md-6"> 
                                                <select name="cancer1_select" id="cancer1_select" multiple="multiple" class="selectpicker seleccion" >
                                                    <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                                </select> 
                                              </div>
                                          </div>
                                          
</br></br></br></br></br>
                                          <div class="col-xs-12 col-md-12">
                                            <div class="col-xs-12 col-md-6">
                                              <input class="form-control" type="text" value="" id="cancer2" placeholder="TIPO DE C&Aacute;NCER:" disabled onblur="this.value=this.value.toUpperCase();">  </br>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                              <select name="cancer2_select" id="cancer2_select" multiple="multiple" class="selectpicker seleccion" >
                                                  <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                              </select> 
                                            </div>
                                          </div>

</br></br></br></br>
                                          <div class="col-xs-12 col-md-12">
                                            <div class="col-xs-12 col-md-6">
                                              <input class="form-control" type="text" value="" id="cancer3" placeholder="TIPO DE C&Aacute;NCER:" disabled onblur="this.value=this.value.toUpperCase();">  </br>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                              <select name="cancer3_select" id="cancer3_select" multiple="multiple" class="selectpicker seleccion" >
                                                  <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                              </select> 
                                            </div>
                                          </div>
                                        </div>
</br></br></br></br>                                       

                                        <div class="col-xs-12 col-md-12">
                                            <div class="col-xs-12 col-md-6">
                                              <input class="form-control" type="text" value="" id="cancer4" placeholder="TIPO DE C&Aacute;NCER:" disabled onblur="this.value=this.value.toUpperCase();">  </br>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                              <select name="cancer4_select" id="cancer4_select" multiple="multiple" class="selectpicker seleccion" >
                                                  <option>ABUELOS</option>
                                              <option>PADRE</option>
                                              <option>MADRE</option>
                                              <option>HERMANOS</option>
                                              <option>HIJOS</option>
                                              <option>OTRO</option>
                                              </select> 
                                            </div>
                                          </div>
                                        </div>


                                         <div class="col-xs-12 col-md-12">
                                                  <div class="form-group">
                                                      <label for="exp">OTRAS: </label>
                                                      <input type="text" class="form-control" id="otro" placeholder="Otras" onblur="this.value=this.value.toUpperCase();">
                                                  </div>
                                          </div>
                                          <div class="col-xs-12 col-md-3 pull-right">
                                              <button class="btn btn-primary btn-block" onclick="guardarAntFam()">
                                                  <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                  &nbsp;Guardar
                                              </button>
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