<?php

function getAllProducts()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
    $products =  $query->fetchAll();

    return $products;
}