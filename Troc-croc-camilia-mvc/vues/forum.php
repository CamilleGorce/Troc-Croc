
<!DOCTYPE html>
<?php include('modeles/Forum.php');
if(isset($_POST['sujet']) && isset($_POST['message']) ){
	Forum::insert_topic($_POST['sujet'],$_SESSION['id'],$_POST['message']);
}

if(isset($_POST['signale_hidden'])){
	Forum::signale_topic($_POST['signale_hidden']);
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
	
		<?php Forum::select_topic(); ?>
	
	<br/>
	<br/>
<div class="forum_ajout">
	<form method="post" action="" >
	<label for="sujet">Nouveau sujet :</label>
		<input type="text" name="sujet" id="sujet" placeholder="Ex : Comment ajouter un fruit ?" class="nouveau_sujet" maxlength="100" required/>
	<br/>
	<br/>
	
	<label for="message">Description : </label><br />
		<textarea name="message" id="message" required></textarea>

	<br/>
	<br/>
		<input type="submit" name="Ajouter" id="ajouter" value="Ajouter" size="30" />
	</form>
</div>

</body>
</html>