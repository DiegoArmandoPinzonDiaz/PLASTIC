<?php include 'sesion.php'; ?>

<?php include 'busq_prod.php'; ?>

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
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

        <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
      <script type="text/javascript" src="https://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>



      <script>
          $( function() {
            
            $( "#fecha_con" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });

          } );
      </script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.61.0-2013.06.06/jquery.blockUI.min.js"></script>


</head>
<body>
   

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
                                     <div class="panel-heading">
                                        <h1 class="panel-title"><spam style="color: #337ab7; font-size: 25px;">HISTORIAL CONSULTAS:&nbsp&nbsp&nbsp&nbsp&nbsp</spam>
                                          <spam id="nombreCompleto" ></spam>&nbsp

                                        nos ha recomendado&nbsp  
                                        <spam id="cuenta" ></spam>&nbsp veces.
                                      </h1>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-12" style="padding: 20PX; text-align: center;" id="textAGO">  
                                    <div class="col-xs-12 col-md-4" style="padding: 20PX; text-align: center;" id="textAGO">
                                    </div>
                                    <div class="col-xs-12 col-md-2" style="padding: 20PX; text-align: center;" id="textAGO">
                                        <label for="fecha_nac">FECHA CONSULTA: </label>                                                                        
                                    </div>
                                    <div class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;" id="textAGO">                                            
                                        <input type="text" class="form-control" id="fecha_con">                                                                        
                                    </div>
                                </div>


                                  <div id="div_cirugia" class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">CIRUG&Iacute;AS: </label>
                                          </br>
                                      
                                          <select name="sel_cirugia" id="sel_cirugia" multiple="multiple" class="selectpicker seleccion"  onchange="cuenta()">
                                           <!-- <select name="sel_cirugia" id="sel_cirugia" multiple="multiple" class="selectpicker seleccion"  onchange="cuenta()">-->
                                              
                                          </select>
                                          </br></br>

                                            <textarea class="form-control" id="descripcion_cirugias" rows="3" onKeyUp="this.value=this.value.toUpperCase();" disabled></textarea>  
                                        
                                  </div>

                                  <div class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">MEDICINA EST&Eacute;TICA: </label>
                                      <div class="form-group">
                                          <select id="sel_medicina" class="selectpicker seleccion" multiple data-selected-text-format="count > 4" onchange="cuenta()">
                                          <!--<select id="sel_medicina" class="selectpicker seleccion"  data-selected-text-format="count > 4" onchange="cuenta()">  
                                              <option disabled selected value> Nothing Selected </option>-->
                                          </select>
                                          </br></br>

                                            <textarea class="form-control" id="descripcion_medicina" rows="3" onKeyUp="this.value=this.value.toUpperCase();" disabled></textarea>  
                                      </div>   
                                  </div>


                                   <div class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;">
                                      <label for="fecha_nac">SPA: </label>
                                      <div class="form-group">
                                          <select id="sel_spa" class="selectpicker seleccion" multiple data-selected-text-format="count > 4" onchange="cuenta()">
                                          <!--<select id="sel_spa" class="selectpicker seleccion"  data-selected-text-format="count > 4" onchange="cuenta()">  
                                              <option disabled selected value> Nothing Selected </option>-->
                                          </select>
                                          </br></br>

                                            <textarea class="form-control" id="descripcion_spa" rows="3" onKeyUp="this.value=this.value.toUpperCase();" disabled></textarea>  
                                      </div>   
                                  </div>

                                  


                                  <div class="col-xs-12 col-md-3" style="padding: 20PX; text-align: center;">
                                    <div class="form-group">
                                      <label for="fecha_nac">PRODUCTOS: </label>   
                                      <select id="sel_producto" class="selectpicker seleccion" ></select>  
                                    </div>                                     
                                  </div>

                                  <!--<div class="col-xs-12 col-md-3" style=" text-align: left;">
                                    <div class="form-group">
                                      <select id="sel_producto" class="selectpicker seleccion" ></select>       
                                    </div>
                                  </div>-->

                                  <div class="col-xs-12 col-md-1" style=" text-align: left;">
                                    <div class="form-group">
                                      <select id="cant_producto" class="selectpicker seleccion" style="text-align: center;">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                      <option>8</option>
                                      <option>9</option>
                                      <option>10</option>
                                      </select>   
                                      </div>                                    
                                  </div>

                                  <div class="col-xs-12 col-md-2" style="text-align: center;" >
                                    <div class="form-group">
                                      <button type="button" class="btn btn-success btn-block" id="agregar" onclick="cuentaPro()">Agregar</button>         
                                      </div>                             
                                  </div>                                   



                                <div class="col-xs-6" style="padding-top: 15px;">
                                  <div class="form-group">  
                                    <div class="panel panel-default" style="border-color: #337ab7;">
                                        <div class="panel-heading" style="background-color: #337ab7; color: #fff; " >
                                            <h3 class="panel-title">Productos seleccionados</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover" style="width:100%;">
                                                    <thead>
                                                        <tr class="rowid">
                                                            <th style="width:8%;">Eliminar</th>
                                                            <th style="width:16%;">Cantidad</th>
                                                            <th style="width:16%;">Valor</th>
                                                            <th>Nombre del producto</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="t_items">
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                      </div> 
                                      </div>                                   
                                  </div>



                                  <div class="col-xs-6" style="padding-top: 15px;">
                                    <div class="form-group">  
                                      <textarea class="form-control" id="descripcion_productos" rows="6" onKeyUp="this.value=this.value.toUpperCase();" disabled></textarea>
                                    </div>
                                  </div>


                                  <div><input type="text" id="total_producto" DISABLED style="visibility:hidden; width: 5px;"> </div>

                                  <div><input type="text" id="escon" DISABLED style="visibility:hidden; width: 5px;"> </div>



                                  <div class="col-xs-12 col-md-4" style=" text-align: center;" id="textPC">
                                    
                                      <label for="efectivo">Efectivo: </label>  &nbsp;&nbsp;&nbsp;&nbsp;
                                      <input class="form-check-input" type="checkbox" value="" id="efectivo" style="margin-right: 28px;"> 

                                      <label for="transferencia">Transferencia: </label>  &nbsp;&nbsp;&nbsp;&nbsp;
                                      <input class="form-check-input" type="checkbox" value="" id="transferencia" style="margin-right: 28px;">  

                                      <label for="sel_tarjeta">Tarjeta: </label>  &nbsp;&nbsp;&nbsp;&nbsp;
                                      <input class="form-check-input" type="checkbox" value="" id="tarjeta" style="margin-right: 28px;">   
                                                                         
                                  <!--</div>
                                  <div class="col-xs-12 col-md-2" style=" text-align: center;" id="textPC">-->
                                      <label for="sel_factura">Facturaci&oacute;n: </label>   &nbsp;&nbsp;&nbsp;&nbsp;
                                      <input class="form-check-input" type="checkbox" value="" id="factura">                                      
                                  </div>
                                  <div class="col-xs-12 col-md-2" style=" text-align: left;">
                                      <select id="comision" class="selectpicker seleccion" style="text-align: center;">
                                      <option disabled selected value> Comisi&oacute;n </option>
                                      <option>Dra. Natalia</option>
                                      <option>Ter. Cristina</option>
                                      <option>Ter. Paulina</option>
                                      <option>Ter. Karina</option>
                                      <option>Vacio</option>
                                      </select>                                       
                                  </div>



                                  <div class="col-xs-12 col-md-1" >
                                    <div class="form-group">
                                      <label for="fecha_nac"><h4>Sucursal: </h4></label>   

                                    </div>                                 
                                  </div> 
                                  <div class="col-xs-12 col-md-2" >
                                    <div class="form-group">
                                      
                                      <select id="sucursal" class="selectpicker seleccion" style="text-align: center;">
                                      <option>ROMA SUR</option>
                                      <option>HOSPITAL METROPOLITANO</option>
                                      </select>

                                    </div>                           
                                  </div> 




                                  <div class="col-xs-12 col-md-1" >
                                    <div class="form-group">
                                      <label for="fecha_nac"><h4>Total: </h4></label>    
                                    </div>                                 
                                  </div> 
                                  <div class="col-xs-12 col-md-2" >
                                    <div class="form-group">
                                      <input type="text" class="form-control" id="total" placeholder="Total"> 
                                    </div>                           
                                  </div> 


                                  



                                    <div class="col-xs-12 col-md-3 pull-right" style="padding-top: 20PX;">
                                        <button class="btn btn-primary btn-block" onclick="guardarCon()">
                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                            &nbsp;Guardar
                                        </button>
                                    </div>



  

                                    <div class="row">
                                        <div id="agenda_results" class="col-xs-12 table-responsive" style="padding-top: 20PX;">

                                            <table class="table table-hover table-condensed table-responsive table-bordered table-scroll" >
                                                            <thead>
                                                                <tr id="titulo_consultas_pacientes">
                                                                    <th style="vertical-align: middle;">FECHA</th>
                                                                    <!--<th style="vertical-align: middle;">CIRUGÍA</th>
                                                                    <th style="vertical-align: middle;">DESCRIP. CIRUGÍA</th>
                                                                    <th style="vertical-align: middle;">MEDICINA ESTÉTICA</th>
                                                                    <th style="vertical-align: middle;">DESCRIP. MEDICINA</th>
                                                                    <th style="vertical-align: middle;">SPA</th>
                                                                    <th style="vertical-align: middle;">DESCRIP. SPA</th>-->

                                                                    <th style="vertical-align: middle;">PROCEDIMIENTO</th>
                                                                    <th style="vertical-align: middle;">DESCRIP. PROCED.</th>


                                                                    <th style="vertical-align: middle;">NOMBRE PRODUCTO</th>
                                                                    <th style="vertical-align: middle;">CANT. PRODUCTO</th>
                                                                    <!--<th style="vertical-align: middle;">VALOR PRODUCTO</th>-->                                                                    
                                                                    <th style="vertical-align: middle;">DESCRIP. PRODUCTO</th>
                                                                    <th style="vertical-align: middle;">EFECTIVO</th>
                                                                    <th style="vertical-align: middle;">TRANSFERENCIA</th>
                                                                    <th style="vertical-align: middle;">TARJETA</th>
                                                                    <th style="vertical-align: middle;">FACTURACI&Oacute;N</th>
                                                                    <th style="vertical-align: middle;">COMISI&Oacute;N</th>
                                                                    <th style="vertical-align: middle;">SUCURSAL</th>
                                                                    <th style="vertical-align: middle;">TOTAL</th>
                                                                    <th style="vertical-align: middle;">ACCIONES</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="data_consultas_pacientes"></tbody>
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



 <!-- Modal HILOS -->
                  <div class="modal fade" id="HILOS" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">HILOS</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                  <div class="form-group">                                                   
                                                                                                                                                        
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-8">
                                                                 CANTIDAD DE HILOS DE SUSTENTACI&Oacute;N
                                                            </div>

                                                            <div class="col-xs-12 col-md-4">

                                                                 <select id="cantidad_hilo" class="seleccion form-control" style="text-align: center;">
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
                                                                 </select>
                                                            </div>    

                                                        </div>
                                                    
                                                </div>
                                         

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="cuenta_hilo" style="width: 200px;" onclick="sumarHilo()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>






