<?php
// Gestion de la connexion SQL (avec ma méthode personnalisée)
$base    = "forumSimplon";
$serveur = "localhost";
$login   = "root";
$passe   = "";

// Connexion
$link = new mysqli($serveur, $login, $passe, $base);

// En cas d'erreur
if (mysqli_connect_error()) {
	die('Connexion impossible à Mysql ('.mysqli_connect_errno().') : '.mysqli_connect_error());
}
?>