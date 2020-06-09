<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'form' :
            $pageTitle = 'Inscription/Connexion';
            $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
            $view = 'views/account.php';

        break;

        case 'signUp' :
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

        break;

        case 'signIn' :
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
        break;

        case 'disconnect' :
            unset($_SESSION['user']);
            $_SESSION['messages'][] = 'Vous êtes déconnecté !';


            $pageTitle = 'Déconnecté !';
            $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
            $view = 'views/account.php';
        break;

        case 'connect' :
            $view = 'views/userLogin.php';
            $pageTitle = 'Connecté !';
            $pageDescription = '';

        break;

        default :
            $pageTitle = 'Inscription/Connexion';
            $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
            $view = 'views/account.php';

    }

} else{
    $pageTitle = 'Inscription/Connexion';
    $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
    $view = 'views/account.php';

}