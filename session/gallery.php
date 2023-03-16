<?php include('header.php'); ?>
			
			<?php
				$path = "upload";
				$dir = opendir($path);
				$first=true;

				while (($file =readdir($dir)) !== false){
					if(!is_dir($file)){
						if($first)
						{	
							echo "<input class='gallery' name='a' type='radio' checked='checked' style='background-image: url(upload/". $file .")'>";
							$first=false;
						}
						else
							echo "<input class='gallery' name='a' type='radio' style='background-image: url(upload/". $file .")'>";
					}
				}
				closedir($dir);
			?>

<?php include('footer.php'); ?>