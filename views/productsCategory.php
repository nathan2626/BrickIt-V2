<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/images/imageLogoTest.png"/>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Brick'It</title>
</head>
<body>
<main class="mainCategories">
    <header class="headerCategories headerCategoriesProducts">
        <!--Nav-->
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlayNav"></div>
        <div class="containerNav">
            <nav class="colorCategoryProducts">
                <h1 class="brickIt"><a href="index.php">Brick'It</a></h1>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php?p=categories">Catégories</a>
                        <ul class="submenu">
                            <li><a href="">Harry Potter</a></li>
                            <li><a href="">Disney</a></li>
                            <li><a href="">Star Wars</a></li>
                            <li><a href="">Warcraft</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?p=game" class="exception">Jeu</a></li>
                    <li><a href="index.php?p=account">Compte</a></li>
                    <li><a href="index.php?p=contact">Contact</a></li>
                    <li><a href=""><i class="fas fa-search search"></i></a></li>
                    <li><a href=""><i class="fas fa-shopping-bag bag"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <article class="categoryArticle">
        <div class="categoryPresentation">
            <div class="imageCategory">
                <img src="./assets/images/imageTest4.jpg" alt="">
            </div>
            <div class="textCategory">
                <h1><?= $category['name'] ?></h1>
                <p>Tout l'univers de Disney dans ce merveilleux thème ! Et La Reine Des Neiges en fait partit !</p>
            </div>
        </div>
    </article>
    <article class="productsCategory">
        <h1>Nos produits</h1>
        <div class="childProductsCategory">
            <div class="sub-item introImage">
                <a href="">
                    <img src="./assets/images/testElsa.PNG" alt="">
                    <div class="overlay">
                        <h1>La boîte à bijoux d'Elsa</h1>
                        <div class="separator separatorProductsCategory"></div>
                        <div class="price">
                            <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sub-item introImage">
                <a href="">
                    <img src="./assets/images/testMickey.png" alt="">
                    <div class="overlay">
                        <h1>La parade d'anniversaire Mickey</h1>
                        <div class="separator separatorProductsCategory"></div>
                        <div class="price">
                            <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sub-item introImage">
                <a href="">
                    <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                    <div class="overlay">
                        <h1>Star Wars</h1>
                        <div class="separator separatorProductsCategory"></div>
                        <div class="price">
                            <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sub-item introImage">
                <a href="">
                    <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                    <div class="overlay">
                        <h1>Star Wars</h1>
                        <div class="separator separatorProductsCategory"></div>
                        <div class="price">
                            <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </article>
</main>
<footer>
    <div class="innerFooter">
        <div class="contactFooter">
            <p><span>Tel :</span> 06 55 45 35 25</p>
            <p><span>Email :</span> BrickIt@brickIt.com</p>
            <p><span>Adresse :</span> 19 Rue Yves Toudic, Paris</p>
        </div>
        <div class="logoContainer">
            <img src="../assets/images/imageLogoTest.png" alt="">
        </div>
        <div class="textFooter">
            <h1>Brick'It Group</h1>
            <a href=""><i class="fab fa-instagram fa-3x"></i></a>
            <a href="https://www.facebook.com/natan.journo"><i class="fab fa-facebook fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/nathan-journo/"><i class="fab fa-linkedin fa-3x"></i></a>
            <a href="https://github.com/nathan2626"><i class="fab fa-github fa-3x"></i></a>
        </div>
    </div>
    <p> Copyright 2019 JOURNO Nathan - Toute représentation interdite</p>
</footer>
<a href="#" class="toTop"><i class="fas fa-arrow-circle-up"></i></a>
<script src="./assets/js/index.js"></script>
</body>
</html>