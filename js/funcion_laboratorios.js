$(document).ready(function(){


	var titulo = "<th>FECHA</th><th>GLUCOSA</th><th>UREA</th><th>BUN</th><th>CREATININA</th><th>&Aacute;CIDO &Uacute;RICO</th><th>COLESTEROL</th><th>TRIGLIC&Eacute;RIDOS</th><th>ALB&Uacute;MINA</th><th>GLOBULINA</th><th>BT</th><th>BD</th><th>BI</th><th>TGO</th><th>TGP</th><th>FA</th><th>GGT</th><th>NA</th><th>K</th><th>CL</th><th>ACCIONES</th>";
	$( "#titulo_laboratorios" ).empty();
    $( "#titulo_laboratorios" ).append( titulo);



    var index = location.href.split("index=")[1];
    var val2 = 1;

    $.post("CRUD/nombre_LAB2.php",{"texto":index, "texto2":val2 },function(respuesta){  

		        $( "#data_laboratorios" ).empty();
                $( "#data_laboratorios" ).append( respuesta );

                $("#titulo_laboratorios").css("fontSize", "10px");	
                $("#data_laboratorios").css("fontSize", "11px");	


		});
      						


});

function laboratorio(){


	var index = location.href.split("index=")[1];


	if($("#estudios_lab").val() == 1){

		$(".sanguinea_grupo").css("display","block");
		$(".hematica_grupo").css("display","none");
		$(".tp_grupo").css("display","none");
		$(".ego_grupo").css("display","none");
		$(".tiroideo_grupo").css("display","none");

		var titulo = "<th>FECHA</th><th>GLUCOSA</th><th>UREA</th><th>BUN</th><th>CREATININA</th><th>&Aacute;CIDO &Uacute;RICO</th><th>COLESTEROL</th><th>TRIGLIC&Eacute;RIDOS</th><th>ALB&Uacute;MINA</th><th>GLOBULINA</th><th>BT</th><th>BD</th><th>BI</th><th>TGO</th><th>TGP</th><th>FA</th><th>GGT</th><th>NA</th><th>K</th><th>CL</th><th>ACCIONES</th>";


		    $.post("CRUD/nombre_LAB2.php",{"texto":index, "texto2":1 },function(respuesta){  

				        $( "#data_laboratorios" ).empty();
		                $( "#data_laboratorios" ).append( respuesta );

		                $("#titulo_laboratorios").css("fontSize", "10px");	
		                $("#data_laboratorios").css("fontSize", "11px");	


				});


	}
	else if($("#estudios_lab").val() == 2){

		$(".sanguinea_grupo").css("display","none");
		$(".hematica_grupo").css("display","block");
		$(".tp_grupo").css("display","none");
		$(".ego_grupo").css("display","none");
		$(".tiroideo_grupo").css("display","none");

		var titulo = "<th>FECHA</th><th>LEU</th><th>ERI</th><th>HG</th><th>HTO</th><th>PLQ</th><th>NEUTR&Oacute;FILOS</th><th>LINFOCITOS</th><th>MONOCITOS</th><th>ACCIONES</th>";


		$.post("CRUD/nombre_LAB2.php",{"texto":index, "texto2":2 },function(respuesta){  

				        $( "#data_laboratorios" ).empty();
		                $( "#data_laboratorios" ).append( respuesta );

		                $("#titulo_laboratorios").css("fontSize", "12px");	
		                $("#data_laboratorios").css("fontSize", "13px");	


				});


	}
	else if($("#estudios_lab").val() == 3){

		$(".sanguinea_grupo").css("display","none");
		$(".hematica_grupo").css("display","none");
		$(".tp_grupo").css("display","block");
		$(".ego_grupo").css("display","none");
		$(".tiroideo_grupo").css("display","none");

		var titulo = "<th>FECHA</th><th>% ACTIVIDAD</th><th>INR</th><th>TTP</th><th>ACCIONES</th>";

		$.post("CRUD/nombre_LAB2.php",{"texto":index, "texto2":3 },function(respuesta){  

				        $( "#data_laboratorios" ).empty();
		                $( "#data_laboratorios" ).append( respuesta );

		                $("#titulo_laboratorios").css("fontSize", "14px");	
		                $("#data_laboratorios").css("fontSize", "14px");	


				});


	}
	else if($("#estudios_lab").val() == 4){

		$(".sanguinea_grupo").css("display","none");
		$(".hematica_grupo").css("display","none");
		$(".tp_grupo").css("display","none");
		$(".ego_grupo").css("display","block");
		$(".tiroideo_grupo").css("display","none");

		var titulo = "<th>FECHA</th><th>COLOR</th><th>DENSIDAD</th><th>PH</th><th>LEU</th><th>GLUC</th><th>CETONAS</th><th>HG</th><th>ACCIONES</th>";

		$.post("CRUD/nombre_LAB2.php",{"texto":index, "texto2":4 },function(respuesta){  

				        $( "#data_laboratorios" ).empty();
		                $( "#data_laboratorios" ).append( respuesta );

		                $("#titulo_laboratorios").css("fontSize", "12px");	
		                $("#data_laboratorios").css("fontSize", "13px");	


				});


	}
	else if($("#estudios_lab").val() == 5){

		$(".sanguinea_grupo").css("display","none");
		$(".hematica_grupo").css("display","none");
		$(".tp_grupo").css("display","none");
		$(".ego_grupo").css("display","none");
		$(".tiroideo_grupo").css("display","block");

		var titulo = "<th>FECHA</th><th>T3</th><th>T4</th><th>T4 LIBRE</th><th>TSH</th><th>T7</th><th>IODO</th><th>ACCIONES</th>";

		$.post("CRUD/nombre_LAB2.php",{"texto":index, "texto2":5 },function(respuesta){  

				        $( "#data_laboratorios" ).empty();
		                $( "#data_laboratorios" ).append( respuesta );

		                $("#titulo_laboratorios").css("fontSize", "12px");	
		                $("#data_laboratorios").css("fontSize", "13px");	


				});


	}


    $( "#titulo_laboratorios" ).empty();
    $( "#titulo_laboratorios" ).append( titulo);


}



