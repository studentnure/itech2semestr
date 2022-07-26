<!DOCTYPE HTML>
<html>

<head>
    <title>Игрок</title>
</head>

<body>
    <?php
    include "conn.php";
    $player = $_GET['player'];
    $sqlSelect = $dbh->prepare(
        "SELECT * FROM $db.PLAYER 
    INNER JOIN $db.TEAM as T1 ON $db.PLAYER.FID_TEAM = $db.T1.ID_TEAM 
    INNER JOIN $db.GAME ON $db.T1.ID_TEAM = $db.GAME.FID_TEAM1 
    INNER JOIN $db.TEAM as T2 ON $db.GAME.FID_TEAM2 = $db.T2.ID_TEAM 
    where $db.player.name =:player"
    );
    $sqlSelect->execute(array('player' => $player));
    echo "<table border ='1'>";
    echo "<tr><th>Player</th><th>Date</th><th>Place</th><th>Score</th><th>Team1</th><th>Team2</th></tr>";
    while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
        $date = $cell[8];
        $place = $cell[9];
        $score = $cell[10];
        $team1 = $cell[4];
        $team2 = $cell[14];
        echo "<tr><td>$player</td><td>$date</td><td>$place</td><td>$score</td><td>$team1</td><td>$team2</td></tr>";
    }
    ?>
</body>
<html>