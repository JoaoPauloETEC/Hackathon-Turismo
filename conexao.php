<?php
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = 'usbw';
	$banco = 'db_lennus';
	// Conecta-se ao banco de dados MySQL
	$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
	
	if(mysqli_connect_errno())
	{
		trigger_error(mysqli_connect_error());
	}
?>