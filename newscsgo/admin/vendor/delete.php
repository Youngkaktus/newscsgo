<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `s` WHERE `s`.`id` = '$id'");

header('Location: /admin');
