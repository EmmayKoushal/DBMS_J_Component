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
        }
        .logo{
            width: 95px;
            height: 100px;
            margin: 20px;
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
        .container{
            border: 2px solid black;
            width: fit-content;
            padding: 30px 150px;
            padding-left: 100px;
            margin: 0px 350px 40px 120px;
            border-radius: 20px;
        }
        .signuppic{
            width: 100px;
            height: 100px;
            margin-left: 170px;
        }
        .entry{
            padding: 10px 0px;
            margin: 10px 0px;
            border: 2px solid black;
            border-radius: 10px;
            width: 450px;
        }
        .btn{
            background-color: #44bd32;
            text-align: center;
            padding: 10px 100px;
            margin-left: 80px;
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
    </style>
</head>
<body>
    <div class="navbar">
        <img src="pictures/logo.png" alt="" class="logo">
        <h2 style="display: inline;position: absolute;top: 20px;left: 10%;font-size: 48px;font-family: 'leafs';color: #44bd32;">Fresh Market</h2>
        <ul class="navs">
            <li><a href="about.html" target="_self">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="feedback.html">Feedback</a></li>
            <li><a href="login.php" style="background-color: #44bd32;color: white;padding: 11px;font-weight: lighter;">SignUp/Login</a></li>
        </ul>
    </div>
    <img src="pictures/pic1.png" alt="" style="position: absolute;top: 25%;right: 0%;">
    <div class="container">
        <h2 style="text-align: center;">Welcome to sign Up page</h2><br>
        <img src="pictures/loginpic.png" alt="" class="signuppic">
        <form action="checksignup.php" method="POST">

            <label for="name" style="font-size: x-large;"><b>Name</b></label><br><br>
            <input type="text" name="name" id="name" placeholder="Enter Your Name..." class="entry"><br><br>

            <label for="email" style="font-size: x-large;"><b>Email</b></label><br><br>
            <input type="email" name="email" id="email" placeholder="Enter Your email..." class="entry"><br><br>

            <label for="gender" style="font-size: x-large;"><b>Gender</b></label><br><br>
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender..." class="entry"><br><br>

            <label for="username" style="font-size: x-large;"><b>Username</b></label><br><br>
            <input type="text" name="username" id="username" placeholder="Enter username..." class="entry"><br><br>

            <label for="pwd" style="font-size: x-large;"><b>Password</b></label><br><br>
            <input type="password" name="pwd" id="pwd" placeholder="Enter password" class="entry"><br><br>

            <label for="pwdrpt" style="font-size: x-large;"></b><b>Confirm Password</b></label><br><br>
            <input type="password" name="pwdrpt" id="pwdrpt" placeholder="Enter password again" class="entry"><br><br>
            <button type="submit" name="submit" class="btn"><b>Sign Up</b></button>
        </form>
        <br><br>
        <?php
        
            if (isset($_GET["error"])){
                if ($_GET["error"] == "CheckInputsAgain"){
                    echo "<p style='color:blue;font-size:large;'>Please Fill all the Fields!</p>";
                }

                else if ($_GET["error"] == "InvalidEmail"){
                    echo "<p style='color:blue;font-size:large;'>Please Fill Valid Email!</p>";
                }

                else if ($_GET["error"] == "Passworddontmatch"){
                    echo "<p style='color:blue;font-size:large;'>Password don't match!</p>";
                }

                else if ($_GET["error"] == "UsernameExists"){
                    echo "<p style='color:blue;font-size:large;'>Username or Email already taken!</p>";
                }

                else if ($_GET["error"] == "stmtfailed"){
                    echo "<p style='color:blue;font-size:large;'>Something went wrong, try again!</p>";
                }

                else if ($_GET["error"] == "none"){
                    echo "<p style='color:blue;font-size:large;'>You have signed Up!</p>";
                }

            }
        ?>

    </div>
    
</body>
</html>