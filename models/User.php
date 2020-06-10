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
        $query = $db->prepare('INSERT INTO users (email, password, first_name, last_name, image) VALUES (?, ?, ?, ?, ?)');
        $result = $query->execute(
            [
                $_POST['email'],
                hash('md5', $_POST['password']),
                $_POST['first_name'],
                $_POST['last_name'],
                $_POST['image'],
            ]
        );
        $_SESSION['user'] = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'image' => $_POST['image'],
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
            'image' => $_POST['image'],
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

    $query = $db->prepare("UPDATE users SET first_name = ?, last_name = ?, email = ?, password = ? WHERE id = ?");
    $result = $query->execute([
        $informations['first_name'],
        $informations['last_name'],
        $informations['email'],
        $informations['password'],
        $userId
    ]);

    if (!empty($_FILES['image']['tmp_name'])) {
        $allowed_extensions = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG');
        $my_file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        if (in_array($my_file_extension, $allowed_extensions)) {

            //ici virer l'ancien fichier
            $user = getUser($userId);
            if ($user['image'] != null) {
                unlink("../assets/images/user/" . $user['image']);
            }

            $new_file_name = $userId . '.' . $my_file_extension;
            $destination = '../assets/images/user/' . $new_file_name;
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE users SET image = '$new_file_name' WHERE id = $userId");
        }
    }

    return $result;
}