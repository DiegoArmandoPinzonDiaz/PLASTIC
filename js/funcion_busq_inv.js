

$(document).ready(function(){


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



        var consulta;
        //hacemos focus al campo de búsqueda
        $("#query").focus();
                                                                                                     
        //comprobamos si se pulsa una tecla
        $("#query").keyup(function(e){
     
            if( $("#method").val() != null ){                          
                  //obtenemos el texto introducido en el campo de búsqueda
                  consulta = $("#query").val();
                  id = $("#method").val();
                  
                  //hace la búsqueda                                                                                
                  $.post("busq_inv.php",{"texto":id, "texto2":consulta},function(respuesta){
                        //alert(respuesta);                        
                        
                        //swal(respuesta, "PLASTIC & BEAUTY", "success");
                        $( "#data_inv" ).empty();
                        $( "#data_inv" ).append( respuesta );

                    });

            }                                                                         
        });

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

                                                              
}); 


$( "#method" ).change(function() {

/*  
  if($("#method").val() == 1){
    var titulo = "<tr><th>ID</th><th>NOMBRE</th><th>PRECIO: (COSTO TOTAL A MESES SIN INTERES)</th><th>PRECIO: (EFECTIVO)</th><th>TIEMPO (MINUTOS)</th><th>DURACION (D&Iacute;AS)</th><th>RIESGOS</th><th>T&Eacute;CNICA QUIR&Uacute;RGICA</th><th>INDICACIONES</th><th>IMAGEN</th><th>MATERIAL</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 2){
    var titulo = "<tr><th>ID</th><th>NOMBRE</th><th>PRECIO: (COSTO TOTAL A MESES SIN INTERES)</th><th>PRECIO: (EFECTIVO)</th><th>TIEMPO (MINUTOS)</th><th>DURACION (D&Iacute;AS)</th><th>RIESGOS</th><th>T&Eacute;CNICA QUIR&Uacute;RGICA</th><th>INDICACIONES</th><th>MATERIAL</th><th>IMAGEN</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 3){
    var titulo = "<tr><th>ID</th><th>NOMBRE</th><th>PRECIO: (COSTO TOTAL A MESES SIN INTERES)</th><th>PRECIO: (EFECTIVO)</th><th>TIEMPO (MINUTOS)</th><th>DURACION (D&Iacute;AS)</th><th>RIESGOS</th><th>T&Eacute;CNICA QUIR&Uacute;RGICA</th><th>INDICACIONES</th><th>MATERIAL</th><th>IMAGEN</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 4){
    var titulo = "<tr><th>ID</th><th>NOMBRE</th><th>PRECIO: (COSTO TOTAL A MESES SIN INTERES)</th><th>MARCA</th><th>DURACION (D&Iacute;AS)</th><th>IMAGEN</th><th>STOCK ACTUAL</th><th>STOCK M&Iacute;NIMO</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 5){
    var titulo = "<tr><th>ID</th><th>NOMBRE</th><th>MARCA</th><th>PROVEEDOR</th><th>STOCK ACTUAL</th><th>STOCK M&Iacute;NIMO</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }
*/

  if($("#method").val() == 1){
    var titulo = "<tr><th>NOMBRE</th><th>PRECIO: (COSTO TOTAL A MESES SIN INTERES)</th><th>PRECIO: (EFECTIVO)</th><th>TIEMPO (MINUTOS)</th><th>DURACION (D&Iacute;AS)</th><th>RIESGOS</th><th>T&Eacute;CNICA QUIR&Uacute;RGICA</th><th>INDICACIONES</th><th>IMAGEN</th><th>MATERIAL</th><th>COSTO SATELITE</th><th>COSTO METROPOLITANO</th><th>COSTO INTERLOMAS</th><th>INCLUYE</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 2){
    var titulo = "<tr><th>NOMBRE</th><th>PRECIO: (COSTO TOTAL A MESES SIN INTERES)</th><th>PRECIO: (EFECTIVO)</th><th>TIEMPO (MINUTOS)</th><th>DURACION (D&Iacute;AS)</th><th>RIESGOS</th><th>T&Eacute;CNICA QUIR&Uacute;RGICA</th><th>INDICACIONES</th><th>MATERIAL</th><th>IMAGEN</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 3){
    var titulo = "<tr><th>NOMBRE</th><th>PRECIO: (COSTO TOTAL A MESES SIN INTERES)</th><th>PRECIO: (EFECTIVO)</th><th>TIEMPO (MINUTOS)</th><th>DURACION (D&Iacute;AS)</th><th>RIESGOS</th><th>T&Eacute;CNICA QUIR&Uacute;RGICA</th><th>INDICACIONES</th><th>MATERIAL</th><th>IMAGEN</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 4){
    var titulo = "<tr><th>NOMBRE</th><th>PRECIO: (COSTO TOTAL A MESES SIN INTERES)</th><th>MARCA</th><th>DURACION (D&Iacute;AS)</th><th>IMAGEN</th><th>STOCK ACTUAL</th><th>STOCK M&Iacute;NIMO</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 5){
    var titulo = "<tr><th>NOMBRE</th><th>MARCA</th><th>PROVEEDOR</th><th>STOCK ACTUAL</th><th>STOCK M&Iacute;NIMO</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 6){
    var titulo = "<tr><th>NOMBRE</th><th>C&Eacute;DULA</th><th>TEL&Eacute;FONO</th><th>FIRMA</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }else if($("#method").val() == 7){
    var titulo = "<tr><th>NOMBRE G&Eacute;NERICO</th><th>NOMBRE COMERCIAL</th><th>POSOLOG&Iacute;A</th><th>PRESENTACI&Oacute;N</th><th>V&Iacute;A</th><th>DOSIS</th><th>HORARIO</th><th>TIEMPO</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }
  else if($("#method").val() == 8){
    var titulo = "<tr><th>NOMBRE</th><th>DIRECCI&Oacute;N</th><th>REFERENCIA</th><th>ACCIONES</th></tr>";
    $( "#data_inv" ).empty();
  }
    

    $( "#data_title" ).empty();
    $( "#data_title" ).append( titulo);

});





function agregar_mat(){

  $("#nuevo_material").modal('show');

}


function agregar_material(){

  var val = $("#cant_producto").val();
  var val2 = $("#sel_material").val();

  var respuesta = "<tr><td>"+val+"</td><td>"+val2+"</td><td><button type='button' class='btn btn_ac2 btnDelete' ><i class='glyphicon glyphicon-trash'></i></button></td></tr>";
  
  $("#data_inv2").append( respuesta );

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

    $("#data_inv3").empty();

     var table = $('#data_inv3');
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

function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31 
    && (charCode < 48 || charCode > 57))
    return false;
    return true;
  } 



