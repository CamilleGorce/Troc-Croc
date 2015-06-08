<!DOCTYPE>
<html>
<head>

</head>
<body>

	    <div id="accueil"><h4>Gérer les messages</p></div>
    <hr>
<table cellspacing="50">
 <br />
      <tr> 
			<th>Id message</th>

			<th>Message</th>

			<th>Date</th>

			<th>Id Membre</th>

			<th>Signale</th>

		</tr>
		<?php Message_BO::get_message(); ?>
</table>

</br>
</br>

	
</body>
</html>