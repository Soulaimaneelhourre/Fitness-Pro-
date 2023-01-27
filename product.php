<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="icon" href="images/gym.png">
    <!--Css-->
    <link rel="stylesheet" href="css/product.css">
    <!--Icon-->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!--Home-->
    <div class="home">
         <!--Nav Bar-->
         <?php
            require("nav_bar.php");
        ?>
        <!--Body-->
        <div class="body">
            <h1>Product  Details</h1>
            <div class="card">
                <div class="left">
                    <h2>Nike Air 38</h2>
                    <p class="desc">Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. Eum ducimus cumque  <br> sed facere voluptate tempora.</p>
                    <div class="cardi">
                        <img src="images/nike (1).png" alt="">
                        <img src="images/nike (2).png" alt="">
                        <img src="images/nike (3).png" alt="">
                    </div>
                </div>
                <div class="center">
                    <img src="images/nike (1).png" alt="">
                    <h3>$ 290.00</h3>
                </div>
                <div class="right">
                    <div class="rev">
                        <h5>Review : </h5>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                    </div>
                    <div class="size">
                        <h5>Size : </h5>
                        <div class="cas">
                            <p>41</p>
                            <p>42</p>
                            <p>43</p>
                        </div>
                    </div>
                    <button><a href="Check out.html">Buy Now</a></button>
                </div>
            </div>

        </div>
         




        
    </div>
  <script src="main.js"></script>
  
</body>
</html>