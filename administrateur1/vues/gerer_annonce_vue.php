<!DOCTYPE>
<html>
<head>

</head>
<body>

	    <div id="accueil"><h4>Gérer les annonces</p></div>
    <hr>
<table cellspacing="50">
 <br />
      <tr> 
			<th>Nom</th>

			<th>Description</th>

			<th>Prix</th>

			<th>Troc</th>

			<th>Departement</th>

			<th>Quantité</th>

			<th>Id_vendeur</th>

			<th>Id_annonce</th>

			<th>Modifier</th>

			<th>Supprimer</th>


		</tr>
		<?php Annonce_BO::get_annonce(); ?>
</table>

</br>
</br>

	
</body>
</html>