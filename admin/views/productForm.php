<?php if(isset($_SESSION['messages'])): ?>
    <div class="msgSession">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<article class="addUserArticle">
    <h1>Formulaire d'un produit</h1>
    <div class="contentUserAdd">
        <form action="index.php?controller=products&action=add" method="post" enctype="multipart/form-data">
            <label for="name">Nom :</label>
            <input  type="text" name="name" id="name" value=""/>

            <label for="category_id">Catégories :</label>
            <select name="category_id[]" id="pet-category_id" multiple>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id']?>"><?= $category['name']?></option>
                <?php endforeach; ?>
            </select>

            <label for="description">Description :</label>
            <textarea id="description" name="description"></textarea>

            <label for="price">Prix :</label>
            <input  type="text" name="price" id="price" value=""/>

            <label for="quantity">Quantité :</label>
            <input  type="text" name="quantity" id="quantity" value=""/>

            <label for="is_activate">Activé</label>
            <select id="is_activate" name="is_activate">
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>

            <label for="is_novelty">Nouveauté ?</label>
            <select id="is_novelty" name="is_novelty">
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>

            <label for="is_best">Best-seller ?</label>
            <select id="is_best" name="is_best">
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>

            <a class="imagesProductDetails" type="button" href="productImages.php">Images</a>

            <input type="submit" value="Enregistrer" />

        </form>
    </div>
</article>