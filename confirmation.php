<?php

include('connect.php');
include("navbar.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $phoneNo = test_input($_POST['phoneNo']);
    $selectedCountry = test_input($_POST['selectedCountry']);
    $range = test_input($_POST['range']);
    $tripPrice = test_input($_POST['tripPrice']);
    
    $location = isset($_POST['location']) ? test_input($_POST['location']) : null;
    $extraField = isset($_POST['extraField']) ? test_input($_POST['extraField']) : null;

    $stmt = $con->prepare("INSERT INTO booking (name, phoneNo, email, trip, noTravellers, location, tripPrice, travellerName) VALUES (?,?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssssssss", $username, $phoneNo, $email, $selectedCountry, $range, $location, $tripPrice, $extraField);
        $stmt->execute();

        // Check for successful insertion
        if ($stmt->affected_rows > 0) {

        } else {
            echo "Error inserting into the database.";
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>



<!DOCTYPE html>
<html>

<head>
    <title>Booking Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <style>
        body {
            background-image: url("images\\banner2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            
        }
        .navbar {
            background-color: #343a40; 
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>
</head>

<body>


    <div class="card">
        <div class="card-body">
            Booking done successfully.
            <br/>
            <a href="intro.html" class="btn btn-primary">Logout</a>
            <?php setcookie('user_id', '', time() - 3600, '/')?>
        </div>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
