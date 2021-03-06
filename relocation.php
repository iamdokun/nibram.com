<<<<<<< HEAD:relocation.php
<?php include_once 'includes/headerServ.php'; ?>
 <?php include_once 'includes/navServ.php'; ?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/CSS/services.css">
    <link rel="stylesheet" href="/CSS/navbar.css">
    <link rel="stylesheet" href="/CSS/footer.css">
    <link rel="stylesheet" href="/bootstrap/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">


    <title>Nibram Cleaning Services</title>
    
</head>
<body>
    <header>
        <div class="mobile-nav-view ">
            <nav class="mobile-nav-wrap container">
                <div class="mobile-logo"><a href="index.php"><img src="/Images/nibram logo.png" alt=""></a></div>
                <ul class="navbar-wrap" id="mobile-nav">
                    <li class="nav-item"><a href="index.php">Home</a></li>
                    <li class="nav-item"><a href="aboutus.php">About us</a></li>
                    <li class="nav-item active"><a class="dropdown-toggle" href="#" id="mobile-dropdown">Services</a>
                        <div class="mobile-sub-menu">
                            <a class="dropdown-item" href="janitor.php">Janitorial Services</a>
                            <a class="dropdown-item" href="genclean.php">General Cleaning</a>
                            <a class="dropdown-item" href="funmigation.php">Fumigation Services</a>
                            <a class="dropdown-item" href="wastemgt.php">Waste Management </a>
                            <a class="dropdown-item" href="relocation.php">Relocation Services</a>
                            <a class="dropdown-item" href="laundry.php">Laundry Services</a>
                          </div>
                    </li>
                    <li class="nav-item"><a href="https://www.instagram.com/nibramcleans/" target="_blank">Media</a></li>
                    <li class="nav-item"><a href="contact.php">Contact</a></li>
                </ul>
                <div class="toggle">
                    <span class="menu-bar" id="menuBar"><i class="fas fa-bars"></i></span>
                    <span class="menu-cancel" id="menuCancel"><i class="fas fa-times"></i></span>
                </div>
            </nav>
        </div>
        <section class="desktop-nav-view-wrap">
            <div class="desktop-nav-view container">
                <div class="logo"><a href="index.php"><img src="/Images/nibram logo.png" alt=""></a></div>
                <nav class="desktop-nav-wrap">
                    <ul>
                        <li class="nav-item"><a href="index.php" class="active">Home</a></li>
                        <li class="nav-item"><a href="aboutus.php">About us</a></li>
                        <li class="nav-item active nav-drop"><a class="dropdown-toggle" id="desktop-dropdown">Services</a>
                            <div class="sub-menu-wrap">
                                <div class="sub-menu" id="desktop-dropdown-wrap">
                                    <a class="dropdown-item" href="janitor.php">Janitorial Services</a>
                                    <a class="dropdown-item" href="genclean.php">General Cleaning</a>
                                    <a class="dropdown-item" href="funmigation.php">Fumigation Services</a>
                                    <a class="dropdown-item" href="wastemgt.php">Waste Management </a>
                                    <a class="dropdown-item" href="relocation.php">Relocation Services</a>
                                    <a class="dropdown-item" href="laundry.php">Laundry Services</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="https://www.instagram.com/nibramcleans/" target="_blank">Media</a></li>
                        <li class="nav-item"><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </section>

    </header>   
>>>>>>> e6d4aa97190cc4787632aceb5358eccc760bd165:relocation.html
    <main>
        <!-- Banner -->
        <section class="banner-wrap">
            <div class="banner">
                <div class="banner-text">
                    <h2>Services</h2>
                </div>
                <img src="Images/about-us-banner.png" alt="">
            </div>
        </section>
        <!-- Vision & Mission -->
        <section class="vision-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md align-self-center" id="nn">
                        <div class="services-wrap wow animate__animated animate__fadeInUp" >
                            <h3>Relocation Services</h3>
                            <p class="text-justify">Moving in or out of a place is the mark of an exciting transition in life, but can be a 
                                very stressful time. There???s so much to take care of, from packing to 
                                decoration and everything in between. One of the biggest pains of moving is 
                                cleaning your space or new house to prepare it for sale or the big move-in day.
                                <br><br>
                                Whether you???re moving into or out of a new home, Nibram Cleaning Services will take 
                                care of the mess for you! Nibram Cleaning offers move-in and move-out residential 
                                cleaning services in Nigeria.
                                <br><br>
                                We believe that a cleaning company should not just simply ???clean??? a home or apartment, but 
                                offer a well-defined, trustworthy service that pays attention to the little details. We will 
                                thoroughly clean your new or old home with this approach to make your moving experience as 
                                smooth and worry-free as possible.
                            </p>
                            <!-- Button trigger modal -->
                            <button class=" wow animate__animated animate__zoomIn animate__delay-2s" data-toggle="modal"
                                data-target="#quote">Request Quote </button>
                            <!-- Modal -->
                            <?php include_once "./includes/modal.php"; ?>
                            <!-- <div class="modal fade" id="quote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Quotation Request</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="quote-form">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="John Smith" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Address</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                                            placeholder="54a, Admiralty Way, Lekki Phase 1, Lagos " required>
                                                        <small id="emailHelp" class="form-text text-muted">Specify the Location/address
                                                            where the
                                                            services will be required</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Phone Number</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="08023456789" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="john.smith@abc.com" required>
                                                    </div>
                    
                                                    <label for="exampleInputEmail1">Select Services</label>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Janitorial</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">General Cleaning</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Fumigation & Pest
                                                            Control</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Waste Management</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Relocation</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Laundry</label>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="exampleFormControlTextarea1">Message <span
                                                                style="font-size: 10px;">(Optional)</span></label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-md" id="mm">
                        <div class="vision-img"><img src="/Images/vision.png" alt=""></div>
                    </div> -->
                
                </div>
            </div>
        </section>
    </main>

    <?php include_once './includes/footer.php';?>