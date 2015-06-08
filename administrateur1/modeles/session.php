<?php 
session_start();

include_once('modeles/Membre.php');
if(isset($_SESSION['pseudo']) && isset($_SESSION['id']) && $_SESSION['admin']==1){
    $id_user_bo=$_SESSION['id'];
    $admin=$_SESSION['admin'];
    //$pseudo=$_SESSION['pseudo'];

    $membre = new Membre($id_user_bo);
        $_SESSION["user"] = $membre;
	
}else{
    session_destroy();
}
?>