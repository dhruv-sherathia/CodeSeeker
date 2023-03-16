<!doctype html>
<html>
	<head>
		<title>Lecture</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="container">
			<h1>Login Form</h1>
			<div class="contact-form">
				
				<form method="post" role="form">
				
				<?php
				
				if(isset($_POST['submit'])){
					
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$email=$_POST['email'];
					$username=$_POST['username'];
					$pass= password_hash($_POST['password'],PASSWORD_DEFAULT);
								
					require_once("dbconnection.php");
					
					$query = "INSERT INTO 6d1 (username,password,firstname,lastname,email) VALUES ('$username','$pass','$fname','$lname','$email')";
					
					if($con->query($query)){
						echo "Registration Successful.";
					}else{
						echo "Problem......";
					}
					$con->close();
				}
				?>
				
					<div class="form-group">
						<label for="fname">First Name:</label>
						<input id="fname" class="field" type="text" name="fname" required/>
					</div>
					<div class="form-group">
						<label for="lname">Last Name:</label>
						<input id="lname" class="field" type="text" name="lname" required/>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input id="email" class="field" type="text" name="email" required/>
					</div>
					<div class="form-group">
						<label for="username">Username:</label>
						<input id="username" class="field" type="text" name="username" required/>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input id="pwd" class="field" type="password" name="password" required/>
					</div>
					<button type="submit" name="submit" class="submit">Register</button>
				</form>
			</div>
		</div>
	</body>
</html>