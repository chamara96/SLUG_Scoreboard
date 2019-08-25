<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM scoreboard ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Welcome</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body style="margin-left: 30px; margin-right: 30px;">
	<br>
	<center>
		<h1 class="display-1 text-dark">SLUG-BATMINTON</h1>
	</center>
	<a href="addNewGame.php"><button type="button" class="btn btn-primary btn-lg btn-block">Add New Game</button></a>
	<br>
	<a href="home.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Last Game</button></a>

</body>

</html>