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
    <!--Loading page part-->
    <article class="allLoadingPage">

        <canvas id="canvas"></canvas> <!--for the fireworks-->
        <div class="loadingPage">
            <audio controls preload="auto" autoplay class="audioLoadingPage">
                <source src="./assets/vendors/star-wars-trap-remix-imperial-march-darth-vaders-theme.mp3" type="audio/ogg">
            </audio>
            <div class="logoLoader">
                <img src="./assets/images/imageLogoTest.png" alt="">
            </div>
            <div class="gifLoader">
                <img src="./assets/images/imageLoader.gif" alt="">
            </div>
            <div class="textLoader">
                <p>Encore un peu de patience !</p>
                <p>La magie de Brick'It est en train de s'opérer...</p>
            </div>
            <div class="loader">
                <div class="progress progressLoader">
                    <div class="progress progressColor"></div>
                </div>
            </div>
        </div>
    </article>
    <main class="main">
        <header>
            <!--Nav-->
            <div class="menu-toggle" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
            <div class="overlayNav"></div>
            <div class="containerNav">
                <nav>
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
            <!--Video and content video-->
            <article class="fullScreenVideo">
                <div class="screenVideo">
                    <video autoplay id="video" class="homePageVideo">
                        <source src="./assets/videos/Lego.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="contentVideo">
                    <div class="hook">
                        <h1>Quand <span>votre</span> rêve devient<br> <span>notre</span> réalité...</h1>
                        <p>Découvrez nos nouveautés exclusifs Lego Star Wars<br>et partez à la conquête de la galaxie !</p>
                        <a class="buttonVideo" href="#">Visiter la boutique </a>
                    </div>
                </div>
            </article>
        </header>
        <article class="aboutUs">
            <h1>Qui-sommes-nous ?</h1>
            <div class="childAboutUs">
                <div class="sub-itemAboutUs">
                    <p><span>Brick'It Group</span><br><br>
                        Bienvenue dans notre mystérieux univers, celui de vos rêves
                        les plus féériques !<br>
                        Nous sommes une entreprise française revendant des jeux de construction de toute gamme.
                        <span class="spanAboutUs">Notre</span> seul but, réaliser <span class="spanAboutUs">votre</span> rêve !
                        <br><a class="buttonAboutUs" href="#">Viens jouer avec nous !</a>
                    </p>
                    <div class="imgAboutUs">
                        <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                    </div>
                </div>
            </div>
        </article>
        <article class="bestSellers">
            <h1>Meilleures ventes</h1>
            <div class="childBestSellers">
                <div class="sub-item introImage">
                    <a href="">
                        <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                        <div class="overlay">
                            <h1>Star Wars</h1>
                            <div class="separator separatorBestSellers"></div>
                            <div class="price">
                                <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="sub-item introImage">
                    <a href="">
                        <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                        <div class="overlay overlayAboutUs">
                            <h1>Star Wars</h1>
                            <div class="separator separatorBestSellers"></div>
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
                            <div class="separator separatorBestSellers"></div>
                            <div class="price">
                                <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="sub-item introImage">
                    <a href="">
                        <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                        <div class="overlay overlayAboutUs">
                            <h1>Star Wars</h1>
                            <div class="separator separatorBestSellers"></div>
                            <div class="price">
                                <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </article>
        <article class="novelties">
            <h1>Nouveautés</h1>
            <div class="childNovelties">
                <div class="sub-item introImage">
                    <a href="">
                        <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                        <div class="overlay">
                            <h1>Star Wars</h1>
                            <div class="separator"></div>
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
                            <div class="separator"></div>
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
                            <div class="separator"></div>
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
                            <div class="separator"></div>
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
        <p><a href="./assets/vendors/CONDITIONS%20GENERALES%20DE%20VENTE.pdf" target="_blank">Conditions générales de vente</a></p>
        <p><a href="./assets/vendors/Mentions%20Légales.pdf" target="_blank">Mentions légales</a></p>
        <p> Copyright 2019 JOURNO Nathan - Toute représentation interdite</p>
    </footer>
    <a href="#" class="toTop">
        <i class="fas fa-arrow-circle-up"></i>
    </a>
<script src="./assets/js/index.js"></script>
</body>
</html>