<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>HTML</title>

<link rel="shortcut icon" href="../Images/I/html.png" type="image/x-icon">

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
      <a class="navbar-brand"><i class="fa fa-html5 colored" aria-hidden="true"></i> HTML</a>
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

    </div>
  </div>
</div>

<!-- Panel -->

<div class="panel panel-warning" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Язык разметки документов во Всемирной паутине</h3>
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
          <a href="https://ru.wikipedia.org/wiki/HTML">* HTML</a> <br />
          <a href="https://ru.wikipedia.org/wiki/HTML5">* HTML5</a><br />
          <a href="https://ru.wikipedia.org/wiki/DHTML">* DHTML</a><br />
          <br />

          <span class="v"><strong># Элементы</strong></span><br />
          <a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B5%D0%B3_(%D1%8F%D0%B7%D1%8B%D0%BA%D0%B8_%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%82%D0%BA%D0%B8)">* Тег</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://www.w3.org/TR/html5/">* HTML Docs</a><br />
          <a href="https://validator.w3.org/">* Валидатор разметки </a><br />
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->

<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
  <i class="fa fa-puzzle-piece" aria-hidden="true"></i> Каркас Web-страницы
</button>

<!-- Modal -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times rojo" aria-hidden="true"></i></button>
        <h4 class="modal-title" id="myModalLabel">Web-страница состоит из:</h4>
      </div>
  <div class="modal-body">
    <p>
     <code>
       &lt;!DOCTYPE html&gt; <span class="Pos">Предназначен для указания типа текущего документа</span> <a href="https://webref.ru/html/!doctype" class="btn btn-primary" role="button">+</a> <br />
       <br />
       &lt;html&gt; <span class="Pos">Определяет начало HTML-файла</span> <a href="https://webref.ru/html/html" class="btn btn-primary" role="button">+</a> <br />
       <br />
       &lt;head&gt; <span class="Pos">Предназначен для хранения других элементов, цель которых — помочь браузеру в работе с данными</span> <a href="https://webref.ru/html/head" class="btn btn-primary" role="button">+</a> <br />
       <br />
       &lt;meta charset="..." /&gt; <span class="Pos">Установка кодировки документа</span> <a href="https://webref.ru/html/meta" class="btn btn-primary" role="button">+</a>
       <br />
       <br />
       &lt;title>...&lt;/title&gt; <span class="Pos">Название вкладки в браузере</span> <a href="https://webref.ru/html/title" class="btn btn-primary" role="button">+</a>
       <br />
       <br />
       &lt;link rel="shortcut icon" href="Images/.png" type="image/x-icon"&gt; <span class="Pos">Иконка вкладки</span>
       <br />
       <br />
       &lt;link href=".css" rel="stylesheet"&gt; <span class="Pos">Подключение внешнего CSS-файла</span> <a href="https://webref.ru/html/link" class="btn btn-primary" role="button">+</a>
       <br />
       <br />
       &lt;script src="..."&gt;&lt;/script&gt; <span class="Pos">Подключение внешнего JS-файла или сам скрипт (без атрибута <strong>src</strong>)</span> <a href="https://webref.ru/html/script" class="btn btn-primary" role="button">+</a>
       <br />
       <br />
       &lt;/head&gt; <br />
       <br />
       &lt;body&gt;
       <br />
       <span class="Pos">Предназначен для хранения содержания Web-страницы (контента), отображаемого в окне браузера</span> <a href="https://webref.ru/html/body" class="btn btn-primary" role="button">+</a>
       <br />
       &lt;/body&gt; <br />
       <br />
       &lt;/html&gt;
     </code>
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
              - Расширение файлов - <strong>.html</strong><br />
              - В разметке браузер игнорирует более одного пробела.<br />
              - Отсутствие кодировки может привести к уязвимости системы безопасности.<br />
              - &lt;html&gt; - корневой элемент. Узел - элемент не имеющий дочерних элементов.<br />
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
          Начало
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
<div class="alert alert-info alert-dismissible" role="alert">
  &lt;!DOCTYPE html&gt;<br />
  &lt;html&gt;<br />
  &lt;head&gt;<br />
  &lt;meta charset="..." /&gt;<br />
  &lt;title>...&lt;/title&gt;<br />
  &lt;link rel="shortcut icon" href="Images/.png" type="image/x-icon"&gt;<br />
  &lt;link href=".css" rel="stylesheet"&gt;<br />
  &lt;/head&gt;<br />
  &lt;body&gt;<br />
  &lt;/body&gt;<br />
  &lt;/html&gt;<br />
</div>
      </div>
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
</div>

<!-- Panel -->

<div class="panel panel-success" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Синтаксис</h3>
  </div>
    <div class="panel-body">

<!-- Buttons -->

<button class="button" id="CommB">Комментарии</button>
<button class="button" id="TagB">Теги</button>
<button class="button" id="TagsB">Форматирование текста</button>
<button class="button" id="SpiB">Списки</button>
<button class="button" id="TabB">Таблица</button>
<button class="button" id="StrB">Структура</button>
<button class="button" id="SpeB">Спецтеги</button>
<button class="button" id="AudB">Аудио / Видео</button>
<button class="button" id="GraB">Графика</button>
<button class="button" id="CanB">Canvas</button>
<button class="button" id="UniB">Атрибуты</button>
<button class="button" id="SobB">События</button>
<button class="button" id="MimB">MIME-типы</button>
<button class="button" id="MikB">Микроданные</button>
<button class="button" id="SemB">Семантика</button>
<button class="button" id="PodB">Поддержка</button>
<button class="button" id="OffB">Оффлайн</button>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v2"><strong>&lt;!-- ... --&gt;</strong></span> - однострочный / многострочный комментарий.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Tag">
  <p>
    <em>============================ Стандартные теги:</em><br />
      <span class="v2"><strong>&lt;h1&gt;...&lt;/h1&gt;</strong></span> - заголовок, где число - размер шрифта. Значения от 1 до 6 <a href="https://webref.ru/html/h1" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Оптимальное количество на странице:<br />
  <span class="v2"><strong>&lt;h1&gt;</strong></span> - только 1.<br />
  <span class="v2"><strong>&lt;h2&gt;</strong></span> - 2-4.<br />
  <span class="v2"><strong>&lt;h3&gt;</strong></span> - 4-8.<br />
</div>

  <p>
    <span class="v2"><strong>&lt;p&gt;...&lt;/p&gt;</strong></span> - текстовый абзац <a href="https://webref.ru/html/p" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Между несколькими абзацами автоматически создается разделяющее пространство (вертикальные отступы, перенос строки).
</div>

  <p>
    <span class="v2"><strong>&lt;a href="#"&gt;...&lt;/a&gt;</strong></span> - гиперссылка <a href="https://webref.ru/html/a" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Ссылка с якорем типа <span class="v4"><strong>href="#footer"</strong></span>, предназначена для навигации в пределах одной страницы. В атрибут <span class="v4"><strong>href=""</strong></span>
  указывается <span class="v4"><strong>#</strong></span> с <span class="v4"><strong>id</strong></span> элемента.
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Ссылка на e-mail (работает только с почтовыми сервисами):<br />
  <span class="v4"><strong>href="mailto:@mail.com"</strong></span> - дополнительно могут быть добавлены тема и текст. Первый параметр начинается с <span class="v4"><strong>?</strong></span>,
  чтобы связаться с ссылкой. <span class="v4"><strong>&</strong></span> - разделяет параметры. Если в строке несколько слов, пробел ставится с помощью - <span class="v4"><strong>%20</strong></span>.
  А перенос строки - <span class="v4"><strong>%0A</strong></span>.<br />
  <span class="v4"><strong>subject=</strong></span> - тема сообщения.<br />
  <span class="v4"><strong>body=</strong></span> - текст в письме.
</div>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Атрибут <span class="v4"><strong>target="_blank"</strong></span> - открывает ссылку в новом окне браузера.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Атрибут <span class="v4"><strong>target="_self"</strong></span> - открывает ссылку в этом же окне браузера. Стоит по умолчанию.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Атрибут <span class="v4"><strong>download</strong></span> и + указать путь с файлом - ссылка на скачивание файла. Не поддерживается IE.<br />
</div>

  <p>
    <span class="v2"><strong>&lt;img src="" /&gt;</strong></span> - добавление изображения <a href="https://webref.ru/html/img" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Значение атрибута <span class="v4"><strong>alt</strong></span> собирают поисковые системы - это помогает донести значение изображения.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Если указать для изображения одновременно 2 свойства (высота и ширина), то пропорции изображения нарушатся и появятся
  искажения. Лучше использовать одно свойство, так как другой параметр настроится автоматически, чтобы сохранить пропорции
  изображения.
