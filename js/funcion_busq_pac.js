$(document).ready(function(){

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
                  $.post("busq_pac.php",{"texto":id, "texto2":consulta},function(respuesta){
                        //alert(respuesta);                        
                        
                        //swal(respuesta, "PLASTIC & BEAUTY", "success");
                        $( "#data_inv" ).empty();
                        $( "#data_inv" ).append( respuesta );

                    });

            }                                                                         
        });

                                                              
}); 


