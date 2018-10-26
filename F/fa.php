<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Font Awesome</title>

<link rel="shortcut icon" href="../Images/I/FA.png" type="image/x-icon">

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
        <a class="navbar-brand"><i class="fa fa-font-awesome colored" aria-hidden="true"></i> Font Awesome</a>
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
    <h3 class="panel-title">Иконки</h3>
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
          <a href="https://en.wikipedia.org/wiki/Font_Awesome">* Font Awesome</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://fontawesome.io/">* Font Awesome Docs</a><br />
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
              - Все иконки векторные и масштабируются в самых широких пределах, без ухудшения их качества.<br />
              - Поскольку иконка представляет собой текстовый символ, то к нему применяются любые стилевые свойства, доступные для
              шрифтов. Допустимо изменять цвет, фон, добавлять тень и т. д.<br />
              - Иконки хорошо работают во всех браузерах, включая старый IE8.<br />
              - Иконки прекрасно сочетаются с различными фреймворками вроде Bootstrap.<br />
              - Font Awesome включает не только шрифт, но и стилевой файл, в котором уже прописано несколько типовых решений, вроде
              размеров иконок, поворота, выравнивания, добавления рамки и др. Достаточно только подключить стиль и назначить
              элементу нужный класс.<br />
              - Иконки можно поворачивать, анимировать и комбинировать между собой, накладывая одну иконку поверх другой. Это ещё
              больше расширяет возможное количество вариантов.<br />
              - Шрифт свободен для коммерческого использования.<br />
              <br />

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
              - Символы могут быть только одного цвета. Это ограничение частично обходится объединением иконок разного цвета друг
              с другом, а также с помощью эффектов CSS.<br />
              - Font Awesome как и большинство универсальных библиотек слишком избыточна, поэтому ради десятка используемых на сайте
              иконок придётся подключать несколько сотен. В этом случае помогает собственная сборка, когда вы включаете в шрифт
              только те иконки, которые вам действительно нужны.<br />
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

<button class="button" id="PodB">Подключение</button>
<button class="button" id="VyvB">Вывод иконки</button>
<button class="button" id="RazB">Размер</button>
<button class="button" id="ColB">Цвет</button>
<button class="button" id="PovB">Поворот</button>
<button class="button" id="AniB">Анимация</button>
<button class="button" id="ObeB">Объединение</button>
<button class="button" id="RabB">Работа с Bootstrap</button>
<button class="button" id="SvoB">Своя сборка</button>

<!-- The Article -->

