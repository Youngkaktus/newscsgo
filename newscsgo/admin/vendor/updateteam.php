<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$points = $_POST['points'];
$first = $_POST['first'];
$second = $_POST['second'];
$thirth = $_POST['thirth'];
$fourth = $_POST['fourth'];
$fifth = $_POST['fifth'];


mysqli_query($connect, "UPDATE `teams` SET `title`='$title',`points`='$points',`first`='$first',`second`='$second',`thirth`='$thirth',`fourth`='$fourth',`fifth`=`$fifth` WHERE `teams`.`id` = '$id'");

header('Location: /admin');
