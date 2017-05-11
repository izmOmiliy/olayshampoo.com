<?php
	require 'config.php';

	if(isset($_POST['register'])) {
		$errorMsg = '';

		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$secretpin = $_POST['secretpin'];

		if($fullname == '')
			$errorMsg = 'Enter your fullname';
		if($username == '')
			$errorMsg = 'Enter username';
		if($password == '')
			$errorMsg = 'Enter password';
		if($secretpin == '')
			$errorMsg = 'Enter a sercret pin number';
			
		if($errorMsg == ''){

			try {
				$stmt = $connect->prepare('INSERT INTO user (fullname, username, password, secretpin) VALUES (:fullname, :username, :password, :secretpin)');
				$stmt->execute(array(
					':fullname' => $fullname,
					':username' => $username,
					':password' => $password,
					':secretpin' => $secretpin
					));
				header('Location: signup.php?action=joined');
				exit;

			}
			catch(PDOException $ex) {
				echo $ex->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errorMsg = 'Registration successfull. Now you can <a href="login.php">LOGIN</a>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sign Up - page</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>


	<div class="banner-ln">
	
		<div class="register-whole">
		
			<h2 class="register-welcome">Register Now!</h2>
			<div >
			<?php
				if(isset($errorMsg)){
					echo $errorMsg;
				}
			?>
			</div>
			<div class="register">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-12">
							<p>Name</p>
						</div>
						
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								  <input type="text" name="fullname" placeholder="Enter your fullname" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'] ?>" autocomplete="off" class="form-control" id="usr">
							</div>
						</div>
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								  <label for="usr"><p>Username</p></label>
								  <input type="text" name="username" placeholder="Create your username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off"  class="form-control" id="usr">
							</div>
						</div>
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								  <label for="usr"><p>Password</p></label>
								  <input type="password" name="password" placeholder="Create your password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="form-control" id="usr">

							</div>
						</div>
						<div class="col-md-12 col-xs-12">
							<div class="form-group">
								  <label for="usr"><p>Secret pin</p></label>
								  <input type="password" name="secretpin" class="form-control" placeholder="Enter your Secret Pin" value="<?php if(isset($_POST['secretpin'])) echo $_POST['secretpin'] ?>" autocomplete="off"  id="usr">
							</div>
						</div>
						<div class="col-md-12">
							<div class="signUpBtn">
								<input type="submit" name="register" class="btn default" value="Register">
							</div>
						</div>
						<div class="centered back-home col-md-12">
							<a class="width-ln " href="index.php">Back To Home</a>
							<hr>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>