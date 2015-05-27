<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>Accueil</title>

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <?php include("header.php"); ?>

    <div id="accueil"><h4>Accueil</h4></div>
    
    <hr>
    
        <h4 id="histoire">L'histoire de Troc & Croc</h4>
        
        <img src="Champs.jpg" class="debut"/></p>

            <div id="debuttexte">
                    <p>Troc & Croc est un site internet de e-commerce permettant d'échanger,
                    acheter ou vendre des fruits et légumes près de chez soi.</br></br>
                    Vous pouvez à tout moment remplir votre panier de produits frais directement
                    issus du potager d'un de nos vendeurs. Vous n'avez qu'à séléctionner les fruits et legumes qui vous
                    interèssent puis selectionner un vendeur en fonction de son département.</br></br>
                    Vous avez également la possibilité de proposer vos propres produits à la vente en spécifint si vous
                    si vous désirez vendre ou échanger.</br></br>
                    Pour découvrir nos offres ou poster votre annonce <a href="inscription.php">inscrivez-vous</a>
                    maintenant.</br></br>
                   -Troc & Croc-</p>

    </div>
</br>
</br>
<div id="histoire"><h4>Rechercher un produit</h4></div>

    <div class="fruitlegume">            
        <div class="fr">
            <a href="fruit.php"><img src="fruititi.png" alt="Fruits" title="Fruits" /></a>
            <a href="fruit.php"><p>Fruits</p></a>
        </div>
        <div class="le">
            <a href="legume.php"><img src="legumimi.png" alt="Légumes" title="Légumes"/></a>
            <a href="legume.php"><p>Légumes</p></a>
        </div>
    </div>

    <div id="histoire"><h4>Offres recemment ajoutées</h4></div>
    
    <div class="position">
        <p>
            <form id="pos">
            <input type="checkbox" value="Utiliser ma position"/> Utiliser ma position
            </form>
            <form id="dep">
            Département : <input type="text" />
            </form>
        </p>
    </div>

    <div class="offre">
        <div class="offre-produit">
            <div class="illustration-produit"><img src="images/produit.jpg" alt="produit"/></div>
            <div class="produit">
                <h4>Ma 1ere offre</h4>
                <p>Description offre</p>
            </div>
        </div>
        <div class="offre-produit">
            <div class="illustration-produit"><img src="images/produit.jpg" alt="produit"/></div>
            <div class="produit">
                <h4>Ma 2eme offre</h4>
                <p>Description offre</p>
            </div>
        </div>
    </div>

     <div id="histoire"><h4>La semaine dernière :</h4></div>

    <div class="semaine">
        <div class="fruit">
            <h2 id="fruit">Fruit de la semaine</h2>
                <img src="images/banane.jpg" alt="banane"/>
        </div>
        <div class="legume">
            <h2 id="legume">Légume de la semaine</h2>
                <img src="images/carotte.jpg" alt="carotte"/>
        </div>
        <div class="vendeur">
            <h2 id="vendeur">Vendeur de la semaine</h2>
                <img src="images/vendeur.jpg" alt="vendeur"/>
        </div>
    </div>
    
    <?php include("footer.php"); ?>

    </body>

</html>