<body>
    <center>
<?php

include 'connect.php';
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

 
//  $connect = mysqli_connect("localhost", "root", "root", "projekti");
  
//  // Check connection
//  if($connect === false){
//      die("ERROR: Could not connect to the database. "
//          . mysqli_connect_error());
//  }
if($_SERVER['REQUEST_METHOD'] == "POST"){
 $titulli = $_REQUEST['titulli'];
 $pershkrimi =  $_REQUEST['pershkrimi'];
 $deadline = $_REQUEST['deadline'];
 $lenda = $_REQUEST['lenda'];
  
 $app['database']->insert("detyrat",[
            "titulli"=> $titulli,
            "pershkrimi"=>$pershkrimi,
            "deadline"=> $deadline,
            "lenda"=> $lenda,
        ]);
}

 $data= $app['database']->selectIDDetyra("detyrat");
// $sql = "SELECT ID_detyra FROM detyrat";
// $result = $mysqli->query($sql);
// if ($result->num_rows > 0) {
// // output data of each row
// while() {
//   $ID_detyra = $row['ID_detyra'] + 1;
// }
// }
// else{
//   $ID_detyra = 1;
// }

require 'views/addDetyra.view.php';
 ?>

</center>
 <body>