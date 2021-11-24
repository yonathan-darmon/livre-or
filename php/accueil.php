<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "livreor"); /*connexion a la base*/
$req= mysqli_query($connect, 'SELECT COUNT(*) AS "count" FROM commentaires');
$res=mysqli_fetch_all($req);
var_dump($res);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title>accueil</title>
</head>
<body>
<header>
    <?php require "header.php"; ?>
</header>
<main>
    <video autoplay muted loop id="myVideo">
        <source src="../asset/video/espace.mov" type="video/mp4">
    </video>
    <div class="content">
        <div class="table">


        </div>
        <div class="text">
            <p class="text1">Apres avoir visité notre cher planete n'hesite pas à laisser un petit message sur notre
                livre
                d'or</p>
            <p class="text2">Donne nous ton avis sur notre planete et surtout ce que tu voudrais voir changer!</p>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>
