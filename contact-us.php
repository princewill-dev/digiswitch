<!doctype html>
<!-- Martex - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




    <?php include"head.php"; ?>




	<body class="theme--dark"> 




		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loading" class="loading--theme">
			<div id="loading-center"><span class="loader"></span></div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">




			<!-- HEADER
			============================================= -->
            <?php include"nav-bar.php"; ?>
			<!-- END HEADER -->




			<!-- CONTACTS-1
			============================================= -->
			<section id="contacts-1" class="pb-50 inner-page-hero contacts-section division">				
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-9">
							<div class="section-title text-center mb-80">	

								<!-- Title -->	
								<h2 class="s-52 w-700">Questions? Let's Talk</h2>	

								<!-- Text -->	
								<p class="p-lg">Want to start your digital journey?, get a quote, or speak with an expert? 
									Let us know what you are looking for and we’ll get back to you right away
								</p>
									
							</div>	
						</div>
					</div>
					
					
					<?php
                        // Check if the 'msg' parameter is present in the URL and set to 'message_sent'
                        if (isset($_GET['msg']) && $_GET['msg'] === 'message_sent') {
                            echo '
                            
                                <div class="text-center">
            					    <h5>Message Sent Successfully</h5>
            					    <br>
            					</div>
                            
                            ';
                        }
                    ?>
					
					
					


					<!-- CONTACT FORM -->
				 	<div class="row justify-content-center">	
				 		<div class="col-md-11 col-lg-10 col-xl-8">
				 			<div class="form-holder">
				 			    
								<form method="POST" class="row contact-form" action="send_mail.php">
                                    
									
									<!-- Contact Form Input -->
									<div class="col-md-12">
										<p class="p-lg">Your Name: </p>
										<span>Please enter your name or company name: </span>
										<input type="text" name="name" class="form-control name" placeholder="Your Name*" required> 
									</div>
												
									<div  class="col-md-12">
										<p class="p-lg">Your Email Address: </p>
										<span>Please carefully check your email address for accuracy</span>
										<input type="email" name="email" class="form-control email" placeholder="Email Address*" required> 
									</div>
		
									<div class="col-md-12">
										<p class="p-lg">Message: </p>
										<textarea class="form-control message" name="message" rows="6" required></textarea>
									</div> 
																						
									<!-- Contact Form Button -->
									<div class="col-md-12 mt-15 form-btn text-right">	
										<button type="submit" name="submit" class="btn btn--theme hover--theme submit">Submit Request</button>	
									</div>

									
																															
									<!-- Contact Form Message -->
										
																							
								</form>
								
								
								
                                
                                <br>
                                <br>
                                <div class="contact-form-notice">
									<p class="p-sm">We are committed to your privacy. DigiSwitch uses the information you 
									   provide us to contact you about our relevant content, products, and services.
									</p>
								</div>
								
								
				 			</div>	
				 		</div>	
				 	</div>	   <!-- END CONTACT FORM -->


				</div>	   <!-- End container -->	
			</section>	<!-- END CONTACTS-1 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- DIVIDER LINE -->
			<hr class="divider">



			
			<!-- FOOTER-3
			============================================= -->
			<?php include"footer.php"; ?>
			<!-- END FOOTER-3 -->




		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.7.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/menu.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/pricing-toggle.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>	
		<script src="js/popper.min.js"></script>
		<script src="js/lunar.js"></script>
		<script src="js/wow.js"></script>
				
		<!-- Custom Script -->		
		<script src="js/custom.js"></script>


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->	


	</body>




</html>