<?php
    require_once("../../db/conn.php");
    $id=$_REQUEST['id'];
    echo $query="DELETE FROM tbl_user WHERE id = '$id'";
	mysqli_query($conn,$query);
	header('location:userList.php');
?>