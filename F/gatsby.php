<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Gatsby</title>

<link rel="shortcut icon" href="../Images/I/Gatsby.png" type="image/x-icon">

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
        <a class="navbar-brand">Gatsby</a>
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
    <h3 class="panel-title">Static Generator Sites (React.js SSR + GraphQL)</h3>
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
          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://www.gatsbyjs.org/">* Gatsby Docs</a>
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
              ...
            </p>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        </div>
    </div>
  </div>
</div>

<hr>

<!-- Buttons -->

<button class="button5" id="GatB">Gatsby</button>
<button class="button5" id="PaB">Pages</button>
<button class="button5" id="LaB">Layouts</button>
<button class="button5" id="CoB">Компоненты</button>
<button class="button5" id="RouB">Роутинг</button>
<button class="button5" id="QueB">GraphQL-запросы</button>
<button class="button5" id="TemB">Templates</button>

<!-- The Article -->

<div class="textblock" id="Gat">
  <p>
    <em>============================ Gatsby:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Статический генератор сверхбыстрых сайтов на основе React.js с поддержкой GraphQL.<br>
      <br>

      <span class="v3"><strong>npm install -g gatsby-cli</strong></span> - установка генератора.<br />
      <span class="v3"><strong>gatsby new site-name</strong></span> - генерация проекта.<br />
      <span class="v3"><strong>gatsby develop</strong></span> - запуск режима разработки.<br />
      <span class="v3"><strong>gatsby build</strong></span> - сборка проекта.<br />
      <br />

      <span class="v"><strong># Структура</strong></span><br />
      <span class="v3"><strong>gatsby-browser.js</strong></span> - настройки, влияющие на браузер.<br />
      <span class="v3"><strong>gatsby-config.js</strong></span> - настройки приложения.<br />
      <span class="v3"><strong>gatsby-node.js</strong></span> - настройки процесса сборки приложения.<br />
      <span class="v3"><strong>gatsby-ssr.js</strong></span> - настройка параметров, влияющие на рендеринг на стороне сервера.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pa">
  <p>
    <em>============================ Pages:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Аналогично Gridsome. Путь роута будет создан на основе названия файла.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="La">
  <p>
    <em>============================ Layouts:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Аналогично Gridsome. Первоначально располагаются в папке <strong>components</strong>.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Co">
  <p>
    <em>============================ Компоненты:</em><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Rou">
  <p>
    <em>============================ Роутинг:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Автонастройка роутинга на основе файловой системы.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Que">
  <p>
    <em>============================ GraphQL-запросы:</em><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Tem">
  <p>
    <em>============================ Templates:</em><br />
  </p>
</div>

  </div>
</div>

</body>
</html>
