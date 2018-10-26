<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Less</title>

<link rel="shortcut icon" href="../Images/I/less.png" type="image/x-icon">

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
        <a class="navbar-brand">Less</a>
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
    <h3 class="panel-title">Динамический язык стилей / Препроцессор CSS</h3>
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
          <a href="https://ru.wikipedia.org/wiki/LESS_(%D1%8F%D0%B7%D1%8B%D0%BA_%D1%81%D1%82%D0%B8%D0%BB%D0%B5%D0%B9)">* Less</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://lesscss.org/">* Less Docs</a><br />
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
              - Проверка синтаксиса Less-кода машиной.<br />
              - Облегчение поддержки крупных проектов.<br />
              - Разбивка Less-файлов на несколько компонентов позволяет ускорить разработку в команде.<br />
              <br />

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
              - Отсутствие циклов (только имитации).<br />
              - При работе на стороне клиента скорость загрузки страницы упадет.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Преобразование Less-кода в CSS прямо в браузере (специальная JS-библиотека) или на сервере под управлением Node.js.<br />
              - Расширение файлов <strong>.less</strong><br />
              - Работает в стиле Lazy Loading - если в коде встречается переменная, значение которой выше не определено, то работа с ней
              откладывается, пока не встретится инициализация переменной (работа с кодом ухудшается - нельзя читать код сверху вниз, но число возможных ошибок меньше).<br />
              - Подходит для малых проектов.<br />
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

<button class="button" id="PodB">Подключение / компиляция</button>
<button class="button" id="CommB">Комментарии</button>
<button class="button" id="PerB">Переменные</button>
<button class="button" id="VloB">Вложения</button>
<button class="button" id="PriB">Примеси</button>
<button class="button" id="ImpB">Импорт</button>

<!-- The Article -->

<div class="textblock" id="Pod">
  <p>
    <em>============================ Подключение:</em><br />
      <span class="v2"><strong>&lt;link rel="stylesheet/less" href="Styles.less"&gt;</strong></span> - подключение файла стилей Less<br />
      <span class="v2"><strong>&lt;script scr="less.min.js"&gt;&lt;/script&gt;</strong></span> - специальная библиотека, которая компилирует Less-код в CSS-код прямо в браузере.
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Для ускорения загрузки страницы лучше использовать скомпилированный CSS-файл.
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Компиляция с помощью <strong>less.js</strong> происходит только под управлением сервера и не работает для локальных файлов.
</div>

  <p>
    <span class="v"><strong># Слежение Less за именениями кода</strong></span><br />
    <span class="v2"><strong>&lt;script&gt; less = {env: 'development'};&lt;/script&gt;</strong></span><br />
    <span class="v2"><strong>&lt;script scr="less.min.js"&gt;&lt;/script&gt;</strong></span><br />
    <span class="v2"><strong>&lt;script&gt;less.watch()&lt;/script&gt;</strong></span>
  </p>

  <p>
    <span class="v"><strong># Компиляция с помощью Node.js</strong></span><br />
    <strong>$ lessc имя_файла.less имя_файла.css</strong> - компиляция Less-файла в CSS-файл.<br />
    <strong>$ lessc --clear-css имя_файла.less имя_файла.min.css</strong> - компиляция Less-файла в сжатый CSS-файл (без пробелов).
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
     <span class="v2"><strong>//</strong></span> - однострочный комментарий. <br />
     <span class="v2"><strong>/*...*/</strong></span> - многострочный комментарий.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Существуют вложенные комментарии <span class="v2"><strong>/*//*/</strong></span> и <span class="v2"><strong>///**/</strong></span> , но
  одинаковый тип внутри другого недопустим.
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Любые комментарии в итоговом файле CSS будут удалены, однако комментарий типа
  <span class="v2"><strong>/*!...*/</strong></span> будет сохранен. Некоторые компиляторы сохраняют многострочные комментарии
  и удаляют их лишь при явно заданной минимизации кода.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
    <em>============================ Переменные:</em><br />
      <span class="v2"><strong>@color : green;</strong></span> - объявление и присваивание значения переменной.
      <span class="v2"><strong>@color2 : @color;</strong></span> - копирование значения переменной.<br />
      <br />

      <code>
        <strong>
          //Интерполяция - получение значения одной переменной в зависимости от другой<br />
          @a : значение;<br />
          @text = "text, @{a}";<br />
        </strong>
      </code>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> В имени переменной можно использовать дефис.
