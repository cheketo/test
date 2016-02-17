<?php 
	
	//$pepe = "Carlos";
	/* Esto es 
	Un comentario de varias
	lineas */
	$pepe = $_GET['pepe'];
	$numero = $_GET['puntero'];
	$boolean = true;
	$cadenaDeCaracteres = "adsasdad";
	$vector[0] = "Miameeeee";
	$vector[1] = "Riqui";
	$vector[2] = "Fort";
?>
<html>
	<head>
		<title><?php echo $pepe; ?></title>
	</head>
	<body>
		<?php
			echo '<div align="center">This is a edited PHP file</div>';
			echo '<div>'.$vector[$numero].'</div>';
		?>
	</body>
</html>