</div>

  <p>
    <span class="v2"><strong>&lt;br /&gt;</strong></span> - перенос элемента на новую строку <a href="https://webref.ru/html/br" class="btn btn-primary" role="button">+</a> <br />
    <span class="v2"><strong>&lt;hr /&gt;</strong></span> - рисует горизонтальную линию, которая по своему виду зависит от используемых параметров, а также браузера <a href="https://webref.ru/html/hr" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>&lt;wbr&gt;</strong></span> - указывает браузеру место, где допускается делать перенос строки в тексте, если этого требует ширина родительского элемента <a href="https://webref.ru/html/wbr" class="btn btn-primary" role="button">+</a><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Tags">
  <p>
    <em>============================ Теги форматирования текста:</em><br />
      <span class="v2"><strong>&lt;strong&gt;...&lt;/strong&gt;</strong></span> - выделение жирным шрифтом важных слов <a href="https://webref.ru/html/strong" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;em&gt;...&lt;/em&gt;</strong></span> - выделение курсивом <a href="https://webref.ru/html/em" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;big&gt;...&lt;/big&gt;</strong></span> - увеличивает размер шрифта на единицу по сравнению с обычным текстом <a href="https://webref.ru/html/big" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;small&gt;...&lt;/small&gt;</strong></span> - уменьшает размер шрифта на единицу по сравнению с обычным текстом <a href="https://webref.ru/html/small" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;cite&gt;...&lt;/cite&gt;</strong></span> - представляет название произведения (книги, статьи, поэмы, сценария, фильма, песни, оперы, игры и др.) <a href="https://webref.ru/html/cite" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;q&gt;...&lt;/q&gt;</strong></span> - выделение цитаты <a href="https://webref.ru/html/q" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;blockquote&gt;...&lt;/blockquote&gt;</strong></span> - выделение длинных цитат <a href="https://webref.ru/html/blockquote" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;time&gt;...&lt;/time&gt;</strong></span> - помечает текст внутри тега как дата, время или оба значения <a href="https://webref.ru/html/time" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;dfn&gt;...&lt;/dfn&gt;</strong></span> - применяется для выделения терминов при их первом появлении в тексте <a href="https://webref.ru/html/dfn" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;abbr&gt;...&lt;/abbr&gt;</strong></span> - указывает, что последовательность символов является аббревиатурой. С помощью атрибута <span class="v4"><strong>title</strong></span> дается расшифровка сокращения, что позволяет понимать аббревиатуру тем людям, которые с ней не знакомы <a href="https://webref.ru/html/abbr" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;code&gt;...&lt;/code&gt;</strong></span> - предназначен для отображения одной или нескольких строк текста, который представляет собой программный код <a href="https://webref.ru/html/code" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;pre&gt;...&lt;/pre&gt;</strong></span> - определяет блок предварительно форматированного текста. Такой текст отображается обычно моноширинным шрифтом и со всеми пробелами между словами <a href="https://webref.ru/html/pre" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;sup&gt;...&lt;/sup&gt;</strong></span> - отображает шрифт в виде верхнего индекса. Шрифт при этом отображается выше базовой линии текста и уменьшенного размера <a href="https://webref.ru/html/sup" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;sub&gt;...&lt;/sub&gt;</strong></span> - отображает шрифт в виде нижнего индекса. Текст при этом располагается ниже базовой линии остальных символов строки и уменьшенного размера <a href="https://webref.ru/html/sub" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;del&gt;...&lt;/del&gt;</strong></span> - выделение текста, который был удалён в новой версии документа <a href="https://webref.ru/html/del" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;ins&gt;...&lt;/ins&gt;</strong></span> - выделение текста, который был добавлен в новую версию документа <a href="https://webref.ru/html/ins" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;mark&gt;...&lt;/mark&gt;</strong></span> - помечает фрагмент документа или выделяет его в справочных целях <a href="https://webref.ru/html/mark" class="btn btn-primary" role="button">+</a><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Spi">
  <p>
    <em>============================ Списки:</em><br />
      <span class="v2"><strong>&lt;ol&gt;&lt;/ol&gt;</strong></span> - упорядоченный пронумерованный список <a href="https://webref.ru/html/ol" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>&lt;ul&gt;&lt;/ul&gt;</strong></span> - упорядоченный маркированный список <a href="https://webref.ru/html/ul" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>&lt;li&gt;...&lt;/li&gt;</strong></span> - элемент списка. Находится внутри тегов списка <a href="https://webref.ru/html/li" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;dl&gt;...&lt;/dl&gt;</strong></span> - создание списка определений <a href="https://webref.ru/html/dl" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;dt&gt;...&lt;/dt&gt;</strong></span> - создание термина <a href="https://webref.ru/html/dt" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;dd&gt;...&lt;/dd&gt;</strong></span> - определение термина <a href="https://webref.ru/html/dd" class="btn btn-primary" role="button">+</a>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Tab">
  <p>
    <em>============================ Таблица:</em><br />
      <span class="v2"><strong>&lt;table&gt;...&lt;/table&gt;</strong></span> - служит контейнером для элементов, определяющих содержимое таблицы <a href="https://webref.ru/html/table" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;tr&gt;...&lt;/tr&gt;</strong></span> - служит контейнером для создания строки таблицы <a href="https://webref.ru/html/tr" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;td&gt;...&lt;/td&gt;</strong></span> - предназначен для создания одной ячейки таблицы и должен размещаться внутри контейнера <span class="v2"><strong>&lt;tr&gt;</strong></span> <a href="https://webref.ru/html/td" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;caption&gt;...&lt;/caption&gt;</strong></span> - предназначен для создания заголовка к таблице и может размещаться только внутри контейнера <span class="v2"><strong>&lt;table&gt;</strong></span> <a href="https://webref.ru/html/caption" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;col атрибуты&gt;</strong></span> - задает ширину и другие характеристики одной или нескольких колонок таблицы <a href="https://webref.ru/html/col" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;colgroup атрибуты&gt;</strong></span> - предназначен для задания ширины и стиля одной или нескольких колонок таблицы <a href="https://webref.ru/html/colgroup" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;th&gt;...&lt;/th&gt;</strong></span> - предназначен для создания одной ячейки таблицы, которая обозначается как заголовочная <a href="https://webref.ru/html/th" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;thead&gt;...&lt;/thead&gt;</strong></span> - предназначен для хранения одной или нескольких строк, которые представлены вверху таблицы <a href="https://webref.ru/html/thead" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;tbody&gt;...&lt;/tbody&gt;</strong></span> - предназначен для хранения одной или нескольких строк таблицы. Это позволяет создавать структурные блоки, к которым можно применять единое оформление через стили, а также управлять их видом через скрипты <a href="https://webref.ru/html/tbody" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;tfoot&gt;...&lt;/tfoot&gt;</strong></span> - предназначен для хранения одной или нескольких строк, которые представлены внизу таблицы <a href="https://webref.ru/html/tfoot" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Атрибут <span class="v4"><strong>colspan</strong></span> устанавливает число ячеек, которые должны быть объединены по горизонтали, а атрибут <span class="v4"><strong>rowspan</strong></span>
  устанавливает число ячеек, которые должны быть объединены по вертикали. <a href="http://htmlbook.ru/html/td/colspan" class="btn btn-primary" role="button">C</a>  <a href="http://htmlbook.ru/html/td/rowspan" class="btn btn-primary" role="button">R</a><br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Для создания пустой ячейки - содержимое - nbsp; через амперсанд.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Для создания табличной "зебры" исп. псевдокласс <strong>:nth-child(even)</strong> для четных строк и <strong>:nth-child(odd)</strong>
  для нечетных строк.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Названия выравниваются по левому краю, а числовые данные по правому краю (кроме идентификатора).
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Если число ячеек в каждой строке не будет совпадать - появятся пустые фантомные ячейки.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Str">
  <p>
    <em>============================ Структура:</em><br />
      <span class="v2"><strong>&lt;span&gt;...&lt;/span&gt;</strong></span> - выделяет часть инф. внутри других тегов для установки стиля. Строчный элемент. Занимает ширину по содержимому <a href="https://webref.ru/html/span" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>&lt;div&gt;...&lt;/div&gt;</strong></span> - выделяет фрагмент документа в блок, где содержимое можно менять. По умолчанию растягивается по всей ширине браузера <a href="https://webref.ru/html/div" class="btn btn-primary" role="button">+</a> <br /><br />

      <span class="v2"><strong>&lt;header&gt;...&lt;/header&gt;</strong></span> - шапка сайта. Блочный элемент <a href="https://webref.ru/html/header" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>&lt;footer&gt;...&lt;/footer&gt;</strong></span> - подвал сайта. Блочный элемент <a href="https://webref.ru/html/footer" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>&lt;article&gt;...&lt;/article&gt;</strong></span> - задает содержание сайта вроде новости, статьи, записи блога, форума <a href="https://webref.ru/html/article" class="btn btn-primary" role="button">+</a> <br />
      <span class="v2"><strong>&lt;section&gt;...&lt;/section&gt;</strong></span> - задает раздел документа. Исп. для блока новостей, контактной инф. <a href="https://webref.ru/html/section" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;main&gt;...&lt;/main&gt;</strong></span> - предназначен для основного содержимого документа. Содержимое должно быть уникальным и не включать типовые блоки вроде шапки сайта, подвала, навигации, боковой панели, формы поиска и т. п. <a href="https://webref.ru/html/main" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;nav&gt;...&lt;/nav&gt;</strong></span> - задает навигацию по сайту <a href="https://webref.ru/html/nav" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;aside&gt;...&lt;/aside&gt;</strong></span> - определяет блок сбоку от контента для размещения рубрик, ссылок на архив, меток и другой информации (боковая панель) <a href="https://webref.ru/html/aside" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Заголовок для боковой панели - <span class="v2"><strong>&lt;h1&gt;&lt;small&gt;...&lt;/small&gt;&lt;/h1&gt;</strong></span>
