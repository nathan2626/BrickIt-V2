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
                <?php require 'partials/navContenair.php'; ?>
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
            <?php foreach ($bestsProducts as $best): ?>
            <div class="sub-item introImage">
                <a href="index.php?p=products&action=single&id=<?= $best['id'] ?>">
                    <img src="./assets/images/imageMarvelCategories.jpg" alt="Image du produit : <?= $best['name'] ?>">
                    <div class="overlay">
                        <h1><?= $best['name'] ?></h1>
                        <div class="separator separatorBestSellers"></div>
                        <div class="price">
                            <h2><?= $best['price'] ?>€ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </article>
    <article class="novelties">
        <h1>Nouveautés</h1>
        <div class="childNovelties">
            <?php foreach ($productsNovelties as $novelty): ?>
            <div class="sub-item introImage">
                <a href="index.php?p=products&action=single&id=<?= $novelty['id'] ?>">
                    <img src="./assets/images/imageMarvelCategories.jpg" alt="Image du produit : <?= $novelty['name'] ?>">
                    <div class="overlay">
                        <h1><?= $novelty['name'] ?></h1>
                        <div class="separator"></div>
                        <div class="price">
                            <h2><?= $novelty['price'] ?>€ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>