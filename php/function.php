<?php
function connectiondd()
{
    $connect = mysqli_connect("localhost:3306", "yoni", "Marseille,13", "yonathan-darmon_livreor"); /*connexion a la base*/
    return $connect;
}

connectiondd();
function requestall()
{
    $req = mysqli_query(connectiondd(), "SELECT* FROM utilisateurs");
    return $req;
}

function result()
{
    $res = mysqli_fetch_all(requestall(), MYSQLI_ASSOC);
    return $res;
}

result();
function isLoginInDatabase()
{
    foreach (result() as $key => $value) {
        if ($_POST['login'] === $value['login']) {
            return true;
        }
    }
    return false;
}
