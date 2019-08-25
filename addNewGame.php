<?php
include_once("config.php");

mysqli_query($mysqli, "TRUNCATE TABLE scoreboard");
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

    <title>New Game</title>
</head>

<body style="margin-left: 30px; margin-right: 30px;">

    <p></p>
    <form action="add.php" method="post" name="form1">

        <div class="card-deck">
            <div class="card mb-4">
                <div class="card-body">

                    <h4 class="card-title">Team A</h4>
                    <select class="custom-select" name="team1_name">
                        <option value="RUH">RUH</option>
                        <option value="MOR">MOR</option>
                        <option value="PER">PER</option>
                        <option value="COL">COL</option>
                        <option value="SJP">SJP</option>
                        <option value="RAJ">RAJ</option>
                        <option value="KEL">KEL</option>
                        <option value="UVA">UVA</option>
                        <option value="JAF">JAF</option>
                        <option value="WAY">WAY</option>
                        <option value="SAB">SAB</option>
                        <option value="EST">EST</option>
                        <option value="SEA">SEA</option>
                        <option value="VPA">VPA</option>
                    </select>

                    <p></p>
                    <p class="card-text">Player Name 1</p>
                    <input class="form-control" type="text" name="team1_player1">
                    <p class="card-text">Player Name 2</p>
                    <input class="form-control" type="text" name="team1_player2">

                </div>

            </div>


            <div class="card mb-4">
                <div class="card-body">

                    <h4 class="card-title">Team B</h4>
                    <select class="custom-select" name="team2_name">
                        <option value="RUH">RUH</option>
                        <option value="MOR">MOR</option>
                        <option value="PER">PER</option>
                        <option value="COL">COL</option>
                        <option value="SJP">SJP</option>
                        <option value="RAJ">RAJ</option>
                        <option value="KEL">KEL</option>
                        <option value="UVA">UVA</option>
                        <option value="JAF">JAF</option>
                        <option value="WAY">WAY</option>
                        <option value="SAB">SAB</option>
                        <option value="EST">EST</option>
                        <option value="SEA">SEA</option>
                        <option value="VPA">VPA</option>
                    </select>

                    <p></p>
                    <p class="card-text">Player Name 1</p>
                    <input class="form-control" type="text" name="team2_player1">
                    <p class="card-text">Player Name 2</p>
                    <input class="form-control" type="text" name="team2_player2">

                </div>

            </div>

        </div>

        <div class="card-deck">

            <div class="card mb-4">
                <div class="card-body">
                    <input class="btn btn-primary btn-lg btn-block" type="submit" name="Submit" value="Create">
                </div>

            </div>

        </div>

        <p></p>
        <a class="btn btn-secondary btn-lg btn-block" href="index.php">Back to Home</a>

    </form>

</body>
<style>
    .ex1 {
        margin-left: 30px;
        margin-right: 30px;
        margin-top: 30px;
    }
</style>

</html>