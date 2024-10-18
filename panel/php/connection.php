<?php
session_start();
$server = "mysql:host=localhost;dbname=9c";
$userName = "root";
$password="";
$pdo = new PDO($server,$userName,$password);
?>