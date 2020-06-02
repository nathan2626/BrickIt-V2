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
    <?php if(!isset($_SESSION['user'])): ?>
    <main>
        <article class="articleAccount">
            <div class="containerAccount" id="containerAccount">
                <div class="formContainer signUpContainer">
                    <form action="index.php?p=users&action=signUp" method="post" enctype="multipart/form-data">
                        <h1>S'inscrire</h1>
                        <input type="text" name="first_name" placeholder="Prénom">
                        <input type="text" name="last_name" placeholder="Nom">
                        <input type="text" name="adress" placeholder="Adresse postale">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit">S'inscrire</button>
                    </form>
                </div>
                <div class="formContainer signInContainer">
                    <form action="index.php?p=users&action=signIn" method="post" enctype="multipart/form-data">
                        <h1>Se connecter</h1>
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <a href="#">Mot de passe oublié ?</a>
                        <button type="submit">Se connecter</button>
                    </form>
                </div>
                <div class="overlayContainer">
                    <div class="overlayAccount">
                        <div class="overlayPanel overlayLeft">
                            <h1>Re-Bonjour !</h1>
                            <p>Heureux de vous retrouver ! Reviens rêver avec nous !</p>
                            <button class="ghost" id="signIn">Se connecter</button>
                        </div>
                        <div class="overlayPanel overlayRight">
                            <h1>Bonjour !</h1>
                            <p>Toujours pas inscrit ? N'as-tu pas envie de réaliser t'es rêves ?</p>
                            <button class="ghost" id="signUp" name="submit">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="articleAccountSmart">
            <div class="formSignUp">
                <form action="index.php?p=users&action=form" method="post">
                    <h1>S'inscrire</h1>
                    <input type="text" name="firstName" placeholder="Prénom">
                    <input type="text" name="lastName" placeholder="Nom">
                    <input type="text" name="adress" placeholder="Adresse postale">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <button>S'inscrire</button>
                </form>
            </div>
            <div class="formSignIn">
                <form action="index.php?p=users&action=form" method="post">
                    <h1>Se connecter</h1>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <a href="#">Mot de passe oublié ?</a>
                    <button>Se connecter</button>
                </form>
            </div>
        </article>
    </main>
    <?php else : ?>
        <?php require 'views/userLogin.php'; ?>
    <?php endif; ?>

<?php require 'partials/footer.php'; ?>

<script type="text/javascript">
        //Account Sign In and Sign Up
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const containerAccount = document.getElementById('containerAccount');

        signUpButton.addEventListener('click', () => {
            containerAccount.classList.add("rightPanelActive");
        });
        signInButton.addEventListener('click', () => {
            containerAccount.classList.remove("rightPanelActive");
        });

        //Nav hamburger
        const open = document.getElementById('hamburger');
        let changeIcon = true;

        open.addEventListener("click", function(){

            const overlay = document.querySelector('.overlayNav');
            const nav = document.querySelector('nav');
            const icon = document.querySelector('.menu-toggle i');

            overlay.classList.toggle("menu-open");
            nav.classList.toggle("menu-open");

            if (changeIcon) {
                icon.classList.remove("fa-bars");
                icon.classList.add("fa-times");

                changeIcon = false;
            }
            else {
                icon.classList.remove("fa-times");
                icon.classList.add("fa-bars");
                changeIcon = true;
            }
        });

</script>