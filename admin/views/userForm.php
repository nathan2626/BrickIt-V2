<?php if(isset($_SESSION['messages'])): ?>
    <div class="msgSession">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<article class="addUserArticle">
    <h1>Formulaire d'un utilisateur</h1>
    <div class="contentUserAdd">
        <form action="index.php?controller=users&action=add" method="post" enctype="multipart/form-data">
            <label for="first_name">Prénom :</label>
            <input  type="text" name="first_name" id="first_name" value=""/>

            <label for="last_name">Nom :</label>
            <input  type="text" name="last_name" id="last_name" value=""/>

            <label for="email">Email :</label>
            <input  type="email" name="email" id="email" value=""/>

            <label for="password">Mot de passe :</label>
            <input  type="password" name="password" id="password" value=""/>

            <label for="image">Image :</label>
            <input  type="file" name="image" id="image" value=""/>

            <label for="is_admin">Admin :</label>
            <select name="is_admin" id="is_admin">
                <option value="0">non</option>
                <option value="1">oui</option>
            </select>

            <input type="submit" value="Enregistrer" />

        </form>
    </div>
</article>