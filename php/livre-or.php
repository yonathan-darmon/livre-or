<?php
session_start();
if (isset($_POST['deco'])) {
    header("location:../index.php");
    session_destroy();
}
$connect = mysqli_connect("localhost", "root", "", "livreor"); /*connexion a la base*/
$req = mysqli_query($connect, "SELECT commentaires.commentaire,commentaires.date, utilisateurs.login FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur=utilisateurs.id");
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
    <link rel="stylesheet" href="../asset/css/livreor.css">
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
    echo "<div class='commentaires'>";
    for ($i = 0; isset($res[$i]); $i++) {
         $date=strtotime($res[$i]['date']);
         $login=$res[$i]['login'];
         $commentaires=$res[$i]['commentaire'];
         echo '<p>Posté le '. date("d/m/Y", $date) .' par '. $login;
         echo "<br/>$commentaires</p>";
    }
    echo "</div>";
    if (isset($_SESSION['login'])){
        echo "<a href='commentaires.php'>Vous souhaitez poser votre marque?</a>";
    }
    ?>
</main>
<footer>

</footer>
</body>
</html>
