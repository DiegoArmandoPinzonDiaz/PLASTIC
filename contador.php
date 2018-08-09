<?php 
 

      if(isset($_POST["texto"]))
      {
            if($_POST["texto"]){
  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val = $_POST["texto"];

                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                  
                                    
                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        mysqli_select_db($con, 'test');

						            $sql = mysqli_query($con, "SELECT * FROM PACIENTES WHERE ID_PAC = '".$val."' ");

                        if(!$sql){ echo "pailas"; echo("Error description: " . mysqli_error($con)); }
                        $contar = mysqli_num_rows($sql);
                        

                        while($row=mysqli_fetch_array($sql)){

                            $nombre = $row["NOMBRE"];
                            $apellido = $row["APELLIDO_1"];
                            $apellido2 = $row["APELLIDO_2"];

                        } 


                        $nombreCompleto = $nombre." ".$apellido." ".$apellido2;


                        $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
                        $permitidas= array ("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");

                        $nombreCompleto2 = utf8_decode($nombreCompleto);
                        $nombreCompleto2 = str_replace($no_permitidas, $permitidas ,$nombreCompleto2);


                        
                        $cuenta = '0';
                        //CONTADOR DE RECOMENDACIONES
                        $sql = mysqli_query($con, "SELECT * FROM PACIENTES WHERE RECOMENDADO = '".$nombreCompleto."' OR RECOMENDADO = '".$nombreCompleto2."'  ");

                        if(!$sql){ echo "pailas"; echo("Error description: " . mysqli_error($con)); }
                        $contar = mysqli_num_rows($sql);

                        while($row=mysqli_fetch_array($sql)){

                            $cuenta = $cuenta + 1;

                        } 
                        

                        $arrayPHP=array("nombreCompleto"=>$nombreCompleto, "cuenta"=>$cuenta );  

                        echo json_encode($arrayPHP);                           
                       
                  
                  }


            }
            else{
                  echo "He recibido un campo vacio";
            } 
      }


?>