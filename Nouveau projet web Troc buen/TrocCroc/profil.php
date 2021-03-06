<?php 
include_once('Class/Membre.php');
session_start();
if($_POST){

    //crypter le mot de passe
    $pass_md5 = md5($_POST['pass']);
    //mettre le POST du pseudo dans un variable
    $pseudo = $_POST["pseudo"];

    $resultat = Membre::seConnecter($pseudo, $pass_md5);

    if (!$resultat)
    {
        $error = 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        $_SESSION["id"] = $resultat['id_membre'];
        $membre = new Membre($_SESSION["id"]);
        $_SESSION["user"] = $membre;
    }
}
?>
<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>Intro</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="profil">
    <header>
        <img src="images/logo-troccroc.png" alt="logo"/>
        <ul>
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="achat.html">Achat</a></li>
            <li><a href="#">Vente</a></li>
            <li><a href="#">Localisation</a></li>
            <li><a href="#">Forum</a></li>
            <?php if(!empty($_SESSION["user"])){?><li><a href="#">Mon profil</a></li><?php }?>
        </ul>
        <div class="ensemble">
            <?php if(empty($_SESSION["user"])){?>
            <div class="mot">
                <p> pseudo :<br>
                    mot de passe :
                </p>
            </div>
            <div class="form">
                <form  method="post" action="">
                <p> <input type="text" name="pseudo" id="pseudo" /><br>
                    <input type="password" name="pass" id="pass" /><br>
                    <input type="submit" value="Connexion"/>
                </p>
                <p class="ins"><a href="inscription.php">Inscription</a></p>
                </form>
            </div>
            <?php }else{?>
                <p><?php echo $_SESSION["user"]->getPseudo();?></p>
                <p><a href="deconnexion.php">Déconnexion</a></p>
            <?php }?>
        </div>
    </header>
<table>
<caption>Mes informations personnelles | <a href="OLD/modifier-profil2.php?id=<?php echo $_SESSION["id"];?>">Modifier</a></caption>
<tr>
<td><label for="pseudo"><strong>Pseudo :</strong></label></td>
<td><?php echo $_SESSION["user"]->getPseudo(); ?></td>
</tr>
<tr>
<td><label for="nom"><strong>Nom :</strong></label></td>
<td><?php echo $_SESSION["user"]->getNom(); ?></td>
</tr>
<tr>
<td><label for="prenom"><strong>Prénom :</strong></label></td>
<td><?php echo $_SESSION["user"]->getPrenom(); ?></td>
</tr>
<tr>
<td><label for="adresse"><strong>Adresse :</strong></label></td>
<td><?php echo $_SESSION["user"]->getAdresse(); ?></td>
</tr>
<tr>
<td><label for="cp"><strong>Code postal :</strong></label></td>
<td><?php echo $_SESSION["user"]->getCp(); ?></td>
</tr>
<tr>
<td><label for="ville"><strong>Ville :</strong></label></td>
<td><?php echo $_SESSION["user"]->getVille(); ?></td>
</tr>
<tr>
<td><label for="telephone"><strong>Téléphone :</strong></label></td>
<td><?php echo $_SESSION["user"]->getTelephone(); ?></td>
</tr>
<tr>
<td><label for="mail"><strong>E-mail :</strong></label></td>
<td><?php echo $_SESSION["user"]->getMail(); ?></td>
</tr>
<tr>
<td><label for="sexe"><strong>Sexe :</strong></label></td>
<td>
<?php if($_SESSION["user"]->getSexe() == "H") echo "Homme"; else echo "Femme"; ?>
</td>
</tr>
</table>
<a href="supprimer-profil.php?id=<?php echo $_SESSION["id"];?>">Supprimer mon compte</a>
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>