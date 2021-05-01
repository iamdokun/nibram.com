<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/CSS/navbar.css">

    <title>Nibram Cleaning Services</title>
    
</head>
<body><?php 
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
   
   ?>
    <header>
        <div class="mobile-nav-view container">
            <nav class="mobile-nav-wrap">
                <div class="mobile-logo"><img src="/Images/nibram logo.png" alt=""></div>
                <ul class="navbar-wrap" id="mobile-nav">
                    <li class="nav-item active"><a href="index.html">Home</a></li>
                    <li class="nav-item"><a href="aboutus.html">About us</a></li>
                    <li class="nav-item"><a class="dropdown-toggle" href="#" id="mobile-dropdown">Services</a>
                        <div class="mobile-sub-menu">
                            <a class="dropdown-item" href="#">Janitorial Services</a>
                            <a class="dropdown-item" href="#">General Cleaning</a>
                            <a class="dropdown-item" href="#">Fumigation Services</a>
                            <a class="dropdown-item" href="#">Waste Management </a>
                            <a class="dropdown-item" href="#">Relocation Services</a>
                            <a class="dropdown-item" href="#">Laundry Services</a>
                          </div>
                    </li>
                    <li class="nav-item"><a href="#">Media</a></li>
                    <li class="nav-item"><a href="contact.html">Contact</a></li>
                </ul>
                <div class="toggle">
                    <span class="menu-bar" id="menuBar"><i class="fas fa-bars"></i></span>
                    <span class="menu-cancel" id="menuCancel"><i class="fas fa-times"></i></span>
                </div>
            </nav>
        </div>
        <section class="desktop-nav-view-wrap">
            <div class="desktop-nav-view container">
                <div class="logo"><img src="/Images/nibram logo.png" alt=""></div>
                <nav class="desktop-nav-wrap">
                    <ul>
                        <li class="nav-item active"><a href="index.html" class="active">Home</a></li>
                        <li class="nav-item"><a href="aboutus.html">About us</a></li>
                        <li class="nav-item" id="desktop-dropdown"><a class="dropdown-toggle" href="#" >Services</a>
                            <div class="sub-menu-wrap">
                                <div class="sub-menu" id="desktop-dropdown-wrap">
                                    <a class="dropdown-item" href="#">Janitorial Services</a>
                                    <a class="dropdown-item" href="#">General Cleaning</a>
                                    <a class="dropdown-item" href="#">Fumigation Services</a>
                                    <a class="dropdown-item" href="#">Waste Management </a>
                                    <a class="dropdown-item" href="#">Relocation Services</a>
                                    <a class="dropdown-item" href="#">Laundry Services</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#">Media</a></li>
                        <li class="nav-item"><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </section>

    </header>
    <script src="/JS/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>