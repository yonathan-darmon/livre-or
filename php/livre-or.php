<?php
session_start();
if (isset($_POST['deco'])) {
    header("location:../index.php");
    session_destroy();
}
$connect = mysqli_connect("localhost", "root", "", "livreor"); /*connexion a la base*/
$req = mysqli_query($connect, "SELECT comentaire.commentaires, login.utilisateurs FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur=utilisateurs.id");
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../asset/css/index.css">
    <link rel="stylesheet" href="../asset/css/header.css">
    <link rel="stylesheet" href="../asset/css/accueil.css">
    <title>Document</title>
</head>
<body>
<header>
    <?php require "header.php"; ?>
</header>
<main>
    <video autoplay muted loop id="myVideo">
        <source src="../asset/video/espace.mov" type="video/mp4">
    </video>
    <?php
    for ($i = 0; isset($res[$i]); $i++) {
        echo "<p class='comentaires[$i]'>$res[$i]['commentaire']</p>";
    }
    ?>
</main>
<footer>

</footer>
</body>
</html>
