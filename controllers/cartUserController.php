<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';
require_once 'models/Cart.php';

$categories = getAllCategories();

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addProductCart' :

            //recoit 2 informations qq et id
            //s'assurer que la valeur recu de la quantite est un int seulement (et pas float car mes produits sont entiers)
            //s'assurer que la valeur recu n'est pas supérieur a la quantité et inférieur a 0
            //s'assurer que l'id recu existe bien
            //sinon rediriger vers la fiche produit

            $_SESSION['cart'][$_GET['product_id']] = $_POST['quantityProduct'];

            $_SESSION['messages'][] = 'Produit ajouté !';

            header('Location:index.php?p=cart&action=displayCart');
            exit;

        break;

        case 'deleteProductCart' :


            unset($_SESSION['cart'][$_GET['productId']]);
            $_SESSION['messages'][] = 'Produit suprimée !';

            header('Location:index.php?p=cart&action=displayCart');
            exit;

        break;

        case 'updateProductQuantityCart' :

            $_SESSION['cart'][$_GET['product_id']] = $_POST['quantity'];



            $_SESSION['messages'][] = 'Quantité modifiée !';

            header('Location:index.php?p=cart&action=displayCart');
            exit;

        break;

        case 'displayCart' :

            $products = getAllProducts();

            $cartProducts = [];
            $cartProducts = getCartProducts();

            $pageTitle = "Votre panier";
            $pageDescription = "Affichage de votre panier";
            $view = 'views/cartUser.php';
            var_dump($_SESSION['cart']);
            print_r($cartProducts);
        break;

        default :

            $pageTitle = "Liste de nos catégories";
            $pageDescription = " ";
            $view = 'views/page404.php';
    }
} else{
    $pageTitle = "Liste de nos catégories";
    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt !";
    $view = 'views/page404.php';

}