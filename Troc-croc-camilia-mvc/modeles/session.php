<?php 
session_start();
include_once('modeles/Membre.php');
if(isset($_SESSION['pseudo']) && isset($_SESSION['id'])){
    $id_user=$_SESSION['id'];
    //$pseudo=$_SESSION['pseudo'];

    $membre = new Membre($id_user);
        $_SESSION["user"] = $membre;
	
}else{
    session_destroy();
}
?>