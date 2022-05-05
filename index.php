<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#ffffff">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="yandex-verification" content="8b799dad39a0f036" />
  <meta name="google-site-verification" content="v7uDdh9Gke6bRKbeMpYFiu0BGy2ywwTbKpjpqwzo8jc" />
  <meta name="description" content="Профессиональный сервис по ремонту, обслуживанию, монтажу и демонтажу грузоподъемного оборудования и кранов. Быстро и качественно.">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="assets/img/site.webmanifest">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <title>Экспресс Кран Сервис</title>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53869339, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53869339" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<?php include_once "php/modal.php" ?>

<body>
  <header>
    <div class="container-fluid">
      <div class="logo">
        <img src="assets/img/logo.png" alt="logo">
        <div class="logo-text">Экспресс Кран сервис</div>
      </div>
      <ul class="topUl">
        <li><a href="#service">Услуги</a></li>
        <li><a href="#contacts">Контакты</a></li>
      </ul>
      <div class="telefon"><span class="yandex-tel">8(812)635-02-05</span></div>
    </div>
  </header>
  <main>
    <div class="firstBlock">
      <div class="container-fluid">
        <div class="row">
          <div class="col-2"></div>
          <div class="col-4">
            <h2>Лучшие в <br>своём деле!</h2>
            <h1 class="descripter">Монтаж, демонтаж, ремонт и обслуживание грузоподъемного оборудования.</h1>
            <a href="examples.php">
            <button type="button" class="btn btn-warning btn-yellow btn-top" name="button">Узнать подробнее</button>
            </a>
          </div>
          <div class="col-4">
            <div class="img-crane-top">
              <img src="assets/img/crane-top.jpg" alt="crane">
            </div>
          </div>
          <div class="col-2"></div>
        </div>
      </div>
    </div>
    <div class="twoBlock" id="service">
      <div class="crane-mini-left">
        <img src="assets/img/crane-mini-left.png" alt="crane-mini">
      </div>
      <div class="container-fluid px-0 mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-3 dark-bg cardService" id="remontHref">
              <div class="img-group mx-auto">
                <img class="img-center img-opacity" src="assets/img/construction.svg" alt="construction">
                <img class="ellipse-yellow" src="assets/img/ellipse-yellow.svg" alt="ellipse-yellow">
              </div>
              <h4>Ремонт, обслуживание грузоподъемного оборудования</h4>
            </div>
          <div class="col-3 light-bg cardService" id="montagHref">
            <div class="img-group mx-auto">
              <img class="img-center img-opacity" src="assets/img/hook.svg" alt="hook">
              <img class="ellipse-yellow" src="assets/img/ellipse-yellow.svg" alt="ellipse-yellow">
            </div>
            <h4>Монтаж грузоподъемного оборудования</h4>
          </div>
          <div class="col-3 dark-bg cardService" id="demontagHref">
            <div class="img-group mx-auto">
              <img class="img-center img-opacity" src="assets/img/wheelbarrow.svg" alt="wheelbarrow">
              <img class="ellipse-yellow" src="assets/img/ellipse-yellow.svg" alt="ellipse-yellow">
            </div>
            <h4>Демонтаж грузоподъемного оборудования</h4>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="row d-flex justify-content-center">
          <div class="col-3 light-bg cardService" id="modernHref">
            <div class="img-group mx-auto">
              <img class="img-center img-opacity" src="assets/img/execution.svg" alt="execution">
              <img class="ellipse-yellow" src="assets/img/ellipse-yellow.svg" alt="ellipse-yellow">
            </div>
            <h4>Модернизация грузоподъемного оборудования</h4>
          </div>
          <div class="col-3 dark-bg cardService" id="remontPuteyHref">
            <div class="img-group mx-auto">
              <img class="img-center img-opacity" src="assets/img/tools.svg" alt="tools">
              <img class="ellipse-yellow" src="assets/img/ellipse-yellow.svg" alt="ellipse-yellow">
            </div>
            <h4>Ремонт подкрановых путей</h4>
          </div>
          <div class="col-3 light-bg cardService" id="restavHref">
            <div class="img-group mx-auto">
              <img class="img-center" src="assets/img/wheel.png" alt="wheel">
              <img class="ellipse-yellow" src="assets/img/ellipse-yellow.svg" alt="ellipse-yellow">
            </div>
            <h4>Наплавка, реставрация крановых колес, роликов и прочих изделий</h4>
          </div>
        </div>
      </div>
      <div class="containers-mini-right">
        <img src="assets/img/containers.png" alt="containers">
      </div>
    </div>
  </main>
  <footer id="contacts">
    <div class="container-fluid px-0">
      <div class="crane-bottom">
        <img src="assets/img/crane-bottom.jpg" alt="crane-bottom">
      </div>
      <div class="contacts mb-5">
        <div class="email">
          <div class="email-img">
            <img src="assets/img/email.svg" alt="email">
          </div>
          <div class="email-text">
            kran-eks@bk.ru
          </div>
        </div>
        <div class="tel-bottom">
          <div class="tel-bottom-img">
            <img src="assets/img/telephone.svg" alt="telephone">
          </div>
          <div class="tel-bottom-text">
            <span class="yandex-tel">8(812)635-02-05</span>
          </div>
        </div>
        <button type="button" class="btn btn-warning btn-yellow btn-bottom" name="button" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button>
      </div>
    </div>
  </footer>
</body>
<script src="js/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
</html>
