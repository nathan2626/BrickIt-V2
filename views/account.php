<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/images/imageLogoTest.png"/>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header class="headerCategories headerCategoriesProducts">
    <!--Nav-->
    <div class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="overlayNav"></div>
    <div class="containerNav">
        <nav class="colorCategoryProducts">
            <h1 class="brickIt"><a href="index.php">Brick'It</a></h1>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?p=categories">Catégories</a>
                    <ul class="submenu">
                        <li><a href="">Harry Potter</a></li>
                        <li><a href="">Disney</a></li>
                        <li><a href="">Star Wars</a></li>
                        <li><a href="">Warcraft</a></li>
                    </ul>
                </li>
                <li><a href="index.php?p=game" class="exception">Jeu</a></li>
                <li><a href="index.php?p=account">Compte</a></li>
                <li><a href="index.php?p=contact">Contact</a></li>
                <li><a href=""><i class="fas fa-search search"></i></a></li>
                <li><a href=""><i class="fas fa-shopping-bag bag"></i></a></li>
            </ul>
        </nav>
    </div>
</header>
    <main>
        <article class="articleAccount">
            <div class="containerAccount" id="containerAccount">
                <div class="formContainer signUpContainer">
                    <form action="">
                        <h1>S'inscrire</h1>
                        <input type="text" name="firstName" placeholder="Prénom">
                        <input type="text" name="lastName" placeholder="Nom">
                        <input type="text" name="adress" placeholder="Adresse postale">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <button>S'inscrire</button>
                    </form>
                </div>
                <div class="formContainer signInContainer">
                    <form action="#">
                        <h1>Se connecter</h1>
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <a href="#">Mot de passe oublié ?</a>
                        <button>Se connecter</button>
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
                            <button class="ghost" id="signUp">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article class="articleAccountSmart">
            <div class="formSignUp">
                <form action="">
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
                <form action="#">
                    <h1>Se connecter</h1>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <a href="#">Mot de passe oublié ?</a>
                    <button>Se connecter</button>
                </form>
            </div>
        </article>
    </main>
    <footer>
        <div class="innerFooter">
            <div class="contactFooter">
                <p><span>Tel :</span> 06 55 45 35 25</p>
                <p><span>Email :</span> BrickIt@brickIt.com</p>
                <p><span>Adresse :</span> 19 Rue Yves Toudic, Paris</p>
            </div>
            <div class="logoContainer">
                <img src="../assets/images/imageLogoTest.png" alt="">
            </div>
            <div class="textFooter">
                <h1>Brick'It Group</h1>
                <a href=""><i class="fab fa-instagram fa-3x"></i></a>
                <a href="https://www.facebook.com/natan.journo"><i class="fab fa-facebook fa-3x"></i></a>
                <a href="https://www.linkedin.com/in/nathan-journo/"><i class="fab fa-linkedin fa-3x"></i></a>
                <a href="https://github.com/nathan2626"><i class="fab fa-github fa-3x"></i></a>
            </div>
        </div>
        <p> Copyright 2019 JOURNO Nathan - Toute représentation interdite</p>
    </footer>
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
</body>
</html>