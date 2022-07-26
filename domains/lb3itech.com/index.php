<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ3</title>
    <style>
        body {
            background-image: url('https://github.com/melnyk-m/IntT/blob/main/bg1.gif?raw=true');
        }
        
    </style>
    <script src = "AJAX.js">
    </script>
</head>
<div id="task">
    <p><b>ЛБ3 Вариант7</b>
       
    <figure class="pic_w_caption">
        <img src="https://github.com/melnyk-m/IntT/blob/main/2022-07-07%2001.02.28.jpg?raw=true">
        <figcaption>Рисунок 5.7 – Она не вспомнила потому что не знала»</figcaption>
    </figure>
</div>

Championship table: <select name="league" id="league">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT league FROM $db.team";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[0]);
            echo "</option>";
        }
        ?>
    </select>
    <button onclick="getText()"> submit </button>
<p>Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="date" id="date">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT date FROM $db.game";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[0]);
            echo "</option>";
        }
        ?>
    </select>
    <button onclick="getXML()"> submit </button></p>

<p>Player's name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="player" id="player">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT * FROM $db.player";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print_r($cell[1]);
            echo "</option>";
        }
        ?>
    </select>
    <button onclick="getJSON()"> submit </button> </p>
<div id="res"></div>
</body>

</html>