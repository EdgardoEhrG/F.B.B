<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>JSON</title>

<link rel="shortcut icon" href="../Images/I/Json.png" type="image/x-icon">

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
        <a class="navbar-brand">JSON</a>
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
    <h3 class="panel-title">Текстовый формат обмена данными</h3>
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
          <a href="https://ru.wikipedia.org/wiki/JSON">* JSON</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://www.json.org/json-ru.html">* JSON Docs</a><br />
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
              - Упрощает получение данных с сервера.<br />
              - Более простая генерация данных и их чтение.<br />
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

<button class="button5" id="SinB">Синтаксис</button>

<!-- The Article -->

<div class="textblock" id="Sin">
  <p>
    <em>============================ Синтаксис:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Создание JSON-объекта:<br />
      <code>
        <strong>
          {<br />
            &nbsp;свойство: "значение"<br />
          }<br /><br />
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Значение свойств заключается в двойные кавычки.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> JSON не может хранить функции и переменные.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Вариации данных - объект, объект объектов, массив объектов.<br />
</div>

  <p>
    <span class="v"><strong># Форматирование данных (JS)</strong></span><br />
    <span class="v3"><strong>var переменная = JSON.stringify(object)</strong></span> - сериализация объекта в JSON-формат.<br />
    <span class="v3"><strong>var переменная2 = JSON.parse(переменная)</strong></span> - десериализация JSON-объекта в JS-объект.<br />
  </p>

</div>

  </div>
</div>

</body>
</html>
