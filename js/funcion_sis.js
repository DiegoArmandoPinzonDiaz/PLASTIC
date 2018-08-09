
$(document).ready(function() {  


    var id='vacio';
    $.post("busq_mat.php",{"texto":id},function(respuesta){
          //alert(respuesta);     
          $("#sel_material").append( respuesta );
          //$('#sel_material').selectmenu('refresh', true);
          //$('#sel_material').selectmenu().selectmenu('refresh', true);
          //$("#sel_material").selectmenu("refresh")
          //#sel_material( "refresh", true );
          //$("#sel_material").selectpicker("refresh");

      });	

     $("#data_inv2").on('click','.btnDelete',function(){
       $(this).closest('tr').remove();
     });



      $("#cuenta_seg").change(function() {
          if(this.checked) {
              $("#cuenta_seg2").prop("disabled", false); 
          }else{
              $("#cuenta_seg2").prop("disabled", true); 
              $("#cuenta_seg2").val(""); 
          }
      });

      $("#contacto").change(function() {
          if(this.value == 3) {
              $("#recomendado2").prop("disabled", false); 
              $("#recomendado2").attr("placeholder", "Qui\u00E9n?");
          }else if(this.value == 8){
              $("#recomendado2").prop("disabled", false); 
              $("#recomendado2").attr("placeholder", "Cu\u00E1l?");
          }else{
              $("#recomendado2").prop("disabled", true); 
              $("#recomendado2").val(""); 
          }
      });

    

//funciones para visualizar la imagen de carga en el modal de los productos
     $(function() {
      $('#file-input-pro').change(function(e) {
          addImage_pro(e); 
         });
    });


    $(function() {
      $('#file-input-spa').change(function(e) {
          addImage_spa(e); 
         });
    });

    $(function() {
      $('#file-input-prod').change(function(e) {
          addImage_prod(e); 
         });
    });


    $(function() {
      $('#file-input-med').change(function(e) {
          addImage_med(e); 
         });
    });


    //Funcion busca el número de folio del nuevo paciente

    var index = "true";

     $.post("CRUD/buscar_folio.php",{"texto":index },function(respuesta){  

            //obj = JSON.parse(respuesta);   
            //swal(respuesta, "PLASTIC & BEAUTY", "success");  

            //var nombre=respuesta.trim().split("+"); 
            var nombre = respuesta.substr(0,respuesta.length-1);
            var nombre=nombre.trim().split("+");


            var cuenta = 0;

            for (var i = nombre.length-1  ; i >= 0; i--){

                var com = nombre[i].substr(2,5);

                if(com != i+1){ cuenta = i+1; }               
                
            }

            if(cuenta == 0){ cuenta = nombre.length+1}



            if( cuenta == 1000 ){

                      var cuenta = 0;

                    for (var i = nombre.length-1  ; i >= 0; i--){

                      if(nombre[i].substr(0,1)=='C'){

                            //var com = nombre[i].substr(2,5);
                            //if(com != i+1){ cuenta = i+1; } 
                            nombre.splice(i, 1);
                      }             
                        
                    }

                    for (var i = nombre.length-1  ; i >= 0; i--){                      

                            var com = nombre[i].substr(2,5);
                            if(com != i+1){ cuenta = i+1; }                                  
                        
                    }

                    if(cuenta == 0){ cuenta = nombre.length+1}

                      if(cuenta < 10){ cuenta = "DP00"+cuenta;}
                      else if(cuenta < 100){ cuenta = "DP0"+cuenta;}
                      else{ cuenta = "DP"+cuenta;}

            }else{

                if(cuenta < 10){ cuenta = "CP00"+cuenta;}
                else if(cuenta < 100){ cuenta = "CP0"+cuenta;}
                else{ cuenta = "CP"+cuenta;}

              }


            $("#no").val(cuenta);           

      });



     var index = "TODOS";
      $.post("CRUD/nombre_alertasSI.php",{"texto":index },function(respuesta){ 

            $( "#data_consultas" ).append( respuesta );            

      }); 


      $.post("CRUD/nombre_alertasPC.php",{"texto":index },function(respuesta){ 

            $( "#data_consultas2" ).append( respuesta );
            //alert(respuesta);           

      }); 



      $.post("CRUD/nombre_mensajes.php",{"texto":index },function(respuesta){ 

            $( "#mensajes" ).append( respuesta );
            //alert(respuesta);           

      }); 


      $.post("CRUD/nombre_alertaSTOCK.php",{"texto":index },function(respuesta){ 

            $( "#data_consultas3" ).append( respuesta );
            //alert(respuesta);           

      }); 



      
        
});

