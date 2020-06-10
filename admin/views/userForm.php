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
        <form action="index.php?controller=users&action=<?= isset($user) || (isset($_SESSION['old_inputs']) && $_GET['action'] != 'new') ? 'edit&id='. $_GET['id'] : 'add' ?>" method="post" enctype="multipart/form-data">
            <label for="first_name">Prénom :</label>
            <input  type="text" name="first_name" id="first_name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['first_name'] : '' ?><?= isset($user) ? $user['first_name'] : '' ?>"/>

            <label for="last_name">Nom :</label>
            <input  type="text" name="last_name" id="last_name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['last_name'] : '' ?><?= isset($user) ? $user['last_name'] : '' ?>"/>

            <label for="email">Email :</label>
            <input  type="email" name="email" id="email" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['email'] : '' ?><?= isset($user) ? $user['email'] : '' ?>"/>

            <label for="adress">Adresse postale :</label>
            <input  type="adress" name="adress" id="adress" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['adress'] : '' ?><?= isset($user) ? $user['adress'] : '' ?>"/>

            <label for="password">Mot de passe :</label>
            <input  type="password" name="password" id="password" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['password'] : '' ?><?= isset($user) ? $user['password'] : '' ?>"/>

            <label for="image">Image :</label>
            <input  type="file" name="image" id="image" value=""/>
            <?php if(isset($user) && $user['image'] != null): ?>
                <img src="../assets/images/user/<?= $user['image'] ?>" alt="Image phare de <?= $user['first_name']; $user['last_name']?>">
            <?php endif; ?>

            <label for="is_admin">Admin :</label>
            <select name="is_admin" id="is_admin">
                <option value="0">non</option>
                <option value="1" <?php if (!isset($user['is_admin']) || $user['is_admin'] == 1) :?>selected="selected" <?php endif; ?>>oui</option>
            </select>

            <input type="submit" value="Enregistrer" />

        </form>
    </div>
</article>