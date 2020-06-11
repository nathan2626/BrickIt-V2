<body>
<header class="headerCategories headerCategoriesProducts">
    <div class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="overlayNav"></div>
    <div class="containerNav">
        <nav class="colorCategoryProducts">
            <?php require 'partials/navContenair.php'; ?>
        </nav>
    </div>
</header>
<?php if(isset($_SESSION['messages'])): ?>
    <div class="msgSession">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<main>
    <article class="userLogin">
        <section class="welcomeUnknown">
            <h1>
                <?php if(isset($_SESSION['user']) && $_SESSION['user']['is_admin'] == 0): ?>
                    Bonjour <?= $_SESSION['user']['first_name'] ?> !
                <?php endif; ?>
                <?php if(isset($_SESSION['user']) && $_SESSION['user']['is_admin'] == 1): ?>
                    Revoilà le Boss <?= $_SESSION['user']['first_name'] ?>
                    <br><p>Va bosser :<br><a href="./admin/index.php">Admin</a></p>
                    <br>Ou<br>
                    <br><p>Retourne te reposer :<br><a href="index.php?p=users&action=disconnect">déconnexion</a></p>
                <?php endif; ?>
            </h1>
        </section>
        <section class="informationUserLogin">
            <h2>Modifications</h2>
            <div class="formRegister">
                <form action="index.php?p=users&action=edit" method="post" enctype="multipart/form-data">
                    <label for="first_name">Prénom :</label>
                    <input  type="text" name="first_name" id="first_name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['first_name'] : '' ?><?= isset($_SESSION['user']) ? $_SESSION['user']['first_name'] : '' ?>"/>

                    <label for="last_name">Nom :</label>
                    <input  type="text" name="last_name" id="last_name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['last_name'] : '' ?><?= isset($_SESSION['user']) ? $_SESSION['user']['last_name'] : '' ?>"/>

                    <label for="email">Email :</label>
                    <input  type="email" name="email" id="email" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['email'] : '' ?><?= isset($_SESSION['user']) ? $_SESSION['user']['email'] : '' ?>"/>

                    <label for="adress">Adresse postale :</label>
                    <input  type="text" name="adress" id="adress" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['adress'] : '' ?><?= isset($_SESSION['user']) ? $_SESSION['user']['adress'] : '' ?>"/>

                    <label for="password">Mot de passe :</label>
                    <input  type="password" name="password" id="password" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['password'] : '' ?><?= isset($_SESSION['user']) ? $_SESSION['user']['password'] : '' ?>"/>

                    <input type="submit" value="Enregistrer" />

                </form>
            </div>
        </section>
        <section class="commandHistoryUserLogin">
            <h1>Historique des commandes</h1>
            <div class="allUserLoginHistory">
                <table>
                    <thead>
                    <tr>
                        <th>Nom du produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Star wars le vaisseau ...</td>
                        <td>3</td>
                        <td>19.99$</td>
                        <td>59.97</td>
                    </tr>
                    <tr>
                        <td>Star wars le vaisseau ...</td>
                        <td>3</td>
                        <td>19.99$</td>
                        <td>59.97</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3">Totals</td>
                        <td>119.94$</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </section>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>