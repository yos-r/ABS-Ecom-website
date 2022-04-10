<!-- header qui inclut la barre de navigation, le logo du panier, la barre de recherche -->
<body>    
<header>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="logo-area">
                <a href="#" class="logo"><span>A</span>BS</a><!--on doit placer le logo-->
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav">
                    <li><a href="./index.php#banniere">Accueil</a></li>
                    <li><a href="./index.php#apropos">Apropos</a></li>
                    <li><a href="./index.php#produits">Produits</a></li>
                    <li><a href="./index.php#temoignage">Temoignage</a></li>
                    <li><a href="./index.php#contact">Contact</a></li>
                    <?php
                        if(!isset($_SESSION['customer_email'])){
                        echo '<li><a href="customer_register.php">Register</a></li>';
                        } 
                        else
                        { 
                            echo '<li><a href="customer/my_account.php?my_orders">Account</a></li>';
                        }   
                    ?> 
                    <?php
                        if(!isset($_SESSION['customer_email'])){
                        echo '<li><a href="customer/customer_login.php">Login</a></li>'; //checkout.php!!
                        } 
                        else
                        { 
                            echo '<li><a href="customer/logout.php" ">Logout</a></li>';
                        }   
                    ?> 
                    <li><a id="cart" href="cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        </a>
                    </li>
                </ul>
                <!-- 
                <div class="search-container">
                    <form action="search" >
                        <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
                        <label class="button searchbutton" for="searchright"><i class="fas fa-search"></i></label>
                    </form>
                    <div class="result" style="position: absolute;z-index: 999;top: 100%;left: 0;">
                    </div>
                </div> -->
                <form class="search-box" method="get" action="search.php"> 
                    <input type="text" autocomplete="off" placeholder="Chercher produit..." name="searchterm" />
                    <button type="submit" name="search"> Chercher </button>
                    <div class="result" style="width: 100%;box-sizing: border-box;"></div>
                </form>
                
                
        </nav> 
</header>
