<body class="bodyContactUs">
<header class="headerCategories headerCategoriesProducts">
    <!--Nav-->
    <div class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="overlayNav"></div>
    <div class="containerNav">
        <nav class="colorCategoryProducts">
            <?php require 'partials/navContenair.php'; ?>
        </nav>
    </div>
</header>
<article class="wrapper">
    <h1>Partagez-nous votre rêve !</h1>
    <form action="" class="form-area">
        <div class="msg-area">
            <label for="msg">Message</label>
            <textarea id="msg"></textarea>
        </div>
        <div class="details-area">
            <label for="name">Nom</label>
            <input type="text" name="" id="name">
            <label for="firstName">Prénom</label>
            <input type="text" name="" id="firstName">
            <label for="email">Email</label>
            <input type="email" name="" id="email">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</article>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>