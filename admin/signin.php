<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book room</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
</head>

<body>
    <section class="my-5" id="3">
        <div class="py-3">
            <h1 class="text-center display-4">Sign In</h1>
        </div>
        <div class="container">
            <form action="validate.php" method="POST" autocomplete="off">
            <div class="form-group">
                <h4 class="mx-auto d-block text-center">Username : </h4>
                <input class="mx-auto d-block" type="text" name="admin"><br>
                <h4 class="mx-auto d-block text-center">Password : </h4>
                <input class="mx-auto d-block" type="password" name="pw"><br>
                <button class="mx-auto d-block btn btn-primary">Sign in</button>
            </div>
            </form>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>