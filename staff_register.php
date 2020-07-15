<?php

include('connect.php');
extract($_POST);

if(isset($_POST['submit'])){
    echo("hehe");
    $query = "insert into `staff_details` (`first_name`, `last_name`, `password`) values ('$firstname', '$lastname', '$pwd')";
    $result = mysqli_query($conn,$query);
    header('location:staff_details.php');
}
?>
