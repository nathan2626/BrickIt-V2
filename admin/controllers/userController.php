<?php

require('models/User.php');

if($_GET['action'] == 'list'){

    $users = getAllUsers();
    $view = 'views/userList.php';
    $pageTitle = 'Gestion des utilisateurs';
    $pageDescription = '';

}
elseif($_GET['action'] == 'new'){

    $view = 'views/userForm.php';
    $pageTitle = 'Ajouter un utilisateur';
    $pageDescription = '';

}
elseif($_GET['action'] == 'add'){

    if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['is_admin'])){

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
}
elseif($_GET['action'] == 'edit'){

    $view = 'views/userForm.php';
    $pageTitle = 'Modifier un utilisateur';
    $pageDescription = '';

}
elseif($_GET['action'] == 'delete'){
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
}