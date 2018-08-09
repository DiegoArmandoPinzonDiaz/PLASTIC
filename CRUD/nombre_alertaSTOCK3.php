<?php

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

                        date_default_timezone_set("America/Mexico_City");
                        //$script_tz = date_default_timezone_get();

                        //echo $script_tz;

                        $mes = date("m");
                        $dia = date("d");
                   
                        $sql = mysqli_query($con, "SELECT * FROM ALERTAS INNER JOIN PRODUCTOS ON PRODUCTOS.PRODUCTOS = ALERTAS.MOTIVO WHERE ALERTAS.INVENTARIO = 'PRODUCTOS' AND ALERTAS.FOLIO = '100000' and ALERTAS.ID_ALERTA =  '".$val."'  " );

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $ID_ALERTA = $row['ID_ALERTA'];
                                          $FECHA_INIT = $row['FECHA_INIT'];
                                          $FECHA_ALERTA = $row['FECHA_ALERTA'];
                                          $FOLIO = $row['FOLIO'];
                                          $INVENTARIO = $row['INVENTARIO'];
                                          $MOTIVO = $row['MOTIVO'];
                                          $DESCRIPCION = $row['DESCRIPCION'];
                                          $ESTADO = $row['ESTADO'];

                                          $STOCK_ACTUAL =$row['STOCK_ACTUAL'];
                                          $STOCK_MINIMO =$row['STOCK_MINIMO'];
                                         

                                          $FECHA_INIT =  date("d/m/Y", strtotime($FECHA_INIT));
                                          $FECHA_ALERTA =  date("d/m/Y", strtotime($FECHA_ALERTA));

                                          $arrayPHP=array("ID_ALERTA"=>$ID_ALERTA,"FECHA_INIT"=>$FECHA_INIT,"FECHA_ALERTA"=>$FECHA_ALERTA,"FOLIO"=>$FOLIO,"INVENTARIO"=>$INVENTARIO,"MOTIVO"=>$MOTIVO,"DESCRIPCION"=>$DESCRIPCION,"ESTADO"=>$ESTADO,"STOCK_ACTUAL"=>$STOCK_ACTUAL,"STOCK_MINIMO"=>$STOCK_MINIMO);

                                echo json_encode($arrayPHP);

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