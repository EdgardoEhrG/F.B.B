<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Web Design</title>

<link rel="shortcut icon" href="../Images/I/magicwand.png" type="image/x-icon">

<?php require_once('..\Links.html'); ?>

</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
        <a class="navbar-brand">Web Design</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../other.php"><i class="fa fa-undo" aria-hidden="true"></i> Back</a></li>

          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
              <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>

      </ul>
    </div>
  </div>
</div>

<!-- Panel Block -->

<div class="panel panel-warning" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Web-дизайн и проектирование</h3>
  </div>
    <div class="panel-body">

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-question-circle" aria-hidden="true"></i> Справка
</button>

<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Справка</h4>
      </div>
      <div class="modal-body">
        <p>
          <span class="v"><strong># Технологии</strong></span><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%93%D1%80%D0%B0%D1%84%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8F">* GUI</a><br />
          <br />

          <span class="v"><strong># Элементы</strong></span><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%AE%D0%B7%D0%B0%D0%B1%D0%B8%D0%BB%D0%B8%D1%82%D0%B8">* Юзабилити</a><br />
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3">
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Заметки
</button>

<!-- Modal -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Заметки</h4>
      </div>
          <div class="modal-body">
            <p class="textblock">
              <i class="fa fa-magic" aria-hidden="true"></i> Инструменты:<br />
              - <a href="https://chrome.google.com/webstore/detail/perfectpixel-by-welldonec/dkaagdgjmgdmbnecmcefdhjekcoceebi?hl=ru">Pixel-perfect</a> -
              позволяет сравнить PSD-макет со сверстанным вариантом в виде полупрозрачной картинки, накладываемой на верстку для полного
              соответствия с PSD-макетом.
            </p>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        </div>
    </div>
  </div>
</div>

<hr />

<!-- Buttons -->

<button class="button5" id="ProB">Проектирование интерфейса</button>
<button class="button5" id="GraB">Графика</button>
<button class="button5" id="KoB">КоДизайн</button>
<button class="button5" id="LanB">Landing Page</button>

<!-- The Article -->

<div class="textblock" id="Pro">
  <p>
    <em>============================ Проектирование интерфейса:</em><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Характеристики интерфейса:<br />
    - Минимизация ошибок.<br />
    - Скорость работы.<br />
    - Удовлетворенность.<br />
    - Запоминаемость.<br />
    - Скорость обучения.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Gra">
  <p>
    <em>============================ Графика на Web-страницах:</em><br />
     <strong>.jpg</strong> не поддерживает прозрачность, а <strong>.png</strong> - поддерживает прозрачность, как и <strong>.gif</strong><br />
     <strong>.gif</strong> сжимается без потерь, а <strong>.jpg</strong> с потерями.<br /><br />
     <strong>.gif</strong> - используется для изображений с текстом, простой формы, с четкими краями,
     с однотонной сплошной заливкой. Компактная анимация.<br /><br />
     <strong>.jpg</strong> - используется для фотореалистичных изображений и для изображений с плавными
     переходами цвета.<br /><br />
     <strong>.png</strong> - для изображений с прозрачными участками.
  </p>
  <p>
    <span class="v"><strong># CSS-Спрайт</strong></span><br />
    <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BF%D1%80%D0%B0%D0%B9%D1%82_(%D0%BA%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%B0)">* Спрайт</a><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Гораздо меньшее количество запросов к серверу.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Нет задержек при использовании <strong>:hover</strong><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Меньший объем скачиваемых файлов как при обычной загрузке, так и через FTP-клиент.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При верстке необходимо указывать не только само изображение, но и позицию фрагмента.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для изменения одного фрагмента придется переделывать весь файл целиком.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Исп. сдвигом через позицию.<br />
    <a href="http://spritegen.website-performance.org/">* Изготовление спрайтов</a>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Ko">
  <p>
    <em>============================ КоДизайн:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Практика вовлечения (включения) пользователей в процессе создания новых продуктов / сервисов. Совместное проектирование.
      Это делается, чтобы проектировщики, разработчики, дизайнеры, продуктологи и все причастные смогли услышать голос пользователей
      из первых рук.<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Понимание проблем - обмен впечатлениями - выявления возможностей - разработка решений.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Lan">
  <p>
    <em>============================ Проектирование Landing Page:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Уникальное товарное предложение, которое должно привести клиента к оформлению заказа. Отлично подходят для
      проведения рекламной кампании на конкретный товар / услугу с уникальной (низкой) ценой и привлечения на сайт
      целевой аудитории из контекстной рекламы, соцсетей или e-mail-рассылок.<br />
      <a href="https://ru.wikipedia.org/wiki/%D0%A6%D0%B5%D0%BB%D0%B5%D0%B2%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0">* Landing Page</a>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Основная задача - сбор контактных данных целевой аудитории и продажа товара / услуги.
</div>

  <p>
    <span class="v"><strong># Особенности</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Содержит информацию о товаре / услуге.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Усиливает эффективность рекламы.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Привлечение аудитории.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Не имеет навигации. Ни одна кнопка / ссылка не должны вести на другой ресурс.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Большая картинка и описание (не должно быть слишком подробным).<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> 1 страница.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Форма анкеты заказа с кнопкой.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Может содержать видео (о товаре / услуге).<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Заголовок должен быть коротким и точным + логотип.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Предложение!<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Оптимизация исключительно под ключевые запросы.<br />
  </p>
</div>

 </div>
</div>

</body>
</html>
