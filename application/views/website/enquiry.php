<!-- star page title section -->
<section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('<?php echo assets_url; ?>website/images/services-bg.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 page-title-large d-flex flex-column justify-content-center text-center">
                        <!-- start sub title -->
                        <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font">Our Team</span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0">Team of Experts</h1>
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
                    <div class="col-12 col-md-4 text-center last-paragraph-no-margin md-margin-30px-bottom wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="padding-60px-all border-all border-color-medium-gray md-padding-20px-all sm-padding-30px-all">
                         
                            <div class="text-extra-dark-gray alt-font font-weight-600 text-uppercase">SPees Hearing Hub Pvt. Ltd.</div>
                            <p>Jalna - Aurangabad Road,<br>Opposite to Nupur Theatre,<br>Near Nx Kothari
                                Showroom, Seven Hills,<br>Aurangabad - Pincode - 431001</p>
                            <p><strong>P:</strong>+91-9697353510, 0240-2351010<br><strong>E:</strong> <a href="mailto:support@speeshearing.com">support@speeshearing.com</a></p>
                        </div>
                    </div>
                    <!-- end contact block -->

                    <div class="col-12 col-md-8">
                    <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">Get in touch with us</h5>
                             </div> 
                             
                </div>
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
                        <div class="col-12 col-lg-2"></div>
                        <div class="col-12 col-lg-8">
                            <input type="text" name="name" id="name" placeholder="Name *" class="big-input">
                        </div>
                        <div class="col-12 col-lg-2"></div>
                        <div class="col-12 col-lg-2"></div>
                        <div class="col-12 col-lg-8">
                            <input type="number" name="phone" id="phone" placeholder="Phone" class="big-input">
                        </div>
                        <div class="col-12 col-lg-2"></div>
                        <div class="col-12 col-lg-2"></div>
                        <div class="col-12 col-lg-8">
                            <input type="text" name="email" id="email" placeholder="E-mail *" class="big-input">
                        </div>
                        <div class="col-12 col-lg-2"></div>
                        <div class="col-12 text-center">
                            <button name="contact" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top">send message</button>
                        </div>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </section>
      
      
        <!-- end services showcase section -->
       