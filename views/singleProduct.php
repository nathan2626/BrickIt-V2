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
                <?php require 'partials/navContenair.php'; ?>
            </nav>
        </div>
    </header>
    <article class="singleArticle">
        <div class="productPresentation">
            <div class="bigImageProduct">
                <img src="./assets/images/testElsa.PNG" alt="">
            </div>
            <div class="informationProduct">
                <div class="contentProduct">
                    <h1>La boîte à Bijoux d'Elsa</h1>
                    <p>La boîte à bijoux d’Elsa LEGO® l Disney
                        41168 constitue un cadeau idéal pour les fans
                        des films La Reine des neiges de Disney.</p><br>
                    <p>19.99$</p><br>
                    <a class="buttonAddCart" href="#">Ajouter au panier </a>
                </div>
                <div class="imagesProduct">
                    <div class="smallImageProduct">
                        <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                    </div>
                    <div class="smallImageProduct">
                        <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                    </div>
                    <div class="smallImageProduct">
                        <img src="./assets/images/imageMarvelCategories.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="productsCategory">
        <h1 class="titleRandom">Produits qui peut vous interesser</h1>
        <div class="childProductsCategory">
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