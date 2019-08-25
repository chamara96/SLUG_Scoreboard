<?php
include_once("config.php");

if (isset($_POST['Submit'])) {

	$team1_name = mysqli_real_escape_string($mysqli, $_POST['team1_name']);
	$team1_player1 = mysqli_real_escape_string($mysqli, $_POST['team1_player1']);
	$team1_player2 = mysqli_real_escape_string($mysqli, $_POST['team1_player2']);

	$team2_name = mysqli_real_escape_string($mysqli, $_POST['team2_name']);
	$team2_player1 = mysqli_real_escape_string($mysqli, $_POST['team2_player1']);
	$team2_player2 = mysqli_real_escape_string($mysqli, $_POST['team2_player2']);

	$result = mysqli_query($mysqli, "INSERT INTO scoreboard(team1_name,team1_player1,team1_player2,team2_name,team2_player1,team2_player2,roundno) VALUES('$team1_name','$team1_player1','$team1_player2', '$team2_name', '$team2_player1','$team2_player2', '1')");

	header("Location:home.php");
}
?>