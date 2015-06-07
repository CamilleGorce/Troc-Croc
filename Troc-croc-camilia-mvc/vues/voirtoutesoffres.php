<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>Accueil</title>

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>


    <div id="accueil"><h4>Achat</h4></div>
    
    <hr>

<?php

require('modeles/annonce.php');

$req = Annonce::getAllAnnonce();

while ($value = $req->fetch()) {
  ?>
<div class='banane'>
</br>
</br>
  <img class="cube2" src="<?= $value['nom'] ?>.jpg"/> 
  <?php
  echo 'Nom : '.$value['nom'].'</br>';
  echo 'Description du produit : '.$value['description'].'</br>';
  echo 'Prix : '.$value['prix'].' €/kg'.'</br>';
  echo 'Quantité disponible : '.$value['quantité'].' kg'."</br>";
  echo 'Département : '.$value['departement'].'</br>';
  echo 'Possibilité de troc : '.$value['troc'].'</br>';
  echo 'Vendeur : '.$value['pseudo']."</br>";
  echo 'Date de l\'annonce : '.$value['date'].'</br>';


?>
</div>
<?php

}
?>



</body>
</html>


