<body>
<main class="mainCategories">
    <header class="headerCategories">
        <!--Nav-->
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlayNav"></div>
        <div class="containerNav">
            <nav>
                <?php require 'partials/navContenair.php'; ?>
            </nav>
        </div>
        <article class="fullScreenVideo">
            <div class="screenVideo">
                <video id="slider" autoplay muted loop>
                    <source src="../assets/videos/Lego.mp4" type="video/mp4">
                </video>
                <ul class="navCategories">
                    <li onclick="videoUrl('assets/vendors/Lego.mp4')"><img src="./assets/images/imageLOTRCategories.jpg"></li>
                    <li onclick="videoUrl('assets/vendors/Lego.mp4')"><img src="./assets/images/imageMinionCategories.jpg"></li>
                    <li onclick="videoUrl('assets/vendors/Lego.mp4')"><img src="./assets/images/imageMarvelCategories.jpg"></li>
                    <li onclick="videoUrl('assets/vendors/Lego.mp4')"><img src="./assets/images/imageWarcraftCategories.jpg"></li>
                </ul>
            </div>
            <div class="contentVideo contentVideoCategories">
                <div class="hook hookCategories">
                    <h1>Encore un peut de patience... <br>Ces catégories que vous rêvez tant seront bientôt disponibles</h1>
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
            <div class="slide">
                <div class="content">
                    <h2>Slide 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
                        massa, varius a, semper congue, euismod non, mi.</p>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h2>Disney : La Reine Des Neiges</h2>
                    <p>Tout l'univers de Disney dans ce merveilleux thème ! Et La Reine Des Neiges en fait partit !</p>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h2>Slide 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
                        massa, varius a, semper congue, euismod non, mi.</p>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h2>Slide 4</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
                        massa, varius a, semper congue, euismod non, mi.</p>
                </div>
            </div>
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