function borrar_pro(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_pro.php",{"texto":index, },function(respuesta){                      
          
              swal(respuesta, "PLASTIC & BEAUTY", "success");

            });


            swal("Elemento eliminado", {
              icon: "success",
            });

            $( "#data_inv" ).empty();

      } else {
        swal("OK!");
      }
    });
    
}


function borrar_clinica(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_clinica.php",{"texto":index, },function(respuesta){                      
          
              swal(respuesta, "PLASTIC & BEAUTY", "success");

            });


            swal("Elemento eliminado", {
              icon: "success",
            });

            $( "#data_inv" ).empty();

      } else {
        swal("OK!");
      }
    });
    
}



function borrar_spa(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_spa.php",{"texto":index, },function(respuesta){                      
          
              swal(respuesta, "PLASTIC & BEAUTY", "success");

            });


            swal("Elemento eliminado", {
              icon: "success",
            });

            $( "#data_inv" ).empty();

      } else {
        swal("OK!");
      }
    });
    
}


function borrar_med(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_med.php",{"texto":index, },function(respuesta){                      
          
              swal(respuesta, "PLASTIC & BEAUTY", "success");

            });


            swal("Elemento eliminado", {
              icon: "success",
            });

            $( "#data_inv" ).empty();

      } else {
        swal("OK!");
      }
    });
    
}


