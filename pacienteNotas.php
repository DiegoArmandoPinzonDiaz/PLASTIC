

<?php include 'sesion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLASTIC & BEAUTY</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_nav.css" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


    <link href="css/estilo_sist.css" rel="stylesheet" type="text/css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--font awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!--ESTO ES PARA EL DATEPICKER -->
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


    <!-- htmltocanvas -->    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js"></script>

     <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>


    <script>
          $( function() {
            $( "#fecha_1" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_2" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_3" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_4" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_5" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_6" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_7" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_8" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_9" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_10" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_11" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_12" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_13" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_14" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_15" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_16" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_17" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_18" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_19" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_20" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_21" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_22" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            $( "#fecha_23" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });

     
            });

      </script>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.61.0-2013.06.06/jquery.blockUI.min.js"></script> 


      <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
      <script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>



<style>
/* Some CSS styling */
#sketchpadapp {
    /* Prevent nearby text being highlighted when accidentally dragging mouse outside confines of the canvas */
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
#sketchpad {
    float:left;
    border:2px solid #888;
    border-radius:4px;
    position:relative; /* Necessary for correct mouse co-ords in Firefox */
}
</style>


</head>
<body >
   

            <div id="wrapper">
                
                <?php include 'nav.php'; ?>

<!-- Navigation -->
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    &iexcl;Bienvenido!,      <i id="nombre"> <?php echo $x; ?>  </i>  
                                                
                                </h1>
                            </div>
                        </div>
                        <div class="row"><?php include 'nav3.php'; ?></div></br>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">HISTORIA CLINICA </h3>
                                    </div>
                                    <div class="panel-body">

                                        <?php include 'nav2.php'; ?>

                                </br>


                            <div class="row">

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS3()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;HOJA </br>FRONTAL</i></button> 

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;AVISO DE PRIVACIDAD</i></button>

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS2()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;CAPTURA DE IM&Aacute;GENES</i></button> 

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS8()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;HISTORIA CL&Iacute;NICA</i></button>

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS16()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;RESUMEN CL&Iacute;NICO</i></button>

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS17()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;NOTA DE EVOLUCI&Oacute;N</i></button>

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS9()" ><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;NOTA DE REFERENCIA </i></button> 

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS10()" ><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;NOTA DE INTERCONSULTA</i></button> 

                                 <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS18()" ><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;INDICACIONES PREOPERATORIAS</i></button> 

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS7()" ><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;CARTA DE CONSENTIMIENTO</i></button>  

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS4()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;NOTA PREOPERATORIA</i></button>  

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS5()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;NOTA POST-OPERATORIA</i></button> 

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS6()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;NOTA </br>DE ALTA</i></button>  

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS12()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;INDICACIONES</br></i></button>   

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS11()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;CIRUG&Iacute;A </br>FACIAL</i></button> 

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS13()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;CIRUG&Iacute;A </br>CORPORAL</i></button> 

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS14()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;CIRUG&Iacute;A </br>BUSTO</i></button> 

                                <button type="button" class="boton" style="height: 100px; width: 140px; margin-top: 0px; font-size: 13px;" onclick="abrirDATOS15()"><i class="fas fa-print fa-lg"></i></br></br><i >&nbsp;&nbsp;&nbsp;PRESUPUESTO</i></button> 


                                <canvas id="myCanvas" width="1000" height="1000" style="display: none;"></canvas>                  
                                        
                            </div>


                                    <div class="row">
                                        <div id="PDF_pacientes" class="col-xs-12 table-responsive" style="padding-top: 20PX;">

                                            <table class="table table-hover table-condensed table-responsive table-bordered table-scroll" >
                                                            <thead>
                                                                <tr >
                                                                    <th style="vertical-align: middle;">FECHA</th> 
                                                                    <th style="vertical-align: middle;">NOMBRE</th>                                                                    
                                                                    <th style="vertical-align: middle;">ACCIONES</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="pdf_lista"></tbody>
                                            </table>
                                        </div>
                                    </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->


                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->


            </div>

    <!-- Modal myModal2 -->
                  <div class="modal fade" id="myModal2" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">AVISO DE PRIVACIDAD</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_1" placeholder="Fecha">
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal myModalFECHA -->
                  <div class="modal fade" id="myModalFECHA" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAPTURA DE IM&Aacute;GENES</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_2" placeholder="Fecha">
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF2()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal myModalFECHA_HC -->
                  <div class="modal fade" id="myModalFECHA_HC" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">HISTORIA CL&Iacute;NICA</I></h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_14" placeholder="Fecha">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>DOCTOR:</label>

                                                        <!--<input type="text" class="form-control" id="doctor_hc" placeholder="DOCTOR:">-->
                                                        <select id="doctor_hc" class="seleccion form-control" style="text-align: center;">

                                                        </select>
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF11()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal myModalFECHA2 -->
                  <div class="modal fade" id="myModalFECHA2" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">HOJA FRONTAL</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

