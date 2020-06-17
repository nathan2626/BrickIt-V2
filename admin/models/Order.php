<?php
function getAllOrders()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM orders');
    $orders =  $query->fetchAll();

    return $orders;
}