function borrar_prod(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_prod.php",{"texto":index, },function(respuesta){                      
          
              swal(respuesta, "PLASTIC & BEAUTY", "success");

            });


            swal("Elemento eliminado", {
              icon: "success",
            });

            $( "#data_inv" ).empty();

      } else {
        swal("OK!");
      }
    });
    
}


function borrar_mat(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_mat.php",{"texto":index, },function(respuesta){                      
          
              swal(respuesta, "PLASTIC & BEAUTY", "success");

            });


            swal("Elemento eliminado", {
              icon: "success",
            });

            $( "#data_inv" ).empty();

      } else {
        swal("OK!");
      }
    });
    
}


function editar_mat(E0, E1, E2) {

      $("#nuevo_mat").modal("show");

      $.post("CRUD/nombre_mat.php",{"texto":E0 },function(respuesta){  

        obj = JSON.parse(respuesta);

        $(id_mat).val(E0);
        $(nombre_mat).val(obj.material);
        $(marca_mat).val(obj.marca);
        $(duracion_mat).val(obj.proveedor);
        $(stockActual_mat).val(E1); 
        $(stockMinimo_mat).val(E2); 


      });   
    
}


function actualizar_mat()
    {

        // Esta es la variable que vamos a pasar
        var val5=$("#id_mat").val();
        var val=$("#nombre_mat").val();
        var val2=$("#marca_mat").val();
        var val3=$("#duracion_mat").val();
        var val4=$("#stockActual_mat").val();
        var val6=$("#stockMinimo_mat").val();

        //alert(val6);
 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == "" || val6 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    //else if( Number(val6) >= Number(val4)  ){  swal("ERROR", "El valor de Stock Minimo debe ser menor al Stock Actual", "error");  }
    else{
        $.post("CRUD/actualizar_mat.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 
            
              $("#nuevo_mat").modal("hide");
              $("#id_mat").val("");
              $("#nombre_mat").val("");
              $("#marca_mat").val("");
              $("#duracion_mat").val("");
              $("#stockActual_mat").val("");
              $("#stockMinimo_mat").val("");
              $( "#data_inv" ).empty();

              swal(respuesta, "PLASTIC & BEAUTY", "success");             
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
        });
      }
    } 




function editar_pro(E0, E1, E2, E3) {

      $("#nuevo_pro").modal("show");

      var nombre="";

      $.post("CRUD/nombre_pro.php",{"texto":E0 },function(respuesta){  

        obj = JSON.parse(respuesta);

        $(id_pro).val(E0);
        $(nombre_pro).val(obj.nombre);
        $(valor_pro).val(E1);
        $(marca_pro).val(E2);
        $(duracion_pro).val(E3);

        $(valor_pro_efectivo).val(obj.valor_efectivo);
        $(riesgos_pro).val(obj.riesgos);
        $(tecnica_pro).val(obj.tecnica);
        $(indicaciones_pro).val(obj.indicaciones); 

        $(valor_pro_opc1).val(obj.costo_opc1);
        $(valor_pro_opc2).val(obj.costo_opc2);
        $(valor_pro_opc3).val(obj.costo_opc3);
        $(incluye_pro).val(obj.incluye_pro); 

        nombre = obj.nombre;

        var ruta = "./imgProductos/procedimientos/"+obj.imagen;  

        $("#imgSalida-pro").attr("src",ruta);     


              $.post("CRUD/nombre_material.php",{"texto":nombre },function(respuesta){  

                    availableTags2 = JSON.parse(respuesta); 

                    $("#data_inv3").empty();

                     var table = $('#data_inv3');
                     var row, cell;
                     for(var i=0; i<availableTags2.length; i++){

                      
                        if((i % 2) === 0){ row = $( '<tr />' ); }
                         
                         table.append( row );
                         cell = $('<td>'+availableTags2[i]+'</td>')
                         row.append( cell );

                     }


                    $("#data_inv2").empty();

                     var table = $('#data_inv2');
                     var row, cell;
                     for(var i=0; i<availableTags2.length; i++){

                      
                        if((i % 2) === 0){ row = $( '<tr />' ); }
                         
                         table.append( row );
                         cell = $('<td>'+availableTags2[i]+'</td>')
                         row.append( cell );

                         if((i % 2) !== 0 ){ cell = $( '<td><button type="button" class="btn btn_ac2 btnDelete" ><i class="glyphicon glyphicon-trash"></i></button></td>' ); }
                         row.append( cell );


                     } 


              });        

      });    
    
}



