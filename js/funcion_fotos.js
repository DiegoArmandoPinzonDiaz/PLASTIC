$(document).ready(function() { 



                      document.getElementById('boton1_1').onclick = function() { 
                        document.getElementById('my_file1_1').click(); 
                      };

                      document.getElementById('boton1_2').onclick = function() { 
                        document.getElementById('my_file1_2').click(); 
                      };

                      document.getElementById('boton1_3').onclick = function() { 
                        document.getElementById('my_file1_3').click(); 
                      };

                      document.getElementById('boton1_4').onclick = function() { 
                        document.getElementById('my_file1_4').click(); 
                      };

                      document.getElementById('boton1_5').onclick = function() { 
                        document.getElementById('my_file1_5').click(); 
                      };



                      document.getElementById('boton2_1').onclick = function() { 
                        document.getElementById('my_file2_1').click(); 
                      };

                      document.getElementById('boton2_2').onclick = function() { 
                        document.getElementById('my_file2_2').click(); 
                      };

                      document.getElementById('boton2_3').onclick = function() { 
                        document.getElementById('my_file2_3').click(); 
                      };

                      document.getElementById('boton2_4').onclick = function() { 
                        document.getElementById('my_file2_4').click(); 
                      };

                      document.getElementById('boton2_5').onclick = function() { 
                        document.getElementById('my_file2_5').click(); 
                      };



                      document.getElementById('boton3_1').onclick = function() { 
                        document.getElementById('my_file3_1').click(); 
                      };

                      document.getElementById('boton3_2').onclick = function() { 
                        document.getElementById('my_file3_2').click(); 
                      };

                      document.getElementById('boton3_3').onclick = function() { 
                        document.getElementById('my_file3_3').click(); 
                      };

                      document.getElementById('boton3_4').onclick = function() { 
                        document.getElementById('my_file3_4').click(); 
                      };

                      document.getElementById('boton3_5').onclick = function() { 
                        document.getElementById('my_file3_5').click(); 
                      };



                      document.getElementById('boton4_1').onclick = function() { 
                        document.getElementById('my_file4_1').click(); 
                      };

                      document.getElementById('boton4_2').onclick = function() { 
                        document.getElementById('my_file4_2').click(); 
                      };

                      document.getElementById('boton4_3').onclick = function() { 
                        document.getElementById('my_file4_3').click(); 
                      };

                      document.getElementById('boton4_4').onclick = function() { 
                        document.getElementById('my_file4_4').click(); 
                      };

                      document.getElementById('boton4_5').onclick = function() { 
                        document.getElementById('my_file4_5').click(); 
                      };

                      document.getElementById('boton4_6').onclick = function() { 
                        document.getElementById('my_file4_6').click(); 
                      };




                      document.getElementById('boton5_1').onclick = function() { 
                        document.getElementById('my_file5_1').click(); 
                      };

                      document.getElementById('boton5_2').onclick = function() { 
                        document.getElementById('my_file5_2').click(); 
                      };

                      document.getElementById('boton5_3').onclick = function() { 
                        document.getElementById('my_file5_3').click(); 
                      };

                      document.getElementById('boton5_4').onclick = function() { 
                        document.getElementById('my_file5_4').click(); 
                      };

                      document.getElementById('boton5_5').onclick = function() { 
                        document.getElementById('my_file5_5').click(); 
                      };

                      document.getElementById('boton5_6').onclick = function() { 
                        document.getElementById('my_file5_6').click(); 
                      };




                      document.getElementById('boton6_1').onclick = function() { 
                        document.getElementById('my_file6_1').click(); 
                      };

                      document.getElementById('boton6_2').onclick = function() { 
                        document.getElementById('my_file6_2').click(); 
                      };

                      document.getElementById('boton6_3').onclick = function() { 
                        document.getElementById('my_file6_3').click(); 
                      };

                      document.getElementById('boton6_4').onclick = function() { 
                        document.getElementById('my_file6_4').click(); 
                      };

                      document.getElementById('boton6_5').onclick = function() { 
                        document.getElementById('my_file6_5').click(); 
                      };

                      document.getElementById('boton6_6').onclick = function() { 
                        document.getElementById('my_file6_6').click(); 
                      };



					     $(function() {
					      $('#my_file1_1').change(function(e) {
					          addImage_1_1(e); 
					         });
					    });

					     function addImage_1_1(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_1_1;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_1_1(e) {
						          var result=e.target.result;
						          $('#imgSalida-1_1').attr("src",result);
						          $('#imgSalida-1_1').addClass("seleccion");
						         }




						$(function() {
					      $('#my_file1_2').change(function(e) {
					          addImage_1_2(e); 
					         });
					    });

					     function addImage_1_2(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_1_2;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_1_2(e) {
						          var result=e.target.result;
						          $('#imgSalida-1_2').attr("src",result);
						         }




				         $(function() {
					      $('#my_file1_3').change(function(e) {
					          addImage_1_3(e); 
					         });
					    });

					     function addImage_1_3(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_1_3;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_1_3(e) {
						          var result=e.target.result;
						          $('#imgSalida-1_3').attr("src",result);
						         }




				         $(function() {
					      $('#my_file1_4').change(function(e) {
					          addImage_1_4(e); 
					         });
					    });

					     function addImage_1_4(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_1_4;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_1_4(e) {
						          var result=e.target.result;
						          $('#imgSalida-1_4').attr("src",result);
						         }




						$(function() {
					      $('#my_file1_5').change(function(e) {
					          addImage_1_5(e); 
					         });
					    });

					     function addImage_1_5(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_1_5;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_1_5(e) {
						          var result=e.target.result;
						          $('#imgSalida-1_5').attr("src",result);
						         } 




						$(function() {
					      $('#my_file2_1').change(function(e) {
					          addImage_2_1(e); 
					         });
					    });

					     function addImage_2_1(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_2_1;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_2_1(e) {
						          var result=e.target.result;
						          $('#imgSalida-2_1').attr("src",result);
						         }



						$(function() {
					      $('#my_file2_2').change(function(e) {
					          addImage_2_2(e); 
					         });
					    });

					     function addImage_2_2(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_2_2;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_2_2(e) {
						          var result=e.target.result;
						          $('#imgSalida-2_2').attr("src",result);
						         }



				         $(function() {
					      $('#my_file2_3').change(function(e) {
					          addImage_2_3(e); 
					         });
					    });

					     function addImage_2_3(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_2_3;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_2_3(e) {
						          var result=e.target.result;
						          $('#imgSalida-2_3').attr("src",result);
						         }



				         $(function() {
					      $('#my_file2_4').change(function(e) {
					          addImage_2_4(e); 
					         });
					    });

					     function addImage_2_4(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_2_4;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_2_4(e) {
						          var result=e.target.result;
						          $('#imgSalida-2_4').attr("src",result);
						         }



						$(function() {
					      $('#my_file2_5').change(function(e) {
					          addImage_2_5(e); 
					         });
					    });

					     function addImage_2_5(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_2_5;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_2_5(e) {
						          var result=e.target.result;
						          $('#imgSalida-2_5').attr("src",result);
						         } 



						$(function() {
					      $('#my_file3_1').change(function(e) {
					          addImage_3_1(e); 
					         });
					    });

					     function addImage_3_1(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_3_1;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_3_1(e) {
						          var result=e.target.result;
						          $('#imgSalida-3_1').attr("src",result);
						         }



						$(function() {
					      $('#my_file3_2').change(function(e) {
					          addImage_3_2(e); 
					         });
					    });

					     function addImage_3_2(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_3_2;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_3_2(e) {
						          var result=e.target.result;
						          $('#imgSalida-3_2').attr("src",result);
						         }



				         $(function() {
					      $('#my_file3_3').change(function(e) {
					          addImage_3_3(e); 
					         });
					    });

					     function addImage_3_3(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_3_3;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_3_3(e) {
						          var result=e.target.result;
						          $('#imgSalida-3_3').attr("src",result);
						         }



				         $(function() {
					      $('#my_file3_4').change(function(e) {
					          addImage_3_4(e); 
					         });
					    });

					     function addImage_3_4(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_3_4;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_3_4(e) {
						          var result=e.target.result;
						          $('#imgSalida-3_4').attr("src",result);
						         }




						$(function() {
					      $('#my_file3_5').change(function(e) {
					          addImage_3_5(e); 
					         });
					    });

					     function addImage_3_5(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_3_5;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_3_5(e) {
						          var result=e.target.result;
						          $('#imgSalida-3_5').attr("src",result);
						         } 



						$(function() {
					      $('#my_file4_1').change(function(e) {
					          addImage_4_1(e); 
					         });
					    });

					     function addImage_4_1(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_4_1;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_4_1(e) {
						          var result=e.target.result;
						          $('#imgSalida-4_1').attr("src",result);
						         }



						$(function() {
					      $('#my_file4_2').change(function(e) {
					          addImage_4_2(e); 
					         });
					    });

					     function addImage_4_2(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_4_2;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_4_2(e) {
						          var result=e.target.result;
						          $('#imgSalida-4_2').attr("src",result);
						         }



				         $(function() {
					      $('#my_file4_3').change(function(e) {
					          addImage_4_3(e); 
					         });
					    });

					     function addImage_4_3(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_4_3;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_4_3(e) {
						          var result=e.target.result;
						          $('#imgSalida-4_3').attr("src",result);
						         }



				         $(function() {
					      $('#my_file4_4').change(function(e) {
					          addImage_4_4(e); 
					         });
					    });

					     function addImage_4_4(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_4_4;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_4_4(e) {
						          var result=e.target.result;
						          $('#imgSalida-4_4').attr("src",result);
						         }



						$(function() {
					      $('#my_file4_5').change(function(e) {
					          addImage_4_5(e); 
					         });
					    });

					     function addImage_4_5(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_4_5;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_4_5(e) {
						          var result=e.target.result;
						          $('#imgSalida-4_5').attr("src",result);
						         } 



					     $(function() {
					      $('#my_file4_6').change(function(e) {
					          addImage_4_6(e); 
					         });
					    });

					     function addImage_4_6(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_4_6;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_4_6(e) {
						          var result=e.target.result;
						          $('#imgSalida-4_6').attr("src",result);
						         }
						         



						$(function() {
					      $('#my_file5_1').change(function(e) {
					          addImage_5_1(e); 
					         });
					    });

					     function addImage_5_1(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_5_1;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_5_1(e) {
						          var result=e.target.result;
						          $('#imgSalida-5_1').attr("src",result);
						         }



						$(function() {
					      $('#my_file5_2').change(function(e) {
					          addImage_5_2(e); 
					         });
					    });

					     function addImage_5_2(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_5_2;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_5_2(e) {
						          var result=e.target.result;
						          $('#imgSalida-5_2').attr("src",result);
						         }



				         $(function() {
					      $('#my_file5_3').change(function(e) {
					          addImage_5_3(e); 
					         });
					    });

					     function addImage_5_3(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_5_3;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_5_3(e) {
						          var result=e.target.result;
						          $('#imgSalida-5_3').attr("src",result);
						         }



				         $(function() {
					      $('#my_file5_4').change(function(e) {
					          addImage_5_4(e); 
					         });
					    });

					     function addImage_5_4(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_5_4;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_5_4(e) {
						          var result=e.target.result;
						          $('#imgSalida-5_4').attr("src",result);
						         }




						$(function() {
					      $('#my_file5_5').change(function(e) {
					          addImage_5_5(e); 
					         });
					    });

					     function addImage_5_5(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_5_5;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_5_5(e) {
						          var result=e.target.result;
						          $('#imgSalida-5_5').attr("src",result);
						         } 


						$(function() {
					      $('#my_file5_6').change(function(e) {
					          addImage_5_6(e); 
					         });
					    });

					     function addImage_5_6(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_5_6;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_5_6(e) {
						          var result=e.target.result;
						          $('#imgSalida-5_6').attr("src",result);
						         }   








						$(function() {
					      $('#my_file6_1').change(function(e) {
					          addImage_6_1(e); 
					         });
					    });

					     function addImage_6_1(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_6_1;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_6_1(e) {
						          var result=e.target.result;
						          $('#imgSalida-6_1').attr("src",result);
						         }



						$(function() {
					      $('#my_file6_2').change(function(e) {
					          addImage_6_2(e); 
					         });
					    });

					     function addImage_6_2(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_6_2;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_6_2(e) {
						          var result=e.target.result;
						          $('#imgSalida-6_2').attr("src",result);
						         }



				         $(function() {
					      $('#my_file6_3').change(function(e) {
					          addImage_6_3(e); 
					         });
					    });

					     function addImage_6_3(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_6_3;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_6_3(e) {
						          var result=e.target.result;
						          $('#imgSalida-6_3').attr("src",result);
						         }



				         $(function() {
					      $('#my_file6_4').change(function(e) {
					          addImage_6_4(e); 
					         });
					    });

					     function addImage_6_4(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_6_4;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_6_4(e) {
						          var result=e.target.result;
						          $('#imgSalida-6_4').attr("src",result);
						         }




						$(function() {
					      $('#my_file6_5').change(function(e) {
					          addImage_6_5(e); 
					         });
					    });

					     function addImage_6_5(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_6_5;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_6_5(e) {
						          var result=e.target.result;
						          $('#imgSalida-6_5').attr("src",result);
						         } 


						$(function() {
					      $('#my_file6_6').change(function(e) {
					          addImage_6_6(e); 
					         });
					    });

					     function addImage_6_6(e){
						          var file = e.target.files[0],
						          imageType = /image.*/;
						        
						          if (!file.type.match(imageType))
						           return;
						      
						          var reader = new FileReader();
						          reader.onload = fileOnload_6_6;
						          reader.readAsDataURL(file);

						         }
						      
						function fileOnload_6_6(e) {
						          var result=e.target.result;
						          $('#imgSalida-6_6').attr("src",result);
						         }            





});


function ampliarImagen(comp){

 	$("#myModal").modal('show');
 	$('#imgSalida-modal').attr("src",$('#'+comp.id).attr('src'));
}



function tomarFoto1(comp){ 	

 	$("#myModal1").modal('show');
 	startWebcam1();

}

function tomarFoto2(comp){ 	

 	$("#myModal2").modal('show');
 	startWebcam2();

}

function tomarFoto3(comp){ 	

 	$("#myModal3").modal('show');
 	startWebcam3();

}

function tomarFoto4(comp){ 	

 	$("#myModal4").modal('show');
 	startWebcam4();

}

function tomarFoto5(comp){ 	

 	$("#myModal5").modal('show');
 	startWebcam5();

}

function tomarFoto6(comp){ 	

 	$("#myModal6").modal('show');
 	startWebcam6();

}

function tomarFoto7(comp){ 	

 	$("#myModal7").modal('show');
 	startWebcam7();

}

function tomarFoto8(comp){ 	

 	$("#myModal8").modal('show');
 	startWebcam8();

}

function tomarFoto9(comp){ 	

 	$("#myModal9").modal('show');
 	startWebcam9();

}

function tomarFoto10(comp){ 	

 	$("#myModal10").modal('show');
 	startWebcam10();

}


function tomarFoto11(comp){ 	

 	$("#myModal11").modal('show');
 	startWebcam11();

}

function tomarFoto12(comp){ 	

 	$("#myModal12").modal('show');
 	startWebcam12();

}

function tomarFoto13(comp){ 	

 	$("#myModal13").modal('show');
 	startWebcam13();

}

function tomarFoto14(comp){ 	

 	$("#myModal14").modal('show');
 	startWebcam14();

}

function tomarFoto15(comp){ 	

 	$("#myModal15").modal('show');
 	startWebcam15();

}

function tomarFoto16(comp){ 	

 	$("#myModal16").modal('show');
 	startWebcam16();

}

function tomarFoto17(comp){ 	

 	$("#myModal17").modal('show');
 	startWebcam17();

}

function tomarFoto18(comp){ 	

 	$("#myModal18").modal('show');
 	startWebcam18();

}

function tomarFoto19(comp){ 	

 	$("#myModal19").modal('show');
 	startWebcam19();

}

function tomarFoto20(comp){ 	

 	$("#myModal20").modal('show');
 	startWebcam20();

}


function tomarFoto21(comp){ 	

 	$("#myModal21").modal('show');
 	startWebcam21();

}

function tomarFoto22(comp){ 	

 	$("#myModal22").modal('show');
 	startWebcam22();

}

function tomarFoto23(comp){ 	

 	$("#myModal23").modal('show');
 	startWebcam23();

}

function tomarFoto24(comp){ 	

 	$("#myModal24").modal('show');
 	startWebcam24();

}

function tomarFoto25(comp){ 	

 	$("#myModal25").modal('show');
 	startWebcam25();

}

function tomarFoto26(comp){ 	

 	$("#myModal26").modal('show');
 	startWebcam26();

}

function tomarFoto27(comp){ 	

 	$("#myModal27").modal('show');
 	startWebcam27();

}

function tomarFoto28(comp){ 	

 	$("#myModal28").modal('show');
 	startWebcam28();

}

function tomarFoto29(comp){ 	

 	$("#myModal29").modal('show');
 	startWebcam29();

}

function tomarFoto30(comp){ 	

 	$("#myModal30").modal('show');
 	startWebcam30();

}


function tomarFoto31(comp){ 	

 	$("#myModal31").modal('show');
 	startWebcam31();

}


function tomarFoto32(comp){ 	

 	$("#myModal32").modal('show');
 	startWebcam32();

}


function tomarFoto33(comp){ 	

 	$("#myModal33").modal('show');
 	startWebcam33();

}

//--------------------
// GET USER MEDIA CODE
//--------------------
navigator.getUserMedia = ( navigator.getUserMedia ||
navigator.webkitGetUserMedia ||
navigator.mozGetUserMedia ||
navigator.msGetUserMedia);

var video;
var webcamStream;

function startWebcam1() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video1');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal1").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal1").modal('hide');
  }  
}

function startWebcam2() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video2');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal2").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal2").modal('hide');
  }  
}


function startWebcam3() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video3');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal3").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal3").modal('hide');
  }  
}


function startWebcam4() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video4');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal4").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal4").modal('hide');
  }  
}


function startWebcam5() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video5');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal5").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal5").modal('hide');
  }  
}


function startWebcam6() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video6');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal6").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal6").modal('hide');
  }  
}

function startWebcam7() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video7');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal7").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal7").modal('hide');
  }  
}


function startWebcam8() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video8');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal8").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal8").modal('hide');
  }  
}


function startWebcam9() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video9');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal9").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal9").modal('hide');
  }  
}


function startWebcam10() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video10');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal10").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal10").modal('hide');
  }  
}


function startWebcam11() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video11');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal11").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal11").modal('hide');
  }  
}

function startWebcam12() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video12');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal12").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal12").modal('hide');
  }  
}


function startWebcam13() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video13');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal13").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal13").modal('hide');
  }  
}


function startWebcam14() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video14');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal14").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal14").modal('hide');
  }  
}


function startWebcam15() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video15');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal15").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal15").modal('hide');
  }  
}


function startWebcam16() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video16');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal16").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal16").modal('hide');
  }  
}

