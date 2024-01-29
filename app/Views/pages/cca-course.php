




<div class="bck-nav">
  <div class="container-fluid">
    <div class="homebanner">
      <div class="homebanner-left">
        <h1 class="white heading"><span class="secondary ">Transform</span> your career as a Certified Corporate Accountant.</h1>
        <p class="white">Master industry insights, advanced techniques, and join our dynamic professional community.</p>
        <?php echo form_open('submit-call-request-form', ['enctype' => 'multipart/form-data']); ?>
          <div class="serch-input"><input type="number" placeholder="enter phone number" name="call_number" pattern="[0-9]+" inputmode="numeric" maxlength="10">
          <button class="home" type="submit">Request a call back</button>
        </div>
          <?php echo form_close(); ?>
      </div>
      <div class="home-right gap">
		<?php echo form_open('submit-contact-form', ['enctype' => 'multipart/form-data', 'class' => 'php-email-form']); ?>
          <h1 class="primary"> Enquiry Form </h1><input type="text" placeholder="Enter Full Name" name="name" value="" required>
          <div class="error"></div><input type="email" placeholder="Enter Email Address" name="email" value="" required>
          <div class="error"></div><input type="number" placeholder="Enter Phone Number" name="phone" value="" required>
			<span id="message" style="color: red;"></span>
          <div class="error"></div>
          <div class="form-div">
            <div><svg width="180" height="51" viewBox="0 0 180 51" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.269531" y="0.219727" width="179.63" height="50.719" fill="#00E0D3"/>
