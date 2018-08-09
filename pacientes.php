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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
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
            $( "#datepicker" ).datepicker({ changeMonth: true, changeYear: true, dateFormat: 'dd/mm/yy' });
            
            //alert($("#contacto").val());
            $('#contacto').on('change', function() {            

                  if(this.value == 3){

                        var id = '2';
                        var availableTags2 = "";
                        var availableTags3 = "";
                        var availableTags4 = "";
                        var availableTags5 = "";
                        var availableTags = [];

                        $.post("busq_pacientes.php",{"texto":id},function(respuesta){

                                     availableTags2 = JSON.parse(respuesta);  
                                     //alert(respuesta); 

                                    for (var i = 0; i < availableTags2.length/3; i++) {

                                        availableTags.push(availableTags2[i*3]+" "+availableTags2[(i*3)+1]+" "+availableTags2[(i*3)+2]);

                                    }       

                                    $( "#recomendado2" ).autocomplete({
                                      source: availableTags
                                    });

                        });


                  }else{

                        var availableTags = [];

                        $( "#recomendado2" ).autocomplete({
                          source: availableTags
                        });
                  }
            });


            var availableTags2 = [
                        "IMSS",
                        "ISSSTE",
                        "GNP",
                        "SEGURO POPULAR",
                        "METLIFE",
                        "AXA",
                        "BANORTE",
                        "VIDA MEJOR",
                        "ATLAS",
                        "BX+",
                        "MONTERREY",
                        "BANCOMER",
                        "INBURSA"
                ];

                $( "#cuenta_seg2" ).autocomplete({
                  source: availableTags2
                });



            var availableTags3 = [
                        "CAT\u00D3LICO",
                        "CRISTIANO",
                        "JUDIO",
                        "PROTESTANTE",
                        "ISLÁMICO",
                        "ATEO",
                        "TESTIGO DE JEHOVÁ"
                ];

                $( "#religion" ).autocomplete({
                  source: availableTags3
                }); 



            var availableTags4 = [
                        "ÁLVARO OBREGÓN",
                        "AZCAPOTZALCO",
                        "BENITO JUÁREZ",
                        "COYOACÁN",
                        "CUAJIMALPA DE MORELOS",
                        "CUAUHTÉMOC",
                        "GUSTAVO ADOLFO MADERO",
                        "IZTACALCO",
                        "IZTAPALAPA",
                        "MAGDALENA CONTRERAS",
                        "MIGUEL HIDALGO",
                        "MILPA ALTA",
                        "TLÁHUAC",
                        "TLALPAN",
                        "VENUSTIANO CARRANZA",
                        "XOCHIMILCO"

                ];

                $( "#delegacion" ).autocomplete({
                  source: availableTags4
                });



            var availableTags5 = [
                        "AGUASCALIENTES",
                        "BAJA CALIFORNIA",
                        "BAJA CALIFORNIA SUR",
                        "CAMPECHE",
                        "CHIAPAS",
                        "CHIHUAHUA",
                        "COAHUILA DE ZARAGOZA",
                        "COLIMA",
                        "DURANGO",
                        "ESTADO DE MEXICO",
                        "GUANAJUATO",
                        "GUERRERO",
                        "HIDALGO",
                        "JALISCO",
                        "MICHOACÁN DE OCAMPO",
                        "MORELOS",
                        "NAYARIT",
                        "NUEVO LEÓN",
                        "OAXACA",
                        "PUEBLA",
                        "QUERÉTARO",
                        "QUINTANA ROO",
                        "SAN LUIS POTOSÍ",
                        "SINALOA",
                        "SONORA",
                        "TABASCO",
                        "TAMAULIPAS",
                        "TLAXCALA",
                        "VERACRUZ DE IGNACIO DE LA LLAVE",
                        "YUCATÁN",
                        "ZACATECAS",
                        "CIUDAD DE MÉXICO"

                ];

                $( "#estado" ).autocomplete({
                  source: availableTags5
                });          

                    
                

          } );
      </script>


