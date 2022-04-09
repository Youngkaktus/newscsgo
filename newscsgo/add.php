<?php
  session_start();

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Amatorka</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>

<?php include_once 'header.php' ?>


<!-- Главный контейнер -->
      <div class="wrapper">
          <div class="container">
            <div class="colcon">

<!-- Левый блок -->
              <div class="leftcol">
                <aside>
                  <a href="#">
                    <div class="box__player">
                      <div class="box__player__picture">
                        <img src="img/s1mple.png" width="250px" height="250px" alt="">
                      </div>

                      <div class="box-wrap">
                          <div class="box__player__name">
                            <p>s1mple</br>
                              Player of the week
                            </p>
                          </div>
                        </div>

                    </div>
                  </a>
                </aside>
                <aside>
                  <div class="box__teams">
                    <div class="box__teams__title">
                      <h2><a href="#">Рейтинг команд</a></h2>
                    </div>

                    <div class="box__ranks__name">
                        <div class="box__rank__number">
                          <p>1.</p>
                        </div>
                        <div class="box__news__flag">
                          <img src="img/lgd.png" alt="" width="25px" height="25px">
                        </div>
                        <div class="box__rank__team">
                          <a href="#"><p>lgd</p></a>
                        </div>
                    </div>

                    <div class="box__ranks__name">
                        <div class="box__rank__number">
                          <p>2.</p>
                        </div>
                        <div class="box__news__flag">
                          <img src="img/logo2.png" alt="" width="25px" height="25px">
                        </div>
                        <div class="box__rank__team">
                          <a href="#"><p>navi</p></a>
                        </div>
                    </div>

                    <div class="box__ranks__name">
                        <div class="box__rank__number">
                          <p>3.</p>
                        </div>
                        <div class="box__news__flag">
                          <img src="img/logo3.png" alt="" width="25px" height="25px">
                        </div>
                        <div class="box__rank__team">
                          <a href="#"><p>secret</p></a>
                        </div>
                    </div>

                    <div class="box__ranks__name">
                        <div class="box__rank__number">
                          <p>4.</p>
                        </div>
                        <div class="box__news__flag">
                          <img src="img/logo4.png" alt="" width="25px" height="25px">
                        </div>
                        <div class="box__rank__team">
                          <a href="#"><p>alliance</p></a>
                        </div>
                    </div>

                    <div class="box__ranks__name">
                        <div class="box__rank__number">
                          <p>5.</p>
                        </div>
                        <div class="box__news__flag">
                          <img src="img/logo5.png" alt="" width="25px" height="25px">
                        </div>
                        <div class="box__rank__team">
                          <a href="#"><p>gambit</p></a>
                        </div>
                    </div>

                    <div class="box__teams__all">
                      <a href="#">
                        <p>
                          Показать весь список </br>
                          Последнее обновление: 21.03.2022
                        </p>
                      </a>
                    </div>
                  </div>
                </aside>
                <aside>
                  <div class="box__teams">
                    <div class="box__teams__title">
                      <h2><a href="#">Турниры</a></h2>
                    </div>

                      <a href="#">
                        <div class="box__tour">
                            <div class="box__news__flag">
                              <img src="img/logo3.png" alt="" width="30px" height="30px">
                            </div>
                            <div class="box__tour__name">
                              <p>aliktronikz cup</p>
                            </div>
                        </div>
                      </a>
                      <a href="#">
                        <div class="box__tour">
                            <div class="box__news__flag">
                              <img src="img/logo3.png" alt="" width="30px" height="30px">
                            </div>
                            <div class="box__tour__name">
                              <p>aliktronikz cup</p>
                            </div>
                        </div>
                      </a>
                      <a href="#">
                        <div class="box__tour">
                            <div class="box__news__flag">
                              <img src="img/logo3.png" alt="" width="30px" height="30px">
                            </div>
                            <div class="box__tour__name">
                              <p>aliktronikz cup</p>
                            </div>
                        </div>
                      </a>
                      <a href="#">
                        <div class="box__tour">
                            <div class="box__news__flag">
                              <img src="img/logo3.png" alt="" width="30px" height="30px">
                            </div>
                            <div class="box__tour__name">
                              <p>aliktronikz cup</p>
                            </div>
                        </div>
                      </a>
                      <a href="#">
                        <div class="box__tour">
                            <div class="box__news__flag">
                              <img src="img/logo3.png" alt="" width="30px" height="30px">
                            </div>
                            <div class="box__tour__name">
                              <p>aliktronikz cup</p>
                            </div>
                        </div>
                      </a>

                    <div class="box__teams__all">
                      <a href="#">
                        <p>
                          Показать весь список </br>
                          Последнее обновление: 21.03.2022
                        </p>
                      </a>
                    </div>
                  </div>
                </aside>
              </div>