function actualizar_pro()
    {

        // Esta es la variable que vamos a pasar
        var val5=$("#id_pro").val();
        var val=$("#nombre_pro").val();
        var val2=$("#valor_pro").val();
        var val3=$("#marca_pro").val();
        var val4=$("#duracion_pro").val();
        /*if(document.formulario.file_input.value==""){
            var val6 = "YA EXISTE";
        }else{  var val6 = document.getElementById('file-input-pro').files[0].name; }*/

        if($("#file-input-pro").val()==""){
            var val6 = "YA EXISTE";
        }else{  var val6 = document.getElementById('file-input-pro').files[0].name; }


        var myTableArray = [];

            $("#data_inv3 tr").each(function() {
                var arrayOfThisRow = [];
                var tableData = $(this).find('td');
                if (tableData.length > 0) {
                    tableData.each(function() { arrayOfThisRow.push($(this).text()); });
                    myTableArray.push(arrayOfThisRow);
                }
            });


            var val7=$("#valor_pro_efectivo").val();
            var val8=$("#riesgos_pro").val();
            var val9=$("#tecnica_pro").val();
            var val10=$("#indicaciones_pro").val();

            var val11=$("#valor_pro_opc1").val();
            var val12=$("#valor_pro_opc2").val();
            var val13=$("#valor_pro_opc3").val();
            var val14=$("#incluye_pro").val();

        //alert(val6);
 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    else{
        $.post("CRUD/actualizar_pro.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9, "texto10":val10, "texto11":val11, "texto12":val12, "texto13":val13, "texto14":val14},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 

                if(val6 != "YA EXISTE"){

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
                }



                    var val = $("#nombre_pro").val();

                    $.post("CRUD/borrar_material.php",{"texto":val},function(respuesta){

                          swal(respuesta, "PLASTIC & BEAUTY", "success");  

                    });



                    for (var i = 0; i < myTableArray.length; i++) {

                            var val = $("#nombre_pro").val();
                            var val2 = myTableArray[i][0]; 
                            var val3 = myTableArray[i][1]; 
                            
                            $.post("CRUD/guardar_material.php",{"texto":val, "texto2":val2, "texto3":val3},function(respuesta){

                                  swal(respuesta, "PLASTIC & BEAUTY", "success");  

                            });
                    
                    } 



            
              $("#nuevo_pro").modal("hide");
              $("#id_pro").val("");
              $("#nombre_pro").val("");
              $("#nombre_pro").val("");
              $("#valor_pro").val("");
              $("#marca_pro").val("");
              $("#duracion_pro").val("");
              $( "#data_inv" ).empty();
              $('#imgSalida-pro').attr("src","");
              document.getElementById("file-input-pro").value = "";
              $("#valor_pro_efectivo").val("");
              $("#riesgos_pro").val("");
              $("#tecnica_pro").val("");
              $("#indicaciones_pro").val("");
                      $("#valor_pro_opc1").val("");
                      $("#valor_pro_opc2").val("");
                      $("#valor_pro_opc3").val("");
                      $("#incluye_pro").val("");
              swal(respuesta, "PLASTIC & BEAUTY", "success");             
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
        });
      }
    } 


