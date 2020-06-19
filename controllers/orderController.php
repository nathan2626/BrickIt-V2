<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';
require_once 'models/Cart.php';

$categories = getAllCategories();

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'new' :
            //vérifier si user est connecté
            if(isset($_SESSION['user'])){
                $cartProducts = getCartProducts();
                //récupérer les produits et quantités avec $_SESSION['cart']
                $newOrder = insertNewOrder();
                $newOrderDetails = insertNewOrderDetails($_GET[$cartProducts]);
                if ($newOrder) {
                    $_SESSION['messages'][] = 'Commande enregistrée !';
                } else {
                    $_SESSION['messages'][] = "Erreur lors de l'enregistrement... :(";
                }
                unset($_SESSION['cart']);

                header('Location:index.php?p=users&action=connect');
                exit;

            } else {
                //sinon rediriger vers inscription/connexion
                header('Location:index.php?p=users&action=connect');
                exit;
            }

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