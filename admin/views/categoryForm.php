<?php if(isset($_SESSION['messages'])): ?>
    <div class="msgSession">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<article class="addUserArticle">
    <h1>Formulaire d'une catégorie</h1>
    <div class="contentUserAdd">
        <form action="index.php?controller=categories&action=<?= isset($category) || (isset($_SESSION['old_inputs']) && $_GET['action'] != 'new') ? 'edit&id='. $_GET['id'] : 'add' ?>" method="post" enctype="multipart/form-data">
            <label for="name">Nom :</label>
            <input  type="text" name="name" id="name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['name'] : '' ?><?= isset($category) ? $category['name'] : '' ?>" />

            <label for="description">Description :</label>
            <textarea id="description" name="description"><?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['description'] : '' ?><?= isset($category) ? $category['description'] : '' ?></textarea>

            <label for="image">Image :</label>
            <input  type="file" name="image" id="image"/>
            <?php if(isset($category) && $category['image'] != null): ?>
                <div style="width: 300px;" >
                    <img style="width: 100%;" src="../assets/images/category/<?= $category['image'] ?>" alt="<?= $category['name'] ?>">
                </div>
            <?php endif; ?>

            <label for="is_activate">Activé</label>
            <select id="is_activate" name="is_activate">
                <option value="0">Non</option>
                <option value="1" <?php if (!isset($category['is_activate']) || $category['is_activate'] == 1) :?>selected="selected" <?php endif; ?>>Oui</option>
            </select>

            <input type="submit" value="Enregistrer" />
        </form>
    </div>
</article>
