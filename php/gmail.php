<?php
session_start();
include "./database/database.php";

// GMAIL LOG IN SYSTEM
    $gmail_chack = $_REQUEST ['gmail_chack'];
    $password_chack= $_REQUEST ['password_chack'];
    $name_chack = $_REQUEST['name_chack'];
    $error = [];



    if(empty($gmail_chack)){
        $error["gmail_error"]="Enter your gmail";
    }
    
    if(empty($password_chack)){
        $error["password_error"]="Enter your password";
    }

    if (empty($name_chack)){
        $error["name-error"] = "Enter your name";
    }

   


    if(count($error) > 0){
        $_SESSION['type_txt'] = $_REQUEST ;
        $_SESSION['back_error'] = $error;
        header("location: index.php");
    }else{

        $quary="INSERT INTO `password`( `email_address`, `user_name`, `password`) VALUES('$gmail_chack', '$name_chack', '$password_chack') ";
        $popup = mysqli_query($connect, $quary);

        if($popup){
            $_SESSION['pop'] =  "Your loging successful";
            header("location: allpass.php");
        }

    }




?>