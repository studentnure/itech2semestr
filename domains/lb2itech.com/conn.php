<?php
require_once __DIR__ ."/vendor/autoload.php"; //підключення бібліотек
$team = (new MongoDB\Client)->db->team;
$game = (new MongoDB\Client)->db->game;
?>