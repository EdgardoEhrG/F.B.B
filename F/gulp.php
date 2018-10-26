<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Gulp</title>

<link rel="shortcut icon" href="../Images/I/gulp.png" type="image/x-icon">

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
        <a class="navbar-brand">Gulp</a>
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
    <h3 class="panel-title">Потоковый сборщик проектов</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Gulp">* Gulp</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://gulpjs.com/">* Gulp Docs</a>
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
              - Применяет потоки плагинов для создания комплексного рабочего процесса.<br />
              - Работает по принципу многократного параллелизма - запуск множества задач, насколько возможно.<br />
              - Gulp будет вызывать задачу по умолчанию или любую другую задачу, заданную в Cmd автоматически.<br />
              - Работает на виртуальной файловой системе vinylfs - можно модифицировать файлы, не касаясь диска, пока не закончится
              разработка. Это позволяет Gulp задействовать несколько потоков без необходимости сохранять во временные файлы.<br />
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

<button class="button5" id="NachB">Начало работы с Gulp</button>
<button class="button5" id="SleB">Отслеживание файлов</button>
<button class="button5" id="PlaB">Плагины</button>

<!-- The Article -->

<div class="textblock" id="Nach">
  <p>
    <em>============================ Начало работы с Gulp:</em><br />
      1. Создание <strong>package.json</strong> для проекта (если еще нет).<br />
      2. <strong>npm install -g gulp</strong> - установка Gulp (глобально).<br />
      3. <strong>npm install gulp --save-dev</strong> - установка Gulp в проект.<br />
      <br />

      <span class="v"><strong># Основные функции</strong></span><br />
      <span class="v3"><strong>gulp.task()</strong></span> - определение задачи.<br />
      <span class="v3"><strong>gulp.src()</strong></span> - доступ к файлам. Получает строку с путем файла или набора файлов (папки), и создает поток объектов
      представляющий эти файлы.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Уточнения:<br />
  <span class="v3"><strong>JS/*.js</strong></span> - все файлы расширения JS.<br />
  <span class="v3"><strong>JS/**/*.js</strong></span> - все папки содержащие JS-файлы.<br />
  <span class="v3"><strong>!JS/имя_файла.js</strong></span> - исключить файл / файлы (не применять к ним задачи).<br />
  <span class="v3"><strong>*.+(js | css)</strong></span> - все файлы JS и CSS.<br />
</div>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Если уточнений несколько, то запись такого типа - <span class="v3"><strong>gulp.src(['JS/*.js', '!JS/*.min.js'])</strong></span>
</div>

  <p>
    <span class="v3"><strong>gulp.dest()</strong></span> - сохранение изменений.<br />
    <span class="v3"><strong>gulp.watch()</strong></span> - отслеживание изменений.<br />
    <br />

    <span class="v"><strong># Потоки</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Потоки позволяют пройти некоторым данным через ряд, как правило, небольших
    функций, которые модифицируют данные, а затем передают их следующей функции.
    <br />

    <span class="v"><strong># Определение задачи</strong></span><br />
    <code>
      <strong>
        gulp.task('имя_задачи', function() {<br />
          &nbsp;...<br />
        });<br />
      </strong>
    </code><br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Задача может быть также списком других задач (задачи будут запускаться асинхронно):<br />
    <span class="v3"><strong>gulp.task('имя_задачи', ['имя_задачи_2', 'имя_задачи_3', 'имя_задачи_4']);</strong></span>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Задача с именем 'default' будет выполняться когда просто выполняется команда <strong>gulp</strong>. Задача по умолчанию.