function inventario(){

  $("#boton_nuevo_prod").css("display", "inline");
  $("#boton_nuevo_mat").css("display", "inline");
  $("#medicamentos").css("display", "inline");
  $("#boton_regresar").css("display", "inline");

  $("#boton_nuevo_inv").css("display", "none");
  $("#boton_procedimiento").css("display", "none");
  $("#medicos").css("display", "none");
  $("#clinicas").css("display", "none");

}

function inventario2(){

  $("#boton_nuevo_prod").css("display", "none");
  $("#boton_nuevo_mat").css("display", "none");
  $("#medicamentos").css("display", "none");

  $("#boton_nuevo_inv").css("display", "inline");
  $("#boton_procedimiento").css("display", "inline");
  $("#medicos").css("display", "inline");
  $("#clinicas").css("display", "inline");

  $("#boton_regresar").css("display", "none");

}

function inventario3(){

  $("#boton_nuevo_pro").css("display", "inline");
  $("#boton_nuevo_med").css("display", "inline");
  $("#boton_nuevo_tra").css("display", "inline");
  $("#boton_regresar2").css("display", "inline");

  $("#boton_procedimiento").css("display", "none");
  $("#boton_nuevo_inv").css("display", "none");
  $("#medicos").css("display", "none");
  $("#clinicas").css("display", "none");

}

function inventario4(){

  $("#boton_nuevo_pro").css("display", "none");
  $("#boton_nuevo_med").css("display", "none");
  $("#boton_nuevo_tra").css("display", "none");
  $("#boton_regresar2").css("display", "none");
  
  $("#boton_procedimiento").css("display", "inline");
  $("#boton_nuevo_inv").css("display", "inline");
  $("#medicos").css("display", "inline");
  $("#clinicas").css("display", "inline");

}

function firmaMedico(){


  disableScroll();
  $("#firma_medico").modal('show');
  $("#nuevo_medicos").modal('hide');


}

function validaNombreM(){

  if($("#nombre_medico").val() != ''){ $("#boton_firma_medico").prop("disabled", false); }
  else{ $("#boton_firma_medico").prop("disabled", true);   }

}


var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
}



function validarfecha(){

  var repeticion=0;
  for(i=0;i<$("#datepicker").val().length;i++){
      if($("#datepicker").val().charAt(i) == '/'){
          repeticion++;
      }
  }



  if($("#datepicker").val().length  == 2 && repeticion == 0)
  { 

    var val = $("#datepicker").val();
    $("#datepicker").val(val + '/');

   }


   if($("#datepicker").val().length  == 5 && repeticion == 1)
  { 

    var val = $("#datepicker").val();
    $("#datepicker").val(val + '/');

   }

  
}


function borrar_mensaje(index){

  swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_mensaje.php",{"texto":index, },function(respuesta){                      
          
              swal(respuesta, "PLASTIC & BEAUTY", "success");
              setTimeout(function(){ location.reload(); } , 2000);  

            });


            swal("Elemento eliminado", {
              icon: "success",
            });

      } else {
        swal("OK!");
      }
    });


}


function agregar_mat(){

  $("#nuevo_material").modal('show');

}


function agregar_material(){

  var val = $("#cant_producto").val();
  var val2 = $("#sel_material").val();

  var respuesta = "<tr><td>"+val+"</td><td>"+val2+"</td><td><button type='button' class='btn btn_ac2 btnDelete' ><i class='glyphicon glyphicon-trash'></i></button></td></tr>";
  
  $("#data_inv2").append( respuesta );

}



function guardar_medico(){

          var val = $("#nombre_medico").val();
          var val2 = $("#cedula_medico").val();

          var val3 = $("#telefono_medico").val();

          var val4 = $("#nombre_medico").val()+'_firmaMedico.png';

          

          if( val== '' || val2=='' || val3 == '' || val4 == ''){ swal("ERROR", "Existen campos vacios", "error");}
          else{

                $.post("CRUD/guardar_medico.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4 },function(respuesta){  

                    swal(respuesta, "PLASTIC & BEAUTY", "success");
                        setTimeout(function(){ location.reload(); } , 2000);  

                  });
          }


}


function guardar_medicamento(){


          var val = $("#nombre_gen").val();
          var val2 = $("#nombre_comer").val();
          var val3 = $("#posologia").val();
          var val4 = $("#presentacion").val();
          var val5 = $("#via").val();
          var val6 = $("#dosis").val();
          var val7 = $("#horario").val();
          var val8 = $("#tiempo_medicamento").val();


          if( val== '' || val2=='' || val3 == '' || val4 == '' || val5== '' || val6=='' || val7 == '' || val8 == ''){ swal("ERROR", "Existen campos vacios", "error");}
          else{

                $.post("CRUD/guardar_medicamento.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8 },function(respuesta){  

                    swal(respuesta, "PLASTIC & BEAUTY", "success");
                        setTimeout(function(){ location.reload(); } , 2000);  

                  });
          }

}


