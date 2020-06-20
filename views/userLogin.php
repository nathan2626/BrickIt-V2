<body>
<!-- Specific content that will contain the nav -->
<header class="headerCategories headerCategoriesProducts">
    <div class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="overlayNav"></div>
    <div class="containerNav">
        <nav class="colorAccount navRecord">
            <?php require 'partials/navContenair.php'; ?>
        </nav>
    </div>
</header>
<!-- Session messages -->
<?php if(isset($_SESSION['messages'])): ?>
    <div class="msgSession">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<main>
    <article class="userLogin">
        <!-- Welcome ! -->
        <section class="welcomeUnknown">
            <h1>
                <?php if(isset($_SESSION['user']) && $_SESSION['user']['is_admin'] == 0): ?>
                    Bonjour <?= $_SESSION['user']['first_name'] ?> !
                <?php endif; ?>
                <?php if(isset($_SESSION['user']) && $_SESSION['user']['is_admin'] == 1): ?>
                    Revoilà le Boss <?= $_SESSION['user']['first_name'] ?>
                    <br>Va bosser :<br><a href="./admin/index.php">Admin</a>
                    <br>Ou<br>
                    <br><p>Retourne te reposer :<br><a href="index.php?p=users&action=disconnect">déconnexion</a></p>
                <?php endif; ?>
            </h1>
        </section>
        <!-- Information User -->
        <section class="informationUserLogin">
            <h2>Modifications</h2>
            <div class="formRegister">
                <form action="index.php?p=users&action=edit&id=<?= $_SESSION['user']['id'] ?>" method="post" enctype="multipart/form-data">
                    <label for="first_name">Prénom :</label>
                    <input  type="text" name="first_name" id="first_name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['first_name'] : '' ?><?= isset($currentUser) ? $currentUser['first_name'] : '' ?>"/>

                    <label for="last_name">Nom :</label>
                    <input  type="text" name="last_name" id="last_name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['last_name'] : '' ?><?= isset($currentUser) ? $currentUser['last_name'] : '' ?>"/>

                    <label for="email">Email :</label>
                    <input  type="email" name="email" id="email" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['email'] : '' ?><?= isset($currentUser) ? $currentUser['email'] : '' ?>"/>

                    <label for="adress">Adresse postale :</label>
                    <input  type="text" name="adress" id="adress" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['adress'] : '' ?><?= isset($currentUser) ? $currentUser['adress'] : '' ?>"/>

<!--                    <label for="password">Mot de passe :</label>-->
<!--                    <input  type="password" name="password" id="password" value=""/>-->

                    <input type="submit" value="Enregistrer" style="color: #3BD9DA; cursor: pointer;" />
                </form>
            </div>
        </section>
        <!-- Order history -->
        <section class="commandHistoryUserLogin">
            <h1>Historique des commandes</h1>
            <?php if (isset($orders)): ?>
            <div class="allUserLoginHistory">
                <?php foreach ($orders as $order):?>
                    <table>
                        <thead>
                        <tr>
                            <th>Adresse</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?= $order['adress']; ?></td>
                            <td><?= $order['first_name']; ?></td>
                            <td><?= $order['last_name']; ?></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2"><?= $order['date']; ?></td>
                            <td><a style="color: #3BD9DA;" href="index.php?p=users&action=detail&id=<?= $order['id']; ?>">Détail</a></td>
                        </tr>
                        </tfoot>
                </table>
                <hr>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </section>
    </article>
</main>

<?php require 'partials/footer.php'; ?>

<script src="./assets/js/index.js"></script>