<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Дата</title>
</head>

<body>
  <?php
  include "conn.php"; //посилання на джерело даних
  $date = $_GET['date']; 
  $sqlSelect = $dbh->prepare(
    "SELECT * FROM $db.GAME
    INNER JOIN $db.TEAM as T1 ON $db.GAME.FID_TEAM1 = $db.T1.ID_TEAM
    INNER JOIN $db.TEAM as T2 ON $db.GAME.FID_TEAM2 = $db.T2.ID_TEAM
    WHERE $db.GAME.DATE = :date"
  ); /*Приведений вище синтаксис вказує на вибір записей із таблиці TEAM  
  коли данні у стовпчиках "GAME.FID_TEAM" дорівнюють даним в стовпчику "T№.ID_TEAM" */
  $sqlSelect->bindValue(':date', $date, PDO::PARAM_STR);
  $sqlSelect->execute();
  echo "<table border ='1'>";
  echo "<tr><th>Date</th><th>Place</th><th>Score</th><th>Team1</th><th>Team2</th></tr>";
  while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
    $place = $cell[2];
    $score = $cell[3];
    $team1 = $cell[7];
    $team2 = $cell[11]; //побудова таблиці на сайті 
    echo "<tr><td>$date</td><td>$place</td><td>$score</td><td>$team1</td><td>$team2</td></tr>";
  }
  ?>
</body>
<html>