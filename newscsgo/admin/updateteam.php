<?php
    require_once 'config/connect.php';

    $team_id = $_GET['id'];

    $team = mysqli_query($connect, "SELECT * FROM `teams` WHERE `id` = '$team_id'");

    $team = mysqli_fetch_assoc($team);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование команды</title>
</head>
<body>
    <h3>Редактирование</h3>
    <form action="vendor/updateteam.php" method="post">
        <input type="hidden" name="id" value="<?= $team['id'] ?>">
        <p>Название</p>
        <input type="title" name="title" value="<?= $team['title'] ?>">
        <p>Поинты</p>
        <input type="text" name="points" value="<?= $team['points'] ?>">
        <p>1-й</p>
        <input type="text" name="first" value="<?= $team['first'] ?>">
        <p>2-й</p>
        <input type="text" name="second" value="<?= $team['second'] ?>">
        <p>3-й</p>
        <input type="text" name="thirth" value="<?= $team['thirth'] ?>">
        <p>4-й</p>
        <input type="text" name="fourth" value="<?= $team['fourth'] ?>">
        <p>5-й</p>
        <input type="text" name="fifth" value="<?= $team['fifth'] ?>"><br>
        <button type="submit">Обновить</button>
    </form>
</body>
</html>