function startWebcam17() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video17');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal17").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal17").modal('hide');
  }  
}


function startWebcam18() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video18');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal18").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal18").modal('hide');
  }  
}


function startWebcam19() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video19');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal19").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal19").modal('hide');
  }  
}


function startWebcam20() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video20');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal20").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal20").modal('hide');
  }  
}


function startWebcam21() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video21');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal21").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal21").modal('hide');
  }  
}

function startWebcam22() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video22');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal22").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal22").modal('hide');
  }  
}


function startWebcam23() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video23');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal23").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal23").modal('hide');
  }  
}


function startWebcam24() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video24');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal24").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal24").modal('hide');
  }  
}


function startWebcam25() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video25');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal25").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal25").modal('hide');
  }  
}


function startWebcam26() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video26');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal26").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal26").modal('hide');
  }  
}

function startWebcam27() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video27');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal27").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal27").modal('hide');
  }  
}


function startWebcam28() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video28');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal28").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal28").modal('hide');
  }  
}


function startWebcam29() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video29');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal29").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal29").modal('hide');
  }  
}


function startWebcam30() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video30');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal30").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal30").modal('hide');
  }  
}

function startWebcam31() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video31');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal31").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal31").modal('hide');
  }  
}


function startWebcam32() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video32');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal32").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal32").modal('hide');
  }  
}


