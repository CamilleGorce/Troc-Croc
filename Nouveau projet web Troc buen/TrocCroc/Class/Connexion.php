<?php
class Connexion{
	public static function connectBdd(){
        try
        {
            //il essaie de se connecter à la base
            $bdd = new PDO('mysql:host=localhost;dbname=trocandcroc;charset=utf8', 'root', 'root');
        }
        // si il n'arrive pas il recupere l'exeption et l'afiche en message d'erreur
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        return $bdd;
	}
}
?>