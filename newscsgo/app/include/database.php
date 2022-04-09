<?php

$link = mysqli_connect('localhost', 'root', '', 'articles');

if(mysqli_connect_errno())
{
  echo 'Ошбка в подключении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
  exit();
}
