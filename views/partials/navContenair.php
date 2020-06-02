<h1 class="brickIt"><a href="index.php">Brick'It</a></h1>
<ul>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="index.php?p=categories&action=list">Catégories</a>
        <ul class="submenu">
            <?php foreach($categories as $category): ?>
                <li><a href="index.php?p=categories&action=single&id=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
            <?php endforeach; ?>
            <!--                        <li><a href="">Disney</a></li>-->
            <!--                        <li><a href="">Star Wars</a></li>-->
            <!--                        <li><a href="">Warcraft</a></li>-->
        </ul>
    </li>
    <li><a href="index.php?p=game" class="exception">Jeu</a></li>
    <li><a href="index.php?p=users&action=form">Compte</a></li>
    <li><a href="index.php?p=contact">Contact</a></li>
    <li><a href=""><i class="fas fa-search search"></i></a></li>
    <li><a href=""><i class="fas fa-shopping-bag bag"></i></a></li>
</ul>
