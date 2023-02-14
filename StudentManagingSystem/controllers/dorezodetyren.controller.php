<?php
session_start();
include 'connect.php';
$user_data = check_login($app['database']);
$emri_studentit = $user_data[0]->emri;
if($user_data[0]->roli=="profesor"){
    header("Location: /PI_2022/index.php");
}
$last_visited;
if(isset($_COOKIE["Lastvisit"])){
    // var_dump($_COOKIE["Lastvisit"]);
    // die;
    $last_visited = $_COOKIE["Lastvisit"];
}


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $lenda= $_REQUEST['lenda'];
    $titulli= $_REQUEST['titulli'];
    $semestri= $_REQUEST['semestri'];
    $detajet= $_REQUEST['detajet'];
     $data_dorezimit = $_REQUEST['data_dorezimit'];
     $foto=$_REQUEST['foto'];

 $app['database']->insert("detyrat_e_dorezuara",[
            "emri_studentit"=> $emri_studentit,
            "titulli"=> $titulli,
            "lenda"=> $lenda,
            "semestri"=> $semestri,
            "detajet"=> $detajet,
            "data_dorezimit"=>$data_dorezimit,
            "foto"=>$foto,
        ]);
}
  //$row = $query->fetch(PDO::FETCH_BOTH)
    $all_lendet=$app['database']->selectAll("lendet");
    $all_detyrat = $app['database']->selectAll("detyrat");
        
    
require 'views/dorezodetyren.view.php';