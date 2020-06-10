<?php

require('models/User.php');

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'list' :
            $users = getAllUsers();
            $view = 'views/userList.php';
            $pageTitle = 'Gestion des utilisateurs';
            $pageDescription = '';

            break;

        case 'new' :

            $view = 'views/userForm.php';
            $pageTitle = 'Ajouter un utilisateur';
            $pageDescription = '';

            break;

        case 'add' :
            if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['is_admin']) || empty($_POST['adress'])){

                if(empty($_POST['first_name'])){
                    $_SESSION['messages'][] = 'Le champ Prénom est obligatoire !';
                }
                if(empty($_POST['last_name'])){
                    $_SESSION['messages'][] = 'Le champ Nom est obligatoire !';
                }
                if(empty($_POST['email'])){
                    $_SESSION['messages'][] = 'Le champ Email est obligatoire !';
                }
                if(empty($_POST['password'])){
                    $_SESSION['messages'][] = 'Le champ Mot de passe est obligatoire !';
                }
                if(empty($_POST['is_admin'])){
                    $_SESSION['messages'][] = 'Le champ Admin est obligatoire !';
                }
                if(empty($_POST['adress'])){
                    $_SESSION['messages'][] = 'Le champ Adresse postale est obligatoire !';
                }

                $_SESSION['old_inputs'] = $_POST;
                header('Location:index.php?controller=users&action=new');
                exit;
            }
            else{
                $resultAdd = addUser($_POST);
                if($resultAdd){
                    $_SESSION['messages'][] = 'Utilisateur enregistré !';
                }
                else{
                    $_SESSION['messages'][] = "Erreur lors de l'enregistrement de l'utilisateur... :(";
                }
                header('Location:index.php?controller=users&action=list');
                exit;
            }

            break;

        case 'edit' :
            if(!empty($_POST)){
                if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['is_admin']) || empty($_POST['adress'])){

                    if(empty($_POST['first_name'])){
                        $_SESSION['messages'][] = 'Le champ Prénom est obligatoire !';
                    }
                    if(empty($_POST['last_name'])){
                        $_SESSION['messages'][] = 'Le champ Nom est obligatoire !';
                    }
                    if(empty($_POST['email'])){
                        $_SESSION['messages'][] = 'Le champ Email est obligatoire !';
                    }
                    if(empty($_POST['password'])){
                        $_SESSION['messages'][] = 'Le champ Mot de passe est obligatoire !';
                    }
                    if(empty($_POST['is_admin'])){
                        $_SESSION['messages'][] = 'Le champ Admin est obligatoire !';
                    }
                    if(empty($_POST['adress'])){
                        $_SESSION['messages'][] = 'Le champ Adresse postale est obligatoire !';
                    }

                    $_SESSION['old_inputs'] = $_POST;
                    header('Location:index.php?controller=users&action=edit&id='.$_GET['id']);
                    exit;
                }
                else {
                    $result = updateUser($_GET['id'], $_POST);
                    if ($result) {
                        $_SESSION['messages'][] = 'Utilisateur mis à jour !';
                    } else {
                        $_SESSION['messages'][] = 'Erreur lors de la mise à jour... :(';
                    }
                    header('Location:index.php?controller=users&action=list');
                    exit;
                }
            }
            else{
                if(!isset($_SESSION['old_inputs'])){
                    if(isset($_GET['id'])){
                        $user = getUser($_GET['id']);
                        if($user == false){
                            header('Location:index.php?controller=users&action=list');
                            exit;
                        }
                    }
                    else {
                        header('Location:index.php?controller=users&action=list');
                        exit;
                    }
                }
                $users = getAllUsers();
                $view = 'views/userForm.php';
                $pageTitle = 'Modifier un utilisateur';
                $pageDescription = '';
            }

            break;

        case 'delete' :
            if(isset($_GET['id'])) {
                $result = deleteUser($_GET['id']);
            }
            else {
                $_SESSION['messages'][] = 'Max... arrête de toucher mes Urls stp';
                header('Location:index.php?controller=users&action=list');
                exit;
            }
            if($result){
                $_SESSION['messages'][] = 'User supprimé !';
            }
            else{
                $_SESSION['messages'][] = 'Erreur lors de la suppression... :(';
            }
            header('Location:index.php?controller=users&action=list');
            exit;

            break;

        default :
            $users = getAllUsers();
            $view = 'views/userList.php';
            $pageTitle = 'Gestion des utilisateurs';
            $pageDescription = '';
    }
}else {
    $users = getAllUsers();
    $view = 'views/userList.php';
    $pageTitle = 'Gestion des utilisateurs';
    $pageDescription = '';
}