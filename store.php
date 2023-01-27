<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="icon" href="images/gym.png">
    <!--Css-->
    <link rel="stylesheet" href="css/home.css">
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

    
        <center><div class="services"> 
            <div class="feauters"> <i class="bi bi-truck"></i>   Free Shipping 
                <p> Free delivery for all orders</p>
            </div>
            <div class="feauters"> <i class="bi bi-cash-stack"></i>   Money Guarantee 
                <p> 30 days money back</p>
            </div>
            <div class="feauters"> <i class="bi bi-headset"></i>   24/7 Support 
                <p> Friendly 24/7 Support</p>
            </div>
            <div class="feauters"> <i class="bi bi-credit-card-2-back"></i>   Secure Payement 
                <p> All cards accepted</p>
            </div>
        </div>
    </center>


        <h1 style="text-align: center; margin-top: 30px;"> Our Products</h1>

    <center> 
        <div id="categories" class="indicator">
            <div class="list active" data-filter="All" > <a href="#">All Products </a></div>
            <div class="list" data-filter="Supplements"> <a href="#">Supplements </a> </div>
            <div class="list" data-filter="Clothes"> <a href="#">Clothes</a>  </div>
            <div class="list" data-filter="Accessoires"> <a href="#">Accessories</a> </div>
        </div>
    </center> 

    <section>
