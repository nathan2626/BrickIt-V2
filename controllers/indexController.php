<?php

require_once 'models/Category.php';
require_once 'models/Product.php';
require_once 'models/User.php';

$categories = getAllCategories();
$productsNovelties = getProductsNovelties();
$bestsProducts = getBestsproducts();



require 'views/index.php';
