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
    <title>header</title>

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <header>
        <img src="images/logo-troccroc.png" alt="logo"/>
        <ul>
            <li><a class="active" href="#">Accueil</a></li>
            <li><a href="achat.html">Achat</a></li>
            <li><a href="#">Vente</a></li>
            <li><a href="#">Localisation</a></li>
            <li><a href="#">Forum</a></li>
            <?php if(!empty($_SESSION["user"])){?><li><a href="profil.php">Mon profil</a></li><?php }?>
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
            <?php if(!empty($error)) echo "<p class='error'>".$error."</p>";?>
        </div>

    </header>

        <div class="fond">
            <img src="Fondintro3b.jpg" alt="image fruits et légumes"/>
        </div>

</body>