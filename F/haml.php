<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Haml</title>

<link rel="shortcut icon" href="../Images/I/haml.png" type="image/x-icon">

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
        <a class="navbar-brand">Haml</a>
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
    <h3 class="panel-title">Препроцессор HTML</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Haml">* Haml</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://haml.info/">* Haml Docs</a>
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
              - Расширение - <strong>.haml</strong><br />
              - Требует Ruby для компиляции в HTML.<br />
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
<button class="button" id="ComB">Команды</button>
<button class="button" id="CompB">Компиляция</button>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v2"><strong>/ ... /</strong></span> - комментарий.<br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Однострочный - на той же строке.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Многострочный - на новой строке. Как блок.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Com">
  <p>
    <em>============================ Команды:</em><br />
      <span class="v2"><strong>!!! 5</strong></span> - объявление доктайпа.<br />
      <span class="v2"><strong>%body</strong></span> - задание тега.<br />
      <span class="v2"><strong>%p содержимое</strong></span> - наполнение элемента.<br />
      <span class="v2"><strong>%img (src=".png" alt="")</strong></span> - добавление атрибутов.<br />
      <span class="v2"><strong>%div .class / .class1.class2</strong></span> - добавление класса / нескольких классов.<br />
      <span class="v2"><strong>%p#id</strong></span> - добавление идентификатора.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Любой элемент начинается с <strong>%</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Отступ задает вложенность. На протяжении всего документа должно быть одинаковое число пробелов / табуляции.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если писать просто класс или идентификатор, то <span class="v2"><strong>%div</strong></span> будет создан автоматически в HTML-файле.
</div>

  <p>
    <span class="v"><strong># Прочее</strong></span><br />
    <span class="v2"><strong>\=</strong></span> - экранирование текста. Отображение в явном виде, без выполнения Ruby.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Comp">
  <p>
    <em>============================ Компиляция:</em><br />
      <span class="v2"><strong>haml файл.haml файл.html</strong></span> - компиляция в HTML-файл.
  </p>
</div>

    </div>
  </div>
</div>

</body>
</html>