</div>

  <p>
    <span class="v"><strong># Дополнительные возможности:</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Можно добавлять в качестве имен селекторов, путей и прочее. Но синтаксис меняется на
    <span class="v2"><strong>@{имя переменной}</strong></span>.<br /><br />

    <code>
      <strong>
        @block : block;     //Как имя класса<br />
        @path-img: "../img";<br /><br />

        @{block} {<br />
          background: url("@{path-img}/pic.png") no-repeat;
        }
      </strong>
    </code><br /><br />

      <span class="v"><strong># Вычисления</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Переменные можно складывать, вычитать, умножать и делить между собой или с другими значениями, если
      данные сочетаются.<br /><br />

      <code>
        <strong>
          @n : 3px;<br />
          @c-w : 100% / @n;    //Результат будет 33.3%
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Vlo">
 <p>
    <em>============================ Вложения:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Компактность кода.<br />

<code>
<pre>
<strong>
  селектор-родитель {
    свойство : значение;
    дочерний селектор {
      свойство : значение;
      селектор-потомок {
        свойство : значение;
        &:псевдокласс или псевдоэлемент {
          свойство : значение;
        }
      }
    }
  }
</strong>
</pre>
</code>

  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> <strong>&</strong> - сообщает Less, что вместо амперсанда нужно подставить селектор-родитель. Используется для добавления классов, псевдоклассов или
  псевдоэлементов.
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Не должно быть больше 3-х вложений, максимально допустимый уровень - 5.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Pri">
  <p>
    <em>============================ Примеси:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Позволяют добавлять существующие стилевые правила к другим селекторам. Сокращают код.<br />
      <code>
        <strong>
          .l-mixin {<br />
            свойство : значение;<br />
          }<br /><br />
          .class {<br />
            .l-mixin;<br />
            свойство : значение;<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Для класса вызов примеси просиходит через <strong>"."</strong>, а для идентификатора - через <strong>"#"</strong>.<br />
  <strong>"()"</strong> - используются по желанию.
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Повторяющиеся свойства не группируются по селекторам. Если примесь нужно сохранить как класс, то вызывать без <strong>"()"</strong>,
  а если использовать с ними, то примесь удалится в CSS-файле (не превратится в класс).
</div>

  <p>
    <span class="v"><strong># Переменные как аргументы</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Принимают переменные.<br />
    <code>
      <strong>
        .animation(@name, @time, @time-fun) {<br />
          animation : @name @time @time-fun;<br />
        }<br /><br />
        body {<br />
          .animation(city, 30s, infinite);<br />
        }
      </strong>
    </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Примеси удобно использовать для свойств, которые работают в браузерах с префиксами. Позволяют избежать
  ошибок при копировании значений, замена при компиляции автоматически.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Imp">
  <p>
    <em>============================ Импорт файлов:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В CSS импорт влияет на время загрузки страницы, из-за того, что каждый файл требует отдельного
      сетевого запроса. Чем больше таких файлов, тем хуже для производительности сайта. В Less нет проблем с производительностью, потому что множество
      маленьких файлов в итоге объединяются в один единственный стилевой файл. Сохраняется удобство редактирования файлов с высокой
      скоростью загрузки стилей.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Рекомендация:<br />
      1) Создать файл по типу <strong>_имя_файла.less</strong>.<br />
      2) Подключить с помощью <strong>@import "имя_файла"</strong> (без нижнего подчеркивания + расширение можно опустить) и в начале файла.
  </p>
</div>

  </div>
</div>

</body>
</html>
