<?php
	$destinatario = 'ventas@rentapackec.com';
	$nombre = $_POST['fullname'];
	$correo = $_POST['email'];
	$telefono = $_POST['phone'];
	$asunto = $_POST['affair'];
	$mensaje = $_POST['message'];

	$header = "Enviado desde la página web de rentapackec";
	$mensajeCompleto = "Su email es :" . $correo . "\r\nTelefono de contacto: " . $telefono . "\r\nMensaje:" . $mensaje . "\nAtentamente: " . $nombre;
	mail($destinatario, $asunto, $mensajeCompleto, $header);
	echo "<script>alert('correo enviado exitosamente')</script>";
	echo "<script>setTimeout(\"location.href='contactos.html'\",1000)</script>";

?>