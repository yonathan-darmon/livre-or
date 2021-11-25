<?php
session_start();
if (isset($_POST['deco'])) {
    header("location:../index.php");
    session_destroy();
}
$connect = mysqli_connect("localhost", "root", "", "livreor"); /*connexion a la base*/
$req= mysqli_query($connect,"SELECT commentaires FROM commentaires");
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
<table>
        <?php
        if (isset($_SESSION['login'])){
            echo "<a href='commentaires.php'>Ajoutez un commentaire</a>";
        }
        echo "<thead><tr>";
        foreach ($res[0] as $key => $value) {
            echo " <th>$key</th>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "</tbody>";

        foreach ($res as $key => $value) {
            echo "<tr>";
            foreach ($value as $value2) {

                echo "<td>$value2</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";

        ?>

    </table>
</main>
<footer>

</footer>
</body>
</html>
