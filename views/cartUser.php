<body>
<header class="headerCategories headerCategoriesProducts">
    <!--Nav-->
    <div class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="overlayNav"></div>
    <div class="containerNav">
        <nav class="colorCategoryProducts">
            <h1 class="brickIt"><a href="index.php">Brick'It</a></h1>
            <?php require 'partials/navContenair.php'; ?>
        </nav>
    </div>
</header>
<main>
    <article class="userLogin">
        <section class="commandHistoryUserLogin">
            <h1 class="myCart">Mon panier</h1>
            <div class="allUserLoginHistory cartHistory">
                <table class="recapCartLeft">
                    <thead>
                    <tr>
                        <th>Nom du produit</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Star wars le vaisseau ...</td>
                        <td>
                            <input class="numberCart" type="number" value="1">
                            <button class="removeCart" type="button">Supprimer</button>
                        </td>
                        <td>59.97</td>
                    </tr>
                    <tr>
                        <td>Star wars le vaisseau ...</td>
                        <td>
                            <input class="numberCart" type="number" value="1">
                            <button class="removeCart" type="button">Supprimer</button>
                        </td>                        <td>59.97</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2">Totals</td>
                        <td>119.94$</td>
                    </tr>
                    </tfoot>
                </table>
                <table class="recapCartRight">
                    <thead>
                    <tr>
                        <th colspan="2">Récapitulatif de ma commande</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Sous-total des articles</td>
                        <td>59.97</td>
                    </tr>
                    <tr>
                        <td>Livraison standard</td>
                        <td>Offerte</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Total de la commande</td>
                        <td>59.97</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="buttonValidate" href="#">Paiement sécurisé</a>
                        </td>
                        <td>
                            <a class="buttonPaypal" href="#">Payer avec Paypal</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </section>
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