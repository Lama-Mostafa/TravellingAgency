<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      background-color: bisque;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around; /* Center cards horizontally with space around */
      margin: 20px; /* Add margin for overall spacing */
    }

    .card {
      width: 18rem;
      padding: 20px;
      margin: 10px; /* Adjust margin for space between cards */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for visual separation */
    }

    .book-btn {
      margin-top: auto;
      padding-top: 10px;
      padding-right: 10px;
    }
  </style>
</head>
<body>
<div id="timestamp"><?php echo "Page last updated: " . date("Y-m-d H:i:s"); ?></div>

  <form>
    <?php
    include 'connect.php';
    include ("navbar.php");
    $sql = "SELECT * FROM category";  
    $result = $con->query($sql);

    if (!$result) {
      die("Query failed: " . $con->error);
    }

    if ($result->num_rows > 0) {
      echo '<div class="card-container">';
      $counter = 0;
     
      while ($row = $result->fetch_assoc()) {
        $country = $row['name'];
        $description = $row['description'];
        $price = $row['status'];
        $imagePath = $row['img_url'];
        $date = $row['Date'];

        // Convert database timestamp to comparable format
        $formattedDatabaseTimestamp = date("Y-m-d ", strtotime($date));

        // Check if the event is in the future or happening now
        if (strtotime($formattedDatabaseTimestamp) > strtotime(date("Y-m-d H:i:s"))) {
          echo '<div class="card col-md-4">
                  <img src="images/' . $imagePath . '" class="card-img-top" alt="...">
                  <div class="card-body">
                    <center><h4 class="card-title">' . $country . '</h4></center>
                    <p class="card-text">' . $description . '</p>
                    <p class="card-text"> trip date: ' . $formattedDatabaseTimestamp . '</p>
                  </div>
                  <div class="book-btn">
                    <a href="booking.php?country=' . strtolower($country) . '" class="btn btn-primary">Book here</a>
                  </div>
                </div>';

          $counter++;
          // Close the row and start a new one after every 3 cards
          if ($counter % 3 === 0) {
            echo '</div><div class="card-container">';
          }
        }
      }
      echo '</div>';
    } else {
      echo "0 results";
    }

    $con->close();
    ?>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
