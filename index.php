<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./styl.css">
      <script src="./script.js" defer></script>
      <title>сайтик</title>
  </head>
  <body>
      <div id="head">
        <div id="sort"></div>
        <div id="redact"></div>
      </div>
      <div class="fex">
          <?php
            for ($i = 0; $i <= 5; $i++) {
              echo "<a class=\"standart_div\" href=\"https://www.youtube.com\">
                      <img src=\"./src/bear.jpg\">
                      <p class=\"stp\">цена: 250tg</p>
                      <p class=\"stp\">размер: 10cm</p>
                    </a>";
            }   
          ?>
      </div>
      <div id="linerer">
        <div id="why">
          <ul>
            <li class="liner">милые , мягкие игрушки</li>
            <li class="liner">для всех возростов</li>
            <li class="liner">универсальный или тематический подарок</li>
            <li class="liner">делаю быстро и с любовью</li>
            <li class="liner">учту ваши пожелания</li>

          </ul>
        </div>
        <a id="inst" href="https://www.youtube.com">
          <h1>по всем вопросам и для заказа обращаться в инстаграмм</h1>
          <img src="./src/inst logo.png" alt="">
        </a>
      </div>
  </body>
</html>
