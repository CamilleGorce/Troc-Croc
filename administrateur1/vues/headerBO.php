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
            <li><a class="active" href="index.php?page=gerer_membre_vue">Gerer membres</a></li>
            <li><a href="index.php?page=gerer_annonce_vue">Gerer annonces</a></li>
            <li><a href="index.php?page=gerer_sujet">Gerer Sujet forum</a></li>
            <li><a href="index.php?page=gerer_message">Gerer Message forum</a></li>
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
                <p> <input type="text" name="pseudo_bo" id="pseudo" /><br>
                    <input type="password" name="pass_bo" id="pass" /><br>
                    <input type="submit" value="Connexion"/>
                </p>
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