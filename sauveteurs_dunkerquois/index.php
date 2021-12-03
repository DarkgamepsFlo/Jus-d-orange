<?php
session_start();
    
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');
//     if(isset($_SESSION['id'])) 
// {
//    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
//    $requser->execute(array($_SESSION['id']));
//    $user = $requser->fetch();
// }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/01b6b432e0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/article.css">
    <title>Les sauveteurs du dunkerquois</title>
</head>
<body>

<!-- petite page de chargement -->
        <!-- <div class="loader">
            <span class="letter">L</span>
            <span class="letter">O</span>
            <span class="letter">A</span>
            <span class="letter">D</span>
            <span class="letter">I</span>
            <span class="letter">N</span>
            <span class="letter">G</span>
        </div> -->
    <div class="header">
        <div class="header__texture"></div>
        <div class="container">
            <div class="navbar">
                <div class="navbar__logo">
                    <h1 class="navbar__title">Les sauveteurs du dunkerquois</h1>
                </div>
                <div class="navbar__menu">
                    <a href="#" class="menu__link"><i class="fas fa-home"></i>Accueil</a>
                    <a href="" class="menu__link"><i class="fas fa-info-circle"></i>+ d'information</a>
                </div>
                <div class="navbar__toggle">
                    <span class="toggle__icons"></span>
                </div>
            </div>
            <div class="header__slogan">
                <h1 class="slogan__title">Pour que l'eau n'ait jamais le goût des larmes....</h1>
                <a href="recherche.php" class="btn">recherche</a>
            </div>
        </div>
    </div>
    <!-- Cliquez sur personnel pour accéder à la page de Piere Louis Ficquet -->
    
        <div class="container">
                <h2 class="article__title">Les différents acteurs</h2>
            <div class="article__items">
                <a href="Page_de_Pierre_Louis_Ficqet.php"class="article">
                    <div class="article__filter"></div>
                    <div class="article__icons"><i class="fas fa-eye"></i></div>
                    <div class="article__name">personnel</div>  
                    
                </a>

                <a href="" class="article2">
                    <div class="article__filter"></div>
                    <div class="article__name">Corsaires dunkerquois</div>
                    <div class="article__icons"><i class="fas fa-eye"></i></div>
                </a>
                <a class="article3">
                    <div class="article__filter"></div>
                    <div class="article__name">SNSM</div>
                    <div class="article__icons"><i class="fas fa-eye"></i></div>
                </a>
            </div>
            <p class="paragraph">Le site web "Les Sauveteurs du Dunkerquois" recense les sauvetages en
               milieu aquatique depuis 1740 . Il est tenu et alimenté par Philippe Boutelier.
               On y trouve les récits (circonstances, déroulement, etc.) des différents
               sauvetages opérés dans le monde par des habitants de la région
               Dunkerquoise : secours porté en mer auprès de bateaux en détresse mais
               aussi sauvetage de personnes tombées à l‘eau dans les limites du territoire
               de l’étude*.
               Les pages du site synthétisent des informations sur les sauveteurs, les
               personnes sauvées, les bateaux sauveteurs ou secourus. On y trouve
               également des données générales comme l’histoire du sauvetage, les
               moyens techniques déployés, des données annexes ou de cadrage, etc. De
               plus, d’autres sauveteurs (hors Dunkerquois) sont présents sur le site avec
               des fiches simplifiées.
               Toutes ces informations sont accessibles sous forme de pages rédigées. Il
               n'y a pas de base de données structurée répertoriant ces informations et
               donc aucune possibilité simple de faire des recherches sur, par exemple, le
               nom d'un sauveteur ou le nom d'un bateau échoué</p>
        </div>

        <footer>
            test
        </footer>

        
   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="public/js/base.js"></script>
</body>
</html>