$(document).ready(function(){



		var index = "TODOS";
		$.post("CRUD/nombre_alertas.php",{"texto":index },function(respuesta){ 

      		$( "#data_consultas_alerta" ).append( respuesta );

      	}); 



      	var dt = new Date();

		// Display the month, day, and year. getMonth() returns a 0-based number.
		var month = dt.getMonth()+1;
		var day = dt.getDate();
		var year = dt.getFullYear();
		var index = day + '/' + month + '/' + year;


		$.post("CRUD/nombre_alertas.php",{"texto":index },function(respuesta){ 

      		$( "#data_consultas_alerta" ).append( respuesta );

      	}); 



});


function borrar_alerta(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_alerta.php",{"texto":index, },function(respuesta){                      
          
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


function editar_alerta(index){


	    $.post("CRUD/nombre_alerta.php",{"texto":index },function(respuesta){  

			
        	obj = JSON.parse(respuesta);

             var nombre = obj.NOMBRE + " " + obj.APELLIDO_1 + " " + obj.APELLIDO_2;

        	$("#fecha_alert").val(obj.FECHA_ALERTA);  
        	$("#desc_alert").val(obj.DESCRIPCION); 

        	$("#folio_alert").val(obj.FOLIO); 
        	$("#nombre_alert").val(nombre);
        	$("#inv_alert").val(obj.INVENTARIO); 
        	$("#mot_alert").val(obj.MOTIVO);
        	$("#tel_alert").val(obj.TELEFONO); 
        	$("#cel_alert").val(obj.CELULAR); 

        	$("#cant_producto").val(obj.ESTADO);

        	$("#id_alerta").val(obj.ID_ALERTA);
        	$("#desc_alert").focus();


        });



}


function guardarAlerta(index){


        	var val=$("#fecha_alert").val();

	        var anio=String(val).substring(6,10); //2009
	        var dia= String(val).substring(0,2); //10
	        var mes= String(val).substring(3,5); //11

	        var fecha=anio +'-'+ mes +'-'+ dia
	        val = fecha;

	        var val2 = $("#desc_alert").val();

	        var val3 = $("#cant_producto").val();

	        var val4 = $("#id_alerta").val();


	        $.post("CRUD/actualizar_Alerta.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4 },function(respuesta){  

	        	swal(respuesta, "PLASTIC & BEAUTY", "success");
              	setTimeout(function(){ location.reload(); } , 2000);  

	        });

}

function buscarAlerta(index){


	var val = $("#fecha_ini").val();
	var val2 = $("#fecha_fin").val();
	var val3 = $("#selec_producto").val();
	var val4 = $("#selec_estado").val();

			var anio=String(val).substring(6,10); //2009
	        var dia= String(val).substring(0,2); //10
	        var mes= String(val).substring(3,5); //11

	        var fecha=anio +'-'+ mes +'-'+ dia
	        val = fecha;

	        var anio=String(val2).substring(6,10); //2009
	        var dia= String(val2).substring(0,2); //10
	        var mes= String(val2).substring(3,5); //11

	        var fecha=anio +'-'+ mes +'-'+ dia
	        val2 = fecha;


	if(val == "--" || val2 == "--"){ swal("ERROR", "Existen campos vacios", "error"); }
	else{

		if(val > val2){ swal("ERROR", "La fecha de inicio debe ser menor o igual a la fecha fin", "error"); }
		else{

					$.post("CRUD/nombre_alertasFiltro.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, },function(respuesta){ 

						$( "#data_consultas_alerta" ).empty();
			      		$( "#data_consultas_alerta" ).append( respuesta );

			      	}); 		


		}

	}

	


}


function cita(){

	$("#agregarCita").modal('show');

}

function cita2(){

	$("#eliminarCita").modal('show');

}



function guardar_cita(){

	var val = $("#fecha_1").val();
	var val2 = $("#hora1").val();
	var val3 = $("#hora2").val();
	var val4 = $("#cita").val();



	if(val == "" || val2 == "" || val3 == "" || val4 == "" ){	 swal("ERROR", "Existen campos vacios", "error");	}
	else if(  val2.substring(0,2) >=  val3.substring(0,2) ){	swal("ERROR", "Hora de inicio menor que la hora final", "error");	}
	else{

				$.post("CRUD/generar_cita.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, },function(respuesta){ 

					//$( "#data_consultas_alerta" ).empty();
			  		//$( "#data_consultas_alerta" ).append( respuesta );

			  		$("#agregarCita").modal('hide');


			  		if(respuesta.indexOf('ERROR') != -1){	swal("ERROR", "YA EXISTE UNA CITA PROGRAMA", "error");	}
			  		else{	

			  			swal(respuesta, "PLASTIC & BEAUTY", "success");	
			  			setTimeout(function(){ location.reload(); } , 1000); 

			  		}
			         

			  		

			  	}); 	

		}	


}