</div>

  <p>
    <span class="v2"><strong>&lt;address&gt;...&lt;/address&gt;</strong></span> - предназначен для хранения информации об авторе и может включать в себя любые элементы HTML вроде ссылок, текста, выделений и т.д. <a href="https://webref.ru/html/address" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>&lt;figure&gt;...&lt;/figure&gt;</strong></span> - используется для группирования любых элементов, например, изображений и подписей к ним <a href="https://webref.ru/html/figure" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>&lt;figcaption&gt;...&lt;/figcaption&gt;</strong></span> - содержит описание для тега <span class="v2"><strong>&lt;figure&gt;</strong></span>. Тег должен быть первым или последним элементом в группе <a href="https://webref.ru/html/figcaption" class="btn btn-primary" role="button">+</a><br />
    <span class="v2"><strong>&lt;optgroup&gt;...&lt;/optgroup&gt;</strong></span> - контейнер, внутри которого располагаются теги <span class="v2"><strong>&lt;option&gt;</strong></span> объединенные в одну группу <a href="https://webref.ru/html/optgroup" class="btn btn-primary" role="button">+</a>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Spe">
  <p>
   <em>============================ Спецтеги:</em> <br />
     <span class="v2"><strong>&lt;applet&gt;&lt;/applet&gt;</strong></span> - подключение к HTML-документу Java-апплета <a href="https://webref.ru/html/applet" class="btn btn-primary" role="button">+</a><br />
     <span class="v2"><strong>&lt;object&gt;&lt;/object&gt;</strong></span> - сообщает браузеру, как загружать и отображать объекты, которые исходно браузер не понимает. Как правило, такие объекты требуют подключения к браузеру специального модуля, который называется плагин, или запуска вспомогательной программы <a href="https://webref.ru/html/object" class="btn btn-primary" role="button">+</a><br />
     <span class="v2"><strong>&lt;iframe&gt;&lt;/iframe&gt;</strong></span> - создаёт встроенный фрейм, который находится внутри обычного документа, он позволяет загружать в область заданных размеров любые другие независимые документы <a href="https://webref.ru/html/iframe" class="btn btn-primary" role="button">+</a><br />
     <span class="v2"><strong>&lt;map&gt;&lt;/map&gt;</strong></span> - карта изображения (кликабельные области) <a href="" class="btn btn-primary" role="button">+</a>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Aud">
  <p>
   <em>============================ Аудио / Видео:</em><br />
    <span class="v3"><strong>&lt;video src="адрес"&gt;...&lt;/video&gt;</strong></span> - добавляет, воспроизводит и управляет настройками видеоролика на Web-странице <a href="https://webref.ru/html/video" class="btn btn-primary" role="button">+</a> <br />
    <span class="v3"><strong>&lt;audio src="адрес"&gt;...&lt;/audio&gt;</strong></span> - добавляет, воспроизводит и управляет настройками аудиозаписи на Web-странице <a href="https://webref.ru/html/audio" class="btn btn-primary" role="button">+</a> <br />
    <span class="v3"><strong>&lt;source&gt;</strong></span> - вставляет аудио или видеофайл <a href="https://webref.ru/html/source" class="btn btn-primary" role="button">+</a> <br />
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> По умолчанию <span class="v3"><strong>&lt;audio&gt;</strong></span> не отображается на странице - только с атрибутом <span class="v4"><strong>controls</strong></span>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Использование <strong>metadata / none</strong> для атрибута <span class="v4"><strong>preload</strong></span> поможет не загружать канал и позволит странице
  быстрее загружаться.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Какие-то браузеры могут не поддерживать некоторые форматы аудио - имеет смысл использовать один и тот-же элемент (несколько ссылок), но разных форматов, так как браузер загрузит
  то, что поддерживает, а остальные форматы проигнорирует.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Чтобы видео можно было смотреть на всех устройствах / платформах - необходимо кодировать видео несколько раз + предусмотреть
  откат к Flash-плееру.<br /> По умолчанию, для элемента <span class="v3"><strong>&lt;video&gt;</strong></span> не добавляются кнопки управления. Также можно создать свой собственный интерфейс плеера.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Атрибут <span class="v4"><strong>type</strong></span> сообщает информацию о видео браузеру, что позволит сэкономить трафик - браузер не будет пытаться запустить все загруженные видеофайлы.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Видеофайлы должны быть сопоставленны с соответствующим MIME-типом. Для корректной работы сервер должен включать в HTTP-заголовок Content-Type соответствующий MIME-тип.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Вложение <span class="v3"><strong>&lt;object&gt;</strong></span> в <span class="v3"><strong>&lt;video&gt;</strong></span> - те браузеры, которые не поддерживают HTML5-плеер будут игнорировать <span class="v3"><strong>&lt;video&gt;</strong></span> и
  просто отображать <span class="v3"><strong>&lt;object&gt;</strong></span>, который будет ссылаться на Flash. А браузеры, которые поддерживают - обнаружат ссылку на видео, которое смогут воспроизвести и проигнорируют вложенный <span class="v3"><strong>&lt;object&gt;</strong></span>, так как в спецификации HTML5
  указано, что все элементы (кроме <span class="v3"><strong>&lt;source&gt;</strong></span>) должны игнорироваться внутри <span class="v3"><strong>&lt;video&gt;</strong></span>.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Gra">
  <p>
    <em>============================ Графика:</em><br />
      <span class="v"><strong># SVG</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> SVG (Scalable Vector Graphics, масштабируемая векторная графика) — это векторный формат, в отличие от предыдущих растровых форматов. Растровое изображение состоит из набора разноцветных пикселей, которые для человеческого глаза сливаются в единую картинку. Векторное же строится из набора объектов, вроде линий, кривых, прямоугольников, окружностей и др. При увеличении масштаба векторное изображение увеличивается пропорционально, сохраняя своё высокое качество.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Область применения - масштабируемые изображения, рисунки, логотипы, иллюстрации, графики и диаграммы.
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Особенности:<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Надписи остаются обычным текстом, их можно выделять, копировать, они читаются поисковыми системами при обходе сайта.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Рисунки можно масштабировать произвольно, сохраняя при этом высокое качество.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Формат не поддерживается браузером Internet Explorer до версии 9.0.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Can">
  <p>
    <em>============================ Canvas:</em><br />
      <span class="v2"><strong>&lt;canvas&gt;&lt;/canvas&gt;</strong></span> - создаёт область, в которой при помощи JavaScript можно рисовать разные объекты, выводить изображения, трансформировать их и менять свойства <a href="https://webref.ru/html/canvas" class="btn btn-primary" role="button">+</a><br />
      <br />

      <span class="v"><strong># Рисование</strong></span><br />
      <code>
        <strong>
          function draw() {<br />
            &nbsp;var canvas = document.getElementById("canvas");<br />
            &nbsp;var context = canvas.getContext("2d");<br /><br />

            &nbsp;context.save();<br />
            &nbsp;context.translate(x, y); &nbsp;&nbsp;//Смена координат (позиции для рисования)<br /><br />

            &nbsp;//Начало рисования<br />
            &nbsp;context.beginPath(); &nbsp;&nbsp;//Начать новый контур<br />
            &nbsp;context.moveTo(x, y); &nbsp;&nbsp;//Перемещение к указанной точке<br />
            &nbsp;context.lineTo(x, y); &nbsp;&nbsp;//Рисование линии от указанной точки до конечной<br /><br />

            &nbsp;context.closePath();<br /><br />

            &nbsp;//Стили<br />
            &nbsp;context.fillStyle = ""; &nbsp;&nbsp;//Цвет заливки - по умолчанию черный<br />
            &nbsp;context.lineWidth = ; &nbsp;&nbsp;//Ширина линии<br />
            &nbsp;context.strokeStyle = ""; &nbsp;&nbsp;//Цвет линии<br />
            &nbsp;context.LineJoin = ""; &nbsp;&nbsp;//Стиль стыковых линий<br /><br />

            &nbsp;//Прочее<br />
            &nbsp;context.fill(); &nbsp;&nbsp;//Заливка<br />
            &nbsp;context.clearRect(x, y, width, height); &nbsp;&nbsp;//Очистка прямоугольной области от контекста<br />
            &nbsp;context.fillRect(x, y); &nbsp;&nbsp;//Заполнение цветом прямоугольной области<br /><br />

            &nbsp;//Прорисовка контура<br />
            &nbsp;context.stroke(); &nbsp;&nbsp;//Чернильный метод<br />
            &nbsp;context.restore(); &nbsp;&nbsp;//Восстанавливает прежнее значение контекста<br />
          }
        </strong>
      </code><br /><br />

      <span class="v"><strong># Методы</strong></span><br />
      <span class="v3"><strong>.fillRect(x, y, width, height)</strong></span> - рисует прямоугольник.<br />
      <span class="v3"><strong>.strokeRect(x, y, width, height)</strong></span> - рисует область с границами.<br />
      <br />

      <span class="v"><strong># Градиенты</strong></span><br />
      <span class="v2"><strong>createLinearGradient()</strong></span> - линейный градиент.<br />
      <span class="v2"><strong>createRadialGradient()</strong></span> - радиальный градиент.<br />
      <br />

      <span class="v"><strong># Рисование текста</strong></span><br />
      <span class="v3"><strong>.font</strong></span> - стиль, насыщенность, размер, межстрочное расстояние.<br />
      <span class="v3"><strong>.textAlign</strong></span> - выравнивание текста.<br />
      <span class="v3"><strong>.textBaseLine</strong></span> - где рисовать текст относительно начальной точки.<br />
      <span class="v3"><strong>.fillText(x, y, width, height)</strong></span> - рисование текста.<br />
      <br />

      <span class="v"><strong># Загрузка изображения в Canvas</strong></span><br />
      <code>
        <strong>
          var img = new Image();<br /><br />

          img.onload = function() {<br />
            &nbsp;context.drawImage(img, x, y);<br />
          }<br /><br />

          img.src = "";
        </strong>
      </code>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Установка h / w сотрет содержимое холста и сбросит все свойства контекста рисования в значения по умолчанию. Исп. для
  перезагрузки холста.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Холст - двумерная сетка.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Рисование однопиксельной линии с целыми координатами - будет перекрывать противоположные стороны пиксельного квадрата, т.е. ширина будет
  = 2px. Для рисования линии в 1px - 0.5. На экране невозможно отобразить 1/2px.
