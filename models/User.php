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
        $query = $db->prepare('INSERT INTO users (email, password, first_name, last_name) VALUES (?, ?, ?, ?)');
        $result = $query->execute(
            [
                $_POST['email'],
                hash('md5', $_POST['password']),
                $_POST['first_name'],
                $_POST['last_name'],
            ]
        );
        $_SESSION['user'] = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
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
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'email' => $user['email'],
            'is_admin' => $user['is_admin'],
        ];
    }

    return $user;
}