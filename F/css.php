<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>CSS</title>

<link rel="shortcut icon" href="../Images/I/css.png" type="image/x-icon">

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
        <a class="navbar-brand"><i class="fa fa-css3 colored" aria-hidden="true"></i> CSS</a>
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
    <h3 class="panel-title">Язык стилей</h3>
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
          <a href="https://ru.wikipedia.org/wiki/CSS">* CSS</a><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%90%D0%B4%D0%B0%D0%BF%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9_%D0%B2%D0%B5%D0%B1-%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD">* Адаптивный дизайн</a><br />
          <br />

          <span class="v"><strong># Элементы</strong></span><br />
          <a href="http://htmlbook.ru/samcss/psevdoklassy">* Псевдокласс</a><br />
          <br />

          <span class="v"><strong># Материалы</strong></span><br />
          <a href="https://habrahabr.ru/post/256109/">* Методологии CSS</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://www.w3schools.com/css/default.asp">* CSS Docs</a><br />
          <a href="http://jigsaw.w3.org/css-validator/">* Валидация CSS</a><br />
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
              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Свойства предка наследуют потомки.<br />
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
        Clearfix
      </a>
    </h4>
  </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Добавить класс <strong>clearfix</strong> к родителю, содержащий обтекаемые элементы.<br /><br />
        <code>
          <strong>
            .clearfix:after {<br />
              &nbsp;content: "";<br />
              &nbsp;display: block;<br />
              &nbsp;clear: both;<br />
            }
          </strong>
        </code>
    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingThree">
    <h4 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
        ///
      </a>
    </h4>
  </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        ...
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

<button class="button5" id="ProB">Производительность</button>

<!-- The Article -->

<div class="textblock" id="Pro">
  <p>
    <em>============================ Производительность:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Длинные, более точные селекторы снижают производительность. Рекомендуется использовать короткие селекторы
      как в Bootstrap. Это способствует уменьшению специфичности, создании чистого и отзывчивого кода.<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Имеет смысл удалить тени, градиенты, трансформации / анимации в мобильной версии сайта, так как их чрезмерное использование
      вызывает тяжелую нагрузку и сокращают время работы батареи.<br />
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

<button class="button" id="SbrB">Сброс CSS</button>
<button class="button" id="IntoB">CSS into HTML</button>
<button class="button" id="CommB">Комментарии</button>
<button class="button" id="SelB">Селекторы</button>
<button class="button" id="RazB">Размер</button>
<button class="button" id="ColB">Цвет</button>
<button class="button" id="GraB">Градиенты</button>
<button class="button" id="FonB">Шрифт</button>
<button class="button" id="TypB">Типографика</button>
<button class="button" id="PosB">Позиционирование</button>
<button class="button" id="ParB">Параметры</button>

<!-- The Article -->

