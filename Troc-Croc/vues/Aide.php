<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>Aide</title>

    <link rel="stylesheet" href="Aide.css">

    <script type="text/javascript">

		var Onglet_afficher = 1;
		function Affiche(Nom){
			document.getElementById('affiche-contenu-'+Onglet_afficher).className = 'inactif onglet';
			document.getElementById('affiche-contenu-'+Nom).className = 'affiche-contenu-1 onglet';
			document.getElementById('contenu_'+Onglet_afficher).style.display = 'none';
			document.getElementById('contenu_'+Nom).style.display = 'block';
			Onglet_afficher = Nom;}

	</script>
	<script type="text/javascript">
		Affiche(Onglet_afficher);
	</script>

  </head>

  <body>

    <?php include("header.php"); ?>

    <div id="accueil"><h4>Aide</p></div>
    
    <hr>

    <ul class="conteneur-onglets">
		<li class="inactif onglet" id="affiche-contenu-1" onclick="javascript:Affiche('1');">Connexion</li>
		<li class="inactif onglet" id="affiche-contenu-2" onclick="javascript:Affiche('2');">Inscription</li>
		<li class="inactif onglet" id="affiche-contenu-3" onclick="javascript:Affiche('3');">Achat</li>
		<li class="inactif onglet" id="affiche-contenu-4" onclick="javascript:Affiche('4');">Vente</li>
		<li class="inactif onglet" id="affiche-contenu-5" onclick="javascript:Affiche('5');">Page d'accueil</li>
		<li class="inactif onglet" id="affiche-contenu-6" onclick="javascript:Affiche('6');">Recherche</li>
		<li class="inactif onglet" id="affiche-contenu-7" onclick="javascript:Affiche('7');">Teste 7</li>
		<li class="inactif onglet" id="affiche-contenu-8" onclick="javascript:Affiche('8');">Teste 8</li>
		<li class="inactif onglet" id="affiche-contenu-9" onclick="javascript:Affiche('9');">Teste 9</li>
		<li class="inactif onglet" id="affiche-contenu-10" onclick="javascript:Affiche('10');">Teste 10</li>
		<li class="inactif onglet" id="affiche-contenu-11" onclick="javascript:Affiche('11');">Teste 11</li>
	</ul>
 
	<div class="contenu" id="contenu_1">Pour vous connecter, vous pouvez le faire depuis la page d’accueil et de toutes
										les autres pages dans la barre des menus.<br>
										La connexion se trouvant à droite de celle-ci et vous n’aurez qu’à remplir votre pseudo 
										et mot de passe dans les cases destinées à chacune des fonctions.</div>
	<div class="contenu" id="contenu_2">Pour vous inscrire, il vous suffit de cliquer sur le mot « inscription » qui se trouve 
										dans la barre des menus à droite sous la « connexion ».<br>
										Cela vous mènera à la page inscription où vous pourrez remplir les informations demandé pour mener 
										à bien votre adhésion.</div>
	<div class="contenu" id="contenu_3">La page Achat est accessible dans la barre des menus en cliquant sur le mot « Achat ».<br>
										Pour procéder à un achat, vous devrez choisir vos articles et les mettre dans votre panier,  
										une fois tous vos articles choisis, il ne vous restera plus qu’à procéder au paiement 
										de vos achats en fonction de votre vendeur.</div>
	<div class="contenu" id="contenu_4">Comme pour la page "Achat", vous pouvez accéder à la page de "Vente" depuis la barre des menus.<br>
										Pour procéder à la vente, il vous faudra tout d'abord être connecté avec votre compte, puis donner les informations 
										concernant vos produits mise en vente en suivant les instructions.</div>
	<div class="contenu" id="contenu_5">Notre page d’accueil vous permet d’aller sur les pages principales de notre site, ainsi que de 
										vous connecter ou bien de vous inscrire.<br>
										Les pages principales étant :<br>
										Accueil<br>
										Achat<br>
										Vente<br>
										Localisation<br>
										Forum</div>
	<div class="contenu" id="contenu_6">Notre site est organisé de façon simple qui vous permettra de vous repérer facilement tout au long de votre démarche.<br>
										Pour effectuer une requête, tapez un ou plusieurs mots décrivant les informations recherchées et cliquez sur Entrée 
										ou cliquez sur le bouton Recherche. Une liste de documents correspondant à votre requête s'affiche.<br>
										La fonction de recherche se trouve en dessous de la barre des menus qui est présente sur toutes les pages.</div>
	<div class="contenu" id="contenu_7">Teste 7</div>
	<div class="contenu" id="contenu_8">Teste 8</div>
	<div class="contenu" id="contenu_9">Teste 9</div>
	<div class="contenu" id="contenu_10">Teste 10</div>
	<div class="contenu" id="contenu_11">Teste 11</div>

    <?php include("footer.php"); ?>

    </body>

</html>