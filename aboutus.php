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
        
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              About US 
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Welcome to You Tour, your gateway to extraordinary travel experiences.</strong> 
              At You Tour, we are dedicated to making your travel dreams come true by providing personalized, seamless, and unforgettable journeys around the globe.
            Our commitment to excellence is reflected in every aspect of our services. From meticulous itinerary planning to handpicked accommodations, we prioritize your comfort, satisfaction, and safety.
            Our team of experienced travel enthusiasts is here to ensure that every trip with You Tour is a perfect blend of adventure, relaxation, and cultural discovery.
              At the heart of our ethos is a passion for travel and a belief in its transformative power. We understand that each traveler is unique, and we take pride in tailoring our offerings to suit your individual preferences. Whether you're seeking a thrilling adventure, a romantic getaway, or a cultural immersion, You Tour is your trusted partner in crafting bespoke travel experiences.    
                    </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              OUR STORY
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>You Tour's journey began with a shared love for exploration and a vision to redefine the travel experience</strong>
              Our founders, seasoned travelers themselves, embarked on a mission to curate journeys that go beyond the ordinary. Drawing inspiration from their own adventures, they assembled a team of experts dedicated to unlocking the world's wonders for our clients.
              As a team, we have traversed continents, embraced diverse cultures, and formed lasting connections with communities across the globe. These experiences have not only shaped our understanding of travel but have also become the foundation of our expertise. We believe that the stories we collect along the way are the true treasures of travel.
              Transparency and integrity are the cornerstones of our operations. You Tour is committed to ethical and sustainable travel practices, working closely with local communities to ensure a positive impact on both the environment and the people we encounter. By choosing You Tour, you're not just embarking on a vacation; you're joining a community that values responsible and meaningful travel.
              Join us on a journey of a lifetime with You Tour, where every destination is a new chapter in your story. Let us be your guide as you explore the world, create lasting memories, and discover the magic that travel brings to your life. Your adventure awaits, and at You Tour, we're here to make it extraordinary.
                            
            </div>
          </div>
        </div>
        
      </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>



