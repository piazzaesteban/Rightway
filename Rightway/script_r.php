<?php 
	
	$output = shell_exec('Rscript g_aptitudes.R');

	echo $output;

?>