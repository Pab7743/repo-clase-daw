<?php

	//Realizafo por: Pablo pablo@ejemplo.com
	//El nombre por defecto es "mundo"
	require('Hola Mundo.php');
	print "Introduce tu nombre";
	$nombre=trim(fgets(STDIN));
	print new HolaMundo($nombre);
?>
