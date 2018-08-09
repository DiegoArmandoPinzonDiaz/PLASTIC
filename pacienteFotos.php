
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

    <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
      <script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

      <script>
          $( function() {
            $( "#fecha_1" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_2" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_3" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_4" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_5" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_6" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
      });

      </script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.61.0-2013.06.06/jquery.blockUI.min.js"></script>


</head>
<body onload="init();">
   

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
                                     <div class="panel-heading" style="text-align: center;">
                                        <h1 class="panel-title" style="color: #337ab7; font-size: 25px;">SEGUIMIENTO FOTOGR&Aacute;FICO DEL PACIENTE: </h1>
                                    </div>
                                </div>

<div class="row" >
                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;" >
                <label >PERFIL DERECHO</label>
                       
                      <img id="imgSalida-1_1" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>                            
                      <button type="button" class="btn btn-primary" id="boton1_1">Selec. imagen</button>
                      <input type="file" id="my_file1_1"  style="display: none;" accept="image/*"/>

                      <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto1(this)" style="margin: 5px;">Tomar Foto</button>
                      <canvas id="myCanvas" width="1000" height="1000"></canvas>

                </div>
                   

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >3/4 DERECHO</label>
                       <img id="imgSalida-1_2" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton1_2">Selec. imagen</button>
                       <input type="file" id="my_file1_2"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto2(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >FRENTE</label>
                       <img id="imgSalida-1_3" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton1_3">Selec. imagen</button>
                       <input type="file" id="my_file1_3"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto3(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >3/4 IZQUIERDO</label>
                       <img id="imgSalida-1_4" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>    </br></br>             
                       <button type="button" class="btn btn-primary" id="boton1_4">Selec. imagen</button>
                       <input type="file" id="my_file1_4"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto4(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >PERFIL IZQUIER.</label>
                       <img id="imgSalida-1_5" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>    </br></br>             
                       <button type="button" class="btn btn-primary" id="boton1_5">Selec. imagen</button>
                       <input type="file" id="my_file1_5"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto5(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

</div>
<div class="col-xs-12 col-md-3" style="margin-top: 10px;">
  <div class="form-group">  
    <input type="text" class="form-control" id="fecha_1" placeholder="Fecha">
  </div>
</div>
<div class="col-xs-12 col-md-7" style="margin-top: 10px;">
  <div class="form-group">  
    <input type="text" class="form-control" id="descripcion_1" placeholder="Descripci&oacute;n" onKeyUp="this.value=this.value.toUpperCase();">
  </div>
</div>
<div class="col-xs-12 col-md-2" style="margin-top: 10px;">
  <div class="form-group">  
    <button type="button" class="form-control btn btn-primary" id="boton_1" onclick="guardarFotos1()">GUARDAR</button>
  </div>
</div>

</br></br><hr>

<div class="row" >
                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;" >
                <label >PERFIL DERECHO</label>
                       
                    <img id="imgSalida-2_1" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton2_1">Selec. imagen</button>
                       <input type="file" id="my_file2_1"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto6(this)" style="margin: 5px;">Tomar Foto</button>

                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >3/4 DERECHO</label>
                       <img id="imgSalida-2_2" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton2_2">Selec. imagen</button>
                       <input type="file" id="my_file2_2"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto7(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >FRENTE</label>
                       <img id="imgSalida-2_3" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton2_3">Selec. imagen</button>
                       <input type="file" id="my_file2_3"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto8(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >3/4 IZQUIERDO</label>
                       <img id="imgSalida-2_4" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton2_4">Selec. imagen</button>
                       <input type="file" id="my_file2_4"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto9(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >PERFIL IZQUIER.</label>
                       <img id="imgSalida-2_5" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton2_5">Selec. imagen</button>
                       <input type="file" id="my_file2_5"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto10(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

</div>
<div class="col-xs-12 col-md-3" style="margin-top: 10px;">
  <div class="form-group">  
    <input type="text" class="form-control" id="fecha_2" placeholder="Fecha">
  </div>
</div>
<div class="col-xs-12 col-md-7" style="margin-top: 10px;">
  <div class="form-group">  
    <input type="text" class="form-control" id="descripcion_2" placeholder="Descripci&oacute;n" onKeyUp="this.value=this.value.toUpperCase();">
  </div>
</div>
<div class="col-xs-12 col-md-2" style="margin-top: 10px;">
  <div class="form-group">  
    <button type="button" class="form-control btn btn-primary" id="boton_2" onclick="guardarFotos2()">GUARDAR</button>
  </div>
</div>

</br></br><hr>

<div class="row" >
                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;" >
                <label >PERFIL DERECHO</label>
                       
                    <img id="imgSalida-3_1" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>    </br></br>             
                       <button type="button" class="btn btn-primary" id="boton3_1">Selec. imagen</button>
                       <input type="file" id="my_file3_1"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto11(this)" style="margin: 5px;">Tomar Foto</button>

                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >3/4 DERECHO</label>
                       <img id="imgSalida-3_2" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>  </br></br>               
                       <button type="button" class="btn btn-primary" id="boton3_2">Selec. imagen</button>
                       <input type="file" id="my_file3_2"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto12(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >FRENTE</label>
                       <img id="imgSalida-3_3" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton3_3">Selec. imagen</button>
                       <input type="file" id="my_file3_3"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto13(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >3/4 IZQUIERDO</label>
                       <img id="imgSalida-3_4" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton3_4">Selec. imagen</button>
                       <input type="file" id="my_file3_4"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto14(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin: 15px; height: 250px;">
                <label >PERFIL IZQUIER.</label>
                       <img id="imgSalida-3_5" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton3_5">Selec. imagen</button>
                       <input type="file" id="my_file3_5"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto15(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

</div>
<div class="col-xs-12 col-md-3" style="margin-top: 30px;">
  <div class="form-group">  
  <input type="text" class="form-control" id="fecha_3" placeholder="Fecha">
</div>
</div>
<div class="col-xs-12 col-md-7" style="margin-top: 30px;">
  <div class="form-group">  
  <input type="text" class="form-control" id="descripcion_3" placeholder="Descripci&oacute;n" onKeyUp="this.value=this.value.toUpperCase();">
</div>
</div>
<div class="col-xs-12 col-md-2" style="margin-top: 30px;">
  <div class="form-group">  
  <button type="button" class="form-control btn btn-primary" id="boton_3" onclick="guardarFotos3()">GUARDAR</button>
</div>
</div>


</br></br><hr>

<div class="row" >
                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;" >
                <label >PERFIL DERECHO</label>                       
                       <img id="imgSalida-4_1" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>    </br></br>             
                       <button type="button" class="btn btn-primary" id="boton4_1">Selec. imagen</button>
                       <input type="file" id="my_file4_1"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto16(this)" style="margin: 5px;">Tomar Foto</button>

                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >3/4 DERECHO</label>
                       <img id="imgSalida-4_2" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>    </br></br>             
                       <button type="button" class="btn btn-primary" id="boton4_2">Selec. imagen</button>
                       <input type="file" id="my_file4_2"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto17(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >FRENTE</label>
                       <img id="imgSalida-4_3" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>    </br></br>             
                       <button type="button" class="btn btn-primary" id="boton4_3">Selec. imagen</button>
                       <input type="file" id="my_file4_3"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto18(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >3/4 IZQUIERDO</label>
                       <img id="imgSalida-4_4" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>    </br></br>             
                       <button type="button" class="btn btn-primary" id="boton4_4">Selec. imagen</button>
                       <input type="file" id="my_file4_4"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto19(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >PERFIL IZQUIER.</label>
                       <img id="imgSalida-4_5" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>    </br></br>             
                       <button type="button" class="btn btn-primary" id="boton4_5">Selec. imagen</button>
                       <input type="file" id="my_file4_5"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto20(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >POSTERIOR</label>
                       <img id="imgSalida-4_6" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>    </br></br>             
                       <button type="button" class="btn btn-primary" id="boton4_6">Selec. imagen</button>
                       <input type="file" id="my_file4_6"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto21(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

</div>
<div class="col-xs-12 col-md-3" style="margin-top: 30px;">
  <div class="form-group">  
  <input type="text" class="form-control" id="fecha_4" placeholder="Fecha">
</div>
</div>
<div class="col-xs-12 col-md-7" style="margin-top: 30px;">
  <div class="form-group">  
  <input type="text" class="form-control" id="descripcion_4" placeholder="Descripci&oacute;n" onKeyUp="this.value=this.value.toUpperCase();">
</div>
</div>
<div class="col-xs-12 col-md-2" style="margin-top: 30px;">
  <div class="form-group">  
  <button type="button" class="form-control btn btn-primary" id="boton_4" onclick="guardarFotos4()">GUARDAR</button>
</div>
</div>


</br></br><hr>

<div class="row" >
                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;" >
                <label >PERFIL DERECHO</label>                       
                       <img id="imgSalida-5_1" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton5_1">Selec. imagen</button>
                       <input type="file" id="my_file5_1"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFot22(this)" style="margin: 5px;">Tomar Foto</button>

                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >3/4 DERECHO</label>
                       <img id="imgSalida-5_2" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton5_2">Selec. imagen</button>
                       <input type="file" id="my_file5_2"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto23(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >FRENTE</label>
                       <img id="imgSalida-5_3" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton5_3">Selec. imagen</button>
                       <input type="file" id="my_file5_3"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto24(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >3/4 IZQUIERDO</label>
                       <img id="imgSalida-5_4" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>  </br></br>               
                       <button type="button" class="btn btn-primary" id="boton5_4">Selec. imagen</button>
                       <input type="file" id="my_file5_4"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto25(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >PERFIL IZQUIER.</label>
                       <img id="imgSalida-5_5" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>  </br></br>             
                       <button type="button" class="btn btn-primary" id="boton5_5">Selec. imagen</button>
                       <input type="file" id="my_file5_5"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto26(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >POSTERIOR</label>
                       <img id="imgSalida-5_6" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>  </br></br>             
                       <button type="button" class="btn btn-primary" id="boton5_6">Selec. imagen</button>
                       <input type="file" id="my_file5_6"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto27(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

</div>

<div class="col-xs-12 col-md-3" style="margin-top: 30px;">
  <div class="form-group">  
  <input type="text" class="form-control" id="fecha_5" placeholder="Fecha">
</div>
</div>
<div class="col-xs-12 col-md-7" style="margin-top: 30px;">
  <div class="form-group">  
  <input type="text" class="form-control" id="descripcion_5" placeholder="Descripci&oacute;n" onKeyUp="this.value=this.value.toUpperCase();">
</div>
</div> 
<div class="col-xs-12 col-md-2" style="margin-top: 30px;">
  <div class="form-group">  
  <button type="button" class="form-control btn btn-primary" id="boton_5" onclick="guardarFotos5()">GUARDAR</button>
</div>
</div>



</br></br><hr>

<div class="row" >
                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;" >
                <label >PERFIL DERECHO</label>                       
                       <img id="imgSalida-6_1" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton6_1">Selec. imagen</button>
                       <input type="file" id="my_file6_1"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto28(this)" style="margin: 5px;">Tomar Foto</button>

                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >3/4 DERECHO</label>
                       <img id="imgSalida-6_2" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton6_2">Selec. imagen</button>
                       <input type="file" id="my_file6_2"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto29(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >FRENTE</label>
                       <img id="imgSalida-6_3" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>   </br></br>              
                       <button type="button" class="btn btn-primary" id="boton6_3">Selec. imagen</button>
                       <input type="file" id="my_file6_3"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto30(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >3/4 IZQUIERDO</label>
                       <img id="imgSalida-6_4" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>  </br></br>               
                       <button type="button" class="btn btn-primary" id="boton6_4">Selec. imagen</button>
                       <input type="file" id="my_file6_4"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto31(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >PERFIL IZQUIER.</label>
                       <img id="imgSalida-6_5" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>  </br></br>             
                       <button type="button" class="btn btn-primary" id="boton6_5">Selec. imagen</button>
                       <input type="file" id="my_file6_5"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto32(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

                <div class="col-xs-12 col-md-2" style="text-align: center; margin-top: 15px; height: 250px;">
                <label >POSTERIOR</label>
                       <img id="imgSalida-6_6" width="100%" height="60%" align="middle" src="" onclick="ampliarImagen(this)"/>  </br></br>             
                       <button type="button" class="btn btn-primary" id="boton6_6">Selec. imagen</button>
                       <input type="file" id="my_file6_6"  style="display: none;" accept="image/*"/>

                       <button type="button" class="btn btn-primary" id="boton1_1_T" onclick="tomarFoto33(this)" style="margin: 5px;">Tomar Foto</button>
                </div>

</div>


<div class="col-xs-12 col-md-3" style="margin-top: 30px;">
  <div class="form-group">  
  <input type="text" class="form-control" id="fecha_6" placeholder="Fecha">
</div>
</div>
<div class="col-xs-12 col-md-7" style="margin-top: 30px;">
  <div class="form-group">  
  <input type="text" class="form-control" id="descripcion_6" placeholder="Descripci&oacute;n" onKeyUp="this.value=this.value.toUpperCase();">
</div>
</div> 
<div class="col-xs-12 col-md-2" style="margin-top: 30px;">
  <div class="form-group">  
  <button type="button" class="form-control btn btn-primary" id="boton_5" onclick="guardarFotos6()">GUARDAR</button>
</div>
</div>

</br></br><hr> </br></br></br></br></br></br></br>


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
                  <div class="modal fade" id="myModal" role="dialog">

                    <img id="imgSalida-modal" width="98%" height="98%" align="middle" src="" />
                    <!--<div class="modal-dialog">
                    
                      
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; text-align: center; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style="color: #fff;">VALIDACIÓN DE IMAGEN</h4>
                        </div>
                        <div class="modal-body">
                                              
                              <div class="col-xs-12 col-md-12" style="text-align: center;">
                                <div class="form-group">
                                       <img id="imgSalida-modal" width="100%" height="100%" align="middle" src="" />
                                </div>
                              </div>
                                                   
                                               
                        </div>
                      </div>
                      
                    </div>-->
                  </div>






                     <!-- Modal 1-->
                
                <div class="modal fade" id="myModal1" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot1(this);" width=90% height=90% id="video1" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot1()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                   <!-- Modal 2-->
                
                <div class="modal fade" id="myModal2" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot2(this);" width=90% height=90% id="video2" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot2()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                 <!-- Modal 3-->
                
                <div class="modal fade" id="myModal3" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot3(this);" width=90% height=90% id="video3" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot3()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 4-->
                
                <div class="modal fade" id="myModal4" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot4(this);" width=90% height=90% id="video4" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot4()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                   <!-- Modal 5-->
                
                <div class="modal fade" id="myModal5" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video5" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 6-->
                
                <div class="modal fade" id="myModal6" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video6" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 7-->
                
                <div class="modal fade" id="myModal7" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video7" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 8-->
                
                <div class="modal fade" id="myModal8" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video8" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 9-->
                
                <div class="modal fade" id="myModal9" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video9" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 10-->
                
                <div class="modal fade" id="myModal10" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video10" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>





                     <!-- Modal 11-->
                
                <div class="modal fade" id="myModal11" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot1(this);" width=90% height=90% id="video11" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot1()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                   <!-- Modal 12-->
                
                <div class="modal fade" id="myModal12" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot2(this);" width=90% height=90% id="video12" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot2()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                 <!-- Modal 13-->
                
                <div class="modal fade" id="myModal13" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot3(this);" width=90% height=90% id="video13" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot3()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 14-->
                
                <div class="modal fade" id="myModal14" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot4(this);" width=90% height=90% id="video14" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot4()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                   <!-- Modal 15-->
                
                <div class="modal fade" id="myModal15" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video15" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 16-->
                
                <div class="modal fade" id="myModal16" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video16" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 17-->
                
                <div class="modal fade" id="myModal17" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video17" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 18-->
                
                <div class="modal fade" id="myModal18" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video18" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 19-->
                
                <div class="modal fade" id="myModal19" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video19" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 20-->
                
                <div class="modal fade" id="myModal20" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video20" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                     <!-- Modal 21-->
                
                <div class="modal fade" id="myModal21" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot1(this);" width=90% height=90% id="video21" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot1()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                   <!-- Modal 22-->
                
                <div class="modal fade" id="myModal22" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot2(this);" width=90% height=90% id="video22" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot2()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                 <!-- Modal 23-->
                
                <div class="modal fade" id="myModal23" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot3(this);" width=90% height=90% id="video23" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot3()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 24-->
                
                <div class="modal fade" id="myModal24" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot4(this);" width=90% height=90% id="video24" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot4()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                   <!-- Modal 25-->
                
                <div class="modal fade" id="myModal25" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video25" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 26-->
                
                <div class="modal fade" id="myModal26" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video26" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 27-->
                
                <div class="modal fade" id="myModal27" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video27" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 28-->
                
                <div class="modal fade" id="myModal28" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video28" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 29-->
                
                <div class="modal fade" id="myModal29" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video29" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>


                   <!-- Modal 30-->
                
                <div class="modal fade" id="myModal30" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video30" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                      <!-- Modal 31-->
                
                <div class="modal fade" id="myModal31" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video31" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                      <!-- Modal 32-->
                
                <div class="modal fade" id="myModal32" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video32" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



                      <!-- Modal 33-->
                
                <div class="modal fade" id="myModal33" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot5(this);" width=90% height=90% id="video33" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot5()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>



    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funcion_sis_pac.js"></script>
    <script type="text/javascript" src="js/funcion_fotos.js"></script>
    <script type="text/javascript" src="js/funcion_pacientes.js"></script>

</body>
</html>