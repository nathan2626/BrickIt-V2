<?php

if(!isset($_GET['category_id']) || !ctype_digit($_GET['category_id'])){
    header('Location:index.php');
    exit;
}

require_once 'models/ProductsCategory.php';
require_once 'models/Categories.php';

$categories = getAllCategories();

$category = getCategory($_GET['category_id']);

if($category == false) {
    header('Location:index.php');
    exit;
}

$products = getProducts($category['id']);

require 'views/categories.php';