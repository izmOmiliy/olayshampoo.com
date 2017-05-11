<?php
	require 'config.php';

	if(isset($_POST['forgotpass'])) {
		$errorMsg = '';

		$secretpin = $_POST['secretpin'];

		if(empty($secretpin))
			$errorMsg = 'Please enter your secret pin to view your password.';

		if($errorMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT password, secretpin FROM user WHERE secretpin = :secretpin');
				$stmt->execute(array(
					':secretpin' => $secretpin
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
				if($secretpin == $data['secretpin']) {
					$viewpass = 'Your password is: ' . $data['password'] . '<br><a href="login.php">Login Now</a>';
				}
				else {
					$errorMsg = 'Sercet pin not matched.';
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
	<title>Forgot Password</title>
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
		<?php
				if(isset($viewpass)){
					echo '<div style="color:#198E35;text-align:center;font-size:17px;margin-top:5px">'.$viewpass.'</div>';
				}
			?>
			
				<div class="signIn">
					<h2 class="welcome-login centered width-ln">Forgot Password</h2>
					
				
					<form action="" method="post">
							<div class="input-group">
					    <span class="input-group-addon"><i class="fa fa-key"></i></span>
					    <input id="password" type="text" placeholder="Secret Pin"  autocomplete="off" class="form-control" name="secretpin" >
					</div><br />
					<div class="signUpBtn">
								<input type="submit" name="forgotpass" class="btn default" value="Check">
					</div>
					</form>
						
					</div>
				
				</div>
				
		</div>
	</div>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>