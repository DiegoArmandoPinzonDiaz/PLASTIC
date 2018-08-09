<?php

//require_once '../PHPMailer/src/PHPMAILER.php'; 

error_reporting(E_ALL);
ini_set('display_errors', '1');

     if(isset($_POST["texto"]) && isset($_POST["texto2"]) && isset($_POST["texto3"]) )
      {

                  $db_host = "localhost";
                  $db_user = "plasticand";
                  $db_pass = "Tuxpan39601";
                  $db_name = "plasticand_plastic";

                  $val = $_POST["texto"];
                  $val2 = $_POST["texto2"];
                  $val3 = $_POST["texto3"];             

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');
                   
                        $sql = mysqli_query($con, "SELECT * FROM PDF WHERE ID_PDF = '".$val3."'  ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                         $ID_PDF = $row['ID_PDF'];
                                          $FOLIO = $row['FOLIO'];
                                          $PDF = $row['PDF'];
                                          $FECHA = $row['FECHA'];

                                          $file = '../PDF/'.$PDF.'.pdf';

                                          //$file = '../imagenes/cara.png';
                                          
                                              $from = "sistemas@plasticandbeautymexico.com";
                                              $to = $val;
                                              $subject = "Plastic and Beauty";
                                              //$message = $val2;
                                              //$headers = "From:" . $from;

                                              

                                              /*  $mail = new phpMailer();
                                                $mail->IsSMTP(); // telling the class to use SMTP
                                                $mail->Host = "smtp.email.com"; // SMTP server
                                                $mail->From = $from;
                                                $mail->AddAddress("plasticbeautysistemas@gmail.com");
                                                $mail->Subject = "first mailing";
                                                $mail->Body = "hi ! \n\n this is First mailing I made myself with phpMailer !";
                                                $mail->WordWrap = 50;
                                                if(!$mail->Send())
                                                {
                                                 echo "Message was not sent";
                                                 echo "Mailer Error: " . $mail->ErrorInfo;
                                                }
                                                else
                                                {
                                                 echo "Message has been sent";
                                                } */



    $num = md5(time());

      //MAIL BODY
      //$body = $val2;

      $name=$file;

     /* if( strcmp($_name, "") ) //FILES EXISTS
      { */
            $fp = fopen($file, "rb");
            $file = fread($fp, filesize($file));
            $file = chunk_split(base64_encode($file)); 

            // MULTI-HEADERS Content-Type: multipart/mixed and Boundary is mandatory.
            $headers = "From: ". $from."\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; "; 
            $headers .= "boundary=".$num."\r\n";
            $headers .= "--".$num."\n"; 

            // HTML HEADERS 
            $body = "Content-Type: text/html; charset='iso-8859-1'\r\n";
            $body .= "Content-Transfer-Encoding: 7bit\r\n";
            $body .= "".$val2."\n";
            $body .= "--".$num."\n"; 

            // FILES HEADERS 
            $body .= "Content-Type:application/octet-stream "; 
            $body .= "name=\"".$name."\"r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n";
            $body .= "Content-Disposition: attachment; ";
            $body .= "filename=\"".$name."\"\r\n\n";
            $body .= "".$file."\r\n";
            //$body .= "--".$num."--"; 


/*
$randomHash = md5(date('r', time())); 


            $headers = "From:".$from."\r\nReply-To: plasticbeautysistemas@gmail.com"; 
            $headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$randomHash."\""; 


            $body = "--PHP-mixed-".$randomHash."\r\n" 
             $body .="Content-Type: multipart/alternative; boundary=PHP-alt-".$randomHash."\r\n\r\n" 
             $body .="--PHP-alt-".$randomHash."\r\n" 
             $body .="Content-Type: text/plain; charset='iso-8859-1'\r\n" 
             $body .="Content-Transfer-Encoding: 7bit\r\n\r\n" 
             $body .=$val2 . "\r\n\r\n" 
             $body .="--PHP-alt-".$randomHash."\r\n" 
             $body .="Content-Type: text/html; charset='iso-8859-1'\r\n" 
             $body .="Content-Transfer-Encoding: 7bit\r\n\r\n" 
             $body .= $val2 . "\r\n"; 

             $body .= "--PHP-alt-".$randomHash."--\r\n\r\n" 
             $body .="--PHP-mixed-".$randomHash."\r\n" 
             $body .="Content-Type: application/pdf; name=\"".$name."\" \r\n" 
             $body .="Content-Transfer-Encoding: base64 \r\n" 
             $body .="Content-Disposition: attachment \r\n\r\n" 
             $body .=$file . "\r\n"; 

             $body .="--PHP-mixed-".$randomHash.";--"; 


*/





     /* }else { //FILES NO EXISTS

            // HTML HEADERS
            $headers = "From: GME \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $headers .= "Content-Transfer-Encoding: 8bit\r\n";
      } */

      // SEND MAIL
      @mail($to, $subject , $body, $headers);






                                            /*  //Limite Email
                                                $semi_rand = md5(time()); 
                                                $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

                                          //Encabezados para archivo adjunto 
                                          $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";       


                                          $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" ."Content-Transfer-Encoding: 7bit\n\n" . $val2 . "\n\n"; 

                                                    $message .= "--{$mime_boundary}n";
                                                    $fp =    fopen($file,"rb");
                                                    $data =  fread($fp,filesize($file));

                                                      fclose($fp);

                                                    $data = chunk_split(base64_encode($data));
                                                    $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . "Content-Description: ".basename($files[$i])."\n" . "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                                                    
                                                    $message .= "--{$mime_boundary}--";

                                                    $returnpath = "-f" . $from;
 
                                                      //Enviar EMail
                                                      $mail = @mail($to, $subject, $message, $headers, $returnpath);*/

                                                    
                                                    //@mail($to,$subject,$message, $headers);
echo "Correo Enviado.";      


                                        }
                        } else{ echo "No hay pdf's ".$val3; }   

                  }           

                         
      
      }

