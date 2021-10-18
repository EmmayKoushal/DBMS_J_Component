<?php

include_once 'conn.php';

function EmptyInputSignup($name, $email, $gender, $username, $password , $passwordrpt){
    $result;
    if (empty($name) || empty($email) || empty($gender) || empty($username) || empty($password) || empty($passwordrpt)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function InvalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function CheckPassword($password, $passwordrpt){
    $result;
    if ($password == $passwordrpt){
        $result = false;
    }
    else{
        $result = true;
    }

    return $result;
}

function UsernameExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
    
}

function CreateUser($conn, $name, $email, $gender, $username, $password){
    $sql = "INSERT INTO users VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: signup.php?error=stmtfailed");
        exit();
    }

    // $Hashedpwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $gender, $username, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: signup.php?error=none");

}



function EmptyInputLogin($username, $password){
    $result;
    if (empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
    exit();
}

function LoginUser($conn, $username, $password){
    $usernameExists = UsernameExists($conn, $username, $username);

    if ($usernameExists === false){
        header("location: login.php?error=usernamedoesntexist");
        exit();
    }

    // $query = "SELECT * FROM users WHERE username='$username;";
    // $stmt = mysqli_stmt_init($conn);

    // if (mysqli_stmt_prepare($stmt, $query)){
    //     mysqli_stmt_bind_param($stmt, "s", $password);
    //     mysqli_stmt_execute($stmt);

    //     $result = mysqli_stmt_get_result($stmt);
    //     $row = mysqli_fecth_assoc($result);
    //     if ($row["password"] === $password){
    //         header("location: store.php");
    //         exit();
    //     }
    //     else{
    //         header("location: login.php?error=wrongpassword");
    //         exit();
    //     }
    // }
    
    $query = "SELECT count('$password') AS No_of_users FROM users WHERE username='$username';";
    $result = mysqli_query($conn, $query);
    $row1 = mysqli_fetch_assoc($result);
    
    $sql = "SELECT password FROM users WHERE username='$username';";
    $result = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_assoc($result);
    if ($row1['No_of_users'] == 1 && $row2['password'] == $password){
        header("location: store.php");
        exit();
    }
    else{
        header("location: login.php?error=wrongpassword");
        exit();
    }



    // $row = mysqli_fecth_assoc($result);
    // if ($password === $row["password"]){
    //     header("location: store.php");
    //     exit();
    // }

    // else{
    //     echo "not logging in";
    // }
    
    // $pwdhashed = $usernameExists["password"];
    // $check = password_verify($password, $pwdhashed);

    // if ($check === false){
    //     header("location: login.php?error=wrongpassword");
    //     exit();
    // }

    // else if ($check === true){
    //     session_start();
    //     $_SESSION["username"] = $usernameExists["username"]; 
    //     header("location: store.php");
    //     exit();
    // }
}