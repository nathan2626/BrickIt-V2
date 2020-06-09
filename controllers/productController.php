<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'single' :
            $product = getProduct($_GET['id']);
            $products = getAllProducts($_GET['id']);

            $pageTitle = "Descriptif du produit";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/singleProduct.php';

        break;

        default :
            $pageTitle = "Descriptif de la catégorie";
            $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt";
            $view = 'views/productsCategory.php';
    }
}else {
    $pageTitle = "Descriptif de la catégorie";
    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt";
    $view = 'views/productsCategory.php';
}

