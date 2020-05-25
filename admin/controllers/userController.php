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