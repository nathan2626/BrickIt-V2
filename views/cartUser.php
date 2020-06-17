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
                        <th>Prix du produit</th>
                        <th>Quantité</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $total = 0; ?>
                    <?php foreach ($cartProducts as $product): ?>
                    <tr>
                        <td><?= $product['name']?><a class="removeCart" href="index.php?p=cart&action=deleteProductCart&productId=<?= $product['id']?>">Supprimer</a></td>
                        <td><?= $product['price'] ?></td>
                        <td>
                             <p>Quantité choisie : <?= $_SESSION['cart'][$product['id']] ?></p>
                        </td>
                        <td><?= $rowTotal = $product['price'] * $_SESSION['cart'][$product['id']]; $total += $rowTotal //prix fois la quantité ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3">Totals</td>
                        <td><?= $total ?></td>
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
                        <td><?= $total ?></td>
                    </tr>
                    <tr>
                        <td>Livraison standard</td>
                        <td>Offerte</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Total de la commande</td>
                        <td><?= $total ?></td>
                    </tr>
                    <tr>
                        <?php if (isset($_SESSION['user'])):?>
                            <td>
                                <a class="buttonValidate" href="index.php?p=order&action=new">Paiement sécurisé (Valider)</a>
                            </td>
                            <td>
                                <a class="buttonPaypal" href="index.php?p=order&action=new">Payer avec Paypal (Valider)</a>
                            </td>
                        <?php else: ?>
                            <td>
                                <a href="index.php?p=user&action=connect">Connectez vous pour commander !</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </section>
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
        </div>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>