<?php
require_once("../../db/conn.php");
$user = $_POST['userid'];
$pass = $_POST['userPassword'];
// echo $user. " ".$pass;
echo $query="select * from tbl_admin where userId='$user' and password='$pass'";
	$res=mysqli_query($conn,$query);
	$row=mysqli_num_rows($res);
    if($row>0){
        $_SESSION['userId']=$user;
        header("location:deshboard.php");
    }else{
        header("location:index.php?status=1");
    }
?>