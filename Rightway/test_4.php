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
	
	<nav class="navbar navbar-fixed-top navbar-color-on-scroll navbar-transparent">
    
    	<div class="container">

    		<div class="navbar-header">

        		<a class="navbar-brand"><img src="logo_4.png" style="height:60px; width:230px; margin-top: -15px;"/></a>

        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
    
        		<ul class="nav navbar-nav navbar-right">
	
					<li>
    					<a href="home.php">Home</a>
    				</li>

					<li>
    					<a href="perfil.php">Tu Perfil</a>
    				</li>

					<li>
    					<a href="cerrar_sesion.php">Cerrar Sesión</a>
    				</li>
    
        		</ul>
    
        	</div>
    
    	</div>
    
    </nav>

    <div class="wrapper">

    	<div class="header header-filter" style="background-image: url('assets/img/bg.jpg'); height: 500px;">
			
			<div class="container">
			
				<div class="row">
				
					<div class="title text-center">
					
						<h1>Velocidad de Percepción</h1>	

						<h5>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn.<br>safsafsfas asdfsafsafsaf asfsafasfasf</h5>
							
						<button class="btn btn-primary btn-lg" onclick="startMiniGame();">Comenzar la Prueba<div class="ripple-container"></div></button>

					
					</div>
			
				</div>
		
			</div>
		
		</div>

		<div class="main main-raised">

			<div class="section">
	    
	            <div class="container">
	    
	                <div class="description text-center">

	                	<p id="test" style="color:#FFFFFF; margin-bottom: 100px;">asfsf</p>

	                        <img id="arrow" src="assets/img/circulo.png" alt="Rounded Image" class="img-rounded img-raised img-responsive">
	                    
	                    </a>

	                    <br><br>
						
						<div>
	                    	<h4>Instrucciones: Si las flechas son <span style="color: #000; font-weight: bold;">negras</span> usa las flechas de tu teclado para indicar la direccion de las flechas centrales. Si son de color <span style="color: #651C81; font-weight: bold;">morado</span> utiliza las flechas de tu teclado para indicar la dirección de las flechas externas.</h4>
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
	<script src="assets/js/juego.js" type="text/javascript"></script>
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
