<?php

function getAllCategories() {
    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories WHERE is_activate = 1');
    $categories = $query->fetchAll();

    return $categories;
}

function getCategory($id) {
    $db = dbConnect();

    $query = $db ->prepare('SELECT * FROM categories WHERE is_activate = 1 && id = ?');
    $query ->execute([
        $id
    ]);

    $result = $query->fetch();

    return $result;
}

function getAllCategoriesNotActivates() {
    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories WHERE is_activate = 0');
    $categories = $query->fetchAll();

    return $categories;
}