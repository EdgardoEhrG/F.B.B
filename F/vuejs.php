<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Vue.js</title>

<link rel="shortcut icon" href="../Images/I/VueJS.png" type="image/x-icon">

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
        <a class="navbar-brand">VueJS</a>
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
    <h3 class="panel-title">Прогрессивный фреймворк для создания пользовательских интерфейсов</h3>
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
          <a href="https://en.wikipedia.org/wiki/Vue.js">* VueJS</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://vuejs.org/">* VueJS Docs</a>
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
              - Использование вирутального DOM.<br />
              <br />

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
              - Не поддерживается IE10 и ниже.<br />
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

<button class="button" id="CompB">Vue-компоненты</button>
<button class="button" id="PropB">Привязка данных</button>
<button class="button" id="FilB">Фильтры</button>
<button class="button" id="DirB">Директивы</button>
<button class="button" id="SobB">Обработка событий</button>
<button class="button" id="StyB">Работа со стилями</button>
<button class="button" id="UprB">Управление элементами</button>
<button class="button" id="UslB">Условный рендеринг</button>
<button class="button" id="CycB">Цикловой рендеринг</button>
<button class="button" id="RouB">Роутинг</button>

<!-- The Article -->

<div class="textblock" id="Comp">
  <p>
    <em>============================ Vue-компоненты:</em><br />
      <span class="v"><strong># Объект Vue (old)</strong></span><br />
      <code>
        <strong>
          var app = new Vue({<br />
            &nbsp;el: '#id', &nbsp;&nbsp;&nbsp;//Связка с элементом разметки по id<br />
            &nbsp;data: {<br />
              &nbsp;&nbsp;свойство: значение &nbsp;&nbsp;&nbsp;//Props<br />
            &nbsp;},<br />
            &nbsp;methods: {<br />
              &nbsp;&nbsp;method_1: function() { &nbsp;&nbsp;&nbsp;//поведение элемента<br />
                &nbsp;&nbsp;&nbsp;...<br />
              &nbsp;&nbsp;}<br />
            &nbsp;}<br />
          })
        </strong>
      </code><br />
      <br />

      <span class="v"><strong># Шаблоны (component)</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Расширение компонентов - <strong>.vue</strong><br />
      <code>
        <strong>
          &lt;template lang="pug"&gt;<br />
            &nbsp;&nbsp;div.container<br />
          &lt;/template&gt;<br /><br />

          &lt;script&gt;<br />
          export default {<br />
            &nbsp;name: 'имя_компонента'<br />
          }<br />
          &lt;/script&gt;<br /><br />

          &lt;style lang="scss" scoped&gt;<br />
          &lt;/style&gt;
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>scoped</strong> - означает, что стили будут применяться только к этому компоненту и недоступны глобально.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Компонент всегда должен быть обернут в <strong>div</strong><br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Prop">
  <p>
    <em>============================ Привязка данных:</em><br />
      <span class="v"><strong># Декларативные подход</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Интерполяция (вставка данных / JS-выражений + можно указывать несколько блоков):<br />
      <code>
        <strong>
          data () {<br />
            &nbsp;return {<br />
              &nbsp;&nbsp;prop1: 'text'<br />
            &nbsp;}<br />
          }<br /><br />

          //разметка<br />
          div<br />
            &nbsp;p {{ prop1 }}<br />
        </strong>
      </code><br />
      <br />

      <span class="v"><strong># Передача данных (props)</strong></span><br />
      <code>
        <strong>
          // Разметка (родительский компонент)<br />
          div<br />
            &nbsp;num-block(:num="1")<br /><br />

          // (дочерний компонент)<br />
          div<br />
            &nbsp;p {{ num }}<br /><br />

          // JS<br />
          props: {<br />
            &nbsp;num: {type: Number, required: true}<br />
          }<br />
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>{type: Number, required: true}</strong> - валидация передаваемых данных. Возможные типы - String, Number, Boolean, Object, Array, Function. Последнее свойство - обязательное наличие.<br />
</div>

  <p>
      <span class="v"><strong># Вычисляемые свойства</strong></span><br />
      <code>
        <strong>
          computed: {<br />
            &nbsp;enabled () {<br />
              &nbsp;&nbsp;if (this.свойство === значение) {<br />
                &nbsp;&nbsp;&nbsp;return "text";<br />
              &nbsp;&nbsp;}<br />
            &nbsp;}<br />
          }<br /><br />

          div<br />
            &nbsp;p {{ enabled }}
        </strong>
      </code><br />

      <span class="v"><strong># Наблюдаемые свойства</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Применяются для выполнения асинхронных действий, которые могут занять продолжительное время.<br />
      <code>
        <strong>
          data () {<br />
            &nbsp;return {<br />
              &nbsp;&nbsp;number: '',<br />
              &nbsp;&nbsp;result: ''<br />
            &nbsp;}<br />
          },<br />
          methods: {<br />
            &nbsp;factorial(n) {<br />
              &nbsp;&nbsp;this.result = 'Идет вычисление...';<br />
              &nbsp;&nbsp;let vm = this;<br />
              &nbsp;&nbsp;setTimeout(function() {<br />
                &nbsp;&nbsp;&nbsp;let res = 1;<br />
                &nbsp;&nbsp;&nbsp;for(let i = 1; i <= n; i++) {<br />
                  &nbsp;&nbsp;&nbsp;&nbsp;res *= i;<br />
                &nbsp;&nbsp;&nbsp;}<br />
                &nbsp;&nbsp;&nbsp;vm.result = 'Факториал числа ' + n + 'равен ' + res;<br />
              &nbsp;&nbsp;}, 2000);<br />
            &nbsp;}<br />
          },<br />
          watch: {<br />
            &nbsp;number: function(n) {<br />
              &nbsp;&nbsp;if (n > 0) {<br />
                &nbsp;&nbsp;&nbsp;this.factorial(n);<br />
              &nbsp;&nbsp;}<br />
            &nbsp;}<br />
          }<br /><br />

          // Разметка<br /><br />
          div<br />
            &nbsp;input(type="text" v-model="number")<br />
            &nbsp;p {{ result }}<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fil">
  <p>
    <em>============================ Фильтры:</em><br />
      <code>
        <strong>
          filters: {<br />
            &nbsp;lowercase (value) {<br />
              &nbsp;&nbsp;return value.toLowerCase();<br />
            &nbsp;}<br />
          }<br /><br />

          // Использование фильтра<br />
          p {{ свойство | lowercase }}
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Фильтров может быть любое количество.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Dir">
  <p>
    <em>============================ Директивы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Указываются в разметке.<br />
      <span class="v"><strong># Привязка к атрибутам</strong></span><br />
      <span class="v3"><strong>:атрибут="свойство"</strong></span> - вставка значения.<br />
      <br />

      <span class="v"><strong># Привязка к HTML</strong></span><br />
      <span class="v3"><strong>v-html="свойство"</strong></span> - вставка тега (если использовать как интерполяцию - вставка кода как строка).<br />
      <span class="v3"><strong>v-once="свойство"</strong></span> - привязка значения, которое будет неизменно.<br />
      <span class="v3"><strong>v-model="свойство"</strong></span> - двусторонняя привязка к свойству, которое будет меняться.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Модификаторы:<br />
      <strong>.number</strong> - конвертация значения в число.<br />
      <strong>.trim</strong> - обрезание начальных и конечных пробелов.<br />
      <br />

      <span class="v"><strong># Сокращения</strong></span><br />
      <span class="v3"><strong>v-on:событие="метод" => @событие="метод"</strong></span> - сокращение обработчика события.<br />
      <span class="v3"><strong>v-bind:атрибут="свойство" => :атрибут="свойство"</strong></span> - сокращение директивы.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sob">
  <p>
    <em>============================ Обработка событий:</em><br />
      <span class="v3"><strong>v-on:событие="method_1"</strong></span> - можно также вставлять JS-выражения.<br />
      <br />
      <code>
        <strong>
          data () {<br />
            &nbsp;return {<br />
              &nbsp;&nbsp;counter: 0<br />
            &nbsp;}<br />
          },<br />
          methods: {<br />
            &nbsp;method1 (n) {<br />
              &nbsp;&nbsp;this.counter = this.counter + n;<br />
            &nbsp;}<br />
          }<br /><br />

          //Разметка<br />
          div<br />
            &nbsp;p {{ counter }}<br />
            &nbsp;button(@click="method1(2)")<br />
        </strong>
      </code>
