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
                   
                        $sql = mysqli_query($con, "SELECT * FROM ANTECEDENTES_GINECO WHERE FOLIO = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $INI_MENS = $row['INI_MENS'];
                                          $CICLO_REG = $row['CICLO_REG'];
                                          $CICLO_IRE = $row['CICLO_IRE'];
                                          $FECHA_MENS = $row['FECHA_MENS'];
                                          $INI_VID = $row['INI_VID'];
                                          $NUM_EMB = $row['NUM_EMB'];
                                          $NUM_PARTOS = $row['NUM_PARTOS'];
                                          $NUM_CESARIA = $row['NUM_CESARIA'];
                                          $ABORTOS = $row['ABORTOS'];
                                          $CUAN_ABOR = $row['CUAN_ABOR'];
                                          $MET_PLAN = $row['MET_PLAN'];
                                          $CUAL_MET_PLAN = $row['CUAL_MET_PLAN'];
                                          
                                          $MED_HORM = $row['MED_HORM'];

                                          $CUAL_MED_HORM = $row['CUAL_MED_HORM'];
                                          $EXPO_SOLAR = $row['EXPO_SOLAR'];

                                          $TIEMPO_EXPO = $row['TIEMPO_EXPO'];
                                          $ID_HORA_EXPO = $row['ID_HORA_EXPO'];
                                          $USO_PROT = $row['USO_PROT'];
                                          $MARCA_PROT = $row['MARCA_PROT'];

                                          $FPS = $row['FPS'];

                                          //echo $nom;
                                          $arrayPHP=array("INI_MENS"=>$INI_MENS, "CICLO_REG"=>$CICLO_REG, "CICLO_IRE"=>$CICLO_IRE, "FECHA_MENS"=>$FECHA_MENS, "INI_VID"=>$INI_VID, "NUM_EMB"=>$NUM_EMB, "NUM_PARTOS"=>$NUM_PARTOS, "NUM_CESARIA"=>$NUM_CESARIA, "ABORTOS"=>$ABORTOS, "CUAN_ABOR"=>$CUAN_ABOR, "MET_PLAN"=>$MET_PLAN, "CUAL_MET_PLAN"=>$CUAL_MET_PLAN, "MED_HORM"=>$MED_HORM, "CUAL_MED_HORM"=>$CUAL_MED_HORM, "EXPO_SOLAR"=>$EXPO_SOLAR, "TIEMPO_EXPO"=>$TIEMPO_EXPO, "ID_HORA_EXPO"=>$ID_HORA_EXPO, "USO_PROT"=>$USO_PROT, "MARCA_PROT"=>$MARCA_PROT, "FPS"=>$FPS);  

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