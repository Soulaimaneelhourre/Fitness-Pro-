<?php 
session_start();
require "conect.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($conect, $_POST['name']);
    $email = mysqli_real_escape_string($conect, $_POST['email']);
    $password = mysqli_real_escape_string($conect, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conect, $_POST['cpassword']);
    $phone = mysqli_real_escape_string($conect,$_POST['phone']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($conect, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO usertable (name, email, password, code, status,phone)
                        values('$name', '$email', '$encpass', '$code', '$status','$phone')";
        $data_check = mysqli_query($conect, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: soulaimane5.elhourre@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: verification-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
// the user clicked the verify me button 
if(isset($_POST['check'])){
    $_SESSION['info'] = "";
    $verification_code = mysqli_real_escape_string($conect,$_POST['verif']);
    $check_code = "SELECT * From usertable WHERE code = $verification_code";
    $code_resultats=mysqli_query($conect,$check_code);
    if(mysqli_num_rows($code_resultats)>0){
        $fetch_data = mysqli_fetch_assoc($code_resultats);
        $fetch_code = $fetch_data['code'];
        $email= $fetch_data['email'];
        $code=0;
        $status='verified';
        $update_verif= "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res=mysqli_query($conect,$update_verif);
        if($update_res){
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            header('location: user.php');
            exit();
        }else{
            $errors['otp-error']="Failed while updating code!";
        }
    }else{
        $errors['otp-erroe'] = "you've entered incorect code!";
    }
    
}
//if the user clicked the login button 
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conect,$_POST['email']);
    $password = mysqli_real_escape_string($conect,$_POST['password']);
    $check_email= "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($conect,$check_email);
    if(mysqli_num_rows($res)>0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_password = $fetch['password'];
        if(password_verify($password, $fetch_password)){
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if($status == 'verified'){
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                  header('location: user.php');
            }else{
                $info = "It's look like you haven't still verify your email - $email";
                $_SESSION['info'] = $info;
                header('location: verification-otp.php');
            }
        }else{
            $errors['email'] = "Incorrect email or password!";
        }
    }else{
        $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}

//the use clicked check in forgot-pass form
if(isset($_POST['check-email'])){
    $email=mysqli_real_escape_string($conect,$_POST['email']);
    $check_email="SELECT * FROM usertable WHERE email='$email'";
    $run_sql=mysqli_query($conect,$check_email);
    if(mysqli_num_rows($run_sql)>0){
        $code=rand(999999, 111111);
        $insert_code="UPDATE usertable SET code =$code WHERE email='$email'";
        $run_query = mysqli_query($conect,$insert_code);
        if($run_query){
            $subject= " email verification code ! ";
            $message= "your verification code id $code";
            $sender = "From: soulaimane5.lhourre@gmail.com";
            if(mail($email,$subject,$message,$sender)){
                $info = "siftn alk lcod asahbi l $email";
                $_SESSION['info']= $info;
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                header('location: forgot_pass_otp.php');
                exit();
            }else{
                $errors['otp-error']="failed while sending code!";
            }
        }else{
            $errors['db_erroe']= "something went wrong";
        }
    }else{
        $errors['email']= "this email adress does not exist";
    }
}

//if user click check reset otp button
if(isset($_POST['check-reset-otp'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($conect, $_POST['otp']);
    $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
    $code_res = mysqli_query($conect, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click change password button
if(isset($_POST['change-password'])){
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($conect, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conect, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }else{
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
        $run_query = mysqli_query($conect, $update_pass);
        if($run_query){
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: log-in.php');
        }else{
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}
?>