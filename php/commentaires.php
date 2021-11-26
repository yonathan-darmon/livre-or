<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "livreor"); /*connexion a la base*/
if (isset($_POST['deco'])) {
    header("location:../index.php");
    session_destroy();
}
$log=$_SESSION['login'];
$mdp=$_SESSION['password'];

$req2=mysqli_query($connect,"SELECT id FROM utilisateurs WHERE login='$log' AND password='$mdp'");
$res2=mysqli_fetch_all($req2,MYSQLI_ASSOC);
$id=$res2[0]['id'];

if (isset($_POST['send'])){
    $text=$_POST['textarea'];
    $req=mysqli_query($connect,"INSERT INTO commentaires(commentaire, date, id_utilisateur) VALUES ('$text',NOW(),'$id')");
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
    <textarea name="textarea"
              rows="5" cols="30"
              maxlength="255">Vous pouvez écrire ici.</textarea>
        <input type="submit" name="send" value="ajouter un commentaire">
    </form>
    <footer>

    </footer>
</body>
</html>
