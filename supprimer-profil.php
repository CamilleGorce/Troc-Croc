<?php 
	include_once('Class/Membre.php');
	$id_membre = $_GET["id"];
	$resultat = Membre::supprimer($id_membre);
	if($resultat)
		header('Location: accueil.php?mode=1');

?>