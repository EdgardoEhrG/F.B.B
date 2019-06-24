<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Instagram</title>

<link rel="shortcut icon" href="../Images/I/Insta.png" type="image/x-icon">

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
      <a class="navbar-brand"><i class="fa fa-instagram colored" aria-hidden="true"></i> Instagram</a>
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
    <h3 class="panel-title">SMM in Instagram</h3>
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
              <a href="https://ru.wikipedia.org/wiki/Instagram">* Instagram</a><br />
              <br />

              <span class="v"><strong># Элементы</strong></span><br />
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

<hr />

<!-- Buttons -->

<button class="button5" id="BizB">Бизнес-аккаунт</button>
<button class="button5" id="PosB">Постинг</button>

<!-- The Article -->

<div class="textblock" id="Biz">
    <p>
      <em>============================ Бизнес-аккаунт:</em><br />
        <span class="v"><strong># Особенности</strong></span><br />
        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Больше визуальности, меньше текста!<br />
        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Должно быть простое и запоминающее название.<br />
        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Минимальное описание.<br />
        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Контакты + ссылка на сайт.<br />
    </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pos">
  <p>
    <em>============================ Постинг:</em><br />
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Лучшее время для публикаций - день.
</div>

</div>

  </div>
</div>

</body>
</html>
