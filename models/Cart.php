<?php

function getCartProducts()
{
    $db = dbConnect();
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $query = $db->prepare("SELECT price, name, quantity, id FROM products WHERE id = ?");
        $query->execute([$product_id]);
        $result[] = $query->fetch();
    }
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
    $_SESSION['cart']['order_id'] = $db->lastInsertId(); //je crée order_id qui est égal id inséré
//    $newOrderDetails = insertNewOrderDetails($cartProducts, $orderId);

    return $result;
}
function insertNewOrderDetails($cartProducts) //pcq'on peut pas faire une liaison avec un insert, si il y a 1000 produits ca permet de faire une requete au lieu de 1000
{
    $db = dbConnect();
    $cartProducts = getCartProducts();


    $queryString = "INSERT INTO order_details (order_id, quantity, price, name) VALUES ";
    $queryValues = array();

    foreach ($cartProducts as $key => $cartProduct) {

        //génération dynamique de $queryString
        $queryString .= "(:order_id_$key, :quantity_$key, :price_$key, :name_$key)";

        if ($key != array_key_last($cartProducts)) {
            $queryString .= ',';
        } else {
            $queryString .= ';';
        }
        //génération dynamique de $queryValues
        $queryValues["order_id_$key"] = $_SESSION['cart']['order_id'];
        $queryValues["quantity_$key"] = $_SESSION['cart'][$cartProduct['id']];
        $queryValues["price_$key"] = $cartProduct['price'];
        $queryValues["name_$key"] = $cartProduct['name'];

    }
    $query = $db->prepare($queryString);
    $query = $query->execute($queryValues);

}
