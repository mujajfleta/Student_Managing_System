<?php
session_start();
include 'connect.php';

$user_data = check_login($app['database']);

if($user_data[0]->roli=="profesor"){
    header("Location: /PI_2022/index.php");
}
$last_visited;
if(isset($_COOKIE["Lastvisit"])){
    // var_dump($_COOKIE["Lastvisit"]);
    // die;
    $last_visited = $_COOKIE["Lastvisit"];
}

$emri = $_GET['emri'];

<<<<<<< HEAD
<<<<<<< HEAD
echo($emri);
=======
>>>>>>> c8501ab (d)
=======
>>>>>>> 354e6fd0ffc8a41b40bf4a29d2f2e26ec039561b
$sql = "SELECT titulli, pershkrimi, deadline FROM detyrat WHERE lenda='$emri'";

$result = $mysqli->query($sql);

while($res = mysqli_fetch_array($result))
{
    $titulli = $res['titulli'];
    $pershkrimi = $res['pershkrimi'];
    $deadline = $res['deadline'];
}
require 'views/DetyratNgaLenda.view.php';