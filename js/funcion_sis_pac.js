$(document).ready(function() { 


	$('#mas1').change(function() {
        if(this.checked) {
           $('#mas2').prop("checked", false);
           $("#mascotas").prop("disabled", false); 
        }               
    });

    $('#mas2').change(function() {
        if(this.checked) {
           $('#mas1').prop("checked", false);
           $("#mascotas").prop("disabled", true); 
           $("#mascotas").val("");
        }               
    });


    
    $('#act1').change(function() {
        if(this.checked) {
           $('#act2').prop("checked", false);
           $("#actividad1").prop("disabled", false); 
           $("#actividad2").prop("disabled", false); 
           $("#actividad3").prop("disabled", false); 
           $('#actividad3').selectpicker('refresh');
        }               
    });

    $('#act2').change(function() {
        if(this.checked) {
           $('#act1').prop("checked", false);
           $("#actividad1").prop("disabled", true); 
           $("#actividad1").val("");
           $("#actividad2").prop("disabled", true); 
           $("#actividad2").val("");
           $("#actividad3").prop("disabled", true); 
           $("#actividad3").val("");
           $('#actividad3').selectpicker('refresh');

        }               
    });



    $('#con1').change(function() {
        if(this.checked) {
           $('#con2').prop("checked", false);
           $("#alcohol1").prop("disabled", false); 
           $("#alcohol2").prop("disabled", false); 
           $("#alcohol3").prop("disabled", false); 
           $('#alcohol3').selectpicker('refresh');
        }               
    });

    $('#con2').change(function() {
        if(this.checked) {
           $('#con1').prop("checked", false);
           $("#alcohol1").prop("disabled", true); 
           $("#alcohol1").val("");
           $("#alcohol2").prop("disabled", true); 
           $("#alcohol2").val("");
           $("#alcohol3").prop("disabled", true); 
           $("#alcohol3").val("");
           $('#alcohol3').selectpicker('refresh');
        }               
    });



    $('#tab1').change(function() {
        if(this.checked) {
           $('#tab2').prop("checked", false);
           $("#tabaquismo1").prop("disabled", false); 
           $("#tabaquismo2").prop("disabled", false); 
           $("#tabaquismo3").prop("disabled", false); 
           $('#tabaquismo3').selectpicker('refresh');
        }               
    });

    $('#tab2').change(function() {
        if(this.checked) {
           $('#tab1').prop("checked", false);
           $("#tabaquismo1").prop("disabled", true); 
           $("#tabaquismo1").val("");
           $("#tabaquismo2").prop("disabled", true); 
           $("#tabaquismo2").val("");
           $("#tabaquismo3").prop("disabled", true); 
           $("#tabaquismo3").val("");
           $('#tabaquismo3').selectpicker('refresh');
        }               
    });



    $('#uso1').change(function() {
        if(this.checked) {
           $('#uso2').prop("checked", false);
           $("#drogas1").prop("disabled", false); 
           $("#drogas2").prop("disabled", false); 
           $("#drogas3").prop("disabled", false); 
           $('#drogas3').selectpicker('refresh');
           $("#drogas4").prop("disabled", false); 
           $("#drogas6").prop("disabled", false); 
           $("#drogas5").prop("disabled", false); 
           $('#drogas5').selectpicker('refresh');
           $("#drogas7").prop("disabled", false); 
           $("#drogas9").prop("disabled", false); 
           $("#drogas8").prop("disabled", false); 
           $('#drogas8').selectpicker('refresh');
        }               
    });

    $('#uso2').change(function() {
        if(this.checked) {
           $('#uso1').prop("checked", false);
           $("#drogas1").prop("disabled", true); 
           $("#drogas1").val("");
           $("#drogas2").prop("disabled", true); 
           $("#drogas2").val("");
           $("#drogas3").prop("disabled", true); 
           $("#drogas3").val("");
           $('#drogas3').selectpicker('refresh');

           $("#drogas4").prop("disabled", true); 
           $("#drogas4").val("");
           $("#drogas6").prop("disabled", true); 
           $("#drogas6").val("");
           $("#drogas5").prop("disabled", true); 
           $("#drogas5").val("");
           $('#drogas5').selectpicker('refresh');

           $("#drogas7").prop("disabled", true); 
           $("#drogas7").val("");
           $("#drogas9").prop("disabled", true); 
           $("#drogas9").val("");
           $("#drogas8").prop("disabled", true); 
           $("#drogas8").val("");
           $('#drogas8').selectpicker('refresh');
        }               
    });



    $('#tat1').change(function() {
        if(this.checked) {
           $('#tat2').prop("checked", false);
           $("#tatuajes1").prop("disabled", false); 
        }               
    });

    $('#tat2').change(function() {
        if(this.checked) {
           $('#tat1').prop("checked", false);
           $("#tatuajes1").prop("disabled", true); 
           $("#tatuajes1").val("");
        }              
    });




    $('#ing1').change(function() {
        if(this.checked) {
           $('#ing2').prop("checked", false);
           $("#medicamento1").prop("disabled", false); 
        }               
    });

    $('#ing2').change(function() {
        if(this.checked) {
           $('#ing1').prop("checked", false);
           $("#medicamento1").prop("disabled", true); 
           $("#medicamento1").val("");
        }               
    });


    $('#asp1').change(function() {
        if(this.checked) {
           $('#asp2').prop("checked", false);
           $("#aspirina1").prop("disabled", false); 
           $('#aspirina1').selectpicker('refresh');
        }               
    });

    $('#asp2').change(function() {
        if(this.checked) {
           $('#asp1').prop("checked", false);
           $("#aspirina1").prop("disabled", true); 
           $("#aspirina1").val("");
           $('#aspirina1').selectpicker('refresh');
        }               
    });


    $('#cir1').change(function() {
        if(this.checked) {
           $('#cir2').prop("checked", false);
           $("#cirugias1").prop("disabled", false); 
           $("#cirugias2").prop("disabled", false); 
           $("#cirugias3").prop("disabled", false);
           $("#cirugias4").prop("disabled", false);
           $("#cirugias5").prop("disabled", false); 
           $("#datepicker3").prop("disabled", false);
           $("#datepicker5").prop("disabled", false);
           $("#datepicker6").prop("disabled", false);
           $("#datepicker12").prop("disabled", false);
           $("#datepicker13").prop("disabled", false);
        }               
    });

    $('#cir2').change(function() {
        if(this.checked) {
           $('#cir1').prop("checked", false);
           $("#cirugias1").prop("disabled", true); 
           $("#cirugias1").val("");
           $("#datepicker3").prop("disabled", true); 
           $("#datepicker3").val("");
           $("#cirugias2").prop("disabled", true); 
           $("#cirugias2").val("");
           $("#datepicker5").prop("disabled", true); 
           $("#datepicker5").val("");
           $("#cirugias3").prop("disabled", true); 
           $("#cirugias3").val("");
           $("#datepicker6").prop("disabled", true); 
           $("#datepicker6").val("");
           $("#cirugias4").prop("disabled", true); 
           $("#cirugias4").val("");
           $("#datepicker12").prop("disabled", true); 
           $("#datepicker12").val("");
           $("#cirugias5").prop("disabled", true); 
           $("#cirugias5").val("");
           $("#datepicker13").prop("disabled", true); 
           $("#datepicker13").val("");

        }               
    });



    $('#ale_1').change(function() {
        if(this.checked) {
           $('#ale_2').prop("checked", false);
           $("#alergias_1").prop("disabled", false); 
           $("#alergias_2").prop("disabled", false); 
           $("#alergias_3").prop("disabled", false); 
           $("#alergias_4").prop("disabled", false);
           $("#alergias_5").prop("disabled", false);
           $("#alergias_6").prop("disabled", false);
        }               
    });

    $('#ale_2').change(function() {
        if(this.checked) {
           $('#ale_1').prop("checked", false);
           $("#alergias_1").prop("disabled", true); 
           $("#alergias_1").val("");
           $("#alergias_2").prop("disabled", true); 
           $("#alergias_2").val("");
           $("#alergias_3").prop("disabled", true); 
           $("#alergias_3").val("");
           $("#alergias_4").prop("disabled", true); 
           $("#alergias_4").val("");
           $("#alergias_5").prop("disabled", true); 
           $("#alergias_5").val("");
           $("#alergias_6").prop("disabled", true); 
           $("#alergias_6").val("");

        }               
    });




    $('#hos1').change(function() {
        if(this.checked) {
           $('#hos2').prop("checked", false);
           $("#hospitalizaciones1").prop("disabled", false); 
           $("#datepicker4").prop("disabled", false);
           $("#hospitalizaciones2").prop("disabled", false); 
           $("#datepicker7").prop("disabled", false);
           $("#hospitalizaciones3").prop("disabled", false); 
           $("#datepicker8").prop("disabled", false);
        }               
    });

    $('#hos2').change(function() {
        if(this.checked) {
           $('#hos1').prop("checked", false);
           $("#hospitalizaciones1").prop("disabled", true); 
           $("#hospitalizaciones1").val("");
           $("#datepicker4").prop("disabled", true); 
           $("#datepicker4").val("");
           $("#hospitalizaciones2").prop("disabled", true); 
           $("#hospitalizaciones2").val("");
           $("#datepicker7").prop("disabled", true); 
           $("#datepicker7").val("");
           $("#hospitalizaciones3").prop("disabled", true); 
           $("#hospitalizaciones3").val("");
           $("#datepicker8").prop("disabled", true); 
           $("#datepicker8").val("");
        }               
    });


    $('#trans1').change(function() {
        if(this.checked) {
           $('#trans2').prop("checked", false);
           $("#transfusiones1").prop("disabled", false); 
           $("#datepicker9").prop("disabled", false);
           $("#transfusiones2").prop("disabled", false); 
           $("#datepicker10").prop("disabled", false);
           $("#transfusiones3").prop("disabled", false); 
           $("#datepicker11").prop("disabled", false);
        }               
    });

    $('#trans2').change(function() {
        if(this.checked) {
           $('#trans1').prop("checked", false);
           $("#transfusiones1").prop("disabled", true); 
           $("#transfusiones1").val("");
           $("#datepicker9").prop("disabled", true); 
           $("#datepicker9").val("");
           $("#transfusiones2").prop("disabled", true); 
           $("#transfusiones2").val("");
           $("#datepicker10").prop("disabled", true); 
           $("#datepicker10").val("");
           $("#transfusiones3").prop("disabled", true); 
           $("#transfusiones3").val("");
           $("#datepicker11").prop("disabled", true); 
           $("#datepicker11").val("");
        }               
    });




    $('#dia1').change(function() {
        if(this.checked) {
           $('#dia2').prop("checked", false);
           $("#diabetes1").prop("disabled", false); 
           $("#diabetes2").prop("disabled", false); 
           $("#diabetes3").prop("disabled", false); 
           $("#diabetes4").prop("disabled", false); 
           $("#diabetes5").prop("disabled", false); 
           $('#diabetes5').selectpicker('refresh');

           $("#diabetes6").prop("disabled", false); 
           $("#diabetes7").prop("disabled", false); 
           $("#diabetes8").prop("disabled", false); 
           $('#diabetes8').selectpicker('refresh');

           $("#diabetes9").prop("disabled", false); 
           $("#diabetes10").prop("disabled", false); 
           $("#diabetes11").prop("disabled", false); 
           $('#diabetes11').selectpicker('refresh');
        }               
    });

    $('#dia2').change(function() {
        if(this.checked) {
           $('#dia1').prop("checked", false);
           $("#diabetes1").prop("disabled", true); 
           $("#diabetes1").val("");
           $("#diabetes2").prop("disabled", true); 
           $("#diabetes2").val("");
           $("#diabetes3").prop("disabled", true); 
           $("#diabetes3").val("");
           $("#diabetes4").prop("disabled", true); 
           $("#diabetes4").val("");
           $("#diabetes5").prop("disabled", true); 
           $("#diabetes5").val("");
           $('#diabetes5').selectpicker('refresh');

           $("#diabetes6").prop("disabled", true); 
           $("#diabetes6").val("");
           $("#diabetes7").prop("disabled", true); 
           $("#diabetes7").val("");
           $("#diabetes8").prop("disabled", true); 
           $("#diabetes8").val("");
           $('#diabetes8').selectpicker('refresh');

           $("#diabetes9").prop("disabled", true); 
           $("#diabetes9").val("");
           $("#diabetes10").prop("disabled", true); 
           $("#diabetes10").val("");
           $("#diabetes11").prop("disabled", true); 
           $("#diabetes11").val("");
           $('#diabetes11').selectpicker('refresh');
        }               
    });


    $('#hip1').change(function() {
        if(this.checked) {
           $('#hip2').prop("checked", false);
           $("#hipertension1").prop("disabled", false); 
           $("#hipertension2").prop("disabled", false); 
           $("#hipertension3").prop("disabled", false); 
           $("#hipertension4").prop("disabled", false); 
           $("#hipertension5").prop("disabled", false); 
           $('#hipertension5').selectpicker('refresh');

           $("#hipertension6").prop("disabled", false); 
           $("#hipertension7").prop("disabled", false); 
           $("#hipertension8").prop("disabled", false); 
           $('#hipertension8').selectpicker('refresh');

           $("#hipertension9").prop("disabled", false); 
           $("#hipertension10").prop("disabled", false); 
           $("#hipertension11").prop("disabled", false); 
           $('#hipertension11').selectpicker('refresh');
        }               
    });

    $('#hip2').change(function() {
        if(this.checked) {
           $('#hip1').prop("checked", false);
           $("#hipertension1").prop("disabled", true); 
           $("#hipertension1").val("");
           $("#hipertension2").prop("disabled", true); 
           $("#hipertension2").val("");
           $("#hipertension3").prop("disabled", true); 
           $("#hipertension3").val("");
           $("#hipertension4").prop("disabled", true); 
           $("#hipertension4").val("");
           $("#hipertension5").prop("disabled", true); 
           $("#hipertension5").val("");
           $('#hipertension5').selectpicker('refresh');

           $("#hipertension6").prop("disabled", true); 
           $("#hipertension6").val("");
           $("#hipertension7").prop("disabled", true); 
           $("#hipertension7").val("");
           $("#hipertension8").prop("disabled", true); 
           $("#hipertension8").val("");
           $('#hipertension8').selectpicker('refresh');

           $("#hipertension9").prop("disabled", true); 
           $("#hipertension9").val("");
           $("#hipertension10").prop("disabled", true); 
           $("#hipertension10").val("");
           $("#hipertension11").prop("disabled", true); 
           $("#hipertension11").val("");
           $('#hipertension11').selectpicker('refresh');
        }               
    });



    $('#pro1').change(function() {
        if(this.checked) {
           $('#pro2').prop("checked", false);
           $("#problemas1").prop("disabled", false); 
           $("#problemas2").prop("disabled", false); 
           $("#problemas3").prop("disabled", false); 
           $("#problemas4").prop("disabled", false); 
           $("#problemas5").prop("disabled", false); 
           $('#problemas5').selectpicker('refresh');
        }               
    });

    $('#pro2').change(function() {
        if(this.checked) {
           $('#pro1').prop("checked", false);
           $("#problemas1").prop("disabled", true); 
           $("#problemas1").val("");
           $("#problemas2").prop("disabled", true); 
           $("#problemas2").val("");
           $("#problemas3").prop("disabled", true); 
           $("#problemas3").val("");
           $("#problemas4").prop("disabled", true); 
           $("#problemas4").val("");
           $("#problemas5").prop("disabled", true); 
           $("#problemas5").val("");
           $('#problemas5').selectpicker('refresh');
        }               
    });


    $('#der1').change(function() {
        if(this.checked) {
           $('#der2').prop("checked", false);
           $("#dermatologicas1").prop("disabled", false); 
           $("#dermatologicas2").prop("disabled", false); 
           $("#dermatologicas3").prop("disabled", false); 
           $("#dermatologicas4").prop("disabled", false); 
           $("#dermatologicas5").prop("disabled", false); 
           $('#dermatologicas5').selectpicker('refresh');
        }               
    });

    $('#der2').change(function() {
        if(this.checked) {
           $('#der1').prop("checked", false);
           $("#dermatologicas1").prop("disabled", true); 
           $("#dermatologicas1").val("");
           $("#dermatologicas2").prop("disabled", true); 
           $("#dermatologicas2").val("");
           $("#dermatologicas3").prop("disabled", true); 
           $("#dermatologicas3").val("");
           $("#dermatologicas4").prop("disabled", true); 
           $("#dermatologicas4").val("");
           $("#dermatologicas5").prop("disabled", true); 
           $("#dermatologicas5").val("");
           $('#dermatologicas5').selectpicker('refresh');
        }               
    });


    $('#end1').change(function() {
        if(this.checked) {
           $('#end2').prop("checked", false);
           $("#endocrinologicas1").prop("disabled", false); 
           $("#endocrinologicas2").prop("disabled", false); 
           $("#endocrinologicas3").prop("disabled", false); 
           $("#endocrinologicas4").prop("disabled", false); 
           $("#endocrinologicas5").prop("disabled", false); 
           $('#endocrinologicas5').selectpicker('refresh');
        }               
    });

    $('#end2').change(function() {
        if(this.checked) {
           $('#end1').prop("checked", false);
           $("#endocrinologicas1").prop("disabled", true); 
           $("#endocrinologicas1").val("");
           $("#endocrinologicas2").prop("disabled", true); 
           $("#endocrinologicas2").val("");
           $("#endocrinologicas3").prop("disabled", true); 
           $("#endocrinologicas3").val("");
           $("#endocrinologicas4").prop("disabled", true); 
           $("#endocrinologicas4").val("");
           $("#endocrinologicas5").prop("disabled", true); 
           $("#endocrinologicas5").val("");
           $('#endocrinologicas5').selectpicker('refresh');
        }               
    });


    $('#tir1').change(function() {
        if(this.checked) {
           $('#tir2').prop("checked", false);
           $("#tiroides1").prop("disabled", false); 
        }               
    });

    $('#tir2').change(function() {
        if(this.checked) {
           $('#tir1').prop("checked", false);
           $("#tiroides1").prop("disabled", true); 
           $("#tiroides1").val("");
        }               
    });


    $('#ale1').change(function() {
        if(this.checked) {
           $('#ale2').prop("checked", false);
           $("#alergias1").prop("disabled", false); 
           $("#alergias2").prop("disabled", false); 
           $("#alergias3").prop("disabled", false); 
           $("#alergias4").prop("disabled", false); 
           $("#alergias5").prop("disabled", false); 
           $('#alergias5').selectpicker('refresh');
        }               
    });

    $('#ale2').change(function() {
        if(this.checked) {
           $('#ale1').prop("checked", false);
           $("#alergias1").prop("disabled", true); 
           $("#alergias1").val("");
           $("#alergias2").prop("disabled", true); 
           $("#alergias2").val("");
           $("#alergias3").prop("disabled", true); 
           $("#alergias3").val("");
           $("#alergias4").prop("disabled", true); 
           $("#alergias4").val("");
           $("#alergias5").prop("disabled", true); 
           $("#alergias5").val("");
           $('#alergias5').selectpicker('refresh');
        }               
    });


    $('#enf1').change(function() {
        if(this.checked) {
           $('#enf2').prop("checked", false);
           $("#enfermedades1").prop("disabled", false); 
           $("#enfermedades2").prop("disabled", false); 
           $("#enfermedades3").prop("disabled", false); 
           $("#enfermedades4").prop("disabled", false); 
           $("#enfermedades5").prop("disabled", false); 
           $('#enfermedades5').selectpicker('refresh');
        }               
    });

    $('#enf2').change(function() {
        if(this.checked) {
           $('#enf1').prop("checked", false);
           $("#enfermedades1").prop("disabled", true); 
           $("#enfermedades1").val("");
           $("#enfermedades2").prop("disabled", true); 
           $("#enfermedades2").val("");
           $("#enfermedades3").prop("disabled", true); 
           $("#enfermedades3").val("");
           $("#enfermedades4").prop("disabled", true); 
           $("#enfermedades4").val("");
           $("#enfermedades5").prop("disabled", true); 
           $("#enfermedades5").val("");
           $('#enfermedades5').selectpicker('refresh');
        }               
    });


    $('#epi1').change(function() {
        if(this.checked) {
           $('#epi2').prop("checked", false);
           $("#epilepsia1").prop("disabled", false); 
           $("#epilepsia2").prop("disabled", false); 
           $("#epilepsia3").prop("disabled", false); 
           $("#epilepsia4").prop("disabled", false); 
           $("#epilepsia5").prop("disabled", false); 
           $('#epilepsia5').selectpicker('refresh');
        }               
    });

    $('#epi2').change(function() {
        if(this.checked) {
           $('#epi1').prop("checked", false);
           $("#epilepsia1").prop("disabled", true); 
           $("#epilepsia1").val("");
           $("#epilepsia2").prop("disabled", true); 
           $("#epilepsia2").val("");
           $("#epilepsia3").prop("disabled", true); 
           $("#epilepsia3").val("");
           $("#epilepsia4").prop("disabled", true); 
           $("#epilepsia4").val("");
           $("#epilepsia5").prop("disabled", true); 
           $("#epilepsia5").val("");
           $('#epilepsia5').selectpicker('refresh');
        }               
    });




    $('#hepa1').change(function() {
        if(this.checked) {
           $('#hepa2').prop("checked", false);
           $("#hepatitis1").prop("disabled", false); 
           $("#hepatitis2").prop("disabled", false); 
           $("#hepatitis3").prop("disabled", false); 
           $("#hepatitis4").prop("disabled", false); 
           $("#hepatitis5").prop("disabled", false); 
           $('#hepatitis5').selectpicker('refresh');
        }               
    });

    $('#hepa2').change(function() {
        if(this.checked) {
           $('#hepa1').prop("checked", false);
           $("#hepatitis1").prop("disabled", true); 
           $("#hepatitis1").val("");
           $("#hepatitis2").prop("disabled", true); 
           $("#hepatitis2").val("");
           $("#hepatitis3").prop("disabled", true); 
           $("#hepatitis3").val("");
           $("#hepatitis4").prop("disabled", true); 
           $("#hepatitis4").val("");
           $("#hepatitis5").prop("disabled", true); 
           $("#hepatitis5").val("");
           $('#hepatitis5').selectpicker('refresh');
        }               
    });


    $('#nefro1').change(function() {
        if(this.checked) {
           $('#nefro2').prop("checked", false);
           $("#nefropatias1").prop("disabled", false); 
           $("#nefropatias2").prop("disabled", false); 
           $("#nefropatias3").prop("disabled", false); 
           $("#nefropatias4").prop("disabled", false); 
           $("#nefropatias5").prop("disabled", false); 
           $('#nefropatias5').selectpicker('refresh');
        }               
    });

    $('#nefro2').change(function() {
        if(this.checked) {
           $('#nefro1').prop("checked", false);
           $("#nefropatias1").prop("disabled", true); 
           $("#nefropatias1").val("");
           $("#nefropatias2").prop("disabled", true); 
           $("#nefropatias2").val("");
           $("#nefropatias3").prop("disabled", true); 
           $("#nefropatias3").val("");
           $("#nefropatias4").prop("disabled", true); 
           $("#nefropatias4").val("");
           $("#nefropatias5").prop("disabled", true); 
           $("#nefropatias5").val("");
           $('#nefropatias5').selectpicker('refresh');
        }               
    });


    $('#endocri1').change(function() {
        if(this.checked) {
           $('#endocri2').prop("checked", false);
           $("#endocrinologicas_1").prop("disabled", false); 
           $("#endocrinologicas_2").prop("disabled", false); 
           $("#endocrinologicas_3").prop("disabled", false); 
           $("#endocrinologicas_4").prop("disabled", false); 
           $("#endocrinologicas_5").prop("disabled", false); 
           $('#endocrinologicas_5').selectpicker('refresh');
        }               
    });

    $('#endocri2').change(function() {
        if(this.checked) {
           $('#endocri1').prop("checked", false);
           $("#endocrinologicas_1").prop("disabled", true); 
           $("#endocrinologicas_1").val("");
           $("#endocrinologicas_2").prop("disabled", true); 
           $("#endocrinologicas_2").val("");
           $("#endocrinologicas_3").prop("disabled", true); 
           $("#endocrinologicas_3").val("");
           $("#endocrinologicas_4").prop("disabled", true); 
           $("#endocrinologicas_4").val("");
           $("#endocrinologicas_5").prop("disabled", true); 
           $("#endocrinologicas_5").val("");
           $('#endocrinologicas_5').selectpicker('refresh');
        }               
    });


    $('#psi1').change(function() {
        if(this.checked) {
           $('#psi2').prop("checked", false);
           $("#psiquiatricas1").prop("disabled", false); 
           $("#psiquiatricas2").prop("disabled", false); 
           $("#psiquiatricas3").prop("disabled", false); 
           $("#psiquiatricas4").prop("disabled", false); 
           $("#psiquiatricas5").prop("disabled", false); 
           $('#psiquiatricas5').selectpicker('refresh');
        }               
    });

    $('#psi2').change(function() {
        if(this.checked) {
           $('#psi1').prop("checked", false);
           $("#psiquiatricas1").prop("disabled", true); 
           $("#psiquiatricas1").val("");
           $("#psiquiatricas2").prop("disabled", true); 
           $("#psiquiatricas2").val("");
           $("#psiquiatricas3").prop("disabled", true); 
           $("#psiquiatricas3").val("");
           $("#psiquiatricas4").prop("disabled", true); 
           $("#psiquiatricas4").val("");
           $("#psiquiatricas5").prop("disabled", true); 
           $("#psiquiatricas5").val("");
           $('#psiquiatricas5').selectpicker('refresh');
        }               
    });


    $('#can1').change(function() {
        if(this.checked) {
           $('#can2').prop("checked", false);
           $("#cancer_1").prop("disabled", false); 
           $("#cancer_2").prop("disabled", false); 
           $("#cancer_3").prop("disabled", false); 
           $("#cancer_4").prop("disabled", false); 
           $("#cancer_5").prop("disabled", false); 
           $('#cancer_5').selectpicker('refresh');
        }               
    });

    $('#can2').change(function() {
        if(this.checked) {
           $('#can1').prop("checked", false);
           $("#cancer_1").prop("disabled", true); 
           $("#cancer_1").val("");
           $("#cancer_2").prop("disabled", true); 
           $("#cancer_2").val("");
           $("#cancer_3").prop("disabled", true); 
           $("#cancer_3").val("");
           $("#cancer_4").prop("disabled", true); 
           $("#cancer_4").val("");
           $("#cancer_5").prop("disabled", true); 
           $("#cancer_5").val("");
           $('#cancer_5').selectpicker('refresh');
        }               
    });








    $('#abo1').change(function() {
        if(this.checked) {
           $('#abo2').prop("checked", false);
           $("#abortos").prop("disabled", false); 
        }               
    });

    $('#abo2').change(function() {
        if(this.checked) {
           $('#abo1').prop("checked", false);
           $("#abortos").prop("disabled", true); 
           $("#abortos").val("");
        }               
    });



    $('#hor1').change(function() {
        if(this.checked) {
           $('#hor2').prop("checked", false);
           $("#hormonas").prop("disabled", false); 
        }               
    });

    $('#hor2').change(function() {
        if(this.checked) {
           $('#hor1').prop("checked", false);
           $("#hormonas").prop("disabled", true); 
           $("#hormonas").val("");
        }               
    });


    $('#fam1').change(function() {
        if(this.checked) {
           $('#fam2').prop("checked", false);
           $("#planificacion").prop("disabled", false); 
        }               
    });

    $('#fam2').change(function() {
        if(this.checked) {
           $('#fam1').prop("checked", false);
           $("#planificacion").prop("disabled", true); 
           $("#planificacion").val("");
        }               
    });




    $('#tp1').change(function() {
        if(this.checked) {
           $('#tp2').prop("checked", false);
           $('#tp3').prop("checked", false);
           $('#tp4').prop("checked", false);
        }               
    });

    $('#tp2').change(function() {
        if(this.checked) {
           $('#tp1').prop("checked", false);
           $('#tp3').prop("checked", false);
           $('#tp4').prop("checked", false);
        }               
    });

    $('#tp3').change(function() {
        if(this.checked) {
           $('#tp2').prop("checked", false);
           $('#tp1').prop("checked", false);
           $('#tp4').prop("checked", false);
        }               
    });

    $('#tp4').change(function() {
        if(this.checked) {
           $('#tp1').prop("checked", false);
           $('#tp3').prop("checked", false);
           $('#tp2').prop("checked", false);
        }               
    });








    $('#tr1').change(function() {
        if(this.checked) {
           $('#tr2').prop("checked", false);
           $('#tr3').prop("checked", false);
           $('#tr4').prop("checked", false);
           $('#tr5').prop("checked", false);
           $('#tr6').prop("checked", false);
           $('#tr7').prop("checked", false);
        }               
    });

    $('#tr2').change(function() {
        if(this.checked) {
           $('#tr1').prop("checked", false);
           $('#tr3').prop("checked", false);
           $('#tr4').prop("checked", false);
           $('#tr5').prop("checked", false);
           $('#tr6').prop("checked", false);
           $('#tr7').prop("checked", false);
        }               
    });

    $('#tr3').change(function() {
        if(this.checked) {
           $('#tr1').prop("checked", false);
           $('#tr2').prop("checked", false);
           $('#tr4').prop("checked", false);
           $('#tr5').prop("checked", false);
           $('#tr6').prop("checked", false);
           $('#tr7').prop("checked", false);
        }               
    });

    $('#tr4').change(function() {
        if(this.checked) {
           $('#tr1').prop("checked", false);
           $('#tr3').prop("checked", false);
           $('#tr2').prop("checked", false);
           $('#tr5').prop("checked", false);
           $('#tr6').prop("checked", false);
           $('#tr7').prop("checked", false);
        }               
    });

    $('#tr5').change(function() {
        if(this.checked) {
           $('#tr1').prop("checked", false);
           $('#tr3').prop("checked", false);
           $('#tr2').prop("checked", false);
           $('#tr4').prop("checked", false);
           $('#tr6').prop("checked", false);
           $('#tr7').prop("checked", false);
        }               
    });

    $('#tr6').change(function() {
        if(this.checked) {
           $('#tr1').prop("checked", false);
           $('#tr3').prop("checked", false);
           $('#tr2').prop("checked", false);
           $('#tr5').prop("checked", false);
           $('#tr4').prop("checked", false);
           $('#tr7').prop("checked", false);
        }               
    });

    $('#tr7').change(function() {
        if(this.checked) {
           $('#tr1').prop("checked", false);
           $('#tr3').prop("checked", false);
           $('#tr2').prop("checked", false);
           $('#tr5').prop("checked", false);
           $('#tr6').prop("checked", false);
           $('#tr4').prop("checked", false);
        }               
    });





    $('#gt1').change(function() {
        if(this.checked) {
           $('#gt2').prop("checked", false);
           $('#gt3').prop("checked", false);
           $('#gt4').prop("checked", false);
        }               
    });

    $('#gt2').change(function() {
        if(this.checked) {
           $('#gt1').prop("checked", false);
           $('#gt3').prop("checked", false);
           $('#gt4').prop("checked", false);
        }               
    });

    $('#gt3').change(function() {
        if(this.checked) {
           $('#gt2').prop("checked", false);
           $('#gt1').prop("checked", false);
           $('#gt4').prop("checked", false);
        }               
    });

    $('#gt4').change(function() {
        if(this.checked) {
           $('#gt1').prop("checked", false);
           $('#gt2').prop("checked", false);
           $('#gt3').prop("checked", false);
        }               
    });





    $('#fi1').change(function() {
        if(this.checked) {
           $('#fi2').prop("checked", false);
           $('#fi3').prop("checked", false);
           $('#fi4').prop("checked", false);
           $('#fi5').prop("checked", false);
           $('#fi6').prop("checked", false);
        }               
    });

    $('#fi2').change(function() {
        if(this.checked) {
           $('#fi1').prop("checked", false);
           $('#fi3').prop("checked", false);
           $('#fi4').prop("checked", false);
           $('#fi5').prop("checked", false);
           $('#fi6').prop("checked", false);
        }               
    });

    $('#fi3').change(function() {
        if(this.checked) {
           $('#fi2').prop("checked", false);
           $('#fi1').prop("checked", false);
           $('#fi4').prop("checked", false);
           $('#fi5').prop("checked", false);
           $('#fi6').prop("checked", false);
        }               
    });

    $('#fi4').change(function() {
        if(this.checked) {
           $('#fi2').prop("checked", false);
           $('#fi3').prop("checked", false);
           $('#fi1').prop("checked", false);
           $('#fi5').prop("checked", false);
           $('#fi6').prop("checked", false);
        }               
    });

    $('#fi5').change(function() {
        if(this.checked) {
           $('#fi2').prop("checked", false);
           $('#fi3').prop("checked", false);
           $('#fi4').prop("checked", false);
           $('#fi1').prop("checked", false);
           $('#fi6').prop("checked", false);
        }               
    });

    $('#fi6').change(function() {
        if(this.checked) {
           $('#fi2').prop("checked", false);
           $('#fi3').prop("checked", false);
           $('#fi4').prop("checked", false);
           $('#fi5').prop("checked", false);
           $('#fi1').prop("checked", false);
        }               
    });



    $('#ex1').change(function() {
        if(this.checked) {
           $('#ex2').prop("checked", false);
           $("#exposicion").prop("disabled", false); 
        }               
    });

    $('#ex2').change(function() {
        if(this.checked) {
           $('#ex1').prop("checked", false);
           $("#exposicion").prop("disabled", true); 
           $("#exposicion").val("");

        }               
    });


    $('#us1').change(function() {
        if(this.checked) {
           $('#us2').prop("checked", false);
           $("#protector").prop("disabled", false); 
        }               
    });

    $('#us2').change(function() {
        if(this.checked) {
           $('#us1').prop("checked", false);
           $("#protector").prop("disabled", true); 
           $("#protector").val("");
        }               
    });



    $('#ciclos1').change(function() {
        if(this.checked) {
           $('#ciclos2').prop("checked", false);
        }               
    });

    $('#ciclos2').change(function() {
        if(this.checked) {
           $('#ciclos1').prop("checked", false);
        }               
    });





    $('#cancer').change(function() {
        if(!this.checked) {
           
           $("#cancer1").prop("disabled", true); 
           $("#cancer1").val("");
           $("#cancer2").prop("disabled", true); 
           $("#cancer2").val("");
           $("#cancer3").prop("disabled", true); 
           $("#cancer3").val("");
           $("#cancer4").prop("disabled", true); 
           $("#cancer4").val("");

           $("#cancer1_select").prop("disabled", true); 
           $("#cancer2_select").prop("disabled", true); 
           $("#cancer3_select").prop("disabled", true); 
           $("#cancer4_select").prop("disabled", true);

           //$("#cancer1_select").val("");
           $('#cancer1_select').selectpicker('val', []);
           $('#cancer2_select').selectpicker('val', []);
           $('#cancer3_select').selectpicker('val', []);
           $('#cancer4_select').selectpicker('val', []);

        } else{

           $("#cancer1").prop("disabled", false); 
           $("#cancer2").prop("disabled", false); 
           $("#cancer3").prop("disabled", false); 
           $("#cancer4").prop("disabled", false); 

           $("#cancer1_select").prop("disabled", false); 
           $("#cancer2_select").prop("disabled", false); 
           $("#cancer3_select").prop("disabled", false); 
           $("#cancer4_select").prop("disabled", false); 

           $('#cancer1_select').selectpicker('refresh');
           $('#cancer2_select').selectpicker('refresh');
           $('#cancer3_select').selectpicker('refresh');
           $('#cancer4_select').selectpicker('refresh');

        }              
    });


    $('#hermatologias').change(function() {
        if(!this.checked) {

           $("#hermatologias_select").prop("disabled", true); 
           $('#hermatologias_select').selectpicker('val', []);

        } else{

           $("#hermatologias_select").prop("disabled", false); 
           $('#hermatologias_select').selectpicker('refresh');

        }              
    });

    $('#asma').change(function() {
        if(!this.checked) {
                   
           $("#asma_select").prop("disabled", true); 
           $('#asma_select').selectpicker('val', []);

        } else{

           $("#asma_select").prop("disabled", false);
           $('#asma_select').selectpicker('refresh');

        }              
    });

    $('#epilepsia').change(function() {
        if(!this.checked) {
                   
           $("#epilepsia_select").prop("disabled", true); 
           $('#epilepsia_select').selectpicker('val', []);

        } else{

           $("#epilepsia_select").prop("disabled", false); 
           $('#epilepsia_select').selectpicker('refresh');

        }              
    });

    $('#qsiquiatricas').change(function() {
        if(!this.checked) {
                   
           $("#qsiquiatricas_select").prop("disabled", true); 
           $('#qsiquiatricas_select').selectpicker('val', []);

        } else{

           $("#qsiquiatricas_select").prop("disabled", false); 
           $('#qsiquiatricas_select').selectpicker('refresh');

        }              
    });

    $('#endocrinas').change(function() {
        if(!this.checked) {
                   
           $("#endocrinas_select").prop("disabled", true); 
           $('#endocrinas_select').selectpicker('val', []);

        } else{

           $("#endocrinas_select").prop("disabled", false); 
           $('#endocrinas_select').selectpicker('refresh');

        }              
    });

    $('#nefropatias').change(function() {
        if(!this.checked) {
                   
           $("#nefropatias_select").prop("disabled", true); 
           $('#nefropatias_select').selectpicker('val', []);

        } else{

           $("#nefropatias_select").prop("disabled", false); 
           $('#nefropatias_select').selectpicker('refresh');

        }              
    });

    $('#hepatopatias').change(function() {
        if(!this.checked) {
                   
           $("#hepatopatias_select").prop("disabled", true); 
           $('#hepatopatias_select').selectpicker('val', []);

        } else{

           $("#hepatopatias_select").prop("disabled", false); 
           $('#hepatopatias_select').selectpicker('refresh');

        }              
    });

    $('#cardio').change(function() {
        if(!this.checked) {
                   
           $("#cardio_select").prop("disabled", true); 
           $('#cardio_select').selectpicker('val', []);

        } else{

           $("#cardio_select").prop("disabled", false); 
           $('#cardio_select').selectpicker('refresh');

        }              
    });

    $('#hipertension').change(function() {
        if(!this.checked) {
                   
           $("#hipertension_select").prop("disabled", true); 
           $('#hipertension_select').selectpicker('val', []);

        } else{

           $("#hipertension_select").prop("disabled", false); 
           $('#hipertension_select').selectpicker('refresh');

        }              
    });

    $('#diabetes').change(function() {
        if(!this.checked) {
                   
           $("#diabetes_select").prop("disabled", true); 
           $('#diabetes_select').selectpicker('val', []);

        } else{

           $("#diabetes_select").prop("disabled", false); 
           $('#diabetes_select').selectpicker('refresh');
           

        }              
    });

    $('#infecciosas').change(function() {
        if(!this.checked) {
                   
           $("#infecciosas_select").prop("disabled", true); 
           $('#infecciosas_select').selectpicker('val', []);

        } else{

           $("#infecciosas_select").prop("disabled", false); 
           $('#infecciosas_select').selectpicker('refresh');
           

        }              
    });

    $('#dislipi').change(function() {
        if(!this.checked) {
                   
           $("#dislipi_select").prop("disabled", true); 
           $('#dislipi_select').selectpicker('val', []);

        } else{

           $("#dislipi_select").prop("disabled", false); 
           $('#dislipi_select').selectpicker('refresh');
           

        }              
    });






});



  function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31 
    && (charCode < 48 || charCode > 57))
    return false;
    return true;
  } 


  function validartalla(){

      if( $("#talla").val() < 0 || $("#talla").val() > 3){ swal("ERROR", "El rango de este campo va de 0.0 a 3.0", "error");  $("#talla").css("border-color", "red");}
      else{ $("#talla").css("border-color", "black"); } 

      if( $("#talla_nota").val() < 0 || $("#talla_nota").val() > 3){ swal("ERROR", "El rango de este campo va de 0.0 a 3.0", "error");  $("#talla_nota").css("border-color", "red");}
      else{ $("#talla_nota").css("border-color", "black"); } 


    var val5=$("#peso").val();
    var val6=$("#talla").val();
    
    if(val5 > 0 && val6 > 0){ var val7 = (val5)/(val6 * val6);  $("#imc").val(val7);}

  }


  function validartalla2(){

      if( $("#talla_referencia").val() < 0 || $("#talla_referencia").val() > 3){ swal("ERROR", "El rango de este campo va de 0.0 a 3.0", "error");  $("#talla_referencia").css("border-color", "red");}
      else{ $("#talla_referencia").css("border-color", "black"); } 

      validarpeso2();

  }


  function validartalla3(){

      if( $("#talla_referencia2").val() < 0 || $("#talla_referencia2").val() > 3){ swal("ERROR", "El rango de este campo va de 0.0 a 3.0", "error");  $("#talla_referencia2").css("border-color", "red");}
      else{ $("#talla_referencia2").css("border-color", "black"); } 

      validarpeso3();

  }


  function validartalla4(){

      if( $("#talla_nota").val() < 0 || $("#talla_nota").val() > 3){ swal("ERROR", "El rango de este campo va de 0.0 a 3.0", "error");  $("#talla_nota").css("border-color", "red");}
      else{ $("#talla_nota").css("border-color", "black"); } 

      validarpeso4();

  }


  function validartalla5(){

      if( $("#talla_nota_post").val() < 0 || $("#talla_nota_post").val() > 3){ swal("ERROR", "El rango de este campo va de 0.0 a 3.0", "error");  $("#talla_nota_post").css("border-color", "red");}
      else{ $("#talla_nota_post").css("border-color", "black"); } 

      validarpeso5();

  }

  function validartalla6(){

      if( $("#talla_nota_alta").val() < 0 || $("#talla_nota_alta").val() > 3){ swal("ERROR", "El rango de este campo va de 0.0 a 3.0", "error");  $("#talla_nota_alta").css("border-color", "red");}
      else{ $("#talla_nota_alta").css("border-color", "black"); } 

      validarpeso6();

  }


  function validartalla7(){

      if( $("#talla_evolucion").val() < 0 || $("#talla_evolucion").val() > 3){ swal("ERROR", "El rango de este campo va de 0.0 a 3.0", "error");  $("#talla_evolucion").css("border-color", "red");}
      else{ $("#talla_evolucion").css("border-color", "black"); } 

      validarpeso7();

  }


  function validarpeso2(){

      if( $("#talla_referencia").val() > 0 && $("#talla_referencia").val() < 3 && $("#peso_referencia").val() > 0 )
        {  
            var val5=$("#peso_referencia").val();
            var val6=$("#talla_referencia").val();
    
            if(val5 > 0 && val6 > 0){ var val7 = (val5)/(val6 * val6);  $("#imc_referencia").val(val7);}  
        }

  }


  function validarpeso3(){

      if( $("#talla_referencia2").val() > 0 && $("#talla_referencia2").val() < 3 && $("#peso_referencia2").val() > 0 )
        {  
            var val5=$("#peso_referencia2").val();
            var val6=$("#talla_referencia2").val();
    
            if(val5 > 0 && val6 > 0){ var val7 = (val5)/(val6 * val6);  $("#imc_referencia2").val(val7);}  
        }

  }


  function validarpeso4(){

      if( $("#talla_nota").val() > 0 && $("#talla_nota").val() < 3 && $("#peso_nota").val() > 0 )
        {  
            var val5=$("#peso_nota").val();
            var val6=$("#talla_nota").val();
    
            if(val5 > 0 && val6 > 0){ var val7 = (val5)/(val6 * val6);  $("#imc_nota").val(val7);}  
        }

  }


  function validarpeso5(){

      if( $("#talla_nota_post").val() > 0 && $("#talla_nota_post").val() < 3 && $("#peso_nota_post").val() > 0 )
        {  
            var val5=$("#peso_nota_post").val();
            var val6=$("#talla_nota_post").val();
    
            if(val5 > 0 && val6 > 0){ var val7 = (val5)/(val6 * val6);  $("#imc_nota_post").val(val7);}  
        }

  }


  function validarpeso6(){

      if( $("#talla_nota_alta").val() > 0 && $("#talla_nota_alta").val() < 3 && $("#peso_nota_alta").val() > 0 )
        {  
            var val5=$("#peso_nota_alta").val();
            var val6=$("#talla_nota_alta").val();
    
            if(val5 > 0 && val6 > 0){ var val7 = (val5)/(val6 * val6);  $("#imc_nota_alta").val(val7);}  
        }

  }


  function validarpeso7(){

      if( $("#talla_evolucion").val() > 0 && $("#talla_evolucion").val() < 3 && $("#peso_evolucion").val() > 0 )
        {  
            var val5=$("#peso_evolucion").val();
            var val6=$("#talla_evolucion").val();
    
            if(val5 > 0 && val6 > 0){ var val7 = (val5)/(val6 * val6);  $("#imc_evolucion").val(val7);}  
        }

  }


  function validarfc(){

      if( $("#fc").val() < 60 || $("#fc").val() > 110 ){ swal("ERROR", "El rango de este campo va de 60 a 110", "error");  $("#fc").css("border-color", "red");}
      else{ $("#fc").css("border-color", "black"); }

      if( $("#fc_nota").val() < 60 || $("#fc_nota").val() > 110 ){ swal("ERROR", "El rango de este campo va de 60 a 110", "error");  $("#fc_nota").css("border-color", "red");}
      else{ $("#fc_nota").css("border-color", "black"); }

}

