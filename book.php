<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
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
        <br><br><br><br>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
        <form action="index.php" method="post"><br>
            <input type="text" name="fname" id="fname" placeholder="First Name"><br><br>
            <input type="text" name="mname" id="mname" placeholder="Middle Name"><br><br>
            <input type="text" name="sname" id="sname" placeholder="Second Name"><br><br>
            <textarea name="addr" id="addr" cols="30" rows="10" placeholder="Enter the address"></textarea><br><br>
            <input type="email" name="email" id="email" placeholder="Email"><br><br>
            <input type="text" name="contact" id="contact" placeholder="Contact"><br><br>
			<input type = "date" name = "date" id="date" required = "required" placeholder="Date"><br><br>
        <label for="rtype">Choose a room type:</label>
        <select id="rtype">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
        </select><br><br>
        <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>