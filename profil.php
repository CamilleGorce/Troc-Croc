<?php include("header.php");
if(@session_id() == "")
    header('Location: accueil.php');
include_once('Class/Membre.php');
$id_membre = $_SESSION["user_id"];
$membre = new Membre($id_membre);
?>

<DOCTYPE html>
<html>
<head>
    <title>MON PROFIL</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <table>
            <caption>Mes informations personnelles | <a href="modifier-profil2.php?id=<?php echo $id_membre;?>">Modifier</a></caption>
            <tr>
            
            <td><label for="pseudo"><strong>Pseudo :</strong></label></td>
            <td><?php echo $membre->getPseudo(); ?></td>
            
            </tr>

            <tr>
            
            <td><label for="nom"><strong>Nom :</strong></label></td>
            <td><?php echo $membre->getNom(); ?></td>
            
            </tr>

            <tr>
            
            <td><label for="prenom"><strong>Prénom :</strong></label></td>
            <td><?php echo $membre->getPrenom(); ?></td>
            
            </tr>

            <tr>
            
            <td><label for="adresse"><strong>Adresse :</strong></label></td>
            <td><?php echo $membre->getAdresse(); ?></td>
            
            </tr>
            <tr>
            
            <td><label for="cp"><strong>Code postal :</strong></label></td>
            <td><?php echo $membre->getCp(); ?></td>
            
            </tr>

            <tr>
            
            <td><label for="ville"><strong>Ville :</strong></label></td>
            <td><?php echo $membre->getVille(); ?></td>
            
            </tr>

            <tr>
            
            <td><label for="telephone"><strong>Téléphone :</strong></label></td>
            <td><?php echo $membre->getTelephone(); ?></td>
            
            </tr>

            <tr>
            
            <td><label for="mail"><strong>E-mail :</strong></label></td>
            <td><?php echo $membre->getMail(); ?></td>
            
            </tr>

            <tr>
            
            <td><label for="sexe"><strong>Sexe :</strong></label></td>
            <td>
                <?php if($membre->getSexe() == "H") echo "Homme"; else echo "Femme"; ?>
            </td>
            
            </tr>

        </table>
        
    <a href="supprimer-profil.php?id=<?php echo $id_membre;?>">Supprimer mon compte</a>
    <a href="deconnexion.php">Déconnexion</a>

</body>
<?php include("footer.php"); ?>