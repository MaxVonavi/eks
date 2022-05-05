<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Монтаж кранов и ГПО</title>
  <meta name="description" content="">
  <meta name="theme-color" content="#ffffff">
  <meta name="msapplication-TileColor" content="#da532c">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="assets/img/site.webmanifest">
  <!-- <meta name="viewport" content="width=device-width"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/fonts/bicubik.css">
  <link rel="stylesheet" href="assets/fonts/stylesheet.css">
  <link rel="stylesheet" href="assets/fonts/stylesheet (2).css">
  <link rel="stylesheet" href="css/montag.css">
</head>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заполните поля</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="core/mail-form.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Как Вас зовут?</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Введите Ваше имя" name="user_name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Ваш номер</label>
            <input type="tel" class="form-control" id="exampleInputTel1" aria-describedby="TelHelp" placeholder="Введите номер" required name="user_phone">
            <small id="emailHelp" class="form-text text-muted">Мы позвоним один раз. И никому не передадим Ваш номер.</small>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked required>
            <label class="form-check-label" for="exampleCheck1"> <small> Я согласен на обработку своих персональных данных подробнее <a href="legal.html">тут</a></small></label>
          </div>
          <button type="submit" class="btn btn-warning">Жду звонок!</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--                        modal end                        -->

<body>
  <header class="p_header" id="topId">
    <nav class="container-fluid contBlock contBlock--justifyed contBlock--align-centered">
      <a class="logo contBlock contBlock--align-centered" href="index.html">
        <div class="logo_image">
          <img src="assets/img/logo.png" alt="logo">
        </div>
        <span class="logo_title">Экспресс<br>Кран сервис</span>
      </a>
      <!-- <ul class="contBlock contBlock--align-centered limenu">
        <li><a href="#serviceId">Услуги</a></li>
        <li><a href="#descriptionId">Наш подход</a></li>
        <li><a href="#projectsId">Проекты</a></li>
        <li><a href="#contactsId">Контакты</a></li>
      </ul> -->
      <a class="phone" href="#"><span class="yandex-tel">8(812)635-02-05</span></a>
    </nav>
  </header>
  <main class="p_main">
    <section class="p_section p_section--dark">
      <picture class="bg-fullsize">
        <source srcset="assets/images/bg-png.webp, assets/images/bg-png@2x.webp 2x, assets/images/bg-png@3x.webp 3x" type="image/webp"><img src="assets/images/bg-png.jpg" srcset="assets/images/bg-png@2x.jpg 2x, assets/images/bg-png@3x.jpg 3x" alt=""></picture>
      <div class="wrapper contBlock contBlock--column contBlock--align-centered contBlock--centered">
        <h1 class="p_title">Данный раздел в разработке</h1>
        <p class="p_description">Извините за неудобства</p>
        <a href="index.html">
          <button class="button btn-standart btn-warning" type="button" >Вернуться на главную</button>
        </a>
        <picture class="contBlocks">
          <source srcset="assets/images/container-png.webp" type="image/webp">
          <img src="assets/images/container-png.png" alt="">
        </picture>
      </div>
    </section>

  </main>
  <div id="upbutton">
  <a href="#topId">
      <img src="assets/img/up3.png">
    </a>
</div>
  <script src="js/jquery.js"></script>
  <script src="js/libs/siema.min.js"></script>
  <script src="js/montag.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
