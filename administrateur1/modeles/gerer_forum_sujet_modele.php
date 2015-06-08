<?php

include_once('connexion_bdd.php');

class Sujet_BO
{
    
    
    public static function get_sujet()
    {
        // Récupérer en base de données les infos du membre
        // SELECT pseudo, email, signature, actif FROM membres WHERE id = ...
        
        $bdd = Connexion::connectBdd();

        // Vérification des identifiants
        $req = $bdd->prepare('SELECT * FROM forum_sujet');
        $req->execute();


        while($donnees = $req->fetch()){
       	$id_sujet = $donnees['id_sujet'];
        $sujet = $donnees['sujet'];
        $date = $donnees['date'];
        $id_membre = $donnees['id_membre'];
        $signale = $donnees['signale'];

        echo'
        <tr>
        <td>    '.$id_sujet.'</td>
		<td>    '.$sujet.'</td>
		<td>    '.$date.' </td>
		<td>	'.$id_membre.'</td>
		<td>	'.$signale.'</td>
        
		<td>	<a href="index.php?page=supprimer_sujet&amp;id_sujet='.$id_sujet.'">Supprimer sujet</a> </td>



			</tr> ';
		

       }
   }
} 

       ?>