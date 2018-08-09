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
                   
                        $sql = mysqli_query($con, "SELECT * FROM MATERIALES WHERE ID_MAT = '".$val."' ");

                        while($row=mysqli_fetch_array($sql)){
                              $material = $row['MATERIAL'];
                              $marca = $row['MARCA'];
                              $proveedor = $row['PROVEEDOR'];
                              //echo $nom;
                              $arrayPHP=array("material"=>$material, "marca"=>$marca, "proveedor"=>$proveedor);                              
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