<!-- центральный блок -->
              <div class="contentcol">
                <div>
                  <a href="#">
                    <div class="box__news">
                      <form>
                        <input type="text" name="title" id='title' placeholder='Введите заголовок'>
                        <input type="text" name="intro" id='intro' placeholder='Введите интро'>
                        <textarea name="text" id='text' placeholder="Введите текст"></textarea>
                        <button type="button" id='addbtn'>Добавить</button>
                      </form>
                    </div>
                  </a>
                </div>
              </div>
<!-- Правый блок -->
              <div class="rightcol">
                <aside>
                  <div class="box__matches">
                    <div class="box__teams__title">
                      <h2><a href="#">Матчи</a></h2>
                    </div>

                     <a href="https://www.youtube.com/watch?v=W7Pqyf-OzB4">
                       <div class="box__match__main">
                         <div class="box__match">
                           <div class="box__news__flag">
                             <img src="img/russia.png" width="24px" height="15px;" alt="">
                           </div>
                           <div class="box__match__names">
                             <p>test</p>
                           </div>
                           <div class="box__match__score score">
                             <p>(2)</p>
                           </div>
                         </div>
                         <div class="box__match">
                           <div class="box__news__flag">
                             <img src="img/russia.png" width="24px" height="15px;" alt="">
                           </div>
                           <div class="box__match__names">
                             <p>test</p>
                           </div>
                           <div class="box__match__score score">
                             <p>(0)</p>
                           </div>
                         </div>
                       </div>
                     </a>

                     <a href="https://www.youtube.com/watch?v=W7Pqyf-OzB4">
                       <div class="box__match__main">
                         <div class="box__match">
                           <div class="box__news__flag">
                             <img src="img/russia.png" width="24px" height="15px;" alt="">
                           </div>
                           <div class="box__match__names">
                             <p>faze</p>
                           </div>
                           <div class="box__match__score__end score">
                             <p>(2)</p>
                           </div>
                         </div>
                         <div class="box__match">
                           <div class="box__news__flag">
                             <img src="img/russia.png" width="24px" height="15px;" alt="">
                           </div>
                           <div class="box__match__names">
                             <p>fnatic</p>
                           </div>
                           <div class="box__match__score__end score">
                             <p>(1)</p>
                           </div>
                         </div>
                       </div>
                     </a>

                     <a href="https://www.youtube.com/watch?v=W7Pqyf-OzB4">
                       <div class="box__match__main">
                         <div class="box__match">
                           <div class="box__news__flag">
                             <img src="img/russia.png" width="24px" height="15px;" alt="">
                           </div>
                           <div class="box__match__names">
                             <p>faze</p>
                           </div>
                           <div class="box__match__score score">
                             <p>(1)</p>
                           </div>
                         </div>
                         <div class="box__match">
                           <div class="box__news__flag">
                             <img src="img/russia.png" width="24px" height="15px;" alt="">
                           </div>
                           <div class="box__match__names">
                             <p>fnatic</p>
                           </div>
                           <div class="box__match__score score">
                             <p>(1)</p>
                           </div>
                         </div>
                       </div>
                     </a>

                     <a href="https://www.youtube.com/watch?v=W7Pqyf-OzB4">
                       <div class="box__match__main">
                         <div class="box__match">
                           <div class="box__news__flag">
                             <img src="img/russia.png" width="24px" height="15px;" alt="">
                           </div>
                           <div class="box__match__names">
                             <p>faze</p>
                           </div>
                           <div class="box__match__score__end score">
                             <p>(1)</p>
                           </div>
                         </div>
                         <div class="box__match">
                           <div class="box__news__flag">
                             <img src="img/russia.png" width="24px" height="15px;" alt="">
                           </div>
                           <div class="box__match__names">
                             <p>fnatic</p>
                           </div>
                           <div class="box__match__score__end score">
                             <p>(2)</p>
                           </div>
                         </div>
                       </div>
                     </a>

                  </div>

                  <div class="box__results">
                    <div class="box__teams__title">
                      <h2><a href="#">Итоги матчей</a></h2>
                    </div>

                    <a href="https://www.youtube.com/watch?v=W7Pqyf-OzB4">
                      <div class="box__match__main">
                        <div class="box__match">
                          <div class="box__news__flag">
                            <img src="img/russia.png" width="24px" height="15px;" alt="">
                          </div>
                          <div class="box__match__names">
                            <p>faze</p>
                          </div>
                          <div class="box__match__score__end score">
                            <p>(2)</p>
                          </div>
                        </div>
                        <div class="box__match">
                          <div class="box__news__flag">
                            <img src="img/russia.png" width="24px" height="15px;" alt="">
                          </div>
                          <div class="box__match__names">
                            <p>fnatic</p>
                          </div>
                          <div class="box__match__score__end score">
                            <p>(0)</p>
                          </div>
                        </div>
                      </div>
                    </a>

                    <a href="https://www.youtube.com/watch?v=W7Pqyf-OzB4">
                      <div class="box__match__main">
                        <div class="box__match">
                          <div class="box__news__flag">
                            <img src="img/russia.png" width="24px" height="15px;" alt="">
                          </div>
                          <div class="box__match__names">
                            <p>faze</p>
                          </div>
                          <div class="box__match__score__end score">
                            <p>(2)</p>
                          </div>
                        </div>
                        <div class="box__match">
                          <div class="box__news__flag">
                            <img src="img/russia.png" width="24px" height="15px;" alt="">
                          </div>
                          <div class="box__match__names">
                            <p>fnatic</p>
                          </div>
                          <div class="box__match__score__end score">
                            <p>(1)</p>
                          </div>
                        </div>
                      </div>
                    </a>

                    <a href="https://www.youtube.com/watch?v=W7Pqyf-OzB4">
                      <div class="box__match__main">
                        <div class="box__match">
                          <div class="box__news__flag">
                            <img src="img/russia.png" width="24px" height="15px;" alt="">
                          </div>
                          <div class="box__match__names">
                            <p>faze</p>
                          </div>
                          <div class="box__match__score__end score">
                            <p>(2)</p>
                          </div>
                        </div>
                        <div class="box__match">
                          <div class="box__news__flag">
                            <img src="img/russia.png" width="24px" height="15px;" alt="">
                          </div>
                          <div class="box__match__names">
                            <p>fnatic</p>
                          </div>
                          <div class="box__match__score__end score">
                            <p>(1)</p>
                          </div>
                        </div>
                      </div>
                    </a>

                    <a href="https://www.youtube.com/watch?v=W7Pqyf-OzB4">
                      <div class="box__match__main">
                        <div class="box__match">
                          <div class="box__news__flag">
                            <img src="img/russia.png" width="24px" height="15px;" alt="">
                          </div>
                          <div class="box__match__names">
                            <p>faze</p>
                          </div>
                          <div class="box__match__score score">
                            <p>(1)</p>
                          </div>
                        </div>
                        <div class="box__match">
                          <div class="box__news__flag">
                            <img src="img/russia.png" width="24px" height="15px;" alt="">
                          </div>
                          <div class="box__match__names">
                            <p>fnatic</p>
                          </div>
                          <div class="box__match__score score">
                            <p>(2)</p>
                          </div>
                        </div>
                      </div>
                    </a>

                  </div>
                </aside>
              </div>
            </div>
          </div>
      </div>

<!-- Подвал -->
    <div class="wrapper">
      <div class='footer'>
        <div class="footer__box1">
          <ul class='footer_links'>
            <li><a href="#">Amatorka Feed</a></li>
            <li><a href="#">What if Amatorka</a></li>
            <li><a href="#">shop</a></li>
            <li><a href="#">business contact</a></li>
          </ul>
        </div>
        <div class="footer__box1">
          <ul class='footer_links'>
            <li><a href="#">instagramm</a></li>
            <li><a href="#">youtube</a></li>
            <li><a href="#">tiktok</a></li>
            <li><a href="#">vk</a></li>
            <li><a href="#">discord</a></li>
          </ul>
        </div>
        <div class="footer__box1">
          <ul class='footer_links'>
            <li><a href="#">faq</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">contest terms</a></li>
          </ul>
        </div>
      </div>
    </div>

    <script src='js/score.js'></script>
  </body>
</html>