<path opacity="0.5" d="M17.5815 27.0921C17.5815 26.1115 17.7562 25.2549 18.1056 24.5223C18.4663 23.7897 18.9509 23.2262 19.5596 22.8317C20.1795 22.4372 20.867 22.24 21.6221 22.24C22.2759 22.24 22.8394 22.3696 23.3128 22.6288C23.7862 22.8881 24.1525 23.2375 24.4117 23.677V22.3583H27.7253V31.8428H24.4117V30.5241C24.1525 30.9636 23.7805 31.313 23.2959 31.5723C22.8225 31.8315 22.2646 31.9611 21.6221 31.9611C20.867 31.9611 20.1795 31.7639 19.5596 31.3694C18.9509 30.9749 18.4663 30.4114 18.1056 29.6788C17.7562 28.9349 17.5815 28.0727 17.5815 27.0921ZM24.4117 27.0921C24.4117 26.4835 24.2426 26.0045 23.9045 25.6551C23.5776 25.3057 23.1719 25.131 22.6872 25.131C22.1913 25.131 21.7799 25.3057 21.4531 25.6551C21.1262 25.9932 20.9628 26.4722 20.9628 27.0921C20.9628 27.7007 21.1262 28.1854 21.4531 28.546C21.7799 28.8954 22.1913 29.0701 22.6872 29.0701C23.1719 29.0701 23.5776 28.8954 23.9045 28.546C24.2426 28.1966 24.4117 27.712 24.4117 27.0921ZM29.0725 27.0921C29.0725 26.1115 29.2472 25.2549 29.5966 24.5223C29.9573 23.7897 30.442 23.2262 31.0506 22.8317C31.6705 22.4372 32.358 22.24 33.1132 22.24C33.7669 22.24 34.3304 22.3696 34.8038 22.6288C35.2772 22.8881 35.6435 23.2375 35.9027 23.677V22.3583H39.2163V31.8428H35.9027V30.5241C35.6435 30.9636 35.2715 31.313 34.7869 31.5723C34.3135 31.8315 33.7556 31.9611 33.1132 31.9611C32.358 31.9611 31.6705 31.7639 31.0506 31.3694C30.442 30.9749 29.9573 30.4114 29.5966 29.6788C29.2472 28.9349 29.0725 28.0727 29.0725 27.0921ZM35.9027 27.0921C35.9027 26.4835 35.7336 26.0045 35.3955 25.6551C35.0687 25.3057 34.6629 25.131 34.1783 25.131C33.6823 25.131 33.2709 25.3057 32.9441 25.6551C32.6172 25.9932 32.4538 26.4722 32.4538 27.0921C32.4538 27.7007 32.6172 28.1854 32.9441 28.546C33.2709 28.8954 33.6823 29.0701 34.1783 29.0701C34.6629 29.0701 35.0687 28.8954 35.3955 28.546C35.7336 28.1966 35.9027 27.712 35.9027 27.0921ZM40.9693 23.1698C41.0144 21.8962 41.4089 20.9213 42.1528 20.245C42.8966 19.5575 43.9336 19.2138 45.2635 19.2138C46.1314 19.2138 46.8696 19.3659 47.4782 19.6702C48.0981 19.9633 48.5659 20.369 48.8815 20.8875C49.1971 21.3947 49.3548 21.9695 49.3548 22.6119C49.3548 23.3783 49.1689 23.9926 48.7969 24.4547C48.425 24.9055 48.0023 25.2099 47.529 25.3677V25.4353C48.8927 25.9425 49.5746 26.9118 49.5746 28.3432C49.5746 29.0532 49.4112 29.6788 49.0843 30.2198C48.7575 30.7608 48.2841 31.1834 47.6642 31.4877C47.0443 31.7921 46.3061 31.9442 45.4495 31.9442C44.0406 31.9442 42.9248 31.6061 42.102 30.9298C41.2905 30.2423 40.8679 29.1941 40.8341 27.7853H44.0632C44.0406 28.2361 44.1364 28.5855 44.3506 28.8334C44.5647 29.0814 44.8859 29.2054 45.3142 29.2054C45.6411 29.2054 45.8947 29.1039 46.075 28.9011C46.2666 28.6982 46.3624 28.4277 46.3624 28.0896C46.3624 27.6613 46.2215 27.3457 45.9398 27.1428C45.6693 26.9399 45.2241 26.8385 44.6042 26.8385H44.0124V24.1504H44.5873C45.0156 24.1617 45.3762 24.094 45.6693 23.9475C45.9736 23.7897 46.1257 23.4798 46.1257 23.0177C46.1257 22.6683 46.0412 22.409 45.8721 22.24C45.7031 22.0596 45.472 21.9695 45.179 21.9695C44.8521 21.9695 44.6098 22.0878 44.452 22.3245C44.3055 22.5499 44.221 22.8317 44.1984 23.1698H40.9693ZM57.0024 23.0346C56.9236 22.6514 56.7939 22.3696 56.6136 22.1893C56.4333 22.0089 56.1684 21.9188 55.819 21.9188C55.2893 21.9188 54.9173 22.1667 54.7032 22.6626C54.5003 23.1586 54.3932 23.9363 54.382 24.9957C54.6074 24.6463 54.9342 24.3702 55.3625 24.1673C55.7908 23.9644 56.2642 23.863 56.7827 23.863C57.8759 23.863 58.7494 24.2011 59.4031 24.8774C60.0681 25.5536 60.4006 26.5229 60.4006 27.7853C60.4006 28.6193 60.2259 29.3519 59.8765 29.9831C59.5384 30.603 59.0425 31.082 58.3888 31.4201C57.7463 31.7582 56.9855 31.9273 56.1064 31.9273C54.3594 31.9273 53.1422 31.3863 52.4546 30.3043C51.7784 29.211 51.4403 27.6669 51.4403 25.672C51.4403 23.4629 51.8009 21.8399 52.5223 20.8029C53.2436 19.766 54.4045 19.2476 56.005 19.2476C57.3011 19.2476 58.2817 19.6139 58.9467 20.3465C59.6229 21.0678 60.0005 21.9638 60.0794 23.0346H57.0024ZM55.9712 26.4328C55.5767 26.4328 55.2498 26.5455 54.9906 26.7709C54.7426 26.9963 54.6187 27.3175 54.6187 27.7345C54.6187 28.1741 54.737 28.5122 54.9737 28.7489C55.2104 28.9856 55.5485 29.1039 55.9881 29.1039C56.3938 29.1039 56.7094 28.9912 56.9348 28.7658C57.1715 28.5291 57.2899 28.1966 57.2899 27.7684C57.2899 27.3513 57.1715 27.0245 56.9348 26.7878C56.7094 26.5511 56.3882 26.4328 55.9712 26.4328ZM65.4685 23.677C65.7278 23.2262 66.0941 22.8768 66.5675 22.6288C67.0408 22.3696 67.5987 22.24 68.2412 22.24C68.9963 22.24 69.6782 22.4372 70.2868 22.8317C70.9067 23.2262 71.3914 23.7897 71.7408 24.5223C72.1015 25.2549 72.2818 26.1115 72.2818 27.0921C72.2818 28.0727 72.1015 28.9349 71.7408 29.6788C71.3914 30.4114 70.9067 30.9749 70.2868 31.3694C69.6782 31.7639 68.9963 31.9611 68.2412 31.9611C67.5987 31.9611 67.0408 31.8371 66.5675 31.5892C66.0941 31.3299 65.7278 30.9749 65.4685 30.5241V31.8428H62.1549V19.3321H65.4685V23.677ZM68.9174 27.0921C68.9174 26.4722 68.7484 25.9932 68.4102 25.6551C68.0834 25.3057 67.6776 25.131 67.193 25.131C66.7083 25.131 66.297 25.3057 65.9588 25.6551C65.632 26.0045 65.4685 26.4835 65.4685 27.0921C65.4685 27.712 65.632 28.1966 65.9588 28.546C66.297 28.8954 66.7083 29.0701 67.193 29.0701C67.6776 29.0701 68.0834 28.8954 68.4102 28.546C68.7484 28.1854 68.9174 27.7007 68.9174 27.0921Z" fill="#22355E"/>
</svg>
</div>
            <div><input type="text" placeholder="Enter Captcha" name="userEnteredCaptcha" value="">
              <div class="error"></div>
            </div>
          </div>
          <div class="checkbox-div"><input type="checkbox" checked=""><span>By Registering up you agree to our Terms Conditions &amp; Privacy Policy</span></div><button type="submit" class="demo">Register Now</button>
           <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>





