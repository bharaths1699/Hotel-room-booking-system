<!DOCTYPE html>
<html>

<head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Baloo Tamma 2', cursive;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>

  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="#">Bharath's Hotel</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="signin.php">logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <h1>Details Of Hotel Customers</h1>
  <br>
  <?php
  session_start();
  $con = mysqli_connect("localhost", "root", "", "bhotel");
  if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
  }

  $q = "SELECT * FROM room";
  $r = mysqli_query($con, $q);
  $n = mysqli_num_rows($r);

  if ($n > 0) {
    echo "<table><thread><tr><th>User ID</th><th>Date</th><th>Room Type</th><th>Status</th></tr></thread>";
    // output data of each row
    while ($row = mysqli_fetch_assoc($r)) {
      echo "<thread><tr><td>" . $row["user"] . "</td><td>" . $row["d"] .  "</td><td>" . $row["rtype"] . "</td><td>" . $row["stat"] . "</td></tr></thread>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $con->close();
  session_destroy();
  ?>
  <br>
  <br>
  <div class="form-group">
<form action="val.php" method="post">
User ID: <input type="text" class="form-control" name="user"><br>
Status:<br> <select class="mx-auto text-center" name="stat">
       <option class="mx-auto d-block text-center" value="arriving">Arriving</option>
       <option class="mx-auto d-block text-center" value="checkin">Check In</option>
       <option class="mx-auto d-block text-center" value="checkout">Check Out</option>
       </select><br><br>
Date:<br> <input class="mx-auto" type="date" name="d" required="required"><br><br>
<input type="submit" class="btn btn-primary">
</div>
</form>
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>