function guardar_clinica(){


          var val = $("#nombre_cli").val();
          var val2 = $("#direccion_cli").val();
          var val3 = $("#referencia_cli").val();


          if( val== '' || val2=='' || val3 == ''){ swal("ERROR", "Existen campos vacios", "error");}
          else{

                $.post("CRUD/guardar_clinica.php",{"texto":val, "texto2":val2, "texto3":val3 },function(respuesta){  

                    swal(respuesta, "PLASTIC & BEAUTY", "success");
                        setTimeout(function(){ location.reload(); } , 2000);  

                  });
          }

}



function guardar_datos(){

    var myTableArray = [];

    $("#data_inv2 tr").each(function() {
        var arrayOfThisRow = [];
        var tableData = $(this).find('td');
        if (tableData.length > 0) {
            tableData.each(function() { arrayOfThisRow.push($(this).text()); });
            myTableArray.push(arrayOfThisRow);
        }
    });

    $("#data_inv").empty();

     var table = $('#data_inv');
     var row, cell;
     for(var i=0; i<myTableArray.length; i++){

         row = $( '<tr />' );
         table.append( row );
         for(var j=0; j<myTableArray[i].length; j++){

              if(myTableArray[i][j].length > 0 ){

                   //alert(myTableArray[i][j].length);
                   cell = $('<td>'+myTableArray[i][j]+'</td>')
                   row.append( cell );

              }
           }
     }

     $("#data_inv_spa").empty();

     var table = $('#data_inv_spa');
     var row, cell;
     for(var i=0; i<myTableArray.length; i++){

         row = $( '<tr />' );
         table.append( row );
         for(var j=0; j<myTableArray[i].length; j++){

              if(myTableArray[i][j].length > 0 ){

                   //alert(myTableArray[i][j].length);
                   cell = $('<td>'+myTableArray[i][j]+'</td>')
                   row.append( cell );

              }
           }
     }

     $("#data_inv_med").empty();

     var table = $('#data_inv_med');
     var row, cell;
     for(var i=0; i<myTableArray.length; i++){

         row = $( '<tr />' );
         table.append( row );
         for(var j=0; j<myTableArray[i].length; j++){

              if(myTableArray[i][j].length > 0 ){

                   //alert(myTableArray[i][j].length);
                   cell = $('<td>'+myTableArray[i][j]+'</td>')
                   row.append( cell );

              }
           }
     }

     $("#nuevo_material").modal('hide');

}




function modal_mensaje(){

    $("#myModal2").modal('show');  

}

function guardarMensaje(){

    var val = $("#titulo").val();
    var val2 = $("#mensaje").val();


    $.post("CRUD/guardar_mensaje.php",{"texto":val, "texto2":val2 },function(respuesta){  

        swal(respuesta, "PLASTIC & BEAUTY", "success");
            setTimeout(function(){ location.reload(); } , 2000);  

      });

}


function editar_alerta_STOCK(index, color){


  if(color == '1'){ $('.modal-header').css('background-color', '#FC554F'); }
  else if( color == '2'){ $('.modal-header').css('background-color', '#FFFCB2'); }

  $("#myModal3").modal('show');  

  $.post("CRUD/nombre_alertaSTOCK2.php",{"texto":index },function(respuesta){  

    //alert(respuesta);
      
          obj = JSON.parse(respuesta);

          $("#fecha_alerta_stock").val(obj.FECHA_ALERTA);  
          $("#desc_alert_stock").val(obj.DESCRIPCION); 

          $("#inventario_stock").val(obj.INVENTARIO); 
          $("#motivo_stock").val(obj.MOTIVO);

          $("#actual_stock").val(obj.STOCK_ACTUAL); 
          $("#minimo_stock").val(obj.STOCK_MINIMO);

          $("#estado_stock").val(obj.ESTADO);

          $("#id_stock").val(obj.ID_ALERTA);


        }); 

}


function guardarAlerta_STOCK(index){
         

          var val2 = $("#actual_stock").val();

          var val3 = $("#desc_alert_stock").val();

          var val4 = $("#id_stock").val();

          $.post("CRUD/actualizar_AlertaStock.php",{"texto2":val2, "texto3":val3, "texto4":val4 },function(respuesta){  

            swal(respuesta, "PLASTIC & BEAUTY", "success");
                setTimeout(function(){ location.reload(); } , 2000);  

          });

}



