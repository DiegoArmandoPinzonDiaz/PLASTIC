<?php

    if ( 0 < $_FILES['file']['error'] ) {
        //echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
    	$v1=$_GET['index'];
        $v2=$_GET['nombre'];
        //move_uploaded_file($_FILES['file']['tmp_name'], '../imgPacientes/' . $_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], '../imgPacientes/'.$v1.$v2.'.png' );
     
    }

?>