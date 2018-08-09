

<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>PLASTIC & BEAUTY</title>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <link href="css/estilo.css" rel="stylesheet" type="text/css">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            

</head>

<body>

    <div id="login-form">

        <h1>PLASTIC & BEAUTY</h1>

        <fieldset>

            <form action="javascript:void(0);" method="get">

                <input type="email" id="Email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->

                <input type="password" id="Password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

                <input type="submit" value="Iniciar sesión" id="btn_autent" onclick="enviar()">

                <footer class="clearfix">                    

                </footer>

            </form>

        </fieldset>

    </div> <!-- end login-form -->


   <script type="text/javascript" src="js/funciones.js"></script>

</body>
</html>