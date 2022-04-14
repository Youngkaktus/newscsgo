<?php

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
  <h3>Добавить команду</h3>
  <form action="vendor/createteam.php" method="post">
      <p>Название команды</p>
      <input type="title" name="title">
      <p>Поинты</p>
      <input name="points"><br>
      <p>Первый игрок</p>
      <input name="first"><br>
      <p>Второй игрок</p>
      <input name="second"><br>
      <p>Третий игрок</p>
      <input name="thirth"><br>
      <p>Четвёртый игрок</p>
      <input name="fourth"><br>
      <p>Пятый игрок</p>
      <input name="fifth"><br>
      <button type="submit">Создать</button>
  </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Название команды</th>
            <th>Поинты</th>
            <th>1-й</th>
            <th>2-й</th>
            <th>3-й</th>
            <th>4-й</th>
            <th>5-й</th>
        </tr>

        <?php
            $teams = mysqli_query($connect, "SELECT * FROM `teams` ORDER BY (points) DESC");
            $teams = mysqli_fetch_all($teams); ?>

            <?php foreach ($teams as $team): ?>
                    <tr>
                        <td><?= $team[0] ?></td>
                        <td><?= $team[1] ?></td>
                        <td><?= $team[2] ?></td>
                        <td><?= $team[3] ?></td>
                        <td><?= $team[4] ?></td>
                        <td><?= $team[5] ?></td>
                        <td><?= $team[6] ?></td>
                        <td><?= $team[7] ?></td>
                        <td><a href="updateteam.php?id=<?= $team[0] ?>">Отредактировать</a></td>
                        <td><a style="color: red;" href="vendor/deleteteam.php?id=<?= $team[0] ?>">Удалить</a></td>
                    </tr>
                <?php endforeach; ?>
      </table>

  <h3>Добавить статью</h3>
  <form action="vendor/create.php" method="post">
      <p>Заголовок</p>
      <input type="text" name="title">
      <p>Текст</p>
      <textarea name="text"></textarea><br>
      <button type="submit">Создать</button>
  </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Текст</th>
            <th>Дата</th>
        </tr>

        <?php
            $products = mysqli_query($connect, "SELECT * FROM `s` ORDER BY (id) DESC");
            $products = mysqli_fetch_all($products); ?>

            <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[2] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><a href="product.php?id=<?= $product[0] ?>">Открыть пост</a></td>
                        <td><a href="update.php?id=<?= $product[0] ?>">Отредактировать</a></td>
                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
                    </tr>
                <?php endforeach; ?>
    </table>
</body>
</html>
