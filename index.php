<?php
session_start();
require_once("includes/connection.php");
require_once("includes/head.php");
require_once("includes/functions.php");
require_once("includes/main.php");
?>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Soyez les bienvenus chez ABS</h2>
        <p>Vente des Matériaux de Construction en Tunisie, Coffrages,
            Échafaudages, Étaiements et Produits BTP.</p>
        <a href="#apropos" class="btn1">A propos</a>
        <a href="#produits" class="btn2">Nos produits</a>
    </div>
</section>
<!--fin page d acceuil-->
<section class="apropos" id="apropos">
   <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
               <h3>Nous somme une société Tunisienne spécialisée dans la vente de toutes les solutions de construction.</h3> 
               <br>
               <h3>Nous portons les produits de: Derbigum, Kaufmann, Mob Pedinhaus et bien d'autres fabricants renommés par leur dévouement à la qualité.</h3>
        </div>
       <div id="img-apropos" class="col50">
            <div class="img">
                <img src="./images/index/jYDfeATB_4x.jpg" alt="image">
            </div>
        </div>
    </div>
</section>
<!--fin page apropos-->
<!--page  produits -->
<section class="produits" id="produits">
    <div class="titre">
        <h2 class="titre-texte"><span>N</span>os Produits</h2>
    </div>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
  
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/products/FM-2000-WHITE.png" alt="FM-2000-WHITE" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/products/SOL-DC-1-min.png" alt="SOL-DC-1-min" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/products/vox-600-rouge.png" alt="vox-600-rouge" class="d-block w-100">
      </div>
    </div>
  
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <div class="plus">
      <a href="products.php" class="btn1">Voir Plus</a>
  </div>
</section>
<!---fin page produits-->
<!---page temoignage-->
<section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/index/ll.jpg" alt="">
            </div>
            <div class="text">
                <p>Grand choix de matériaux et de matériel pour la construction. Personnel technique compétant et disponible. Rapport qualité prix excellent..</p>
                <h3>Warren Buffett</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/index/kk.jpg" alt="">
            </div>
            <div class="text">
                <p>Cliente depuis plus de 10 ans, j'ai toujours été bien servi et reçu de bons conseils. Les prix sont honnêtes et on peu profiter de remise en ouvrant un compte client. A recommander dans la région !
                </p>
                <h3>SOFIA VERGARA. </h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/index/jj.jpg" alt="">
            </div>
            <div class="text">
                <p>Fournisseur en gros de matériaux.
                    Personnel très sympa. Prix compétitif
                    Dommage qu'il n ouvre pas le dimanche.</p>
                <h3> ARIANNA HUFFINGTON</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/index/pp.jpg" alt="">
            </div>
            <div class="text">
                <p>J ai trouver se que j avais besoin et eu de très bon conseil</p>
                <h3>James Dyson</h3>
            </div>
        </div>
    </div>
 </section>
 <!---fin page de temoignage-->

<!-- page contact -->
<section class="contact" id="contact">
    <div class="titre noir">
        <h2 class="titre-text" id="color"><span>C</span>ontact</h2>
    </div>
    <div class="contactform">
        <form action="">
           <h3>Envoyer un message</h3>
           <input type="text" placeholder="Nom" class="inputboite">
           <input type="text" placeholder="email" class="inputboite">
           <textarea placeholder="message" class="inputboite"></textarea>
           <input type="submit" value="envoyer" class="inputboite">
        </form>
    </div>
</section>
<?php include "includes/footer.php" ?>
</body>
</html>
