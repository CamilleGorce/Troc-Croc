<?php

include_once('connexion_bdd.php');

class Forum {

	public static function insert_topic($sujet,$id_membre,$message){

		$bdd=Connexion::connectBdd();
		$sql='INSERT INTO forum_sujet(sujet, id_membre) VALUES(:sujet, :id_membre)';
		$req=$bdd->prepare($sql);
		$req->bindParam('sujet',$sujet);
		$req->bindParam('id_membre',$id_membre);
		$req->execute();

		$sql_id = "SELECT id_sujet FROM forum_sujet WHERE id_membre= :id_membre AND sujet= :sujet ";
		$requete = $bdd->prepare($sql_id);
		$requete->bindParam('id_membre',$id_membre);
		$requete->bindParam('sujet',$sujet);
		$requete->execute();
		while($resultat=$requete->fetch()){
			$id_sujet=$resultat['id_sujet'];
		}

		$sql1='INSERT INTO forum_message(message, id_sujet, id_membre) VALUES(:message, :id_sujet, :id_membre)';
		$req1=$bdd->prepare($sql1);
		$req1->bindParam('message',$message);
		$req1->bindParam('id_sujet',$id_sujet);
		$req1->bindParam('id_membre',$id_membre);
		$req1->execute();
	}




	public static function select_topic(){
		$bdd=Connexion::connectBdd();

		$sql = "SELECT * FROM forum_sujet ORDER BY id_sujet DESC";

		$requete = $bdd->prepare($sql);
		$requete->execute();

		while($resultat=$requete->fetch()){
			$sujet=$resultat['sujet'];
			$date=$resultat['date'];
			$id_membre=$resultat['id_membre'];
			$id_sujet=$resultat['id_sujet'];

			$sql2 = "SELECT * FROM utilisateur WHERE id_membre= :id_membre ";
			$req=$bdd->prepare($sql2);
			$req->bindParam('id_membre',$id_membre);
			$req->execute();

			while($res=$req->fetch()){
				$pseudo=$res['pseudo'];

				echo "<table class='table_forum'>
				<tr>
						<td width='20%'>".$pseudo."</td>
						<td width='50%'><a href=index.php?page=forum_message&amp;id_sujet=".$id_sujet.">".$sujet."</a></td>
						<td width='20%'>".$date."</td>
						<td width='10%'>
							<form method=\"post\" action=\" \">
							<input type=\"hidden\" name=\"signale_hidden\" value=\"".$id_sujet."\"> 
							<input type=\"submit\" name=\"signale\" value=\"Signalé\"> 
							</form>
						</td>

				</tr>
				</table>
				<br/>";

			}
			
		}

	}


	public static function select_message($id_sujet){
		
		$bdd=Connexion::connectBdd();
		$sql_nom_sujet = "SELECT sujet FROM forum_sujet WHERE id_sujet=:id_sujet ";	
		$requete_nom = $bdd->prepare($sql_nom_sujet);
		$requete_nom->bindParam('id_sujet',$id_sujet);
		$requete_nom->execute();

		while($resultat=$requete_nom->fetch()){
			$sujet=$resultat['sujet'];
		
			echo "<table class='table_message'>
			<tr>
				<th class='titre'>".$sujet."</th>
			<tr>
			</table>";

		$sql = "SELECT * FROM forum_message WHERE id_sujet=:id_sujet ORDER BY id_message ASC";	
		$requete = $bdd->prepare($sql);
		$requete->bindParam('id_sujet',$id_sujet);
		$requete->execute();

		while($res=$requete->fetch()){
			$date=$res['date'];
			$message=$res['message'];
			$id_membre=$res['id_membre'];
			$id_message=$res['id_message'];
			$user = new Membre($id_membre);

			echo "
			<table class='table_forum'>
				<tr>
						<td width='20%'>".$user->getPseudo()."</td>
						<td width='50%'>".$message."</td>
						<td width='20%'>".$date."</td>
						<td width='10%'>
							<form method=\"post\" action=\" \">
							<input type=\"hidden\" name=\"signale_hidden\" value=\"".$id_message."\"> 
							<input type=\"submit\" name=\"signale\" value=\"Signalé\"> 
							</form>
						</td>

				</tr>
				</table>
				<br/>
				";
		}
		
	}

		
	}


	public static function signale_topic($signale_hidden){

		$bdd=Connexion::connectBdd();
		$bool=true;
		$sql1="UPDATE forum_sujet SET signale = :signale WHERE id_sujet='$signale_hidden'";
		$req1=$bdd->prepare($sql1);
		$req1->bindParam('signale',$bool);
		$req1->execute();
	}

	public static function signale_message($signale_hidden){

		$bdd=Connexion::connectBdd();
		$bool=true;
		$sql1="UPDATE forum_message SET signale = :signale WHERE id_message='$signale_hidden'";
		$req1=$bdd->prepare($sql1);
		$req1->bindParam('signale',$bool);
		$req1->execute();
	}



	public static function insert_message($message, $id_sujet, $id_membre){

		$bdd=Connexion::connectBdd();

		$sql1='INSERT INTO forum_message(message, id_sujet, id_membre) VALUES(:message, :id_sujet, :id_membre)';
		$req1=$bdd->prepare($sql1);
		$req1->bindParam('message',$message);
		$req1->bindParam('id_sujet',$id_sujet);
		$req1->bindParam('id_membre',$id_membre);
		$req1->execute();
	} 

	    public static function supprimer_message($id_message){
        $bdd = Connexion::connectBdd();
        //On  prepare la requete DELETE
        $req = $bdd->prepare('DELETE FROM forum_message WHERE id_message = :id_message');

        // On execute la requete avec les variables correspondantes
        $req->execute(array('id_message' => $id_message));

        return true;
    }

        public static function supprimer_sujet($id_sujet){
        $bdd = Connexion::connectBdd();
        //On  prepare la requete DELETE
        $req = $bdd->prepare('DELETE FROM forum_sujet WHERE id_sujet = :id_sujet');

        // On execute la requete avec les variables correspondantes
        $req->execute(array('id_sujet' => $id_sujet));

        return true;
    }


}

?>