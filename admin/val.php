<?php 
$con= mysqli_connect("localhost","root","","bhotel");
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$user = $_POST['user'];
$stat= $_POST['stat'];
$d=$_POST['d'];

$q1="DELETE FROM room WHERE user='$user' && d='$d'";
$q2="UPDATE room SET stat='$stat' WHERE user='$user' && d='$d'";

if($stat=="checkout"){
    mysqli_query($con,$q1);
}
else{
    mysqli_query($con,$q2);
}
header('location:results.php');
?>