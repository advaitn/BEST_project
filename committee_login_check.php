<?php

if(isset($_POST['cl_submit'])){
    // $pwd=$_POST['pwd'];
    include('connect.php');
    $uniqueid = $_POST['uniqueid'];
    $pwd = $_POST['pwd'];
    $query1 = "SELECT * FROM `committee_members` WHERE `unique_id`='$uniqueid'";
    // echo $query1;
    $res1 = mysqli_query($conn,$query1);
    $data = $res1->fetch_array(MYSQLI_ASSOC);
    if($data){
        $pass = $data['password'];
    }
  
    
    if(mysqli_num_rows($res1) > 0)
    {
        if($pass == $pwd){
            // header('login_home.html');
            echo("welcome!");
        }
        else{
            // echo("wrong password");
            header("location:committee_login.php");
        }
    }
    else{
        // echo('invalid unique id');
        header("location:committee_login.php");
    }
}

?>