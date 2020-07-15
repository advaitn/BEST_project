<?php
if(isset($_POST['c_submit'])){
    include('connect.php');
    echo($_POST['uniqueid']);
    $uniqueid = $_POST['uniqueid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $pwd = $_POST['pwd'];
    // $query = "insert into `committee_members` ('unique_id', 'firstname', 'lastname', 'password') values ('$uniqueid', '$firstname', '$lastname', '$pwd' )";
    $query = "INSERT INTO `committee_members`(`unique_id`, `firstname`, `lastname`, `password`) VALUES ('$uniqueid', '$firstname', '$lastname', '$pwd')";
    $result = mysqli_query($conn,$query);

    header('location: committee_login.php');
}

?>