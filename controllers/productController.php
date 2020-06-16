<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'single' :
            $product = getProduct($_GET['id']);
            $products = getAllProducts($_GET['id']);
//            $allComments = getAllComments();

            $pageTitle = "Descriptif du produit";
            $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
            $view = 'views/singleProduct.php';

        break;

//        case 'addComment' : //Comment part bonus
////            $product = getProduct($_GET['id']);
////            $products = getAllProducts($_GET['id']);
//            $allComments = getAllComments();
//
//            if (isset($_POST['submit_comment']) ) {
//
//                $pseudo = htmlspecialchars($_POST['pseudo']);
//                $comment = htmlspecialchars($_POST['comment']);
//                $notation = htmlspecialchars($_POST['notation']);
//                $username = htmlspecialchars($_SESSION['user']['first_name']);
//
////                if ($_SESSION['user']['first_name'] == $username) {
//
//                    if (empty($_POST['comment']) || empty($_POST['pseudo']) || empty($_POST['notation'])) {
//
//                        if (empty($_POST['comment'])) {
//                            $_SESSION['messages'][] = 'Le champ commentaire est obligatoire !';
//                        }
//                        if (empty($_POST['pseudo'])) {
//                            $_SESSION['messages'][] = 'Le champ pseudo est obligatoire !';
//                        }
//                        if (empty($_POST['notation'])) {
//                            $_SESSION['messages'][] = 'Le champ note est obligatoire !';
//                        }
//
//                        header('Location:index.php?p=categories&action=list');
//                        exit;
//
//                    } else {
//                        if (strlen($pseudo) < 20 && $notation >= 0 && $notation <= 5) {
//                            $resultAdd = addComment($_POST);
//                            if($resultAdd) {
//                                $_SESSION['messages'][] = 'Commentaire enregistré !';
//                            }
//                        }
//                        else {
//                            $_SESSION['messages'][] = "Erreur lors de l'enregistrement du commentaire... :(";
//                        }
//                        header('Location:index.php?p=categories&action=list');
//                        exit;
//                    }
//                }
////                $_SESSION['messages'][] = 'Vous avez déjà posté un commentaire pour ce produit !';
////            }
////            else {
////                $allComments = getAllComments();
////
////                $pageTitle = "Descriptif du produit";
////                $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
////                $view = 'views/categories.php';
////            }
//
//        break;

        case 'search' : //Search part bonus
            if (isset($_POST['nameProduct']) AND !empty($_POST['nameProduct'])) {
                $productsSearch = foundSearchProducts($_POST['nameProduct']);

                $pageTitle = "Descriptif du produit";
                $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
                $view = 'views/allProducts.php';
            }
            else {
                $pageTitle = "Descriptif du produit";
                $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
                $view = 'views/index.php';
            }


        break;

        default :
            $pageTitle = "Descriptif de la catégorie";
            $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt";
            $view = 'views/page404.php';
    }
}else {
    $pageTitle = "Descriptif de la catégorie";
    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt";
    $view = 'views/page404.php';
}