<div class="textblock" id="Pod">
  <p>
    <em>============================ Подключение:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Скачать архив и распаковать в проект.<br />
      <span class="v2"><strong>&lt;link rel="stylesheet" href="css/font-awesome.min.css"&gt;</strong></span> - подключение.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Vyv">
  <p>
    <em>============================ Вывод иконки:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Иконки выводятся через псевдокласс <span class="v2"><strong>::before</strong></span>, поэтому к любому элементу достаточно добавить класс с именем иконки.
      Обычно применяется элемент <span class="v2"><strong>&lt;i&gt;</strong></span>, но можно использовать и любой другой строчный элемент, например: <span class="v2"><strong>&lt;span&gt;</strong></span> и др.
      Для <span class="v2"><strong>&lt;i&gt;</strong></span> указывается два основных класса — <span class="v4"><strong>fa</strong></span> и <span class="v4"><strong>fa-icon</strong></span>, где вместо <span class="v4"><strong>icon</strong></span> пишется имя иконки.
      Сам элемент <span class="v2"><strong>&lt;i&gt;</strong></span> пустой и вставляется в то место на странице, где требуется вывод иконки. Размер её совпадает с размером текущего текста.<br />
      <a href="http://fontawesome.io/icons/">* Имена иконок</a><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Raz">
  <p>
    <em>============================ Размеры иконок:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Размер любой иконки из набора мы можем изменить с помощью свойства <span class="v2"><strong>font-size</strong></span>, переопределив его в своём стиле.
      Также Font Awesome предлагает пять готовых размеров - <span class="v4"><strong>fa-lg</strong></span>,
      <span class="v4"><strong>fa-2x</strong></span>, <span class="v4"><strong>fa-3x</strong></span>, <span class="v4"><strong>fa-4x</strong></span>, <span class="v4"><strong>fa-5x</strong></span>.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Col">
  <p>
    <em>============================ Цвет и прочие модификаторы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Поскольку иконка это текстовый символ, то к нему применимы стилевые свойства <span class="v2"><strong>color</strong></span>, <span class="v2"><strong>background</strong></span>, <span class="v2"><strong>text-shadow</strong></span>,
      <span class="v2"><strong>opacity</strong></span>, <span class="v2"><strong>border-radius</strong></span> и <span class="v2"><strong>text-shadow</strong></span>, задающие оформление текста. Font Awesome вводит специальный класс <span class="v4"><strong>fa-inverse</strong></span>, изменяющий цвет иконок на белый, поэтому в стилях для иконки книжки цвет не указывается.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Для списков Font Awesome использует специальный класс <span class="v4"><strong>fa-ul</strong></span> для элемента <span class="v2"><strong>&lt;ul&gt;</strong></span> и <span class="v4"><strong>fa-li</strong></span> для элемента <span class="v2"><strong>&lt;li&gt;</strong></span>.
  Ширина каждой иконки разная и левый край пунктов списка из-за этого окажется неровным. Указанные классы исправляют
  этот недостаток для обычного списка, но в ниспадающем меню приводят к ошибкам. Поэтому добавляем свой стиль,
  который устанавливает положение иконок нужным нам образом.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Pov">
  <p>
    <em>============================ Поворот иконок:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Иконки можно поворачивать на 90, 180 или 270 градусов по часовой стрелке, а также отражать их по горизонтали или
      вертикали. Для этого применяются следующие классы:<br />
      <span class="v4"><strong>fa-rotate-90</strong></span> - поворот на 90º по часовой стрелке.<br />
      <span class="v4"><strong>fa-rotate-180</strong></span> - поворот на 180º.<br />
      <span class="v4"><strong>fa-rotate-270</strong></span> - поворот на 270º.<br />
      <span class="v4"><strong>fa-flip-horizontal</strong></span> - отражение по горизонтали.<br />
      <span class="v4"><strong>fa-flip-vertical</strong></span> - отражение по вертикали.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Ani">
  <p>
    <em>============================ Анимация иконок:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Анимация обычно применяется для создания эффекта ожидания. Иконки можно заставить бесконечно вращаться по часовой
      стрелке двумя способами. Класс <span class="v4"><strong>fa-spin</strong></span> производит плавное вращение, а <span class="v4"><strong>fa-pulse</strong></span> — пошаговое вращение.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Obe">
  <p>
    <em>============================ Объединение иконок:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Кроме обычного вывода иконки можно комбинировать между собой. Для этого создаём элемент <span class="v2"><strong>&lt;div&gt;</strong></span> с классом <span class="v4"><strong>fa-stack</strong></span>,
      а в него уже вставляем желаемые иконки. Вначале идёт нижняя, затем верхняя. К самим иконкам добавляется класс
      <span class="v4"><strong>fa-stack-1x</strong></span> или <span class="v4"><strong>fa-stack-2x</strong></span>, в зависимости от того, какая иконка должна быть больше размером.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Rab">
  <p>
    <em>============================ Работа с Bootstrap:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Иконки из набора Font Awesome прекрасно сочетаются с фреймворками вроде Bootstrap. Хотя этот фреймворк уже
      содержит необходимый набор иконок, его можно расширить за счёт сторонних комплектов. Иконки также можно применять в качестве ссылок.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Svo">
  <p>
    <em>============================ Своя сборка иконок:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Комплект Font Awesome содержит около пяти сотен иконок. Большая часть из них никогда не будет использоваться на
      одном сайте, потому что на практике требуется всего несколько иконок, может быть, пара десятков, но уж точно не
      сотни. Поэтому имеет смысл сделать собственную сборку иконок, содержащую только необходимый набор. Тем самым мы
      избавляемся от избыточной информации и сокращаем объём пересылаемых пользователю файлов.
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Одним из удобных сервисов для сборки своего набора иконок является Fontello. Его преимуществом выступает то, что
  он работает сразу с несколькими комплектами иконок, включая Font Awesome. Так что вы можете выбрать такие иконки,
  которых исходно в Font Awesome нет, например, значки браузеров. Чтобы добавить иконку в свой набор, по ней достаточно
  щёлкнуть. Выбранная иконка выделяется красным кругом, а рядом с заголовком пишется количество выбранных иконок.
  После выбора любой иконки становится доступна кнопка «Download webfont» при нажатии на которую вы получите архив
  со всеми необходимыми файлами. Свой набор иконок можно посмотреть отдельно на вкладке «Customize Names», а заодно
  задать свои имена для иконок. Это повлияет лишь на имена классов, которые понадобится добавлять к элементам в HTML.
  Также можно сменить код вызова каждой иконки, на случай если он конфликтует с используемым на странице.<br />
  <a href="http://fontello.com/">* Fontello</a><br /><br />
</div>

  <p>
    <span class="v"><strong># Подключение</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Скачать архив и распаковать в проект.<br />
    <span class="v2"><strong>&lt;link rel="stylesheet" href="css/fontello.css"&gt;</strong></span> - подключение.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Иконки на страницу вставляются аналогично Font Awesome, только имена классов другие. Например, для добавления
  иконки лупы в HTML поместите следующий код:<br />
  <span class="v2"><strong>&lt;i class="icon-search"&gt;&lt;/i&gt;</strong></span>
</div>

</div>

  </div>
</div>

</body>
</html>
