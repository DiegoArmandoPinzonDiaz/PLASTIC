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
                   
                        $sql = mysqli_query($con, " SELECT * FROM GABINETE WHERE FOLIO_GABINETE = '".$val."' AND ESTUDIOS_GABINETE = '3' ORDER BY FECHA_GABINETE DESC LIMIT 1");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $ID_GABINETE = $row['ID_GABINETE'];
                                          $FECHA_GABINETE = $row['FECHA_GABINETE'];
                                          $ESTUDIOS_GABINETE = $row['ESTUDIOS_GABINETE'];
                                          $RESULTADOS_GABINETE = $row['RESULTADOS_GABINETE'];
                                          $FOLIO_GABINETE = $row['FOLIO_GABINETE'];
                                     

                                          $FECHA_GABINETE =  date("d/m/Y", strtotime($FECHA_GABINETE));


                                          //echo $nom;
                                          $arrayPHP=array("ID_GABINETE"=>$ID_GABINETE, "FECHA_GABINETE"=>$FECHA_GABINETE, "ESTUDIOS_GABINETE"=>$ESTUDIOS_GABINETE, "RESULTADOS_GABINETE"=>$RESULTADOS_GABINETE, "FOLIO_GABINETE"=>$FOLIO_GABINETE);  

                                          echo json_encode($arrayPHP);
                                        }

                        }else{ echo "NO HAY CAMPOS"; }                

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