<div class="bg-number">
  <div class="container">
    <div class="numbers">
      <div class="numbers-wrapper"><img src="image/Learning-Hour.png" alt="">
        <h6 class="primary">250+ </h6><span class="primary">Learning Hour</span>
      </div>
      <div class="numbers-wrapper"><img src="image/Paid-Internship.png" alt="">
        <h6 class="primary">3 Months</h6><span class="primary">Paid Internship</span>
      </div>
      <div class="numbers-wrapper"><img src="image/placement.png" alt="">
        <h6 class="primary">Placement</h6><span class="primary"><b> Support </b> </span>
      </div>
      <div class="numbers-wrapper"><img src="image/Live-session.png" alt="">
        <h6 class="primary">24+</h6><span class="primary">Live session</span>
      </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="trusted-company">
    <h5 class="gray-light">Trusted by 200+ Companies Worldwide</h5>
  </div>
  <div class="trusted-company-wrapper">
  <img src="image/tc1.png" alt="">
  <img src="image/tc2.png" alt="">
  <img src="image/tc3.png" alt="">
  <img src="image/tc4.png" alt="">
  <img src="image/tc5.png" alt="">
  <img src="image/tc6.png" alt="">
  </div>
</div>




<div class="aboutus-bg">
  <div class="container">
    <div class="aboutus">
      <h3 class="primary">About the Certified Corporate Accountant (CCA )</h3>
      <p class="gray-light">Empowering Careers in Finance with SkillMantra's Certified Corporate Accountant Program</p>
    </div>
    <div class="aboutus-box">
      <div class="aboutus-wrapper"><img src="image/cor1.png" alt="">
        <p class="primary para-big">Tailored Learning <br> Experience</p>
      </div>
      <div class="aboutus-wrapper"><img src="image/cor2.png" alt="">
        <p class="primary para-big">Integrated <br> Curriculum</p>
      </div>
      <div class="aboutus-wrapper"><img src="image/cor3.png" alt="">
        <p class="primary para-big">Guided Professional<br> Development</p>
      </div>
    </div>
  </div>
</div>




