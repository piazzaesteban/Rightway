<?php 
	
	function end_session () {

		if (isset($_SESSION)) {
				
			session_unset();
			session_destroy();

		}

	}

	end_session();

	echo '<script>document.cookie = "PHPSESSID=;Path=/;expires=Thu, 01 Jan 1970 00:00:01 GMT;"; window.location.href = "iniciar_sesion.php";</script>';

?>	