<?php
if($_POST){
try
{
//il essaie de se connecter à la base
$bdd = new PDO('mysql:host=localhost;dbname=trocandcroc;charset=utf8', 'root', '');
}
// si il n'arrive pas il recupere l'exeption et l'afiche en message d'erreur
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
/*
if(!empty($_POST["nom"]))
echo $_POST["nom"];
else
echo "Pas de nom";
*/
// crypter en md5 un mdp
$pass_md5 = md5($_POST["motdepasse"]);
// Insertion dans la base de donnée
//On prepare la requete INSERT INTO
$req = $bdd->prepare('INSERT INTO membre(pseudo, motdepasse, nom, prenom, adresse, cp, ville, telephone, mail, sexe, admin) VALUES(:pseudo, :motdepasse, :nom, :prenom, :adresse, :cp, :ville, :telephone, :mail, :sexe, :admin)');
// On execute la requerte avec les variables correspondantes
$req->execute(array(
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
)
);
}
?>
<DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styleinscription.css" />
</head>
<body>
	<h1> INSCRIPTION </h1>
</br>
	<div class="Titres">
	 	<p>Informations de connection : </p> 
	</div>
	<form action="" method="post">
		<table>
			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="pseudo">Pseudo :</label></td>
				<td class="td_largeur"><input type="text" name="pseudo" id="pseudo"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="motdepasse">Mot de passe :</label></td>
				<td class="td_largeur"><input type="password" name="motdepass" id="motdepasse"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="pass2">Confirmez le mot de passe :</label></td>
				<td class="td_largeur"><input type="password" name="pass2" id="pass2"/></td>
			</tr>
		</table>
	</br>
	</br>
		<div class="Titres">
			 	<p>Informations personnelles : </p> 
		</div>
		<table>
			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="sexe">Sexe :</label></td>
				<td class="td_largeur">
					<input type= "radio" name="sexe" value="H"> Femme
					<input type= "radio" name="sexe" value="F"> Homme
				</td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="nom">Nom :</label></td>
				<td class="td_largeur"><input type="text" name="nom" id="nom"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="prenom">Prénom :</label></td>
				<td class="td_largeur"><input type="text" name="prenom" id="prenom"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="mail">E-mail :</label></td>
				<td class="td_largeur"><input type="email" name="mail" id="mail" placeholder="troc&croc@gmail.com"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="adresse">Adresse :</label></td>
				<td class="td_largeur"><input type="text" name="adresse" id="adresse"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="cp">Code postal :</label></td>
				<td class="td_largeur"><input type="text" name="cp" id="cp"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="ville">Ville :</label></td>
				<td class="td_largeur"><input type="text" name="ville" id="ville"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="telephone">Téléphone :</label></td>
				<td class="td_largeur"><input type="tel" name="telephone" id="telephone"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="photo">Photo :</label></td>
				<td class="td_largeur"><input type="file" name="photo" id="photo"/></td>
			</tr>
		</table>
			</br>
			<p class="Jaccepte"> <input type="checkbox"/> J'ai lu et j'accepte les <a href="Conditions.html">conditions d'utilisation</a></p>
			
			<div class="Fin">
				<input type="submit" name="register" value="S'inscrire"/>
			</br>
			</br>
			</br>
				<a href="index.php">Retour</a>
			</br>
			</br>
			</div>
				
	</form>
</body>