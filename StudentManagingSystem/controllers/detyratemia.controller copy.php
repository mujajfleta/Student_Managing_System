<?php
session_start();

$user_data = check_login($app['database']);
$last_visited;
if(isset($_COOKIE["Lastvisit"])){
    // var_dump($_COOKIE["Lastvisit"]);
    // die;
    $last_visited = $_COOKIE["Lastvisit"];
}


require 'views/detyratemia.view.php';