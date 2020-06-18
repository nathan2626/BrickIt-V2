<!-- Nav bar -->
<h1 class="brickIt"><a href="index.php">Brick'It</a></h1>
<ul>
    <li class="liHOpen2"><a href="index.php?p=categories&action=list">Catégories</a>
        <ul class="submenu">
            <?php foreach($categories as $category): ?>
                <li class="liHOpen"><a style="margin: 0;" href="index.php?p=categories&action=single&id=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
            <?php endforeach; ?>
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
    <!-- Search bar -->
    <li class="blackSearchPng">
        <form class="searchJsNav search-box" action="index.php?p=products&action=search" method="post" enctype="multipart/form-data">
            <input type="search" name="nameProduct" class="search-text" placeholder="Rechercher un produit">
            <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </li>
    <li class="liHOpen8"><a href="index.php?p=cart&action=displayCart"><i class="fas fa-shopping-bag bag"></i></a></li>
</ul>