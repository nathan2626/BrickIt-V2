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

            <label for="activate">Activé</label>
            <input type="checkbox" id="activate" name="activate"
                   checked>

            <label for="is_novelty">Nouveauté ?</label>
            <input type="checkbox" id="is_novelty" name="is_novelty">

            <label for="is_best">Best-seller ?</label>
            <input type="checkbox" id="is_best" name="is_best">

            <a class="imagesProductDetails" type="button" href="productImages.php">Images</a>

            <input type="submit" value="Enregistrer" />

        </form>
    </div>
</article>