?>


plasticbeautysistemas@gmail.com

<?php

if ($_POST){ 

$num = md5(time());

//MAIL BODY
$body = "
<html>
<head>
<title>Formulario Trabaja con nosotros</title>
</head>
<body style='background:#EEE; padding:30px;'>
<h2 style='color:#767676;'>Trabaja con nosotros</h2>";

$body .= "
<strong style='color:#0090C6;'>Nombre: </strong>
<span style='color:#767676;'>" . $_POST["nombre"] . "</span>";

$body .= "
<strong style='color:#0090C6;'>Apellidos: </strong>
<span style='color:#767676;'>" . $_POST["apellido"] . "</span>";

$body .= "
<strong style='color:#0090C6;'>Email: </strong>
<span style='color:#767676;'>" . $_POST["email"] . "</span>";

$body .= "
<strong style='color:#0090C6;'>Teléfono: </strong>
<span style='color:#767676;'>" . $_POST["telefono"] . "</span>";

$body .= "</body></html>";

$_name=$_FILES["filead"]["name"];
$_type=$_FILES["filead"]["type"];
$_size=$_FILES["filead"]["size"];
$_temp=$_FILES["filead"]["tmp_name"]; 

if( strcmp($_name, "") ) //FILES EXISTS
{ 
$fp = fopen($_temp, "rb");
$file = fread($fp, $_size);
$file = chunk_split(base64_encode($file)); 

// MULTI-HEADERS Content-Type: multipart/mixed and Boundary is mandatory.
$headers = "From: GME <gme@garciamunte.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; "; 
$headers .= "boundary=".$num."\r\n";
$headers .= "--".$num."\n"; 

// HTML HEADERS 
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "".$body."\n";
$headers .= "--".$num."\n"; 

// FILES HEADERS 
$headers .= "Content-Type:application/octet-stream "; 
$headers .= "name=\"".$_name."\"r\n";
$headers .= "Content-Transfer-Encoding: base64\r\n";
$headers .= "Content-Disposition: attachment; ";
$headers .= "filename=\"".$_name."\"\r\n\n";
$headers .= "".$file."\r\n";
$headers .= "--".$num."--"; 

}else { //FILES NO EXISTS

// HTML HEADERS
$headers = "From: GME \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
} 

// SEND MAIL
mail("laroca73@gmail.com", "WEB - Trabaja con nosotros" , $body, $headers);

echo "<div class='ok'>
<strong>El formulario se ha enviado correctamente.</strong></div>";

}
?>