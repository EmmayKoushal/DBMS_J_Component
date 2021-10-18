<?php

require_once 'conn.php';

if (isset($_POST["submit"])){
    $customer_name = $_POST["customer_name"];
    $customer_phone = $_POST["customer_phone"];
    $customer_address = $_POST["customer_address"];
    $customer_email = $_POST["customer_email"];
    $pay_mode = $_POST["paymode"];
    

    $sql = "INSERT INTO customers VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: cart.php");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "sssss", $customer_name, $customer_phone, $customer_address, $customer_email, $pay_mode);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($pay_mode === "onlinepayment"){
        header("location: onlinepayment.php");
    }
    else{
        header("location: done.html");
    }

}