function editar_spa(E0, E1, E2, E3) {

      $("#nuevo_tra").modal("show");

      $.post("CRUD/nombre_spa.php",{"texto":E0, },function(respuesta){  

        obj = JSON.parse(respuesta);

        $(id_spa).val(E0);
        $(nombre_spa).val(obj.nombre);
        $(valor_spa).val(E1);
        $(marca_spa).val(E2);
        $(duracion_spa).val(E3); 

        $(valor_spa_efectivo).val(obj.valor_efectivo);
        $(riesgos_spa).val(obj.riesgos);
        $(tecnica_spa).val(obj.tecnica);
        $(indicaciones_spa).val(obj.indicaciones);   

        var ruta = "./imgProductos/spa/"+obj.imagen;  

        $("#imgSalida-spa").attr("src",ruta);  


        var nombre = obj.nombre;


        $.post("CRUD/nombre_material.php",{"texto":nombre },function(respuesta){  

                    availableTags2 = JSON.parse(respuesta); 

                    $("#data_inv_spa").empty();

                     var table = $('#data_inv_spa');
                     var row, cell;
                     for(var i=0; i<availableTags2.length; i++){

                      
                        if((i % 2) === 0){ row = $( '<tr />' ); }
                         
                         table.append( row );
                         cell = $('<td>'+availableTags2[i]+'</td>')
                         row.append( cell );

                     }


                    $("#data_inv2").empty();

                     var table = $('#data_inv2');
                     var row, cell;
                     for(var i=0; i<availableTags2.length; i++){

                      
                        if((i % 2) === 0){ row = $( '<tr />' ); }
                         
                         table.append( row );
                         cell = $('<td>'+availableTags2[i]+'</td>')
                         row.append( cell );

                         if((i % 2) !== 0 ){ cell = $( '<td><button type="button" class="btn btn_ac2 btnDelete" ><i class="glyphicon glyphicon-trash"></i></button></td>' ); }
                         row.append( cell );


                     } 


              });                 

      });   
    
}



function actualizar_spa()
    {
        // Esta es la variable que vamos a pasar
        var val5=$("#id_spa").val();
        var val=$("#nombre_spa").val();
        var val2=$("#valor_spa").val();
        var val3=$("#marca_spa").val();
        var val4=$("#duracion_spa").val();
        /*if(document.formulariospa.file_input.value==""){
            var val6 = "YA EXISTE";
        }else{  var val6 = document.getElementById('file-input-spa').files[0].name; }*/


        if($("#file-input-spa").val()==""){
            var val6 = "YA EXISTE";
        }else{  var val6 = document.getElementById('file-input-spa').files[0].name; }


        var myTableArray = [];

            $("#data_inv_spa tr").each(function() {
                var arrayOfThisRow = [];
                var tableData = $(this).find('td');
                if (tableData.length > 0) {
                    tableData.each(function() { arrayOfThisRow.push($(this).text()); });
                    myTableArray.push(arrayOfThisRow);
                }
            });

            var val7=$("#valor_spa_efectivo").val();
            var val8=$("#riesgos_spa").val();
            var val9=$("#tecnica_spa").val();
            var val10=$("#indicaciones_spa").val();

        //alert(val6);
 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    else{
        $.post("CRUD/actualizar_spa.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9, "texto10":val10},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 

                if(val6 != "YA EXISTE"){

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
                }


                    var val = $("#nombre_spa").val();

                    $.post("CRUD/borrar_material.php",{"texto":val},function(respuesta){

                          swal(respuesta, "PLASTIC & BEAUTY", "success");  

                    });



                    for (var i = 0; i < myTableArray.length; i++) {

                            var val = $("#nombre_spa").val();
                            var val2 = myTableArray[i][0]; 
                            var val3 = myTableArray[i][1]; 
                            
                            $.post("CRUD/guardar_material.php",{"texto":val, "texto2":val2, "texto3":val3},function(respuesta){

                                  swal(respuesta, "PLASTIC & BEAUTY", "success");  

                            });
                    
                    } 



            
              $("#nuevo_tra").modal("hide");
              $("#id_spa").val("");
              $("#nombre_spa").val("");
              $("#nombre_spa").val("");
              $("#valor_spa").val("");
              $("#marca_spa").val("");
              $("#duracion_spa").val("");
              $( "#data_inv" ).empty();
              $('#imgSalida-spa').attr("src","");
              document.getElementById("file-input-spa").value = "";
              $("#valor_spa_efectivo").val("");
              $("#riesgos_spa").val("");
              $("#tecnica_spa").val("");
              $("#indicaciones_spa").val("");
              swal(respuesta, "PLASTIC & BEAUTY", "success");             
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
        });
      }
    }


