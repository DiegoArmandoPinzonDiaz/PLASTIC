$(document).ready(function(){

    //alert("oleeee");
    //obtenemos el texto introducido en el campo de búsqueda
    var id=location.href.split("index=")[1]; 
    
    //hace la búsqueda                                                                                
    $.post("busq_prod.php",{"texto":id},function(respuesta){
          //alert(respuesta);     
          $( "#sel_cirugia" ).append( respuesta );
          //$('#sel_cirugia').empty();
          $("#sel_cirugia").selectpicker("refresh");            

      });


    $.post("busq_med.php",{"texto":id},function(respuesta){
          //alert(respuesta);     
          $( "#sel_medicina" ).append( respuesta );
          $("#sel_medicina").selectpicker("refresh");

      });


    $.post("busq_spa.php",{"texto":id},function(respuesta){
          //alert(respuesta);     
          $( "#sel_spa" ).append( respuesta );
          $("#sel_spa").selectpicker("refresh");

      });


    $.post("busq_producto.php",{"texto":id},function(respuesta){
          //alert(respuesta);     
          $( "#sel_producto" ).append( respuesta );
          $("#sel_producto").selectpicker("refresh");

      });


      $("#agregar").on("click", function(){

        if($("#sel_producto").val() != null){

              if($("#sel_producto").val().length >= 1) {   

                  $("#t_items").append('<tr>'+'<td><button type="button" class="del_item" onclick="restar_pro( '+ $("#sel_producto").val()*$("#cant_producto").val() +' )"><a><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></button></td>'+ '<td>'+ $("#cant_producto").val() +'</td>' + '<td class="cuenta">'+ $("#sel_producto").val()*$("#cant_producto").val() +'</td>' + '<td>'+ $('#sel_producto').find(":selected").text() +'</td></tr>');

                
                  }  
            }
        });


      $("#t_items").on("click", ".del_item", function(event){

              event.preventDefault();          
              $(this).parentsUntil('#t_items').remove();
              // number-=1;

              if( $("#total_producto").val() == 0)
                { 
                  $("#descripcion_productos").prop("disabled", true);  
                  $("#descripcion_productos").val(""); 

                  $("#sel_cirugia").prop("disabled", false);
                  $("#sel_medicina").prop("disabled", false); 
                  $("#sel_spa").prop("disabled", false);

                  $("#sel_producto").prop("disabled", false);
                  $("#agregar").prop("disabled", false);

                }
                
        });
              

      /* if my var reload isn't set locally.. in the first time it will be true */
      if (!localStorage.getItem("reload")) {
          /* set reload locally and then reload the page */
          localStorage.setItem("reload", "true");
          location.reload();
      }
      /* after reload clear the localStorage */
      else {
          localStorage.removeItem("reload");
          // localStorage.clear(); // an option
      }


      var val=location.href.split("index=")[1];

      $.post("contador.php",{"texto":val},function(respuesta){
              
          obj = JSON.parse(respuesta);

          $("#nombreCompleto").text(obj.nombreCompleto);
          $("#cuenta").text(obj.cuenta);

      });



    $('#efectivo').change(function() {
        if(this.checked) {
           $('#transferencia').prop("checked", false);
           $('#tarjeta').prop("checked", false);



           var texto = document.getElementById("sel_cirugia");

			      for (var i = 0; i < texto.options.length; i++) {

			         if(texto.options[i].selected == true){

			             $("#total").val(parseInt($("#sel_cirugia :selected").attr("data-efectivo")));
			          }
			      }

			var texto = document.getElementById("sel_medicina");

			      for (var i = 0; i < texto.options.length; i++) {

			         if(texto.options[i].selected == true){

			             $("#total").val(parseInt($("#sel_medicina :selected").attr("data-efectivo")));


			             //HILOS
			             if($('#sel_medicina').find(":selected").text() == 'HILOS DE SUSTENTACI\u00D3N' ){	

			             	var cuenta = parseInt($("#sel_medicina :selected").attr("data-efectivo"));

							var numero = $('#cantidad_hilo').find(":selected").text();

							$("#total").val(cuenta*numero);	 		             	

			             }


			             //BOTOX
			             if($('#sel_medicina').find(":selected").text() == 'BOTOX' ){	

			             	var cuenta = parseInt($("#sel_medicina :selected").attr("data-efectivo"));

							var numero = $('#cantidad_botox').find(":selected").text();

							$("#total").val(cuenta*numero);	 		             	

			             }


			             //ACIDO
			             if($('#sel_medicina').find(":selected").text().indexOf('HIALUR\u00D3NICO', 0) != -1 ){	

			             	var cuenta = parseInt($("#sel_medicina :selected").attr("data-efectivo"));

							var numero = $('#cantidad_acido').find(":selected").text();

							$("#total").val(cuenta*numero);	 		             	

			             }



			          }
			      }
			      
			var texto = document.getElementById("sel_spa");

			      for (var i = 0; i < texto.options.length; i++) {

			         if(texto.options[i].selected == true){

			             $("#total").val(parseInt($("#sel_spa :selected").attr("data-efectivo")));
			          }
			      }  
		}                       
    });

    $('#transferencia').change(function() {
        if(this.checked) {
           $('#efectivo').prop("checked", false);
           $('#tarjeta').prop("checked", false);



           var texto = document.getElementById("sel_cirugia");

			      for (var i = 0; i < texto.options.length; i++) {

			         if(texto.options[i].selected == true){

			             $("#total").val(parseInt($("#sel_cirugia :selected").attr("value")));
			          }
			      }

			var texto = document.getElementById("sel_medicina");

			      for (var i = 0; i < texto.options.length; i++) {

			         if(texto.options[i].selected == true){

			             $("#total").val(parseInt($("#sel_medicina :selected").attr("value")));


			             //HILOS
			             if($('#sel_medicina').find(":selected").text() == 'HILOS DE SUSTENTACI\u00D3N' ){	

			             	var cuenta = parseInt($("#sel_medicina :selected").attr("value"));

							var numero = $('#cantidad_hilo').find(":selected").text();

							$("#total").val(cuenta*numero);	 		             	

			             }


			             //BOTOX
			             if($('#sel_medicina').find(":selected").text() == 'BOTOX' ){	

			             	var cuenta = parseInt($("#sel_medicina :selected").attr("value"));

							var numero = $('#cantidad_botox').find(":selected").text();

							$("#total").val(cuenta*numero);	 		             	

			             }


			             //ACIDO
			             if($('#sel_medicina').find(":selected").text().indexOf('HIALUR\u00D3NICO', 0) != -1 ){	

			             	var cuenta = parseInt($("#sel_medicina :selected").attr("value"));

							var numero = $('#cantidad_acido').find(":selected").text();

							$("#total").val(cuenta*numero);	 		             	

			             }



			          }
			      }
			      
			var texto = document.getElementById("sel_spa");

			      for (var i = 0; i < texto.options.length; i++) {

			         if(texto.options[i].selected == true){

			             $("#total").val(parseInt($("#sel_spa :selected").attr("value")));
			          }
			      }

        }               
    });

    $('#tarjeta').change(function() {
        if(this.checked) {
           $('#efectivo').prop("checked", false);
           $('#transferencia').prop("checked", false);


           var texto = document.getElementById("sel_cirugia");

			      for (var i = 0; i < texto.options.length; i++) {

			         if(texto.options[i].selected == true){

			             $("#total").val(parseInt($("#sel_cirugia :selected").attr("value")));
			          }
			      }

			var texto = document.getElementById("sel_medicina");

			      for (var i = 0; i < texto.options.length; i++) {

			         if(texto.options[i].selected == true){

			             $("#total").val(parseInt($("#sel_medicina :selected").attr("value")));


			             //HILOS
			             if($('#sel_medicina').find(":selected").text() == 'HILOS DE SUSTENTACI\u00D3N' ){	

			             	var cuenta = parseInt($("#sel_medicina :selected").attr("value"));

							var numero = $('#cantidad_hilo').find(":selected").text();

							$("#total").val(cuenta*numero);	 		             	

			             }


			             //BOTOX
			             if($('#sel_medicina').find(":selected").text() == 'BOTOX' ){	

			             	var cuenta = parseInt($("#sel_medicina :selected").attr("value"));

							var numero = $('#cantidad_botox').find(":selected").text();

							$("#total").val(cuenta*numero);	 		             	

			             }


			             //ACIDO
			             if($('#sel_medicina').find(":selected").text().indexOf('HIALUR\u00D3NICO', 0) != -1 ){	

			             	var cuenta = parseInt($("#sel_medicina :selected").attr("value"));

							var numero = $('#cantidad_acido').find(":selected").text();

							$("#total").val(cuenta*numero);	 		             	

			             }



			          }
			      }
			      
			var texto = document.getElementById("sel_spa");

			      for (var i = 0; i < texto.options.length; i++) {

			         if(texto.options[i].selected == true){

			             $("#total").val(parseInt($("#sel_spa :selected").attr("value")));
			          }
			      }

        }               
    });




}); 

