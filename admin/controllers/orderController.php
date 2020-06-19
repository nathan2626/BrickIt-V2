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
            $order = getOrder($_GET['id']);
            $ordersDetail = getOrdersDetail($_GET['id']);

            $view = 'views/orderDetails.php';
            $pageTitle = "Détail d'une commandes";
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