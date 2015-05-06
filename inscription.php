<DOCTYPE html>
<html>
<head>
    <title>INSCRIPTION</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("header.php"); ?>
 <form action="traitement_inscription2.php" method="post">
        
            <table>
            
            <tr>
            
            <td><label for="pseudo"><strong>Pseudo :</strong></label></td>
            <td><input type="text" name="pseudo" id="pseudo"/></td>
            
            </tr>
            
            <tr>
            
            <td><label for="motdepasse"><strong>Mot de passe :</strong></label></td>
            <td><input type="password" name="motdepasse" id="motdepasse"/></td>
            
            </tr>
            
            <tr>
            
            <td><label for="pass2"><strong>Confirmez le mot de passe :</strong></label></td>
            <td><input type="password" name="pass2" id="pass2"/></td>
            
            </tr>

            <tr>
            
            <td><label for="nom"><strong>Nom :</strong></label></td>
            <td><input type="text" name="nom" id="nom"/></td>
            
            </tr>

            <tr>
            
            <td><label for="prenom"><strong>Prénom :</strong></label></td>
            <td><input type="text" name="prenom" id="prenom"/></td>
            
            </tr>

            <tr>
            
            <td><label for="adresse"><strong>Adresse :</strong></label></td>
            <td><input type="text" name="adresse" id="adresse"/></td>
            
            </tr>
            <tr>
            
            <td><label for="cp"><strong>Code postal :</strong></label></td>
            <td><input type="text" name="cp" id="cp"/></td>
            
            </tr>

            <tr>
            
            <td><label for="ville"><strong>Ville :</strong></label></td>
            <td><input type="text" name="ville" id="ville"/></td>
            
            </tr>

            <tr>
            
            <td><label for="telephone"><strong>Téléphone :</strong></label></td>
            <td><input type="text" name="telephone" id="telephone"/></td>
            
            </tr>

            <tr>
            
            <td><label for="photo"><strong>Photo :</strong></label></td>
            <td><input type="file" name="photo" id="photo"/></td>
            
            </tr>

            <tr>
            
            <td><label for="mail"><strong>E-mail :</strong></label></td>
            <td><input type="text" name="mail" id="mail"/></td>
            
            </tr>

            <tr>
            
            <td><label for="sexe"><strong>Sexe :</strong></label></td>
            <td>
                <input type= "radio" name="sexe" value="H"> Homme
                <input type= "radio" name="sexe" value="F"> Femme
            </td>
            
            </tr>

            </table>
        
        <input type="submit" name="register" value="S'inscrire"/>
        
    </form>
    <a href="accueil.php">Retour</a>
<?php include("footer.php"); ?>
</body>

</html>

