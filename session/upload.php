<?php include('header.php'); ?>
<div class="container">
	<h1>Upload Form</h1>
	<div class="contact-form">
		<form enctype="multipart/form-data" method="post" role="form">
			<?php
			if(isset($_POST['submit']))
			{
				$target = "upload/". $_FILES['file']['name'];

				$file_name = $_FILES['file']['name'];
				$file_type = $_FILES['file']['type'];
				$file_size = $_FILES['file']['size'];

				if(strstr($file_name,".exe")){
					die(".EXE files are not allowed");	
				}
				if($file_size > 350000)
				{
					die("File too large...");	
				}
				if(move_uploaded_file($_FILES['file']['tmp_name'],$target))
				{
					echo "The file named: ".$file_name." of type: ".$file_type." with size: ".$file_size." has been uploaded";	
				}
				else{
					echo "Sorry can't upload file....";	
				}

			}
			?>

			<div class="form-group">
				<label for="name">Upload File:</label>
				<input class="field" type="file" name="file" required/>
			</div>
			<button type="submit" name="submit" class="submit">Upload</button>
		</form>
	</div>
</div>
<?php include('footer.php'); ?>