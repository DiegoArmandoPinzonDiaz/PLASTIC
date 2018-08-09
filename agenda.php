

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

    <!--ESTO ES PARA EL DATEPICKER -->
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    



    <!-- htmltocanvas -->    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script>

     <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.61.0-2013.06.06/jquery.blockUI.min.js"></script> 



    <script>


          $( function() {
            $( "#fecha_1" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });     
            $( "#fecha_2" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });     
        });


          

      </script>


      <style>

          body {
            margin: 40px 10px;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
          }

          #calendar {
            max-width: 900px;
            margin: 0 auto;
          }

        </style>



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
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">MÓDULO DE AGENDA </h3>
                                    </div>
                                    <div class="panel-body">


                                                <!--<div id='calendar'></div>-->
                                                <!--<div id='datepicker'></div>-->

                                          <!--      <div class="modal fade" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title">Create new event</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <label class="col-xs-4" for="title">Event title</label>
                                                                        <input type="text" name="title" id="title" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <label class="col-xs-4" for="starts-at">Starts at</label>
                                                                        <input type="text" name="starts_at" id="starts-at" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <label class="col-xs-4" for="ends-at">Ends at</label>
                                                                        <input type="text" name="ends_at" id="ends-at" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary" id="save-event">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                        <!--            </div><!-- /.modal-dialog -->
                                       <!--         </div><!-- /.modal -->

                                            

                                            


                                            <iframe src="https://calendar.google.com/calendar/embed?src=plascticbeautymail%40gmail.com&ctz=America%2FMexico_City" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>



</br>
</br>
</br>
                                            <button id="agregar_cita" class="btn-primary" onclick="cita()">NUEVA CITA</button>
                                            <button id="agregar_cita" class="btn-primary" onclick="cita2()">EDITAR CITA</button>



