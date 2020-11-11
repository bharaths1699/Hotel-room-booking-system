<?php 
session_start();
$con= mysqli_connect("localhost","root","","bhotel");
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$admin = $_POST['admin'];
$pw = $_POST['pw'];

$q="select * from badmin where admin='$admin' && pw='$pw'";
$r=mysqli_query($con,$q);
$n=mysqli_num_rows($r);
if($n>0){
    $_SESSION['admin']=$admin;
    header('location:results.php');
}
else{
    echo '<script>alert("Username or Password incorrect!")</script>';
}
?>