<style type="text/css">
    
    .custom-input-file {
        overflow: hidden;
        position: relative;
        cursor: pointer;
    }
    .custom-input-file .input-file {
        margin: 0;
        padding: 0;
        outline: 0;
        font-size: 10000px;
        border: 10000px solid transparent;
        opacity: 0;
        filter: alpha(opacity=0);
        position: absolute;
        right: -1000px;
        top: -1000px;
        cursor: pointer;
    }

</style>

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
                                        <div class="col-xs-12">
                                            <div class="col-xs-12 col-md-4">
                                                <div class="panel panel-default">
                                                    <div class="pTitle">
                                                        <h3 class="panel-title">Fotograf&iacute;a del paciente</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="text-center">
                                                            <div class="alert visible-xs">
                                                                Los dispositivos m&oacute;viles disparan de distinta manera, asegurate la orientaci&oacute;n de la imagen est&eacute; correcta.
                                                            </div>
                                                            <img id="foto_paciente" width="140" height="140"><h6>Fotograf&iacute;a del paciente</h6>                    
                                                            
                                                            <div class="custom-input-file">
                                                                <input class="input-file"  type="file" id="foto_pac" accept="image/*" name="f_pac" />Seleccionar archivo<div class="archivo">...</div>
                                                            </div>

                                                        </div>
                                                        <br>
                                                        <div class="form-group" role="group">
                                                            <button type="button" id="upload_f_p" class="btn btn-xs btn-block btn-primary" onclick="guardarFoto()"><h5>Subir</h5></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                             

                                        <div class="col-xs-12 col-md-6">

                                            <div class="form-group">
                                                <label for="exp">FOLIO: </label>
                                                <input type="text" class="form-control" id="folio" disabled>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="nombre">NOMBRE: </label>
                                                <input type="text" class="form-control" id="nombrep" placeholder="Nombre del paciente" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                            <div class="form-group">
                                                <label for="a_paterno">APELLIDO PATERNO: </label>
                                                <input type="text" class="form-control" id="a_paterno" placeholder="Apellido paterno" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                            <div class="form-group">
                                                <label for="a_materno">APELLIDO MATERNO: </label>
                                                <input type="text" class="form-control" id="a_materno" placeholder="Apellido materno" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>                                        
                                           
                                            <label for="fecha_nac">FECHA DE NACIMIENTO: </label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="datepicker">
                                            </div>
                                         

                                            <div class="form-group">
                                                <label for="lugar_nac">LUGAR DE NACIMIENTO: </label>
                                                <input type="text" class="form-control" id="lugar_nac" placeholder="Lugar de Nacimiento" data-provide="datepicker" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                            <div class="form-group">
                                                <label for="genero">G&Eacute;NERO: </label>
                                                <select id="genero" class="form-control">
                                                    <option value="0" selected="" disabled="">Selecciona una opci&oacute;n</option>
                                                    <option value="1">MASCULINO</option><option value="2">FEMENINO</option>                                                    
                                                </select>
                                            </div>  

                                            <div class="form-group">
                                                <label for="paises">PA&Iacute;S: </label>
                                                <!--<input type="text" class="form-control" id="estado" placeholder="Estado" onKeyUp="this.value=this.value.toUpperCase();">-->
                                                <select id="paises" class="form-control" style="text-transform: uppercase;" onchange="pais()">
                                                    <option value="AF">Afganist&aacute;n</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DE">Alemania</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antártida</option>
                                                    <option value="AG">Antigua y Barbuda</option>
                                                    <option value="AN">Antillas Holandesas</option>
                                                    <option value="SA">Arabia Saudí</option>
                                                    <option value="DZ">Argelia</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaiy&aacute;n</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrein</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BE">B&eacute;lgica</option>
                                                    <option value="BZ">Belice</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermudas</option>
                                                    <option value="BY">Bielorrusia</option>
                                                    <option value="MM">Birmania</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BA">Bosnia y Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BR">Brasil</option>
                                                    <option value="BN">Brunei</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="BT">But&aacute;n</option>
                                                    <option value="CV">Cabo Verde</option>
                                                    <option value="KH">Camboya</option>
                                                    <option value="CM">Camer&uacute;n</option>
                                                    <option value="CA">Canad&aacute;</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CY">Chipre</option>
                                                    <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comores</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, República Democrática del</option>
                                                    <option value="KR">Corea</option>
                                                    <option value="KP">Corea del Norte</option>
                                                    <option value="CI">Costa de Marfíl</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="HR">Croacia (Hrvatska)</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="DK">Dinamarca</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egipto</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="AE">Emiratos Árabes Unidos</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="SI">Eslovenia</option>
                                                    <option value="ES">España</option>
                                                    <option value="US">Estados Unidos</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Etiopía</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="PH">Filipinas</option>
                                                    <option value="FI">Finlandia</option>
                                                    <option value="FR">Francia</option>
                                                    <option value="GA">Gab&oacute;n</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GD">Granada</option>
                                                    <option value="GR">Grecia</option>
                                                    <option value="GL">Groenlandia</option>
                                                    <option value="GP">Guadalupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GY">Guayana</option>
                                                    <option value="GF">Guayana Francesa</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GQ">Guinea Ecuatorial</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="HT">Hait&iacute;</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HU">Hungr&iacute;a</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IQ">Irak</option>
                                                    <option value="IR">Irán</option>
                                                    <option value="IE">Irlanda</option>
                                                    <option value="BV">Isla Bouvet</option>
                                                    <option value="CX">Isla de Christmas</option>
                                                    <option value="IS">Islandia</option>
                                                    <option value="KY">Islas Caim&aacute;n</option>
                                                    <option value="CK">Islas Cook</option>
                                                    <option value="CC">Islas de Cocos o Keeling</option>
                                                    <option value="FO">Islas Faroe</option>
                                                    <option value="HM">Islas Heard y McDonald</option>
                                                    <option value="FK">Islas Malvinas</option>
                                                    <option value="MP">Islas Marianas del Norte</option>
                                                    <option value="MH">Islas Marshall</option>
                                                    <option value="UM">Islas menores de Estados Unidos</option>
                                                    <option value="PW">Islas Palau</option>
                                                    <option value="SB">Islas Salom&oacute;n</option>
                                                    <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                                    <option value="TK">Islas Tokelau</option>
                                                    <option value="TC">Islas Turks y Caicos</option>
                                                    <option value="VI">Islas Vírgenes (EEUU)</option>
                                                    <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                                    <option value="WF">Islas Wallis y Futuna</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italia</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Jap&oacute;n</option>
                                                    <option value="JO">Jordania</option>
                                                    <option value="KZ">Kazajistán</option>
                                                    <option value="KE">Kenia</option>
                                                    <option value="KG">Kirguizist&aacute;n</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LV">Letonia</option>
                                                    <option value="LB">L&iacute;bano</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libia</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lituania</option>
                                                    <option value="LU">Luxemburgo</option>
                                                    <option value="MK">Macedonia, Ex-Rep&uacute;blica Yugoslava de</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MY">Malasia</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MV">Maldivas</option>
                                                    <option value="ML">Mal&iacute;</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MA">Marruecos</option>
                                                    <option value="MQ">Martinica</option>
                                                    <option value="MU">Mauricio</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX" selected>M&eacute;xico</option>
                                                    <option value="FM">Micronesia</option>
                                                    <option value="MD">Moldavia</option>
                                                    <option value="MC">M&oacute;naco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">N&iacute;ger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk</option>
                                                    <option value="NO">Noruega</option>
                                                    <option value="NC">Nueva Caledonia</option>
                                                    <option value="NZ">Nueva Zelanda</option>
                                                    <option value="OM">Om&aacute;n</option>
                                                    <option value="NL">Pa&iacute;ses Bajos</option>
                                                    <option value="PA">Panam&aacute;</option>
                                                    <option value="PG">Pap&uacute;a Nueva Guinea</option>
                                                    <option value="PK">Paquist&aacute;n</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Per&uacute;</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PF">Polinesia Francesa</option>
                                                    <option value="PL">Polonia</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="UK">Reino Unido</option>
                                                    <option value="CF">Rep&uacute;blica Centroafricana</option>
                                                    <option value="CZ">Rep&uacute;blica Checa</option>
                                                    <option value="ZA">Rep&uacute;blica de Sud&acute;frica</option>
                                                    <option value="DO">Rep&uacute;blica Dominicana</option>
                                                    <option value="SK">Rep&uacute;blica Eslovaca</option>
                                                    <option value="RE">Reuni&oacute;n</option>
                                                    <option value="RW">Ruanda</option>
                                                    <option value="RO">Rumania</option>
                                                    <option value="RU">Rusia</option>
                                                    <option value="EH">Sahara Occidental</option>
                                                    <option value="KN">Saint Kitts y Nevis</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="AS">Samoa Americana</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="VC">San Vicente y Granadinas</option>
                                                    <option value="SH">Santa Helena</option>
                                                    <option value="LC">Santa Luc&iacute;a</option>
                                                    <option value="ST">Santo Tom&eacute; y Pr&iacute;ncipe</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leona</option>
                                                    <option value="SG">Singapur</option>
                                                    <option value="SY">Siria</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="PM">St Pierre y Miquelon</option>
                                                    <option value="SZ">Suazilandia</option>
                                                    <option value="SD">Sud&aacute;n</option>
                                                    <option value="SE">Suecia</option>
                                                    <option value="CH">Suiza</option>
                                                    <option value="SR">Surinam</option>
                                                    <option value="TH">Tailandia</option>
                                                    <option value="TW">Taiw&aacute;n</option>
                                                    <option value="TZ">Tanzania</option>
                                                    <option value="TJ">Tayikist&aacute;n</option>
                                                    <option value="TF">Territorios franceses del Sur</option>
                                                    <option value="TP">Timor Oriental</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad y Tobago</option>
                                                    <option value="TN">T&uacute;nez</option>
                                                    <option value="TM">Turkmenistán</option>
                                                    <option value="TR">Turqu&iacute;a</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UA">Ucrania</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekist&aacute;n</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="YU">Yugoslavia</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabue</option>    
                                                </select>
                                            </div>                                       

                                                                                      

                                            <div class="form-group">
                                                <label for="estado">ESTADO: </label>
                                                <!--<input type="text" class="form-control" id="estado" placeholder="Estado" onKeyUp="this.value=this.value.toUpperCase();">-->
                                                <select id="estado" class="form-control" style="text-transform: uppercase;" onchange="municipios2()">

                                                     
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="delegacion">DELEGACI&Oacute;N / MUNICIPIO: </label>
                                                <!--<input type="text" class="form-control" id="delegacion" placeholder="Delegaci&oacute;n / Municipio" onKeyUp="this.value=this.value.toUpperCase();">-->
                                                <select id="delegacion" class="form-control" style="text-transform: uppercase;" >


                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="colonia">COLONIA </label>
                                                <input type="text" class="form-control" id="colonia" placeholder="Colonia" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>  

                                             <div class="form-group">
                                                <label for="domicilio">DOMICILIO: CALLE Y N&Uacute;MERO </label>
                                                <input type="text" class="form-control" id="domicilio" placeholder="Domicilio" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>


                                            <div class="form-group">
                                                <label for="codigoP">CODIGO POSTAL: </label>
                                                <input type="text" class="form-control" id="codigoP_persona" placeholder="Codigo Postal" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                                                                                  
                                                    
                                        </div>


                                        <div class="col-xs-12 col-md-6">

                                            <div class="form-group">
                                                <label for="curp">CURP: </label>
                                                <input type="text" class="form-control" id="curp" placeholder="CURP" onKeyUp="this.value=this.value.toUpperCase();" maxlength="18" size="18" onblur="validarCurp()">
                                            </div>

                                            <div class="form-group">
                                                <label for="religion">RELIGI&Oacute;N: </label>
                                                <input type="text" class="form-control" id="religion" placeholder="Religi&oacute;n" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                            <div class="form-group">
                                                <label for="escolaridad">ESCOLARIDAD: </label>
                                                <input type="text" class="form-control" id="escolaridad" placeholder="Escolaridad" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                            <div class="form-group">
                                                <label for="estadoCivil">ESTADO CIVIL: </label>
                                                <select id="estadoCivil" class="form-control">
                                                    <option value="0" selected="" disabled="">Selecciona una opci&oacute;n</option>
                                                    <option value="1">CASADO</option><option value="2">SOLTERO</option><option value="3">VIUDO</option><option value="4">DIVORCIADO</option><option value="5">UNI&Oacute;N LIBRE</option><option value="6">SEPARADO</option>                                                
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="ocupacion">OCUPACI&Oacute;N: </label>
                                                <input type="text" class="form-control" id="ocupacion" placeholder="Ocupaci&oacute;n" value="" onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                            <div class="form-group">
                                                <label for="telefono">TEL&Eacute;FONO: (N&Uacute;MERO DE 10 D&Iacute;GITOS) </label>
                                                <input id="telefono" type="number" class="form-control" placeholder="telefono" min="0" value="" step="1" onkeypress="return isNumberKey(event)" onblur="validarTelefono()">
                                            </div>

                                            <div class="form-group">
                                                <label for="celular">CELULAR: (N&Uacute;MERO DE 10 D&Iacute;GITOS) </label>
                                                <div class="col-xs-12 col-md-12 form-group">
                                                    <div class="col-xs-12 col-md-2" style="padding-right: 0px; padding-left: 0px;">
                                                        <input id="celular2" type="number" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-xs-12 col-md-10" style="padding-right: 0px; padding-left: 0px;">
                                                        <input id="celular" type="number" class="form-control" placeholder="celular" min="0" value="" step="1" onkeypress="return isNumberKey(event)" title="Recuerda que para n&uacute;meros locales comienzan con 044 y para no locales 045. Con una longitud total de 10 digitos." onblur="validarCelular()">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="e_mail">E-MAIL: </label>
                                                <input id="e_mail" type="text" class="form-control" placeholder="e_mail" value="" onblur="validarCorreo()">
                                            </div>

                                            <div class="form-group">
                                                <label for="tiposanguineo">TIPO SANGU&Iacute;NEO: </label>
                                                <select id="tiposanguineo" class="form-control">
                                                    <option value="0" selected="" disabled="">Selecciona una opci&oacute;n</option>
                                                    <option value="1">O-</option><option value="2">O+</option><option value="3">A-</option><option value="4">A+</option><option value="5">B-</option><option value="6">B+</option><option value="7">AB-</option><option value="8">AB+</option>                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="cuenta_seg">CUENTA CON SEGURO M&Eacute;DICO: </label>
                                                <input type="checkbox" class="form-check-input" id="cuenta_seg" placeholder="cuenta_seg" >
                                                
                                                <input type="text" class="form-control" id="cuenta_seg2" placeholder="Cu&aacute;l" value="" disabled onKeyUp="this.value=this.value.toUpperCase();">
                                            </div>

                                            <div class="form-group">
                                                <label for="contacto">COMO NOS CONTACTASTE: </label>
                                                <select id="contacto" class="form-control">
                                                    <option value="0" selected="" disabled="">Selecciona una opci&oacute;n</option>
                                                    <option value="1">REVISTA</option><option value="2">FACEBOOK</option><option value="3">RECOMENDADO</option><option value="4">WEB</option><option value="5">YOUTUBE</option><option value="6">TWITTER</option><option value="7">INSTAGRAM</option><option value="8">OTRO</option>
                                                </select></br>
                                                <!--<input type="text" class="form-control" id="recomendado2" value="" disabled onKeyUp="this.value=this.value.toUpperCase();">-->
                                                <input id="recomendado2" disabled onKeyUp="this.value=this.value.toUpperCase();" type="text" class="form-control">
                                                
                                            </div>


                                        </div>

                                        <div class="col-xs-12 col-md-3 pull-right">
                                            <button  class="btn btn-primary btn-block" onclick="guardarHisPac()">
                                                <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                                                &nbsp;Guardar
                                            </button>
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



    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funcion_sis.js"></script>
    <script type="text/javascript" src="js/funcion_pacientes.js"></script>

</body>
</html>