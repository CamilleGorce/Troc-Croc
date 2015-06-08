<?php
include("modeles/session.php");

if(isset($_SESSION['user']) AND isset($id_user_bo) AND $admin==1){

	if(isset($_GET['page']) AND $_GET['page']=="gerer_membre_vue"){
			include("vues/headerBO.php");
			include("modeles/gerer_membre_modele.php");
			include("vues/gerer_membre_vue.php");


	}else if(isset($_GET['page']) AND $_GET['page']=="gerer_annonce_vue"){
			include("vues/headerBO.php");
			include("modeles/gerer_annonce_modele.php");
			include("vues/gerer_annonce_vue.php");

	}else if(isset($_GET['page']) AND $_GET['page']=="modifier_profil_vue"){
			include("vues/headerBO.php");
			include("modeles/modifier_profil_modele.php");
			include("vues/modifier_profil_vue.php");

	}else if(isset($_GET['page']) AND $_GET['page']=="supprimer-profil"){
			include("vues/headerBO.php");
			include("modeles/supprimer-profil.php");
			include("vues/gerer_membre_vue.php");

	}else if(isset($_GET['page']) AND $_GET['page']=="supprimer-annonce"){
			include("vues/headerBO.php");
			include("modeles/supprimer-annonce.php");
			include("vues/gerer_annonce_vue.php");

	}else if(isset($_GET['page']) AND $_GET['page']=="gerer_message"){
			include("vues/headerBO.php");
			include("modeles/gerer_forum_message_modele.php");
			include("vues/gerer_forum_message_vue.php");

	}else if(isset($_GET['page']) AND $_GET['page']=="gerer_sujet"){
			include("vues/headerBO.php");
			include("modeles/gerer_forum_sujet_modele.php");
			include("vues/gerer_forum_sujet_vue.php");

	}else if(isset($_GET['page']) AND $_GET['page']=="supprimer_sujet"){
			include("modeles/supprimer-sujet.php");

	}else if(isset($_GET['page']) AND $_GET['page']=="supprimer_message"){
			include("modeles/supprimer-message.php");

}else{
		include("vues/headerBO.php");

	}
}
else{
		include("vues/headerBO.php");

	}
		


?>
			
