<?php
function verifUseEmail ()
{

    $db = dbConnect();

    //verifier si l'email n'est pas déjà utilisé
    $query = $db->prepare('SELECT email FROM users WHERE email = ?');
    $query->execute([
        $_POST['email']
    ]);
    $emailExists = $query->fetch();

    return $emailExists;
}

function insertNewUser ()
{

    $db = dbConnect();

    //si $emailExists == false, on autorise l'insertion du nouvel utilisateur
    $emailExists = verifUseEmail();

    if(!$emailExists){
        $query = $db->prepare('INSERT INTO users (email, password, first_name, last_name, adress) VALUES (?, ?, ?, ?, ?)');
        $result = $query->execute(
            [
                $_POST['email'],
                hash('md5', $_POST['password']),
                $_POST['first_name'],
                $_POST['last_name'],
                $_POST['adress'],
            ]
        );
        $_SESSION['user'] = [
            'id' => $db->lastInsertId(),
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'adress' => $_POST['adress'],
            'is_admin' => 0,
        ];

        return $result;
    }
    else {

        return false;
    }
}

function getUserSignIn ()
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
    $query->execute([
        'password' => md5($_POST['password']),
        'email' => $_POST['email'],
    ]);
    $user = $query->fetch();

    //si couple email/md5(password) trouvé, connecter l'utilisateur
    if($user != false){
        $_SESSION['user'] = [
            'id' => $user['id'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'email' => $user['email'],
            'adress' => $user['adress'],
            'is_admin' => $user['is_admin'],
        ];
    }
    return $user;
}


function getAllUsers()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM users');
    $products = $query->fetchAll();

    return $products;
}

function getUser($id)
{
    $db = dbConnect();

    $query = $db->prepare("SELECT * FROM users WHERE id = ?");
    $query->execute([
        $id
    ]);

    $result = $query->fetch();

    return $result;
}


function updateUser($userId, $informations)
{
    $db = dbConnect();

    if($_SESSION['id'] != $informations['id']){
        return false;
    } else {
        $query = $db->prepare("UPDATE users SET first_name = ?, last_name = ?, email = ?, adress = ? WHERE id = ?");
        $result = $query->execute([
            $informations['first_name'],
            $informations['last_name'],
            $informations['email'],
            $informations['adress'],
            $userId
        ]);
    }

    return $result;
}