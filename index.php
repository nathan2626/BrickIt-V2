<?php

session_start();

require ('helpers.php');

if(isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'categories' :
            require 'controllers/categoryController.php';
            break;

        case 'products' :
            require 'controllers/productController.php';
            break;

        case 'users' :
            require 'controllers/userController.php';
            break;

        case 'game' :
            require 'controllers/ajaxController.php';
            break;

        case 'contact' :
            require 'controllers/contactController.php';
            break;

        case 'page404' :
            require 'controllers/page404Controller.php';
            break;

        default :
            require 'controllers/page404Controller.php';
    }
}
else{
    require 'controllers/indexController.php';
}
require('views/front.php');

if(isset($_SESSION['messages'])){
    unset($_SESSION['messages']);
}
if(isset($_SESSION['old_inputs'])){
    unset($_SESSION['old_inputs']);
}