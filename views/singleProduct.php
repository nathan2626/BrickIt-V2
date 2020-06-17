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
    <?php print_r($_SESSION['user'])?>
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
                    <form  class="submitCart" action="index.php?p=cart&action=addProductCart&product_id=<?= $product['id'] ?>" method="post">
                        <select class="submitCartI" name="quantityProduct">
                            <?php for ($i=1; $i <= $product['quantity']; $i++): ?>
                                <option class="submitCartO" value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                        <input class="submitCartI" type="submit" value="Enregistrer">
                    </form>
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
        <div class="allCommentsPart">
            <div>
                <h1>Postez votre commentaire !</h1>
                <form class="formComment" action="index.php?p=products&action=addComment&id=<?= $product['id']?>" method="post" enctype="multipart/form-data">
                    <input type="text" name="pseudo" placeholder="Votre pseudo"> <br>
                    <input type="number" name="notation" placeholder="Note entre 0 et 5 inclus"> <br>
                    <textarea name="comment" placeholder="Votre commentaire..."></textarea><br>
                    <input type="submit" value="Poster" name="submit_comment">
                </form>
            </div>
            <?php if(isset($_SESSION['messages'])): ?>
                <div class="msgSession">
                    <?php foreach($_SESSION['messages'] as $message): ?>
                        <?= $message ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <details>
                <summary>Commentaires :</summary>
                <?php if(isset($allComments)): ?>
                    <?php foreach ($allComments as $comments): ?>
                        <div class="allCommentUser">
                            <p class="commentDate"><?= $comments['date'] ?></p>
                            <p class="commentNotation">
                                <?php for ($i=0; $i < $comments['notation']; $i++): ?>
                                    <i class="far fa-star"></i>
                                <?php endfor; ?>
                            </p>
                            <p class="commentUsername"><?= $comments['username'] ?> | <span class="commentPseudo"><?= $comments['pseudo'] ?></span></p>
                            <p class="commentComment"><?= $comments['comment'] ?></p>
                        <hr>
                        </div>
                        <br>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Aucun commentaires pour ce produit</p>
                <?php endif; ?>
            </details>
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
        </div>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>