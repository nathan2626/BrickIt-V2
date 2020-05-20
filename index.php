<?php
require ('helpers.php');
if(isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'account' :
            require 'controllers/accountController.php';
            break;

        case 'cartUser' :
            require 'controllers/cartUserController.php';
            break;

        case 'categories' :
            require 'controllers/categoriesController.php';
            break;

        case 'productsCategory' :
            require 'controllers/productsCategoryController.php';
            break;

        case 'singleProduct' :
            require 'controllers/singleProductController.php';
            break;

        case 'userLogin' :
            require 'controllers/userLoginController.php';
            break;

        case 'game' :
            require 'controllers/gameController.php';
            break;

        case 'contact' :
            require 'controllers/contactController.php';
            break;

        case 'page404' :
            require 'controllers/page404Controller.php';
            break;

        default :
            require 'controllers/indexController.php';
    }
}
else{
    require 'controllers/indexController.php';
}
require('views/front.php');
