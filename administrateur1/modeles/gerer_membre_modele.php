<?php

include_once('connexion_bdd.php');

class Membre_BO
{
    
    
    public static function get_utilisateur()
    {
        // Récupérer en base de données les infos du membre
        // SELECT pseudo, email, signature, actif FROM membres WHERE id = ...
        
        $bdd = Connexion::connectBdd();

        // Vérification des identifiants
        $req = $bdd->prepare('SELECT * FROM utilisateur');
        $req->execute();


        while($donnees = $req->fetch()){
       	$pseudo = $donnees['pseudo'];
        $nom = $donnees['nom'];
        $prenom = $donnees['prenom'];
        $adresse = $donnees['adresse'];
        $codepostal = $donnees['cp'];
        $ville = $donnees['ville'];
        $telephone = $donnees['telephone'];
        $mail = $donnees['mail'];
        $sexe = $donnees['sexe'];
        $admin = $donnees['admin'];
        $id=$donnees['id_membre'];

        echo'
        <tr>
        <td>    '.$id.'</td>
		<td>'.$pseudo.'</td>
		<td>'.$nom.' </td>
		<td>	'.$prenom.'</td>
		<td>	'.$adresse.'</td>
		<td>	'.$codepostal.'</td>
		<td>	'.$ville.'</td>
		<td>	'.$telephone.'</td>
		<td>	'.$mail.'</td>
		<td>	'.$sexe.'</td>
		<td>	'.$admin.'</td>
        
		<td>	<a href="index.php?page=modifier_profil_vue&amp;id='.$id.'">Modifier</a> </td>
		<td>	<a href="index.php?page=supprimer-profil&amp;id='.$id.'">Supprimer</a> </td>



			</tr> ';
		

       }
   }
} 

       ?>