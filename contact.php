


<?php include('validation.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<!-- CSS file are here -->
	<link rel="stylesheet" href="css/w31.css">
	<link rel="stylesheet" href="css/bootstrap1.min.css">
	<link rel="stylesheet" href="css/style1.css" media="screen">
	<!-- java Script files are here -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
		        <li>
		          <a href="index.php">About Us</a>
		        </li>
		        <li><a href="index.php">Products</a></li>
		        <li><a href="index.php">Contact Us</a></li>
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
	<div class="container">
		<div class="row w3-xxxlarge contactUs">Contact Us</div>
		<form method="post" action="">
		    <div class="row">
		    	<div class="col-md-6 w3-xlarge contactPad">Contact Details</div>
		    	<div class="col-md-6 w3-xlarge contactPad">Request Details</div>
		    	<div class="col-md-6">
		    		<label for="fname">First Name</label>
		    		<input type="text" name="name" class="input" value="" placeholder="Your name..">
		    			<span class="error" style="color: red;"><?php echo $nameError;?></span><br><br>					


		    		<label for="lname">Email</label>
		    		<input type="text" name="email" class="input" value="" placeholder="Your email">
		    			<span class="error" style="color: red;"><?php echo $emailError;?></span><br><br>


		    		<label for="lname">Purpose</label>
		    		<input type="text" name="purpose" class="input" value="" placeholder="Your Purpose">
		    			<span class="error" style="color: red;"><?php echo $purposeError;?></span><br><br>		
					

		    		<!--<label for="country">Country</label>
		    		<select id="country" name="country">
		    		  <option value="australia">Australia</option>
		    		  <option value="canada">Canada</option>
		    		  <option value="usa">Uzbekistan</option>
		    		  <option value="canada">Russia</option>
		    		  <option value="usa">Kazakhstan</option>
		    		</select>-->
		    	</div>
		    	<div class="col-md-6">
		    		<label for="subject">Subject</label>
		    		<textarea id="subject" name="message" placeholder="Write something.."></textarea>
		    			<span class="error" style="color: red;"><?php echo $messageError;?></span><br><br>	

		    	</div>
		    	
		    	<div class="col-md-12">
		    		<input type="submit" value="Submit" class="submit" onclick="show_()" name="submit">
		    		    <span class="success"><?php echo $successMessage;?></span>
		    		    <span class="success"><?php echo $successMessage;?></span>

		    		    <span class="success">
		    		    <?= ($msg);?>
		    		    	
		    		    </span>

		    	</div>
		    </div>

		  </form>
		</div>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						
						<h5>UZB: +1234567890 </h5>
						<h5>KOR: +0987654321 </h5>
						<p>contact@olay.com</p>
						<h5>9, Ziyolilar street, Tashkent, Uzbekistan</h5>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<h4>Company</h4>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Products</a></li>
							<li><a href="">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<h4>Gallery</h4>
						<ul>
							
						</ul>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<h4>Company</h4>
						<ul>

						</ul>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<h4>Company</h4>
						<ul>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		<div class="footer-copyright">
			<div class="row">
					<div class="copyright">
						<p class="text-center">Copyright 1999 — 2017 © Olay. All rights reserved.</p>
					</div>
			</div>
		</div>
	</footer>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>