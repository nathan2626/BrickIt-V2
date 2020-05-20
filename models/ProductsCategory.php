<?php

function getAllProducts() {
    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
    $products = $query->fetchAll();

    return $products;
}

function getProducts($categoryId = null) {


    $db = dbConnect();

    if ($categoryId != false) {

        $query = $db->prepare('SELECT * FROM products WHERE category_id = ?');
        $result = $query->execute([$categoryId]);
        $products = $query->fetchAll();

    } else {

        $query = $db->query('SELECT * FROM products');
        $products = $query->fetchAll();
    }
    return $products;
}

function getProduct($id)
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM products WHERE id = ?');
    $query->execute([
        $id
    ]);

    $result = $query->fetch();

    return $result;
}