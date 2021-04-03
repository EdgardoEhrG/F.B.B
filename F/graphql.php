<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>GraphQL</title>

<link rel="shortcut icon" href="../Images/I/GraphQL.png" type="image/x-icon">

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
        <a class="navbar-brand">GraphQL</a>
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
    <h3 class="panel-title">API Queries</h3>
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
          <a href="https://en.wikipedia.org/wiki/GraphQL">* GraphQL</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://graphql.org/learn/">* GraphQL Docs</a>
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
              <i class="fa fa-plus-circle" aria-hidden="true"></i> Достоинства:<br>
              - Все запросы имеют лишь один endpoint.<br>
              - Получение выборочных данных.<br>
              - Имеет встроенный графический редактор GraphiQL для тестирования работы запросов.<br>
              <br>

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br>
              - Используется как слой между клиентом и сервером.<br>
              - Не проверяет уникальность значений данных, так как это работа БД.<br>
              - Если происходит ошибка, GraphQL возвращает массив с ошибками, тогда как REST API возвращает код ошибки и её описание.<br>
              - Расширение файлов <strong>.gql</strong> или <strong>.graphql</strong>
            </p>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        </div>
    </div>
  </div>
</div>

<hr>

<!-- Buttons -->

<button class="button5" id="GrB">GraphQL</button>
<button class="button5" id="CommB">Комментарии</button>
<button class="button5" id="QueB">Запрос</button>
<button class="button5" id="MutB">Мутация</button>
<button class="button5" id="FraB">Фрагмент</button>
<button class="button5" id="TypB">Типизация</button>

<!-- The Article -->

<div class="textblock" id="Gr">
  <p>
    <em>============================ GraphQL:</em><br />
      <span class="v"><strong># Настройка в стеке Node.js / Express</strong></span><br />
      <strong>npm install express-graphql</strong> - установка пакета.<br>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v3"><strong>#</strong></span> - однострочный комментарий.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Que">
  <p>
    <em>============================ Query:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Запрос состоит из полей. Поля - то, что нужно получить. Чтобы получить все свойства - нужно всех их прописать.<br>
      <br>

      <code>
        <strong>
          // Тело запроса:<br>
          <br>

          query { ... }<br>
          <br>

          <span class="v"><strong># Именованный запрос</strong></span><br />
          <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для избежания конфликтов имен<br>
          <br>

          query {<br>
            &nbsp;имя: имя_функции (arg) { fields }<br>
          }<br>
          <br>

          <span class="v"><strong># Аргументы</strong></span><br />
          <br>

          query имя_запроса( $переменная: тип! ) {<br>
            &nbsp;имя_функции( аргумент: $переменная ) {<br>
              &nbsp;&nbsp;field_string,<br>
              &nbsp;&nbsp;field_object {<br>
                &nbsp;&nbsp;&nbsp;field_string<br>
              &nbsp;&nbsp;}<br>
            &nbsp;}<br>
          }<br>
        </strong>
      </code><br>
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Запрос не принимает одинарные кавычки.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Не может быть более 1 и того же запроса. Должен быть renamin'. <br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> В запросе аргументы не разделяются запятой. <br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Mut">
  <p>
    <em>============================ Mutation:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Изменение данных на сервере.<br>
      <br>

      <code>
        <strong>
          mutation {<br>
            &nbsp;имя_функции ( args ) { fields }<br>
          }<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fra">
  <p>
    <em>============================ Fragment:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Избавляет от необходимости копировать поля для другого запроса.<br>
      <br>

      <code>
        <strong>
          Fragment имя { fields }<br>
          <br>

          // Использование:<br>
          В теле запроса - ...имя<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Typ">
  <p>
    <em>============================ Типизация:</em><br />
      <span class="v3"><strong>property: тип</strong></span> - типизация поля.<br />
      <span class="v3"><strong>property: тип!</strong></span> - обязательное типизированное поле.<br />
      <span class="v3"><strong>type Тип { property: тип }</strong></span> - создание своего типа данных.<br />
      <br />

      <span class="v"><strong># Типы данных</strong></span><br />
      <span class="v3"><strong>ID</strong></span> - уникальное значение (для идентификатора).<br />
      <span class="v3"><strong>String</strong></span> - строка.<br />
      <span class="v3"><strong>Boolean</strong></span> - логический.<br />
      <span class="v3"><strong>[Тип!]</strong></span> - типизированный обязательный массив с элементами.<br />
      <br>

      <span class="v"><strong># Enum</strong></span><br />
      <code>
        <strong>
          enum Имя {<br>
            &nbsp;ЗНАЧЕНИЕ_1,<br>
            &nbsp;ЗНАЧЕНИЕ_2<br>
          }<br>
          <br>

          property: Имя!<br>
        </strong>
      </code>

      <span class="v"><strong># Union</strong></span><br />
      <code>
        <strong>
          // Объединение типов:<br>
          <br>
          union имя = тип | тип<br>
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
