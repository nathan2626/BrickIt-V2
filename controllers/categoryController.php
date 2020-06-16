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
            $low = 0;
            $high = 30;
            $categoryProducts = getProductsByPrice($_GET['id'], $low, $high);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singlePrice60';
            $low = 31;
            $high = 60;
            $categoryProducts = getProductsByPrice($_GET['id'], $low, $high);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singlePrice90';
            $low = 61;
            $high = 90;
            $categoryProducts = getProductsByPrice($_GET['id'], $low, $high);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singlePriceInfinity';
            $low = 91;
            $high = 999999999;
            $categoryProducts = getProductsByPrice($_GET['id'], $low, $high);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singleAge5';
            $low = 0;
            $high = 5;
            $categoryProducts = getProductsByAge($_GET['id'], $low, $high);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

            break;

        case 'singleAge8';
            $low = 6;
            $high = 8;
            $categoryProducts = getProductsByAge($_GET['id'], $low, $high);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singleAge11';
            $low = 9;
            $high = 11;
            $categoryProducts = getProductsByAge($_GET['id'], $low, $high);
            $category = getCategory($_GET['id']);
            $categories = getAllCategories();
            $_SESSION['messages'][] = 'Pas encore de produits pour ce filtre !';

            $pageTitle = "Produits de la catégorie";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/productsCategory.php';

        break;

        case 'singleAgeInfinity';
            $low = 12;
            $high = 120;
            $categoryProducts = getProductsByAge($_GET['id'], $low, $high);
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
            $view = 'views/page404.php';

    }
} else{
    $pageTitle = "Liste de nos catégories";
    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt !";
    $view = 'views/page404.php';

}