<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$points = $_POST['points'];
$first = $_POST['first'];
$second = $_POST['second'];
$thirth = $_POST['thirth'];
$fourth = $_POST['fourth'];
$fifth = $_POST['fifth'];

mysqli_query($connect,"INSERT INTO `teams` (`id`, `title`, `points`, `first`, `second`, `thirth`, `fourth`, `fifth`) VALUES (NULL, '$title', '$points', '$first', '$second', '$thirth', '$fourth', '$fifth')");

header('Location: /admin');
