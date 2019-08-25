<?php
$page = $_SERVER['PHP_SELF'];
$sec = "2";
?>

<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM scoreboard ORDER BY id DESC");

$pathx = "img/";
$imgex = ".png";

$res = mysqli_fetch_array($result);


$_SESSION["a"] = $res['roundno'];


?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Badminton Scoreboard SLUG - University Of Ruhuna</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body class="bg-dark">

  <div class="container">
    <div class="row">
      <div class="col float-left">
        <p></p><br>
        <p></p>
        <img src="img/slug-1.png" width="200%" alt="">
      </div>
      <div class="col-auto">
        <center>
          <h1 class="display-2 text-light">SLUG-BADMINTON</h1>
          <p class="display-4 text-light">Round - <?php echo $res['roundno']; ?></p>
        </center>
      </div>
      <div class="col">
        <p></p><br>
        <img src="img/slug-2.png" width="140%" alt="">
      </div>
    </div>
  </div>

  <div style="overflow-x:auto;">

    <table class="gfg" style="width:50%;float:left;height:400px;">

      <tr>
        <td>
          <h2 class="display-2 font-weight-bold"><?php echo $res['team1_name']; ?></h2>
        </td>
        <td><?php echo '<img src="' . $pathx . $res['team1_name'] . $imgex . '" height="150">'; ?></td>
        <td>
          <h1><?php echo $res['team1_player1']; ?></h1>
          <h1><?php echo $res['team1_player2']; ?></h1>
        </td>
      </tr>

      <tr>
        <td>
          <h2 class="display-2 font-weight-bold"><?php echo $res['team2_name']; ?></h2>
        </td>
        <td><?php echo '<img src="' . $pathx . $res['team2_name'] . $imgex . '" height="150">'; ?></td>
        <td>
          <h1><?php echo $res['team2_player1']; ?></h1>
          <h1><?php echo $res['team2_player2']; ?></h1>
        </td>
      </tr>

    </table>

    <table class="gfg demo" style="width:50%;float:left;height:400px;">

      <?php
      $sql = "SELECT team1_score, team2_score FROM scoreboard";
      $result_2 = $mysqli->query($sql);

      if ($result_2->num_rows > 0) {
        echo "<tr>";
        while ($res = mysqli_fetch_array($result_2)) {
          echo "<td>" . $res['team1_score'] . "</td>";
        }
        echo "</tr>";
        $result_2 = $mysqli->query($sql);

        echo "<tr>";
        while ($res = mysqli_fetch_array($result_2)) {
          echo "<td>" . $res['team2_score'] . "</td>";
        }
        echo "</tr>";
      } else {
        echo "0 results";
      }
      ?>
    </table>


  </div>

</body>

<style>
  table {
    border-spacing: 0;
    width: 100%;
  }

  th,
  td {
    text-align: center;
    font-weight: bold;
    font-size: 70px;
  }

  .table>tbody>tr>td {
    vertical-align: middle;
  }

  h3 {
    /* font-size: 20px; */
    font-weight: bold;
    text-align: left;
  }


  tr:nth-child(even) {
    background-color: #808080
  }

  tr:nth-child(odd) {
    background-color: #C0C0C0
  }

  /* hr.style-two {
      border: 0;
      height: 1px;
      background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    } */


  .demo td {
    /* border:5px solid #000000; */
    border-left: 3px solid #000000;
    border-bottom: 0px solid #000000;
    border-top: 0px solid #000000;
    /* border-right: 3px solid #000000; */
    /* padding:5px; */
  }

  .gfg {
    border-collapse: separate;
    border-spacing: 0 15px;
  }
</style>

</html>