function editar_med(E0, E1, E2, E3) {

      $("#nuevo_med").modal("show");

      $.post("CRUD/nombre_med.php",{"texto":E0, },function(respuesta){  

        obj = JSON.parse(respuesta);

        $(id_med).val(E0);
        $(nombre_med).val(obj.nombre);
        $(valor_med).val(E1);
        $(marca_med).val(E2);
        $(duracion_med).val(E3);  

        $(valor_med_efectivo).val(obj.valor_efectivo);
        $(riesgos_med).val(obj.riesgos);
        $(tecnica_med).val(obj.tecnica);
        $(indicaciones_med).val(obj.indicaciones); 

        var ruta = "./imgProductos/medicina/"+obj.imagen;  

        $("#imgSalida-med").attr("src",ruta);  



          var nombre = obj.nombre;


        $.post("CRUD/nombre_material.php",{"texto":nombre },function(respuesta){  

                    availableTags2 = JSON.parse(respuesta); 

                    $("#data_inv_med").empty();

                     var table = $('#data_inv_med');
                     var row, cell;
                     for(var i=0; i<availableTags2.length; i++){

                      
                        if((i % 2) === 0){ row = $( '<tr />' ); }
                         
                         table.append( row );
                         cell = $('<td>'+availableTags2[i]+'</td>')
                         row.append( cell );

                     }


                    $("#data_inv2").empty();

                     var table = $('#data_inv2');
                     var row, cell;
                     for(var i=0; i<availableTags2.length; i++){

                      
                        if((i % 2) === 0){ row = $( '<tr />' ); }
                         
                         table.append( row );
                         cell = $('<td>'+availableTags2[i]+'</td>')
                         row.append( cell );

                         if((i % 2) !== 0 ){ cell = $( '<td><button type="button" class="btn btn_ac2 btnDelete" ><i class="glyphicon glyphicon-trash"></i></button></td>' ); }
                         row.append( cell );


                     } 


              });       



      });   
    
}


function actualizar_med()
    {
        // Esta es la variable que vamos a pasar
        var val5=$("#id_med").val();
        var val=$("#nombre_med").val();
        var val2=$("#valor_med").val();
        var val3=$("#marca_med").val();
        var val4=$("#duracion_med").val();

        if($("#file-input-med").val()==""){
            var val6 = "YA EXISTE";
        }else{  var val6 = document.getElementById('file-input-med').files[0].name; }

        //alert(val6);

        var myTableArray = [];

            $("#data_inv_spa tr").each(function() {
                var arrayOfThisRow = [];
                var tableData = $(this).find('td');
                if (tableData.length > 0) {
                    tableData.each(function() { arrayOfThisRow.push($(this).text()); });
                    myTableArray.push(arrayOfThisRow);
                }
            });

            var val7=$("#valor_med_efectivo").val();
            var val8=$("#riesgos_med").val();
            var val9=$("#tecnica_med").val();
            var val10=$("#indicaciones_med").val();
 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    else{
        $.post("CRUD/actualizar_med.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9, "texto10":val10},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 

                if(val6 != "YA EXISTE"){

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
                }


                 var val = $("#nombre_med").val();

                    $.post("CRUD/borrar_material.php",{"texto":val},function(respuesta){

                          swal(respuesta, "PLASTIC & BEAUTY", "success");  

                    });



                    for (var i = 0; i < myTableArray.length; i++) {

                            var val = $("#nombre_med").val();
                            var val2 = myTableArray[i][0]; 
                            var val3 = myTableArray[i][1]; 
                            
                            $.post("CRUD/guardar_material.php",{"texto":val, "texto2":val2, "texto3":val3},function(respuesta){

                                  swal(respuesta, "PLASTIC & BEAUTY", "success");  

                            });
                    
                    }

                    
            
              $("#nuevo_med").modal("hide");
              $("#id_med").val("");
              $("#nombre_med").val("");
              $("#nombre_med").val("");
              $("#valor_med").val("");
              $("#marca_med").val("");
              $("#duracion_med").val("");
              $( "#data_inv" ).empty();
              $('#imgSalida-med').attr("src","");
              document.getElementById("file-input-med").value = "";
              $("#valor_spa_efectivo").val("");
              $("#riesgos_med").val("");
              $("#tecnica_med").val("");
              $("#indicaciones_med").val("");
              swal(respuesta, "PLASTIC & BEAUTY", "success");             
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
        });
      }
    }


