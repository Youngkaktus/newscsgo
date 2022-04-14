<?php
    require_once 'config/connect.php';

    $product_id = $_GET['id'];

    $product = mysqli_query($connect, "SELECT * FROM `s` WHERE `id` = '$product_id'");

    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <title><?= $product['title'] ?></title>
</head>
<body>
    <div class="article__title">
        <h2><?= $product['title'] ?></h2>
    </div>
    <div class="article__date">
        <h4><?= $product['date'] ?></h4>
    </div>
    <div class="article__text">
        <p><?= $product['text'] ?></p>
    </div>
</body>
</html>
