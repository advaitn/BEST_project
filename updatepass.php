<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
<form action="" method="POST">
   <h3>CHANGE PASSWORD</h3>
        <div class="form-group row">
            <label for="otp" class="col-sm-2 col-form-label">OTP </label>
            <div class="col-sm-10">
            <input type="text" name="eotp" class="form-control" id="otp" >
            </div>
        </div>
        <div class="form-group row">
            <label for="new" class="col-sm-2 col-form-label">New password</label>
            <div class="col-sm-10">
            <input type="text" name="new" class="form-control" id="new" >
            </div>
        </div>
        <div class="form-group row">
            <label for="confirm" class="col-sm-2 col-form-label">Confirm password</label>
            <div class="col-sm-10">
            <input type="text" name="confirm" class="form-control" id="confirm">
            </div>
        </div>
        <center>
        <button type="submit" name="change" class="btn btn-primary mb-2">SUBMIT</button>
        </center>
</form>

<?php
    include 'connect.php';
    // $conn = db_connection();
    if (isset($_POST['change']))
    {
        //session_start();
        $unique_id = $_SESSION['unique_id'];
        $otp = $_SESSION['otp'];
        $new = $_POST['new'];

        $confirm = $_POST['confirm'];
        $eotp = $_POST['eotp'];

        if ($otp == $eotp) 
        {
            if ($new == $confirm) 
            {
               
                
                // $hashpassword = md5($new);
                   $query = "UPDATE `committee_members` SET `password`='$new' WHERE `unique_id`='$unique_id'";
                    $res = mysqli_query($conn, $query);
                    if ($res) 
                    {
                        echo "<script>alert('Password Update Successful.')</script>";
                        header('refresh:0,url=logout.php');
                    }
                    else
                    {
                        echo "<script>alert('Password Update Unsuccessful!')</script>";

                    }
            
               
               
            } 
            else 
            {
                echo "<script>alert('Password Mismatch.')</script>";
            }
        } 
        else 
        {
            echo "<script>alert('Incorrect OTP')</script>";
        }
    }


    ?>
</body>
</html>