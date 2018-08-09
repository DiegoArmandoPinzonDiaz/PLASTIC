<?php

    if ( 0 < $_FILES['file']['error'] ) {
        //echo 'Error: ' . $_FILES['file']['error'] . '<br>';
      ECHO "ERROR";
    }
    else {
        //move_uploaded_file($_FILES['file']['tmp_name'], '../imgProductos/medicina/' . $_FILES['file']['name']);

      ECHO "AQUI VAMOS";
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

                  mysqli_select_db($con, 'test');

                  $image = imagecreatefromgif($_FILES['file']['name']);
                  ob_start();
                  imagegif($image);
                  $jpg = ob_get_contents();
                  ob_end_clean();

                  $jpg = str_replace('##','##',mysqli_escape_string($con,$jpg));
                  $sql = mysqli_query($con,"INSERT INTO PACIENTES SET FOTO='$jpg'");


                  if($sql){ echo "REGISTRO GUARDADO";}
                  else{ echo "Error: ".mysqli_error($con); }
    }

?>