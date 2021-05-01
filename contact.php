<?php session_start(); 
include_once 'core/admin.php';
$getUser = new User;
if(isset($_POST['send'])){
$getUser->insertUser($_POST);



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/contact.css">
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
                    <li class="nav-item"><a href="aboutus.php">About us</a></li>
                    <li class="nav-item"><a class="dropdown-toggle" href="#" id="mobile-dropdown">Services</a>
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
                    <li class="nav-item active"><a href="contact.php">Contact</a></li>
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
                        <li class="nav-item"><a href="aboutus.php">About us</a></li>
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
                        <li class="nav-item active"><a href="contact.php">Contact</a></li>
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
                    <h2>Contact Us</h2>
                </div>
                <img src="Images/contact us banner.png" alt="">
                
            </div>
        </section>

        <!-- Contact Us -->
        <section class="contact-wrap">
            <div class="container">
                <div class="row pt-3 pb-3">
                    <div class="col-md  pt-5" id="nn">
                        <div class="contact pl-lg-2">
                        <?php if(isset($_SESSION['error'])){
             echo'<div class="alert alert-danger" role="alert">';
             echo $_SESSION['error'];
           echo '</div>';
           unset($_SESSION['error']);

        }?>
         <?php if(isset($_SESSION['success'])){
             echo'<div class="alert alert-success" role="alert">';
             echo $_SESSION['success'];
           echo '</div>';
           unset($_SESSION['success']);

        }?>
        
                            <h3 class="mb-5 contact-head wow animate__animated animate__fadeInDown">Get in Touch By filling out this form</h3>
                            <form action="" method ="post" class="wow animate__animated animate__fadeInLeft">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" id="exampleFormControlInput1" placeholder="John Smith" required>
                                    <?php if(isset($_SESSION['fullname'])){
                              echo'<div class="alert alert-danger" role="alert">';
                            echo $_SESSION['fullname'];
                                   echo '</div>';
                                unset($_SESSION['fullname']);

                      }?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" name="phone_number" id="exampleFormControlInput1" placeholder="08023543311"
                                        required>
                                        <?php if(isset($_SESSION['phone'])){
                                  echo'<div class="alert alert-danger" role="alert">';
                                         echo $_SESSION['phone'];
                                  echo '</div>';
                                     unset($_SESSION['phone']);

        }?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="john.smith@abc.com"
                                        required>
                                        <?php if(isset($_SESSION['email'])){
                                         echo'<div class="alert alert-danger" role="alert">';
                                        echo $_SESSION['email'];
                                         echo '</div>';
                                            unset($_SESSION['email']);

        }?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Type here..."
                                        required></textarea>
                                </div>
                                <button class="btn contact-btn" name="send" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md align-self-center pt-5" id="mm">
                        <div class="contact-img wow animate__animated animate__fadeInRight"><img src="Images/contactus.png" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-logo">
                        <img src="Images/nibram logo.png" alt="">
                    </div>
                </div>
                <div class="col-md footer-contact" >
                    <h5 class="mb-4" style="color: #808080;">CONTACT</h5>
                    <p><i class="fas fa-envelope"></i> hello@nibramcleaningservices.com</p>
                    <p><i class="fas fa-phone-alt"></i> +2348025741187</p>
                    <p><i class="fas fa-map-marker-alt"></i> No 5, Olomowewe Street, Ilaje, Akoka, Bariga, Lagos.</p>
                    <div class="social">
                        <a target="_blank" href="#"><img src="Images/twitter.png" alt=""></a>
                        <a target="_blank" href="#"><img src="Images/facebook.png" alt=""></a>
                        <a target="_blank" href="#"><img src="Images/linkedin.png" alt=""></a>
                        <a target="_blank" href="#"><img src="Images/instagram.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md newsletter-wrap">
                    <h5 class="mb-4" style="color: #808080;">NEWSLETTER</h5>
                    <div class="newsletter">
                        <form action="">
                        <label for="">Subscribe to our newsletters. We don't Bite!</label>
                        <input type="email" placeholder="john.smith@abc.com" required>
                        <button>SUBMIT</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 3rem;">
                <div class="col-md text-center" style="color: #808080; font-size: 15px;">
                    <span>Terms of Services</span>
                    <span>Privacy Policy</span>
                    <span>Security</span>
                </div>
                <div class="col-md text-center" style="color: #808080; font-size: 15px;">
                    <span>Nibram © 2021 All right reserved.</span>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="JS/main.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/jquery3.4.1.js"></script>
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/wow.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>  