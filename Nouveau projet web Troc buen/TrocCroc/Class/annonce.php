<?php
/*try {
	global $os;
	$dns = 'mysql:host=localhost;dbname=trocandcroc';
	$utilisateur = 'root';
	$motDePasse =
}*/

include_once('Class/Connexion.php');

class Annonce {
	public static function insertannonce($nom,$prix,$description,$troc)
	{

		$sql = "INSERT INTO annonce VALUES (NULL,'".$nom."', '".$description."', '".$prix."', '".$troc."', NULL);";
		$bdd = Connexion::connectBdd();
		$bdd->exec($sql);

	}


public static function getAllAnnonce($nom,$prix,$description,$troc){
  
	$bdd = Connexion::connectBdd();
	$req = $bdd->query('SELECT * FROM annonce');
	return $req;

}

}