function guardarLAB(){

	var val=location.href.split("index=")[1];

	var val2=$("#fecha_con_lab").val();


	var anio=String(val2).substring(6,10); //2009
	var dia= String(val2).substring(0,2); //10
	var mes= String(val2).substring(3,5); //11

	var fecha=anio +'-'+ mes +'-'+ dia
	val2 = fecha;


	var val3=$("#estudios_lab").val();


	var val4=$("#sanguinea1").val();
	var val5=$("#sanguinea2").val();
	var val6=$("#sanguinea3").val();
	var val7=$("#sanguinea4").val();
	var val8=$("#sanguinea5").val();
	var val9=$("#sanguinea6").val();
	var val10=$("#sanguinea7").val();
	var val11=$("#sanguinea8").val();
	var val12=$("#sanguinea9").val();
	var val13=$("#sanguinea10").val();
	var val14=$("#sanguinea11").val();
	var val15=$("#sanguinea12").val();
	var val16=$("#sanguinea13").val();
	var val17=$("#sanguinea14").val();
	var val18=$("#sanguinea15").val();
	var val19=$("#sanguinea16").val();
	var val20=$("#sanguinea17").val();
	var val21=$("#sanguinea18").val();
	var val22=$("#sanguinea19").val();


	var val23=$("#hematica1").val();
	var val24=$("#hematica2").val();
	var val25=$("#hematica3").val();
	var val26=$("#hematica4").val();
	var val27=$("#hematica5").val();
	var val28=$("#hematica6").val();
	var val29=$("#hematica7").val();
	var val30=$("#hematica8").val();


	var val31=$("#tp1").val();
	var val32=$("#tp2").val();
	var val33=$("#tp3").val();


	var val34=$("#ego1").val();
	var val35=$("#ego2").val();
	var val36=$("#ego3").val();
	var val37=$("#ego4").val();
	var val38=$("#ego5").val();
	var val39=$("#ego6").val();
	var val40=$("#ego7").val();


	var val41=$("#tiroideo1").val();
	var val42=$("#tiroideo2").val();
	var val43=$("#tiroideo3").val();
	var val44=$("#tiroideo4").val();
	var val45=$("#tiroideo5").val();
	var val46=$("#tiroideo6").val();

	var val47=$("#id_laboratorio").val();


	if(val2 == '--'){ swal("ERROR", "Existen campos vacios", "error"); }
		else{
			$.post("CRUD/actualizar_LAB.php",{ "texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9, "texto10":val10, "texto11":val11, "texto12":val12, "texto13":val13, "texto14":val14, "texto15":val15, "texto16":val16, "texto17":val17, "texto18":val18, "texto19":val19, "texto20":val20, "texto21":val21, "texto22":val22, "texto23":val23, "texto24":val24, "texto25":val25, "texto26":val26, "texto27":val27, "texto28":val28, "texto29":val29, "texto30":val30, "texto31":val31, "texto32":val32, "texto33":val33, "texto34":val34, "texto35":val35, "texto36":val36, "texto37":val37, "texto38":val38, "texto39":val39, "texto40":val40, "texto41":val41, "texto42":val42, "texto43":val43, "texto44":val44, "texto45":val45, "texto46":val46, "texto47":val47 },function(respuesta){
			            //alert(respuesta);
		            if(respuesta == "REGISTRO GUARDADO") { 
		           
		              swal(respuesta, "PLASTIC & BEAUTY", "success"); 

		              setTimeout(function(){ 
		              	var index=location.href.split("index=")[1];
		              	window.location.href="pacientesGAB.php?index="+index;
		              	 } , 2000);                

		            }
		            else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
		        });
		}

}



