<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM scoreboard WHERE id=1");
$getRound = mysqli_query($mysqli, "SELECT MAX(id) FROM scoreboard");

$res = mysqli_fetch_array($result);
$res2 = mysqli_fetch_array($getRound);

$roundno = $res2['MAX(id)'] + 1;

$team1_name = $res['team1_name'];
$team1_player1 = $res['team1_player1'];
$team1_player2 = $res['team1_player2'];

$team2_name = $res['team2_name'];
$team2_player1 = $res['team2_player1'];
$team2_player2 = $res['team2_player2'];

mysqli_query($mysqli, "INSERT INTO scoreboard(team1_name,team1_player1,team1_player2,team2_name,team2_player1,team2_player2,roundno) VALUES('$team1_name','$team1_player1','$team1_player2', '$team2_name', '$team2_player1','$team2_player2', '$roundno')");

header("Location:home.php");

?>