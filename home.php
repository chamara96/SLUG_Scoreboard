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
    <title>Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body style="margin-left: 30px; margin-right: 30px;">
    <center>
        <h1 class="display-3 text-dark">SLUG-BADMINTON</h1>
    </center>
    <p></p>
    <a href="build/scoreboard.php"><button type="button" class="btn btn-primary btn-lg btn-block">Goto Display</button></a>



    <p>Previous games</p>
    <!-- <table width='80%' border=0> -->
    <table class="table table-bordered">

        <tr bgcolor='#CCCCCC'>
            <th>Round No</th>
            <th>Team 1</th>
            <th>Player 1(Team1)</th>
            <!-- <th>Player 2(Team1)</th> -->
            <th>Score</th>

            <th>Team 2</th>
            <th>Player 1(Team2)</th>
            <!-- <th>Player 2(Team2)</th> -->
            <th>Score</th>
            <th>Action</th>

        </tr>
        <?php
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['roundno'] . "</td>";
            echo "<td>" . $res['team1_name'] . "</td>";
            echo "<td>" . $res['team1_player1'] . "</td>";
            // echo "<td>".$res['team1_player2']."</td>";
            echo "<td>" . $res['team1_score'] . "</td>";

            echo "<td>" . $res['team2_name'] . "</td>";
            echo "<td>" . $res['team2_player1'] . "</td>";
            // echo "<td>".$res['team2_player2']."</td>";
            echo "<td>" . $res['team2_score'] . "</td>";

            echo "<td><a href=\"edit.php?id=$res[id]\">Judge Panal</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
        ?>
    </table>

    <form method="post" action="addNewRound.php">
        <input class="btn btn-primary btn-lg btn-block" type="submit" name="nextRound" value="Next Round" />
    </form>
    <br>
    <a href="index.php"><button type="button" class="btn btn-secondary btn-lg btn-block" href="index.php">Back</button></a>
</body>

</html>