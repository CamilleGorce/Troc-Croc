<?php
	try
	//se connecte à MySQL
		{
			$bdd=new PDO('mysql:host=localhost;dbname=trocandcroc;charset=utf8', 'root', '');
		}

	catch(Exception $e)
	// en cas d'erreur, on arrete tout
		{
			die('Erreur :' .$e->getMessage());
		}



	//on récupère le contenu du panier
	$reponse=$bdd->query('SELECT * FROM panier');

	echo '<p>Vos achats aujourd\'hui :</p>';
	//on affiche chaque entrée une à une
	while($panier = $reponse->fetch())
	{
		echo $panier['id_produit']. '<br/>'?>
	}

	$reponse -> closeCursor();
?>