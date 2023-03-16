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
				<?php
				
					if(isset($_COOKIE['user'])){
						echo "<h3>Welcome back ".$_COOKIE['user']."</h3>";
					}else{
						echo "<h3>Welcome Guest.</h3>";
					}
				
				?>
				<form method="post" role="form">
				
					<?php
					
						if(isset($_POST['submit'])){
							
							require_once("dbconnection.php");
							
							$uname=$_POST['username'];
							$upass=$_POST['password'];
							
							$sql = "SELECT * FROM 6d1 WHERE username='".$uname."'";
							
							$result=$con->query($sql);
							
							if($result->num_rows > 0){
								
								$row=$result->fetch_assoc();
								
								if(password_verify($upass,$row['password']) === TRUE){
									session_start();
									$_SESSION['sid']=$row['id'];
									$_SESSION['username']=$row['firstname']." ".$row['lastname'];
									setcookie("user",ucfirst($row['firstname']." ".$row['lastname']),time()+3600);
									header("Location: gallery.php");
								}
								else{
									echo "<p style='color:RED'>Password is incorrect</p>";
								}
							}else{
								echo "User not found...<br/>";
							}
							
							$con->close();
						}
					
					?>
				
					<div class="form-group">
						<label for="username">Username:</label>
						<input id="username" class="field" type="text" name="username" required/>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input id="pwd" class="field" type="password" name="password" required/>
					</div>
					<button type="submit" name="submit" class="submit">Login</button>
				</form>
			</div>
		</div>
	</body>
</html>