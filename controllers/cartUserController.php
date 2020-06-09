<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addProduct' :


            $pageTitle = "Ajout du produit";
            $pageDescription = " ";
            $view = 'views/categories.php';

        break;

        case 'deleteProduct' :


            $pageTitle = "Supprimer le produit";
            $pageDescription = " ";
            $view = 'views/productsCategory.php';

        break;

        case 'updateProductQuantity' :


            $pageTitle = "Quantité du produit";
            $pageDescription = " ";
            $view = 'views/productsCategory.php';

        break;

        case 'display' :


            $pageTitle = "Votre panier";
            $pageDescription = " ";
            $view = 'views/productsCategory.php';

        break;

        default :

            $pageTitle = "Liste de nos catégories";
            $pageDescription = " ";
            $view = 'views/categories.php';
    }
}