<?php 
include_once('Class/Membre.php');
session_start();
if(isset($_GET['mode'])){
    if($_GET['mode'] == 1)
        echo "Votre compte a bien été supprimé";
}

if($_POST){

    //crypter le mot de passe
    $pass_md5 = md5($_POST['motdepasse']);
    //mettre le POST du pseudo dans un variable
    $pseudo = $_POST["pseudo"];

    $resultat = Membre::seConnecter($pseudo, $pass_md5);

    if (!$resultat)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
       session_start();
       $_SESSION["user_id"] = $resultat['id_membre'];
        header('Location: profil2.php');
        //$id = $resultat['id_membre'];
        //echo 'Vous êtes connecté !';
        //echo "<a href=\"profil.php?id=$id\">Mon profil</a>";
    }
}
?>