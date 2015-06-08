<?php 

include_once('Membre.php');
$id_membre = $_GET["id"];
$membre = new Membre($id_membre);
if($_POST){
	$verif = true;
	if(empty($_POST["pseudo"])){
		$verif = false;
		echo "Pas de pseudo<br/>";
	}
	if(empty($_POST["nom"])){
		$verif = false;
		echo "Pas de nom</br>";
	}
	if(empty($_POST["prenom"])){
		$verif = false;
		echo "Pas de prénom</br>";
	}
	if(empty($_POST["adresse"])){
		$verif = false;
		echo "Pas d'adresse</br>";
	}
	if(empty($_POST["cp"])){
		$verif = false;
		echo "Pas de code postal</br>";
	}
	if(empty($_POST["ville"])){
		$verif = false;
		echo "Pas de ville</br>";
	}
	if(empty($_POST["telephone"])){
		$verif = false;
		echo "Pas de téléphone</br>";
	}
	if(empty($_POST["mail"])){
		$verif = false;
		echo "Pas de mail</br>";
	}
	if(empty($_POST["sexe"])){
		$verif = false;
		echo "Pas de sexe</br>";
	}
		if(empty($_POST["admin"])){
		$verif = false;
		echo "Pas de admin</br>";
	}
	if($verif){
		$pass_md5 = md5($_POST["motdepasse"]);
		$user = array(
			'pseudo' => $_POST["pseudo"],
			'motdepasse' => $pass_md5,
			'nom' => $_POST["nom"],
			'prenom' => $_POST["prenom"],
			'adresse' => $_POST["adresse"],
			'cp' => $_POST["cp"],
			'ville' => $_POST["ville"],
			'telephone' => $_POST["telephone"],
			'mail' => $_POST["mail"],
			'sexe' => $_POST["sexe"],
			'admin' => $_POST["admin"],
			'id' => $id_membre
			);
		$resultat = Membre:: modifier($user);
		if($resultat)
			header('Location: ../index.php?page=profil');
	}
}
?>