<?php
include_once 'header.php';
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Ranking</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style.scss">
    <link rel="icon" href="/img/favicon.png">
  </head>
  <body>

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
                        <img src="/img/s1mple.png" width="250px" height="250px" alt="">
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
                          <img src="/img/lgd.png" alt="" width="25px" height="25px">
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
                          <img src="/img/logo2.png" alt="" width="25px" height="25px">
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
                          <img src="/img/logo3.png" alt="" width="25px" height="25px">
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
                          <img src="/img/logo4.png" alt="" width="25px" height="25px">
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
                          <img src="/img/logo5.png" alt="" width="25px" height="25px">
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
                              <img src="/img/logo3.png" alt="" width="30px" height="30px">
                            </div>
                            <div class="box__tour__name">
                              <p>aliktronikz cup</p>
                            </div>
                        </div>
                      </a>
                      <a href="#">
                        <div class="box__tour">
                            <div class="box__news__flag">
                              <img src="/img/logo3.png" alt="" width="30px" height="30px">
                            </div>
                            <div class="box__tour__name">
                              <p>aliktronikz cup</p>
                            </div>
                        </div>
                      </a>
                      <a href="#">
                        <div class="box__tour">
                            <div class="box__news__flag">
                              <img src="/img/logo3.png" alt="" width="30px" height="30px">
                            </div>
                            <div class="box__tour__name">
                              <p>aliktronikz cup</p>
                            </div>
                        </div>
                      </a>
                      <a href="#">
                        <div class="box__tour">
                            <div class="box__news__flag">
                              <img src="/img/logo3.png" alt="" width="30px" height="30px">
                            </div>
                            <div class="box__tour__name">
                              <p>aliktronikz cup</p>
                            </div>
                        </div>
                      </a>
                      <a href="#">
                        <div class="box__tour">
                            <div class="box__news__flag">
                              <img src="/img/logo3.png" alt="" width="30px" height="30px">
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
                    <div class="box__advert">
                      <img src="/img/ad.jpg" alt="" width="500px" height="200px">
                    </div>
                  </a>
                </div>

                <div class="content">
                  <?php $teams = mysqli_query($connect, "SELECT * FROM `teams` ORDER BY (points) DESC"); ?>
                  <?php $teams = mysqli_fetch_all($teams); ?>
                  <?php foreach ($teams as $team): ?>
                      <div class='WrapperRanking' <?=$team[0]?>>
                        <div class="box__ranking">
                            <div class="TeamPosition">
                              <p>#</p>
                            </div>
                            <div class="TeamPicture">
                              <img src="/img/logo4.png" width="25px" height="25px" alt="">
                            </div>
                              <div class="">
                                <div class="TeamTopBlock">
                                    <div class="TeamTitle">
                                      <p><?= $team[1]?></p>
                                    </div>
                                    <div class="TeamPoints">
                                      <p>(<?= $team[2]?> points)</p>
                                    </div>
                                </div>
                                <div class="TeamBottomBlock">
                                    <div class="TeamNick">
                                      <p><?= $team[3]?> |</p>
                                    </div>
                                    <div class="TeamNick">
                                      <p><?= $team[4]?> |</p>
                                    </div>
                                    <div class="TeamNick">
                                      <p><?= $team[5]?> |</p>
                                    </div>
                                    <div class="TeamNick">
                                      <p><?= $team[6]?> |</p>
                                    </div>
                                    <div class="TeamNick">
                                      <p><?= $team[7]?></p>
                                    </div>
                                </div>
                              </div>
                        </div>
                      </div>
                  <?php endforeach; ?>

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
                             <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                             <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                             <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                             <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                             <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                             <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                             <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                             <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                            <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                            <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                            <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                            <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                            <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                            <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                            <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
                            <img src="/img/russia.png" width="24px" height="15px;" alt="">
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
      </div>
    </div>

    <script src='js/score.js'></script>
  </body>
</html>
