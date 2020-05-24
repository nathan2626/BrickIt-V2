<?php

require('models/Category.php');

if($_GET['action'] == 'list'){

    $categories = getAllCategories();
    $view = 'views/categoryList.php';
    $pageTitle = 'Gestion des catégories';
    $pageDescription = '';

}
elseif($_GET['action'] == 'new'){

    $view = 'views/categoryForm.php';
    $pageTitle = 'Ajouter une catégorie';
    $pageDescription = '';

}
elseif($_GET['action'] == 'add'){


}
elseif($_GET['action'] == 'edit'){

    $view = 'views/categoryForm.php';
    $pageTitle = 'Modifier une catégorie';
    $pageDescription = '';

}
elseif($_GET['action'] == 'delete'){


}
