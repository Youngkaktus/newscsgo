<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$text = $_POST['text'];
$date = $_POST['date'];

mysqli_query($connect,"INSERT INTO `s` (`id`, `title`, `text`) VALUES (NULL, '$title', '$text')");

header('Location: /admin');
