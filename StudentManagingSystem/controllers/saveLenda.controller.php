<?php
session_start();

$user_data = check_login($app['database']);

if($user_data[0]->roli=="student"){
    header("Location: /PI_2022/index.php");
}
$last_visited;
if(isset($_COOKIE["Lastvisit"])){
    // var_dump($_COOKIE["Lastvisit"]);
    // die;
    $last_visited = $_COOKIE["Lastvisit"];
}

require 'views/saveLenda.view.php';

  
 $ID_lenda =  $_REQUEST['ID_lenda'];
 $emri = $_REQUEST['emri'];
 $kredi =  $_REQUEST['kredi'];
 $semestri = $_REQUEST['semestri'];

 $app['database']->insert("lendet",[
     "ID_lenda"=>$ID_lenda,
     "emri"=>$emri,
     "kredi"=>$kredi,
     "semestri"=>$semestri,
 ]);
  
 echo nl2br("\n ID e lendes: $ID_lenda\n Emri i lendes: $emri\n Kredite e lendes: "
         . "$kredi\n Semestri:  $semestri");

  
  ?>