<?php
        /*session_start();
        // print_r($_SESSION);
         if(isset($_GET["logout"])){
            session_destroy();
         }*/

        require_once 'calendario/vendor/autoload.php';

        /*$redirect_uri ='http://localhost:8080/calendario/calendario2/home3.php';
        
        $client = new Google_Client();
            // Get your credentials from the console
        $client->setClientId('564311536584-6087knf36n44l7q2jaak7qj3o43fv3ii.apps.googleusercontent.com');
        $client->setClientSecret('y5xcl2v427KCnxiDlB5D2Imr');
        $client->setRedirectUri($redirect_uri);
        $client->addScope('profile');
        $client->addScope(Google_Service_Calendar::CALENDAR);
        
        print_r($client->getAccessToken());
        $authUrl = $client->createAuthUrl();
        if (isset($_GET['code'])) {
          $client->authenticate($_GET['code']);
          $_SESSION['access_token'] = $client->getAccessToken();
          header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
        
        }

        if (!$client->getAccessToken() && !isset($_SESSION['access_token'])) {
                $authUrl = $client->createAuthUrl();
                print "<a class='login' href='$authUrl'>Conectar</a>";
        }  */  




     //if (!$client->getAccessToken() && !isset($_SESSION['access_token'])) {
                  $authUrl = $client->createAuthUrl();
                  print "<a class='login' href='$authUrl'>Conectar</a>";
        //}    
        
 /*  if (isset($_SESSION['access_token'])) {

       //print "<a class='logout' href='".$_SERVER['PHP_SELF']."?logout=1'>Salir</a><br>";
      $client->setAccessToken($_SESSION['access_token']);
      $service = new Google_Service_Calendar($client);
      $results = $service->events->listEvents('plascticbeautymail@gmail.com', array());

            if (count($results->getItems()) == 0) {

              print "<h3>No hay Eventos</h3>";

            } else {

                  print "<h3>Proximos Eventos</h3>";
                  echo "<table border=1>";
                  foreach ($results->getItems() as $event) {
                    echo "<tr>";
                    $start = $event->start->dateTime;
                    if (empty($start)) {
                      $start = $event->start->date;                   
                    }
                    $end = $event->end->dateTime;
                    if (empty($end)) {
                      $end = $event->end->date;                   
                    }
                    echo "<td>".$event->getSummary()."</td>";
                    echo "<td>".$start."</td>";
                    echo "<td>".$end."</td>";
                    echo "</tr>";
                  }
                    echo "<table>";

            }
        }

*/


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
                  <div class="modal fade" id="agregarCita" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">DATOS DE REGISTRO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_1" placeholder="Fecha">
                                                    
                                                </div>

                                               <div class="form-group"> 

                                                    <div class="row">

                                                        <div class="col-xs-12 col-md-6">

                                                             <label>HORA INICIAL:</label>

                                                        </div>


                                                        <div class="col-xs-12 col-md-6">

                                                             <select id="hora1" class="seleccion form-control" style="text-align: center;">
                                                                      <option>00:00</option>
                                                                      <option>00:30</option>
                                                                      <option>01:00</option>
                                                                      <option>01:30</option>
                                                                      <option>02:00</option>
                                                                      <option>02:30</option>
                                                                      <option>03:00</option>
                                                                      <option>03:30</option>
                                                                      <option>04:00</option>
                                                                      <option>04:30</option>
                                                                      <option>05:00</option>
                                                                      <option>05:30</option>
                                                                      <option>06:00</option>
                                                                      <option>06:30</option>
                                                                      <option>07:00</option>
                                                                      <option>07:30</option>
                                                                      <option>08:00</option>
                                                                      <option>08:30</option>
                                                                      <option>09:00</option>
                                                                      <option>09:30</option>
                                                                      <option>10:00</option>
                                                                      <option>10:30</option>
                                                                      <option>11:00</option>
                                                                      <option>11:30</option>
                                                                      <option>12:00</option>
                                                                      <option>12:30</option>
                                                                      <option>13:00</option>
                                                                      <option>13:30</option>
                                                                      <option>14:00</option>
                                                                      <option>14:30</option>
                                                                      <option>15:00</option>
                                                                      <option>15:30</option>
                                                                      <option>16:00</option>
                                                                      <option>16:30</option>
                                                                      <option>17:00</option>
                                                                      <option>17:30</option>
                                                                      <option>18:00</option>
                                                                      <option>18:30</option>
                                                                      <option>19:00</option>
                                                                      <option>19:30</option>
                                                                      <option>20:00</option>
                                                                      <option>20:30</option>
                                                                      <option>21:00</option>
                                                                      <option>21:30</option>
                                                                      <option>22:00</option>
                                                                      <option>22:30</option>
                                                                      <option>23:00</option>
                                                                      <option>23:30</option>
                                                             </select>
                                                        </div>                                                       

                                                     </div>
                                                
                                                </div>

                                                <div class="form-group"> 

                                                    <div class="row">

                                                        <div class="col-xs-12 col-md-6">

                                                             <label>HORA FINAL:</label>

                                                        </div>


                                                        <div class="col-xs-12 col-md-6">

                                                             <select id="hora2" class="seleccion form-control" style="text-align: center;">
                                                                     <option>00:00</option>
                                                                      <option>00:30</option>
                                                                      <option>01:00</option>
                                                                      <option>01:30</option>
                                                                      <option>02:00</option>
                                                                      <option>02:30</option>
                                                                      <option>03:00</option>
                                                                      <option>03:30</option>
                                                                      <option>04:00</option>
                                                                      <option>04:30</option>
                                                                      <option>05:00</option>
                                                                      <option>05:30</option>
                                                                      <option>06:00</option>
                                                                      <option>06:30</option>
                                                                      <option>07:00</option>
                                                                      <option>07:30</option>
                                                                      <option>08:00</option>
                                                                      <option>08:30</option>
                                                                      <option>09:00</option>
                                                                      <option>09:30</option>
                                                                      <option>10:00</option>
                                                                      <option>10:30</option>
                                                                      <option>11:00</option>
                                                                      <option>11:30</option>
                                                                      <option>12:00</option>
                                                                      <option>12:30</option>
                                                                      <option>13:00</option>
                                                                      <option>13:30</option>
                                                                      <option>14:00</option>
                                                                      <option>14:30</option>
                                                                      <option>15:00</option>
                                                                      <option>15:30</option>
                                                                      <option>16:00</option>
                                                                      <option>16:30</option>
                                                                      <option>17:00</option>
                                                                      <option>17:30</option>
                                                                      <option>18:00</option>
                                                                      <option>18:30</option>
                                                                      <option>19:00</option>
                                                                      <option>19:30</option>
                                                                      <option>20:00</option>
                                                                      <option>20:30</option>
                                                                      <option>21:00</option>
                                                                      <option>21:30</option>
                                                                      <option>22:00</option>
                                                                      <option>22:30</option>
                                                                      <option>23:00</option>
                                                                      <option>23:30</option>
                                                             </select>
                                                        </div>                                                       

                                                     </div>
                                                
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>TIPO CITA:</label>

                                                        <input type="text" class="form-control" id="cita" placeholder="TIPO CITA">
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="guardar_cita()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>




            <!-- Modal -->
                  <div class="modal fade" id="eliminarCita" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">DATOS DE REGISTRO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_2" placeholder="Fecha">
                                                    
                                                </div>


                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="consultar_cita()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;CONSULTAR
                                                        </button>

                                                </div>  


                                                <div class="form-group">
                                                    
                                                         <div id="agenda_results" class="col-xs-12 table-responsive" style="padding-top: 5PX;">

                                                            <table class="table table-hover table-condensed table-responsive table-bordered table-scroll" >
                                                                            <thead>
                                                                                <tr id="titulo_consultas_agenda">                                                                    
                                                                                    <th style="vertical-align: middle;">CITA</th>
                                                                                    <th style="vertical-align: middle;">HORA INICIO</th>                 
                                                                                    <th style="vertical-align: middle;">HORA FIN</th>                                    
                                                                                    <th style="vertical-align: middle;">ACCIONES</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="data_consultas_agenda"></tbody>
                                                            </table>
                                                        </div>                                                    
                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <script src="js/bootstrap.min.js"></script>

    <!--<script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/fullcalendar.min.js"></script>-->


    <script type="text/javascript" src="js/funcion_alertas.js"></script>
    

</body>
</html>