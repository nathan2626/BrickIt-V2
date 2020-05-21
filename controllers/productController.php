<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

if($_GET['action'] == 'single'){

    $product = getProduct($_GET['id']);
    $products = getAllProducts($_GET['id']);

    $pageTitle = "Descriptif du produit";
    $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
    $view = 'views/singleProduct.php';
} else {
    $pageTitle = "Descriptif de la catégorie";
    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt";
    $view = 'views/productsCategory.php';
}
