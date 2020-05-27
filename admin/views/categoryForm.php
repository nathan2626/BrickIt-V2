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
        <form action="index.php?controller=categories&action=add" method="post" enctype="multipart/form-data">
            <label for="name">Nom :</label>
            <input  type="text" name="name" id="name" value="" />

            <label for="description">Description :</label>
            <textarea id="description" name="description"></textarea>

            <label for="image">Image :</label>
            <input  type="file" name="image" id="image" value=""/>

            <label for="is_activate">Activé</label>
            <select id="is_activate" name="is_activate">
                <option value="0">Non</option>
                <option value="1">Oui</option>
            </select>

            <input type="submit" value="Enregistrer" />
        </form>
    </div>
</article>
