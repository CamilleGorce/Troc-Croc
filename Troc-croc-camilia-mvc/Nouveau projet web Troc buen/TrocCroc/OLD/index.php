<DOCTYPE html>
<html>
<head>
	<title>CONNEXION</title>

	<meta charset="UTF-8">
	
<body>

    <form action="" method="post">
        
        <table>
            
            <tr>
            
            <td><label for="pseudo"><strong>Pseudo :</strong></label></td>
            <td><input type="text" name="pseudo" id="pseudo"/></td>
            
            </tr>
            
            <tr>
            
            <td><label for="motdepasse"><strong>Mot de passe :</strong></label></td>
            <td><input type="password" name="motdepasse" id="motdepasse"/></td>
            
            </tr>

        </table>
        
        <input type="submit" name="connexion" value="Se connecter"/>
        
    </form>
<a href="inscription2.php">S'inscrire</a>
</body>

<?php 
include_once('Class/Membre.php');

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
       
        $id = $resultat['id_membre'];
        echo 'Vous êtes connecté !';
        echo "<a href=\"profil2.php?id=$id\">Mon profil</a>";
    }
}
?>