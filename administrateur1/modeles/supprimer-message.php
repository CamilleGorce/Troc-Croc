<?php 
	include_once('Forum.php');
	
	$id_message = $_GET["id_message"];
	$resultat = Forum::supprimer_message($id_message);
	if($resultat){
		header('Location: index.php?page=gerer_message');
	}
?>