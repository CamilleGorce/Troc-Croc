<?php 
include_once('Class/Membre.php');
if($_POST){
	$sexe = "";
	$pseudo ="";
	$nom = "";
	$prenom = "";
	$mail= "";
	$adresse="";
	$cp="";
	$ville="";
	$phone="";
	$verif = true;
	if(empty($_POST["sexe"])){
	$verif = false;
	$sexe = "Pas de sexe</br>";
	}
	if(empty($_POST["pseudo"])){
	$verif = false;
	$pseudo = "Pas de pseudo<br/>";
	}
	if(empty($_POST["nom"])){
	$verif = false;
	$nom = "Pas de nom</br>";
	}
	if(empty($_POST["prenom"])){
	$verif = false;
	$prenom= "Pas de prénom</br>";
	}
	if(empty($_POST["mail"])){
	$verif = false;
	$mail = "Pas de mail</br>";
	}
	if(empty($_POST["adresse"])){
	$verif = false;
	$adresse = "Pas d'adresse</br>";
	}
	if(empty($_POST["cp"])){
	$verif = false;
	$cp= "Pas de code postal</br>";
	}
	if(empty($_POST["ville"])){
	$verif = false;
	$ville = "Pas de ville</br>";
	}
	if(empty($_POST["telephone"])){
	$verif = false;
	$phone = "Pas de téléphone</br>";
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
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="inscription">

    <?php include("headernotco.php"); ?>

        <div id="inscription"><h4>Inscription</p></div>
    <hr>

	<div class="Titres">
	 	<p>Informations de connection : </p> 
	</div>
	<form action="" method="post">
		<table class="inscription">
			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="pseudo">Pseudo :</label></td>
				<td class="td_largeur"><input type="text" name="pseudo" id="pseudo"/><?php if(!empty($pseudo)) echo "".$pseudo."";?></td>

			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="motdepasse">Mot de passe :</label></td>
				<td class="td_largeur"><input type="password" name="motdepasse" id="motdepasse"/></td>
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
		<table class="inscription">
			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="sexe">Sexe :</label></td>
				<td class="td_largeur">
					<input type= "radio" name="sexe" value="H"> Femme</input>
					<input type= "radio" name="sexe" value="F"> Homme</input>
					<?php if(!empty($sexe)) echo "".$sexe."";?>
				</td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="nom">Nom :</label></td>
				<td class="td_largeur"><input type="text" name="nom" id="nom"/><?php if(!empty($nom)) echo "".$nom."";?></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="prenom">Prénom :</label></td>
				<td class="td_largeur"><input type="text" name="prenom" id="prenom"/><?php if(!empty($prenom)) echo "".$prenom."";?></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="mail">E-mail :</label></td>
				<td class="td_largeur"><input type="email" name="mail" id="mail" placeholder="troc&croc@gmail.com"/><?php if(!empty($mail)) echo "".$mail."";?></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="adresse">Adresse :</label></td>
				<td class="td_largeur"><input type="text" name="adresse" id="adresse"/><?php if(!empty($adresse)) echo "".$adresse."";?></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="cp">Code postal :</label></td>
				<td class="td_largeur"><input type="text" name="cp" id="cp"/><?php if(!empty($cp)) echo "".$cp."";?></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="ville">Ville :</label></td>
				<td class="td_largeur"><input type="text" name="ville" id="ville"/><?php if(!empty($ville)) echo "".$ville."";?></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="telephone">Téléphone :</label></td>
				<td class="td_largeur"><input type="tel" name="telephone" id="telephone"/><?php if(!empty($phone)) echo "".$phone."";?></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="photo">Photo :</label></td>
				<td class="td_largeur"><input type="file" name="photo" id="photo"/></td>
			</tr>
		</table>
			</br>
			<p class="Jaccepte"> <input type="checkbox"/> J'ai lu et j'accepte les <a class="condition-utilisation" href="conditionsdutilisation.php">conditions d'utilisation</a></p>
			
			<div class="Fin">
				<input type="submit" name="register" value="S'inscrire"/>
			</br>
			</br>
			</br>
				<a href="Accueil.php">Retour</a>
			</br>
			</br>
			</div>
				
	</form>

    <?php include("footer.php"); ?>

</body>

</html>