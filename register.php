<?php 
session_start();
$con= mysqli_connect("localhost","root","","bhotel");
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$addr = $_POST['addr'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$user = $_POST['user'];
$pw = $_POST['pw'];

$q="select * from bhotel where user='$user' or email='$email'";
$r=mysqli_query($con,$q);
$n=mysqli_num_rows($r);
if($n>0){
    echo '<script>alert("Username or Email already used!")</script>';
}
else if($pw==''){
    echo '<script>alert("Password incorrect format!")</script>';
}
else{
    header('location:signin.php');
    $q = "INSERT INTO `bhotel` VALUES ('$fname','$sname', '$addr', '$email', '$contact', '$user' , '$pw');";
    mysqli_query($con,$q);
}
session_destroy();
?>