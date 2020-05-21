<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

if ($_GET['action'] == 'form'){

    $pageTitle = 'Inscription/Connexion';
    $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
    $view = 'views/account.php';

} elseif($_GET['action'] == 'signIn'){

    $pageTitle = 'Connécté !';
    $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
    $view = 'views/account.php';

} elseif ($_GET['action'] == 'signUp') {

    $pageTitle = 'Inscris !';
    $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
    $view = 'views/account.php';
}

