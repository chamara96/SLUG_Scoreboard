<?php
include_once("config.php");

if (isset($_POST['update'])) {

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$roundno = mysqli_real_escape_string($mysqli, $_GET['roundno']);

	$team1_score = mysqli_real_escape_string($mysqli, $_POST['team1_score']);
	$team2_score = mysqli_real_escape_string($mysqli, $_POST['team2_score']);

	$team1_player1 = mysqli_real_escape_string($mysqli, $_POST['team1_player1']);
	$team2_player1 = mysqli_real_escape_string($mysqli, $_POST['team2_player1']);

	$team1_player2 = mysqli_real_escape_string($mysqli, $_POST['team1_player2']);
	$team2_player2 = mysqli_real_escape_string($mysqli, $_POST['team2_player2']);

	$team2_name = mysqli_real_escape_string($mysqli, $_POST['team1_name']);
	$team2_name = mysqli_real_escape_string($mysqli, $_POST['team2_name']);



	$result = mysqli_query($mysqli, "UPDATE scoreboard SET team1_score='$team1_score', team2_score='$team2_score', team1_player1='$team1_player1', team2_player1='$team2_player1', team1_player2='$team1_player2', team2_player2='$team2_player2' WHERE id=$id");
	header("Location: edit.php?id=$id");
}
?>


<?php
$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM scoreboard WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {

	$roundno=$res['roundno'];

	$team1_score = $res['team1_score'];
	$team2_score = $res['team2_score'];

	$team1_player1 = $res['team1_player1'];
	$team2_player1 = $res['team2_player1'];

	$team1_player2 = $res['team1_player2'];
	$team2_player2 = $res['team2_player2'];

	$team1_name = $res['team1_name'];
	$team2_name = $res['team2_name'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<title>Judge Panel</title>
</head>

<body>
	<p></p>

	<h2 class="display-2 text-dark">Round <?php echo $roundno ?></h2>

	<div class="container">
		<form method="post" action="edit.php">
			<div class="card-deck">

				<div class="card mb-6">

					<div class="card-body">

						<h4 class="card-title">Team - <?php echo $team1_name; ?></h4>

						<p class="card-text">Player 1
							<input type="text" name="team1_player1" value="<?php echo $team1_player1; ?>"></p>
						<p class="card-text">Player 2
							<input type="text" name="team1_player2" value="<?php echo $team1_player2; ?>"></p>

						<div>
							<button type="button" class="btn btn-dark btn-lg" onclick="decreaseValue1()"><< -</button>
							<input readonly size="1" style="text-align:center;" type="text" id="team1_scoreID" name="team1_score" value="<?php echo $team1_score; ?>">
							<button type="button" class="btn btn-dark btn-lg" onclick="increaseValue1()">+ >></button>
						</div>

					</div>

				</div>

				<div class="card mb-6">

					<div class="card-body">

						<h4 class="card-title">Team - <?php echo $team2_name; ?></h4>

						<p class="card-text">Player 1
							<input type="text" name="team2_player1" value="<?php echo $team2_player1; ?>"></p>
						<p class="card-text">Player 2
							<input type="text" name="team2_player2" value="<?php echo $team2_player2; ?>"></p>

						<div>
							<button type="button" class="btn btn-dark btn-lg" onclick="decreaseValue2()"><< -</button>
							<input readonly size="1" style="text-align:center;" type="text" id="team2_scoreID" name="team2_score" value="<?php echo $team2_score; ?>">
							<button type="button" class="btn btn-dark btn-lg" onclick="increaseValue2()">+ >></button>
						</div>

					</div>

				</div>

			</div>

			<div>
				<br />
				<center>
					<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
					<input class="btn btn-dark btn-lg btn-block" type="submit" name="update" value="Update">
					<br />
					<p></p>
					<a href="home.php"><button type="button" class="btn btn-dark btn-lg">Back to Home</button></a>
				</center>
			</div>
		</form>

	</div>

</body>

<script>
	function increaseValue1() {
		var value = parseInt(document.getElementById('team1_scoreID').value, 10);
		value = isNaN(value) ? 0 : value;
		value++;
		document.getElementById('team1_scoreID').value = value;
	}

	function decreaseValue1() {
		var value = parseInt(document.getElementById('team1_scoreID').value, 10);
		value = isNaN(value) ? 0 : value;
		value < 1 ? value = 1 : '';
		value--;
		document.getElementById('team1_scoreID').value = value;
	}

	function increaseValue2() {
		var value = parseInt(document.getElementById('team2_scoreID').value, 10);
		value = isNaN(value) ? 0 : value;
		value++;
		document.getElementById('team2_scoreID').value = value;
	}

	function decreaseValue2() {
		var value = parseInt(document.getElementById('team2_scoreID').value, 10);
		value = isNaN(value) ? 0 : value;
		value < 1 ? value = 1 : '';
		value--;
		document.getElementById('team2_scoreID').value = value;
	}
</script>

</html>