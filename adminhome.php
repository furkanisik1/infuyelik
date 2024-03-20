<?php
session_start();
if(!isset($_SESSION['adminmaile'])){
    header("Location: adminlogin.php");
    exit();
}
include("connection.php");

$query = "SELECT * FROM userrequest";
$result = mysqli_query($connection, $query);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Influenza Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3W9z9IocH1z2b8T6lQDfMf5/UTct0/+" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <link href="css/templatemo-pod-talk.css" rel="stylesheet">
    <style>
        .hero-section {
            margin-top: 60px;
            padding-top: 10px;
        }

        .topics-section {
            margin-top: 30px;
            padding-top: 10px;
        }

        .gradient-custom {
            background: #f093fb;
            background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));
            background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-section h2 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            color: whitesmoke;
        }

        .section-title h3 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            color: whitesmoke;
        }

        .hero-section p {
            font-size: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .badge {
            font-size: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

  

        .custom-block-image {
            width: 100%;
            height: 200px;
        }

        .custom-block-overlay-info {
            color: #ffffff;
        }

            .custom-block-overlay-info h5 a {
                color: #ffffff;
            }

        .site-footer {
            margin-top: 30px;
            padding-top: 30px;
        }
    </style>

</head>

<body>

    <main>
        <section class="gradient-custom">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand me-lg-5 me-0" href="index.html">
                        <img src="http://localhost/infuyelik/influenza.jpeg" class="logo-image img-fluid" style="width: 10%; height: 10%;">
                    </a>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="http://localhost/infuyelik/index.html">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="http://localhost/infuyelik/about.html">About</a>
                            </li>

                            <li class="nav-item dropdown">

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item text-white" href="listing-page.html">Listing Page</a></li>

                                    <li><a class="dropdown-item text-white" href="detail-page.html">Detail Page</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="http://localhost/infuyelik/contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="hero-section">
                <div class="container">
                <div class="card text-center">
  <div class="card-header">
    <h3> Admin Home <h3>
  </div>
  <div class="card-body">
    <h5 class="card-title">Request Page</h5>
    <p class="card-text text-dark">Viev the client reqests.</p>
    <a href="adminrequest.php" class="btn btn-secondary">Lets Go</a>
  </div>

</div>
<div class="card text-center">

  <div class="card-body">
    <h5 class="card-title">Matching System</h5>
    <p class="card-text text-dark">Match Client and Influencer.</p>
    <a href="match.php" class="btn btn-secondary">Lets Go</a>
  </div>

</div>
<div class="card text-center">

  <div class="card-body">
    <h5 class="card-title">Client Deletion</h5>
    <p class="card-text text-dark">Delete our clients.</p>
    <a href="deletionc.php" class="btn btn-secondary">Lets Go</a>
  </div>

</div>
<div class="card text-center">

  <div class="card-body">
    <h5 class="card-title">Influencer Deletion</h5>
    <p class="card-text text-dark">Delete our influencers.</p>
    <a href="deletioni.php" class="btn btn-secondary">Lets Go</a>
  </div>
  <div class="card-footer text-muted">
    Influenza
  </div>
</div>
                          <footer class="text-center text-lg-start text-white">         
                <section class="d-flex justify-content-between p-4">                  
                    <div class="me-5">
                        <span>Get connected with us on social networks:</span>
                    </div>           
                    <div>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="text-white me-4">
                            <i class="fab fa-instagram"></i>
                        </a>
 
                    </div>
                  
                </section>
       
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                       
                        <div class="row mt-3">
                           
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                               
                                <h6 class="text-uppercase fw-bold">Influenza</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; height: 2px" />
                                <p class="display-5">
                                    Leader in the social media industry by providing our clients with cutting-edge solutions that reflect their brand identity and meet their communication goals
                                </p>
                            </div>
   
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                               
                                <h6 class="text-uppercase fw-bold">Products</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; height: 2px" />
                                <p>
                                    <a href="#!" class="text-white">Reels</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Post</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Story</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-white">Tweet</a>
                                </p>
                            </div>

                      
                     
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                         
                                <h6 class="text-uppercase fw-bold">Contact</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p><i class="fas fa-home mr-3"></i> Istanbul, TR</p>
                                <p><i class="fas fa-envelope mr-3"></i> info@influenza.com</p>
                                <p><i class="fas fa-phone mr-3"></i> + 90 212 240 88 34</p>
                                <p><i class="fas fa-print mr-3"></i> + 90 212 620 89 42</p>
                            </div>
                           
                        </div>
                      
                    </div>
                </section>
          
                <div class="text-center p-3"
                     style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2023 Copyright:
                    <a class="text-white">Influenza</a>
                </div>
             
            </footer>
            </section>
    </main>
</body>
