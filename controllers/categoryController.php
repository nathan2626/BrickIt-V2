<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';



if($_GET['action'] == 'list'){
    $categories = getAllCategories();
    $categoriesNotActivates = getAllCategoriesNotActivates();
//    var_dump($categoryProducts['0']['name']);
//    die();

    $pageTitle = "Liste de nos catégories";
    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt !";
    $view = 'views/categories.php';

} elseif ($_GET['action'] == 'single') { //choix d'une catégorie
    $categoryProducts = getCategoryProducts($_GET['id']);
    $category = getCategory($_GET['id']);
    $categories = getAllCategories();

    $pageTitle = "Produits de la catégorie";
    $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
    $view = 'views/productsCategory.php';

} else {
    $pageTitle = "Liste de nos catégories";
    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt !";
    $view = 'views/categories.php';
}