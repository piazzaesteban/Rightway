<?php 

	session_start();

	if(!isset($_SESSION["USUARIO_id"])){

		if (isset($_SESSION)) {
				
			session_unset();
			session_destroy();

		}

		header('Location: index.php');

	} 

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Rightway</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body class="components-page">
	
	<nav class="navbar navbar-info navbar-fixed-top navbar-color-on-scroll navbar-transparent">
    
    	<div class="container">

    		<div class="navbar-header">

        		<a class="navbar-brand"><img src="logo_4.png" style="height:60px; width:230px; margin-top: -15px;"/></a>

        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
    
        		<ul class="nav navbar-nav navbar-right">
	
					<li>
    					<a href="home.php">Inicio</a>
    				</li>

					<li>
    					<a href="pruebas.php">Pruebas</a>
    				</li>

    				<li>
    					<a href="perfil.php">Resultados</a>
    				</li>

					<li>
    					<a href="cerrar_sesion.php" style="color: #FFFFFF; font-weight: bold;">Cerrar Sesión</a>
    				</li>
    
        		</ul>
    
        	</div>
    
    	</div>
    
    </nav>

    <div class="wrapper">

    	<div class="header header-filter" style="background-image: url('assets/img/bg.jpg');">
			
			<div class="container">
			
				<div class="title text-center row">
					
						<h1>Tus Pruebas</h1>	

						<h5>En esta página podrás encontrar una varias pruebas que te ayudarán a<br> descubrir tu carrera y la mejor universidad para tu perfil.</h5>
					
					</div>
			
				</div>
		
			</div>
		
		</div>

		<div class="main main-raised">

			<div class="section">
	    
	            <div class="container">	              

					<div class="content" style="width: 85%; margin-left: 7.5%;">
					
						<div class="tab-content">
			
								<div class="title" style="color: #000;">
                    			
                    				<h3>Pruebas de Habilidades y Aptitudes</h3>
                				
                				</div>

                				<div class="progress progress-line-info">
                					
                					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                				
                    					<span class="sr-only">75% Complete</span>
                    				
                    				</div>
                				
                				</div>

								<h4 align="justify">Está demostrado que las personas obtienen mayoe satisfacción y éxito al desnvolverse en ambientes que les permitan por en práctica sus aptitues y habilidades.</h4>

								<a href="#" class="btn btn-default btn-raised" style="width: 24%;">Verbal <i class="fa fa-check" style="margin-left: 5px;"></i></a>

								<a href="#" class="btn btn-default btn-raised" style="width: 24%;">Numérico <i class="fa fa-check" style="margin-left: 5px;"></i></a>

								<a href="test_3.php" class="btn btn-info btn-raised" style="width: 24%;">Abstracto</a>

								<a href="test_4.php" class="btn btn-info btn-raised" style="width: 24%;">Velocidad de Percepción</a>

								<br>

						</div>

						<div class="tab-content">
			
								<div class="title" style="color: #000;">
                    			
                    				<h3>Pruebas de Inclinación Ocupacional</h3>
                				
                				</div>

                				<div class="progress progress-line-info">
                					
                					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                				
                    					<span class="sr-only">25% Complete</span>
                    				
                    				</div>
                				
                				</div>

								<h4 align="justify">Las inclinaciones ocupacionales están influenciadas por las experiencias que has tenio y por las habiliades y los intereses que has desarrollado.</h4>

								<a href="#" class="btn btn-default btn-raised" style="width: 24%;">Verbal <i class="fa fa-check" style="margin-left: 5px;"></i></a>

								<a href="#" class="btn btn-info btn-raised" style="width: 24%;">Numérico</a>

								<a href="#" class="btn btn-info btn-raised" style="width: 24%;">Abstracto</a>

								<a href="#" class="btn btn-info btn-raised" style="width: 24%;">Velocidad de Percepción</a>

								<br><br><br>

						</div>

						<div class="tab-content text-center">							

							<div class="title" style="color: #000;">
                			
                				<p style="font-size: 20px;">Si deseas conocer cual es tu carrera y universidad ideal da click <a href="registro.php" style="color: #51AEED">aqui</a>.</p>
            				
            				</div>

						</div>

					</div>

				</div>

	            </div>
	            
	        </div>

		</div>

    </div>

    <footer class="footer">
	    
        <div class="container">
    
            <div class="copyright pull-right">© 2017 Rightway</div>
    
        </div>
    
    </footer>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});

	</script>

</html>
