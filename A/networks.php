<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Networks</title>

<link rel="shortcut icon" href="../Images/I/Network2.png" type="image/x-icon">

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
        <a class="navbar-brand">Networks</a>
    </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../add.php"><i class="fa fa-undo" aria-hidden="true"></i> Back</a></li>

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
    <h3 class="panel-title">Компьютерные сети</h3>
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
          <br />

          <span class="v"><strong># Элементы</strong></span><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%92%D1%8B%D1%87%D0%B8%D1%81%D0%BB%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D1%81%D0%B5%D1%82%D1%8C">* Сети</a> <br />
          <a href="https://ru.wikipedia.org/wiki/%D0%9F%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB_%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B8_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85">* Протоколы</a><br />
          <a href="https://ru.wikipedia.org/wiki/IP-%D0%B0%D0%B4%D1%80%D0%B5%D1%81">* IP-адрес</a><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%94%D0%BE%D0%BC%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5_%D0%B8%D0%BC%D1%8F">* Доменное имя</a><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%BE_%D0%BE%D0%B3%D1%80%D0%B0%D0%BD%D0%B8%D1%87%D0%B5%D0%BD%D0%B8%D1%8F_%D0%B4%D0%BE%D0%BC%D0%B5%D0%BD%D0%B0">* Правило ограничения домена</a><br />
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

<button class="button5" id="HttpB">HTTP</button>

<!-- The Article -->

<div class="textblock" id="Http">
  <p>
    <em>============================ HTTP-протокол:</em><br />
    <a href="https://ru.wikipedia.org/wiki/HTTP">* HTTP</a><br />
    <a href="https://ru.wikipedia.org/wiki/HTTP_referer">* HTTP referer</a><br />
    <a href="https://ru.wikipedia.org/wiki/HTTPS">* HTTPS</a><br />
    <br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Используемые порты - 80, 443.<br />
    <br />

    <span class="v"><strong># HTTP-глаголы</strong></span><br />
    <span class="v3"><strong>OPTIONS</strong></span> - используется Web-приложениями для получения списка доступных глаголов.<br />
    <span class="v3"><strong>GET</strong></span> - получение данных с сервера.<br />
    <span class="v3"><strong>HEAD</strong></span> - получение заголовков ресурса. Сам ресурс не возвращается.<br />
    <span class="v3"><strong>POST</strong></span> - отправка данных на сервер для обработки.<br />
    <span class="v3"><strong>PUT</strong></span> - создание файла на сервере.<br />
    <span class="v3"><strong>DELETE</strong></span> - удаление ресурса на сервере.<br />
    <span class="v3"><strong>CONNECT</strong></span> - для использования с прокси-сервером.<br />
    <br />

    <span class="v"><strong># Группы статусов кодов</strong></span><br />
    <strong>1xx</strong> - информация.<br />
    <strong>2xx</strong> - успешное завершение.<br />
    <strong>3xx</strong> - перенаправление.<br />
    <strong>4xx</strong> - клиентская ошибка.<br />
    <strong>5xx</strong> - серверная ошибка.<br />
  </p>
</div>


  </div>
</div>

</body>
</html>
