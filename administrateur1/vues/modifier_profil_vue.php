

<html>

<head>
	<title>MODIFIER MON PROFIL</title>
	<meta charset="UTF-8">
</head>

<body>
	
	<div id="accueil"><h4>Modifier profil</p></div>
	<hr>

	<form action="modeles/modifier_profil_modele.php" method="post">

		<table class="inscription">

			<tr class="tr_hauteur">
				<td><label for="pseudo"><strong>Pseudo :</strong></label></td>
				<td><input type="text" name="pseudo" id="pseudo" value="<?php echo $membre->getPseudo(); ?>"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="motdepasse"><strong>Mot de passe :</strong></label></td>
				<td class="td_largeur"><input type="password" name="motdepasse" id="motdepasse"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="pass2"><strong>Confirmez le mot de passe :</strong></label></td>
				<td class="td_largeur"><input type="password" name="pass2" id="pass2"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="nom"><strong>Nom :</strong></label></td>
				<td class="td_largeur"><input type="text" name="nom" id="nom" value="<?php echo $membre->getNom(); ?>"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="prenom"><strong>Prénom :</strong></label></td>
				<td class="td_largeur"><input type="text" name="prenom" id="prenom" value="<?php echo $membre->getPrenom(); ?>"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="adresse"><strong>Adresse :</strong></label></td>
				<td class="td_largeur"><input type="text" name="adresse" id="adresse" value="<?php echo $membre->getAdresse(); ?>"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="cp"><strong>Code postal :</strong></label></td>
				<td class="td_largeur"><input type="text" name="cp" id="cp" value="<?php echo $membre->getCp(); ?>"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="ville"><strong>Ville :</strong></label></td>
				<td class="td_largeur"><input type="text" name="ville" id="ville" value="<?php echo $membre->getVille(); ?>"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="telephone"><strong></strong></label></td>
				<td class="td_largeur"><input type="text" name="telephone" id="telephone" value="<?php echo $membre->getTelephone(); ?>"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="photo"><strong>Photo :</strong></label></td>
				<td class="td_largeur"><input type="file" name="photo" id="photo"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="mail"><strong>E-mail :</strong></label></td>
				<td class="td_largeur"><input type="text" name="mail" id="mail" value="<?php echo $membre->getMail(); ?>"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="sexe"><strong>Sexe :</strong></label></td>
				<td class="td_largeur">
					<input type= "radio" name="sexe" value="H" > Homme
					<input type= "radio" name="sexe" value="F" > Femme
					
				</td>
			</tr>

		</table>
		<a  href="index.php?page=gerer_membre_vue"> <input type="button" name="edit" value="Modifier"/></a>
	</form>
	<a href="index.php?page=profil&amp;id=<?php echo $id_membre;?>">Retour</a>


</body>