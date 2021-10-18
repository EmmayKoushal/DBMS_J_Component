<?php

require_once 'conn.php';
require_once 'checksignupfuncs.php';

if (isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (EmptyInputLogin($username, $password) !== false){
        header("location: login.php?error=emptyinput");
        exit();
    }

    LoginUser($conn, $username, $password);

}


