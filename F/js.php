<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>JS</title>

<link rel="shortcut icon" href="../Images/I/js.png" type="image/x-icon">

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
        <a class="navbar-brand">JS</a>
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
    <h3 class="panel-title">Язык сценариев</h3>
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
          <a href="https://ru.wikipedia.org/wiki/JavaScript">* JS</a><br />
          <a href="https://babeljs.io/">* BabelJS</a><br />
          <br />

          <span class="v"><strong># Элементы</strong></span><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%BE%D0%B4%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BE%D0%BA%D0%BD%D0%BE">* Модальное окно</a><br />
          <a href="https://ru.wikipedia.org/wiki/Cookie">* Cookies</a><br />
          <a href="https://ru.wikipedia.org/wiki/Document_Object_Model">* DOM</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://www.javascript.com/">* JS Docs</a><br />
          <a href="https://developer.chrome.com/devtools">* Chrome DevTools Docs</a><br />
          <a href="https://en.wikipedia.org/wiki/JSDoc">* JSDoc</a><br />
          <a href="https://github.com/jsdoc3/jsdoc" title="Генерация документации по JSDOC-комментариям">* JSDoc 3</a><br />
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
              - JS может выполняться где угодно, где есть интерпретатор. Современные интерпретаторы перед выполнением преобразуют JS
              в машинный код, оптимизируют, а затем выполняют.<br />
              <br />

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
              - JS не позволяет в явном виде задать тип данных.<br />
              - Непредсказуемая работа с числами из-за способа внутреннего представления чисел. Слабо типизированный язык - неожиданный результат с операциями между данными разных типов.<br />
              - Нет возможности защитить код.<br />
              - Нет пространства имен и классов.<br />
              - Нет файловой системы.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Расширение файлов - <strong>.js</strong><br />
              - Спецификация <a href="https://ru.wikipedia.org/wiki/ECMAScript">ECMAScript</a>.<br />
              - JS не предостовляет низкоуровневых средств работы с памятью, процессором - так как ориентирован на браузеры. Нет ограничений на
              сервере. В браузере большинство возможностей ограничено текущим окном и страницей. Не имеет прямого доступа к ОС. Также не может
              взаимодействовать с другими вкладками и окнами, если только сам не открыл окно или несколько вкладок из одного источника (есть
              способ обхода).<br />
              - Игнорирует пробелы и табуляцию.<br />
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
  <i class="fa fa-cutlery" aria-hidden="true"></i> Рецепты
</button>

<!-- Modal -->

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></span></button>
        <h4 class="modal-title" id="myModalLabel">Рецепты</h4>
      </div>
        <div class="modal-body">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Вывод четных чисел
      </a>
    </h4>
  </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <code>
          <strong>
            if (i % 2 == 0) {<br />
              &nbsp;...<br />
            }<br />
          </strong>
        </code>
    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingTwo">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Диапазон значений
      </a>
    </h4>
  </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <code>
          <strong>
            (Math.random() * число) + число;
          </strong>
        </code>
    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingThree">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Использование элементов HTML5 старыми IE
      </a>
    </h4>
  </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <code>
          <strong>
            &lt;!--[if lt IE 9]&gt;<br />
            &lt;script&gt;<br />
              var e = ("abbr,article,aside,audio,canvas,datalist,details," +<br />
              "figure,footer,header,hgroup,mark,menu,meter,nav,output," +<br />
              "progress,section,time,video").split(',');<br /><br />

              for (var i = 0; i < e.length; i++) {<br />
                &nbsp;document.createElement(e[i]);<br />
              }<br />
            &lt;/script&gt;<br />
            &lt;![endif]--&gt;
          </strong>
        </code>
      </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingFive">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Ограниченный ввод символов
      </a>
    </h4>
  </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <code>
          <strong>
            function(e) {<br />
              &nbsp;if(String.fromCharCode(e.charCode) != '1' & String.fromCharCode(e.charCode) != '0') {<br />
                &nbsp;&nbsp;e.preventDefault()<br />
              &nbsp;}<br />
            }<br /><br />

            // Для события "keypress". Позволяет вводить лишь 1 и 0.
          </strong>
        </code>
      </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="heading6">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
        Случайный результат из массива
      </a>
    </h4>
  </div>
    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">
        <code>
          <strong>
            var arr = ["text", "text2", "text3"];<br />
            var rand = Math.floor(Math.random() * arr.length);<br />
            console.log(arr[rand]);
          </strong>
        </code>
      </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="heading7">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
        Случайное число
      </a>
    </h4>
  </div>
    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
      <div class="panel-body">
        <code>
          <strong>
            Math.ceil(Math.random() * 1000)
          </strong>
        </code>
      </div>
  </div>
</div>

</div>
  <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
  </div>
      </div>
    </div>
  </div>
</div>

<hr />

<!-- Buttons -->
<button class="button5" id="ESB">ES6</button>
<button class="button5" id="ES7B">ES7</button>
<button class="button5" id="ES8B">ES8</button>
<button class="button5" id="ES9B">ES9</button>
<button class="button5" id="BabB">Babel</button>

<!-- The Article -->

<div class="textblock" id="ES">
  <p>
    <em>============================ ECMAScript6:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для корректной работы необходим babel. ES6 не работает в IE10 и ниже<br />
      <br />

      <span class="v"><strong># Переменные</strong></span><br />
      <span class="v3"><strong>let имя = значение;</strong></span> - позволяет избежать повторного определения переменной, так как с <strong>var</strong>
      можно определять 2 и более раз.<br />
    </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Область видимости - блок кода.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Нельзя использовать до обьявления.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Для каждой итерации цикла - своя переменная.<br>
</div>

    <p>
      <span class="v"><strong># Константы</strong></span><br />
      <span class="v3"><strong>const имя = значение;</strong></span> - значение постоянное и его нельзя изменить.<br />
    </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Нельзя использовать до обьявления.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если присвоить константе обьект / массив, то его значения свойств / элементов менять можно.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Обязательно должна быть инициализирована.<br>
</div>

      <span class="v"><strong># Шаблон строки</strong></span><br />
      <code>
          <strong>
            function print(arg) {<br />
              &nbsp;console.log(`Text ${arg}`);<br />
            }<br />
          </strong>
      </code>
    </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>${}</strong> - может принимать выражения или строковые методы.<br>
