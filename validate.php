<?php 
session_start();
$con= mysqli_connect("localhost","root","","bhotel");
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$user = $_POST['user'];
$pw = $_POST['pw'];

$q="select * from bhotel where user='$user' && pw='$pw'";
$r=mysqli_query($con,$q);
$n=mysqli_num_rows($r);
if($n>0){
    $_SESSION['user']=$user;
    header('location:room.php');
}
else{
    echo '<script>alert("Username or Password incorrect format!")</script>';
}
?>