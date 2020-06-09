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

//filters

function getProductsBy30($categoryId)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && price BETWEEN 0 AND 30
    ");
    $query->execute([
        $categoryId
    ]);

    return $query->fetchAll();
}
function getProductsBy60($categoryId)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && price BETWEEN 30 AND 60
    ");
    $query->execute([
        $categoryId
    ]);

    return $query->fetchAll();
}
function getProductsBy90($categoryId)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && price BETWEEN 60 AND 90
    ");
    $query->execute([
        $categoryId
    ]);

    return $query->fetchAll();
}
function getProductsByInfinity($categoryId)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && price BETWEEN 90 AND 1000
    ");
    $query->execute([
        $categoryId
    ]);

    return $query->fetchAll();
}




function getProductsBy5Age($categoryId)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && age BETWEEN 0 AND 5
    ");
    $query->execute([
        $categoryId
    ]);

    return $query->fetchAll();
}
function getProductsBy8Age($categoryId)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && age BETWEEN 6 AND 8
    ");
    $query->execute([
        $categoryId
    ]);

    return $query->fetchAll();
}
function getProductsBy11Age($categoryId)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && age BETWEEN 9 AND 11
    ");
    $query->execute([
        $categoryId
    ]);

    return $query->fetchAll();
}
function getProductsByInfinityAge($categoryId)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && age BETWEEN 12 AND 120
    ");
    $query->execute([
        $categoryId
    ]);

    return $query->fetchAll();
}