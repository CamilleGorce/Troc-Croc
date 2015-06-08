

<?php

	require('Class/Connexion.php');
	require('Class/flash.php');

/*ini_set('display_errors', 1);
ini_set("diplay_sartup_errors", 1);
error_reporting(-1);*/


$searchdep=$_GET["searchdep"];


$bdd = Connexion::connectBdd();
$sql=$bdd->query("SELECT U.pseudo,U.id_membre, A.nom, A.description,A.prix,A.quantité,A.troc,A.departement,A.date FROM annonce A,utilisateur U WHERE A.departement LIKE '%$searchdep%'AND A.id_vendeur = U.id_membre");


?>


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
while($show=$sql->fetch()){
?>


	<img class='cube2'src="<?= $show['nom'] ?>.jpg" />
 	<?php
  echo 'Nom : '.$show['nom']."</br>"; 
  echo 'Description : '.$show['description']."</br>";
  echo 'Prix : '.$show['prix'].' €/kg'."</br>";
  echo 'Quantité disponible : '.$show['quantité'].' kg'."</br>";
  echo 'Département : '.$show['departement']."</br>";
  echo 'Possibilité de troc : '.$show['troc']."</br>";
  echo 'Date de l\'annonce : '.$show['date'].'</br>';
  echo 'Vendeur : <a href="profil?idmembre='.$show['id_membre'].'">'.$show['pseudo'].'</a></br></br></br>';
  ?>
 
<!-- php echo -> = -->

<?php

}

?>


