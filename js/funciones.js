

        function enviar()
        {
            // Esta es la variable que vamos a pasar
            var val=$("#Email").val();
            var val2=$("#Password").val();
     
            // Enviamos la variable de javascript a comprobar.php
            /*$.post("comprobar.php",{"texto":val},function(respuesta){
                alert(respuesta);
            });*/

            $.post("comprobar.php",{"texto":val, "texto2":val2},function(respuesta){
                //alert(respuesta);
                if(respuesta == "DATOS VALIDOS") { 
                
                	swal(respuesta, "En 5 segundos sera redireccionado. PLASTIC & BEAUTY", "success");
					setTimeout(function(){location.href="sistemaInformacion.php"} , 5000);  

                }
                else{ swal(respuesta, "Intentelo una vez mas nuevo", "error");}
            });


        }
