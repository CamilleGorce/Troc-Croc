<?php 

	include_once('Membre.php');
	$id_membre = $_GET["id"];
	$resultat = Membre::supprimer($id_membre);
	if($resultat)
		header('Location: index.php?page=gerer_membre_vue');

?>