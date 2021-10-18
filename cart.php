<?php

require_once 'conn.php';

if (isset($_POST["submit"])){
    $tamato = $_POST["tamato"];
    $onion = $_POST["onion"];
    $carrot = $_POST["carrot"];
    $beetroot = $_POST["beetroot"];
    $potato = $_POST["potato"];
    $radish = $_POST["radish"];
    $ladiesfinger = $_POST["ladiesfinger"];
    $drumstick = $_POST["drumstick"];
    $cabbage = $_POST["cabbage"];
    $spinach = $_POST["spinach"];
    $coriander = $_POST["coriander"];
    $curryleaves = $_POST["curryleaves"];

    $TotalBill = (35*$tamato + 70*$onion + 40*$carrot + 38*$beetroot + 50*$potato + 34*$radish + 30*$ladiesfinger + 50*$drumstick + 20*$cabbage + 10*$spinach + 8*$coriander + 5*$curryleaves);

}
?>

<head>
    <title>Cart</title>
    <style>
        .entry{
            padding: 10px 0px;
            margin: 10px 0px;
            border: 2px solid black;
            border-radius: 10px;
            width: 450px;
        }
        .bill{
            font-size: x-large;
            margin: 45%;
        }
        .doneshopping{
            float: right;
            margin: 150px;
            width: 400px;
            height: 300px;
            margin-right: 250px
        }
        .Form{
            margin-left: 150px;
            margin-top: 50px;
            
        }
        .btn{
            margin-left: 42%;
            margin-top: 50px;
            padding: 10px;
            font-size: large;
            background-color: #44bd32;
            border: black 2px solid;
            border-radius: 15px;
            transition: 0.5s;

        }
        .btn:hover{
            background-color: #273c75;
            color: white;
        }
        .navbar{
            width: 100%;
            height: fit-content;
        }
        .logo{
            margin: 25px;
        }
    </style>
</head>

    <div class="navbar">
        <img src="pictures/logo.png" alt="img" class="logo">
        <h2 style="display: inline;position: absolute;top: 0%;left: 10%;font-size: 48px;font-family: 'leafs';color: #44bd32;">Fresh Market</h2>
    </div>
    <div>
        <h2 style="margin-left: 44%;">Total Bill is </h2>
        <span class="bill"><?php echo "Rs:". $TotalBill?></span><br><br>
        <img src="pictures/shoppingdone.png" alt="no" class="doneshopping">
    </div>

    <div class="Form">
        <form action="payment.php" method = "POST">

        <label for="customer_name" style="font-size: x-large;"><b>Name</b></label><br><br>
        <input type="text" name="customer_name" id="customer_name" placeholder="Enter  Name..." class="entry"><br><br>

        <label for="customer_phone" style="font-size: x-large;"><b>Phone</b></label><br><br>
        <input type="text" name="customer_phone" id="customer_phone" placeholder="Enter  phone..." class="entry"><br><br>

        <label for="customer_address" style="font-size: x-large;"><b>Address</b></label><br><br>
        <input type="text" name="customer_address" id="customer_address" placeholder="Enter  address..." class="entry"><br><br>

        <label for="customer_email" style="font-size: x-large;"><b>email</b></label><br><br>
        <input type="email" name="customer_email" id="customer_email" placeholder="Enter  email.." class="entry"><br><br>

        <h2>paymode</h2> 
        <input type="radio" name="paymode" id="paymode" value="cashondelivery">
        <label for="cashondelivery" style="font-size: x-large;"><b>Cash On Delivery</b></label><br><br>
        
        <input type="radio" name="paymode" id="paymode" value="onlinepayment">
        <label for="onlinepayment" style="font-size: x-large;"><b>Online payment</b></label><br><br>

        <button type="submit" name="submit" class="btn">PROCEED</button> 

        </form>
    </div>


}