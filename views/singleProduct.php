<body>
<main class="mainCategories">
    <header class="headerCategories headerCategoriesProducts">
        <!--Nav-->
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlayNav"></div>
        <div class="containerNav">
            <nav class="colorAccount">
                <?php require 'partials/navContenair.php'; ?>
            </nav>
        </div>
    </header>
    <article class="singleArticle">
        <div class="productPresentation">
            <div class="bigImageProduct">
                <img src="./assets/images/product/<?= $product['image'] ?>" alt="<?= htmlentities($product['name']); ?>">
            </div>
            <div class="informationProduct">
                <div class="contentProduct">
                    <h1><?= htmlentities($product['name']); ?></h1>
                    <p><?= htmlentities($product['description']); ?></p><br>
                    <p><?= htmlentities($product['price']); ?>€</p><br>
                    <a class="buttonAddCart" href="#">Ajouter au panier </a>
                </div>
                <div class="imagesProduct">
                    <div class="smallImageProduct">
                        <img src="./assets/images/product/<?= $product['image'] ?>" alt="<?= htmlentities($product['name']); ?>">
                    </div>
                    <div class="smallImageProduct">
                        <img src="./assets/images/product/<?= $product['image'] ?>" alt="<?= htmlentities($product['name']); ?>">
                    </div>
                    <div class="smallImageProduct">
                        <img src="./assets/images/product/<?= $product['image'] ?>" alt="<?= htmlentities($product['name']); ?>">
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="productsCategory">
        <h1 class="titleRandom">Produits qui peut vous interesser</h1>
        <div class="childProductsCategory">


            <?php
            //cette variable va garder en mémoire les ID des produits séléctionnés par la boucle suivante afin de ne pas les re-selectionner
            $selectedProductsCategory = [];

            for($n=0;$n<4;$n++): ?>
            <?php
            //Tant que $nb aléatoire existe dans le tableau $selectedProductsCategory, on le re-génère
            do{
                $nb = rand(0, sizeof($products) - 1 );
            } while(in_array($nb , $selectedProductsCategory));

            //$selectedProductCategory = le produit selectionné
            $selectedProductCategory = $products[$nb];
            //on enregistre l'id du produit selectionné dans $selectedProductsCategory pour ne pas le re-séléctionner dans les prochaines ittérations de boucle
            $selectedProductsCategory[] = $nb;
            ?>
            <div class="sub-item introImage">
                <a href="">
                    <div class="imgResp" style="width: 580px;">
                        <img src="./assets/images/product/<?= $selectedProductCategory['image'];?>" alt="<?= $selectedProductCategory['name'];?>">
                    </div>
                        <div class="overlay">
                        <h1><?= $selectedProductCategory['name'];?></h1>
                        <div class="separator separatorProductsCategory"></div>
                        <div class="price">
                            <h2><?= $selectedProductCategory['price'];?>€ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                        </div>
                    </div>
                </a>
            </div>
            <?php endfor; ?>

            <!--            <div class="sub-item introImage">-->
<!--                <a href="">-->
<!--                    <img src="./assets/images/imageMarvelCategories.jpg" alt="">-->
<!--                    <div class="overlay">-->
<!--                        <h1>Star Wars</h1>-->
<!--                        <div class="separator separatorProductsCategory"></div>-->
<!--                        <div class="price">-->
<!--                            <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="sub-item introImage">-->
<!--                <a href="">-->
<!--                    <img src="./assets/images/imageMarvelCategories.jpg" alt="">-->
<!--                    <div class="overlay">-->
<!--                        <h1>Star Wars</h1>-->
<!--                        <div class="separator separatorProductsCategory"></div>-->
<!--                        <div class="price">-->
<!--                            <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="sub-item introImage">-->
<!--                <a href="">-->
<!--                    <img src="./assets/images/imageMarvelCategories.jpg" alt="">-->
<!--                    <div class="overlay">-->
<!--                        <h1>Star Wars</h1>-->
<!--                        <div class="separator separatorProductsCategory"></div>-->
<!--                        <div class="price">-->
<!--                            <h2>19.99$ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>