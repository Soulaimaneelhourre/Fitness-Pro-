<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <!--Css-->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/Checkout.css">
    <link rel="stylesheet" href="css/store.css">
    <!--Icon-->
    <link rel="stylesheet" href="css/all.min.css">
    <!-----bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

</head>

<body >

    <!--Home-->
    <div class="home">
        <!--Nav Bar-->
        <?php
            require("nav_bar.php");
        ?>

        <div class="mybag"> MY BAG </div>

<section class="user-info" >
    <div class="left" style="float: left;">
        <div class="login" style="height: 80px;">
            <h4><i class="bi bi-check2-circle" ></i> LOGIN </h4>
            <P>Mr.Zakaria ayad <span>+212 699 913 182</span> <button><a href="setting.html">Change</a></button></P>
        </div>

        <div class="login" >
            <h4><i class="bi bi-check2-circle" ></i> Shipping Adresse </h4>
            <P>Casablanca, morocco P3006 Roches Noires <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.<button><a href="setting.html">Change</a></button></P>
        </div>
        <div class="payment">
            <h4> Mayment </h4>
            <div class="card-info">
                <label for="ccnum">Card number </label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"><br>
                <label for="expmonth">Exp Month </label>
                <input type="text" id="expmonth" name="expmonth" placeholder="September"><br>
                <div class="row">
            <div class="xxx">
                <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
            </div>
                </div>
            </div>
            <div class="pay">
                <button class="pay">
                    <a href="error404.html">Pay $82.98</a>
                </button>
            </div>

        </div>
    </div>
    <div class="right">
        <h4>Your Order</h4>

        <div class="pxx Supplements" id="item">
            <img src="images/combat.png" width="100px" height="130px" >
            <div class="product-description">
               <h5>UFC Combat</h5>
                <p> UFC Combat Powder Feed Your Muscles Up To 8Hours </p>
                <div ><p style="color: #fff;">$49.99 </p></div>
             </div>
        </div>
        
        <div class="pxx Supplements" id="item">
            <img src="images/nike Shoes.png" width="100px" height="130px" >
            <div class="product-description">
               <h5>Nike Trainners</h5>
                <p> Nike Trainners With Dynamic Support For Girls </p>
                <div><p style="color: #fff;">$22.99 </p></div>
             </div>
        </div>
        <div class="other-charges">
            <p> Delivery <span>$20 </span></p>
            <p> Discount <span>$10 </span></p>
        </div><br>
        <hr>
        <div class="total"><p> Total <span>$82.98</span> </p></div>
    </div>
</section>
</body>
</html>