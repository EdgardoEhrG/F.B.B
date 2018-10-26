<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Yeoman</title>

<link rel="shortcut icon" href="../Images/I/yeoman.png" type="image/x-icon">

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
        <a class="navbar-brand">Yeoman</a>
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
    <h3 class="panel-title">Быстрая инициализация проекта</h3>
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
          <a href="https://habrahabr.ru/post/246349/">* Yeoman</a><br />
          <br />

          <span class="v"><strong># Элементы</strong></span><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BA%D0%B0%D1%84%D1%84%D0%BE%D0%BB%D0%B4%D0%B8%D0%BD%D0%B3">* Скаффолдинг</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://yeoman.io/">* Yeoman Docs</a>
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
              - Создает каркас проекта (для быстрого разворачивания).<br />
              - Определяет как генерировать структуру проекта.<br />
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

<button class="button5" id="NachB">Начало работы с Yeoman</button>

<!-- The Article -->

<div class="textblock" id="Nach">
  <p>
    <em>============================ Начало работы с Yeoman:</em><br />
      1. <strong>npm install -g yo</strong> - установка Yeoman (глобально).<br />
      2. <strong>npm install generator-gulp-webapp -g</strong> - установка генератора на основе Gulp.<br />
      3. Создать папку проекта и перейти в нее через <strong>cd <имя папки></strong> посредством Cmd.<br />
      4. <strong>yo gulp-webapp</strong> - запуск генератора.

      <figure>
        <img src="../Images/Project.png" />
        <figcaption>
          Структура проекта.
        </figcaption>
      </figure>

      5. <strong>gulp serve</strong> - запуск локального сервера (порт 9000) и автоматическое открытие Web-страницы
      в браузере.
  </p>
</div>

  </div>
</div>

</body>
</html>
