<?php

session_start();

if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
}

header("Location: /PI_2022/index.php");