function firmaMedico(){

  disableScroll();
  $("#firma_medico").modal('show');
  $("#nuevo_medico").modal('hide');


}     

function editar_medico(E0) {

      $("#nuevo_medico").modal("show");

      $.post("CRUD/nombre_medico.php",{"texto":E0 },function(respuesta){  

          obj = JSON.parse(respuesta);

          $(id_medico).val(obj.ID_MEDICO);
          $(nombre_medico).val(obj.NOMBRE_MEDICO);
          $(cedula_medico).val(obj.CEDULA_MEDICO);
          $(telefono_medico).val(obj.TELEFONO_MEDICO);


          var ruta = "./firmas/"+obj.FIRMA_MEDICO;  

          $("#imgSalida_medico").attr("src",ruta);               

      });   
    
}


function actualizar_medico()
{
        // Esta es la variable que vamos a pasar
        var val5=$("#id_medico").val();
        var val=$("#nombre_medico").val();
        var val2=$("#cedula_medico").val();
        var val3=$("#telefono_medico").val();
        var val4=$("#nombre_medico").val()+'_firmaMedico.png';


        //alert(val6);
 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == "" ){ swal("ERROR", "Existen campos vacios", "error");}
    //else if( Number(val8) >= Number(val7)  ){  swal("ERROR", "El valor de Stock Minimo debe ser menor al Stock Actual", "error");  }
    else{

            $.post("CRUD/actualizar_medico.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5 },function(respuesta){
                //alert(respuesta);
                if(respuesta == "REGISTRO GUARDADO") { 
                
                  $("#nuevo_medico").modal("hide");
                  $("#id_medico").val("");
                  $("#nombre_medico").val("");
                  $("#cedula_medico").val("");
                  $("#telefono_medico").val("");                 

                  swal(respuesta, "PLASTIC & BEAUTY", "success");     
                  setTimeout(function(){ location.reload(); } , 2000);        
                  
                }
                else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
            });
        }
} 


function borrar_medico(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_medico.php",{"texto":index, },function(respuesta){                      
          
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
    
}




function actualizar_medicamento()
{
        // Esta es la variable que vamos a pasar
        var val=$("#id_medicamento").val();
        var val2=$("#nombre_generico").val();
        var val3=$("#nombre_comercial").val();
        var val4=$("#posologia").val();
        var val5=$("#presentacion").val();
        var val6=$("#via").val();
        var val7=$("#dosis").val();
        var val8=$("#horario").val();
        var val9=$("#tiempo").val();


        //alert(val6);
 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == "" || val5 == "" || val6 == "" || val7 == "" || val8 == "" || val9 == "" ){ swal("ERROR", "Existen campos vacios", "error");}
    else{

            $.post("CRUD/actualizar_medicamento.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9 },function(respuesta){
                //alert(respuesta);
                if(respuesta == "REGISTRO GUARDADO") { 
                
                  $("#nuevo_medicamento").modal("hide");

                  $("#id_medicamento").val("");
                  $("#nombre_generico").val("");
                  $("#nombre_comercial").val("");
                  $("#posologia").val("");  
                  $("#presentacion").val("");
                  $("#via").val("");
                  $("#dosis").val("");
                  $("#horario").val("");  
                  $("#tiempo").val("");                

                  swal(respuesta, "PLASTIC & BEAUTY", "success");     
                  setTimeout(function(){ location.reload(); } , 2000);        
                  
                }
                else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
            });
        }
} 




function editar_medicamento(E0) {

      $("#nuevo_medicamento").modal("show");

      $.post("CRUD/nombre_medicamento.php",{"texto":E0 },function(respuesta){  

          obj = JSON.parse(respuesta);

          $(id_medicamento).val(obj.ID_MEDICAMENTO);
          $(nombre_generico).val(obj.NOMBRE_GEN);
          $(nombre_comercial).val(obj.NOMBRE_COM);  
          $(posologia).val(obj.POSOLOGIA);
          $(presentacion).val(obj.PRESENTACION);  
          $(via).val(obj.VIA);
          $(dosis).val(obj.DOSIS);  
          $(horario).val(obj.HORARIO);
          $(tiempo).val(obj.TIEMPO);            

      });   
    
}




