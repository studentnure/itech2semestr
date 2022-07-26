<!DOCTYPE HTML>
<html>

<head>
    <title>Чемпионат</title>
</head>

<body>
    <?php
    include "conn.php";
    $league = $_GET['league']; //"Premier League";
    $sqlSelect = $dbh->prepare(
        "SELECT * FROM $db.GAME
    INNER JOIN $db.TEAM as T1 ON $db.GAME.FID_TEAM1 = $db.T1.ID_TEAM
    INNER JOIN $db.TEAM as T2 ON $db.GAME.FID_TEAM2 = $db.T2.ID_TEAM
    WHERE $db.T1.league = :league AND $db.T2.league = :league"
    );
    $sqlSelect->bindParam(':league', $league, PDO::PARAM_STR);
    $sqlSelect->execute();
    echo "<table border ='1'>";
    echo "<tr><th>Date</th><th>Place</th><th>Score</th><th>Team1</th><th>Team1 League</th><th>Team2</th><th>Team2 League</th></tr>";
    while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
        $date = $cell[1];
        $place = $cell[2];
        $score = $cell[3];
        $team1 = $cell[7];
        $team2 = $cell[11];
        $team1_league = $cell[8];
        $team2_league = $cell[12];
        echo "<tr><td>$date</td><td>$place</td><td>$score</td><td>$team1</td><td>$team1_league</td><td>$team2</td><td>$team2_league</td></tr>";
    }
    ?>
</body>
<html>