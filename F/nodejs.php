<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Node.js</title>

<link rel="shortcut icon" href="../Images/I/node.png" type="image/x-icon">

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
        <a class="navbar-brand">Node.js</a>
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
    <h3 class="panel-title">Серверный JavaScript</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Node.js">* Node.js</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://nodejs.org/en/">* Node.js Docs</a>
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
  <i class="fa fa-terminal" aria-hidden="true"></i> Cmd
</button>

<!-- Modal -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Cmd</h4>
      </div>
      <div class="modal-body">
        <p class="textblock">
          <strong>node -v</strong> - проверка версии.<br />
          <strong>node Server.js</strong> - запуск сервера.<br />
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal4">
  <i class="fa fa-cube" aria-hidden="true"></i> npm
</button>

<!-- Modal -->

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Node.js  Package  Manager</h4>
      </div>
      <div class="modal-body">
        <strong>npm -v</strong> - проверка номеров версий менеджера пакетов.<br />
        <strong>npm install пакет</strong> - установка модулей Node.js и зависимостей, которые указаны в <strong>package.json</strong>.<br />
        <strong>npm uninstall пакет</strong> - удаление модуля / пакета.<br />
        <br />

        <span class="v"><strong># Атрибуты</strong></span>
        <strong>--save-dev</strong> - сохранить в указанную директорию.<br />
        <strong>-g</strong> - глобальная установка.<br />
        <strong>--save</strong> - запись (зависимость) в <strong>package.json</strong>.<br />
        <br />

        <span class="v"><strong># Пакеты</strong></span><br />
        <strong>instagram-node</strong> - пакет для работы с API Instagram.<br />
        <br />

        <span class="v"><strong># Заметки</strong></span><br />
        - Пакеты расширяют функциональность Web-приложения. Gulp, Grunt, Less тоже являются пакетами.<br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal5">
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Заметки
</button>

<!-- Modal -->

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Заметки</h4>
      </div>
          <div class="modal-body">
            <p class="textblock">
              <i class="fa fa-plus-circle" aria-hidden="true"></i> Достоинства:<br />
              - Выполняет роль Web-сервера.<br />
              - 1 поток - обработка всех запросов.<br />
              - Позволяет строить в реальном времени открытые API (для приложений).<br />
              - Быстрый показ данных.<br />
              - Идеально подходит для работы с множеством соединений и задач одновременно.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Недоступна работа с DOM, BOM.<br />
              <br>

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br>
              - Не годится для app, которые будут использовать CPU в больших объемах.<br>
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

<button class="button5" id="NachB">Начало работы с Node.js</button>
<button class="button5" id="SerB">Server.js</button>
<button class="button5" id="ModB">Модули</button>
<button class="button5" id="PathB">Path</button>
<button class="button5" id="OsB">OS</button>
<button class="button5" id="FileB">File System</button>
<button class="button5" id="SobB">События</button>


<!-- Article -->

<div class="textblock" id="Nach">
  <p>
    <em>============================ Начало работы с Node.js:</em><br />
      1. Любое приложение на Node.js начинается и настраивается через <strong>package.json</strong>.
      В этом файле хранятся - имя проекта, версия, автор, репозиторий, описание, лицензия, используемые зависимости и многое другое.<br />
      2. <strong>npm init</strong> - создание и инициализация <strong>package.json</strong>.<br />
      3. В свойстве <strong>main</strong> указывается Node.js какой файл следует использовать, когда необходимо запустить App.
      Обычно это <strong>Server.js</strong>.<br />
      4. С помощью Express.js создается каркас приложения (не обязательно).<br />
      5. Запуск сервера.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Чтобы сервер автоматически перезагружался при изменениях файла / файлов (слежение) есть npm-пакет nodemon.<br />
  <strong>npm install -g nodemon</strong> - установка пакета.<br />
  <strong>nodemon Server.js</strong> - слежение за серверным файлом и автоматическая перезагрузка сервера при изменениях.
</div>
</div>

<!-- The Article -->

<div class="textblock" id="Ser">
  <p>
    <em>============================ Server.js:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Создание простого сервера.<br />

<code>
<pre>
<strong>

var http = require("http");
http.createServer(function(request, response){
  response.end("text");
}).listen(3000, "127.0.0.1", function(){
  console.log("Port 3000 is using...");
})

</strong>
</pre>
</code>

  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mod">
  <p>
    <em>============================ Модули:</em><br />

<code>
<pre>
<strong>

1. moduleA.js

let s = 10;

module.exports = s;

2. moduleB.js

const mA = require('./имя_модуля.js');

console.log(m.s); //10

</strong>
</pre>
</code>

  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Path">
  <p>
    <em>============================ Модуль работы с путями:</em><br />
      <code>
        <strong>
          const path = require('path');
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Os">
  <p>
    <em>============================ Модуль работы с ОС:</em><br />
      <code>
        <strong>
          const os = require('os');<br />
          <br />

          // Память<br />
          os.totalmem() - вся память.<br />
          os.freemem() - доступная память.<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="File">
  <p>
    <em>============================ Модуль работы с файловой системой:</em><br />
      <code>
        <strong>
          const fs = require('fs');<br />
          <br />

          fs.readdirSync('./') - имеющиеся файлы в текущей директории.<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sob">
  <p>
    <em>============================ Модуль событий:</em><br />
  </p>
</div>

  </div>
</div>

</body>
</html>
