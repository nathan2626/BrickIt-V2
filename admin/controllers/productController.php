<?php

require('models/Product.php');
require('models/Category.php');

if($_GET['action'] == 'list'){

    $products = getAllProducts();
    $categories = getAllCategories();
//    $productCategories = getProductCategories();

    $view = 'views/productList.php';
    $pageTitle = 'Gestion des produits';
    $pageDescription = '';

}
elseif($_GET['action'] == 'new'){

    $view = 'views/productForm.php';
    $pageTitle = 'Ajouter un produit';
    $pageDescription = '';

}
elseif($_GET['action'] == 'add'){


}
elseif($_GET['action'] == 'edit'){

    $view = 'views/productForm.php';
    $pageTitle = 'Modifier un produit';
    $pageDescription = '';

}
elseif($_GET['action'] == 'delete'){


}