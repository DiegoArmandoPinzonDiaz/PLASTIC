
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

<script type="text/javascript">
        function load()
            {
                setTimeout("window.open(self.location, '_self');", 300000);
            }
</script>


</head>
<body onload="load()">
   

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
                                        <h3 class="panel-title">MODULO DE PACIENTES </h3>
                                    </div>
                                    <div class="panel-body">




<?php

//session_start();
 if(isset($_GET["logout"])){
  session_destroy();
 }


//https://drive.google.com/drive/folders/1UsC2H6HSHrxBJZnVZ2gNRrStnzqgsQ4y?usp=sharing
//https://drive.google.com/drive/folders/0BxkLmQs_YN_vZ05adFJEVGVLa2c?usp=sharing

//$client->setAccessToken($_SESSION['access_token']);
//$service = new Google_Service_Drive($client);

if (!$client->getAccessToken() && !isset($_SESSION['access_token'])) {
        $authUrl = $client->createAuthUrl();
        //print "<button href='$authUrl' type='submit' class='login btn btn-success pull-left' >Conectar</button>";
         print "<a class='login' href='$authUrl'>Conectar</a>";
    } 
else{

print "<a class='logout' href='".$_SERVER['PHP_SELF']."?logout=1'>Salir</a><br>";

            global $client;
            $client->setAccessToken($_SESSION['access_token']);
            $service = new Google_Service_Drive($client);
            $results = $service->files->listFiles(array('pageSize' => 1000, 'q' => "'0BxkLmQs_YN_vZ05adFJEVGVLa2c' in parents"));

            if (count($results->getFiles()) == 0) {
                print "Lo sentimos pero esta cuenta de Gmail no esta habilitada para crear un nuevo paciente.\n";
              } else {
                

//print $_SESSION['access_token'];

                                            
                                       
                                           /* <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label for='no'>No. Folio:</label>                                                   
                                                    <input type='text' class='form-control' id="no" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <label for="fecha_nac">Fecha de Nacimiento: </label>                                           
                                                    <input type="text" class="form-control" id="datepicker" onChange="validarpaciente()" onKeyUp="validarfecha()" onkeypress="return isNumberKey(event)" maxlength="10" size="10" placeholder="dd/mm/aaaa">                                
                                                </div>

                                                <div class="form-group">
                                                    <label for="nombre">Nombre: </label>
                                                    <input type="text" class="form-control" id="nombrep" placeholder="Nombre del paciente" onKeyUp="this.value=this.value.toUpperCase();">
                                                </div>

                                                <div class="form-group">
                                                    <label for="apellidop">Apellido Paterno: </label>
                                                    <input type="text" class="form-control" id="apellidop" placeholder="Apellido Paterno" onKeyUp="this.value=this.value.toUpperCase();">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="apellidom">Apellido Materno: </label>
                                                    <input type="text" class="form-control" id="apellidom" placeholder="Apellido Materno" onKeyUp="this.value=this.value.toUpperCase();">
                                                </div>

                                                <div class="form-group">
                                                    <label for="tel">Telefono:  (Número de 10 dígitos)</label>
                                                    <input type="text" class="form-control" id="tel" placeholder="Telefono del paciente" onkeypress="return isNumberKey(event)" onblur="validartelefono()">
                                                </div>

                                                <div class="form-group">
                                                    <label for="cel">Celular:  (Número de 10 dígitos)</label>
                                                    <input type="text" class="form-control" id="cel" placeholder="Celular del paciente" onkeypress="return isNumberKey(event)" title="Recuerda que para números locales comienzan con 044 y para no locales 045. Con una longitud total de 10 digitos." onblur="validarcelular()">
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Dirección de correo: </label>
                                                    <input type="email" class="form-control" id="email" placeholder="Dirección electrónica" onblur="validarcorreo()" onKeyUp="this.value=this.value.toLowerCase();">
                                                </div>

                                                <button type="submit" class="btn btn-success pull-right" onclick="guardar_pac()">Agregar Paciente</button>
                                            </div>*/


                                    print "         <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label for='no'>No. Folio:</label>                                                   
                                                    <input type='text' class='form-control' id='no' disabled>
                                                </div>

                                                <div class='form-group'>
                                                    <label for='fecha_nac'>Fecha de Nacimiento: </label>                                           
                                                    <input type='text' class='form-control' id='datepicker' onChange='validarpaciente()' onKeyUp='validarfecha()' onkeypress='return isNumberKey(event)' maxlength='10' size='10' placeholder='dd/mm/aaaa'>                                
                                                </div>

                                                <div class='form-group'>
                                                    <label for='nombre'>Nombre: </label>
                                                    <input type='text' class='form-control' id='nombrep' placeholder='Nombre del paciente' onKeyUp='this.value=this.value.toUpperCase();'>
                                                </div>

                                                <div class='form-group'>
                                                    <label for='apellidop'>Apellido Paterno: </label>
                                                    <input type='text' class='form-control' id='apellidop' placeholder='Apellido Paterno' onKeyUp='this.value=this.value.toUpperCase();'>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label for='apellidom'>Apellido Materno: </label>
                                                    <input type='text' class='form-control' id='apellidom' placeholder='Apellido Materno' onKeyUp='this.value=this.value.toUpperCase();'>
                                                </div>

                                                <div class='form-group'>
                                                    <label for='tel'>Telefono:  (N&uacute;mero de 10 d&iacute;gitos)</label>
                                                    <input type='text' class='form-control' id='tel' placeholder='Telefono del paciente' onkeypress='return isNumberKey(event)' onblur='validartelefono()'>
                                                </div>

                                                <div class='form-group'>
                                                    <label for='cel'>Celular:  (N&uacute;mero de 10 d&iacute;gitos)</label>
                                                    <input type='text' class='form-control' id='cel' placeholder='Celular del paciente' onkeypress='return isNumberKey(event)' title='Recuerda que para números locales comienzan con 044 y para no locales 045. Con una longitud total de 10 digitos.' onblur='validarcelular()'>
                                                </div>

                                                <div class='form-group'>
                                                    <label for='email'>Direcci&oacute;n de correo: </label>
                                                    <input type='email' class='form-control' id='email' placeholder='Direcci&oacute;n electr&oacute;nica' onblur='validarcorreo()' onKeyUp='this.value=this.value.toLowerCase();'>
                                                </div>

                                                <button type='submit' class='btn btn-success pull-right' onclick='guardar_pac()'>Agregar Paciente</button>
                                            </div>";
                                        }


}
                                        
?>


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
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style="color: #fff;">PACIENTES CON ESTA FECHA DE NACIMIENTO</h4>
                        </div>
                        <div class="modal-body">
                                                <div class="row">
                                                    <div id="agenda_results" class="col-xs-12 table-responsive">

                                                        <table class="table table-hover table-condensed table-responsive table-bordered table-scroll">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>FOLIO</th>
                                                                                <th>NOMBRE</th>
                                                                                <th>APELLIDO PATERNO</th>
                                                                                <th>APELLIDO MATERNO</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="data_inv"></tbody>


                                                        </table>
                                                    </div>
                                                </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>


    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funcion_sis.js"></script>

</body>
</html>