</div>

<div class="alert alert-warning" role="alert">
  <i class="fa fa-wrench" aria-hidden="true"></i> Для корректной работы в IE необходим excanvas.js. Однако не будут поддерживаться радиальные градиенты, изображения должны
  повторяться в обоих направлениях, области кадрирования не поддерживаются, некорректная работа с контурами, медленная работа - так как анализатор JS в IE работает медленнее, чем
  в других браузерах.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Uni">
  <p>
    <em>============================ Универсальные атрибуты:</em><br />
      <span class="v4"><strong>accesskey</strong></span> - позволяет получить доступ к элементу с помощью сочетания клавиш с заданной в атрибуте буквой или цифрой <a href="https://webref.ru/html/attr/accesskey" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>class</strong></span> - задает стилевой класс, который позволяет связать определенный тег со стилевым оформлением <a href="https://webref.ru/html/attr/class" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Имя класса должно состоять более чем из 2-х символов (может содержать дефис и нижнее подчеркивание + цифры).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Может содержать более одного имени класса (разделяются пробелом, возможное число - 2000).
</div>

    <p>
      <span class="v4"><strong>contenteditable</strong></span> - сообщает, что элемент доступен для редактирования пользователем — можно удалять текст и вводить новый <a href="https://webref.ru/html/attr/contenteditable" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>contextmenu</strong></span> - устанавливает контекстное меню для элемента <a href="https://webref.ru/html/attr/contextmenu" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>dir</strong></span> - задает направление и отображение текста — слева направо или справа налево <a href="https://webref.ru/html/attr/dir" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>hidden</strong></span> - скрывает содержимое элемента от просмотра <a href="https://webref.ru/html/attr/hidden" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>id</strong></span> - задает стилевой идентификатор — уникальное имя элемента, которое используется для изменения его стиля и обращения к нему через скрипты <a href="https://webref.ru/html/attr/id" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>lang</strong></span> - текст документа может быть набран как на одном языке, так и содержать вставки на других языках, которые могут различаться по своим правилам оформления текста <a href="https://webref.ru/html/attr/lang" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>spellcheck</strong></span> - указывает браузеру проверять или нет правописание и грамматику в тексте <a href="https://webref.ru/html/attr/spellcheck" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>style</strong></span> - применяется для определения стиля элемента с помощью правил CSS <a href="https://webref.ru/html/attr/style" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>tabindex</strong></span> - устанавливает порядок получения фокуса при переходе между элементами с помощью клавиши Tab <a href="https://webref.ru/html/attr/tabindex" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>title</strong></span> - описывает содержимое элемента в виде всплывающей подсказки, которая появляется при наведении курсора на элемент <a href="https://webref.ru/html/attr/title" class="btn btn-primary" role="button">+</a><br />
      <span class="v4"><strong>draggable</strong></span> - определяет, можно ли перетаскивать элемент.<br />
      <span class="v4"><strong>dropzone</strong></span> - определяет, можно ли копировать переносимые данные при переносе на элемент.<br />
      <span class="v4"><strong>translate</strong></span> - определяет, должно ли переводиться содержимое элемента.<br />
      <span class="v4"><strong>xml:lang</strong></span> - применяется только в XHTML-документах и указывает язык всего текста или его фрагмента <a href="http://htmlbook.ru/html/attr/xml-lang" class="btn btn-primary" role="button">+</a> <br /><br />

      <span class="v"><strong># Другие атрибуты</strong></span><br />
      <span class="v4"><strong>role</strong></span> - позволяет наиболее четко указать назначение блока / элемента страницы при
      взаимодействии пользователя с сайтом.<br />
      <br />

      <span class="v"><strong># Пользовательские атрибуты</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Установка и определение собственных атрибутов.<br />
      <span class="v4"><strong>data-имя="содержимое"</strong></span> - создание пользовательского атрибута.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sob">
  <p>
   <em>============================ События:</em><br />
    <span class="v"><strong># Мышь</strong></span><br />
    <span class="v4"><strong>onclick=""</strong></span> - возникает при щелчке левой кнопкой мыши на элементе <a href="https://webref.ru/html/attr/onclick" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>ondblclick=""</strong></span> - возникает при двойном щелчке левой кнопкой мыши на элементе <a href="https://webref.ru/html/attr/ondblclick" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onmousedown=""</strong></span> - срабатывает в момент нажатия на кнопку мыши <a href="https://webref.ru/html/attr/onmousedown" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onmousemove=""</strong></span> - используется для определения перемещения курсора мыши в любом направлении экрана <a href="https://webref.ru/html/attr/onmousemove" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onmouseout=""</strong></span> - срабатывает, когда курсор мыши выходит за пределы элемента <a href="https://webref.ru/html/attr/onmouseout" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onmouseover=""</strong></span> - срабатывает, когда курсор мыши наводится на элемент <a href="https://webref.ru/html/attr/onmouseover" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onmouseup=""</strong></span> - срабатывает при отпускании кнопки мыши, пока курсор находится в пределах элемента <a href="https://webref.ru/html/attr/onmouseup" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onscroll=""</strong></span> - происходит при прокручивании содержимого Web-страницы <a href="https://webref.ru/html/attr/onscroll" class="btn btn-primary" role="button">+</a><br />
    <br />

    <span class="v"><strong># Фокус</strong></span><br />
    <span class="v4"><strong>onfocus=""</strong></span> - возникает при получении элементом фокуса <a href="https://webref.ru/html/attr/onfocus" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onblur=""</strong></span> - возникает при потере элемента фокуса <a href="https://webref.ru/html/attr/onblur" class="btn btn-primary" role="button">+</a><br />
    <br />

    <span class="v"><strong># Клавиатура</strong></span><br />
    <span class="v4"><strong>onkeydown=""</strong></span> - cрабатывает в момент нажатия клавиши, но когда она еще не отпущена <a href="https://webref.ru/html/attr/onkeydown" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onkeypress=""</strong></span> - срабатывает, когда клавиша на клавиатуре нажата и отпущена <a href="https://webref.ru/html/attr/onkeypress" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onkeyup=""</strong></span> - возникает в момент отпускания нажатой клавиши <a href="https://webref.ru/html/attr/onkeyup" class="btn btn-primary" role="button">+</a><br />
    <br />

    <span class="v"><strong># Форма</strong></span><br />
    <span class="v4"><strong>onchange=""</strong></span> - возникает при изменении значения элемента формы, вроде текстового поля или списка <a href="https://webref.ru/html/attr/onchange" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onreset=""</strong></span> - возникает при очистке формы, происходящей при нажатии на кнопку <strong>Reset</strong> <a href="https://webref.ru/html/attr/onreset" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onselect=""</strong></span> - применяется в текстовых полях формы и включается при выделении текста с помощью мыши или клавиатуры <a href="https://webref.ru/html/attr/onselect" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onsubmit=""</strong></span> - возникает при отправке формы, это обычно происходит, когда пользователь нажимает специальную кнопку <strong>Submit</strong> <a href="https://webref.ru/html/attr/onsubmit" class="btn btn-primary" role="button">+</a><br />
    <br />

    <span class="v"><strong># Web-страница</strong></span><br />
    <span class="v4"><strong>onload=""</strong></span> - используется как указатель, что Web-страница полностью загружена, включая содержание, изображения, стилевые файлы и внешние скрипты <a href="https://webref.ru/html/attr/onload" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>onunload=""</strong></span> - срабатывает в том случае, когда Web-страница не загрузилась по каким-либо причинам, либо при закрытии окна (вкладки) браузера <a href="https://webref.ru/html/attr/onunload" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Запуск JS-скрипта - <span class="v4"><strong>событие="function_name();"</strong></span>. Если скриптов несколько, то разделяются пробелом.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Mim">
  <p>
    <em>============================ MIME-типы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Спецификация для передачи по сети файлов различного типа: изображений, музыки, текстов, видео, архивов и др. Указание MIME-типа используется
      в HTML обычно при передаче данных форм и вставки на страницу различных объектов.<br />
      <a href="https://webref.ru/html/value/mime" class="btn btn-primary" role="button">MIME-types</a>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mik">
  <p>
    <em>============================ Микроданные:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Обеспечение дополнительной семантики для Web-страниц. Комментирование DOM в области видимости
      пары имя / значение из пользовательских словарей. Атрибут.<br />
      <span class="v4"><strong>itemtype</strong></span> - какой словарь микроданных используется.<br />
      <span class="v4"><strong>itemscope</strong></span> - область видимости словаря.<br />
      <span class="v4"><strong>itemprop</strong></span> - тип.<br />
      <br />

      <code>
        <strong>
          &lt;p itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address"&gt;<br />
            &nbsp;&lt;span itemprop="region"&gt;CA&lt;/span&gt;<br />
          &lt;/p&gt;<br />
        </strong>
      </code><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Каждый отдельный фрагмент информации должен быть обернут в фиктивный <strong>&lt;span&gt;</strong>, чтобы добавить микроданные.
