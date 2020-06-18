<body class="bodyContactUs">
<!-- Specific content that will contain the nav -->
<header class="headerCategories headerCategoriesProducts">
    <!--Nav-->
    <div class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="overlayNav"></div>
    <div class="containerNav">
        <nav class="colorCategoryProducts blackSearchC navRecord">
            <?php require 'partials/navContenair.php'; ?>
        </nav>
    </div>
</header>
<!-- Contact us part -->
<article class="wrapper">
    <h1>Partagez-nous votre rêve !</h1>
    <form action="mailto:nathanjourno@yahoo.fr" method="post" enctype="text/plain" class="form-area">
        <div class="msg-area">
            <label for="Message">Message</label>
            <textarea id="msg" name="Message"></textarea>
        </div>
        <div class="details-area">
            <label for="Nom">Nom</label>
            <input type="text" name="Nom" id="name">
            <label for="Prénom">Prénom</label>
            <input type="text" name="Prénom" id="firstName">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="email">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</article>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>