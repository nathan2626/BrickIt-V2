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

function addUser($informations)
{
    $db = dbConnect();

    $query = $db->prepare("INSERT INTO users (first_name, last_name, email, password, is_admin) VALUES( :first_name, :last_name, :email, :password, :is_admin)");
    $result = $query->execute([
        'first_name' => $informations['first_name'],
        'last_name' => $informations['last_name'],
        'email' => $informations['email'],
        'password' => $informations['password'],
        'is_admin' => $informations['is_admin'],
    ]);

    if(!empty($_FILES['image']['tmp_name'])){
        $userId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png', 'JPG' , 'JPEG' , 'GIF', 'PNG' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $userId . '.' . $my_file_extension ;
            $destination = '../assets/images/user/' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE users SET image = '$new_file_name' WHERE id = $userId");
        }
    }

    return $result;
}