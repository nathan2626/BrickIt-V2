<h1 class="brickIt"><a href="index.php">Brick'It</a></h1>
<ul>
    <li class="liHOpen1"><a href="index.php">Accueil</a></li>
    <li class="liHOpen2"><a href="index.php?p=categories&action=list">Catégories</a>
        <ul class="submenu">
            <?php foreach($categories as $category): ?>
                <li class="liHOpen"><a href="index.php?p=categories&action=single&id=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
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
    <li class=""><a href=""><i class="fas fa-search search"></i></a></li>
    <li class="liHOpen8"><a href=""><i class="fas fa-shopping-bag bag"></i></a></li>
    <form class="searchJsNav search-box" action="" method="get" enctype="multipart/form-data">
        <input type="search" name="nameProduct" class="search-text" placeholder="Rechercher un prduit">
        <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
    </form>
</ul>