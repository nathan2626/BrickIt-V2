<?php

require_once 'models/Categories.php';
$categories = getAllCategories();



require 'views/game/index.php';
