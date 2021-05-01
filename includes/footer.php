<footer class="footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-logo">
                       
                       
                       <a href='login.php'><img src='Images/nibram logo.png' alt=''></a>
                       
                       
                    </div>
                </div>
                <div class="col-md footer-contact" >
                    <h5 class="mb-4" style="color: #808080;">CONTACT</h5>
                    <p><i class="fas fa-envelope"></i> hello@nibram.com</p>
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
                    <?php if(isset($_SESSION['success'])){
             echo'<div class="alert alert-success" role="alert">';
             echo $_SESSION['success'];
           echo '</div>';
           //unset($_SESSION['success']);
        session_unset();

        }?>
                        <form action="" method="post" id="newsletter-submit">
                            <label for="">Subscribe to our newsletters. We don't Bite!</label>
                            <input type="email" name="email" placeholder="john.smith@abc.com" required id="client-email">
                            <button name="submit"type="submit" >SUBMIT</button>
                            
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
    <script>
        // document.getElementById('newsletter-submit').addEventListener('submit', (e)=> {
        //    let mail =  document.getElementById('client-email').value;
        //        alert(mail.value)
        //     e.preventDefault();
        
        })
    </script>
</body>
</html>