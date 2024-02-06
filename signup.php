<?php
include('connect.php');
$username = $password = $email = $phoneNo = "";

$nameErr = $emailErr = $phoneNoErr = $passwordErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $email = test_input($_POST['email']);
    $phoneNo = test_input($_POST['phoneNo']);

    // Check if the username is empty
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
    } else {
        // Check if the username is already in the database
        $query = "SELECT * FROM user1 WHERE username = ?";
        $stmt_check = $con->prepare($query);
        $stmt_check->bind_param("s", $username);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            $nameErr = "Username is already taken";
        } else {
            // No validation errors, proceed with the query
            $stmt = $con->prepare("INSERT INTO user1 (username, password, email, phoneNo) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $username, $password, $email, $phoneNo);

            if ($stmt->execute()) {
                //echo "Account created successfully.";
                //header('Location: newAcc.php'); ?>
                <script>
                    alert("Account created successfully.");
                    window.location.href = "newAcc.php";
                </script>
      <?php  } else {
                die('Error: ' . $stmt->error);
            }

            $stmt->close();
            mysqli_close($con);
        }
        $stmt_check->close();
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
<html lang="en">

<head>
    <title>Sign Up</title>
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
        }

    .error{
        color: red;
    }

    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Sign up</h2>
            </div>
            <div class="card-body">
                <br />
<form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="username">
                        <span class ="error">  <?php echo "<p>". $nameErr."</p>";?> </span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password">
                        <span class ="error">  <?php echo "<p>". $passwordErr."</p>"?> </span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="abc@abc.com">
                        <span class ="error"> <?php echo "<p>". $emailErr."</p>"?> </span>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNo" class="form-label">Phone Number:</label>
                        <input type="tel" class="form-control" name="phoneNo">
                       <span class ="error"> <?php echo "<p>". $phoneNoErr."</p>"?> </span>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                </form>
            </div>
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
