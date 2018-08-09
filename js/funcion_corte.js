$(document).ready(function(){



		var index = "TODOS";
		$.post("CRUD/nombre_corte.php",{"texto":index },function(respuesta){ 

      		$( "#data_consultas_corte" ).append( respuesta );

      						var total = 0;

						          $('#data_consultas_corte tr').each(function () {
						          		
      									  var suma = $(this).find("td").eq(13).html().substr(1);
      						        total = parseInt(total) + parseInt(suma);

						          });


						  	$("#totalG").val("$ "+total);

      	}); 



});



function editar_corte(index){

  $('.modal-header').css('background-color', '#FFCCD4');

  $("#myModal").modal('show'); 

	    $.post("CRUD/nombre_corte_datos.php",{"texto":index },function(respuesta){  

			//alert(respuesta);
        	obj = JSON.parse(respuesta);

            var nombre = obj.NOMBRE + " " + obj.APELLIDO_1 + " " + obj.APELLIDO_2;

        	$("#fecha_corte").val(obj.FECHA_CONSULTA);  
        	$("#FOLIO").val(obj.FOLIO);
        	$("#NOMBRE").val(nombre); 

        	if(obj.SEL_CIRUGIA != ""){ $("#motivo").val(obj.SEL_CIRUGIA); $("#inventario").val("PROCEDIMIENTO_CIRUGIA");  $("#desc_alert").val(obj.DESCRIP_CIRUGIA); }

        	if(obj.SEL_MEDICINA != ""){ $("#motivo").val(obj.SEL_MEDICINA); $("#inventario").val("MEDICINA_ESTETICA");  $("#desc_alert").val(obj.DESCRIP_MEDICINA); }

        	if(obj.SEL_SPA != ""){ $("#motivo").val(obj.SEL_SPA); $("#inventario").val("TRATAMIENTO_SPA");  $("#desc_alert").val(obj.DESCRIP_SPA); }

        	if(obj.NOMBRE_PRODUCTO != ""){ $("#motivo").val(obj.NOMBRE_PRODUCTO); $("#inventario").val("PRODUCTOS");  $("#desc_alert").val(obj.DESCRIP_PRODUCTO); }

        	$("#id").val(obj.ID_CONSULTA); 

        });



}


function guardar_corte(index){


        	var val=$("#id").val();

        	var val2 = $( "#selec_estado_tarjeta option:selected" ).text();       


	        $.post("CRUD/actualizar_corte.php",{"texto":val, "texto2":val2 },function(respuesta){  

	        	swal(respuesta, "PLASTIC & BEAUTY", "success");
              	setTimeout(function(){ location.reload(); } , 2000);  

	        });

}

function buscarCorte(index){


	var val = $("#fecha_ini").val();
	var val2 = $("#fecha_fin").val();
	var val3 = $( "#selec_producto option:selected" ).text();
	var val4 = $( "#selec_tarjeta option:selected" ).text();
	var val5 = $( "#selec_factura option:selected" ).text();
  var val6 = $( "#selec_sucursal option:selected" ).text();


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

					$.post("CRUD/nombre_corteFiltro.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6 },function(respuesta){ 
  
						$( "#data_consultas_corte" ).empty();
			      $( "#data_consultas_corte" ).append( respuesta );

				      		var total = 0;

						          $('#data_consultas_corte tr').each(function () {
						          		
									  var suma = $(this).find("td").eq(13).html().substr(1);
						              total = parseInt(total) + parseInt(suma);

						          });

						  	$("#totalG").val("$ "+total);

			      	}); 		


		}

	}


}




$('#export').click(function() {
  var titles = [];
  var data = [];

  /*
   * Get the table headers, this will be CSV headers
   * The count of headers will be CSV string separator
   */
  $('.dataTable th').each(function() {
    titles.push($(this).text());
  });

  /*
   * Get the actual data, this will contain all the data, in 1 array
   */
  $('.dataTable td').each(function() {
    data.push($(this).text());
  });
  
  /*
   * Convert our data to CSV string
   */
  var CSVString = prepCSVRow(titles, titles.length, '');
  CSVString = prepCSVRow(data, titles.length, CSVString);

  /*
   * Make CSV downloadable
   */
  var downloadLink = document.createElement("a");
  var blob = new Blob(["\ufeff", CSVString]);
  var url = URL.createObjectURL(blob);
  downloadLink.href = url;
  downloadLink.download = "data.csv";

  /*
   * Actually download CSV
   */
  document.body.appendChild(downloadLink);
  downloadLink.click();
  document.body.removeChild(downloadLink);
});

   /*
* Convert data array to CSV string
* @param arr {Array} - the actual data
* @param columnCount {Number} - the amount to split the data into columns
* @param initial {String} - initial string to append to CSV string
* return {String} - ready CSV string
*/
function prepCSVRow(arr, columnCount, initial) {
  var row = ''; // this will hold data
  var delimeter = ','; // data slice separator, in excel it's `;`, in usual CSv it's `,`
  var newLine = '\r\n'; // newline separator for CSV row

  /*
   * Convert [1,2,3,4] into [[1,2], [3,4]] while count is 2
   * @param _arr {Array} - the actual array to split
   * @param _count {Number} - the amount to split
   * return {Array} - splitted array
   */
  function splitArray(_arr, _count) {
    var splitted = [];
    var result = [];
    _arr.forEach(function(item, idx) {
      if ((idx + 1) % _count === 0) {
        splitted.push(item);
        result.push(splitted);
        splitted = [];
      } else {
        splitted.push(item);
      }
    });
    return result;
  }
  var plainArr = splitArray(arr, columnCount);
  // don't know how to explain this
  // you just have to like follow the code
  // and you understand, it's pretty simple
  // it converts `['a', 'b', 'c']` to `a,b,c` string
  plainArr.forEach(function(arrItem) {
    arrItem.forEach(function(item, idx) {
      row += item + ((idx + 1) === arrItem.length ? '' : delimeter);
    });
    row += newLine;
  });
  return initial + row;
}

