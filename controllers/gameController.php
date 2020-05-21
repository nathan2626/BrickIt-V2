<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

$pageTitle = "Le jeu BrickIt !";
$pageDescription = "Incarner Batman, Spiderman et bien d'autres encore, pour venir à bout des méchants !";
$view = 'views/game/index.php';