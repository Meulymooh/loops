<!DOCTYPE html>

	<html lang="en">


	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Jquery js -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<!--Bootstrap--> 	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<!--Ajax--> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!--My CSS--> 	
		<link href="stylesheet.css" rel="stylesheet" type="text/css">

		<!--Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 


		<title>Loop</title>

	</head>

<html>
<body>

<div class="container-fluid">

	<div class="wrapper-title">
		<div id="intro"><h1>Lottery Exercise</h1></div>
	</div>

	<div class="wrapper">

		<div class="wrapper-instruction">
			<h4>Pick a dish and click on the waiter to order.</h4>
		</div>

		<div class="row">

			<form action="lottery.php" method="post">

				<div class="col col-md-3">
					<input class="emoji" type="image" src="img/pizza.png">
					<input type="radio" name="emoji" value="pizza" checked="checked">
				</div>

				<div class="col col-md-3">
					<input class="emoji" type="image" src="img/hamburger.png">
					<input type="radio" name="emoji" value="hamburger">
				</div>

				<div class="col col-md-3">
					<input class="emoji" type="image" src="img/fries.png">
					<input type="radio" name="emoji" value="fries">
				</div>

				<div class="col col-md-3" id="divButton">
					<input type="image" id="waiter" name="submit" value="submit" src="img/waiter.png" alt="Submit" />

				</div>
			
			</form>

		</div>

	</div>


	</div>

</div>




</body>
</html>