function editar_alerta_STOCK2(index, color){


  if(color == '1'){ $('.modal-header').css('background-color', '#FC554F'); }
  else if( color == '2'){ $('.modal-header').css('background-color', '#FFFCB2'); }

  $("#myModal4").modal('show');  

  $.post("CRUD/nombre_alertaSTOCK3.php",{"texto":index },function(respuesta){  
      
          obj = JSON.parse(respuesta);

          $("#fecha_alerta_stock2").val(obj.FECHA_ALERTA);  
          $("#desc_alert_stock2").val(obj.DESCRIPCION); 

          $("#inventario_stock2").val(obj.INVENTARIO); 
          $("#motivo_stock2").val(obj.MOTIVO);

          $("#actual_stock2").val(obj.STOCK_ACTUAL); 
          $("#minimo_stock2").val(obj.STOCK_MINIMO);

          $("#estado_stock2").val(obj.ESTADO);

          $("#id_stock2").val(obj.ID_ALERTA);


        }); 

}


function guardarAlerta_STOCK2(index){
         

          var val2 = $("#actual_stock2").val();

          var val3 = $("#desc_alert_stock2").val();

          var val4 = $("#id_stock2").val();

          $.post("CRUD/actualizar_AlertaStock2.php",{"texto2":val2, "texto3":val3, "texto4":val4 },function(respuesta){  

            swal(respuesta, "PLASTIC & BEAUTY", "success");
                setTimeout(function(){ location.reload(); } , 2000);  

          });

}



function editar_alerta_SI(index, color){


  if(color == '1'){ $('.modal-header').css('background-color', '#FC554F'); }
  else if( color == '2'){ $('.modal-header').css('background-color', '#FFFCB2'); }

  $("#myModal").modal('show');  

  $.post("CRUD/nombre_alerta.php",{"texto":index },function(respuesta){  

      
          obj = JSON.parse(respuesta);

             var nombre = obj.NOMBRE + " " + obj.APELLIDO_1 + " " + obj.APELLIDO_2;

          $("#fecha_alerta").val(obj.FECHA_ALERTA);  
          $("#desc_alert").val(obj.DESCRIPCION); 

          $("#FOLIO").val(obj.FOLIO); 
          $("#NOMBRE").val(nombre);
          $("#inventario").val(obj.INVENTARIO); 
          $("#motivo").val(obj.MOTIVO);

          $("#selec_estado").val(obj.ESTADO);

          $("#id").val(obj.ID_ALERTA);


        }); 

}


function guardarAlerta_SI(index){


          var val=$("#fecha_alerta").val();

          var anio=String(val).substring(6,10); //2009
          var dia= String(val).substring(0,2); //10
          var mes= String(val).substring(3,5); //11

          var fecha=anio +'-'+ mes +'-'+ dia;
          val = fecha;

          

          var val2 = $("#desc_alert").val();

          var val3 = $("#selec_estado").val();

          var val4 = $("#id").val();


          $.post("CRUD/actualizar_Alerta.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4 },function(respuesta){  

            swal(respuesta, "PLASTIC & BEAUTY", "success");
                setTimeout(function(){ location.reload(); } , 2000);  

          });

}