</div>

  <p>
    <span class="v"><strong># Разметка людей</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Словарь Person.<br />
    <strong>name</strong> - имя.<br />
    <strong>nickname</strong> - псевдоним.<br />
    <strong>photo</strong> - ссылка на изображение.<br />
    <strong>title</strong> - должность.<br />
    <strong>role</strong> - профессия.<br />
    <strong>url</strong> - ссылка на личный сайт.<br />
    <strong>affilation</strong> - организация, в которой работает.<br />
    <strong>friend</strong> - соцсвязь.<br />
    <strong>adress</strong> - местоположение / место проживания.<br />
    <br />

    <span class="v"><strong># Разметка организаций</strong></span><br />
    <strong>name</strong> - название организации.<br />
    <strong>url</strong> - ее сайт.<br />
    <strong>address</strong> - местополежение.<br />
    <strong>tel</strong> - телефон.<br />
    <strong>geo</strong> - географические координаты.<br />
    <br />

    <span class="v"><strong># Разметка мероприятий</strong></span><br />
    <strong>name</strong> - название события.<br />
    <strong>url</strong> - ссылка на сайт события.<br />
    <strong>location</strong> - место проведения.<br />
    <strong>description</strong> - описание события.<br />
    <strong>startDate</strong> - дата и время начала.<br />
    <strong>endDate</strong> - конец события.<br />
    <strong>duration</strong> - категория мероприятия.<br />
    <strong>eventType</strong> - продолжительность события в формате ISO.<br />
    <strong>geo</strong> - координаты события.<br />
    <strong>photo</strong> - изображение события.<br />
    <br />

    <span class="v"><strong># Разметка отзывов</strong></span><br />
    <strong>itemreviewed</strong> - предмет для обзора.<br />
    <strong>rating</strong> - рейтинг качества (от 1 до 5).<br />
    <strong>reviewer</strong> - имя автора обзора.<br />
    <strong>dtreviewed</strong> - дата обзора в формате ISO.<br />
    <strong>summary</strong> - краткое изложение обзора.<br />
    <strong>description</strong> - полное изложение обзора.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sem">
  <p>
    <em>============================ Семантика:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Семантика обеспечивает:<br />
      1) Однозначный смысл для содержимого.<br />
      2) Доступность.<br />
      3) Поиск и глобализацию.<br />
      4) Совместимость.
  </p>

  <p>
    <span class="v"><strong># Семантика элементов:</strong></span><br />
    <span class="v2"><strong>&lt;img /&gt;</strong></span> - для наглядности, а заключенное в <span class="v2"><strong>&lt;figure&gt;</strong></span>
    для связи с текстом (семантика).<br />
    <span class="v2"><strong>&lt;section&gt;</strong></span> - главы, вкладки в модальном окне.<br />
    <span class="v2"><strong>&lt;nav&gt;</strong></span> - группа навигационных ссылок.<br />
    <span class="v2"><strong>&lt;article&gt;</strong></span> - сообщение форума, статья, запись в блоге, комментарий, независимый контент.<br />
    <span class="v2"><strong>&lt;header&gt;</strong></span> - оглавление разделов, форма поиска, шапка сайта.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pod">
  <p>
    <em>============================ Поддержка:</em><br />
      <span class="v"><strong># Modernizr.js</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> JS-библиотека, предназначенная для проверки HTML5 / CSS3.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При запуске создает глобальный объект Modernizr, который содержит набор
      логических свойств для каждой обнаруженной технологии. Если что-то не поддерживается - Modernizr вернет <strong>false</strong>.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Off">
  <p>
    <em>============================ Оффлайновое приложение:</em><br />
      <span class="v"><strong># Манифест кэша</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Список всех ресурсов требуемых для приложения, пока оно отключено от сети.<br />
      <span class="v2"><strong>&lt;html manifest="/cache.manifest"&gt;</strong></span> - для загрузки и кэширования ресурсов.<br />
      <br />

      <span class="v"><strong># Раздел NETWORK</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Содержит элементы, которые не должны кэшироваться.<br />
      <br />

      <span class="v"><strong># Раздел FALLBACK</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Резервный раздел - для файлов, которые по какой-либо причине не могут быть сохранены в кэше
      или не кэшируются успешно.<br />
  </p>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-info" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Интерфейс</h3>
  </div>
    <div class="panel-body">

