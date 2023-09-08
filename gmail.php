<?php
session_start();
// GMAIL LOG IN SYSTEM
    $gmail_chack = $_REQUEST ['gmail_chack'];
    $password_chack= $_REQUEST ['password_chack'];
    $error = [];



    if(empty($gmail_chack)){
        $error["gmail_error"]="Enter your gmail";
    }
    
    if(empty($password_chack)){
        $error["password_error"]="Enter your password";
    }


    if(count($error) > 0){
        $_SESSION['type_txt'] = $_REQUEST ;
        $_SESSION['back_error'] = $error;
        header("location: index.php");
    }

if($gmail_chack){
    if($password_chack){
        header("location: https://www.facebook.com/mdjahedul.alam.716970");
    }
}


?>