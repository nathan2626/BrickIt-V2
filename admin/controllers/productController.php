<?php

require('models/Product.php');
require('models/Category.php');

if($_GET['action'] == 'list'){
//    $categoryLink = getCategoryProductLinks();
    $products = getAllProducts();
    $categories = getAllCategories();
//    $productCategories = getProductCategories();

    $view = 'views/productList.php';
    $pageTitle = 'Gestion des produits';
    $pageDescription = '';

}
elseif($_GET['action'] == 'new'){
    $categories = getAllCategories();
    $view = 'views/productForm.php';
    $pageTitle = 'Ajouter un artiste';
    $pageDescription = '';
}
elseif($_GET['action'] == 'add'){

    if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['description']) || empty($_POST['quantity'])){

        if(empty($_POST['name'])){
            $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
        }
        if(empty($_POST['price'])){
            $_SESSION['messages'][] = 'Le champ prix est obligatoire !';
        }
        if(empty($_POST['description'])){
            $_SESSION['messages'][] = 'Le champ description est obligatoire !';
        }
        if(empty($_POST['quantity'])){
            $_SESSION['messages'][] = 'Le champ quantité est obligatoire !';
        }

        $_SESSION['old_inputs'] = $_POST;
        header('Location:index.php?controller=products&action=new');
        exit;
    }
    else{
        $resultAdd = addProduct($_POST);
        if($resultAdd){
            $_SESSION['messages'][] = 'Produit enregistré !';
        }
        else{
            $_SESSION['messages'][] = "Erreur lors de l'enregistrement du produit... :(";
        }
        header('Location:index.php?controller=products&action=list');
        exit;
    }
}
elseif($_GET['action'] == 'edit'){
    if(!empty($_POST)){
        if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['description']) || empty($_POST['quantity'])){

            if(empty($_POST['name'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }
            if(empty($_POST['price'])){
                $_SESSION['messages'][] = 'Le champ prix est obligatoire !';
            }
            if(empty($_POST['description'])){
                $_SESSION['messages'][] = 'Le champ description est obligatoire !';
            }
            if(empty($_POST['quantity'])){
                $_SESSION['messages'][] = 'Le champ quantité est obligatoire !';
            }

            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?controller=products&action=edit&id='.$_GET['id']);
            exit;
        }
        else {
            $result = updateProduct($_GET['id'], $_POST);
            if ($result) {
                $_SESSION['messages'][] = 'Produit mis à jour !';
            } else {
                $_SESSION['messages'][] = 'Erreur lors de la mise à jour... :(';
            }
            header('Location:index.php?controller=products&action=list');
            exit;
        }
    }
    else{
        if(!isset($_SESSION['old_inputs'])){
            if(isset($_GET['id'])){

                $product = getProduct($_GET['id']);
                $productCategories = getProductCategories($_GET['id']);

                if($product == false){
                    header('Location:index.php?controller=products&action=list');
                    exit;
                }
            }
            else {
                header('Location:index.php?controller=products&action=list');
                exit;
            }
        }
        $products = getAllProducts();
        $view = 'views/productForm.php';
        $pageTitle = 'Modifier un produit';
        $pageDescription = '';
    }
}
elseif($_GET['action'] == 'delete'){
    if(isset($_GET['id'])) {
        $result = deleteProduct($_GET['id']);
    }
    else {
        $_SESSION['messages'][] = 'Max... arrête de toucher mes Urls stp';
        header('Location:index.php?controller=products&action=list');
        exit;
    }
	if($result){
        $_SESSION['messages'][] = 'Produit supprimé !';
    }
    else{
        $_SESSION['messages'][] = 'Erreur lors de la suppression... :(';
    }
	header('Location:index.php?controller=products&action=list');
	exit;
}