<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

if($_GET['action'] == 'single'){

    $product = getProduct($_GET['id']);
    $products = getAllProducts($_GET['id']);

    require 'views/singleProduct.php';

} else {
    require 'views/productsCategory.php';
}
