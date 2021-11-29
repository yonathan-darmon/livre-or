<?php
session_start();
if (isset($_POST['deco'])) {
    header("location:../index.php");
    session_destroy();
}
require "function.php";
$req = mysqli_query(connectiondd(), 'SELECT commentaire FROM commentaires');
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);

shuffle($res);

foreach ($res as $key => $value) ;


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
    <link rel="stylesheet" href="../asset/css/accueil.css">
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
            <?php
            if (isset($_SESSION['login'])) {
                $log = $_SESSION['login'];
                echo "<p class='text0'> Bienvenue $log </p>";
            }

            ?>

            <p class="text1">Apres avoir visité notre chere planete n'hesite pas à laisser un petit message sur notre
                livre
                d'or</p>
            <p class="text2">Donne nous ton avis sur notre planete et surtout ce que tu voudrais voir changer!</p>
            <p class="text3">Voici les derniers messages:</p>
            <table>
                <tr>
                    <td class="content"><?php echo $value['commentaire']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>
