<?php

require_once 'models/Category.php';
require_once 'models/Product.php';
require_once 'models/User.php';

$categories = getAllCategories();
$productsNovelties = getProductsNovelties();
$bestsProducts = getBestsproducts();
$allProducts = getAllProducts();

$pageTitle = "BrickIt";
$pageDescription = "Bienvenue dans notre mystérieux univers, celui de vos rêves les plus féériques !";
$view = 'views/index.php';
