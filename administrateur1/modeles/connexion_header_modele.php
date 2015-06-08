<?php
session_start();

include('connexion_bdd.php');

$pass_bo=md5($_POST['pass_bo']);
$pseudo_bo=$_POST['pseudo_bo'];

$bdd_bo = Connexion::connectBdd();
$sql="SELECT * FROM utilisateur WHERE motdepasse='$pass_bo' AND pseudo='$pseudo_bo' AND admin='1'";
$req=$bdd_bo->prepare($sql);
$req->execute();

if($req->rowCount()==1){
	while($donnees=$req->fetch()){
	$_SESSION['id']=$donnees['id_membre'];
	$_SESSION['mail']=$donnees['mail'];
	$_SESSION['pseudo']=$donnees['pseudo'];
	$_SESSION['admin']=$donnees['admin'];
}
	echo "Connecté!!!";
	header('location:../index.php');
	


}else{
	echo "Mauvais identifiant !";
}


?>