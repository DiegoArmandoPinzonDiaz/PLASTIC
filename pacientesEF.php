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
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px; text-align: center;">EXPLORACI&Oacute;N F&Iacute;SICA INICIAL </h1>
                                    </div>
                                </div>

                                </br>

                                <div class="row">
                                     <div class="panel-heading">
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">SIGNOS VITALES: </h1>
                                    </div>
                                </div>





                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: right;">
                                          <LABEL>FC:</LABEL>                                 
                                    </div>
                                    <div class="col-xs-12 col-md-2" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                          <input type="number" min="60" max="110" class="form-control" id="fc" onblur="validarfc()">                                  
                                    </div>
                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: left;">
                                          <LABEL>X MIN</LABEL>                                 
                                    </div>


                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: right;">
                                          <LABEL>FR:</LABEL>                                 
                                    </div>
                                    <div class="col-xs-12 col-md-2" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                          <input type="number" min="8" max="20" class="form-control" id="fr" onblur="validarfr()">                                  
                                    </div>
                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: left;">
                                          <LABEL>X MIN</LABEL>                                 
                                    </div>


                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: center; font-size: 13px;" id="textEF_titulos">
                                          <LABEL>TA: (DIAST&Oacute;LICA)</LABEL>                                 
                                    </div>
                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                          <input type="number" class="form-control" id="ta">                                  
                                    </div>
                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: center; font-size: 13px;" id="textEF_titulos">
                                          <LABEL>TA: (SIST&Oacute;LICA)</LABEL>                                 
                                    </div>
                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                          <input type="number" class="form-control" id="ta2">                                  
                                    </div>

                                    <div class="row"></div>


                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: right;">
                                          <LABEL>TEMP:</LABEL>                                 
                                    </div>
                                    <div class="col-xs-12 col-md-2" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                          <input type="number" class="form-control" id="temp">                                  
                                    </div>
                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: left;">
                                          <LABEL>&ordm;C</LABEL>                                 
                                    </div>


                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: right;">
                                          <LABEL>PESO:</LABEL>                                 
                                    </div>
                                    <div class="col-xs-12 col-md-2" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)" onblur="validarIMC()">
                                          <input type="number" class="form-control" id="peso">                                  
                                    </div>
                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: left;">
                                          <LABEL>Kg</LABEL>                                 
                                    </div>


                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: right;">
                                          <LABEL>TALLA:</LABEL>                                 
                                    </div>
                                    <div class="col-xs-12 col-md-2" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="talla" onblur="validartalla()">                                  
                                    </div>
                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: left;">
                                          <LABEL>Metros</LABEL>                                 
                                    </div>



                                    <div class="row"></div>

                                    <div class="col-xs-12 col-md-1" style="padding-top: 20PX; text-align: right;">
                                          <LABEL>IMC:</LABEL>                                 
                                    </div>
                                    <div class="col-xs-12 col-md-2" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                          <input type="text" class="form-control" id="imc" disabled>                                  
                                    </div>




</BR></BR></BR>

