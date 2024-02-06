
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travel Website - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        
        .navbar {
            background-color: #343a40; 
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .container-fluid {
            padding-top: 70px; 
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

    
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <a class="navbar-brand" href="#">YOU TOUR <img src="images\plane.png" width="50px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="intro.html">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/project/admin/">Contact</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="userprofile.php">profile</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>
            </ul>
        </div>
    </nav>

    
    <div class="container-fluid">
        <form action="validation.php" method="post">
            <div class="container d-flex align-items-center justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Login</h2>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="username"
                                    name="username"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    name="password"
                                    required
                                />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Login
                            </button>
                        </form>
                        <p class="text-center mt-3">
                            Don't have an account? <a href="signup.php" class="btn btn-link">Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