<!-- Modal BOTOX -->
                  <div class="modal fade" id="BOTOX" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">BOTOX</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                  <div class="form-group">                                                   
                                                                                                                                                        
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-8">
                                                                 CANTIDAD DE BOTOX
                                                            </div>

                                                            <div class="col-xs-12 col-md-4">

                                                                 <select id="cantidad_botox" class="seleccion form-control" style="text-align: center;">
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
                                                                          <option>60</option>
                                                                          <option>61</option>
                                                                          <option>62</option>
                                                                          <option>63</option>
                                                                          <option>64</option>
                                                                          <option>65</option>
                                                                          <option>66</option>
                                                                          <option>67</option>
                                                                          <option>68</option>
                                                                          <option>69</option>
                                                                          <option>70</option>
                                                                          <option>71</option>
                                                                          <option>72</option>
                                                                          <option>73</option>
                                                                          <option>74</option>
                                                                          <option>75</option>
                                                                          <option>76</option>
                                                                          <option>77</option>
                                                                          <option>78</option>
                                                                          <option>79</option>
                                                                          <option>80</option>
                                                                          <option>81</option>
                                                                          <option>82</option>
                                                                          <option>83</option>
                                                                          <option>84</option>
                                                                          <option>85</option>
                                                                          <option>86</option>
                                                                          <option>87</option>
                                                                          <option>88</option>
                                                                          <option>89</option>
                                                                          <option>90</option>
                                                                          <option>91</option>
                                                                          <option>92</option>
                                                                          <option>93</option>
                                                                          <option>94</option>
                                                                          <option>95</option>
                                                                          <option>96</option>
                                                                          <option>97</option>
                                                                          <option>98</option>
                                                                          <option>99</option>
                                                                          <option>100</option>
                                                                 </select>
                                                            </div>    

                                                        </div>
                                                    
                                                </div>


                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="cuenta_botox" style="width: 200px;" onclick="sumarBotox()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>







