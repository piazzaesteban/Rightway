<?php 

	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	
	$output = shell_exec('Rscript g_aptitudes.R');

	echo $output;

?>