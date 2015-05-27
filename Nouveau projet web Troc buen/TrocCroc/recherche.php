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
$resultat=$bdd->query('SELECT nom_produit, date_post FROM produit WHERE nom_produit LIKE "%'.$requete.'%" ');
?>
<br/>
<br/>
<br/>
<div class="resultat_requete">
<p class="search"> Résultats de votre recherche: </p> <br/><br/>
<?php
while ($donnees=$resultat->fetch()){
//afficher les résultats trouvés
echo '<p> <strong>' .htmlspecialchars($donnees['nom_produit']). ': </strong>' .htmlspecialchars($donnees['date_post']).'</p>';
// ajouter lien vers la fiche produit
}
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