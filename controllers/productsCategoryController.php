<?php

require_once 'models/Categories.php';
$categories = getAllCategories();


$category = getCategory($_GET['category_id']);
require 'views/productsCategory.php';