function startWebcam33() {
  if (navigator.getUserMedia) {
    navigator.getUserMedia ({
      video: true,
      audio: false
    },
    // successCallback
    function(localMediaStream) {
      video = document.querySelector('#video33');
      video.src = window.URL.createObjectURL(localMediaStream);
      webcamStream = localMediaStream;
    },
    // errorCallback
    function(err) {
      alert("Ocurrio el siguiente error: " + err);
      $("#myModal33").modal('hide');
    });
  } else {
    alert("getUserMedia no soportado.");
    $("#myModal33").modal('hide');
  }  
}


function stopWebcam() {
  webcamStream.stop();
}

function dataURItoBlob(dataURI) {

  var byteString = atob(dataURI.split(',')[1]);

    var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0]

    var ab = new ArrayBuffer(byteString.length);
    var ia = new Uint8Array(ab);
    for (var i = 0; i < byteString.length; i++)
    {
        ia[i] = byteString.charCodeAt(i);
    }

    var bb = new Blob([ab], { "type": mimeString });
    return bb;
}

//---------------------
// TAKE A SNAPSHOT CODE
//---------------------
var canvas, ctx, dataUrl, dataUrl2, dataUrl3, dataUrl4, dataUrl5, dataUrl6, dataUrl7, dataUrl8, dataUrl9, dataUrl10;
var dataUrl11, dataUrl12, dataUrl13, dataUrl14, dataUrl15, dataUrl16, dataUrl17, dataUrl18, dataUrl19, dataUrl20;
var dataUrl21, dataUrl22, dataUrl23, dataUrl24, dataUrl25, dataUrl26, dataUrl27, dataUrl28, dataUrl29, dataUrl30;
var dataUrl31, dataUrl32, dataUrl33;
var blob1, blob2, blob3, blob4, blob5, blob6, blob7, blob8, blob9, blob10;
var blob11, blob12, blob13, blob14, blob15, blob16, blob17, blob18, blob19, blob20;
var blob21, blob22, blob23, blob24, blob25, blob26, blob27, blob28, blob29, blob30;
var blob31, blob32, blob33;

function init() {
  canvas = document.getElementById("myCanvas");
  ctx = canvas.getContext('2d');

}

function snapshot1() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-1_1').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl = canvas.toDataURL("image/png");
  //blob1 = dataURItoBlob(dataUrl);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal1").modal('hide');
  blob1 = "CAMARA";
}

function snapshot2() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-1_2').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl2 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl2);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal2").modal('hide');
  blob2 = "CAMARA";
}

function snapshot3() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-1_3').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl3 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl3);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal3").modal('hide');
  blob3 = "CAMARA";
}

function snapshot4() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-1_4').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl4 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl4);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal4").modal('hide');
  blob4 = "CAMARA";
}


function snapshot5() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-1_5').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl5 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl5);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal5").modal('hide');
  blob5 = "CAMARA";
}


function snapshot6() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-2_1').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl6 = canvas.toDataURL("image/png");
  //blob1 = dataURItoBlob(dataUrl);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal6").modal('hide');
  blob6 = "CAMARA";
}

function snapshot7() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-2_2').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl7 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl2);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal7").modal('hide');
  blob7 = "CAMARA";
}

function snapshot8() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-2_3').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl8 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl3);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal8").modal('hide');
  blob8 = "CAMARA";
}

function snapshot9() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-2_4').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl9 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl4);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal9").modal('hide');
  blob9 = "CAMARA";
}


function snapshot10() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-2_5').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl10 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl5);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal10").modal('hide');
  blob10 = "CAMARA";
}

function snapshot11() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-3_1').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl11 = canvas.toDataURL("image/png");
  //blob1 = dataURItoBlob(dataUrl);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal11").modal('hide');
  blob11 = "CAMARA";
}

function snapshot12() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-3_2').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl12 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl2);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal12").modal('hide');
  blob12 = "CAMARA";
}

function snapshot13() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-3_3').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl13 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl3);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal13").modal('hide');
  blob13 = "CAMARA";
}

function snapshot14() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-3_4').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl14 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl4);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal14").modal('hide');
  blob14 = "CAMARA";
}


function snapshot15() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-3_5').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl15 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl5);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal15").modal('hide');
  blob15 = "CAMARA";
}


function snapshot16() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-4_1').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl16 = canvas.toDataURL("image/png");
  //blob1 = dataURItoBlob(dataUrl);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal16").modal('hide');
  blob16 = "CAMARA";
}

function snapshot17() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-4_2').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl17 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl2);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal17").modal('hide');
  blob17 = "CAMARA";
}

function snapshot18() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-4_3').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl18 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl3);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal18").modal('hide');
  blob18 = "CAMARA";
}

function snapshot19() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-4_4').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl19 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl4);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal19").modal('hide');
  blob19 = "CAMARA";
}


function snapshot20() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-4_5').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl20 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl5);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal20").modal('hide');
  blob20 = "CAMARA";
}


