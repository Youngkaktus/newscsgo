<!-- шапка -->
      <header class="header">
        <div class="nav__logo">
          <img src="img/logo.png"  width="100px" height="50px" alt="">
        </div>
        <?php  if (isset($_SESSION['username'])) : ?>
          <nav class="nav__menu">
            <ul>
              <li><a href="https://www.youtube.com/watch?v=pOZu1BQBoIQ">news</a></li>
              <li><a href="#">матчи</a> </li>
              <li><a href="#">итоги</a> </li>
              <li><a href="#">турниры</a> </li>
              <li><a href="#">команды</a> </li>
              <li><a href="add.php">Добавить</a> </li>
              <li><a href="index.php?logout='1'">Выйти</a> </li>
            </ul>
          </nav>
        <?php else:?>
          <nav class="nav__menu">
            <ul>
              <li><a href="https://www.youtube.com/watch?v=pOZu1BQBoIQ">news</a></li>
              <li><a href="#">матчи</a> </li>
              <li><a href="#">итоги</a> </li>
              <li><a href="#">турниры</a> </li>
              <li><a href="#">команды</a> </li>
              <li><a href="login.php">войти</a> </li>
              <li><a href="register.php">регистрация</a> </li>
            </ul>
          </nav>
        <?php endif ?>
        <div class="nav__icons">
          <div class="socials__icon">
            <a href="#">
              <img src="img/TG.png" width='35px' alt="Telegram">
            </a>
          </div>
          <div class="socials__icon">
            <a href="#">
              <img src="img/VK.png" width='35px' alt="VK">
            </a>
          </div>
          <div class="socials__icon">
            <a href="#">
              <img src="img/TT.png" width='35px' alt="Tiktok">
            </a>
          </div>
          <div class="socials__icon">
            <a href="#">
              <img src="img/TW.png" width='35px' alt="Twitch">
            </a>
          </div>
        </div>
      </header>
