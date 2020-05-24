<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/images/imageLogoTest.png"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <meta name="description" content=" <?= $pageDescription; ?>">
    <title> <?= $pageTitle; ?> </title></head>
<body>
<main class="mainCategories">

    <?php require ('partials/header.php'); ?>
    <?php require ('partials/nav.php'); ?>

    <?php require $view; ?>


</main>
<footer>
    <div class="innerFooter">
        <div class="contactFooter">
            <p><span>Tel :</span> 06 55 45 35 25</p>
            <p><span>Email :</span> BrickIt@brickIt.com</p>
            <p><span>Adresse :</span> 19 Rue Yves Toudic, Paris</p>
        </div>
        <div class="logoContainer">
            <img src="../../assets/images/imageLogoTest.png" alt="">
        </div>
        <div class="textFooter">
            <h1>Brick'It Group</h1>
            <a href=""><i class="fab fa-instagram fa-3x"></i></a>
            <a href="https://www.facebook.com/natan.journo"><i class="fab fa-facebook fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/nathan-journo/"><i class="fab fa-linkedin fa-3x"></i></a>
            <a href="https://github.com/nathan2626"><i class="fab fa-github fa-3x"></i></a>
        </div>
    </div>
    <p> Copyright 2019 JOURNO Nathan - Toute représentation interdite</p>
</footer>
<a href="#" class="toTop"><i class="fas fa-arrow-circle-up"></i></a>
<script src="../../assets/js/index.js"></script>
</body>
</html>