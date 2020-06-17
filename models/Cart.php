<?php

function getCartProducts()
{
    $db = dbConnect();
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $query = $db->prepare("SELECT price, name, quantity, id FROM products WHERE id = ?");
        $query->execute([$product_id]);
        $result[] = $query->fetch();
    }
    var_dump($_SESSION['cart']);
    return $result;
}

//function getAllOrdersByUser($id)
//{
//    $db = dbConnect();
//
//    $query = $db->prepare('SELECT * FROM order where user_id = ?');
//    $query->execute([$id]);
//    $orders = $query->fetchAll();
//
//    return $orders;
//}
function insertNewOrder()
{
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO orders (adress, user_id, first_name, last_name) VALUES (?, ?, ?, ?)');
    $result = $query->execute(
        [
            $_SESSION['user']['adress'],
            $_SESSION['user']['id'],
            $_SESSION['user']['first_name'],
            $_SESSION['user']['last_name'],
    ]);

    return $result;
}
function insertNewOrderDetails()
{
    $db = dbConnect();
    $product = getCartProducts();

    $query = $db->prepare('INSERT INTO order_details (quantity, price, name, order_id) VALUES (?, ?, ?, ?)');
    $result = $query->execute(
        [
            $_SESSION['cart'][$product['id']],
            $_SESSION['cart']['price'],
            $_SESSION['cart']['name'],
            $_SESSION['cart']['order_id'],
        ]);
    return $result;
}