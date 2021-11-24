<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "livreor"); /*connexion a la base*/


if (isset($_POST['submit'])) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['mdp'] = $_POST['password'];
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $insert = "INSERT INTO `utilisateurs`(login, password) VALUES('$login', '$mdp')";
    $req = mysqli_query($connect, $insert);
    header("location:connexion.php");

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF - 8">
    <meta name="viewport"
          content="width = device - width, user - scalable = no, initial - scale = 1.0, maximum - scale = 1.0, minimum - scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie = edge">
    <link rel="stylesheet" href=" ../asset/css/index.css">
    <link rel="stylesheet" href=" ../asset/css/header.css">
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
</main>
<form action="#" method="post">
    <label for="login"> Nom d'utilisateur</label>
    <input type="text" name="login">
    <label for="password">Mot de passe</label>
    <input type="password" name="password">
    <label for="confirm"> Confirmation du mot de passe</label>
    <input type="password" name="confirm">
    <input type="submit" value="inscription" name="submit" id="submit">
</form>
<footer>

</footer>
</body>
</html>
