<?php

require('../helpers.php');

if(isset($_GET['controller'])){
    switch ($_GET['controller']){
        case 'categories' :
            require 'controllers/categoryController.php';
            break;
        case 'products' :
            require 'controllers/productController.php';
            break;
        case 'users' :
            require 'controllers/userController.php';
            break;
        default :
            require 'controllers/indexController.php';
    }
}
else{
    require 'controllers/indexController.php';
}

require('views/admin.php');