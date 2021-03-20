<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercise 8</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="container">
			<form action="#" method="POST" class="mt-5">
				<label class="bg-dark mb-3 text-white p-2 border-dark rounded">Check Anagram string</label>
				<input class="form-control me-2" name="str1" type="text" placeholder="Insert fisrt string" aria-label="Search"><br>
				<input class="form-control me-2" name="str2" type="text" placeholder="Insert last string" aria-label="Search"><br>
				<button class="btn btn-outline-success" type="submit" name="check">Check</button>
			</form>
		</div>
		<div class="text-center mt-5">
		<?php
			if (isset($_POST['check'])) {
				$str1 = strlen($_POST['str1']);
				$str2 = strlen($_POST['str2']);
				$a = 0;
				if ($str1 == $str2) {
					for ($i=0; $i<$str1; $i++) {
						for ($j=0; $j<$str2; $j++) {
							if($str1[$i] == $str2[$j]) {
								$a++;
								break;
							}
						}
					}
					if($a==$str1) {
						echo "Two strings are anagrams";
					} else {
						echo "Two strings are not anagram";
					}
				}
				else {
					echo "Two strings are not anagrams";
				}		
			}
		?>
		</div>
	</body>
</html>