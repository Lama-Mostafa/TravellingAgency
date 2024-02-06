<?php
include('connect.php');
session_start(); 

$range = 1;
$selectedCountry = ''; 
$tripPrice = 0;
function calculateTripPrice($con,$selectedCountry, $range) {
    $tripPrice = 0;

    if ($selectedCountry === 'bali') {
        $sql = "SELECT capacity, updatedcapacity FROM trips WHERE trip = 'bali'";
        $result = $con->query($sql);
        
        if ($result) {
            $row = $result->fetch_assoc();
            if ($row) {
                $capacity = $row['capacity'];
                $updatedcapacity = $row['updatedcapacity'];

                if ($capacity > $updatedcapacity) {
                    $updatedcapacity += $range;
                    $sql2 = "UPDATE trips SET updatedcapacity = '$updatedcapacity' WHERE trip = 'bali'";
                    $con->query($sql2);
                    $tripPrice = 20000;
                    $tripPrice *= $range;
                } else {
                     //echo "Unfortunately, the trip is fully booked";
                    ?>
                    <script>
                    alert("Unfortunately, the trip is fully booked");
                    window.location.href = "trip.html";
            
                    </script>
                    <?php 
        }
            } 
            else {
                echo "Error: No data found for the specified trip";
            }
        }
         else {
            echo "Error executing query: " . $con->error;
        }
    }
    else if ($selectedCountry === 'singapore') {
    
        $sql = "SELECT capacity, updatedcapacity FROM trips WHERE trip = 'singapore'";
        $result = $con->query($sql);
        
        if ($result) {
            $row = $result->fetch_assoc();
            if ($row) {
                $capacity = $row['capacity'];
                $updatedcapacity = $row['updatedcapacity'];

                if ($capacity > $updatedcapacity) {
                    $updatedcapacity += $range;
                    $sql2 = "UPDATE trips SET updatedcapacity = '$updatedcapacity' WHERE trip = 'singapore'";
                    $con->query($sql2);
                    $tripPrice = 30000;
                    $tripPrice *= $range;
                } else {
                     //echo "Unfortunately, the trip is fully booked";
                    ?>
                    <script>
                    alert("Unfortunately, the trip is fully booked");
                    window.location.href = "trip.html";
            
                    </script>
                    <?php 
        }
            } 
            else {
                echo "Error: No data found for the specified trip";
            }
        }
         else {
            echo "Error executing query: " . $con->error;
        }
    }
    else if ($selectedCountry === 'thiland') {
     
        $sql = "SELECT capacity, updatedcapacity FROM trips WHERE trip = 'thiland'";
        $result = $con->query($sql);
        
        if ($result) {
            $row = $result->fetch_assoc();
            if ($row) {
                $capacity = $row['capacity'];
                $updatedcapacity = $row['updatedcapacity'];

                if ($capacity > $updatedcapacity) {
                    $updatedcapacity += $range;
                    $sql2 = "UPDATE trips SET updatedcapacity = '$updatedcapacity' WHERE trip = 'thiland'";
                    $con->query($sql2);
                    $tripPrice = 15999;
                    $tripPrice *= $range;
                } else {
                     //echo "Unfortunately, the trip is fully booked";
                    ?>
                    <script>
                    alert("Unfortunately, the trip is fully booked");
                    window.location.href = "trip.html";
            
                    </script>
                    <?php 
        }
            } 
            else {
                echo "Error: No data found for the specified trip";
            }
        }
         else {
            echo "Error executing query: " . $con->error;
        }
        
    }
    else if ($selectedCountry === 'egypt') {
        
        $sql = "SELECT capacity, updatedcapacity FROM trips WHERE trip = 'egypt'";
        $result = $con->query($sql);
        
        if ($result) {
            $row = $result->fetch_assoc();
            if ($row) {
                $capacity = $row['capacity'];
                $updatedcapacity = $row['updatedcapacity'];

                if ($capacity > $updatedcapacity) {
                    $updatedcapacity += $range;
                    $sql2 = "UPDATE trips SET updatedcapacity = '$updatedcapacity' WHERE trip = 'egypt'";
                    $con->query($sql2);
                    $tripPrice = 18999;
                    $tripPrice *= $range;
                } else {
                     //echo "Unfortunately, the trip is fully booked";
                    ?>
                    <script>
                    alert("Unfortunately, the trip is fully booked");
                    window.location.href = "trip.html";
            
                    </script>
                    <?php 
        }
            } 
            else {
                echo "Error: No data found for the specified trip";
            }
        }
         else {
            echo "Error executing query: " . $con->error;
        }
    }
    else if ($selectedCountry === 'paris') {
       
        $sql = "SELECT capacity, updatedcapacity FROM trips WHERE trip = 'paris'";
        $result = $con->query($sql);
        
        if ($result) {
            $row = $result->fetch_assoc();
            if ($row) {
                $capacity = $row['capacity'];
                $updatedcapacity = $row['updatedcapacity'];

                if ($capacity > $updatedcapacity) {
                    $updatedcapacity += $range;
                    $sql2 = "UPDATE trips SET updatedcapacity = '$updatedcapacity' WHERE trip = 'paris'";
                    $con->query($sql2);
                    $tripPrice = 25000;
                    $tripPrice *= $range;
                } else {
                     //echo "Unfortunately, the trip is fully booked";
                    ?>
                    <script>
                    alert("Unfortunately, the trip is fully booked");
                    window.location.href = "trip.html";
            
                    </script>
                    <?php 
        }
            } 
            else {
                echo "Error: No data found for the specified trip";
            }
        }
         else {
            echo "Error executing query: " . $con->error;
        }
    }
    else if ($selectedCountry === 'germany') {
      
        $sql = "SELECT capacity, updatedcapacity FROM trips WHERE trip = 'germany'";
        $result = $con->query($sql);
        
        if ($result) {
            $row = $result->fetch_assoc();
            if ($row) {
                $capacity = $row['capacity'];
                $updatedcapacity = $row['updatedcapacity'];

                if ($capacity > $updatedcapacity) {
                    $updatedcapacity += $range;
                    $sql2 = "UPDATE trips SET updatedcapacity = '$updatedcapacity' WHERE trip = 'germany'";
                    $con->query($sql2);
                    $tripPrice = 19000;
                    $tripPrice *= $range;
                } else {
                    ?>
                    <script>
                    alert("Unfortunately, the trip is fully booked");
                    window.location.href = "trip.html";
            
                    </script>
                    <?php 
        }
            } 
            else {
                echo "Error: No data found for the specified trip";
            }
        }
         else {
            echo "Error executing query: " . $con->error;
        }
    }

    return $tripPrice;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['selectedCountry'])) {

        $selectedCountry = $_POST['selectedCountry'];

        $range = isset($_POST['customRange1']) ? intval($_POST['customRange1']) : 1;

        if ($range >= 1) {
           
            $tripPrice = calculateTripPrice($con,$selectedCountry, $range);

        } 
    } 
    if (isset($_SESSION['name'])) {
        $username = $_SESSION['name'];
        // ... rest of your code
    } else {
        // handle the case when $_SESSION['name'] is not set
        echo "Username not set in session.";
    }
        $sql = "SELECT email, phoneNo FROM user1 WHERE username = '$username'";
        $result = $con->query($sql);
        
        if ($result) {
            $row = $result->fetch_assoc();
            if ($row) {
                $phoneNo = $row['phoneNo'];
                $email = $row['email'];
            }
        }
            else {
                echo "Error executing query: " . $con->error;
            }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>check out</title>
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

        .card {
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <form action="confirmation.php" method="post">
        <div class="container d-flex align-items-center justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Check Out</h2>
                </div>
                <div class="card-body">
    <br />
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name" value="<?php echo $username; ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="abc@abc.com" value="<?php echo $email; ?>">
    </div>
    <div class="mb-3">
        <label for="phoneNo" class="form-label">Phone Number:</label>
        <input type="tel" class="form-control" name="phoneNo" value="<?php echo $phoneNo; ?>">
    </div>
    <div class="mb-3">
    <label for="payment" class="form-label">Payment method:</label>
    <div class="form-check">
        <input type="radio" class="form-check-input" name="pay" value="delivery" id="deliveryRadio">
        <label class="form-check-label" for="deliveryRadio">Delivery</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" name="pay" value="on-site" id="onSiteRadio">
        <label class="form-check-label" for="onSiteRadio">On-site</label>
    </div>
</div>

<div id="locationInput" class="mb-3" style="display:none;">
    <label for="location" class="form-label">Delivery Location:</label>
    <input type="text" class="form-control" name="location">
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function () {
    $('input[name="pay"]').change(function () {
        if ($(this).val() === 'delivery') {
            $('#locationInput').show();
        } else {
            $('#locationInput').hide();
        }
    });
});
</script>


<input type="hidden" name="selectedCountry" value="<?php echo htmlspecialchars($selectedCountry); ?>">
<input type="hidden" name="range" value="<?php echo htmlspecialchars($range); ?>">
<input type="hidden" name="tripPrice" value="<?php echo htmlspecialchars($tripPrice); ?>">


                    <?php echo "<pre> Trip to " .$selectedCountry." 
Number of travelers: " . $range . " 
Required to pay: " . $tripPrice . "</pre>";

if ($range > 1) {
    echo '<div id="extraInputField">
            <label for="extraField">Traveller(s) name:</label>
            <input type="text" id="extraField" name="extraField">
          </div>';
}?>



                    <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>
