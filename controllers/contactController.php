<?php

require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';

$categories = getAllCategories();

$pageTitle = "Contactez-nous !";
$pageDescription = "Une demande ? Besoin d'aide ? Partagez-nous votre rêve !";
$view = 'views/contact.php';
