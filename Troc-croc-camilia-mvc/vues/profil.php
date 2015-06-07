
<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>Intro</title>
    <link rel="stylesheet" href="vues/css/style.css">
  </head>

  <body class="profil">


    <div id="accueil"><h4>Profil</p></div>
    <hr>
<table class="inscription">

<trclass="tr_hauteur">
<td class="td_largeur"><label for="pseudo"><strong>Pseudo :</strong></label></td>
<td class="td_largeur"><?php echo $_SESSION["user"]->getPseudo(); ?></td>
</tr>

<tr class="tr_hauteur">
<td class="td_largeur"><label for="nom"><strong>Nom :</strong></label></td>
<td class="td_largeur"><?php echo $_SESSION["user"]->getNom(); ?></td>
</tr>

<tr class="tr_hauteur">
<td class="td_largeur"><label for="prenom"><strong>Prénom :</strong></label></td>
<td class="td_largeur"><?php echo $_SESSION["user"]->getPrenom(); ?></td>
</tr>

<tr class="tr_hauteur">
<td class="td_largeur"><label for="adresse"><strong>Adresse :</strong></label></td>
<td class="td_largeur"><?php echo $_SESSION["user"]->getAdresse(); ?></td>
</tr>

<tr class="tr_hauteur">
<td class="td_largeur"><label for="cp"><strong>Code postal :</strong></label></td>
<td class="td_largeur"><?php echo $_SESSION["user"]->getCp(); ?></td>
</tr>

<tr class="tr_hauteur">
<td class="td_largeur"><label for="ville"><strong>Ville :</strong></label></td>
<td class="td_largeur"><?php echo $_SESSION["user"]->getVille(); ?></td>
</tr>

<tr class="tr_hauteur">
<td class="td_largeur"><label for="telephone"><strong>Téléphone :</strong></label></td>
<td class="td_largeur"><?php echo $_SESSION["user"]->getTelephone(); ?></td>
</tr>

<tr class="tr_hauteur">
<td class="td_largeur"><label for="mail"><strong>E-mail :</strong></label></td>
<td class="td_largeur"><?php echo $_SESSION["user"]->getMail(); ?></td>
</tr>

<tr class="tr_hauteur">
<td class="td_largeur"><label for="sexe"><strong>Sexe :</strong></label></td>
<td class="td_largeur">
<?php if($_SESSION["user"]->getSexe() == "H") echo "Homme"; else echo "Femme"; ?>
</td>
</tr>
</table>

</br>
</br>

<div class=modif-sup>
<a href="index.php?page=modifier-profil2&amp;id=<?php echo $_SESSION["id"];?>">Modifier</a>
<a href="modeles/supprimer-profil.php?id=<?php echo $_SESSION["id"];?>">Supprimer mon compte</a>
<a href="modeles/deconnexion.php">Déconnexion</a>

</body>
</html>