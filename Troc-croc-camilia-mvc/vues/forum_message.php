
<!DOCTYPE html>
<?php include('modeles/Forum.php');
if(isset($_GET['id_sujet']) && isset($_POST['message']) ){
	Forum::insert_message($_POST['message'],$_GET['id_sujet'],$_SESSION['id']);
}

if(isset($_POST['signale_hidden'])){
	Forum::signale_message($_POST['signale_hidden']);
}
	 ?>
	
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>Intro</title>
    <link rel="stylesheet" href="vues/css/style.css">
  </head>

  <body class="forum">

    <div id="accueil"><h4>Forum</p></div>
    <hr>
    <br/>
	<br/>
	
		<?php if(isset($_GET['id_sujet'])){
			Forum::select_message($_GET['id_sujet']);
			}
			 ?>
	
	<br/>
	<br/>
<div class="forum_ajout">
	<form method="post" action="" >
	
	
	<label for="message">Répondre : </label><br />
		<textarea name="message" id="message" required></textarea>

	<br/>
	<br/>
		<input type="submit" name="Ajouter" id="ajouter" value="Envoyer" size="30" />
	</form>
</div>

</body>
</html>