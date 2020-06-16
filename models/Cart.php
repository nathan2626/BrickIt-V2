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

function insertNewOrder()
{
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO order_details (quantity, price, name, order_id) VALUES (?, ?, ?, ?)');
    $result = $query->execute(
        [
            $_POST['quantity'],
            $_POST['price'],
            $_POST['name'],
            $_POST['order_id'],
        ]
    );
    $_SESSION['cart'] = [
        'quantity' => $_POST['quantity'],
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'id' => $_POST['id'],
    ];

    return $result;

}