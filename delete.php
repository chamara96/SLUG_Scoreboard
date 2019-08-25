<?php
include("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM scoreboard WHERE id=$id");

header("Location:home.php");
?>