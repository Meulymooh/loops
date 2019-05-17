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


		<title>Lottery Result</title>

	</head>

<html>
<body>

<div class="container-fluid">

    <div class="wrapper-title">
        <div id="intro"><h1>What will you eat?</h1></div>
    </div>

    <div class="wrapper">

        <div class="row">

            <div class="col col-md-6">
                <h3>You ordered:</h3>
            </div>

            <div class="col col-md-6">
                <h3>You got served:</h3>
            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col col-md-6 center">
                <?php
                    $emoji = $_POST ['emoji'];
                    if ($_POST ['emoji'] = "pizza") {
                        echo "<img class='emoji' src='img/$emoji.png'>" ;
                    }
                ?>
            </div>

            <div class="col col-md-6">
                <?php
                    $emojis = array("pizza","hamburger", "fries");
                    shuffle($emojis);

                    for( $i = 0; $i < 1; $i++) {
                        if ($emojis[$i] == "pizza") {
                            echo "<img class='emoji' src='img/pizza.png'>";
                        }
                        if ($emojis[$i] == "hamburger") {
                            echo "<img class='emoji' src='img/hamburger.png'>";
                        }
                        if ($emojis[$i] == "fries") {
                            echo "<img class='emoji' src='img/fries.png'>";
                        }
                    }
                ?> 
            </div>

        </div>   

        <div class="row">

            <?php
                if ($emojis[$i] == $emoji) {
                    echo "<h4 style='color:red'>The waiter messed up, call him and order again.</h4><br/><br/><a href='index.php'><img id='waiter' src='img/waiter.png' alt='Waiter'></a>";
                }
                else {
                    echo "<h4 style='color:green'>Enjoy your meal! Want more? Call the waiter!</h4><br/><br/><a href='index.php'><img id='waiter' src='img/waiter.png' alt='Waiter'></a>";
                }
            ?>

        </div>     

    </div>

</div>

</body>
</html>


 