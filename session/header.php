<!doctype html>
<?php
session_start();
if(!isset($_SESSION['sid'])){
	header("Location: index.php");
}
if(isset($_POST['logout'])){
	session_destroy();
	setcookie("user","",time()-3600);
	//unset($_SESSION['sid']);
	header("Location: index.php");
}
?>
<html>
	<head>
		<title>Lecture</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="gallery.css" />
	</head>
	<body>
		<div class="main-container">
			<div class="welcome-menu">
				<form class="right" method="post" role="form">
					<button type="submit" name="logout" class="logout">Logout</button>
				</form>
				<p class="right">Welcome Mr. <?php echo $_COOKIE['user'] ?></p>
			</div>

			<div class="menu">
				<ul>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="upload.php">Upload</a></li>
				</ul>
				<div class="clear"></div>
			</div>