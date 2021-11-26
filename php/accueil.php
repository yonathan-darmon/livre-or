<?php
session_start();
if (isset($_POST['deco'])) {
    header("location:../index.php");
    session_destroy();
}
$connect = mysqli_connect("localhost", "root", "", "livreor"); /*connexion a la base*/
$req = mysqli_query($connect, 'SELECT COUNT(*) AS "count" FROM commentaires');
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);
$randomizer = rand(1, $res[0]['count']);

$req2 = mysqli_query($connect, "SELECT commentaire, id_utilisateur AS 'id' FROM commentaires WHERE id='$randomizer'");
$res2 = mysqli_fetch_all($req2, MYSQLI_ASSOC);
$id = $res2[0]['id'];
$req3 = mysqli_query($connect, "SELECT login FROM utilisateurs WHERE id='$id'");
$res3 = mysqli_fetch_all($req3);


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
            <p class="text3">Ils nous ont laissé un message:</p>
            <table>
                <tr>
                    <td class="login"><?php echo '<u>' . $res3[0][0] . '</u>'; ?></td>
                </tr>
                <tr>
                    <td class="content"><?php echo $res2[0]['commentaire']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>
