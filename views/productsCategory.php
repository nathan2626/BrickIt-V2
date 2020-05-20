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
                            <?php foreach($categories as $theme): //Because I later use category?>
                                <li><a href="index.php?p=productsCategory&category_id=<?= $theme['id'] ?>"><?= $theme['name'] ?></a></li>
                            <?php endforeach; ?>
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
                <img src="./assets/images/<?= $category['image'] ?>" alt="Image phare de la catégorie : <?= $category['name'] ?>">
            </div>
            <div class="textCategory">
                <h1><?= $category['name'] ?></h1>
                <p><?= $category['description'] ?></p>
            </div>
        </div>
    </article>
    <article class="productsCategory">
        <h1>Nos produits</h1>
        <div class="childProductsCategory">


<!--            --><?php //if(sizeof($products) > 0): //Autrement dit, s'il y a un ou plusieurs produits?>
<!--            --><?php //foreach($products as $product): ?>
<!--                    <div class="sub-item introImage">-->
<!--                        <a href="index.php?p=singleProduct&product_id=--><?//= $product['id'] ?><!--">-->
<!--                            <img src="./assets/images/--><?//= $product['image'] ?><!--" alt="Image du produit : --><?//= $product['name'] ?><!--">-->
<!--                            <div class="overlay">-->
<!--                                <h1>--><?//= $product['name'] ?><!--</h1>-->
<!--                                <div class="separator separatorProductsCategory"></div>-->
<!--                                <div class="price">-->
<!--                                    <h2>--><?//= $product['price'] ?><!--€ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                --><?php //endforeach; ?>
<!--            --><?php //else: ?>
<!--                <p>Pas encore de produits pour cette catégorie</p>-->
<!--            --><?php //endif; ?>



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

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>