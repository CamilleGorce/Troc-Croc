

<?php

	require('Class/Connexion.php');
	require('Class/flash.php');

/*ini_set('display_errors', 1);
ini_set("diplay_sartup_errors", 1);
error_reporting(-1);*/


$search=$_GET["search"];


$bdd = Connexion::connectBdd();
$sql=$bdd->query("SELECT * FROM annonce WHERE nom LIKE '%$search%'");?>


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

<div id="banane">
	<img src="<?= $search ?>.jpg" />
 	<?php echo "<p>".$show['nom']."</p>";  echo $show['description']; ?>
 
<!-- php echo -> = -->
</div>
<?php

}

?>


