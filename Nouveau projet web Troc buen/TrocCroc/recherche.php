<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/style.css">
<title>recherche</title>
</head>
<body>

<?php include("header.php"); ?>

<div id="accueil"><h4>Achat</p></div>

<hr>
<div class="rechercher">
<br/><p>Faites votre recherche</p>
</div>
<div>
<form action="recherche.php" method="post">
<p> <input class="barresearch" type="text" name="produitrecherche" placeholder=" Recherchez un produit" /> <br/><br/>
<input class="submit" type="submit" value="Entrer"/></p>
</br>
</br>
    <h4 id="histoire"><a href="voirtoutesoffres.php" style='text-decoration:underline'>Voir toutes les offres</a></h4>
</form>
</div>
<?php 
//connexion a la base de données
try
{
$bdd=new PDO('mysql:host=localhost; dbname=trocandcroc; charset=utf8', 'root', 'root');
}
catch(Exception $e)
//en cas d'erreur
{
die('Erreur: ' .$e->getMessage());
}

if (!empty($_POST['produitrecherche']) OR (isset($_POST['produitrecherche']) AND $_POST['produitrecherche']!=NULL)){
	// une fois que j'ai enregistré la recherche dans une nouvelle bdd, je dois la réutiliser pour la comparer les nom_produit de produit.
$requete=htmlspecialchars($_POST['produitrecherche']);
$resultat=$bdd->query("SELECT U.pseudo,U.id_membre, A.nom, A.description,A.prix,A.quantité,A.troc,A.departement,A.date FROM annonce A,utilisateur U WHERE A.nom LIKE '%$requete%' AND A.id_vendeur = U.id_membre");

?>
<br/>
<br/>
<br/>
<div class="resultat_requete">
<p class="search"> Résultats de votre recherche: </p> <br/><br/>
<?php
while ($donnees=$resultat->fetch()){
//afficher les résultats trouvés
	?>
<div class='banane'>
</br>
</br>
	<img class='cube2'src="<?= $requete ?>.jpg" />
 	<?php
  echo 'Nom : '.$donnees['nom']."</br>"; 
  echo 'Description : '.$donnees['description']."</br>";
  echo 'Prix : '.$donnees['prix'].' €/kg'."</br>";
  echo 'Quantité disponible : '.$donnees['quantité'].' kg'."</br>";
  echo 'Département : '.$donnees['departement']."</br>";
  echo 'Possibilité de troc : '.$donnees['troc']."</br>";
  echo 'Date de l\'annonce : '.$donnees['date'].'</br>';
  echo 'Vendeur : <a href="profil?idmembre='.$donnees['id_membre'].'">'.$donnees['pseudo'].'</a></br></br></br>';

// ajouter lien vers la fiche produit
  ?>
</div>
<?php
}
?>
</div>
<?php
$resultat->closeCursor();
}

else{

	include("pagefruit.php");

	include("pagelegume.php");

}

?>
</div>

<?php include("footer.php"); ?>

</body>
</html>