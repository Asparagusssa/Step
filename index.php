<?php
include("config.php");

$name = $_POST["name"];
$message = $_POST['mail'];

    $add = $mysqli->query("INSERT INTO `messages` (`name`, `message`) VALUES ('$name', '$message')");
       

    header('Location: http://localhost:8888/BD1/Index.html ');

    $mysqli->close();

