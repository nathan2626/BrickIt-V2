<?php

require('models/Order.php');


if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'list' :
            $orders = getAllOrders();

            $view = 'views/orderList.php';
            $pageTitle = 'Gestion des commandes';
            $pageDescription = '';

            break;

        case 'detail' :
            $categories = getAllCategories();
            $view = 'views/categoryForm.php';
            $pageTitle = 'Ajouter une catégorie';
            $pageDescription = '';

            break;

        default :
            $categories = getAllCategories();
            $view = 'views/categoryList.php';
            $pageTitle = 'Gestion des catégories';
            $pageDescription = '';
    }
}else {
    $categories = getAllCategories();
    $view = 'views/categoryList.php';
    $pageTitle = 'Gestion des catégories';
    $pageDescription = '';
}