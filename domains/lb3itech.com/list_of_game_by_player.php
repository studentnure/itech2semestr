
<?php
    include "conn.php";
    header('Content-Type: application/json');
    header('Cache-Control: no-cache, must-revalidate');
    $player = $_GET['player'];
    $sqlSelect = $dbh->prepare(
    "SELECT $db.game.score, $db.t1.name as team1, $db.t2.name as team2, 
    $db.player.name as player, $db.game.place as place FROM $db.PLAYER 
    INNER JOIN $db.TEAM as T1 ON $db.PLAYER.FID_TEAM = $db.T1.ID_TEAM 
    INNER JOIN $db.GAME ON $db.T1.ID_TEAM = $db.GAME.FID_TEAM1 
    INNER JOIN $db.TEAM as T2 ON $db.GAME.FID_TEAM2 = $db.T2.ID_TEAM 
    where $db.player.name =:player"
    );
    $sqlSelect->execute(array('player' => $player));
    $cell = $sqlSelect->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($cell);
    ?>
