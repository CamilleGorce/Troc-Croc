
<?php 
/*ini_set('display_errors', 1);
ini_set("diplay_sartup_errors", 1);
error_reporting(-1);*/


//$date = date('Y-m-d H:i:s');




?>

<!-- Select * from annonce where departement = id -->

<DOCTYPE html>

<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>Accueil</title>

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>


<?php 
if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['prix']) && isset($_POST['troc']) && isset($_POST['departement']) && isset($_POST['quantite'])){
	Annonce::insertannonce($_POST['nom'],$_POST['description'],$_POST['prix'],$_POST['troc'],$_POST['departement'],$_POST['quantite'],$_SESSION['id']);
	
	echo "<div style='background-color: rgb(208, 255, 218);' id='alert' class='alert'>Votre annonce a été ajoutée<a style='float:right;cursor:pointer' onclick='closeAlert()' class='close'>x</a></div>";
}

 ?>

    <div id="accueil"><h4>Vente</h4></div>
    
    <hr>
    
        <h4 id="histoire">Postez votre annonce :</h4>

<head>
	<title>Annonce</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="POST" action="">
	<table class="inscription">
			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="nom">Produit : (singulier)</label></td>
				<td class="td_largeur"><input type="text" style="width:183px" name="nom" id="nom"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="prix">Prix (€/kg) :</label></td>
				<td class="td_largeur"><input type="text" style="width:183px" name="prix" id="prix"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="description">Description du produit :</label></td>
				<td class="td_largeur"><input type="textarea" style="width:183px" name="description" id="description"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="quantité">Quantité disponible (kg) :</label></td>
				<td class="td_largeur"><input type="textarea" style="width:183px" name="quantite" id="quantite"/></td>
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><label for="departement">Département :</label></td>
				<td class="td_largeur">
          <select name="departement" style="width:183px" id="departement">
          		<option value="">-- Sélectionner --</option>
				<option value="01">01 Ain</option>
				<option value="02">02 Aisne</option>
				<option value="03">03 Allier</option>
				<option value="04">04 Alpes de Haute Provence</option>
				<option value="05">05 Hautes Alpes</option>
				<option value="06">06 Alpes Maritimes</option>
				<option value="07">07 Ardèche</option>
				<option value="08">08 Ardennes</option>
				<option value="09">09 Ariège</option>
				<option value="10">10 Aube</option>
				<option value="11">11 Aude</option>
				<option value="12">12 Aveyron</option>
				<option value="13">13 Bouches du Rhône</option>
				<option value="14">14 Calvados</option>
				<option value="15">15 Cantal</option>
				<option value="16">16 Charente</option>
				<option value="17">17 Charente Maritime</option>
				<option value="18">18 Cher</option>
				<option value="19">19 Corrèze</option>
				<option value="2A">2A Corse du Sud</option>
				<option value="2B">2B Haute-Corse</option>
				<option value="21">21 Côte d'Or</option>
				<option value="22">22 Côtes d'Armor</option>
				<option value="23">23 Creuse</option>
				<option value="24">24 Dordogne</option>
				<option value="25">25 Doubs</option>
				<option value="26">26 Drôme</option>
				<option value="27">27 Eure</option>
				<option value="28">28 Eure et Loir</option>
				<option value="29">29 Finistère</option>
				<option value="30">30 Gard</option>
				<option value="31">31 Haute Garonne</option>
				<option value="32">32 Gers</option>
				<option value="33">33 Gironde</option>
				<option value="34">34 Hérault</option>
				<option value="35">35 Ille et Vilaine</option>
				<option value="36">36 Indre</option>
				<option value="37">37 Indre et Loire</option>
				<option value="38">38 Isère</option>
				<option value="39">39 Jura</option>
				<option value="40">40 Landes</option>
				<option value="41">41 Loir et Cher</option>
				<option value="42">42 Loire</option>
				<option value="43">43 Haute Loire</option>
				<option value="44">44 Loire Atlantique</option>
				<option value="45">45 Loiret</option>
				<option value="46">46 Lot</option>
				<option value="47">47 Lot et Garonne</option>
				<option value="48">48 Lozère</option>
				<option value="49">49 Maine et Loire</option>
				<option value="50">50 Manche</option>
				<option value="51">51 Marne</option>
				<option value="52">52 Haute Marne</option>
				<option value="53">53 Mayenne</option>
				<option value="54">54 Meurthe et Moselle</option>
				<option value="55">55 Meuse</option>
				<option value="56">56 Morbihan</option>
				<option value="57">57 Moselle</option>
				<option value="58">58 Nièvre</option>
				<option value="59">59 Nord</option>
				<option value="60">60 Oise</option>
				<option value="61">61 Orne</option>
				<option value="62">62 Pas de Calais</option>
				<option value="63">63 Puy de Dôme</option>
				<option value="64">64 Pyrénées Atlantiques</option>
				<option value="65">65 Hautes Pyrénées</option>
				<option value="66">66 Pyrénées Orientales</option>
				<option value="67">67 Bas Rhin</option>
				<option value="68">68 Haut Rhin</option>
				<option value="69">69 Rhône</option>
				<option value="70">70 Haute Saône</option>
				<option value="71">71 Saône et Loire</option>
				<option value="72">72 Sarthe</option>
				<option value="73">73 Savoie</option>
				<option value="74">74 Haute Savoie</option>
				<option value="75">75 Paris</option>
				<option value="76">76 Seine Maritime</option>
				<option value="77">77 Seine et Marne</option>
				<option value="78">78 Yvelines</option>
				<option value="79">79 Deux Sèvres</option>
				<option value="80">80 Somme</option>
				<option value="81">81 Tarn</option>
				<option value="82">82 Tarn et Garonne</option>
				<option value="83">83 Var</option>
				<option value="84">84 Vaucluse</option>
				<option value="85">85 Vendée</option>
				<option value="86">86 Vienne</option>
				<option value="87">87 Haute Vienne</option>
				<option value="88">88 Vosges</option>
				<option value="89">89 Yonne</option>
				<option value="90">90 Territoire de Belfort</option>
				<option value="91">91 Essonne</option>
				<option value="92">92 Hauts de Seine</option>
				<option value="93">93 Seine Saint Denis</option>
				<option value="94">94 Val de Marne</option>
				<option value="95">95 Val d'Oise</option>
          </select>	</td>			
			</tr>

			<tr class="tr_hauteur">
				<td class="td_largeur"><p> Possibilité de troc :</p></td>
				<td class="td_largeur">
					<label>Oui</label>
					<input type="radio" name="troc" id="troc" value="oui"/>
					<label>Non</label>
					<input type="radio" name="troc" id="troc" value="non"/>
				</td>
			</tr>
			
			<tr class="tr_hauteur">
				<td class="td_largeur"><button type ="submit" name="bouton" value="valider">Valider</button></label></td>
				<td class="td_largeur"></td>
			</tr>
		</table>
	</form>

</body>

</html>