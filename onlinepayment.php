<!DOCTYPE html>
<html lang="en">
<head>
    <title>patment</title>
    <style>
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
        .form{
            margin: 50px;
            border: black 2px solid;
            padding: 20px;
        }
        .debitcard{
            position: absolute;
            top: 30%;
            right: 5%;
            width: 450px;
            height: 370px;
        }
    </style>
</head>
<body>
<div class="navbar">
        <img src="pictures/logo.png" alt="img" class="logo">
        <h2 style="display: inline;position: absolute;top: 0%;left: 10%;font-size: 46px;font-family: 'leafs';color: #44bd32;">Fresh Market</h2>
    </div><br><br><br>
    <div class="form">
        <form action="done.html" method="POST">
            <label for="cardnumber" style="font-size: x-large;"><b>Card Number</b></label>
            <br><input type="text" id="cardnumber" name="cardnumber" placeholder="Enter Card Number"><br><br>

            <label for="cvv" style="font-size: x-large;"><b>cvv</b></label>
            <br><input type="password" id="cvv" name="cvv" placeholder="Enter cvv"><br><br>

            <label for="expirydate" style="font-size: x-large;"><b>ExpiryDate</b></label>
            <br><input type="text" id="expirydate" name="expirydate" placeholder="Enter Expiry date"><br><br>
            

            <label for="name" style="font-size: x-large;"><b>Name On Card</b></label>
            <br><input type="text" id="name" name="name" placeholder="Enter Name"><br><br>
            <img src="pictures/debitcard.png" alt="" class="debitcard">

            <button type="submit"  class="btn">Proceed</button>
        </form>
    </div>
    
</body>
</html>