<div class="container-fluid">
  <div class="certified">
    <h1>Why Certified Corporate Accountant (CCA)?</h1>
  </div>
  <div class="certified-box">
    <div class="certified-wrapper">
      <div class="certified-animate"></div>
	  <img src="image/cca1.png" alt="">
      <h5>Skill Development </h5>
    </div>
    <div class="certified-wrapper">
      <div class="certified-animate"></div>
	  <img src="image/cca2.png" alt="">
      <h5>Tailored for All Levels </h5>
    </div>
    <div class="certified-wrapper">
      <div class="certified-animate"></div>
	    <img src="image/cca3.png" alt="">
      <h5>Hands-On Applications </h5>
    </div>
    <div class="certified-wrapper">
      <div class="certified-animate"></div>
	   <img src="image/cca4.png" alt="">
      <h5> Expert Guidance </h5>
    </div>
    <div class="certified-wrapper">
      <div class="certified-animate"></div> 
	    <img src="image/cca5.png" alt="">
      <h5>Strategic Insights </h5>
    </div>
    <div class="certified-wrapper">
      <div class="certified-animate"></div>
	   <img src="image/cca6.png" alt="">
      <h5>Career Trajectory Enhancement </h5>
    </div>
    <div class="certified-wrapper">
      <div class="certified-animate"></div>
	    <img src="image/cca7.png" alt="">
      <h5>Professional Community </h5>
    </div>
    <div class="certified-wrapper">
      <div class="certified-animate"></div>
	   <img src="image/cca8.png" alt="">
      <h5>Organizational Impact </h5>
    </div>
  </div>
</div>








<div class="addmission-bg">
  <div class="container-fluid">
    <div class="addmission">
      <div class="addmission-left"><img src="image/ad-X39jdj9k.png" alt=""></div>
      <div class="addmission-right">
        <div class="addmission-right-head">
          <h1 class="white">Program Cycle</h1>
          <p class="para-md white">There are 5 simple steps in the Program Cycle which is detailed below:</p>
        </div>
        <div class="addmission-right-content">
          <div class="addmission-right-head-img">
          <img src="image/pc1.png" alt="">
		  </div>
          <div class="addmission-right-head-head">
            <h3 class="white"> Step 1 :&nbsp; <span class="white">Apply and Interview</span>
            </h3>
            <p class="para-md white">Submit your application online with accurate details to initiate the process, followed by a telephonic interview for a quick readiness assessment and course compatibility check conducted by our consultant.</p>
          </div>
        </div>
        <div class="addmission-right-content">
          <div class="addmission-right-head-img">
		   <img src="image/pc2.png" alt="">
 		  </div>
          <div class="addmission-right-head-head">
            <h3 class="white">Step 2 :&nbsp;<span  class="white">Enroll and Certify</span >
            </h3>
            <p class="para-md white">Enroll in the course, complete it, and undergo a comprehensive assessment, including a final test upon course completion</p>
          </div>
        </div>
        <div class="addmission-right-content">
          <div class="addmission-right-head-img">
         <img src="image/pc3.png" alt="">
        </div>
          <div class="addmission-right-head-head">
            <h3 class="white">Step 3 :&nbsp;<span class="white">True CV Interview Preparation</span >
            </h3>
            <p class="para-md white">After the internship, True CV will conduct interview preparation, including a test, and provide a certificate.</p>
          </div>
        </div>
        <div class="addmission-right-content">
          <div class="addmission-right-head-img">
         <img src="image/pc4.png" alt="">
         </div>
          <div class="addmission-right-head-head">
            <h3 class="white">Step 4 :&nbsp;<span  class="white">Internship</span >
            </h3>
            <p class="para-md white">Qualify for a project-based internship with a reputed CA firm. The internship is work-from-home, paid, and includes a test for certification upon completion.</p>
          </div>
        </div>
        <div class="addmission-right-content">
          <div class="addmission-right-head-img">
         <img src="image/pc5.png" alt="">
         </div>
          <div class="addmission-right-head-head">
            <h3 class="white">Step 5 :&nbsp;<span  class="white">Final Placement</span >
            </h3>
            <p class="para-md white">Conclude the process with a final placement, marking the successful culmination of your journey.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<div class="container">
  <div class="social-media platforms">
    <div class="social-media-left">
	<img src="image/one-R0JiGm7j.png" alt="">
	<img src="image/excel-iTezDdv9.png" alt="">
	<img src="image/three-LHETyKRG.png" alt="">
	<img src="image/tally-TqmaqLDu.png" alt="" class="tally">
	</div>
    <div class="social-media-right">
      <h1 class="primary">Tools and <span class="orange">Platform</span></h1>
      <p class="para-large gray-light">Explore a diverse array of cutting-edge platforms and tools tailored to meet your needs.</p>
    </div>
  </div>
