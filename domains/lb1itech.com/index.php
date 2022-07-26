<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ1</title>
   
</head>
<div id="task">
   

<form method="GET" action="table.php">  
Championship table: <select name="league" id="league">
        <?php
        include 'conn.php';  //посилання на файл, звідки читаються дані
        $sqlSelect = "SELECT DISTINCT league FROM $db.team"; //отримання даних про лігу із таблиці команди
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>"; 
            print_r($cell[0]); //відображення даних для користувача
            echo "</option>";
        }
        ?>
    </select>
    <button> submit </button>
</form>


<form method="GET" action="list_of_game_by_date.php">
Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="date" id="date"> 
        <?php
        include 'conn.php';  // &nbsp - нерозривний пробіл, це рекомендований шаблон, бо він працює у всіх браузерах. 
        $sqlSelect = "SELECT DISTINCT date FROM $db.game"; //унікальні дані з таблиці ігор
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[0]);//відображення даних для користувача
            echo "</option>";
        }
        ?>
    </select>
    <button> submit </button>
</form>


<form method="GET" action="list_of_game_by_player.php">
  Player's name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="player" id="player">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT * FROM $db.player"; //всі імена гравців
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[1]);
            echo "</option>";
        }
        ?>
    </select>
    <button> submit </button>
</form>
</body>

</html>