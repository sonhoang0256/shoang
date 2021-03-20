<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercise 4</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="container">
			<form action="#" method="POST" class="mt-5">
				<label class="bg-dark mb-3 text-white p-2 border-dark rounded">Check palindrome string</label>
				<input class="form-control me-2" name="str" type="text" placeholder="Insert string to check..." aria-label="Search"><br>
				<button class="btn btn-outline-success" type="submit" name="check">Search</button>
			</form>
		</div>
		<div class="text-center mt-5">
		<?php
			if (isset($_POST['check'])) {
				function check_palindrome()   
					{	
						$str1 = ($_POST['str']);
						$str2 = strtolower($_POST['str']);
						if ($str2 == strrev($str2) and strcasecmp($str1, $str2) == 0)  
							echo '<p class="text-success">It is palindrome string!<p>';  
						else  
							echo '<p class="text-danger font-italic">It is not palindrome string!<p>';  
					}  
					check_palindrome();
			}
		?>
		</div>
	</body>
</html>>