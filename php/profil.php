<?php
session_start();
if (isset($_POST['deco'])) {
    header("location:../index.php");
    session_destroy();
}
if (isset($_SESSION['login'])) {
    $id = $_SESSION['login'];
}
require "function.php";
$result = result();

for ($i = 0; isset($result[$i]); $i++) {
    if ($result[$i]['login'] == $_SESSION['login']) {
        $log = $_SESSION['login'];
        $pass = $result[$i]['password'];
    }

}
if (isset($_POST['submit']) && $_POST['password'] == $_POST['confirm']) {

    if (!isset($_POST['login']) && !isset($_POST['password']) && !isset($_POST['confirm'])) {
        $empty = '<h3>Veuillez remplir tout les champs</h3>';
        exit;

    } elseif (isLoginInDatabase() == true) {
        $exist = "Utilisateur existant";

    } else {
        $login = $_POST['login'];
        $mdp = $_POST['password'];
        $update = "UPDATE `utilisateurs` SET `login`='$login',`password`='$mdp' WHERE login='$id'";
        $req = mysqli_query(connectiondd(), $update);
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        header("refresh:0");
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
        <label for="login"> Nom d'utilisateur</label>
        <input type="text" name="login" value="<?php echo $log; ?>">
        <label for="password">Mot de passe</label>
        <input type="text" name="password" value="<?php echo $pass; ?>">
        <label for="confirm"> Confirmation du mot de passe</label>
        <input type="password" name="confirm">
        <input type="submit" value="modification" name="submit" id="submit">
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
        if (isset($exist)) {
            echo $exist;
        }

        ?>
    </form>
</main>
<footer>

</footer>
</body>
</html>
