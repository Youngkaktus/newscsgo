<?php
    require_once 'config/connect.php';

    $product_id = $_GET['id'];

    $product = mysqli_query($connect, "SELECT * FROM `s` WHERE `id` = '$product_id'");

    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование статьи</title>
</head>
<body>
    <h3>Редактирование</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Название</p>
        <input type="title" name="title" value="<?= $product['title'] ?>">
        <p>Текст</p>
        <textarea name="text"><?= $product['text'] ?></textarea><br>
        <button type="submit">Обновить</button>
    </form>
</body>
</html>
