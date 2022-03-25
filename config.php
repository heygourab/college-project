<?php
$server = "localhost";
$fullname = "";
$user = "root";
$pass = "";
$database = "college_project";

$conn = mysqli_connect($server, $user ,$pass, $database);

if(!$conn){
    echo "<script>alert('connect to server failed');</script>";}
else{
    echo "<script>alert('connect to server successfull');</script>";
}
?>