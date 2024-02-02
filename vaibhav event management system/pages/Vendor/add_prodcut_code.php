<?php 
    require_once("../../db/conn.php");

    $pName = $_POST['pName'];
    $price = $_POST['price'];
    $dis = $_POST['dis'];

    $location="../../upload/";

    $pimage=$_FILES['productImage']['name'];
    $type1=$_FILES['productImage']['type'];
    $size1=$_FILES['productImage']['size'];
    $tmp_name1=$_FILES['productImage']['tmp_name'];


    echo $query="insert into tbl_product(pname,pimg,price,pdis)values('$pName','$pimage','$price','$dis')";
    mysqli_query($conn,$query);
    move_uploaded_file($tmp_name1,$location.$pimage);
?>