function validarpaciente(){

          var index = $("#datepicker").val();

          var anio=String(index).substring(6,10); //2009
          var dia= String(index).substring(0,2); //10
          var mes= String(index).substring(3,5); //11

          var fecha=anio +'-'+ mes +'-'+ dia
          index = fecha;

          //alert(index);

         $.post("CRUD/buscar_pacienteFecha.php",{"texto":index },function(respuesta){  

                //obj = JSON.parse(respuesta);   
                //swal(respuesta, "PLASTIC & BEAUTY", "success");  
                $( "#data_inv" ).empty();
                $( "#data_inv" ).append( respuesta );         

          });

    $("#myModal").modal('show');
}


	function isNumberKey(evt)
	{
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode != 46 && charCode > 31 
		&& (charCode < 48 || charCode > 57))
		return false;
		return true;
	} 



  function guardar_pro()
    {
        // Esta es la variable que vamos a pasar
        var val=$("#nombre_pro").val();
        var val2=$("#valor_pro").val();
        var val3=$("#marca_pro").val();
        var val4=$("#duracion_pro").val();

        //var val5 = document.getElementById('file-input-pro').files[0].name;
        if($("#file-input-pro").val()==""){
            var val5 = "";
        }else{  var val5 = document.getElementById('file-input-pro').files[0].name; }


            var myTableArray = [];

            $("#data_inv tr").each(function() {
                var arrayOfThisRow = [];
                var tableData = $(this).find('td');
                if (tableData.length > 0) {
                    tableData.each(function() { arrayOfThisRow.push($(this).text()); });
                    myTableArray.push(arrayOfThisRow);
                }
            });

            //alert(myTableArray.length);

            var val6=$("#valor_pro_efectivo").val();
            var val7=$("#riesgos_pro").val();
            var val8=$("#tecnica_pro").val();
            var val9=$("#indicaciones_pro").val();

            var val10=$("#valor_pro_opc1").val();
            var val11=$("#valor_pro_opc2").val();
            var val12=$("#valor_pro_opc3").val();
            var val13=$("#incluye_pro").val();

 
		//Validamos que esten los campos llenos
		if(val == "" || val2 == "" || val3 == "" || val4 == "" || val5 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    else{

              $.post("CRUD/guardar_pro.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9, "texto10":val10, "texto11":val11, "texto12":val12, "texto13":val13  },function(respuesta){
                  //alert(respuesta);
                  if(respuesta == "REGISTRO GUARDADO") { 


                          for (var i = 0; i < myTableArray.length; i++) {

                                    var val = $("#nombre_pro").val();
                                    var val2 = myTableArray[i][0]; 
                                    var val3 = myTableArray[i][1];

                                    //alert(myTableArray[i][1]); 
                                    
                                    $.post("CRUD/guardar_material.php",{"texto":val, "texto2":val2, "texto3":val3},function(respuesta){

                                          swal(respuesta, "PLASTIC & BEAUTY", "success");  

                                    });
                            
                            }                        


                          var file_data = $('#file-input-pro').prop('files')[0];   
                          var form_data = new FormData();                  
                          form_data.append('file', file_data);
                          //alert(form_data);                             
                          $.ajax({
                              url: 'CRUD/guardarImg_pro.php', // point to server-side PHP script 
                              dataType: 'text',  // what to expect back from the PHP script, if anything
                              cache: false,
                              contentType: false,
                              processData: false,
                              data: form_data,                         
                              type: 'post',
                              success: function(php_script_response){
                                  //alert(php_script_response); // display response from the PHP script, if any
                              }
                           });

                  
                  	$("#nuevo_pro").modal("hide");
                  	$("#nombre_pro").val("");
                  	$("#valor_pro").val("");
                  	$("#valor_pro_efectivo").val("");
                  	$("#marca_pro").val("");
                  	$("#duracion_pro").val("");
                      $('#imgSalida-pro').attr("src","");
                      document.getElementById("file-input-pro").value = "";
                      $("#riesgos_pro").val("");
                      $("#tecnica_pro").val("");
                      $("#indicaciones_pro").val("");
                      $("#valor_pro_opc1").val("");
                      $("#valor_pro_opc2").val("");
                      $("#valor_pro_opc3").val("");
                      $("#incluye_pro").val("");
                    $("#data_inv").empty();
                    $("#data_inv_spa").empty();  
                    $("#data_inv_med").empty(); 
                  	swal(respuesta, "PLASTIC & BEAUTY", "success");            	
                  	
                 	

                  }
                  else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
                });
            }


    } 


    function guardar_spa()
    {
        // Esta es la variable que vamos a pasar
        var val=$("#nombre_spa").val();
        var val2=$("#valor_spa").val();
        var val3=$("#marca_spa").val();
        var val4=$("#duracion_spa").val();
        if($("#file-input-spa").val()==""){
            var val5 = "";
        }else{  var val5 = document.getElementById('file-input-spa').files[0].name; }


        var myTableArray = [];

            $("#data_inv_spa tr").each(function() {
                var arrayOfThisRow = [];
                var tableData = $(this).find('td');
                if (tableData.length > 0) {
                    tableData.each(function() { arrayOfThisRow.push($(this).text()); });
                    myTableArray.push(arrayOfThisRow);
                }
            });


            var val6=$("#valor_spa_efectivo").val();
            var val7=$("#riesgos_spa").val();
            var val8=$("#tecnica_spa").val();
            var val9=$("#indicaciones_spa").val();

        /*if(document.formulariospa.file_input.value==""){
            var val5 = "";
        }else{  var val5 = document.getElementById('file-input-spa').files[0].name; }*/
 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == "" || val5 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    else{

        $.post("CRUD/guardar_spa.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 



                            for (var i = 0; i < myTableArray.length; i++) {

                                    var val = $("#nombre_spa").val();
                                    var val2 = myTableArray[i][0]; 
                                    var val3 = myTableArray[i][1]; 
                                    
                                    $.post("CRUD/guardar_material.php",{"texto":val, "texto2":val2, "texto3":val3},function(respuesta){

                                          swal(respuesta, "PLASTIC & BEAUTY", "success");  

                                    });
                            
                            }  




                    var file_data = $('#file-input-spa').prop('files')[0];   
                    var form_data = new FormData();                  
                    form_data.append('file', file_data);
                    //alert(form_data);                             
                    $.ajax({
                        url: 'CRUD/guardarImg_spa.php', // point to server-side PHP script 
                        dataType: 'text',  // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,                         
                        type: 'post',
                        success: function(php_script_response){
                            //alert(php_script_response); // display response from the PHP script, if any
                        }
                     });

            
              $("#nuevo_tra").modal("hide");
              $("#nombre_spa").val("");
              $("#valor_spa").val("");
              $("#valor_spa_efectivo").val("");
              $("#marca_spa").val("");
              $("#duracion_spa").val("");
                $('#imgSalida-spa').attr("src","");
                document.getElementById("file-input-spa").value = "";
                $("#riesgos_spa").val("");
                $("#tecnica_spa").val("");
                $("#indicaciones_spa").val("");
              $("#data_inv").empty();
              $("#data_inv_spa").empty();  
              $("#data_inv_med").empty();   
              swal(respuesta, "PLASTIC & BEAUTY", "success");             
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
        });
      }
    } 


     function guardar_prod()
    {
        // Esta es la variable que vamos a pasar
        var val=$("#nombre_prod").val();
        var val2=$("#valor_prod").val();
        var val3=$("#marca_prod").val();
        var val4=$("#duracion_prod").val();
        if($("#file-input-prod").val()==""){
            var val5 = "";
        }else{  var val5 = document.getElementById('file-input-prod').files[0].name; }

        var val6=$("#stockActual_prod").val();
        var val7=$("#stockMinimo_prod").val();


 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == "" || val5 == "" || val6 == "" || val7 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    else if( Number(val7) >= Number(val6)  ){  swal("ERROR", "El valor de Stock Minimo debe ser menor al Stock Actual", "error");  }
    else{

        $.post("CRUD/guardar_prod.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 


                    var file_data = $('#file-input-prod').prop('files')[0];   
                    var form_data = new FormData();                  
                    form_data.append('file', file_data);
                    //alert(form_data);                             
                    $.ajax({
                        url: 'CRUD/guardarImg_prod.php', // point to server-side PHP script 
                        dataType: 'text',  // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,                         
                        type: 'post',
                        success: function(php_script_response){
                            //alert(php_script_response); // display response from the PHP script, if any
                        }
                     });

            
              $("#nuevo_prod").modal("hide");
              $("#nombre_prod").val("");
              $("#valor_prod").val("");
              $("#marca_prod").val("");
              $("#duracion_prod").val("");
                $('#imgSalida-prod').attr("src","");
                document.getElementById("file-input-prod").value = "";
              $("#stockActual_prod").val("");
              $("#stockMinimo_prod").val("");
              swal(respuesta, "PLASTIC & BEAUTY", "success");             
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
        });
      }


    } 


    function guardar_med()
    {
        // Esta es la variable que vamos a pasar
        var val=$("#nombre_med").val();
        var val2=$("#valor_med").val();
        var val3=$("#marca_med").val();
        var val4=$("#duracion_med").val();
        if($("#file-input-med").val()==""){
            var val5 = "";
        }else{  var val5 = document.getElementById('file-input-med').files[0].name; }


        var myTableArray = [];

            $("#data_inv_med tr").each(function() {
                var arrayOfThisRow = [];
                var tableData = $(this).find('td');
                if (tableData.length > 0) {
                    tableData.each(function() { arrayOfThisRow.push($(this).text()); });
                    myTableArray.push(arrayOfThisRow);
                }
            });


            var val6=$("#valor_med_efectivo").val();
            var val7=$("#riesgos_med").val();
            var val8=$("#tecnica_med").val();
            var val9=$("#indicaciones_med").val();

 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == "" || val5 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    else{

        $.post("CRUD/guardar_med.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 



                            for (var i = 0; i < myTableArray.length; i++) {

                                    var val = $("#nombre_med").val();
                                    var val2 = myTableArray[i][0]; 
                                    var val3 = myTableArray[i][1]; 
                                    
                                    $.post("CRUD/guardar_material.php",{"texto":val, "texto2":val2, "texto3":val3},function(respuesta){

                                          swal(respuesta, "PLASTIC & BEAUTY", "success");  

                                    });
                            
                            } 


                    var file_data = $('#file-input-med').prop('files')[0];   
                    var form_data = new FormData();                  
                    form_data.append('file', file_data);
                    //alert(form_data);                             
                    $.ajax({
                        url: 'CRUD/guardarImg_med.php', // point to server-side PHP script 
                        dataType: 'text',  // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,                         
                        type: 'post',
                        success: function(php_script_response){
                            //alert(php_script_response); // display response from the PHP script, if any
                        }
                     });

            
              $("#nuevo_med").modal("hide");
              $("#nombre_med").val("");
              $("#valor_med").val("");
              $("#valor_med_efectivo").val("");
              $("#marca_med").val("");
              $("#duracion_med").val("");
                $('#imgSalida-med').attr("src","");
                document.getElementById("file-input-med").value = "";
                $("#riesgos_med").val("");
                $("#tecnica_med").val("");
                $("#indicaciones_med").val("");
                $("#data_inv").empty();
                    $("#data_inv_spa").empty();  
                    $("#data_inv_med").empty();
              swal(respuesta, "PLASTIC & BEAUTY", "success");             
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
        });
      }


    } 


    function guardar_mat(){


        // Esta es la variable que vamos a pasar
        var val=$("#nombre_mat").val();
        var val3=$("#marca_mat").val();
        var val4=$("#duracion_mat").val();

        var val6=$("#stockActual_mat").val();
        var val7=$("#stockMinimo_mat").val();


 
        //Validamos que esten los campos llenos
        if(val == "" || val3 == "" || val4 == "" || val6 == "" || val7 == ""){ swal("ERROR", "Existen campos vacios", "error");}
        else if( Number(val7) >= Number(val6)  ){  swal("ERROR", "El valor de Stock Minimo debe ser menor al Stock Actual", "error");  }
        else{

            $.post("CRUD/guardar_mat.php",{"texto":val, "texto3":val3, "texto4":val4, "texto6":val6, "texto7":val7},function(respuesta){
                //alert(respuesta);
                if(respuesta == "REGISTRO GUARDADO") { 


                        var file_data = $('#file-input-prod').prop('files')[0];   
                        var form_data = new FormData();                  
                        form_data.append('file', file_data);
                        //alert(form_data);                             
                        $.ajax({
                            url: 'CRUD/guardarImg_prod.php', // point to server-side PHP script 
                            dataType: 'text',  // what to expect back from the PHP script, if anything
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: form_data,                         
                            type: 'post',
                            success: function(php_script_response){
                                //alert(php_script_response); // display response from the PHP script, if any
                            }
                         });

                
                  $("#nuevo_mat").modal("hide");
                  $("#nombre_mat").val("");
                  $("#valor_mat").val("");
                  $("#marca_mat").val("");
                  $("#duracion_mat").val("");                   

                  $("#stockActual_mat").val("");
                  $("#stockMinimo_mat").val("");
                  swal(respuesta, "PLASTIC & BEAUTY", "success"); 
                  setTimeout(function(){ location.reload(); } , 2000);              
                  
                  

                }
                else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
            });
        }


    }




    function guardar_pac(){

        // Esta es la variable que vamos a pasar
        var val=$("#no").val();
        var val2=$("#nombrep").val();
        var val3=$("#apellidop").val();
        var val4=$("#apellidom").val();
        var val5=$("#tel").val();
        var val6=$("#cel").val();
        var val7=$("#email").val();

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!

        var yyyy = today.getFullYear();
        if(dd<10){
            dd='0'+dd;
        } 
        if(mm<10){
            mm='0'+mm;
        } 
        var today = yyyy+'/'+mm+'/'+dd;

        var val9 = $("#datepicker").val();

          var anio=String(val9).substring(6,10); //2009
          var dia= String(val9).substring(0,2); //10
          var mes= String(val9).substring(3,5); //11

          var fecha=anio +'-'+ mes +'-'+ dia
          val9 = fecha;
 
        //Validamos que esten los campos llenos
        //if(val == "" || val2 == "" || val3 == "" || val6 == "" || val7 == "" || $("#cel").val().length != '13' || $("#email").val().indexOf('@', 0) == -1 || $("#email").val().indexOf('.', 0) == -1){ swal("ERROR", "Existen campos vacios o recuerda que el c\u00E9lular y tel\u00E9fono deben de ser 10 digitos.", "error");}
        if(val == "" || val2 == "" || val3 == "" || val6 == "" || $("#cel").val().length != '13'){ swal("ERROR", "Existen campos vacios o recuerda que el c\u00E9lular y tel\u00E9fono deben de ser 10 digitos.", "error");}
        else{


                    $.post("CRUD/guardar_pac.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4,"texto5":val5, "texto6":val6, "texto7":val7, "texto8":today, "texto9":val9},function(respuesta){
                       //alert(respuesta.length());
                       //var res = respuesta;
                       //alert(res.length);
                        //if(respuesta == "PACIENTE GUARDADO") {   
                        if(respuesta.indexOf("PACIENTE GUARDADO")) {                         
                           
                            $("#no").val("");
                            $("#nombrep").val("");
                            $("#apellidop").val("");
                            $("#apellidom").val("");
                            $("#tel").val("");
                            $("#cel").val("");
                            $("#email").val("");
                            swal(respuesta, "PLASTIC & BEAUTY", "success");  
                            //setTimeout(function(){ location.reload(); } , 2000);      

                            //window.location.href="pacientes.php?index="+index;

                            setTimeout(function(){

                                $.post("CRUD/nombre_paciente.php",{"texto":val},function(respuesta){

                                  obj = JSON.parse(respuesta);   
                                  //alert(obj.id_pac);  
                                  window.location.href="pacientes.php?index="+obj.id_pac;

                                });

                            } , 2000);
                                 
                    

                        }
                        else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
                    });
         

           }
        }


