<?php
 
	include_once('Forum.php');
	
	$id_sujet = $_GET["id_sujet"];
	$resultat = Forum::supprimer_sujet($id_sujet);
	if($resultat){
		header('Location: index.php?page=gerer_sujet');
	}
		

?>