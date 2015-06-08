<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>header</title>

    <link rel="stylesheet" href="vues/css/style.css">
  </head>

  <body>

        <div class="ensemble">
            <?php if(empty($_SESSION["user"])){
           echo '<div class="mot">
                <p> pseudo :<br>
                    mot de passe :
                </p>
            </div>
            <div class="form">
                <form  method="post" action="modeles/administration_modele.php">
                <p> <input type="text" name="pseudo" id="pseudo" /><br>
                    <input type="password" name="pass" id="pass" /><br>
                    <input type="submit" value="Connexion"/>
                </p>
                
                </form>
            </div>';
             }else{
               echo '<p>'.$_SESSION["user"]->getPseudo().'</p>
              <p><a href="modeles/deconnexion.php">Déconnexion</a></p>';
            }?>
           
        </div>
    </body>
</html>