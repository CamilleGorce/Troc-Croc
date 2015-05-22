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
        
<table class="accueiltable">
            <tr class="tr_hauteur3">
                <td class="td_largeur3"><p>Intro
                    Presentation du site
                    But
                    Vanter
                    Choisissez
                </p></td>
                <td class="td_largeur3"><img src="Essai.png"/></td>

            </tr>
        </table>



        <ul>
            <li>Introduction</li>
            <li>Présentation du site</li>
            <li>But de la création du site</li>
            <li>Vanter nos produits frais</li>
            <li>Choisissez votre producteur près de chez vous.</li>
        </ul>
    </div>

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
    
    <footer>
        <h3 class="title-footer">A propos</h3>    
            <div class="col-footer">
                    <li><a href="#">A propos de Troc & Croc</a></li>
                    <li><a href="#">Qui sommes-nous?</a></li>
                    <li><a href="#">Conditions d'utilisations</a></li>
            </div>
            <div class="col-footer">
                    <li><a href="#">Plan du site</a></li> 
                    <li><a href="#">Confidentialité</a></li> 
                    <li><a href="#">Presse</a></li></li>
            </div>
            <div class="col-footer">
                    <li><a href="#">Aide</a></li>
                    <li><a href="#">Donner votre avis</a></li>
            </div>
</br>
</br>
    </footer>
    
    </body>

    

</html>