</div>

<!-- The Article -->

<div class="textblock" id="Sty">
  <p>
    <em>============================ Работа со стилями:</em><br />
      <span class="v"><strong># Переключение класса</strong></span><br />
      <span class="v3"><strong>:class="{класс: свойство}"</strong></span> - свойство должно иметь тип данных <strong>Boolean</strong>. Если имя класса содержит неалфавитно-цифровые символы, то помещается в кавычки.<br />

      <span class="v"><strong># Привязка к стилям</strong></span><br />
      <span class="v3"><strong>:style="{'свойство_css': выражение}"</strong></span> - может быть подставлено - свойство, выражение или значение.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Upr">
  <p>
    <em>============================ Управление элементами DOM:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> С помощью параметра <span class="v3">refs<strong></strong></span> можно ссылаться на определенный HTML-элемент из шаблона и управлять им.<br />
      <code>
        <strong>
          // Разметка<br />
          div<br />
            &nbsp;h2(ref="header") Text<br />
            &nbsp;button(@click="changeText")<br /><br />

          // JS<br />
          methods: {<br />
            &nbsp;changeText() {<br />
              &nbsp;&nbsp;this.$refs.header.innerText = "Title";<br />
            &nbsp;}<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Usl">
  <p>
    <em>============================ Условный рендеринг:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В паре с этой директивой может использоваться директива <span class="v3"><strong>v-else</strong></span>, которая отображает другой элемент, если условие в первой директиве равно <strong>false</strong>. Также есть директива дополнительного условия - <span class="v3"><strong>v-else-if</strong></span>.<br />
      <span class="v3"><strong>v-if="свойство"</strong></span> - отображение / сокрытие элемента.<br />
      <br />

      <span class="v3"><strong>v-show="свойство"</strong></span> - отображает / скрывает элемент без изменения структуры DOM и манипулирует стилевым значением свойства <strong>display</strong>.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Cyc">
  <p>
    <em>============================ Цикловой рендеринг:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Используется директива <span class="v3"><strong>v-for</strong></span>:<br />
      <code>
        <strong>
          // Разметка<br />
          ul<br />
            &nbsp;li(v-for="key in items") {{ item }}<br /><br />

          // JS<br />
          data () {<br />
            &nbsp;return {<br />
              &nbsp;&nbsp;items: [1, 2, 3, 4, 5]<br />
            &nbsp;}<br />
          }<br />
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Для каждого элемента массива будет создан соответствующий HTML-элемент.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>{{ key, index in items }}</strong> - получение индекса элемента (к индексу должна быть прибавлена 1).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>{{ key.property }}</strong> - получение свойства (если объект).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Изменение массива / объекта будет вызывать повторный рендеринг.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Rou">
  <p>
    <em>============================ Роутинг:</em><br />
  </p>
</div>

  </div>
</div>

</body>
</html>