<div class="textblock" id="Sbr">
  <p>
    <em>============================ Сброс CSS:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Браузер содержит свой собственный клиентский CSS. По умолчанию они могут мешать стилям, которые нужно применить.
      Существует файл <strong>reset.css</strong>, разработанный для сброса CSS и обеспечения совместимой базы для всех
      браузеров. Этот файл полезен для нормализации размера текста и удаления всех полей. Включается до собственного CSS.
      Клиентский стиль - стиль, добавляемый браузером по умолчанию.<br />
      <br />

      <a href="http://meyerweb.com/eric/tools/css/reset/">* Сброс CSS</a><br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Или:<br />
      <code>
        <strong>
          * {<br />
            padding: 0;<br />
            margin: 0;<br />
            box-sizing: border-box;<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Into">
  <p>
   <em>============================ CSS внутри HTML:</em><br />
     <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Внутри открытого тега размещается атрибут <span class="v4"><strong>style=""</strong></span>. Если модификаций несколько, то разделяются с помощью
     <span class="v4"><strong>";"</strong></span>. Не все теги такое поддерживают. Рекомендуется использовать CSS вне HTML.<br /><br />
     <span class="v"><strong># Модификации</strong></span><br />
     <span class="v2"><strong>font-size:</strong></span> - размер шрифта в px.<br />
     <span class="v2"><strong>color:</strong></span> - цвет шрифта.<br />
     <span class="v2"><strong>font-family:</strong></span> - стиль шрифта.<br />
     <span class="v2"><strong>background-color:</strong></span> - цвет фона.<br />
     <span class="v2"><strong>text-align:</strong></span> - выравнивание текста.
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Также можно писать CSS-код внутри тегов <span class="v2"><strong>&lt;style&gt;&lt;/style&gt;</strong></span>. Или подключить внешний CSS-файл при помощи <span class="v2"><strong>&lt;link href=".css" rel="stylesheet"&gt;</strong></span>.
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>НЕ ИСПОЛЬЗОВАТЬ CSS ВНУТРИ HTML!!!</strong>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v2"><strong>/*...*/</strong></span> - многострочный комментарий.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sel">
  <p>
    <em>============================ Селекторы:</em><br />
      <span class="v2"><strong>p</strong></span> - селектор тега.<br />
      <span class="v2"><strong>.class</strong></span> - селектор класса. Имя класса не должно начинаться с цифры.<br />
      <span class="v2"><strong>#id</strong></span> - селектор идентификатора.<br />
      <span class="v2"><strong>p.class / #id</strong></span> - селектор тега с классом / идентификатором.<br />
      <span class="v2"><strong>*</strong></span> - универсальный селектор - выбирает все элементы (чтобы не перечислять).
      <br /><br />

      <span class="v"><strong># Родственные селекторы</strong></span><br />
      <span class="v2"><strong>div p</strong></span> - cелектор потомка. Выбирает элемент, который находится в любом месте внутри определённого предка.<br />
      <span class="v2"><strong>div > p</strong></span> - прямой дочерний селектор. Выбирает элемент, который находится непосредственно внутри определённого родителя, исключая вложения.<br />
      <span class="v2"><strong>h2 ~ p</strong></span> - общий родственный селектор. Выбирает элемент, который следует в любом месте после предыдущего элемента, и оба элемента имеют одного общего предка. Вложения исключаются<br />
      <span class="v2"><strong>h2 + p</strong></span> - соседний селектор. Первый элемент определяет, что второй элемент должен непосредственно следовать после него и быть ему родственным и у обоих элементов должен быть один и тот же родитель. Вложения исключаются.
      <br /><br />

      <span class="v"><strong># Селекторы атрибута</strong></span><br />
      <span class="v2"><strong>a[атрибут]</strong></span> - выбирает элемент если данный атрибут присутствует.<br />
      <span class="v2"><strong>a[href="http://google.com/"]</strong></span> - выбирает элемент, если значение данного атрибута в точности соответствует указанному.<br />
      <span class="v2"><strong>a[href*="login"]</strong></span> - выбирает элемент, если значение данного атрибута содержит по крайней мере один экземпляр указанного текста.<br />
      <span class="v2"><strong>a[href^="https://"]</strong></span> - выбирает элемент, если значение данного атрибута начинается с указанного текста.<br />
      <span class="v2"><strong>a[href$=".pdf"]</strong></span> - выбирает элемент, если значение данного атрибута заканчивается указанным текстом.<br />
      <span class="v2"><strong>a[rel~="tag"]</strong></span> - выбирает элемент, если значение данного атрибута разделено пробелами и точно совпадает с одним указанным словом.<br />
      <span class="v2"><strong>a[lang|="en"]</strong></span> - выбирает элемент, если значение данного атрибута разделено дефисом и начинается с указанного слова.<br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Пробел в селекторах устанавливает отношения предок - потомок (к чему => уточнение). Комбинированные селекторы читаются справа налево.
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Значение может быть унаследовано от предка. Только несколько свойств могут быть унаследованы -
  цвет текста, шрифт (стиль, размер, насыщенность) и межстрочное расстояние. Некоторые элементы не
  наследуют от своих предков.
</div>

  <p>
    <span class="v"><strong># Приоритет селекторов</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для определения стиля к элементу могут применяться различные селекторы, и важность каждого селектора оценивается в баллах.
    Чем больше у селектора пунктов, тем он важнее, и тем больший приоритет его стили имеют над стилями других селекторов.<br />
    <br />
    - Селекторы тегов имеют важность, оцениваемую в 1 балл.<br />
    - Селекторы классов, атрибутов и псевдоклассов оцениваются в 10 баллов.<br />
    - Селекторы идентификаторов оцениваются в 100 баллов.<br />
    - Встроенные inline-стили (задаваемые через атрибут <span class="v4"><strong>style</strong></span>) оцениваются в 1000 баллов.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Raz">
  <p>
   <em>============================ Размер в CSS:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> 4 вида задания размеров:<br />

      1) <strong>px</strong> - пиксели. Абсолютные значения не зависят от других наследуемых свойств CSS. Позиционирование и размер.<br /><br />
      2) <strong>%</strong> - проценты. Относительные единицы, полагаются на родителя и / или предка элемента.<br /><br />
      3) <strong>em</strong> - относительная единица и зависит от первого значения <span class="v2"><strong>font-size</strong></span> элемента.
      Если у <span class="v2"><strong>&lt;body&gt;</strong></span> задано значение 16px, то у дочернего элемента, задав значение 2em, будет равнятся 32px. Определяет значение относительно друг друга.<br /><br />
      4) <strong>rem</strong> - тоже, что и <strong>em</strong>, но опирается на значение корневого элемента <span class="v2"><strong>&lt;html&gt;</strong></span>. Значение
      фиксировано, а значения <strong>em</strong> умножаются друг с другом.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Col">
  <p>
    <em>============================ Цвет в CSS:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> 4 вида задания цвета:<br />
      1) <span class="v2"><strong>color: rgb(0-255, 0-255, 0-255, 0-1)</strong></span> - последний параметр - прозрачность (число с плавающей точкой). <br /><br />
      2) <span class="v2"><strong>color: black</strong></span> - название цвета.<br /><br />
      3) <span class="v2"><strong>color: #db4e44</strong></span> - 16-е значение.<br /><br />
      4) <span class="v2"><strong>color: hsla(0-360(оттенок), 0-100%(насыщенность), 0-100%(яркость), 0-1(прозрачность))</strong></span> - цветовой круг.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Gra">
  <p>
    <em>============================ Градиенты:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Фоновые градиенты рассматриваются в качестве фонового изображения. Есть линейный (цвет идет идет от одной точки к другой, по прямой линии)
      и есть радиальный (цвет идет от центра по его линии, во всех направлениях).<br />
      <br />

      <span class="v2"><strong>linear-gradient()</strong></span> - добавляет линейный градиент к фону элемента. Выступает значением свойства <span class="v2"><strong>background-image</strong></span> или <span class="v2"><strong>background</strong></span> <a href="https://webref.ru/css/value/linear-gradient" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>radial-gradient()</strong></span> - добавляет радиальный градиент к фону элемента. Радиальные по своему принципу похожи на линейные градиенты, но один цвет переходит в другой не вдоль прямой линии, а словно круги по воде вокруг точки <a href="https://webref.ru/css/value/radial-gradient" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>repeating-linear-gradient()</strong></span> - создаёт бесконечно повторяющийся линейный градиент, образуя тем самым фоновый узор <a href="https://webref.ru/css/value/repeating-linear-gradient" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>repeating-radial-gradient()</strong></span> - создаёт бесконечно повторяющийся радиальный градиент, но цвета градиента бесконечно повторяются во всех направлениях образуя узор, заполняющий фон элемента <a href="https://webref.ru/css/value/repeating-radial-gradient" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Необходимо указывать 2 значения (фон и градиент) - обычное и перезаписывающее, если второе свойство браузер не поддерживает, то будет
  использоваться первое свойство.
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Градиентные фоны не работают в старых браузерах.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Fon">
  <p>
    <em>============================ Шрифт:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Установка шрифта на весь сайт: <a href="https://webref.ru/css/font-face" class="btn btn-primary" role="button">+</a><br />
      <code>
        <strong>
          @font-face {<br />
            font-family: "название шрифта";<br />
            src: url('./.tff');<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Чтобы использовать шрифт на всей странице - достаточно указать стиль <span class="v2"><strong>font-family</strong></span> в
  селекторе <strong>body</strong>. Указание списка семейств шрифтов полезно для использования запасного значения, если по
  какой-то причине шрифт недоступен у пользователя (перечисление с запятыми). Фактический размер каждой буквы зависит от данного параметра.
</div>

  <p>
    <span class="v"><strong># Параметры</strong></span><br />
    <span class="v2"><strong>font</strong></span> - позволяет одновременно задать несколько характеристик шрифта и текста <a href="https://webref.ru/css/font" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Значения <span class="v2"><strong>font-size</strong></span> и <span class="v2"><strong>line-height</strong></span> разделяются "/".
</div>

  <p>
    <span class="v2"><strong>font-family</strong></span> - устанавливает семейство шрифта, которое будет использоваться для оформления текста содержимого <a href="https://webref.ru/css/font-family" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> На любом устройстве есть безопасные шрифты:<br />
  <strong>Arial, Courier New, Courier, Garamond, Georgia, Lucida Sans, Lucida Grande, Lucida, Palatino Linotype,
  Tahoma, Times New Roman, Times, Trebuchet, Verdana</strong>.
</div>

  <p>
    <span class="v2"><strong>font-size</strong></span> - размер шрифта элемента <a href="https://webref.ru/css/font-size" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>font-weight</strong></span> - насыщенность шрифта. Значение устанавливается от 100 до 900, с шагом 100 <a href="https://webref.ru/css/font-weight" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Используя одинаковые значения свойств <span class="v2"><strong>font-weight</strong></span> и <span class="v2"><strong>height</strong></span> -
  выравнивание элемента по центру вертикали.
</div>

  <p>
    <span class="v2"><strong>font-variant</strong></span> - определяет, как нужно представлять строчные буквы — оставить их без модификаций или делать их все прописными уменьшенного размера <a href="https://webref.ru/css/font-variant" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>font-style</strong></span> - определяет начертание шрифта — обычное, курсивное или наклонное <a href="https://webref.ru/css/font-style" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>font-stretch</strong></span> - устанавливает узкое, нормальное или широкое начертание шрифта, что позволяет уплотнять или расширять текст <a href="https://webref.ru/css/font-stretch" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>font-kerning</strong></span> - управляет кернингом шрифта. Кернинг — это изменение интервала между определёнными сочетаниями букв для сохранения плотности букв в тексте <a href="https://webref.ru/css/font-kerning" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>line-height</strong></span> - для блочных элементов определяет минимальную высоту строки текста. Для остальных строчных элементов задаёт высоту, которая используется для расчёта высоты строки блока <a href="https://webref.ru/css/line-height" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Может исп. безразмерные единицы (числа), вроде 1.5, т. к. действуют как %, но компактны и читаемы. Рекомендуется исп. динамическое значение,
  связанное с размером текста (<strong>px</strong> - статическое значение. Это пригодно для выравнивания текста по вертикали в соответствии с
  другим элементом, а не в зависимости от <span class="v2"><strong>font-size</strong></span>). Удобочитаемость. Для основного текста
  рекомендуется <strong>1.5</strong>, а для заголовков - <strong>1.2</strong>. Наследуется дочерними элементами и будет
  оставаться постоянным, независимо от того, какой <span class="v2"><strong>font-size</strong></span> впоследствии применяется.
</div>

  <p>
    <span class="v"><strong># Рекомендации</strong></span><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Для мелких надписей рекомендуется использовать шрифт без засечек.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Шрифт с засечками - для основного текста и для заголовков.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Шрифт без засечек удобочитаем при любом масштабировании, а с заческами при повышении масштабирования читабельность снижается.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Моноширный шрифт - для кода.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если в названии шрифта есть пробелы, то используется в двойных кавычках.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Когда браузер встречает шрифт - проверяет на наличие на устройстве.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Наиболее поддерживаемы форматы - <strong>.ttf</strong> и <strong>.woff</strong><br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Typ">
  <p>
    <em>============================ Типографика:</em><br />
      <span class="v"><strong># Параметры для текста</strong></span><br />

      <span class="v2"><strong>word-spacing</strong></span> - устанавливает интервал между словами <a href="https://webref.ru/css/word-spacing" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>letter-spacing</strong></span> - определяет интервал между символами в пределах элемента <a href="https://webref.ru/css/letter-spacing" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>word-wrap</strong></span> - указывает, переносить или нет длинные слова, которые не помещаются по ширине в заданную область <a href="https://webref.ru/css/word-wrap" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>writing-mode</strong></span> - устанавливает направление текста на странице — по горизонтали или вертикали <a href="https://webref.ru/css/writing-mode" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>word-break</strong></span> - указывает, как делать перенос строк внутри слов, которые не помещаются по ширине в заданную область <a href="https://webref.ru/css/word-break" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>white-space</strong></span> - устанавливает, как отображать пробелы между словами <a href="https://webref.ru/css/white-space" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>text-indent</strong></span> - устанавливает величину отступа первой строки блока текста <a href="https://webref.ru/css/text-indent" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>text-align</strong></span> - определяет горизонтальное выравнивание текста в пределах элемента <a href="https://webref.ru/css/text-align" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>text-overflow</strong></span> - определяет параметры видимости текста в блоке, если текст целиком не помещается в заданную область <a href="https://webref.ru/css/text-overflow" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>untext-overflowicode-bidi</strong></span> - задает, как должен располагаться текст используемого языка <a href="https://webref.ru/css/unicode-bidi" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>user-select</strong></span> - позволяет запретить выделение текста <a href="https://webref.ru/css/user-select" class="btn btn-primary" role="button">+</a><br />
      <br />

      <span class="v"><strong># Стиль</strong></span><br />
      <span class="v2"><strong>color</strong></span> - определяет цвет текста элемента <a href="https://webref.ru/css/color" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>text-decoration</strong></span> - добавляет оформление текста в виде его подчеркивания, перечеркивания, линии над текстом и мигания <a href="https://webref.ru/css/text-decoration" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>text-shadow</strong></span> - добавляет тень к тексту, а также устанавливает её параметры: цвет тени, смещение относительно надписи и радиус размытия <a href="https://webref.ru/css/text-shadow" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>text-transform</strong></span> - управляет преобразованием текста элемента в заглавные или прописные символы <a href="https://webref.ru/css/text-transform" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>quotes</strong></span> - устанавливает тип кавычек, который применяется в тексте документа <a href="https://webref.ru/css/quotes" class="btn btn-primary" role="button">+</a><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pos">
  <p>
    <em>============================ Позиционирование элементов:</em><br />
      <span class="v"><strong># Блоки</strong></span><br />

      <figure>
        <img src="../Images/Block.png" />
      </figure>

      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Все блочные элементы являются гибкими. Они естественным образом адаптируют свою компоновку, чтобы приспособить внутреннее содержимое.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Блок будет занимать всю доступную ширину.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если встроенное содержимое в блоке не помещается на одной строке, оно будет продолжено на новой строке.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Высота блока изменяется автоматически, чтобы она соответствовала размеру его содержимого.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Все элементы на странице являются прямоугольниками.<br />
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Чтобы убрать пустые пространства необходимо начало комментария поставить после закрывающего тега, затем
  переход на новую строку => сам комментарий => переход на новую строку => поставить конец комментария перед
  открывающим тегом.
</div>

  <p>
    <span class="v"><strong># Свойство position</strong></span><br />
    <span class="v2"><strong>position</strong></span> - устанавливает способ позиционирования элемента относительно окна браузера или других объектов на Web-странице <a href="https://webref.ru/css/position" class="btn btn-primary" role="button">+</a> <br />
    <strong>static</strong> - это значение по умолчанию: статичные элементы просто следуют естественному потоку. Любые значения <span class="v2"><strong>left</strong></span>, <span class="v2"><strong>right</strong></span>, <span class="v2"><strong>top</strong></span> или <span class="v2"><strong>bottom</strong></span> не оказывают влияния.<br />
    <strong>relative</strong> - элемент может перемещаться относительно его текущей позиции.<br />
    <strong>absolute</strong> - элемент может перемещаться относительно первого позиционированного предка.<br />
    <strong>fixed</strong> - фиксированный элемент не перемещается со страницей, он фиксируется на экране. Не работает в IE6 и ниже.
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Свойства <strong>static</strong> и <strong>relative</strong> когда меняются - влияют на своих соседей.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Относительные элементы, которые сдвигаются через <span class="v2"><strong>left</strong></span>, <span class="v2"><strong>right</strong></span>, <span class="v2"><strong>top</strong></span> или <span class="v2"><strong>bottom</strong></span> не влияют на соседей.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если относительно позиционированного родителя не существует, то абсолютно позиционированный элемент будет позиционироваться относительно страницы.<br />
</div>

  <p>
    <span class="v"><strong># Свойство display</strong></span><br />
    <span class="v2"><strong>display</strong></span> - многоцелевое свойство, которое определяет, как элемент должен быть показан в документе <a href="https://webref.ru/css/display" class="btn btn-primary" role="button">+</a><br />
    <strong>block</strong> - ширина равная размеру родителя, можно задать высоту и ширину. Высота определяется содержимым.<br />
    <strong>inline</strong> - ширина и высота определяется содержимым и их нельзя задать.<br />
    <strong>inline-block</strong> - свойства блока, но ширина и высота определяется содержимым (можно задавать).<br />
  </p>

  <p>
    <span class="v"><strong># Поток</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Значения <strong>absolute</strong> и <strong>fixed</strong> у свойства <span class="v2"><strong>position</strong></span> удаляют элемент из потока.<br />
  </p>

  <p>
    <span class="v"><strong># Позиция / Обтекание / Выравнивание</strong></span><br />
    <span class="v2"><strong>float</strong></span> - определяет, по какой стороне будет выравниваться элемент, при этом остальные элементы будут обтекать его с других сторон (нарушает поведение элемента + его окружение) <a href="https://webref.ru/css/float" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Влияет на окружение. Меняет не только сам элемент, но и его предков, родственников, потомков и следующие за ним элементы.
  Цель - сдвинуть элемент к одной стороне и сделать так, чтобы текст обтекал с другой стороны (вокруг элемента). Вынимает элемент
  из потока, поэтому к обтекаемым элемента применяется <span class="v2"><strong>display: block;</strong></span>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Расположение - по горизонтали друг с другом. Если места не хватает - перенос на новую строку.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Обтекаемые элементы не оказывают влияния на высоту блока, внутри которого они располагаются.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Обтекаемые элементы располагаются по краю родительского элемента. Если нет родителя - по краю страницы.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Ширина обтекаемого элемента = ширине его содержимого.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Может менять свойство <span class="v2"><strong>display</strong></span> на <strong>block</strong>, если не стоит.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Для задания группы из 3-х и более элементов в ряд (множестов колонок) - свойство <strong>left</strong> одинаковое для всех элементов.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Действие <span class="v2"><strong>float</strong></span> может продолжаться и за пределами родителя, если высота обтекаемого элемента превышает высоту родителя.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Нежелательный контент может начать обтекать элемент с <span class="v2"><strong>float</strong></span>, удаляя его из потока. Элементы вокруг обходят
  его и стараются задействовать любое доступное пространство вокруг обтекаемого элемента.<br />
</div>

<div class="alert alert-warning">
  <i class="fa fa-wrench" aria-hidden="true"></i> Свойство <span class="v2"><strong>overflow</strong></span> отменяет действие <span class="v2"><strong>float</strong></span>.
</div>

  <p>
    <span class="v2"><strong>clear</strong></span> - устанавливает, с какой стороны элемента запрещено его обтекание другими элементами (очистка <span class="v2"><strong>float</strong></span>) <a href="https://webref.ru/css/clear" class="btn btn-primary" role="button">+</a> <br />
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Применяется к элементам, указанных после обтекаемых элементов, а не раньше, чтобы вернуть страницу в ее обычный поток.
</div>

  <p>
    <span class="v2"><strong>vertical-align</strong></span> - выравнивает элемент по вертикали относительно своего родителя, окружающего текста или ячейки таблицы (только для строчных эл-в и ячеек таблицы) <a href="https://webref.ru/css/vertical-align" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>align</strong></span> - задает выравнивание содержимого колонок по горизонтали <a href="http://htmlbook.ru/html/col/align" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>z-index</strong></span> - любые позиционированные элементы на Web-странице могут накладываться друг на друга в определенном порядке, имитируя тем самым третье измерение, перпендикулярное экрану <a href="https://webref.ru/css/z-index" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Имеет собственные правила - изменчивость (как содержимое адаптируется к размерам браузера), очередность (порядок, в
  котором появляются элементы) и наложение (как элементы появляются друг над другом).
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Чтобы использовать данное свойство, у элемента должно быть задано абсолютное / относительное или фиксированное позиционирование.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> При отрицательном значении элемент будет за другим элементом (перекрытие).
</div>

  <p>
    <span class="v2"><strong>clip</strong></span> - определяет область позиционированного элемента, в которой будет показано его содержимое. Всё, что не помещается в эту область, будет обрезано и становится невидимым <a href="https://webref.ru/css/clip" class="btn btn-primary" role="button">+</a><br />
  </p>

  <p>
  <span class="v"><strong># Отображение элемента</strong></span><br />
  <span class="v2"><strong>visibility</strong></span> - предназначен для отображения или скрытия элемента, включая рамку вокруг него и фон <a href="https://webref.ru/css/visibility" class="btn btn-primary" role="button">+</a> <br />
  <span class="v2"><strong>overflow</strong></span> - управляет отображением содержания блочного элемента, если оно целиком не помещается и выходит за область заданных размеров <a href="https://webref.ru/css/overflow" class="btn btn-primary" role="button">+</a> <br />
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Установка <span class="v2"><strong>overflow: auto</strong></span> внутри родительского элемента обуздывает <span class="v2"><strong>float</strong></span>. Однако
  разные браузеры трактуют его по своему. Может возникнуть проблема с тенями, с отображением элементов (обтекание).
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Par">
  <p>
    <em>============================ Параметры:</em><br />
      <span class="v2"><strong>!important</strong></span> - отмена значимости стилей. Выполнение конкретно этих стилей (остальные будут перекрываться).<br />
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Не следует применять с обтеканием и позиционированием.<br />
</div>

  <p>
    <span class="v"><strong># Поля / Отступы</strong></span><br />
    <span class="v2"><strong>padding</strong></span> - устанавливает значение полей вокруг содержимого элемента <a href="https://webref.ru/css/padding" class="btn btn-primary" role="button">+</a> <br />
    <span class="v2"><strong>margin</strong></span> - устанавливает величину отступа от каждого края элемента <a href="https://webref.ru/css/margin" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Вертикальные значения <span class="v2"><strong>margin</strong></span> не применяются к строчным элементам.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <span class="v2"><strong>padding</strong></span> работает вертикально для строчных элементов и может сливаться со строкой выше или ниже данного элемента, но будет отображаться. Вертикальные поля могут выходить за пределы строки выше или ниже элемента.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <span class="v2"><strong>margin</strong></span> и <span class="v2"><strong>padding</strong></span> не принимают какие-либо цветовые значения.
</div>

   <p>
     <span class="v"><strong># Размеры</strong></span><br />
     <span class="v2"><strong>height</strong></span> - устанавливает высоту блочных или заменяемых элементов <a href="https://webref.ru/css/height" class="btn btn-primary" role="button">+</a> <br />
     <span class="v2"><strong>width</strong></span> - устанавливает ширину блочных или заменяемых элементов <a href="https://webref.ru/css/width" class="btn btn-primary" role="button">+</a> <br />
     <span class="v2"><strong>zoom</strong></span> - изменяет масштаб объекта согласно заданному значению <a href="https://webref.ru/css/zoom" class="btn btn-primary" role="button">+</a> <br />
     <span class="v2"><strong>box-sizing</strong></span> - применяется для изменения алгоритма расчёта ширины и высоты элемента <a href="https://webref.ru/css/box-sizing" class="btn btn-primary" role="button">+</a>
   </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Если высоту не задавать - высота будет зависеть от содержимого.
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Строчные элементы не могут иметь фиксированный размер.
</div>

   <p>
     <span class="v"><strong># Прозрачность</strong></span><br />
     <span class="v2"><strong>opacity</strong></span> - уровень прозрачности элемента Web-страницы <a href="https://webref.ru/css/opacity" class="btn btn-primary" role="button">+</a> <br />
     <br />

     <span class="v"><strong># Границы</strong></span><br />
     <span class="v2"><strong>border</strong></span> - установление толщину, стиль и цвет границы вокруг элемента <a href="https://webref.ru/css/border" class="btn btn-primary" role="button">+</a><br />
     <span class="v2"><strong>border-radius</strong></span> - устанавливает радиус скругления уголков рамки <a href="https://webref.ru/css/border-radius" class="btn btn-primary" role="button">+</a><br />
     <span class="v2"><strong>border-color</strong></span> - цвет границы на разных сторонах элемента <a href="https://webref.ru/css/border-color" class="btn btn-primary" role="button">+</a><br />
     <span class="v2"><strong>border-style</strong></span> - стиль границы вокруг элемента <a href="https://webref.ru/css/border-style" class="btn btn-primary" role="button">+</a><br />
     <span class="v2"><strong>border-width</strong></span> - задаёт толщину границы одновременно на всех сторонах элемента или индивидуально для каждой стороны <a href="https://webref.ru/css/border-width" class="btn btn-primary" role="button">+</a><br />
   </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Работает только тогда, когда значение свойства <span class="v2"><strong>border-collapse</strong></span> задано как <strong>separate</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Каждую сторону границы можно стилизовать отдельно, например - <span class="v2"><strong>border-top-style</strong></span>.<br />
</div>

    <p>
      <span class="v2"><strong>outline</strong></span> - универсальное свойство, одновременно устанавливающее цвет, стиль и толщину внешней границы на всех четырёх сторонах элемента <a href="https://webref.ru/css/outline" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>outline-color</strong></span> - цвет внешней границы элемента <a href="https://webref.ru/css/outline-color" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>outline-offset</strong></span> - расстояние между рамкой и краем или границей элемента <a href="https://webref.ru/css/outline-offset" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>outline-style</strong></span> - стиль внешней границы элемента <a href="https://webref.ru/css/outline-style" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>outline-width</strong></span> - толщину внешней границы элемента <a href="https://webref.ru/css/outline-width" class="btn btn-primary" role="button">+</a><br />
      <br />

      <span class="v"><strong># Фон</strong></span><br />
      <span class="v2"><strong>background</strong></span> - позволяет установить одновременно до пяти характеристик фона <a href="https://webref.ru/css/background" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>background-color</strong></span> - определяет цвет фона элемента <a href="https://webref.ru/css/background-color" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>background-image</strong></span> - устанавливает фоновое изображение для элемента <a href="https://webref.ru/css/background-image" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>background-attachment</strong></span> - устанавливает, будет ли прокручиваться фоновое изображение вместе с содержимым элемента <a href="https://webref.ru/css/background-attachment" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>background-position</strong></span> - задает начальное положение фонового изображения <a href="https://webref.ru/css/background-position" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>background-repeat</strong></span> - определяет, как будет повторяться фоновое изображение <a href="https://webref.ru/css/background-repeat" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>background-size</strong></span> - масштабирует фоновое изображение согласно заданным размерам <a href="https://webref.ru/css/background-size" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>background-clip</strong></span> - определяет, как цвет фона или фоновая картинка должна выводиться под границами. Эффект заметен при прозрачных или пунктирных границах <a href="https://webref.ru/css/background-clip" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>background-origin</strong></span> - определяет область позиционирования фонового рисунка <a href="https://webref.ru/css/background-origin" class="btn btn-primary" role="button">+</a><br />
      <br />
    </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> <span class="v2"><strong>background</strong></span> может принимать несколько изображений, разделенных запятой + градиенты.
</div>

    <p>
      <span class="v"><strong># Тени</strong></span><br />
      <span class="v2"><strong>box-shadow</strong></span> - добавляет тень к элементу <a href="https://webref.ru/css/box-shadow" class="btn btn-primary" role="button">+</a> <br />
      <br />

      <span class="v"><strong># К маркерам списков</strong></span><br />
      <span class="v2"><strong>list-style</strong></span> - позволяет одновременно задать стиль маркера, его положение, а также изображение, которое будет использоваться в качестве маркера списка <a href="https://webref.ru/css/list-style" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>list-style-image</strong></span> - устанавливает адрес изображения, которое служит в качестве маркера списка <a href="https://webref.ru/css/list-style-image" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>list-style-position</strong></span> - определяет, как будет размещаться маркер относительно текста <a href="https://webref.ru/css/list-style-position" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>list-style-type</strong></span> - изменяет вид маркера для каждого элемента списка <a href="https://webref.ru/css/list-style-type" class="btn btn-primary" role="button">+</a><br />
      <br />
    </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Для смены изображения маркера списка - удалить сам маркер, затем через <span class="v2"><strong>background</strong></span> добавить
  изображение + отступ (внутренний) слева.
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> В горизонтальном списке маркеры удаляются (через <span class="v2"><strong>display</strong></span>), а через
  <span class="v2"><strong>float</strong></span> нет.
</div>

    <p>
      <span class="v"><strong># К таблице</strong></span><br />
      <span class="v2"><strong>border-collapse</strong></span> - устанавливает, как отображать границы вокруг ячеек таблицы. Это свойство играет роль, когда для ячеек установлена рамка, тогда в месте стыка ячеек получится линия двойной толщины (предотвращает это) <a href="https://webref.ru/css/border-collapse" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>border-spacing</strong></span> - расстояние между границами ячеек в таблице <a href="https://webref.ru/css/border-spacing" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>caption-side</strong></span> - положение заголовка таблицы <a href="https://webref.ru/css/caption-side" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>empty-cells</strong></span> - отображение границ и фона в ячейке, если она пустая <a href="https://webref.ru/css/empty-cells" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>table-layout</strong></span> - определяет, как браузер должен вычислять ширину ячеек таблицы, основываясь на её содержимом <a href="https://webref.ru/css/table-layout" class="btn btn-primary" role="button">+</a><br />
    </p>

    <p>
      <span class="v"><strong># К определенным тегам</strong></span><br />
      <span class="v2"><strong>orient</strong></span> - устанавливает горизонтальное или вертикальное положение индикатора элемента <span class="v3"><strong>&lt;progress&gt;</strong></span> или <span class="v3"><strong>&lt;meter&gt;</strong></span> <a href="https://webref.ru/css/orient" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>resize</strong></span> - указывает, можно ли пользователю изменять размеры текстового поля <a href="https://webref.ru/css/resize" class="btn btn-primary" role="button">+</a> <br /><br />

      <span class="v"><strong># Разное</strong></span><br />
      <span class="v2"><strong>counter-reset</strong></span> - устанавливает переменную, в которой будет храниться счётчик отображений определенного элемента, а также начальное значение счётчика <a href="https://webref.ru/css/counter-reset" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>counter-increment</strong></span> - предназначено для увеличения значения счётчика приращений, который задается предыдущим свойством <a href="https://webref.ru/css/counter-increment" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>content</strong></span> - позволяет вставлять генерируемое содержание в текст Web-страницы, которое первоначально в тексте отсутствует <a href="https://webref.ru/css/content" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>cursor</strong></span> - устанавливает форму курсора, когда он находится в пределах элемента. Вид курсора зависит от операционной системы и установленных параметров <a href="https://webref.ru/css/cursor" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>pointer-events</strong></span> - позволяет управлять тем, как элементы будут реагировать на события мыши или прикосновения к сенсорному экрану <a href="https://webref.ru/css/pointer-events" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>clip-path</strong></span> - создает ограниченную область, которая определяет какая часть элемента должна быть видимой <a href="https://developer.mozilla.org/ru/docs/Web/CSS/clip-path" class="btn btn-primary" role="button">+</a><br />
    </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Браузеры, которые не поддерживают данное свойство - будут его игнорировать.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> События щелчка ограничены фигурой и ее внешней границей.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Границы, тени и контуры за пределами области отсечения будут обрезаны. Добавить границу и ожидать ее соблюдения не получится.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Вероятные ошибки с 3D-трансформацией, переходами и прозрачностью.<br />
</div>

</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-info" id="DS">
 <div class="panel-heading">
   <h3 class="panel-title">Расширение стилей</h3>
 </div>
   <div class="panel-body">

<!-- Panel -->

<button class="button2" id="PseB">Псевдоклассы</button>
<button class="button2" id="PseeB">Псевдоэлементы</button>
<button class="button2" id="PraB">@-правила</button>
<button class="button2" id="FunB">Функции</button>
<button class="button2" id="VenB">Вендорные свойства</button>
<button class="button2" id="FlexB">Flex-box верстка</button>
<button class="button2" id="AdaB">Адаптивный дизайн</button>

<!-- The Article -->

<div class="textblock" id="Pse">
  <p>
    <em>============================ Псевдоклассы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Определяет конкретное состояние элемента. Не может существовать сам по себе. Должен быть прикреплен к селектору.
      <br /><br />

      <span class="v"><strong># Форма</strong></span><br />
      <span class="v2"><strong>:invalid</strong></span> - применяется к полям формы, содержимое которых не соответствует указанному типу <a href="https://webref.ru/css/invalid" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:read-only</strong></span> - применяется к полям формы, у которых задан атрибут <span class="v4"><strong>readonly</strong></span> <a href="http://htmlbook.ru/css/read-only" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:checked</strong></span> - применяется к элементам интерфейса, таким как переключатели (checkbox) и флажки (radio), когда они находятся в положение «включено» <a href="https://webref.ru/css/checked" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:default</strong></span> - применяет стиль к элементам форм, которые установлены по умолчанию в группе похожих элементов <a href="https://webref.ru/css/default" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:disabled</strong></span> - используется для применения стиля к заблокированным элементам форм <a href="https://webref.ru/css/disabled" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:enabled</strong></span> - используется для применения стиля к доступным (не заблокированным) элементам форм <a href="https://webref.ru/css/enabled" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:focus</strong></span> - определяет стиль для элемента получающего фокус <a href="https://webref.ru/css/focus" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:focus-within</strong></span> - определяет стиль элемента, когда он сам или элементы внутри него получают фокус <a href="https://webref.ru/css/focus-within" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:indeterminate</strong></span> - задает стиль для элементов форм, таким как флажки и переключатели, когда они находятся в неопределенном состоянии <a href="https://webref.ru/css/indeterminate" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:optional</strong></span> - применяет стилевые правила к тегу <span class="v3"><strong>&lt;input&gt;</strong></span>, у которого не задан атрибут <span class="v4"><strong>required</strong></span> <a href="https://webref.ru/css/optional" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:placeholder-shown</strong></span> - определяет стиль элемента, который в данный момент отображает текст подсказки <a href="https://webref.ru/css/placeholder-shown" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:read-write</strong></span> - применяется к полям формы, доступных для изменения <a href="https://webref.ru/css/read-write" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:required</strong></span> - применяет стилевые правила к тегу <span class="v3"><strong>&lt;input&gt;</strong></span>, у которого установлен атрибут <span class="v4"><strong>required</strong></span> <a href="https://webref.ru/css/required" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:valid</strong></span> - применяется к полям формы, содержимое которых проходит проверку в браузере на соответствие указанному типу <a href="https://webref.ru/css/valid" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:in-range</strong></span> - применяется к элементам форм, у которых введённое пользователем значение находится в заранее заданном диапазоне <a href="https://webref.ru/css/in-range" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:out-of-range</strong></span> - применяется к полям форм, у которых введённое пользователем значение выходит из заданного диапазона <a href="https://webref.ru/css/out-of-range" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:read-only</strong></span> - применяется к полям формы, у которых задан атрибут <span class="v4"><strong>readonly</strong></span>. Такое поле не может быть модифицировано и получить фокус <a href="https://webref.ru/css/read-only" class="btn btn-primary" role="button">+</a><br />
      <br />

      <span class="v"><strong># Прочее</strong></span><br />
      <span class="v2"><strong>:hover</strong></span> - определяет стиль элемента при наведении на него курсора мыши, но при этом элемент еще не активирован, иными словами кнопка мыши не нажата <a href="https://webref.ru/css/hover" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:link</strong></span> - применяется к ссылкам, которые еще не посещались пользователем, и задает для них стилевое оформление <a href="https://webref.ru/css/link" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:active</strong></span> - определяет стиль для активной ссылки <a href="https://webref.ru/css/active" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:visited</strong></span> - применяется к ссылкам, уже посещённым пользователем, и задаёт для них стилевое оформление <a href="https://webref.ru/css/visited" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:fullscreen</strong></span> - применяется к элементам, когда браузер находится в полноэкранном режиме <a href="https://webref.ru/css/fullscreen" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:lang</strong></span> - определяет язык, который используется в документе или его фрагменте <a href="https://webref.ru/css/lang" class="btn btn-primary" role="button">+</a><br />
      <br />

      <span class="v"><strong># Выборка</strong></span><br />
      <span class="v2"><strong>:root</strong></span> - определяет корневой элемент документа <a href="http://htmlbook.ru/css/root" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:first-child</strong></span> - выбирает первый элемент в родителе <a href="https://webref.ru/css/first-child" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:first-of-type</strong></span> - выбирает первый элемент своего типа в родителе <a href="https://webref.ru/css/first-of-type" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:last-child</strong></span> - выбирает последний элемент в родителе <a href="https://webref.ru/css/last-child" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:last-of-type</strong></span> - выбирает последний элемент своего типа в родителе <a href="https://webref.ru/css/last-of-type" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:nth-child</strong></span> - выбирает элемент, который соответствует заданному числу или выражению, считая все элементы с начала дерева документа <a href="https://webref.ru/css/nth-child" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:nth-last-child</strong></span> - выбирает элемент, который соответствует заданному числу или выражению, считая все элементы с конца дерева документа <a href="https://webref.ru/css/nth-last-child" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:nth-last-of-type</strong></span> - выбирает элемент, который соответствует заданному числу или выражению, считая только элементы этого типа с конца дерева документа <a href="https://webref.ru/css/nth-last-of-type" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:nth-of-type</strong></span> - выбирает элемент, который соответствует заданному числу или выражению, считая только элементы этого типа с начала дерева документа <a href="https://webref.ru/css/nth-of-type" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:only-child</strong></span> - выбирает единственный элемент в родителе <a href="https://webref.ru/css/only-child" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:only-of-type</strong></span> - выбирает единственный элемент своего типа в родителе <a href="https://webref.ru/css/only-of-type" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:not</strong></span> - задаёт правила стилей для элементов, которые не содержат указанный селектор <a href="https://webref.ru/css/not" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:empty</strong></span> - представляет пустые элементы, иными словами такие, которые не содержат дочерних элементов, текста или пробелов <a href="https://webref.ru/css/empty" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>:target</strong></span> - применяется к целевому элементу, к идентификатору, который указан в адресной строке браузера <a href="https://webref.ru/css/target" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Псевдоклассы с <span class="v2"><strong>:nth</strong></span> могут принимать выражения. Например выражение <strong>3n</strong> выбирает каждый третий элемент,
  а выражение типа <strong>3n + 2</strong> выбирает каждый третий элемент, начиная со второго элемента.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Psee">
  <p>
    <em>============================ Псевдоэлементы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для каждого элемента допускается только один псевдоэлемент. Особенности - строчные элементы, являются дочерними элементами + допустимо присоединять псевдоклассы к псевдоэлементам.<br />
      <br />
      <span class="v2"><strong>::after</strong></span> - используется для вывода контента после содержимого элемента, к которому он добавляется (для корректной работы в IE8 - используется одно двоеточие + не работает для тегов <strong>img</strong> и <strong>input</strong>) <a href="https://webref.ru/css/after" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>::backdrop</strong></span> - отображается ниже самого верхнего элемента в стеке по оси Z, но выше всех остальных элементов на странице, если они имеются <a href="https://webref.ru/css/backdrop" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>::before</strong></span> - применяется для отображения контента до содержимого элемента, к которому он добавляется <a href="https://webref.ru/css/before" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>::first-letter</strong></span> - определяет стиль первого символа в тексте элемента, к которому добавляется <a href="https://webref.ru/css/first-letter" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>::first-line</strong></span> - задает стиль первой строки форматированного текста <a href="https://webref.ru/css/first-line" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>::placeholder</strong></span> - задаётся стилевое оформление подсказывающего текста, созданного атрибутом <span class="v4"><strong>placeholder</strong></span> <a href="https://webref.ru/css/placeholder" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>::selection</strong></span> - применяет стиль к выделенному пользователем тексту <a href="https://webref.ru/css/selection" class="btn btn-primary" role="button">+</a><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pra">
  <p>
    <em>============================ @-правила:</em><br />
      <span class="v2"><strong>@charset</strong></span> - применяется для задания кодировки внешнего CSS-файла. Это имеет значение в том случае, если в CSS-файле используются символы национального алфавита <a href="https://webref.ru/css/charset" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>@document</strong></span> - устанавливает стилевые правила на основе адреса документа. К примеру, если адреса мобильной и основной версии сайта различаются, то мы можем задать собственный стиль элементов для каждой версии <a href="https://webref.ru/css/document" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>@import</strong></span> - позволяет импортировать содержимое CSS-файла в текущую стилевую таблицу <a href="https://webref.ru/css/import" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>@page</strong></span> - позволяет задать значение полей при печати документа <a href="https://webref.ru/css/page" class="btn btn-primary" role="button">+</a><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
      <span class="v2"><strong>attr()</strong></span> - применяется для добавления значения атрибута HTML-элемента в стилевое свойство <a href="https://webref.ru/css/value/attr" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>calc()</strong></span> - используется для указания вычисляемого значения свойств, которые в качестве значений используют размер, угол, время, число <a href="https://webref.ru/css/value/calc" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>drop-shadow()</strong></span> - добавляет тень к изображениям + принимаются прозрачные участки в изображении и тень отбрасывается с их учётом <a href="https://webref.ru/css/value/drop-shadow" class="btn btn-primary" role="button">+</a><br />
      <br />

      <span class="v"><strong># Фильтры</strong></span><br />
      <code>
        <strong>filter : название;</strong>
      </code><br />
      <br />
      <span class="v2"><strong>blur()</strong></span> - задаёт размытие по Гауссу изображений, фоновых картинок или текста <a href="https://webref.ru/css/value/blur" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>brightness()</strong></span> - понижает или повышает яркость изображений или фоновых картинок <a href="https://webref.ru/css/value/brightness" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>contrast()</strong></span> - понижает или повышает контрастность изображений или фоновых картинок <a href="https://webref.ru/css/value/contrast" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>grayscale()</strong></span> - превращает изображение в чёрно-белое <a href="https://webref.ru/css/value/grayscale" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>hue-rotate()</strong></span> - в качестве значения указывается угол (к примеру: 45deg), который задаёт поворот оттенка на цветовом круге. 0 или 360 градусов оставляет изображение неизменным <a href="https://webref.ru/css/value/hue-rotate" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>invert()</strong></span> - инвертирует цвета в изображении. По своему действию похоже на превращение фотографии в негатив <a href="https://webref.ru/css/value/invert" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>opacity()</strong></span> - задаёт степень прозрачности изображений <a href="https://webref.ru/css/value/opacity" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>saturate()</strong></span> - изменяет насыщенность цветов в изображении <a href="https://webref.ru/css/value/saturate" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>sepia()</strong></span> - превращает изображение в сепию — так называется чёрно-белое изображение с коричневым оттенком <a href="https://webref.ru/css/value/sepia" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Используются с псевдоклассом <strong>:hover</strong>.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> IE не поддерживает фильтры.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Ven">
  <p>
    <em>============================ Вендорные свойства:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Эти свойства работают только в определённых браузерах. Префикс <span class="v2"><strong>-moz-</strong></span> для Firefox, <span class="v2"><strong>-ms-</strong></span> для Internet Explorer, <span class="v2"><strong>-webkit-</strong></span> для Chrome и Safari, <span class="v2"><strong>-o-</strong></span> для Opera. <br /><br />

      <span class="v2"><strong>orient</strong></span> - устанавливает горизонтальное или вертикальное положение индикатора элемента <a href="https://webref.ru/css/orient" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-browse</strong></span> - позволяет задать стиль кнопки <strong>Обзор</strong> при загрузке файлов <a href="https://webref.ru/css/ms-browse" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-check</strong></span> - задаёт стиль переключателей и флажков <a href="https://webref.ru/css/ms-check" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-clear</strong></span> - стиль кнопки для очистки текстового поля <a href="https://webref.ru/css/ms-clear" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-expand</strong></span> - задаёт стиль кнопки раскрытия списка <a href="https://webref.ru/css/ms-expand" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-fill</strong></span> - задаёт стиль индикатора элемента <a href="https://webref.ru/css/ms-fill" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-fill-lower</strong></span> - задаёт стиль слайдера <a href="" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-fill-upper</strong></span> - задаёт стиль слайдера <a href="https://webref.ru/css/ms-fill-upper" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-reveal</strong></span> - задаёт стиль кнопки для просмотра пароля <a href="https://webref.ru/css/ms-reveal" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-thumb</strong></span> - задаёт стиль ползунка для слайдера <a href="https://webref.ru/css/ms-thumb" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-ticks-after</strong></span> - применяет стилевые параметры к делениям ниже дорожки слайдера <a href="https://webref.ru/css/ms-ticks-after" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-ticks-before</strong></span> - применяет стилевые параметры к делениям выше дорожки слайдера <a href="https://webref.ru/css/ms-ticks-before" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-tooltip</strong></span> - применяет стилевые параметры к всплывающей подсказке слайдера <a href="https://webref.ru/css/ms-tooltip" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-track</strong></span> - задаёт стиль дорожки ползунка для слайдера <a href="https://webref.ru/css/ms-track" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-ms-value</strong></span> - позволяет изменять стиль элементов формы <a href="https://webref.ru/css/ms-value" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-moz-placeholder</strong></span> - псевдокласс, с помощью которого задаётся стилевое оформление подсказывающего текста созданного атрибутом <span class="v4"><strong>placeholder</strong></span> <a href="http://htmlbook.ru/css/-moz-placeholder" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>::-webkit-input-placeholder</strong></span> - псевдокласс, с помощью которого задаётся стилевое оформление подсказывающего текста созданного атрибутом <span class="v4"><strong>placeholder</strong></span> <a href="http://htmlbook.ru/css/-webkit-input-placeholder" class="btn btn-primary" role="button">+</a> <br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Flex">
  <p>
    <em>============================ Flexbox-верстка:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Изъятие элементов из потока и их гибкая настройка положения в контейнере. Имеются проблемы с поддержкой в IE10 и ниже. Основные состовляющие - flex-контейнер и flex-элементы.
      Flex-элементы позиционируются вдоль условной оси во flex-контейнере. Элементы в контейнере могут располагаться по горизонтали в виде строки или по вертикали в виде столбца.<br />
      <br />

      <figure>
        <img src="../Images/Flex.png" />
      </figure>

      <br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Порядок - создание flex-контейнера (свойство <strong>display: flex</strong> - контейнер растягивается по ширине страницы или <strong>display: inline-flex</strong> - контейнер занимает столько места,
      сколько необходимо flex-элементам), затем заполнение flex-элементами.<br /><br />

      <span class="v"><strong># Параметры</strong></span><br />
      <span class="v2"><strong>flex</strong></span> - соотношение размера элемента (число).<br />
      <span class="v2"><strong>align-items</strong></span> - выравнивает флекс-элементы внутри контейнера в перпендикулярном направлении <a href="https://webref.ru/css/align-items" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>align-content</strong></span> - тип выравнивания строк внутри флекс-контейнера по поперечной оси при наличии свободного пространства. <a href="https://webref.ru/css/align-content" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>align-self</strong></span> - выравнивает флекс-элемент текущей строки, переписывая значение предыдущего свойства <a href="https://webref.ru/css/align-self" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>flex-direction</strong></span> - задаёт направление основных осей в контейнере и тем самым определяет положение флексов в контейнере <a href="https://webref.ru/css/flex-direction" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>order</strong></span> - порядок вывода флексов внутри флекс-контейнера <a href="https://webref.ru/css/order" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>flex-basis</strong></span> - определяет основу флекса, которая является начальным размером элемента <a href="https://webref.ru/css/flex-basis" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>flex-grow</strong></span> - определяет, сколько пространства может занимать флекс внутри контейнера <a href="https://webref.ru/css/flex-grow" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>flex-shrink</strong></span> - устанавливает коэффициент сжатия флексов в контейнере и задаёт, насколько элемент будет уменьшаться по отношению к другим флексам, чтобы разместить все элементы в одну строку <a href="https://webref.ru/css/flex-shrink" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>flex-wrap</strong></span> - указывает, следует ли флексам располагаться в одну строку или можно занять несколько строк. Если перенос строк допускается, то свойство также позволяет контролировать направление, в котором выкладываются строки <a href="https://webref.ru/css/flex-wrap" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>justify-content</strong></span> - определяет, как браузер распределяет пространство вокруг флекс-элементов вдоль главной оси контейнера <a href="https://webref.ru/css/justify-content" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info" role="alert">
    <i class="fa fa-info-circle" aria-hidden="true"></i> Свойства <strong>float</strong>, <strong>clear</strong>, <strong>vertical-align</strong> не оказывают влияния на fkex-контейнер.<br>
</div>

<div class="alert alert-danger" role="alert">
    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Псевдоэлементы <strong>::first-line</strong> и <strong>::first-letter</strong> не применяются к flex-контейнерам.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Ada">
  <p>
    <em>============================ Адаптивный дизайн:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Удобство работы с сайтом на различных устройствах (PC, планшет, смартфон). Нацеливание на устройства с применением определенных стилей только к
      этим устройствам. Отзывчивость зависит от свойств устройства или области просмотра (каковы размеры экрана, какая ориентация, какое разрешение).<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Использование только относительных единиц, такие как - <strong>%</strong> и <strong>em</strong>.<br />
      <br />

      <span class="v"><strong># Относительные размеры</strong></span><br />
      <span class="v2"><strong>vw</strong></span> - ширина области просмотра.<br />
      <span class="v2"><strong>vh</strong></span> - высота области просмотра.<br />
      <span class="v2"><strong>vmin</strong></span> - меньшее значение из ширины и высоты.<br />
      <span class="v2"><strong>vmax</strong></span> - большее значение из ширины и высота.<br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Формула - целевая ширина элемента / ширину родительского элемента. Указывается в <strong>%</strong>.
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Фиксированные единицы измерения не используются, так как высота / ширина области просмотра непрерывно меняются
  от устройства к устройству.
</div>

  <p>
    <span class="v"><strong># Медиа-запросы</strong></span><br />
    <code>
      <strong>
        @media тип and (условие) {<br />
          &nbsp;...<br />
        }
      </strong>
    </code><br />
    <br />

    <span class="v2"><strong>@media</strong></span> - позволяет указать тип носителя, для которого будет применяться указанный стиль с соответствующими критериями <a href="https://webref.ru/css/media" class="btn btn-primary" role="button">+</a><br />
    Параметры:<br />
    <span class="v2"><strong>max-width</strong></span> - устанавливает максимальную ширину элемента <a href="https://webref.ru/css/max-width" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>min-width</strong></span> - устанавливает минимальную ширину элемента <a href="https://webref.ru/css/min-width" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>max-height</strong></span> - устанавливает максимальную высоту элемента <a href="https://webref.ru/css/max-height" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>min-height</strong></span> - задаёт минимальную высоту элемента <a href="https://webref.ru/css/min-height" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>orientation</strong></span> - область просмотра <a href="https://webref.ru/course/css-advanced/responsiveness" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>resolution</strong></span> - разрешение экрана <a href="https://webref.ru/course/css-advanced/responsiveness" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>aspect-ratio</strong></span> - соотношение ширины к высоте в пикселях целевой области визуализации или устройства вывода. Значение функции состоит из двух положительных целых чисел, разделённых косой чертой. Первое число задаёт ширину в пикселях, а второе число задаёт высоту в пикселях.<br />
    <span class="v2"><strong>pixel-ratio</strong></span> - определение устройств высокой чёткости, в том числе дисплеев ретина.<br />
    <span class="v2"><strong>color / color-index / monochrome</strong></span> - определение доступных выходных цветов.<br />
    <span class="v2"><strong>grid</strong></span> - выявление растровых устройств.<br />
    <span class="v2"><strong>scan</strong></span> - определение процесса сканирования телевизора.<br />
    <br />

    <span class="v"><strong># Типы устройств</strong></span><br />
    <span class="v2"><strong>all</strong></span> - все типы. Это значение используется по умолчанию.<br />
    <span class="v2"><strong>print</strong></span> - принтеры и другие печатающие устройства.<br />
    <span class="v2"><strong>screen</strong></span> - экран монитора / смартфона.<br />
    <span class="v2"><strong>speech</strong></span> - речевые синтезаторы, а также программы для воспроизведения текста вслух.<br />
    <br />

    <span class="v"><strong># Логические операторы</strong></span><br />
    <span class="v2"><strong>and</strong></span> - логическое и.<br />
    <span class="v2"><strong>not</strong></span> - отрицает запрос с указанием запроса, но только одного (например запрет цветных экранов в пользу монохромных). Отбрасывает тип носителя.<br />
    <span class="v2"><strong>only</strong></span> - выбор только такого-то.<br />
    <span class="v2"><strong>,</strong></span> - разделяет условия.<br />
    <br />
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Логический оператор <span class="v2"><strong>only</strong></span> не распознается браузерами использующих алгоритм HTML4, что позволяет
  скрыть стили от устройств или браузеров, которые не поддерживают медиа-запросы.
</div>

  <p>
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Общие правила CSS для всех экранов, включая смартфоны:<br />
    <code>
      <strong>
        body { }<br />
        .title { }<br />
        .button { }<br /><br />
        @media (min-width: 768px) {<br />
          /* Правила для планшетов и больших экранов */<br />
        }<br /><br />
        @media (min-width: 992px) {<br />
          /* Правила для ноутбуков и компьютеров */<br />
        }<br /><br />
        @media (min-width: 1200px) {<br />
          /* Правила только для больших экранов */<br />
        }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Общие правила CSS для всех экранов, включая большие настольные экраны:<br />
      <code>
      <strong>
        body { }<br />
        .title { }<br />
        .button { }<br /><br />
        @media (max-width: 1199px) {<br />
          /* Правила для ноутбуков и небольших экранов */<br />
        }<br /><br />
        @media (max-width: 991px) {<br />
          /* Правила для планшетов и небольших экранов */<br />
        }<br /><br />
        @media (max-width: 767px) {<br />
          /* Правила только для смартфонов */<br />
        }
        </strong>
      </code><br /><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Медиа-запросы не работают в IE8 и ниже. Данная проблема может быть решена с помощью <strong>Respond.js / CSS3-MediaQueries.js</strong>, однако
  могут возникнуть проблемы с производительностью и потенциально замедлить сайт.
</div>

  <p>
    <span class="v"><strong># Метатег viewport</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Определение размера области просмотра, масштабирования и разрешения сайта.<br />
    <span class="v3"><strong>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</strong></span> - метатег такого типа позволяет сайту
    принять правильный размер на мобильном устройстве и подобрать любые точные медиа-запросы.<br />
    <br />

    <strong>height / width</strong> - высота / ширина.<br />
    <strong>minimum-scale</strong> - масштабирование области просмотра в меньшую сторону.<br />
    <strong>maximum-scale</strong> - масштабирование области просмотра в большую сторону.<br />
    <strong>initial-scale</strong> - соотношение h / w с областью просмотра устройства.<br />
    <strong>user-scalable</strong> - включение / отключение масштабирования.<br />
    <strong>target-densitydpi</strong> - попиксельный контроль (для разрешения области просмотра при масштабировании). Принимает конкретное число точек на дюйм или ключевые слова.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Для <strong>initial-scale</strong> должно быть значение 1, так как это определяет соотношение между высотой устройства
  в портретной ориентации и размером области просмотра. А если устройство находится в альбомном режиме, то это будет
  соотношение между шириной устройства и размером области просмотра.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Использование значения больше, чем 1 будет увеличивать сайт больше, чем масштаб по умолчанию.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Несколько свойств в <strong>content</strong> разделяются запятой.<br />
</div>

  <p>
    <span class="v"><strong># @viewport</strong></span><br />
    <span class="v2"><strong>@viewport</strong></span> - позволяет оптимизировать макет Web-страницы в зависимости от различных устройств и их размеров <a href="https://webref.ru/css/viewport" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Есть проблемы с браузерной поддержкой у данного правила.
</div>

  <p>
    <span class="v"><strong># Гибкий медиа-контент</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Медиа-контент будет подстраиваться под изменения области просмотра:<br />
    <br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Использование <span class="v2"><strong>max-width: 100%</strong></span> гарантирует для
    <span class="v3"><strong>&lt;img&gt;</strong></span>, <span class="v3"><strong>&lt;video&gt;</strong></span>,
    <span class="v3"><strong>&lt;canvas&gt;</strong></span> что при уменьшении области просмотра любой медиа-контент будет
    уменьшаться в соответствии с шириной контейнеров.<br />
    <br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Но это не очень хорошо подходит для фреймов и встраиваемого медиа-контента. А для этого необходимо:<br />
    1) Абсолютное позиционирование в родительском элементе.<br />
    2) У родителя - <span class="v2"><strong>width: 100%</strong></span> (для масштабирования, основываясь на области просмотра) и <span class="v2"><strong>height: 0</strong></span> (для включения haslayout в IE).<br />
    3) Добавление <span class="v2"><strong>padding-bottom</strong></span> к родителю, значение которого равно соотношению сторон видео (если 16:9, то 9 / 16 и переводится в %).<br />
    4) У родителя - относительное позиционирование.<br />
    5) У медиа - <span class="v2"><strong>width: 100%</strong></span> и <span class="v2"><strong>height: 100%</strong></span>.
  </p>