<hr>


                                    <div class="col-xs-12 col-md-12" style="padding-top: 20PX;" >


                                    <!--<div class="col-xs-12 col-md-6">-->

                                            <div class="col-xs-12 col-md-3" style="display: none;">
                                                <label>HABITUS EXTERIOR:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-9">
                                                <textarea rows="3" class="form-control" id="habitus" onblur="this.value=this.value.toUpperCase();" style="display: none;"></textarea>
                                            </div>  </BR>
                                            <div class="col-xs-12 col-md-3">
                                                <label>INSPECCI&Oacute;N GENERAL:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                                <textarea rows="3" class="form-control" id="examen" onblur="this.value=this.value.toUpperCase();"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <button class="btn btn-primary btn-block" onclick="borrar1()">
                                                    <span class="fas fa-eraser" aria-hidden="true"></span>
                                                    &nbsp;Borrar
                                                </button>
                                            </div>  </BR></BR></BR></BR>

                                            <div class="col-xs-12 col-md-3">
                                                <label>CR&Aacute;NEO:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                                <textarea rows="3" class="form-control" id="cabeza" onblur="this.value=this.value.toUpperCase();"></textarea>
                                            </div> 
                                            <div class="col-xs-12 col-md-1">
                                                <button class="btn btn-primary btn-block" onclick="borrar2()">
                                                    <span class="fas fa-eraser" aria-hidden="true"></span>
                                                    &nbsp;Borrar
                                                </button>
                                            </div> </BR></BR></BR></BR>

                                            <div class="col-xs-12 col-md-3">
                                                <label>CUELLO:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                                <textarea rows="3" class="form-control" id="cuello" onblur="this.value=this.value.toUpperCase();"></textarea>
                                            </div> 
                                            <div class="col-xs-12 col-md-1">
                                                <button class="btn btn-primary btn-block" onclick="borrar3()">
                                                    <span class="fas fa-eraser" aria-hidden="true"></span>
                                                    &nbsp;Borrar
                                                </button>
                                            </div> </BR></BR></BR></BR>

                                            <div class="col-xs-12 col-md-3">
                                                <label>T&Oacute;RAX:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                                <textarea rows="3" class="form-control" id="torax" onblur="this.value=this.value.toUpperCase();"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <button class="btn btn-primary btn-block" onclick="borrar4()">
                                                    <span class="fas fa-eraser" aria-hidden="true"></span>
                                                    &nbsp;Borrar
                                                </button>
                                            </div>  </BR></BR></BR></BR>

                                            <div class="col-xs-12 col-md-3">
                                                <label>ABDOMEN:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                                <textarea rows="3" class="form-control" id="abdomen" onblur="this.value=this.value.toUpperCase();"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <button class="btn btn-primary btn-block" onclick="borrar5()">
                                                    <span class="fas fa-eraser" aria-hidden="true"></span>
                                                    &nbsp;Borrar
                                                </button>
                                            </div>  </BR></BR></BR></BR>

                                            <div class="col-xs-12 col-md-3">
                                                <label>GENITALES:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                                <textarea rows="3" class="form-control" id="genitales" onblur="this.value=this.value.toUpperCase();"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <button class="btn btn-primary btn-block" onclick="borrar8()">
                                                    <span class="fas fa-eraser" aria-hidden="true"></span>
                                                    &nbsp;Borrar
                                                </button>
                                            </div>  </BR></BR></BR></BR>

                                            <div class="col-xs-12 col-md-3" id="textEF_titulos_ext">
                                                <label>EXTREMIDADES SUPERIORES:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                                <textarea rows="3" class="form-control" id="extsup" onblur="this.value=this.value.toUpperCase();"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-md-1">
                                                <button class="btn btn-primary btn-block" onclick="borrar6()">
                                                    <span class="fas fa-eraser" aria-hidden="true"></span>
                                                    &nbsp;Borrar
                                                </button>
                                            </div>  </BR></BR></BR></BR>

                                            <div class="col-xs-12 col-md-3" id="textEF_titulos_ext">
                                                <label>EXTREMIDADES INFERIORES:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                                <textarea rows="3" class="form-control" id="extinf" onblur="this.value=this.value.toUpperCase();"></textarea>
                                            </div> 
                                            <div class="col-xs-12 col-md-1">
                                                <button class="btn btn-primary btn-block" onclick="borrar7()">
                                                    <span class="fas fa-eraser" aria-hidden="true"></span>
                                                    &nbsp;Borrar
                                                </button>
                                            </div> </BR></BR></BR></BR>

                                            <div class="col-xs-12 col-md-3" id="textEF_titulos_ext">
                                                <label>SISTEMA NERVIOSOS:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                                <textarea rows="3" class="form-control" id="sisner" onblur="this.value=this.value.toUpperCase();"></textarea>
                                            </div> 
                                            <div class="col-xs-12 col-md-1">
                                                <button class="btn btn-primary btn-block" onclick="borrar9()">
                                                    <span class="fas fa-eraser" aria-hidden="true"></span>
                                                    &nbsp;Borrar
                                                </button>
                                            </div> 

                                            </BR></BR></BR></BR></BR>

                                  </div>




