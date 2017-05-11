<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errorMsg = '';

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == '')
			$errorMsg = 'Enter username';
		if($password == '')
			$errorMsg = 'Enter password';

		if($errorMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT id, fullname, username, password, secretpin FROM user WHERE username = :username');
				$stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errorMsg = "User $username not found.";
				}
				else {
					if($password == $data['password']) {
						$_SESSION['name'] = $data['fullname'];
						$_SESSION['username'] = $data['username'];
						$_SESSION['password'] = $data['password'];
						$_SESSION['secretpin'] = $data['secretpin'];

						header('Location: user.php');
						exit;
					}
					else
						$errorMsg = 'Password not match.';
				}
			}
			catch(PDOException $e) {
				$errorMsg = $e->getMessage();
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - page</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="banner-ln">
		<div class="login-whole">
		<?php
				if(isset($errorMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errorMsg.'</div>';
				}
			?>
			<form action="" method="post">
				<div class="signIn">
					<h2 class="welcome-login centered width-ln">Welcome Back</h2>
					<div class="input-group centered ">
					    <span class="input-group-addon"><i class="fa fa-user"></i></span>
					    <input id="login" type="text" class="form-control" name="username" placeholder="Enter your username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" required>
					</div>
					<div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-key"></i></span>
					    <input id="password"  class="form-control" name="password" placeholder="Enter your password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" type="password">
					</div>
					<div class="width-ln btnPart">
						<div class="row">
							<div class="col-md-6 col-xs-12">
								<div class="forgetPsw"><a href="forgot.php">Forgot your password?</a>
								</div>
							</div>	
						</div>
						<div class="signInBtn">

							<a href="">
								<input type="Submit" name="login" class="btn default" value="Login">
							</a>
						</div>
						<hr>
						<label for="" style="margin-left: 28%;">No account? Create one here.</label>
						<div class="signUpBtn">
							<a type="Submit" href="signup.php" class="btn default" value="Sign Up" style="line-height: -6px;">Sign up</a>
						</div>
					</div>
				
				</div>
				<div class="centered back-home">
					<a class="width-ln " href="index.php">Back To Home</a>
					<hr>
				</div>
			</form>
		</div>
	</div>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>