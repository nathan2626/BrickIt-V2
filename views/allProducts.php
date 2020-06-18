<!-- This is this page that will receive a product name and will therefore display all the corresponding products -->
<body>
<main class="mainCategories">
    <!-- Specific content that will contain the nav -->
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
    <?php if(!empty($_POST['nameProduct'])): ?>
        <?php if($productsSearch):?>
            <article class="bestSellers searchAllProducts">
            <h1>Produits correspondants à votre recherche <?= $_POST['nameProduct']?></h1>
            <div class="childBestSellers">
                <?php foreach ($productsSearch as $productSearch): ?>
                    <div class="sub-item introImage">
                        <a href="index.php?p=products&action=single&id=<?= $productSearch['id'] ?>">
                            <div class="imgResp" style="width: 580px;">
                                <img src="./assets/images/product/<?= $productSearch['image'] ?>" alt="Image du produit : <?= $productSearch['name'] ?>">
                            </div>
                            <div class="overlay">
                                <h1><?= $productSearch['name'] ?></h1>
                                <div class="separator separatorBestSellers"></div>
                                <div class="price">
                                    <h2><?= $productSearch['price'] ?>€ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>
        <?php else:?>
            <article class="bestSellers searchNotFound">
        <h1 style="margin-bottom: 200px; margin-top: -50px;">Aucun résultat pour <?= $_POST['nameProduct']?></h1>
    </article>
        <?php endif; ?>
    <?php endif; ?>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>