<body>
<header class="headerCategories headerCategoriesProducts">
    <!--Nav-->
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
                <form action="">
                    <input type="text" name="first_name" placeholder="Prénom">
                    <input type="text" name="last_name" placeholder="Nom">
                    <input type="text" name="adress" placeholder="Adresse postale">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit">Enregistrer</button>
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