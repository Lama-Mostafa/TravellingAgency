<?php
include("connect.php");
include("navbar.php");
session_start();

if (isset($_SESSION['name'])) {
    $username = $_SESSION['name'];
} else {
    echo "Username is not in session";
}

$sql = "SELECT * FROM booking WHERE name = '$username'";
$result = $con->query($sql);

?>

<html>
<style>
    body {
        background-image: url("images\\banner2.jpg");
    }
</style>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">profile</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="review.php">Review Trips</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="update.php">Update Profile</a>
      </li>
    
    </ul>
  </div>

</div>
<body>
    <?php
    if ($result) {
        if ($result->num_rows > 0) {
            echo "<table class='table' border='2'>";
            echo "<thead class='table-dark'>";
            echo "<tr><th>name</th><th>phoneNo</th><th>email</th><th>trip</th><th>noTravellers</th><th>location</th><th>tripPrice</th><th>travellerName</th></tr>";
            echo "</thead>";
            echo "<tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['phoneNo'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['trip'] . "</td>";
                echo "<td>" . $row['noTravellers'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['tripPrice'] . "</td>";
                echo "<td>" . $row['travellerName'] . "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "No results found.";
        }
    } else {
        echo "Error executing query: " . $con->error;
    }
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
