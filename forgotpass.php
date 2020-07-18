<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
</head>
<body>
<form action="" method="POST">
   <h3>SEND OTP TO EMAIL ID</h3>
        <div class="form-group row">
            <label for="unique_id" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" name="unique_id" class="form-control" id="unique_id" >
            </div>
        </div>
        <div class="form-group row">
            <label for="emailid" class="col-sm-2 col-form-label">Email ID</label>
            <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="emailid">
            </div>
        </div>
        <center>
        <button type="submit" name="submit" value="Submit" class="btn btn-primary mb-2">SUBMIT</button>
        </center>
</form>



<?php
include 'connect.php';
include 'mailsetup.php';
// $conn=db_connection();

if(@$_POST['submit'])
{
    $unique_id=$_POST['unique_id'];
    $email=$_POST['email'];

        $login_verify_query="SELECT * FROM `committee_members` WHERE `unique_id`='$unique_id' AND `email`='$email'";
        $res_login=mysqli_query($conn,$login_verify_query);
        if(@mysqli_num_rows($res_login)>0)
        {
            
          //  session_start();
            $_SESSION['unique_id'] = $unique_id;
            $_SESSION['email'] = $email;
            
            // generate otp
            $str='1234567890qwaszxedcrfvtgbyhnujmkopQWERTYUOPASDFGHJKZXCVBNM0987654321';
            $shuffled = str_shuffle($str);
            $otp = substr($shuffled, 5, 6);
            $_SESSION['otp']=$otp;
            $to=$email;
            $sub="OTP for reset password";
            $body="Your one time password for reset password is: - ".$otp;
            
            //phpmailer
            
            $mail->addAddress($to);     // Add a recipient
            $mail->Subject = $sub;
            $mail->Body = $body;
            if($mail->send())
            {
                
                echo "<script>alert('Check your registered mail id for OTP.')</script>";
                header('refresh:0,url=updatepass.php');
            }
            else 
            {
                
                echo $mail->ErrorInfo;
            }
          
        }
        else
        {
			
			echo "<script>alert('INVALID USERNAME OR EMAIL')</script>";
        }

    
    
}
?>


<?php
ob_flush();
?>
</body>
</html>