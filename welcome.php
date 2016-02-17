<?php 
//this is a PHP test
function welcomeToMac($Name="Nombre",$OtroParam="Valor Por Defecto del Parametro de la Funcion"){
	echo $Name.", this is what i'm talking about!";
	echo "<br>".$OtroParam."<br>"."<br>";
}

welcomeToMac();
welcomeToMac('Pepe','Vamo Pepe!');

?>