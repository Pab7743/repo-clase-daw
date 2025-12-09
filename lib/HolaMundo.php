<?php
	class Hola Mundo
	{
		private $nombre;
		function __construct ($nombre)
		{
			$this.nombre=$nombre;
		}
		function __toString ()
		{
			return sprintf("hola, %s. \n", $this->nombre);
		}
	}

?>

