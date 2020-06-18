<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'single' :
            if(isset($_GET['id']) && !empty($_GET['id'])) { //if I receive a get id and not empty
                $product = getProduct($_GET['id']);
                $products = getAllProducts($_GET['id']);
                $allComments = getAllComments($_GET['id']);

                if (isset($product['id']) && $_GET['id'] == $product['id']){ //if I receive a get category id and which is equal to id

                    $pageTitle = "Descriptif du produit";
                    $pageDescription = "Découvrez l'ensemble de nos produits en exclusivité sur BrickIt";
                    $view = 'views/singleProduct.php';

                } else {
                    $pageTitle = "Descriptif de la catégorie";
                    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt";
                    $view = 'views/page404.php';

                }

            } else {
                $pageTitle = "Descriptif de la catégorie";
                $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt";
                $view = 'views/page404.php';
            }

        break;

        case 'addComment' : //Comment part bonus
            if(isset($_GET['id']) && !empty($_GET['id'])) { //if I receive a get id and not empty
                $allComments = getAllComments($_GET['id']);

                if (isset($_POST['submit_comment']) ) {

                    $pseudo = htmlspecialchars($_POST['pseudo']);
                    $comment = htmlspecialchars($_POST['comment']);
                    $notation = htmlspecialchars($_POST['notation']);
                    $username = htmlspecialchars($_SESSION['user']['first_name']);

                    if (isset($_SESSION['user'])) {

                        if (empty($_POST['comment']) || empty($_POST['pseudo']) || empty($_POST['notation'])) {

                            if (empty($_POST['comment'])) {
                                $_SESSION['messages'][] = 'Le champ commentaire est obligatoire !';
                            }
                            if (empty($_POST['pseudo'])) {
                                $_SESSION['messages'][] = 'Le champ pseudo est obligatoire !';
                            }
                            if (empty($_POST['notation'])) {
                                $_SESSION['messages'][] = 'Le champ note est obligatoire !';
                            }

                            header('Location:index.php?p=products&action=single&id='.$_GET['id']);
                            exit;

                        } else {
                            if (strlen($pseudo) < 20 && $notation >= 0 && $notation <= 5) {
                                $resultAdd = addComment($comment, $pseudo, $_GET['id'], $username, $notation);
                                if($resultAdd) {
                                    $_SESSION['messages'][] = 'Commentaire enregistré !';
                                }
                            }
                            else {
                                $_SESSION['messages'][] = "Erreur lors de l'enregistrement du commentaire... :(";
                            }
                            header('Location:index.php?p=products&action=single&id='.$_GET['id']);
                            exit;
                        }
                    }
                    else {
                        $_SESSION['messages'][] = 'Vous devez vous connecter pour poster un commentaire !';

                        header('Location:index.php?p=products&action=single&id='.$_GET['id']);
                        exit;
                    }
                }
                else {

                    $pageTitle = "Descriptif de la catégorie";
                    $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt";
                    $view = 'views/page404.php';
                }
            } else {
                $pageTitle = "Descriptif de la catégorie";
                $pageDescription = "Disney, La Reine Des Neiges, Hrry Potter, Star Wars, et bien d'autre catégories sur BrickIt";
                $view = 'views/page404.php';
            }

        break;

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

