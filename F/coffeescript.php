<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>CoffeeScript</title>

<link rel="shortcut icon" href="../Images/I/CS.png" type="image/x-icon">

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
        <a class="navbar-brand"><i class="fa fa-coffee colored" aria-hidden="true"></i> CoffeeScript</a>
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
    <h3 class="panel-title">ЯП поверх JS</h3>
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
          <a href="https://ru.wikipedia.org/wiki/CoffeeScript">* CoffeeScript</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://coffeescript.org/">* CoffeeScript Docs</a>
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
              - Надежность, понятность, компактность и удобочитаемость.<br />
              - Короткая запись сложных фрагментов кода JS.<br />
              - Компиляция в JS.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - После компиляции в JS код помещается в анонимную функцию.<br />
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

<!-- buttons -->

<button class="button" id="SinB">Синтаксис</button>
<button class="button" id="FunB">Функции</button>

<!-- The Article -->

<div class="textblock" id="Sin">
  <p>
    <em>============================ Особенности синтаксиса:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Можно писать код без скобок при выводе чего-либо.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Также убрана ";", но использовать можно.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Пробельные символы имеют значение и определяют порядок интерпретации выражения.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Вместо "{}" - табуляция.<br />
      <br />

      <span class="v"><strong># Переменные</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При объявлении переменной не нужно использовать <span class="v3"><strong>var</strong></span>.<br />
      <br />

      <span class="v"><strong># Строки</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Вместо <strong>"text" + переменная</strong> => параметр интерполяции (не работает в одинарных кавычках) <strong>"text #{переменная}"</strong>.<br />
      <br />

      <span class="v"><strong># Условные конструкции</strong></span><br />
      <code>
        <strong>
          if (условие)<br />
            &nbsp;действие<br /><br />

          # Несколько условий<br /><br />

          if (условие) and (условие_2)<br />
            &nbsp;действия<br />
          else<br />
            &nbsp;альтернативные_действия<br /><br />

          # Тернарный оператор<br /><br />

          if (условие) then действие_1 else действие_2
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Вместо ключевого слова <span class="v3"><strong>function</strong></span> используется
      знак <span class="v3"><strong>-></strong></span> справа от списка аргументов.<br />
      <span class="v3"><strong></strong></span> Скобки имеют значение при работе с функциями.<br />
      <code>
        <strong>
          имя_функции = (параметры) -><br />
            &nbsp;//тело функции<br />
            <br />

            имя_функции() &nbsp;&nbsp;//вызов функции<br />
            <br />

            # аргумент = значение //параметр по умолчанию<br />
            # -> //пустая функция<br />
          </strong>
        </code>
  </p>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-info" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">ООП</h3>
  </div>
    <div class="panel-body">

<!-- buttons -->

<button class="button2" id="ObjB">Объекты</button>

<!-- The Article -->

<div class="textblock" id="Obj">
  <p>
    <em>============================ Объекты:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Вложенный объект:<br />
      <code>
        <strong>
          object =<br />
            &nbsp;object :<br />
              &nbsp;&nbsp;свойство: значение<br />
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
