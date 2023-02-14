<?php
session_start();
include 'connect.php';

$user_data = check_login($app['database']);
$last_visited;
if(isset($_COOKIE["Lastvisit"])){
    // var_dump($_COOKIE["Lastvisit"]);
    // die;
    $last_visited = $_COOKIE["Lastvisit"];
}

if($user_data[0]->roli=="student"){
    header("Location: /PI_2022/index.php");
}

$id = $_GET['id'];
$sql = "SELECT emri, kredi, semestri FROM lendet WHERE ID_lenda=$id";
$result = $mysqli->query($sql);

while($res = mysqli_fetch_array($result))
{
    $emri = $res['emri'];
    $kredi = $res['kredi'];
    $semestri = $res['semestri'];
}
require 'views/modifikoLenden.view.php';


?>