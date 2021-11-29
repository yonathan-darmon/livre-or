<?php
session_start();
if (isset($_POST['deco'])) {
    header("location:../index.php");
    session_destroy();
}
require "function.php";
if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $req = mysqli_query(connectiondd(), "SELECT * FROM `utilisateurs`");
    $res = mysqli_fetch_all($req, MYSQLI_ASSOC);
    foreach ($res as $key => $value) { /*on parcours les donnée de la bdd*/
        if ($value['login'] != $login || $value['password'] != $mdp) {
            $error = 'Verifiez votre Login et Mot de passe';
        } elseif ($value['login'] == $login && $value['password'] == $mdp) {/* si le mot de passe et le login sont les memes*/
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $mdp;

            header("location:accueil.php");
            exit;
        }


    }
}

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
    <form action="#" method="post">
        <label for="login">Nom d'utilisateur</label>
        <input type="text" name="login">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp">
        <input type="submit" velue="Bienvenue" name="submit">
        <?php
        if (isset($error)) {
            echo $error;
        }

        ?>
        <a class="insc" href="inscription.php">Pas encore inscrit?</a>
    </form>
</main>
<footer>

</footer>
</body>
</html>
