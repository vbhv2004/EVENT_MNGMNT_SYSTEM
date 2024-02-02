<?php
    require_once("../../db/conn.php");
    $id=$_REQUEST['vendorId'];
    $query="DELETE FROM tbl_vendor WHERE vendorId = '$id'";
	mysqli_query($conn,$query);
	header('location:vendorList.php');
?>