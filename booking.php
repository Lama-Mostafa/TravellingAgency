<?php
include ("navbar.php");
if (isset($_GET['country'])) {
    $selectedCountry = $_GET['country'];

    if ($selectedCountry === "bali") {
        ?>
        <html>
        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                  crossorigin="anonymous">
            <style>
                #carouselExampleControls {
                    max-width: 600px;
                    margin: auto;
                }

                #carouselExampleControls .carousel-inner .carousel-item img {
                    max-height: auto;
                    width: auto;
                    object-fit: cover;
                }

                .card-section {
                    max-width: 600px;
                    margin: auto;
                }
                body
                {
                    background-color: lavenderblush;
                }
                .form-range {
                    width: 200px; 
                }
            </style>
             <script>
       document.addEventListener('DOMContentLoaded', function () {
    var rangeInput = document.getElementById('customRange1');
    var selectedCountryInput = document.getElementsByName('selectedCountry')[0];

    rangeInput.addEventListener('input', function () {
        document.getElementById('rangeValue').textContent = this.value;
    });

    rangeInput.form.addEventListener('submit', function () {
        selectedCountryInput.value = 'bali';
    });
});

    </script>
        </head>
        <body>
            <form action = "checkout.php"  method="post">

            <input type="hidden" name="selectedCountry" value="bali">
           


        <div class="container">
            <div class="row">
                <div class="col-md-6 card-section">
                    <div class="card">
                        <div class="card-body">
                         <h2>   <center> Trip to bali cost 20000 </center> </h2>
                            <br/>
                            <h5> the trip includes </h5>
                            <ul>
                                <li> Day 1
                                    <ol>
                                        <li> Visit the Sacred Monkey Forest Sanctuary in Ubud. </li>
                                        <li> Afternoon visit to Tegallalang Rice Terraces.</li>
                                        <li> Dinner in Ubud.</li>
                                    </ol>
                                </li>
                                <li> Day 2
                                    <ol>
                                        <li> Visit Taman Ayun Temple. </li>
                                        <li> Explore the famous Tanah Lot Temple during sunset. </li>
                                        <li> Dinner with a view of the ocean.</li>
                                    </ol>
                                </li>
                                <li> Day 3
                                    <ol> <li> Take a boat to Nusa Penida Island.</li>
                                    <li> Visit Kelingking Beach, Angel's Billabong, and Broken Beach.</li>
                                    <li> yoga session.</li>
                                </li>
                            </ul>
                        </div>
                        <div class="range-section">
                                <label for="customRange1" class="form-label">Number of travelers max is 5</label>
                                <input type="range" class="form-range" id="customRange1" name="customRange1" min='1' max='5' step="1" oninput="document.getElementById('rangeValue').textContent = this.value">

                                       <span id="rangeValue">3</span>
                            </div>                  
                             <button type="submit" class="btn btn-primary">check out</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images\bali1.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images\bali2.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images\bali3.jpeg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                crossorigin="anonymous"></script>
                </form>
        </body>
        </html>
        <?php
    }

        else if ($selectedCountry === "singapore") {
            ?>
            <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">
                <style>
                    #carouselExampleControls {
                        max-width: 600px;
                        margin: auto;
                    }

                    #carouselExampleControls .carousel-inner .carousel-item img {
                        max-height: auto;
                        width: auto;
                        object-fit: cover;
                    }

                    .card-section {
                        max-width: 600px;
                        margin: auto;
                    }
                    body
                    {
                        background-color: lavenderblush;
                    }
                    .form-range {
                        width: 200px; 
                    }
                </style>
            </head>
            <body>
            <form action = "checkout.php"  method="post">

            <input type="hidden" name="selectedCountry" value="singapore">
            <script>
       document.addEventListener('DOMContentLoaded', function () {
    var rangeInput = document.getElementById('customRange1');
    var selectedCountryInput = document.getElementsByName('selectedCountry')[1];

    rangeInput.addEventListener('input', function () {
        document.getElementById('rangeValue').textContent = this.value;
    });

    rangeInput.form.addEventListener('submit', function () {
        selectedCountryInput.value = 'singapore';
    });
});

    </script>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 card-section">
                        <div class="card">
                            <div class="card-body">
                            <h2>   <center> Trip to Singapore cost 30000 </center> </h2>
                                <br/>
                                <h5> the trip includes </h5>
                                <ul>
                                    <li> Day 1
                                        <ol>
                                            <li> Visit Marina Bay Sands and explore the SkyPark. </li>
                                            <li> Explore the ArtScience Museum.</li>
                                            <li> Evening stroll along Clarke Quay and dinner in the area..</li>
                                        </ol>
                                    </li>
                                    <li> Day 2
                                        <ol>
                                            <li> Full day at Sentosa Island. </li>
                                            <li> Visit Universal Studios Singapore. </li>
                                            <li> Evening visit to the Wings of Time show and dinner in the area.</li>
                                        </ol>
                                    </li>
                                    <li> Day 3
                                        <ol> <li>Explore Little India, visit Sri Veeramakaliamman Temple..</li>
                                        <li> Explore Orchard Road for shopping and entertainment.</li>
                                        <li> Dinner at a restaurant on Orchard Road..</li>
                                    </li>
                                </ul>
                            </div>
                            <div class="range-section">
                                    <label for="customRange1" class="form-label">Number of travelers max is 5</label>
                                    <input type="range" class="form-range" id="customRange1" name="customRange1" min='1' max='5' step="1" oninput="document.getElementById('rangeValue').textContent = this.value">

                                        <span id="rangeValue">3</span>
                                </div>                  
                                <button type="submit" class="btn btn-primary">check out</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images\singapore1.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\singapore2.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\singapore3.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                    crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></script>
                    </form>
            </body>
            </html>
            <?php
        }
        else if ($selectedCountry === "thiland") {
            ?>
            <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">
                <style>
                    #carouselExampleControls {
                        max-width: 600px;
                        margin: auto;
                    }

                    #carouselExampleControls .carousel-inner .carousel-item img {
                        max-height: auto;
                        width: auto;
                        object-fit: cover;
                    }

                    .card-section {
                        max-width: 600px;
                        margin: auto;
                    }
                    body
                    {
                        background-color: lavenderblush;
                    }
                    .form-range {
                        width: 200px; 
                    }
                </style>
            </head>
            <body>
            <form action = "checkout.php"  method="post">

            <input type="hidden" name="selectedCountry" value="thiland">
            <script>
     document.addEventListener('DOMContentLoaded', function () {
    var rangeInput = document.getElementById('customRange1');
    var selectedCountryInput = document.getElementsByName('selectedCountry')[2];

    rangeInput.addEventListener('input', function () {
        document.getElementById('rangeValue').textContent = this.value;
    });

    rangeInput.form.addEventListener('submit', function () {
        selectedCountryInput.value = 'thiland';
    });
});

    </script>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 card-section">
                        <div class="card">
                            <div class="card-body">
                            <h2>   <center> Trip to thiland cost 15999 </center> </h2>
                                <br/>
                                <h5> the trip includes </h5>
                                <ul>
                                    <li> Day 1
                                        <ol>
                                            <li> Visit the Grand Palace and Wat Phra Kaew. </li>
                                            <li> Explore Wat Arun.</li>
                                            <li> Evening stroll through Asiatique the Riverfront for shopping and dining.</li>
                                        </ol>
                                    </li>
                                    <li> Day 2
                                        <ol>
                                            <li> Visit Wat Pho and the Reclining Buddha. </li>
                                            <li> Explore Jim Thompson House. </li>
                                            <li> Evening explore the nightlife on Khao San Road or enjoy a traditional Thai dinner and cultural show.</li>
                                        </ol>
                                    </li>
                                    <li> Day 3
                                        <ol> <li>Take a day trip to the historical city of Ayutthaya.</li>
                                        <li> Explore the ancient temples and historical sites.</li>
                                        <li> Visit an elephant sanctuary for a responsible interaction with elephants.</li>
                                    </li>
                                </ul>
                            </div>
                            <div class="range-section">
                                    <label for="customRange1" class="form-label">Number of travelers max is 5</label>
                                    <input type="range" class="form-range" id="customRange1" name="customRange1" min='1' max='5' step="1" oninput="document.getElementById('rangeValue').textContent = this.value">

                                        <span id="rangeValue">3</span>
                                </div>                  
                                <button type="submit" class="btn btn-primary">check out</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images\thiland1.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\thiland2.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\thiland3.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                    crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></script>
                    </form>
            </body>
            </html>
            <?php
        }
    
        else if ($selectedCountry === "egypt") {
            ?>
            <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">
                <style>
                    #carouselExampleControls {
                        max-width: 600px;
                        margin: auto;
                    }

                    #carouselExampleControls .carousel-inner .carousel-item img {
                        max-height: auto;
                        width: auto;
                        object-fit: cover;
                    }

                    .card-section {
                        max-width: 600px;
                        margin: auto;
                    }
                    body
                    {
                        background-color: lavenderblush;
                    }
                    .form-range {
                        width: 200px; 
                    }
                </style>
            </head>
            <body>
            <form action = "checkout.php"  method="post">

            <input type="hidden" name="selectedCountry" value="egypt">
            <script>
      document.addEventListener('DOMContentLoaded', function () {
    var rangeInput = document.getElementById('customRange1');
    var selectedCountryInput = document.getElementsByName('selectedCountry')[3];

    rangeInput.addEventListener('input', function () {
        document.getElementById('rangeValue').textContent = this.value;
    });

    rangeInput.form.addEventListener('submit', function () {
        selectedCountryInput.value = 'egypt';
    });
});

    </script>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 card-section">
                        <div class="card">
                            <div class="card-body">
                            <h2>   <center> Trip to Egypt cost 18999 </center> </h2>
                                <br/>
                                <h5> the trip includes </h5>
                                <ul>
                                    <li> Day 1
                                        <ol>
                                            <li> Visit the Giza Plateau to see the Pyramids of Giza and the Sphinx. </li>
                                            <li> Explore the Solar Boat Museum.</li>
                                            <li> Visit the grand Egyptian Museum.</li>
                                        </ol>
                                    </li>
                                    <li> Day 2
                                        <ol>
                                            <li> Visit the Karnak Temple and Luxor Temple. </li>
                                            <li> Evening stroll along the Corniche by the Nile. </li>
                                            <li> dinner at a local restaurant</li>
                                        </ol>
                                    </li>
                                    <li> Day 3
                                        <ol> <li>Take a felucca ride on the Nile.</li>
                                        <li> shopping at mouez street.</li>
                                        <li> dinner at mouez</li>
                                    </li>
                                </ul>
                            </div>
                            <div class="range-section">
                                    <label for="customRange1" class="form-label">Number of travelers max is 5</label>
                                    <input type="range" class="form-range" id="customRange1" name="customRange1" min='1' max='5' step="1" oninput="document.getElementById('rangeValue').textContent = this.value">

                                        <span id="rangeValue">3</span>
                                </div>                  
                                <button type="submit" class="btn btn-primary">check out</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images\egypt1.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\egypt4.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\egypt2.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                    crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></script>
                    </form>
            </body>
            </html>
            <?php
        }
        else if ($selectedCountry === "paris") {
            ?>
            <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">
                <style>
                    #carouselExampleControls {
                        max-width: 600px;
                        margin: auto;
                    }

                    #carouselExampleControls .carousel-inner .carousel-item img {
                        max-height: auto;
                        width: auto;
                        object-fit: cover;
                    }

                    .card-section {
                        max-width: 600px;
                        margin: auto;
                    }
                    body
                    {
                        background-color: lavenderblush;
                    }
                    .form-range {
                        width: 200px; 
                    }
                </style>
            </head>
            <body>
            <form action = "checkout.php"  method="post">

            <input type="hidden" name="selectedCountry" value="paris">
            <script>
        document.addEventListener('DOMContentLoaded', function () {
    var rangeInput = document.getElementById('customRange1');
    var selectedCountryInput = document.getElementsByName('selectedCountry')[4];

    rangeInput.addEventListener('input', function () {
        document.getElementById('rangeValue').textContent = this.value;
    });

    rangeInput.form.addEventListener('submit', function () {
        selectedCountryInput.value = 'paris';
    });
});

    </script>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 card-section">
                        <div class="card">
                            <div class="card-body">
                            <h2>   <center> Trip to paris cost 25000 </center> </h2>
                                <br/>
                                <h5> the trip includes </h5>
                                <ul>
                                    <li> Day 1
                                        <ol>
                                            <li> Morning visit to the Eiffel Tower. Consider taking the elevator to the top for panoramic views. </li>
                                            <li> Picnic at Champ de Mars, the park surrounding the Eiffel Tower.</li>
                                            <li> Afternoon visit to the Louvre Museum to see the Mona Lisa and other masterpieces.</li>
                                        </ol>
                                    </li>
                                    <li> Day 2
                                        <ol>
                                            <li> Morning exploration of Montmartre, including the Place du Tertre and artists' studios. </li>
                                            <li> Visit the Basilique du Sacré-Cœur for breathtaking views of the city.</li>
                                            <li> Evening at a cabaret show, such as the famous Moulin Rouge.</li>
                                        </ol>
                                    </li>
                                    <li> Day 3
                                        <ol> <li>Explore Notre-Dame Cathedral.</li>
                                        <li> Afternoon on Île Saint-Louis for ice cream from Berthillon.</li>
                                        <li> Evening cruise on the Seine River.</li>
                                    </li>
                                </ul>
                            </div>
                            <div class="range-section">
                                    <label for="customRange1" class="form-label">Number of travelers max is 5</label>
                                    <input type="range" class="form-range" id="customRange1" name="customRange1" min='1' max='5' step="1" oninput="document.getElementById('rangeValue').textContent = this.value">

                                        <span id="rangeValue">3</span>
                                </div>                  
                                <button type="submit" class="btn btn-primary">check out</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images\paris1.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\paris3.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\paris2.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                    crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></script>
                    </form>
            </body>
            </html>
            <?php
        }
        else if ($selectedCountry === "germany") {
            ?>
            <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">
                <style>
                    #carouselExampleControls {
                        max-width: 600px;
                        margin: auto;
                    }

                    #carouselExampleControls .carousel-inner .carousel-item img {
                        max-height: auto;
                        width: auto;
                        object-fit: cover;
                    }

                    .card-section {
                        max-width: 600px;
                        margin: auto;
                    }
                    body
                    {
                        background-color: lavenderblush;
                    }
                    .form-range {
                        width: 200px; 
                    }
                </style>
            </head>
            <body>
            <form action = "checkout.php"  method="post">

            <input type="hidden" name="selectedCountry" value="germany">
            <script>
     document.addEventListener('DOMContentLoaded', function () {
    var rangeInput = document.getElementById('customRange1');
    var selectedCountryInput = document.getElementsByName('selectedCountry')[5];

    rangeInput.addEventListener('input', function () {
        document.getElementById('rangeValue').textContent = this.value;
    });

    rangeInput.form.addEventListener('submit', function () {
        selectedCountryInput.value = 'germany';
    });
});

    </script>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 card-section">
                        <div class="card">
                            <div class="card-body">
                            <h2>   <center> Trip to Germany cost 19000 </center> </h2>
                                <br/>
                                <h5> the trip includes </h5>
                                <ul>
                                    <li> Day 1
                                        <ol>
                                            <li> Morning visit to the Brandenburg Gate and Pariser Platz. </li>
                                            <li> Explore the Reichstag Building and its glass dome..</li>
                                            <li> Evening at Potsdamer Platz for dining and entertainment.</li>
                                        </ol>
                                    </li>
                                    <li> Day 2
                                        <ol>
                                            <li> Morning visit to Museum Island, home to several world-class museums. </li>
                                            <li> Lunch in the historic district.</li>
                                            <li> Evening explore the nightlife in the Kreuzberg district.</li>
                                        </ol>
                                    </li>
                                    <li> Day 3
                                        <ol> <li>Visit Sanssouci Palace and its beautiful gardens.</li>
                                        <li> Explore the Old Town and visit the Hauptmarkt.</li>
                                        <li> Visit the Town Hall and St. James's Church.</li>
                                    </li>
                                </ul>
                            </div>
                            <div class="range-section">
                                    <label for="customRange1" class="form-label">Number of travelers max is 5</label>
                                    <input type="range" class="form-range" id="customRange1" name="customRange1" min='1' max='5' step="1" oninput="document.getElementById('rangeValue').textContent = this.value">

                                        <span id="rangeValue">3</span>
                                </div>                  
                                <button type="submit" class="btn btn-primary">check out</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images\germany2.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\germany3.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images\germany1.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                    crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></script>
                </form>
            </body>
            </html>
            <?php
        }
}
/*if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_COOKIE['userBooked'])) {
    // check if the cookie 'userBooked' is set to 1, meaning the user already made a booking
    if ($_COOKIE['userBooked'] == 1) {
        // set a message for the user to inform them about their previous booking
        $_SESSION['message'] = 'You have already made a booking previously.';
    }
}

if (isset($_POST['submit'])) {
    // the user has just made a booking, set a cookie to remember this user made a booking
    setcookie('userBooked', 1, time() + (86400 * 30), '/'); // 86400 = 1 day, so this cookie will expire in 30 days
    header('Location: success.php'); // redirect the user to the success page
    exit();
}
*/
        ?>
