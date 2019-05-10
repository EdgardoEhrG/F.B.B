<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Sass</title>

<link rel="shortcut icon" href="../Images/I/sass.png" type="image/x-icon">

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
        <a class="navbar-brand">Sass</a>
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
  <h3 class="panel-title">Препроцессор CSS</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Sass">* Sass</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://sass-scss.ru/guide/">* Sass Docs</a><br />
          <a href="https://sass-scss.ru/install/">* Установка Sass</a><br />
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
              - Цвета можно смешивать.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Расширение - <strong>.scss</strong><br />
              - CSS-файл является корректным SCSS-файлом.<br />
              - На большинстве хостингов Sass не поддерживается (браузеры не понимают Sass напрямую) в чистом виде и файл надо
              предварительно скомпилировать в CSS.<br />
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

<button class="button" id="CommB">Комментарии</button>
<button class="button" id="PerB">Переменные</button>
<button class="button" id="VloB">Вложения</button>
<button class="button" id="PriB">Примеси</button>
<button class="button" id="FunB">Функции</button>
<button class="button" id="RasB">Расширения</button>
<button class="button" id="ZapB">Заполнители</button>
<button class="button" id="CycB">Циклы</button>
<button class="button" id="EacB">@each</button>
<button class="button" id="UslB">Условия</button>
<button class="button" id="ImpB">Импорт</button>
<button class="button" id="CompB">Компиляция</button>


