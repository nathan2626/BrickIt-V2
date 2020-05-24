<?php

function getAllCategories()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
    $categories =  $query->fetchAll();

    return $categories;
}

//function getProductCategories($productId)
//{
//    $db = dbConnect();
//
//    $query = $db->prepare("
//    SELECT c.*
//    FROM categories c
//    INNER JOIN category_product cp
//    ON c.id = cp.category_id
//    WHERE cp.product_id  = ?
//    ");
//    $query->execute([
//        $productId
//    ]);
//
//    return $query->fetchAll();
//}