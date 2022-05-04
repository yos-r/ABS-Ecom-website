<!-- header qui inclut la barre de navigation, le logo du panier, la barre de recherche -->
<body>    
<header>
    <div class="profile">
            <div class="logo-lg">
                <a href="./index.php#banniere" class="logo"><span>A</span>BS</a><!--on doit placer le logo-->
            </div>
            <?php
                if(!isset($_SESSION['customer_email'])){
                    echo '<a href="../customer_register.php"><button class="btn btn-primary">S\'inscrire</button></a>';
                    } 
                    else
                    { 
                        echo '<a href="my_account.php?my_orders"><button class="btn btn-primary">Compte</button class="btn btn-primary"></a>';
                    }   
                    ?> 
                    <?php
                        if(!isset($_SESSION['customer_email'])){
                        echo '<a href="customer_login.php"><button class="btn btn-primary">Se connecter</button></a>'; //checkout.php!!
                        } 
                        else
                        { 
                            echo '<a href="logout.php"><button class="btn btn-primary">Se déconnecter</button></a>';
                        }   
                    ?> 
    </div>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="logo-sm">
                <a href="./index.php#banniere" class="logo"><span>A</span>BS</a><!--on doit placer le logo-->
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav">
                    <li><a href="../index.php#apropos">À propos</a></li>
                    <li><a href="../products.php">Produits</a></li>
                    <li><a href="../index.php#temoignage">Témoignage</a></li>
                    <li><a href="../index.php#contact">Contact</a></li>
                    <li><a id="cart" href="../cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        </a>
                    </li>
                </ul>
                <div class="search-box search-box-sm">
                <form method="get" class="search-form" action="search.php"> 
                    <input type="text" autocomplete="off" placeholder="Chercher produit..." name="searchterm" />
                    <button type="submit" name="search">chercher</button>
                    <div class="result" style="width: 100%;box-sizing: border-box;"></div>
                </form>
            </div>
        </nav> 
        <div class="search-box search-box-lg">
            <form method="get" class="search-form" action="../search.php"> 
                <input type="text" autocomplete="off" placeholder="Chercher produit..." name="searchterm" />
                <button type="submit" name="search">chercher</button>
                <div class="result" style="width: 100%;box-sizing: border-box;"></div>
            </form>
        </div>
</header>