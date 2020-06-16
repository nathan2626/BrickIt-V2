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
            <p>Patience !</p>
            <p>La magie de Brick'It s'opère...</p>
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
            <i class="fas fa-bars whiteBurger"></i>
        </div>
        <div class="overlayNav"></div>
        <div class="containerNav">
            <nav>
                <?php require 'partials/navContenair.php'; ?>
            </nav>
        </div>
        <!--Video and content video -->
        <article class="fullScreenVideo">
            <div class="screenVideo">
                <video autoplay id="video" class="homePageVideo">
                    <source src="./assets/videos/Lego.mp4" type="video/mp4">
                </video>
            </div>
            <div class="contentVideo">
                <div class="hook">
                    <h1>Quand <span>votre</span> rêve devient<br> <span>notre</span> réalité...</h1>
                    <p>Nos nouveautés Lego exclusifs !</p>
                    <a class="buttonVideo" href="#">Découvrir</a>
                </div>
            </div>
        </article>
    </header>
<!--    --><?php
//    $db = dbConnect();
//    $query = $db->prepare('SELECT * FROM products ORDER BY price DESC');
//    $query->execute();
//    $productsSearch = $query;
//
//    if (isset($_GET['nameProduct']) AND !empty($_GET['nameProduct'])) {
//        $nameProduct = htmlspecialchars($_GET['nameProduct']);
//        $query = $db->prepare('SELECT * FROM products WHERE name LIKE "%'.$nameProduct.'%" ORDER BY price DESC');
//        $query->execute();
//        $productsSearch = $query;
//    }
//
//    ?>
<!--    --><?php //if(!empty($_GET['nameProduct'])): ?>
<!--        --><?php //if($productsSearch->rowCount() > 0):?>
<!--            <article class="bestSellers">-->
<!--                <h1>Produits correspondants à "--><?//= $nameProduct ?><!--"</h1>-->
<!--                <div class="childBestSellers">-->
<!--                    --><?php //while($productSearch = $productsSearch->fetch()): ?>
<!--                        <div class="sub-item introImage">-->
<!--                            <a href="index.php?p=products&action=single&id=--><?//= $productSearch['id'] ?><!--">-->
<!--                                <div class="imgResp" style="width: 580px;">-->
<!--                                    <img src="./assets/images/product/--><?//= $productSearch['image'] ?><!--" alt="Image du produit : --><?//= $productSearch['name'] ?><!--">-->
<!--                                </div>-->
<!--                                <div class="overlay">-->
<!--                                    <h1>--><?//= $productSearch['name'] ?><!--</h1>-->
<!--                                    <div class="separator separatorBestSellers"></div>-->
<!--                                    <div class="price">-->
<!--                                        <h2>--><?//= $productSearch['price'] ?><!--€ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    --><?php //endwhile; ?>
<!--                </div>-->
<!--            </article>-->
<!--        --><?php // else : ?>
<!--            <article class="bestSellers">-->
<!--                <h1>Aucun produits trouvés pour "--><?//= $nameProduct ?><!--"</h1>-->
<!--                <div class="productsCategory">-->
<!--                    <h1 class="titleRandom">Produits qui peut vous interesser</h1>-->
<!--                    <div class="childProductsCategory">-->
<!---->
<!---->
<!--                        --><?php
//                        //cette variable va garder en mémoire les ID des produits séléctionnés par la boucle suivante afin de ne pas les re-selectionner
//                        $selectedProductsSearch = [];
//
//                        for($n=0;$n<4;$n++): ?>
<!--                            --><?php
//                            //Tant que $nb aléatoire existe dans le tableau $selectedProductsCategory, on le re-génère
//                            do{
//                                $nb = rand(0, sizeof($allProducts) - 1 );
//                            } while(in_array($nb , $selectedProductsSearch));
//
//                            //$selectedProductCategory = le produit selectionné
//                            $selectedProductsSearch = $allProducts[$nb];
//                            //on enregistre l'id du produit selectionné dans $selectedProductsCategory pour ne pas le re-séléctionner dans les prochaines ittérations de boucle
//                            $selectedProductsSearch[] = $nb;
//                            ?>
<!--                            <div class="sub-item introImage">-->
<!--                                <a href="">-->
<!--                                    <div class="imgResp" style="width: 580px;">-->
<!--                                        <img src="./assets/images/product/--><?//= $selectedProductsSearch['image'];?><!--" alt="--><?//= $selectedProductsSearch['name'];?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="overlay">-->
<!--                                        <h1>--><?//= $selectedProductsSearch['name'];?><!--</h1>-->
<!--                                        <div class="separator separatorProductsCategory"></div>-->
<!--                                        <div class="price">-->
<!--                                            <h2>--><?//= $selectedProductsSearch['price'];?><!--€ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        --><?php //endfor; ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </article>-->
<!--        --><?php //endif; ?>
<!--    --><?php // else : ?>
        <article class="aboutUs">
            <h1>Qui-sommes-nous ?</h1>
            <div class="childAboutUs">
                <div class="sub-itemAboutUs">
                    <p><span>Brick'It Group</span><br><br>
                        Bienvenue dans notre mystérieux univers, celui de vos rêves
                        les plus féériques !<br>
                        Nous sommes une entreprise française revendant des jeux de construction de toute gamme.
                        Notre seul but, réaliser votre rêve !
                        <br><a class="buttonAboutUs" href="#">Viens jouer avec nous !</a>
                    </p>
                    <div class="imgAboutUs">
                        <img src="./assets/images/team.jpg" alt="Image de l'équipe BrickIt">
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
                            <div class="imgResp" style="width: 580px;">
                                <img src="./assets/images/product/<?= $best['image'] ?>" alt="Image du produit : <?= $best['name'] ?>">
                            </div>
                            <div class="overlay">
                                <h1><?= $best['name'] ?></h1>
                                <div class="separator separatorBestSellers"></div>
                                <div class="price">
                                    <h2><?= $best['price'] ?>€ <a href="index.php?p=cart&action=addProductCart"><i class="fas fa-shopping-bag"></i></a></h2>
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
                            <div class="imgResp" style="width: 580px;">
                                <img src="./assets/images/product/<?= $novelty['id'] ?>" alt="Image du produit : <?= $novelty['name'] ?>">
                            </div>
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
<!--    --><?php //endif; ?>

</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>