</div>











<div class="container-fluid">
  <div class="instructors">
    <h1>Who Can Join Certified Corporate Accounting (CCA)?</h1>
  </div>
  <div class="accountant">
    <div class="accountant-wrapper">
    <img src="image/cca11.png" alt="">
	<h3 class="primary">Accounting Enthusiasts</h3>
      <p class="gray-light-second">For those passionate about accounting, our Certified Corporate Accounting program provides a structured path to expertise.</p>
    </div>
    <div class="accountant-wrapper">
	  <img src="image/cca12.png" alt="">
	<h3 class="primary">Career Changers</h3>
      <p class="gray-light-second">If you're considering a career shift, embrace the opportunity to become a Certified Corporate Accountant and thrive in the finance realm.</p>
    </div>
    <div class="accountant-wrapper">
	  <img src="image/cca13.png" alt="">
	 <h3 class="primary">Recent Graduates</h3>
      <p class="gray-light-second">Ignite your career immediately after graduation by joining our program designed to equip recent graduates with essential corporate accounting skills.</p>
    </div>
    <div class="accountant-wrapper">
  <img src="image/cca14.png" alt="">
	 <h3 class="primary">Diverse Backgrounds</h3>
      <p class="gray-light-second">Open to professionals from varied backgrounds, our program accommodates individuals with non-accounting experiences aspiring to excel in corporate finance.</p>
    </div>
    <div class="accountant-wrapper">
	 <img src="image/cca15.png" alt="">
	 <h3 class="primary">Seasoned Professionals</h3>
      <p class="gray-light-second">Experienced professionals seeking to elevate their expertise in corporate accounting can join our program for advanced insights and career advancement</p>
    </div>
    <div class="accountant-wrapper">
	 <img src="image/cca16.png" alt="">
	 <h3 class="primary">Freelance </h3>
      <p class="gray-light-second">Our Certified Corporate Accounting program is tailored for a diverse community, inviting learners from around the world and nurturing varied perspectives in finance and accounting.</p>
    </div>
  </div>
</div>




<section>
    <div class="testimonial">
      <div class="container-fluid">
	  
	  <div class="testimonials"><h5 class="primary">TESTIMONIALS</h5><h2>See What Our Learners Say About Us</h2></div>
	  
        <div class="testimonial__inner">
          <div class="testimonial-slider">
		  
		  
            <div class="testimonial-slide">
              <div class="testimonial_box">
                <div class="testimonial_box-inner">
                  <div class="testimonial_box-top">
                    <div class="testimonial_box-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial_box-text">
                      <p> Thanks to Skill-Mantra, I landed my dream job with confidence, armed with the practical knowledge gained from their top-notch certification course. </p>
                    </div>
                    
                  <div class="testimoinals-details"> <div class="testimoinals-details-name"><h5> Deeksha Sehrawat </h5></div></div>
                     
                  </div>
                </div>
              </div>
            </div>
			
			
            <div class="testimonial-slide">
              <div class="testimonial_box">
                <div class="testimonial_box-inner">
                  <div class="testimonial_box-top">
                    <div class="testimonial_box-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial_box-text">
                      <p> Skill-Mantra's certification is a game-changer! The engaging format and industry-focused content propelled my career to new heights. </p>
                    </div>
                    
                  <div class="testimoinals-details"> <div class="testimoinals-details-name"><h5> Smriti Handa </h5></div></div>
                     
                  </div>
                </div>
              </div>
            </div>

            <div class="testimonial-slide">
              <div class="testimonial_box">
                <div class="testimonial_box-inner">
                  <div class="testimonial_box-top">
                    <div class="testimonial_box-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial_box-text">
                      <p> Skill-Mantra's online course revolutionized my career; concise, relevant content and interactive learning made acquiring new skills a breeze! </p>
                    </div>
                    
                  <div class="testimoinals-details"> <div class="testimoinals-details-name"><h5>Bhagyashree </h5></div></div>
                     
                  </div>
                </div>
              </div>
            </div>


            <div class="testimonial-slide">
              <div class="testimonial_box">
                <div class="testimonial_box-inner">
                  <div class="testimonial_box-top">
                    <div class="testimonial_box-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial_box-text">
                      <p> Thanks to Skill-Mantra, I landed my dream job with confidence, armed with the practical knowledge gained from their top-notch certification course. </p>
                    </div>
                    
                  <div class="testimoinals-details"> <div class="testimoinals-details-name"><h5> Deeksha Sehrawat </h5></div></div>
                     
                  </div>
                </div>
              </div>
            </div>			
  
            <div class="testimonial-slide">
              <div class="testimonial_box">
                <div class="testimonial_box-inner">
                  <div class="testimonial_box-top">
                    <div class="testimonial_box-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial_box-text">
                      <p> Skill-Mantra's certification is a game-changer! The engaging format and industry-focused content propelled my career to new heights. </p>
                    </div>
                    
                  <div class="testimoinals-details"> <div class="testimoinals-details-name"><h5> Smriti Handa </h5></div></div>
                     
                  </div>
                </div>
              </div>
            </div>
			
         
          </div>
        </div>
      </div>
    </div>
  </section>



   <section>
    <div class="testimonial-1">
     
 
 <div class="testimonials gallery"><h5 class="primary">Frispes gallery</h5><h2 class="primary">Immersive and Beautiful Co-learning Space Gallery</h2></div>
 
 
  <div class="slider slider-nav">
    <div class="galleryimg"> <img src="image/gb-iPo2IcJv.jpeg"></div>
 <div class="galleryimg"> <img src="image/gc-bDJtM3Yj.jpeg"></div>
 <div class="galleryimg"> <img src="image/gd-PHy2bw_u.jpeg"></div>
  <div class="galleryimg"> <img src="image/ga-BrGAMWj1.jpeg"></div>
  </div>
 
