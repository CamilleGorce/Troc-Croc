<?php 

if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['prix']) && isset($_POST['troc']) && isset($_POST['departement']) && isset($_POST['quantité'])){
	Annonce::insertannonce($_POST['nom'],$_POST['description'],$_POST['prix'],$_POST['troc'],$_POST['departement'],$_POST['quantité'],$_SESSION["id"]);
	echo "<div style='background-color: rgb(208, 255, 218);' id='alert' class='alert'>Votre annonce a été ajoutée<a style='float:right;cursor:pointer' onclick='closeAlert()' class='close'>x</a></div>";
}

 ?>