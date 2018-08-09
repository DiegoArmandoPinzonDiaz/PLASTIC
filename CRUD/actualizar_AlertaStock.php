<?php

     if(  isset($_POST["texto2"]) && isset($_POST["texto3"]) && isset($_POST["texto4"]) )
      {
            
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
                  //Datos de conexion a la base de datos//
                  $db_host = "localhost";
                  $db_user = "root";
                  $db_pass = "";
                  $db_name = "test";

                  $val2 = $_POST["texto2"];
                  $val3 = $_POST["texto3"];
                  $val4 = $_POST["texto4"];


                  $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


                  if(mysqli_connect_errno()){
                        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
                  }else{

                        //HACER EL INSERT INTO
                        mysqli_select_db($con, 'test');

                        $sql = mysqli_query($con, "SELECT * FROM ALERTAS WHERE ID_ALERTA = '".$val4."' ");

                        /*$contar = mysqli_num_rows($sql);

                        echo $contar;
                         
                        if($contar > 0){*/

                              while ($row=mysqli_fetch_array($sql)) {


                                    $MOTIVO = $row['MOTIVO'];


                                    $sql4 = mysqli_query($con, "UPDATE MATERIALES SET STOCK_ACTUAL = '".$val2."'  WHERE MATERIAL = '$MOTIVO' "); 
                                    $sql2 = mysqli_query($con, "UPDATE ALERTAS SET DESCRIPCION = '".$val3."'  WHERE ID_ALERTA = '$val4' "); 


                                    $sql3 = mysqli_query($con, "SELECT * FROM MATERIALES WHERE MATERIAL = '$MOTIVO' ");

                                    while ($row=mysqli_fetch_array($sql3)) {

                                          $STOCK_ACTUAL =$row['STOCK_ACTUAL'];
                                          $STOCK_MINIMO =$row['STOCK_MINIMO'];


                                          if( $STOCK_ACTUAL > $STOCK_MINIMO){

                                                mysqli_select_db($con, 'test');

                                                $consulta = "DELETE FROM ALERTAS WHERE MOTIVO = '$MOTIVO' ";

                                                $sql5 = mysqli_query($con, $consulta); 

                                                 if (!$sql5)
                                                  {
                                                      echo("Error description: " . mysqli_error($con));
                                                  } 
                                          }
                                    }


                                    if($sql){ echo "REGISTRO GUARDADO";}
                                    else{ echo "Error: ".mysqli_error($con); }
                                     



                               } 

                                    
                  
                        //}	

                  }	
	     
	
      }


?>