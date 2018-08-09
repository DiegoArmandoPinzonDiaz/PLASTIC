<?php 
  session_start(); 
  //echo "El nombre es: ".$_SESSION["var_sesion"];
                  if ($_SESSION["autenticado"] != "SI") { 
                  //si no existe, va a la página de autenticacion
                      session_destroy();
                      header("Location: index.php");
                  //salimos de este script
                      exit();
                  }

                  if (!isset($_SESSION['tiempo'])) {
                      $_SESSION['tiempo']=time();
                  }
                  else if (time() - $_SESSION['tiempo'] > 2400) {
                      session_destroy();
                      /* Aquí redireccionas a la url especifica */
                      header("Location: index.php");
                      exit();  
                  }

                  $_SESSION['tiempo']=time(); //Si hay actividad seteamos el valor al tiempo actual

  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT NOMBRE FROM PERSONAL WHERE E_MAIL = '".$_SESSION["var_sesion"]."' ");                        
                       

                       if(!$sql){ echo"no hay sesion";}
                         
            						while ($row = mysqli_fetch_array($sql)) { 
            						    $x = $row["NOMBRE"];
            						} 

						            mysqli_free_result($sql); 	         
                  
              }


              /*require_once 'calendario/vendor/autoload.php';

              $redirect_uri ='http://localhost:8080/TEST/agenda.php';

              $client = new Google_Client();

              //$client->setClientId('564311536584-6087knf36n44l7q2jaak7qj3o43fv3ii.apps.googleusercontent.com');
              //$client->setClientSecret('y5xcl2v427KCnxiDlB5D2Imr');

              //gmail
              $client->setClientId('835238231904-0i461jrk2d6ear2t6pr95si26c7d4kmv.apps.googleusercontent.com');
              $client->setClientSecret('a1Pwr3DbbZzkDrj7n1YyfAZb');


              $client->setRedirectUri($redirect_uri);
              $client->addScope('profile');
              $client->addScope(Google_Service_Calendar::CALENDAR);


              
              print_r($client->getAccessToken());
              $authUrl = $client->createAuthUrl();
              if (isset($_GET['code'])) {
                $client->authenticate($_GET['code']);
                $_SESSION['access_token'] = $client->getAccessToken();
                header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
              
              }*/





              require_once 'google-api-php-client/src/Google/autoload.php';
              $client = new Google_Client();
              // Get your credentials from the console
              $client->setClientId('835238231904-0i461jrk2d6ear2t6pr95si26c7d4kmv.apps.googleusercontent.com');
              $client->setClientSecret('a1Pwr3DbbZzkDrj7n1YyfAZb');
              $client->setRedirectUri('http://localhost:8080/TEST/nuevoPaciente.php');
              $client->setScopes(array('https://www.googleapis.com/auth/drive'));
              $authUrl = $client->createAuthUrl();
              if (isset($_GET['code'])) {
                  $client->authenticate($_GET['code']);  
                  $_SESSION['access_token'] = $client->getAccessToken();
                  header('Location: http://localhost:8080/TEST/nuevoPaciente.php');
              }

              

              
?>


