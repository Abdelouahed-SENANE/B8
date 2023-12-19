<?php
function validateEmail($email){
    $regex = "^[\w-.]+@([\w-]+.)+[\w-]{2,4}$";
    if(preg_match($regex,$email)){
        return true ;
    }
    else{
        return false;
    }
}
function validatePw($pw){
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    if(preg_match($regex,$pw)){
        return true ;
    }
    else{
        return false;
    }
}
function validateName($name){
    $regex = "^[a-zA-Z]$";
    if(preg_match($regex,$name)){
        return true ;
    }
    else{
        return false;
    }
}
function validateUsername($username){
    $regex = '/[a-zA-Z0-9]/';
    if(preg_match($regex,$username)){
        return true ;
    }
    else{
        return false;
    }
}
?>