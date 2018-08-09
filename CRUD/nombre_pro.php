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
                   
                        $sql = mysqli_query($con, "SELECT * FROM PROCEDIMIENTO_CIRUGIA WHERE ID_PRO = '".$val."' ");

                        while($row=mysqli_fetch_array($sql)){
                              $nom = $row['PRO'];
                              $imagen = $row['IMAGEN'];
                              
                              $valor_efectivo = $row['VALOR_EFECTIVO'];
                              $riesgos = $row['RIESGOS'];
                              $tecnica = $row['TECNICA'];
                              $indicaciones = $row['INDICACIONES'];

                              $costo_opc1 = $row['COSTO_OPC1'];
                              $costo_opc2 = $row['COSTO_OPC2'];
                              $costo_opc3 = $row['COSTO_OPC3'];
                              $incluye_pro = $row['INCLUYE'];
                              
                              //echo $nom;
                              $arrayPHP=array("nombre"=>$nom, "imagen"=>$imagen, "valor_efectivo"=>$valor_efectivo, "riesgos"=>$riesgos, "tecnica"=>$tecnica, "indicaciones"=>$indicaciones, "costo_opc1"=>$costo_opc1, "costo_opc2"=>$costo_opc2, "costo_opc3"=>$costo_opc3, "incluye_pro"=>$incluye_pro);                              
                              echo json_encode($arrayPHP);
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