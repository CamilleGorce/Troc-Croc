<?php
include_once('Class/Connexion.php');
class Membre
{
private $pseudo;
private $motdepasse;
private $nom;
private $prenom;
private $adresse;
private $codepostal;
private $ville;
private $telephone;
private $photo;
private $mail;
private $sexe;
public function __construct($idMembre)
{
// Récupérer en base de données les infos du membre
// SELECT pseudo, email, signature, actif FROM membres WHERE id = ...
$bdd = Connexion::connectBdd();
// Vérification des identifiants
$req = $bdd->prepare('SELECT pseudo, nom, prenom, adresse, cp, ville, telephone, mail, sexe FROM utilisateur WHERE id_membre = :id');
$req->execute(array(
'id' => $idMembre));
$donnees = $req->fetch(); 
// recupere une nouvelle ligne a chaqe fois( fetch)
// Définir les variables avec les résultats de la base
$this->pseudo = $donnees['pseudo'];
$this->nom = $donnees['nom'];
$this->prenom = $donnees['prenom'];
$this->adresse = $donnees['adresse'];
$this->codepostal = $donnees['cp'];
$this->ville = $donnees['ville'];
$this->telephone = $donnees['telephone'];
$this->mail = $donnees['mail'];
$this->sexe = $donnees['sexe'];
}
public static function sinscrire($new_user){
$bdd = Connexion::connectBdd();
// Insertion dans la base de donnée
if(self::checkPseudo($new_user["pseudo"]) == false){
//On prepare la requete INSERT INTO
$req = $bdd->prepare('INSERT INTO utilisateur(pseudo, motdepasse, nom, prenom, adresse, cp, ville, telephone, mail, sexe, admin) VALUES(:pseudo, :motdepasse, :nom, :prenom, :adresse, :cp, :ville, :telephone, :mail, :sexe, :admin)');
// On execute la requerte avec les variables correspondantes
$req->execute($new_user);
return true;
}
else{
return false;
}
}
public static function checkPseudo($pseudo){
$bdd = Connexion::connectBdd();
$req = $bdd->prepare('SELECT id_membre FROM utilisateur WHERE pseudo = :pseudo');
$req->execute(array(
'pseudo' => $pseudo));
$resultat = $req->fetch();
return $resultat;
}
public static function seConnecter($pseudo, $pass_md5){
$bdd = Connexion::connectBdd();
$req = $bdd->prepare('SELECT id_membre FROM utilisateur WHERE pseudo = :pseudo AND motdepasse = :pass');
$req->execute(array(
'pseudo' => $pseudo,
'pass' => $pass_md5));
$resultat = $req->fetch();
return $resultat;
}
public static function modifier($tab_user){
$bdd = Connexion::connectBdd();
//On prepare la requete UPDATE
$req = $bdd->prepare('UPDATE utilisateur SET pseudo = :pseudo, motdepasse = :motdepasse, nom = :nom, prenom = :prenom, adresse = :adresse, cp = :cp, ville = :ville, telephone = :telephone, mail = :mail, sexe = :sexe WHERE id_membre = :id');
// On execute la requete avec les variables correspondantes
$req->execute($tab_user);
return true;
}
public static function supprimer($id_membre){
$bdd = Connexion::connectBdd();
//On prepare la requete DELETE
$req = $bdd->prepare('DELETE FROM utilisateur WHERE id_membre = :id_membre');
// On execute la requete avec les variables correspondantes
$req->execute(array('id_membre' => $id_membre));
return true;
}
public function getPseudo()
{
return $this->pseudo;
}
public function getNom()
{
return $this->nom;
}
public function getPrenom()
{
return $this->prenom;
}
public function getAdresse()
{
return $this->adresse;
}
public function getCp()
{
return $this->codepostal;
}
public function getVille()
{
return $this->ville;
}
public function getTelephone()
{
return $this->telephone;
}
public function getMail()
{
return $this->mail;
}
public function getSexe()
{
return $this->sexe;
}

}
?>