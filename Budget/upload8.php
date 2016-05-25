<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Upload landing</title>
	</head>
	
	<body>
		<br>
		<?php

		// Check for errors
		if($_FILES['file_upload']['error'] > 0){
			die('An error ocurred when uploading.');
		}

		/*// Check filetype
		if($_FILES['file_upload']['type'] != 'image/png'){
			die('Unsupported filetype uploaded.');
		}*/

		// Check filesize
		if($_FILES['file_upload']['size'] > 500000){
			die('File uploaded exceeds maximum upload size.');
		}

		/*// Check if the file exists
		if(file_exists('upload/' . $_FILES['file_upload']['name'])){
			die('File with that name already exists.');
		}*/

		// Upload file
		if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'Uploads/' . $_FILES['file_upload']['name'])){
			die('Error uploading file - check destination is writeable.');
		}

		echo 'File uploaded successfully.';
		?>
		<br><br>
		<a href='Uploads'>Click here to view all files that have been uploaded</a>
		<br><br>
		<a href='..'>Click here to go back to Budgets page</a>
		
		<script language="javascript">
			window.location.href = "Uploads"
		</script>
		
	</body>

</html>
