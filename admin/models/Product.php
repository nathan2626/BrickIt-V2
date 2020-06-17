<?php

function getAllProducts()
{
    $db = dbConnect();

    $query = $db->prepare('
      SELECT p.*, GROUP_CONCAT(c.name SEPARATOR " / ") AS categories
FROM products p
JOIN category_product pc ON p.id = pc.product_id
JOIN categories c ON pc.category_id = c.id
GROUP BY p.id
    ');
    $query->execute();
    $products =  $query->fetchAll();

    return $products;
}

function getProduct($id)
{
    $db = dbConnect();

    $query = $db->prepare("SELECT * FROM products WHERE id = ?");
    $query->execute([
        $id
    ]);

    return  $query->fetch();

}
function addProduct($informations)
{
    $db = dbConnect();

    $query = $db->prepare('INSERT INTO products (name, description, price, quantity, is_novelty, is_best, is_activate) VALUES ( :name, :description, :price, :quantity, :is_novelty, :is_best, :is_activate)');
    $result = $query->execute(
        [
            'name' => $informations['name'],
            'description' => $informations['description'],
            'price' => $informations['price'],
            'quantity' => $informations['quantity'],
            'is_novelty' => $informations['is_novelty'],
            'is_best' => $informations['is_best'],
            'is_activate' => $informations['is_activate'],
        ]
    );

    //select multiple categories when add artist
    if($result) {
        $productId = $db->lastInsertId();

        if(isset($informations['category_id'])){
            insertProductCategoriesLinks($productId, $informations['category_id']);
        }
    }

    if(!empty($_FILES['image']['tmp_name'])){
        $productId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/images/product/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE products SET image = '$new_file_name' WHERE id = $productId");
        }
    }
    if(!empty($_FILES['image_secondary_1']['tmp_name'])){
        $productId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image_secondary_1']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/images/product/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image_secondary_1']['tmp_name'], $destination);

            $db->query("UPDATE products SET image_secondary_1 = '$new_file_name' WHERE id = $productId");
        }
    }
    if(!empty($_FILES['image_secondary_2']['tmp_name'])){
        $productId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image']['image_secondary_2'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/images/product/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image_secondary_2']['tmp_name'], $destination);

            $db->query("UPDATE products SET image_secondary_2 = '$new_file_name' WHERE id = $productId");
        }
    }
    if(!empty($_FILES['image_secondary_3']['tmp_name'])){
        $productId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image_secondary_3']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/images/product/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image_secondary_3']['tmp_name'], $destination);

            $db->query("UPDATE products SET image_secondary_3 = '$new_file_name' WHERE id = $productId");
        }
    }

    return $result;
}
function updateProduct($productId, $informations)
{
    $db = dbConnect();

    $query = $db->prepare("UPDATE products SET name = ?, description = ?, price = ?, quantity = ?, is_activate = ?, is_novelty = ?, is_best = ? WHERE id = ?");
    $result = $query->execute([
        $informations['name'],
        $informations['description'],
        $informations['price'],
        $informations['quantity'],
        $informations['is_activate'],
        $informations['is_novelty'],
        $informations['is_best'],
        $productId
    ]);

    //supprimer les anciennes liaisons (select multiple des labels)
    $query = $db->prepare('DELETE FROM category_product WHERE product_id = ?');
    $result = $query->execute([$productId]);

    //ajouter des nouvelles liaisons avec ce qu'on a recu
    if(isset($informations['category_id'])){
        insertProductCategoriesLinks($productId, $informations['category_id']);
    }

    if(!empty($_FILES['image']['tmp_name'])){
        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){

            //ici virer l'ancien fichier
            $product = getProduct($productId);
            if($product['image'] != null){
                unlink("../assets/images/product/".$product['image']);
            }

            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/images/product/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE products SET image = '$new_file_name' WHERE id = $productId");
        }
    }

    if(!empty($_FILES['image_secondary_1']['tmp_name'])){
        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image_secondary_1']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){

            //ici virer l'ancien fichier
            $product = getProduct($productId);
            if($product['image_secondary_1'] != null){
                unlink("../assets/images/product/".$product['image_secondary_1']);
            }

            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/images/product/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image_secondary_1']['tmp_name'], $destination);

            $db->query("UPDATE products SET image_secondary_1 = '$new_file_name' WHERE id = $productId");
        }
    }

    if(!empty($_FILES['image_secondary_2']['tmp_name'])){
        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image_secondary_2']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){

            //ici virer l'ancien fichier
            $product = getProduct($productId);
            if($product['image_secondary_2'] != null){
                unlink("../assets/images/product/".$product['image_secondary_2']);
            }

            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/images/product/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image_secondary_2']['tmp_name'], $destination);

            $db->query("UPDATE products SET image_secondary_2 = '$new_file_name' WHERE id = $productId");
        }
    }

    if(!empty($_FILES['image_secondary_3']['tmp_name'])){
        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image_secondary_3']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){

            //ici virer l'ancien fichier
            $product = getProduct($productId);
            if($product['image_secondary_3'] != null){
                unlink("../assets/images/product/".$product['image_secondary_3']);
            }

            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/images/product/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image_secondary_3']['tmp_name'], $destination);

            $db->query("UPDATE products SET image_secondary_3 = '$new_file_name' WHERE id = $productId");
        }
    }

    return $result;
}
function insertProductCategoriesLinks($id, $categoryIds)
{
    $db = dbConnect();

    //ajouter des nouvelles liaisons avec ce qu'on a recu

    $queryString = "INSERT INTO category_product (product_id, category_id) VALUES";
    $queryValues = array();

    foreach ($categoryIds as $key => $categoryId) {

        //génération dynamique de $queryString
        $queryString .= "(:product_id_$key, :category_id_$key)";

        if ($key != array_key_last($categoryIds)) {
            $queryString .= ',';
        } else {
            $queryString .= ';';
        }
        //génération dynamique de $queryValues
        $queryValues["product_id_$key"] = $id;
        $queryValues["category_id_$key"] = $categoryId;
    }
    $query = $db->prepare($queryString);
    $query = $query->execute($queryValues);
}


function deleteProduct($id)
{
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM products WHERE id = ?');
    $result = $query->execute([$id]);

    return $result;
}
function getCategoryProductLinks() //IMPORTANT
{
    $db = dbConnect();

    $query = $db->prepare('
      SELECT p.*, GROUP_CONCAT(c.name SEPARATOR " / ") AS categories
FROM products p
JOIN category_product pc ON p.id = pc.product_id
JOIN categories c ON pc.category_id = c.id
GROUP BY p.id
    ');

    $query->execute();

    $result =  $query->fetch();

    return $result;
}