<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v2"><strong>//</strong></span> - однострочный комментарий. В CSS-файл не переносится.<br />
      <span class="v2"><strong>/*...*/</strong></span> - многострочный комментарий. В CSS-файл переносится.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
    <em>============================ Переменные:</em><br />
      <span class="v2"><strong>$y : #fce473;</strong></span> - объявление переменной и присваивание свойства (оттенок цвета).<br /><br />
      <span class="v2"><strong>p { border: 5px solid $y; }</strong></span> - использование переменной.<br /><br />
      <span class="v2"><strong>$y : $z;</strong></span> - присвоение переменной значения другой переменной.<br /><br />
      <span class="v2"><strong>$n: "Text"; $t: "#{$n} text"</strong></span> - интерполяция.
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Если переменная объявлена во вложенном элементе - она локальна, то есть доступна только этому элементу.
  Если объявлена вне элементов - глобальна. Метка <strong>!global</strong> превращает локальную переменную в глобальную.
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Переменная может содержать <strong>"-"</strong> и <strong>"_"</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Переменной можно задать любое значение свойства, применяемое в CSS.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Когда файл <strong>.scss</strong> будет скомпилирован в файл <strong>.css</strong>, то все переменные будут заменены на их реальное значение.
</div>

  <p>
    <span class="v"><strong># Вычисления</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Поддерживает все математические операции, включая деление с остатком и логические операторы.<br />

    <code>
      <strong>
        $width: 960px;<br />
        $column: $width/12;<br />
        .sidebar {<br />
          &nbsp;width: 4*$column;<br />
        }
      </strong>
    </code>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Если использовать одну единицу измерения на все выражение - результат будет с той же единицей, иначе - безразмерное значение.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Могут выполняться различные математические операции с использованием скобок.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Деление выполнится если используются переменные, или если деление происходит как часть уравнения + ().<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Разные единицы CSS несовместимы друг с другом - нельзя сложить 10% и 500px, иначе будет ошибка
  и компиляция в CSS не произойдет. Значения должны быть с одинаковой единицей измерения.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Vlo">
  <p>
    <em>============================ Вложения (иерархия селекторов):</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Комбинация нескольких классов и тегов для запрета взаимоисключающих правил CSS. Избегают повторного написания кода и понижают специфичность селекторов.<br />
      <br />
      Вместо (CSS):<br />
      <code>
        <strong>
          .title{}<br />
          .title strong{}<br />
          .title + ul {}<br />
        </strong>
      </code>
      <br />
      Будет (SCSS):<br />
      <code>
        <strong>
          .title {<br />
            &nbsp;strong {}<br />
            &nbsp;+ ul{}<br />
          }
        </strong>
      </code><br /><br />

      Вложение вложения (SCSS):<br />
      <code>
        <strong>
          .title {<br />
            &nbsp;<span>p{</span><br />
              &nbsp;&nbsp;<span>a{</span><br />
                &nbsp;&nbsp;&nbsp;<span>&:hover {}</span><br />
              &nbsp;&nbsp;<span>}</span><br />
            &nbsp;<span> }</span><br />
          }<br />
        </strong>
      </code></p><br /><br />

      Обратное вложение:<br>
      <code>
        <strong>
          .class-a {<br>
            &nbsp;property: value;<br>
            <br>

            &nbsp;.class-b & {<br>
              &nbsp;&nbsp;property: value;<br>
            &nbsp;}<br>
          }<br>
          <br>

          // После компиляции:<br>
          .class-a { property: value; }<br>
          <br>

          .class-b .class-a { property: value; }<br>
        </strong>
      </code><br>

      Вложенное свойство:<br />
      <code>
        <strong>
          свойство: {<br />
            &nbsp;size: ;<br />
            &nbsp;style: ;<br />
          }<br />
        </strong>
      </code><br />

      Вложенное @media:<br />
      <code>
        <strong>
          .class {<br />
            &nbsp;property: value;<br />
            <br />

            &nbsp;@media screen and (max-width: 1280px) { property: value; }<br />
          }
        </strong>
      </code><br />

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>&</strong> - ярлык для родительского селектора. Используется для добавления классов, псевдоклассов или псевдоэлементов.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Вложение <strong>@-media</strong> в элемент создаст медиа-запрос для этого же элемента.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Такие свойства как <strong>font</strong>, <strong>margin</strong>, <strong>padding</strong> и <strong>border</strong> могут быть вложенными.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Pri">
  <p>
    <em>============================ Примеси:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Когда надоест писать один и тот же код снова и снова - есть примеси или функция CSS. Основная цель - повторное использование набора свойств.
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Примеси позволяют определить в одном месте свойства.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Предыдущая примесь может быть использована в других правилах.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Список свойств повторяется столько раз, сколько вызывается.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> На примесь можно ссылаться в любом правиле CSS.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Могут принимать параметры (переменные). Можно создать и дополнительные параметры, со значениями (через ":").<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> В имени примести можно использовать "-" и "_".<br />
</div>

 <p>
  <code>
    <strong>
      @mixin имя функции($a, $b, $c) {<br />
        &nbsp;<span>свойство: $a $b $c;</span><br />
      }<br />

      #element {<br />
        &nbsp;@include имя функции(2px, solid, black); //использование примесей (ссылка)<br />
      }
    </strong>
  </code>
  <br />
 </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
      <span class="v"><strong># Математические функции</strong></span><br />
      <span class="v2"><strong>percentage()</strong></span> - превращение значения в проценты.<br />
      <span class="v2"><strong>round()</strong></span> - округление.<br />
      <span class="v2"><strong>ceil()</strong></span> - округление в большую сторону.<br />
      <span class="v2"><strong>floor()</strong></span> - округление в меньшую сторону.<br />
      <span class="v2"><strong>abs()</strong></span> - абсолютное значение заданного числа.<br />
      <br />

      <span class="v"><strong># Цвет (для RGBa)</strong></span><br />
      <span class="v2"><strong>invert()</strong></span> - инверсия цветового оттенка.<br />
      <span class="v2"><strong>complement()</strong></span> - поиск комплементарных цветов.<br />
      <span class="v2"><strong>mix()</strong></span> - смешивание цветов.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Ras">
  <p>
   <em>============================ Расширения:</em><br />
     <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для того, чтобы не писать множество раз один и тот же набор свойств можно:<br />
     1) Использовать общий класс.<br />
     2) Группировать селекторы.<br />
     3) Использовать расширения в Sass!<br />
     <span class="v2"><strong>@extend .имя_класса;</strong></span> - позволяет наследовать свойства CSS от одного селектора.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Перегруппирует общие свойства под списком селекторов. Список прост в обслуживании, так как
  добавляет селекторы один за другим и непосредственно в соответствующем селекторе, а HTML остается семантическим,
  поскольку каждый элемент сохраняет свое описательное имя класса.
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> У <strong>@extend</strong> нет параметров как у примесей, потому что примеси не группируют селекторы. Записывает
  общие свойства только один раз.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Создает класс, а после компиляции он остается.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Zap">
  <p>
   <em>============================ Заполнители:</em><br />
     <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Заполнитель - необходим для того, чтобы вставлять повторяющиеся фрагменты кода. К имени класса вместо "." ставится "%".<br />
     <code>
      <strong>
       %class {<br />
         &nbsp;//свойства;<br />
       }<br /><br />

       #element {
         &nbsp;@extend %class;
       }
      </strong>
    </code>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Такое правило предоставляет место для общих свойств и в сгенерированом CSS-файле
  такой селектор не будет включен (минимизация кода).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> После компиляции новый класс не будет создан в отличие от расширения.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Cyc">
  <p>
    <em>============================ Циклы:</em><br />
      <code>
        <strong>
          @for $i from 0 through 3 {<br />
            &nbsp;.class#{$i} {<br />
              &nbsp;&nbsp;width: 30px * $i;<br />
            }<br />
          }<br />
        </strong>
      </code>
  </p>

