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

function getProductsNovelties() {
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM products WHERE is_novelty = 1 && is_activate = 1');
    $query->execute();

    $productsNovelties = $query->fetchAll();

    return $productsNovelties;
}

function getBestsproducts() {
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM products WHERE is_best = 1 && is_activate = 1');
    $query->execute();

    $bestsProducts = $query->fetchAll();

    return $bestsProducts;
}

function getCategoryProducts($categoryId) { //permet d'avoi tout les produits d'une catégorie
    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1
    ");
    $query->execute([
        $categoryId
    ]);

    return $query->fetchAll();
}