function snapshot21() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-4_6').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl21 = canvas.toDataURL("image/png");
  //blob1 = dataURItoBlob(dataUrl);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal21").modal('hide');
  blob21 = "CAMARA";
}

function snapshot22() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-5_1').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl22 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl2);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal22").modal('hide');
  blob22 = "CAMARA";
}

function snapshot23() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-5_2').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl23 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl3);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal23").modal('hide');
  blob23 = "CAMARA";
}

function snapshot24() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-5_3').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl24 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl4);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal24").modal('hide');
  blob24 = "CAMARA";
}


function snapshot25() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-5_4').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl25 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl5);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal25").modal('hide');
  blob25 = "CAMARA";
}


function snapshot26() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-5_5').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl26 = canvas.toDataURL("image/png");
  //blob1 = dataURItoBlob(dataUrl);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal26").modal('hide');
  blob26 = "CAMARA";
}

function snapshot27() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-5_6').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl27 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl2);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal27").modal('hide');
  blob27 = "CAMARA";
}

function snapshot28() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-6_1').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl28 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl3);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal28").modal('hide');
  blob28 = "CAMARA";
}

function snapshot29() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-6_2').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl29 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl4);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal29").modal('hide');
  blob29 = "CAMARA";
}


function snapshot30() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-6_3').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl30 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl5);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal30").modal('hide');
  blob30 = "CAMARA";
}

function snapshot31() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-6_4').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl31 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl5);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal31").modal('hide');
  blob31 = "CAMARA";
}

function snapshot32() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-6_5').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl32 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl5);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal32").modal('hide');
  blob32 = "CAMARA";
}

function snapshot33() {
  ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-6_6').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl33 = canvas.toDataURL("image/png");
  //blob2 = dataURItoBlob(dataUrl5);
  context.clearRect(0, 0, canvas.width, canvas.height);
  $("#myModal33").modal('hide');
  blob33 = "CAMARA";
}


function guardarFotos1()
{

	var val=location.href.split("index=")[1];	

    if($("#my_file1_1").val()==""){ if( blob1 == "CAMARA"){	var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_1.png";	}else{ var val2 = ""; }
    }else{  var val2 = document.getElementById('my_file1_1').files[0].name; }

    if($("#my_file1_2").val()==""){ if( blob2 == "CAMARA"){	var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_1.png";	}else{ var val3 = ""; } 
    }else{  var val3 = document.getElementById('my_file1_2').files[0].name; }

    if($("#my_file1_3").val()==""){ if( blob3 == "CAMARA"){	var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_1.png";	}else{ var val4 = ""; }    
    }else{  var val4 = document.getElementById('my_file1_3').files[0].name; }

    if($("#my_file1_4").val()==""){ if( blob4 == "CAMARA"){	var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_1.png";	}else{ var val5 = ""; }   
    }else{  var val5 = document.getElementById('my_file1_4').files[0].name; }

    if($("#my_file1_5").val()==""){ if( blob5 == "CAMARA"){	var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_1.png";	}else{ var val6 = ""; }       
    }else{  var val6 = document.getElementById('my_file1_5').files[0].name; }


	var val7=$("#descripcion_1").val();


  	var val8=$("#fecha_1").val();

		var anio=String(val8).substring(6,10); //2009
		var dia= String(val8).substring(0,2); //10
		var mes= String(val8).substring(3,5); //11

		var fecha=anio +'-'+ mes +'-'+ dia
		val8 = fecha;


if(val2 == "image.jpg"){ var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_1.png"; }
if(val3 == "image.jpg"){ var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_1.png"; }
if(val4 == "image.jpg"){ var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_1.png"; }
if(val5 == "image.jpg"){ var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_1.png"; }
if(val6 == "image.jpg"){ var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_1.png"; }


if(val2 == ""){ var val2 = 'vacio1'; }
if(val3 == ""){ var val3 = 'vacio2'; }
if(val4 == ""){ var val4 = 'vacio3'; }
if(val5 == ""){ var val5 = 'vacio4'; }
if(val6 == ""){ var val6 = 'vacio5'; }


    //Validamos que esten los campos llenos
    if(/*val2 == "" || val3 == "" || val4 == "" || val5 == "" || val6 == "" ||*/ val7 == "" || val8 == "--"){ swal("ERROR", "Existen campos vacios", "error");}
    else if( val2 == val3 || val2 == val4 || val2 == val5 || val2 == val6 || val3 == val4 || val3 == val5 || val3 == val6 || val4 == val5 || val4 == val6 || val5 == val6){ swal("ERROR", "Existen im\u00E1genes repetidas", "error");}
 	else{


 		if(val2 == "vacio1"){ var val2 = ''; }
		if(val3 == "vacio2"){ var val3 = ''; }
		if(val4 == "vacio3"){ var val4 = ''; }
		if(val5 == "vacio4"){ var val5 = ''; }
		if(val6 == "vacio5"){ var val6 = ''; }



        $.post("CRUD/actualizar_img_1.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 

            	
            	$.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } });

               
               if(blob1 == "CAMARA"){ 

	              
				    $.ajax({
				        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_DERECHO_FACIAL_1",
				        method: 'post',
				        data: { img: dataUrl},
				        type: 'post',
				    }).done(function(retorno) {
				        //alert(retorno);
				        //alert("acierto");
				        //$( '#imagen' ).show();
				        
				    }).fail(function(retorno) {
					    //alert( retorno );
					    //alert("fallo");
					  });		    
 

               }
               else if( val2 == "" ){  }
               else{
               	

	               	var file_data = $('#my_file1_1').prop('files')[0];
	               	var form_data = new FormData();                  
	                  form_data.append('file', file_data);
	                var test =  location.href.split("index=")[1] + "_DERECHO_FACIAL_1.png"; 
	                if(val2 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_DERECHO_FACIAL_1"; }  
	                else{ var urls = 'CRUD/guardarImg_prac.php'; }
	                  //alert(form_data);                             
	                  $.ajax({
	                  	  //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_DERECHO_FACIAL_1", // point to server-side PHP script
	                      //url: 'CRUD/guardarImg_prac.php', // point to server-side PHP script 
	                      url : urls,
	                      dataType: 'text',  // what to expect back from the PHP script, if anything
	                      cache: false,
	                      contentType: false,
	                      processData: false,
	                      data: form_data,                         
	                      type: 'post',
	                      success: function(php_script_response){
	                          //alert(php_script_response); // display response from the PHP script, if any
	                          //alert("guardada imagen");
	                          
	                      }
	                   });	 

               }

                     
                  


               if(blob2 == "CAMARA"){  

						          $.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_1",
							        method: 'post',
							        data: { img: dataUrl2},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							         
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });
			                       

                }
                else if( val3 == "" ){  }
               else{	//var file_data = $('#my_file1_2').prop('files')[0];	 }

                  var file_data = $('#my_file1_2').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  
                  var test =  location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_1.png"; 
	              if(val3 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_1"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_1", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
					      

                      }
                   });

                }


               if(blob3 == "CAMARA"){ 


               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_FRENTE_FACIAL_1",
							        method: 'post',
							        data: { img: dataUrl3},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
								    

							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                 }
                 else if( val4 == "" ){  }
               else{	//var file_data = $('#my_file1_3').prop('files')[0];	 }


                  var file_data = $('#my_file1_3').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);        

                  var test =  location.href.split("index=")[1] + "_FRENTE_FACIAL_1.png"; 
	              if(val4 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_FRENTE_FACIAL_1"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_FRENTE_FACIAL_1", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                         
                      }
                   });

              }


               if(blob4 == "CAMARA"){ 

               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_1",
							        method: 'post',
							        data: { img: dataUrl4},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });

                  }
                  else if( val5 == "" ){  }
               else{	//var file_data = $('#my_file1_4').prop('files')[0];	 }


                  var file_data = $('#my_file1_4').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);    

                  var test =  location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_1.png"; 
	              if(val5 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_1"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_1", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                         
                      }
                   });

              }


               if(blob5 == "CAMARA"){ 


               					$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_1",
							        method: 'post',
							        data: { img: dataUrl5},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });

                  }
                  else if( val6 == "" ){  }
               else{	//var file_data = $('#my_file1_5').prop('files')[0];	 }


                  var file_data = $('#my_file1_5').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);    

                  var test =  location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_1.png"; 
	              if(val6 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_1"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }


                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_1", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                          
                      }
                   });

              }  				              		            
               
               
      		setTimeout(function(){ $.unblockUI(); swal(respuesta, "PLASTIC & BEAUTY", "success"); location.reload();} , 60000);  
              
              //swal(respuesta, "PLASTIC & BEAUTY", "success");             
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas", "error"); }
        });
	}

}


