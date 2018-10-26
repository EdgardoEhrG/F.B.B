<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Bootstrap</title>

<link rel="shortcut icon" href="../Images/I/bootstrap.png" type="image/x-icon">

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
        <a class="navbar-brand">Bootstrap</a>
    </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../frontend.php"><i class="fa fa-undo" aria-hidden="true"></i> Back</a></li>

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

<!-- Panel -->

<div class="panel panel-warning" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Набор инструментов для создания сайтов и Web-приложений / CSS-фреймворк</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Bootstrap_(%D1%84%D1%80%D0%B5%D0%B9%D0%BC%D0%B2%D0%BE%D1%80%D0%BA)">* Bootstrap</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://getbootstrap.com/">* Bootstrap Docs</a><br />
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
              <i class="fa fa-plus-circle" aria-hidden="true"></i> Достоинства:<br />
              - <strong>Высокая скорость разработки</strong>.<br />
              Фактически Bootstrap представляет собой конструктор, фрагменты которого вы включаете в свой проект при необходимости.
              Это уменьшает время разработки, потому что не требуется придумывать и писать их самостоятельно.<br />
              - <strong>Адаптивный дизайн</strong>.<br />
              Bootstrap направлен на создание макета под разные устройства — ноутбуки, планшеты, смартфоны. При этом код пишется
              один раз, а масштабирование в зависимости от ширины устройства берёт на себя фреймворк.<br />
              - <strong>Совместимость с браузерами</strong>.<br />
              Компоненты библиотеки написаны и протестированы с учётом работы разных браузеров. Это гарантирует, что макет будет
              выглядеть одинаково независимо от выбранного браузера.<br /><br />

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
              - Файлы библиотеки, даже сжатые, занимают довольно много места и увеличивают нагрузку на сервер. С повышением опыта
              нужно загружать и устанавливать только требуемые компоненты Bootstrap, сокращая тем самым объём файлов.<br />
              - Предлагаемые в библиотеке стили могут не подходить под дизайн разрабатываемого сайта и придётся много переделывать.
              В таких случаях, как известно, проще написать всё самому с нуля.<br />
            </p>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        </div>
    </div>
  </div>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-success" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Синтаксис</h3>
  </div>
    <div class="panel-body">

<!-- Buttons -->

<button class="button" id="PodB">Подключение</button>
<button class="button" id="ModB">Модульная сетка</button>
<button class="button" id="StyB">Стили</button>
<button class="button" id="AdaB">Адаптивный дизайн</button>

<!-- The Article -->

<div class="textblock" id="Pod">
  <p>
    <em>============================ Подключение:</em><br />
      1. Скачать архив (структура - CSS, Fonts и JS) и распаковать в проект. Также необходима библиотека jQ.<br />
      2. Подключить файлы в самом проекте:<br />
      <span class="v4"><strong>&lt;script src="../jquery-3.1.1.min.js"&gt;&lt;/script&gt;</strong></span><br />
      <span class="v4"><strong>&lt;link href="../Bootstrap/css/bootstrap.css" rel="stylesheet" /&gt;</strong></span><br />
      <span class="v4"><strong>&lt;script src="../Bootstrap/js/bootstrap.min.js"&gt;&lt;/script&gt;</strong></span>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> <strong>.min</strong> - компактная версия файла (меньший размер, сниженная читаемость кода - удалены комментарии и пробелы). Ускоряет загрузку
  страницы. Меньше нагрузка на сервер, в отличие от исходной версии.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Mod">
  <p>
    <em>============================ Модульная сетка:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Bootstrap характерен своей продуманной и гибкой системой модульных сеток, в основе которой лежит 12-колоночный макет:<br />
      <br />

      <figure>
        <img src="../Images/BC.png" />
      </figure>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Сами колонки не обязательно должны иметь одинаковую ширину, можно комбинировать любое число колонок, главное, чтобы
  они в сумме давали 12.
</div>

  <p>
    <span class="v4"><strong>&lt;div class="container"&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="row"&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="col-xs-3"&gt;3 колонки&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="col-xs-7"&gt;7 колонок&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="col-xs-2"&gt;2 колонки&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;/div&gt;</strong></span><br />
    <br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Класс <span class="v4"><strong>container</strong></span> создаёт макет фиксированной ширины, значение которой зависит от размера устройства. Для мониторов
    максимальная ширина составляет 1170 пикселей, для смартфонов макет будет занимать всю доступную ширину. Если вам не требуется
    ограничивать ширину макета, то вместо класса container следует использовать <span class="v4"><strong>container-fluid</strong></span> (резиновый макет).<br /><br />

    <span class="v"><strong># Отступы между колонок</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Колонки изначально плотно прилегают друг к другу, что не всегда полезно для макета. Для добавления пустого пространства
    между колонками предназначен класс <span class="v4"><strong>col-xs-offset-N</strong></span>, где N изменяется от 0 до 12. Отступ добавляется слева от текущей
    колонки. Отступы добавляются к общему числу колонок, сумма которых не должна превышать 12, в противном случае колонки
    начнут перемещаться на другую строку<br /><br />

    <span class="v"><strong># Сдвиг колонок</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Каждую колонку можно сдвигать влево или вправо на указанное число колонок. Опять же это делается с помощью классов.
    <span class="v4"><strong>col-xs-pull-N</strong></span> — сдвигает колонку влево на заданное число, а <span class="v4"><strong>col-xs-push-N</strong></span> сдвигает вправо (пример 4). Здесь N может
    меняться от 0 до 12. Сдвиг это не дополнительная колонка как при использовании offset, так что суммировать все значения не
    нужно. Ещё надо следить за тем, чтобы колонки не накладывались друг на друга.<br /><br />

    <span class="v"><strong># Вложенные колонки</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При вёрстке сложных макетов двенадцати колонок может не хватить, к тому же в одной колонке могут встречаться ещё дополнительные.<br /><br />

    <span class="v4"><strong>&lt;div class="container"&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="row"&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="col-xs-12"&gt;Заголовок&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="col-xs-5"&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="row"&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="col-xs-12">Колонка 1&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="col-xs-6">Колонка 1-1&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="col-xs-6">Колонка 1-2&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;div class="col-xs-5 col-xs-offset-2">Колонка 2&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;/div&gt;</strong></span><br />
    <span class="v4"><strong>&lt;/div&gt;</strong></span><br /><br />

    <img src="../Images/VC.png" /><br /><br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Заголовок заполняет всю ширину макета, потому что он занимает все 12 колонок. Дополнительный контейнер <span class="v4"><strong>row</strong></span>
    для подобных вещей вводить не обязательно, перенос остальных колонок на другую строку произойдет автоматически.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sty">
  <p>
   <em>============================ Стили:</em><br />
     <a href="https://webref.ru/layout/bootstrap/css" class="btn btn-primary" role="button">Boots Docs</a>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Ada">
  <p>
   <em>============================ Адаптивный дизайн:</em><br />
     <a href="https://webref.ru/layout/bootstrap/responsive" class="btn btn-primary" role="button">Boots Docs</a>
  </p>
</div>

  </div>
</div>

</body>
</html>
