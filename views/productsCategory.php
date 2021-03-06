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
            <nav class="colorAccount blackSearch">
                <h1 class="brickIt"><a href="index.php">Brick'It</a></h1>
                <ul>
                    <li class="liHOpen2"><a href="index.php?p=categories&action=list">Catégories</a>
                        <ul class="submenu">
                            <?php foreach($categories as $theme): ?>
                                <li class="liHOpen"><a style="margin: 0;" href="index.php?p=categories&action=single&id=<?= $theme['id'] ?>"><?= $theme['name'] ?></a></li>
                            <?php endforeach; ?>
                            <!--                        <li><a href="">Disney</a></li>-->
                            <!--                        <li><a href="">Star Wars</a></li>-->
                            <!--                        <li><a href="">Warcraft</a></li>-->
                        </ul>
                    </li>
                    <li class="liHOpen3"><a href="./game/index.php" class="exception" target="_blank">Jeu</a></li>
                    <li class="liHOpen4"><a href="index.php?p=users&action=form">Compte</a></li>
                    <li class="liHOpen5"><a href="index.php?p=contact">Contact</a></li>
                    <?php if(isset($_SESSION['user']) && $_SESSION['user']['is_admin'] == 1): ?>
                        <li class="liHOpen6"><a href="./admin/index.php">Admin</a></li>
                    <?php endif; ?>
                    <?php if(isset($_SESSION['user'])): ?>
                        <li class="liHOpen7"><a href="index.php?p=users&action=disconnect">Déconnexion</a></li>
                    <?php endif; ?>
                    <!--    <li class=""><a href=""><i class="fas fa-search search"></i></a></li>-->
                    <!--    <form class="searchJsNav search-box" action="index.php?p=products&action=search" method="post" enctype="multipart/form-data">-->
                    <!--        <input type="search" name="nameProduct" class="search-text" placeholder="Rechercher un prduit">-->
                    <!--        <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>-->
                    <!--    </form>-->
                    <li class="blackSearchPng">
                        <form class="searchJsNav search-box" action="index.php?p=products&action=search" method="post" enctype="multipart/form-data">
                            <input type="search" name="nameProduct" class="search-text" placeholder="Rechercher un produit">
                            <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                    <li class="liHOpen8"><a href="index.php?p=cart&action=displayCart"><i class="fas fa-shopping-bag bag"></i></a></li>
                </ul>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Single category presentation -->
    <article class="categoryArticle">
        <div class="categoryPresentation">
            <div class="imageCategory">
                <img src="./assets/images/category/<?= $category['image'] ?>" alt="Image phare de la catégorie : <?= $category['name'] ?>">
            </div>
            <div class="textCategory">
                <h1><?= $category['name'] ?></h1>
                <p><?= $category['description'] ?></p>
            </div>
        </div>
    </article>
    <!-- Products by category -->
    <article class="productsCategory">
        <h1 style="font-size: 23px!important;" class="titleProducts">Nos produits</h1>
        <h2 class="filterBy">Filtrer par</h2>
        <!-- Filter subpart -->
        <div class="allFilter">
            <div class="filterByPriceAll">
                <h2 class="filterByPrice">Prix</h2>
                <div class="allFilterByPrice">
                    <a href="index.php?p=categories&action=singlePrice30&id=<?= $category['id'] ?>">0-30€</a>
                    <a href="index.php?p=categories&action=singlePrice60&id=<?= $category['id'] ?>">30-60€</a>
                    <a href="index.php?p=categories&action=singlePrice90&id=<?= $category['id'] ?>">60-90€</a>
                    <a href="index.php?p=categories&action=singlePriceInfinity&id=<?= $category['id'] ?>">90€ et +</a>
                    <a href="index.php?p=categories&action=single&id=<?= $category['id'] ?>">Réinitialiser</a>
                </div>
            </div>
            <div class="filterByAgeAll">
                <h2 class="filterByAge">Âge</h2>
                <div class="allFilterByAge">
                    <a href="index.php?p=categories&action=singleAge5&id=<?= $category['id'] ?>">3-5 ans</a>
                    <a href="index.php?p=categories&action=singleAge8&id=<?= $category['id'] ?>">6-8 ans</a>
                    <a href="index.php?p=categories&action=singleAge11&id=<?= $category['id'] ?>">9-11 ans</a>
                    <a href="index.php?p=categories&action=singleAgeInfinity&id=<?= $category['id'] ?>">12 ans et +</a>
                    <a href="index.php?p=categories&action=single&id=<?= $category['id'] ?>">Réinitialiser</a>
                </div>
            </div>
        </div>
        <!-- Single product -->
        <div class="childProductsCategory">
            <?php if(sizeof($categoryProducts) > 0): //Autrement dit, s'il y a un ou plusieurs produits?>
                <?php foreach($categoryProducts as $categoryProduct): ?>
                    <div class="sub-item introImage">
                        <a href="index.php?p=products&action=single&id=<?= $categoryProduct['id']; ?>">
                            <div class="imgResp" style="width: 580px;">
                                <img src="./assets/images/product/<?= $categoryProduct['image']; ?>" alt="Image du produit : <?= htmlentities($categoryProduct['name']); ?>">
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
                <?php if(isset($_SESSION['messages'])): ?>
                    <div class="notFoundProduct">
                        <?php foreach($_SESSION['messages'] as $message): ?>
                            <?= $message ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>