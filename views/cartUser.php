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
        <h1>Nos produits</h1>
        <div class="childProductsCategory">
            <?php if(sizeof($categoryProducts) > 0): //Autrement dit, s'il y a un ou plusieurs produits?>
                <?php foreach($categoryProducts as $categoryProduct): ?>
                    <div class="sub-item introImage">
                        <a href="index.php?p=products&action=single&id=<?= $categoryProduct['id']; ?>">
                            <div class="imgResp" style="width: 580px;">
                                <img src="./assets/images/category/<?= $categoryProduct['image']; ?>" alt="Image du produit : <?= htmlentities($categoryProduct['name']); ?>">
                            </div>
                            <div class="overlay">
                                <h1><?= htmlentities($categoryProduct['name']); ?></h1>
                                <div class="separator separatorProductsCategory"></div>
                                <div class="price">
                                    <h2><?= htmlentities($categoryProduct['price']); ?>€ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="notFoundProduct">Pas encore de produits pour cette catégorie</p>
            <?php endif; ?>
        </div>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>