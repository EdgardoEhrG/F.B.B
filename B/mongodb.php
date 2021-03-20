<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>MongoDB</title>

<link rel="shortcut icon" href="../Images/I/MongoDB.png" type="image/x-icon">

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
        <a class="navbar-brand"><i class="fa fa-database colored" aria-hidden="true"></i> MongoDB</a>
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
    <h3 class="panel-title">СУБД NoSQL</h3>
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
          <a href="https://ru.wikipedia.org/wiki/MongoDB">* MongoDB</a><br />
          <a href="https://ru.wikipedia.org/wiki/NoSQL">* NoSQL</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://www.mongodb.com/">* MongoDB Docs</a><br />
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

<button class="button5" id="MonB">mongoose</button>

<!-- The Article -->

<div class="textblock" id="Mon">
  <p>
    <em>============================ Пакет Node.js для работы с MongoDB:</em><br />
      <code>
        <strong>
          // Установка:<br>
          npm install mongoose<br>
          <br>

          // Создание модели данных models/имя_модели.js:<br>
          import mongoose from 'mongoose';<br>
          <br>

          const modelSchema = new mongoose.Schema({<br>
            &nbsp;property: {<br>
              &nbsp;type: Тип,<br>
              &nbsp;required: true<br>
            &nbsp;}<br>
          });<br>
          <br>

          const Model = mongoose.model('Model', modelSchema);<br>
          export default Model;<br>
          <br>

          // Подключение к базе:<br>
          mongoose.Promise = Promise;<br>
          mongoose.connect('url', { useUnifiedTopology: true, useNewUrlParser: true, useCreateIndex: true });<br>
          mongoose.connection.once('open', () => console.log('connected'));<br>
          <br>

          // Запросы:<br>
          1) Получение всех данных:<br>
          const items = await Model.find({})<br>
          <br>

          2) Получение конкретного эл-та:<br>
          const id = req.params.id;<br>
          const item = Model.findOne({ _id: id });<br>
          <br>

          3) Создание эл-та:<br>
          Model.create(data);<br>
          <br>

          4) Обновление:<br>
          Model.updateOne({ _id: id }, data, { upsert: true });<br>
          <br>

          5) Удаление:<br>
          Model.deleteOne({ _id: id });<br>
          <br>

          <span class="v"><strong># Валидация</strong></span><br />
          <span class="v3"><strong>required</strong></span> - обязательное ли свойство.<br />
          <span class="v3"><strong>type</strong></span> - тип данных.<br />
          <span class="v3"><strong>min / max</strong></span> - минимальное / максимальное значение.<br />
          <span class="v3"><strong>match</strong></span> - соответствие регулярному выражению.<br />
          <br />

          <span class="v"><strong># CRUD-операции</strong></span><br />
          <span class="v3"><strong>find</strong></span> - все объекты, соответствующие критерию.<br />
          <span class="v3"><strong>findById</strong></span> - 1 объект по id.<br />
          <span class="v3"><strong>findOne</strong></span> - 1 объект по критерию.<br />
          <br />

          <span class="v3"><strong>remove</strong></span> - удалить все объекты по критерию.<br />
          <span class="v3"><strong>findByIdAndDelete</strong></span> - удалить 1 по id.<br />
          <span class="v3"><strong>findOneAndDelete</strong></span> - удалить 1 по критерию.<br />
          <br />

          <span class="v3"><strong>updateOne</strong></span> - обновить 1 по критерию.<br />
          <span class="v3"><strong>updateMany</strong></span> - обновить множество по критерию.<br />
          <span class="v3"><strong>findByIdAndUpdate</strong></span> - обновить 1 по id.<br />
          <span class="v3"><strong>findOneAndUpdate</strong></span> - обновить 1 по критерию.
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