</BR></BR></BR>
</BR></BR>
<hr>



                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX; font-size: 15px;" id="textAGO_titulos">

                                        
                                        <div class="col-xs-12 col-md-6">

                                            <div class="col-xs-12 col-md-4" style=" font-size: 16px;">
                                                <label>FITZPATRICK:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-1" style="text-align: center; width: 10%;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="fi1">    </br>                                
                                                  <label class="form-check-label" for="fi1">&nbsp;I</label>
                                                </div>

                                            </div>   

                                            <div class="col-xs-12 col-md-1" style="text-align: center; width: 10%;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="fi2">    </br>                                
                                                  <label class="form-check-label" for="fi2">&nbsp;II</label>
                                                </div>

                                            </div>   

                                            <div class="col-xs-12 col-md-1" style="text-align: center; width: 10%;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="fi3">     </br>                               
                                                  <label class="form-check-label" for="fi3">III</label>
                                                </div>

                                            </div> 
                                            <div class="col-xs-12 col-md-1" style="text-align: center; width: 10%;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="fi4">    </br>                                
                                                  <label class="form-check-label" for="fi4">IV</label>
                                                </div>

                                            </div>   

                                            <div class="col-xs-12 col-md-1" style="text-align: center; width: 10%;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="fi5">    </br>                                
                                                  <label class="form-check-label" for="fi5">&nbsp;V</label>
                                                </div>

                                            </div>   

                                            <div class="col-xs-12 col-md-1" style="text-align: center; width: 10%;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="fi6">      </br>                              
                                                  <label class="form-check-label" for="fi6">VI</label>
                                                </div>

                                            </div>                                
                                     
                                        </div>


                                        <div class="col-xs-12 col-md-6">

                                            <div class="col-xs-12 col-md-4"  style=" font-size: 16px;">
                                                <label>GLOGAU TIPO:</label>
                                            </div>
                                            <div class="col-xs-12 col-md-2" style="text-align: center;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="gt1">   </br>                                 
                                                  <label class="form-check-label" for="gt1">&nbsp;&nbsp;I</label>
                                                </div>

                                            </div>   

                                            <div class="col-xs-12 col-md-2" style="text-align: center;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="gt2">    </br>                                
                                                  <label class="form-check-label" for="gt2">&nbsp;&nbsp;II</label>
                                                </div>

                                            </div>   

                                            <div class="col-xs-12 col-md-2" style="text-align: center;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="gt3">   </br>                                
                                                  <label class="form-check-label" for="gt3">&nbsp;&nbsp;III</label>
                                                </div>

                                            </div> 
                                            <div class="col-xs-12 col-md-2" style="text-align: center;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="gt4">      </br>                              
                                                  <label class="form-check-label" for="gt4">&nbsp;&nbsp;IV</label>
                                                </div>

                                            </div>   
                             
                                     
                                        </div>

                                     
                                  </div>
