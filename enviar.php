<?php
	$destino="miguelgarciabasilio@hotmail.com";	
	$nombre= $_POST["nombre"];
	$email= $_POST["email"];
	$texto= $_POST["texto"];
	$contenido= "Nombre: " . $nombre . "/n" ."Correo: " . $email . "/n" . "Mensaje :" . $texto;
	mail($destino,"Contacto",$contenido);
	header("Location:gracias.html");
?>