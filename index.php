<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Olay Products</title>
	<!-- CSS file are here -->
	<link rel="stylesheet" href="css/w31.css">
	<link rel="stylesheet" href="css/bootstrap1.min.css">
	<link rel="stylesheet" href="css/style1.css">
	<!-- java Script files are here -->
	<script src="js/jquery1.min.js"></script>
	<script src="js/bootstrap1.min.js"></script>
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navigationHead">
		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="100">
		  <div class="container container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="index.php"><img src="images/Olay-logo1.png" alt="" width="150px"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="index.php">Home</a></li>
		        <li class="dropdown">
		          <a href="#aboutUs">About Us</a>
		        </li>
		        <li><a href="#products">Products</a></li>
		        <li><a href="#contactUs">Contact Us</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		       <a href="signup.php">
		        	<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
		        </a>
		        <a href="login.php">
		        	<button onclick="document.getElementById('id01').style.display='block'">Login</button>
		        </a>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
	<!-- Header -->
	
	<header class="w3-display-container w3-content w3-wide" id="home">

	  <img class="w3-image" src="images/bg-page-1.jpg" alt="Architecture" width="1500" height="600">
		<div class="w3-display-middle w3-margin-top w3-center splash">
			<img src="images/splash.png" alt="" width="400px" class=" img-responsive">
	   		<h2 class="w3-xxxlarge">VISIBLE RESULTS INVISIBLE FEEL</h2>
	  </div>
	</header>

	<!-- Promo Section - "We know design" -->
	<div class="container w3-light-grey" id="aboutUs">
		  <div class="w3-row-padding">
		  	<div class="row">
	  		<div class="col-md-12 aboutHead">
	  			<h2 class="aboutH w3-xxxlarge">About Company</h2>
	  		</div>
		  	</div>
		    <div class="w3-col m6 col-sm-12 ">
		      <img class="w3-image w3-round-large aboutImg" src="images/backgrounds/forabout.jpg" alt="Buildings" width="700" height="394">
		    </div>
		    <div class="w3-col m6 col-sm-12 about-text">
		      <div class="aboutInfo">
		      	<h3 class="w3-xxlarge">From history.. till the future</h3>
		      	<p>
