<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
                    <a class="nav-link" href="signin.php">Make a reservation</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sign Up<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="my-5" id="3">
        <div class="py-3">
            <h1 class="text-center display-4">Sign Up</h1>
        </div>
        <div class="container">
            <form action="register.php" method="POST" autocomplete="off">
                <div class="form-group">
                    <h4 class="mx-auto d-block text-center">First Name : </h4>
                    <input class="mx-auto d-block" type="text" name="fname" id="fname" placeholder="First Name"><br>
                    <h4 class="mx-auto d-block text-center">Last Name : </h4>
                    <input class="mx-auto d-block" type="text" name="sname" id="sname" placeholder="Last Name"><br>
                    <h4 class="mx-auto d-block text-center">Address : </h4>
                    <textarea class="mx-auto d-block" name="addr" id="addr" cols="30" rows="10" placeholder="Enter the address"></textarea><br>
                    <h4 class="mx-auto d-block text-center">Email : </h4>
                    <input class="mx-auto d-block" type="email" name="email" id="email" placeholder="Email"><br>
                    <h4 class="mx-auto d-block text-center">Phone Number : </h4>
                    <input class="mx-auto d-block" type="text" name="contact" id="contact" placeholder="Contact"><br>
                    <h4 class="mx-auto d-block text-center">Username : </h4>
                    <input class="mx-auto d-block" type="text" name="user" placeholder="Username"><br>
                    <h4 class="mx-auto d-block text-center">Password : </h4>
                    <input class="mx-auto d-block" type="password" name="pw" placeholder="Password"><br>
                    <button class="mx-auto d-block btn btn-primary">Sign Up</button>
                </div>
            </form>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>