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
                   
                        $sql = mysqli_query($con, "SELECT * FROM MOTIVO_CONSULTA WHERE FOLIO = '".$val."' ");

                        $contar = mysqli_num_rows($sql);
                         
                        if($contar > 0){ 

                                    while($row=mysqli_fetch_array($sql)){

                                          $ESPECIFICAR = $row['ESPECIFICAR'];
                                          $ID_FITZ = $row['ID_FITZ'];
                                          $ID_GLOGAU = $row['ID_GLOGAU'];
                                          $ID_TIP_ROSTRO = $row['ID_TIP_ROSTRO'];
                                          $ID_TIP_PIEL = $row['ID_TIP_PIEL'];
                                          $LESIONES = $row['LESIONES'];
                                          $FC = $row['FC'];
                                          $FR = $row['FR'];
                                          $TABLA = $row['TABLA'];
                                          $TEMP = $row['TEMP'];
                                          $PESO = $row['PESO'];
                                          $TALLA = $row['TALLA'];
                                          
                                          $IMC = $row['IMC'];

                                          $TABLA2 = $row['TABLA2'];

                                          $EXAMEN = $row['EXAMEN'];
                                          $CABEZA = $row['CABEZA'];
                                          $CUELLO = $row['CUELLO'];
                                          $TORAX = $row['TORAX'];
                                          $ABDOMEN = $row['ABDOMEN'];
                                          $EXTSUP = $row['EXTSUP'];
                                          $EXTINF = $row['EXTINF'];

                                          $HABITUS = $row['HABITUS'];
                                          $GENITALES = $row['GENITALES'];
                                          $NERVIOSO = $row['NERVIOSO'];

                                          
                                          //echo $nom;
                                          $arrayPHP=array("ESPECIFICAR"=>$ESPECIFICAR, "ID_FITZ"=>$ID_FITZ, "ID_GLOGAU"=>$ID_GLOGAU, "ID_TIP_ROSTRO"=>$ID_TIP_ROSTRO, "ID_TIP_PIEL"=>$ID_TIP_PIEL, "LESIONES"=>$LESIONES, "FC"=>$FC, "FR"=>$FR, "TABLA"=>$TABLA, "TEMP"=>$TEMP, "PESO"=>$PESO, "TALLA"=>$TALLA, "IMC"=>$IMC, "TABLA2"=>$TABLA2, "EXAMEN"=>$EXAMEN, "CABEZA"=>$CABEZA, "CUELLO"=>$CUELLO, "TORAX"=>$TORAX, "ABDOMEN"=>$ABDOMEN, "EXTSUP"=>$EXTSUP, "EXTINF"=>$EXTINF, "HABITUS"=>$HABITUS, "GENITALES"=>$GENITALES, "NERVIOSO"=>$NERVIOSO );  

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