function restar_pro(index){

  //alert(index);
  var total = $("#total_producto").val();
  total = parseInt(total) - parseInt(index);
  $("#total_producto").val(total);


  var total = $("#total").val();
  total = parseInt(total) - parseInt(index);
  $("#total").val(total);


}

function cuenta(){

      var cuenta = 0;
      
      var total = $("#total_producto").val();
      if( total == ""){ total = 0;  }


      var texto = document.getElementById("sel_cirugia");

      for (var i = 0; i < texto.options.length; i++) {

         if(texto.options[i].selected == true){
              //alert(texto.options[i].value);
              //alert(texto.options[i].innerHTML); 
              
              //total = parseInt(total) + parseInt(texto.options[i].value); 
              if($('#efectivo').is(":checked")){  total = parseInt(total) + parseInt($("#sel_cirugia :selected").attr("data-efectivo")); }     
              else{	  total = parseInt(total) + parseInt(texto.options[i].value);	}     
              cuenta = cuenta + 1;

          }

          if(cuenta > 1){
                        
            swal("ERROR", "SOLO PUEDE SELECCIONAR UNO.", "error");            
            $('#sel_cirugia').selectpicker('val', []);
            total = 0;
            cuenta = 0;

          }
      }

      if(cuenta > 0)
        { 
          $("#descripcion_cirugias").prop("disabled", false); 
          $("#sel_medicina").prop("disabled", true);
          $("#sel_spa").prop("disabled", true); 
          $("#sel_producto").prop("disabled", true); 
          $("#agregar").prop("disabled", true);
        }
      else{ 

        $("#descripcion_cirugias").prop("disabled", true);  
        $("#descripcion_cirugias").val("");

          $("#sel_medicina").prop("disabled", false);
          $("#sel_spa").prop("disabled", false); 
          $("#sel_producto").prop("disabled", false); 
          $("#agregar").prop("disabled", false);
      }
      var cuenta2 = 0;
      

            var texto = document.getElementById("sel_medicina");

      for (var i = 0; i < texto.options.length; i++) {

         if(texto.options[i].selected ==true){
              //alert(texto.options[i].value);
              //alert(texto.options[i].innerHTML);
              //total = parseInt(total) + parseInt(texto.options[i].value);
              if($('#efectivo').is(":checked")){  total = parseInt(total) + parseInt($("#sel_medicina :selected").attr("data-efectivo")); }     
              else{	  total = parseInt(total) + parseInt(texto.options[i].value);	}  
              cuenta2 = cuenta2 + 1;
          }
          if(cuenta2 > 1){
                        
            swal("ERROR", "SOLO PUEDE SELECCIONAR UNO.", "error");            
            $('#sel_medicina').selectpicker('val', []);
            total = 0;
            cuenta2 = 0;

          }
      }

      if(cuenta > 0){  }
      else if(cuenta2 > 0)
        { 
          $("#descripcion_medicina").prop("disabled", false); 
          $("#sel_cirugia").prop("disabled", true);
          $("#sel_spa").prop("disabled", true); 
          $("#sel_producto").prop("disabled", true); 
          $("#agregar").prop("disabled", true);
        }
      else{ 
        $("#descripcion_medicina").prop("disabled", true);  
        $("#descripcion_medicina").val("");

          $("#sel_cirugia").prop("disabled", false);
          $("#sel_spa").prop("disabled", false); 
          $("#sel_producto").prop("disabled", false); 
          $("#agregar").prop("disabled", false);
      }
      var cuenta3 = 0;

            var texto = document.getElementById("sel_spa");

      for (var i = 0; i < texto.options.length; i++) {

         if(texto.options[i].selected ==true){
              //alert(texto.options[i].value);
              //alert(texto.options[i].innerHTML);
              //total = parseInt(total) + parseInt(texto.options[i].value);
              if($('#efectivo').is(":checked")){  total = parseInt(total) + parseInt($("#sel_spa :selected").attr("data-efectivo")); }     
              else{	  total = parseInt(total) + parseInt(texto.options[i].value);	}  
              cuenta3 = cuenta3 + 1;
          }
          if(cuenta3 > 1){
                        
            swal("ERROR", "SOLO PUEDE SELECCIONAR UNO.", "error");            
            $('#sel_spa').selectpicker('val', []);
            total = 0;
            cuenta3 = 0;

          }
      }

      if(cuenta > 0 || cuenta2 > 0 ){  }
      else if(cuenta3 > 0)
        { 
          $("#descripcion_spa").prop("disabled", false); 

          $("#sel_cirugia").prop("disabled", true);
          $("#sel_medicina").prop("disabled", true); 
          $("#sel_producto").prop("disabled", true);
          $("#agregar").prop("disabled", true);

        }
      else{ 
        $("#descripcion_spa").prop("disabled", true);  
        $("#descripcion_spa").val("");

          $("#sel_cirugia").prop("disabled", false);
          $("#sel_medicina").prop("disabled", false); 
          $("#sel_producto").prop("disabled", false); 
          $("#agregar").prop("disabled", false);
      }
      

      var texto = document.getElementById("sel_producto");
      var conceptName = $('#sel_producto').find(":selected").text();

      //alert(conceptName);

      $("#total").val(total);


      if(cuenta2 > 0){	

      	if($('#sel_medicina').find(":selected").text() == 'HILOS DE SUSTENTACI\u00D3N' ){	 $("#HILOS").modal('show');		}

      	if($('#sel_medicina').find(":selected").text() == 'BOTOX' ){	 $("#BOTOX").modal('show');		}

      	if($('#sel_medicina').find(":selected").text().indexOf('HIALUR\u00D3NICO', 0) != -1 ){	 $("#ACIDO").modal('show');		}
      	
      }

}

