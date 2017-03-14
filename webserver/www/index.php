<?php
$pdo = new PDO('mysql:host=database;port=3306;dbname=sys', 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
]);
$pdoStatement = $pdo->query('SELECT * from sys_config');
var_dump($pdoStatement->fetchAll());