</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-primary" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Анимация</h3>
  </div>
<div class="panel-body">

<!-- Buttons -->

<button class="button3" id="PerB">Переходы</button>
<button class="button3" id="TraB">Трансформация</button>
<button class="button3" id="AniB">Анимация</button>
<button class="button3" id="TriB">3D-анимация</button>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
    <em>============================ Переходы:</em><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Позволяют плавно перейти от одного состояния элемента к другому. Отдельные свойства анимируются от начального состояния до конечного.
    Только треть свойств может быть анимирована. Все переходы занимают одинаковое время - 1s. Переход сработает при использовании псевдокласса.<br />
    <br />

    <span class="v3"><strong>transition</strong></span> - устанавливает эффект перехода между двумя состояниями элемента (универсальное свойство) <a href="https://webref.ru/css/transition" class="btn btn-primary" role="button">+</a><br />
    <span class="v3"><strong>transition-property</strong></span> - устанавливает имя стилевого свойства, значение которого будет отслеживаться для создания эффекта перехода <a href="https://webref.ru/css/transition-property" class="btn btn-primary" role="button">+</a><br />
    <span class="v3"><strong>transition-duration</strong></span> - задаёт время в секундах или миллисекундах, сколько должна длиться анимация перехода до её завершения. По умолчанию значение равно 0s, это означает, что никакой анимации нет, переход происходит мгновенно <a href="https://webref.ru/css/transition-duration" class="btn btn-primary" role="button">+</a><br />
    <span class="v3"><strong>transition-timing-function</strong></span> - устанавливает, насколько быстро должно изменяться значение стилевого свойство для которого применяется эффект перехода <a href="https://webref.ru/css/transition-timing-function" class="btn btn-primary" role="button">+</a><br />
    <span class="v3"><strong>transition-delay</strong></span> - устанавливает время ожидания перед запуском эффекта перехода <a href="https://webref.ru/css/transition-delay" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Не для всех свойств может быть выполнен переход. Только лишь для:<br />
  background-color, background-position, border-color, border-width, border-spacing,
  bottom, clip, color, crop, font-size, font-weight, height, left, letter-spacing,
  line-height, margin, max-height, max-width, min-height, min-width, opacity,
  outline-color, outline-offset, outline-width, padding, right, text-indent, text-shadow,
  top, vertical-align, visibility, width, word-spacing и z-index.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если указать несколько значений, то это будет по одному значению на каждое анимируемое свойство (переход). В
  противном случае - 1 значение для всех. Разделяются запятой.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> В свойстве <span class="v3"><strong>transition</strong></span> - по группам.