<!-- Buttons -->

<button class="button2" id="ForB">Форма</button>
<button class="button2" id="MetB">GET / POST</button>
<button class="button2" id="EleB">Элементы</button>

<!-- The Article -->

<div class="textblock" id="For">
  <p>
    <em>============================ Форма:</em><br />
      <span class="v3"><strong>&lt;form&gt;...&lt;/form&gt;</strong></span> - устанавливает форму на странице и определяет ее интерактивную часть <a href="https://webref.ru/html/form" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Предназначена для обмена данными между пользователем и сервером. Атрибут <span class="v4"><strong>action</strong></span> <a href="https://webref.ru/html/form/action" class="btn btn-primary" role="button">+</a> устанавливает
  адрес программы или документа, где обрабатываются данные формы. Сама программа должна быть написана на серверном языке.
  Но если страница написана на PHP и сама является обработчиком, то <span class="v4"><strong>action</strong></span>  можно опустить. Также формы
  не должны вкладываться одна в другую.
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> В <span class="v4"><strong>action</strong></span> можно указывать и e-mail адрес начиная его с ключевого слова <span class="v4"><strong>mailto:</strong></span>. Для
  корректной интерпретации также необходимо указать <span class="v4"><strong>enctype="text/plain"</strong></span>. В целях безопасности браузера
  задано, что отправить информацию, введенную в форме, по почте невозможно.
</div>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Для отделения элементов от формы, но сохраняя с ней взаимосвязь, к элементам добавляется атрибут <span class="v4"><strong>form</strong></span> со значением <span class="v4"><strong>name</strong></span> формы
  (для сложных макетов сайта и для элементов, которые выводятся с помощью скриптов) + параметры передачи формы можно перенести и в кнопки -
  атрибуты: <span class="v4"><strong>formaction</strong></span>, <span class="v4"><strong>formmethod</strong></span>, <span class="v4"><strong>formenctype</strong></span>, <span class="v4"><strong>formtarget</strong></span>.
</div>

  <p>
    <span class="v"><strong># Атрибуты</strong></span><br />
    <span class="v4"><strong>accept-charset</strong></span> - устанавливает кодировку, в которой сервер может принимать и обрабатывать данные <a href="https://webref.ru/html/form/accept-charset" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>autocomplete</strong></span> - включает автозаполение полей формы <a href="https://webref.ru/html/form/autocomplete" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>enctype</strong></span> - способ кодирования данных формы <a href="https://webref.ru/html/form/enctype" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>method</strong></span> - определяет, как будет отправлена информация с формы <a href="https://webref.ru/html/form/method" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>name</strong></span> - имя формы <a href="https://webref.ru/html/form/name" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>novalidate</strong></span> - отменяет встроенную проверку данных формы на корректность ввода <a href="https://webref.ru/html/form/novalidate" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>target</strong></span> - имя окна, куда обработчик будет загружать возвращаемый результат <a href="https://webref.ru/html/form/target" class="btn btn-primary" role="button">+</a>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Met">
  <p>
    <em>============================ Методы передачи данных:</em><br />
      <span class="v"><strong># Особенности:</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Определение метода - если в адресной строке "?", то это <strong>GET</strong>. <strong>POST</strong> передается пакетно в запросе и нигде не отображается.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если не указан <span class="v4"><strong>method</strong></span>, то по умолчанию <strong>GET</strong>.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> CMS используют метод <strong>GET</strong> для формирования содержимого документа (материалы). Множество страниц для сайта.
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> <span class="v2"><strong>GET</strong></span>:<br />
  - Ограничение на объем - 4кб.<br />
  - Передаваемые данные видны сразу всем.<br />
  - Страницы с разными запросами считаются различными. Их можно кэшировать как отдельные документы.<br />
  - Страницу с запросом можно добавить в закладки браузера и обратиться к ней позже.<br />
  <br />
  <span class="v"><strong># Применение GET</strong></span><br />
  <i class="fa fa-thumb-tack" aria-hidden="true"></i> Передача небольших текстовых данных на сервер, поиск по сайту. Данные для поисковых систем. Позволяет делиться результатами поиска с друзьями,
  слать ссылку по e-mail или выкладывать ее на блоге/форуме.<br />
  <br />

  <i class="fa fa-circle" aria-hidden="true"></i> <span class="v2"><strong>POST</strong></span>:<br />
  - Ограничения на объем задаются сервером.<br />
  - Передаваемые данные видны только при просмотре через расширения браузера или другими методами.<br />
  - При кэшировании данных страница всегда одна.<br />
  - Страницы с разными запросами имеют один адрес. Запрос повторить нельзя.<br />
  <br />
  <span class="v"><strong># Применение POST</strong></span><br />
  <i class="fa fa-thumb-tack" aria-hidden="true"></i> Пересылка файлов (фото, архивы, программы), отправка комментариев, добавление и редактирование записей/сообщений в блоге или форуме.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Ele">
  <p>
    <em>============================ Элементы формы:</em><br />
      <span class="v3"><strong>&lt;input&gt;</strong></span> - позволяет создавать разные элементы интерфейса и обеспечить взаимодействие с
      пользователем. Если данные введенные пользователем должны быть отправлены на сервер, то данный тег должен
      размещаться внутри <span class="v3"><strong>&lt;form&gt;</strong></span>. Атрибут <span class="v4"><strong>type=""</strong></span><a href="https://webref.ru/html/input/type" class="btn btn-primary" role="button">+</a> определяет тип элемента <a href="https://webref.ru/html/input" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Нельзя вкладывать внутрь <span class="v2"><strong>&lt;a&gt;</strong></span>, <span class="v2"><strong>&lt;button&gt;</strong></span> и <span class="v2"><strong>&lt;datalist&gt;</strong></span>.
</div>

  <p>
    <span class="v"><strong># Типы</strong></span><br />
    <span class="v4"><strong>text</strong></span> - текстовое поле.<br />
    <span class="v4"><strong>checkbox</strong></span> - флажок.
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Флажки следует помещать внутрь <span class="v3"><strong>&lt;label&gt;</strong></span> и с описанием.
  Можно щелкнуть по тексту для того, чтобы переключить флажок. Атрибут <span class="v4"><strong>checked</strong></span> - состояние флажка (включен / выключен). По
  умолчанию - выключен. Флажок существует сам по себе. Щелчок по флажку является произвольным и может быть отменен.
</div>

  <p>
    <span class="v4"><strong>radio</strong></span> - переключатель.
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Чтобы сгруппировать список переключателей вместе - необходимо указать одно и то же значение атрибута <span class="v4"><strong>name</strong></span> для
  каждого переключателя. Переключатели являются взаимоисключающими. Могут появляться только в виде списка (2 и более вариантов, но ни в коем случае не одиночный).
  Щелчок по переключателю является обязательным и не может быть отменен вовсе, если выбор сделан. Всегда выбирается один из переключателей.