function validartelefono(){

    if($("#tel").val().length != '10'){ swal("ERROR", "La cantidad de digitos deben de ser 10", "error"); $("#tel").css("border-color", "red"); }
    else{ $("#tel").css("border-color", "black"); } 

}

function validarTelefono(){

    if($("#telefono").val().length != '10' && $("#telefono").val().length != '0' && $("#telefono").val() != '0'){ swal("ERROR", "La cantidad de digitos deben de ser 10", "error"); $("#telefono").css("border-color", "red"); }
    else{ $("#telefono").css("border-color", "black"); } 
}

function validarcelular(){

    if($("#cel").val().length != '10'){ swal("ERROR", "La cantidad de digitos deben de ser 10", "error"); $("#cel").css("border-color", "red"); }
    else{ 
      $("#cel").css("border-color", "black"); 
      var val = $("#cel").val();
      if( val.substr(0,2) == 55 ){ $("#cel").val('044'+val); }
      else{ $("#cel").val('045'+val); }

    } 

}

function validarCelular(){

    if($("#celular").val().length != '10'){ swal("ERROR", "La cantidad de digitos deben de ser 13", "error"); $("#celular").css("border-color", "red"); }
    else{ 
      $("#celular").css("border-color", "black"); 
      var val = $("#celular").val();
      if( val.substr(0,2) == 55 ){ $("#celular2").val('044'); }
      else{ $("#celular2").val('045'); }
    } 

}

