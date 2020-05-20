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
<body class="bodyContactUs">
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
<article class="wrapper">
    <h1>Partagez-nous votre rêve !</h1>
    <form action="" class="form-area">
        <div class="msg-area">
            <label for="msg">Message</label>
            <textarea id="msg"></textarea>
        </div>
        <div class="details-area">
            <label for="name">Nom</label>
            <input type="text" name="" id="name">
            <label for="firstName">Prénom</label>
            <input type="text" name="" id="firstName">
            <label for="email">Email</label>
            <input type="email" name="" id="email">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</article>
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
<script src="./assets/js/index.js"></script>
</body>
</html>