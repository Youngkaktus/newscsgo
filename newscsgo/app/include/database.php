<?php

$connect = mysqli_connect('localhost', 'root', '', 'articles');

if (!$connect) {
    die('Error connect to database!');
}
