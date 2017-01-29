<?php
	/**
	* Ejemplo 1 del curso de MVC de PHP
	*/
	class Freelance
	{
		/**
		 * Función de la clase desarrollar.
		 */
		public function desarrollar()
		{
			echo "Comienza a trabajar";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de clase Freelance</title>
</head>
<body>
	<?php
		$freelance = new Freelance();
		$freelance->desarrollar();
	?>
</body>
</html>