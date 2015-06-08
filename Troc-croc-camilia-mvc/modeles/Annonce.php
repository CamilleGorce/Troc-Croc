<?php

include_once('Connexion.php');

class Annonce {
	public static function insertannonce($nom,$description,$prix,$troc,$departement,$quantite,$id_vendeur)
	{
		$bdd = Connexion::connectBdd();
		//$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO annonce(nom, description, prix, troc, departement, quantite, id_vendeur) VALUES(:nom, :description, :prix, :troc, :departement, :quantite, :id_vendeur);";
		
		$req=$bdd->prepare($sql);
		$req->bindParam('nom', $nom);
		$req->bindParam('description', $description);
		$req->bindParam('prix', $prix);
		$req->bindParam('troc', $troc);
		$req->bindParam('departement', $departement);
		$req->bindParam('quantite', $quantite);
		$req->bindParam('id_vendeur', $id_vendeur);
		$req->execute();

		echo $nom." ".$description." ".$prix." ".$troc." ".$departement." ".$quantite." ".$id_vendeur;
		
	
	return true;
	}


public static function getAllAnnonce(){
  
	$bdd = Connexion::connectBdd();
	$req = $bdd->query("SELECT U.pseudo,U.id_membre, A.nom, A.description,A.prix,A.quantité,A.troc,A.departement,A.date FROM annonce A,utilisateur U WHERE A.id_vendeur = U.id_membre");
	return $req;
}

}

?>
