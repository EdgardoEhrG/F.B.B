<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Pug</title>

<link rel="shortcut icon" href="../Images/I/Pug.png" type="image/x-icon">

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
        <a class="navbar-brand">Pug</a>
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
    <h3 class="panel-title">Препроцессор HTML и шаблонизатор</h3>
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
          <a href="https://pugjs.org/api/getting-started.html">* Pug Docs</a>
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
              - Расширение файлов - <strong>.pug</strong>
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
<button class="button" id="VloB">Вложенность</button>
<button class="button" id="PerB">Переменные</button>
<button class="button" id="UslB">Условия</button>
<button class="button" id="SwiB">Switch</button>
<button class="button" id="CycB">Циклы</button>
<button class="button" id="ImpB">Включение</button>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v2"><strong>//</strong></span> - создание комментария (как однострочного) + комментирует целый блок (с вложениями).<br />
      <span class="v2"><strong>//-</strong></span> - комментарий, который не будет компилироваться.<br />
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="Com">
  <p>
    <em>============================ Команды:</em><br />
      <span class="v2"><strong>doctype html</strong></span> - объявление доктайпа.<br />
      <span class="v2"><strong>doctype strict</strong></span> - строгий режим кода разметки (XHTML).<br>
      <span class="v2"><strong>тег</strong></span> - создание тега.<br />
      <span class="v2"><strong>тег содержимое</strong></span> - наполнение элемента.<br />
      <span class="v2"><strong>тег(атрибут='')</strong></span> - добавление атрибутов.<br />
      <span class="v2"><strong>тег.class</strong></span> - добавление класса.<br />
      <span class="v2"><strong>тег#id</strong></span> - добавление идентификатора.<br />
  </p>

<div class="alert alert-info" role="alert">
   <i class="fa fa-info-circle" aria-hidden="true"></i> Если писать просто класс или идентификатор, то <span class="v2"><strong>div</strong></span> будет создан автоматически в HTML-файле.
</div>

  <p>
    <span class="v"><strong># Прочее</strong></span><br />
    <span class="v2"><strong>\=</strong></span> - экранирование текста. Отображение в явном виде, без выполнения Ruby.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Vlo">
  <p>
    <em>============================ Вложенность:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Отступ задает вложенность. На протяжении всего документа должно быть одинаковое число пробелов / табуляции.<br />
      <code>
        <strong>
          div<br />
            &nbsp;p<br />
              &nbsp;&nbsp;| Text
        </strong>
      </code><br /><br />

      <span class="v"><strong># Вставка сложного элемента</strong></span><br />
      <code>
        <strong>
          p Text #[a(href="#") Link]
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
    <em>============================ :</em><br />
      <span class="v2"><strong>- var имя = значение</strong></span> - создание переменной со значением.<br />
      <br />

      <span class="v"><strong># Использование</strong></span><br />
      <code>
        <strong>
          - var url = '/.pug';<br />
          img(src=url)<br />
        </strong>
      </code><br /><br />

      <span class="v"><strong># Интерполяция</strong></span><br />
      <code>
        <strong>
          <br />
          - var n = "text";<br />
          div<br />
            &nbsp;p Text, #{n}
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
            - var n = ""<br /><br />

            if n условие<br />
              &nbsp;действие<br />
            else if условие<br />
              &nbsp;действие<br />
            else<br />
              &nbsp;действие
        </strong>
      </code><br /><br />

      <span class="v"><strong># Тернарный оператор</strong></span><br />
      <code>
        <strong>
          - var n = true<br />
          p(class= n ? 'open': 'close')<br />
        </strong>
      </code><br /><br />

      <span class="v"><strong># Исключение</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Все, что угодно, но не это условие.<br />
      <code>
        <strong>
          unless условие<br />
            &nbsp;действие
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Swi">
  <p>
    <em>============================ Switch:</em><br />
      <code>
        <strong>
          - var x = 0
          case x<br />
            &nbsp;when 0<br />
              &nbsp;&nbsp;p Text<br />
            &nbsp;when 1<br />
              &nbsp;&nbsp;p Alttext<br />
            &nbsp;default<br />
              &nbsp;&nbsp;действие_по_умолчанию
        </strong>
      </code><br /><br />

      <span class="v"><strong># "Проваливание"</strong></span><br />
      <code>
        <strong>
          when значение<br />
          when значение2<br />
            &nbsp;p Text
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Cyc">
  <p>
    <em>============================ Циклы:</em><br />
      <code>
        <strong>
          - var x = 5<br />
            &nbsp;div<br />
              &nbsp;&nbsp;ul<br />
              &nbsp;&nbsp;- for (var i = 1; i <= x; i++) {<br />
                &nbsp;&nbsp;&nbsp;li text<br />
              &nbsp;&nbsp;- }<br />
        </strong>
      </code><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Или:

      <code>
        <strong>
          - var a = ["R", "C", "B"];<br />
            &nbsp;div<br />
              &nbsp;&nbsp;for n in a<br />
                &nbsp;&nbsp;&nbsp;a(href="#")= n<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Imp">
  <p>
    <em>============================ Включение:</em><br />
      <span class="v2"><strong>include имя_файла.pug</strong></span> - импорт содержимого файла.<br />
  </p>
</div>

    </div>
  </div>
</div>

</body>
</html>
