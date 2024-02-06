<?php
	include ('connect.php');

    session_start(); 
    
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $_SESSION['name'] = $username;

    $query = "SELECT * FROM user1 WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['name'] = $username;
            $sessionId = bin2hex(random_bytes(16)); // Generate a random session ID
        setcookie('username', $sessionId, time() + 3600, '/'); // Set cookie to expire in 1 hour

            header("Location: trip.php");
            exit();
        } else {
            echo "Invalid username or password";
            header("Location: login.php");
            exit();
        }
    } else {

        echo "Error executing query: " . mysqli_error($con);
    }

    mysqli_close($con);


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
