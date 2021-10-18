<?php

require_once 'conn.php';
require_once 'checksignupfuncs.php';

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $passwordrpt = $_POST["pwdrpt"];

    if (EmptyInputSignup($name,$email,$gender,$username,$password,$passwordrpt) !== false){
        header("location: signup.php?error=CheckInputsAgain");
        exit();
    }

    if (InvalidEmail($email) !== false){
        header("location: signup.php?error=InvalidEmail");
        exit();
    }

    if (CheckPassword($password,$passwordrpt) !== false){
        header("location: signup.php?error=Passworddontmatch");
        exit();
    }

    if (UsernameExists($conn, $username, $email) !== false){
        header("location: signup.php?error=UsernameExists");
        exit();
    }

    CreateUser($conn, $name, $email, $gender, $username, $password);
}

else{
    header("location: signup.php");
}