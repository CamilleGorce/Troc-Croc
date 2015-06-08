<?php
session_start();
include('Connexion.php');
$pass=md5($_POST['pass']);
$pseudo=$_POST['pseudo'];

$bdd = Connexion::connectBdd();
$sql="SELECT * FROM utilisateur WHERE motdepasse='$pass' AND pseudo='$pseudo'";
$req=$bdd->prepare($sql);
$req->execute();

if($req->rowCount()==1){
	while($donnees=$req->fetch()){
	$_SESSION['id']=$donnees['id_membre'];
	$_SESSION['mail']=$donnees['mail'];
	$_SESSION['pseudo']=$donnees['pseudo'];
}
	echo "Connecté!!!";
	header('location:../index.php');
	


}else{
	echo "Mauvais identifiant !";
}


?>