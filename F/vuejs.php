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
<button class="button" id="SloB">Слоты</button>
<button class="button" id="MixB">Миксины</button>
<button class="button" id="PropB">Привязка данных</button>
<button class="button" id="FilB">Фильтры</button>
<button class="button" id="DirB">Директивы</button>
<button class="button" id="SobB">Обработка событий</button>
<button class="button" id="StyB">Работа со стилями</button>
<button class="button" id="UprB">Управление элементами</button>
<button class="button" id="UslB">Условный рендеринг</button>
<button class="button" id="CycB">Цикловой рендеринг</button>
<button class="button" id="LifB">Жизненный цикл</button>
<button class="button" id="RouB">vue-router</button>
<button class="button" id="ResB">vue-resource</button>

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

<div class="textblock" id="Slo">
  <p>
    <em>============================ Слоты:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для разного содержимого компонента (слотов может быть несколько).<br>
      <br>
      <code>
        <strong>
          // Дочерний компонент (разметка)<br>
          div<br>
          &nbsp;slot(name="subcomponent")<br><br>

          // Родительский компонент<br>
          div<br>
          &nbsp;дочерний_компонент<br>
          &nbsp;&nbsp;разметка(slot="subcomponent")
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mix">
  <p>
    <em>============================ Миксины:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Используются, чтобы не дублировать логику компонента.<br>
      <br>
      <code>
        <strong>
          1. Логика выносится в отдельный файл (.js)<br>
          <br>

          2. import имя from './.js';<br>
          <br>

          3. В логике компонента добавить:<br>
          mixins: [ имя_импорта ];
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Prop">
  <p>
    <em>============================ Привязка данных:</em><br />
      <span class="v"><strong># Декларативные подход</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Интерполяция (вставка данных / JS-выражений (+ вызов функций, тернарные выражения, использование методов) + можно указывать несколько блоков):<br />
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

          // JS (+ валидация)<br />
          props: {<br />
            &nbsp;num: {type: Number, required: true}<br />
          }<br />
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>{type: Number, required: true, default: 1}</strong> - валидация передаваемых данных. Возможные типы - String, Number, Boolean, Object, Array, Function. Второе свойство - обязательное наличие. Последнее - значение по умолчанию.<br />
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
          p {{ свойство | lowercase }}<br />
          <br />

          // Глобальный фильтр (index.js)<br />
          Vue.filter('имя', (value) => {<br />
            &nbsp;return value.метод();<br />
          });<br />
        </strong>
      </code><br />
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
      <strong>.lazy</strong> - обработка после потери фокуса.<br>
      <br />

      <span class="v"><strong># Сокращения</strong></span><br />
      <span class="v3"><strong>v-on:событие="метод" => @событие="метод"</strong></span> - сокращение обработчика события.<br />
      <span class="v3"><strong>v-bind:атрибут="свойство" => :атрибут="свойство"</strong></span> - сокращение директивы.<br />
      <br>

      <span class="v"><strong># Своя директива</strong></span><br />
      <code>
        <strong>
          // Color.js - файл директивы<br>
          export default {<br>
            &nbsp;bind(el, bindings, vnode) {<br>
              &nbsp;&nbsp;el.style.color = green;<br>
            &nbsp;}<br>
          }<br><br>

          // -------- Параметры в директиве<br>
          v-colored="'green'"<br>
          ...<br>
          el.style.color = bindings.value;<br><br>

          // -------- Несколько параметров<br>
          v-colored:color="'значение'"<br>
          ...<br>
          const arg = bindings.arg;<br>
          el.style[arg] = bindings.value;<br><br>

          // main.js - главный файл Vue-приложения<br>
          import ColorD from './directives/Color.js';<br>
          Vue.directive('имя_директивы', ColorD);<br><br>

          // Использование<br>
          h2(v-colored)
        </strong>
      </code><br>

      <span class="v"><strong># Жизненный цикл директивы</strong></span><br />
      <span class="v3"><strong>bind()</strong></span> - инициализация директивы.<br />
      <span class="v3"><strong>inserted()</strong></span> - директива в DOM-дереве.<br />
      <span class="v3"><strong>update()</strong></span> - изменение в DOM-дереве.<br />
      <span class="v3"><strong>componentUpdated()</strong></span> - обновление компонента.<br />
      <span class="v3"><strong>unbind()</strong></span> - удаление директивы.<br />
      <br>
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Размещение событий директивы в:<br>
      <code>
        <strong>
          directives: {}
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sob">
  <p>
    <em>============================ Обработка событий:</em><br />
      <span class="v3"><strong>v-on:событие="method_1"</strong></span> - можно также вставлять JS-выражения.<br />
      <span class="v3"><strong>@событие.prevent</strong></span> - отменяет стандартное поведение элемента.<br />
      <span class="v3"><strong>@событие.stop</strong></span> - останавливает распространение события.<br />
      <span class="v3"><strong>@keyup.enter</strong></span> - для событий клавиатуры можно писать клавишу.<br />
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
      </code><br>

      <span class="v"><strong># Шина событий</strong></span><br />
      <code>
        <strong>
          // Дочерний компонент (в функции события)<br />
          this.$emit('название_события', this.передаваемое_свойство);<br />
          <br />

          //Родительский компонент()
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

