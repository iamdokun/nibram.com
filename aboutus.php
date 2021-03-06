<?php session_start();
  include 'core/admin.php';
  $admin = new Admin();
  $client = new User();
  if(isset($_POST['submit'])){
  $client->insert_email_for_client_nsletter($_POST);
  }

  if(isset($_POST['request_qoute'])){
    $client->insertClientRequest($_POST);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/aboutus.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="bootstrap/animate.min.css">

    <title>Nibram Cleaning Services</title>
    
</head>
<body>
    <header>
        <div class="mobile-nav-view ">
            <nav class="mobile-nav-wrap container">
                <div class="mobile-logo"><a href="index.php"><img src="Images/nibram logo.png" alt=""></a></div>
                <ul class="navbar-wrap" id="mobile-nav">
                    <li class="nav-item"><a href="index.php">Home</a></li>
                    <li class="nav-item active"><a href="aboutus.php">About us</a></li>
                    <li class="nav-item "><a class="dropdown-toggle" href="#" id="mobile-dropdown">Services</a>
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
                <div class="logo"><a href="index.php"><img src="Images/nibram logo.png" alt=""></a></div>
                <nav class="desktop-nav-wrap">
                    <ul>
                        <li class="nav-item"><a href="index.php" class="active">Home</a></li>
                        <li class="nav-item active"><a href="aboutus.php">About us</a></li>
                        <li class="nav-item nav-drop"><a class="dropdown-toggle" href="#" id="desktop-dropdown">Services</a>
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
    <main>
        <!-- Banner -->
        <section class="banner-wrap">
            <div class="banner">
                <div class="banner-text wow animate__animated animate__fadeInUp">
                    <span>Welcome to Nibram Cleaning Services</span>
                </div>
                <img src="Images/about-us-banner.png" alt="">
                
            </div>
        </section>

        <!-- About Us -->
        <section class="about-wrap">
            <div class="container">
                <div class=" about-us-wrap wow animate__animated animate__fadeInUp">
                    <h2 class="welcome">About Us</h2>
                    <ul class="">
                        <li class="text-justify">At Nibram Cleaning Services, we aspire to be the leading provider of cleaning services posed to render world 
                            class cleaning and customer satisfaction in Nigeria.</li>
                        <li class="text-justify">We truly are aware of the essence of true quality and that it means a whole lot to our 
                            valued customers and of which knowing that Property Maintenance has become a focal point 
                            for sustaining the value of houses and offices and also company owners can then get to 
                            improve their business prospects by keeping a good business environment. </li>
                        <li class="text-justify">Nibram Cleaning Services with the registration number: <span class="registration">RC 2889150</span>; offers a wide range of 
                            CLEANING Services in making life easier for all of our customers. We undertake contracts in 
                            Fumigation (Pest Control) , Professional cleaning of commercial houses, residences and apartments; 
                            janitorial services for organizations or private homes, maintenance cleaning for large or small 
                            offices, special cleanings for move-ins/move-outs for corporate/private individuals, 
                            professional or commercial services for banks, stores, restaurants, Hotels and public areas; 
                            professional office cleanings, Event cleanings, Industrial cleanings, 
                            Post-construction cleanings, house and office maintenance services.</li>
                        <li class="text-justify">We are committed to the highest standard of ethics and integrity, we are also prompt to our customers' 
                            needs ??? meeting  their required target(s); whether its commercial property, residential cleanings, 
                            pre/after event cleanings, or industrial cleanings. Our esteemed clients have been trusting 
                            Nibram Cleaning to provide quality cleaning services on daily, weekly, monthly or one-time basis. 
                            Do trust us to give you the quality cleaning treatment you deserved.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Core Value -->
        <section class="core-value-wrap">
            <div class="container">
                <h2 class="core-head">Core Values</h2>
                <div class="row">
                    <div class="col-md-12 col-lg-6 wow animate__animated animate__fadeInLeft">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="core">
                                    <div class="core-img"><img src="Images/Excellence.png" alt=""></div>
                                    <p>Excellence</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="core">
                                    <div class="core-img"><img src="Images/accountability.png" alt=""></div>
                                    <p>Accountability</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="core">
                                    <div class="core-img"><img src="Images/Integrity.png" alt=""></div>
                                    <p>Integrity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 wow animate__animated animate__fadeInRight">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="core">
                                    <div class="core-img"><img src="Images/Teamwork.png" alt=""></div>
                                    <p>Teamwork</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="core">
                                    <div class="core-img"><img src="Images/professionalism.png" alt=""></div>
                                    <p>Professionalism</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="core">
                                    <div class="core-img"><img src="Images/safety.png" alt=""></div>
                                    <p>Safety</p>
                                </div>
                            </div>
                        </div>
                    </div>
   
                   
                </div>
                
            </div>
        </section>

        <!-- Vision & Mission -->
        <section class="vision-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md align-self-center" id="nn">
                        <div class="vision wow animate__animated animate__fadeInDown" >
                            <h3>Our Vision</h3>
                            <p>To be the most preferred Cleaning Company in Nigeria, providing
                                professional and friendly service.
                            </p>
                        </div>
                    </div>
                    <div class="col-md" id="mm">
                        <div class="vision-img wow animate__animated animate__zoomIn animate__delay-2s"><img src="Images/vision.png" alt=""></div>
                    </div>
                
                    <div class="w-100"></div>
                    <div class="col-md" id="oo">
                        <div class="vision-img wow animate__animated animate__zoomIn animate__delay-2s"><img src="Images/mission.png" alt=""></div>
                    </div>
                    <div class="col-md align-self-center" id="pp">
                        <div class="mission wow animate__animated animate__fadeInUp">
                            <h3>Our Mission</h3>
                            <p>To deliver excellent cleaning services to our clients while achieving our
                                there expectations, taking a pro-active approach in defining their
                                needs with the quality of work, and building mutual relationship
                                possible with honesty, openness at all times and in all aspects.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include_once 'includes/footer.php';?>