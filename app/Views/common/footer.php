


<div class="footer-bg">
  <div class="container-fluid mt-5">
    <div class="footer">
      <div class="footer-wrapper">
	  <div class="row">
	  <div class="col-md-2">
        <div class="footer-left">
          <div class="footer-left-top"><img src="image/flogo.png" alt="">
            <h3>Skill Mantra</h3>
          </div>
          <p class="para-xs white"> SkillMantra's Executive Track propels individuals from basic accounting to strategic insights, empowering holistic career growth in the dynamic intersection of finance and HR. </p>
        </div>
		</div>
		
       <div class="col-md-2">
	   <div class="company-f">
        <h5> Company </h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> About Us </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> Workshop </a></li>
          <li class="nav-item mb-2"><a href="#media" class="nav-link p-0 text-muted"> Media / Gallery </a></li>
          <li class="nav-item mb-2"><a href="#award" class="nav-link p-0 text-muted"> Award & Recognition </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> Blog </a></li>
		  <li class="nav-item mb-2"><a href="#faq" class="nav-link p-0 text-muted"> FAQ </a></li>
        </ul>
      </div>	
    </div>	  

       <div class="col-md-2">
        <h5> Courses </h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://skillmantra.in/course.html#CCACourse" class="nav-link p-0 text-muted"> CCA Course </a></li>
          <li class="nav-item mb-2"><a href="https://skillmantra.in/course.html#HRPayrollProgram" class="nav-link p-0 text-muted"> HR Payroll Program </a></li>
          <li class="nav-item mb-2"><a href="https://skillmantra.in/course.html#HRGeneralist" class="nav-link p-0 text-muted"> HR Generalist </a></li>
          <li class="nav-item mb-2"><a href="https://skillmantra.in/course.html#TDS Course" class="nav-link p-0 text-muted"> TDS Course </a></li>
          <li class="nav-item mb-2"><a href="https://skillmantra.in/course.html#GSTCourse" class="nav-link p-0 text-muted"> GST Course </a></li>
		  <li class="nav-item mb-2"><a href="https://skillmantra.in/course.html#FinancialModelling" class="nav-link p-0 text-muted"> Financial Modelling </a></li>
		  <li class="nav-item mb-2"><a href="https://skillmantra.in/course.html#Tally" class="nav-link p-0 text-muted"> Tally (Basic to Advance) </a></li>
		   <li class="nav-item mb-2"><a href="https://skillmantra.in/course.html#AccountingAccountants" class="nav-link p-0 text-muted"> Accounting for Accountants </a></li>
		    <li class="nav-item mb-2"><a href="https://skillmantra.in/course.html#OfficeAutomation" class="nav-link p-0 text-muted"> Office Automation </a></li>
        </ul>
      </div>

       <div class="col-md-2">
        <h5> Useful Links </h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> Skill-Mantra Social </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> Skill-Mantra college </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> Skill-Mantra Business   </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> Hire With Us </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> Train with us  </a></li>
 
        </ul>
      </div>

	  
       <div class="col-md-4">	
        <div class="footer-right">
		<?php echo form_open('submit-call-request-form', ['enctype' => 'multipart/form-data', 'class' => 'footer-right-top']); ?>
            <input type="text" placeholder="Enter Phone Number" name="call_number" inputmode="numeric" maxlength="10" value="">
			<button type="submit" class="request">Request a Call Back</button>
                                        <?php echo form_close(); ?>
          <p class="para-sm white">A-45, 2nd Floor Sector 2, Near Metro Station Sector 15, Noida - 201301</p>
        </div>
		</div>
		
		</div>
		
      </div>
	  
	  
	  
      <div class="footer-bottom">
        <div class="footer-bottom-wrapper">
		<a class="para-sm white second-p" href="privacypolicy.html">Privacy Policy</a>
		<a class="para-sm white second-p" href="termscondition.html">Terms &amp; Conditions</a>
		</div>
        <div class="footer-bottom-reserved d-flex flex-wrap justify-content-between align-items-center" >
		<p class="col-md-4 mb-0 text-muted"> </p>		
          <p class="col-md-4 white">© 2022 Skill Mantra | All rights reserved</p>
		  <div class="col-md-4 social-media">
		  <ul>
		   <li> <a href="https://www.facebook.com/skillmantra0123"> <img src="image/f.svg">  </a></li>
		   <li> <a href="https://twitter.com/skillmantra05">  <img src="image/t.svg">  </a></li>
		   <li> <a href="https://www.instagram.com/skillmantra_/">  <img src="image/i.svg">  </a></li>
		   <li> <a href="https://www.linkedin.com/company/skill-mantra/">  <img src="image/in.svg">  </a></li>
		   <li> <a a href="https://www.youtube.com/channel/UCdCBfirimJNDMk94Qy_atjg">  <img src="image/y.svg">  </a></li>
		  </ul>
		  </div>
		  
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        // Bind an input event handler to the phone input
        $('input[name="phone"]').on('input', function() {
            // Get the entered value
            var enteredValue = $(this).val();

            // Remove non-numeric characters
            var numericValue = enteredValue.replace(/\D/g, '');

            // Check if the numeric value is exactly 10 digits
            if (numericValue.length === 10) {
                // Enable the submit button
                $('button[type="submit"]').prop('disabled', false);

                // Clear the error message
                $('#message').text('');
            } else {
                // Disable the submit button
                $('button[type="submit"]').prop('disabled', true);

                // Display an error message
                $('#message').text('Please Enter 10 Digit Number.');
            }

            // Update the value with only numeric characters
            $(this).val(numericValue);
        });
    });
