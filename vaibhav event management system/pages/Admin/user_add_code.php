<?php
    require_once('../../db/conn.php');
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $pass = $_POST['password'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $query="INSERT INTO `tbl_user` (`name`, `email`, `dob`, `password`, `contact`, `gender`, `curdate`) VALUES ('$userName', '$email', '$dob', '$pass', '$contact', '$gender', current_timestamp())";
    if(mysqli_query($conn,$query)){
        header("location:deshboard.php");
    }else{
        echo "something is missing";
    }
?>
