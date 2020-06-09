<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'list' :
            $categories = getAllCategories();
            $categoriesNotActivates = getAllCategoriesNotActivates();

            $pageTitle = "Liste de nos catégories";
            $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt !";
            $view = 'views/categories.php';

        break;

        case 'single' :
            $categoryProducts = getCategoryProducts($_GET['id']);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        default :
            $categories = getAllCategories();
            $categoriesNotActivates = getAllCategoriesNotActivates();

            $pageTitle = "Liste de nos catégories";
            $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt !";
            $view = 'views/categories.php';

    }
} else{
    $pageTitle = "Liste de nos catégories";
    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt !";
    $view = 'views/categories.php';

    $categories = getAllCategories();
    $categoriesNotActivates = getAllCategoriesNotActivates();

}