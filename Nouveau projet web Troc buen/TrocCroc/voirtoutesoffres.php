<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>Accueil</title>

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <?php include("header.php"); ?>

    <div id="accueil"><h4>Achat</h4></div>
    
    <hr>

<?php

require('Class/annonce.php');
require('Class/flash.php');

$req = Annonce::getAllAnnonce();

while ($value = $req->fetch()) {?>

	<img class="cube2" src="<?= $value['nom'] ?>.jpg"/> </br>
	<?php
	echo 'Nom : '.$value['nom'].'</br>';
	echo 'Description du produit : '.$value['description'].'</br>';
	echo 'Prix (/kg) : '.$value['prix'].'</br>';
	echo 'Possibilité de troc : '.$value['troc'].'</br>';
	echo 'Date de l\'annonce : '.$value['date'].'</br></br></br>';

}
?>