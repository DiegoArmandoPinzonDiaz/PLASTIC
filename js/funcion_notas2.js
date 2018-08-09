$(document).ready(function(){






});

var fecha_paciente, procedimiento_ind_pre, clinica_ind_pre, fecha_cirugia, hora_cirugia;


$('#myModal_Ind_Pre').on('shown.bs.modal', function (e) {   

	var elemento = $("#fecha_cirugia_ind_pre");
		var posicion = elemento.position();

		$("#ind_pre_firma_paciente").css({ top: posicion.top + 100  });

		enableScroll();

});


$('#myModalFECHA16').on('shown.bs.modal', function (e) {   


	var id=location.href.split("index=")[1]; 

	     $.post("busq_prod.php",{"texto":id},function(respuesta){

	          $("#procedimiento_ind_pre" ).append( respuesta );
	          $("#procedimiento_ind_pre").selectpicker("refresh"); 
	     });     

	    $.post("busq_clinicas.php",{"texto":id },function(respuesta2){ 

	      		$("#clinica_ind_pre" ).append( respuesta2 );
	      		$("#clinica_ind_pre").selectpicker("refresh");

	    }); 


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
		var today = dd+'/'+mm+'/'+yyyy;

    	$("#fecha_22").val(today); 

});



function abrirDATOS18(){

	$("#myModalFECHA16").modal('show');	

}


//Alistamos los datos para luego solicitar la creacion del pdf

function abrirPDF18(){

	enableScroll();

	if($("#fecha_22").val() == ""){ alert("No ha seleccionado FECHA"); }
	else if($("#fecha_23").val() == ""){ alert("No ha seleccionado FECHA CIRUGIA"); }
	else{	

		$("#myModalFECHA16").modal('hide');
		$("#myModal_Ind_Pre").modal('show');

		fecha_paciente = $("#fecha_22").val();
		fecha_cirugia = $("#fecha_23").val();

		var index = location.href.split("index=")[1];

			$.post("CRUD/nombre_pac.php",{"texto":index },function(respuesta){  

		        obj = JSON.parse(respuesta);      

		        nombre_paciente = obj.nom + " " + obj.apellido_1 + " " + obj.apellido_2 ;

		        var fecha = obj.fecha_nac;
		        var hoy = new Date();
		        var cumpleanos = new Date(fecha);
		        var edad = hoy.getFullYear() - cumpleanos.getFullYear();
			    var m = hoy.getMonth() - cumpleanos.getMonth();

			    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
			        edad--;
			    }

			    edad_paciente = edad;

			    folio_paciente = obj.folio;

			    sexo = obj.sexo;

			    if(sexo == "1"){ sexo="MASCULINO";}
			    else{ sexo="FEMENINO";}

			    //diagnostico_paciente = $("#diagnostico").val();

				/*diagnostico_marcaje = $("#diagnostico_marcaje2").val();
				nota_marcaje = $("#nota_marcaje2").val();
				familiar_marcaje = $("#familiar_marcaje2").val();*/


				procedimiento_ind_pre = $('#procedimiento_ind_pre').find(":selected").text();
				clinica_ind_pre = $('#clinica_ind_pre').find(":selected").text();
				

				hora = $('#hora_cirugia').find(":selected").text() + ':' + $('#minuto_cirugia').find(":selected").text();

				if($('#hora_cirugia').find(":selected").text()<12){ hora = hora+' AM';}
				else{ hora = hora+' PM';}

				var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
				var fecha = new Date($("#fecha_23").val().substr(6,10), $("#fecha_23").val().substr(3,2)-1, $("#fecha_23").val().substr(0,2));

				fecha_revision = fecha.toLocaleDateString("es-ES", options)+', '+hora;

				document.getElementById("fecha_ind_pre").innerHTML = fecha_paciente;
				document.getElementById("folio_ind_pre").innerHTML = folio_paciente;

				document.getElementById("nombre_ind_pre").innerHTML = 'NOMBRE: '+nombre_paciente;
				document.getElementById("sexo_ind_pre").innerHTML = 'SEXO: '+sexo;
				document.getElementById("edad_ind_pre").innerHTML = 'EDAD: '+edad_paciente;

				document.getElementById("procedimiento_ind_pre2").innerHTML = 'PROCEDIMIENTO: '+procedimiento_ind_pre;			

				document.getElementById("fecha_cirugia_ind_pre").innerHTML = 'FECHA CIRUGIA: '+fecha_revision;



					$.post("CRUD/nombre_clinica.php",{"texto":$('#clinica_ind_pre').val() },function(respuesta){  

			        		obj = JSON.parse(respuesta);   

							document.getElementById("clinica_ind_pre2").innerHTML = 'CLINICA: '+clinica_ind_pre+', '+obj.DIRECCION_CLI+', '+obj.REFERENCIA_CLI;

							clinica_ind_pre = clinica_ind_pre+', '+obj.DIRECCION_CLI+', '+obj.REFERENCIA_CLI;
					});




      		}); 

		}		

}