function borrar_lab(index){

  swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_laboratorio.php",{"texto":index, },function(respuesta){                      
          
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


function editar_lab(index){

 	
 		$.post("CRUD/nombre_LAB.php",{"texto":index },function(respuesta){  

		        obj = JSON.parse(respuesta);  

		        $("#id_laboratorio").val(obj.ID_LAB);
		        $("#fecha_con_lab").val(obj.FECHA_LAB);

		        if( $("#estudios_lab").val()==1){

		        	$("#sanguinea1").val(obj.SANGUINEA1);
		        	$("#sanguinea2").val(obj.SANGUINEA2);
		        	$("#sanguinea3").val(obj.SANGUINEA3);
		        	$("#sanguinea4").val(obj.SANGUINEA4);
		        	$("#sanguinea5").val(obj.SANGUINEA5);
		        	$("#sanguinea6").val(obj.SANGUINEA6);
		        	$("#sanguinea7").val(obj.SANGUINEA7);
		        	$("#sanguinea8").val(obj.SANGUINEA8);
		        	$("#sanguinea9").val(obj.SANGUINEA9);
		        	$("#sanguinea10").val(obj.SANGUINEA10);
		        	$("#sanguinea11").val(obj.SANGUINEA11);
		        	$("#sanguinea12").val(obj.SANGUINEA12);
		        	$("#sanguinea13").val(obj.SANGUINEA13);
		        	$("#sanguinea14").val(obj.SANGUINEA14);
		        	$("#sanguinea15").val(obj.SANGUINEA15);
		        	$("#sanguinea16").val(obj.SANGUINEA16);
		        	$("#sanguinea17").val(obj.SANGUINEA17);
		        	$("#sanguinea18").val(obj.SANGUINEA18);
		        	$("#sanguinea19").val(obj.SANGUINEA19);
		        }
		        else if( $("#estudios_lab").val()==2){

		        	$("#hematica1").val(obj.HEMATICA1);
		        	$("#hematica2").val(obj.HEMATICA2);
		        	$("#hematica3").val(obj.HEMATICA3);
		        	$("#hematica4").val(obj.HEMATICA4);
		        	$("#hematica5").val(obj.HEMATICA5);
		        	$("#hematica6").val(obj.HEMATICA6);
		        	$("#hematica7").val(obj.HEMATICA7);
		        	$("#hematica8").val(obj.HEMATICA8);
		        }
		        else if( $("#estudios_lab").val()==3){

		        	$("#tp1").val(obj.TP1);
		        	$("#tp2").val(obj.TP2);
		        	$("#tp3").val(obj.TP3);
		        }
		        else if( $("#estudios_lab").val()==4){

		        	$("#ego1").val(obj.EGO1);
		        	$("#ego2").val(obj.EGO2);
		        	$("#ego3").val(obj.EGO3);
		        	$("#ego4").val(obj.EGO4);
		        	$("#ego5").val(obj.EGO5);
		        	$("#ego6").val(obj.EGO6);
		        	$("#ego7").val(obj.EGO7);
		        }
		        else if( $("#estudios_lab").val()==5){

		        	$("#tiroideo1").val(obj.TIROIDEO1);
		        	$("#tiroideo2").val(obj.TIROIDEO2);
		        	$("#tiroideo3").val(obj.TIROIDEO3);
		        	$("#tiroideo4").val(obj.TIROIDEO4);
		        	$("#tiroideo5").val(obj.TIROIDEO5);
		        	$("#tiroideo6").val(obj.TIROIDEO6);
		        }


		});



}