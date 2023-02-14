<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

function check_login($con){
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];

        $user = $con->selectUserById($id); 

        if($user){
        return $user;
        }
    }
    
    header("Location: /PI_2022/index.php");
}