function firmaPDF15(){

	disableScroll();
	$("#commentPictureModal22").modal('show');
	$("#myModal_Ind_Pre").modal('hide');

}




function generarPDF18(){

	$("#myModal_Ind_Pre").modal('hide');
alert("Creando PDF, por favor espere unos segundos a que se almacene el PDF...");
		var num = Math.floor(Math.random() * 1000) + 1  ;
	    var val=location.href.split("index=")[1]+"INDICACIONESPREOPERATORIAS"+ num;
	    var val2="";
	    var folio = location.href.split("index=")[1];
	    var val2=10;

	    //$("#myModalFECHA5").modal('hide');

enableScroll();
	    
	
 var array = []; 
$('#pdf_lista tr').each(function () {
               $(this).find('td').each(function () {
                   //alert($(this).text());

                   if( $(this).text().indexOf("INDICACIONESPREOPERATORIAS") !== -1 ){	
                   	 //alert($(this).text());	
                   	str = $(this).text();
                   	var cadena=str.substr(str.length-3,str.length);
                   	var nuevoString='';

                   	        for(i=0; i <cadena.length; i++)
					        {
					            var ch = cadena.charAt(i);
					                if(ch > 0)
					                {
					                    nuevoString=nuevoString+ch;
					                }
					        }

                   	//alert(nuevoString);
                   	array.push(nuevoString);

                   }
               });
           });
var num=1;
var cuenta=0;
for (var i = 0; i < array.length; i++) {

	for (var j = 0; j < array.length; j++) {

		if(array[j] == num){

			num = num + 1;
			cuenta = 1;

		}
	}	
}
if(cuenta ==0){num=1;}


var index = location.href.split("index=")[1];
$.post("CRUD/nombre_pac.php",{"texto":index },function(respuesta){  

		    obj = JSON.parse(respuesta);
		        
			var val= obj.folio+'.'+fecha_paciente.substr(6,4)+'.'+fecha_paciente.substr(3,2)+'.'+fecha_paciente.substr(0,2)+'.10'+".INDICACIONESPREOPERATORIAS."+ num; 

//setTimeout(function(){

		$.post("CRUD/guardar_pdf.php",{"texto":folio, "texto2":val, "texto3":val2, "texto4":fecha_paciente },function(respuesta){  


                $.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } }); 	 


		        setTimeout(function(){ 

		        		window.location.href = 'generarPDF18.php?&folio='+folio+'&folioP='+folio_paciente+'&index='+val+'&nombre_paciente='+nombre_paciente+'&edad='+edad_paciente+'&fecha='+fecha_paciente+'&sexo='+sexo+'&hora='+hora+'&fecha2='+fecha_revision+'&procedimiento='+procedimiento_ind_pre+'&clinica='+clinica_ind_pre;
	   
		        } , 3000);  

          });

	});

}









