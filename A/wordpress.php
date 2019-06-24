<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>WordPress</title>

<link rel="shortcut icon" href="../Images/I/W.png" type="image/x-icon">

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
        <a class="navbar-brand"><i class="fa fa-wordpress colored" aria-hidden="true"></i> WordPress</a>
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

<!-- Panel -->

<div class="panel panel-warning" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">CMS</h3>
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
          <a href="https://ru.wikipedia.org/wiki/WordPress">* WordPress</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://ru.wordpress.org/">* WordPress Docs</a><br />
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
              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - WordPress использует серверный язык и БД для генерации страницы при запросе.<br />
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

<button class="button5" id="TheB">Темы</button>
<button class="button5" id="MatB">Материалы</button>
<button class="button5" id="PlaB">Плагины</button>

<!-- The Article -->

<div class="textblock" id="The">
 <p>
   <em>============================ Темы:</em><br />
     <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Стандартные темы адаптивны.
 </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mat">
   <p>
    <em>============================ Материалы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Добавление видео с Youtube.com - поделиться + HTML-код - добавление в вкладке <strong>Текст</strong>.<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> RSS - Лента новостей. Ссылка на новости - открыть XML-файл, скопировать адрес и добавить в RSS виджет.<br />
   </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pla">
  <p>
    <em>============================ Плагины:</em><br />
     <span class="v4"><strong>brokenlinkchecker</strong></span> - проверяет сайт на наличие битых ссылок и сообщает о них.<br />
     <span class="v4"><strong>All in One SEO Pack</strong></span> - поисковая оптимизация.<br />
     <span class="v4"><strong>Yoast SEO</strong></span> - поисковая оптимизация. Плагин также изменяет ссылки (адрес) для
     лучшего ранжирования сайта (убирает лишнее в адресной строке).<br />
     <span class="v4"><strong>WP Page</strong></span> - создание лэндингов.<br />
     <span class="v4"><strong>Vkontakte API</strong></span> - для подключения ВК к сайту (лайки, репосты). Настройка с ключом и ID + запрос в ВК.<br />
     <span class="v4"><strong>Simple Twitter Tweets</strong></span> - позволяет транслировать твиты. Аналогично плагину ВК.<br />
     <span class="v4"><strong>Contact Form 7</strong></span> - для обратной связи.<br />
  </p>
</div>

  </div>
</div>

</body>
</html>
