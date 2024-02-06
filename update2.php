<?php
include ("connect.php");
include("navbar.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $phoneNo = test_input($_POST['phoneNo']);
    $password = isset($_POST['password']) ? test_input($_POST['password']) : ''; // Check if 'password' is set
}  

if (isset($_SESSION['name'])) {
    $sessionUsername = $_SESSION['name'];
} else {
    echo "Username is not in session";
    exit(); // Stop execution if username is not in session
}

$sql = "UPDATE user1 SET username=?, password=?, email=?, phoneNo=? WHERE username=?";
$stmt = $con->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sssss", $username, $password, $email, $phoneNo, $sessionUsername);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo'
        <div class="card">
                <div class="card-body">
                    <br/>
                    
                </div>
            </div>';
        echo "Update successful!";
    } else {
        echo'
        <div class="card">
                <div class="card-body">
                    <br/>
                    
                </div>
            </div>';
        echo "No rows were updated.";
    }

    $stmt->close();
} else {
    echo "Error preparing statement: " . $con->error;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <style>
        body {
            background-image: url("images\\hall.jpeg");
            background-repeat: no-repeat;
            background-size: cover ;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .navbar {
            background-color: #343a40; 
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .card {
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position:center;    
        }
        </style>


  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>