<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

if ($_GET['action'] == 'form') {

    $pageTitle = 'Inscription/Connexion';
    $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
    $view = 'views/account.php';

} elseif($_GET['action'] == 'connect'){

    $view = 'views/userLogin.php';
    $pageTitle = 'Connecté !';
    $pageDescription = '';

} elseif(isset($_GET['action']) && $_GET['action'] == 'signUp'){

    if (!empty($_POST)) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            if (empty($_POST['email'])) {
                $_SESSION['messages'][] = 'Le champ Email est obligatoire !';
            }
            if (empty($_POST['password'])) {
                $_SESSION['messages'][] = 'Le champ Password est obligatoire !';
            }
            header('Location:index.php?p=users&action=connect');
            exit;

        } else {
            $insertNewUser = insertNewUser();
            if ($insertNewUser) {
                $_SESSION['messages'][] = 'Vous êtes connecté ! !';

                header('Location:index.php?p=users&action=connect');
                exit;

            } else {
                $_SESSION['messages'][] = "Erreur lors de l'inscription... :(";

                header('Location:index.php?p=users&action=form');
                exit;
            }

        }
    }

} elseif(isset($_GET['action']) && $_GET['action'] == 'signIn'){

    if (!empty($_POST)) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            if (empty($_POST['email'])) {
                $_SESSION['messages'][] = 'Le champ Email est obligatoire !';
            }
            if (empty($_POST['password'])) {
                $_SESSION['messages'][] = 'Le champ Password est obligatoire !';
            }
            header('Location:index.php?p=users&action=connect');
            exit;

        } else {
            $connectUser = getUserSignIn();
            if ($connectUser) {
                $_SESSION['messages'][] = 'Vous êtes connecté ! !';
            } else {
                $_SESSION['messages'][] = "Erreur lors de la connexion... :(";
            }
            header('Location:index.php?p=users&action=connect');
            exit;
        }
    }

} elseif(isset($_GET['action']) && $_GET['action'] == 'disconnect'){

    unset($_SESSION['user']);
    $_SESSION['messages'][] = 'Vous êtes déconnecté !';


    $pageTitle = 'Déconnecté !';
    $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
    $view = 'views/account.php';

}




//if ($_GET['action'] == 'form') {
//
//    if (!empty($_POST)) {
//        if (empty($_POST['email']) || empty($_POST['password'])) {
//            if (empty($_POST['email'])) {
//                $_SESSION['messages'][] = 'Le champ Email est obligatoire !';
//            }
//            if (empty($_POST['password'])) {
//                $_SESSION['messages'][] = 'Le champ Password est obligatoire !';
//            }
//            header('Location:index.php?p=users&action=form');
//            exit;
//        } else {
//            $insertNewUser = insertNewUser($_POST);
//            if ($insertNewUser) {
//                $_SESSION['messages'][] = 'Vous êtes connecté ! !';
//            } else {
//                $_SESSION['messages'][] = "Erreur lors de l'inscription... :(";
//            }
//            header('Location:index.php?p=users&action=form');
//            exit;
//        }
//    }
//
//    $pageTitle = 'Inscription/Connexion';
//    $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
//    $view = 'views/userLogin.php';
//
//}