<!-- Modal ACIDO -->
                  <div class="modal fade" id="ACIDO" >
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #337ab7; color: #fff; ">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" style=" text-align: center;">&Aacute;CIDO HIALUR&Oacute;NICO</h4>
                        </div>
                        <div class="modal-body" style="text-align: center;">

                                                  <div class="form-group">                                                   
                                                                                                                                                        
                                                        <div class="row">

                                                            <div class="col-xs-12 col-md-8">
                                                                 CANTIDAD DE &Aacute;CIDO HIALUR&Oacute;NICO
                                                            </div>

                                                            <div class="col-xs-12 col-md-4">

                                                                 <select id="cantidad_acido" class="seleccion form-control" style="text-align: center;">
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
                                                                 </select>
                                                            </div>    

                                                        </div>
                                                    
                                                </div>

                                            

                                                <div class="form-group">

                                                        <button class="btn btn-primary" id="cuenta_acido" style="width: 200px;" onclick="sumarAcido()">
                                                            <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                            &nbsp;REGISTRAR
                                                        </button>

                                                </div>                                           

                        </div>
                      </div>
                      
                    </div>
                  </div>





    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/funcion_pacientes.js"></script>
    <script type="text/javascript" src="js/funcion_busq_pro.js"></script>

</body>
</html>