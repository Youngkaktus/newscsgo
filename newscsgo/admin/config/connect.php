<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'articles');

$connect = mysqli_connect('localhost', 'root', '', 'articles');

if (!$connect) {
    die('Error connect to database!');
}
