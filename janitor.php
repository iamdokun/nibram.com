<?php include_once 'includes/headerServ.php'; ?>
 <?php include_once 'includes/navServ.php'; ?>
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
                        <div class="services-wrap wow animate__animated animate__fadeInUp">
                            <h3>Janitorial Services</h3>
                            <p class="text-justify">Knowing fully well that a clean and hygienic office is a more productive place for your 
                                staff to work and a more pleasant place for client to visit, we will draw up a plan to 
                                cater for your specific requirements and will work at a time that is most convenient for 
                                you, your staff and your clients. We will be keen to meet with you on a regular basis to 
                                discuss our work.
                                <br>
                                <span>Primary Responsibilities</span>
                                <br>
                                
                            </p>
                            <ul>
                                <li>Sweep and mop floors.</li>
                                <li>Clean and keep up various surfaces and material within a building or space</li>
                                <li>Use cleaning solutions to remove stains and clean surfaces.</li>
                                <li>Clean windows, glass partitions, and mirrors, using soapy water or other cleaners, sponges, and squeegees.</li>
                                <li>Clean and disinfects toilets and replenishes supplies such as toilet paper, soap, and paper towels.</li>
                                <li>Responds to urgent situations, such as spills, that require quick action</li>
                                <li>Collects and removes trash from a building or space</li>
                            </ul>
                            <!-- Button trigger modal -->
                            <button class=" wow animate__animated animate__zoomIn animate__delay-2s" data-toggle="modal"
                                data-target="#quote">Request Quote </button>
                            <!-- Modal -->
                            <?php include_once "includes/modal.php"; ?>
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

    <?php include_once 'includes/footer.php';?>