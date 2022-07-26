<?php
$db = "lab1"; //назва нашої бд
$dsn = "mysql:host=localhost";  //джерело
$user = "root"; //логін
$pass = "";  // пароль
$dbh = new PDO($dsn, $user, $pass); //доступ до бази
?>