function sumarHilo(){

	$("#HILOS").modal('hide');

	var cuenta = $("#total").val();

	var numero = $('#cantidad_hilo').find(":selected").text();

	$("#total").val(cuenta*numero);

}

function sumarBotox(){

	$("#BOTOX").modal('hide');

	var cuenta = $("#total").val();

	var numero = $('#cantidad_botox').find(":selected").text();

	$("#total").val(cuenta*numero);

}


function sumarAcido(){

	$("#ACIDO").modal('hide');

	var cuenta = $("#total").val();

	var numero = $('#cantidad_acido').find(":selected").text();

	$("#total").val(cuenta*numero);

}



function cuentaPro(){

  if($("#sel_producto").val() != null){

          var total = $("#total").val();
          if( total == ""){ total = 0;  }
          var texto = document.getElementById("sel_producto");
          var texto2 = document.getElementById("cant_producto");

          var cuenta = parseInt(texto.value) * parseInt(texto2.value);

          total = parseInt(total) + parseInt(cuenta);

          $("#total").val(total);

          var suma = $("#total_producto").val();
          if( suma == ""){ suma = 0;  }

          suma = parseInt(suma) + parseInt(cuenta);

          $("#total_producto").val( suma );   

          //Por aqui es la cosa//
          var valor = $("table tbody tr").find("td").text();
          //alert(valor);

          $("#descripcion_productos").prop("disabled", false);
          $("#sel_cirugia").prop("disabled", true);
          $("#sel_medicina").prop("disabled", true); 
          $("#sel_spa").prop("disabled", true);
          $("#sel_producto").prop("disabled", true);
          $("#agregar").prop("disabled", true);

        }
        else{

            swal("ERROR", "Aún no ha seleccionado ningún producto.", "error");

        }


}