</div>

    <p>
      <span class="v"><strong># Spread-оператор (разворачивание)</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Помещает элементы одного массива в другой. Можно также размернуть массив в функции (как аргументы).<br>
      <code>
        <strong>
          let arr1 = [1, 2, 3, 4];<br />
          let arr2 = [5, 6, 7, 8];<br />
          let arrRes = [12, 14, ... arr1, 75, ... arr2];<br />
          <br>

          // Преобразование строки в массив:<br>
          let str = 'text';<br>
          let arr = [...str];<br>
        </strong>
      </code><br />

      <span class="v"><strong># Импорт / Экспорт файлов</strong></span><br />
      <code>
        <strong>
          import s from '../.js';<br /><br />

          // ----------------------<br /><br />

          export default s;<br />
          <br>

          1. export default может быть только один.<br>
          2. import { s as имя } - переименование.<br>
          3. import { * as имя } - превращает в объект.<br>
        </strong>
      </code><br />

      <span class="v"><strong># Цикл for...of</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Упрощенный доступ к элементу массива:<br>
      <code>
        <strong>
          let arr = [1, 2, 3, 4, 5, 6, 7, 8];<br /><br />

          for (let element of arr) {<br />
            &nbsp;console.log(elemement)<br />
          }<br />
        </strong>
      </code><br />

      <span class="v"><strong># Цикл forEach</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Упрощенный доступ к элементу массива:<br>
      <code>
        <strong>
          let arr = [1, 2, 3, 4, 5, 6, 7, 8];<br />
          let sum = 0;<br /><br />

          arr.forEach((num) => sum += num);<br />
        </strong>
      </code><br />

      <span class="v"><strong># Параметры по умолчанию</strong></span><br />
      <code>
        <strong>
          function add(x = 5, y = 6) {<br />
            &nbsp;console.log(x + y);<br />
          }<br /><br />

          add(); //11<br />
          add(8, 6); //14<br />
        </strong>
      </code><br />

      <span class="v"><strong># Неизвестное число параметров</strong></span><br />
      <code>
        <strong>
          function add(... values) {<br />
            &nbsp;let sum = 0;<br />
            &nbsp;values.forEach((value) => {<br />
              &nbsp;&nbsp;return sum += value;<br />
              &nbsp;});<br />
          }<br /><br />

          add(18, 16, 8, 4);<br />
        </strong>
      </code><br />

      <span class="v"><strong># Arrow functions</strong></span><br />
      <code>
        <strong>
          let f = (параметры) => действия;<br />
          <br>

          // ------------------------------------------------ Самовызывающаяся AF<br>
          (() => ...)();<br />
          <br>

          // ------------------------------------------------ Контекст<br>
          <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Предотвращение ссылания на объект window:<br>
          let person = {<br />
            &nbsp;n: 'name',<br />
            &nbsp;greet() {<br />
              &nbsp;&nbsp;setTimeout(() => {<br />
                &nbsp;&nbsp;&nbsp;console.log(this.n);<br />
              &nbsp;&nbsp;}, 2000);<br />
              &nbsp;}<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Если 1 аргумент - скобки можно опустить.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если нет аргументов - пустые скобки.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если набор выражений, то обязательно использовать фигурные скобки.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Объект возвращается в виде <strong>({...})</strong>.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Нет свойства <strong>.prototype</strong><br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Нельзя использовать как конструктор.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Нельзя использовать методы <strong>.bind()</strong>, <strong>.call()</strong>, <strong>.apply()</strong><br>
</div>

  <p>
    <span class="v"><strong># Объекты</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если у переменной, которая присваивается свойству одинаковое имя, то можно написать только свойство (без значения).<br>
    <code>
      <strong>
        let obj = {<br />
          &nbsp;n: 'text',<br />
          &nbsp;method() {<br />
            &nbsp;&nbsp;console.log(this.n);<br />
            &nbsp;}<br />
        }<br />
      </strong>
    </code>
    <br>

    <span class="v"><strong># Деструктуризация</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Извлечение из объекта / массива отдельных значений в переменные.<br />
    <br />
    <code>
      <strong>
        // ------------------------------------------------ Object<br />
        <br />
        let user = {<br />
          &nbsp;name: 'Tom',<br />
          &nbsp;age: 47<br />
        };<br /><br />

        let {name, age} = user;<br />
        console.log(name); //Tom<br />
        <br /><br>

        let {name, age, company="Google"} = user;  // Если свойства нет то значение по умолчанию<br />        console.log(company); //Google<br />
        <br />

        // Использование других имен для переменных<br />
        let {name: Usname, age: Ageman} = user;<br>
        <br>

        // ------------------------------------------------ Поиск элемента в Object<br>
        <br>
        const obj = {<br>
          &nbsp;rap: 'Lamar',<br>
          &nbsp;country: 'Bryan',<br>
          &nbsp;hipHop: 'Lamar'<br>
        }<br><br>

        const res = Object.entries(obj).filter(([, value]) => value === 'Lamar');  //Оставит только те элементы у которых значение "Lamar"      </strong>
    </code><br /><br />

    <code>
      <strong>
        // ------------------------------------------------ Вложенный Object<br />
        let obj = {<br />
          &nbsp;n: 'name',<br />
          &nbsp;sub: {<br />
            &nbsp;&nbsp;s: 'text'<br />
          &nbsp;}<br />
        }<br /><br />

        let { sub: { s } } = obj;<br />
      </strong>
    </code><br />

    <code>
      <strong>
        // ------------------------------------------------ Array<br />
        <br />
        let arr = [1, 2, 3];<br />
        let [a, b, c] = arr;<br />
        <br />

        // ------------------------------------------------ Array in Array<br />
        <br>
        let arr = [[1, 2], [3, 4]];<br>
        let [[x, y], [a, b]] = arr;<br>
        <br>

        // ------------------------------------------------ Array + Object (+ использование "пропустить")<br />
        <br />

        let arr = [<br />
          &nbsp;{name: 'Tom', age: 47},<br />
          &nbsp;{name: 'Kendrick', age: 31}<br />
        ];<br /><br />

        let [, {name}] = arr;<br />
        console.log(name); //Kendrick
      </strong>
    </code><br />
    <br />

    <code>
      <strong>
        // ------------------------------------------------ Декомпозиция параметров<br />
        <br />

        function disp({n: usn, age: usa}) {<br />
          &nbsp;console.log(usn, usa);<br />
        }<br /><br />

        function Sum([a, b, c]) {<br />
          &nbsp;var r = a + b + c;<br />
          &nbsp;console.log(r);<br />
        }<br /><br />

        let user = {n: 'Tom', age: 47};<br />
        let arr = [3, 8, 14, 101];<br /><br />

        disp(user);<br />
        Sum(arr);
      </strong>
    </code><br /><br />

    <span class="v"><strong># Классы</strong></span><br />
    <code>
      <strong>
        class m {<br />
          &nbsp;constructor(n, a) {<br />
            &nbsp;&nbsp;this.n = n;<br />
            &nbsp;&nbsp;this.a = a;<br />
          &nbsp;}<br /><br />

          &nbsp;d() {<br />
            &nbsp;&nbsp;console.log(this.n, this.a);<br />
          &nbsp;}<br />
        }<br /><br />

        let tom = new m('Tom', 47);<br /><br />

        // ------------------------------------------------ Наследование
        <br />
          class P {<br />
            &nbsp;constructor(n, a) {<br />
              &nbsp;&nbsp;this.n = n;<br />
              &nbsp;&nbsp;this.a = a;<br />
            &nbsp;}<br /><br />

            &nbsp;disp() {<br />
              &nbsp;&nbsp;console.log(this.n, this.a);<br />
            &nbsp;}<br />
          }<br /><br />

          class Emp extends P {<br />
            &nbsp;constructor(n, a, c) {<br />
              &nbsp;&nbsp;super(n, a) {<br />
                &nbsp;&nbsp;&nbsp;this.c = c;<br />
              &nbsp;&nbsp;}<br /><br />

              &nbsp;&nbsp;disp() {<br />
                &nbsp;&nbsp;&nbsp;super.disp();<br />
                &nbsp;&nbsp;&nbsp;console.log("Emp", this.c) {<br />
                &nbsp;&nbsp;&nbsp;}<br />
              &nbsp;&nbsp;}<br />
            &nbsp;}<br />
          }<br /><br />

          let Bing = new Emp("Ding", 36, "6");<br />
          Bing.disp();<br>
          <br>

          // ------------------------------------------------ Геттер<br>
          get _имя() {<br>
            &nbsp;return this.property === условие (тернарный оператор);<br>
          }<br><br>

          // ------------------------------------------------ Сеттер<br>
          set _имя(value) {<br>
            &nbsp;if (value!== undefined && typeof value == 'тип') {<br>
              &nbsp;&nbsp;this.property = value;<br>
              &nbsp;} else {<br>
                &nbsp;&nbsp;console.log('error');<br>
              &nbsp;}<br>
          }
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>экземпляр instanceof класс</strong> - проверка на принадлежность к классу.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если у подкласса нет конструктора - он воспользуется родительским.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если у подкласса есть род. конструктор, то свойства должны передаваться как аргумент, иначе будет <strong>undefined</strong>.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>super.метод()</strong> - вызов родительского метода.<br>
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Нельзя создавать properties вне конструктора.<br>
</div>

  <p>
    <span class="v"><strong># Символы</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Уникальное и неизменное значение. Каждый символ уникален и создать 2 одинаковых символа не получится.<br>
      <br>

      <code>
        <strong>
          let symbol = Symbol('n');<br>
          <br>

          // Использование<br>
          let user = {<br>
            &nbsp;userName: 'John',<br>
            &nbsp;[Symbol.for('codeName')]: '123',<br>
            &nbsp;[Symbol.for('method_1')]: () { ... },<br>
            &nbsp;codeName: '321'<br>
          }<br><br>

          let codeName = user[Symbol.for('codeName')]; // Доступ<br><br>

          Object.getOwnPropertySymbols(obj) - просмотр всех символов объекта.
        </strong>
      </code><br>
      <br>

      <span class="v"><strong># Итераторы / Генераторы</strong></span><br />
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="ES7">
  <p>
    <em>============================ ECMAScrip7:</em><br />
      <span class="v"><strong># Операторы</strong></span><br />
      <span class="v3"><strong>**</strong></span> - возведение в степень.<br />
      <br>
      <span class="v"><strong># Массивы</strong></span><br />
      <span class="v3"><strong>массив.includes(значение)</strong></span> - выясняет, имеется ли в массиве некий элемент.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="ES8">
  <p>
    <em>============================ ECMAScrip8:</em><br />
      <span class="v"><strong># Строки</strong></span><br />
      <span class="v3"><strong>.padStart()</strong></span> - заполняет текущую строку другой строкой, до тех пор, пока итоговая строка не достигнет нужной длины. Заполнение происходит в начале.<br />
      <span class="v3"><strong>.padEnd()</strong></span> - тоже самое, но заполнение происходит в конце.<br />
      <br>

      <code>
        <strong>
          let str = 'str';<br>
          const res = str.padStart(10, '*');<br>
          console.log(res); // *******str<br>
        </strong>
      </code><br>

      <span class="v"><strong># Ретроспективная проверка строк</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Позволяет искать в строке некие конструкции, перед которыми есть какие-то другие конструкции:<br>
      <br>

      <code>
        <strong>
          const regExp = /Roger(?=Waters)/<br>
          const str1 = 'Roger is my dog';<br>
          const str2 = 'Roger is my dog and Roger Waters...';<br>
          cosnt res = regExp.test(str1);<br>
          const res2 = regExp.text(str2);<br>
          console.log(res + '/' + res2); // false / true<br>
          <br>

          // Операторы:<br>
          ?! - совпадение будет найдено только в том случае, если за заданной строкой не идет другая строка.<br>
        </strong>
      </code><br>

      <span class="v"><strong># Объекты</strong></span><br />
      <span class="v3"><strong>Object.values(объект)</strong></span> - возвращает все значения свойств объекта в виде массива.<br />
      <span class="v3"><strong>Object.entries(объект)</strong></span> - возвращает все значения свойств объекта в виде массива с ключами.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="ES9">
  <p>
    <em>============================ ES9:</em><br />
      <span class="v"><strong># Класс</strong></span><br />
      <code>
        <strong>
          // ------------------------------------------------ Свойства + методы (AF):<br>
          <br>

          class Имя {<br>
            &nbsp;property = значение;<br><br>

            &nbsp;метод = () => {<br>
              &nbsp;&nbsp;this.property = новое_значение;<br>
            &nbsp;}<br>
          }<br><br>

          // ------------------------------------------------ Статическое свойство:<br>
          static property = value;<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Bab">
  <p>
    <em>============================ Babel:</em><br />
  </p>
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

<button class="button" id="PodB">Подключение</button>
<button class="button" id="CommB">Комментарии</button>
<button class="button" id="PerB">Переменные</button>
<button class="button" id="ConB">Константы</button>
<button class="button" id="TypB">Типы данных</button>
<button class="button" id="StrB">Строки</button>
<button class="button" id="PreB">Преобразования типов</button>
<button class="button" id="OpeB">Операторы</button>
<button class="button" id="LogB">Логические операторы</button>
<button class="button" id="ModB">Модальные окна</button>
<button class="button" id="UslB">Условие</button>
<button class="button" id="SwiB">Switch</button>
<button class="button" id="CycB">Циклы</button>
<button class="button" id="FunB">Функции</button>
<button class="button" id="Met1B">Методы / Свойства</button>
<button class="button" id="MasB">Массивы</button>
<button class="button" id="RegB">Регулярные выражения</button>
<button class="button" id="CooB">Cookies</button>
<button class="button" id="SessB">sessionStorage</button>
<button class="button" id="LocalSB">localStorage</button>
<button class="button" id="MediaB">Media</button>

<!-- The Article -->

<div class="textblock" id="Pod">
  <p>
    <em>============================ Подключение / загрузка скрипта (в HTML):</em><br />
  </p>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> В теге <span class="v2"><strong>&lt;script scr="..."&gt;&lt;/script&gt;</strong></span> нельзя одновременно подключить внешний скрипт и указать код.
</div>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Если скрипт внешний, то пока браузер не выполнит его, он не покажет часть страницы под ним. В этом случае есть 2 атрибута:<br />
  <i class="fa fa-thumb-tack" aria-hidden="true"></i> <span class="v4"><strong>async</strong></span> - браузер не останавливает обработку страницы, а спокойно работает дальше. Когда скрипт будет загружен - он
  выполнится. В коде сработает тот скрипт, который раньше загрузился. Не поддерживается в IE9.<br />
  <i class="fa fa-thumb-tack" aria-hidden="true"></i> <span class="v4"><strong>defer</strong></span> - асинхронная загрузка скриптов, но скрипты будут запускаться по порядку. Даже если какие-то скрипты загрузились
  раньше - будут ждать своей очереди. Это полезно если есть зависящие от других скриптов. Скрипты сработают, когда весь HTML-документ
  будет загружен.
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Существует также искусственная задержка загрузки.
</div>

  <p>
    <span class="v3"><strong>"use strict";</strong></span> - перевод кода в режим полного соответствия современному
    стандарту. Ставится в начале скрипта. IE9 не поддерживает - для этого нужна библиотека <strong>ES5shim</strong>.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v3"><strong>//</strong></span> - однострочный комментарий.<br />
      <span class="v3"><strong>/*...*/</strong></span> - многострочный комментарий.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
   <em>============================ Переменные:</em><br />
    <span class="v3"><strong>var r = 10;</strong></span> - объявление и присваивание значения переменной.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Если переменных несколько, то разделяются запятой.
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Правила</strong>:<br />
  - Имя переменной может состоять из букв, цифр, символов "$" и "_".<br />
  - Первый символ не должен быть цифрой.<br />
  - Регистр имеет значение.<br />
  - Кирилица допустима, но не рекомендуется.<br />
  - Зарезервированные имена нельзя использовать как переменные.<br />
  - Никакого транслита! Только английский.<br />
  - Исп. коротких имен для локальных переменных.<br />
  - Переменные из нескольких слов пишутся слитно.<br />
  - Имя переменной должно четко соответствовать хранимой в ней информации.<br />
  - Переменные всегда должны быть инициализированны. Неинициализированная переменная имеет статус <strong>undefined</strong>.<br />
  - Локальные переменные - для временных данных, глобальные переменные - для данных, необходимых во время всего сценария.<br />
  - Локальная переменная создается внутри фрагмента кода и недоступна извне (контроль доступа). Глобальная переменная доступна везде.
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> В старом стандарте JS можно объявлять переменные без <span class="v3"><strong>var</strong></span>. Однако с
  <span class="v3"><strong>"use strict";</strong></span> так делать нельзя. В IE8 без <span class="v3"><strong>var</strong></span>
  не будет выполняться код, также сработает ошибка, если имя переменной совпадет с <span class="v4"><strong>id</strong></span>.
</div>

  <p>
    <span class="v"><strong># Кавычки</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Одинарные и двойные кавычки - равноправны.
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> \ - экранирование кавычек.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> \\ - экранирование слеша.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Con">
  <p>
   <em>============================ Константы:</em><br />
    <span class="v3"><strong>HUMBLE = 70.00;</strong></span> - старый способ. Можно переопределить. Значение передается другой переменной.<br />
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Переменная, которая никогда не меняется (переопределение не сработает). Объявляют большими буквами через подчеркивание (2 и более слов).
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Typ">
  <p>
   <em>============================ Типы данных:</em><br />
     <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> JS динамически типизированный язык, т.е. определяет тип данных "на ходу".<br />
     <span class="v"><strong># Элементарные типы</strong></span><br />
     <strong>number</strong> - число.<br />
     <strong>string</strong> - строка.<br />
     <strong>boolean</strong> - логический.<br />
     <br />

     <span class="v"><strong># Тривиальные типы</strong></span><br />
     <strong>null</strong> - отсутствие значения. ESC / Cancel = null.<br />
     <strong>undefined</strong> - неопределенное значение.<br />
     <strong>NaN</strong> - не число. Появляется при выполнении математических операций с разными типами данных.<br />
     <br />

     <span class="v"><strong># Составные типы</strong></span><br />
     <strong>array</strong> - массив.<br />
     <strong>object</strong> - объект.<br />
     <br />

     <span class="v"><strong># Специальный тип</strong></span><br />
     <strong>function</strong> - функция.<br />
     <br />

     <span class="v3"><strong>typeof (переменная)</strong></span> - возвращает тип данных аргумента в виде строки.<br />
     <span class="v3"><strong>isNaN(переменная)</strong></span> - проверка на нечисловое значение.<br />
     <span class="v3"><strong>isFinite()</strong></span> - преобразует аргумент к числу и вернет <strong>true</strong>, если это не NaN / Infinity / -Infinity.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Числа можно записывать как в 10-й системе счисления, так и в 16-ой системе. Также можно
  записывать в научном стиле - 3e5 (что эквивалентно 300000) или 3e-5 (0.00003).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Математические операции в JS безопасны и не могут привести к ошибке - только NaN.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Пробел посередине числа - NaN.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Метрика CSS - NaN. Нужно использовать преобразование.<br />
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Сложение десятичных дробей может дать близкий, но не совсем точный результат. Решение - преобразовывать в целое, а затем конвертировать обратно.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Str">
  <p>
    <em>============================ Строки:</em><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Отрицательное значение - с конца.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Внутренний формат строк - Unicode.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Содержимое строки в JS менять нельзя. Можно создать новое значение и присвоить
  в переменную вместо старого значения.<br />
</div>

  <p>
    <span class="v"><strong># Методы</strong></span><br />
    <span class="v3"><strong>.split()</strong></span> - разбивает строку на подстроки по указанному символу и возвращает массив подстрок.<br />
    <span class="v3"><strong>.charAt()</strong></span> - возвращает символ по указанной позиции.<br />
    <span class="v3"><strong>.indexOf()</strong></span> - возвращает индекс первого встречающегося в строке указанного символа.<br />
    <span class="v3"><strong>.lastIndexOf()</strong></span> - возвращает индекс последнего встречающегося указанного символа. Для поиска всех вхождений - использовать цикл.<br />
    <span class="v3"><strong>.substring()</strong></span> - вырезание подстроки между двумя указанными индексами (не включаяя их).<br />
    <span class="v3"><strong>.substr()</strong></span> - возвращает подстроку, начиная с указанного индекса до указанной длины.<br />
    <span class="v3"><strong>String.fromCharCode(код)</strong></span> - возвращает символ по коду.<br />
    <span class="v3"><strong>.charCodeAt(i)</strong></span> - возвращает код символа.<br />
    <span class="v3"><strong>.trim()</strong></span> - удаление начальных и конечных пробелов в строке.<br />
    <span class="v3"><strong>.concat()</strong></span> - объединение строк.<br />
    <span class="v3"><strong>.replace()</strong></span> - замена одной подстроки на другую (2 аргумента - что и на что).<br />
    <span class="v3"><strong>.repeat()</strong></span> - повторяет строку столько раз, сколько нужно (исп. к самой строке и принимает число).<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pre">
  <p>
    <em>============================ Преобразование типов:</em><br />
      <span class="v3"><strong>parseInt(переменная);</strong></span> - преобразование в число. Также округляет и отбрасывает дробную часть. Второй аргумент - какая система счисления.<br />
      <span class="v3"><strong>parseFloat(переменная);</strong></span> - преобразование в число с плавающей точкой.<br />
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> При попытке извлечь числа из строки типа "dsf7sd8f8sdfs8d" будет результат <strong>NaN</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Тоже самое будет при попытке преобразовать в число <strong>undefined</strong>.
</div>

  <p>
    <span class="v3"><strong>String(переменная);</strong></span> - преобразование в строку.<br />
    <span class="v3"><strong>n = +prompt("Введите число", "");</strong></span> - преобразование в число.<br /><br />

    <span class="v3"><strong>+g</strong></span> - Если переменная является строкой, то унарный плюс преобразует ее в число.
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Особенности:</strong><br />
  - При сравнении значений разных типов используется числовое преобразование и применяется к обоим значениям.<br />
  - Численное преобразование происходит в математических функциях, выражениях, а также при сравнении перед выражением.<br />
  - Сравнение разных типов - численное преобразование. В строках пробельные символы обрезаются.<br />
  - <strong>null</strong> больше, либо равен нулю, а <strong>undefined</strong> вообще несравнимо.
</div>

  <p>
    <span class="v3"><strong>!!n</strong></span> - преобразование к логическому типу.<br />
    <span class="v3"><strong>Boolean()</strong></span> - тоже*.
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Особенности:</strong><br />
  - 0, пустая строка, <strong>null</strong>, <strong>NaN</strong>, <strong>undefined</strong> - <strong>false</strong>.<br />
  - Все остальное (строка с пробелом тоже) - <strong>true</strong>.<br />
  - Объекты всегда <strong>true</strong>.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Ope">
  <p>
    <em>============================ Операторы:</em><br />
      <span class="v3"><strong>-</strong></span> - минус, также меняет знак числа на противоположный.<br />
      <span class="v3"><strong>+</strong></span> - плюс, также объединяет строки. Если хотя бы один аргумент является строкой, то второй будет
      также преобразован в строку.<br />
      <span class="v3"><strong>*</strong></span> - умножение.<br />
      <span class="v3"><strong>/</strong></span> - деление.<br />
      <span class="v3"><strong>%</strong></span> - остаток от деления.<br />
      <span class="v3"><strong>++</strong></span> - инкремент, увеличивает на 1.<br />
      <span class="v3"><strong>--</strong></span> - декремент, уменьшает на 1.<br />
      <span class="v3"><strong>,</strong></span> - позволяет перечислять выражения, разделяя их. Каждое из них вычисляется и отбрасывается
      , за исключением последнего, которое возвращается. Приоритет - ниже, чем у присваивания. Используется в более сложных конструкциях, чтобы
      сделать несколько действий в одной строке.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Унарное приоритетнее, чем бинарное. Если приоритет у оператора одинаковый, то порядок выполнения слева направо. Скобки задают
  порядок выполнения. Если приоритет правых операторов выше, чем у левых, то порядок выполнения - справа налево.
</div>

  <p>
    <span class="v"><strong># Инкремент и декремент</strong></span><br />
    # Можно применять только к переменным. Есть постфиксная форма записи (<span class="v3"><strong>i++</strong></span>) и префиксная
    форма записи (<span class="v3"><strong>++i</strong></span>). Результат отдин и тот же, но:<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Постфиксная форма отличается от префиксной тем, что возвращает старое значение, бывшее до увеличения, то есть не получится использовать
    полученный результат другой переменной, так как она будет иметь начальное значение. А префиксная форма вернет новое значение в заданную
    переменную.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если результат оператора не используется, а нужно только увеличить / уменьшить переменную, без разницы какую форму использовать.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если нужно использовать результат - префиксная форма.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если нужно старое значение, то постфиксная форма.<br />
    Инкремент / декремент можно использовать в любых выражениях, однако имеет более высокий приоритет, чем арифметические операции.<br /><br />

    <span class="v"><strong># Совмещенный оператор</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Запись типа <span class="v3"><strong>n += 5</strong></span> => аналогична <strong>n = n + 5</strong>. Используется для краткости кода.
    Сначала выполнится арифметическое действие, а затем присваивание. Имеет тот же приоритет, что и присваивание. Подходит для
    <strong>+</strong>, <strong>-</strong>, <strong>*</strong>, <strong>/</strong>, <strong>%</strong>, <strong><<</strong>, <strong>>></strong>, <strong>>>></strong>, <strong>&</strong>, <strong>|</strong>, <strong>^</strong>.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Log">
  <p>
    <em>============================ Логические операторы:</em><br />
      <span class="v3"><strong>></strong></span> - больше.<br />
      <span class="v3"><strong><</strong></span> - меньше.<br />
      <span class="v3"><strong>>=</strong></span> - больше или равно.<br />
      <span class="v3"><strong><=</strong></span> - меньше или равно.<br />
      <span class="v3"><strong>==</strong></span> - равно.<br />
      <span class="v3"><strong>!=</strong></span> - не равно.<br />
      <span class="v3"><strong>&&</strong></span> - логическое и.<br />
      <span class="v3"><strong>||</strong></span> - логическое или.<br />
      <span class="v3"><strong>!</strong></span> - логическое не.<br />
      <span class="v3"><strong>===</strong></span> - строгое равенство. Используется при одинаковом типе данных.<br />
      <span class="v3"><strong>!===</strong></span> - строгое неравенство. Используется при одинаковом типе данных.<br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Если одно значение число, а второе строка, то логический оператор преобразует
  строку в число и сравнит их.
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>Нюансы:</strong><br />
  - Оператор <span class="v3"><strong>==</strong></span> не может отличить <strong>0</strong> от <strong>false</strong>, как
  и пустую строку. Если же нужно все-таки их отличить, то для проверки равенства без преобразования типов исп. операторы строгово
  равенства <span class="v3"><strong>===</strong></span> и <span class="v3"><strong>!==</strong></span> (строгое не равно).
  Если тип разный, то они всегда возвращают <strong>false</strong>.<br />
  - Значения <strong>null</strong> и <strong>undefined</strong> равны друг другу и не равны чему бы то еще. При преобразовании в
  число <strong>null</strong> становится нулем, а <strong>undefined</strong> становится - <strong>NaN</strong>.<br />
  - Если значение не логического типа, то оно к нему приводится в целях вычислений. 0 - <strong>false</strong>, остальное - <strong>true</strong>.<br />
  - Оператор <span class="v3"><strong>||</strong></span> исп., чтобы проверить, выполняется ли хотя бы одно из условий.
  Если первый аргумент <strong>true</strong>, то результат заведомо будет <strong>true</strong> (остальные значения проигнорируются).
  Вычисляет столько значений, сколько необходимы для первого <strong>true</strong>. Возвращает то значение, на котором остановилось вычисление.
  Если все ложное, то вернет последнее значение.<br />
  - Оператор <span class="v3"><strong>&&</strong></span> - возвращает <strong>true</strong>, если оба аргумента истинны, иначе - <strong>false</strong>.
  Если левый аргумент <strong>false</strong>, вернет его и закончит вычисления, иначе вычисляет и возвращает первый аргумент. Вычисляет
  столько значений, сколько необходимо для первого <strong>false</strong>. Если все истинно, то возвращает последнее значение. Приоритет
  выше, чем у <span class="v3"><strong>||</strong></span>.<br />
  - Оператор <span class="v3"><strong>!</strong></span> получает один аргумент. <span class="v3"><strong>var d = !c</strong></span> -
  сначала приводится аргумент к логическому типу, а затем возвращает противоположное значение.
</div>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Логические значения <strong>true</strong> и <strong>false</strong> можно присваивать переменным и работать с ними.
</div>

  <p>
    <span class="v"><strong># Сравнение строк</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Строки сравниваются побуквенно, а код строчной буквы больше, чем у прописной. JS использует кодировку <strong>Unicode</strong> -
    сравниваются численные коды символов. Для корректного сравнения символы должны быть в одинаковом регистре. Если строка состоит из
    нескольких букв, то сравнение осуществляется как в словаре - сравниваются поочередно буквы, пока одна не будет больше другой. Если
    первая буква больше, значит первая строка больше, независимо от остальных символов. Если буквы одинаковы - сравнение идет дальше.
    При этом любая буква больше, чем отсутствие буквы. Лексикографическое сравнение.<br /><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Любая строка, кроме пустой в логическом контексте является <strong>true</strong>.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Строчные буквы идут после заглавных, поэтому больше.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Числа в виде строк сравниваются как строки.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mod">
  <p>
    <em>============================ Модальные окна:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Тип <span class="v3"><strong>alert("");</strong></span> - вывод сообщения.
      <br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Тип <span class="v3"><strong>var n = prompt("", "")</strong></span> - ввод данных пользователем. Принимает 2 аргумента.
      1 аргумент - заголовок, 2-й - заполение поля по умолчанию. + Кнопки <strong>OK / Cancel</strong>. Второй аргумент должен быть указан всегда и для удобства
      - пустым, если начальный текст не нужен. Возвращает то, что ввел пользователь, а если ввод отменен, то будет значение <strong>null</strong>. В
      Safari 5.1+ возвращает при отмене пустую строку (эту ошибку нужно обрабатывать).<br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Тип <span class="v3"><strong>var r = confirm("вопрос")</strong></span> - окно с вопросом и кнопками <strong>OK / Cancel</strong>.
      Результатом будет <strong>true</strong> при нажатии на <strong>OK</strong> или <strong>false</strong> при нажатии на
      ESC / <strong>Cancel</strong>.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Usl">
  <p>
    <em>============================ Условие:</em><br />
      <code>
        <strong>
          if (условие) {<br />
            действие;<br />
          } else if (второе условие, если первое ложно) {<br />
            альтернативное действие;<br />
          } else {<br />
            действие, если оба условия не верны;<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Блок с <span class="v3"><strong>else</strong></span> необязателен. В верху 3 в 1 - условие, условие с альтернативой, несколько условий.
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Готовое логическое значение можно передать переменной - <span class="v3"><strong>var c = (d != 2);</strong></span>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Условная конструкция не может выбирать из множества вариантов.<br />
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>0</strong>, <strong>""</strong>, <strong>null</strong>, <strong>undefined</strong>, <strong>NaN</strong> - являются <strong>false</strong>
  и не выполняются.
</div>

  <p>
    <span class="v"><strong># Тернарный оператор</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Оператор <strong>?</strong> - исп. для укорачивания кода с условием (выполняется позже большинства других (позже сравнений)):<br />
    <code>
      <strong>
        (условие) ? действие 1 : действие 2;</strong>
      </code><br /><br />

        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Несколько условий:<br />
        <code>
          <strong>(условие) ? действие 1 : (условие 2) ? действие 2 : действие 3;
      </strong>
    </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Swi">
  <p>
    <em>============================ Switch (оператор выбора):</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Замена множества <span class="v3"><strong>if</strong></span>.<br />
      <code>
        <strong>
          switch (выражение) {<br />
            case 'вариант_1' : действие_1;<br />
            break;<br />
            case 'вариант_2' : действие_2;<br />
            break;<br />
            default: действие;<br />
          }
        </strong>
      </code>
  </p>

  <p>
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> "Проваливание":<br />
    <code>
      <strong>
        switch (выражение) {<br />
          case 'вариант_1' :<br />
          case 'вариант_2' :<br />
          case 'вариант_3' : действие_3;<br />
          break;<br />
          default: действие;<br />
        }
      </strong>
    </code>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Особенности:</strong><br />
  - Выражение может быть не только логического типа, но и целочисленного, с плавающей точкой и строковым. Или просто переменная / функция / фрагмент данных.<br />
  - Вариант - для сравнения.<br />
  - Действие - любой скалярный тип данных.<br />
  - <span class="v3"><strong>break</strong></span> - выход из конструкции. Если его нет, то выполнение пойдет дальше вниз. Предотвращает возможность запуска ненужных
  фрагментов кода.<br />
  - <span class="v3"><strong>default</strong></span> - если совпадений не было.<br />
  - Тип данных имеет значение.<br />
  - <span class="v3"><strong>case</strong></span> можно группировать (для выполнени одного и того же кода).
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Cyc">
  <p>
    <em>============================ Циклы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл <span class="v3"><strong>while</strong></span> (блок выполняется, пока условие истинно):<br />
      <code>
        <strong>
          while (условие) {<br />
            &nbsp;действие;<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл <span class="v3"><strong>do...while</strong></span> (выполнение блока перед проверкой - гарантированное выполнение хотя бы одной итерации):<br />
      <code>
        <strong>
          do {<br />
            &nbsp;действие;<br />
          } while (условие);
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл <span class="v3"><strong>for</strong></span> (цикл со счетчиком) - выполнение кода нужного количества раз:<br />
      <code>
        <strong>
          for (точка начала; условие; изменение) {<br />
            &nbsp;действия;<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл перебора массива:<br />
      <code>
        <strong>
          for (i = 0; i < a.length; i++) {<br />
            &nbsp;действия;<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Вложенный цикл:<br />
      <code>
        <strong>
          for (var i = 0; i < 10; i++) {<br />
            &nbsp;for (var j = 0; j < 10; j++) {<br />
              &nbsp;&nbsp;...<br />
            &nbsp;}<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл Дейкстра (охраняемые условия):<br />
      <code>
        <strong>
          var a;<br />
          for(; ;) {<br />
            &nbsp;switch(a) {<br />
              &nbsp;&nbsp;case 'выражение' {<br />
                &nbsp;&nbsp;&nbsp;...<br />
              &nbsp;}<br />
              &nbsp;&nbsp;case 'выражение 2' {<br />
                &nbsp;&nbsp;&nbsp;...<br />
              &nbsp;&nbsp;}<br />
            &nbsp;}<br />
            break;<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Переменную можно объявить в цикле и видна она будет за его пределами.
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Если условие оставить пустым или условие всегда истинно, то получится бесконечный цикл.
  Бесконечные циклы поглощают ресурсы системы и могут вызвать сбой в работе браузера. Циклы не могут состоять из подвыражений.
</div>

  <p>
    <span class="v"><strong># Безусловные операторы</strong></span><br />
    <span class="v3"><strong>break</strong></span> - прекращение выполнения цикла.<br />
    <span class="v3"><strong>continue</strong></span> - незамедлительный переход к следующей итерации (либо пропуск). Возвращение к условию.<br />
  </p>

  <p>
    <span class="v"><strong># Метка</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для выхода из нескольких уровней цикла.<br />
    <code>
      <strong>
        outer:<br />
        for (i = 0; i <= 0; i++) {<br />
          &nbsp;for (j = 0; j <= 0; j++) {<br />
            &nbsp;&nbsp;...<br />
            break outer;<br />
          }<br />
        }<br />
      </strong>
    </code>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Ставится перед циклами и блоками.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Переход возможен только изнутри цикла и только на внешний блок по отношению к данному циклу.<br />
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Нельзя перейти в произвольное место.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
      <span class="v"><strong># Создание функции</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Именованная функция:<br />
      <code>
        <strong>
          function имя_функции (аргументы) {<br />
            &nbsp;...<br />
          }<br /><br />

          имя_функции(); //Вызов функции
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Функция-литерал:<br />
      <code>
        <strong>
          var d = function(x) {<br />
            &nbsp;return 2 * x;<br />
          }<br /><br />

          d(); //Вызов функции
        </strong>
      </code>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Особенности:</strong><br />
  - Должны быть объявлены как и переменные.<br />
  - Могут храниться в переменных и передаваться в качестве аргументов другим функциям и / или задаваться в качестве возвращаемого значения.<br />
  - Если функция присвоена переменной, то до объявления нельзя обращаться.<br />
  - Переменные объявленные с <span class="v3"><strong>var</strong></span> в функции изолированы. А переменные объявленные без <span class="v3"><strong>var</strong></span> - всегда глобальны и доступны за пределами функции (небезопасный код).<br />
  - Блоки <span class="v3"><strong>if / else</strong></span>, <span class="v3"><strong>switch</strong></span>, <span class="v3"><strong>for / while / do...while</strong></span> - не влияют на область видимости переменных в теле функции.<br />
  - Неважно где именно и сколько раз объявляется переменная. Любое объявление срабатывает 1 раз и распространяется на всю функцию.<br />
  - Функция может обращатся к внешним переменным, а также менять их.<br />
  - Параметры копируются в локальные переменные функции.<br />
  - Функцию можно вызвать с любым количеством аргументов, однако если какой-то параметр не указан, то он считается <strong>undefined</strong>.<br />
  - Необязательные аргументы при объявлении располагаются в конце списка.<br />
  - <span class="v3"><strong>return</strong></span> может находиться в любом месте функции. Как только до него доходит управление - функция завершается
   и значение передается обратно. Вызовов может быть и несколько, а может использоваться и без значения, чтобы прекратить выполнение (вернет <strong>undefined</strong>) и выйти из
   функции. Может быть только один.<br />
  - Правила именования такие же, как у переменной, но имя должно быть глаголом + желательно использование префиксов.<br />
  - 1 функция - 1 действие. В функции не должно быть ничего, кроме самого действия и поддействий, неразрывно связанных с ним.<br />
  - В теле функции могут быть вызваны другие функции для решения подзадач.
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Если в теле функции есть локальная переменная с таким же именем, как у глобальной, то
  пока выполняется функция локальная переменная будет перекрывать глобальную.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если создать в теле функции глобальную переменную, а потом обратиться
  к ней до вызова функции, то произойдет ошибка.
</div>

  <p>
    <span class="v"><strong># Свойства</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Могут быть использованы только внутри функции.<br />
    <span class="v3"><strong>arguments.length</strong></span> - количество аргументов в функции.
  </p>

  <p>
    <span class="v"><strong># Функциональные выражения</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Функция является значением, таким же как и строка и число. <span class="v3"><strong>alert(имя функции)</strong></span> выведет код
    функции (имя функции без скобок).<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Функцию можно скопировать в другую переменную. Имя функции без скобок, потому что скобки запускают действие функции.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Функцию типа <span class="v3"><strong>function имя() { return аргументы}</strong></span> интерпретируется до выполнения кода и можно вызывать
    до объявления. А функция типа <span class="v3"><strong>var c = function() { return аргументы}</strong></span> вызывается только после объявления.
    Первый способ полезен, когда функция исп. как часть выражения. Второй - когда есть условия.<br />
  </p>

  <p>
    <span class="v"><strong># Именованные функциональные выражения</strong></span><br />
    <code>
      <strong>
        var f = function name() {<br />
          ...<br />
        }
      </strong>
    </code>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Внутреннее имя позволяет функции надежно обращаться к себе, где бы она ни находилась.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Доступно только изнутри самой функции.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Для передачи функции в другое место кода.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Для перемещения из одной переменной в другую.<br />
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Не поддерживается в IE8.<br />
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Нельзя перезаписать.
</div>

  <p>
    <span class="v"><strong># Анонимная функция</strong></span><br />
    <span class="v3"><strong>function() {...}</strong></span> - задание анонимной функции.<br />
    <br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Пример:<br />
    <code>
      <strong>
        setInterval(function() {<br />
          &nbsp;alert("...");<br />
        }, 1000);<br />
      </strong>
    </code><br />

    <span class="v"><strong># Таймер</strong></span><br />
    <span class="v3"><strong>setTimeout(имя_функции, время);</strong></span> - задержка при вызове функции (таймер). Время -
    продолжительность задержки, перед вызовом самой себя, в миллисекундах. Однократный таймер.<br />
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Таймер помогает определить отсутствие активности пользователя в течение заданного времени. Также с помощью таймера
  можно что-то периодически обновлять.
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> С <span class="v3"><strong>setTimeout</strong></span> следующий вызов функции произойдет даже, если вызываемая функция в первый вызов не
  завершила работу. А порядок возвращаемых результатов необязательно будет соответствовать порядку вызовов функции.
</div>

  <p>
    <span class="v3"><strong>setInterval(имя_функции, время);</strong></span> - многократный вызов функции через определенный промежуток времени.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Контролируемый самовызов функции после ее завершения необходим, когда нужно предотвратить накопление
  запросов к серверу при низкой пропускной способности сети, или если ответ от сервера не успел вернуться
  до момента следующего запланированного вызова.
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Для того, чтобы остановить таймер (или периодически вызываемую функцию) - необходимо создать переменную и присвоить ей
  <span class="v3"><strong>setInterval(имя_функции, время);</strong></span>. Затем воспользоваться <span class="v3"><strong>clearInterval(переменная);</strong></span> - остановка
  периодического таймера. Переменная служит идентификатором для таймера.
</div>

  <p>
    <span class="v"><strong># Рекурсия</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Функция, которая вызывает саму себя.<br />
    <code>
      <strong>
        1) Факториал:<br />
        function G(n) {<br />
          &nbsp;if (n === 1) {<br />
            &nbsp;&nbsp;return 1;<br />
          &nbsp;} else {<br />
            &nbsp;&nbsp;return n * G(n - 1);<br />
          &nbsp;}<br />
        }<br /><br />

        2) Числа Фибоначчи:<br />
        function F(n) {<br />
          &nbsp;if (n == 0) {<br />
            &nbsp;&nbsp;return 0;<br />
          &nbsp;}<br /><br />

          &nbsp;if (n == 1) {<br />
            &nbsp;&nbsp;return 1;<br />
          &nbsp;} else {<br />
            &nbsp;&nbsp;return F(n-1) + F(n - 2);<br />
          &nbsp;}<br />
        }
      </strong>
    </code>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Рекурсия используется, когда нужно свести к минимуму сложной задачи (множество простых операций - например копирование сложных объектов).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Максимальное число вызовов рекурсии в браузере - 10000.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> У каждого вызова есть свой контекст выполнения.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> При любом вложенном вызове JS запоминает текущий контекст выполнения в специальной структуре данных - стек контекстов.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Для нового вызова создается свой контекст выполнения и управление переходит на него, а когда он завершен, то старый контекст достается из стека
  и выполнение внешней функции возобновляется.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Любая рекурсия может быть переделана в цикл (цикл эффективнее рекурсии).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Доступ к стеку - через отладчик.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Вызов рекурсии через <span class="v3"><strong>return</strong></span>.
</div>

  <p>
    <span class="v"><strong># Функции обратного вызова</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Функция, аргументом которой выступает другая функция.<br />
    <code>
      <strong>
        function x(a, b) {<br />
          &nbsp;return a + b;<br />
        }<br /><br />

        function y(a, b) {<br />
          &nbsp;return a * b;<br />
        }<br /><br />

        function z (callBackFunction, a, b) {<br />
          &nbsp;var res = callBackFunction(a, b);<br />
          &nbsp;document.write(res);<br />
        }<br /><br />

        z(x, 10, 25);
      </strong>
    </code><br /><br />

    <span class="v"><strong># Функция IIFE</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Самовызывающаяся функция<br />
    <code>
      <strong>
        (function(text){<br />
          &nbsp;alert(text);<br />
        }(text));
      </strong>
    </code><br /><br />

    <span class="v"><strong># Переопределение функции</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При первом вызове сработает основной блок, далее идет переопределение и в последующих вызовах
    будет вызываться переопределенный блок. Однако переопределение не будет работать если функцию присвоить переменной (до 1-го вызова). После первого вызова - сработает.<br />
    <code>
      <strong>
        function S() {<br />
          &nbsp;console.log("Text");<br />
           &nbsp;&nbsp;S = function() {<br />
             &nbsp;&nbsp;&nbsp;console.log("New");<br />
           &nbsp;}<br />
        }<br /><br />

        S(); //textarea<br />
        S(); //New
      </strong>
    </code><br /><br />

    <span class="v"><strong># Замыкание</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Ссылка на локальную переменную, которая была создана в области видимости одной функции, но при этом
    сохраняет свое значение и используется в другой части программы. <strong>f1</strong> - содержит внутреннюю функцию и переменную <strong>x</strong>, которая существует во время создания замыкания.
    При создании двух замыканий - для каждого из этих замыканий создается свое окружение.<br />
    <code>
      <strong>
        function multiply(n) {<br />
          &nbsp;var x = n;<br />
          &nbsp;return function(m) { return x * m; };<br />
        }<br /><br />

        var f1 = multiply(5);<br />
        var r = f1(6);<br />
        console.log(r); //30<br /><br />

        //Или...<br />
        var r = multiply(5)(6);
      </strong>
    </code>
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="Met1">
  <p>
    <em>============================ Методы / Свойства:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Метод - встроенная команда, вызываемая для получения значения.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Вызов метода - переменная.метод().<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Метод вызывается через скобки, а свойство - без.<br />
      <span class="v"><strong># Свойства</strong></span><br />
      <span class="v3"><strong>.length</strong></span> - указывает количество символов в строке, массиве.<br />
      <br />

      <span class="v"><strong># Строковые методы</strong></span><br />
      <span class="v3"><strong>.toUpperCase()</strong></span> - привести к верхнему регистру.<br />
      <span class="v3"><strong>.toLowerCase()</strong></span> - привести к нижнему регистру.<br />
      <br />

      <span class="v"><strong># Числовые методы</strong></span><br />
      <span class="v3"><strong>.toFixed(число символов)</strong></span> - сколько чисел после запятой оставить.<br />
      <br />

      <span class="v"><strong># Математические методы</strong></span><br />
      <span class="v3"><strong>Math.random()</strong></span> - генерация случайного числа в диапазоне от 0 до 1 с плавающей точкой. Никогда не будет точно 1.
      Часто помещают внутрь функций. Умножая на какое-либо число - диапазон.<br />
      <span class="v3"><strong>переменная.toFixed(число)</strong></span> - указывает сколько должно быть чисел после запятой. Для <strong>float</strong>.<br />
      <span class="v3"><strong>Math.round()</strong></span> - округление числа.<br />
      <span class="v3"><strong>Math.pow(основание степени, степень)</strong></span> - возведение в степень.<br />
      <span class="v3"><strong>Math.sqrt()</strong></span> - квадратный корень числа.<br />
      <span class="v3"><strong>Math.cbrt()</strong></span> - кубический корень числа.<br />
      <span class="v3"><strong>Math.ceil()</strong></span> - возвращает наименьшее целое число, большее либо равное указанному числу.<br />
      <span class="v3"><strong>Math.floor()</strong></span> - возвращает наибольшее целое число, меньшее либо равное указанному числу.<br />
      <span class="v3"><strong>Math.PI</strong></span> - число пи.<br />
      <span class="v3"><strong>Math.E</strong></span> - основание натурального логарифма.<br />
      <span class="v3"><strong>Math.log(x)</strong></span> - возвращает натуральный (по основанию e) логарифм x.<br />
      <span class="v3"><strong>Math.exp(x)</strong></span> - возвращает e<sup>x</sup>, где e – основание натуральных логарифмов.<br />
      <span class="v3"><strong>Math.max(a, b, c...)</strong></span> - возвращает наибольший из списка аргументов.<br />
      <span class="v3"><strong>Math.min(a, b, c...)</strong></span> - возвращает наименьший из списка аргументов.<br />
      <br />

      <span class="v"><strong># Тригонометрические методы</strong></span><br />
      <span class="v3"><strong>Math.acos(x)</strong></span> - возвращает арккосинус x (в радианах).<br />
      <span class="v3"><strong>Math.asin(x)</strong></span> - возвращает арксинус x (в радианах).<br />
      <span class="v3"><strong>Math.atan(x)</strong></span> - возвращает арктангенс x (в радианах).<br />
      <span class="v3"><strong>Math.atan2(y, x)</strong></span> - возвращает угол до точки (y, x).<br />
      <span class="v3"><strong>Math.sin(x)</strong></span> - вычисляет синус x.<br />
      <span class="v3"><strong>Math.cos(x)</strong></span> - вычисляет косинус x.<br />
      <span class="v3"><strong>Math.tan(x)</strong></span> - возвращает тангенс x.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mas">
  <p>
    <em>============================ Массивы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Массивы в JS могут содержать элементы разных типов данных.<br />
      <span class="v3"><strong>var m = [1, 2, 3];</strong></span> - объявление и заполнение массива.<br />
      <span class="v3"><strong>var m = [];</strong></span> - пустой массив.<br />
      <span class="v3"><strong>var c = m[2];</strong></span> - присвоение переменной значения массива.<br />
      <span class="v3"><strong>m[1];</strong></span> - обращение к элементу массива по индексу.<br />
      <span class="v3"><strong>m[2] = 8;</strong></span> - замена элемента в массиве.<br />
      <span class="v3"><strong>delete m[index];</strong></span> - удаление элемента в массиве по индексу.<br />
      <br />

      <span class="v"><strong># Многомерный массив</strong></span><br />
      <span class="v3"><strong>var d = [[...], [...], [...]]</strong></span> - объявление многомерный массива.<br />
      <span class="v3"><strong>d[0][1]</strong></span> - обращение к многомерному массиву.<br />

      <span class="v"><strong># Свойства</strong></span><br />
      <span class="v3"><strong>m.length;</strong></span> - длина массива.<br />
      <span class="v3"><strong>m.length = 8;</strong></span> - задание длины массива.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Значения, которые не попали в новую заданную длину массива будут утеряны (короткий массив). А
  новые незаполненные элементы получают статус <strong>undefined</strong> (длинный массив).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если в массиве есть пропущенные индексы, то при выводе появятся лишние запятые.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Массив - тоже объект, при копировании будет скопирована ссылка на его адрес в памяти.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Строка тоже является массивом.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Методы обхода каждого элемента массива (<strong>.map()</strong>, <strong>.reduce()</strong> и другие) можно объединять в цепочку.<br>
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Не рекомендуется использовать <strong>for...in</strong> для массивов.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> При уменьшении длины массива - массив укорачивается - этот процесс необратим.<br />
</div>

  <p>
    <span class="v3"><strong>m.length = 0;</strong></span> - очистка массива.<br />
    <span class="v3"><strong>m[m.lenght-1]</strong></span> - последний элемент массива.<br />
    <br />

    <span class="v"><strong># Методы</strong></span><br />
    <span class="v3"><strong>.join()</strong></span> - строковый аргумент, с помощью которого все элементы массива будут соединены в одну строку и разделены заданным элементом.<br />
    <span class="v3"><strong>.concat()</strong></span> - добавление новых элементов / слияние массивов.<br />
    <br>

    <span class="v3"><strong>.push()</strong></span> - добавление элемента в конец массива.<br />
    <span class="v3"><strong>.pop()</strong></span> - удаляет последний элемент из массива.<br />
    <span class="v3"><strong>.shift()</strong></span> - удаляет первый элемент массива.<br />
    <span class="v3"><strong>.unshift()</strong></span> - добавляет элемент в начало массива.<br />
    <br>

    <span class="v3"><strong>.indexOf()</strong></span> - возвращает индекс первого элемента. Не поддерживается IE8.<br />
    <span class="v3"><strong>.lastIndexOf</strong></span> - возвращает индекс последнего элемента. Не поддерживается IE8.<br />
    <span class="v3"><strong>.slice()</strong></span> - вырезание элементов массива.<br />
    <span class="v3"><strong>.splice()</strong></span> - удаление элементов массива.
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> 1 аргумент - какой элемент удалить.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> 2 аргумента - с какого элемента начать удаление и сколько элементов удалить.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если первый аргумент = 1, а второй = 0, третий - элементы, то произойдет заполнение массива, а не удаление.
</div>

  <p>
    <span class="v3"><strong>.reverse()</strong></span> - меняет позиции элементов массива в обратном порядке.<br />
    <span class="v3"><strong>.sort()</strong></span> - сортирует массив, если не передать функцию сравнения – сортирует элементы как строки.<br />
    <br>

    <span class="v3"><strong>.map()</strong></span> - то же, что и выше, но возвращает новый массив с результатами операций над элементами массива.<br />
    <span class="v3"><strong>.reduce()</strong></span> - последовательная обработка каждого элемента массива, с сохранением промежуточного результата.<br />
    <span class="v3"><strong>.reduceRight()</strong></span> - то же, но с конца.<br />
    <span class="v3"><strong>.every()</strong></span> - проверка элементов на соответствие условию (исп. пользовательская функция с аргументами - <strong>value</strong>, <strong>index</strong>, <strong>array</strong>).<br />
    <span class="v3"><strong>.some()</strong></span> - проверка на соответствие хотя бы одного элемента массива.<br />
    <span class="v3"><strong>.filter()</strong></span> - принимает функцию условия, но при этом возвращает массив тех элементов, которые соответствуют условию.<br />
    <br>

    <code>
      <strong>
        var arr = [1, -12, 8, -4, 24, 42];<br />
        function S(value, index, array) {<br />
          &nbsp;var result = false;<br />
          &nbsp;if (value > 0) {<br />
            &nbsp;&nbsp;result = true;<br />
            &nbsp;&nbsp;return result;<br />
          &nbsp;}<br />
        };<br />
        <br />

        var fit = arr.filter(S);
      </strong>
    </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Reg">
  <p>
    <em>============================ Регулярные выражения:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Проверка текста (или его фрагментов) по шаблону. Помогают проверять правильность ввода данных в поля формы.<br />
      <br />

      <span class="v"><strong># Задание шаблона</strong></span><br />
      <span class="v3"><strong>var pattern = /\d\d\d/;</strong></span> - через литерал.<br />
      <span class="v3"><strong>var pattern = new RegExp("\d\d\d");</strong></span> - через класс RegExp.<br />
      <br />

      <span class="v"><strong># Методы</strong></span><br />
      <span class="v3"><strong>.search()</strong></span> - возвращает индекс первого найденного символа подстроки по шаблону или
      -1 если подстроки не найдено.<br />
      <code>
        <strong>
          var text = "str 123 mgtr";<br />
          var pattern = new RegExp("\d\d\d");<br />
          var firstIndex = text.search(pattern);<br />
          document.write("Подстрока найдена по индексу" + firstIndex);<br />
        </strong>
      </code><br /><br />

      <span class="v3"><strong>.replace()</strong></span> - поиск и замена.<br />
      <code>
        <strong>
          var text = "str for 123testing ex799ample";
          var pattern = /\d\d\d/g;
          var result = text.replace(pattern, ""); //Цифры будут удалены.
          document.write(result);
        </strong>
      </code><br /><br />

      <span class="v3"><strong>.match()</strong></span> - принимает регулярное выражение и возвращает массив с результатами поиска (на совпадение).<br />
      <span class="v3"><strong>.exec()</strong></span> - проверяет, соответствует ли строка регулярному выражению, если да - возвращает ту часть строки, которая соответствует выражению.<br />
      <span class="v3"><strong>.split()</strong></span> - разбивает строку на массив подстрок в соответствии с регулярным выражением.<br />
      <br />

      <span class="v"><strong># Методы (для регулярного выражения)</strong></span><br />
      <span class="v3"><strong>.test()</strong></span> - проверяет, совпадает ли строка с регулярным выражением.<br />
      <br />

      <span class="v"><strong># Метасимволы</strong></span><br />
      <span class="v3"><strong>\w</strong></span> - любой алфавитно-цифровой символ в верхнем / нижнем регистре + символ подчеркивания.<br />
      <span class="v3"><strong>\W</strong></span> - любой символ не являющийся подчеркиванием и не относящийся к алфавитно-цифровым.<br />
      <span class="v3"><strong>\s</strong></span> - любой пробельный символ.<br />
      <span class="v3"><strong>\S</strong></span> - любой не пробельный символ.<br />
      <span class="v3"><strong>\d</strong></span> - любая цифра.<br />
      <span class="v3"><strong>\D</strong></span> - любой не цифровой символ.<br />
      <br />

      <span class="v3"><strong>\v</strong></span> - вертикальная табуляция.<br />
      <span class="v3"><strong>\t</strong></span> - табуляция.<br />
      <span class="v3"><strong>\r</strong></span> - перевод каретки.<br />
      <span class="v3"><strong>\n</strong></span> - перенос на новую строку.<br />
      <span class="v3"><strong>\f</strong></span> - перевод страницы.<br />
      <br />

      <span class="v3"><strong>[RsXxTt]</strong></span> - на соответствие указанным символам.<br />
      <span class="v3"><strong>[a-z]</strong></span> - на соответстивие английским символам в нижнем регистре.<br />
      <span class="v3"><strong>[0-9]</strong></span> - на соответствие цифрам.<br />
      <span class="v3"><strong>[^0-9]</strong></span> - соответствие на что-то, кроме цифр заданного диапазона.<br />
      <br />

      <span class="v3"><strong>+</strong></span> - 1 или несколько символов.<br />
      <span class="v3"><strong>*</strong></span> - 0 и более символов.<br />
      <span class="v3"><strong>?</strong></span> - 0 или 1 вхождение.<br />
      <br />

      <span class="v3"><strong>{3}</strong></span> - точное количество совпадений.<br />
      <span class="v3"><strong>{2, 3}</strong></span> - диапазон.<br />
      <span class="v3"><strong>{3,}</strong></span> - не менее 3-х.<br />
      <span class="v3"><strong>{,3}</strong></span> - не более 3-х.<br />
      <br />

      <span class="v3"><strong>^</strong></span> - начало строки.<br />
      <span class="v3"><strong>$</strong></span> - регулярные выражения.<br />
      <span class="v3"><strong>\b</strong></span> - граница слова.<br />
      <br />

      <span class="v3"><strong>i</strong></span> - выполнение поиска не чувствительного к регистру.<br />
      <span class="v3"><strong>g</strong></span> - глобальный поиск.<br />
      <span class="v3"><strong>m</strong></span> - многострочный режим.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Примеры:<br />
      <span class="v3"><strong>/\d{1,2}-\d{1,2}-\d{4}/</strong></span> - дата.<br />
      <span class="v3"><strong>/\+код\(\d{3}\)\d{3}-\d{2}-\d{2}/</strong></span> - телефон.<br />
      <span class="v3"><strong>/[a-zA-Z]+[a-zA-Z]/</strong></span> - имя.<br />
      <span class="v3"><strong>/\b[a-z0-9.]+@[a-z0-9.]+\.[a-z]{2,4}\b/i</strong></span> - e-mail.<br />
      <span class="v3"><strong>/\w+\.html/</strong></span> - Web-страница.<br />
      <span class="v3"><strong>/https?:\/\/[\w\d:\.:\?\&]+/g</strong></span> - адрес Web-страницы.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Coo">
  <p>
    <em>============================ Cookies:</em><br />
    <span class="v"><strong># Создание Cookie</strong></span><br />
    <code>
      <strong>
        function setCookie() {<br />
          document.cookie = "имя=значение";<br />
        }
      </strong>
    </code><br /><br />

    <span class="v"><strong># Задание времени жизни Cookie</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Добавление атрибута <strong>max-age="число"</strong> (значение в миллисекундах).<br />
    <br />

    <span class="v"><strong># Изменение Cookie</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Переопределение.<br />
    <br />

    <span class="v"><strong># Удаление Cookie</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для удаления Cookie - значение атрибута <strong>max-age</strong> = 0.<br />
    <br />

    <span class="v"><strong># Чтение Cookie</strong></span><br />
    <code>
      <strong>
        function setCookie() {<br />
          &nbsp;document.cookie = "version" + encodeURIComponent(document.lastModified);<br />
        }<br /><br />

        function getCookie() {<br />
          &nbsp;alert(findCookieValue("version"));<br />
        }<br /><br />

        function findCookieValue(cookieName) {<br />
          &nbsp;var allcookies = document.cookie;<br />
          &nbsp;var pos = allcookie.indexOf(cookieName + "=");<br /><br />

          &nbsp;if (pos != 1) {<br />
            &nbsp;&nbsp;var start = pos + cookieName.length + 1;<br />
            &nbsp;&nbsp;var end = allcookies.indexOf(";", start);<br /><br />

            &nbsp;&nbsp;if (end == 1) {<br />
              &nbsp;&nbsp;&nbsp;end = allcookies.length;<br />
            &nbsp;&nbsp;}<br /><br />

            &nbsp;&nbsp;var value = allcookies.substring(start, end);<br />
            &nbsp;&nbsp;return decodeURIComponent(value);<br />
          }<br />
        }
      </strong>
    </code><br /><br />

    <span class="v"><strong># Проверка поддержки Cookie</strong></span><br />
    <code>
      <strong>
        if (navigator.cookieEnabled) {<br />
          ...<br />
        }
      </strong>
    </code><br /><br />

    <span class="v"><strong># Функции для cookie</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для данных форм.<br />
    <span class="v3"><strong>encodeURIComponent()</strong></span> - кодирование.<br />
    <span class="v3"><strong>decodeURIComponent()</strong></span> - декодирование.<br />
  </p>

  <hr />

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> При помощи Cookie имеет смысл сохранять ID пользователя, содержимое корзины покупок, место проживания + язык.
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Значение cookie не может содержать символы разделителей.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Cookie хранятся на ЖД и не имеют доступа к остальной хранящейся там информации.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Не могут стать источнико вирусов / червей, так как не являются исполняемыми программами.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Сохраняют персональные данные только после того, как пользователь сознательно указал их на Web-странице.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Созданные в одном браузере Cookie не будут видны и доступны в другом браузере.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Позволяют сохранять только небольшие текстовые фрагменты (менее 4 Кб).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Сохраняют данные, введенные пользователем.<br />
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Уязвимые данные с помощью Cookie (типа пароля и логина) сохранять не стоит!<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Cookies включаются в каждый HTTP-запрос, замедляя работу Web-приложения на напрасную
  передачу одних и тех же данных снова и снова.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Sess">
  <p>
    <em>============================ sessionStorage:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Доступны только для одной вкладки. Удаляются с закрытием вкладки.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Запись (2 способа):<br />
      <span class="v3"><strong>window.sessionStorage.setItem("ключ", "значение");</strong></span> - 1-й способ.<br />
      <span class="v3"><strong>window.sessionStorage["ключ"] = "значение"</strong></span> - 2-й способ.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Получение значения (2 способа):<br />
      <span class="v3"><strong>window.sessionStorage.getItem("ключ", "значение");</strong></span> - 1-й способ.<br />
      <span class="v3"><strong>window.sessionStorage["ключ"] = "значение"</strong></span> - 2-й способ.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="LocalS">
  <p>
    <em>============================ localStorage:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Хранение данных на постоянной основе - автоматически не удаляются и не имеют срока хранения, также не передаются на сервер в запросе HTTP.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Запись (2 способа):<br />
      <span class="v3"><strong>window.localStorage.setItem("ключ", "значение");</strong></span> - 1-й способ.<br />
      <span class="v3"><strong>window.localStorage["ключ"] = "значение"</strong></span> - 2-й способ.<br />
      <br />

      <span class="v3"><strong>window.localStorage.clear()</strong></span> - удаление всего в localStorage.<br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> 5 Мб для хранения.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Работа на стороне клиента.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Учитывает обновление страницы.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Данные хранятся в виде строки.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Новое значение перезаписывает старое.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Для сохранения объектов нужно использовать JSON-сериализацию.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Media">
  <p>
    <em>============================ Media:</em><br />
      <span class="v"><strong># Audio</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Свойства:<br />
      <span class="v3"><strong>.playbackRote</strong></span> - скорость воспроизведения.<br />
      <span class="v3"><strong>.src</strong></span> - имя файла.<br />
      <span class="v3"><strong>.duration</strong></span> - длительность.<br />
      <span class="v3"><strong>.buffered</strong></span> - буферизация длительности.<br />
      <span class="v3"><strong>.controls</strong></span> - наличие.<br />
      <span class="v3"><strong>.loop</strong></span> - наличие.<br />
      <span class="v3"><strong>.muted</strong></span> - .<br />
      <span class="v3"><strong>.preload</strong></span> - .<br />
      <span class="v3"><strong>.volume</strong></span> - уровень звука.<br />
      <span class="v3"><strong>.currentTime</strong></span> - текущее время воспроизведения.<br />
      <br />

      <span class="v"><strong># Video</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Свойства:<br />
      <span class="v3"><strong>.poster</strong></span> - .<br />
      <span class="v3"><strong>.height</strong></span> - .<br />
      <span class="v3"><strong>.width</strong></span> - .<br />
      <span class="v3"><strong>.videoWidth</strong></span> - .<br />
      <span class="v3"><strong>.videoHeight</strong></span> - .<br />
      <br />

      <span class="v"><strong># Методы</strong></span><br />
      <span class="v3"><strong>.play()</strong></span> - начать воспроизведение.<br />
      <span class="v3"><strong>.pause()</strong></span> - приостановить воспроизведение.<br />
      <br />

      <span class="v"><strong># События</strong></span><br />
      <span class="v3"><strong>canplaythrough</strong></span> - когда браузер определил, что может воспроизвести.<br />
      <span class="v3"><strong>play</strong></span> - начато воспроизведение.<br />
      <span class="v3"><strong>pause</strong></span> - воспроизведение приостановлено.<br />
      <span class="v3"><strong>volumechange</strong></span> - изменена громкость.<br />
      <span class="v3"><strong>ended</strong></span> - окончание проигрывания.<br />
      <span class="v3"><strong>timeupdate</strong></span> - изменено время воспроизведения.<br />
      <span class="v3"><strong>error</strong></span> - возникновение ошибки при воспроизведении.<br />
      <span class="v3"><strong>loadeddata</strong></span> - загрузка первого фрейма видео.<br />
      <span class="v3"><strong>loadedmetadata</strong></span> - загрузка метаданных.<br />
      <span class="v3"><strong>seeking</strong></span> - начало перемещения курсора по дорожке.<br />
      <span class="v3"><strong>seeked</strong></span> - окончание перемещения курсора по дорожке.<br />
  </p>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-primary" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">DOM</h3>
  </div>
    <div class="panel-body">

<!-- Buttons -->

<button class="button3" id="WinB">Window</button>
<button class="button3" id="LocB">Location</button>
<button class="button3" id="HisB">History</button>
<button class="button3" id="NavB">Navigator</button>
<button class="button3" id="Dom1B">Document</button>
<button class="button3" id="MetB">Операции с DOM</button>
<button class="button3" id="SobB">События</button>

<!-- The Article -->

<div class="textblock" id="Win">
  <p>
    <em>============================ Объект window:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объект <span class="v3"><strong>window</strong></span> представляет собой открытое окно браузера. Является корневым и все свойства, методы, функции и даже переменные являются его свойствами и методами.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Окно браузера рассматривается как объект.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Всегда глобален.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Каждая новая вкладка браузера - новое окно.<br />

      <figure>
        <img src="../Images/DOM.png" />
      </figure>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> В JS - <strong>window.onload = function() {...}</strong> - функция сработает, когда Web-страница будет загружена полностью, с
  учетом изображений, из-за которых скрипты могут подвисать. В jQ же функция срабатывает при формировании структуры документа.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>window.onbeforeunload = function() {...}</strong> - функция сработает перед закрытием окна.
</div>

  <p>
    <span class="v"><strong># Основные события окна</strong></span><br />
    <span class="v3"><strong>.onload</strong></span> - загрузка всего документа.<br />
    <span class="v3"><strong>.onfocus</strong></span> - обнаруживает, когда окно получает фокус, щелчок, нажатия клавиш или другой ввод.<br />
    <span class="v3"><strong>.onblur</strong></span> - обнаруживает, когда окно теряет фокус.<br />
  </p>

  <p>
    <span class="v"><strong># Свойства / методы</strong></span><br />
    <span class="v3"><strong>.name</strong></span> - свойство для чтения или задания имени окна.<br />
    <span class="v3"><strong>.history</strong></span> - обращение к URL-адресам, которые ранее загружались в окне.<br />
    <span class="v3"><strong>.document</strong></span> - ссылка на основное содержимое загруженного документа.<br />
    <br />

    <span class="v3"><strong>.open(".html", "имя_окна", "дополнительные параметры")</strong></span> - открытие нового окна.<br />
    <span class="v3"><strong>.close()</strong></span> - закрытие окна.<br />
    <span class="v3"><strong>.setTimeout();</strong></span> - задержка перед выполнением функции или команды.<br />
    <span class="v3"><strong>.clearTimeout();</strong></span> - отмена задержки перед вызовом.<br />
    <span class="v3"><strong>.setInterval();</strong></span> - задержка между повторяющимися выполнениями функции.<br />
    <span class="v3"><strong>.clearInterval();</strong></span> - отмена задержки повторяющихся выполнений функций.<br />
    <span class="v3"><strong>.moveTo()</strong></span> - перемещение окна.<br />
    <span class="v3"><strong>.resizeTo()</strong></span> - изменение размеров окна.<br />
  </p>

  <p>
    <span class="v"><strong># Клиентское окно</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Область, в которой отображается Web-страница.<br /><br />

    <span class="v3"><strong>document.body.clientHeight</strong></span> - высота клиентского окна.<br />
    <span class="v3"><strong>document.body.clientWidth</strong></span> - ширина клиентского окна.<br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> <span class="v2"><strong>(document.body.clientHeight - 100) * 0.9;</strong></span> - адаптивность?
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Loc">
  <p>
    <em>============================ Location:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объект <span class="v3"><strong>location</strong></span> -
      URL-адрес текущего документа. Может быть в связке с <span class="v3"><strong>document</strong></span><br />

      <span class="v"><strong># Свойства</strong></span><br />
      <span class="v3"><strong>.protocol</strong></span> - используемый протокол.<br />
      <span class="v3"><strong>.host</strong></span> - доменное имя хоста.<br />
      <span class="v3"><strong>.hostName</strong></span> - название хоста.<br />
      <span class="v3"><strong>.pathname</strong></span> - путь к запрашиваемому файлу.<br />
      <span class="v3"><strong>.search</strong></span> - строка запроса после ?.<br />
      <span class="v3"><strong>.href</strong></span> - полная строка запроса к ресурсу.<br />
      <span class="v3"><strong>.origin</strong></span> - общая схема запроса.<br />
      <span class="v3"><strong>.port</strong></span> - порт, использующийся ресурсом.<br />
      <span class="v3"><strong>.hash</strong></span> - строка после #.<br />
      <br />

      <span class="v"><strong># Методы</strong></span><br />
      <span class="v3"><strong>.assign(url)</strong></span> - загрузка ресурса.<br />
      <span class="v3"><strong>.reload()</strong></span> - перезагрузка страницы (имеет аргумент forcedReload, где true - кэш не использовать, а false - использовать).<br />
      <span class="v3"><strong>.replace(url)</strong></span> - замена текущей страницы другим ресурсом (предыдущая страница в истории браузера не сохраняется).<br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Переход на новый адрес:<br />
      <span class="v3"><strong>document.location = "адрес"</strong></span><br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Функция для чтения данных, передаваемых через GET-запрос:<br />
      <code>
        <strong>
          function getQueryString() {<br />
            &nbsp;var args = {};<br />
            &nbsp;var query = location.search.substring(1); &nbsp;&nbsp;//Получение строки запроса<br />
            &nbsp;var pairs = query.split("&"); &nbsp;&nbsp;//Разделение строки по амперсанду<br /><br />

            &nbsp;for (var i = 0; i < pairs.length; i++) {<br />
              &nbsp;&nbsp;var pos = pairs[i].indexOf('=');<br /><br />

              &nbsp;&nbsp;if (pos = -1) { &nbsp;&nbsp;//Проверка на name=value<br />
                &nbsp;&nbsp;&nbsp;continue; &nbsp;&nbsp;//Если не найдено - пропустить<br />
              &nbsp;&nbsp;}<br /><br />

              &nbsp;var argname = pairs[i].substring(0, pos);<br />
              &nbsp;var value = pairs[i].substring(pos + 1);<br /><br />

              &nbsp;args[argname] = value;<br />
            &nbsp;}<br />
            &nbsp;&nbsp;return args;<br />
          }<br /><br />

          function print() {<br />
            &nbsp;var args = getQueryString();<br />
            &nbsp;var e = document.createElement("p");<br />
              &nbsp;&nbsp;e.innerHTML = "..." + args.login;<br />
              &nbsp;&nbsp;e.innerHTML = "..." + args.password;<br />
            &nbsp;document.body.appendChild(e);<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="His">
  <p>
    <em>============================ History:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Хранение истории посещений Web-стр. в браузере.<br />
      <span class="v3"><strong>.length</strong></span> - количество страниц.<br />
      <br />

      <span class="v3"><strong>.back()</strong></span> - предыдущая прошлая страница.<br />
      <span class="v3"><strong>.forward()</strong></span> - следующая просмотренная страница.<br />
      <span class="v3"><strong>.go(число)</strong></span> - перемещение на указанное число страниц.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Nav">
  <p>
    <em>============================ Navigator:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объект <span class="v3"><strong>navigator</strong></span> -
      информация о браузере.<br />

      <span class="v"><strong># Свойства</strong></span><br />
      <span class="v3"><strong>.appName</strong></span> - название браузера.<br />
      <span class="v3"><strong>.appVersion</strong></span> - версия браузера.<br />
      <span class="v3"><strong>.userAgent</strong></span> - строка, которую браузер посылает в HTTP-заголовке USER-AGENT.<br />
      <span class="v3"><strong>.appCodeName</strong></span> - кодовое имя браузера.<br />
      <span class="v3"><strong>.platform</strong></span> - аппаратная платформа, на которой работает браузер.<br />
      <br />

      <span class="v"><strong># Геолокация</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Геоположение пользователя.<br />
      <code>
        <strong>
          function success(position) {<br />
            &nbsp;var latitude = position.coords.latitude;<br />
            &nbsp;var longitude = position.coords.longitude;<br />
            &nbsp;var altitude = position.coords.altitude;<br />
            &nbsp;var speed = position.coords.speed;<br />
          }<br /><br />

          function error(obj) {<br />
            &nbsp;console.log("Error");<br />
          }<br /><br />

          navigator.geolocation.getCurrentPossition(success, error);
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> В браузерах действует политика безопасности, которая при обращении к методу геолокации осуществит запрос
  пользователю с разрешением отправки геоданных.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Dom1">
  <p>
    <em>============================ Document:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объект <span class="v3"><strong>document</strong></span>.<br />

      <span class="v3"><strong>document.write("")</strong></span> - вывод информации. Можно размещать теги.<br />
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Работает только с атрибутом <span class="v4"><strong>id</strong></span>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Можно помещать в любую часть документа - где помещен, там и выведется.<br />
</div>

  <p>
    <span class="v3"><strong>document.createElement("тег")</strong></span> - создание элемента.<br />
    <br />

    <span class="v"><strong># Свойства</strong></span><br />
    <span class="v3"><strong>.bgColor</strong></span> - фон текущего документа.<br />
    <span class="v3"><strong>.lastModified</strong></span> - дата последнего изменения.<br />
    <span class="v3"><strong>.location</strong></span> - текущий адрес Web-страницы.<br />
    <span class="v3"><strong>.referrer</strong></span> - адрес Web-страницы, с которой был осуществлен переход.<br />
    <span class="v3"><strong>.links</strong></span> - коллекция всех ссылок Web-страницы.<br />
    <span class="v3"><strong>.anchors</strong></span> - доступ ко всем якорям.<br />
    <span class="v3"><strong>.images</strong></span> - коллекция всех изображений.<br />
    <span class="v3"><strong>.documentElement</strong></span> - доступ к тегу <strong>html</strong>.<br />
    <span class="v3"><strong>.body</strong></span> - доступ к тегу <strong>body</strong>.<br />
    <span class="v3"><strong>.forms</strong></span> - коллекция всех форм.<br />
    <span class="v3"><strong>.forms[0].elements[0]</strong></span> - первый элемент первой формы.<br />
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="Met">
  <p>
    <em>============================ Операции с элементами:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Взаимодействие через <span class="v3"><strong>document</strong></span>.<br />

      <span class="v"><strong># Захват элемента</strong></span><br />
      <span class="v3"><strong>.getElementById("id");</strong></span> - обращение к элементу по <span class="v4"><strong>id</strong></span>.<br />
      <span class="v3"><strong>.getElementsByName("name")</strong></span> - обращение к элементу по атрибуту <span class="v4"><strong>name</strong></span>.<br />
      <span class="v3"><strong>.getElementByTagName("p")</strong></span> - обращение к элементу по тегу.<br />
      <span class="v3"><strong>.getElementsByClassName()</strong></span> - обращение к элементу по классу.<br />
      <span class="v3"><strong>.querySelector()</strong></span> - выбор первого элемента селектора.<br />
      <span class="v3"><strong>.querySelectorAll</strong></span> - все элементы селектора.<br />
      <span class="v3"><strong>[]</strong></span> - № в коллекции.<br />
      <br />

      <span class="v"><strong># Узлы DOM-дерева</strong></span><br />
      <span class="v3"><strong>.nodeType</strong></span> - тип узла в виде числа.<br />
      <span class="v3"><strong>.nodeName</strong></span> - имя узла.<br />
      <span class="v3"><strong>.nodeValue</strong></span> - значение узла в виде текста.<br />
      <span class="v3"><strong>.ownerDocument</strong></span> - корневой узел документа.<br />
      <span class="v3"><strong>.childNodes</strong></span> - массив всех дочерних узлов.<br />
      <span class="v3"><strong>.firstChild</strong></span> - первый дочерний узел.<br />
      <span class="v3"><strong>.lastChild</strong></span> - последний дочерний узел.<br />
      <span class="v3"><strong>.nextSibling</strong></span> - следующий соседний узел.<br />
      <span class="v3"><strong>.previousSibling</strong></span> - предыдущий соседний узел.<br />
      <span class="v3"><strong>.parentNode</strong></span> - родительский узел для текущего элемента.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Пробелы между узлами + переносы строк также считаются за отдельные текстовые узлы.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> IE8 не генерирует пробельные узлы.<br />
</div>

    <p>
      <span class="v"><strong># Операции</strong></span><br />
      <span class="v3"><strong>.createElement()</strong></span> - создание HTML-элемента.<br />
      <span class="v3"><strong>.createTextNode()</strong></span> - создание текстового узла.<br />
      <span class="v3"><strong>.textContent</strong></span> - присвоение текста.<br />
      <span class="v3"><strong>.cloneNode()</strong></span> - копирование элемента / узла (аргументы - <strong>true</strong> - копирование с дочерними узлами, а <strong>false</strong> - без дочерних узлов).<br />
      <span class="v3"><strong>.value</strong></span> - достает значение из элемента интерфейса.<br />
      <span class="v3"><strong>.name</strong></span> - значение атрибута <span class="v4"><strong>name</strong></span>.<br />
      <span class="v3"><strong>.type</strong></span> - значение поля ввода.<br />
      <span class="v3"><strong>.submit()</strong></span> - отправка данных на сервер.<br />
      <span class="v3"><strong>.reset()</strong></span> - очищение полей формы.<br />
      <span class="v3"><strong>.focus()</strong></span> - установка фокуса.<br />
      <span class="v3"><strong>.blur()</strong></span> - потеря фокуса.<br />
      <span class="v3"><strong>.checked</strong></span> - выделение флажка / переключателя.<br />
      <span class="v3"><strong>.src = ".png"</strong></span> - замена изображения.<br />
      <span class="v3"><strong>.innerHTML = "содержимое";</strong></span> - вставка содержимого.<br />
      <span class="v3"><strong>.innerText</strong></span> - получение / вставка текстового содержимого.<br />
      <span class="v3"><strong>.appendChild()</strong></span> - добавление дочернего элемента.<br />
      <span class="v3"><strong>.insertBefore()</strong></span> - добавление элемента перед указанным (1 - перед чем, 2 - что).<br />
      <span class="v3"><strong>.removeChild()</strong></span> - удалить дочерний элемент.<br />
      <span class="v3"><strong>.replaceChild()</strong></span> - замена одного элемента на другой.<br />
      <span class="v3"><strong>.setAttribute("атрибут", "значение")</strong></span> - добавление атрибута.<br />
      <span class="v3"><strong>.removeAttribute("атрибут")</strong></span> - удаление атрибута.<br />
      <span class="v3"><strong>.getAttribute("атрибут")</strong></span> - получение значения атрибута.<br />
      <span class="v3"><strong>.className</strong></span> - добавление класса.<br />
      <span class="v3"><strong>.classList.add()</strong></span> - добавление класса.<br />
      <span class="v3"><strong>.classList.remove()</strong></span> - удаление класса.<br />
      <span class="v3"><strong>.classList.toggle()</strong></span> - переключение класса.<br />
      <br />

      <span class="v"><strong># JS & CSS</strong></span><br />
      <span class="v3"><strong>.style.свойство = "значение"</strong></span> - изменение свойств CSS (свойства записываются в стиле camelCase)<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sob">
  <p>
    <em>============================ События и обработка событий:</em><br />
      <span class="v"><strong># DOM Level 0</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Исходная модель обработки событий. На элемент можно повесить лишь одно событие. Нельзя задать события для динамических элементов.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Задание событий через атрибуты (не рекомендуется) или ненавязчивый JS (события).<br />
      <span class="v3"><strong>элемент.событие = function() {...}</strong></span> или <span class="v3"><strong>элемент.событие = имя_функции;</strong></span><br />
      <br />

      <span class="v"><strong># DOM Level 2</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Стандартная модель обработки событий. На элемент можно повесить несколько функций на один и тот же обработчик событий.<br />
      <span class="v3"><strong>элемент.addEventListener(event, handler, capture)</strong></span> - добавление обработчика события.<br />
      <strong>event</strong> - имя события в '', без приставки "on".<br />
      <strong>handler</strong> - анонимная функция или имя пользовательской функции.<br />
      <strong>capture</strong> - если <strong>true</strong>, то обработчик срабатывает на этапе перехвата, а если <strong>false</strong> - на этапе всплывания.<br />
      <br />

      <span class="v3"><strong>элемент.removeEventListener(event, handler, capture)</strong></span> - удаление обработчика события.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Проверка поддержки DOM Level 2:<br />
      <code>
        <strong>
          if (элемент.removeEventListener) {...}
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Распределение событий в DOM Level 2 (маршрутизация):<br />
      1. Перехват (нисходящее) - событие распространяется от Document вниз до целевого элемента управления.<br />
      2. Событие в целевом узле.<br />
      3. Всплытие (восходящее) - событие распространяется от целевого элемента управления вверх до корневого элемента.<br />
      4. Если элемент вложенный + стоит параметр <strong>true</strong>, то сначала вызовется событие у родителя, а затем у вложенного. При
      <strong>false</strong> - во вложенном, а затем у родителя.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Прекращение маршрута события:<br />
      <code>
        <strong>
          function(e) {<br />
            e.stopPropagation();<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Отмена действия по умолчанию:<br />
      <span class="v3"><strong>e.preventDefault();</strong></span> - отмена стандартного действия браузера на событие при возвращении <strong>false</strong>.<br />
      <span class="v3"><strong>e.defaultPrevented()</strong></span> - возвращает <strong>true</strong>, если был вызван у объекта метод отмены стандартного действия.<br />
      <code>
        <strong>
          document.forms[0].addEventListener("submit", function(e) {<br />
            &nbsp;if(document.getElementById("id").value.length = 0) {<br />
              &nbsp;&nbsp;e.preventDefault();<br />
              &nbsp;&nbsp;alert("...");<br />
            &nbsp;}<br />
          }, false);<br /><br />

          // Форма не будет отправлять данные на сервер, так как стандартное действие браузера отменено - если поле пустое, то JS
          не позволяет оправить данные пока оно не будет заполнено.
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> События в IE9 и ниже:<br />
      # В модели IE нет понятия перехвата события, но есть всплывание.<br />
      <span class="v3"><strong>attachEvent</strong></span> = addEventListener.<br />
      <span class="v3"><strong>detachEvent</strong></span> = removeEventListener.<br />
      <br />

      <span class="v3"><strong>e.cancelBubble = true;</strong></span> - прекращение всплывания события.<br />
      <span class="v3"><strong>e.returnValue = false;</strong></span> - предотвращение выполнения операции по умолчанию.<br />
      <span class="v3"><strong>e.srcElement</strong></span> - отправитель события.<br />
      <span class="v3"><strong>e.offsetX / Y</strong></span> - координаты относительно элемента.<br />
      <span class="v3"><strong>e.keyCode</strong></span> - код клавиши.<br />

      <a href="http://www.javascriptkeycode.com/">Коды клавиш клавиатуры</a>
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> IE8 и ниже не поддерживают DOM Level 2.
</div>

  <p>
      <span class="v"><strong># Мышь</strong></span><br />
      <span class="v3"><strong>.onclick</strong></span> - клик по элементу.<br />
      <span class="v3"><strong>.ondblclick</strong></span> - двойной клик.<br />
      <span class="v3"><strong>.onmousedown</strong></span> - нажата кнопка мыши.<br />
      <span class="v3"><strong>.onmouseup</strong></span> - отпущена клавиша мыши.<br />
      <span class="v3"><strong>.onmousemove</strong></span> - перемещение указателя мыши.<br />
      <span class="v3"><strong>.onmouseover</strong></span> - наведение мыши на элемент.<br />
      <span class="v3"><strong>.onmouseout</strong></span> - потеря наведения.<br />
      <br />

      <span class="v"><strong># Клавиатура</strong></span><br />
      <span class="v3"><strong>.onkeydown</strong></span> - нажатие клавиши.<br />
      <span class="v3"><strong>.onkeypress</strong></span> - клавиша нажата и отпущена.<br />
      <span class="v3"><strong>.onkeyup</strong></span> - клавиша отпущена.<br />
      <br />

      <span class="v"><strong># Форма</strong></span><br />
      <span class="v3"><strong>.onfocus</strong></span> - получение фокуса.<br />
      <span class="v3"><strong>.onblur</strong></span> - потеря фокуса.<br />
      <span class="v3"><strong>.onchange</strong></span> - изменение элемента.<br />
      <span class="v3"><strong>.onsubmit</strong></span> - запрос на передачу данных.<br />
      <span class="v3"><strong>.onreset</strong></span> - запрос на очистку формы.<br />
      <br />

      <span class="v"><strong># Прочее</strong></span><br />
      <span class="v3"><strong>.onload</strong></span> - загрузка завершена.<br />
      <span class="v3"><strong>.onunload</strong></span> - закрытие вкладки.<br />
      <span class="v3"><strong>.onabort</strong></span> - прерывание загрузки.<br />
      <span class="v3"><strong>.onerror</strong></span> - ошибка при загрузке.<br />
      <span class="v3"><strong>.onresize</strong></span> - изменение размеров окна.<br />
      <span class="v3"><strong>.onselect</strong></span> - выделение текста.<br />
      <br />

      <span class="v"><strong># Указатель</strong></span><br />
      <span class="v3"><strong>this</strong></span> - ссылкается на тот элемент, который вызвал событие.<br />
      <br />

      <span class="v"><strong># Event</strong></span><br />
      <span class="v3"><strong>window.event</strong></span> - информация о событии браузера.<br />
      <span class="v3"><strong>e</strong></span> - объект события.<br />
      <br />

      <span class="v3"><strong>e.type</strong></span> - тип события.<br />
      <span class="v3"><strong>e.relatedTarget</strong></span> - определение вторичного источника события.<br />
      <span class="v3"><strong>e.eventPhase</strong></span> - стадия обработки события.<br />
      <span class="v3"><strong>e.target</strong></span> - узел документа, в котором произошло событие (над ним можно производить различные манипуляции).<br />
      <span class="v3"><strong>e.currentTarget</strong></span> - узел, чей обработчик события работает в данный момент.<br />
      <span class="v3"><strong>e.eventPhase</strong></span> - этап.<br />
      <span class="v3"><strong>e.timeStamp</strong></span> - когда произошло событие.<br />
      <span class="v3"><strong>e.bubbles</strong></span> - <strong>true</strong>, если событие может всплывать по DOM-дереву (события <span class="v3"><strong>blur</strong></span>, <span class="v3"><strong>focus</strong></span>, <span class="v3"><strong>load</strong></span> и
      <span class="v3"><strong>unload</strong></span> не всплывают).<br />

      <span class="v3"><strong>e.cancelable</strong></span> - <strong>true</strong>, если с этим событием связано действие по умолчанию и его можно отменить.<br />
      <br />

      <span class="v3"><strong>e.button</strong></span> - кнопка мыши.<br />
      <span class="v3"><strong>e.altKey</strong></span> - <strong>true</strong>, если Alt зажат.<br />
      <span class="v3"><strong>e.ctrlKey</strong></span> - <strong>true</strong>, если Ctrl зажат.<br />
      <span class="v3"><strong>e.shiftKey</strong></span> - <strong>true</strong>, если Shift зажат.<br />
      <span class="v3"><strong>e.clientX</strong></span> - горизонтальная координата курсора относительно верхнего левого угла.<br />
      <span class="v3"><strong>e.clientY</strong></span> - вертикальная координата курсора относительно верхнего левого угла.<br />
      <span class="v3"><strong>e.screenX</strong></span> - горизонтальная координата курсора относительно экрана.<br />
      <span class="v3"><strong>e.screenY</strong></span> - вертикальная координата курсора относительно экрана.<br />
      <span class="v3"><strong>e.charCode</strong></span> - код символа. Для события <span class="v3"><strong>keypress</strong></span>. Символы клавиатуры больше 32.<br />
      <span class="v3"><strong>e.keyCode</strong></span> - код клавиши. Для события <span class="v3"><strong>keydown</strong></span>.<br />
      <span class="v3"><strong>e.metaKey</strong></span> - <strong>true</strong>, если была нажата метаклавиша клавиатуры.<br />
      <br />

      <code>
        <strong>
          function handler(e) {<br />
            &nbsp;if (!e) e = window.event;<br />
          }<br />
          // Получение от браузера события
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-info" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">ООП</h3>
  </div>
    <div class="panel-body">

<!-- Buttons -->

<button class="button2" id="ObjB">Объекты</button>
<button class="button2" id="DateB">Date</button>
<button class="button2" id="Met2B">Методы</button>
<button class="button2" id="ProtB">Конструкторы / Прототипы</button>
<button class="button2" id="ProB">Пространство имен</button>
<button class="button2" id="IncB">Инкапсуляция</button>
<button class="button2" id="NasB">Наследование</button>
<button class="button2" id="PolB">Полиморфизм</button>


<!-- The Article -->

<div class="textblock" id="Obj">
  <p>
    <em>============================ Объекты:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объект является также ассоциативным массивом.<br />

      <span class="v"><strong># Создание объекта</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Литеральный способ (рекомендованный):<br />
      <span class="v3"><strong>var g = {}</strong></span><br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В <strong>{}</strong> указываются свойства и методы. Свойство объекта представляет собой <strong>свойство: значение</strong>, где имя свойства может быть
      только строкой (если не строка, то преобразуется в строку). Свойства можно указать при создании объекта, так и позднее. Допустимо несколько свойств
      разделенных запятой или ни одного вовсе.<br /><br />

      <code>
        <strong>
          var g = {<br />
            &nbsp;name: "BAR", &nbsp;&nbsp;//Задание свойства<br />
            &nbsp;created: 1918,<br />
            &nbsp;do: function() {} &nbsp;&nbsp;//Задание метода<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Через конструктор:<br />
      <span class="v3"><strong>var d = new Object();</strong></span><br />
      <span class="v3"><strong>d.property = "...";</strong></span> - задание свойства (будет добавлено в объект).<br />
      <span class="v3"><strong>d.make = function () {...};</strong></span> - задание метода (будет добавлен в объект).<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объекты могуть быть вложенными:<br />
      <code>
        <strong>
          var d = {<br />
            &nbsp;свойство: значение,<br />
              &nbsp;&nbsp;h: {<br />
                &nbsp;&nbsp;&nbsp;...<br />
              &nbsp;&nbsp;}<br />
          }<br />
        </strong>
      </code><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Или через конструктор:<br />
      <code>
        <strong>
          d.h = new Object();
        </strong>
      </code><br />

      <span class="v3"><strong>d.h.свойство = "";</strong></span> - добавление свойства вложенному объекту.<br />
      <span class="v3"><strong>d.h.make = function () {...}</strong></span> - добавление метода вложенному объекту.<br />
      <br />

      <span class="v"><strong># Работа с объектом</strong></span><br />
      <span class="v3"><strong>объект.свойство</strong></span> - получение значения свойства.<br />
      <span class="v3"><strong>объект['свойство']</strong></span> - получение значения свойства (другой способ). Такой метод позволяет использовать любую строку в качестве значения свойства. Если свойство не определено, то <strong>undefined</strong>.<br />
      <span class="v3"><strong>объект.метод()</strong></span> - выполнение метода.<br />
      <span class="v3"><strong>объект.свойство = "значение"</strong></span> - изменить свойство если такое же, или добавляется новое свойство.<br />
      <span class="v3"><strong>объект['свойство'] = "значение"</strong></span> - второй вариант.<br />
      <span class="v3"><strong>delete объект.свойство</strong></span> - удаление свойства из объекта, если оно присутствует. Если удалить свойство (переопределенное)
      , то возьмет его у объекта (если такое же).<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Перебор свойств объекта:<br />
      <code>
        <strong>
          for (property in объект) {<br />
            действия с объект[property];<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Проверка на наличие свойства у объекта:<br />
      <code>
        <strong>
          if ("свойство" in объект) {<br />
            ...<br />
          }
        </strong>
      </code><br /><br />

      <span class="v"><strong># Указатели</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объекты никогда не копируются, они передаются с помощью указателей.<br />
      <span class="v3"><strong>var a = {}, b = {}, c = {};</strong></span> - указывает на разные пустые объекты.<br />
      <span class="v3"><strong>var a = b = c = {};</strong></span> - указыв. на один пустой объект.<br /><br />

      <span class="v"><strong># Копирование / Клонирование объекта</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В переменной, которой присвоен объект, хранится не сам объект, а адрес его места в памяти. При копировании переменной с объектом -
      копируется ссылка, а объект остается в единственном экземпляре. Изменение объекта в одной переменной отразится в других.<br />
      <code>
        <strong>
          //Клонирование объекта<br />
          var object = {<br />
            &nbsp;//свойства и методы<br />
          }<br /><br />

          var clone = {};<br />
          for (var key in object) {<br />
            &nbsp;clone[key] = object[key];<br />
          }<br />
        </strong>
      </code>
      <br />

      <span class="v"><strong># Глобальное воздействие</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если идет разработка модуля, который может быть запущен на Web-странице наряду с другими модулями, то нужно остерегаться перекрытия имен переменных.
      Применение замыканий способствует тому, что внутреннее состояние не менялось извне.<br />
      <br />

      <span class="v"><strong># Консоль</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При раскрытии свойств объекта - браузер всегда выводит их текущее значение.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Date">
  <p>
    <em>============================ Объект Date:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для работы с датой / временем.<br />
      <code>
        <strong>
          var now = new Date();<br />
          alert(now);<br />
          //Выведет текущую дату
        </strong>
      </code><br /><br />

      <span class="v"><strong># Методы</strong></span><br />
      <span class="v3"><strong>.getDate()</strong></span> - число месяца.<br />
      <span class="v3"><strong>.getMonth()</strong></span> - номер месяца.<br />
      <span class="v3"><strong>.getFullYear()</strong></span> - год.<br />
      <span class="v3"><strong>.getYear()</strong></span> - количество лет прошедшее с 1900 года.<br />
      <span class="v3"><strong>.getDay()</strong></span> - номер дня недели.<br />
      <span class="v3"><strong>.getHours()</strong></span> - час.<br />
      <span class="v3"><strong>.getMinutes()</strong></span> - минута.<br />
      <span class="v3"><strong>.getSeconds()</strong></span> - секунды.<br />
      <span class="v3"><strong>.getMilliseconds()</strong></span> - миллисекунды.<br />
      <span class="v3"><strong>.getTime()</strong></span> - количество миллисекунды между датой установленной в объекте с 1970-го года.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Тоже самое, но с <strong>set</strong> - установка нового значения. <strong>get</strong> - получение значения.<br />
      <br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для перевода из числовых значений в более привычные названия - используются массивы.<br />
      <code>
        <strong>
          var arr = ["month", ...];<br />
          arr[object.getMonth()];<br />
        </strong>
      </code>
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="Met2">
  <p>
    <em>============================ Методы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Свойства, значения которых является функция.<br />
      <span class="v3"><strong>this</strong></span> - ссылка на текущий объект (если функция запущена как свойство объекта).<br />
      <br />

      <span class="v3"><strong>.apply()</strong></span> - позволяет передавать аргументы в функцию, к которой идет обращение, но в виде единого массива.<br />
      <span class="v3"><strong>.call()</strong></span> - этот метод передает в виде отдельных аргументов.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Проверка типа объекта:<br />
      <code>
        <strong>
          var x = new Array(10);<br />
           &nbsp;if (x instanceof Array) {<br />
             &nbsp;&nbsp;...<br />
           &nbsp;}<br />
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Проверка на тип данных:<br />
      <code>
        <strong>
          function l(арг1) {<br />
            &nbsp;if (typeof арг1 != "тип_данных") {<br />
              &nbsp;&nbsp;...<br />
            &nbsp;} else {<br />
              &nbsp;&nbsp;...<br />
            &nbsp;}<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Prot">
  <p>
    <em>============================ Конструкторы / Прототипы:</em><br />
      <span class="v"><strong># Конструкторы</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Конструктор - функция, которая конфигурирует объект для дальнейшего использования.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Стандартные конструкторы:<br />
      <span class="v3"><strong>var date = new Date();</strong></span> - конструктор даты и текущего времени.<br />
      <span class="v3"><strong>var n = new Number(число);</strong></span> - конструктор для числовых объектов.<br />
      <span class="v3"><strong>var str = new String();</strong></span> - конструктор для строковых объектов.<br />
      <span class="v3"><strong>var arr = new Array();</strong></span> - конструктор массивов.<br />
      <span class="v3"><strong>var obj = new Object()</strong></span> - конструктор объектов.<br />
      <span class="v3"><strong>var f = new Function('арг1', 'арг2', 'код')</strong></span> - конструктор функций.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Динамическое создание анонимных функций и их компиляция. Принимает неограниченное
  количество параметров, но последний параметр всегда является телом функции.
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Использование огромного числа таких функций может сильно ударить по производительности.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Угроза безопасности кода. Не рекомендуется их использование.
</div>

  <p>
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Пользовательский конструктор (все настройки через <span class="v3"><strong>this</strong></span>). В конструкторе название локальных переменных начинается с <strong>_</strong>:<br />
    <code>
      <strong>
        function Имя_функции (арг1, арг2) {<br />
          &nbsp;this.свойство = арг1;  &nbsp;&nbsp;//Задание свойств (аргументы станут значениями свойств)<br />
          &nbsp;this.свойство2 = арг2;<br />
          &nbsp;this.do = function () { return this.арг1 * this.арг2; }  &nbsp;&nbsp;//Задание метода<br />
        }<br /><br />

        //Создание объекта<br />
        var p = new Имя_функции(10, 20);<br /><br />

        p.свойство; &nbsp;&nbsp;//Обращение к свойству<br />
        p.do(); &nbsp;&nbsp;//Обращение к методу<br /><br /><br />

        //Или...<br />
        function C(a, b) {<br />
          &nbsp;return {<br />
            &nbsp;&nbsp;property1: a,<br />
            &nbsp;&nbsp;property2: b,<br />
            &nbsp;&nbsp;funP : function() {<br />
              &nbsp;&nbsp;&nbsp;... this.property1;<br />
            &nbsp;&nbsp;}<br />
          &nbsp;}<br />
        }<br /><br />

        var t = C(a, b);
      </strong>
    </code><br /><br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Условие в конструкторе:<br />
    <code>
      <strong>
        if (значение свойства === значение) {<br />
          &nbsp;this.do = function() {...}<br />
        }
      </strong>
    </code><br /><br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Привязка функции (создание новой функции с тем же телом и ОВФ, что и у функции, но с привязской к объекту):<br />
    <code>
      <strong>var переменная = имя_функции.bind(object)</strong>
    </code><br /><br />

    <span class="v"><strong># Геттер / Сеттер</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Геттер - получение значения переменной, сеттер - установка значения переменной.<br />
    <code>
      <strong>
        //В конструкторе<br />
        var _a = a;<br />
        this.getA = function() {<br />
          &nbsp;return _a;<br />
        }<br /><br />

        this.setA = function(a) {<br />
          &nbsp;if (typeof a === "number" || a > 0 && a < 100) {<br />
            &nbsp;&nbsp;_a = a;<br />
          &nbsp;} else {<br />
            &nbsp;&nbsp;console.log('Недопустимое значение');<br />
          &nbsp;}
        }
      </strong>
    </code>
  </p>

  <p>
    <span class="v"><strong># Прототипы</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Каждый объект связан с с прототипом объекта (свойство <strong>__proto__</strong>), из которого он наследует свойства. Все объекты созданные как литеральные автоматически связаны
    с <span class="v3"><strong>object.prototype</strong></span>, который является стандартным объектом JS.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Решает проблему с дублированием методов.<br />
    <br />

    <code>
      <strong>
        //Экземпляр объекта<br />
        function S (арг1, арг2) {<br />
          &nbsp;this.свойство = арг1;<br />
          &nbsp;this.свойство2 = арг2;<br />
        }<br /><br />

        Имя_функции.prototype.do = function() { return this.свойство * this.свойство2; }<br /><br />

        var s = new S(10, 30); //Создание объекта<br />
        s.do(); //Обращение
      </strong>
    </code><br /><br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Сравнение объектов:<br />
    - При попытке сравнить объекты классическим способом - будут сравниваться их адреса.<br /><br />
    <code>
      <strong>
        //Проверка равенства объектов (на совпадение свойств):<br /><br />

        s.prototype.equals = function (object2) {<br />
          &nbsp;if (this.свойство === object2.свойство) {<br />
            &nbsp;&nbsp;return true;<br />
          &nbsp;} else {<br />
            &nbsp;&nbsp;return false;<br />
          &nbsp;}<br />
        }
      </strong>
    </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Метод прототипа будет доступен каждому экземпляру, но хранится будет
  в прототипе (чтобы метод не дублировался в каждом новом объекте). Метод сначала ищется в объекте, если не находит то
  автоматически переходит в прототип и ищет там (в случае нахождения - присваивается объекту). В случае ненахождения - ошибка.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Прототипу можно задавать и свойства.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Значение в прототипе может быть изменено только через <span class="v3"><strong>Имя_функции.prototype.свойство</strong></span>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> При попытке смены значения, которое было унаследовано от прототипа - в объекте
  будет создана копия свойства и перекроет его (свойство в прототипе не изменится).
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Pro">
  <p>
    <em>============================ Пространство имен:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Решение проблемы с отсутствием пространства имен - создание пустого объекта,
      который будет выполнять функцию пространства имен. Имя модуля должно быть такое же, как у имени файла. Глобальное имя, которое
      будет вмещать все остальные имена. Чужие переменные не будут перекрывать методы и функции.<br />
      <br />

      <code>
        <strong>
          var Имя_файла = {};<br />
          Имя_файла.переменная = "..."; //Как свойство<br />
          Имя_файла.метод = function() {...}
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Или создание анонимной функции. Отсутствие имени означает отстутствие
      глобального имени. В теле такой функции можно объявлять любые переменные - не приведет к созданию глобальных переменных.<br />
      <br />

      <code>
        <strong>
          (function() {<br />
            var переменная = "...";<br />
          }) (); //Вызов<br />
        </strong>
      </code>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Подходит для проверки данных, введенных в форму.
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Нельзя использовать какой-либо метод из такой функкции (извне), т.е. как "библиотека" использование
  не подойдет.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Inc">
  <p>
    <em>============================ Инкапсуляция:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Закрытые методы, т.е. доступные только в теле конструктора / функции.<br />
      <br />

      <code>
        <strong>
          var s = function() {<br /><br />

            &nbsp;//Закрытый метод<br />
            &nbsp;var m = function () {<br />
              &nbsp;&nbsp;...<br />
            &nbsp;};<br /><br />

            &nbsp;//Открытый метод<br />
            &nbsp;this.p = function() {<br />
              &nbsp;&nbsp;...<br />
              &nbsp;&nbsp;m();<br />
            &nbsp;}<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Nas">
  <p>
    <em>============================ Наследование:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Конструкторы:<br />
      <code>
        <strong>
          function U(a, b) {<br />
            &nbsp;return {<br />
              &nbsp;&nbsp;свойства;<br />
              &nbsp;&nbsp;методы;<br />
            &nbsp;}<br />
          }<br /><br />

          function Y(a, b) {<br />
            &nbsp;U.call(this, a, b); //передача всех методов / свойств<br />
          }<br /><br />

          Y.prototype = Object.create(U.prototype); //присвоение прототипа
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Подмена прототипов:<br />
      <br />

      <code>
        <strong>
          function D(арг1) {<br />
            &nbsp;this.свойство = арг1;<br />
            &nbsp;this.do = function() {...}<br />
          }<br /><br />

          function T(арг1) {<br />
            &nbsp;this.свойство = арг1;<br />
          }<br /><br />

          var d = new D("арг1");<br /><br />

          //Подмена прототипа - обращение будет осуществляться к D<br />
          T.prototype = d;<br />
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pol">
  <p>
    <em>============================ Полиморфизм:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Замещение методов.<br />
      <br />

      <code>
        <strong>
          function D(арг1) {<br />
            &nbsp;this.свойство = арг1;<br />
            &nbsp;this.do = function() {...}<br />
          }<br /><br />

          function T(арг1) {<br />
            &nbsp;this.свойство = арг1;<br />
            &nbsp;this.do = function() {...} //Переопределение метода<br />
          }<br /><br />

          var d = new D("арг1");<br /><br />

          T.prototype = d;<br /><br />

          //Хоть и подменен прототип, но T будет использовать свой метод do
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
