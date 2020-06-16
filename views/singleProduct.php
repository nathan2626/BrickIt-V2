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
    <article class="singleArticle">
        <div class="productPresentation">
            <div class="bigImageProduct">
                <img src="./assets/images/product/<?= $product['image'] ?>" alt="<?= htmlentities($product['name']); ?>">
            </div>
            <div class="informationProduct">
                <div class="contentProduct">
                    <h1><?= htmlentities($product['name']); ?></h1>
                    <p><?= htmlentities($product['description']); ?></p><br>
                    <p><?= htmlentities($product['price']); ?>€</p><br>
                    <form  class="buttonAddCart" action="index.php?p=cart&action=addProductCart&product_id=<?= $product['id'] ?>" method="post">
                        <select name="quantityProduct">
                            <?php for ($i=1; $i <= $product['quantity']; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                        <input type="submit" value="Enregistrer">
                    </form>
                </div>
                <div class="imagesProduct">
                    <div class="smallImageProduct">
                        <img src="./assets/images/product/<?= $product['image'] ?>" alt="<?= htmlentities($product['name']); ?>">
                    </div>
                    <div class="smallImageProduct">
                        <img src="./assets/images/product/<?= $product['image'] ?>" alt="<?= htmlentities($product['name']); ?>">
                    </div>
                    <div class="smallImageProduct">
                        <img src="./assets/images/product/<?= $product['image'] ?>" alt="<?= htmlentities($product['name']); ?>">
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_GET['id']) AND !empty($_GET['id'])) {

            $getId = htmlspecialchars($_GET['id']);


            if (isset($_POST['submit_comment'])) {
                if (isset($_POST['pseudo'], $_POST['comment']) AND !empty($_POST['pseudo']) AND !empty($_POST['comment'])){
                    $comment = htmlspecialchars($_POST['comment']);
                    $pseudo = htmlspecialchars($_POST['pseudo']);
                    $product_id = $product['id'];
                    $username = $_SESSION['user']['first_name'];
                    $notation = htmlspecialchars($_POST['notation']);

                    if (strlen($pseudo) < 20 && $notation >= 0 && $notation <= 5) {
                        $db = dbConnect();

                        $query = $db->prepare('INSERT INTO comments (comment, pseudo, product_id, username, notation) VALUES (?, ?, ?, ?, ?)');
                        $result = $query->execute([$comment, $pseudo, $product_id, $username, $notation]);

                        $msg = 'Commentaire posté';
                    }
                    else {
                        $msg = 'Pseudo < 20 caractères et la note entre 0 et 5';
                    }
                }
                else {
                    $msg = 'Tout les champs doivent être complétés';
                }
            }
            $db = dbConnect();
            $query = $db->query('SELECT * FROM comments ORDER BY id DESC');
            $allComments = $query->fetchAll();
        }

        ?>
        <br>
        <div class="allCommentsPart">
            <div>
                <h1>Postez votre commentaire !</h1>
                <form class="" method="post" enctype="multipart/form-data">
                    <input type="text" name="pseudo" placeholder="Votre pseudo"> <br>
                    <input type="number" name="notation" placeholder="Note entre 0 et 5 inclus"> <br>
                    <textarea name="comment" placeholder="Votre commentaire..."></textarea><br>
                    <input type="submit" value="Poster" name="submit_comment">
                </form>
            </div>
            <?php if(isset($msg)): ?>
                <div class="msgSession">
                    <?= $msg ?>
                </div>
            <?php endif; ?>
            <details>
                <summary>Commentaires :</summary>
                <?php if(isset($allComments)): ?>
                <div>
                    <?php foreach ($allComments as $comments): ?>
                        <div>
                            <p><?= $comments['username'] ?> sous le nom de <?= $comments['pseudo'] ?> a posté ce commentaire et cette note :</p><br>
                            <p><?= $comments['comment'] ?></p><br>
                            <p>Et une note de <?= $comments['notation'] ?></p><br><br><br>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                    <p>Aucun commentaires pour ce produit</p>
                <?php endif; ?>
            </details>
        </div>
        <br><br><br><br>
        <div class="allCommentsPart">
            <div>
                <h1>Postez votre commentaire !</h1>
                <form class="" action="index.php?p=products&action=addComment" method="post" enctype="multipart/form-data">
                    <input type="text" name="pseudo" placeholder="Votre pseudo"> <br>
                    <input type="number" name="notation" placeholder="Note entre 0 et 5 inclus"> <br>
                    <textarea name="comment" placeholder="Votre commentaire..."></textarea><br>
                    <input type="submit" value="Poster" name="submit_comment">
                </form>
            </div>
            <?php if(isset($_SESSION['messages'])): ?>
                <div class="msgSession">
                    <?php foreach($_SESSION['messages'] as $message): ?>
                        <?= $message ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <details>
                <summary>Commentaires :</summary>
                <?php if(isset($allComments)): ?>
                    <div>
                        <?php foreach ($allComments as $comments): ?>
                            <div>
                                <p><?= $comments['username'] ?> sous le nom de <?= $comments['pseudo'] ?> a posté ce commentaire et cette note :</p><br>
                                <p><?= $comments['comment'] ?></p><br>
                                <p>Et une note de <?= $comments['notation'] ?></p><br><br><br>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p>Aucun commentaires pour ce produit</p>
                <?php endif; ?>
            </details>
        </div>


    </article>
    <article class="productsCategory">
        <h1 class="titleRandom">Produits qui peut vous interesser</h1>
        <div class="childProductsCategory">


            <?php
            //cette variable va garder en mémoire les ID des produits séléctionnés par la boucle suivante afin de ne pas les re-selectionner
            $selectedProductsCategory = [];

            for($n=0;$n<4;$n++): ?>
            <?php
            //Tant que $nb aléatoire existe dans le tableau $selectedProductsCategory, on le re-génère
            do{
                $nb = rand(0, sizeof($products) - 1 );
            } while(in_array($nb , $selectedProductsCategory));

            //$selectedProductCategory = le produit selectionné
            $selectedProductCategory = $products[$nb];
            //on enregistre l'id du produit selectionné dans $selectedProductsCategory pour ne pas le re-séléctionner dans les prochaines ittérations de boucle
            $selectedProductsCategory[] = $nb;
            ?>
            <div class="sub-item introImage">
                <a href="">
                    <div class="imgResp" style="width: 580px;">
                        <img src="./assets/images/product/<?= $selectedProductCategory['image'];?>" alt="<?= $selectedProductCategory['name'];?>">
                    </div>
                        <div class="overlay">
                        <h1><?= $selectedProductCategory['name'];?></h1>
                        <div class="separator separatorProductsCategory"></div>
                        <div class="price">
                            <h2><?= $selectedProductCategory['price'];?>€ <a href=""><i class="fas fa-shopping-bag"></i></a></h2>
                        </div>
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>