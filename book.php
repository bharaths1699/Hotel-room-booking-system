<?php
    $insert = false;
    if(isset($_POST['fname'])){
    $conn = new mysqli("localhost", "root", "", "hotel") or die(mysqli_error());
    $id=uniqid('id');

    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $sname = $_POST['sname'];
    $add = $_POST['add'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $dates = $_POST['dates'];
    $rtype = $_POST['rtype'];
    $sql = "INSERT INTO `room` VALUES ('$id' , '$fname', '$mname', '$sname', '$add', '$email', '$contact', '$dates' , '$rtype');";
    mysqli_query($conn,$sql);

    if($conn->query($sql) == true){
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }
    $conn->close();
    if($insert == true){
        echo "<p class='submitMsg'>Thanks for booking, confirm by the date of booking by visiting our hotel.</p>";
    }
    header("Location: book.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharath's hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="navbar" class="item">
            <a href="index.php">Home</a></a>
    </div>
    <div>
        <br><br><br>
        <strong><p style="background-color:grey; left:0px; right:0px;">Enter your details for booking room:</p></strong>
        <form action="book.php" method="post"><br>
            <input type="text" name="fname" id="fname" placeholder="First Name"><br><br>
            <input type="text" name="mname" id="mname" placeholder="Middle Name"><br><br>
            <input type="text" name="sname" id="sname" placeholder="Last Name"><br><br>
            <textarea name="add" id="add" cols="30" rows="10" placeholder="Enter the address"></textarea><br><br>
            <input type="email" name="email" id="email" placeholder="Email"><br><br>
            <input type="text" name="contact" id="contact" placeholder="Contact"><br><br>
			<input type = "date" name = "dates" id="dates" required = "required" placeholder="Date"><br><br>
        <label for="l">Choose a room type:</label>
        <select name="rtype">
        <option value="standard">Standard</option>
        <option value="superior">Superior</option>
        <option value="super">Super delux</option>
        <option value="jr">Jr suite</option>
        <option value="executive">Executive suite</option>
        </select><br><br><br><br>
        <button class="btn">Submit</button> 
        </form><br><br><br>
        <footer class="item"><label>&copy; Copyright 2019 </label>
        </footer>
    </div>
    <script src="index.js"></script>
    
</body>
</html>