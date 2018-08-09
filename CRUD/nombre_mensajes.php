<?php

include '../sesion.php';

     if(isset($_POST["texto"]))
      {
            if($_POST["texto"]){
                  //echo "He recibido en el archivo.php: ".$_POST["texto"];
                  
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

                        $fecha =  date("Y") . "-" . date("m") . "-" . date("d");
                   
                        $sql = mysqli_query($con, "SELECT * FROM MENSAJES ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $ID_MSN = $row['ID_MSN'];
                                          $TITULO = $row['TITULO'];
                                          $MENSAJE = $row['MENSAJE'];
                                          $textarea_line = str_replace("\n", "<br>", $MENSAJE);
                                          
                                          echo "<!-- /.row -->
                                                <div class='row'>
                                                    <div class='col-xs-12'>
                                                        <div class='panel panel-primary' style='border-color: #C4554F;' >
                                                            <div class='panel-heading' style='background-color: #C4554F; color: #fff '>
                                                                <h3 class='panel-title'>".$TITULO."</h3>
                                                            </div>
                                                            <div class='panel-body'>                                                                   
                                                                    <div class='alert alert-default text-center'>
                                                                        ".$textarea_line."
                                                                    </div>
                                                                      <button class='btn btn-danger btn-block navbar-right' id='boton_msnMenos' onclick='borrar_mensaje(".$ID_MSN.")' style='width: 4%; margin-right: 1%; ";

                                          if($x != "ADMINISTRADOR"){

                                            echo "visibility:hidden;";
                                          }

                                                                          

                                                                     echo " ' >
                                                                          <span class='glyphicon glyphicon-minus' aria-hidden='true'></span>                                                    
                                                                      </button>
                                                                      
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.row -->";
                                        }

                        }else{ echo "NO HAY ALERTAS"; }                

                        if (!$sql)
                          {
                              echo("Error description: " . mysqli_error($con));
                          }   

                  }

            }
            else{
                  echo "He recibido un campo vacio";
            }	
      }

?>