</div>
</section>





<div class="container">
  <div class="instructors careeres">
    <h1>Career Impact</h1>
    <p class="gray-light-third">Elevate your trajectory with seamless transitions from internship to full-time roles.</p>
  </div>
  <div class="carrer"><img src="image/career-YE_0OPAU.png" alt="" class="cimage">
</div>
</div>


<div class="bg-certificate">
  <div class="container">
    <div class="certificate">
      <div class="certificate-left">
        <h2 class="orange">Get 3 Industry</h2>
        <h2 class="primary">Recognized Certifications</h2>
        <div class="certificate-left-wrapper">
          <div class="react-tabs" data-rttabs="true">
		  
		  
<ul class="nav nav-tabs  mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="ex1-tab-1" data-bs-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true"> Skill-Mantra </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="ex1-tab-2" data-bs-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">  TrueCV Certification </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="ex1-tab-3" data-bs-toggle="tab" href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-3" aria-selected="false"> Internship Certification </a>
    </li>
</ul>

<div class="tab-content" id="ex1-content">
  <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
              <div class="tab-cert">
                <div>
                  <p>Skill-Mantra, a distinguished education institution, empowers individuals for successful careers in accounting and finance.</p>
                  <p>Renowned for excellence, our Certified Corporate Accountant Program delivers a transformative learning experience with industry-relevant curriculum and a commitment to high educational standards.</p>
                </div>
                <div class="certificate-right"><img src="image/certificate-dwelLRSb.png" alt=""></div>
              </div>
  </div>
  
  
<div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
<div class="tab-cert">
<div>
<p>Skill-Mantra's TrueCV certification isn't just a badge; it's your proof of competence. Polish your professional identity through Skill-Mantra's TrueCV partnership, where interview readiness, CV updates, and a distinguished TrueCV certification converge for an elevated career trajectory.</p>
</div>
<div class="certificate-right">
<img src="image/certb-y1RFsdHb.png" alt="">
</div>
</div>
  </div>
  
  
  <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
<div class="tab-cert">
<div>
<p>Our internship certificates not only validate but also propel your career into a realm of unparalleled recognition and abundant opportunities. Dive deep into hands-on project internships, securing certificates from esteemed CA firms.</p><p>These accolades not only formally recognize your practical expertise but also position you as a standout professional in the fiercely competitive field of corporate accounting.</p>
</div>
<div class="certificate-right">
<img src="image/certc-W00UrJyk.png" alt="">
</div>
</div>
  </div>
  
  
</div>
 </div>
</div>
  </div>
</div>
  </div>
</div>