function validarcorreo(){

  /*  if($("#email").val().indexOf('@', 0) == -1  || $("#email").val().indexOf('.', 0) == -1   ){ swal("ERROR", "Ingrese un correo valido", "error"); $("#email").css("border-color", "red"); }
    else{ $("#email").css("border-color", "black"); }   */

}

function validarCorreo(){

  var email=$("#e_mail").val();

    $("#e_mail").val(email.toLowerCase());

    if($("#e_mail").val().indexOf('@', 0) == -1  || $("#e_mail").val().indexOf('.', 0) == -1   ){ swal("ERROR", "Ingrese un correo valido", "error"); $("#e_mail").css("border-color", "red"); }
    else{ $("#e_mail").css("border-color", "black"); }   

}

function validarCorreo2(){

  var email=$("#e_mailF").val();

    $("#e_mailF").val(email.toLowerCase());

    if($("#e_mailF").val().indexOf('@', 0) == -1  || $("#e_mailF").val().indexOf('.', 0) == -1   ){ swal("ERROR", "Ingrese un correo valido", "error"); $("#e_mailF").css("border-color", "red"); }
    else{ $("#e_mailF").css("border-color", "black"); }   

}

function validarCurp(){

    if($("#curp").val().length != '18'  && $("#curp").val().length != '0'){ swal("ERROR", "La cantidad de digitos deben de ser 18", "error"); $("#curp").css("border-color", "red"); }
    else{ $("#curp").css("border-color", "black"); } 

}


