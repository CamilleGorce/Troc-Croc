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
		<li class="inactif onglet" id="affiche-contenu-2" onclick="javascript:Affiche('2');">S'inscrire</li>
		<li class="inactif onglet" id="affiche-contenu-3" onclick="javascript:Affiche('3');">Achat</li>
		<li class="inactif onglet" id="affiche-contenu-4" onclick="javascript:Affiche('4');">Vente</li>
		<li class="inactif onglet" id="affiche-contenu-5" onclick="javascript:Affiche('5');">Teste 5</li>
		<li class="inactif onglet" id="affiche-contenu-6" onclick="javascript:Affiche('6');">Teste 6</li>
		<li class="inactif onglet" id="affiche-contenu-7" onclick="javascript:Affiche('7');">Teste 7</li>
		<li class="inactif onglet" id="affiche-contenu-8" onclick="javascript:Affiche('8');">Teste 8</li>
		<li class="inactif onglet" id="affiche-contenu-9" onclick="javascript:Affiche('9');">Teste 9</li>
		<li class="inactif onglet" id="affiche-contenu-10" onclick="javascript:Affiche('10');">Teste 10</li>
		<li class="inactif onglet" id="affiche-contenu-11" onclick="javascript:Affiche('11');">Teste 11</li>
		<li class="inactif onglet" id="affiche-contenu-12" onclick="javascript:Affiche('12');">Teste 12</li>
	</ul>
 
	<div class="contenu" id="contenu_1">Teste 1</div>
	<div class="contenu" id="contenu_2">Teste 2</div>
	<div class="contenu" id="contenu_3">Teste 3</div>
	<div class="contenu" id="contenu_4">Teste 4</div>
	<div class="contenu" id="contenu_5">Teste 5</div>
	<div class="contenu" id="contenu_6">Teste 6</div>
	<div class="contenu" id="contenu_7">Teste 7</div>
	<div class="contenu" id="contenu_8">Teste 8</div>
	<div class="contenu" id="contenu_9">Teste 9</div>
	<div class="contenu" id="contenu_10">Teste 10</div>
	<div class="contenu" id="contenu_11">Teste 11</div>
	<div class="contenu" id="contenu_12">Teste 12</div>

    <?php include("footer.php"); ?>

    </body>

</html>