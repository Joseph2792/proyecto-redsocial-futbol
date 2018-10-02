<?php
	session_start();
	session_destroy();
	setcookie('userLogged', '', time() - 100);

	header('location: login-Registro.php');
	exit;
    ?>