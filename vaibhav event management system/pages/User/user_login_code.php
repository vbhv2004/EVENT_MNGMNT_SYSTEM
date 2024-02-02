<?php
require_once("../../db/conn.php");
echo $email = $_POST['email'];
echo $pass = $_POST['password'];
// echo $user. " ".$pass;
echo $query="select * from tbl_user where email='$email' and password='$pass'";
	$res=mysqli_query($conn,$query);
	$row=mysqli_num_rows($res);
    if($row>0){
        $_SESSION['userId']=$user;
        header("location:deshboard.php");
    }else{
        header("location:index.php?status=1");
    }
?>