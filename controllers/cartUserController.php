<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';
require_once 'models/Cart.php';

$categories = getAllCategories();

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addProductCart' :

            $product = getProduct($_GET['product_id']);

            if ($product['id'] == $_GET['product_id']) { //if the product_id sent is the one id in the url
                $verifInt = $_POST['quantityProduct'];
                if (ctype_digit($verifInt) && $verifInt <= $product['quantity'] && $verifInt > 0) { //if $verifInt is INT and <= the total quantity of the product and > 0
                    $_SESSION['cart'][$_GET['product_id']] = $_POST['quantityProduct'];

                    $_SESSION['messages'][] = 'Produit ajouté !';

                    header('Location:index.php?p=cart&action=displayCart');
                    exit;
                } else {
                    $_SESSION['messages'][] = 'Cette quantité est indisponible !';

                    header('Location:index.php?p=cart&action=displayCart');
                    exit;
                }
            } else {
                $_SESSION['messages'][] = 'Vous avez été deconnecté subitement... à ce demander pour quoi ?';
                header('Location:index.php?p=users&action=disconnect');
                exit;
            }

        break;

        case 'deleteProductCart' :


            unset($_SESSION['cart'][$_GET['productId']]);
            $_SESSION['messages'][] = 'Produit suprimée !';

            header('Location:index.php?p=cart&action=displayCart');
            exit;

        break;

//      I manage the quantity directly on the cart page with a link to the quantityL.
//      case 'updateProductQuantityCart' :
//
//          $_SESSION['cart'][$_GET['product_id']] = $_POST['quantity'];
//          $_SESSION['messages'][] = 'Quantité modifiée !';
//
//          header('Location:index.php?p=cart&action=displayCart');
//          exit;
//      break;

        case 'displayCart' :
            $products = getAllProducts();
            $cartProducts = [];

            if (!empty($_SESSION['cart'])){
                $cartProducts = getCartProducts();

            } else {
                $_SESSION['messages'][] = 'Panier vide !';

            }

            $pageTitle = "Votre panier";
            $pageDescription = "Affichage de votre panier";
            $view = 'views/cartUser.php';

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