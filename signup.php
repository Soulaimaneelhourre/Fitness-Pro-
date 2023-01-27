<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="images/gym.png">
    <!--Css-->
    <link rel="stylesheet" href="css/log-in.css">
    <link rel="stylesheet" href="css/home.css">
    <!--Icon-->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <style>
        
        

    </style>
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
            <!--Left-->
            <div class="left">
                <h1 class="text"> <span style="color:#FB8500;">"</span> Be<br>Parts Of Our<br>Community <span style="color:#FB8500;">.</span> <span style="color:#FB8500;">"</span></h1>
                <p class="desc">You Already Have an Account.</p>
                <p class="btn">Sign in</p>
            </div>
            <!--Right-->
            <div class="sign-up">
                <h1>Signup</h1>
                <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="error">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="error">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                
                <form method="post">
                <div class="text-area">
                    <input type="text" name="name" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="text-area">
                    <input type="email" name="email" required>
                    <span></span>
                    <label>E-mail</label>
                </div>
                <div class="text-area">
                    <input type="tel" name="phone" required>
                    <span></span>
                    <label>Phone Number</label>
                </div>
                <div class="text-area">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="text-area">
                    <input type="password" name="cpassword" required>
                    <span></span>
                    <label>Confirm Password</label>
                </div>
                <div class="forgetpass"><a href="forgot-pass.php">Forgot Password?</a></div>
                <input  type="submit"   name="signup" class="in" value="Signup">
                <div class="signup">
                    Already have an account? <a href="log-in.php">Sign in </a>
                </div>
                </form>
            </div>
        </div>
        <script src="main.js"></script>

</body>
</html>