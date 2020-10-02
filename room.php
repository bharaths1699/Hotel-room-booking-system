<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:signin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room booking</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">Bharath's Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php">Make a reservation<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sign Up</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
	          <li>
	          	<a href="signin.php">logout</a>
	          </li>
          </ul>
        </div>
    </nav>
    <section class="my-5" id="3">
        <div class="py-3">
            <h1 class="text-center display-4">Book Room</h1><br><br>
        </div>
        <div class="container">
            <form action="room_register.php" method="POST">
                <div class="form-group">
                    <h4 class="mx-auto d-block text-center">Date : </h4>
                    <input class="mx-auto d-block" type="date" name="dates" id="dates" required="required" placeholder="Date"><br><br>
                    <h4 class="mx-auto d-block text-center">Choose a room type : </h4>
                    <select class="mx-auto d-block text-center" name="rtype">
                        <option class="mx-auto d-block text-center" value="standard">Standard</option>
                        <option class="mx-auto d-block text-center" value="superior">Superior</option>
                        <option class="mx-auto d-block text-center" value="super">Super delux</option>
                        <option class="mx-auto d-block text-center" value="jr">Jr suite</option>
                        <option class="mx-auto d-block text-center" value="executive">Executive suite</option>
                    </select><br>
                    <button class="mx-auto d-block btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>