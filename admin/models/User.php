<?php

function getAllUsers()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM users');
    $products =  $query->fetchAll();

    return $products;
}

function deleteUser($id)
{
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM users WHERE id = ?');
    $result = $query->execute([$id]);

    return $result;
}