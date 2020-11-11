<?php 
session_start();
header('location:room.php');
$con= mysqli_connect("localhost","root","","bhotel");
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$user=$_SESSION['user'];
$dates = $_POST['dates'];
$rtype = $_POST['rtype'];

    $q = "INSERT INTO `room` VALUES ('$user','$dates','$rtype','checkin');";
    mysqli_query($con,$q);
?>