<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bootstrap Template Basic</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/67b41cffa0.js" crossorigin="anonymous"></script>
		<title>Exercise 3</title>
	</head>
	<body>
		<div class="container">
			<div class="row text-center mt-5">
				<div class="col-12 col-md-8 col-lg-6">
					<h5 class="text-success">The month you entered has how many days:</h5>;
					<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
						<input type="text" name="month" class="form-control mb-3" placeholder="Insert month number you want to check">
						<button type="submit" name="check" class="btn btn-success pr-3 pl-3">Check</button>
					</form>
					<?php
						if (isset($_POST['check'])){
						$m = $_POST['month'];
						function daysIsMonths($m){
							if(empty($m)){
								echo '<p class="text-danger font-italic">Cannot empty this field!</p>';
							}
							else{
									echo "This month have ".cal_days_in_month(CAL_GREGORIAN,$m,2021)." day.";
								}
							}
							daysIsMonths($_POST["month"]);
						}		
					?>
				</div>
			</div>
		</div>
	</body>
</html>