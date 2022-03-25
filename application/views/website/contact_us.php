<!-- star page title section -->
<section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('<?php echo assets_url; ?>website/images/services-bg.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 page-title-large d-flex flex-column justify-content-center text-center">
                        <!-- start sub title -->
                        <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font">Contact Us</span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0">Get in touch with us</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
      
        <!-- start services showcase section -->
     

        <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row">
                    <!-- start contact block -->
                    <div class="col-lg-4 col-md-4 text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="padding-60px-all border-all border-color-medium-gray md-padding-20px-all sm-padding-30px-all">
                         
                            <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase">SPees Hearing Hub Pvt. Ltd.</div>
                            <p>Jalna - Aurangabad Road,<br>Opposite to Nupur Theatre,<br>Near Nx Kothari
                                Showroom, Seven Hills,<br>Aurangabad - Pincode - 431001</p>
                            <p><strong>P:</strong>+91-9697353510, 0240-2351010<br><strong>E:</strong> <a href="mailto:support@speeshearing.com">support@speeshearing.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                    <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn; padding:unset;">
            
                        <?php if($success != ""): ?>
                            <p class="text-success"><?php echo $success; ?></p> 
                        <?php endif; ?>
                        <?php if($error != ""): ?>
                            <p class="text-danger"><?php echo $error; ?></p> 
                        <?php endif; ?>
                        <form method="post" action="">
                        
                            <div class="row">
                                <div class="col-12">
                                    <div id="success-project-contact-form" class="mx-0" style="display: none;"></div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="name" id="name" placeholder="Name *" class="big-input">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="number" name="phone" id="phone" placeholder="Phone" class="big-input">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" name="email" id="email" placeholder="E-mail *" class="big-input">
                                </div>
                            
                                <div class="col-12">
                                    <textarea name="comment" id="comment" placeholder="Comments" rows="6" class="big-textarea"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button name="contact" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top">send message</button>
                                </div>
                            </div>
                        </form>
                        
                    </section>
                    </div>
                    <!-- end contact block -->
                 
                </div>
            </div>
        </section>

        <section class="p-0 one-second-screen md-height-400px wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7504.351645949532!2d75.3534942!3d19.8747963!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bdba33ca28d6317%3A0x2f0338ab625ab251!2sSPees%20Hearing%20Hub%20Pvt%20Ltd%20%2F%20SPees%20Early%20Intervention%20Center%20Seven%20Hills%2C%20Jalna%20-%20Aurangabad%20road%2C%20Near%20kothari%20NX%20opposite%20to%20Nupur%20-%20Mukta%20talkies%20Aurangabad%2C%20Maharashtra%20431001!3m2!1d19.8747963!2d75.3534942!5e0!3m2!1sen!2sin!4v1639856248073!5m2!1sen!2sin"></iframe>
        </section>
        
        

      
      
        <!-- end services showcase section -->
       