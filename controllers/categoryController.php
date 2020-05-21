<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';



if($_GET['action'] == 'list'){
    $categories = getAllCategories();

//    var_dump($categoryProducts['0']['name']);
//    die();
    require 'views/categories.php';

} elseif ($_GET['action'] == 'single') { //choix d'une catégorie
    $categoryProducts = getCategoryProducts($_GET['id']);
    $category = getCategory($_GET['id']);
    $categories = getAllCategories();

    require 'views/productsCategory.php';

} else {
    require 'views/categories.php';
}