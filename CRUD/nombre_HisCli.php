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
                   
                        $sql = mysqli_query($con, "SELECT * FROM HISTORIA_CLINICA WHERE FOLIO_HIST = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                            while($row=mysqli_fetch_array($sql)){

                                  $folio = $row['FOLIO_HIST'];
                                  $padecimiento = $row['PADECIMIENTO'];

                                  $SIGNOS = $row['SIGNOS'];
                                  $APARATO_CAR = $row['APARATO_CAR'];
                                  $APARATO_RES = $row['APARATO_RES'];
                                  $APARATO_DIG = $row['APARATO_DIG'];
                                  $SISTEMA_NEF = $row['SISTEMA_NEF'];
                                  $SISTEMA_END = $row['SISTEMA_END'];
                                  $SISTEMA_HEM = $row['SISTEMA_HEM'];
                                  $SISTEMA_NER = $row['SISTEMA_NER'];
                                  $SISTEMA_MUS = $row['SISTEMA_MUS'];
                                  $PIEL = $row['PIEL'];
                                  $ORGANOS = $row['ORGANOS'];
                                  $ESFERA = $row['ESFERA'];

                                  $INDICACIONT = $row['INDICACIONT'];
                                  $PRONOSTICO = $row['PRONOSTICO'];


                                                              
                                  //echo $nom;
                                  $arrayPHP=array("folio"=>$folio, "padecimiento"=>$padecimiento, "SIGNOS"=>$SIGNOS, "APARATO_CAR"=>$APARATO_CAR, "APARATO_RES"=>$APARATO_RES, "APARATO_DIG"=>$APARATO_DIG, "SISTEMA_NEF"=>$SISTEMA_NEF, "SISTEMA_END"=>$SISTEMA_END, "SISTEMA_HEM"=>$SISTEMA_HEM, "SISTEMA_NER"=>$SISTEMA_NER, "SISTEMA_MUS"=>$SISTEMA_MUS, "PIEL"=>$PIEL, "ORGANOS"=>$ORGANOS, "ESFERA"=>$ESFERA, "INDICACIONT"=>$INDICACIONT, "PRONOSTICO"=>$PRONOSTICO); 
                                  echo json_encode($arrayPHP);
                                }
                        }

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