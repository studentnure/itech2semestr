<?php
  include "conn.php";
  header('Content-Type: text/xml');
  header('Cache-Control: no-cache, must-revalidate');
  $date = $_GET['date'];
  $sqlSelect = $dbh->prepare(
    "SELECT * FROM $db.GAME
    INNER JOIN $db.TEAM as T1 ON $db.GAME.FID_TEAM1 = $db.T1.ID_TEAM
    INNER JOIN $db.TEAM as T2 ON $db.GAME.FID_TEAM2 = $db.T2.ID_TEAM
    WHERE $db.GAME.DATE = :date"
  );
  $sqlSelect->bindValue(':date', $date, PDO::PARAM_STR);
  $sqlSelect->execute();
  echo '<?xml version="1.0" encoding="UTF-8"?>';
  echo "<root>";

  while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
    $place = $cell[2];
    $score = $cell[3];
    $team1 = $cell[7];
    $team2 = $cell[11];
    echo "<row><date>$date</date><place>$place</place><score>$score</score><team1>$team1</team1><team2>$team2</team2></row>";
  }
  echo "</root>";
  ?>
