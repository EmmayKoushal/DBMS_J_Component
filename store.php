<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            margin: 5px;
            padding: auto;
            background-color: white;
        }
        /* .pic{
            float: left;
            padding: 5px;
        } */

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
    </style>
    <title>Fresh Market</title>
</head>
<body>
    <div class="navbar">
        <img src="pictures/logo.png" alt="img" class="logo">
        <h2 style="display: inline;position: absolute;top: 4%;left: 10%;font-size: 48px;font-family: 'leafs';color: #44bd32;">Fresh Market</h2>
    </div>

    <div>
    <form action="cart.php" method="POST">
        
        <div style="float: left;margin-right: 100px;margin-bottom: 10px;">
            <img src="pictures/tamato.jfif" alt="" class="pic">
            <br>
            <p>Fresh and Clean Tamatoes</p>
            
            <label for="tamato" style="font-size: large;"><b>Rs30/Kg</b></label><br><br>
            <input type="number" name="tamato" id="tamato" value="0" class="entry"><br>
        </div>
        

        <div style="float: left;margin-right: 100px;margin-bottom: 0px;">
            <img src="pictures/onion1.jfif" alt="" class="pic">
            <br>
            <p>Fresh Onions</p>
            
            <label for="onion" style="font-size: large;"><b>Rs70/Kg</b></label><br><br>
            <input type="number" name="onion" id="onion" value="0" class="entry"><br>
        </div>
        
        <div style="float: left;margin-right: 100px;margin-bottom: 10px;">
            <img src="pictures/carrot.jfif" alt="" class="pic">
            <br>
            <p>Tasty Carrots</p>
            
            <label for="carrot" style="font-size: large;"><b>Rs40/Kg</b></label><br><br>
            <input type="number" name="carrot" id="carrot" value="0" class="entry"><br>
        </div>
        
        <div style="float: left;margin-right: 10px;margin-bottom: 10px;">
            <img src="pictures/beetroot.jfif" alt="" class="pic">
            <br>
            <p>Reddish Beetroots</p>
            
            <label for="beetroot" style="font-size: large;"><b>Rs38/Kg</b></label><br><br>
            <input type="number" name="beetroot" id="beetroot" value="0" class="entry"><br>
        </div>

        <div style="float: left;margin-right: 100px;margin-bottom: 10px;margin-left: 0px;padding-left: 0px;">
            <img src="pictures/potato.jfif" alt="" class="pic">
            <br>
            <p>Chips Potato</p>
            
            <label for="potato" style="font-size: large;"><b>Rs50/Kg</b></label><br><br>
            <input type="number" name="potato" id="potato" value="0" class="entry"><br>
        </div>

        <div style="float: left;margin-right: 100px;margin-bottom: 10px;margin-left: 0px;padding-left: 0px;">
            <img src="pictures/radish.jfif" alt="" class="pic">
            <br>
            <p>Fresh Radish</p>
            
            <label for="radish" style="font-size: large;"><b>Rs34/Kg</b></label><br><br>
            <input type="number" name="radish" id="radish" value="0" class="entry"><br>
        </div>

        <div style="float: left;margin-right: 100px;margin-bottom: 10px;margin-left: 0px;padding-left: 0px;padding-top: 10px;">
            <img src="pictures/ladiesfinger1.jfif" alt="" class="pic">
            <br>
            <p>Greeny Ladiesfingers</p>
            
            <label for="ladiesfinger" style="font-size: large;"><b>Rs30/Kg</b></label><br><br>
            <input type="number" name="ladiesfinger" id="ladiesfinger" value="0" class="entry"><br>
        </div>

        <div style="float: left;margin-right: 100px;margin-bottom: 10px;margin-left: 0px;padding-left: 0px;padding-top: 10px;">
            <img src="pictures/drumsticks.jfif" alt="" class="pic">
            <br>
            <p>Long Drumsticks</p>
            
            <label for="drumstick" style="font-size: large;"><b>Rs50/Kg</b></label><br><br>
            <input type="number" name="drumstick" id="drumstick" value="0" class="entry"><br>
        </div>

        <div style="float: left;margin-right: 100px;margin-bottom: 10px;margin-left: 0px;padding-left: 0px;padding-top: 15px;">
            <img src="pictures/cabbage.jfif" alt="" class="pic">
            <br>
            <p>Tasty Cabbage</p>
            
            <label for="cabbage" style="font-size: large;"><b>Rs20/Kg</b></label><br><br>
            <input type="number" name="cabbage" id="cabbage" value="0" class="entry"><br>
        </div>
        <div style="float: left;margin-right: 100px;margin-bottom: 10px;margin-left: 0px;padding-left: 0px;">
            <img src="pictures/spinach.jfif" alt="" class="pic">
            <br>
            <p>Greeny leaf vegetable</p>
            
            <label for="spinach" style="font-size: large;"><b>Rs10 Each</b></label><br><br>
            <input type="number" name="spinach" id="spinach" value="0" class="entry"><br>
        </div>

        <div style="float: left;margin-right: 100px;margin-bottom: 10px;margin-left: 0px;padding-top: 0px;margin-top: 0px">
            <img src="pictures/coriander1.jfif" alt="" class="pic">
            <br>
            <p>Fresh Coriander</p>
            
            <label for="coriander" style="font-size: large;"><b>Rs8 Each</b></label><br><br>
            <input type="number" name="coriander" id="coriander" value="0" class="entry"><br>
        </div>

        <div style="float: left;margin-right: 100px;margin-bottom: 10px;margin-left: 0px;padding-top: 0px;margin-top: 0px">
            <img src="pictures/curryleaves.jfif" alt="" class="pic">
            <br>
            <p>Fresh Leaves</p>
            
            <label for="curryleaves" style="font-size: large;"><b>Rs5 Each</b></label><br><br>
            <input type="number" name="curryleaves" id="curryleaves" value="0" class="entry"><br>
        </div>

    <button type="submit" name="submit" class="btn">BUY NOW</button> 
    </form>
    </div>

</body>
</html>


