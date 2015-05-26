<?php 
include_once('Class/Membre.php');
if($_POST){
$verif = true;
if(empty($_POST["pseudo"])){
$verif = false;
echo "Pas de pseudo<br/>";
}
if(empty($_POST["nom"])){
$verif = false;
echo "Pas de nom</br>";
}
if(empty($_POST["prenom"])){
$verif = false;
echo "Pas de prénom</br>";
}
if(empty($_POST["adresse"])){
$verif = false;
echo "Pas d'adresse</br>";
}
if(empty($_POST["cp"])){
$verif = false;
echo "Pas de code postal</br>";
}
if(empty($_POST["ville"])){
$verif = false;
echo "Pas de ville</br>";
}
if(empty($_POST["telephone"])){
$verif = false;
echo "Pas de téléphone</br>";
}
if(empty($_POST["mail"])){
$verif = false;
echo "Pas de mail</br>";
}
if(empty($_POST["sexe"])){
$verif = false;
echo "Pas de sexe</br>";
}
if($verif){
$pass_md5 = md5($_POST["motdepasse"]);
$new_user = array(
'pseudo' => $_POST["pseudo"],
'motdepasse' => $pass_md5,
'nom' => $_POST["nom"],
'prenom' => $_POST["prenom"],
'adresse' => $_POST["adresse"],
'cp' => $_POST["cp"],
'ville' => $_POST["ville"],
'telephone' => $_POST["telephone"],
'mail' => $_POST["mail"],
'sexe' => $_POST["sexe"],
'admin' => 0
);
$resultat = Membre::sinscrire($new_user);
if(!$resultat)
echo "Votre pseudo existe déjà !";
else
echo "Vous êtes bien inscrit !";
}
}
?>
<DOCTYPE html>
<html>
<head>
<title>INSCRIPTION</title>
<meta charset="UTF-8">
</head>
<body>
<form action="" method="post">
<table>
<tr>
<td><label for="pseudo"><strong>Pseudo :</strong></label></td>
<td><input type="text" name="pseudo" id="pseudo"/></td>
</tr>
<tr>
<td><label for="motdepasse"><strong>Mot de passe :</strong></label></td>
<td><input type="password" name="motdepasse" id="motdepasse"/></td>
</tr>
<tr>
<td><label for="pass2"><strong>Confirmez le mot de passe :</strong></label></td>
<td><input type="password" name="pass2" id="pass2"/></td>
</tr>
<tr>
<td><label for="nom"><strong>Nom :</strong></label></td>
<td><input type="text" name="nom" id="nom"/></td>
</tr>
<tr>
<td><label for="prenom"><strong>Prénom :</strong></label></td>
<td><input type="text" name="prenom" id="prenom"/></td>
</tr>
<tr>
<td><label for="adresse"><strong>Adresse :</strong></label></td>
<td><input type="text" name="adresse" id="adresse"/></td>
</tr>
<tr>
<td><label for="cp"><strong>Code postal :</strong></label></td>
<td><input type="text" name="cp" id="cp"/></td>
</tr>
<tr>
<td><label for="ville"><strong>Ville :</strong></label></td>
<td><input type="text" name="ville" id="ville"/></td>
</tr>
<tr>
<td><label for="telephone"><strong>Téléphone :</strong></label></td>
<td><input type="text" name="telephone" id="telephone"/></td>
</tr>
<tr>
<td><label for="photo"><strong>Photo :</strong></label></td>
<td><input type="file" name="photo" id="photo"/></td>
</tr>
<tr>
<td><label for="mail"><strong>E-mail :</strong></label></td>
<td><input type="text" name="mail" id="mail"/></td>
</tr>
<tr>
<td><label for="sexe"><strong>Sexe :</strong></label></td>
<td>
<input type= "radio" name="sexe" value="H"> Homme
<input type= "radio" name="sexe" value="F"> Femme
</td>
</tr>
</table>
<input type="submit" name="register" value="S'inscrire"/>
</form>
<a href="index.php">Retour</a>
</body>