<div class="alert alert-success" role="alert">
  <strong>$i</strong> - переменная-счетчик, номер итерации.<br />
  <strong>1-е число</strong> - начальное значение итерации.<br />
  <strong>2-е число</strong> - конечное значение.<br />
  <br />
  <strong>@for $i from through</strong> - включает значение конца.<br />
  <strong>@for $i from to</strong> - не включает.<br />
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Числа могут быть отрицательными + цикл может начинаться с большего числа, тогда значение <strong>$i</strong> будет
  уменьшаться.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>$i</strong> можно подставлять внутри цикла, куда потребуется + использовать в вычислениях. В именах класса
  запись типа - <strong>#{$i}</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Циклы удобно использовать для CSS-спрайтов.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Eac">
  <p>
    <em>============================ @each:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Позволяет пробегаться по списку значений и к каждому значению
      применять набор команд.<br />
      <br />

      <code>
        <strong>
          @each $var in list1, list2, list3 {<br />
            &nbsp;.#{$var} {<br />
              &nbsp;&nbsp;background: url(Images/#{$var}.png);<br />
            &nbsp;}<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>$var</strong> - переменная, которая последовательно принимает значения
  из списка.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Usl">
  <p>
    <em>============================ Условия:</em><br />
      <code>
        <strong>
          @if (условие 1) {<br />
            &nbsp;//команды<br />
          }<br />
          @else if (условие 2) {<br />
            &nbsp;//команды<br />
          }<br />
          @else {<br />
            &nbsp;//команды<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Можно использовать: >, <, >=, <=, ==, !=, true, false.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Imp">
  <p>
    <em>============================ Импорт файлов:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В CSS импорт влияет на время загрузки страницы, из-за того, что каждый файл требует отдельного
      сетевого запроса. Чем больше таких файлов, тем хуже для производительности сайта. В Sass нет проблем с производительностью, потому что множество
      маленьких файлов в итоге объединяются в один единственный стилевой файл. Сохраняется удобство редактирования файлов и подключение библиотек с высокой
      скоростью загрузки стилей.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Рекомендация:<br />
      1) Создать файл по типу <strong>_имя_файла.scss</strong>.<br />
      2) Подключить с помощью <strong>@import "имя_файла"</strong> (без нижнего подчеркивания + расширение можно опустить) и в начале файла.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Comp">
  <p>
    <em>============================ Компиляция в CSS-файл:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Через Cmd:<br />
      <strong>sass --watch</strong> имя файла (файл Sass) <strong>.scss:</strong> имя файла (конечный файл) <strong>.css</strong> -
      сообщить Sass следить за изменениями выбранного файла и компилировать его в CSS. <strong>Ctrl+C</strong> - прекращение слежки.<br /><br />
      <strong>sass</strong> имя файла (файл Sass) <strong>.scss:</strong> имя файла (конечный файл) <strong>.css</strong> - компиляция.<br /><br />
      <strong>sass --watch assets/sass : public/css</strong> - отслеживание и компиляция папок.<br /><br />
      <strong>sass-convert файл.sass файл.scss</strong> - конвертация Sass-файла в SCSS-файл. Может выполняться и обратно.<br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Через <strong>Scout</strong> (технология Adobe Air, неторопливость в работе, отслеживание изменения файлов в режиме реального времени
      и обновление существующих стилей автоматически, программа, требуется наличие Java).<br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Через <strong>Sass Meister</strong> - онлайновый инструмент. Можно смотреть получаемый результат в режиме реального времени.
      Поддерживает разный синтаксис, подсветку кода, множество расширений, выбор тем и внешние библиотеки + связь с GitHub. Код CSS получается
      автоматически из Sass и напрямую его добавить нельзя.<br />
  </p>
</div>

  </div>
</div>

</body>
</html>
