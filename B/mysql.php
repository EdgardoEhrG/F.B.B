<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>MySQL</title>

<link rel="shortcut icon" href="../Images/I/DBs.png" type="image/x-icon">

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
        <a class="navbar-brand"><i class="fa fa-database colored" aria-hidden="true"></i> MySQL</a>
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
    <h3 class="panel-title">База данных</h3>
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
          <a href="https://ru.wikipedia.org/wiki/SQL">* SQL</a><br />
          <a href="https://ru.wikipedia.org/wiki/MySQL">* MySQL</a><br />
          <a href="https://ru.wikipedia.org/wiki/Redis">* Redis</a><br />
          <br />

          <span class="v"><strong># Элементы</strong></span><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%A2%D1%80%D0%B0%D0%BD%D0%B7%D0%B0%D0%BA%D1%86%D0%B8%D1%8F_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)">* Транзакция</a><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%A5%D1%80%D0%B0%D0%BD%D0%B8%D0%BC%D0%B0%D1%8F_%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D0%B4%D1%83%D1%80%D0%B0">* Хранимая процедура</a><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%A2%D1%80%D0%B8%D0%B3%D0%B3%D0%B5%D1%80_(%D0%B1%D0%B0%D0%B7%D1%8B_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85)">* Триггер</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://www.mysql.com/">* MySQL Docs</a><br />
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
              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
              - <strong>phpMyAdmin</strong> имеет много уязвимостей.<br />
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

<button class="button" id="SozB">Создание БД</button>
<button class="button" id="TabB">Таблицы</button>
<button class="button" id="ComB">SQL-команды</button>

<!-- The Article -->

<div class="textblock" id="Soz">
  <p>
    <em>============================ Создание БД:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Кодировка (для русского языка) - <strong>utf-8 general_ci</strong><br />
      <br />

      <span class="v2"><strong>CREATE DATABASE имя_db</strong></span> - создание БД.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Tab">
  <p>
    <em>============================ Таблицы:</em><br />
      <span class="v2"><strong>CREATE TABLE имя_table</strong></span> - создание таблицы.<br />
      <br />

      <span class="v"><strong># Расширенный вариант создания таблицы</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Задание имени столбца, тип данных, количество символов, наличие данных, инкрементирование.<br />
      <code>
        <strong>
          CREATE TABLE name_table (<br />
          &nbsp;id int (11) NOT NULL AUTO_INCREMENT,<br />
          &nbsp;str1 varchar (255) NULL DEFAULT '',<br />
          &nbsp;... ,<br />
          &nbsp;PRIMARY KEY ('id')<br />
          )<br />
        </strong>
      </code>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Чтобы не прописывать <strong>id</strong> с каждой новой записью - поставить значение <strong>AUTO_INCREMENT</strong>.
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> У типа данных <strong>datetime</strong> нет значения по умолчанию.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Com">
  <p>
    <em>============================ SQL-команды:</em><br />
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
      <strong>INSERT INTO table_name ('str1', 'str2') VALUES ('1', '2'); </strong> - вставка данных в таблицу в соответсвии со столбцами.<br />
  </p>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-primary" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Пакеты</h3>
  </div>
    <div class="panel-body">

<!-- Buttons -->

<button class="button3" id="SeqB">Sequelize</button>

<!-- The Article -->

<div class="textblock" id="Seq">
  <p>
    <em>============================ Sequelize (пакет для Node.js):</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> ORM-библиотека для Node.js приложений, которая осуществляет сопоставление таблиц в DB и отношений между ними
      с классами. При использовании этой библиотеки не нужно писать SQL-запросы, только работа с данными как с обычными объектами. Работает с MySQL, PostgreSQL, MariaDB, SQLite, MS SQL Server.<br>
      <br>

      <code>
        <strong>
          npm install sequelize<br>
          <br>

          <span class="v"><strong># Подключение</strong></span><br />
          const Sequelize = require('Sequelize');<br>
          const sequelize = new Sequelize("database", "user", "password", { dialect: "mysql", host: "localhost" });<br>
          <br>

          <span class="v"><strong># Определение модели</strong></span><br />
          const Model = sequelize.define("model", { property: { type: Sequelize.STRING, autoincrement: false, primaryKey: true, allowNull: false } });<br>
          <br>

          // Типы данных:<br>
          STRING, TEXT, INTEGER, FLOAT, DOUBLE, DECIMAL, BOOLEAN.<br>
          <br>

          <span class="v"><strong># Синхронизация с DB</strong></span><br />
          sequelize.sync().then(res => console.log(res));<br />
          <br />

          { forse: true } - добавляется в sync(), удаляет несоответствующие модели таблицы и создает новые с нужной структурой.<br />
          <br />

          <span class="v"><strong># Запросы</strong></span><br />
          <span class="v3"><strong>Model.create({ property: value }).then...</strong></span> - добавление.<br />
          <span class="v3"><strong>Model.findAll({ row: true })</strong></span> - получение всех данных.<br />
          <span class="v3"><strong>Model.findOne({ where: { property: value } })</strong></span> - получение 1 записи с фильтрацией.<br />
          <span class="v3"><strong>Model.update({ property: new_value }, { where... })</strong></span> - обновление.<br />
          <span class="v3"><strong>Model.destroy()</strong></span> - удаление.<br />
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Если для модели нет таблицы, то она будет создана автоматически. Имя таблицы задается в множественном числе.
</div>

</div>

  </div>
</div>

</body>
</html>
