<?php

function validatePassword($password,$password_confirm){
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

    if((!$uppercase || !$lowercase || !$number || strlen($password) < 8) && $password == $password_confirm) {
        return false;
    }

    return true;
}

function validatePassword1($password){
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);

    if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        return false;
    }

    return true;
}
function validateEmail($email,$email_confirm) {
    $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
    if(preg_match($regex, $email) && $email== $email_confirm ){
       return true;
    }else{
        return false;
    }
}