function guardarCon(){


            var val1 = "";

            var texto = document.getElementById("sel_cirugia");

            for (var i = 0; i < texto.options.length; i++) {

               if(texto.options[i].selected ==true){
                    
                    val1 = val1 + "/" + texto.options[i].text
                }
            }
                        
            var val2 = "";

            var texto = document.getElementById("sel_medicina");

            for (var i = 0; i < texto.options.length; i++) {

               if(texto.options[i].selected ==true){
                    
                    val2 = val2 + "/" + texto.options[i].text
                }
            }
                        
            var val3 = "";

            var texto = document.getElementById("sel_spa");

            for (var i = 0; i < texto.options.length; i++) {

               if(texto.options[i].selected ==true){
                    
                    val3 = val3 + "/" + texto.options[i].text
                }
            }

            var val1 = val1.substr(1);
            var val2 = val2.substr(1);
            var val3 = val3.substr(1);


                    var val4=$("#fecha_con").val();

                    var anio=String(val4).substring(6,10); //2009
                    var dia= String(val4).substring(0,2); //10
                    var mes= String(val4).substring(3,5); //11

                    var fecha=anio +'-'+ mes +'-'+ dia
                    val4 = fecha;

                    var val5=$("#descripcion_cirugias").val();  
                    var val6=$("#descripcion_medicina").val();  
                    var val7=$("#descripcion_spa").val();  


            var val8="";
            var val9="";
            var val10="";

              $('#t_items tr').each(function () {

                  val8 = val8 + "/" + $(this).find("td").eq(1).html();
                  val9 = val9 + "/" + $(this).find("td").eq(2).html();
                  val10 = val10 + "/" + $(this).find("td").eq(3).html();

              });

              var val8 = val8.substr(1);
              var val9 = val9.substr(1);
              var val10 = val10.substr(1);


                    var val11=$("#total").val(); 
                    var val12=$("#total_producto").val();  
                    var val13=$("#descripcion_productos").val(); 

              var val=location.href.split("index=")[1];

             var val14 = $("#escon").val(); 

             var val15 = $("#tarjeta").is(":checked");
             var val16 = $("#factura").is(":checked");

             if(val15==true){ val15="1";}else{val15="0";}
             if(val16==true){ val16="1";}else{val16="0";}

             var val17 = $("#comision").val(); 

             var val18 = "";

             if(val15 == "1"){ val18 = "PENDIENTE"}

             var val19 = $("#efectivo").is(":checked");
             var val20 = $("#transferencia").is(":checked"); 

             if(val19==true){ val19="1";}else{val19="0";}
             if(val20==true){ val20="1";}else{val20="0";}


             var val21 = $("#sucursal").val(); 


             //var cirugias = val1;
             

      if( val4 == "--"){swal("ERROR", "EL CAMPO FECHA ESTA VACIO", "error");}
      else if( val1 == "" && val2 == "" && val3 == "" && val10 == "" ){swal("ERROR", "No ha seleccionando ningún procedimiento o producto.", "error");}
      else{


        $.blockUI({ css: { 
                border: 'none', 
                padding: '15px', 
                backgroundColor: '#000', 
                '-webkit-border-radius': '10px', 
                '-moz-border-radius': '10px', 
                opacity: .5, 
                color: '#fff' 
            } });


        $.post("CRUD/guardar_ConPac.php",{"texto":val, "texto1":val1, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9, "texto10":val10, "texto11":val11, "texto12":val12, "texto13":val13, "texto14":val14, "texto15":val15, "texto16":val16, "texto17":val17, "texto18":val18, "texto19":val19, "texto20":val20, "texto21":val21  },function(respuesta){
        
            if(respuesta == "REGISTRO GUARDADO") { 
  
                    // Crear alertas                  
           
              //swal(respuesta, "PLASTIC & BEAUTY", "success");   
              //setTimeout(function(){ location.reload(); } , 2000);  
              //location.reload();       
              
              setTimeout(function(){ $.unblockUI(); swal(respuesta, "PLASTIC & BEAUTY", "success"); location.reload();} , 5000);  


            }
            else{ 

                  //swal(respuesta, "Intentelo una vez mas nuevo", "error");
                  
                  setTimeout(function(){ $.unblockUI(); swal(respuesta, "Intentelo una vez mas nuevo", "success"); location.reload();} , 5000);  
              
              }
        });

      }

      //location.reload();


  }