function guardarFotos2()
{

	var val=location.href.split("index=")[1];	

    if($("#my_file2_1").val()==""){ if( blob6 == "CAMARA"){	var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_2.png";	}else{ var val2 = ""; } 
    }else{  var val2 = document.getElementById('my_file2_1').files[0].name; }

    if($("#my_file2_2").val()==""){ if( blob7 == "CAMARA"){	var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_2.png";	}else{ var val3 = ""; }  
    }else{  var val3 = document.getElementById('my_file2_2').files[0].name; }

    if($("#my_file2_3").val()==""){ if( blob8 == "CAMARA"){	var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_2.png";	}else{ var val4 = ""; } 
    }else{  var val4 = document.getElementById('my_file2_3').files[0].name; }

    if($("#my_file2_4").val()==""){ if( blob9 == "CAMARA"){	var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_2.png";	}else{ var val5 = ""; }   
    }else{  var val5 = document.getElementById('my_file2_4').files[0].name; }

    if($("#my_file2_5").val()==""){ if( blob10 == "CAMARA"){	var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_2.png";	}else{ var val6 = ""; }  
    }else{  var val6 = document.getElementById('my_file2_5').files[0].name; }


	var val7=$("#descripcion_2").val();


  	var val8=$("#fecha_2").val();

		var anio=String(val8).substring(6,10); //2009
		var dia= String(val8).substring(0,2); //10
		var mes= String(val8).substring(3,5); //11

		var fecha=anio +'-'+ mes +'-'+ dia
		val8 = fecha;


if(val2 == "image.jpg"){ var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_2.png"; }
if(val3 == "image.jpg"){ var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_2.png"; }
if(val4 == "image.jpg"){ var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_2.png"; }
if(val5 == "image.jpg"){ var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_2.png"; }
if(val6 == "image.jpg"){ var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_2.png"; }


if(val2 == ""){ var val2 = 'vacio1'; }
if(val3 == ""){ var val3 = 'vacio2'; }
if(val4 == ""){ var val4 = 'vacio3'; }
if(val5 == ""){ var val5 = 'vacio4'; }
if(val6 == ""){ var val6 = 'vacio5'; }


    //Validamos que esten los campos llenos
    if(/*val2 == "" || val3 == "" || val4 == "" || val5 == "" || val6 == "" ||*/ val7 == "" || val8 == "--"){ swal("ERROR", "Existen campos vacios", "error");}
    else if( val2 == val3 || val2 == val4 || val2 == val5 || val2 == val6 || val3 == val4 || val3 == val5 || val3 == val6 || val4 == val5 || val4 == val6 || val5 == val6){ swal("ERROR", "Existen im\u00E1genes repetidas", "error");}
 	else{ 


 		if(val2 == "vacio1"){ var val2 = ''; }
		if(val3 == "vacio2"){ var val3 = ''; }
		if(val4 == "vacio3"){ var val4 = ''; }
		if(val5 == "vacio4"){ var val5 = ''; }
		if(val6 == "vacio5"){ var val6 = ''; }



        $.post("CRUD/actualizar_img_2.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 


            	$.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } });

               

                if(blob6 == "CAMARA"){ 

	              
				    $.ajax({
				        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_DERECHO_FACIAL_2",
				        method: 'post',
				        data: { img: dataUrl6},
				        type: 'post',
				    }).done(function(retorno) {
				        //alert(retorno);
				        //alert("acierto");
				        //$( '#imagen' ).show();
				       
				    }).fail(function(retorno) {
					    //alert( retorno );
					    //alert("fallo");
					  });
 

               }
               else{	

	               	var file_data = $('#my_file2_1').prop('files')[0];
	               	var form_data = new FormData();                  
	                  form_data.append('file', file_data);
	                  //alert(form_data);  

	                var test =  location.href.split("index=")[1] + "_DERECHO_FACIAL_2.png"; 
	                if(val2 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_DERECHO_FACIAL_2"; }  
	                else{ var urls = 'CRUD/guardarImg_prac.php'; }

	                  $.ajax({
	                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_DERECHO_FACIAL_2", // point to server-side PHP script 
	                      url : urls,
	                      dataType: 'text',  // what to expect back from the PHP script, if anything
	                      cache: false,
	                      contentType: false,
	                      processData: false,
	                      data: form_data,                         
	                      type: 'post',
	                      success: function(php_script_response){
	                          //alert(php_script_response); // display response from the PHP script, if any
	                          //alert("guardada imagen");
	                         
	                      }
	                   });	 

               }

                     
                  


               if(blob7 == "CAMARA"){  

						          $.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_2",
							        method: 'post',
							        data: { img: dataUrl7},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							       
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });
			                       

                }
               else{	//var file_data = $('#my_file2_2').prop('files')[0];	 }

                  var file_data = $('#my_file2_2').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_2.png"; 
	              if(val3 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_2"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }


                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_2", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
				 

                      }
                   });

              }


               if(blob8 == "CAMARA"){ 


               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_FRENTE_FACIAL_2",
							        method: 'post',
							        data: { img: dataUrl8},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
								

							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                 }
               else{	//var file_data = $('#my_file1_3').prop('files')[0];	 }


                  var file_data = $('#my_file2_3').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data); 

                  var test =  location.href.split("index=")[1] + "_FRENTE_FACIAL_2.png"; 
	              if(val4 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_FRENTE_FACIAL_2"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({

                  	  url : urls,
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_FRENTE_FACIAL_2", // point to server-side PHP script 
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                      
                      }
                   });

              }


               if(blob9 == "CAMARA"){ 

               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_2",
							        method: 'post',
							        data: { img: dataUrl9},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							       
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });

                  }
               else{	//var file_data = $('#my_file1_4').prop('files')[0];	 }


                  var file_data = $('#my_file2_4').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data); 

                  var test =  location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_2.png"; 
	              if(val5 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_2"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_2", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                        
                      }
                   });
              }


               if(blob10 == "CAMARA"){ 


               					$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_2",
							        method: 'post',
							        data: { img: dataUrl10},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							      
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                  }
               else{	//var file_data = $('#my_file1_5').prop('files')[0];	 }


                  var file_data = $('#my_file2_5').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_2.png"; 
	              if(val6 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_2"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_2", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                           
                      }
                   });

              }


              setTimeout(function(){ $.unblockUI(); swal(respuesta, "PLASTIC & BEAUTY", "success");} , 60000);  
                            
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas", "error");}
        });

	}

}




