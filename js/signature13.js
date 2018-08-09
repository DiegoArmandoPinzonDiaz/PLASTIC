
(function() {
	
	// Get a regular interval for drawing to the screen
	window.requestAnimFrame = (function (callback) {
		return window.requestAnimationFrame || 
					window.webkitRequestAnimationFrame ||
					window.mozRequestAnimationFrame ||
					window.oRequestAnimationFrame ||
					window.msRequestAnimaitonFrame ||
					function (callback) {
					 	window.setTimeout(callback, 1000/60);
					};
	})();


/* canvas = document.getElementById("myCanvas");
   ctx = canvas.getContext('2d');
	ctx.drawImage(video, 0,0, canvas.width, canvas.height);
  $('#imgSalida-1_4').attr("src",canvas.toDataURL());
  var context = canvas.getContext("2d");
  dataUrl4 = canvas.toDataURL("image/png");

*/


	// Set up the canvas
	var canvas = document.getElementById("sig-canvas13");
	var ctx = canvas.getContext("2d");


	//ctx.rect(0, 0, canvas.width, canvas.height);
	//ctx.strokeStyle = "black";
	//ctx.fillStyle="white";
	ctx.strokeStyle = "BLACK";
	ctx.lineWidth = 3;
	//ctx.fill();



	// Set up the UI
	var sigText = document.getElementById("sig-dataUrl");
	//var sigImage = document.getElementById("firma");
	var clearBtn = document.getElementById("sig-clearBtn13");
	var submitBtn = document.getElementById("sig_submitBtn13");
	clearBtn.addEventListener("click", function (e) {

		clearCanvas();

		//ctx.strokeStyle = "BLUE";
		//sigText.innerHTML = "Data URL for your signature will go here!";
		// sigImage.setAttribute("src", "");
	}, false);


	submitBtn.addEventListener("click", function (e) {

		var dataUrl = canvas.toDataURL("image/png");
		//$('#img_firma').attr("src",canvas.toDataURL());
		//sigText.innerHTML = dataUrl;
		//sigImage.setAttribute("src", dataUrl);
//AQUIIII
		//$('#firma').attr("src",canvas.toDataURL());

		
		var val = location.href.split("index=")[1];

		 			$.ajax({
				        url: 'CRUD/guardarImg_prac4.php?index='+val+"&nombre=_firma",
				        method: 'post',
				        data: { img: dataUrl},
				        type: 'post',
				    }).done(function(retorno) {
				        //alert(retorno);
				        //alert("acierto");
				        //$( '#imagen' ).show();

					        var val = location.href.split("index=")[1];
							$('#firma_paciente_indicaciones').attr("src",'firmas/'+val+"_firma.png");

							$("#firma_indicaciones").css("display", "none");
							$("#firma_paciente_indicaciones").css("display", "block");
							//$("#generar_facial").css("display", "block");
							

							$("#commentPictureModal13").modal('hide');
							$("#INDICACIONES_VISTA").modal('show');

							disableScroll();
				        
				    }).fail(function(retorno) {
					    alert( retorno );
					    //alert("fallo");
					  });



				
		//$("#myModalIMAGENES").modal('hide');
		//$("#boton_generarpdf").css('visibility', 'visible');
		//$("#boton_firmar").css('visibility', 'hidden');

		//generarPDF8();


	}, false);

	// Set up mouse events for drawing
	var drawing = false;
	var mousePos = { x:0, y:0 };
	var lastPos = mousePos;
	canvas.addEventListener("mousedown", function (e) {
		drawing = true;
		lastPos = getMousePos(canvas, e);
	}, false);
	canvas.addEventListener("mouseup", function (e) {
		drawing = false;
	}, false);
	canvas.addEventListener("mousemove", function (e) {
		mousePos = getMousePos(canvas, e);
	}, false);

	// Set up touch events for mobile, etc
	canvas.addEventListener("touchstart", function (e) {
		mousePos = getTouchPos(canvas, e);
		var touch = e.touches[0];
		var mouseEvent = new MouseEvent("mousedown", {
			clientX: touch.clientX,
			clientY: touch.clientY
		});
		canvas.dispatchEvent(mouseEvent);
	}, false);
	canvas.addEventListener("touchend", function (e) {
		var mouseEvent = new MouseEvent("mouseup", {});
		canvas.dispatchEvent(mouseEvent);
	}, false);
	canvas.addEventListener("touchmove", function (e) {
		var touch = e.touches[0];
		var mouseEvent = new MouseEvent("mousemove", {
			clientX: touch.clientX,
			clientY: touch.clientY
		});
		canvas.dispatchEvent(mouseEvent);
	}, false);

	// Prevent scrolling when touching the canvas
	document.body.addEventListener("touchstart", function (e) {
		if (e.target == canvas) {
			e.preventDefault();
		}
	}, false);
	document.body.addEventListener("touchend", function (e) {
		if (e.target == canvas) {
			e.preventDefault();
		}
	}, false);
	document.body.addEventListener("touchmove", function (e) {
		if (e.target == canvas) {
			e.preventDefault();
		}
	}, false);



	function disableScroll() {
	  if (window.addEventListener) // older FF
	      window.addEventListener('DOMMouseScroll', preventDefault, false);
	  window.onwheel = preventDefault; // modern standard
	  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
	  window.ontouchmove  = preventDefault; // mobile
	  document.onkeydown  = preventDefaultForScrollKeys;
	}



	// Get the position of the mouse relative to the canvas
	function getMousePos(canvasDom, mouseEvent) {
		var rect = canvasDom.getBoundingClientRect();
		return {
			x: mouseEvent.clientX - rect.left,
			y: mouseEvent.clientY - rect.top
		};
	}

	// Get the position of a touch relative to the canvas
	function getTouchPos(canvasDom, touchEvent) {
		var rect = canvasDom.getBoundingClientRect();
		return {
			x: touchEvent.touches[0].clientX - rect.left,
			y: touchEvent.touches[0].clientY - rect.top
		};
	}

	// Draw to the canvas
	function renderCanvas() {
		if (drawing) {
			ctx.moveTo(lastPos.x, lastPos.y);
			ctx.lineTo(mousePos.x, mousePos.y);
			ctx.stroke();
			lastPos = mousePos;
		}
	}

	function clearCanvas() {
		canvas.width = canvas.width;
	}

	// Allow for animation
	(function drawLoop () {
		requestAnimFrame(drawLoop);
		renderCanvas();
	})();

})();