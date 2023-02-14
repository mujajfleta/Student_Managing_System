<?php
require 'core/functions.php';

session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_first_name=$_POST['first_name'];
    $user_last_name=$_POST['last_name'];
    $user_email=$_POST['email'];
    $user_email_confirm=$_POST['konfirmo_email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['password_confirm'];
    $user_role=$_POST['roli'];
    $user_profesor_id=$_POST['id'];
    $user_student_index=$_POST['index'];
    $user_id="";
   
    if($user_role=="student"){
        $user_id = $user_student_index;
    }else{
        $user_id= $user_profesor_id;
    }
    
    if(
        !empty($user_first_name) && 
        !empty($user_last_name) && 
        !empty($username) &&
        !empty($password) &&
        !empty($user_email) &&
        !empty($user_id) &&
        validatePassword($password,$confirm_password) &&
        validateEmail($user_email,$user_email_confirm)
     )
    {
        $hashed_password = hash("md5",$password);

        $app['database']->insert("perdoruesi",[
            "user_id"=>$user_id,
            "emri"=>$user_first_name,
            "mbiemri"=>$user_last_name,
            "email"=>$user_email,
            "username"=>$username,
            "password"=>$hashed_password,
            "roli"=>$user_role,
        ]);
        header("Location: /PI_2022/index.php");
    }else{
        echo "Please enter some valid information!";
    }
}

require 'views/register.view.php';