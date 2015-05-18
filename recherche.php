<!DOCTYPE html>
<html>
<head>
	<title>recherche</title>
</head>


<body>
	<p>Faites votre recherche ! </p><br/>
	<form action="recherche.php" method="post">
		<input type="text" name="produitrecherche" />  
		<input type="submit" value="Entrer"/>
	</form>


<?php 
//connexion a la base de données
try
{
	$bdd=new PDO('mysql:host=localhost; dbname=trocandcroc; charset=utf8', 'root', '');
}
catch(Exception $e)
//en cas d'erreur
{
	die('Erreur: ' .$e->getMessage());
}




if(isset($_POST['produitrecherche']) && ($_POST['produitrecherche'])  != NULL) 	 	 // on vérifie que le post existe et qu'il n'est pas nul avant de lancer la recherche
{
	$recherche=htmlspecialchars($_POST['produitrecherche']); // variable créée pour faciliter l'écriture dans MySQL et bloquer l'acces
	$sql='SELECT * FROM produit WHERE nom_produit LIKE "%'.$recherche.'%" ORDER BY date_post DESC LIMIT 0, 10';
	echo $sql;
	$recherchebdd->PDO::query($sql) or die(mysql_error());
	$nb_resultats=mysql_num_rows($recherchebdd); // pour savoir le nombre de résultats trouvés

		if($nb_resultats!=0)
		{  //s'il y a au moins un résultat
			?>
			<h3>Résultat de votre recherche</h3>
			<p>Nous avons trouvé <?php echo $nb_resultats;   //affiche le nombre de résultats trouvés


			if($nb_resultats > 1)
			{
				 echo 'Résultats'; //pluriel ^^
			}

			else
			{
				echo 'Résultat'; //singulier ! 
			}

			?> dans nos produits. <br/> Voici la liste des produits disponibles : <br/>
			<br/></p>


			<?php
			while ($donnees=$recherchebdd->fetch()) //pour afficher la liste des produits
			{ //on définit une nouvelle variable $donnees qui stocke les donnees trouvées suite à la recherche
				echo nl2br(htmlspecialchars($donnees['nom_produit'], $donnees['date_post']));
				//==> créer un lien pour voir la fiche produit
			}
			?>

			<br/><br/>
			<a href="recherche.php"> Faire une nouvelle recherche</a>

		<?
		}
		
		else //en cas d'erreur de recherche, on affiche un message d'erreur et le formulaire
		{
		?>
			<p>Le produit <?php $_POST['recherche']; ?>que vous cherchez n'est pas en vente sur notre site. <br/>
			Faites une nouvelle recherche ! <br/>
			<a href="recherche.php" > Recherche </a> </p>
		<?php
		}
	$recherchebdd -> closeCursor();  //  on arrête la requete 
	}

	else
	{
		?> 

<?php
}
?>


</body>
</html>