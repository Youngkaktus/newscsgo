<?php

function get_categories($link){
  $sql = "SELECT * FROM `s`;";

  $result = mysqli_query($link, $sql);

  $categories = mysqli_fetch_all($result, 1);

  return $categories;
}

function articles_new($link, $title, $text, $date){
  $title = trim($title);
  $text = trim($text);
  $date = trim($date);

  if ($title = '')
    return false;

  $t = "INSERT INTO `s` (title, text, date) VALUES ('%s', '%s', '%s')";

  $query = sprintf($t,
mysqli_real_escape_string($link, $title),
mysqli_real_escape_string($link, $text),
mysqli_real_escape_string($link, $date));

$result = mysqli_query($link, $query);

if (!$result)
  die(mysqli_error($link));

return true;
}
