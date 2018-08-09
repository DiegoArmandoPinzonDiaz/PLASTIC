<?php

require_once '../calendario/vendor/autoload.php';
include '../sesion.php';

    if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) )
      {         


                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val = $_POST["texto"];
                  $val2 = $_POST["texto2"];
                  $val3 = $_POST["texto3"];
                  $val4 = $_POST["texto4"];


                  $val= DateTime::createFromFormat('d/m/Y', $val)->format('Y-m-d');

$estado='';

      $client->setAccessToken($_SESSION['access_token']);
      $service = new Google_Service_Calendar($client);
      $results = $service->events->listEvents('plascticbeautymail@gmail.com', array());


      if (count($results->getItems()) == 0) {

              print "<h3>No hay Eventos</h3>";

            } else {

                  //print "<h3>Proximos Eventos</h3>";
                  //echo "<table border=1>";
                  foreach ($results->getItems() as $event) {

                      //echo "<tr>";
                      $start = $event->start->dateTime;
                      if (empty($start)) {
                        $start = $event->start->date;                   
                      }
                      $end = $event->end->dateTime;
                      if (empty($end)) {
                        $end = $event->end->date;                   
                      }
                      /*echo "<td>".$event->getSummary()."</td>";
                      echo "<td>".$start."</td>";
                      echo "<td>".$end."</td>";
                      echo "</tr>";*/

                      //echo $val;

                      
                      $fecha=substr($start,0,10);
                      $horaI=substr($start,11,14);
                      $horaF=substr($end,11,14);

                      $horaI=substr($horaI,0,5);
                      $horaF=substr($horaF,0,5);

                      //echo $horaI.'-'.$val2.'/-/';


                      if($val == $fecha && $val2 >= $horaI && $val2 <= $horaF){ $estado = 'ERROR';}
                    
                  }
                

            }


            if($estado != 'ERROR')
            {
                    $val = date("Y-m-d", strtotime($val) );


                     $client->setAccessToken($_SESSION['access_token']);
                     $service = new Google_Service_Calendar($client);


                     $event = new Google_Service_Calendar_Event(array(
                      'summary' => $val4,
                      //'location' => '800 Howard St., San Francisco, CA 94103',
                      //'description' => 'A chance to hear more about Google\'s developer products.',
                      'start' => array(
                        'dateTime' => $val.'T'.$val2.':00.00-05:00',
                        'timeZone' => 'America/Los_Angeles',
                      ),
                      'end' => array(
                        'dateTime' => $val.'T'.$val3.':00.00-05:00',
                        'timeZone' => 'America/Los_Angeles',
                      ),
                      "creator"=> array(
                        "email" => "plascticbeautymail@gmail.com",
                        "displayName" => "SISTEMA DE INFORMACION",
                        "self"=> true
                      ),
                      "guestsCanInviteOthers" => false,
                      "guestsCanModify" => false,
                      "guestsCanSeeOtherGuests" => false,
                  ));
                  $calendarId = 'plascticbeautymail@gmail.com';
                  $event = $service->events->insert($calendarId, $event);

                  $estado='Evento Guardado';

            }

            echo $estado;


     }


?>