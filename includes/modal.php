 
                            <div class="modal fade" id="quote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                                                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input name="name"  type="text" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="John Smith" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Address</label>
                                                        <input name="address" type="text" class="form-control" id="exampleInputPassword1"
                                                            placeholder="54a, Admiralty Way, Lekki Phase 1, Lagos " required>
                                                        <small id="emailHelp" class="form-text text-muted">Specify the Location/address
                                                            where the
                                                            services will be required</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Phone Number</label>
                                                        <input name="phone_number" type="number" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="08023456789" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                                            aria-describedby="emailHelp" placeholder="john.smith@abc.com" required>
                                                    </div>
                    
                                                    <label for="exampleInputEmail1">Select Services</label>
                                                    <?php  $client->getServices();?>
                                                    
                                                 
                                                    <div class="form-group mt-3">
                                                        <label for="exampleFormControlTextarea1">Message <span
                                                                style="font-size: 10px;">(Optional)</span></label>
                                                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <button name="request_qoute" type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                                      
                                    </div>
                                </div>
                            </div>