</div>

  <p>
    <span class="v"><strong># Gulpfile.js</strong></span><br />
    1. Объявление переменных / подключение плагинов.<br />
    2. Определение задачи.<br />
    3. Указание пути.<br />
    4. Поток задач.<br />
    5. Сохранение изменений.<br />
    6. Вывод уведомления о завершении задачи.<br /><br />
    <code>
      <strong>
        var gulp = require('gulp'),<br />
            &nbsp;&nbsp;&nbsp;&nbsp;uglify = require('gulp-uglify'); // Сжатие JS-файлов<br />
            &nbsp;&nbsp;&nbsp;&nbsp;notify = require('gulp-notify'); // Для уведомлений о завершении процесса<br />
            &nbsp;&nbsp;&nbsp;&nbsp;coffee = require('gulp-coffee'); // Компилятор CoffeeScript в JS<br />
            &nbsp;&nbsp;&nbsp;&nbsp;rename = require("gulp-rename"); // Для переименовывания файлов<br />
            &nbsp;&nbsp;&nbsp;&nbsp;jshint = require("gulp-jshint"); // Проверка JS-файлов<br /><br />

        /* Сжатие JS-файлов */<br /><br />

        gulp.task('minify', function () {<br />
          &nbsp;gulp.src(['JS/*.js', '!JS/*.min.js'])<br />
              &nbsp;&nbsp;.pipe(uglify())<br />
              &nbsp;&nbsp;.pipe(rename({suffix: '.min'}))<br />
              &nbsp;&nbsp;.pipe(gulp.dest('Build'))<br />
              &nbsp;&nbsp;.pipe(notify("Minify complete!"));<br />
        });<br />
      </strong>
    </code>
  </p>

  <p>
    <span class="v"><strong># Автозагрузка плагинов</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для Gulp из <strong>package.json</strong><br />
    <code>
      <strong>
        var gulpLoadPlugins = require('gulp-load-plugins'),<br />
          &nbsp;&nbsp;&nbsp;&nbsp;plugins = gulpLoadPlugins();<br />
      </strong>
    </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sle">
  <p>
    <em>============================ Отслеживание файлов:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Gulp имеет возможность следить за изменениями файлов и выполнять задачу / задачи при
      обнаружении изменений.<br />
      <span class="v3"><strong>gulp.watch()</strong></span> - принимает файл или массив файлов + массив задач.<br />
      <code>
        <strong>
          var paths = {<br />
            &nbsp;scss : ['Styles/*.scss'],<br />
            &nbsp;coffee : ['JS/*.coffee']<br />
          };<br /><br />

          gulp.task('watcher', function() {<br />
            &nbsp;gulp.watch(path.scss, ['задача']);<br />
            &nbsp;gulp.watch(path.coffee, ['задача']);<br />
            &nbsp;console.log("Watcher is watching...");<br />
          });
        </strong>
      </code>
      <br />

      <span class="v"><strong># "Слушатель"</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> <strong>event</strong> - информация о событии, которое вызывает функцию.
      <code>
        <strong>
          var watcher = gulp.watch();<br />
          watcher.on('change', function(event) {<br />
            &nbsp;console.log('Event type: ' + event.type); //Добавлено, изменено или удалено<br />
            &nbsp;console.log('Event path: ' + event.path); //Путь к файлу<br />
          })
        </strong>
      </code><br /><br />

      <span class="v"><strong># События</strong></span><br />
      <span class="v3"><strong>end</strong></span> - срабатывает, когда watcher завершается (задачи и функции обратного вызова не будут
      больше вызываться при изменении файлов).<br />
      <span class="v3"><strong>error</strong></span> - срабатывает, когда происходит ошибка.<br />
      <span class="v3"><strong>ready</strong></span> - срабатывает, когда файлы были найдены и готовы к отслеживанию.<br />
      <span class="v3"><strong>nomatch</strong></span> - срабатывает, когда запросу не соответствует ни один файл.<br />
      <br />

      <span class="v"><strong># Методы</strong></span><br />
      <span class="v3"><strong>watcher.end()</strong></span> - останавливает watcher.<br />
      <span class="v3"><strong>watcher.files()</strong></span> - возвращает список файлов, за которыми watcher следит.<br />
      <span class="v3"><strong>watcher.add()</strong></span> - добавляет файлы в watcher, которые соответствуют указанному шаблону.<br />
      <span class="v3"><strong>watcher.remove()</strong></span> - удаляет определенный файл.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pla">
  <p>
    <em>============================ Плагины:</em><br />
      <strong>gulp-uglify</strong> - сжатие JS-файлов.<br />
      <strong>gulp-jshint</strong> - проверка JS-файлов.<br />
      <strong>gulp-concat</strong> - объединение JS-файлов.<br />
      <strong>gulp-concat-css</strong> - объединение CSS-файлов.<br />
      <strong>gulp-minify-css</strong> - сжатие CSS-файлов.<br />
      <strong>gulp-notify</strong> - уведомления о завершенности задач.<br />
      <strong>gulp-sass</strong> - компиляция Sass в CSS.<br />
      <strong>gulp-coffee</strong> - компиляция CoffeeScript в JS.<br />
      <strong>gulp-load-plugins</strong> - автозагрузка плагинов.<br />
      <strong>gulp-rename</strong> - переименование файлов.<br />
      <strong>gulp-imagemin</strong> - оптимизация изображений.<br />
      <strong>gulp-uncss</strong> - удаление неиспользуемых CSS-стилей.<br />
  </p>
</div>

  </div>
</div>

</body>
</html>