function validarfc2(){
      if( $("#fc_nota_post").val() < 60 || $("#fc_nota_post").val() > 110 ){ swal("ERROR", "El rango de este campo va de 60 a 110", "error");  $("#fc_nota_post").css("border-color", "red");}
      else{ $("#fc_nota_post").css("border-color", "black"); }
  }


  function validarfc3(){
      if( $("#fc_nota_alta").val() < 60 || $("#fc_nota_alta").val() > 110 ){ swal("ERROR", "El rango de este campo va de 60 a 110", "error");  $("#fc_nota_alta").css("border-color", "red");}
      else{ $("#fc_nota_alta").css("border-color", "black"); }
  }


function validarfc4(){
      if( $("#fc_referencia").val() < 60 || $("#fc_referencia").val() > 110 ){ swal("ERROR", "El rango de este campo va de 60 a 110", "error");  $("#fc_referencia").css("border-color", "red");}
      else{ $("#fc_referencia").css("border-color", "black"); }
  }


function validarfc5(){
      if( $("#fc_referencia2").val() < 60 || $("#fc_referencia2").val() > 110 ){ swal("ERROR", "El rango de este campo va de 60 a 110", "error");  $("#fc_referencia2").css("border-color", "red");}
      else{ $("#fc_referencia2").css("border-color", "black"); }
  }


