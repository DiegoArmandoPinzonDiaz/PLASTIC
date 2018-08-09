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
            $( "#fecha_mens" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });

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
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">ANTECEDENTES GINECO - OBST&Eacute;TRICOS: </h1>
                                    </div>
                                </div>

                                    <div class="col-xs-12 col-md-12" style="padding-top: 30PX;">
                                        <div class="col-xs-12 col-md-4" >
                                          <div class="form-group">
                                                  <label for="exp">INICIO DE MENSTRUACI&Oacute;N: </label>
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-2" >
                                              <div class="form-group">
                                                  <input type="text" class="form-control" id="edad_mens"   placeholder="EDAD:" onkeypress="return isNumberKey(event)">
                                              </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                          <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                              <label for="exp">CICLOS: </label>  
                                            </div>                                        
                                          </div>
                                          
                                          <div class="col-xs-12 col-md-8" id="textAGO">
                                            <div class="form-group">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ciclos1" id="ciclos1" value="option1" checked>
                                                <label class="form-check-label" for="ciclos1" id="SI">REGULAR</label>
                                                <input class="form-check-input" type="radio" name="ciclos2" id="ciclos2" value="option2" >
                                                <label class="form-check-label" for="ciclos2">IRREGULAR</label>
                                              </div>
                                            </div>
                                          </div>
                                         
                                        </div>
                                    </div>


                                    <div class="col-xs-12 col-md-12">
                                        <div class="col-xs-12 col-md-4" >
                                          <div class="form-group">
                                                  <label for="exp">FECHA DE &Uacute;LTIMA DE MENSTRUACI&Oacute;N: </label>
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-2" >
                                            <div class="form-group">                                               
                                              <input type="text" class="form-control" id="fecha_mens">                                                
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                          <div class="col-xs-12 col-md-9">
                                            <div class="form-group">
                                              <label for="exp">INICIO DE VIDA SEXUAL: </label>    
                                            </div>                                      
                                          </div>
                                          <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                              <input type="text" class="form-control" id="ini_vida"   placeholder="EDAD" onkeypress="return isNumberKey(event)">
                                            </div>
                                          </div>
                                         
                                        </div>
                                    </div>

 
                                    <div class="col-xs-12 col-md-12" id="textAGO_titulos">
                                        <div class="col-xs-12 col-md-2" >
                                          <div class="form-group">                                                  
                                                  <label for="exp">No. EMBARAZOS: </label>  
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-1" >
                                          <div class="form-group">                                                  
                                                  <input type="text" class="form-control" id="num_emb" onkeypress="return isNumberKey(event)" disabled>
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-1" >
                                          <div class="form-group">                                                  
                                                  <label for="exp">No. PARTOS: </label>  
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-1" >
                                          <div class="form-group">
                                                  <input type="text" class="form-control" id="num_par"   placeholder="NO. DE PARTOS" onkeypress="return isNumberKey(event)">
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-2" style="text-align: center;">
                                          <div class="form-group">                                                  
                                                  <label for="exp">No. CESAREAS: </label>  
                                          </div>
                                        </div>
                                        <div class="col-xs-12 col-md-1" >
                                          <div class="form-group">
                                                  <input type="text" class="form-control" id="num_cer"   placeholder="NO. DE CESAREAS" onkeypress="return isNumberKey(event)">
                                          </div>
                                        </div>
                                       
                                          <div class="col-xs-12 col-md-1" style="text-align: right;">
                                              <label for="exp">ABORTOS: </label>                                          
                                          </div>
                                          <div class="col-xs-12 col-md-2" style="text-align: center;">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="abo1" id="abo1" value="option1" >
                                                <label class="form-check-label" for="abo1" id="SI">SI</label>
                                                <input class="form-check-input" type="radio" name="abo2" id="abo2" value="option2" checked>
                                                <label class="form-check-label" for="abo2">NO</label>
                                              </div>
                                          </div>
                                          <div class="col-xs-12 col-md-1">
                                            <div class="form-group">
                                              <input type="text" class="form-control" id="abortos"   placeholder="CUANTOS" onkeypress="return isNumberKey(event)" disabled>
                                            </div>
                                          </div>
                                         
                                        
                                    </div>


                                    <div class="col-xs-12 col-md-12">

                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">MÉTODO DE PLANIFICACI&Oacute;N FAMILIAR: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="fam1" id="fam1" value="option1" >
                                          <label class="form-check-label" for="fam1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="fam2" id="fam2" value="option2" checked>
                                          <label class="form-check-label" for="fam2">NO</label>
                                        </div>
                                      </div>
                                      <DIV class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                          <input type="text" class="form-control" id="planificacion" placeholder="CU&Aacute;L?" disabled="" onKeyUp="this.value=this.value.toUpperCase();">
                                        </div>
                                      </DIV>

                                    </div>


                                    <div class="col-xs-12 col-md-12">

                                      <div class="col-xs-12 col-md-4" >
                                        <div class="form-group">
                                                <label for="exp">HAS TOMADO MEDICAMENTOS HORMONALES: </label>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-md-2" >
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="hor1" id="hor1" value="option1" >
                                          <label class="form-check-label" for="hor1" id="SI">SI</label>
                                          <input class="form-check-input" type="radio" name="hor2" id="hor2" value="option2" checked>
                                          <label class="form-check-label" for="hor2">NO</label>
                                        </div>
                                      </div>
                                      <DIV class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                          <input type="text" class="form-control" id="hormonas" placeholder="CU&Aacute;L?" disabled="" onKeyUp="this.value=this.value.toUpperCase();">
                                        </div>
                                      </DIV>

                                    </div>


                                    <div class="col-xs-12 col-md-3 pull-right">
                                        <button type="submit" class="btn btn-primary btn-block" onclick="guardarAntGin()">
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