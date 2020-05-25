<?php

function getAllProducts()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
    $products =  $query->fetchAll();

    return $products;
}

function addProduct($informations)
{
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO products (name, description, price, quantity, is_novelty, is_best) VALUES ( :name, :description, :price, :quantity, :is_novelty, :is_best)');
    $result = $query->execute(
        [
            'name' => $informations['name'],
            'description' => $informations['description'],
            'price' => $informations['price'],
            'quantity' => $informations['quantity'],
            'is_novelty' => $informations['is_novelty'],
            'is_best' => $informations['is_best'],
        ]
    );

    //select multiple categories when add artist
    if($result) {
        $productId = $db->lastInsertId();

        if(isset($informations['category_id'])){

            $queryString = "INSERT INTO category_product (product_id, category_id) VALUES";
            $queryValues = array();

            foreach ($informations['category_id'] as $key => $categoryId) {

                //génération dynamique de $queryString
                $queryString .= "(:product_id_$key, :category_id_$key)";

                if($key != array_key_last($informations['category_id'])){
                    $queryString .= ',';
                }
                else {
                    $queryString .= ';';
                }
                //génération dynamique de $queryValues
                $queryValues["product_id_$key"]= $productId;
                $queryValues["category_id_$key"]= $categoryId;
            }
            $query = $db->prepare($queryString);
            $result = $query->execute($queryValues);
        }
    }

    if(!empty($_FILES['image']['tmp_name'])){
        $productId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/images/category/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE products SET image = '$new_file_name' WHERE id = $productId");
        }
    }

    return $result;
}

function deleteProduct($id)
{
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM products WHERE id = ?');
    $result = $query->execute([$id]);

    return $result;
}

