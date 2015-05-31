<?php 
//connexion a la base de données
include_once('Connexion.php');

function type_recherche($type){
	$bdd = Connexion::connectBdd();

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
		if($type=="legume"){
			include("vues/pagelegume.php");
		}else if($type=="fruit"){
			include('vues/pagefruit.php');
		}else if($type=="global"){
			include("vues/pagelegume.php");
			include('vues/pagefruit.php');
		}
		
	}

}


	?>