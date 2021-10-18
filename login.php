<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fresh Market</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        @font-face {
            font-family: 'leafs';
            src: url('fonts/leafs-Regular.otf');
        }
        @font-face {
            font-family: 'Keyzha';
            src: url('fonts/KEYZHA\ 400.otf');
        }
        @font-face {
            font-family: 'Blank Note';
            src: url('fonts/BlankNote-Regular.otf');
        }
        @font-face {
            font-family: 'South Australia';
            src: url('fonts/SouthAustralia-Regular.otf');
        }
        @font-face {
            font-family: 'Warton';
            src: url('fonts/Warton-Regular.otf');
        }
        @font-face {
            font-family: 'Camellio';
            src: url('fonts/Camellio-Regular.otf');
        }
        @font-face {
            font-family: 'Rosseville';
            src: url('fonts/Rosseville-Regular.otf');
        }
        .navbar{
            width: 100%;
            height: fit-content;
            margin-top: 5px;
        }
        .logo{
            width: 95px;
            height: 100px;
            margin: 20px;
            margin-top: 20px;
        }
        .navs{
            float: right;
            list-style-type: none;
            margin: 50px 0px;
        }
        .navs li{
            display: inline;
            padding: 10px;
            margin: 10px;
        }
        .navs li a{
            text-decoration: none;
            color: black;
            border: 2px solid black;
            padding: 10px;
            border-radius: 25px;
            transition: 0.5s;
            font-size: large;
            font-family: 'Girassol', cursive;
            font-weight: bold;
        }
        .navs li a:hover{
            background-color: #273c75;
            color: white;
        }
        .pic{
           position: absolute;
           top: 10%;
           right: 2%;
        }
        .container{
            background-color: transparent;
            padding: 100px;
            padding-top: 15px;
            margin: 40px 300px auto;
            width: fit-content;
            border: 2px solid black;
            border-radius: 20px;
        }
        .btn{
            background-color: #44bd32;
            text-align: center;
            padding: 10px 100px;
            margin-left: 0px;
            border: 1px solid black;
            font-size: x-large;
            border-radius: 20px;
            transition: 0.5s;
        }
        .btn:hover{
            background-color: #273c75;
            color: white;
            border-radius: 20px;
        }
        #username{
            padding: 10px 0px;
            margin: 10px 0px;
            border: 2px solid black;
            border-radius: 10px;
            width: 250px;

        }
        #password{
            padding: 10px 0px;
            margin: 10px 0px;
            border: 2px solid black;
            border-radius: 10px;
            width: 250px;

        }
        .loginpic{
            width: 100px;
            height: 100px;
            margin-left: 80px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="pictures/logo.png" alt="" class="logo">
        <h3 style="display: inline;position: absolute;top: 20px;font-size: 48px;font-family: 'leafs';color: #44bd32;">Fresh Market</h3>
        <ul class="navs">
            <li><a href="about.html" target="_self">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="feedback.html">Feedback</a></li>
            <li><a href="login.php" style="background-color: #44bd32;color: white;padding: 11px;font-weight: lighter;">SignUp/Login</a></li>
        </ul>
    </div>
    <img src="pictures/pic1.png" alt="" class="pic">
    <div class="container">
        <h2 style="text-align: left;">Welcome to Login</h2><br>
        <img src="pictures/loginpic.png" alt="" class="loginpic">

        <form action="checklogin.php" method="POST">
            <label for="username" style="font-size: x-large;"><b>UserName</b></label>
            <br><input type="text" id="username" name="username" placeholder="Enter username"><br>
            <label for="password" style="font-size: x-large;"><b>Password</b></label>
            <br><input type="password" id="password" name="password" placeholder="Enter password"><br><br>
            <button type="submit" name="submit" class="btn">Login</button>
        </form>
        
        <br>
        <p style="font-size:large;">Don't have an account <a href="signup.php" style="text-decoration: none;color: blue;">Create one!</a></p>
        <br>   
    <?php
        if (isset($_GET["error"])){
            if ($_GET["error"] == "usernamedoesntexist"){
                echo "<p style='color:red;font-size:large;'>Username Doesn't Exists!</p>";
            }

            else if ($_GET["error"] == "wrongpassword"){
                echo "<p style='color:red;font-size:large;'>Please Enter the correct password!</p>";
            }
            else if ($_GET["error"] == "emptyinput"){
                echo "<p style='color:red;font-size:large;'>Please Fill all the details!</p>";
            }
        }
    ?>
    
    </div>
   </body>
</html>