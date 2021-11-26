<?php
session_start();
if (isset($_POST['deco'])) {
    header("location:../index.php");
    session_destroy();
}
require "function.php";
if (isset($_POST['submit']) && $_POST['password'] == $_POST['confirm']) {
    if (isLoginInDatabase() === true) {
        $error = '<h3 class="error"> Utilisateur existant</h3>';
    } elseif (empty($_POST['login'] || empty($_POST['password']) || empty($_POST['confirm']))) {
        $empty = '<h3>Veuillez remplir tout les champs</h3>';
    } else {
        $login = $_POST['login'];
        $mdp = $_POST['password'];
        $insert = "INSERT INTO `utilisateurs`(login, password) VALUES('$login', '$mdp')";
        $req = mysqli_query(connectiondd(), $insert);
        header("location:connexion.php");
    }

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
    <?php
    if (isset($_POST['submit']) && $_POST['password'] != $_POST['confirm']) {
        echo '<h3>mot de passe errone</h3>';
    }
    if (isset($error)) {
        echo $error;
    }
    if (isset($empty)) {
        echo $empty;
    }

    ?>
</form>
<footer>

</footer>
</body>
</html>
