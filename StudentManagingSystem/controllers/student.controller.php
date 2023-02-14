<?php
session_start();

$user_data = check_login($app['database']);
$last_visited;

if($user_data[0]->roli=="profesor"){
    header("Location: /PI_2022/index.php");
}

if(isset($_COOKIE["Lastvisit"])){
    // var_dump($_COOKIE["Lastvisit"]);
    // die;
    $last_visited = $_COOKIE["Lastvisit"];
}
require 'views/student.view.php';