<!DOCTYPE html>
<html>

  <head>
    
    <meta charset="utf-8"/>
    <title>Accueil</title>

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <?php include("header.php"); ?>

    <div id="accueil"><h4>Accueil</p></div>
    
    <hr>
    <div class="intro">
        <h4 id="histoire">L'histoire de Troc & Croc</h4>
        
        <img src="Champs.jpg" class="debut"/></p>
            <p class="caca"><h1>Introduction</h1>
                    Troc & Croc est un site internet de e-commerce permettant d'échanger,
                    acheter ou vendre des fruits et légumes près de chez soi. 
                    Vous pouvez à tout moment remplir votre panier de produits frais directement
                    issus du potager d'un de nos vendeurs.
                    Pour découvrir nos offres <a href="inscription.php">inscrivez-vous</a>.
                    Presentation du site
                    But de la création du site
                    Vanter nos produits frais
                    Choisissez votre producteur près de chez vous</p>

    </div>
</br>
</br>
</br>
</br>
    <div class="fruitlegume">            
        <div class="fr">
            <a href="fruit.html"><img src="images/fruits.jpg" alt="Fruits" title="Fruits" /></a>
            <a href="fruit.html"><p>Fruits</p></a>
        </div>
        <div class="le">
            <a href="legumes.html"><img src="images/legumes.jpg" alt="Légumes" title="Légumes"/></a>
            <a href="legumes.html"><p>Légumes</p></a>
        </div>
    </div>

    <div id="offres"><h4>Offres recemment ajoutées</h4></div>
    
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