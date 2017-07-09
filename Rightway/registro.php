<?php 

	ini_set('display_errors', 1); 
	error_reporting(E_ALL);

	require_once 'connection.php';

	$msg = '';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password'])) {
		
			if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password'])) {
				
				$nombre = $_POST["nombre"];
				$email = $_POST["email"];
				$password = $_POST["password"];
		
				if((!filter_var($email, FILTER_VALIDATE_EMAIL) === false)){

					$conn = ConnectToDatabase();

					$sql = 'SELECT u.USUARIO_id
							FROM USUARIO u
							WHERE email = :email;';

					$query = $conn->prepare($sql);
					$query->bindParam(':email', $email);
					$query->execute();

					$row = $query->fetch(PDO::FETCH_ASSOC);
					
					if (!isset($row['USUARIO_id'])){

						$sql = 'INSERT INTO USUARIO (email, password, nombre) VALUES (:email, :password, :nombre);';
						$query = $conn->prepare($sql);
						$query->bindParam(':email', $email);
						$query->bindParam(':password', $password);
						$query->bindParam(':nombre', $nombre);
						
						if($query->execute()) {

							header('Location: iniciar_sesion.php');

						} else {

							$msg = "Ocurrió un error al dar de alta tu cuenta. Por favor vuelve a intentar";

						}

					} else {

						$msg = 'La cuenta de correo ya está registrada.';

					}

				} else {

					$msg = 'El correo electrónico no es válido.';
				}

			} else {

				$msg = 'Por favor llena todos los campos.';
			} 

		} else { 

			$msg = 'Ocurrió un error';

		}

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

<body class="signup-page">

	<nav class="navbar navbar-transparent navbar-absolute">

    	<div class="container">

        	<div class="navbar-header">
        
        		<a class="navbar-brand"><img src="logo_4.png" style="height:60px; width:230px; margin-top: -15px;"/></a>
        
        	</div>

    	</div>

    </nav>

    <div class="wrapper">

        <div class="section section-full-screen header header-filter" style="background-image: url('assets/img/city.jpg'); background-size: cover; background-position: top center; min-height: 700px;">

			<div class="container">
		
				<div class="row">

					<div class="col-md-4 col-md-offset-4">
				
						<div class="card card-signup">
				
							<form class="form" action='registro.php' method="POST">
				
								<div class="header header-primary text-center">
				
									<h4>Bienvenido</h4>

								</div>

								<div class="content">

									<div class="text-center">

										<br>

										<p style="color: #FF0000"><?php echo $msg; ?></p>

									</div>

									<div class="input-group">

										<span class="input-group-addon">
									
											<i class="material-icons">account_box</i>
									
										</span>
									
										<div class="form-group is-empty"><input name="nombre" type="text" class="form-control" placeholder="Nombre"><span class="material-input"></span></div>
									
									</div>

									<div class="input-group">

										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>

										<div class="form-group is-empty"><input name="email" type="text" class="form-control" placeholder="Correo Electrónico"><span class="material-input"></span></div>

									</div>

									<div class="input-group">

										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>

										<div class="form-group is-empty"><input name="password" type="password" placeholder="Contraseña" class="form-control"><span class="material-input"></span></div>

									</div>

								</div>

								<div class="footer text-center">

									<input type="submit" class="btn btn-simple btn-primary btn-lg" value="Registrarse">

									<p>Ya tienes cuenta? Inicias sesión <a href="iniciar_sesion.php" style="color: #B435E5">aqui</a>.</p>

									<br>

								</div>

							</form>

						</div>

					</div>
				</div>
			</div>
		</div>

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

			$('.datepicker').datepicker({ weekStart:1 });

		});

	</script>

</html>
