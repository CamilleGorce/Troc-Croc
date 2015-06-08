<!DOCTYPE>
<html>
<head>

</head>
<body>

	    <div id="accueil"><h4>Gérer les sujets</p></div>
    <hr>
<table cellspacing="50">
 <br />
      <tr> 
			<th>Id Sujet</th>

			<th>Sujet</th>

			<th>Date</th>

			<th>Id Membre</th>

			<th>Signale</th>

		</tr>
		
		<?php Sujet_BO::get_sujet(); ?>
</table>

</br>
</br>

	
</body>
</html>
