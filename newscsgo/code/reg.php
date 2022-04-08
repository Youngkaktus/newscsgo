<?php
    require "connection.php";

    $login = trim($_POST['login']);
    $password = $_POST['password'];

    $error = '';
    if (strlen($login) < 3) $error = "Логин должен содержать не менее 3 символов";
    else if (strlen($password) < 8) $error = "Пароль должен содержать не менее 8 символов";

    if ($error) {
        echo $error;
        exit();
    }

    $hash = 'BNksda87TG@Hkhdbsak73fgdah';
    $password = md5($password.$hash);

    $connection -> query("INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password')");
    echo "ready";

?>
