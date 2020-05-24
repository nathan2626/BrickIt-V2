<?php

if($_GET['action'] == 'list'){

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


}