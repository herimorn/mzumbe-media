<?php include("config/config.php")?>
<?php include("includes/form_handlers/register_handler.php")?>

<!--handling the login functionality!-->
<?php 
if(isset($_POST['login_button'])){
	$email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); //sanitize email

	 $_SESSION['log_email'] = $email;
	 $b_email=$_SESSION['log_email'];
	$password = md5($_POST['log_password']); 
	$sql="select * from users where email='$b_email' and password='$password'";
	$res=mysqli_query($con,$sql);
	  if($res){
		while($row=mysqli_fetch_assoc($res)){
			     $user_roles=$row['user_role'];
			    $username=$row['username'];
			    $_SESSION['username']=$username;
				//if the account is closed then reopen the account
				$user_closed_query=mysqli_query($con,"SELECT * FROM users WHERE email='$b_email' AND user_closed='yes'");
				if(mysqli_num_rows($user_closed_query)){
					$reopen_account=mysqli_query($con,"UPDATE users SET user_closed='no' WHERE email='$email'");
				}
			  if($user_roles=='students'){
				header("Location:index.php");
			  }else if($user_roles=="staff"){
				$_SESSION['username']=$username;
				header("Location:./staff/index.php");
			  }else if($user_roles=='muso'){
				header("Location:muso/index.php");
			  }
		}
	  }else{
		array_push($error_array,"Email or password was incorrect<br>");
	  }

	
}


?>
<html>
<head>
	<title>Welcome to mzumbe media</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>

	<?php  

	if(isset($_POST['register_button'])) {
		echo '
		<script>

		$(document).ready(function() {
			$("#first").hide();
			$("#second").show();
		});

		</script>

		';
	}


	?>

	<div class="wrapper">

		<div class="login_box">

			<div class="login_header">
				<h1>mzumbe news system!</h1>
				Login or sign up below!
			</div>
			<br>
			<div id="first">

				<form action="register.php" method="POST">
					<input type="email" name="log_email" placeholder="Email Address" value="<?php 
					if(isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					} 
					?>" required>
					<br>
					<input type="password" name="log_password" placeholder="Password">
					<br>
					<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
					<input type="submit" name="login_button" value="Login">
					<br>
					<a href="#" id="signup" class="signup">Need an account? Register here!</a>

				</form>

			</div>

			<div id="second">

				<form action="register.php" method="POST">
					<input type="text" name="reg_fname" placeholder="First Name" value="<?php 
					if(isset($_SESSION['reg_fname'])) {
						echo $_SESSION['reg_fname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
					
					


					<input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
					if(isset($_SESSION['reg_lname'])) {
						echo $_SESSION['reg_lname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

					<input type="email" name="reg_email" placeholder="Email" value="<?php 
					if(isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					} 
					?>" required>
					<br>

					<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
					if(isset($_SESSION['reg_email2'])) {
						echo $_SESSION['reg_email2'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
					else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
					else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>


					<input type="password" name="reg_password" placeholder="Password" required>
					<br>
					<input type="password" name="reg_password2" placeholder="Confirm Password" required>
					<br>
					<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; ?>
				


					<input type="submit" name="register_button" value="Register">
					<br>

					<?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
					<a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>
				</form>
			</div>

		</div>

	</div>


</body>
</html>