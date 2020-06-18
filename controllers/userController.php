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
                if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['adress']) || empty($_POST['password'])){

                    if(empty($_POST['first_name'])){
                        $_SESSION['messages'][] = 'Le champ Prénom est obligatoire !';
                    }
                    if(empty($_POST['last_name'])){
                        $_SESSION['messages'][] = 'Le champ Nom est obligatoire !';
                    }
                    if(empty($_POST['email'])){
                        $_SESSION['messages'][] = 'Le champ Email est obligatoire !';
                    }
                    if(empty($_POST['adress'])){
                        $_SESSION['messages'][] = 'Le champ Adresse postale est obligatoire !';
                    }
                    if(empty($_POST['password'])){
                        $_SESSION['messages'][] = 'Le champ mot de passe est obligatoire !';
                    }

                    $_SESSION['old_inputs'] = $_POST;
                    header('Location:index.php?p=users&action=form');
                    exit;

                }
                else {
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
                    header('Location:index.php?p=users&action=form');
                    exit;

                } else {
                    $connectUser = getUserSignIn();
                    if ($connectUser) {
                        $_SESSION['messages'][] = 'Vous êtes connecté ! !';

                        header('Location:index.php?p=users&action=connect');
                        exit;

                    } else {
                        $_SESSION['messages'][] = "Erreur lors de la connexion... :(";

                        header('Location:index.php?p=users&action=form');
                        exit;
                    }

                }
            }
        break;

        case 'edit' :
            if ($_SESSION['user']['id'] == $_GET['id']){ //if the user_id sent is the one id in the url
                if(!empty($_POST)){
                    if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['adress'])){

                        if(empty($_POST['first_name'])){
                            $_SESSION['messages'][] = 'Le champ Prénom est obligatoire !';
                        }
                        if(empty($_POST['last_name'])){
                            $_SESSION['messages'][] = 'Le champ Nom est obligatoire !';
                        }
                        if(empty($_POST['email'])){
                            $_SESSION['messages'][] = 'Le champ Email est obligatoire !';
                        }
                        if(empty($_POST['adress'])){
                            $_SESSION['messages'][] = 'Le champ Adresse postale est obligatoire !';
                        }

                        $_SESSION['old_inputs'] = $_POST;
                        header('Location:index.php?p=users&action=edit&id='.$_GET['id']);
                        exit;
                    }
                    else {
                        $result = updateUser($_GET['id'], $_POST);
                        if ($result) {
                            $_SESSION['user']['first_name'] = $_POST['first_name']; //mise a jour de la session
                            $_SESSION['messages'][] = 'Utilisateur mis à jour !';

                        } else {
                            $_SESSION['messages'][] = 'Erreur lors de la mise à jour... :(';
                        }
                        header('Location:index.php?p=users&action=connect');
                        exit;
                    }
                }
                else{
                    if(!isset($_SESSION['old_inputs'])){
                        if(isset($_GET['id'])){
                            $user = getUser($_GET['id']);
                            if($user == false){
                                header('Location:index.php?p=users&action=connect');
                                exit;
                            }
                        }
                        else {
                            header('Location:index.php?p=users&action=connect');
                            exit;
                        }
                    }

                    $users = getAllUsers();
                    $view = 'views/userLogin.php';
                    $pageTitle = 'Connecté !';
                    $pageDescription = '';
                }

            }
            else {
                $_SESSION['messages'][] = 'Vous avez été deconnecté subitement... à ce demander pour quoi ?';
                header('Location:index.php?p=users&action=disconnect');
                exit;
            }

        break;

        case 'disconnect' :
            unset($_SESSION['user']);
            unset($_SESSION['cart']);

            $_SESSION['messages'][] = 'Vous êtes déconnecté !';


            $pageTitle = 'Déconnecté !';
            $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
            $view = 'views/account.php';
        break;

        case 'connect' :
            if(empty($_SESSION['user'])){

                $_SESSION['messages'][] = "Allez... il s'uffit seulement de remplir quelques champs....";
                header('Location:index.php?p=users&action=form');
                exit;

            }
            else {
                $currentUser = getUser($_SESSION['user']['id']);
//            $orders = getAllOrdersByUser($_SESSION['user']['id']);


                $view = 'views/userLogin.php';
                $pageTitle = 'Connecté !';
                $pageDescription = '';

            }
        break;

        default :
            $pageTitle = 'Inscription/Connexion';
            $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
            $view = 'views/page404.php';

    }

} else{
    $pageTitle = 'Inscription/Connexion';
    $pageDescription = "Inscrivez-vous ou Connectez-vous pour profiter pleinement de l'intégralité de notre site BrickIt";
    $view = 'views/page404.php';

}