function validarRFC(){

    if($("#rfc").val().length != '16'  && $("#rfc").val().length != '0' && $("#rfc").val().length != '14' && $("#rfc").val().length != '12'){ swal("ERROR", "La cantidad de digitos deben de ser 12, 14 o 16", "error"); $("#rfc").css("border-color", "red"); }
    else{ $("#rfc").css("border-color", "black"); } 

}



function addImage_pro(e){
          var file = e.target.files[0],
          imageType = /image.*/;
        
          if (!file.type.match(imageType))
           return;
      
          var reader = new FileReader();
          reader.onload = fileOnload_pro;
          reader.readAsDataURL(file);

         }
      
function fileOnload_pro(e) {
          var result=e.target.result;
          $('#imgSalida-pro').attr("src",result);
         }


function addImage_spa(e){
          var file = e.target.files[0],
          imageType = /image.*/;
        
          if (!file.type.match(imageType))
           return;
      
          var reader = new FileReader();
          reader.onload = fileOnload_spa;
          reader.readAsDataURL(file);

         }
      
function fileOnload_spa(e) {
          var result=e.target.result;
          $('#imgSalida-spa').attr("src",result);
         }
    

function addImage_prod(e){
          var file = e.target.files[0],
          imageType = /image.*/;
        
          if (!file.type.match(imageType))
           return;
      
          var reader = new FileReader();
          reader.onload = fileOnload_prod;
          reader.readAsDataURL(file);

         }
      
function fileOnload_prod(e) {
          var result=e.target.result;
          $('#imgSalida-prod').attr("src",result);
         }


function addImage_med(e){
          var file = e.target.files[0],
          imageType = /image.*/;
        
          if (!file.type.match(imageType))
           return;
      
          var reader = new FileReader();
          reader.onload = fileOnload_med;
          reader.readAsDataURL(file);

         }
      
function fileOnload_med(e) {
          var result=e.target.result;
          $('#imgSalida-med').attr("src",result);
         }


    