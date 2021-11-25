<?php
function connectiondd()
{
    $connect = mysqli_connect("localhost", "root", "", "livreor"); /*connexion a la base*/
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

foreach (result() as $key => $value) ;
