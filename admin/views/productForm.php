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
        <form action="index.php?controller=products&action=<?= isset($product) || (isset($_SESSION['old_inputs']) && $_GET['action'] != 'new') ? 'edit&id='. $_GET['id'] : 'add' ?>" method="post" enctype="multipart/form-data">
            <label for="name">Nom :</label>
            <input  type="text" name="name" id="name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['name'] : '' ?><?= isset($product) ? $product['name'] : '' ?>"/>

            <label for="category_id">Catégories :</label>
            <select name="category_id[]" id="pet-category_id" multiple>

                <?php foreach ($categories as $category): ?>
                    <?php
                    $selected = false;
                    foreach ($productCategories as $productCategory){
                        if($productCategory['id'] == $category['id']){
                            $selected = true;
                        }
                    }
                    ?>
                    <option value="<?= $category['id']?>"<?php if(isset($product) && $selected): ?> selected="selected"<?php endif; ?>><?= $category['name']?></option>
                <?php endforeach; ?>
            </select>

            <label for="description">Description :</label>
            <textarea id="description" name="description"><?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['description'] : '' ?><?= isset($product) ? $product['description'] : '' ?></textarea>

            <label for="price">Prix :</label>
            <input  type="text" name="price" id="price" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['price'] : '' ?><?= isset($product) ? $product['price'] : '' ?>"/>

            <label for="quantity">Quantité :</label>
            <input  type="text" name="quantity" id="quantity" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['quantity'] : '' ?><?= isset($product) ? $product['quantity'] : '' ?>"/>

            <label for="is_activate">Activé</label>
            <select id="is_activate" name="is_activate">
                <option value="0">Non</option>
                <option value="1" <?php if (!isset($product['is_activate']) || $product['is_activate'] == 1) :?>selected="selected" <?php endif; ?>>Oui</option>
            </select>

            <label for="is_novelty">Nouveauté ?</label>
            <select id="is_novelty" name="is_novelty">
                <option value="0">Non</option>
                <option value="1" <?php if (!isset($product['is_novelty']) || $product['is_novelty'] == 1) :?>selected="selected" <?php endif; ?>>Oui</option>
            </select>

            <label for="is_best">Best-seller ?</label>
            <select id="is_best" name="is_best">
                <option value="0">Non</option>
                <option value="1" <?php if (!isset($product['is_best']) || $product['is_best'] == 1) :?>selected="selected" <?php endif; ?>>Oui</option>
            </select>

            <label for="image">Image principal:</label>
            <input  type="file" name="image" id="image"/>
            <?php if(isset($product) && $product['image'] != null): ?>
                <div style="width: 300px;" >
                    <img style="width: 100%;" src="../assets/images/product/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                </div>
            <?php endif; ?>

            <label for="image_secondary_1">Image secondaire 1:</label>
            <input  type="file" name="image_secondary_1" id="image_secondary_1"/>
            <?php if(isset($product) && $product['image_secondary_1'] != null): ?>
                <div style="width: 300px;" >
                    <img style="width: 100%;" src="../assets/images/product/<?= $product['image_secondary_1'] ?>" alt="<?= $product['image_secondary_1'] ?>">
                </div>
            <?php endif; ?>

            <label for="image_secondary_2">Image secondaire 1:</label>
            <input  type="file" name="image_secondary_2" id="image_secondary_2"/>
            <?php if(isset($product) && $product['image_secondary_2'] != null): ?>
                <div style="width: 300px;" >
                    <img style="width: 100%;" src="../assets/images/product/<?= $product['image_secondary_2'] ?>" alt="<?= $product['image_secondary_2'] ?>">
                </div>
            <?php endif; ?>

            <label for="image_secondary_3">Image secondaire 1:</label>
            <input  type="file" name="image_secondary_3" id="image_secondary_3"/>
            <?php if(isset($product) && $product['image_secondary_3'] != null): ?>
                <div style="width: 300px;" >
                    <img style="width: 100%;" src="../assets/images/product/<?= $product['image_secondary_3'] ?>" alt="<?= $product['image_secondary_3'] ?>">
                </div>
            <?php endif; ?>


            <input type="submit" value="Enregistrer" />

        </form>
    </div>
</article>