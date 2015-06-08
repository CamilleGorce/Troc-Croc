<?php

include_once('connexion_bdd.php');

class Annonce_BO
{
    
    
    public static function get_annonce()
    {
        // Récupérer en base de données les infos du membre
        // SELECT pseudo, email, signature, actif FROM membres WHERE id = ...
        
        $bdd = Connexion::connectBdd();

        // Vérification des identifiants
        $req = $bdd->prepare('SELECT * FROM annonce');
        $req->execute();


        while($donnees = $req->fetch()){
        $nom = $donnees['nom'];
        $description = $donnees['description'];
        $prix = $donnees['prix'];
        $troc = $donnees['troc'];
        $departement = $donnees['departement'];
        $quantite= $donnees['quantite'];
        $id_vendeur=$donnees['id_vendeur'];
        $id_annonce=$donnees['id_annonce'];

        echo'
        <tr>
        <td>    '.$nom.'</td>
        <td>       '.$description.' </td>
        <td>    '.$prix.'</td>
        <td>    '.$troc.'</td>
        <td>    '.$departement.'</td>
        <td>    '.$quantite.'</td>
        <td>    '.$id_vendeur.'</td>
        <td>    '.$id_annonce.'</td>
        <td>    <a href="index.php?page=modifier_annonce_vue&amp;id_annonce='.$id_annonce.'">Modifier</a> </td>
        <td>    <a href="index.php?page=supprimer-annonce&amp;id_annonce='.$id_annonce.'">Supprimer</a> </td>



            </tr> ';
        

       }
   }
} 

       ?>