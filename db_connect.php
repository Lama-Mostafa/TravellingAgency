<?php 

$conn= new mysqli('localhost','root','','travel')or die("Could not connect to mysql".mysqli_error($con));
?>

<?php
// db_connect.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
