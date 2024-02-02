<?php
//error_reporting(0);
$servername="localhost";
$username ="root";
$pass="";
$dbname="student";
$conn=mysqli_connect($servername,$username,$pass,$dbname);
if($conn)
{
    echo "";
}
else{
    die("Connection failed because".mysqli_connect_error());
    echo "Database connection failed ";
}
// echo "success";
?>