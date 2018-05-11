<?php

$Username="";
$errors=array();

?>





<?php

		if ($_SERVER["REQUEST_METHOD"]=='POST') {
			if (empty($_POST['username'])) {
				 array_push($errors, "Usename is required");
			}else{
			$Username=$_POST['username'];
			echo $Username;
		}


		if (empty($_POST['email'])) {
				 array_push($errors, "Email is required");
			}else{
			$Email=$_POST['email'];
			echo $Email;
		}

		if (empty($_POST['password'])) {
				 array_push($errors, "password is required");
			}else{
			$Password=$_POST['password'];
			echo $Password;
		 }

		 if (empty($_POST['cpassword'])) {
				 array_push($errors, "2nd password is required");
			}else{
			$Cpassword=$_POST['cpassword'];
			echo $Cpassword;
		}
		}

	?>
