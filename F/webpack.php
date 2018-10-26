<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Webpack</title>

<link rel="shortcut icon" href="../Images/I/wp.png" type="image/x-icon">

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
        <a class="navbar-brand">Webpack</a>
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
    <h3 class="panel-title">Модульный сборщик</h3>
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
          <a href="https://habrahabr.ru/post/309306/">* Webpack</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://webpack.js.org/">* Webpack Docs</a>
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
              <i class="fa fa-plus-circle" aria-hidden="true"></i>Достоинства:<br />
              - Сборка нескольких файлов JS (импорт / экспорт).<br />
              - Обработка файлов (те же функции, что и у Gulp).<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Файл с настройками - <strong>webpack.config.js</strong><br />
              - Готовый файл <strong>Bandle.js</strong> необходимо подключать внизу страницы, во избежание DOM-конфликтов.<br />
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

<button class="button5" id="ComB">Команды</button>
<button class="button5" id="ReaB">React.js</button>

<!-- The Article -->

<div class="textblock" id="Com">
  <p>
    <em>============================ Команды:</em><br />
      <strong>webpack -d</strong> - запуск сборщика.<br />
      <strong>webpack -w</strong> - слежение за файлами.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Rea">
  <p>
    <em>============================ Настройка для React.js:</em><br />

<code>
<pre>
<strong>
var webpack = require('webpack');
var path = require('path');

var BUILD_DIR = path.resolve(__dirname, 'Build');
var APP_DIR = path.resolve(__dirname, 'React');

var config = {
  entry: APP_DIR + '/index.jsx',
  output: {
    path: BUILD_DIR,
    filename: 'Bundle.js'
  },
  module : {
    loaders : [
      {
        test : /\.jsx?/,
        include : APP_DIR,
        loader : 'babel-loader'
      },
      {
        test: /\.json$/,
        exclude: /node_modules/,
        loader: "json-loader"
      }
    ]
  }
};

module.exports = config;
</strong>
</pre>
</code>

  </p>
</div>

  </div>
</div>

</body>
</html>
