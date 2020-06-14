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
    <?php if($productsSearch->rowCount() > 0):?>
    <article class="bestSellers">
        <h1>Meilleures ventes</h1>
        <div class="childBestSellers">
            <?php while($productSearch = $productsSearch->fetch()): ?>
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
            <?php endwhile; ?>
        </div>
    </article>
    <?php else:?>
        Aucun résultat
    <?php endif; ?>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>