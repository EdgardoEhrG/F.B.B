<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>PostgreSQL</title>

<link rel="shortcut icon" href="../Images/I/ps.png" type="image/x-icon">

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
        <a class="navbar-brand"><i class="fa fa-database colored" aria-hidden="true"></i> PostgreSQL</a>
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
    <h3 class="panel-title">Реляционная СУБД</h3>
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
          <a href="https://ru.wikipedia.org/wiki/PostgreSQL">* PostgreSQL</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://www.postgresql.org/">* PostgreSQL Docs</a><br />
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
              - Высокая скорость работы при нагрузке.<br />
              - Высокий предел отказоустойчивости.<br />
              - Высокая скорость сжатия и разжатия данных.<br />
              - Данные могут храниться на HDD в сжатом виде.<br />
              <br />

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
              - Нет автоинкрементных полей.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Подходит для крупных проектов.<br />
              - Экспорт / импорт через Cmd.<br />
              - Использование одинарных кавычек.<br />
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

<button class="button" id="ComB">SQL-команды</button>

<!-- The Article -->

<div class="textblock" id="Com">
  <p>
    <em>============================ SQL-команды:</em> <br />
      <span class="v"><strong># Базовые команды</strong></span><br />
      <strong>SELECT</strong> - выбор данных из таблицы.<br />
      <strong>WHERE</strong> - условие для фильтрации данных.<br />
      <strong>INSERT INTO</strong> - вставка новой записи.<br />
      <strong>UPDATE</strong> - обновление записи.<br />
      <strong>DELETE</strong> - удаление записи.<br />
      <strong>*</strong> - выбор всех полей.<br />
      <br />

      <span class="v"><strong># Сортировка</strong></span><br />
      <strong>like</strong> - поиск записи в соответствии с шаблоном (в сочетании с 'A%' - поиск по заглавной букве (шаблон), или '%ud%' - встречающееся сочетание в слове).<br />
      <strong>distinct</strong> - получение уникальных значений.<br />
      <strong>count()</strong> - получений количества записей.<br />
      <strong>max()</strong> - поиск максимального значения в столбце.<br />
      <strong>min()</strong> - поиск минимального значения в столбце.<br />
      <strong>sum()</strong> - вычисление суммы столбца.<br />
      <strong>ORDER BY</strong> - сортировка данных (с DESC - по убыванию, c ASC - по возрастанию).<br />
      <br />

      <span class="v"><strong># Логические</strong></span><br />
      <strong>AND</strong> - логическое и.<br />
      <strong>!</strong> - логическое не.<br />
      <strong>OR</strong> - логичекое или.<br />
      <strong>XOR</strong> - иключающее или.<br />
      <br />

      <span class="v"><strong># Запросы (примеры)</strong></span><br />
      <strong>SELECT столбец FROM таблица</strong> - форма запроса.<br />
      <strong>INSERT INTO таблица VALUES </strong> - вставка данных в таблицу в соответсвии со столбцами.<br />
  </p>
</div>

  </div>
</div>

</body>
</html>
