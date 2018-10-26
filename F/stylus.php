<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Stylus</title>

<link rel="shortcut icon" href="../Images/I/Sty.png" type="image/x-icon">

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
        <a class="navbar-brand">Stylus</a>
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
    <h3 class="panel-title">CSS-препроцессор</h3>
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
          <a href="https://en.wikipedia.org/wiki/Stylus_(stylesheet_language)">* Stylus</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://stylus-lang.com/">* Stylus Docs</a>
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
              - Расширение файлов <strong>.styl</strong><br />
              - Можно использовать синтаксис CSS или синтаксис по типу Python (без ";", "{}", ":").<br />
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

<button class="button" id="CommB">Комментарии</button>
<button class="button" id="PerB">Переменные</button>
<button class="button" id="VloB">Вложения</button>
<button class="button" id="PriB">Примеси</button>
<button class="button" id="UslB">Условия</button>
<button class="button" id="FunB">Функции</button>
<button class="button" id="ImpB">Импорт</button>


<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
    <span class="v3"><strong>//</strong></span> - строчный комментарий.<br />
    <span class="v3"><strong>/*...*/</strong></span> - блочный комментарий.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
    <em>============================ Переменные:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объявление и присваивание значение переменной + использование.<br />

      <code>
        <strong>
          e = 900<br /><br />

          элемент<br />
            &nbsp;свойство e
        </strong>
      </code><br /><br />

      <span class="v"><strong># Вычисления</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Можно использовать любые математические выражения.<br />
      <br />

      <span class="v"><strong># Интерполяция</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Подходит для вендорных свойств.<br />
      <code>
        <strong>
          имя_примеси(свойство, значение)<br />
            &nbsp;-o-{свойство} значение<br />
            &nbsp;-moz-{свойство} значение<br />
            &nbsp;-webkit-{свойство} значение<br />
            &nbsp;-ms-{свойство} значение<br />
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Если переменной присвоить текстовое значение цвета, то после компиляции значение станет 16-м.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Vlo">
  <p>
    <em>============================ Вложения:</em><br />
      <code>
        <strong>
          Элемент<br />
            &nbsp;свойство значение<br />
            &nbsp;вложенный элемент<br />
              &nbsp;&nbsp;свойство значение<br />
              &nbsp;&nbsp;&:псевдоселектор<br />
                &nbsp;&nbsp;&nbsp;свойство значение<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pri">
  <p>
    <em>============================ Примеси:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Принимает также аргументы.<br />
      <code>
        <strong>
          имя_примеси()<br />
            &nbsp;свойство значение<br /><br />

          элемент<br />
            &nbsp;имя_примеси()
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Usl">
  <p>
    <em>============================ Условия:</em><br />
      <code>
        <strong>
          if условие<br />
            &nbsp;действия<br />
          else if условие<br />
            &nbsp;действия<br />
          else<br />
            &nbsp;действия<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
      <code>
        <strong>
          имя_функции(аргументы)<br />
            &nbsp;return действия над аргументами<br /><br />

          элемент<br />
            &nbsp;имя_функции(аргументы)<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Imp">
  <p>
    <em>============================ Импорт файлов:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В CSS импорт влияет на время загрузки страницы, из-за того, что каждый файл требует отдельного
      сетевого запроса. Чем больше таких файлов, тем хуже для производительности сайта. В Stylus нет проблем с производительностью, потому что множество
      маленьких файлов в итоге объединяются в один единственный стилевой файл. Сохраняется удобство редактирования файлов с высокой
      скоростью загрузки стилей.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Рекомендация:<br />
      1) Создать файл по типу <strong>_имя_файла.styl</strong>.<br />
      2) Подключить с помощью <strong>@import "имя_файла"</strong> (без нижнего подчеркивания + расширение можно опустить) и в начале файла.
  </p>
</div>

  </div>
</div>

</body>
</html>