</div>
</div>

<!-- The Article -->

<div class="textblock" id="Tra">
  <p>
    <em>============================ Трансформация:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Набор функций, которые позволяют определенным образом придавать элементу форму. <a href="https://webref.ru/course/css-advanced/transform" class="btn btn-primary" role="button">+</a><br />
      <br />
      <span class="v3"><strong>translate()</strong></span> - позволяет перемещать элемент в плоскости (по осям х и у).<br />
      <span class="v3"><strong>rotate()</strong></span> - позволяет вращать элемент вокруг неподвижной точки. По умолчанию, вращение происходит вокруг центра элемента.<br />
      <span class="v3"><strong>scale()</strong></span> - позволяет изменять размер элемента.<br />
      <span class="v3"><strong>skew()</strong></span> - позволяет искажать элемент, сдвигая его стороны вдоль линий.<br /><br />

      <span class="v3"><strong>transform</strong></span> - трансформирует элемент, в частности, позволяет его масштабировать, вращать, сдвигать, наклонять, а также комбинировать виды трансформаций <a href="https://webref.ru/css/transform" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>transform-origin</strong></span> - устанавливает координаты точки, относительно которой будет происходить трансформация элемента <a href="https://webref.ru/css/transform-origin" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>transform-style</strong></span> - определяет, как дочерние элементы будут отображаться в 3D-пространстве <a href="https://webref.ru/css/transform-style" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>perspective</strong></span> - расстояние от плоскости экрана до точки сходимости линий и тем самым задаёт, насколько выражен эффект перспективы <a href="https://webref.ru/css/perspective" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>perspective-origin</strong></span> - координаты точки, куда смотрит наблюдатель <a href="https://webref.ru/css/perspective-origin" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>backface-visibility</strong></span> - показывать обратную сторону элемента или нет <a href="https://webref.ru/css/backface-visibility" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Рекомендуется использовать с префиксами.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> В <span class="v3"><strong>transform</strong></span> несколько свойств указываются без запятой.
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span class="v3"><strong>translate()</strong></span> и <span class="v3"><strong>transform-origin</strong></span> могут конфликтовать друг с другом.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Ani">
  <p>
    <em>============================ Анимация:</em><br />
      <a href="https://daneden.github.io/animate.css/">Animate.css</a><br />
      <a href="https://www.minimamente.com/example/magic_animations/">Magic.css</a><br />
      <br />

      <code>
        <strong>
          эл-т {<br />
            &nbsp;свойство : значение;<br />
            &nbsp;animation-name : name;<br />
          }<br /><br />

          @keyframes name {<br />
            &nbsp;0% {<br />
              &nbsp;&nbsp;свойство : значение;<br />
            &nbsp;}<br />
            &nbsp;100% {<br />
              &nbsp;&nbsp;свойство : значение;<br />
            &nbsp;}<br />
          }
        </strong>
      </code><br /><br />

      <span class="v3"><strong>@keyframes</strong></span> - (пишется до свойств <strong>animations*</strong>) устанавливает ключевые кадры
      при анимации элемента. Ключевой кадр - свойства элемента (прозрачность, цвет, положение и др.), которые должны применяться
      к элементу в заданный момент времени. Таким образом, анимация представляет собой плавный переход стилевых свойств от одного ключевого кадра к другому.
      Вычисление промежуточных значений между такими кадрами берёт на себя браузер <a  href="https://webref.ru/css/keyframes" class="btn btn-primary" role="button">+</a><br />
      <br />

      <span class="v3"><strong>animation</strong></span> - универсальное свойство которое задаёт сразу несколько параметров анимации <a href="https://webref.ru/css/animation" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>animation-delay</strong></span> - устанавливает время ожидания перед запуском цикла анимации <a href="https://webref.ru/css/animation-delay" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>animation-direction</strong></span> - устанавливает направление движения анимации <a href="https://webref.ru/css/animation-direction" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>animation-duration</strong></span> - задаёт время в секундах или миллисекундах, сколько должен длиться один цикл анимации. По умолчанию значение равно 0s, это означает, что никакой анимации нет <a href="https://webref.ru/css/animation-duration" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>animation-iteration-count</strong></span> - определяет, сколько раз проигрывать цикл анимации до её остановки <a href="https://webref.ru/css/animation-iteration-count" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>animation-fill-mode</strong></span> - определяет, какие стили должны применяться к элементу, когда анимация не проигрывается <a href="https://webref.ru/css/animation-fill-mode" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>animation-name</strong></span> - устанавливает одну или несколько анимаций, которые применяются к элементу. Представляет собой имя связанное с правилом <strong>@keyframes</strong>, оно в свою очередь задаёт последовательность движения <a href="https://webref.ru/css/animation-name" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>animation-play-state</strong></span> - определяет, проигрывать анимацию или поставить её на паузу <a href="https://webref.ru/css/animation-play-state" class="btn btn-primary" role="button">+</a><br />
      <span class="v3"><strong>animation-timing-function</strong></span> - устанавливает, согласно какой функции времени должна происходить анимация каждого цикла между ключевыми кадрами. Она представляет собой математическую функцию, показывающую, как быстро по времени меняется значение свойства <a href="https://webref.ru/css/animation-timing-function" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Рекомендуется использование префиксов для <span class="v3"><strong>@keyframes</strong></span>.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Tri">
  <p>
    <em>============================ 3D-Анимация:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> К родительскому элементу требуется применить <span class="v2"><strong>perspective: 500px</strong></span>, чтобы трёхмерное пространство стало заметным. В качестве альтернативы также
      может быть использовано <span class="v3"><strong>transform: perspective(500px)</strong></span>.<br />
      <br />

      <span class="v3"><strong>translate3d()</strong></span> - выполняет преобразование в трёх измерениях.<br />
  </p>
</div>

  </div>
</div>

</body>
</html>
