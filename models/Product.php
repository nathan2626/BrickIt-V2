<?php

function getAllProducts() {
    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
    $products = $query->fetchAll();

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
function getProductsByPrice($categoryId, $low, $high)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && price BETWEEN ? AND ?
    ");
    $query->execute([
        $categoryId,
        $low,
        $high
    ]);

    return $query->fetchAll();
}
function getProductsByAge($categoryId, $low, $high)
{

    $db = dbConnect();

    $query = $db->prepare("
    SELECT p.* 
    FROM products p
    INNER JOIN category_product cp
    ON p.id = cp.product_id
    WHERE cp.category_id  = ?
    && p.is_activate = 1 && age BETWEEN ? AND ?
    ");
    $query->execute([
        $categoryId,
        $low,
        $high,
    ]);

    return $query->fetchAll();
}

//Search bar part bonus
function foundSearchProducts($nameProduct)
{
    $db = dbConnect();


    $query = $db->prepare('SELECT * FROM products WHERE name LIKE "%'.$nameProduct.'%" ORDER BY price DESC');
    $query->execute([$nameProduct]);

    $productsSearch = $query->fetchAll();

    return $productsSearch;
}

//Comments part bonus
function getAllComments()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM comments ORDER BY id DESC');
    $allComments = $query->fetchAll();

    return $allComments;
}
function addComment($comment, $pseudo, $product_id, $username, $notation)
{
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO comments (comment, pseudo, product_id, username, notation) VALUES (?, ?, ?, ?, ?)');
    $result = $query->execute([$comment, $pseudo, $product_id, $username, $notation]);

    return  $result;
}