<div class="product">

                    <div class="pxx Clothes">
                            <img src="images/nike Shoes.png" alt="Pack Mega Muscle" width="170px" height="200px"  >
                            <div class="product-description">
                            <h4>Nike Trainners</h4>
                            <p>Nike Trainners With Dynamic Support For Girls </p>
                            </div>
                            <div class="price"><p style="font-size: smaller;">37-40 <span> $22.99</span></p></div>
                            <button class="buy-now">
                                <a href="product.php">Add to bag</a>
                            </button>    
                    </div>
                    
                    
        
        
                    <div class="pxx Supplements">
                        <img src="images/Creatin.png" data-categorie="supplements" alt="Recovery " width="170px" height="200px" >
                        <div class="product-description">
                        <h5>Ultra Micronized Creatine</h5>
                        <p>Ultra Micronized Creatine From Swedish Supplements</p>
                        </div>
                        <div class="price"><p style="font-size: smaller;">1 Kg <span> $49.99</span></p></div>
                        <button class="buy-now">
                            <a href="product.php">Add to bag</a>
                        </button> 
                    </div>
                    
                    
                    <div class="pxx Clothes">
                        <img src="images/white simple t-shirt.png" width="170px" height="200px">
                        <div class="product-description">
                        <h5> Coton T-shirt </h5>
                        <p>Wite Simple T-shirt 100% Coton</p>
                        </div>
                        <div class="price"><p style="font-size: smaller;">s-xxl <span> $4.99</span></p></div>
                        <button class="buy-now">
                            <a href="product.php">Add to bag</a>
                        </button>   
                    </div>
        
        
        
                    <div class="pxx Supplements">
                        <img src="images/Casein.png" alt="Recovery " width="170px" height="200px" >
                         <div class="product-description">
                           <h5>Casein Optimum Nutrition</h5>
                            <p>Casein Optimum Nutrition Gold Standard 100% Whey Bodybuilding Supplement</p>
                         </div>
        
                         <div class="price"><p style="font-size: smaller;">1 Kg <span> $49.99</span></p></div>
                         <button class="buy-now">
                            <a href="product.php">Add to bag</a>
                         </button>
                     </div>


            <div class="pxx Clothes">
                <img src="images/yellow t-shirt.png" alt="Pack Mega Muscle" width="170px" height="200px">
                <div class="product-description">
                   <h4>Yellow Crew-neck T-shirt</h4>
                    <p>Yellow Crew-neck T-shirt 100% Coton For All Ages</p>
                </div>
               <div class="price"><p style="font-size: smaller;">xs-xxl <span> $4.99</span></p></div>
               <button class="buy-now">
                <a href="product.php">Add to bag</a>
                </button>        
            </div>


             <div class="pxx Supplements">
                <img src="images/BCAA.png" alt="Pack Mega Muscle" width="170px" height="200px"  >
                <div class="product-description">
                <h4>Instantized BCAA</h4>
                <p>Optimum Nutrition Instantized BCAA Capsules,Friendly Branched Chain Essential Amino Acids</p>
                </div>
               <div class="price"><p style="font-size: smaller;">1 Kg <span> $49.99</span></p></div>
               <button class="buy-now">
                <a href="product.php">Add to bag</a>
            </button>
            </div>

            <div class="pxx Clothes">
                <img src="images/addidas short.png" alt="Recovery " width="170px" height="150px">
                <div class="product-description">
                <h5>Addidas Short</h5>
                <p>Black Good Material Short </p>
               </div>
                <div class="price"><p style="font-size: smaller;">xl-xxl <span> $3.99</span></p></div>
                <button class="buy-now">
                    <a href="product.php">Add to bag</a>
                </button>                
            </div>
        
        
            <div class="pxx Supplements">
                <img src="images/serious-mass-gainer-bodybuilding-supplement-pound-png.png" width="170px" height="200px">
                <div class="product-description">
                <h5>Mass Gainer </h5>
                <p>Serious Mass Gainer Bodybuilding Supplement</p>
               </div>
                <div class="price"><p style="font-size: smaller;">1 Kg <span> $49.99</span></p></div>
                <button class="buy-now">
                    <a href="product.php">Add to bag</a>
                </button>
            </div>



            <div class="pxx Supplements">
            
                <img src="images/whey.png" width="170px" height="200px">
                <div class="product-description">
                  <h5>Whey Protéine</h5>
                  <p>Optimum Nutrition Gold Standard 100% Whey Protéine</p>
               </div>
                <div class="price"><p style="font-size: smaller;">1 Kg <span> $39.69</span></p></div>
                <button class="buy-now">
                    <a href="product.php">Add to bag</a>
              </button>
            </div>


           

            <div class="pxx Supplements">
                <img src="images/Creatin.png"  width="170px" height="200px" >
                <div class="product-description">
                <h5>Ultra Micronized Creatine</h5>
                <p>Ultra Micronized Creatine From Swedish Supplements</p>
               </div>
                <div class="price"><p style="font-size: smaller;">1 Kg <span> $49.99</span></p></div>
                <button class="buy-now">
                    <a href="product.php">Add to bag</a>
                </button>
            </div>
            


             <div class="pxx Clothes">
                <img src="images/gray long-sleeved shirt Crew neck Sweater.png" width="170px" height="200px">
                <div class="product-description">
                <h5>Gray Shirt </h5>
                <p>Gray Long Sleeved Shirt Crew Neck Sweater</p>
               </div>
                <div class="price"><p style="font-size: smaller;">l-xxl <span> $6.99</span></p></div>
                <button class="buy-now">
                    <a href="product.php">Add to bag</a>
                </button>
            </div>



        <div class="pxx Supplements">
        <img src="images/Casein.png"  width="170px" height="200px" >
        <div class="product-description">
        <h5>Casein Optimum Nutrition</h5>
        <p>Casein Optimum Nutrition Gold Standard 100% Whey Bodybuilding Supplement</p>
        </div>
        <div class="price"><p style="font-size: smaller;">1 Kg <span> $49.99</span></p></div>
        <button class="buy-now">
            <a href="product.php">Add to bag</a>
        </button>
        </div>


 
        <div class="pxx Supplements">
        <img src="images/BCAA.png" alt="Pack Mega Muscle" width="170px" height="200px">
        <div class="product-description">
        <h4>Instantized BCAA</h4>
        <p>Optimum Nutrition Instantized BCAA Capsules,Friendly Branched Chain Essential Amino Acids</p>
        </div>
        <div class="price"><p style="font-size: smaller;">1 Kg <span> $49.99</span></p></div>
        <button class="buy-now">
            <a href="product.php">Add to bag</a>
        </button>
        </div>


        <div class="pxx Clothes">        
        <img src="images/addidas-Hoodie.png" alt="Recovery " width="170px" height="200px">
        <div class="product-description">
        <h5>Addidas Hoodie </h5>
        <p>High Quality Addidas Hoodie All sizes Disponible </p>
        </div>
        <div class="price"><p style="font-size: smaller;">s-xl <span> $9.99</span></p></div>
        <button class="buy-now">
            <a href="product.php">Add to bag</a>
        </button>
        </div>

                       
        <div class="pxx Supplements">         
        <img src="images/whey.png" alt="Recovery " width="170px" height="200px">
        <div class="product-description">
        <h5>Whey Protéine</h5>
        <p>Optimum Nutrition Gold Standard 100% Whey Protéine</p>
        </div>
        <div class="price"><p style="font-size: smaller;">1 Kg <span> $49.99</span></p></div>
        <button class="buy-now">
            <a href="product.php">Add to bag</a>
        </button> 
        </div>

       <div class="pxx Clothes">
        <img src="images/survette nike.png" width="170px" height="200px">
        <div class="product-description">
           <h5>Nike Tracksuit </h5>
            <p>Nike Academy 18 Woven Tracksuit Men's</p>
         </div>
           <div class="price"><p style="font-size: smaller;">s-xl <span> $79.99</span></p></div>
          <button class="buy-now">
            <a href="product.php">Add to bag</a>
        </button>
        </div>



       <div class="pxx Accessoires">
        <img src="images/Shaker.png" width="170px" height="200px">
        <div class="product-description">
           <h5>Protein Shaker  </h5>
            <p>High Quality White Protein Shaker For Your Workout Sceanse </p>
         </div>
           <div class="price"><p style="font-size: smaller;">750 ml <span> $1.99</span></p></div>
          <button class="buy-now">
            <a href="product.php">Add to bag</a>
        </button>
        </div>



       <div class="pxx Accessoires">
        <img src="images/SeekPng.com_boxing-glove-png_9627182-removebg-preview.png" width="200px" height="200px">
        <div class="product-description">
           <h5>Workout Gloves  </h5>
            <p>Workout Gloves for Women, Lightweight & Breathable Fingerless Weight Lifting </p>
         </div>
           <div class="price"><p style="font-size: smaller;">Small<span> $3</span></p></div>
          <button class="buy-now">
            <a href="product.php">Add to bag</a>
        </button>
        </div> 


        <div class="pxx Supplements">
        <img src="images/combat.png" width="170px" height="200px">
        <div class="product-description">
           <h5>UFC Combat</h5>
            <p> UFC Combat Powder Feed Your Muscles Up To 8Hours </p>
         </div>
           <div class="price"><p style="font-size: smaller;">1 Kg <span> $50.19</span></p></div>
          <button class="buy-now">
            <a href="product.php">Add to bag</a>
        </button>
        </div>


       <div class="pxx Accessoires">
        <img src="images/addidas rope.png" width="200px" height="230px">
        <div class="product-description">
           <h5>Addidas Rope  </h5>
            <p>Stretchy Addidas Rope for Calories Burned </p>
         </div>
           <div class="price"><p style="font-size: smaller;">1.5 m <span> $0.99</span></p></div>
          <button class="buy-now">
            <a href="product.php">Add to bag</a>
        </button>
        </div>

 
    <!--product div close here-->
    </div>
    </section>

    <!---Scripts-->
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    
    
    <script src="Store-filter.js"></script>
    <script src="main.js"></script>

</body>
</html>