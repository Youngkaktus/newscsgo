<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];

mysqli_query($connect, "UPDATE `s` SET `title` = '$title', `text` = '$text' WHERE `s`.`id` = '$id'");

header('Location: /admin');
