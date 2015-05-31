<?php 
/*ini_set('display_errors', 1);
ini_set("diplay_sartup_errors", 1);
error_reporting(-1);*/

require('Class/annonce.php');
require('Class/flash.php');



//$date = date('Y-m-d H:i:s');



if (isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['description']) && isset($_POST['troc'])){
	Annonce::insertannonce($_POST['nom'],$_POST['prix'],$_POST['description'],$_POST['troc']);
	//setFlash('Votre annonce a été enregistrée !', 'error');
}



?>

<!-- Select * from annonce where departement = id -->

<DOCTYPE html>
<html>
<head>
	<title>Annonce</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="POST" action="annonces.php">
<label for="nom">Produit :</label>
<input type="text" name="nom" id="nom"/>
</br>
<label for="prix">Prix (/kg) :</label>
<input type="text" name="prix" id="prix"/>
</br>
<label for="description">Description du produit :</label>
<input type="textarea" name="description" id="description"/>
</br>
<p> Possibilité de troc :</p>
<label>Oui</label>
<input type="radio" name="troc" id="troc" value="oui"/>
<label>Non</label>
<input type="radio" name="troc" id="troc" value="non"/>
</br>
<button type ="submit" name="bouton" value="valider">Valider</button>

<a href="voirtoutesoffres.php">Voir toutes les offres</a>


</form>
</body>