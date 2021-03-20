<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercise 1</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="container">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="mt-5" enctype="multipart/form-data">
				<label class="bg-dark mb-3 text-white p-2 border-dark rounded">Select a file to upload</label>
				<input class="form-control me-2" name="photo" type="file" placeholder="Choose a file"> <br>
				<button class="btn btn-outline-success" type="submit" name="submit">Submit</button>
			</form>
		</div>
		<div class="text-center mt-5">
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
					$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
					$filename = $_FILES["photo"]["name"];
					$filetype = $_FILES["photo"]["type"];
					$filesize = $_FILES["photo"]["size"];
				
					$ext = pathinfo($filename, PATHINFO_EXTENSION);
					if(!array_key_exists($ext, $allowed)) die('<p class="text-danger font-italic">Error! Please upload correct format.</p>');
				
					$maxsize = 1024;
					if($filesize > $maxsize) die('<p class="text-danger font-italic">Error! File size is larger than allowed limit.</p>');
				
					if(in_array($filetype, $allowed)){
						if(file_exists("upload/" . $_FILES["photo"]["name"])){
							echo '<p class="text-danger font-italic">Can not upload, this file already exists.</p>';
						} else{
							move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
							echo '<p class="text-success font-italic">Upload successfully!</p>';
						} 
					} else{
						echo '<p class="text-danger font-italic">Error! There was a problem when uploading file.</p>'; 
					}
				} else{
					echo '<p class="text-danger font-italic">Error! </p>';
				}
			}
		?>
		</div>
	</body>
</html>