</div>

  <p>
    <span class="v4"><strong>email</strong></span> - для почты, может показывать предупреждение, если введен неверный email.<br />
    <span class="v4"><strong>password</strong></span> - для пароля, все введенные символы отображаются звездочкой.
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Вводимые символы отображаются в виде <span class="v4"><strong>*</strong></span>, чтобы никто не увидел пароль. Пароль в браузере не виден, однако на сервер по протоколу HTTP он передается
  в незашифрованном виде и его можно перехватить. А пароль заданный через атрибут <span class="v4"><strong>value</strong></span> можно подсмотреть
  в исходном коде, или с помощью специальных плагинов.
</div>

  <p>
    <span class="v4"><strong>number</strong></span> - номер, могут быть использованы клавиши вверх / вниз.<br />
    <span class="v4"><strong>tel</strong></span> - телефонный номер, может срабатывать автозаполнение. С атрибутом <span class="v4"><strong>pattern</strong></span> задается формат ввода.<br />
    <span class="v4"><strong>submit</strong></span> - кнопка отправки данных на сервер. Браузер сам ставит название кнопки.<br />
    <span class="v4"><strong>file</strong></span> - загрузка файлов.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Для отправки файла на сервер форма должна иметь атрибут <span class="v4"><strong>enctype="multipart/form-data"</strong></span>.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> У каждого браузера свой стиль кнопки для загрузки файлов и задать собственный стиль крайне сложно.
</div>

  <p>
    <span class="v4"><strong>hidden</strong></span> - скрытое поле. Оно никак не отображается на веб-странице.<br />
    <span class="v4"><strong>image</strong></span> - поле с изображением. При нажатии на рисунок данные формы отправляются на сервер.<br />
    <span class="v4"><strong>button</strong></span> - кнопка.<br />
    <span class="v4"><strong>reset</strong></span> - кнопка для возвращения данных формы в первоначальное значение. Значение этой кнопки никогда не пересылается на сервер.<br />
    <span class="v4"><strong>color</strong></span> - виджет для выбора цвета.<br />
    <span class="v4"><strong>date</strong></span> - поле для выбора календарной даты.<br />
    <span class="v4"><strong>datetime</strong></span> - указание даты и времени.<br />
    <span class="v4"><strong>datetime-local</strong></span> - указание местной даты и времени.<br />
    <span class="v4"><strong>range</strong></span> - ползунок для выбора чисел в указанном диапазоне.<br />
    <span class="v4"><strong>search</strong></span> - поле для поиска.<br />
    <span class="v4"><strong>time</strong></span> - для времени.<br />
    <span class="v4"><strong>url</strong></span> - для Web-адресов.<br />
    <span class="v4"><strong>month</strong></span> - выбор месяца.<br />
    <span class="v4"><strong>week</strong></span> - выбор недели.<br />
    <br />

    <span class="v"><strong># Атрибуты</strong></span><br />
    <span class="v4"><strong>placeholder</strong></span> - отображает подсказывающий текст для полей ввода, который исчезнет, как
    только будет введен некоторый текст <a href="https://webref.ru/html/input/placeholder" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>accept</strong></span> - устанавливает фильтр на типы файлов, которые вы можете отправить через поле загрузки файлов <a href="https://webref.ru/html/input/accept" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>accesskey</strong></span> - позволяет перейти к элементу с помощью некоторого сочетания клавиш с заданной в атрибуте буквой или цифрой <a href="http://htmlbook.ru/html/input/accesskey" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>align</strong></span> - определяет, как выравнивать поле с изображением относительно текста или других элементов формы <a href="https://webref.ru/html/input/align" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>alt</strong></span> - устанавливает альтернативный текст для поля с изображением <a href="https://webref.ru/html/input/alt" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>autocomplete</strong></span> - помогает заполнять поля форм текстом, который был введён в них ранее <a href="https://webref.ru/html/input/autocomplete" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>autofocus</strong></span> - автоматически устанавливает фокус в поле формы <a href="https://webref.ru/html/input/autofocus" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>border</strong></span> - добавить рамку, цвет которой совпадает с цветом текста <a href="https://webref.ru/html/input/border" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>checked</strong></span> - определяет, помечен ли заранее такой элемент формы, как флажок или переключатель <a href="https://webref.ru/html/input/checked" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>disabled</strong></span> - блокирует доступ и изменение поля формы <a href="https://webref.ru/html/input/disabled" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>dirname</strong></span> - на сервер отправляется пара имя/значение <a href="https://webref.ru/html/input/dirname" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>form</strong></span> - связывает поле с формой по её идентификатору. <a href="https://webref.ru/html/input/form" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>formaction</strong></span> - определяет адрес обработчика формы <a href="https://webref.ru/html/input/formaction" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>formenctype</strong></span> - устанавливает способ кодирования данных формы при их отправке на сервер <a href="https://webref.ru/html/input/formenctype" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>formmethod</strong></span> - сообщает браузеру, каким методом следует передавать данные формы на сервер <a href="https://webref.ru/html/input/formmethod" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>formnovalidate</strong></span> - отменяет встроенную проверку данных введенных пользователем в форме на корректность перед отправкой формы <a href="https://webref.ru/html/input/formnovalidate" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>formtarget</strong></span> - определяет окно или фрейм в которое будет загружаться результат, возвращаемый обработчиком формы, в виде HTML-документа <a href="https://webref.ru/html/input/formtarget" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>list</strong></span> - указывает на список вариантов, созданный с помощью тега <span class="v3"><strong>&lt;datalist&gt;</strong></span>, которые можно выбирать при наборе текста <a href="https://webref.ru/html/input/list" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>max</strong></span> - устанавливает верхнее значение для ввода числа или даты в поле формы <a href="https://webref.ru/html/input/max" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>maxlength</strong></span> - устанавливает максимальное число символов, которое может быть введено пользователем в текстовом поле <a href="https://webref.ru/html/input/maxlength" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>min</strong></span> - устанавливает нижнее значение для ввода числа или даты в поле формы <a href="https://webref.ru/html/input/min" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>minlength</strong></span> - минимальное число символов, которое может быть введено пользователем в текстовом поле <a href="https://webref.ru/html/input/minlength" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>multiple</strong></span> - позволяет указывать одновременно несколько файлов в поле для загрузки файлов, а также несколько адресов электронной почты <a href="https://webref.ru/html/input/multiple" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>name</strong></span> - определяет уникальное имя элемента формы <a href="https://webref.ru/html/input/name" class="btn btn-primary" role="button">+</a> <br />
    <span class="v4"><strong>pattern</strong></span> - указывает регулярное выражение, согласно которому требуется вводить и проверять данные в поле формы <a href="https://webref.ru/html/input/pattern" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>readonly</strong></span> - текстовое поле не может изменяться пользователем, в том числе вводиться новый текст или модифицироваться существующий <a href="https://webref.ru/html/input/readonly" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>required</strong></span> - устанавливает поле формы обязательным для заполнения перед отправкой формы на сервер <a href="https://webref.ru/html/input/required" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>size</strong></span> - ширина текстового поля, которое определяется числом символов моноширинного шрифта <a href="https://webref.ru/html/input/size" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>src</strong></span> - адрес графического файла, который будет отображаться на Web-странице в поле с изображением <a href="https://webref.ru/html/input/src" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>step</strong></span> - устанавливает шаг изменения числа для ползунков и полей ввода чисел <a href="https://webref.ru/html/input/step" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>tabindex</strong></span> - определяет последовательность перехода между элементами при нажатии на клавишу Tab <a href="http://htmlbook.ru/html/input/tabindex" class="btn btn-primary" role="button">+</a><br />
    <span class="v4"><strong>value</strong></span> - определяет значение элемента формы, которое будет отправлено на сервер или получено с помощью клиентских скриптов <a href="https://webref.ru/html/input/value" class="btn btn-primary" role="button">+</a><br />
    <br />

    <span class="v"><strong># Другие элементы интерфейса</strong></span><br />
    <span class="v3"><strong>&lt;fieldset&gt;...&lt;/fieldset&gt;</strong></span> - предназначен для группирования элементов формы в организованные разделы (рамка) <a href="https://webref.ru/html/fieldset" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Применение атрибута <span class="v4"><strong>disabled</strong></span> отключит все его элементы.
