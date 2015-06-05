<?php


include_once('Class/Connexion.php');

class Annonce {
	public static function insertannonce($nom,$description,$prix,$troc,$departement,$quantité,$id_vendeur)
	{

		$sql = "INSERT INTO annonce VALUES (NULL,'".$nom."', '".$description."', '".$prix."', '".$troc."', '".$departement."','".$quantité."', NULL,'".$id_vendeur."');";
		$bdd = Connexion::connectBdd();
		$bdd->exec($sql);
		return $sql;

	}


public static function getAllAnnonce(){
  
	$bdd = Connexion::connectBdd();
	$req = $bdd->query("SELECT U.pseudo,U.id_membre, A.nom, A.description,A.prix,A.quantité,A.troc,A.departement,A.date FROM annonce A,utilisateur U WHERE A.id_vendeur = U.id_membre");
	return $req;
}

}


