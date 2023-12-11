<?php
	include ('connect.php');

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    $query = "SELECT * FROM user1 WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            header("Location: trip.html");
            exit();
        } else {
            echo "Invalid username or password";
            header("Location: login.html");
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
