	
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <i class="titulo">PLASTIC & BEAUTY</i>      
                    </div>



<!-- Top Menu Items -->
                                    <ul class="nav navbar-right top-nav">
                                      <button type="button" class="salir btn" onclick=" location.href='./' "><i class="fa fa-fw fa-power-off"></i> CERRAR SESI&Oacute;N</button>
                                      
                                    </ul>






<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav side-nav" id="menu_lateral">
                                    <li>
                                        <a href="sistemaInformacion.php" ><i class="fas fa-desktop"></i>&nbsp;&nbsp;INICIO</a>
                                    </li>

                                    <li>
                                        <a href="agenda.php"><i class="fas fa-book"></i>&nbsp;&nbsp;AGENDA</a>
                                    </li>
                        <!--            <li>
                                        <a href="calendarV2"><i class="fa fa-fw fa-calendar-o"></i>&nbsp;&nbsp;Agenda</a>
                                    </li>
                        -->            
                        <!--
                                    <li>
                                        <a href="statistics"><i class="glyphicon glyphicon-stats"></i>&nbsp;&nbsp;Estad&iacute;sticas</a>
                                    </li>
                        -->
                                    <li>
                                        <a href="javascript:;" data-toggle="collapse" data-target="#pa"><i class="fas fa-address-book"></i>&nbsp;&nbsp;PACIENTES<i class="fa fa-fw fa-caret-down"></i></a>
                                        <ul id="pa" class="collapse">
                                            <li>
                                                <a href="nuevoPaciente.php" class="text-left" style="font-size: 13px;">&nbsp;
                                                    <span class="fas fa-male" aria-hidden="true"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NUEVO PACIENTE
                                                </a>
                                            </li>
                                            <li>
                                                <a href="buscarPaciente.php" class="text-left" style="font-size: 13px;">&nbsp;
                                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BUSCAR PACIENTE
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                                        <!-- directorio -->
                                    <li>
                                        <a href="javascript:;" data-toggle="collapse" data-target="#in"><i class="fas fa-chart-line"></i>&nbsp;&nbsp;INVENTARIO<i class="fa fa-fw fa-caret-down"></i></a>
                                        <ul id="in" class="collapse">
                                            <li>
                                                <a href="nuevoProducto.php" class="text-left" style="font-size: 13px;">&nbsp;
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true" ></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NUEVO
                                                </a>
                                            </li>
                                            <li>
                                                <a href="buscarProducto.php" class="text-left" style="font-size: 13px;">&nbsp;
                                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BUSCAR
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="alertas.php" ><i class="fas fa-phone-volume"></i>&nbsp;&nbsp;ALERTAS</a>                                        
                                    </li>

                                    <li>
                                        <a href="corte.php" ><i class="glyphicon glyphicon glyphicon-list"></i>&nbsp;&nbsp;CORTE</a>                                        
                                    </li>

                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
 </nav>




 <div class="row">
    <div class="col-lg-12">
       
        <label for="abrir-cerrar">
            <span style="font-size: 25px; padding: 10px; padding-bottom: 0px;" class="glyphicon glyphicon-align-justify" id="boton_side" onclick="cambiarside();"> </span>                                                    
        </label>

    </div>
</div>



<script>

          function cambiarside(){
          
                if(!$("#menu_lateral").is(":visible")){  

                    $("#menu_lateral").css('display', 'block');
                    $("#wrapper").css('margin-left', '225px');

                }
                else{

                    $("#menu_lateral").css('display', 'none');
                    $("#wrapper").css('margin-left', '0px');

                }

          }
          

</script>