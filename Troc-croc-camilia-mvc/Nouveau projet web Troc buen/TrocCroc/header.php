<?php 
include_once('Class/Membre.php');
session_start();
if($_POST['boutonconnexion']){

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/trocandcroc.js"></script>
  </head>

  <body>

    <header>
        <a href="accueil.php"><img src="images/logo-troccroc.png" alt="logo"/></a>
        <ul>
            <li><a class="active" href="accueil.php">Accueil</a></li>
            <li><a href="recherche.php">Achat</a></li>
            <li><a href="annonces.php">Vente</a></li>
            <li><a href="localisation.php">Localisation</a></li>
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
                <p> <input type="text" style="width:150px" name="pseudo" id="pseudo" /><br>
                    <input type="password" style="width:150px" name="pass" id="pass" /><br>
                    <input type="submit" name ="boutonconnexion" value="Connexion"/>
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

<!-- <?php if(!empty($_SESSION['flash'])) {
 
  $flash = $_SESSION['flash']['message'];
    $flash = $_SESSION['flash']['type'];
    unset($_SESSION['flash']);
?>

<div role='alert' id='alert' class='alert alert-<?php echo $message ?>'>
    <a class='close'>x</a><?php echo $flash;}?></div>
-->

    </header>

        <div class="fond">
            <img src="Fondintro3b.jpg" alt="image fruits et légumes"/>
        </div>

</body>