<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Mocha.js</title>

<link rel="shortcut icon" href="../Images/I/Mocha.png" type="image/x-icon">

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
        <a class="navbar-brand">Mocha</a>
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
    <h3 class="panel-title">Автоматические тесты для JS</h3>
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
          <a href="https://en.wikipedia.org/wiki/Mocha_(JavaScript_framework)">* Mocha</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://mochajs.org/">* Mocha Docs</a>
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

<button class="button5" id="NachB">Начало работы с Mocha</button>
<button class="button5" id="SpeB">Спецификация</button>
<button class="button5" id="TesB">Тесты</button>

<!-- The Article -->

<div class="textblock" id="Nach">
  <p>
    <em>============================ Начало работы с Mocha:</em><br />
      1. Создание страницы для тестов + добавление Mocha и Chai.<br />
      2. Подключения в разделе <strong>&lt;head&gt;</strong>:<br />
      <code>
        <strong>
          &lt;!-- Подключение стилей Mocha, для отображения результатов --&gt;<br />
          &lt;link rel="stylesheet" href="Mocha/mocha.css"&gt;<br /><br />

          &lt;!-- Подключение библиотеки Mocha --&gt;<br />
          &lt;script src="Mocha/mocha.js"&gt;&lt;/script&gt;<br /><br />

          &lt;!-- Настройка Mocha --&gt;<br />
          &lt;script&gt;<br />
          mocha.setup('bdd');<br />
          &lt;/script&gt;<br /><br />

          &lt;!-- Подключение Сhai --&gt;<br />
          &lt;script src="Chai/chai.js"&gt;&lt;/script&gt;<br /><br />

          &lt;!-- Вынесение assert в глобальную область (Chai) --&gt;<br />
          &lt;script&gt;<br />
          var assert = chai.assert;<br />
          &lt;/script&gt;
        </strong>
      </code><br /><br />

      3. Подключения в разделе <strong>&lt;body&gt;</strong>:<br />
      <code>
        <strong>
          &lt;!-- Тестируемый код --&gt;<br />
          &lt;script src="Code.js"&gt;&lt;/script&gt;<br /><br />

          &lt;!-- Спецификация --&gt;<br />
          &lt;script src="Test.js"&gt;&lt;/script&gt;<br /><br />

          &lt;!-- Вывод результатов тестов --&gt;<br />
          &lt;div id="mocha"&gt;&lt;/div&gt;<br /><br />

          &lt;!-- Запуск тестов --&gt;<br />
          &lt;script&gt;<br />
          mocha.run();<br />
          &lt;/script&gt;
        </strong>
      </code><br /><br />

      4. Написание спецификации в <strong>Test.js</strong>.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Spe">
  <p>
    <em>============================ Спецификация:</em><br />
      <span class="v"><strong># Поток разработки</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Написание спецификации - описывается базовый функционал.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Начальная реализация - написание кода.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Тестирование кода для проверки соответствия спецификации и исправление ошибок, если будут выявлены.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Расширение спецификации новым функционалом.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Дальнейшая разработка.<br /><br />

      <span class="v"><strong># Спека</strong></span><br />
      <code>
        <strong>
          describe("имя_функции", function() {<br />
            &nbsp;it("описание_функции", function() {<br />
              &nbsp;&nbsp;assert...<br />
            &nbsp;});<br />
          });<br />
        </strong>
      </code><br /><br />

      1. <strong>describe("имя_функции", function() {...});</strong> - задает, что именно описывается.<br />
      2. <strong>it("описание_функции", function() {...});</strong> - описывает, что должна делать функция.<br />
      3. Код внутри <strong>it</strong> - тест, который проверяет функцию.
      4. <strong>assert...</strong> - функции из библиотеки ChaiJS.
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Тест необходимо делить - 1 тест тестирует ровно одну вещь (больше информации о происходящем).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если <strong>assert</strong> обнаруживает ошибку, то блок кода с <strong>it</strong> прекращает работу.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Вложенный <strong>describe</strong> создаст новую подгруппу тестов и будет выводится с подзаголовком.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>it</strong> поддерживает циклы.
</div>

  <p>
    <span class="v"><strong># Расширение тестов</strong></span><br />
    <strong>before(function() {...});</strong> - выполнение кода до запуска тестов.<br />
    <strong>after(function() {...});</strong> - выполнение кода после запуска тестов.<br />
    <strong>beforeEach(function() {...});</strong> - выполнение кода до каждого <strong>it</strong>.<br />
    <strong>afterEach(function() {...});</strong> - выполнение кода после каждого <strong>it</strong>.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Tes">
  <p>
    <em>============================ Тесты:</em><br />
      <code>
        <strong>
          // Установка:<br>
          npm install mocha<br>
          <br>

          // Запуск тестов:<br>
          npm test<br>
          ~ Будут выполнены все файлы с расширением .test.js<br>
          <br>

          // Пример теста<br>
          const multiply = (x, y) => {<br>
            &nbsp;return x * y;<br>
          }<br>
          <br>

          export default multiply;<br>
          <br>

          // test/operations.test.js<br>
          const operations = require('./operations.js');<br>
          <br>

          it('Should multiply two numbers', () => {<br>
            &nbsp;const testVal = 15;<br>
            &nbsp;const res = operations.multiply(3, 5);<br>
            <br>

            &nbsp;if (res !== testVal) {<br>
              &nbsp;&nbsp;throw new Error(`Expected ${testVal}, but got ${res}`);<br>
            &nbsp;}<br>
          });<br>
          <br>

          <span class="v"><strong># Асинхронный тест</strong></span><br />
          const m = (x, y, cb) => {<br>
            &nbsp;setTimeout(() => {<br>
              &nbsp;&nbsp;cb(x * y);<br>
            &nbsp;}, 1000);<br>
          }<br>
          <br>

          it('text', (done) => {<br>
            &nbsp;const expVal = 12;<br>
            &nbsp;operations.m(4, 3, (res) => {<br>
              &nbsp;&nbsp;if (res !== expVal) {<br>
                &nbsp;&nbsp;&nbsp;throw new Error('Text');<br>
              &nbsp;&nbsp;}<br>
              &nbsp;&nbsp;done();<br>
            &nbsp;});<br>
          });<br>
          <br>

          или...<br>
          <br>

          it('Text', async () => {<br>
            &nbsp;const res = await test_func(args);<br>
            &nbsp;expect(res)<br>
              &nbsp;&nbsp;.to.be.a('string')<br>
          });<br>
          <br>

          ~ Чтобы асинхронные функции завершились до завершения теста, передается done()
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
