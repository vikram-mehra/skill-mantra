<div class="cbanner">
 <img src="image/cbanner.png" alt="" class="img-fluid"  width="100%">
 </div>


<section id="contact" class="contact">
  <div class="container aos-init aos-animate" data-aos="fade-up">

 
    <div class="row">

      <div class="col-lg-4">

        <div class="info-container d-flex flex-column">
		
		 <h3> Social </h3>
		 
          <div class="info-item d-flex">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <div>
              <p>info@example.com</p>
            </div>
          </div> 

           <div class="info-item d-flex">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <div>
              <p> 001985512-854 </p>
            </div>
          </div> 
		  
           <div class="info-item d-flex">
            <i class="fa fa-location-arrow" aria-hidden="true"></i>
            <div>
              <p> John Smith 123 Main Street Amsterdam, NH 1000 Netherlands</p>
            </div>
          </div> 		  
		  
		  <h4> Social </h4>
		  
           <div class="info-item d-flex">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <div>
              <p>  exampleAcount +-</p>
            </div>
          </div> 	
 
           <div class="info-item d-flex">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <div>
              <p>  exampleAcount +-</p>
            </div>
          </div>  
 
            <div class="info-item d-flex">
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
            <div>
              <p>  exampleAcount +-</p>
            </div>
          </div>  
 
             <div class="info-item d-flex">
            <i class="fa fa-instagram" aria-hidden="true"></i>

            <div>
              <p>  exampleAcount +-</p>
            </div>
          </div>  
 
 
        </div>
      </div>

    <div class="col-lg-8">
    <div class="section-header-1">
      <h2> Get in touch </h2>
      <p> We Will Catch You As Early As We Receive The Message </p>
		<?php include('error.php'); ?>
		<?php echo form_open('submit-contact-form', ['enctype' => 'multipart/form-data', 'class' => 'php-email-form']); ?>

			<div class="row">
				<div class="col-md-6 form-group">
				<input type="text" name="name" class="form-control code-1" id="name" placeholder="Enter Full Name*" required="">
				</div>
				<div class="col-md-6 form-group mt-3 mt-md-0">
				<input type="email" class="form-control code-1" name="email" id="email" placeholder="Enter Email Address*" required="">
				</div>
			</div>
		  
          <div class="form-group mt-3">
            <input type="number" class="form-control code-1" name="phone" id="phone" placeholder="Enter Phone Number*" required="">
            <span id="message" style="color: red;"></span>
          </div>
		  
          <div class="form-group mt-3">
            <input type="text" class="form-control code-1" name="requirement" id="Requirement" placeholder="Select Requirement*" required="">
          </div>	
		  
             <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" style="background:#E9ECEF !important" name="name" class="form-control code-1" id="name" placeholder="a69f1" required="" disabled>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="Captcha" class="form-control code-1" name="Captcha" id="Captcha" placeholder="Enter Captcha" required="">
            </div>
          </div>      
		 
		 
          <!-- <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div> -->
          <div class="text-center"><button type="submit"> Submit </button></div>
                                        <?php echo form_close(); ?>
		    </div>
      </div><!-- End Contact Form -->

    </div>

  </div>
</section>

