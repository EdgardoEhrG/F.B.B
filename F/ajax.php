<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Ajax</title>

<link rel="shortcut icon" href="../Images/I/ajax.png" type="image/x-icon">

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
        <a class="navbar-brand">Ajax</a>
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
    <h3 class="panel-title">Взаимодействие с сервером без перезагрузки Web-страницы</h3>
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
          <a href="https://ru.wikipedia.org/wiki/AJAX">* Ajax</a> <br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://api.jquery.com/jquery.ajax/">* Ajax Docs</a><br />
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

<button class="button5" id="ReqB">XMLHttpRequest</button>
<button class="button5" id="AjB">$.ajax()</button>
<button class="button5" id="ParB">Параметры</button>
<button class="button5" id="SerB">Сериализация данных</button>
<button class="button5" id="XMLB">XML</button>
<button class="button5" id="PromB">Promise</button>
<button class="button5" id="FetB">Fetch API</button>
<button class="button5" id="AxiB">Axios</button>

<!-- The Article -->

<div class="textblock" id="Req">
  <p>
    <em>============================ XMLHttpRequest-запрос:</em><br />
      <span class="v"><strong># Синхронный запрос</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При таком запросе Web-приложение не реагирует на действия пользователя.<br />
      <br />

      <code>
        <strong>
          var xhr = new XMLHttpRequest(); //Создание объекта для HTTP-запросов<br /><br />

          xhr.open("GET", ".html", false); //Настройка<br />
          xhr.send(); //Отправка запроса<br /><br />

          элемент.innerHTML = xhr.pesponseText; //Вывод части разметки, которая содержится в запрашиваемой странице
        </strong>
      </code><br /><br />

      <span class="v"><strong># Асинхронный запрос</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При таком запросе Web-приложение реагирует на действия пользователя.<br />

      <code>
        <strong>
          xhr.open("GET", ".html", true); //Настройка<br />
        </strong>
      </code><br />

      <span class="v"><strong># Проверка успешности запроса (перед отправкой)</strong></span><br />
      <code>
        <strong>
          xhr.onreadystatechange = function() {<br />
            &nbsp;if (xhr.readyState == 4 && xhr.status == 200) {<br />
              &nbsp;&nbsp;...<br />
            &nbsp;}<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Свойства:<br />
      <span class="v3"><strong>.status</strong></span> - статусный код ответа.<br />
      <span class="v3"><strong>.statusText</strong></span> - текст статуса ответа.<br />
      <span class="v3"><strong>.response</strong></span> - ответ сервера.<br />
      <span class="v3"><strong>.responseType</strong></span> - тип ответа.<br />
      <span class="v3"><strong>.responseText</strong></span> - текст ответа сервера.<br />
      <span class="v3"><strong>.responseXML</strong></span> - XML-ответ.<br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Значения свойства <span class="v3"><strong>readyState</strong></span>:<br />
      <strong>0</strong> - метод <span class="v3"><strong>.open()</strong></span> еще не вызывался.<br />
      <strong>1</strong> - метод <span class="v3"><strong>.open()</strong></span> вызван, но метод <span class="v3"><strong>.send()</strong></span> еще не вызывался.<br />
      <strong>2</strong> - метод <span class="v3"><strong>.send()</strong></span> вызван, но ответ от сервера не получен.<br />
      <strong>3</strong> - идет прием данных от сервера.<br />
      <strong>4</strong> - ответ от сервера полностью получен.<br />
      <br />

      <span class="v"><strong># Обработка</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для правильной обработки данных (касается использования спецсимволов).<br />
      <span class="v3"><strong>encodeURIComponent()</strong></span> - кодирование данных.<br />
      <span class="v3"><strong>decodeURIComponent()</strong></span> - декодирование данных.<br />
      <br />

      <span class="v"><strong># Таймер</strong></span><br />
      <code>
        <strong>
          var timeout = 2000; //2 секунды<br />
          var timer = setTimeout(function() {<br />
            &nbsp;xhr.abort(); &nbsp;&nbsp;//Прерывание Ajax-запроса<br />
            &nbsp;alert("aborted");<br />
          }, timeout);<br /><br />

          // В проверку внести - clearTimeout(timer);
        </strong>
      </code><br /><br />

      <span class="v"><strong># Индикатор загрузки</strong></span><br />
      1. Создать элемент (текстовый абзац) со свойством <span class="v2"><strong>display:none</strong></span> и поместить туда изображение из <a href="http://ajaxload.info/">индикаторы</a>.<br />
      <br />

      <code>
        <strong>
          function show() {<br />
            &nbsp;элемент.style.display = "block"; &nbsp;&nbsp;//Отображение индикатора - в проверку<br />
          }<br /><br />

          function hide() {<br />
            &nbsp;элемент.style.display = "none"; &nbsp;&nbsp;//Удаление индикатора - после отправки<br />
          }
        </strong>
      </code><br /><br />

      <span class="v"><strong># POST-запрос (с передачей)</strong></span><br />
      <code>
        <strong>
          var user = {<br />
            &nbsp;name: "Tom",<br />
            &nbsp;age: 28<br />
          };<br /><br />

          var request = new XMLHttpRequest();<br /><br />

          function reqReadyStateChange() {<br />
            &nbsp;if (request.readyState == 4 && request.status == 200) {<br />
              &nbsp;&nbsp;document.getElementById("root").innerHTML = request.responseText;<br />
            &nbsp;}<br /><br />

            var body = "name=" + user.name + "&age=" + user.age;<br />
            request.open("POST", ".php");<br />
            request.setRequestHeader('Content-Type', 'application/x-www-urlencoded');<br />
            request.onreadystatechange = reqReadyStateChange();<br />
            request.send(body);<br />
          }
        </strong>
      </code><br /><br />

      <span class="v"><strong># Отправка данных в формате JSON</strong></span><br />
      <code>
        <strong>
          object;<br /><br />

          var json = JSON.stringify(object);<br />
          var request = ...<br />
          request.open("POST", ".php");<br />
          request.setRequestHeader('Content-Type', 'application/json; charset=utf-8');<br />
          ...<br />
          request.send(json);<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Aj">
  <p>
    <em>============================ Ajax-запрос:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Выполняет асинхронный HTTP-запрос.<br />
      <br />
      <code>
        <strong>
          $.ajax({<br />
          &nbsp;url: ".php",<br />
          &nbsp;success: function(имя_функции) {<br />
            }<br />
          });<br />
        </strong>
      </code>
  </p>

  <p>
    <span class="v"><strong># Основные параметры</strong></span><br />
    <span class="v3"><strong>url</strong></span> - строка, содержащая адрес URL, к которому направляется запрос.<br />
    <span class="v3"><strong>dataType</strong></span> - строка, тип данных которые ожидаются от сервера.<br />
    <span class="v3"><strong>cache</strong></span> - логический, локальное кэширование данных в браузере, снижающее количество обращений к серверу.<br />
    <span class="v3"><strong>method</strong></span> - строка, метод HTTP, используемый в запросе.<br />
    <span class="v3"><strong>success</strong></span> - функция, вызываемая если запрос успешен.<br />
    <span class="v3"><strong>error</strong></span> - функция, вызывается если запрос закончится ошибкой.<br />
    <span class="v3"><strong>complete</strong></span> - функция, вызывается когда запрос завершается (после того как <span class="v3"><strong>success</strong></span> или <span class="v3"><strong>error</strong></span> обработчики будут вызваны).<br />
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Вызовы Ajax подчиняются политике единого домена. То есть ресурсы, к которым происходит Ajax-запрос должны быть
  на одном сервере с загружаемой его страницей. Обращения к элементам страниц других серверов блокируется. Но такая
  проверка не распространяется на директивы JS <strong>"include"</strong>.
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>GET</strong> - запрос данных с сервера.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>POST</strong> - отправка данных на сервер.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Par">
  <p>
    <em>============================ Параметры:</em><br />
      <span class="v3"><strong>async</strong></span> - логический, асинхронный / синхронный запрос.<br />
      <span class="v3"><strong>ifModified</strong></span> - логический, разрешает запросу быть успешным только если ответ изменился с момента последнего запроса.<br />
      <span class="v3"><strong>statusCode</strong></span> - объект с числовыми кодами HTTP кодов статусов и функции которые будут вызваны когда статус ответа имеет соотвествующее значение.<br />
      <span class="v3"><strong>timeout</strong></span> - число, задает таймаут запроса (в милисекундах).<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Ser">
  <p>
    <em>============================ Сериализация данных:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Сериализация данных формы в один объект как единое целое. Затем Ajax передает его на сервер.<br /><br />

      <span class="v3"><strong>$('#name_form').serialize();</strong></span> - объединяет весь ввод информации в одну строку
      пар (ключ - значение), разделенных амперсандом.<br />
      <code>
        <strong>
          a = 2 & b = 3 & c = 4
        </strong>
      </code>
      <br />
      <br />

      <span class="v3"><strong>$('#name_form').serializeArray();</strong></span> - объединяет весь ввод информации в объект / ассоциативный массив.<br />
      <code>
        <strong>
          [<br />
          {<br />
            &nbsp;name: "a",<br />
            &nbsp;value: "2"<br />
          },<br />
          {<br />
            &nbsp;name: "b",<br />
            &nbsp;value: "4"<br />
          }<br />
          ]<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="XML">
  <p>
    <em>============================ XML:</em><br />
      <a href="https://ru.wikipedia.org/wiki/XML">* XML</a><br />
  </p>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Если XML-файл содержит ошибки (неправильный регистр символа в имени тега или не закрыт какой-то тег), то
  чтение и разбор этого файла перестает работать. Браузер сообщит об ошибке в инструменте разработчика.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Prom">
  <p>
    <em>============================ Promise:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Оборачивание асинхронной операции в один объект.<br />
      <br />

      <code>
        <strong>
          const pr = () => new Promise((resolve, reject) => {<br>
            &nbsp;if (true) {<br>
              &nbsp;&nbsp;return resolve(true);<br>
            &nbsp;} else {<br>
              &nbsp;&nbsp;return reject(false);<br>
            &nbsp;}<br>
          });<br>
          <br>

          pr()<br>
            &nbsp;.then((val) => console.log(val));
        </strong>
      </code><br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Дополнения:<br>
      <span class="v3"><strong>Promise.all([])</strong></span> - принимает массив функций и вызывает их (дожидается, пока все не выполнятся, либо отклонено любое из переданных).<br />
      <span class="v3"><strong>Promise.race([])</strong></span> - вернет то значение, которое первое выполнится / отклонится. Также принимает массив функций.<br />

  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fet">
  <p>
    <em>============================ Fetch API:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Общение с сервером на основе promise.<br>
      <code>
        <strong>
          fetch('url')<br>
            &nbsp;.then((res) => {<br>
              &nbsp;&nbsp;return res.json();  &nbsp;&nbsp;// Парсинг данных<br>
            &nbsp;})<br>
            &nbsp;.then((data) => {<br>
              &nbsp;&nbsp;console.log(data);  &nbsp;&nbsp;// Получение данных<br>
            &nbsp;})<br>
            &nbsp;.catch((err) => {<br>
              &nbsp;&nbsp;console.error(err);  &nbsp;&nbsp;// Отлавливание ошибок<br>
            &nbsp;})<br>
            &nbsp;.finaly(() => ...);  &nbsp;&nbsp;// Выполнение любого кода независимо от того, что происходило в методах then / catch<br>
            <br>

            // -------------------------------- Асинхронный вариант (обертка)<br>
            const getResource = async (url) => {<br>
              &nbsp;const res = await fetch(url);<br>
              &nbsp;if (!res.ok) {<br>
                &nbsp;&nbsp;throw new Error(`Could not fetch ${url}, received ${res.status}`);<br>
              &nbsp;}<br>
              &nbsp;const body = await res.json();<br>
              &nbsp;return body;<br>
            }
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>res.ok</strong> содержит <strong>true</strong>, если <strong>res.status</strong> содержит один из ОК-статусов (200-299)<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Код, который работает с API лучше изолировать в отдельный класс (как service).<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Модель данных API должна быть отделена от модели данных приложения.<br>
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>fetch()</strong> отклоняет promise, если произошла ошибка сети.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Код с <strong>await</strong> может выбросить ошибку.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Axi">
  <p>
    <em>============================ Axios:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Получение данных из API.<br />
      <br>

      <code>
        <strong>
          // Установка:<br>
          npm install axios<br>
          <br>

          const axios = require('axios') или import axios from 'axios';<br>
          <br>

          axios.get('api_url')<br>
            &nbsp;.then((res) => console.log(res))<br>
            &nbsp;.catch((err) => console.error(err))<br>
            &nbsp;.finally(() => ...);<br>
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