function borrar_productos(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_productos.php",{"texto":index, },function(respuesta){                      
          
              swal(respuesta, "PLASTIC & BEAUTY", "success");
              setTimeout(function(){ location.reload(); } , 2000);  

            });


            swal("Elemento eliminado", {
              icon: "success",
            });

            $( "#data_inv" ).empty();

      } else {
        swal("OK!");
      }
    });

    //location.reload();
    
}


function editar_productos(E0) {

      $.post("CRUD/nombre_productos.php",{"texto":E0 },function(respuesta){  

        obj = JSON.parse(respuesta);

        $("#total").val(obj.TOTAL); $("#total").focus(); $("#total").blur();
        $("#descripcion_productos").val(obj.DESCRIP_PRODUCTO);
        $("#total_producto").val(obj.TOTAL_PRODUCTO);
        $("#descripcion_spa").val(obj.DESCRIP_SPA);
        $("#descripcion_medicina").val(obj.DESCRIP_MEDICINA);
        $("#descripcion_cirugias").val(obj.DESCRIP_CIRUGIA);


                    var val = obj.FECHA_CONSULTA;  //2018-05-03
                    var anio=String(val).substring(0,4); //2009
                    var dia= String(val).substring(8,10); //10
                    var mes= String(val).substring(5,7); //11

                    /*if(dia < 10){ var fecha='0'+dia +'/';}
                    else{ var fecha=dia+'/';}

                    if(mes < 10){ fecha = fecha + '0' + mes + '/'}
                    else{ fecha = fecha + mes + '/'}*/
                    
                    var fecha = dia + '/';
                    fecha = fecha + mes + '/';
                    fecha = fecha + anio; 
                    val = fecha;


        $("#fecha_con").val(val);

        $("#escon").val(obj.ID_CONSULTA);

        if(obj.FACTURA==1){ $('#factura').prop("checked", true);  }
        if(obj.TARJETA==1){ $('#tarjeta').prop("checked", true);  }
        if(obj.EFECTIVO==1){ $('#efectivo').prop("checked", true);  }
        if(obj.TRANSFERENCIA==1){ $('#transferencia').prop("checked", true);  }
        $("#comision").val(obj.COMISION);

        $("#sucursal").val(obj.SUCURSAL);


            var cuenta = 0;
            var texto = document.getElementById("sel_cirugia");

            for (var i = 0; i < texto.options.length; i++) {

               if( obj.SEL_CIRUGIA.indexOf(texto.options[i].text) != -1 ){
                    
                    texto.options[i].selected = true;  
                    $("#descripcion_cirugias").prop("disabled", false);   
                    cuenta = 1;               
                }else{

                    texto.options[i].selected = false;                        
                }
            }

            if(cuenta==0){$("#descripcion_cirugias").prop("disabled", true); }


            cuenta=0;
            var texto = document.getElementById("sel_medicina");

            for (var i = 0; i < texto.options.length; i++) {

               if( obj.SEL_MEDICINA.indexOf(texto.options[i].text) != -1 ){
                    
                    texto.options[i].selected = true;  
                    $("#descripcion_medicina").prop("disabled", false); 
                    cuenta=1;                 
                }else{

                    texto.options[i].selected = false;  
                    
                }
            }

            if(cuenta==0){$("#descripcion_medicina").prop("disabled", true); }


            cuenta = 0;
            var texto = document.getElementById("sel_spa");

            for (var i = 0; i < texto.options.length; i++) {

               if( obj.SEL_SPA.indexOf(texto.options[i].text) != -1 ){
                    
                    texto.options[i].selected = true;
                    $("#descripcion_spa").prop("disabled", false);  
                    cuenta=1;                  
                }else{

                    texto.options[i].selected = false;
                      
                }
            }


            if(cuenta==0){$("#descripcion_spa").prop("disabled", true); }


            
            $('.selectpicker').selectpicker('refresh');

            //var listo = obj.NOMBRE_PRODUCTO.substr(1);
            var nombre=obj.NOMBRE_PRODUCTO.trim().split("/");

            //var listo2 = obj.CANTIDAD_PRODUCTO.substr(1);
            var cantidad=obj.CANTIDAD_PRODUCTO.trim().split("/");

            //var listo3 = obj.VALOR_PRODUCTO.substr(1);
            var valor=obj.VALOR_PRODUCTO.trim().split("/");   

            $("#t_items").empty();       

            if(nombre[0] != ""){
              for (var i = 0; i < nombre.length; i++) {

                $("#t_items").append('<tr>'+'<td><button type="button" class="del_item" onclick="restar_pro( '+ valor[i] +' )"><a><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></button></td>'+ '<td>'+ cantidad[i] +'</td>' + '<td class="cuenta">'+ valor[i] +'</td>' + '<td>'+ nombre[i] +'</td></tr>');
                $("#descripcion_productos").prop("disabled", false);  
              }

            }
            else{ $("#descripcion_productos").prop("disabled", true);  }

            $("#total").focus();


      });   
    
}





