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
                   
                        $sql = mysqli_query($con, "SELECT * FROM ALERTAS INNER JOIN PACIENTES ON ALERTAS.FOLIO = PACIENTES.ID_PAC WHERE ALERTAS.INVENTARIO = 'CUMPLEANOS' AND MONTH(ALERTAS.FECHA_ALERTA) = '".$mes."' AND DAY(ALERTAS.FECHA_ALERTA) = '".$dia."' " );

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
                                          $NOMBRE = $row['NOMBRE'];
                                          $APELLIDO_1 = $row['APELLIDO_1'];
                                          $APELLIDO_2 = $row['APELLIDO_2'];
                                          $TELEFONO = $row['TELEFONO'];
                                          
                                          $CELULAR = $row['CELULAR'];

                                          $E_MAIL = $row['E_MAIL'];

                                          $FECHA_INIT =  date("d/m/Y", strtotime($FECHA_INIT));
                                          $FECHA_ALERTA =  date("d/m/Y", strtotime($FECHA_ALERTA));

                                          $color = array(  
                                              'URGENTE' => '#FC554F',  
                                              'SEGUIMIENTO' => '#FFFCB2', 
                                              'NO LE INTERESA' => '#FC9D4F', 
                                              'ATENDIDA' => '#4CCC92',  
                                          ); 
                                          
                                          echo "<tr style='background-color: ".$color[$ESTADO].";'>
                                          <td>".$FOLIO."</td><td>".$NOMBRE." ".$APELLIDO_1." ".$APELLIDO_2."</td><td>".$TELEFONO."</td><td>".$CELULAR."</td><td>".$E_MAIL."</td><td>".$FECHA_ALERTA."</td><td>CUMPLEA&Ntilde;OS</td><td>CUMPLEA&Ntilde;OS</td><td>".$DESCRIPCION."</td><td>".$ESTADO."</td>
                                                              </tr>";
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