</div>

  <p>
    <span class="v3"><strong>&lt;legend&gt;...&lt;/legend&gt;</strong></span> - применяется для создания заголовка группы элементов формы, которая определяется с помощью тега <span class="v3"><strong>&lt;fieldset&gt;</strong></span> <a href="https://webref.ru/html/legend" class="btn btn-primary" role="button">+</a><br />
    <br />

    <span class="v3"><strong>&lt;textarea&gt;...&lt;/textarea&gt;</strong></span> - элемент формы для создания области, в которую можно вводить несколько строк текста. Допустимо делать переносы строк - они сохраняются при отправке данных на сервер.
    Нельзя вкладывать внутрь ссылки или кнопки. Идеально подходит для комментариев, сообщений на форумах, постов в блоге. CSS игнорирует атрибуты <span class="v4"><strong>rows</strong></span> и <span class="v4"><strong>cols</strong></span> (если указать) <a href="https://webref.ru/html/textarea" class="btn btn-primary" role="button">+</a><br />
    <span class="v3"><strong>&lt;button&gt;...&lt;/button&gt;</strong></span> - расширенная версия создания кнопки <a href="https://webref.ru/html/button" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Принимает <span class="v2"><strong>&lt;img /&gt;</strong></span>.
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Атрибут <span class="v4"><strong>value</strong></span> не может быть пустым.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Нельзя вкладывать внуть другие кнопки и ссылки.
</div>

  <p>
    <span class="v3"><strong>&lt;select&gt;...&lt;/select&gt;</strong></span> - позволяет создать элемент интерфейса в виде раскрывающегося списка, а также список с одним или множественным выбором. Каждый пункт создается с помощью тега <span class="v3"><strong>&lt;option&gt;</strong></span> <a href="https://webref.ru/html/option" class="btn btn-primary" role="button">+</a>  <a href="https://webref.ru/html/select" class="btn btn-primary" role="button">+</a>
  <p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Атрибут <span class="v4"><strong>multiple</strong></span> позволяет выбрать несколько вариантов (множественный выбор) посредством удержания Ctrl и щелчка.
</div>

  <p>
    <span class="v3"><strong>&lt;datalist&gt;...&lt;/datalist&gt;</strong></span> - создает список вариантов, которые можно выбирать при наборе в текстовом поле. Изначально этот список скрыт и становится доступным при получении полем фокуса или наборе текста. Каждый пункт создается с помощью тега <span class="v3"><strong>&lt;option&gt;</strong></span>. При наборе первых букв показывается подходящие варианты.
    Пункт списка можно выбрать курсором мыши или при помощи стрелок клавиатуры. При этом можно вводить свой текст или редактировать уже добавленный <a href="https://webref.ru/html/datalist" class="btn btn-primary" role="button">+</a> <br />
    <span class="v3"><strong>&lt;label&gt;...&lt;/label&gt;</strong></span> - устанавливает связь между определенной меткой, в качестве которой обычно выступает текст, и элементом формы. Такая связь необходима, чтобы изменять значения элементов формы при нажатии курсором мыши на текст <a href="https://webref.ru/html/label" class="btn btn-primary" role="button">+</a>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> С помощью атрибута <span class="v4"><strong>for</strong></span>, соответствующему значению <span class="v4"><strong>id</strong></span> у поля - при щелчке на метку
  фокус переходит к текстовому полю и помещает курсор внутрь него.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если оборачивает флажки / переключатели, то атрибуты <span class="v4"><strong>for / id</strong></span> можно опустить.
</div>

  <p>
    <span class="v3"><strong>&lt;progress&gt;...&lt;/progress&gt;</strong></span> - используется для отображения прогресса завершенности задачи. Изменение значения происходит через JS <a href="https://webref.ru/html/progress" class="btn btn-primary" role="button">+</a> <br />
    <span class="v3"><strong>&lt;meter&gt;...&lt;/meter&gt;</strong></span> - используется для вывода значения в некотором известном диапазоне. Используется преимущественно для отображения числовых значений, например, количества результатов поиска, объема жидкости, давления и др. <a href="https://webref.ru/html/meter" class="btn btn-primary" role="button">+</a> <br />
    <span class="v3"><strong>&lt;details&gt;...&lt;/details&gt;</strong></span> -  используется для хранения информации, которую можно скрыть или показать по требованию пользователя <a href="https://webref.ru/html/details" class="btn btn-primary" role="button">+</a> <br />
    <span class="v3"><strong>&lt;summary&gt;...&lt;/summary&gt;</strong></span> - указывает заголовок для тега <span class="v3"><strong>&lt;details&gt;</strong></span>, по которому можно щелкать для разворачивания / сворачивания информации <a href="https://webref.ru/html/summary" class="btn btn-primary" role="button">+</a> <br />
    <span class="v3"><strong>&lt;marquee&gt;...&lt;/marquee&gt;</strong></span> - создаёт бегущую строку на странице <a href="https://webref.ru/html/marquee" class="btn btn-primary" role="button">+</a> <br />
    <span class="v3"><strong>&lt;output&gt;...&lt;/output&gt;</strong></span> - определяет область в которую выводится информация, преимущественно с помощью скриптов <a href="https://webref.ru/html/output" class="btn btn-primary" role="button">+</a> <br />
    <span class="v3"><strong>&lt;keygen&gt;...&lt;/keygen&gt;</strong></span> - используется для генерации пары ключей — закрытого и открытого <a href="https://webref.ru/html/keygen" class="btn btn-primary" role="button">+</a> <br />
  </p>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Верстка</h3>
  </div>
  <div class="panel-body">

<!-- Buttons -->

<button class="button3" id="ButB">Кнопки</button>
<button class="button3" id="MapB">Карты изображений</button>

<!-- The Article -->

<div class="textblock" id="But">
  <p>
    <em>============================ Кнопки:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Есть 3 способа создания кнопки:<br />
      <br />
      <span class="v"><strong># С помощью тега &lt;input&gt;</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Классический способ. Название кнопки задается с помощью атрибута <span class="v4"><strong>value</strong></span>.<br />
      <br />

      <span class="v"><strong># С помощью тега &lt;button&gt;</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Преимущество этого тега перед <span class="v2"><strong>&lt;input&gt;</strong></span> заключается в том,
      что здесь можно добавить на кнопку и другие элементы, к примеру, изображение. А значение атрибута <span class="v4"><strong>value</strong></span> теперь не является надписью на кнопке, а служит только для передачи значения на сервер.<br />
      <br />

      <span class="v"><strong># С помощью тега &lt;a&gt;</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Данный способ предоставляет большое преимущество и свободу в оформлении кнопки.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Map">
  <p>
    <em>============================ Карты изображений:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Позволяют создавать ссылки произвольной формы для разных областей одного изображения.<br />
      <br />

      <span class="v2"><strong>&lt;map&gt;</strong></span> - контейнер для элемента &lt;area&gt; <a href="https://webref.ru/html/map" class="btn btn-primary" role="button">+</a><br />
      <span class="v2"><strong>&lt;area&gt;</strong></span> - определяет активные области изображения, которые являются ссылками <a href="https://webref.ru/html/area" class="btn btn-primary" role="button">+</a><br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Особенности:<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Карты-изображения позволяют задать любую форму области ссылки, что особенно пригодится для указания географического района. Поэтому, карты-изображения применяются наиболее часто в географической тематике.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> С одной картинкой удобнее работать — не приходится заботиться о состыковке отдельных фрагментов при разрезании, и рисунок легко можно поместить в нужное место.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Недостатки:<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> При сложной форме области ссылки увеличивается объём кода HTML. Контур аппроксимируется набором прямых отрезков, для каждой точки такого отрезка следует задать две координаты, а общее количество таких точек может быть достаточно велико.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Соответственно, увеличивается сложность задания координат. Вручную их указывать не удобно, поэтому приходится пользоваться специальными программами, которые визуально показывают области и позволяют их редактировать.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> При смене изображения, например, при увеличении масштаба придётся заново задавать координаты всех областей ссылок.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> К картам-изображениям нельзя применять разные эффекты, которые доступны при разрезании одного рисунка на фрагменты: эффект перекатывания, частичная анимация, индивидуальная оптимизация картинок для их быстрой загрузки.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Нет чётко выделенных границ ссылок. Поэтому эти границы приходится выделять разными средствами непосредственно на изображении. Если рисунок не загрузился по каким-либо причинам, то разобраться в наборе ссылок становится весьма проблематично.<br />
</div>

</div>

  </div>
</div>

</body>
</html>
