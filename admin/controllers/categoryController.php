<?php

require('models/Category.php');


if(isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'list' :
            $categories = getAllCategories();

            $view = 'views/categoryList.php';
            $pageTitle = 'Gestion des catégories';
            $pageDescription = '';

        break;

        case 'new' :
            $categories = getAllCategories();
            $view = 'views/categoryForm.php';
            $pageTitle = 'Ajouter une catégorie';
            $pageDescription = '';

        break;

        case 'add' :
            if(empty($_POST['name']) || empty($_FILES['image']['tmp_name'])){

                if(empty($_POST['name'])){
                    $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
                }
                if(empty($_FILES['image']['tmp_name'])){
                    $_SESSION['messages'][] = 'Le champ image est obligatoire !';
                }

                $_SESSION['old_inputs'] = $_POST;
                header('Location:index.php?controller=categories&action=new');
                exit;
            }
            else{
                $resultAdd = addCategory($_POST);
                if($resultAdd){
                    $_SESSION['messages'][] = 'Catégorie enregistré !';
                }
                else{
                    $_SESSION['messages'][] = "Erreur lors de l'enregistrement de la catégorie... :(";
                }
                header('Location:index.php?controller=categories&action=list');
                exit;
            }

        break;

        case 'edit' :
            if(!empty($_POST)){
                if(empty($_POST['name']) || empty($_FILES['image']['tmp_name'])){

                    if(empty($_POST['name'])){
                        $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
                    }
                    if(empty($_FILES['image']['tmp_name'])){
                        $_SESSION['messages'][] = 'Le champ image est obligatoire !';
                    }

                    $_SESSION['old_inputs'] = $_POST;
                    header('Location:index.php?controller=categories&action=edit&id='.$_GET['id']);
                    exit;
                }
                else {
                    $result = updateCategory($_GET['id'], $_POST);
                    if ($result) {
                        $_SESSION['messages'][] = 'Catégorie mis à jour !';
                    } else {
                        $_SESSION['messages'][] = 'Erreur lors de la mise à jour... :(';
                    }
                    header('Location:index.php?controller=categories&action=list');
                    exit;
                }
            }
            else{
                if(!isset($_SESSION['old_inputs'])){
                    if(isset($_GET['id'])){
                        $category = getCategory($_GET['id']);
                        if($category == false){
                            header('Location:index.php?controller=categories&action=list');
                            exit;
                        }
                    }
                    else {
                        header('Location:index.php?controller=categories&action=list');
                        exit;
                    }
                }
                $categories = getAllCategories();
                $view = 'views/categoryForm.php';
                $pageTitle = 'Modifier une catégorie';
                $pageDescription = '';
            }

        break;

        case 'delete' :
            if(isset($_GET['id'])) {
                $result = deleteCategory($_GET['id']);
            }
            else {
                $_SESSION['messages'][] = 'Max... arrête de toucher mes Urls stp';
                header('Location:index.php?controller=categories&action=list');
                exit;
            }
            if($result){
                $_SESSION['messages'][] = 'Catégorie supprimé !';
            }
            else{
                $_SESSION['messages'][] = 'Erreur lors de la suppression... :(';
            }
            header('Location:index.php?controller=categories&action=list');
            exit;

        break;

        default :
            $categories = getAllCategories();
            $view = 'views/categoryList.php';
            $pageTitle = 'Gestion des catégories';
            $pageDescription = '';
    }
}else {
    $categories = getAllCategories();
    $view = 'views/categoryList.php';
    $pageTitle = 'Gestion des catégories';
    $pageDescription = '';
}