<?php

function getAllCategories()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
    $categories =  $query->fetchAll();

    return $categories;
}

function addCategory($informations)
{
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO categories (name, description, is_activate) VALUES( :name, :description, :is_activate)");
    $result = $query->execute([
        'name' => $informations['name'],
        'description' => $informations['description'],
        'is_activate' => $informations['is_activate'],
    ]);

    if(!empty($_FILES['image']['tmp_name'])){
        $categoryId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $categoryId . '.' . $my_file_extension ;
            $destination = '../assets/images/category/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE categories SET image = '$new_file_name' WHERE id = $categoryId");
        }
    }

    return $result;
}

function getCategory($id)
{
    $db = dbConnect();

    $query = $db->prepare("SELECT * FROM categories WHERE id = ?");
    $query->execute([
        $id
    ]);

    $result =  $query->fetch();

    return $result;
}

function deleteCategory($id)
{
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM categories WHERE id = ?');
    $result = $query->execute([$id]);

    return $result;
}

//function getCategoryProductLinks() //IMPORTANT
//{
//    $db = dbConnect();
//
//    $query = $db->prepare('
//      SELECT c.*, GROUP_CONCAT(c.name SEPARATOR " / ") AS categories
//      FROM categories c
//      JOIN category_product cp ON c.id = cp.category_id
//      JOIN products p ON cp.product_id = p.id
//      GROUP BY c.id
//    ');
//
//    $query->execute();
//
//    $result =  $query->fetch();
//
//    return $result;
//}