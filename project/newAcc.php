<?php
include('connect.php');

$username = test_input($_POST['username']);
$password = test_input($_POST['password']);
$email = test_input($_POST['email']);
$phoneNo = test_input($_POST['phoneNo']);

$stmt = $con->prepare("INSERT INTO user1 (username, password, email, phoneNo) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $password, $email, $phoneNo);

if ($stmt->execute()) {
    echo "Account is created";
    echo "<br/>";
    echo "Press here <a href='login.html'> to login </a>";
} else {
    die('Error: ' . $stmt->error);
}

$stmt->close();
mysqli_close($con);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