<input type="text" class="form-control" id="id_diagnostico_pdf" style="display: none;">

                            <div class="form-group campos2">

                                        <div class="form-group">
                                            
                                                <label>FECHA:</label>

                                                <input type="text" class="form-control" id="fecha_3" placeholder="Fecha">
                                            
                                        </div>

                                        <div class="form-group">
                                            
                                                <label>DIAGN&Oacute;STICO:</label>

                                                <textarea rows="5" class="form-control" id="diagnostico" placeholder="Diagn&oacute;sticos:" style="text-align: justify;"></textarea>
                                            
                                        </div>
                                                
                            </div>

                                                

                                                <div class="col-xs-12 col-md-4 pull-left" >
                                                <button class="btn btn-success btn-block" onclick="masCampo2()">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    &nbsp;Agregar Campo
                                                </button>
                                                </div></br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF3()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal myModalFECHA3 -->
                  <div class="modal fade" id="myModalFECHA3" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">NOTA PREOPERATORIA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_4" placeholder="Fecha">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>HORA:</label>

                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                <select id="minuto" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                         </div>

                                                         </div>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>DIAGN&Oacute;STICO PREOPERATORIO:</label>

                                                        <input type="text" class="form-control" id="diagnostico_nota" placeholder="DIAGN&Oacute;STICO PREOPERATORIO:" style="width: 100%;" onblur="idx_pre()" ></input>
                                                    
                                                </div>-->


                                                <div class="form-group campos6">

                                                        <input type="text" class="form-control" id="id_diagnostico_nota" style="display: none;">
                                                    
                                                        <label>DIAGN&Oacute;STICO:</label>

                                                        <textarea rows="4" class="form-control" id="diagnostico_nota" placeholder="DIAGN&Oacute;STICO:" onblur="this.value=this.value.toUpperCase();"></textarea>                                                        
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-4 pull-left" >
                                                <button class="btn btn-success btn-block" onclick="masCampo6()">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    &nbsp;Agregar Campo
                                                </button>
                                                </div>
                                                  

                                                </br></br>

                                                <div class="form-group">
                                                    
                                                        <label>PROCEDIMIENTO O INTERVENCI&Oacute;N:</label>

                                                        <select id="cirugia" class="seleccion form-control" style="text-align: center;" onchange="cuenta3()">

                                                        </select>  
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>CIRUJANO:</label>

                                                        <!--<input type="text" class="form-control" id="cirujano" placeholder="CIRUJANO:" value="ANDR&Eacute;S CALLEJAS S&Aacute;NCHEZ" onblur="this.value=this.value.toUpperCase();"></input>-->

                                                         <select name="cirugia_alta" id="cirujano" class="seleccion form-control" style="text-align: center;" >  

                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>TIPO CIRUG&Iacute;A:</label>

                                                        		<select id="tipo_cirugia" class="seleccion form-control" style="text-align: center;">
                                                                          <option>ELECTIVA</option>
                                                                          <option>URGENCIA</option>
                                                                 </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>ANESTESIA SUGERIDA:</label>

                                                        		 <select id="anestesia" class="seleccion form-control" style="text-align: center;">
                                                                          <option>LOCAL</option>
                                                                          <option>LOCAL Y SEDACI&Oacute;N</option>
                                                                          <option>SEDACI&Oacute;N</option>
                                                                          <option>REGIONAL</option>
                                                                          <option>BLOQUEO</option>
                                                                          <option>MIXTA</option>
                                                                          <option>GENERAL BALANCEADA</option>
                                                                 </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>RIESGO QUIR&Uacute;RGICO:</label>

                                                        <!--<textarea class="form-control" id="riesgo" placeholder="RIESGO QUIR&Uacute;RGICO:" onblur="this.value=this.value.toUpperCase();"></textarea>-->

                                                         <select id="riesgo" class="seleccion selectpicker form-control" style="text-align: center;" multiple >
                                                                  <option>ASA I</option>
                                                                  <option>ASA II</option>
                                                                  <option>ASA III</option>
                                                                  <option>ASA IV</option>
                                                                  <option>ASA V</option>
                                                                  <option>Goldman I</option>
                                                                  <option>Goldman II</option>
                                                                  <option>Goldman III</option>
                                                                  <option>Goldman IV</option>
                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>HEMODERIVADOS:</label>

                                                        <textarea class="form-control" id="hemoderivados" placeholder="HEMODERIVADOS:"  onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>POSIBLES COMPLICACIONES:</label>

                                                        <textarea class="form-control" id="complicaciones" placeholder="POSIBLES COMPLICACIONES:" rows="3" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>PR&Oacute;NOSTICO:</label>

                                                        <textarea class="form-control" id="pronostico" placeholder="PR&Oacute;NOSTICO:" value="PRON&Oacute;TICO BUENO PARA LA VIDA, BUENO PARA LA FUNCI&Oacute;N Y BUENO PARA EST&Eacute;TICA" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>RESUMEN CL&Iacute;NICO:</label>

                                                        <textarea class="form-control" id="resumen" placeholder="RESUMEN CL&Iacute;NICO:" rows="3" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>APP:</label>

                                                        <textarea class="form-control" id="app" placeholder="APP:" rows="8" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>PA:</label>

                                                        <textarea class="form-control" id="pa_nota" placeholder="PA:" style="width: 100%;" rows="4" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>SIGNOS VITALES:</label>
                                                    
                                                </div>



                                                <div class="form-group row">
                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="60" max="110" class="form-control" id="fc_nota" onblur="validarfc()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>
                                                </div>




                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FR:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="8" max="20" class="form-control" id="fr_nota" onblur="validarfr()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (DIAST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta_nota">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (SIST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta2_nota">                                  
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TEMP:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="temp_nota">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>C</LABEL>                                 
                                                    </div>

                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TALLA:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="talla_nota" onblur="validartalla4()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Metros</LABEL>                                 
                                                    </div>
                                                </div> 

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>PESO:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" class="form-control" id="peso_nota" onblur="validarpeso4()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Kg</LABEL>                                 
                                                    </div>
                                                </div>  

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>IMC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="imc_nota" >                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL></LABEL>                                 
                                                    </div>
                                                </div> 



                                                <div class="form-group">
                                                    
                                                        <label>EXPLORACI&Oacute;N F&Iacute;SICA:</label>

                                                        <textarea class="form-control" id="exploracion" placeholder="EXPLORACI&Oacute;N F&Iacute;SICA:" rows="11" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label> LABORATORIO Y GABINETE:</label>

                                                        <textarea class="form-control" id="laboratorio_nota" placeholder="EXPLORACI&Oacute;N F&Iacute;SICA:" rows="11"></textarea>
                                                    
                                                </div>-->


                                                <div class="form-group">
                                                    
                                                        <label>ESTUDIOS DE LABORATORIO:</label>

                                                        <div id="laboratorio_nota">

                                                            <div id="laboratorios_nota1"></div>
                                                            <div id="laboratorios_nota2"></div>
                                                            <div id="laboratorios_nota3"></div>
                                                            <div id="laboratorios_nota4"></div>
                                                            <div id="laboratorios_nota5"></div>                                                           
                                                                
                                                            
                                                        </div>
                                                    
                                                </div>
                                            </br>

                                                <div class="form-group col-xs-12 col-md-12" style="padding-top: 20px;">
                                                    
                                                        <label>ESTUDIOS DE GABINETE:</label>

                                                        <div id="gabinetes_nota">

                                                            <div id="gabinetes_nota1"></div>
                                                            <div id="gabinetes_nota2"></div>
                                                            <div id="gabinetes_nota3"></div>
                                                            
                                                        </div>
                                                    
                                                </div>




                                                <div class="form-group">
                                                    
                                                        <div class="col-xs-12 col-md-12" ><label>IDx:</label></div>

                                                        <input type="text" class="form-control" id="idx" placeholder="IDx:" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>PLAN:</label>

                                                        <textarea class="form-control" id="plan" placeholder="PLAN:" rows="6" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>




                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF4()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal myModalFECHA4 -->
                  <div class="modal fade" id="myModalFECHA4" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">NOTA POST-OPERATORIA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_5" placeholder="Fecha">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>HORA:</label>

                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_post" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                <select id="minuto_post" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                         </div>

                                                         </div>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>DIAGN&Oacute;STICO POST-OPERATORIO:</label>

                                                        <input type="text" class="form-control" id="diagnostico_nota_post" placeholder="DIAGN&Oacute;STICO POST-OPERATORIO:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>-->


                                                <div class="form-group campos7">

                                                        <input type="text" class="form-control" id="id_diagnostico_nota_post" style="display: none;">
                                                    
                                                        <label>DIAGN&Oacute;STICO POST-OPERATORIO:</label>

                                                        <textarea rows="4" class="form-control" id="diagnostico_nota_post" placeholder="DIAGN&Oacute;STICO POST-OPERATORIO:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();"></textarea>   
                                                        </br>                                                   
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-4 pull-left" >
                                                <button class="btn btn-success btn-block" onclick="masCampo7()">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    &nbsp;Agregar Campo
                                                </button>
                                                </div>
                                                  

                                                </br></br>

                                                <div class="form-group">
                                                    
                                                        <label>CIRUG&Iacute;A REALIZADA:</label>

                                                         <select name="cirugia_post" id="cirugia_post" class="seleccion form-control" style="text-align: center;" placeholder="CIRUG&Iacute;A REALIZADA:"  onchange="cuenta4()">            
                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>CIRUJANO:</label>

                                                        <!--<input type="text" class="form-control" id="cirujano_post" placeholder="CIRUJANO:" value="ANDR&Eacute;S CALLEJAS S&Aacute;NCHEZ" onblur="this.value=this.value.toUpperCase();"></input>-->


                                                        <select name="cirugia_post" id="cirujano_post" class="seleccion form-control" style="text-align: center;" placeholder="CIRUG&Iacute;A REALIZADA:">            
                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>TIPO CIRUG&Iacute;A:</label>

                                                        <select id="tipo_cirugia_post" class="seleccion form-control" style="text-align: center;">
                                                                  <option>ELECTIVA</option>
                                                                  <option>URGENCIA</option>
                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>ANESTESIA:</label>

                                                        		<select id="anestesia_post" class="seleccion form-control" style="text-align: center;">
                                                                          <option>LOCAL</option>
                                                                          <option>LOCAL Y SEDACI&Oacute;N</option>
                                                                          <option>SEDACI&Oacute;N</option>
                                                                          <option>REGIONAL</option>
                                                                          <option>BLOQUEO</option>
                                                                          <option>MIXTA</option>
                                                                          <option>GENERAL BALANCEADA</option>
                                                                 </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>RIESGO QUIR&Uacute;RGICO:</label>

                                                       <!-- <input type="text" class="form-control" id="riesgo_post" placeholder="RIESGO QUIR&Uacute;RGICO:"></input>-->

                                                        <select id="riesgo_post" class="seleccion selectpicker form-control" style="text-align: center;" multiple >
                                                                  <option>ASA I</option>
                                                                  <option>ASA II</option>
                                                                  <option>ASA III</option>
                                                                  <option>ASA IV</option>
                                                                  <option>ASA V</option>
                                                                  <option>Goldman I</option>
                                                                  <option>Goldman II</option>
                                                                  <option>Goldman III</option>
                                                                  <option>Goldman IV</option>
                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>HEMODERIVADOS:</label>

                                                        <input type="text" class="form-control" id="hemoderivados_post" placeholder="HEMODERIVADOS:" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>CUENTA:</label>

                                                        <input type="text" class="form-control" id="cuenta" placeholder="CUENTA:" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>SANGRADO:</label>

                                                        <input type="text" class="form-control" id="sangrado" placeholder="SANGRADO:" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>COMPLICACIONES:</label>

                                                        <textarea class="form-control" id="complicaciones_post" placeholder="COMPLICACIONES:" rows="4" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>PIEZA DE PATOLOG&Iacute;A:</label>

                                                        <input type="text" class="form-control" id="pieza" placeholder="PIEZA DE PATOLOG&Iacute;A:" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>T&Eacute;CNICA QUIR&Uacute;RGICA:</label>

                                                        <textarea class="form-control" id="tecnica" placeholder="T&Eacute;CNICA QUIR&Uacute;RGICA:" rows="4" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>SIGNOS VITALES:</label>
                                                    
                                                </div>



                                                <div class="form-group row">
                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="60" max="110" class="form-control" id="fc_nota_post" onblur="validarfc2()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>
                                                </div>




                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FR:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="8" max="20" class="form-control" id="fr_nota_post" onblur="validarfr2()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (DIAST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta_nota_post">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (SIST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta2_nota_post">                                  
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TEMP:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="temp_nota_post">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>C</LABEL>                                 
                                                    </div>

                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TALLA:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="talla_nota_post" onblur="validartalla5()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Metros</LABEL>                                 
                                                    </div>
                                                </div>   

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>PESO:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" class="form-control" id="peso_nota_post" onblur="validarpeso5()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Kg</LABEL>                                 
                                                    </div>
                                                </div>  

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>IMC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="imc_nota_post" >                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL></LABEL>                                 
                                                    </div>
                                                </div> 


                                                <div class="form-group">
                                                    
                                                        <label>EXPLORACI&Oacute;N F&Iacute;SICA:</label>

                                                        <textarea class="form-control" id="exploracion_post" placeholder="EXPLORACI&Oacute;N F&Iacute;SICA:" rows="11" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>IDx:</label>

                                                        <input type="text" class="form-control" id="idx_post" placeholder="IDx:" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>-->

                                                <div class="form-group">
                                                    
                                                        <label>PLAN POST-OPERATOR&Iacute;AS:</label>

                                                        <textarea class="form-control" id="indicaciones" placeholder="INDICACIONES POST-OPERATOR&Iacute;AS:" rows="5" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF5()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal myModalFECHA5 -->
                  <div class="modal fade" id="myModalFECHA5" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">NOTA DE ALTA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_6" placeholder="Fecha">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>HORA:</label>

                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_alta" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                <select id="minuto_alta" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                         </div>

                                                         </div>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>DIAGN&Oacute;STICO POST-OPERATORIO:</label>

                                                        <input type="text" class="form-control" id="diagnostico_alta" placeholder="DIAGN&Oacute;STICO POST-OPERATORIO:" style="width: 100%;" onblur="idx_nota()"></input>
                                                    
                                                </div>-->


                                                 <div class="form-group campos8">

                                                        <input type="text" class="form-control" id="id_diagnostico_alta" style="display: none;">
                                                    
                                                        <label>DIAGN&Oacute;STICO POST-OPERATORIO:</label>

                                                        <textarea rows="4" class="form-control" id="diagnostico_alta" placeholder="DIAGN&Oacute;STICO POST-OPERATORIO:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();"></textarea>   
                                                        </br>                                                   
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-4 pull-left" >
                                                <button class="btn btn-success btn-block" onclick="masCampo8()">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    &nbsp;Agregar Campo
                                                </button>
                                                </div>
                                                  

                                                </br></br>


                                                <div class="form-group">
                                                    
                                                        <label>CIRUG&Iacute;A REALIZADA:</label>

                                                         <select name="cirugia_alta" id="cirugia_alta" class="seleccion form-control" style="text-align: center;" placeholder="CIRUG&Iacute;A REALIZADA:">            
                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>CIRUJANO:</label>

                                                        <!--<input type="text" class="form-control" id="cirujano_alta" placeholder="CIRUJANO:" value="ANDR&Eacute;S CALLEJAS S&Aacute;NCHEZ" onblur="this.value=this.value.toUpperCase();"></input>-->

                                                        <select name="cirugia_post" id="cirujano_alta" class="seleccion form-control" style="text-align: center;" placeholder="CIRUG&Iacute;A REALIZADA:">            
                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>TIPO CIRUG&Iacute;A:</label>

                                                        <!--<input type="text" class="form-control" id="tipo_cirugia_alta" placeholder="TIPO CIRUG&Iacute;A:"></input>-->

                                                        <select id="tipo_cirugia_alta" class="seleccion form-control" style="text-align: center;">
                                                                  <option>ELECTIVA</option>
                                                                  <option>URGENCIA</option>
                                                         </select>
                                                    
                                                </div>

                                               

                                                <div class="form-group">
                                                    
                                                        <label>SIGNOS VITALES:</label>
                                                    
                                                </div>



                                                <div class="form-group row">
                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="60" max="110" class="form-control" id="fc_nota_alta" onblur="validarfc3()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>
                                                </div>




                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FR:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="8" max="20" class="form-control" id="fr_nota_alta" onblur="validarfr3()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (DIAST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta_nota_alta">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (SIST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta2_nota_alta">                                  
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TEMP:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="temp_nota_alta">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>C</LABEL>                                 
                                                    </div>

                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TALLA:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="talla_nota_alta" onblur="validartalla6()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Metros</LABEL>                                 
                                                    </div>
                                                </div> 

                                                 <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>PESO:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" class="form-control" id="peso_nota_alta" onblur="validarpeso6()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Kg</LABEL>                                 
                                                    </div>
                                                </div>  

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>IMC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="imc_nota_alta">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL></LABEL>                                 
                                                    </div>

                                                </div>


                                                <div class="form-group">
                                                    
                                                        <label>EXPLORACI&Oacute;N F&Iacute;SICA:</label>

                                                        <textarea class="form-control" id="exploracion_alta" placeholder="EXPLORACI&Oacute;N F&Iacute;SICA:" rows="11" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>IDx:</label>

                                                        <input type="text" class="form-control" id="idx_alta" placeholder="IDx:" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>-->

                                                <div class="form-group">
                                                    
                                                        <label>PLAN:</label>

                                                        <textarea class="form-control" id="plan_alta" placeholder="PLAN:" rows="6" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>CITA PARA REVISI&Oacute;N:</label>

                                                        <input type="text" class="form-control" id="fecha_7" placeholder="CITA PARA REVISI&Oacute;N:">
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>HORA CITA PARA REVISI&Oacute;N:</label>

                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_alta_revision" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                <select id="minuto_alta_revision" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                         </div>

                                                         </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>FAMILIAR:</label>

                                                        <input type="text" class="form-control" id="familiar_alta" placeholder="FAMILIAR:" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF6()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>


    <!-- Modal myModalFECHA6 -->
                  <div class="modal fade" id="myModalFECHA6" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CARTA DE CONSENTIMIENTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_8" placeholder="Fecha">
                                                    
                                                </div>

                                                
                                                <div class="form-group">
                                                    
                                                        <label>UNIDAD M&Eacute;DICA:</label>

                                                        <!--<input type="text" class="form-control" id="unidad_medica" placeholder="UNIDAD M&Eacute;DICA:" style="width: 100%;"  onblur="this.value=this.value.toUpperCase();"></input>-->

                                                        <select name="cirugia_alta" id="unidad_medica" class="seleccion form-control" style="text-align: center;" placeholder="UNIDAD M&Eacute;DICA:">            
                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>TEL&Eacute;FONO(S):</label>

                                                        <input type="text" class="form-control" id="telefono_consentimiento" placeholder="TEL&Eacute;FONO(S):" onkeypress="return isNumberKey(event)"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>CIRUJANO:</label>

                                                        <!--<input type="text" class="form-control" id="cirujano_consentimiento" placeholder="CIRUJANO:" value="ANDR&Eacute;S CALLEJAS S&Aacute;NCHEZ" onblur="this.value=this.value.toUpperCase();"></input>-->

                                                        <select name="cirugia_alta" id="cirujano_consentimiento" class="seleccion form-control" style="text-align: center;" placeholder="UNIDAD M&Eacute;DICA:">            
                                                         </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>LUGAR:</label>

                                                        <input type="text" class="form-control" id="lugar_consentimiento" placeholder="LUGAR:" style="width: 100%;"  onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>CAMA:</label>

                                                        <input type="text" class="form-control" id="cama_consentimiento" placeholder="CAMA:"  onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>CUENTA CON SERVICIOS M&Eacute;DICOS DE SALUD:</label>

                                                          <select id="servicios" class="seleccion form-control" style="text-align: center;">
                                                                  <option>PUBLICO</option>
                                                                  <option>PRIVADO</option>
                                                                  <option>NINGUNO</option>
                                                          </select>
                                                    
                                                </div>-->

                                                <div class="form-group">
                                                    
                                                        <label>PROCEDIMIENTO O INTERVENCI&Oacute;N QUIR&Uacute;RGICA:</label>

                                                        <select id="intervencion" class="seleccion form-control" style="text-align: center;">
                                                                  <option>ELECTIVA</option>
                                                                  <option>URGENTE</option>
                                                        </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>ALERG&Iacute;AS:</label>

                                                        <select id="alergias" class="seleccion form-control" style="text-align: center;">
                                                                  <option>NEGADA</option>
                                                                  <option>POSITIVA</option>
                                                        </select>

                                                        <input type="text" class="form-control" id="cual" placeholder="CU&Aacute;L:" disabled onblur="this.value=this.value.toUpperCase();"></input>                                                    
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>DIAGN&Oacute;STICO:</label>

                                                        <textarea maxlength="140" class="form-control" id="diagnostico_consentimiento" placeholder="DIAGN&Oacute;STICO O INTERVENCI&Oacute;N QUIR&Uacute;RGICA:" style="width: 100%;"  onblur="this.value=this.value.toUpperCase();"></textarea>                                                    
                                                </div>-->


                                                <div class="form-group campos5">

                                                        <input type="text" class="form-control" id="id_diagnostico_consentimiento" style="display: none;">
                                                    
                                                        <label>DIAGN&Oacute;STICO:</label>

                                                        <textarea rows="4" class="form-control" id="diagnostico_consentimiento" placeholder="DIAGN&Oacute;STICO:" onblur="this.value=this.value.toUpperCase();"></textarea>                                                        
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-4 pull-left" >
                                                <button class="btn btn-success btn-block" onclick="masCampo5()">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    &nbsp;Agregar Campo
                                                </button>
                                                </div>
                                                  

                                                </br></br>



                                                <div class="form-group">
                                                    
                                                        <label>PROCEDIMIENTO O INTERVENCI&Oacute;N QUIR&Uacute;RGICA PROYECTADA:</label>

                                                        <select id="procedimiento_consentimiento" class="seleccion form-control" style="text-align: center;" onchange="cuenta()">

                                                        </select>                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>RIESGOS M&Aacute;S FRECUENTES INHERENTES AL PROCEDIMIENTO O INTERVENCI&Oacute;N QUIR&Uacute;RGICA Y A LAS CONDICIONES ACTUALES DEL PACIENTE:</label>

                                                        <textarea maxlength="140" class="form-control" id="riesgos_consentimiento" placeholder="RIESGOS M&Aacute;S FRECUENTES INHERENTES AL PROCEDIMIENTO O INTERVENCI&Oacute;N QUIR&Uacute;RGICA Y A LAS CONDICIONES ACTUALES DEL PACIENTE:"  onblur="this.value=this.value.toUpperCase();" rows="4"></textarea>                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>BENEFICIOS:</label>

                                                        <textarea maxlength="140" class="form-control" id="beneficios" placeholder="BENEFICIOS:"  onblur="this.value=this.value.toUpperCase();"></textarea>                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>NOMBRE COMPLETO DEL PACIENTE, FAMILIAR, TUTOR O PERSONA LEGALMENTE RESPONSABLE:</label>

                                                        <input type="text" class="form-control" id="persona" placeholder="NOMBRE COMPLETO DEL PACIENTE, FAMILIAR, TUTOR O PERSONA LEGALMENTE RESPONSABLE:"  onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>NOMBRE COMPLETO DEL TESTIGO:</label>

                                                        <input type="text" class="form-control" id="testigo1" placeholder="NOMBRE COMPLETO DEL TESTIGO:"  onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>NOMBRE COMPLETO DEL TESTIGO:</label>

                                                        <input type="text" class="form-control" id="testigo2" placeholder="NOMBRE COMPLETO DEL TESTIGO:"  onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF7()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>




    <!-- Modal myModalFECHA7 -->
                  <div class="modal fade" id="myModalFECHA7" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">NOTA DE REFERENCIA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_9" placeholder="FECHA">
                                                    
                                                </div>

                                                
                                                <div class="form-group">
                                                    
                                                        <label>FECHA Y HORA DEL ENVI&Oacute;:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-4">
                                                                 <input type="text" class="form-control" id="fecha_10" placeholder="FECHA"></input>
                                                            </div>

                                                            <div class="col-xs-12 col-md-4">

                                                                 <select id="hora_referencia" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-4">

                                                                 <select id="minuto_referencia" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>QUIEN ENV&Iacute;A:</label>

                                                        <input type="text" class="form-control" id="quien_envia" placeholder="QUIEN ENV&Iacute;A:" value="DR. ANDR&Eacute;S CALLEJAS S&Aacute;NCHEZ"  onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>QUIEN RECIBE:</label>

                                                        <input type="text" class="form-control" id="quien_recibe" placeholder="QUIEN RECIBE:" value="DR. ANDR&Eacute;S CALLEJAS S&Aacute;NCHEZ" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>MOTIVO DEL ENV&Iacute;O:</label>

                                                        <textarea class="form-control" id="motivo_envio" placeholder="MOTIVO DEL ENV&Iacute;O:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>RESUMEN CL&Iacute;NICO:</label>

                                                        <textarea class="form-control" id="resumen_clinico" placeholder="RESUMEN CL&Iacute;NICO:" rows="3" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>APP:</label>

                                                        <textarea class="form-control" id="app2" placeholder="APP:" rows="8" onblur="this.value=this.value.toUpperCase();"></textarea>                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>PA:</label>

                                                        <textarea rows="4" class="form-control" id="pa2" placeholder="PA:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();"></textarea>                                                    
                                                </div>


                                                <div class="form-group">
                                                    
                                                        <label>SIGNOS VITALES:</label>
                                                    
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="60" max="110" class="form-control" id="fc_referencia" onblur="validarfc4()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>
                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FR:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="8" max="20" class="form-control" id="fr_referencia" onblur="validarfr4()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (DIAST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta_referencia">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (SIST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta2_referencia">                                  
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TEMP:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="temp_referencia">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>C</LABEL>                                 
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>PESO:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)" >
                                                          <input type="number" class="form-control" id="peso_referencia" onblur="validarpeso2()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Kg</LABEL>                                 
                                                    </div>
                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TALLA:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="talla_referencia" onblur="validartalla2()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Metros</LABEL>                                 
                                                    </div>
                                                </div>   

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>IMC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="imc_referencia" >                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL></LABEL>                                 
                                                    </div>
                                                </div>                                               

                                                <div class="form-group">
                                                    
                                                        <label>EXPLORACI&Oacute;N F&Iacute;SICA:</label>

                                                        <textarea class="form-control" id="expliracion_fisica" placeholder="EXPLORACI&Oacute;N F&Iacute;SICA:" rows="11" onblur="this.value=this.value.toUpperCase();"></textarea>                                                    
                                                </div>                                               

                                                <div class="form-group">
                                                    
                                                        <label>ESTUDIOS DE LABORATORIO:</label>

                                                        <div id="laboratorios_referencia">

                                                            <div id="laboratorios_referencia1"></div>
                                                            <div id="laboratorios_referencia2"></div>
                                                            <div id="laboratorios_referencia3"></div>
                                                            <div id="laboratorios_referencia4"></div>
                                                            <div id="laboratorios_referencia5"></div>                                                           
                                                                
                                                            
                                                        </div>
                                                    
                                                </div>
                                            </br>

                                                <div class="form-group col-xs-12 col-md-12" style="padding-top: 20px;">
                                                    
                                                        <label>ESTUDIOS DE GABINETE:</label>

                                                        <div id="gabinetes_referencia">

                                                            <div id="gabinetes_referencia1"></div>
                                                            <div id="gabinetes_referencia2"></div>
                                                            <div id="gabinetes_referencia3"></div>
                                                            
                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <div class="form-group col-xs-12 col-md-12"><label>TRATAMIENTO ACTUAL:</label></div>

                                                        <input type="text" class="form-control" id="tratamiento_actual" placeholder="TRATAMIENTO ACTUAL:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>CATEGORIZACI&Oacute;N PRIORIDAD:</label>

                                                        <select id="categorizacion" class="seleccion form-control" style="text-align: center;">                                                                       
                                                                          <option>01 - NO URGENTE</option>
                                                                          <option>02 - IMPORTANTE</option>
                                                                          <option>03 - PRIORIDAD</option>
                                                                          <option>04 - URGENTE</option>
                                                        </select>
                                                    
                                                </div>

                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF8()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>




    <!-- Modal myModalFECHA8 -->
                  <div class="modal fade" id="myModalFECHA8" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">NOTA DE INTERCONSULTA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_11" placeholder="FECHA">
                                                    
                                                </div>

                                                
                                                <div class="form-group">
                                                    
                                                        <label>FECHA Y HORA DEL ENVI&Oacute;:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-4">
                                                                 <input type="text" class="form-control" id="fecha_12" placeholder="FECHA"></input>
                                                            </div>

                                                            <div class="col-xs-12 col-md-4">

                                                                 <select id="hora_referencia2" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-4">

                                                                 <select id="minuto_referencia2" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>DIAGN&Oacute;STICOS:</label>

                                                        <input type="text" class="form-control" id="quien_envia2" placeholder="DIAGN&Oacute;STICOS:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();" ></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>MOTIVO DE LA INTERCONSULTA:</label>

                                                        <input type="text" class="form-control" id="quien_recibe2" placeholder="MOTIVO DE LA INTERCONSULTA:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>PATOLOG&Iacute;AS PREVIAS:</label>

                                                        <textarea class="form-control" id="motivo_envio2" placeholder="PATOLOG&Iacute;AS PREVIAS:" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>-->

                                                <div class="form-group">
                                                    
                                                        <label>RESUMEN CL&Iacute;NICO:</label>

                                                        <textarea class="form-control" id="resumen_clinico2" placeholder="RESUMEN CL&Iacute;NICO:" rows="4" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>APP:</label>

                                                        <textarea class="form-control" id="app22" placeholder="APP:" rows="8" onblur="this.value=this.value.toUpperCase();"></textarea>                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>PA:</label>

                                                        <textarea rows="4" class="form-control" id="pa22" placeholder="PA:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();"></textarea>                                                    
                                                </div>




                                                <div class="form-group">
                                                    
                                                        <label>SIGNOS VITALES:</label>
                                                    
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="60" max="110" class="form-control" id="fc_referencia2" onblur="validarfc5()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>
                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FR:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="8" max="20" class="form-control" id="fr_referencia2" onblur="validarfr5()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (DIAST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta_referencia2">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (SIST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta2_referencia2">                                  
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TEMP:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="temp_referencia2">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>C</LABEL>                                 
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>PESO:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" class="form-control" id="peso_referencia2" onblur="validarpeso3()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Kg</LABEL>                                 
                                                    </div>
                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TALLA:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="talla_referencia2" onblur="validartalla3()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Metros</LABEL>                                 
                                                    </div>
                                                </div>   


                                                 <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>IMC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="imc_referencia2" >                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL></LABEL>                                 
                                                    </div>
                                                </div>                                               






                                                <div class="form-group">
                                                    
                                                        <label>EXPLORACI&Oacute;N F&Iacute;SICA:</label>

                                                        <textarea class="form-control" id="expliracion_fisica2" placeholder="EXPLORACI&Oacute;N F&Iacute;SICA:" rows="11" onblur="this.value=this.value.toUpperCase();"></textarea>                                                    
                                                </div>                                               

                                                 <div class="form-group">
                                                    
                                                        <label>ESTUDIOS DE LABORATORIO:</label>

                                                        <div id="laboratorios_inter">

                                                            <div id="laboratorios_inter1"></div>
                                                            <div id="laboratorios_inter2"></div>
                                                            <div id="laboratorios_inter3"></div>
                                                            <div id="laboratorios_inter4"></div>
                                                            <div id="laboratorios_inter5"></div>                                                           
                                                                
                                                            
                                                        </div>
                                                    
                                                </div>
                                            </br>

                                                <div class="form-group col-xs-12 col-md-12" style="padding-top: 20px;">
                                                    
                                                        <label>ESTUDIOS DE GABINETE:</label>

                                                        <div id="gabinetes_inter">

                                                            <div id="gabinetes_inter1"></div>
                                                            <div id="gabinetes_inter2"></div>
                                                            <div id="gabinetes_inter3"></div>
                                                            
                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>TRATAMIENTO ACTUAL:</label>

                                                        <input type="text" class="form-control" id="tratamiento_actual2" placeholder="TRATAMIENTO ACTUAL:" style="width: 100%;" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>CATEGORIZACI&Oacute;N PRIORIDAD:</label>

                                                        <select id="categorizacion2" class="seleccion form-control" style="text-align: center;" onblur="this.value=this.value.toUpperCase();">                                                                       
                                                                          <option>01 - NO URGENTE</option>
                                                                          <option>02 - IMPORTANTE</option>
                                                                          <option>03 - PRIORIDAD</option>
                                                                          <option>04 - URGENTE</option>
                                                        </select>
                                                    
                                                </div>



                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF9()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>








    <!-- Modal myModalFECHA9 -->
                  <div class="modal fade" id="myModalFECHA9" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CIRUG&Iacute;A FACIAL</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_13" placeholder="FECHA">
                                                    
                                                </div>

                                                
                                                <div class="form-group">
                                                    
                                                        <label>HORA:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_marcaje" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="minuto_marcaje" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>DIAGN&Oacute;STICO:</label>

                                                        <textarea class="form-control" id="diagnostico_marcaje" placeholder="DIAGN&Oacute;STICO:"></textarea>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>NOTAS:</label>

                                                        <textarea  class="form-control" id="nota_marcaje" placeholder="NOTAS:"></textarea>
                                                    
                                                </div> -->  


                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF10()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>






    <!-- Modal myModalFECHA11 -->
                  <div class="modal fade" id="myModalFECHA11" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CIRUG&Iacute;A CORPORAL</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_17" placeholder="FECHA">
                                                    
                                                </div>

                                                
                                                <div class="form-group">
                                                    
                                                        <label>HORA:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_marcaje2" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="minuto_marcaje2" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>DIAGN&Oacute;STICO:</label>

                                                        <textarea class="form-control" id="diagnostico_marcaje2" placeholder="DIAGN&Oacute;STICO:"></textarea>
                                                    
                                                </div>

                                                <!--<div class="form-group">
                                                    
                                                        <label>NOTAS:</label>

                                                        <textarea  class="form-control" id="nota_marcaje" placeholder="NOTAS:"></textarea>
                                                    
                                                </div> -->  


                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF13()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal myModalFECHA12 -->
                  <div class="modal fade" id="myModalFECHA12" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CIRUG&Iacute;A BUSTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_18" placeholder="FECHA">
                                                    
                                                </div>

                                                
                                                <div class="form-group">
                                                    
                                                        <label>HORA:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_marcaje3" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="minuto_marcaje3" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>INCISI&Oacute;N:</label>

                                                        <select id="incision" class="seleccion form-control" style="text-align: center;" onchange="busto_otro()">
                                                                          <option>TRANSAXILAR</option>
                                                                          <option>PERIAREOLAR</option>
                                                                          <option>SUBMAMARIA</option>
                                                                          <option>OTRAS</option>
                                                        </select>

                                                        <input type="text" class="form-control" id="otro_insicion" placeholder="OTRAS:" style="width: 100%;" disabled="" ></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>COLOCACI&Oacute;N:</label>

                                                        <select id="colocacion" class="seleccion form-control" style="text-align: center;">
                                                                          <option>SUBMUSCULAR</option>
                                                                          <option>SUBGLANGULAR</option>
                                                                          <option>SUBFACIAL</option>
                                                                          <option>DUAL - PLANE</option>
                                                        </select>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>VOLUMEN:</label>

                                                        <select id="volumen" class="seleccion form-control" style="text-align: center;">
                                                                          <option>SIZE 1 (250 GR.)</option>
                                                                          <option>SIZE 2 (290 GR.)</option>
                                                                          <option>SIZE 3 (330 GR.)</option>
                                                                          <option>SIZE 4 (380 GR.)</option>
                                                                          <option>SIZE 5 (430 GR.)</option>
                                                                          <option>SIZE 6 (480 GR.)</option>
                                                        </select>
                                                    
                                                </div>


                                                <div class="form-group">

                                                    <div class="col-xs-12 col-md-12">

                                                        <label>RESULTADOS DESEADOS DEL PACIENTE:</label>
                                                    </div>

                                                    <div class="col-xs-12 col-md-3">
                                                        
                                                        <img src="imagenes/busto1.png" style="width: 70px; height: 150px;"> 1<input type="checkbox" id="myCheck1" onclick="busto1()" checked="">

                                                    </div>

                                                    <div class="col-xs-12 col-md-3">
                                                        
                                                        <img src="imagenes/busto2.png" style="width: 80px; height: 150px;"> 2<input type="checkbox" id="myCheck2" onclick="busto2()">

                                                    </div>

                                                    <div class="col-xs-12 col-md-3">
                                                        
                                                        <img src="imagenes/busto3.png" style="width: 85px; height: 150px;"> 3<input type="checkbox" id="myCheck3" onclick="busto3()">

                                                    </div>

                                                    <div class="col-xs-12 col-md-3">
                                                        
                                                        <img src="imagenes/busto4.png" style="width: 85px; height: 150px;"> 4<input type="checkbox" id="myCheck4" onclick="busto4()">

                                                    </div>
                                                </div>

                                            </BR></BR></BR>
                                            </BR></BR></BR>


                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF14()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>




                    <!-- Modal myModalFECHA14 -->
                  <div class="modal fade" id="myModalFECHA14" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">RESUMEN CL&Iacute;NICO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_20" placeholder="FECHA">
                                                    
                                                </div> 

                                                <div class="form-group">
                                                    
                                                        <label>HORA:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_resumen" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="minuto_resumen" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div> 

                                                <div class="form-group">
                                                    
                                                        <label>PADECIMIENTO ACTUAL:</label>

                                                        <textarea rows="4" class="form-control" id="padecimiento_resumen" placeholder="PADECIMIENTO ACTUAL:" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group campos3">

                                                        <input type="text" class="form-control" id="id_diagnostico_estudio" style="display: none;">
                                                    
                                                        <label>DIAGN&Oacute;STICO:</label>

                                                        <textarea rows="4" class="form-control" id="diagnostico_resumen" placeholder="DIAGN&Oacute;STICO:" onblur="this.value=this.value.toUpperCase();"></textarea>                                                        
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-4 pull-left" >
                                                <button class="btn btn-success btn-block" onclick="masCampo3()">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    &nbsp;Agregar Campo
                                                </button>
                                                </div>
                                                  

                                                </br></br>

                                                <div class="form-group">
                                                    
                                                        <label>TRATAMIENTOS:</label>

                                                        <textarea rows="4" class="form-control" id="tratamientos_resumen" placeholder="TRATAMIENTOS:" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>EVOLUCI&Oacute;N:</label>

                                                        <textarea rows="4" class="form-control" id="evolucion_resumen" placeholder="EVOLUCI&Oacute;N:" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>PRON&Oacute;STICO:</label>

                                                        <textarea rows="4" class="form-control" id="pronostico_resumen" placeholder="PRON&Oacute;STICO:" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>ESTUDIOS DE LABORATORIO:</label>

                                                        <div id="laboratorios_resumen">

                                                            <div id="laboratorios_resumen1"></div>
                                                            <div id="laboratorios_resumen2"></div>
                                                            <div id="laboratorios_resumen3"></div>
                                                            <div id="laboratorios_resumen4"></div>
                                                            <div id="laboratorios_resumen5"></div>                                                           
                                                                
                                                            
                                                        </div>
                                                    
                                                </div>
                                            </br>

                                                <div class="form-group col-xs-12 col-md-12" style="padding-top: 20px;">
                                                    
                                                        <label>ESTUDIOS DE GABINETE:</label>

                                                        <div id="gabinetes_resumen">

                                                            <div id="gabinetes_resumen1"></div>
                                                            <div id="gabinetes_resumen2"></div>
                                                            <div id="gabinetes_resumen3"></div>
                                                            
                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group col-xs-12 col-md-12">
                                                    
                                                        <label>QUIEN ELABORA:</label>

                                                        <!--<input type="text" class="form-control" id="doctor_hc" placeholder="DOCTOR:">-->
                                                        <select id="doctor_resumen" class="seleccion form-control" style="text-align: center;">

                                                        </select>
                                                    
                                                </div>

                                                                                            


                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF16()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>





        <!-- Modal myModalFECHA15 -->
                  <div class="modal fade" id="myModalFECHA15" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">NOTA DE EVOLUCI&Oacute;N</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_21" placeholder="FECHA">
                                                    
                                                </div> 

                                                <div class="form-group">
                                                    
                                                        <label>HORA:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_evolucion" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="minuto_evolucion" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div> 

                                                <div class="form-group">
                                                    
                                                        <label>EVOLUCI&Oacute;N DEL CUADRO CL&Iacute;NICO:</label>

                                                        <textarea rows="4" class="form-control" id="cuadro_evolucion" placeholder="EVOLUCI&Oacute;N DEL CUADRO CL&Iacute;NICO:" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>




                                                 <div class="form-group">
                                                    
                                                        <label>SIGNOS VITALES:</label>
                                                    
                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="60" max="110" class="form-control" id="fc_evolucion" onblur="validarfc6()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>
                                                </div>




                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: right;">
                                                          <LABEL>FR:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" min="8" max="20" class="form-control" id="fr_evolucion" onblur="validarfr6()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: left;">
                                                          <LABEL>X MIN</LABEL>                                 
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (DIAST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta_evolucion">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style=" text-align: center;" id="textEF_titulos">
                                                          <LABEL>TA: (SIST&Oacute;LICA)</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"  onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="ta2_evolucion">                                  
                                                    </div>

                                                </div>


                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TEMP:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event) ">
                                                          <input type="number" class="form-control" id="temp_evolucion">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>C</LABEL>                                 
                                                    </div>

                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>TALLA:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="talla_evolucion" onblur="validartalla7()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Metros</LABEL>                                 
                                                    </div>
                                                </div>   

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>PESO:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" class="form-control" id="peso_evolucion" onblur="validarpeso7()">                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL>Kg</LABEL>                                 
                                                    </div>
                                                </div>  

                                                <div class="form-group row">

                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: right;">
                                                          <LABEL>IMC:</LABEL>                                 
                                                    </div>
                                                    <div class="col-xs-12 col-md-6" style="padding-top: 20PX;" onkeypress="return isNumberKey(event)">
                                                          <input type="number" min="0" max="3" step=".1" class="form-control" id="imc_evolucion" >                                  
                                                    </div>
                                                    <div class="col-xs-12 col-md-3" style="padding-top: 20PX; text-align: left;">
                                                          <LABEL></LABEL>                                 
                                                    </div>
                                                </div> 



                                                <div class="form-group">
                                                    
                                                        <label>ESTUDIOS DE LABORATORIO:</label>

                                                        <div id="laboratorios_evolucion">

                                                            <div id="laboratorios_evolucion1"></div>
                                                            <div id="laboratorios_evolucion2"></div>
                                                            <div id="laboratorios_evolucion3"></div>
                                                            <div id="laboratorios_evolucion4"></div>
                                                            <div id="laboratorios_evolucion5"></div>                                                           
                                                                
                                                            
                                                        </div>
                                                    
                                                </div>
                                            </br>

                                                <div class="form-group col-xs-12 col-md-12" style="padding-top: 20px;">
                                                    
                                                        <label>ESTUDIOS DE GABINETE:</label>

                                                        <div id="gabinetes_evolucion">

                                                            <div id="gabinetes_evolucion1"></div>
                                                            <div id="gabinetes_evolucion2"></div>
                                                            <div id="gabinetes_evolucion3"></div>
                                                            
                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group campos4">

                                                        <input type="text" class="form-control" id="id_diagnostico_evolucion" style="display: none;">
                                                    
                                                        <div class="col-xs-12 col-md-12" ><label>DIAGN&Oacute;STICO:</label></div>

                                                        </br></br></br></br>

                                                        <textarea rows="4" class="form-control" id="diagnostico_evolucion" placeholder="DIAGN&Oacute;STICO:" onblur="this.value=this.value.toUpperCase();"></textarea>                                                        
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-4 pull-left" >
                                                <button class="btn btn-success btn-block" onclick="masCampo4()">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    &nbsp;Agregar Campo
                                                </button>
                                                </div>
                                                  

                                                </br></br>


                                                <div class="form-group">
                                                    
                                                        <label>PRON&Oacute;STICO:</label>

                                                        <textarea rows="4" class="form-control" id="pronostico_evolucion" placeholder="PRON&Oacute;STICO:" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>TRATAMIENTO E INDICACIONES:</label>

                                                        <textarea rows="4" class="form-control" id="tratamiento_evolucion" placeholder="TRATAMIENTO E INDICACIONES:" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>


                                                <div class="form-group col-xs-12 col-md-12">
                                                    
                                                        <label>MEDICAMENTOS:</label>

                                                        <!--<input type="text" class="form-control" id="doctor_hc" placeholder="DOCTOR:">-->
                                                        <select id="medicamento_evolucion" class="seleccion form-control selectpicker" multiple style="text-align: center;">

                                                        </select>
                                                    
                                                </div> 


                                                <div class="form-group col-xs-12 col-md-12">
                                                    
                                                        <label>QUIEN ELABORA:</label>

                                                        <!--<input type="text" class="form-control" id="doctor_hc" placeholder="DOCTOR:">-->
                                                        <select id="doctor_evolucion" class="seleccion form-control" style="text-align: center;">

                                                        </select>
                                                    
                                                </div>                                              

                                                                                            


                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF17()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>








        <!-- Modal myModalFECHA16 -->
                  <div class="modal fade" id="myModalFECHA16" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">INDICACIONES PRE-OPERATORIO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_22" placeholder="FECHA">
                                                    
                                                </div> 

                                                <div class="form-group col-xs-12 col-md-12">
                                                    
                                                        <label>PROCEDIMIENTOS:</label>

                                                        <select id="procedimiento_ind_pre" class="seleccion form-control "  style="text-align: center;">

                                                        </select>
                                                    
                                                </div> 

                                                <div class="form-group col-xs-12 col-md-12">
                                                    
                                                        <label>CL&Iacute;NICA:</label>
                                                        
                                                        <select id="clinica_ind_pre" class="seleccion form-control "  style="text-align: center;">

                                                        </select>
                                                    
                                                </div> 

                                                <div class="form-group">
                                                    
                                                        <label>FECHA CIRUG&Iacute;A:</label>

                                                        <input type="text" class="form-control" id="fecha_23" placeholder="FECHA">
                                                    
                                                </div> 

                                                <div class="form-group">
                                                    
                                                        <label>HORA CIRUG&Iacute;A:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_cirugia" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="minuto_cirugia" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div>                                                                                             


                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF18()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>






     <!-- Modal myModalFECHA13 -->
                  <div class="modal fade" id="myModalFECHA13" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">PRESUPUESTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_19" placeholder="FECHA">
                                                    
                                                </div>  

                                                <div class="form-group">
                                                    
                                                        <label>Cirug&iacute;a:</label>

                                                        <select id="cirugia_presupuesto" class="seleccion form-control" style="text-align: center;" >

                                                        </select>  
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>Costo de Hospitalizaci&oacute;n:</label>

                                                        <select id="hospitalizacion" class="seleccion selectpicker form-control" style="text-align: center;" multiple >

                                                              <option>OPCION 1 - SATELITE</option>
                                                              <option>OPCION 2 - METROPOLITANO</option>
                                                              <option>OPCION 3 - INTERLOMAS</option>

                                                        </select>  
                                                    
                                                </div>                                             


                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF15()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>




    <!-- Modal FIRMA 15 commentPictureModal19 -->
                  <div class="modal fade" id="commentPictureModal19" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE MARCAJE DEL PACIENTE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas17" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-colorBtn17" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;COLOR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig-clearBtn17" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn17" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>







<!-- CIRUGÍA CORPORAL commentPictureModal20 -->
                  <div class="modal fade" id="commentPictureModal20" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CIRUG&Iacute;A DE BUSTO - MARCAJE PREOPERATORIO</h4>
                        </div>
                                              <div class="modal-body" style="text-align: center; overflow-y: auto;">
                                    
                                <div id="content" style=" font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                    </br>
                                        
                                        <div class="row">

                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. </Br></B>

                                            CIRUG&Iacute;A DE BUSTO
                                            </BR>
                                            MARCAJE PREOPERATORIO                                            
                                            

                                        </div>

                                    </br>
                                   

                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <td style="width: 150px;">  <div id="fecha_facial3"></div>  </td>
                                                <td style=" border: 1px solid white;">  </td>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td style="width: 150px; text-align: left;">    <div id="hora_facial3"></div>   </td>
                                              </tr>
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: left;">     <div id="nombre_facial3"></div>   </td>
                                                <td style=" text-align: left;">     <div id="edad_facial3"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 150px; text-align: center; background-color: #8cd4eb;">  1.- INCISI&Oacute;N  </td>
                                                <td style=" text-align: center;">     <div id="incision1"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 150px; text-align: center; background-color: #8cd4eb;">  2.- COLOCACI&Oacute;N  </td>
                                                <td style=" text-align: center;">     <div id="colocacion1"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 150px; text-align: center; background-color: #8cd4eb;">  3.- VOLUMEN  </td>
                                                <td style=" text-align: center;">     <div id="volumen1"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                    </br>

                                    <img id="facial_imagen3" src="" style="width: 560px; height: 360px;">

                                    </br>
                                    </br>


                                    <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: center; background-color: #8cd4eb;">  4.- RESULTADOS DESEADOS DEL PACIENTE   </td>
                                              </tr>
                                            </tbody>
                                    </table>

                                    <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: center; "> <img  src="imagenes/busto1.png" style="width: 70px; height: 150px;"> 1 
                                                    <div style="display:inline;" id="busto_1" ></div>    </td>
                                                <td style="width: 450px; text-align: center;">  <img  src="imagenes/busto2.png" style="width: 80px; height: 150px;"> 2 
                                                    <div style="display:inline;" id="busto_2" ></div>  </td>
                                                <td style="width: 450px; text-align: center; "> <img  src="imagenes/busto3.png" style="width: 80px; height: 150px;"> 3 
                                                    <div style="display:inline;" id="busto_3" ></div>  </td>
                                                <td style="width: 450px; text-align: center; "> <img  src="imagenes/busto4.png" style="width: 85px; height: 150px;"> 4 
                                                    <div style="display:inline;" id="busto_4" ></div>  </td>
                                              </tr>
                                            </tbody>
                                    </table>




                                    <div style=" background-image: url('imagenes/piePagina.png'); background-position: center; background-repeat:no-repeat;">

                                            <div class="row" style="margin-left: 2%;">
                                                

                                                <div class="col-xs-12 col-md-6" id="paciente_facial3" style="text-align: left;">
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="paciente_facial_firma3" style="text-align: left;">
                                                    
                                                </div>

                                            </div>

                                            </br>
                                            <div class="row" style="margin-left: 2%;">
                                                
                                                <div style="text-align: center;">
                                                    
                                                    <button type="button" class="btn btn_ac1" onclick="generarPDF14()" id="generar_facial3" style=" display: none; text-align: center; margin-left: 45%;">GENERAR PDF</button>  </br>
                                                    __________________________________________</br>
                                                    Nombre y Firma del M&eacute;dico
                                                </div>

                                            </div>

                                    </div>


                                    




                                    </div>  

                                </div>                                       

                        </div>
                      </div>                      
                    </div>
                  </div>




    <!-- Modal commentPictureModal21 -->
                  <div class="modal fade" id="commentPictureModal21" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA DEL PACIENTE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas18" height="500" width="800"  >
                                                    
                                                </div>

                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn18" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn18" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>



     <!-- Modal myModalFECHA10 -->
                  <div class="modal fade" id="myModalFECHA10" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">INDICACIONES</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="form-group">
                                                    
                                                        <label>FECHA:</label>

                                                        <input type="text" class="form-control" id="fecha_15" placeholder="FECHA">
                                                    
                                                </div>

                                                
                                                <div class="form-group">
                                                    
                                                        <label>HORA:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_indicaciones" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="minuto_indicaciones" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div>

                                                 <div class="form-group">
                                                    
                                                        <label>PROCEDIMIENTO:</label>

                                                        <select id="procedimiento_indicaciones" class="seleccion form-control" style="text-align: center;" onchange="cuenta2()" >

                                                        </select>                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>INDICACIONES:</label>

                                                        <textarea class="form-control" id="indicaciones_indicaciones" placeholder="INDICACIONES:" rows="10" onblur="this.value=this.value.toUpperCase();"></textarea>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>FECHA PR&Oacute;XIMA CITA:</label>

                                                        <input type="text" class="form-control" id="fecha_16" placeholder="FECHA">
                                                    
                                                </div>

                                                
                                                <div class="form-group">
                                                    
                                                        <label>HORA PR&Oacute;XIMA CITA:</label>                                                                                                            
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="hora_indicaciones_proxima" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                 </select>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">

                                                                 <select id="minuto_indicaciones_proxima" class="seleccion form-control" style="text-align: center;">
                                                                          <option>00</option>
                                                                          <option>01</option>
                                                                          <option>02</option>
                                                                          <option>03</option>
                                                                          <option>04</option>
                                                                          <option>05</option>
                                                                          <option>06</option>
                                                                          <option>07</option>
                                                                          <option>08</option>
                                                                          <option>09</option>
                                                                          <option>10</option>
                                                                          <option>11</option>
                                                                          <option>12</option>
                                                                          <option>13</option>
                                                                          <option>14</option>
                                                                          <option>15</option>
                                                                          <option>16</option>
                                                                          <option>17</option>
                                                                          <option>18</option>
                                                                          <option>19</option>
                                                                          <option>20</option>
                                                                          <option>21</option>
                                                                          <option>22</option>
                                                                          <option>23</option>
                                                                          <option>24</option>
                                                                          <option>25</option>
                                                                          <option>26</option>
                                                                          <option>27</option>
                                                                          <option>28</option>
                                                                          <option>29</option>
                                                                          <option>30</option>
                                                                          <option>31</option>
                                                                          <option>32</option>
                                                                          <option>33</option>
                                                                          <option>34</option>
                                                                          <option>35</option>
                                                                          <option>36</option>
                                                                          <option>37</option>
                                                                          <option>38</option>
                                                                          <option>39</option>
                                                                          <option>40</option>
                                                                          <option>41</option>
                                                                          <option>42</option>
                                                                          <option>43</option>
                                                                          <option>44</option>
                                                                          <option>45</option>
                                                                          <option>46</option>
                                                                          <option>47</option>
                                                                          <option>48</option>
                                                                          <option>49</option>
                                                                          <option>50</option>
                                                                          <option>51</option>
                                                                          <option>52</option>
                                                                          <option>53</option>
                                                                          <option>54</option>
                                                                          <option>55</option>
                                                                          <option>56</option>
                                                                          <option>57</option>
                                                                          <option>58</option>
                                                                          <option>59</option>
                                                                 </select>
                                                            </div>

                                                        </div>
                                                    
                                                </div>   

                                                <div class="form-group">
                                                    
                                                        <label>Dr. (a):</label>

                                                        <input type="text" class="form-control" id="dr_indicaciones" placeholder="Dr.(a):" value="DR. ANDR&Eacute;S CALLEJAS S&Aacute;NCHEZ" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>TEL&Eacute;FONO(S):</label>

                                                        <input type="text" class="form-control" id="telefono_indicaciones" placeholder="TEL&Eacute;FONO(S):" onkeypress="return isNumberKey(event)" value="5525690060"></input>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    
                                                        <label>FAMILIAR:</label>

                                                        <input type="text" class="form-control" id="familiar_indicaciones" placeholder="FAMILIAR:" onblur="this.value=this.value.toUpperCase();"></input>
                                                    
                                                </div>



                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="abrirPDF12()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>




    <!-- Modal FIRMA commentPictureModal -->
                  <div class="modal fade" id="commentPictureModal" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>


    <!-- Modal FIRMA 2  commentPictureModal2 -->
                  <div class="modal fade" id="commentPictureModal2" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas2" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn2" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn2" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>


    <!-- Modal 1 myModal1-->
                
                <div class="modal fade" id="myModal1" >
                    <div class="modal-dialog" style=" overflow-y: initial !important">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h6 class="modal-title" style=" text-align: center;">PDF AVISO DE PRIVACIDAD PARA PROTECCI&Oacute;N DE DATOS PERSONALES</h6>
                        </div>
                        <div class="modal-body" style="text-align: center; overflow-y: auto;">
                                    
                                <div id="content" style=" font-size: 9px;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                    </br>
                                        
                                        <div class="row">

                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. </Br>

                                            AVISO DE PRIVACIDAD PARA PROTECCI&Oacute;N DE DATOS PERSONALES</B>
                                            

                                        </div>

                                    </br>
                                    </br>
    


                                        <div class="row" style="text-align: center; font-family: Georgia; font-style: italic; ">

                                            <B><div id="fecha_pdf"></div></B>                                           

                                        </div>

                                    </br>

                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat; ">
                                            

                                            En t&eacute;rminos de lo previsto en la Ley Federal de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de los Particulares (en lo sucesivo denominada como "la Ley"), te pedimos que leas cuidadosamente los T&eacute;rminos y Condiciones contenidos en este Aviso de Privacidad, ya que la simple aportaci&oacute;n que   hagas de tus datos Personales mediante su env&iacute;o a Plastic and Beauty Medical Group S.A de C.V.,        ya sea a trav&eacute;s de nuestras p&aacute;ginas de  Internet  (http://www.plasticandbeautymexico.com);  y/o  a trav&eacute;s de las diferentes  redes  sociales; y/o  al  correo  electr&oacute;nico  de  los  diferentes  representantes de Plastic and Beauty Medical Group S.A de C.V.; y/o a trav&eacute;s  de reclutadores, agentes,  colaboradores, constituye la aceptaci&oacute;n de estos T&eacute;rminos y Condiciones y en consecuencia nos autorizas expresamente al tratamiento de tus datos personales:

                                        </br></br>

                                        T&eacute;rminos y Condiciones

                                    </br></br>

                                            1. El presente Aviso tiene por objeto la protecci&oacute;n de tus datos personales, mediante su tratamiento leg&iacute;timo, controlado e informado, a efecto de garantizar su privacidad, as&iacute; como tu derecho a la autodeterminaci&oacute;n informativa.
                                        </br></br>
                                            2.- Conforme al art&iacute;culo 3, fracci&oacute;n V, de la Ley, se entiende por Datos Personales: Cualquier informaci&oacute;n concerniente a una persona f&iacute;sica identificada o identificable.
                                        </br></br>
                                            3.- Plastic and Beauty Medical Group S.A. de C.V.  (en  lo  sucesivo  "Plastic  &  Beauty"),  de conformidad a lo dispuesto por la fracci&oacute;n I del art&iacute;culo 16 de la Ley, ser&aacute; el Responsable de tu informaci&oacute;n personal (Datos Personales).
                                        </br></br>
                                            4.- Plastic & Beauty tiene como objetivo mantener informados a sus socios/as, pacientes, clientes, ciberseguidores, y para tal efecto proporciona diversos  servicios  los  cuales  de  manera  enunciativa m&aacute;s no limitativa consisten en los siguientes: Comunicaci&oacute;n constante a trav&eacute;s de correo electr&oacute;nico, llamada telef&oacute;nica, SMS, redes sociales sobre eventos, campa&ntilde;as, promociones, ofertas, recopilaci&oacute;n   de datos con fines estad&iacute;sticos, env&iacute;o de newsletters, etc. Para proporcionarte dichos servicios es necesario tratar y en algunos casos, transferir algunos de tus datos personales.
                                        </br></br>
                                    </div>
                                    <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 0px; margin-right: 0px; background-image: url('imagenes/piePagina.png'); background-position: left; background-repeat:no-repeat; background-size: 720px 90px; height: 200px;">


                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px;">


                                            5.- Al enviar v&iacute;a correo electr&oacute;nico tus datos personales a los diferentes representantes de Plastic & Beauty; y/o cumplimentar cualquiera de las solicitudes en l&iacute;nea que aparecen en la p&aacute;gina de Internet  de Plastic & Beauty; y/o cumplimentar los formatos de asociaci&oacute;n para pacientes, clientes o socios; y/
                                            o proporcionar tus datos a trav&eacute;s de las diversas plataformas y redes sociales; y/o al proporcionarlos   v&iacute;a telef&oacute;nica a los diferentes representantes de Plastic & Beauty, aceptas y autorizas  a  Plastic & Beauty a utilizar y tratar de forma automatizada tus datos personales e informaci&oacute;n suministrados, los cuales formar&aacute;n parte de nuestra base de datos con la finalidad de usarlos en forma enunciativa, m&aacute;s  no limitativa para: identificarte, ubicarte, comunicarte, contactarte, enviarte informaci&oacute;n, actualizar nuestra base de datos, obtener estad&iacute;sticas, promocionar los servicios, programas, cursos y eventos    de Plastic & Beauty.

                                        </div>  

                                    </div>
                              
                                </div> 

                                <div id="content2" style=" font-size: 9px;">     

                                        <div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img src="imagenes/logo2.png" width="12%" height="12%">
                                                <img class="pull-right" src="imagenes/logo3.png" class="pull-right" width="12%" height="12%">
                                            </div>
                                        </div>

                                    </br>
                                        
                                        <div class="row">

                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. </Br>

                                            AVISO DE PRIVACIDAD PARA PROTECCI&Oacute;N DE DATOS PERSONALES</B>
                                            

                                        </div>

                                    </br>
                                    </br>
    

                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat; ">
                                            

                                            6.- La temporalidad del manejo de tus Datos Personales ser&aacute; indefinida a partir de la fecha en que nos
                                            los proporciones, pudiendo oponerte al manejo de los mismos en cualquier momento que lo consideres
                                            oportuno.

                                            </br></br>

                                            7.- Plastic & Beauty como responsable del tratamiento de tus datos personales, est&aacute; obligada a
                                            cumplir con los principios de licitud, consentimiento, informaci&oacute;n, calidad, finalidad, lealtad,
                                            proporcionalidad y responsabilidad tutelados en la Ley; por tal motivo con fundamento en los art&iacute;culos
                                            13 y 14 de la Ley, Plastic & Beauty se compromete a guardar estricta confidencialidad de tus datos
                                            personales, as&iacute; como a mantener las medidas de seguridad administrativas, t&eacute;cnicas y f&iacute;sicas que
                                            permitan protegerlos contra cualquier da&ntilde;o, p&eacute;rdida, alteraci&oacute;n, acceso o tratamiento no autorizado.

                                            </br></br>


                                            8.- En t&eacute;rminos de lo establecido por el art&iacute;culo 22 de la Ley, tienes derecho en cualquier momento a
                                            ejercer tus derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n al tratamiento de tus datos
                                            personales, mediante la solicitud v&iacute;a correo electr&oacute;nico dirigido a Andr&eacute;s Callejas
                                            S&aacute;nchez (drcallejasplasticbeauty@gmail.com) para asuntos relacionados con la Base de datos y/o
                                            Atenci&oacute;n a Socios, o por escrito en nuestro domicilio ubicado en Profesa No. 32, Col. Valle de
                                            Santa M&oacute;nica, Tlalnepantla, CP. 54057, Estado de M&eacute;xico, M&eacute;xico. En cumplimiento al art&iacute;culo 29
                                            de la Ley, dicha solicitud deber&aacute; contener los siguientes datos: a) Tu nombre y domicilio u
                                            otro medio para comunicarte la respuesta a tu solicitud; b) Los documentos que acrediten tu identidad
                                            o, en su caso, la representaci&oacute;n legal de la persona que realiza la solicitud a tu nombre; c) La
                                            descripci&oacute;n clara y precisa de los datos personales respecto de los que buscas ejercer alguno de
                                            los derechos mencionados en el p&aacute;rrafo anterior, y d) Cualquier otro elemento o documento
                                            que facilite la localizaci&oacute;n de tus datos personales. En caso de solicitar la rectificaci&oacute;n de
                                            datos personales, adicionalmente deber&aacute;s indicar las modificaciones a realizarse y aportar la
                                            documentaci&oacute;n que sustente tu petici&oacute;n. La respuesta a tu solicitud se te comunicar&aacute; en un plazo de
                                            veinte d&iacute;as h&aacute;biles, contados desde la fecha en que se recibi&oacute;, pudiendo ampliarse a veinte d&iacute;as m&aacute;s en
                                            los casos que as&iacute; lo establezcan la Ley; a efecto de que de resultar procedente, se lleven a cabo las
                                            medidas adoptadas para cumplir con tu solicitud, mismas que se llevar&aacute;n a cabo dentro de los quince
                                            d&iacute;as h&aacute;biles siguientes a la fecha en que se comunique la respuesta.

                                            </br></br>


                                            9.- Plastic & Beauty ocasionalmente modificar&aacute; y corregir&aacute; este Aviso de Privacidad, por lo tanto te
                                            pedimos que revises este aviso regularmente en la p&aacute;gina (http://www.plasticandbeautymexico.com)
                                            para que est&eacute;s enterado de los cambios y veas c&oacute;mo te pueden afectar.

                                    </br></br>

                                    </div>
                                    <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 0px; margin-right: 0px; background-image: url('imagenes/piePagina.png'); background-position: left; background-repeat:no-repeat; background-size: 720px 120px; height: 150px;">


                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px;">


                                            10.- Te sugerimos conocer y analizar el contenido de la Ley Federal de Protecci&oacute;n de Datos
                                            Personales en Posesi&oacute;n de los Particulares. Estamos a tus &oacute;rdenes para cualquier aclaraci&oacute;n a
                                            este respecto a la direcci&oacute;n de correo electr&oacute;nico Andr&eacute;s Callejas
                                            S&aacute;nchez (drcallejasplasticbeauty@gmail.com) para asuntos relacionados con la Base de datos y/o
                                            Atenci&oacute;n a Socios, o por escrito en nuestro domicilio ubicado en Profesa No. 32, Col. Valle de
                                            Santa M&oacute;nica, Tlalnepantla, CP. 54057, Estado de M&eacute;xico, M&eacute;xico.                                            

                                        </div>

                                    </br></br>   


                                        <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic; width: 50%;">

                                            </br></br> <B><div style="margin-bottom: 0px; padding-bottom: 0px;" id="nombre_pdf"></div>_______________________________</br>Nombre Completo del Paciente o Cliente</B>

                                        </div>


                                        <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic; width: 50%;">

                                            </br><button type="button" class="btn btn_ac1" onclick="firmaPDF()" style="margin-left: 15%;">FIRMAR</button>  <B>_______________________________</br>Firma del Paciente o Cliente</B>

                                        </div>

                                            

                                    </div>
                                        



                                </div>  




                                    


                                      

                        </div>
                      </div>                      
                    </div>
                  </div>



    <!-- AUTORIZACION PARA LA CAPTURA DE IMAGENES -->
                <div class="modal fade" id="myModalIMAGENES" >
                    <div class="modal-dialog" style=" overflow-y: initial !important">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h6 class="modal-title" style=" text-align: center;">PDF AUTORIZACI&Oacute;N PARA LA CAPTURA DE IM&Aacute;GENES</h6>
                        </div>
                        <div class="modal-body" style="text-align: center; overflow-y: auto;">
                                    
                                <div id="content" style=" font-size: 9px;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                    </br>
                                        
                                        <div class="row">

                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. </Br>

                                            AUTORIZACI&Oacute;N PARA LA CAPTURA DE IM&Aacute;GENES</B>
                                            

                                        </div>

                                    </br>
                                    </br>
                                    </br>

                                        <div class="row" style="text-align: left; font-family: Georgia; font-style: italic; margin-left: 35px; ">

                                            <B><div id="fecha_pdf2"></div></B>                                           

                                        </div>

                                    </br>

                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat; ">                                            

                                            De una parte <b>Plastic and Beauty Medical Group S.A. de C.V.</b> con domicilio en Profesa 32, Valle de Santa M&oacute;nica, Tlalnepantla, Estado de M&eacute;xico, CP 54057, en adelante DENOMINADA <b> PLASTIC & BEAUTY.</b>

                                        </br></br>

                                         <div id="nombre_paciente"></div> 

                                    </br>
                                            El paciente Declara:
                                        </br></br>
                                            El paciente autoriza a Plastic & Beauty, as&iacute; como a todas aquellas terceras personas f&iacute;sicas o jur&iacute;dicas a las que la empresa pueda ceder los derechos de explotaci&oacute;n sobre las im&aacute;genes, o parte de las mismas, a que indistintamente puedan utilizar todas la im&aacute;genes, o partes de las mismas en las que intervengo como modelo anat&oacute;mico.
                                        </br></br>
                                            Mi autorizaci&oacute;n tiene &aacute;mbito geogr&aacute;fico determinado por lo que la empresa y otras personas f&iacute;sicas o jur&iacute;dicas a las que la empresa pueda ceder los derechos de explotaci&oacute;n sobre las fotograf&iacute;as, o partes de las mismas, en las que intervengo como la cualquier otro pa&iacute;s.
                                        </br></br>
                                            Mi autorizaci&oacute;n se refiere a la totalidad de usos que puedan tener las im&aacute;genes, o partes de las mismas, en las que aparezco como modelo anat&oacute;mico, utilizando los medios t&eacute;cnicos conocidos en la actualidad y los que pudieran desarrollarse en el futuro, y para cualquier aplicaci&oacute;n. Todo ello con la &uacute;nica salvedad y limitaci&oacute;n de aquellas utilizaciones o aplicaciones que pudieran atentar al derecho al honor en los t&eacute;rminos previstos en la Ley Org&aacute;nica 1/85, de 5 de Mayo, de Protecci&oacute;n Civil al Derecho al Honor, la Intimidad Personal y familiar y a la Propia Imagen.
                                        </br></br>
                                            Y al art. 87 de la Ley Federal del Derecho de Autor: "El retrato de una persona s&oacute;lo puede ser usado o publicado, con su consentimiento expreso, o bien con el de sus representantes o los t&iacute;tulares de los derechos correspondientes. La autorizaci&oacute;n de usar o publicar el retrato podr&aacute; revocarse por quien la otorg&oacute; qui&eacute;n, en su caso, responder&aacute; por los da&ntilde;os y perjuicios que pudiera ocasionar dicha revocaci&oacute;n.
                                        </br></br>
                                            Cuando una persona se dejare retratar, se presume dque ha otrogado el consentimiento a que se refiere el p&aacute;rrafo anterior y no tendr&aacute; derecho a revocarlo, siempre que se utilice en los t&eacute;rminos y para los fines pactados.
                                        </br></br>
                                    </div>
                                    <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 0px; margin-right: 0px; background-image: url('imagenes/piePagina.png'); background-position: left; background-repeat:no-repeat; background-size: 720px 90px; height: 200px;">


                                        <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px;">


                                            No ser&aacute; necesario el consentimiento a que se refiere este art&iacute;culo cuando se trate del retrato de una persona que forme parte menor de un conjunto o la imagen sea tomada en un lugar p&uacute;blico y con fines informativos, m&eacute;dicos, cient&iacute;ficos o period&iacute;sticos."

                                        </div>                  

                                    </div>
                      

                                </div> 




                                <div id="content2" style=" font-size: 9px;">     

                                        <div class="row">
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class="pull-left" src="imagenes/logo1.png" width="18%" height="18%">
                                                <img src="imagenes/logo2.png" width="12%" height="12%">
                                                <img class="pull-right" src="imagenes/logo3.png" class="pull-right" width="12%" height="12%">
                                            </div>
                                        </div>

                                    </br>
                                        
                                        <div class="row">

                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. </Br>

                                            AUTORIZACI&Oacute;N PARA LA CAPTURA DE IM&Aacute;GENES</B>
                                            

                                        </div>

                                    </br></br></br>
                                    </br>
    

                                <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 35px; margin-right: 35px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat; ">
                                        </br></br></br></br>   

                                            Mi autorizaci&oacute;n fija l&iacute;mite de tiempo para su concesi&oacute;n y para la explotaci&oacute;n de las im&aacute;genes, o parte de las mismas, en las que aparezco como modelo, por lo que mi autorizaci&oacute;n se considera concedida por un plazo de tiempo ilimitado para televisi&oacute;n y cualquier medio electr&oacute;nico, incluyendo internet. y para cualquier medio impreso.

                                            </br></br></br>

                                            Se considera como inicio del tiempo, una vez que la toma de im&aacute;genes se realice, salga por primera vez al aire o este por primera vez en alg&uacute;n medio impreso, respectivamente.

                                            </br></br></br>

                                            Los pacientes liberan de cualquier cuesti&oacute;n jur&iacute;dica, al cliente final, PLASTIC & BEAUTY y sus representantes f&iacute;sicos y legales, en el presente o futuro, debiendo de sujetarse a lo acordado en este contrato, con parte PLASTIC & BEAUTY.

                                             </br></br></br>

                                            Cesi&oacute;n de mis derechos de imagen sobre las fotograf&iacute;as y/ filmaci&oacute;n tomadas, aceptando estar conforme con el citado acuerdo. 

                                            </br></br></br></br></br></br>
                                            

                                        <DIV class="row">

                                            <div class="row col-xs-12 col-md-6" style="vertical-align: middle;" >

                                                <button type="button" class="btn btn_ac1" onclick="firmaPDF2()" style="margin-left: 35%; bottom:0px; margin-top: 30%; ">FIRMAR</button>

                                            </div>

                                            <div class="row col-xs-12 col-md-6" >

                                                <img id="firma_representante" src="firmas/ANDRES CALLEJAS SANCHEZ_firmaMedico.png" style="width: 250px; height: 120px;">

                                            </div>

                                        </div>


                                        <DIV class="row">

                                            <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic; ">

                                            <B><div style="margin-bottom: 0px; padding-bottom: 0px;" id="nombre_pdf"></div></br>________________________________</br>Firma del Paciente</br></B>
                                            </div>


                                            <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic; ">

                                            <B>ANDR&Eacute;S CALLEJAS S&Aacute;NCHEZ</br>_______________________________</br>PLASTIC & BEAUTY</B>                                    

                                            </div>

                                            </br></br></br></br>  </br></br></br></br> 
                                        </DIV>  

                                    </div>

                           

                                    <div class="row" style="text-align: justify; font-family: Georgia; margin-left: 0px; margin-right: 0px; background-image: url('imagenes/piePagina.png'); background-position: left; background-repeat:no-repeat; background-size: 720px 120px; height: 150px;">
                                    </div>
                                </div>
                 

                        </div>
                      </div>                      
                    </div>
                  </div>





    <!-- Modal FIRMA 3 commentPictureModal3 -->
                  <div class="modal fade" id="commentPictureModal3" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA PACIENTE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas3" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn3" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn3" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>






    <!-- Modal FIRMA 4 commentPictureModal4 -->
                  <div class="modal fade" id="commentPictureModal4" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA FAMILIAR </h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas4" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn4" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn4" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal FIRMA 5 commentPictureModal5 -->
                  <div class="modal fade" id="commentPictureModal5" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA PACIENTE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas5" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn5" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn5" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>




    <!-- Modal FIRMA 6 commentPictureModal6 -->
                  <div class="modal fade" id="commentPictureModal6" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA TESTIGO 1</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas6" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn6" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn6" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal FIRMA 7 commentPictureModal7 -->
                  <div class="modal fade" id="commentPictureModal7" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA TESTIGO 2</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas7" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn7" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn7" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>





    <!-- Modal FIRMA 8 commentPictureModal8 -->
                  <div class="modal fade" id="commentPictureModal8" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA DEL PACIENTE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas8" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn8" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn8" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal FIRMA 9 commentPictureModal9 -->
                  <div class="modal fade" id="commentPictureModal9" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE MARCAJE DEL PACIENTE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas9" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-colorBtn9" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;COLOR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig-clearBtn9" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn9" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>




<!-- Modal FIRMA 10 commentPictureModal10 CIRUGÍA FACIAL-->
                  <div class="modal fade" id="commentPictureModal10" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CIRUG&Iacute;A FACIAL - MARCAJE PREOPERATORIO</h4>
                        </div>
                                              <div class="modal-body" style="text-align: center; overflow-y: auto;">
                                    
                                <div id="content" style=" font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                    </br>
                                        
                                        <div class="row">

                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. </Br></B>

                                            CIRUG&Iacute;A FACIAL
                                            </BR>
                                            MARCAJE PREOPERATORIO                                            
                                            

                                        </div>

                                    </br>
                                   

                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <td style="width: 150px;">  <div id="fecha_facial"></div>  </td>
                                                <td style=" border: 1px solid white;">  </td>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td style="width: 150px; text-align: left;">    <div id="hora_facial"></div>   </td>
                                              </tr>
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: left;">     <div id="nombre_facial"></div>   </td>
                                                <td style=" text-align: left;">     <div id="edad_facial"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -10px; ">
                                            <thead>
                                              <tr>
                                                <td style="text-align: left; vertical-align:text-top; height:70px;">     <div id="diag_facial"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                    </br>

                                    <img id="facial_imagen" src="" style="width: 560px; height: 260px;">

                                    </br>
                                    </br>

                                    <table class="table table-bordered" style="margin-top: -10px; ">
                                        <thead>
                                          <tr>
                                            <td style="text-align: left; vertical-align:text-top; height:70px;">     <div id="nota_facial"></div>   </td>
                                          </tr>
                                        </tbody>
                                    </table>

                                    </br>
                                    </br>

                                    <div style=" background-image: url('imagenes/piePagina.png'); background-position: center; background-repeat:no-repeat;">

                                            <div class="row" style="margin-left: 2%;">
                                                

                                                <div class="col-xs-12 col-md-6" id="paciente_facial" style="text-align: left;">
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="paciente_facial_firma" style="text-align: left;">
                                                    
                                                </div>

                                            </div>

                                            </br>
                                            <div class="row" style="margin-left: 2%;">
                                                
                                                <div style="text-align: center;">
                                                    
                                                    <button type="button" class="btn btn_ac1" onclick="generarPDF11()" id="generar_facial" style=" display: none; text-align: center; margin-left: 45%;">GENERAR PDF</button>  </br>
                                                    __________________________________________</br>
                                                    Nombre y Firma del M&eacute;dico
                                                </div>

                                            </div>

                                    </div>


                                    




                                    </div>  

                                </div>                                       

                        </div>
                      </div>                      
                    </div>
                  </div>





    <!-- Modal FIRMA 11 commentPictureModal11 -->
                  <div class="modal fade" id="commentPictureModal11" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA DEL PACIENTE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas10" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn10" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn10" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>




    <!-- Modal FIRMA 12 commentPictureModal12 -->
                  <div class="modal fade" id="commentPictureModal12" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">DATOS DE REGISTRO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                             <div class="form-group">
                                                    
                                                        <label>NOTAS:</label>

                                                        <textarea  class="form-control" id="nota_marcaje" placeholder="NOTAS:" rows="5"></textarea>
                                                    
                                                </div>    



                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="registroNota()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal FIRMA 15 commentPictureModal15 -->
                  <div class="modal fade" id="commentPictureModal15" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE MARCAJE DEL PACIENTE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas15" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-colorBtn15" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;COLOR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig-clearBtn15" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn15" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>




<!-- CIRUGÍA CORPORAL commentPictureModal16 -->
                  <div class="modal fade" id="commentPictureModal16" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CIRUG&Iacute;A CORPORAL - MARCAJE PREOPERATORIO</h4>
                        </div>
                                              <div class="modal-body" style="text-align: center; overflow-y: auto;">
                                    
                                <div id="content" style=" font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                    </br>
                                        
                                        <div class="row">

                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. </Br></B>

                                            CIRUG&Iacute;A CORPORAL
                                            </BR>
                                            MARCAJE PREOPERATORIO                                            
                                            

                                        </div>

                                    </br>
                                   

                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <td style="width: 150px;">  <div id="fecha_facial2"></div>  </td>
                                                <td style=" border: 1px solid white;">  </td>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td style="width: 150px; text-align: left;">    <div id="hora_facial2"></div>   </td>
                                              </tr>
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: left;">     <div id="nombre_facial2"></div>   </td>
                                                <td style=" text-align: left;">     <div id="edad_facial2"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -10px; ">
                                            <thead>
                                              <tr>
                                                <td style="text-align: left; vertical-align:text-top; height:70px;">     <div id="diag_facial2"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                    </br>

                                    <img id="facial_imagen2" src="" style="width: 560px; height: 260px;">

                                    </br>
                                    </br>

                                    <table class="table table-bordered" style="margin-top: -10px; ">
                                        <thead>
                                          <tr>
                                            <td style="text-align: left; vertical-align:text-top; height:70px;">     <div id="nota_facial2"></div>   </td>
                                          </tr>
                                        </tbody>
                                    </table>

                                    </br>
                                    </br>

                                    <div style=" background-image: url('imagenes/piePagina.png'); background-position: center; background-repeat:no-repeat;">

                                            <div class="row" style="margin-left: 2%;">
                                                

                                                <div class="col-xs-12 col-md-6" id="paciente_facial2" style="text-align: left;">
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="paciente_facial_firma2" style="text-align: left;">
                                                    
                                                </div>

                                            </div>

                                            </br>
                                            <div class="row" style="margin-left: 2%;">
                                                
                                                <div style="text-align: center;">
                                                    
                                                    <button type="button" class="btn btn_ac1" onclick="generarPDF13()" id="generar_facial2" style=" display: none; text-align: center; margin-left: 45%;">GENERAR PDF</button>  </br>
                                                    __________________________________________</br>
                                                    Nombre y Firma del M&eacute;dico
                                                </div>

                                            </div>

                                    </div>


                                    




                                    </div>  

                                </div>                                       

                        </div>
                      </div>                      
                    </div>
                  </div>






    <!-- Modal NOTAS MARCAJE 2 commentPictureModal17 -->
                  <div class="modal fade" id="commentPictureModal17" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">DATOS DE REGISTRO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                             <div class="form-group">
                                                    
                                                        <label>NOTAS:</label>

                                                        <textarea  class="form-control" id="nota_marcaje2" placeholder="NOTAS:" rows="5"></textarea>
                                                    
                                                </div>    



                                                <div class="form-group">

                                                        <button class="btn btn-primary btn-block" onclick="registroNota2()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                             

                        </div>
                      </div>
                      
                    </div>
                  </div>




    <!-- Modal commentPictureModal18 -->
                  <div class="modal fade" id="commentPictureModal18" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA DEL PACIENTE</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas16" height="500" width="800"  >
                                                    
                                                </div>

                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn16" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn16" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>



<!-- Modal NOTA ALTA -->
                  <div class="modal fade" id="NOTA_ALTA" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">NOTA ALTA</h4>
                        </div>
                                              <div class="modal-body" style="text-align: center; overflow-y: auto;">
                                    
                                <div id="content" style=" font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                    </br>
                                        
                                        <div class="row">

                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. </Br></B>

                                            NOTA DE ALTA                                         
                                            

                                        </div>

                                    </br>
                                   

                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <td style="width: 150px;">  <div id="fecha_nota"></div>  </td>
                                                <td style=" border: 1px solid white;">  </td>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td style="width: 150px;">    <div id="hora_nota"></div>   </td>
                                              </tr>
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: left;">     <div id="nombre_nota"></div>   </td>
                                                <td style=" text-align: left;">     <div id="edad_nota"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: 0px; ">
                                            <thead>
                                              <tr>
                                                <td style="text-align: left;">     <div id="diag_nota"></div>   </td>
                                              </tr>
                                              <tr>
                                                <td style="text-align: left;">     <div id="ciru_nota"></div>   </td>
                                              </tr>
                                              <tr>
                                                <td style="text-align: left;">     <div id="cirujano_nota"></div>   </td>
                                              </tr>
                                              <tr>
                                                <td style="text-align: left;">     <div id="tipo_nota"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: center;"> Signos Vitales:  </td>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; ">
                                            <thead>
                                              <tr>
                                                <td style="text-align: center;">     <div id="fc_nota2"></div>   </td>
                                                <td style="text-align: center;">     <div id="fr_nota2"></div>   </td>
                                                <td style="text-align: center;">     <div id="ta_nota2"></div>   </td>
                                                <td style="text-align: center;">     <div id="temp_nota2"></div>   </td>
                                                <td style="text-align: center;">     <div id="talla_nota2"></div>   </td>
                                                <td style="text-align: center;">     <div id="peso_nota2"></div>   </td>
                                                <td style="text-align: center;">     <div id="imc_nota2"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                    <table class="table table-bordered" style="margin-top: -20px; ">
                                        <thead>
                                          <tr>
                                            <td style="text-align: justify; vertical-align:text-top; height:60px;">     <div id="exploracion_nota"></div>   </td>
                                          </tr>
                                        </tbody>
                                    </table>

                                        <!--<table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: left;">     <div id="idx_nota"></div>   </td>
                                              </tr>
                                            </tbody>
                                        </table>-->


                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: center;"> Plan:  </td>
                                            </tbody>
                                        </table>
                                    <table class="table table-bordered" style="margin-top: -20px; ">
                                        <thead>
                                          <tr>
                                            <td style="text-align: justify; vertical-align:text-top; height:60px;">     <div id="plan_nota"></div>  


                                                <button type="button" class="btn btn_ac1" onclick="fotoNota()" id="foto_nota" style=" text-align: center; margin-left: 80%;">TOMAR FOTO</button>
                                                <input type="file" id="my_file1_1"  style="display: none;" accept="image/*"/>

                                                <img id="foto_nota_imagen" style="text-align: right; vertical-align: top; display: none;" src="" style="width: 80px; height: 80px;">

                                            </td>
                                          </tr>
                                        </tbody>
                                    </table>


                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: center;"> Cita de Revisi&oacute;n:  </td>
                                            </tbody>
                                        </table>
                                    <table class="table table-bordered" style="margin-top: -20px; ">
                                        <thead>
                                          <tr>
                                            <td style="text-align: center;">     <div id="cita_nota"></div>   </td>
                                          </tr>
                                        </tbody>
                                    </table>


                                    </br>
                                    </br>

                                    <div style=" background-image: url('imagenes/piePagina.png'); background-position: center; background-repeat:no-repeat;">

                                            <div class="row" style="margin-left: 2%;">
                                                

                                                <div class="col-xs-12 col-md-6" id="paciente_nota" style="text-align: left;">
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="paciente_nota_firma" style="text-align: left;">
                                                    
                                                </div>

                                            </div>

                                            </br></br></br>

                                            <div class="row" style="margin-left: 2%;">
                                                

                                                <div class="col-xs-12 col-md-6" id="familiar_nota" style="text-align: left;">
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="familiar_nota_firma" style="text-align: left;">
                                                    
                                                </div>

                                            </div>

                                            </br>
                                            <div class="row" style="margin-left: 2%;">
                                                
                                                <div style="text-align: center;">
                                                    
                                                    <button type="button" class="btn btn_ac1" onclick="generarPDF6()" id="generar_nota" style=" display: none; text-align: center; margin-left: 45%;">GENERAR PDF</button>  </br>
                                                    __________________________________________</br>
                                                    Nombre y Firma del M&eacute;dico
                                                </div>

                                            </div>

                                    </div>


                                    </div>  

                                </div>                                       

                        </div>
                      </div>                      
                    </div>
                  </div>




    <!-- Modal TOMAR FOTO-->
                
                <div class="modal fade" id="modal_foto" >
                    <div class="modal-dialog">                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">TOMAR FOTO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                                <div class="form-group">
                                                        <video onclick="snapshot1(this);" width=90% height=90% id="video1" controls autoplay></video>
                                                </div>

                                                <div class="form-group">
                                                        <button class="btn btn-primary btn-block" onclick="snapshot1()"> CAPTURAR </button>
                                                </div>  
                        </div>
                      </div>                      
                    </div>
                  </div>




    <!-- Modal VALIDACION CONTRASEÑA -->
                  <div class="modal fade" id="password" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; text-align: center; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style="color: #fff;">VALIDACI&Oacute;N DE CONTRASE&Ntilde;A</h4>
                        </div>
                        <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-5" style="text-align: center;">
                                                      <div class="form-group">
                                                            <label for="exp">INGRESE CONTRASE&Ntilde;A: </label>
                                                      </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-5" >
                                                        <div class="form-group">                                               
                                                          <input type="password" class="form-control" id="clave_pass">                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-2" >
                                                        <div class="form-group">                                               
                                                            <button type="submit" class="btn btn-primary btn-block" onclick="validarContrasena()">
                                                                Validar
                                                            </button>                                              
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="text" id="index" disabled style="visibility:hidden; width: 5px;">
                        </div>
                      </div>
                      
                    </div>
                  </div>


<!-- Modal HISTORIA CLINICA -->
                  <div class="modal fade" id="HISTORIA_CLINICA" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">HISTORIA CL&Iacute;NICA</h4>
                        </div>
                            <div class="modal-body" style="text-align: center; overflow-y: auto;">
                                    
                                <div id="content" style=" font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                    </br>
                                   

                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <td style=" border: 1px solid white;">  </td>
                                                <td style="width: 200px; font-size: 10px; background-color:#8bd2ea; height: 20px;">  FECHA  </td>
                                                <td style="width: 200px; font-size: 10px; background-color:#8bd2ea; height: 20px;">  FOLIO  </td>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td style=" border: 1px solid white;">  </td>
                                                <td style="width: 200px; font-size: 12px; ">   <div id="fecha_hc"></div>  </td>
                                                <td style="width: 200px; font-size: 12px; ">   <div id="folio_hc"></div>  </td>
                                              </tr>
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>HISTORIA CL&Iacute;NICIA</b></td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: left;"> <div id="nombre_hc"></div> </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="edad_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="fechan_hc"></div>  </td>
                                              </tr>
                                            </thead>
                                        </table>

                                         <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>FICHA DE IDENTIFICACI&Oacute;N</b></td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="sexo_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="lugNac_hc"></div>  </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="domicilio_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="colonia_hc"></div>  </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="delegacion_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="estado_hc"></div>  </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="pais_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="codigo_hc"></div>  </td>
                                              </tr>
                                         </thead>
                                         </table>

                                         <table class="table table-bordered" style="margin-top: -20px;">
                                         <tbody>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="religion_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="ocupacion_hc"></div>  </td>
                                              </tr>    
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="escolaridad_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="estCivil_hc"></div>  </td>
                                              </tr>                                            
                                        </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <div id="contacto_hc"></div> </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                         <table class="table table-bordered" style="margin-top: -20px;">
                                         <tbody>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="telefono_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="celular_hc"></div>  </td>
                                              </tr>    
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="email_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="sangre_hc"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="seguro_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="cualS_hc"></div>  </td>
                                              </tr>                                            
                                        </tbody>
                                        </table>



                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>DATOS FISCALES</b></td>
                                              </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px;">
                                         <tbody>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="rfc_hc_fis"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="estado_hc_fis"></div>  </td>
                                              </tr>    
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="razon_hc_fis"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="municipio_hc_fis"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="persona_hc_fis"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="postal_hc_fis"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="domicilio_hc_fis"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="correo_hc_fis"></div>  </td>
                                              </tr> 
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="colonia_hc_fis"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="nada_hc_fis"></div>  </td>
                                              </tr>                                             
                                        </tbody>
                                        </table>





                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>ANTECEDENTES HEREDO - FAMILIARES:</b></BR>(VIVOS O FINADOS), SELECCIONES CAUL Y ESPECIFIQUE EN EL ESPACIO VAC&Iacute;O QUE FAMILIAR. </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                         <tbody>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; "> <b>DIABETES MELLITUS:</b>  <div style="float: right;" id="diabetes_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; "> <b>HIPERTENSI&Oacute;N ARTERIAL:</b>   <div style="float: right;" id="hipertension_hc"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div  id="quien_diabetes_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: center; ">   <div  id="quien_hipertension_hc"></div>  </td>
                                              </tr>  
 
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; "> <b>CARDIOPAT&Iacute;AS:</b>   <div style="float: right;" id="cardiopatias_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; "> <b>HEPATOPAT&Iacute;AS:</b>   <div style="float: right;" id="hepatopatias_hc"></div>  </td>
                                              </tr> 
                                              <tr>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div  id="quien_cardiopatias_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: center; ">   <div  id="quien_hepatopatias_hc"></div>  </td>
                                              </tr>  

                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; "> <b>NEFROPAT&Iacute;AS:</b>   <div style="float: right;" id="nefropatias_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; "> <b>ENDOCRINOL&Oacute;GICAS:</b>   <div style="float: right;" id="endocrinas_hc"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                              </tr> 
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div  id="quien_nefropatias_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: center; ">   <div  id="quien_endocrinas_hc"></div>  </td>
                                              </tr>  

                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; "> <b>PSIQUI&Aacute;TRICAS:</b>   <div style="float: right;" id="psiquiatricos_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; "> <b>NEUROL&Oacute;GICAS:</b>   <div style="float: right;" id="neurologicos_hc"></div>  </td>
                                              </tr> 
                                              <tr>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div  id="quien_psiquiatricos_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: center; ">   <div  id="quien_neurologicos_hc"></div>  </td>
                                              </tr>  

                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; "> <b>RESPIRATORIAS:</b>   <div style="float: right;" id="respiratorias_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; "> <b>HERMATOL&Oacute;GICAS:</b>   <div style="float: right;" id="hermatologicas_hc"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div  id="quien_respiratorias_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: center; ">   <div  id="quien_hermatologicas_hc"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; "> <b>DISLIPIDEMIAS:</b>   <div style="float: right;" id="dislipidemias_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; "> <b>INFECCIOSAS:</b>   <div style="float: right;" id="infecciosas_hc"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> QUIEN  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div  id="quien_dislipidemias_hc"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: center; ">   <div  id="quien_infecciosas_hc"></div>  </td>
                                              </tr> 

                                        </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>C&Aacute;NCER:</b> </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                         <table class="table table-bordered" style="margin-top: -20px;">
                                         <tbody>
                                              <tr>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; "> TIPO  </td>
                                                <td style="width: 50%; font-size: 10px; text-align: center; background-color:#8bd2ea; ">  QUIEN  </td>
                                              </tr>    
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div id="tipo_cancer_hc1"></div>  </td>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div id="quien_cancer_hc1"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div id="tipo_cancer_hc2"></div>  </td>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div id="quien_cancer_hc2"></div>  </td>
                                              </tr> 
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div id="tipo_cancer_hc3"></div>  </td>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div id="quien_cancer_hc3"></div>  </td>
                                              </tr>  
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div id="tipo_cancer_hc4"></div>  </td>
                                                <td style="width: 50%; font-size: 12px; text-align: center; ">  <div id="quien_cancer_hc4"></div>  </td>
                                              </tr>                                           
                                        </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>ANTECEDENTES PERSONALES NO PATOL&Oacute;GICOS:</b> </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 40%; text-align: left;"> MASCOTAS: </td>
                                                <td style="width: 10%; text-align: center;"> <div id="mascotas_hc"></div> </td>
                                                <td style="width: 50%; text-align: left;"> <div id="tipo_mascotas_hc"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table>


                                         <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>     
                                              <tr>
                                                <td rowspan="2" style="width: 40%; text-align: left;"> ACTIVIDAD F&Iacute;SICA: </td>
                                                <td rowspan="2" style="width: 10%; text-align: center;"> <div id="actividad_hc"></div> </td>
                                                <td style="width: 16%; text-align: center;"> CU&Aacute;L: </td>
                                                <td style="width: 16%; text-align: center;"> TIEMPO </td>
                                                <td style="width: 17%; text-align: center;"> FRECUENCIA </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16%; text-align: center;"> <div id="cual_actividad_hc"></div> </td>
                                                <td style="width: 16%; text-align: center;"> <div id="tiempo_actividad_hc"></div> </td>
                                                <td style="width: 17%; text-align: center;"> <div id="frecuencia_actividad_hc"></div> </td>
                                              </tr>
                                            </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>     
                                              <tr>
                                                <td rowspan="2" style="width: 40%; text-align: left;"> CONSUME ALCOHOL: </td>
                                                <td rowspan="2" style="width: 10%; text-align: center;"> <div id="alcohol_hc"></div> </td>
                                                <td style="width: 16%; text-align: center;"> CANTIDAD: </td>
                                                <td style="width: 16%; text-align: center;"> TIEMPO </td>
                                                <td style="width: 17%; text-align: center;"> &Uacute;LTIMA OCASI&Oacute;N </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16%; text-align: center;"> <div id="cual_alcohol_hc"></div> </td>
                                                <td style="width: 16%; text-align: center;"> <div id="tiempo_alcohol_hc"></div> </td>
                                                <td style="width: 17%; text-align: center;"> <div id="frecuencia_alcohol_hc"></div> </td>
                                              </tr>
                                            </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>     
                                              <tr>
                                                <td rowspan="2" style="width: 40%; text-align: left;"> TABAQUISMO: </td>
                                                <td rowspan="2" style="width: 10%; text-align: center;"> <div id="tabaco_hc"></div> </td>
                                                <td style="width: 16%; text-align: center;"> CANTIDAD: </td>
                                                <td style="width: 16%; text-align: center;"> TIEMPO </td>
                                                <td style="width: 17%; text-align: center;"> &Uacute;LTIMA OCASI&Oacute;N </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16%; text-align: center;"> <div id="cual_tabaco_hc"></div> </td>
                                                <td style="width: 16%; text-align: center;"> <div id="tiempo_tabaco_hc"></div> </td>
                                                <td style="width: 17%; text-align: center;"> <div id="frecuencia_tabaco_hc"></div> </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                        

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>     
                                              <tr>
                                                <td rowspan="4" style="width: 40%; text-align: left;"> USO DE DROGAS: </td>
                                                <td rowspan="4" style="width: 10%; text-align: center;"> <div id="drogras_hc"></div> </td>
                                                <td style="width: 16%; text-align: center;"> CUALES: </td>
                                                <td style="width: 16%; text-align: center;"> TIEMPO </td>
                                                <td style="width: 17%; text-align: center;"> &Uacute;LTIMA OCASI&Oacute;N </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 16%; text-align: center;"> <div id="cual_drogras_hc"></div> </td>
                                                <td style="width: 16%; text-align: center;"> <div id="tiempo_drogras_hc"></div> </td>
                                                <td style="width: 17%; text-align: center;"> <div id="frecuencia_drogras_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 16%; text-align: center;"> <div id="cual_drogras_hc2"></div> </td>
                                                <td style="width: 16%; text-align: center;"> <div id="tiempo_drogras_hc2"></div> </td>
                                                <td style="width: 17%; text-align: center;"> <div id="frecuencia_drogras_hc2"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 16%; text-align: center;"> <div id="cual_drogras_hc3"></div> </td>
                                                <td style="width: 16%; text-align: center;"> <div id="tiempo_drogras_hc3"></div> </td>
                                                <td style="width: 17%; text-align: center;"> <div id="frecuencia_drogras_hc3"></div> </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 40%; text-align: left;"> TATUAJES O PERFORACIONES: </td>
                                                <td style="width: 10%; text-align: center;"> <div id="tatuaje_hc"></div> </td>
                                                <td style="width: 50%; text-align: left;"> <div id="tipo_tatuaje_hc"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 40%; text-align: left;"> Ingiere alg&uacute;n medicamento o suplemento alimenticio: </td>
                                                <td style="width: 10%; text-align: center;"> <div id="medicamento_hc"></div> </td>
                                                <td style="width: 50%; text-align: left;"> <div id="tipo_medicamento_hc"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 40%; text-align: left;"> INGIERE ASPIRINA REGULARMENTE: </td>
                                                <td style="width: 10%; text-align: center;"> <div id="aspirina_hc"></div> </td>
                                                <td style="width: 50%; text-align: left;"> <div id="tipo_aspirina_hc"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table>                               

                                    </div> 
                                </BR>


                                    <div id="content" style=" font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                        </br>

                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>ANTECEDENTES PATOL&Oacute;GICOS:</b> </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 10px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 20%; text-align: center;"> PATOL&Oacute;GIA </td>
                                                <td style="width: 5%; text-align: center;"> SI/NO </td>
                                                <td style="width: 20%; text-align: center;"> CU&Aacute;L ENFERMEDAD </td>
                                                <td style="width: 15%; text-align: center;"> TIEMPO </td>
                                                <td style="width: 15%; text-align: center;"> TRATAMIENTO ACTUAL </td>
                                                <td style="width: 10%; text-align: center;"> CANTIDAD </td>
                                                <td style="width: 15%; text-align: center;"> FRECUENCIA </td>
                                              </tr>
                                              <tr>
                                                <td rowspan="3" style="width: 20%; text-align: left;"> DIABETES MELLITUS </td>
                                                <td rowspan="3" style="width: 5%; text-align: center;"> <div id="dia_hc"></div> </td>
                                                <td rowspan="3" style="width: 20%; text-align: center;"> <div id="enf_dia_hc"></div> </td>
                                                <td rowspan="3" style="width: 15%; text-align: center;"> <div id="tiem_dia_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_dia_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_dia_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_dia_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_dia_hc2"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_dia_hc2"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_dia_hc2"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_dia_hc3"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_dia_hc3"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_dia_hc3"></div> </td>
                                              </tr>
                                              <tr>
                                                <td rowspan="3" style="width: 20%; text-align: left;"> HIPERTENSI&Oacute;N ARTERIAL </td>
                                                <td rowspan="3" style="width: 5%; text-align: center;"> <div id="hiper_hc"></div> </td>
                                                <td rowspan="3" style="width: 20%; text-align: center;"> <div id="enf_hiper_hc"></div> </td>
                                                <td rowspan="3" style="width: 15%; text-align: center;"> <div id="tiem_hiper_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_hiper_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_hiper_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_hiper_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_hiper_hc2"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_hiper_hc2"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_hiper_hc2"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_hiper_hc3"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_hiper_hc3"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_hiper_hc3"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> CARDIOPAT&Iacute;AS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="cardio_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_cardio_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_cardio_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_cardio_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_cardio_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_cardio_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> DISLIPIDEMIAS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="derma_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_derma_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_derma_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_derma_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_derma_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_derma_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> NEUROL&Oacute;GICAS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="endo_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_endo_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_endo_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_endo_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_endo_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_endo_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> RESPIRATORIAS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="ale_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_ale_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_ale_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_ale_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_ale_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_ale_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> HEMATOL&Oacute;GICAS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="psi_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_psi_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_psi_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_psi_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_psi_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_psi_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> INFECCIOSAS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="neu_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_neu_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_neu_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_neu_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_neu_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_neu_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> HEPATITIS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="hepatitis_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_hepatitis_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_hepatitis_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_hepatitis_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_hepatitis_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_hepatitis_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> NEFROPAT&Iacute;AS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="nefropatias_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_nefropatias_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_nefropatias_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_nefropatias_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_nefropatias_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_nefropatias_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> ENDOCRINOLÓGICAS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="endocrinologicas_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_endocrinologicas_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_endocrinologicas_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_endocrinologicas_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_endocrinologicas_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_endocrinologicas_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> PSIQUI&Aacute;TRICAS </td>
                                                <td style="width: 5%; text-align: center;"> <div id="psiquiatricas_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_psiquiatricas_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_psiquiatricas_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_psiquiatricas_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_psiquiatricas_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_psiquiatricas_hc"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> C&Aacute;NCER </td>
                                                <td style="width: 5%; text-align: center;"> <div id="cancer_hc"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="enf_cancer_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="tiem_cancer_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="trat_cancer_hc"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="cant_cancer_hc"></div> </td>
                                                <td style="width: 15%; text-align: center;"> <div id="frec_cancer_hc"></div> </td>
                                              </tr>

                                              </tbody>
                                        </table>                                         

                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 10px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> OTRAS </td>
                                                <td style="width: 80%; text-align: center;"> <div id="otros"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table> 


                                         <table class="table table-bordered" style="margin-top: 0px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td rowspan="3" style="width: 20%; vertical-align: middle; text-align: left;"> ALERG&Iacute;AS </td>
                                                <td rowspan="3" style="width: 5%; vertical-align: middle; text-align: center;"> <div id="alergias_hc"></div> </td>
                                                <td style="width: 45%; text-align: center;"> <div id="alergias_hc_1"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="alergias_hc_2"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 45%; text-align: center;"> <div id="alergias_hc_3"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="alergias_hc_4"></div> </td>
                                              </tr>
                                              <tr>   
                                                <td style="width: 45%; text-align: center;"> <div id="alergias_hc_5"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="alergias_hc_6"></div> </td>
                                              </tr>

                                              <tr>
                                                <td rowspan="5" style="width: 20%; vertical-align: middle; text-align: left;"> CIRUG&Iacute;AS </td>
                                                <td rowspan="5" style="width: 5%; vertical-align: middle; text-align: center;"> <div id="cirugias"></div> </td>
                                                <td style="width: 45%; text-align: center;"> <div id="cirugia_tipo"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="cirugia_fecha"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 45%; text-align: center;"> <div id="cirugia_tipo2"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="cirugia_fecha2"></div> </td>
                                              </tr>
                                              <tr>   
                                                <td style="width: 45%; text-align: center;"> <div id="cirugia_tipo3"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="cirugia_fecha3"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 45%; text-align: center;"> <div id="cirugia_tipo4"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="cirugia_fecha4"></div> </td>
                                              </tr>
                                              <tr>   
                                                <td style="width: 45%; text-align: center;"> <div id="cirugia_tipo5"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="cirugia_fecha5"></div> </td>
                                              </tr>


                                              <tr>
                                                <td rowspan="3" style="width: 20%; vertical-align: middle; text-align: left;"> HOSPITALIZACIONES PREVIAS </td>
                                                <td rowspan="3" style="width: 5%; vertical-align: middle; text-align: center;"> <div id="hospital"></div> </td>
                                                <td style="width: 45%; text-align: center;"> <div id="hospital_tipo"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="hospital_fecha"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 45%; text-align: center;"> <div id="hospital_tipo2"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="hospital_fecha2"></div> </td>
                                              </tr>
                                              <tr>   
                                                <td style="width: 45%; text-align: center;"> <div id="hospital_tipo3"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="hospital_fecha3"></div> </td>
                                              </tr>


                                              <tr>
                                                <td rowspan="3" style="width: 20%; vertical-align: middle; text-align: left;"> TRANSFUSIONES </td>
                                                <td rowspan="3" style="width: 5%; vertical-align: middle; text-align: center;"> <div id="sangre"></div> </td>
                                                <td style="width: 45%; text-align: center;"> <div id="sangre_tipo"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="sangre_fecha"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 45%; text-align: center;"> <div id="sangre_tipo2"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="sangre_fecha2"></div> </td>
                                              </tr>
                                              <tr>   
                                                <td style="width: 45%; text-align: center;"> <div id="sangre_tipo3"></div> </td>
                                                <td style="width: 30%; text-align: center;"> <div id="sangre_fecha3"></div> </td>
                                              </tr>

                                              </tbody>
                                        </table> 
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 20%; text-align: left;"> OTROS </td>
                                                <td style="width: 80%; text-align: center;"> <div id="otros_cirugias"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table> 


                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>ANTECEDENTES - OBST&Eacute;TRICOS: <div id="aplica" style="font-size:15px;"></div> </b> </td>
                                              </tr>
                                            </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 30%; text-align: left;"> INICIO DE MENSTRUACI&Oacute;N </td>
                                                <td style="width: 20%; text-align: center;"> <div id="inicio"></div> </td>
                                                <td style="width: 30%; text-align: left;"> CICLOS </td>
                                                <td style="width: 20%; text-align: center;"> <div id="ciclos"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 30%; text-align: left;"> FECHA DE &Uacute;LTIMA MENSTRUACI&Oacute;N </td>
                                                <td style="width: 20%; text-align: center;"> <div id="fecha_mens"></div> </td>
                                                <td style="width: 30%; text-align: left;"> INICIO DE VIDA SEXUAL </td>
                                                <td style="width: 20%; text-align: center;"> <div id="vida_sexual"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 20%; text-align: center; background-color:#8bd2ea;"> NO. DE EMBARAZOS </td>
                                                <td style="width: 20%; text-align: center; background-color:#8bd2ea;"> NO. DE PARTOS </td>
                                                <td style="width: 20%; text-align: center; background-color:#8bd2ea;"> NO. DE CESARIAS </td>
                                                <td rowspan="2" style="width: 15%; text-align: center; vertical-align: middle;"> ABORTOS </td>
                                                <td rowspan="2" style="width: 15%; text-align: center; vertical-align: middle;"> <div id="aborto"></div> </td>
                                                <td style="width: 10%; text-align: center; background-color:#8bd2ea;"> CUANTOS </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: center;"> <div id="embarazo"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="partos"></div> </td>
                                                <td style="width: 20%; text-align: center;"> <div id="cesarias"></div> </td>
                                                <td style="width: 10%; text-align: center;"> <div id="aborto_num"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table>  

                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 30%; text-align: left; "> M&Eacute;TODO DE PLANIFICACI&Oacute;N FAMILIAR </td>
                                                <td style="width: 20%; text-align: center; "> <div id="metodo"></div> </td>
                                                <td style="width: 50%; text-align: left; "> <div id="cual_metodo"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 30%; text-align: left; "> HAS TOMADO MEDICAMENTOS HORMONALES </td>
                                                <td style="width: 20%; text-align: center; "> <div id="medicamento"></div> </td>
                                                <td style="width: 50%; text-align: left; "> <div id="cual_medicamento"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table> 


                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>ANTECEDENTES DERMO - EST&Eacute;TICOS: </BR> FOTO PROTECCI&Oacute;N</b> </td>
                                              </tr>
                                            </tbody>
                                        </table> 

                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>
                                              <tr>
                                                <td rowspan="2" style="width: 30%; text-align: left; vertical-align: middle;"> EXPOSICI&Oacute;N SOLAR </td>
                                                <td rowspan="2" style="width: 20%; text-align: center; vertical-align: middle;"> <div id="exposicion"></div> </td>
                                                <td rowspan="2" style="width: 30%; text-align: left; vertical-align: middle;"> TIEMPO DE EXPOSICI&Oacute;N SOLAR AL D&Iacute;A </td>
                                                <td style="width: 20%; text-align: center;"> MINUTOS </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 20%; text-align: center;"> <div id="tiempo_exposicion"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: left;"> USO DE PROTECCI&Oacute;N SOLAR </td>
                                                <td style="width: 20%; text-align: center;"> <div id="proteccion"></div> </td>
                                                <td style="width: 30%; text-align: left;"> MARCA DEL PROTECTOR SOLAR </td>
                                                <td style="width: 20%; text-align: center;"> <div id="marca"></div> </td>
                                              </tr>

                                              <tr>
                                                <td rowspan="2" style="width: 30%; text-align: left; vertical-align: middle;"> FPS </td>
                                                <td style="width: 20%; text-align: center;"> (% PROTECCI&Oacute;N) </td>
                                                <td rowspan="2" style=" text-align: left; border: 1px solid white;">  </td>
                                                <td rowspan="2" style=" text-align: left; border: 1px solid white;">  </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: center;"> <div id="fps"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table>

                                    </div>

                    </BR>


                                    <div id="content" style=" font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                        </br>

                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>TRATAMIENTOS EST&Eacute;TICOS PREVIOS: </BR> FACIALES</b> </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 40%; text-align: center; "><b> PROCEDIMIENTO </b></td>
                                                <td style="width: 30%; text-align: center; "><b> PRODUCTO / MARCA </b></td>
                                                <td style="width: 30%; text-align: center; "><b> FECHA DE APLICACI&Oacute;N </b></td>
                                              </tr>
                                              <tr>
                                                <td style="width: 30%; text-align: center; "> TOXINA BOTULINICA TIPO A </td>
                                                <td style="width: 20%; text-align: center; "> <div id="producto_1"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="fechaS_1"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> RELLENO FACIAL </td>
                                                <td style="width: 20%; text-align: center; "> <div id="producto_2"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="fechaS_2"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> HILOS DE SUSTENTACI&Oacute;N </td>
                                                <td style="width: 20%; text-align: center; "> <div id="producto_3"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="fechaS_3"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> PEELING </td>
                                                <td style="width: 20%; text-align: center; "> <div id="producto_4"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="fechaS_4"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> RADIOFRECUENCIA </td>
                                                <td style="width: 20%; text-align: center; "> <div id="producto_5"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="fechaS_5"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> DEPILACI&Oacute;N LASER </td>
                                                <td style="width: 20%; text-align: center; "> <div id="producto_6"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="fechaS_6"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> OTROS </td>
                                                <td style="width: 20%; text-align: center; "> <div id="producto_7"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="fechaS_7"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table> 




                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b>TRATAMIENTOS EST&Eacute;TICOS PREVIOS: </BR> CORPORALES</b> </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 40%; text-align: center; "><b> PROCEDIMIENTO </b></td>
                                                <td style="width: 30%; text-align: center; "><b> PRODUCTO / MARCA </b></td>
                                                <td style="width: 30%; text-align: center; "><b> FECHA DE APLICACI&Oacute;N </b></td>
                                              </tr>
                                              <tr>
                                                <td style="width: 30%; text-align: center; "> CARBOXITERAPIA </td>
                                                <td style="width: 20%; text-align: center; "> <div id="1producto_1"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="1fechaS_1"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> RADIOFRECUENCIA </td>
                                                <td style="width: 20%; text-align: center; "> <div id="1producto_2"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="1fechaS_2"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> ULTRASONIDO </td>
                                                <td style="width: 20%; text-align: center; "> <div id="1producto_3"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="1fechaS_3"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> HIDROLIPOCLASIA </td>
                                                <td style="width: 20%; text-align: center; "> <div id="1producto_4"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="1fechaS_4"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> CRIOLIPOLISIS </td>
                                                <td style="width: 20%; text-align: center; "> <div id="1producto_5"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="1fechaS_5"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> DEPILACI&Oacute;N LASER </td>
                                                <td style="width: 20%; text-align: center; "> <div id="1producto_6"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="1fechaS_6"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 30%; text-align: center; "> OTROS </td>
                                                <td style="width: 20%; text-align: center; "> <div id="1producto_7"></div> </td>
                                                <td style="width: 50%; text-align: center; "> <div id="1fechaS_7"></div> </td>
                                              </tr>
                                              </tbody>
                                        </table> 



                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b> HISTORIA CL&Iacute;NICA </b> </td>
                                              </tr>
                                            </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> PADECIMIENTO ACTUAL </b> </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="padecimiento_hc">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: left;"> <b> INTERROGATORIO POR APARATOS Y SISTEMAS </b> </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc1">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc2">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc3">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc4">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc5">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc6">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc7">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc8">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc9">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc10">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc11">  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: justify;" id="interrogatorio_hc12">  </td>
                                              </tr>
                                            </tbody>
                                        </table>




                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: center;"> <b> EXPLORACI&Oacute;N F&Iacute;SICA INICIAL </b> </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> SIGNOS VITALES </b> </td>
                                              </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 25%; text-align: center; ">  <div id="fc_hc"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="fr_hc"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="ta_hc"></div> </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="ta2_hc"></div> </td>
                                              </tr>

                                              <tr>
                                                <td style="width: 25%; text-align: center; ">  <div id="temp_hc"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="peso_hc"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="talla_hc"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="imc_hc"></div> </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table> 


 <div id="exploracion11" style="display: none;"></div>
                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;">LESIONES DERMATOL&Oacute;GICAS:   <div id="exploracion1"></div>  </td>
                                              </tr>
                                              
                                                <tr>
                                                <td style=" text-align: left;"> INSPECCI&Oacute;N GENERAL:  <div id="exploracion2"></div>  </td>
                                                </tr>
                                                <tr>
                                                <td style=" text-align: left;">CR&Aacute;NEO:  <div id="exploracion3"></div>  </td>
                                                </tr>
                                                <tr>
                                                <td style=" text-align: left;">CUELLO:  <div id="exploracion4"></div>  </td>
                                                </tr>
                                                <tr>
                                                <td style=" text-align: left;">T&Oacute;RAX:  <div id="exploracion5"></div>  </td>
                                                </tr>
                                                <tr>
                                                <td style=" text-align: left;">ABDOMEN:  <div id="exploracion6"></div>  </td>
                                                </tr>
                                                <tr>
                                                <td style=" text-align: left;">GENITALES:  <div id="exploracion9"></div>  </td>
                                                </tr>
                                                <tr>
                                                <td style=" text-align: left;">EXTREMIDADES SUPERIORES:  <div id="exploracion7"></div>  </td>
                                                </tr>
                                                <tr>
                                                <td style=" text-align: left;">EXTREMIDADES INFERIORES:  <div id="exploracion8"></div>  </td>
                                              </tr>
                                              <tr>
                                                <td style=" text-align: left;">SISTEMA NERVIOSOS:  <div id="exploracion10"></div>  </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: 0px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 25%; text-align: center; ">  <div id="fit_hc"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="glo_hc"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="rostro_hc"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="piel_hc"></div> </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;">LESIONES DERMATOL&Oacute;GICAS:   <div id="exploracion1"></div>  </td>
                                              </tr>                                            
                                            </tbody>
                                        </table>



                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> RESULTADOS DE LABORATORIO: </b> </td>
                                              </tr> 
                                              <tr>
                                                <td style=" text-align: left;"> <b> QU&Iacute;MICA SANGU&Iacute;NEA: </b> </td>
                                              </tr>                                             
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica1"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica2"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica3"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica4"></div> </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica5"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica6"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica7"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica8"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica9"></div> </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica10"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica11"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica12"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica13"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica14"></div> </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica15"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica16"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica17"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica18"></div>  </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica19"></div> </td>
                                                <td style="width: 20%; text-align: center; ">  <div id="quimica20"></div> </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> BIOMETR&Iacute;A HEM&Aacute;TICA: </b> </td>
                                              </tr>                                             
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 25%; text-align: center; ">  <div id="biometria1"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="biometria2"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="biometria3"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="biometria4"></div> </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 25%; text-align: center; ">  <div id="biometria5"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="biometria6"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="biometria7"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="biometria8"></div> </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> TP: </b> </td>
                                              </tr>                                             
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 33%; text-align: center; ">  <div id="tppdf1"></div>  </td>
                                                <td style="width: 33%; text-align: center; ">  <div id="tppdf2"></div>  </td>
                                                <td style="width: 34%; text-align: center; ">  <div id="tppdf3"></div>  </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>


                                         <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> EGO: </b> </td>
                                              </tr>                                             
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 25%; text-align: center; ">  <div id="egopdf1"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="egopdf2"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="egopdf3"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="egopdf4"></div>  </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 25%; text-align: center; ">  <div id="egopdf5"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="egopdf6"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="egopdf7"></div>  </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> PERFIL TIROIDEO: </b> </td>
                                              </tr>                                             
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 25%; text-align: center; ">  <div id="perfil1"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="perfil2"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="perfil3"></div>  </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 25%; text-align: center; ">  <div id="perfil4"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="perfil5"></div>  </td>
                                                <td style="width: 25%; text-align: center; ">  <div id="perfil6"></div>  </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>




                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> RESULTADOS DE GABINETE: </b> </td>
                                              </tr>                                             
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 33%; text-align: center; ">  <div id="gabinete1"></div>  </td>
                                                <td style="width: 33%; text-align: center; ">  RADIOGRAF&Iacute;A  </td>
                                                <td style="width: 34%; text-align: center; ">  <div id="gabinete3"></div>  </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 33%; text-align: center; ">  <div id="gabinete4"></div>  </td>
                                                <td style="width: 33%; text-align: center; ">  TOMOGRAF&Iacute;A </td>
                                                <td style="width: 34%; text-align: center; ">  <div id="gabinete6"></div>  </td>
                                              </tr>
                                              <tr>
                                                <td style="width: 33%; text-align: center; ">  <div id="gabinete7"></div>  </td>
                                                <td style="width: 33%; text-align: center; ">  ELECTROCARDIOGRAMA  </td>
                                                <td style="width: 34%; text-align: center; ">  <div id="gabinete9"></div>  </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> DIAGN&Oacute;STICOS: </b> </td>
                                              </tr>                                             
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 20%; text-align: center; ">  <div id="diagnosticoHC1"></div>  </td>
                                                <td style="width: 80%; text-align: center; ">  <div id="diagnosticoHC2"></div>  </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> PRON&Oacute;STICO: </b> </td>
                                              </tr>                                             
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 100%; text-align: justify; ">  <div id="pronosticoHC"></div>  </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>


                                         <table class="table table-bordered" style="margin-top: 0px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left;"> <b> INDICACI&Oacute;N TERAP&Eacute;UTICA: </b> </td>
                                              </tr>                                             
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px; font-size: 12px;">
                                            <thead>

                                              <tr>
                                                <td style="width: 100%; text-align: justify; ">  <div id="indicacionHC"></div>  </td>
                                              </tr>
                                            
                                              </tbody>
                                        </table>




                                         </br></br> </br></br> 

                                                <div class="col-xs-12 col-md-6" id="paciente_firma_hc" style="text-align: center;">
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="generar_pdf_hc" style="text-align: center;">

                                                   <img id="firma_medico_hc" src="" style="width: 250px; height: 150px; position: fixed; left: 60%;">
                                                   </br>
                                                   <div id="nombre_medico_hc" style="font-weight: bold; font-size: 14px;"></div>

                                                </div>


                                    <div class="row col-xs-12 col-md-12">

                                        <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 13px;">

                                            </br> <B>_______________________________</br>Nombre y firma del Paciente  </B>

                                        </div>


                                        <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 13px; margin-left: 5%;">

                                            </br><B>_______________________________</br>Nombre completo y firma del M&eacute;dico</B>

                                        </div>
                                    </div>

 </br></br> 

 <button type="button" class="btn btn_ac1" id="firma_hc2" onclick="generarPDF8()" style="display:none; margin-left: 40%; ">GENERAR PDF</button>


                                    </div>



                                </div>                                       

                        </div>
                      </div>                      
                    </div>
                  </div>



<!-- Modal CARTA DE CONSENTIMIENTO -->
                <div class="modal fade" id="CARTA_CONSENTIMIENTO" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CARTA DE CONSENTIMIENTO</h4>
                        </div>
                            <div class="modal-body" style="text-align: justify; overflow-y: auto;">
                                    
                                <div id="content" style=" font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;">     

                                       <!-- <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div> -->

                                    </br>


                                       <!--<table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td rowspan="2" style="width: 450px; text-align: center; font-size: 15px;">     

                                                    <div class="col-xs-12 col-md-12">
                                                        <img  class='pull-left' src='imagenes/logo1.png' width='38%' height='38%'>
                                                        <img src='imagenes/logo2.png' width='22%' height='22%'>
                                                        <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='22%' height='22%'>
                                                    </div>

                                                </br></br></br>
                                                    <B>CARTA DE CONSENTIMIENTO BAJO INFORMACI&Oacute;N</B>


                                                </td>
                                                <td style=" text-align: left;">  <b>UNIDAD M&Eacute;DICA:</b>   <div style="display:inline;" id="unidad_consentimiento" ></div>   </td>
                                              </tr>

                                              <tr>
                                                <td style=" text-align: left;">  <b>NOMBRE:</b>   <div style="display:inline;" id="nombre_consentimiento"></div>   </td>
                                              </tr>

                                            </tbody>
                                        </table>-->


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td rowspan="8" style="width: 450px; text-align: justify; font-size: 14px;">   

                                                    <div style="text-align: center;"><B>CARTA DE CONSENTIMIENTO BAJO INFORMACI&Oacute;N</B></div> 

                                                     </br> </br> 

                                                    CON FUNDAMENTO EN REGLAMENTO DE LA LEY GENERAL DE SALUD EN MATERIA DE PRESTACI&Oacute;N DE SERVICIOS DE ATENCI&Oacute;N MEDICA. ART&Iacute;CULOS 80, 81, 83, Y A LA NORMA OFICIAL MEXICANA NOM-168-SSA1-1998. DEL EXPEDIENTE CL&Iacute;NICO FRACCIONES 10.1.1.1 A LA 10.1.1.4.


                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=" text-align: left;">  <b>UNIDAD M&Eacute;DICA:</b>   <div style="display:inline;" id="unidad_consentimiento" ></div>   </td>
                                            </tr>

                                            <tr>
                                                <td style=" text-align: left;">  <b>NOMBRE:</b>   <div style="display:inline;" id="nombre_consentimiento"></div>   </td>
                                            </tr>
                                            <tr>
                                                <td style=" text-align: left;">  <b>FOLIO:</b>   <div style="display:inline;" id="folio_consentimiento"></div>   </td>
                                            </tr>

                                            <tr>
                                                <td style=" text-align: left;">  <b>EDAD:</b>   <div style="display:inline;" id="edad_consentimiento"></div>   </td>
                                            </tr>

                                            <tr>
                                                <td style=" text-align: left;">  <b>SEXO:</b>   <div style="display:inline;" id="sexo_consentimiento"></div>   </td>
                                            </tr>

                                            <tr>
                                                <td style=" text-align: left;">  <b>TEL&Eacute;FONO(S):</b>   <div style="display:inline;" id="telefono_consentimiento2"></div>   </td>
                                            </tr>

                                            <tr>
                                                <td style=" text-align: left;">  <b>LUGAR Y FECHA:</b>   <div style="display:inline;" id="lugar_consentimiento2"></div>   </td>
                                            </tr>

                                            </tbody>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 450px; text-align: justify; font-size: 12px;">     

                                                    SERVICIO: <b>CIRUG&Iacute;A PL&Aacute;STICA, EST&Eacute;TICA Y RECONSTRUCTIVA.</b>


                                                </td>
                                                <td style=" text-align: left;">  <b>CAMA:</b>   <div style="display:inline;" id="cama_consentimiento2"></div>   </td>
                                              </tr>


                                            </tbody>
                                        </table>

                                        </br>

                                        Yo: <div style="display:inline;" id="nombre_consentimiento2"></div> 

                                    </br>

                                         Expreso mi libre voluntad para autorizar el procedimiento o intervenci&oacute;n quir&uacute;rgica se&ntilde;alada en este documento despu&eacute;s de haberme proporcionado la informaci&oacute;n completa sobre mi enfermedad y estado actual, la cual fue realizada en forma amplia, precisa y suficiente en un lenguaje claro y sencillo, informandome sobre los posibles riesgos, complicaciones y secuelas, de igual forma los beneficios.

                                        </br>
                                        </br>

                                        El m&eacute;dico me informo la existencia de procedimientos alternativos, el derecho a cambiar mi decisi&oacute;n en cualquier momento y manifestaria antes del procedimiento o intervenci&oacute;n. Con el proposito de que mi atenci&oacute;n sea adecuada, me comprometo a proporcionar informaci&oacute;n completa y veraz, as&iacute; como seguir las indicaciones m&eacute;dicas.

                                        </br>
                                        </br>

                                        Otorgo mi autorizaci&oacute;n al personal de salud para la atenci&oacute;n de contingencias y urgencia derivadas del acto m&eacute;dico se&ntilde;alado, atendiendo al principio de libertad prescriptiva.

                                        </br>
                                        </br>

                                        Doy mi completo consentimiento, para la utilizaci&oacute;n de im&aacute;genes y videos derivados de mi intervenci&oacute;n quir&uacute;rgica, con fines educativos y m&eacute;dicos, guardando y resguardando mi imagen e identidad como privada.

                                        </br>
                                        </br>


                                        Cuenta con Servicios M&eacute;dicos de Salud
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Si &nbsp;&nbsp; <b> <div style="display:inline;" id="servicio_medico1">X</div> </b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        No &nbsp;&nbsp;<b> <div style="display:inline;" id="servicio_medico2">X</div> </b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Cu&aacute;l: &nbsp;&nbsp; <b> <div style="display:inline;" id="servicio_medico3"></div> </b>

                                    </br>
                                    </br>


                                    Procedimiento o Intervenci&oacute;n Quir&uacute;rgica   
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Electiva  &nbsp;&nbsp; <b> <div style="display:inline;" id="intervencion_consentimiento1">X</div> </b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Urgente  &nbsp;&nbsp; <b> <div style="display:inline;" id="intervencion_consentimiento2">X</div> </b>


                                        </br>
                                        </br>

                                        Alerg&iacute;as:   
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Negada: &nbsp;&nbsp; <b> <div style="display:inline;" id="alergias1">X</div> </b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Positiva: &nbsp;&nbsp; <b> <div style="display:inline;" id="alergias2">X</div> </b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        Cu&aacute;l:
                                        &nbsp;&nbsp;
                                        <div style="display:inline;" id="cual_alergias"></div>

                                        </br>
                                       </br>

                                        Diagn&oacute;stico previo al procedimiento o intervenci&oacute;n quir&uacute;rgica:

                                        </br>

                                        <div style="display:inline;" id="diagnostico_consentimiento2">X</div>

                                        </br>
                                        </br>

                                        Procedimiento o intervenci&oacute;n quir&uacute;rgica proyectada:

                                        </br>

                                        <div style="display:inline;" id="procedimiento_consentimiento2">X</div>

                                        </br>
                                        </br>

                                        Riesgos m&aacute;s frecuentes inherentes al procedimiento o intervenci&oacute;n quir&uacute;rgica y a las condiciones actuales del paciente:

                                        </br>

                                        <div style="display:inline;" id="riesgos_consentimiento2">X</div>

                                        </br>
                                        </br>

                                        Beneficios:

                                        </br>

                                        <div style="display:inline;" id="beneficios_consentimiento2">X</div>                            


                                    </br></br></br></br></br></br></br>
                                    

                                    <div style=" background-image: url('imagenes/piePagina.png'); background-position: center; background-repeat:no-repeat;">

                                            <div class="row" style="margin-left: 2%;">                                                

                                                <div class="col-xs-12 col-md-6" id="paciente_consentimiento_firma" style="text-align: left;">
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="testigo1_consentimiento_firma" style="text-align: left;">
                                                    
                                                </div>

                                            </div>
                                            </br></br>
                                            

                                            <div class="row col-xs-12 col-md-12">

		                                        <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 11px;">

		                                            <div style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 12px;" id="paciente_consentimiento"></div>  <B>_______________________________</br>Nombre completo y firma del paciente, familiar, tutor o </br> persona legalmente responsable </B>

		                                        </div>


		                                        <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 11px;">

		                                            <div style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 12px;" id="testigo1_consentimiento"></div> <B>_______________________________</br>Nombre completo y firma del testigo</B>

		                                        </div>

		                                    </div>

		                                </br></br></br></br></br></br></br></br>

		                                	<div class="row" style="margin-left: 2%;">                                                

                                                <div class="col-xs-12 col-md-6" id="medico_consentimiento_firma"  style="text-align: left;">
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="testigo2_consentimiento_firma" style="text-align: left;">
                                                    
                                                </div>

                                            </div>
                                            </br></br></br>

		                                    <div class="row col-xs-12 col-md-12">

		                                        <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 11px;">

                                                    <div style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 12px;" id="medico_consentimiento"></div>

		                                            <B>_______________________________</br>Nombre completo, cedula y firma del m&eacute;dico tratante </B>

		                                        </div>


		                                        <div class="row col-xs-12 col-md-6" style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 11px;">

		                                            <div style="text-align: center; font-family: Georgia; font-style: italic;  font-size: 12px;" id="testigo2_consentimiento"></div> <B>_______________________________</br>Nombre completo y firma del testigo</B>

		                                        </div>
		                                    </div>




                                            </br></br>

                                             <button type="button" class="btn btn_ac1" id="pdf_consentimiento" onclick="generarPDF7()" style="display:none; margin-left: 40%; ">GENERAR PDF</button>

                                        </br>
                                            <div class="row" style="margin-left: 2%;">
                                                
                                                <div style="text-align: center;">
                                                    
                                                    <button type="button" class="btn btn_ac1" onclick="generarPDF6()" id="generar_nota" style=" display: none; text-align: center; margin-left: 45%;">GENERAR PDF</button>  </br>
                                                    <!--Tlacotalpan 59, Consultorio 735, Torre Diamante, Hospital Angeles Metropolitano. 
                                            		</br>
                                            		Col. Roma Sur, Cuauht&eacute;moc, Ciudad de M&eacute;xico. CP. 06760-->
                                                </div>

                                            </div>

                                    </div>


                                    




                                    </div>  

                                </div>                                       

                        </div>
                      </div>                      
                    </div>
                  </div>



<!-- Modal INDICACIONES VISTA -->
                  <div class="modal fade" id="INDICACIONES_VISTA" role="dialog" aria-hidden="true">
                    <div class="modal-dialog " style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">INDICACIONES</h4>
                        </div>
                            <div class="modal-body" style="text-align: justify; overflow-y: auto;">
                                    
                                <div id="content" style=" font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%' style="margin-left: 30%;">
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div> 

                                    </br>

                                        <div style="text-align: center;"><b>INDICACIONES POST-<div style="display:inline;" id="procedimiento_indicaciones3"></div></b></div>

                                    </br></br>

                                        <div class="row col-xs-12 col-md-12">

		                                        <div class="row col-xs-12 col-md-6" style="text-align: left;">

		                                            Fecha:&nbsp;&nbsp;<div style="display:inline;" id="fecha_indicaciones2"></div>	</br>
		                                            Folio:&nbsp;&nbsp;<div style="display:inline;" id="folio_indicaciones2"></div>

		                                        </div>


		                                        <div class="row col-xs-12 col-md-6" style="text-align: left;">

		                                            Nombre:&nbsp;&nbsp;<div style="display:inline;" id="nombre_indicaciones2"></div>	</br>
		                                            Edad:&nbsp;&nbsp;<div style="display:inline;" id="edad_indicaciones2"></div>	</br>
		                                            Sexo:&nbsp;&nbsp;<div style="display:inline;" id="sexo_indicaciones2"></div>	

		                                        </div>
		                                </div>

                                    </br>

                                    	<div class="row col-xs-12 col-md-12">

		                                        Hora:&nbsp;&nbsp;<div style="display:inline;" id="hora_indicaciones2"></div>hrs	
		                                </div>

		                                 </br></br></br></br>

		                                 INDICACIONES POST-<div style="display:inline;" id="procedimiento_indicaciones2"></div>

		                            </BR></BR>


		                                 <div style="text-align: justify;" id="indicaciones_indicaciones2"></div>


		                            </BR></BR>

		                            Pr&oacute;xima Cita:&nbsp;&nbsp; <div style="display:inline;" id="fecha_proxima_indicaciones2"></div>

		                        </br>

		                        	Cualquier duda, cambio en la evoluci&oacute;n o urgencia, se deber&aacute; de comunicar con el 

		                        </br>

		                        	Dr.(a): &nbsp;&nbsp; <div style="display:inline;" id="dr_indicaciones2"></div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; al tel&eacute;fono:&nbsp;&nbsp; <div style="display:inline;" id="telefono_indicaciones2"></div>.                                   


                                    </br></br></br></br></br>
                                    

                                    <div style=" background-image: url('imagenes/piePagina.png'); background-position: center; background-repeat:no-repeat;">

                                            <div class="row col-xs-12 col-md-12" >                                                

                                                <div class="col-xs-12 col-md-6" style="text-align: left;">

                                                	Paciente:&nbsp;&nbsp; <div style="display:inline;" id="nombre_indicaciones3"></div>
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="paciente_indicaciones_firma" style="text-align: left;">

                                                	Firma:
                                                    
                                                </div>

                                            </div>
                                            </br></br></br></br></br>


                                            <div class="row col-xs-12 col-md-12" >                                                

                                                <div class="col-xs-12 col-md-6" style="text-align: left;">

                                                	Familiar:&nbsp;&nbsp; <div style="display:inline; " id="familiar_indicaciones2"></div>
                                                    
                                                </div>

                                                <div class="col-xs-12 col-md-6" id="familiar_indicaciones_firma" style="text-align: left;">

                                                	Firma:
                                                    
                                                </div>

                                            </div>     

                                            </br></br></br></br>

                                             <button type="button" class="btn btn_ac1" id="pdf_indicaciones" onclick="generarPDF12()" style="display:none; margin-left: 40%; ">GENERAR PDF</button>

                                        </br>
                                            <div class="row" style="margin-left: 2%;">
                                                
                                                <div style="text-align: center;">
                                                    
                                                    Tlacotalpan 59, Consultorio 735, Torre Diamante, Hospital Angeles Metropolitano. 
                                            		</br>
                                            		Col. Roma Sur, Cuauht&eacute;moc, Ciudad de M&eacute;xico. CP. 06760
                                                </div>

                                            </div>

                                    </div>


                                    </div>  

                                </div>                                       

                        </div>
                      </div>                      
                    </div>
                  </div>


   
    <!-- Modal FIRMA 13 -->
                  <div class="modal fade" id="commentPictureModal13" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas13" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn13" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn13" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>




    <!-- Modal FIRMA 14 -->
                  <div class="modal fade" id="commentPictureModal14" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas14" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn14" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn14" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>



    <!-- Modal ENVIAR CORREO -->
                  <div class="modal fade" id="email" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; text-align: center; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style="color: #fff;">ENVIAR CORREO</h4>
                        </div>
                        <div class="modal-body">   
                                  
                                    <div class="form-group">
                                          <label for="exp">INGRESE CORREO: </label>     

                                          <input type="text" class="form-control" id="correo_mail">                                                
                                    </div>                                 

                                    <div class="form-group">
                                    
                                            <label>MENSAJE CORREO:</label>

                                            <textarea class="form-control" id="mensaje_correo" placeholder="Mensaje Correo:"></textarea>                                        
                                    </div>


                                    <div class="col-xs-12 col-md-12" >
                                        <div class="form-group">                                               
                                            <button type="submit" class="btn btn-primary btn-block" onclick="enviarCorreo()">
                                                Enviar
                                            </button>                                              
                                        </div>
                                    </div>
                                
                                <input type="text" id="index2" disabled style="visibility:hidden; width: 5px;">
                        </div>
                      </div>
                      
                    </div>
                  </div>




    <!-- Modal 1 myModal1-->
                
                <div class="modal fade" id="myModal_Ind_Pre" role="dialog" aria-hidden="true" style=" overflow-y: scroll;" >
                    <div class="modal-dialog modal-lg" >                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h6 class="modal-title" style=" text-align: center; font-size: 14px;">INDICACIONES PREOPERATORIAS</h6>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                                    
                                <div id="content" style=" font-size: 14px;">     

                                        <div class='row' id='membrete'>
                                            
                                            <div class="col-xs-12 col-md-12">
                                                <img  class='pull-left' src='imagenes/logo1.png' width='18%' height='18%'>
                                                <img src='imagenes/logo2.png' width='12%' height='12%'>
                                                <img class='pull-right' src='imagenes/logo3.png' class='pull-right' width='12%' height='12%'>
                                            </div>
                                        </div>

                                    </br>
                                        
                                        <div class="row" style="text-align: center;">

                                            <B>PLASTIC AND BEAUTY MEDICAL GROUP S.A. DE C.V. </Br>

                                            INDICACIONES PREOPERATORIAS</B>
                                            

                                        </div>   


                                        <div class="row" style="text-align: center; font-family: Georgia; font-style: italic; ">

                                            <B><div id="fecha_pdf"></div></B>                                           

                                        </div>

                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <td style=" border: 1px solid white;">  </td>
                                                <td style="width: 200px; font-size: 10px; background-color:#8bd2ea; height: 20px;">  FECHA  </td>
                                                <td style="width: 200px; font-size: 10px; background-color:#8bd2ea; height: 20px;">  FOLIO  </td>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td style=" border: 1px solid white;">  </td>
                                                <td style="width: 200px; font-size: 12px; ">   <div id="fecha_ind_pre"></div>  </td>
                                                <td style="width: 200px; font-size: 12px; ">   <div id="folio_ind_pre"></div>  </td>
                                              </tr>
                                              </tbody>
                                        </table>


                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left; font-size: 12px;"> <div id="nombre_ind_pre"></div> </td>
                                              </tr>
                                            </thead>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style="width: 50%; font-size: 12px; text-align: left; ">  <div id="edad_ind_pre"></div>  </td>
                                                <td style="width: 50% font-size: 12px; text-align: left; ">  <div id="sexo_ind_pre"></div>  </td>
                                              </tr>
                                            </thead>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left; font-size: 12px;"> <div id="procedimiento_ind_pre2"></div> </td>
                                              </tr>
                                            </thead>
                                        </table>

                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: justify; font-size: 12px; background-image: url('imagenes/fondo.png'); background-position: center; background-repeat:no-repeat;"> 




                                                    Un Mes previo a la cirug&iacute;a.

                                                    </br></br>

                                                    1.  No fumar, ni estar cerca de gente que fume.</br>
                                                    2.  No tomar ning&uacute;n medicamento no prescrito por el cirujano.</br>
                                                    3.  Suspender cualquier tratamiento hormonal, homeop&aacute;tico, vitaminas, aspirina, etc.</br>
                                                    4.  Para el post-operatorio necesitar&aacute; de los siguientes materiales: Gasas de 10 x 10 cm (20 gasas), Microporo de 1/2 pulgada, Pa&ntilde;ales desechables de adulto (1 paquete), Estericide (350ml).</br></br>

                                                    Un dia previo a la cirug&iacute;a.</br></br>
                                                    1.  Ayuno de 8 hrs previo a la cirug&iacute;a, no consumir ning&uacute;n alimento s&oacute;lido o l&iacute;quido durante ese periodo.</br>
                                                    2.  Ba&ntilde;o normal de manera habitual dos horas previas a la cirug&iacute;a, no rasurar, no aplicar ning&uacute;n ung&uuml;ento, crema, o sustancia despu&eacute;s del ba&tilde;o.</br>
                                                    3.  No usar maquillaje, ni joyas.</br>
                                                    4.  U&ntilde;as despintadas y sin u&tilde;as postizas.</br>
                                                    5.  Llevar ropa c&oacute;moda y floja para despu&eacute;s de la cirug&iacute;a.</br>
                                                    6.  Llevar todos sus ex&aacute;menes preoperatorios en copias.</br>
                                                    7.  Llegar 30 min antes de la hora de su cirug&iacute;a a la cl&iacute;nica u hospital.




                                                </td>
                                              </tr>
                                            </thead>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left; font-size: 12px;"> <div id="clinica_ind_pre2"></div> </td>
                                              </tr>
                                            </thead>
                                        </table>
                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                              <tr>
                                                <td style=" text-align: left; font-size: 12px;"> <div id="fecha_cirugia_ind_pre"></div> </td>
                                              </tr>
                                            </thead>
                                        </table>


                                      </br> </br> </br></br>

                                      <img id="ind_pre_firma_paciente" src="" style="width: 260px; height: 100px; display: none; position: fixed; left: 30%;">


                                    <div class="row col-xs-12 col-md-12" style="text-align: center; font-family: Georgia; font-style: italic; ">

                                            </br><button type="button" class="btn btn_ac1" id="firma_ind_pre" onclick="firmaPDF15()" style="margin-left: 5%;">FIRMAR</button> </br>   
                                            <B>_______________________________</br>Firma del Paciente o Cliente</B>

                                     </div>

                                     </br></br>   
                                     

                                     <div class="row col-xs-12 col-md-12" style="text-align: center; ">

                                            <button type="button" class="btn btn_ac1" onclick="generarPDF18()" id="pdf_ind_pre" style="display: none; left: 40%; position: fixed;">GENERAR PDF</button>

                                     </div>

                                        
                               </br></br></br></br>   

                              
                                </div> 
                                      

                        </div>
                    </div>                      
                </div>
            </div>



 <!-- Modal FIRMA 19  commentPictureModal22 -->
                  <div class="modal fade" id="commentPictureModal22" >
                    <div class="modal-dialog modal-lg">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">CAMPO DE FIRMA</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                <div class="col-xs-12 col-md-12" id="div_firma" >
                                                    
                                                        <canvas id="sig-canvas22" height="500" width="800"  >

                                                    
                                                </div>
                                            </br></br>  </br></br>

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="sig-clearBtn22" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-retweet" aria-hidden="true"></span>
                                                            &nbsp;LIMPIAR
                                                        </button>

                                                        <button class="btn btn-primary" id="sig_submitBtn22" style="width: 200px;">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>





  

          

<script type="text/javascript" src="js/funcion_sis_pac.js"></script>

<script src="js/canvas2image.js"></script>
<script src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/funcion_pacientes.js"></script>
            <script type="text/javascript" src="js/funcion_notas.js"></script>
            <script type="text/javascript" src="js/funcion_notas2.js"></script>


    <script src="js/signature.js"></script>
    <script src="js/signature2.js"></script>
    <script src="js/signature3.js"></script>
    <script src="js/signature4.js"></script>
    <script src="js/signature5.js"></script>
    <script src="js/signature6.js"></script>
    <script src="js/signature7.js"></script>
    <script src="js/signature8.js"></script>
    <script src="js/signature9.js"></script>
    <script src="js/signature10.js"></script>

    <script src="js/signature13.js"></script>
    <script src="js/signature14.js"></script>

    <script src="js/signature15.js"></script>

    <script src="js/signature16.js"></script>
    <script src="js/signature17.js"></script>
    <script src="js/signature18.js"></script>


    <script src="js/signature22.js"></script>
    

</body>
</html>