</script>


<script>

$("#slideshow > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 1000);


$("#slideshow1 > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow1 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow1');
}, 1000);


$("#slideshow2 > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow2 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow2');
}, 1000);


$("#slideshow3 > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow3 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow3');
}, 1000);




 $('.slider-nav').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: false,
    arrows:false,
   focusOnSelect: true
 });


  $(document).ready(function(){
      $('.regular').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        infinite: true,
        responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
      });
    });
	
	

 
var items = $(".timeline li"),
  timelineHeight = $(".timeline ul").height(),
  greyLine = $(".default-line"),
  lineToDraw = $(".draw-line");

if (lineToDraw.length) {
  $(window).on("scroll", function () {
    // Need to constantly get '.draw-line' height to compare against '.default-line'
    var redLineHeight = lineToDraw.height(),
      greyLineHeight = greyLine.height(),
      windowDistance = $(window).scrollTop(),
      windowHeight = $(window).height() / 2,
      timelineDistance = $(".timeline").offset().top;

    if (windowDistance >= timelineDistance - windowHeight) {
      line = windowDistance - timelineDistance + windowHeight;

      if (line <= greyLineHeight) {
        lineToDraw.css({
          height: line + 20 + "px"
        });
      }
    }

    var bottom = lineToDraw.offset().top + lineToDraw.outerHeight(true);
    items.each(function (index) {
      var circlePosition = $(this).offset();

      if (bottom > circlePosition.top) {
        $(this).addClass("in-view");
      } else {
        $(this).removeClass("in-view");
      }
    });
  });
}



$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});





$("#slideshow11 > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow11 > div:first')
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#slideshow11');
}, 2000);


$("#slideshow12 > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow12 > div:first')
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#slideshow12');
}, 2000);


$("#slideshow13 > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow13 > div:first')
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#slideshow13');
}, 2000);


$("#slideshow14 > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow14 > div:first')
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#slideshow14');
}, 2000);




 $(document).ready(function () {

         $('.client-single').on('click', function (event) {
            event.preventDefault();

            var active = $(this).hasClass('active');

            var parent = $(this).parents('.testi-wrap');

            if (!active) {
                var activeBlock = parent.find('.client-single.active');

                var currentPos = $(this).attr('data-position');

                var newPos = activeBlock.attr('data-position');

                activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(currentPos);
                activeBlock.attr('data-position', currentPos);

                $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(newPos);
                $(this).attr('data-position', newPos);

            }
        });
   
   }(jQuery));


  
</script>

 

<script>
 $(document).ready(function () {
  $(".testimonial-slider").slick({
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 600,
    draggable: true,
    infinite: true,
    slidesToShow: 2.3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});



$(".slider-nav").slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  asNavFor: ".slider-for",
  dots: false,
  focusOnSelect: true
});

$("a[data-slide]").click(function (e) {
  e.preventDefault();
  var slideno = $(this).data("slide");
  $(".slider-nav").slick("slickGoTo", slideno - 1);
});



 </script>


 <div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
 
<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2> Enter your details to Book  a Free Counselling </h2>
		 

        <div class="form-group">
        	<input type="Enter Full Name" class="form-control" name="name" placeholder="Enter Full Name" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Enter Email Address" required="required">
        </div>
		<div class="form-group">
            <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" required="required">
        </div> 

        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="aa36b" required="required" disabled></div>
				<div class="col"><input type="text" class="form-control" name="cptcha" placeholder="Enter Captcha" required="required"></div>
			</div>        	
        </div>
		
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required" checked>  By Registering up you agree to our Terms Conditions & Privacy Policy</a></label>
		</div>
		 
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg register-btn"> Book Now </button>
        </div>
    </form>
</div>
 
    </div>
  </div>
</div>






 <div class="modal fade" id="modal1" aria-hidden="true" aria-labelledby="..." tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
 
<div class="signup-form">
		<?php echo form_open('submit-contact-form', ['enctype' => 'multipart/form-data', 'class' => 'php-email-form']); ?>
		<h2> Enquiry Form </h2>
		 

        <div class="form-group">
        	<input type="Enter Full Name" class="form-control" name="name" placeholder="Enter Full Name" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Enter Email Address" required="required">
        </div>
		<div class="form-group">
            <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" required="required">
			<span id="message" style="color: red;"></span>
        </div> 

        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="aa36b" required="required" disabled></div>
				<div class="col"><input type="text" class="form-control" name="cptcha" placeholder="Enter Captcha" required="required"></div>
			</div>        	
        </div>
		
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required" checked>  By Registering up you agree to our Terms Conditions & Privacy Policy</a></label>
		</div>
		 
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg register-btn"> Register Now </button>
        </div>
                                        <?php echo form_close(); ?>
</div>
 
    </div>
  </div>
</div>




</body>
</html>
