<?php
include_once('Class/Membre.php');
session_start();
if(session_status() == PHP_SESSION_ACTIVE){
    $id_membre = $_SESSION["user_id"];
    $membre = new Membre($id_membre);
}else{
    $membre = false;
}


?>

<header id="bandeau">
    <div class= "bordure">
        <div id="logo">
            <img src="images/logo-troccroc.jpg"/>
        </div>
       <div id="center-title">
        
            <h1>Un concentre de vitamines !</h1>
            
            <div class="menu">
                <ul>
                    <li><a href="accueil.php">Accueil</a></li>
                    <li><a href="#">Poster une annonce</a></li>
                    <li><a href="#">Localisation</a></li>
                    <li><a href="profil2.php">Mon profil</a></li>
                    <li><a href="inscription2.php">S'inscrire</a></li>
                    <li><a href="#">Forum</a></li>
                </ul>
            </div>
        </div>
        <div id="short-connexion">
            <p>
                <input type="search" name="search" id="search" placeholder="Rechercher" />
            </p>

        <?php 
        if($membre){
            ?>
            <div class="profil-header">
                <p><?php echo $membre->getPrenom()." ".$membre->getNom();?></p>
                <p><a href="deconnexion.php">Deconnexion</a></p>
            </div>
    <?php
        }else{

        ?>
            <form action="traitement-connexion.php" method="post" class="form">
                <p>
                    <label for="pseudo">Identifiant</label>
                    <input type="text" name="pseudo" id="pseudo" />
                </p>
                <p>
                    <label for="motdepasse">Mot de passe</label>
                    <input type="password" name="motdepasse" id="motdepasse" />

                </p>

                <p>
                    <input type="submit" name="connexion" value="Se connecter"/>

                </p>
            </form>
        <?php
        }
        ?>
            <p class="panier">
                <a href="#">Mon panier</a>
            </p>

        </div>
    </div>


</header>
