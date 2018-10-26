<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Grunt</title>

<link rel="shortcut icon" href="../Images/I/grunt.png" type="image/x-icon">

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
        <a class="navbar-brand">Grunt</a>
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
    <h3 class="panel-title">Инструмент для сборки JS-проектов из командной строки с использованием задач</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Grunt_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5)">* Grunt</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://gruntjs.com/">* Grunt Docs</a><br />
          <a href="https://gruntjs.com/plugins">* Grunt Плагины</a><br />
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

<button class="button5" id="NachB">Начало работы с Grunt</button>
<button class="button5" id="ZUB">Задача / Условие</button>
<button class="button5" id="SleB">Grunt in Real Time</button>
<button class="button5" id="PlaB">Плагины</button>
<button class="button5" id="ComB">Команды</button>

<!-- The Article -->

<div class="textblock" id="Nach">
  <p>
    <em>============================ Начало работы с Grunt:</em><br />
      <span class="v"><strong># JSON-файл</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Добавление в проект JSON-файла (package.json):
<code>
<pre>
<strong>
  {
    "name": "Project-name",
    "version": "1.0.0",
    }
  }
</strong>
</pre>
</code>

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> После в <strong>Cmd</strong> выполнить команду <strong>npm install grunt -g</strong> и <strong>npm install grunt --save-dev</strong>.<br />
      <br />

      <span class="v"><strong># Gruntfile.js</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Задание настроек (место, где по умолчанию хранится конфигурация для запуска).<br />

<code>
<pre>
<strong>
  // Gruntfile.js
  // Функция-обёртка (требуется для Grunt и его плагинов)
  // Все настройки располагаются внутри этой функции
  module.exports = function(grunt) {

    // ===========================================================================
    // НАСТРОЙКА GRUNT ===========================================================
    // ===========================================================================
    grunt.initConfig({

  // ============= // СОЗДАЁМ ЗАДАЧИ ========== // -------------------------------------
  /* grunt.registerTask('default', ['jshint', 'uglify', 'cssmin', 'less']); */


  // Получить конфигурацию из package.json
  pkg: grunt.file.readJSON('package.json'),

  // Вся конфигурация будет здесь

  // ----------------------------------------------- Настройка jshint для валидации JS-файлов
    /* jshint: {
      options: {
        reporter: require('jshint-stylish') // Используйте jshint-stylish для наглядного представления ошибок
      },

      // При запуске этой задачи анализируется файл Gruntfile.js и все JS-файлы
      build: ['Gruntfile.js', '*.js']
    } */

  // ----------------------------------------------- Настройка uglify для минимизации JS-файлов
  // uglify: {
  //    options: {
  //      banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
  //    },
  //    build: {
  //      files: {
  //        '.min.js': '.js'

  /* // Несколько файлов в один (минимизация) - '.min.js': ['.js', '.js'] */

  //      }
  //    }
  //  }

  // ----------------------------------------------- Компиляция Less в CSS

  /*  less: {
      build: {
        files: {
          '.css': '.less'
        }
      }
  } */


  // ----------------------------------------------- Параметры cssmin для минимизации CSS-файлов
  //  cssmin: {
  //    options: {
  //      banner: '/*\n <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> \n*/\n'
  //    },
  //    build: {
  //      files: {
  //        '.min.css': '.css'
  //      }
  //    }
  //  }

  });

    // ===========================================================================
    // ЗАГРУЗКА ПЛАГИНОВ GRUNT ===================================================
    // ===========================================================================
    // Их можно загрузить, только если они находятся в package.json
    // Убедитесь, что вы запустили npm install, чтобы приложение могло их найти
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-clean');
  };  
</strong>
</pre>
</code>


  </p>

  <p>
    <span class="v"><strong># Проект</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для начала открыть путь проекта.<br />
    <strong>npm install grunt-contrib-имя_плагина --save-dev</strong> - установка плагина.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="ZU">
  <p>
    <em>============================ Запуск различных задач под разные условия:</em><br />
      <a href="https://webref.ru/dev/grunt-getting-started/different-tasks" class="btn btn-primary" role="button">Grunt Docs</a>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sle">
  <p>
    <em>============================ Работа Grunt in Real Time:</em><br />
      <a href="https://webref.ru/dev/grunt-getting-started/watching" class="btn btn-primary" role="button">Grunt Docs</a>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pla">
  <p>
    <em>============================ Плагины Grunt:</em><br />
      <strong>contrib-jshint</strong> - проверка JS-файлов на ошибки.<br />
      <strong>contrib-uglify</strong> - минимизация JS-файлов (сжатие).<br />
      <strong>contrib-watch</strong> - запуск задач, которые следят за изменением файлов.<br />
      <strong>contrib-clean</strong> - очистка файлов и папок.<br />
      <strong>contrib-copy</strong> - копирование файлов и папок.<br />
      <strong>contrib-concat</strong> - объединение файлов в один.<br />
      <strong>contrib-cssmin</strong> - сжатие CSS-файлов.<br />
      <strong>contrib-less</strong> - компиляция Less в CSS.<br />
      <strong>contrib-imagemin</strong> - сжатие изображений в формате PNG, JPG, GIF.<br />
      <strong>contrib-compass</strong> - компиляция Sass в CSS через библиотеку Compass.<br />
      <strong>contrib-htmlmin</strong> - сжатие HTML-файлов.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Com">
  <p>
    <em>============================ Команды Grunt:</em><br />
      <strong>grunt jshint</strong> - анализ JS-файлов на наличие ошибок. Для кода - <strong>*</strong> - все файлы, <strong>**</strong> - все папки.<br />
      <strong>grunt uglify</strong> - сжатие JS-файла (какой / какие именно указываются в <strong>Gruntfile.js</strong>).<br />
      <strong>grunt less</strong> - компиляция Less в CSS.<br />
      <strong>grunt cssmin</strong> - сжатие CSS-файлов.<br />
  </p>
</div>

  </div>
</div>

</body>
</html>
