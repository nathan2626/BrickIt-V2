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
</head>
<body>
<main class="mainCategories">
    <header class="headerCategories">
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
        <article class="fullScreenVideo">
            <div class="screenVideo">
                <video id="slider" autoplay muted loop>
                    <source src="../assets/videos/Lego.mp4" type="video/mp4">
                </video>
                <ul class="navCategories">
                    <li onclick="videoUrl('assets/vendors/Lego.mp4')"><img src="./assets/images/imageLOTRCategories.jpg"></li>
                    <li onclick="videoUrl('assets/vendors/Lego.mp4')"><img src="./assets/images/imageMinionCategories.jpg"></li>
                    <li onclick="videoUrl('assets/vendors/Lego.mp4')"><img src="./assets/images/imageMarvelCategories.jpg"></li>
                    <li onclick="videoUrl('assets/vendors/Lego.mp4')"><img src="./assets/images/imageWarcraftCategories.jpg"></li>
                </ul>
            </div>
            <div class="contentVideo contentVideoCategories">
                <div class="hook hookCategories">
                    <h1>Encore un peut de patience... <br>Ces catégories que vous rêvez tant seront bientôt disponibles</h1>
                </div>
            </div>
        </article>
    </header>
    <!--Categorie slide part-->
    <article class="sliderCategories">
        <div class="titleCategories">
            <h1>Catégories</h1>
        </div>
        <div class="section-one">
            <div class="slide">
                <div class="content">
                    <h2>Slide 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
                        massa, varius a, semper congue, euismod non, mi.</p>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h2>Disney : La Reine Des Neiges</h2>
                    <p>Tout l'univers de Disney dans ce merveilleux thème ! Et La Reine Des Neiges en fait partit !</p>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h2>Slide 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
                        massa, varius a, semper congue, euismod non, mi.</p>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h2>Slide 4</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
                        massa, varius a, semper congue, euismod non, mi.</p>
                </div>
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
            <img src="./assets/images/imageLogoTest.png" alt="">
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

<script type="text/javascript">
    //Slider categories
    function videoUrl(navCategories1) {
        document.getElementById("slider").src = navCategories1;
    }
</script>
</body>
</html>