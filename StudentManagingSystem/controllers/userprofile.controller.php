<?php
require 'core/functions.php';

session_start();

$user_data = check_login($app['database']);
$last_visited;
if(isset($_COOKIE["Lastvisit"])){
    // var_dump($_COOKIE["Lastvisit"]);
    // die;
    $last_visited = $_COOKIE["Lastvisit"];
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['password_confirm'];
    $confirm_password_new=$_POST['password_confirm_new'];
    $user_id=$user_data[0]->user_id;
    $old_password=$app['database']-> getUsersPassword($user_id);
    // var_dump($old_password[0]['password']);
    // die;
    
    if(
        !empty($username) &&
        !empty($password) &&
        !empty($confirm_password) &&
        !empty($user_id) &&
        validatePassword($confirm_password,$confirm_password_new) 
     )
    {
        if(hash("md5",$password)== $old_password[0]['password']){
        
        $app['database']->updateUserProfile($user_id, $username,hash("md5",$confirm_password));
        $user_data[0]->roli=="student"? header("Location: /PI_2022/index.php/student"):header("Location: /PI_2022/index.php/profesor") ;
        }
        else{
            echo "Your old password doesn't match";
        }
    }else{
        echo "Please enter some valid information!";
    }
}

require 'views/userprofile.view.php';