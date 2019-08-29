<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Express.js</title>

<link rel="shortcut icon" href="../Images/I/Express.png" type="image/x-icon">

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
        <a class="navbar-brand">ExpressJS</a>
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
    <h3 class="panel-title">Каркас для Web-приложений</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Express.js">* ExpressJS</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://expressjs.com/">* ExpressJS Docs</a>
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
              - Помогает организовать Web-приложение на стороне сервера (маршрутизация, настройка приложения, связующее ПО, обработка запросов).<br />
              - Решает задачи - парсинг структур запросов HTTP, управление сессиями, определение правильности заголовков ответов на основе типов данных, обработка ошибок и извлечение URL-параметров.<br>
              - Упрощение разработки.<br>
              - Легкая конфигурируемость.<br>
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

<button class="button5" id="NachB">Начало работы с Express.js</button>
<button class="button5" id="GenB">Генерация проекта</button>
<button class="button5" id="EJSB">EJS</button>
<button class="button5" id="RouB">Роутинг</button>
<button class="button5" id="MidB">Middleware</button>

<!-- Article -->

<div class="textblock" id="Nach">
  <p>
    <em>============================ Начало работы с Express.js:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> <strong>npm install express</strong><br>
      <br>

      <span class="v"><strong># Создание сервера / каркаса</strong></span>
      <code>
        <strong>
          // Подключение к Express.js<br />
          var express = require('express');<br /><br />

          // Создание Express-приложения - вызов пакета<br />
          var app = express();<br /><br />

          // Создание GET-маршрута для главной страницы<br />
          // http://localhost:8080/<br />
          app.get('/', function(req, res) {<br />
            &nbsp;res.sendfile('Views/Pages/index.html');<br />
          });<br /><br />

          // Запуск сервера на порту 8080<br />
          app.listen(8080);<br />
          // Отправление сообщения о запуске<br />
          console.log('Сервер стартовал!');<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Gen">
  <p>
    <em>============================ Генерация проекта:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Express.js состоит из 2-х частей - сама библиотека <strong>express</strong> и генератор
      <strong>express generator</strong>.<br />
      <br />

      <strong>express имя_проекта</strong> - построение каркаса для приложения.<br />

      <figure>
        <img src="../Images/ExpressG.png" />
      </figure>
      <br />

      <strong>app.js</strong> - отправная точка приложения.<br />
      <strong>public/</strong> - папка для статичных ресурсов (изображения, JS-файлы, CSS-стили, шрифты).<br />
      <strong>views/</strong> - макеты и Jade-файлы.<br />
      <strong>bin/</strong> - папка для активации Node.js.<br />
      <strong>routes/</strong> - папка для маршрутов REST для приложения.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="EJS">
  <p>
    <em>============================ EJS:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Шаблонизатор.<br /><br />

      <strong>npm install ejs</strong> - установка шаблонизатора.<br>
      <br>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Возможности:</strong><br />
  - Отображение динамических данных с сервера.<br />
  - Повторения через переменные и списки.<br />
  - Задание шаблона для Web-приложений.<br />
  - Экономия трафика.<br />
  - Снижение нагрузки на сервер, т.к. шаблонизация происходит в браузере.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>Недостатки:</strong><br />
  - Не индексируется поисковыми системами.<br />
</div>

  <p>
    <span class="v3"><strong><% include путь %></strong></span> - вставка данных страницы (как отдельная шаблонная часть).
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Rou">
  <p>
    <em>============================ Роутинг:</em><br />
      <code>
        <strong>
          // Обработка запроса для конкретного пути:<br>
          app.route('/путь')<br>
            &nbsp;.get((req, res) => {<br>
              &nbsp;&nbsp;res.send('Text');<br>
            &nbsp;})<br>
            &nbsp;.post((req, res) => {<br>
              &nbsp;&nbsp;res.send('Text');<br>
            &nbsp;})<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mid">
  <p>
    <em>============================ Middleware:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Промежуточное ПО. Функции применения - выполнение любого кода, внесение изменений в request / response, завершение цикла
      запрос-ответ, вызов следующего middleware в стеке, обработка cookie.<br>
      <br>

      <code>
        <strong>
          function setHeader(res, req, next) {<br>
            &nbsp;res.setHeader('Content-Type', 'application/json');<br>
            &nbsp;next();<br>
          }<br>
          <br>

          // Регистрация:<br>
          app.use(setHeader);<br>
          <br>
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Важен порядок выполнения в стеке. Каждая функция в стеке получает результат выполнения предыдущей.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Каждое middleware может решить прекратить дальнейшую обработку данных не вызывая callback или передавая сообщение об ошибке. Наличие ошибки обычно запускает выполнение другой последовательности middleware, которая
  специально предназначена для обработки ошибок.<br>
</div>

</div>

  </div>
</div>

</body>
</html>
