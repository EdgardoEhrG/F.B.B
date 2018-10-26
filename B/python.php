<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Python</title>

<link rel="shortcut icon" href="../Images/I/python.ico" type="image/x-icon">

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
        <a class="navbar-brand">Python</a>
    </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../backend.php"><i class="fa fa-undo" aria-hidden="true"></i> Back</a></li>

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
    <h3 class="panel-title">ВЯ общего назначения, ориентированный на повышение производительности разработчика и читаемости кода</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Python">* Python</a> <br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://pythonworld.ru/osnovy/pep-8-rukovodstvo-po-napisaniyu-koda-na-python.html">* PEP-8 (Docs)</a><br />
          <a href="https://www.python.org/downloads/">* Установка Python</a><br />
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
              - Расширение файлов <strong>.py</strong><br />
              <br />

              <span class="v"><strong># Библиотеки</span></strong><br />
              <strong>Pygame</strong> - игры.<br />
              <strong>Tornado</strong>, <strong>Flask</strong>, <strong>Pyramid</strong> - сайты.<br />
              <strong>NumPy</strong>, <strong>SciPy</strong> - научные расчеты.<br />
              <strong>tkinter</strong>, <strong>PyQt</strong>, <strong>wxPython</strong> - для Desktop.<br />
              <strong>Kivy</strong> - мобильные приложения.
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
<button class="button" id="OpeB">Операторы</button>
<button class="button" id="VvoB">Ввод / вывод</button>
<button class="button" id="UslB">Условия</button>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
     <span class="v3"><strong>#</strong></span> - однострочный комментарий.
     </p>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Python не поддерживает многострочные комментарии.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
    <em>============================ Переменные:</em><br />
     <span class="v3"><strong>a = 4;</strong></span> - объявление и присваивание значения переменной.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Тип переменной определяется по ходу.
</div>

 <p>
  <span class="v3"><strong>type()</strong></span> - показывает какого типа переменная.
 </p>
 </div>

<!-- The Article -->

<div class="textblock" id="Ope">
  <p>
    <em>============================ Операторы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Классические:<br />
      <strong>+</strong>, <strong>-</strong>, <strong>*</strong>, <strong>/</strong>, <strong>%</strong> (остаток от деления).<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Свойственное Python:<br />
      <strong>//</strong> (деление без остатка), <strong>**</strong> (возведение в степень).<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Логические:<br />
       <strong>==</strong> (равно).
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Vvo">
  <p>
    <em>============================ Ввод / вывод:</em><br />
       <span class="v3"><strong>print("...")</strong></span> - вывод информации. <br />
       <span class="v3"><strong>input("...")</strong></span> - ввод информации (аналогично prompt в JS).
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> При выводе информации и разделения - используется <span class="v3"><strong>,</strong></span> вместо <strong>"+"</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> В консольном режиме чтобы программа не закрывалась - писать в конце <span class="v3"><strong>input();</strong></span>.
</div>

  <p>
   <span class="v"><strong># Преобразование</strong></span><br />
   <span class="v3"><strong>int()</strong></span> - преобразует в число.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Одинарные кавычки равны двойным.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Usl">
  <p>
    <em>============================ Условия:</em><br />
      <code>
        <strong>
        if условие :<br />
        &nbsp;действие<br />
        elif условие : <br />
        &nbsp;действие при другом условии<br />
        else : <br />
        &nbsp;действие при неистинности
        </strong>
      </code>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Блоки оформляются отступами - 4 пробела.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <span class="v3"><strong>elif</strong></span> - как <strong>else if</strong>.
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Условие нельзя оставлять пустым, либо ставить пустышку <span class="v3"><strong>pass</strong></span>.
</div>

</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-danger" id="DS">
 <div class="panel-heading">
   <h3 class="panel-title">Модули</h3>
 </div>
  <div class="panel-body">

<!-- Buttons -->

<button class="button4" id="ModB">Модули</button>

<!-- The Article -->

<div class="textblock" id="Mod">
  <p>
    <a href="https://pythonworld.ru/moduli">* Модули Python</a><br />
    <a href="https://pypi.python.org/pypi">* Каталог пакетов Python</a><br />
    <br />

    <span class="v"><strong># Для консоли</strong></span><br />
    <strong>pip install имя_пакета</strong> - установка стороннего модуля.<br />
    <br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Подключение модуля осуществляется в начале файла, с помощью команды <span class="v3"><strong>import</strong></span>.<br /><br />
    <code>
      <strong>
      import os (модуль для работы с ОС)<br />
      ...<br />
      os.dir() - содержимое модуля.<br />
      os.help() - подробная информация о модуле. Также об элементе - // os.элемент.help().<br />
    </strong>
   </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