function validarfc6(){
      if( $("#fc_evolucion").val() < 60 || $("#fc_evolucion").val() > 110 ){ swal("ERROR", "El rango de este campo va de 60 a 110", "error");  $("#fc_evolucion").css("border-color", "red");}
      else{ $("#fc_evolucion").css("border-color", "black"); }
  }

 

  function validarfr(){

      if( $("#fr").val() < 8 || $("#fr").val() > 20){ swal("ERROR", "El rango de este campo va de 8 a 20", "error");  $("#fr").css("border-color", "red"); }
      else{ $("#fr").css("border-color", "black"); }

      if( $("#fr_nota").val() < 8 || $("#fr_nota").val() > 20){ swal("ERROR", "El rango de este campo va de 8 a 20", "error");  $("#fr_nota").css("border-color", "red"); }
      else{ $("#fr_nota").css("border-color", "black"); }

}

  function validarfr2(){
      if( $("#fr_nota_post").val() < 8 || $("#fr_nota_post").val() > 20){ swal("ERROR", "El rango de este campo va de 8 a 20", "error");  $("#fr_nota_post").css("border-color", "red"); }
      else{ $("#fr_nota_post").css("border-color", "black"); }

  }


    function validarfr3(){
      if( $("#fr_nota_alta").val() < 8 || $("#fr_nota_alta").val() > 20){ swal("ERROR", "El rango de este campo va de 8 a 20", "error");  $("#fr_nota_alta").css("border-color", "red"); }
      else{ $("#fr_nota_alta").css("border-color", "black"); }

  }


  function validarfr4(){
      if( $("#fr_referencia").val() < 8 || $("#fr_referencia").val() > 20){ swal("ERROR", "El rango de este campo va de 8 a 20", "error");  $("#fr_referencia").css("border-color", "red"); }
      else{ $("#fr_referencia").css("border-color", "black"); }

  }


function validarfr5(){
      if( $("#fr_referencia2").val() < 8 || $("#fr_referencia2").val() > 20){ swal("ERROR", "El rango de este campo va de 8 a 20", "error");  $("#fr_referencia2").css("border-color", "red"); }
      else{ $("#fr_referencia2").css("border-color", "black"); }

  }


function validarfr6(){
      if( $("#fr_evolucion").val() < 8 || $("#fr_evolucion").val() > 20){ swal("ERROR", "El rango de este campo va de 8 a 20", "error");  $("#fr_evolucion").css("border-color", "red"); }
      else{ $("#fr_evolucion").css("border-color", "black"); }

  }  


function validarIMC(){

    var val5=$("#peso").val();
    var val6=$("#talla").val();
    
    if(val5 > 0 && val6 > 0){ var val7 = (val5)/(val6 * val6);  $("#imc").val(val7);}
  }



