<?php

require 'core/functions.php';

session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $user_email=$_POST['email'];
    $password = $_POST['password'];

    if(
        !empty($user_email) && 
        !empty($password) &&
        validatePassword1($password)
    )
    {
        $user_data = $app['database']->selectUserByEmail($user_email);
        // var_dump(hash("sha1",$password));
        // die;
        
        if($user_data[0]->password == hash("md5",$password)){ 
            $_SESSION['user_id'] = $user_data[0]->user_id;
            
            $present_time = date("H:i:s-m/d/y");
            $expiry = 30 * 24 * 60 * 60 + time();

            setcookie("Lastvisit",$present_time,$expiry);

            if($user_data[0]->roli=="student"){
                header("Location: /PI_2022/index.php/student");
            }else if($user_data[0]->roli=="profesor"){
                header("Location: /PI_2022/index.php/profesor");
            }
        }
            
        echo "Wrong email or password";
    }else{
        echo "Please enter some valid information";
    }
}

require 'Views/index.view.php';