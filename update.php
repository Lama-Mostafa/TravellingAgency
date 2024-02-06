<?php 

include ("connect.php");
include("navbar.php");
session_start();

$nameErr = $emailErr = $phoneNoErr = $passwordErr = "";
$username = $password = $email = $phoneNo = "";

if (isset($_SESSION['name'])) {
    $username = $_SESSION['name'];
} else {
    echo "Username is not in session";
}

$sql = "SELECT * FROM user1 WHERE username = '$username'";
$result = $con->query($sql);


if (empty($username)) {
    $nameErr = "Name is required";
} elseif (empty($password)) {
    $passwordErr = "Password is required";
} elseif (empty($email)) {
    $emailErr = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
} elseif (empty($phoneNo)) {
    $phoneNoErr = "Phone number is required";
} elseif (!preg_match('/^01[0-9]{9}$/', $phoneNo)) {
    $phoneNoErr = "Invalid Phone Number";
}

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        
           $username= $row['username'];
           $password= $row['password'];
           $email= $row['email'];
           $phoneNo= $row['phoneNo'];
        
        }
        
    }
 
 else {
    echo "Error executing query: " . $con->error;
}
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
        <form method="post" action="update2.php">
<div class="container d-flex align-items-center justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">update</h2>
                </div>
                <div class="card-body">
    <br />
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
    </div>
        
    <div class="mb-3">
        <label for="name" class="form-label">password:</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="abc@abc.com" value="<?php echo $email; ?>">
    </div>
    <div class="mb-3">
        <label for="phoneNo" class="form-label">Phone Number:</label>
        <input type="tel" class="form-control" name="phoneNo" value="<?php echo $phoneNo; ?>">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Confirm</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>