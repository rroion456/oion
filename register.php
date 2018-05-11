<?php
	$error_username=$error_email=$error_password1=$error_password2=$error_match=$letters="";

?>



<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../login/register.css">
	<link rel="shortcut icon"  href="../login/pic/tab1.png">
</head>
<body>




<!-- ============================Verififaction================================== -->

	<?php

	 if (isset($_POST['signup'])) {
	 	 $Username   =$_POST['username'];
	 	 $Email      =$_POST['email'];
	 	 $Password_1 =$_POST['password'];
	 	 $Password_2 =$_POST['cpassword'];

	 	 if (empty($Username)) {
	 		 $error_username="Username is required*";
	 	}
	 	
	 	 if (empty($Email)) {
	 		 $error_email="Email is required*";
	 	 }

	 	 if (empty($Password_1)) {
	 		 $error_password1="Password is required*";
	 	 }

	 	 if (empty($Password_2)) {
	 		 $error_password2="Password is required*";
	 	 }
 
	 	 if ($Password_1 != $Password_2) {
	 		 $error_match = "Password don't match";
	 	 }
	 	 if (strlen($Password_1)>=8 && strlen($Password_1)<=20) {
	 	 	echo "dsds";
	 	 }
	 }

	?>




<!-- ==========================End of Verififaction============================= -->



<div class="header">
	<h2>Register</h2>
</div>

<form action=" "  method="POST">
	<div class="reg-box">
			 <label>Username</label>
			 <input type="text" name="username";>
			 <p class="error"><?php echo $error_username ;?></p>
	 </div>

	<div class="reg-box">
			 <label>Email</label>
			 <input type="text" name="email">
			 <p class="error"><?php echo $error_email ;?></p>
	</div>

	<div class="reg-box">
			 <label>Password</label>
			 <input type="Password" name="password">
			 <p class="error"><?php echo $error_password1 ;?></p>
	</div>

	<div class="reg-box">
			 <label>Confirm password</label>
			 <input type="password" name="cpassword">
			 <?php 
			 	 if (isset($error_password2)) {
			 	 	echo '<span class="error">'.$error_password2.'</span>';
			 	 }
			  ?>

			  <?php 
			 	 if (isset($error_match)) {
			 	 	echo '<span class="error">'.$error_match.'</span>';
			 	 }
			  ?>

	</div>

	<div class="reg-box">
			<label></label>
			<button type="submit" name="signup" class="btn">Signup</button>
	</div>
	<p>
		Already Register ? <a href="index.php">Sign in</a>
	</p>


</form>






</body>
</html>