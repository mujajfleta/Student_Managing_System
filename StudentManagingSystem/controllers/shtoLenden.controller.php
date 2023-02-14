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

$sql = "SELECT ID_lenda, emri, kredi, semestri FROM lendet";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  $ID_lenda = $row['ID_lenda'] + 1;
}
}
else{
  $ID_lenda = 1;
}

require 'views/shtoLenden.view.php';

  ?>
