<?php 
	include_once('Annonce.php');
	
	$id_annonce = $_GET["id_annonce"];
	$resultat = Annonce::supprimer($id_annonce);
	if($resultat)
		header('Location: index.php?page=gerer_annonce_vue');

?>