<?php
include("modeles/session.php");
	
//Si on est connecté
if(isset($_SESSION['user']) AND isset($id_user)){

// si page est dans l'url et que page = profil alors renvoyer sur profil.php
	if(isset($_GET['page']) AND $_GET['page']=="profil"){
		include("vues/header.php");
		include("vues/profil.php");


	


	}else if(isset($_GET['page']) AND $_GET['page']=="modifier-profil2"){
		include("modeles/modifier_profil_modele.php");
		include("vues/header.php");
		include("vues/modifier-profil2.php");


	}



		else if(isset($_GET['page']) AND $_GET['page']=="Qui_sommes-nous"){
		include("vues/header.php");
		include("vues/Qui_sommes-nous.php");


	}


	else if(isset($_GET['page']) AND $_GET['page']=="legume"){
		include("modeles/recherche_modele.php");
		include("vues/header.php");
		include("vues/legume.php");


	}


	else if(isset($_GET['page']) AND $_GET['page']=="fruit"){
		include("modeles/recherche_modele.php");
		include("vues/header.php");
		include("vues/fruit.php");


	}


	else if(isset($_GET['page']) AND $_GET['page']=="conditionsdutilisation"){
		include("vues/header.php");
		include("vues/conditionsdutilisation.php");


	}else if(isset($_GET['page']) AND $_GET['page']=="recherche"){
		include("modeles/recherche_modele.php");
		include("vues/header.php");
		include("vues/recherche.php");


	}else{
		include("vues/header.php");
		include("vues/accueil.php");

	}



// Si on est pas connecté
}else{

	if(isset($_GET['page']) AND $_GET['page']=="inscription"){
		include("modeles/inscription_modele.php");
		include("vues/header.php");
		include("vues/inscription.php");
	

	}else if(isset($_GET['page']) AND $_GET['page']=="recherche"){
		include("modeles/recherche_modele.php");
		include("vues/header.php");
		include("vues/recherche.php");


	}

	else if(isset($_GET['page']) AND $_GET['page']=="Qui_sommes-nous"){
		include("vues/header.php");
		include("vues/Qui_sommes-nous.php");


	}

	else if(isset($_GET['page']) AND $_GET['page']=="legume"){
		include("modeles/recherche_modele.php");
		include("vues/header.php");
		include("vues/legume.php");


	}


	else if(isset($_GET['page']) AND $_GET['page']=="fruit"){
		include("modeles/recherche_modele.php");
		include("vues/header.php");
		include("vues/fruit.php");


	}


	else if(isset($_GET['page']) AND $_GET['page']=="conditionsdutilisation"){
		include("vues/header.php");
		include("vues/conditionsdutilisation.php");


	}else{
		include("vues/header.php");
		include("vues/accueil.php");
	}
		
		
	}




?>
	