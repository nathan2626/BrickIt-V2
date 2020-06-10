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
            $_SESSION['messages'][] = 'Aucun produits pour cette catégorie !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singlePrice30';
            $categoryProducts = getProductsBy30($_GET['id']);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singlePrice60';
            $categoryProducts = getProductsBy60($_GET['id']);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singlePrice90';
            $categoryProducts = getProductsBy90($_GET['id']);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singlePriceInfinity';
            $categoryProducts = getProductsByInfinity($_GET['id']);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singleAge5';
            $categoryProducts = getProductsBy5Age($_GET['id']);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

            break;

        case 'singleAge8';
            $categoryProducts = getProductsBy8Age($_GET['id']);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singleAge11';
            $categoryProducts = getProductsBy11Age($_GET['id']);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singleAgeInfinity';
            $categoryProducts = getProductsByInfinityAge($_GET['id']);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

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