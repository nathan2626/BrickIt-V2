<?php

function getAllCategories() {
    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
    $categories = $query->fetchAll();

    return $categories;
}

function getCategory($id) {
    $db = dbConnect();

    $query = $db ->prepare('SELECT * FROM categories WHERE id = ?');
    $query ->execute([
        $id
    ]);

    $result = $query->fetch();

    return $result;
}