</br>
</br></br>
</br>


                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX; font-size: 15px;" id="textEF_titulos">
                                        
                                        <div class="col-xs-12 col-md-2">
                                            <div class="col-xs-12 col-md-12"  style=" font-size: 16px;">
                                                <label>TIPO DE ROSTRO:</label>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-1" style="text-align: center; width: 11%;">
                                                
                                            <div class="form-check">          
                                              <input class="form-check-input" type="radio" value="" id="tr1">   </br>                             
                                              <label class="form-check-label" for="tr1">&nbsp;REDONDA</label>
                                            </div>

                                        </div>   

                                        <div class="col-xs-12 col-md-1" style="text-align: center; width: 11%;">
                                                
                                            <div class="form-check">          
                                              <input class="form-check-input" type="radio" value="" id="tr2">    </br>                               
                                              <label class="form-check-label" for="tr2">ALARGADO</label>
                                            </div>

                                        </div>  

                                        <div class="col-xs-12 col-md-1" style="text-align: center; width: 11%;">
                                                
                                            <div class="form-check">          
                                              <input class="form-check-input" type="radio" value="" id="tr3">    </br>                               
                                              <label class="form-check-label" for="tr3">&nbsp;DIAMANTE</label>
                                            </div>

                                        </div> 

                                        <div class="col-xs-12 col-md-1" style="text-align: center; width: 11%;">
                                                
                                            <div class="form-check">          
                                              <input class="form-check-input" type="radio" value="" id="tr4">     </br>                              
                                              <label class="form-check-label" for="tr4">&nbsp;&nbsp;OVALADO</label>
                                            </div>

                                        </div> 

                                        <div class="col-xs-12 col-md-1" style="text-align: center; width: 11%;">
                                                
                                            <div class="form-check">          
                                              <input class="form-check-input" type="radio" value="" id="tr5">   </br>                                
                                              <label class="form-check-label" for="tr5">&nbsp;TRIANGULO</label>
                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-md-1" style=" text-align: center; width: 11%;">
                                                
                                            <div class="form-check">          
                                              <input class="form-check-input" type="radio" value="" id="tr6">   </br>                                
                                              <label class="form-check-label" for="tr6">&nbsp;TRIANGULO INVERTIDO</label>
                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-md-1" style="text-align: center; width: 11%;">
                                                
                                            <div class="form-check">          
                                              <input class="form-check-input" type="radio" value="" id="tr7">   </br>                                
                                              <label class="form-check-label" for="tr7">&nbsp;&nbsp;CUADRADO</label>
                                            </div>

                                        </div>



                                  </div>




                                  <div class="col-xs-12 col-md-12" style="padding-top: 20PX; font-size: 15px;" id="textEF_titulos">


                                    <!--<div class="col-xs-12 col-md-6">-->
                                      <div class="col-xs-12 col-md-2">
                                            <div class="col-xs-12 col-md-12"  style=" font-size: 16px;">
                                               <label>TIPO DE PIEL:</label>
                                            </div>
                                        </div>

                                            <div class="col-xs-12 col-md-1" style="text-align: center;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="tp1">    </br>                               
                                                  <label class="form-check-label" for="tp1">&nbsp;&nbsp;NORMAL</label>
                                                </div>

                                            </div>   

                                            <div class="col-xs-12 col-md-1" style="text-align: center;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="tp2">     </br>                              
                                                  <label class="form-check-label" for="tp2">&nbsp;&nbsp;SECA</label>
                                                </div>

                                            </div>   

                                            <div class="col-xs-12 col-md-1" style="text-align: center;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="tp3">    </br>                               
                                                  <label class="form-check-label" for="tp3">&nbsp;&nbsp;GRASA</label>
                                                </div>

                                            </div> 
                                            <div class="col-xs-12 col-md-1" style="text-align: center;">
                                                
                                                <div class="form-check">          
                                                  <input class="form-check-input" type="radio" value="" id="tp4">   </br>                                
                                                  <label class="form-check-label" for="tp4">&nbsp;&nbsp;MIXTA</label>
                                                </div>

                                            </div>   
                                    <!--</div>-->

                                    <div class="col-xs-12 col-md-3"  style=" text-align: center; font-size: 15px;">
                                        <LABEL>LESIONES DERMATOL&Oacute;GICAS:</LABEL>
                                    </div>
                                    <DIV class="col-xs-12 col-md-3">
                                        <input type="text" class="form-control" id="lesiones" onKeyUp="this.value=this.value.toUpperCase();">
                                    </DIV>

                                  </div>







                                    <div class="col-xs-12 col-md-3 pull-right" style="padding-top: 20PX;">
                                        <button class="btn btn-primary btn-block" onclick="guardarEF()">
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