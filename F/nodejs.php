<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Node.js</title>

<link rel="shortcut icon" href="../Images/I/node.png" type="image/x-icon">

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
        <a class="navbar-brand">Node.js</a>
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
    <h3 class="panel-title">Серверный JavaScript</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Node.js">* Node.js</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://nodejs.org/en/">* Node.js Docs</a>
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
  <i class="fa fa-terminal" aria-hidden="true"></i> Cmd
</button>

<!-- Modal -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Cmd</h4>
      </div>
      <div class="modal-body">
        <p class="textblock">
          <strong>node -v</strong> - проверка версии.<br />
          <strong>node Server.js</strong> - запуск сервера.<br />
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal4">
  <i class="fa fa-cube" aria-hidden="true"></i> npm
</button>

<!-- Modal -->

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Node.js  Package  Manager</h4>
      </div>
      <div class="modal-body">
        <strong>npm -v</strong> - проверка номеров версий менеджера пакетов.<br />
        <strong>npm install пакет</strong> - установка модулей Node.js и зависимостей, которые указаны в <strong>package.json</strong>.<br />
        <strong>npm i пакет</strong> - сокращенный вариант.<br>
        <strong>npm i пакет@1.1.1</strong> - установка пакета определенной версии.<br>
        <strong>npm update пакет</strong> - обновление пакета.<br>
        <strong>npm uninstall пакет</strong> - удаление модуля / пакета.<br />
        <strong>npm list</strong> - вывод списка локальных пакетов.<br>
        <strong>npm cache clean</strong> - очищение кэша от старых версий пакетов.<br>
        <strong>npm outdated</strong> - показывает версии пакетов.<br>
        <br />

        <span class="v"><strong># Атрибуты</strong></span><br>
        <strong>--save-dev</strong> - сохранить в директорию devDependencies (директория пакетов для разработки).<br />
        <strong>-g</strong> - глобальная установка.<br />
        <strong>--save</strong> - запись (зависимость) в <strong>package.json</strong>.<br />
        <br />

        <span class="v"><strong># Пакеты</strong></span><br />
        <strong>instagram-node</strong> - пакет для работы с API Instagram.<br />
        <br />

        <span class="v"><strong># Заметки</strong></span><br />
        - Пакеты расширяют функциональность Web-приложения. Gulp, Grunt, Less тоже являются пакетами.<br />
        - Версии - <strong>Major.Minor.Patch</strong><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal5">
  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Заметки
</button>

<!-- Modal -->

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Заметки</h4>
      </div>
          <div class="modal-body">
            <p class="textblock">
              <i class="fa fa-plus-circle" aria-hidden="true"></i> Достоинства:<br />
              - Выполняет роль Web-сервера.<br />
              - 1 поток - обработка всех запросов.<br />
              - Позволяет строить в реальном времени открытые API (для приложений).<br />
              - Быстрый показ данных.<br />
              - Идеально подходит для работы с множеством соединений и задач одновременно.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Кроссплатформенность.<br>
              - Недоступна работа с DOM, BOM.<br />
              - Использует модульную систему (RequireJS).<br>
              <br>

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br>
              - Не годится для app, которые будут использовать CPU в больших объемах.<br>
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

<button class="button5" id="NachB">Начало работы с Node.js</button>
<button class="button5" id="SerB">Server.js</button>
<button class="button5" id="ModB">Модули</button>
<button class="button5" id="PathB">Path</button>
<button class="button5" id="OsB">OS</button>
<button class="button5" id="FileB">File System</button>
<button class="button5" id="MuB">Multer</button>
<button class="button5" id="SobB">События</button>
<button class="button5" id="EnvB">.env</button>

<!-- Article -->

<div class="textblock" id="Nach">
  <p>
    <em>============================ Начало работы с Node.js:</em><br />
      1. Любое приложение на Node.js начинается и настраивается через <strong>package.json</strong>.
      В этом файле хранятся - имя проекта, версия, автор, репозиторий, описание, лицензия, используемые зависимости и многое другое.<br />
      2. <strong>npm init</strong> - создание и инициализация <strong>package.json</strong>.<br />
      3. В свойстве <strong>main</strong> указывается Node.js какой файл следует использовать, когда необходимо запустить App.
      Обычно это <strong>Server.js</strong>.<br />
      4. С помощью Express.js создается каркас приложения (не обязательно).<br />
      5. Запуск сервера.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Чтобы сервер автоматически перезагружался при изменениях файла / файлов (слежение) есть npm-пакет nodemon.<br />
  <strong>npm install -g nodemon</strong> - установка пакета.<br />
  <strong>nodemon Server.js</strong> - слежение за серверным файлом и автоматическая перезагрузка сервера при изменениях.
