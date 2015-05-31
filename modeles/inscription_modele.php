<?php 
include_once('Membre.php');
if($_POST){
	$sexe = "";
	$pseudo ="";
	$nom = "";
	$prenom = "";
	$mail= "";
	$adresse="";
	$cp="";
	$ville="";
	$phone="";
	$verif = true;
	if(empty($_POST["sexe"])){
	$verif = false;
	$sexe = "Pas de sexe</br>";
	}
	if(empty($_POST["pseudo"])){
	$verif = false;
	$pseudo = "Pas de pseudo<br/>";
	}
	if(empty($_POST["nom"])){
	$verif = false;
	$nom = "Pas de nom</br>";
	}
	if(empty($_POST["prenom"])){
	$verif = false;
	$prenom= "Pas de prénom</br>";
	}
	if(empty($_POST["mail"])){
	$verif = false;
	$mail = "Pas de mail</br>";
	}
	if(empty($_POST["adresse"])){
	$verif = false;
	$adresse = "Pas d'adresse</br>";
	}
	if(empty($_POST["cp"])){
	$verif = false;
	$cp= "Pas de code postal</br>";
	}
	if(empty($_POST["ville"])){
	$verif = false;
	$ville = "Pas de ville</br>";
	}
	if(empty($_POST["telephone"])){
	$verif = false;
	$phone = "Pas de téléphone</br>";
	}
if($verif){
$pass_md5 = md5($_POST["motdepasse"]);
$new_user = array(
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
'admin' => 0
);
$resultat = Membre::sinscrire($new_user);
if(!$resultat){
	echo "Votre pseudo existe déjà !";
}

else{
echo "Vous êtes bien inscrit !";
header('location: ../index.php');
}
}
}
?>