The main strategic goal of our company is to provide the population of the Republic of Uzbekistan with high-quality natural toiletry and laundry soaps at affordable prices for each resident. Simultaneously with production, a special place is taken by the promotion of our products to the market, a wide distribution network and the realization of a comprehensive strengthening and development of the conceptual link "producer-consumer". A special place is occupied by the implementation of the Export-oriented Products Program and the conquest of its export segment in the Russian Federation, the Republic of Kazakhstan, the Republic of Kyrgyzstan, the Republic of Tajikistan and the Islamic Republic of Afghanistan.</p>
		      	
		    </div>
	    
		  </div>
		</div>
	</div>
	<div class="parallax" id="products">
		<!-- services -->
		<div class="services agileinfo">
			<div class="container text-center"> 
				<h3 class="agileits-title w3-xxxlarge" >Products</h3> 
			</div>
		</div>
	</div>

	<section class="company">
		<div class="container">
			<div class="enter-text"><p>If we do not own the <span>freshness </span>of the air and the sparkle of the water, how can you buy them? </p>
			<p>Find some freshness by using our products.</p>
			</div>

			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<a href="#">
						<div class="company-img c-img1">
							<img class="img-responsive" src="images/image/bimg1.jpg" alt="">
						</div>
						<div class="company-icon c-icon1"></div>
						<div class="company-content">
							<h3>Olay Soothing Orchid</h3>
						</div>
						<div class="company-advice">
							<p>Extract of orchid flower makes your hairs shining and smooth. Making people incapable of going away from yourself.</p>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<a href="#">
						<div class="company-img c-img2">
							<img class="img-responsive" src="images/image/bimg2.jpg" alt="">
						</div>
						<div class="company-icon c-icon2"></div>
						<div class="company-content">
							<h3>Olay body organic</h3>
						</div>
						<div class="company-advice">
							<p>Suffer from very sensetive skin? Extract of kaktus`s oil will help with your problem. </p>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<a href="#">
						<div class="company-img c-img3">
							<img class="img-responsive" src="images/image/bimg3.jpg" alt="">
						</div>
						<div class="company-icon c-icon3"></div>
						<div class="company-content">
							<h3>Olay for Kids</h3>
						</div>
						<div class="company-advice">
							<p>Babies are not afraid of having shower anymore. This is special anti eye-itching and aromathic shampoo.</p>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
					<a href="#">
						<div class="company-img c-img4">
							<img class="img-responsive" src="images/image/bimg4.jpg" alt="">
						</div>
						<div class="company-icon c-icon4"></div>
						<div class="company-content">
							<h3>Olay blackberry extract</h3>
						</div>
						<div class="company-advice">
							<p>Exract of blackberry and special aromathic oils make your hairs soft and natural.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<a href="#">
						<div class="company-img c-img5">
							<img class="img-responsive" src="images/image/bimg5.jpg" alt="">
						</div>
						<div class="company-icon c-icon5"></div>
						<div class="company-content">
							<h3>Olay Organic body wash</h3>
						</div>
						<div class="company-advice">
							<p>Coming soon.</p>
						</div>
					</a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<a href="#">
						<div class="company-img c-img6">
							<img class="img-responsive" src="images/image/bimg6.jpg" alt="">
						</div>
						<div class="company-icon c-icon6"></div>
						<div class="company-content">
							<h3>Olay Soft Palm shampoo</h3>
						</div>
						<div class="company-advice">
							<p>Coming soon.</p>
						</div>
					</a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<a href="#">
						<div class="company-img c-img7">
							<img class="img-responsive" src="images/image/bimg7.jpg" alt="">
						</div>
						<div class="company-icon c-icon7"></div>
						<div class="company-content">
							<h3>Honey extracted shampoo</h3>
						</div>
						<div class="company-advice">
							<p>Coming soon.</p>
						</div>
					</a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<a href="#">
						<div class="company-img c-img8">
							<img class="img-responsive" src="images/image/bimg8.jpg" alt="">
						</div>
						<div class="company-icon c-icon8"></div>
						<div class="company-content">
							<h3>Olay Sneez extracted</h3>
						</div>
						<div class="company-advice">
							<p>Coming soon.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
		
	<section class="contact-us" id="contactUs">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="cta-title">Want to be a partner?</h3><p>It’s simple.</p>
						<a href="contact.php" class="cta-button">Contact us</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<img class="img-responsive" src="images/logo.png" width="200px" alt="">
						<h5>(99871) 236-89-04</h5>
						<h5>(99871) 236-88-90</h5>
						<p>contact@olayproduction.com</p>
						<h5>Taraqqiyot street 14, Tashkent, Uzbekistan </h5>
					</div>
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					</div>
					<div class="col-xs-3 col-sm-3col-md-3 col-lg-3">
						<h3>Our Team</h3>
						<ul>
							<li>Muslima Irmukhamedova</li>
							<li>Ismoil Omiliy</li>
							<li>Farangizkhonim Nishonova</li>
							<li>Azam Ergashev</li>
						</ul>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<h3>Inha University In Tashkent</h3>
						<ul class="gallery-img">
							<li><img src="images/inha.jpg" class="img-responsive" alt=""></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		<div class="footer-copyright">
			<div class="row">
					<div class="copyright">
						<p class="text-center">Copyright 2017 © Olay production. All rights reserved.</p>
					</div>
			</div>
		</div>
	</footer>


	<script>
	$(document).ready(function(){
	  // Add scrollspy to <body>
	  $('body').scrollspy({target: ".navbar", offset: 50});   

	  // Add smooth scrolling on all links inside the navbar
	  $("#myNavbar a").on('click', function(event) {
	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();

	      // Store hash
	      var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 800, function(){
	   
	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash;
	      });
	    }  // End if
	  });
	});
	</script>
	<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>

	<script>
	// Get the modal
	var modal = document.getElementById('id02');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	</script>
</body>
</html>