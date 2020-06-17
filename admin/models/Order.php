<?php
function getAllOrders()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM orders');
    $orders =  $query->fetchAll();

    return $orders;
}
function getOrder($id)
{
    $db = dbConnect();

    $query = $db->prepare("SELECT * FROM orders WHERE id = ?");
    $query->execute([
        $id
    ]);

    $result =  $query->fetch();

    return $result;
}