function guardarFotos3()
{

	var val=location.href.split("index=")[1];	

    if($("#my_file3_1").val()==""){ if( blob11 == "CAMARA"){	var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_3.png";	}else{ var val2 = ""; } 
    }else{  var val2 = document.getElementById('my_file3_1').files[0].name; }

    if($("#my_file3_2").val()==""){ if( blob12 == "CAMARA"){	var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_3.png";	}else{ var val3 = ""; } 
    }else{  var val3 = document.getElementById('my_file3_2').files[0].name; }

    if($("#my_file3_3").val()==""){ if( blob13 == "CAMARA"){	var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_3.png";	}else{ var val4 = ""; } 
    }else{  var val4 = document.getElementById('my_file3_3').files[0].name; }

    if($("#my_file3_4").val()==""){ if( blob14 == "CAMARA"){	var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_3.png";	}else{ var val5 = ""; } 
    }else{  var val5 = document.getElementById('my_file3_4').files[0].name; }

    if($("#my_file3_5").val()==""){ if( blob15 == "CAMARA"){	var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_3.png";	}else{ var val6 = ""; } 
    }else{  var val6 = document.getElementById('my_file3_5').files[0].name; }


	var val7=$("#descripcion_3").val();


  	var val8=$("#fecha_3").val();

		var anio=String(val8).substring(6,10); //2009
		var dia= String(val8).substring(0,2); //10
		var mes= String(val8).substring(3,5); //11

		var fecha=anio +'-'+ mes +'-'+ dia
		val8 = fecha;	

if(val2 == "image.jpg"){ var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_3.png"; }
if(val3 == "image.jpg"){ var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_3.png"; }
if(val4 == "image.jpg"){ var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_3.png"; }
if(val5 == "image.jpg"){ var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_3.png"; }
if(val6 == "image.jpg"){ var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_3.png"; }


    //Validamos que esten los campos llenos
    if(val2 == "" || val3 == "" || val4 == "" || val5 == "" || val6 == "" || val7 == "" || val8 == "--"){ swal("ERROR", "Existen campos vacios", "error");}
    else if( val2 == val3 || val2 == val4 || val2 == val5 || val2 == val6 || val3 == val4 || val3 == val5 || val3 == val6 || val4 == val5 || val4 == val6 || val5 == val6){ swal("ERROR", "Existen im\u00E1genes repetidas", "error");}
 	else{

        $.post("CRUD/actualizar_img_3.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 


            	$.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } });

               

                  if(blob11 == "CAMARA"){ 

	              
				    $.ajax({
				        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_DERECHO_FACIAL_3",
				        method: 'post',
				        data: { img: dataUrl11},
				        type: 'post',
				    }).done(function(retorno) {
				        //alert(retorno);
				        //alert("acierto");
				        //$( '#imagen' ).show();
				       
				    }).fail(function(retorno) {
					    //alert( retorno );
					    //alert("fallo");
					  });
 

               }
               else{	

	               	var file_data = $('#my_file3_1').prop('files')[0];
	               	var form_data = new FormData();                  
	                  form_data.append('file', file_data);
	                  //alert(form_data); 

	              var test =  location.href.split("index=")[1] + "_DERECHO_FACIAL_3.png"; 
	              if(val2 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_DERECHO_FACIAL_3"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

	                  $.ajax({
	                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_DERECHO_FACIAL_3", // point to server-side PHP script 
	                      url : urls,
	                      dataType: 'text',  // what to expect back from the PHP script, if anything
	                      cache: false,
	                      contentType: false,
	                      processData: false,
	                      data: form_data,                         
	                      type: 'post',
	                      success: function(php_script_response){
	                          //alert(php_script_response); // display response from the PHP script, if any
	                          //alert("guardada imagen");
	                        
	                      }
	                   });	 

               }

                     
                  


               if(blob12 == "CAMARA"){  

						          $.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_3",
							        method: 'post',
							        data: { img: dataUrl12},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							 
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });
			                       

                }
               else{	//var file_data = $('#my_file2_2').prop('files')[0];	 }

                  var file_data = $('#my_file3_2').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_3.png"; 
	              if(val3 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_3"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_3", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
					

                      }
                   });

              }


               if(blob13 == "CAMARA"){ 


               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_FRENTE_FACIAL_3",
							        method: 'post',
							        data: { img: dataUrl13},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
								    

							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                 }
               else{	//var file_data = $('#my_file1_3').prop('files')[0];	 }


                  var file_data = $('#my_file3_3').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_FRENTE_FACIAL_3.png"; 
	              if(val4 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_FRENTE_FACIAL_3"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_FRENTE_FACIAL_3", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                        
                      }
                   });

              }


               if(blob14 == "CAMARA"){ 

               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_3",
							        method: 'post',
							        data: { img: dataUrl14},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							      
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });

                  }
               else{	//var file_data = $('#my_file1_4').prop('files')[0];	 }


                  var file_data = $('#my_file3_4').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_3.png"; 
	              if(val5 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_3"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_3", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                          
                      }
                   });
              }


               if(blob15 == "CAMARA"){ 


               					$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_3",
							        method: 'post',
							        data: { img: dataUrl15},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                  }
               else{	//var file_data = $('#my_file1_5').prop('files')[0];	 }


                  var file_data = $('#my_file3_5').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);   

                  var test =  location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_3.png"; 
	              if(val6 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_3"; }  
	              else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_3", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                       
                      }
                   });

              }


              setTimeout(function(){ $.unblockUI(); swal(respuesta, "PLASTIC & BEAUTY", "success");} , 60000);              
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas", "error");}
        });

	}

}



function guardarFotos4()
{

	var val=location.href.split("index=")[1];	

    if($("#my_file4_1").val()==""){ if( blob16 == "CAMARA"){	var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_4.png";	}else{ var val2 = ""; }  
    }else{  var val2 = document.getElementById('my_file4_1').files[0].name; }

    if($("#my_file4_2").val()==""){ if( blob17 == "CAMARA"){	var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_4.png";	}else{ var val3 = ""; } 
    }else{  var val3 = document.getElementById('my_file4_2').files[0].name; }

    if($("#my_file4_3").val()==""){ if( blob18 == "CAMARA"){	var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_4.png";	}else{ var val4 = ""; } 
    }else{  var val4 = document.getElementById('my_file4_3').files[0].name; }

    if($("#my_file4_4").val()==""){ if( blob19 == "CAMARA"){	var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_4.png";	}else{ var val5 = ""; }   
    }else{  var val5 = document.getElementById('my_file4_4').files[0].name; }

    if($("#my_file4_5").val()==""){ if( blob20 == "CAMARA"){	var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_4.png";	}else{ var val6 = ""; } 
    }else{  var val6 = document.getElementById('my_file4_5').files[0].name; }

    if($("#my_file4_6").val()==""){ if( blob21 == "CAMARA"){	var val9 = location.href.split("index=")[1] + "_POSTERIOR_4.png";	}else{ var val9 = ""; }  
    }else{  var val9 = document.getElementById('my_file4_6').files[0].name; }



	var val7=$("#descripcion_4").val();


  	var val8=$("#fecha_4").val();

		var anio=String(val8).substring(6,10); //2009
		var dia= String(val8).substring(0,2); //10
		var mes= String(val8).substring(3,5); //11

		var fecha=anio +'-'+ mes +'-'+ dia
		val8 = fecha;	


if(val2 == "image.jpg"){ var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_4.png"; }
if(val3 == "image.jpg"){ var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_4.png"; }
if(val4 == "image.jpg"){ var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_4.png"; }
if(val5 == "image.jpg"){ var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_4.png"; }
if(val6 == "image.jpg"){ var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_4.png"; }
if(val9 == "image.jpg"){ var val9 = location.href.split("index=")[1] + "_POSTERIOR_4.png"; }


    //Validamos que esten los campos llenos
    if(val2 == "" || val3 == "" || val4 == "" || val5 == "" || val6 == "" || val7 == "" || val8 == "--" || val9 == "" ){ swal("ERROR", "Existen campos vacios", "error");}
    else if( val2 == val3 || val2 == val4 || val2 == val5 || val2 == val6 || val2 == val9 || val3 == val4 || val3 == val5 || val3 == val6 || val3 == val9 || val4 == val5 || val4 == val6 || val4 == val9 || val5 == val6 || val5 == val9 || val6 == val9){ swal("ERROR", "Existen im\u00E1genes repetidas", "error");}
 	else{

        $.post("CRUD/actualizar_img_4.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 


            	$.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } });

               

                if(blob16 == "CAMARA"){ 

	              
				    $.ajax({
				        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_DERECHO_FACIAL_4",
				        method: 'post',
				        data: { img: dataUrl16},
				        type: 'post',
				    }).done(function(retorno) {
				        //alert(retorno);
				        //alert("acierto");
				        //$( '#imagen' ).show();
				         
				    }).fail(function(retorno) {
					    //alert( retorno );
					    //alert("fallo");
					  });
 

               }
               else{	

	               	var file_data = $('#my_file4_1').prop('files')[0];
	               	var form_data = new FormData();                  
	                  form_data.append('file', file_data);
	                  //alert(form_data);  

	                  var test =  location.href.split("index=")[1] + "_DERECHO_FACIAL_4.png"; 
	              	  if(val2 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_DERECHO_FACIAL_4"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

	                  $.ajax({
	                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_DERECHO_FACIAL_4", // point to server-side PHP script 
	                      url : urls,
	                      dataType: 'text',  // what to expect back from the PHP script, if anything
	                      cache: false,
	                      contentType: false,
	                      processData: false,
	                      data: form_data,                         
	                      type: 'post',
	                      success: function(php_script_response){
	                          //alert(php_script_response); // display response from the PHP script, if any
	                          //alert("guardada imagen");
	                          
	                      }
	                   });	 

               }

                     
                  


               if(blob17 == "CAMARA"){  

						          $.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_4",
							        method: 'post',
							        data: { img: dataUrl17},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });
			                       

                }
               else{	//var file_data = $('#my_file2_2').prop('files')[0];	 }

                  var file_data = $('#my_file4_2').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_4.png"; 
	              	  if(val3 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_4"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_4", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
					      

                      }
                   });

              }


               if(blob18 == "CAMARA"){ 


               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_FRENTE_FACIAL_4",
							        method: 'post',
							        data: { img: dataUrl18},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
								    

							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                 }
               else{	//var file_data = $('#my_file1_3').prop('files')[0];	 }


                  var file_data = $('#my_file4_3').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);   

                  var test =  location.href.split("index=")[1] + "_FRENTE_FACIAL_4.png"; 
	              	  if(val4 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_FRENTE_FACIAL_4"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_FRENTE_FACIAL_4", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                          
                      }
                   });

              }


               if(blob19 == "CAMARA"){ 

               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_4",
							        method: 'post',
							        data: { img: dataUrl19},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							       
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });

                  }
               else{	//var file_data = $('#my_file1_4').prop('files')[0];	 }


                  var file_data = $('#my_file4_4').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_4.png"; 
	              	  if(val5 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_4"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_4", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                         
                      }
                   });
              }


               if(blob20 == "CAMARA"){ 


               					$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_4",
							        method: 'post',
							        data: { img: dataUrl20},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							       
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                  }
               else{	//var file_data = $('#my_file1_5').prop('files')[0];	 }


                  var file_data = $('#my_file4_5').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data); 

                  var test =  location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_4.png"; 
	              	  if(val6 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_4"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_4", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                         
                      }
                   });

              } 


              if(blob21 == "CAMARA"){ 


               					$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_POSTERIOR_4",
							        method: 'post',
							        data: { img: dataUrl21},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                  }
               else{	//var file_data = $('#my_file1_5').prop('files')[0];	 }


                  var file_data = $('#my_file4_6').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);    

                  var test =  location.href.split("index=")[1] + "_POSTERIOR_4.png"; 
	              	  if(val9 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_POSTERIOR_4"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_POSTERIOR_4", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                        
                      }
                   });

              }     


              setTimeout(function(){ $.unblockUI(); swal(respuesta, "PLASTIC & BEAUTY", "success");} , 60000);            
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas", "error");}
        });
	}


}




