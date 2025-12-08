<?php
	//El nombre por defecto es mundo
	$nombre= isset($arg[1]) ? $arg[1] : "Mundo";	
	@print "Hola {$nombre}\n";
?>
