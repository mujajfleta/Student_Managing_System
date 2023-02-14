<?php
session_start();

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

$tasks=$app['database']->selectAssigmentsByVleresimi("detyrat_e_dorezuara");

require 'views/vleresimetProfesor.view.php';