</div>

  <p>
    <span class="v"><strong># Многопоточность</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Свойство платформы, способной обрабатывать процесс, состоящий из нескольких потоков, выполняющиеся параллельно (без порядка по времени).<br>
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>Ограничения:</strong><br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Организация взаимодействия потоков.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Конкуренция за ресурсы / взаимные блокировки.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Ser">
  <p>
    <em>============================ Server.js:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Создание простого сервера.<br />

<code>
<pre>
<strong>
const http = require('http');
const server = http.createServer((req, res) => {
  if (req.url === '/') {
    res.write('text');
    res.end();
  }
});

server.on('connection', (socket) => {
  console.log('New connection...');
});

server.listen(3000)
</strong>
</pre>
</code>

  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mod">
  <p>
    <em>============================ Модули:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Блок функционала для структурирования сложных приложений и изоляции приватных функций и переменных, которые явно не помечены для экспорта и выполняющий строго определенную функцию.<br>
      <br>

      <code>
        <strong>
          // Загрузка модуля:<br>
          const имя = ('путь_модуля');<br>
          <br>

          // -------- Example:<br>
          // 1. moduleA.js<br>
          <br>

          let s = 10;<br>
          module.exports = s;<br>
          <br>

          // 2. moduleB.js<br>
          <br>

          const mA = require('./имя_модуля.js');<br>
          console.log(mA.s); //10<br>
        </strong>
      </code><br>

      <span class="v"><strong># Экспорт сущностей</strong></span><br />

      <code>
        <strong>
          1. -------- Именованный экспорт (Экспортируемый функционал доступен в виде свойств загружаемого модуля):<br>
          // logger.js<br>
          <br>

          module.exports.имя = function(mes) {<br>
            &nbsp;console.log(mes);<br>
          }<br>
          <br>

          // main.js<br>
          const logger = require('./logger');<br>
          logger.имя('Text'); // Text<br>
          <br>

          2. ------- Экспорт модуля как функции (1 точка доступа):<br>
          // logger.js<br>
          <br>

          module.exports = function(mes) {<br>
            &nbsp;console.log(mes);<br>
          }<br>
          <br>

          // main.js<br>
          const logger = require('./logger');<br>
          logger('Text'); // Text<br>
          <br>

          3. ------- Экспорт конструктора:<br>
          // logger.js<br>
          <br>

          function Logger(name) {<br>
            &nbsp;this.name = name;<br>
          }<br>
          <br>

          Logger.prototype.log = function(mes) {<br>
            &nbsp;console.log(mes);<br>
          }<br>
          <br>

          module.exports = Logger;<br>
          <br>

          // main.js<br>
          const Logger = require('./logger');<br>
          const sLogger = new Logger('s');<br>
          sLogger.log('Text'); // Text<br>
          <br>

          <span class="v"><strong># Глобальный объект</strong></span><br />

          <code>
            <strong>
              // ModuleA<br>
              let currentDate = new Date();<br>
              global.date = currentDate;<br>
              <br>

              // App.js<br>
              console.log(date); // smt value
            </strong>
          </code>
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Функции базовых модулей асинхронны - не блокируют поток.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Любой JS-файл является модулем.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> При повторном подключении модуля, Node.js проверяет, подключался ли модуль ранее - если да, то возвращается ссылка на уже существующий модуль. Если путь модуля не начинается с "/" или "./" - поиск будет осуществлятся среди встроенных модулей Node.js. 
  Если модуль не будет найден, то консоль отобразить сообщение об ошибке.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Переменные объявленные внутри модуля - локальны для него.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Каждый модуль должен иметь четко определенную ответственность (назначение).<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Подключаемые модули кэшируются.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Path">
  <p>
    <em>============================ Модуль работы с путями:</em><br />
      <code>
        <strong>
          const path = require('path');
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Os">
  <p>
    <em>============================ Модуль работы с ОС:</em><br />
      <code>
        <strong>
          const os = require('os');<br />
          <br />

          // Память<br />
          os.totalmem() - вся память.<br />
          os.freemem() - доступная память.<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="File">
  <p>
    <em>============================ Модуль работы с файловой системой:</em><br />
      <code>
        <strong>
          const fs = require('fs');<br />
          <br />

          // Синхронное выполнение (блокирование ввода / вывода):<br>
          <span class="v3"><strong>fs.readdirSync('./')</strong></span> - имеющиеся файлы в текущей директории.<br />
          <span class="v3"><strong>fs.readFileSync('file.txt', 'utf-8')</strong></span> - чтение данных из файла. Принимает 2 аргумента - путь + сам файл и его кодировка.<br />
          <span class="v3"><strong>fs.writeFileSync('new_file.txt', data)</strong></span> - создание нового файла с данными. Принимает 2 аргумента - имя файла, который должен быть изменени или создание нового + данные, которые необходимо записать в него.<br />
          <br>

          // Асинхронный вариант:<br>
          <span class="v3"><strong>fs.readFile('имя_файла', 'кодировка', (err, data) => { ... })</strong></span> - чтение данных из файла.<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mu">
  <p>
    <em>============================ Multer (извлечение файлов из запроса):</em><br />
      <code>
        <strong>
          // Установка:<br>
          npm i multer<br>
          <br>

          // Подключение и настройка<br>
          import multer from 'multer'<br>
          <br>

          const storageConfig = multer.diskStorage({<br>
            &nbsp;destination: (req, file, cb) => {<br>
              &nbsp;&nbsp;cb(null, 'static');<br>
            &nbsp;},<br>
            &nbsp;filename: (req, file, cb) => {<br>
              &nbsp;&nbsp;cb(null, file.originalname);<br>
            &nbsp;}<br>
          });<br>
          <br>

          app.use(multer({storage: storageConfig}).single('fileSrc'))<br>
          <br>

          // Извлечение:<br>
          app.post('/', async (req, res) => {<br>
            &nbsp;const image = req.file;<br>
          })
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Такое же <strong>name</strong> как у input<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Sob">
  <p>
    <em>============================ Модуль событий:</em><br />
      <code>
        <strong>
          const EventEmitter = require('event');<br>
          const emitter = new EventEmitter();<br>
          <br>

          emitter.emit('имя_события', { property: value }); // Поднятие события + передача аргументов - объект с значениями (опционально)<br>
          <br>

          <span class="v"><strong># Регистрация события</strong></span><br />
          emitter.on('имя_события', function(arg) { ... } ); - добавляет слушателя в конец массива слушателей. Не делает никаких проверок на существование в массиве.<br>
          emitter.addListener('имя_события', function(arg) { ... } );<br>
          emitter.once('имя_события', function(arg) { ... } ); - обработчик сработает только 1 раз и затем будет удален<br>
          <br>

          <span class="v"><strong># Асинхронный вызов</strong></span><br />
          emitter.on('имя_события', function(arg) { setImmediate(() => {...}); } );<br>
          <br>

          <span class="v"><strong># Удаление обработчика</strong></span><br />
          emitter.removeListener('имя_события', function() { ... })<br>
          emitter.removeAllListeners('имя_события') - удаление всех обработчиков события<br>
          <br>

          <span class="v"><strong># Доп. инф.</strong></span><br />
          emitter.listenerCount('имя_события') - количество обработчиков.
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Обработчики, которые установлены на определенное событие, вызываеются синхронно (по очереди).<br>
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> На одно событие можно установить только 10 обработчиков события, иначе - засорение памяти.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Env">
  <p>
    <em>============================ Переменные окружения:</em><br />
      <code>
        <strong>
          // Установка:<br>
          npm install dotenv<br>
          <br>

          // Содержимое файла .env:<br>
          ИМЯ_ПЕРЕМЕННОЙ = значение<br>
          <br>

          // Получение значения переменной:<br>
          require('dotenv').config();<br>
          <br>

          const val = process.env.ИМЯ_ПЕРЕМЕННОЙ;
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
