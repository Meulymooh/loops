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
	<div id="intro"><h1>Loop Exercise</h1></div>
</div>

	<?php
		$array = [
			["tvShow" => "Firefly","rating" => 5],
			["tvShow" => "The X Files","rating" => 5],
			["tvShow" => "Castle", "rating" => 3],
			["tvShow" => "NCIS","in_stock", "rating" => 2],
			["tvShow" => "How I Met Your Mother","rating" => 3],
			["tvShow" => "The Bridge", "rating" => 4],
			["tvShow" => "Friends", "rating" => 5],
			["tvShow" => "The Office", "rating" => 1]
		]
	?>

<div class="wrapper">

			<table class="table">
				<thead>
					<tr>
						<th scope="col">TV Show</th>
						<th scope="col">Rating</th>
					</tr>
		 		</thead>
  				<tbody>

  				<?php foreach($array as $arr): ?>
					<tr>
						<td><?php echo "<a target='_blank' href='https://www.google.com/search?q=$arr[tvShow]'>$arr[tvShow]</a>"; ?></td>
						<td><?php echo $arr["rating"]; ?></td>
					</tr>
				<?php endforeach; ?>

				</tbody>
			</table>


</div>


<?php

?>





</div>




</body>
</html>