<div class="textblock" id="Lif">
  <p>
    <em>============================ Жизненный цикл:</em><br />
        <code>
          <strong>
              имя_цикла() {<br />
                &nbsp;console.log('...');<br />
              }<br />
          </strong>
        </code><br />

        <span class="v3"><strong>beforeCreate</strong></span> - до создания Vue-приложения.<br />
        <span class="v3"><strong>created</strong></span> - Vue-приложение создано.<br />
        <span class="v3"><strong>beforeMount</strong></span> - до рендера.<br />
        <span class="v3"><strong>mounted</strong></span> - компонент отрендерен и добавлен в DOM-дерево.<br />
        <span class="v3"><strong>beforeUpdate</strong></span> - до изменения данных.<br />
        <span class="v3"><strong>updated</strong></span> - данные изменены.<br />
        <span class="v3"><strong>beforeDestroy</strong></span> - до удаления компонента из DOM-дерева.<br />
        <span class="v3"><strong>destroyed</strong></span> - компонент удален.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Rou">
  <p>
    <em>============================ Роутинг:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Переход на страницы без перезагрузки.<br>
      <br>

      <code>
        <strong>
          1. Тело Роута:<br>
          export default new VueRouter({<br>
            &nbsp;routes: [<br>
            &nbsp;&nbsp;{ path: '', component: имя_компонента }  &nbsp;&nbsp;// path - за какой путь отвечает роут, а component - что отображать<br>
            &nbsp;],<br>
            &nbsp;mode: 'history'  &nbsp;&nbsp;// убирает # из адресной строки<br>
          });<br><br>

          2. Отображение одного компонента в другом:<br>
          router-view<br><br>

          3. Создание навигации:<br>
          router-link(to="путь" tag="a")  // "/" - ведет на главную, tag - на что будет заменен роут<br>
          <br>

          4. Динамический роут (роут одного элемента):<br>
          Разметка - :to=`/item/${id}`<br>
          Роут - path: '/item/:id'<br>
          // Извлечение параметра - this.$route.params['id']<br>
          <br>

          5. Программная навигация:<br>
          К событию - this.$router.push('/') - перейти к главной (или к любому другому указанному пути)<br>
          <br>

          6. Вложенный роут:<br>
          Роут - children: [<br>
            &nbsp;&nbsp;{ path: 'путь', component: имя_компонента }<br>
          ]<br>
          Разметка - router-link(tag="a" to="родительский_путь + путь")<br>
          router-view // Для отображения вложенного пути<br>
          <br>

          7. Передача параметров:<br>
          :to="{name: 'имя_пути', params: {id: id}, query: {name: 's', year: 2016}}"<br>
          // Извлечение (можно через computed) {{ $route.query.name }}<br>
          <br>

          8. Хэш и скролл:<br>
          К роуту - hash: '#id_элемента'<br>
          Далее (после mode: 'history') - scrollBehavior (to, from, saved) {<br>
            &nbsp;if (to.hash) {<br>
              &nbsp;&nbsp;return { selector: to.hash }<br>
            &nbsp;}<br>
            &nbsp;if (savedPosition) {<br>
              &nbsp;&nbsp;return savedPosition<br>
            &nbsp;}<br>
            &nbsp;return {<br>
              &nbsp;&nbsp;x: 0,<br>
              &nbsp;&nbsp;y: 0<br>
            &nbsp;}<br>
          }<br><br>

          9. Перенаправление:<br>
          redirect: 'путь'<br>
          <br>

          10. Страница 404:<br>
          {<br>
            &nbsp;path: '*',  // Для остальных незарегистрированных путей<br>
            &nbsp;component: errorPage<br>
          }<br>
          <br>

          11. Защита роутов:<br>
          К роуту - beforeEnter (to, from, next) {<br>
            &nbsp;if (условие) {<br>
              &nbsp;&nbsp;next(true)<br>
            &nbsp;} else {<br>
              &nbsp;&nbsp;next(false) // Переход не будет осуществлен<br>
            &nbsp;}<br>
          }<br>
          <br>

          12. Подтсверждение перехода (в компоненте):<br>
          beforeRouteEnter(to, from, next) {<br>
            &nbsp;...<br>
          }<br><br>

          beforeRouteLeave(to, from, next) {<br>
            &nbsp;if (условие) {<br>
              &nbsp;&nbsp;next(t/f)<br>
            &nbsp;}<br>
          }<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Res">
  <p>
    <em>============================ Работа с API:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> npm install vue-resource<br>
      <br>

      <code>
        <strong>
          1. Поключение:<br>
          import VueResource from 'vue-resource'<br>
          Vue.use(VueResource)<br>
          <br>

          2. Создание POST-запроса (отправка данных):<br>
          // К форме (функция)<br>
          const obj {<br>
            &nbsp;// Свойства для отправки<br>
          }<br><br>

          this.$http.post('url', obj)<br>
            &nbsp;.then(res => {<br>
              &nbsp;&nbsp;return res.json()<br>
            &nbsp;})<br>
            &nbsp;.then(res => {<br>
              &nbsp;&nbsp;console.log(res)<br>
            &nbsp;})<br>
            <br>

            3. Создание GET-запроса (получение данных):<br>
            this.$http.get('url')<br>
              &nbsp;.then(res => {<br>
                &nbsp;&nbsp;return res.json()<br>
              &nbsp;})<br>
              &nbsp;.then(body => {<br>
                &nbsp;&nbsp;запись в property<br>
              &nbsp;})<br>
              <br>

        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
