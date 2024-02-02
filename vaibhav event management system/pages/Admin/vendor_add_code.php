<?php
    require_once('../../db/conn.php');
    $id = $_POST['vendorId'];
    $vendor = $_POST['vendorName'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $shop = $_POST['shop'];
    $pass = $_POST['password'];
    echo$query="INSERT INTO `tbl_vendor` (`vendorId`, `name`, `email`, `dob`, `password`, `contact`, `gender`, `shop`, `currdate`) VALUES ('$id', '$vendor', '$email', '$dob', '$pass', '$contact', '$gender', '$shop', current_timestamp())";
    if(mysqli_query($conn,$query)){
        header("location:deshboard.php");
        echo "Data Inserted Successfully";
    }else{
        header("location:vendorReg.php?status=1");
    }
?>
