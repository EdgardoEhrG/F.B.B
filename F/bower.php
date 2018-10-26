<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Bower</title>

<link rel="shortcut icon" href="../Images/I/bower.png" type="image/x-icon">

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
        <a class="navbar-brand">Bower</a>
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
    <h3 class="panel-title">Менеджер пакетов</h3>
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
          <a href="https://xakep.ru/2014/05/30/bower-package-manager/">* Bower</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://bower.io/">* Bower Docs</a><br />
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
              - Bower дает полный контроль над установкой и управлением библиотеками и их зависимостями - легко отслеживать
              новые версии (поддержка версионности и их актуального состояния).<br />
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

<button class="button5" id="NachB">Начало работы с Bower</button>

<!-- The Article -->

<div class="textblock" id="Nach">
  <p>
    <em>============================ Начало работы с Bower:</em><br />
      1. <strong>npm install bower -g</strong> - установка Bower.<br />
      2. <strong>npm install bower --save-dev</strong> - установка Bower в проект.<br />
      3. <strong>bower init</strong> - создание управляющего файла <strong>bower.json</strong> и его инициализация.<br />
      <br />

      <span class="v"><strong># Установка пакетов</strong></span><br />
      <strong>bower install --save-dev <пакет></strong> - установка зависимостей.<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Пакеты:<br />
      <strong>jquery</strong> - установка библиотеки jQuery (последней версии).<br />
      <strong>bootstrap</strong> - Twitter Bootstrap.<br />
      <strong>fontawesome</strong> - иконки.<br />
      <strong>mocha</strong> - тестирование JS.<br />
      <strong>d3</strong> - визуализация данных.<br />
      <strong>vue</strong> - JS-фреймворк Vue.<br />
      <strong>backbone</strong> - JS-фреймворк Backbone.<br />
      <br />

      <strong>bower update <пакет></strong> - обновление пакетов (зависимостей)<br />
      <br />

      <span class="v"><strong># Ссылка на пакеты</strong></span><br />
      <span class="v2"><strong>&lt;link href="../bower_components/имя_пакета/файл" rel=""&gt;</strong></span> - подключение пакета.<br />
  </p>
</div>

  </div>
</div>

</body>
</html>
