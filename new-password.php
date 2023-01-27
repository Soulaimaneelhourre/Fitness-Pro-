<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: log-in.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="images/gym.png">
    <!--Css-->
    <link rel="stylesheet" href="css/log-in.css">
    <link rel="stylesheet" href="css/home.css">
    <!--Icon-->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <style>
        .error{
            border: 1px red solid;
            width: 80%;
            padding: 20px;
        }
        .login .error{
            margin-left: 20px;
        }

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
                <h1 class="text"><span style="color:#FB8500;">"</span> Take care of your <br>Health.<br> The human body is <br> the best work of art<span style="color:#FB8500;"> .</span><span style="color:#FB8500;">"</span></h1>
                <p class="desc">you don't have a account yet ?</p>
                <p class="btn"> Sign Up</p>
            </div>
            <!--Right-->
            <div class="login">
                <h1>Code Verification </h1>
                <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="error">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="error">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                <form method="post">
                <div class="text-area">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Enter a new Password </label>
                </div>
                <div class="text-area">
                    <input type="password" name="cpassword" required>
                    <span></span>
                    <label>re-enter the new password </label>
                </div>
                
                <input name="change-password" type="submit" value="Verify Me" class="in">
                <div class="signup">
                    Not a member? <a href="signup.php">Signup</a>
                </div>
                </form>
            </div>
        </div>
        <!--S-Bar-->

        <script src="main.js"></script>

        
    
</body>
</html>