<body>
<main class="mainCategories">
    <!-- Nav and content vidéos of the categories -->
    <header class="headerCategories">
        <!--Nav-->
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlayNav"></div>
        <div class="containerNav">
            <nav class="navRecord">
                <?php require 'partials/navContenair.php'; ?>
            </nav>
        </div>
        <!-- Full screen vidéo -->
        <article class="fullScreenVideo">
            <div class="screenVideo">
                <video id="slider" autoplay muted loop>
                    <source src="../assets/videos/Lego.mp4" type="video/mp4">
                </video>
                <ul class="navCategories">
                    <?php foreach ($categoriesNotActivates as $categoryNotActivate): ?>
                    <li onclick="videoUrl('./assets/vendors/lotr.mp4')"><img src="./assets/images/category/<?= $categoryNotActivate['image'] ?>" alt="Image correspondant à la video de : <?= $categoryNotActivate['name'] ?>"></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="contentVideo contentVideoCategories">
                <div class="hook hookCategories">
                    <h1>Patience... <br>les thèmes dont tu rêves tant <br>seront bientôt disponibles !</h1>
                </div>
            </div>
        </article>
    </header>
    <!--Categorie slide part-->
    <article class="sliderCategories">
        <div class="titleCategories">
            <h1>Catégories</h1>
        </div>
            <div class="section-one">
                <?php foreach ($categories as $category): ?>
                    <div class="slide"  style="background-image: url('./assets/images/category/<?=$category['image'];?>');   background-position: center;">
                        <div class="content">
                            <a href="index.php?p=categories&action=single&id=<?= $category['id'] ?>">
                            <h2><?= htmlentities($category['name']); ?></h2>
                            <p style="margin-top: 10px"><?= htmlentities($category['description']); ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script type="text/javascript">
    //Slider categories
    function videoUrl(navCategories1) {
        document.getElementById("slider").src = navCategories1;
    }
</script>
<script src="./assets/js/index.js"></script>