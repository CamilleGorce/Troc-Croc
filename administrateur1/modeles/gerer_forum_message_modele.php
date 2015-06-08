<?php

include_once('connexion_bdd.php');

class Message_BO
{
    
    public static function get_message()
    {
        // Récupérer en base de données les infos du membre
        // SELECT pseudo, email, signature, actif FROM membres WHERE id = ...
        
        $bdd = Connexion::connectBdd();

        // Vérification des identifiants
        $req = $bdd->prepare('SELECT * FROM forum_message');
        $req->execute();


        while($donnees = $req->fetch()){
       	$id_message = $donnees['id_message'];
        $message = $donnees['message'];
        $date = $donnees['date'];
        $id_membre = $donnees['id_membre'];
        $signale = $donnees['signale'];

        echo'
        <tr>
        <td>    '.$id_message.'</td>
		<td>    '.$message.'</td>
		<td>    '.$date.' </td>
		<td>	'.$id_membre.'</td>
		<td>	'.$signale.'</td>

		<td>	<a href="index.php?page=supprimer_message&amp;id_message='.$id_message.'">Supprimer message</a> </td>
    



			</tr> ';
		

       }
   }
} 

       ?>