function guardarFotos5()
{

	var val=location.href.split("index=")[1];	

    if($("#my_file5_1").val()==""){ if( blob22 == "CAMARA"){	var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_5.png";	}else{ var val2 = ""; }   
    }else{  var val2 = document.getElementById('my_file5_1').files[0].name; }

    if($("#my_file5_2").val()==""){ if( blob23 == "CAMARA"){	var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_5.png";	}else{ var val3 = ""; }  
    }else{  var val3 = document.getElementById('my_file5_2').files[0].name; }

    if($("#my_file5_3").val()==""){ if( blob24 == "CAMARA"){	var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_5.png";	}else{ var val4 = ""; }  
    }else{  var val4 = document.getElementById('my_file5_3').files[0].name; }

    if($("#my_file5_4").val()==""){ if( blob25 == "CAMARA"){	var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_5.png";	}else{ var val5 = ""; }    
    }else{  var val5 = document.getElementById('my_file5_4').files[0].name; }

    if($("#my_file5_5").val()==""){ if( blob26 == "CAMARA"){	var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_5.png";	}else{ var val6 = ""; }  
    }else{  var val6 = document.getElementById('my_file5_5').files[0].name; }

    if($("#my_file5_6").val()==""){ if( blob27 == "CAMARA"){	var val9 = location.href.split("index=")[1] + "_POSTERIOR_5.png";	}else{ var val9 = ""; }   
    }else{  var val9 = document.getElementById('my_file5_6').files[0].name; }



	var val7=$("#descripcion_5").val();


  	var val8=$("#fecha_5").val();

		var anio=String(val8).substring(6,10); //2009
		var dia= String(val8).substring(0,2); //10
		var mes= String(val8).substring(3,5); //11

		var fecha=anio +'-'+ mes +'-'+ dia
		val8 = fecha;

if(val2 == "image.jpg"){ var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_5.png"; }
if(val3 == "image.jpg"){ var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_5.png"; }
if(val4 == "image.jpg"){ var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_5.png"; }
if(val5 == "image.jpg"){ var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_5.png"; }
if(val6 == "image.jpg"){ var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_5.png"; }
if(val9 == "image.jpg"){ var val9 = location.href.split("index=")[1] + "_POSTERIOR_5.png"; }


    //Validamos que esten los campos llenos
    if(val2 == "" || val3 == "" || val4 == "" || val5 == "" || val6 == "" || val7 == "" || val8 == "--" || val9 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    else if( val2 == val3 || val2 == val4 || val2 == val5 || val2 == val6 || val2 == val9 || val3 == val4 || val3 == val5 || val3 == val6  || val3 == val9  || val4 == val5 || val4 == val6 || val4 == val9 || val5 == val6 || val5 == val9 || val6 == val9){ swal("ERROR", "Existen im\u00E1genes repetidas", "error");}
 	else{

        $.post("CRUD/actualizar_img_5.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 


            	$.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } });

               

                if(blob22 == "CAMARA"){ 

	              
				    $.ajax({
				        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_DERECHO_FACIAL_5",
				        method: 'post',
				        data: { img: dataUrl22},
				        type: 'post',
				    }).done(function(retorno) {
				        //alert(retorno);
				        //alert("acierto");
				        //$( '#imagen' ).show();
				         
				    }).fail(function(retorno) {
					    //alert( retorno );
					    //alert("fallo");
					  });
 

               }
               else{	

	               	var file_data = $('#my_file5_1').prop('files')[0];
	               	var form_data = new FormData();                  
	                  form_data.append('file', file_data);
	                  //alert(form_data); 

	                  var test =  location.href.split("index=")[1] + "_DERECHO_FACIAL_5.png"; 
	              	  if(val2 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_DERECHO_FACIAL_5"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

	                  $.ajax({
	                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_DERECHO_FACIAL_5", // point to server-side PHP script 
	                      url : urls,
	                      dataType: 'text',  // what to expect back from the PHP script, if anything
	                      cache: false,
	                      contentType: false,
	                      processData: false,
	                      data: form_data,                         
	                      type: 'post',
	                      success: function(php_script_response){
	                          //alert(php_script_response); // display response from the PHP script, if any
	                          //alert("guardada imagen");
	                         
	                      }
	                   });	 

               }

                     
                  


               if(blob23 == "CAMARA"){  

						          $.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_5",
							        method: 'post',
							        data: { img: dataUrl23},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });
			                       

                }
               else{	//var file_data = $('#my_file2_2').prop('files')[0];	 }

                  var file_data = $('#my_file5_2').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data); 

                  var test =  location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_5.png"; 
	              	  if(val3 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_5"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_5", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
					     

                      }
                   });

              }


               if(blob24 == "CAMARA"){ 


               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_FRENTE_FACIAL_5",
							        method: 'post',
							        data: { img: dataUrl24},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
								    

							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                 }
               else{	//var file_data = $('#my_file1_3').prop('files')[0];	 }


                  var file_data = $('#my_file5_3').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_FRENTE_FACIAL_5.png"; 
	              	  if(val4 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_FRENTE_FACIAL_5"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_FRENTE_FACIAL_5", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                         
                      }
                   });

              }


               if(blob25 == "CAMARA"){ 

               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_5",
							        method: 'post',
							        data: { img: dataUrl25},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });

                  }
               else{	//var file_data = $('#my_file1_4').prop('files')[0];	 }


                  var file_data = $('#my_file5_4').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data); 

                  var test =  location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_5.png"; 
	              	  if(val5 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_5"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_5", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                           
                      }
                   });
              }


               if(blob26 == "CAMARA"){ 


               					$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_5",
							        method: 'post',
							        data: { img: dataUrl26},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                  }
               else{	//var file_data = $('#my_file1_5').prop('files')[0];	 }


                  var file_data = $('#my_file5_5').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data); 

                  var test =  location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_5.png"; 
	              	  if(val6 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_5"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_5", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                          
                      }
                   });

              } 


              if(blob27 == "CAMARA"){ 


               					$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_POSTERIOR_5",
							        method: 'post',
							        data: { img: dataUrl27},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                  }
               else{	//var file_data = $('#my_file1_5').prop('files')[0];	 }


                  var file_data = $('#my_file5_6').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);

                  var test =  location.href.split("index=")[1] + "_POSTERIOR_5.png"; 
	              	  if(val9 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_POSTERIOR_5"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_POSTERIOR_5", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                          
                      }
                   });

              }


               setTimeout(function(){ $.unblockUI(); swal(respuesta, "PLASTIC & BEAUTY", "success");} , 60000);   
              

            }
            else{ swal(respuesta, "Intentelo una vez mas", "error");}
        });
	}


}