function borrar_medicamento(index) {

    swal({
      title: "Seguro de eliminar el elemento seleccionado?",
      text: "Una vez eliminado el elemento, no se puede recuperar!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {

            $.post("CRUD/eliminar_medicamento.php",{"texto":index, },function(respuesta){                      
          
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
    
}



function editar_prod(E0, E1, E2, E3, E4) {

      $("#nuevo_prod").modal("show");

      $.post("CRUD/nombre_prod.php",{"texto":E0, },function(respuesta){  

        obj = JSON.parse(respuesta);

        $(id_prod).val(E0);
        $(nombre_prod).val(obj.nombre);
        $(valor_prod).val(E1);
        $(marca_prod).val(obj.marca);
        $(duracion_prod).val(E2); 

        $(stockActual_prod).val(E3); 
        $(stockMinimo_prod).val(E4); 

        var ruta = "./imgProductos/productos/"+obj.imagen;  

        $("#imgSalida-prod").attr("src",ruta);                     

      });   
    
}



function actualizar_prod()
    {
        // Esta es la variable que vamos a pasar
        var val5=$("#id_prod").val();
        var val=$("#nombre_prod").val();
        var val2=$("#valor_prod").val();
        var val3=$("#marca_prod").val();
        var val4=$("#duracion_prod").val();
        if($("#file-input-prod").val()==""){
            var val6 = "YA EXISTE";
        }else{  var val6 = document.getElementById('file-input-prod').files[0].name; }


        var val7=$("#stockActual_prod").val();
        var val8=$("#stockMinimo_prod").val();

        //alert(val6);
 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == "" || val7 == "" || val8 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    //else if( Number(val8) >= Number(val7)  ){  swal("ERROR", "El valor de Stock Minimo debe ser menor al Stock Actual", "error");  }
    else{
        $.post("CRUD/actualizar_prod.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6 , "texto7":val7, "texto8":val8},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 

                if(val6 != "YA EXISTE"){

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
                }
            
              $("#nuevo_prod").modal("hide");
              $("#id_prod").val("");
              $("#nombre_prod").val("");
              $("#nombre_prod").val("");
              $("#valor_prod").val("");
              $("#marca_prod").val("");
              $("#duracion_prod").val("");
              $( "#data_inv" ).empty();
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




function editar_clinica(E0) {

      $("#nuevo_clinica").modal("show");

      $.post("CRUD/nombre_clinica.php",{"texto":E0 },function(respuesta){  

        obj = JSON.parse(respuesta);

        $(id_clinica).val(E0);
        $(nombre_clinica).val(obj.NOMBRE_CLI);
        $(direccion_clinica).val(obj.DIRECCION_CLI);
        $(referencia_clinica).val(obj.REFERENCIA_CLI);


      });   
    
}


function actualizar_clinica()
    {

        // Esta es la variable que vamos a pasar
        var val4=$("#id_clinica").val();
        var val=$("#nombre_clinica").val();
        var val2=$("#direccion_clinica").val();
        var val3=$("#referencia_clinica").val();

        //alert(val6);
 
    //Validamos que esten los campos llenos
    if(val == "" || val2 == "" || val3 == "" || val4 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    //else if( Number(val6) >= Number(val4)  ){  swal("ERROR", "El valor de Stock Minimo debe ser menor al Stock Actual", "error");  }
    else{
        $.post("CRUD/actualizar_clinica.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4 },function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 
            
              $("#nuevo_clinica").modal("hide");
              $("#id_clinica").val("");
              $("#nombre_clinica").val("");
              $("#direccion_clinica").val("");
              $("#referencia_clinica").val("");
              $( "#data_inv" ).empty();

              swal(respuesta, "PLASTIC & BEAUTY", "success");             
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
        });
      }
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






