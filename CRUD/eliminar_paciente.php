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
                   
                        $sql = mysqli_query($con, "DELETE FROM ALERTAS WHERE FOLIO = '".$val."' ");
                        $sql2 = mysqli_query($con, "DELETE FROM PACIENTES WHERE ID_PAC = '".$val."' ");
                        $sql3 = mysqli_query($con, "DELETE FROM ANTECEDENTES WHERE FOLIO = '".$val."' ");
                        $sql4 = mysqli_query($con, "DELETE FROM ANTECEDENTES_GINECO WHERE FOLIO = '".$val."' ");
                        $sql5 = mysqli_query($con, "DELETE FROM ANTECEDENTES_PAT WHERE FOLIO = '".$val."' ");
                        $sql6 = mysqli_query($con, "DELETE FROM CONSULTAS WHERE ID_PACIENTE = '".$val."' ");
                        $sql7 = mysqli_query($con, "DELETE FROM MOTIVO_CONSULTA WHERE FOLIO = '".$val."' ");
                        $sql8 = mysqli_query($con, "DELETE FROM SEGUIMIENTO_FOTOGRAFICO WHERE FOLIO = '".$val."' ");
                        $sql9 = mysqli_query($con, "DELETE FROM TRATAMIENTOS WHERE FOLIO = '".$val."' ");

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