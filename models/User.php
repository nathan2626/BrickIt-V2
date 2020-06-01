<?php
function verifUseEmail () {

    $db = dbConnect();

    //verifier si l'email n'est pas déjà utilisé
    $query = $db->prepare('SELECT email FROM users WHERE email = ?');
    $query->execute([
        $_POST['email']
    ]);
    $emailExists = $query->fetch();

    return $emailExists;
}

function insertNewUser () {

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
    }
}