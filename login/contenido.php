<?php session_start(); #Todas las páginas que trabajen con sesiones deben llevar esta función.


if (isset($_SESSION['usuario'])) {
	require 'views/contenido.view.php';
} else {
	header('Location: login.php');
}






 ?>