function guardarFotos6()
{

	var val=location.href.split("index=")[1];	

    if($("#my_file6_1").val()==""){ if( blob28 == "CAMARA"){	var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_6.png";	}else{ var val2 = ""; }   
    }else{  var val2 = document.getElementById('my_file6_1').files[0].name; }

    if($("#my_file6_2").val()==""){ if( blob29 == "CAMARA"){	var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_6.png";	}else{ var val3 = ""; }   
    }else{  var val3 = document.getElementById('my_file6_2').files[0].name; }

    if($("#my_file6_3").val()==""){ if( blob30 == "CAMARA"){	var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_6.png";	}else{ var val4 = ""; }  
    }else{  var val4 = document.getElementById('my_file6_3').files[0].name; }

    if($("#my_file6_4").val()==""){ if( blob31 == "CAMARA"){	var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_6.png";	}else{ var val5 = ""; }   
    }else{  var val5 = document.getElementById('my_file6_4').files[0].name; }

    if($("#my_file6_5").val()==""){ if( blob32 == "CAMARA"){	var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_6.png";	}else{ var val6 = ""; }   
    }else{  var val6 = document.getElementById('my_file6_5').files[0].name; }

    if($("#my_file6_6").val()==""){ if( blob33 == "CAMARA"){	var val9 = location.href.split("index=")[1] + "_POSTERIOR_6.png";	}else{ var val9 = ""; }   
    }else{  var val9 = document.getElementById('my_file6_6').files[0].name; }



	var val7=$("#descripcion_6").val();


  	var val8=$("#fecha_6").val();

		var anio=String(val8).substring(6,10); //2009
		var dia= String(val8).substring(0,2); //10
		var mes= String(val8).substring(3,5); //11

		var fecha=anio +'-'+ mes +'-'+ dia
		val8 = fecha;

if(val2 == "image.jpg"){ var val2 = location.href.split("index=")[1] + "_DERECHO_FACIAL_6.png"; }
if(val3 == "image.jpg"){ var val3 = location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_6.png"; }
if(val4 == "image.jpg"){ var val4 = location.href.split("index=")[1] + "_FRENTE_FACIAL_6.png"; }
if(val5 == "image.jpg"){ var val5 = location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_6.png"; }
if(val6 == "image.jpg"){ var val6 = location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_6.png"; }
if(val9 == "image.jpg"){ var val9 = location.href.split("index=")[1] + "_POSTERIOR_6.png"; }			

    //Validamos que esten los campos llenos
    if(val2 == "" || val3 == "" || val4 == "" || val5 == "" || val6 == "" || val7 == "" || val8 == "--" || val9 == ""){ swal("ERROR", "Existen campos vacios", "error");}
    else if( val2 == val3 || val2 == val4 || val2 == val5 || val2 == val6 || val2 == val9 || val3 == val4 || val3 == val5 || val3 == val6  || val3 == val9  || val4 == val5 || val4 == val6 || val4 == val9 || val5 == val6 || val5 == val9 || val6 == val9){ swal("ERROR", "Existen im\u00E1genes repetidas", "error");}
 	else{

        $.post("CRUD/actualizar_img_6.php",{"texto":val, "texto2":val2, "texto3":val3, "texto4":val4, "texto5":val5, "texto6":val6, "texto7":val7, "texto8":val8, "texto9":val9},function(respuesta){
            //alert(respuesta);
            if(respuesta == "REGISTRO GUARDADO") { 


            	$.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } });

               

                if(blob28 == "CAMARA"){ 

	              
				    $.ajax({
				        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_DERECHO_FACIAL_6",
				        method: 'post',
				        data: { img: dataUrl28},
				        type: 'post',
				    }).done(function(retorno) {
				        //alert(retorno);
				        //alert("acierto");
				        //$( '#imagen' ).show();
				           
				    }).fail(function(retorno) {
					    //alert( retorno );
					    //alert("fallo");
					  });
 

               }
               else{	

	               	var file_data = $('#my_file6_1').prop('files')[0];
	               	var form_data = new FormData();                  
	                  form_data.append('file', file_data);
	                  //alert(form_data);

	                  var test =  location.href.split("index=")[1] + "_DERECHO_FACIAL_6.png"; 
	              	  if(val2 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_DERECHO_FACIAL_6"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

	                  $.ajax({
	                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_DERECHO_FACIAL_6", // point to server-side PHP script 
	                      url : urls,
	                      dataType: 'text',  // what to expect back from the PHP script, if anything
	                      cache: false,
	                      contentType: false,
	                      processData: false,
	                      data: form_data,                         
	                      type: 'post',
	                      success: function(php_script_response){
	                          //alert(php_script_response); // display response from the PHP script, if any
	                          //alert("guardada imagen");
	                            
	                      }
	                   });	 

               }

                     
                  


               if(blob29 == "CAMARA"){  

						          $.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_6",
							        method: 'post',
							        data: { img: dataUrl29},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							         
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });
			                       

                }
               else{	//var file_data = $('#my_file2_2').prop('files')[0];	 }

                  var file_data = $('#my_file6_2').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_3_4DERECHO_FACIAL_6.png"; 
	              	  if(val3 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_6"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4DERECHO_FACIAL_6", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
					      

                      }
                   });

              }


               if(blob30 == "CAMARA"){ 


               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_FRENTE_FACIAL_6",
							        method: 'post',
							        data: { img: dataUrl30},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
								    

							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                 }
               else{	//var file_data = $('#my_file1_3').prop('files')[0];	 }


                  var file_data = $('#my_file6_3').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);   

                  var test =  location.href.split("index=")[1] + "_FRENTE_FACIAL_6.png"; 
	              	  if(val4 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_FRENTE_FACIAL_6"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_FRENTE_FACIAL_6", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                          
                      }
                   });

              }


               if(blob31 == "CAMARA"){ 

               				$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_6",
							        method: 'post',
							        data: { img: dataUrl31},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });

                  }
               else{	//var file_data = $('#my_file1_4').prop('files')[0];	 }


                  var file_data = $('#my_file6_4').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data); 

                  var test =  location.href.split("index=")[1] + "_3_4IZQUIERDO_FACIAL_6.png"; 
	              	  if(val5 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_6"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_3_4IZQUIERDO_FACIAL_6", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                           
                      }
                   });
              }


               if(blob32 == "CAMARA"){ 


               					$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_6",
							        method: 'post',
							        data: { img: dataUrl32},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							        
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                  }
               else{	//var file_data = $('#my_file1_5').prop('files')[0];	 }


                  var file_data = $('#my_file6_5').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);   

                  var test =  location.href.split("index=")[1] + "_IZQUIERDO_FACIAL_6.png"; 
	              	  if(val6 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_6"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_IZQUIERDO_FACIAL_6", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                           
                      }
                   });

              } 


              if(blob33 == "CAMARA"){ 


               					$.ajax({
							        url: 'CRUD/guardarImg_prac2.php?index='+val+"&nombre=_POSTERIOR_6",
							        method: 'post',
							        data: { img: dataUrl33},
							        type: 'post',
							    }).done(function(retorno) {
							        //alert(retorno);
							        //alert("acierto");
							        //$( '#imagen' ).show();
							         
							    }).fail(function(retorno) {
								    //alert( retorno );
								    //alert("fallo");
								  });


                  }
               else{	//var file_data = $('#my_file1_5').prop('files')[0];	 }


                  var file_data = $('#my_file6_6').prop('files')[0];   
                  var form_data = new FormData();                  
                  form_data.append('file', file_data);
                  //alert(form_data);  

                  var test =  location.href.split("index=")[1] + "_POSTERIOR_6.png"; 
	              	  if(val9 == test){ var urls = 'CRUD/guardarImg_prac3.php?index='+val+"&nombre=_POSTERIOR_6"; }  
	              	  else{ var urls = 'CRUD/guardarImg_prac.php'; }

                  $.ajax({
                      //url: 'CRUD/guardarImg_prac.php?index='+val+"&nombre=_POSTERIOR_6", // point to server-side PHP script 
                      url : urls,
                      dataType: 'text',  // what to expect back from the PHP script, if anything
                      cache: false,
                      contentType: false,
                      processData: false,
                      data: form_data,                         
                      type: 'post',
                      success: function(php_script_response){
                          //alert(php_script_response); // display response from the PHP script, if any
                          //alert("guardada imagen");
                          
                      }
                   });

              } 


              setTimeout(function(){ $.unblockUI(); swal(respuesta, "PLASTIC & BEAUTY", "success");} , 60000);          
              
              

            }
            else{ swal(respuesta, "Intentelo una vez mas", "error");}
        });
	}


}



