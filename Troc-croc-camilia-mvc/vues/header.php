
<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>header</title>

    <link rel="stylesheet" href="vues/css/style.css">
  </head>

  <body>

    <header>
        <a href="index.php"><img src="vues/images/logo-troccroc.png" alt="logo"/></a>
        <ul>
            <li><a class="active" href="index.php">Accueil</a></li>
            <li><a href="index.php?page=recherche">Achat</a></li>
            <li><a href="index.php?page=vente">Vente</a></li>
            <li><a href="index.php?page=localisation">Localisation</a></li>
            <li><a href="#">Forum</a></li>
            
            <?php if(!empty($_SESSION["user"])){
                echo'<li><a href="index.php?page=profil">Mon profil</a></li>';
                 }?>
        </ul>
        <div class="ensemble">
            <?php if(empty($_SESSION["user"])){
           echo '<div class="mot">
                <p> pseudo :<br>
                    mot de passe :
                </p>
            </div>
            <div class="form">
                <form  method="post" action="modeles/connexion_header_modele.php">
                <p> <input type="text" name="pseudo" id="pseudo" /><br>
                    <input type="password" name="pass" id="pass" /><br>
                    <input type="submit" value="Connexion"/>
                </p>
                <p class="ins"><a href="index.php?page=inscription">Inscription</a></p>
                </form>
            </div>';
             }else{
               echo '<p>'.$_SESSION["user"]->getPseudo().'</p>
              <p><a href="modeles/deconnexion.php">Déconnexion</a></p>';
            }?>
           
        </div>

    </header>

        <div class="fond">
            <img src="vues/images/Fondintro3b.jpg" alt="image fruits et légumes"/>
        </div>

</body>