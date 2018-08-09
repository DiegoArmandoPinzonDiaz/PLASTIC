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

            $( "#fecha_tox" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_rel" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_hilo" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_pe" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_rad" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_dep" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_otro" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            


            $( "#fecha_car" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_rad2" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_ult" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_hid" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_crio" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_dep2" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_otro2" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });

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
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">ANTECEDENTES DERMO - ESTÉTICOS: </h1>
                                    </div>
                                </div>

                                

                                  <div class="col-xs-12 col-md-12" style="text-align: center;">
                                      <h1 class="panel-title" style="color: #337ab7; font-size: 18px;">FOTO PROTECCIÓN: </h1>  
                                  </div>

                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX;">

                                          <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                              <label for="exp">EXPOSICIÓN SOLAR: </label>
                                            </div>                                          
                                          </div>
                                          <div class="col-xs-12 col-md-2">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="ex1" id="ex1" value="option1" >
                                                <label class="form-check-label" for="ex1" id="SI">SI</label>
                                                <input class="form-check-input" type="radio" name="ex2" id="ex2" value="option2" checked>
                                                <label class="form-check-label" for="ex2">NO</label>
                                              </div>
                                          </div> 
                                

                                          <div class="col-xs-12 col-md-4" >
                                            <div class="form-group">
                                              <label for="exp">TIEMPO DE EXPOSICIÓN SOLAR AL DÍA: (MINUTOS) </label> 
                                            </div>                                         
                                          </div>
                                          <div class="col-xs-12 col-md-2">
                                              <input type="text" class="form-control" id="exposicion" placeholder="MINUTOS" onkeypress="return isNumberKey(event)" disabled>
                                          </div> 
                                    
                                    </div>


                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX;">
                                        <!--<div class="col-xs-12 col-md-3" >
                                          <div class="form-group">
                                              <label for="exp">HORARIO DE EXPOSICIÓN: </label> 
                                          </div>   
                                        </div>
                                        <div class="col-xs-12 col-md-3" >
                                            <div class="form-group">                                               
                                                <select id="horarioExp" class="form-control">
                                                    <option value="0" selected="" disabled="">Selecciona una opción</option>
                                                    <option value="1">MENOS DE UNA HORA</option><option value="2">UNA A TRES HORAS</option><option value="2">MÁS DE TRES HORAS</option>                                                    
                                                </select>
                                            </div> 
                                        </div>-->
                                          <div class="col-xs-12 col-md-4">
                                            <div class="form-group">
                                              <label for="exp">USO DE PROTECCIÓN SOLAR: </label> 
                                            </div>                                         
                                          </div>
                                          <div class="col-xs-12 col-md-2">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="us1" id="us1" value="option1" >
                                                <label class="form-check-label" for="us1" id="SI">SI</label>
                                                <input class="form-check-input" type="radio" name="us2" id="us2" value="option2" checked>
                                                <label class="form-check-label" for="us2">NO</label>
                                              </div>
                                          </div> 
                                          <div class="col-xs-12 col-md-3" >
                                            <div class="form-group">
                                              <label for="exp">MARCA DEL PROTECTOR SOLAR: </label>  
                                            </div>                                        
                                          </div>
                                          <div class="col-xs-12 col-md-3">
                                            <div class="form-group">
                                              <input type="text" class="form-control" id="protector" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>
                                          </div> 

                                          <div class="col-xs-12 col-md-2" style="padding-top: 20PX;" >
                                            <div class="form-group">
                                              <label for="exp">FPS:  (% PROTECCIÓN)</label>  
                                            </div>                                        
                                          </div>
                                          <div class="col-xs-12 col-md-1" style="padding-top: 20PX; padding-bottom: 20PX;">
                                              <input type="number" class="form-control" id="fps" placeholder="%" maxlength="3">
                                          </div> 
                                        
                                  </div>


                                <hr>






                                <div class="row">
                                     <div class="panel-heading">
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">TRATAMIENTOS ESTÉTICOS FACIALES PREVIOS: </h1>
                                    </div>
                                </div>


                                  <div class="col-xs-12 col-md-12" style="text-align: center;">
                                      <h1 class="panel-title" style="color: #337ab7; font-size: 18px;">FACIAL: </h1>  
                                  </div>

                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX;">

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                              <label for="exp">PROCEDIMIENTO </label>                                          
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                              <label for="exp">PRODUCTO / MARCA </label>                                          
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                              <label for="exp">FECHA DE APLICACIÓN </label>                                          
                                          </div>
                                    
                                  </div>


                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX;">

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">TOXINA BOTULINICA TIPO A: </label>   
                                            </div>                                       
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="toxina" onKeyUp="this.value=this.value.toUpperCase();">  
                                            </div>                                      
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                      <input type="text" class="form-control" id="fecha_tox">  
                                                </div>   

                                          </div>
                                    
                                  </div>


                                  <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">RELLENO FACIAL: </label>     
                                            </div>                                     
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="relleno" onKeyUp="this.value=this.value.toUpperCase();">  
                                            </div>                                      
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                      <input type="text" class="form-control" id="fecha_rel">  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>


                                 <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">HILOS DE SUSTENTACIÓN: </label>  
                                            </div>                                        
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="hilo" onKeyUp="this.value=this.value.toUpperCase();">  
                                            </div>                                      
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_hilo">  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>



                                  <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">PEELING: </label>  
                                            </div>                                        
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="peeling" onKeyUp="this.value=this.value.toUpperCase();"> 
                                            </div>                                       
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_pe">  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>


                                  <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">RADIOFRECUENCIA: </label> 
                                            </div>                                         
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="radiofrecuencia" onKeyUp="this.value=this.value.toUpperCase();">   
                                            </div>                                     
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_rad" >  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>


                                  <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">DEPILACIÓN LASER: </label> 
                                            </div>                                         
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="depilacion" onKeyUp="this.value=this.value.toUpperCase();">   
                                            </div>                                     
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_dep" >  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>


                                  <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">OTROS: </label> 
                                            </div>                                         
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="otros" onKeyUp="this.value=this.value.toUpperCase();">   
                                            </div>                                     
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_otro" >  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>


                                  <hr>





                                <div class="row">
                                     <div class="panel-heading">
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">TRATAMIENTOS ESTÉTICOS CORPORALES PREVIOS: </h1>
                                    </div>
                                </div>

                                  <div class="col-xs-12 col-md-12" style="text-align: center;">
                                      <h1 class="panel-title" style="color: #337ab7; font-size: 18px;">CORPORAL: </h1>  
                                  </div>

                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX;">

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                              <label for="exp">PROCEDIMIENTO </label>                                          
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                              <label for="exp">PRODUCTO / MARCA </label>                                          
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                              <label for="exp">FECHA DE APLICACIÓN </label>                                          
                                          </div>
                                    
                                  </div>


                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX;">

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">CARBOXITERAPIA: </label>
                                            </div>                                          
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="carboxiterapia" onKeyUp="this.value=this.value.toUpperCase();">  
                                            </div>                                      
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                      <input type="text" class="form-control" id="fecha_car">  
                                                </div>   

                                          </div>
                                    
                                  </div>


                                  <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">RADIOFRECUENCIA: </label>   
                                            </div>                                       
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="radiofrecuencia2" onKeyUp="this.value=this.value.toUpperCase();">  
                                            </div>                                      
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                      <input type="text" class="form-control" id="fecha_rad2">  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>


                                 <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">ULTRASONIDO: </label>  
                                            </div>                                        
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="ultrasonido" onKeyUp="this.value=this.value.toUpperCase();">      
                                            </div>                                  
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                      <input type="text" class="form-control" id="fecha_ult">  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>



                                  <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">HIDROLIPOCLASIA: </label>    
                                            </div>                                      
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="hidrolipoclasia" onKeyUp="this.value=this.value.toUpperCase();"> 
                                            </div>                                       
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_hid">  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>


                                  <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">CRIOLIPOLISIS: </label>    
                                            </div>                                      
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="criolipolisis" onKeyUp="this.value=this.value.toUpperCase();">   
                                            </div>                                     
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_crio">  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>


                                   <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">DEPILACIÓN LASER: </label> 
                                            </div>                                         
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="depilacion2" onKeyUp="this.value=this.value.toUpperCase();">   
                                            </div>                                     
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_dep2" >  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>


                                  <div class="col-xs-12 col-md-12" >

                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                              <label for="exp">OTROS: </label> 
                                            </div>                                         
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            <div class="form-group">
                                                  <input type="text" class="form-control" id="otros2" onKeyUp="this.value=this.value.toUpperCase();">   
                                            </div>                                     
                                          </div>
                                          <div class="col-xs-12 col-md-4" style="text-align: center;">
                                            
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="fecha_otro2" >  
                                                </div>   
                                                                                  
                                          </div>
                                    
                                  </div>










                                 

                                    <div class="col-xs-12 col-md-3 pull-right" style="padding-top: 20PX;">
                                        <button type="submit" class="btn btn-primary btn-block" onclick="guardarAntDer()">
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