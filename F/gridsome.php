<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Gridsome</title>

<link rel="shortcut icon" href="../Images/I/Gridsome.png" type="image/x-icon">

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
        <a class="navbar-brand">Gridsome</a>
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
    <h3 class="panel-title">Static Generator Sites (Vue.js SSR)</h3>
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
          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://gridsome.org/">* Gridsome Docs</a>
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

<hr>

<!-- Buttons -->

<button class="button5" id="GriB">Gridsome</button>
<button class="button5" id="PaB">Pages</button>
<button class="button5" id="LaB">Layouts</button>
<button class="button5" id="CoB">Компоненты</button>
<button class="button5" id="RouB">Роутинг</button>
<button class="button5" id="PlaB">Плагины / Трансформеры</button>
<button class="button5" id="QueB">GraphQL-запросы</button>
<button class="button5" id="TemB">Templates</button>
<button class="button5" id="ForB">Форматирование</button>

<!-- The Article -->

<div class="textblock" id="Gri">
  <p>
    <em>============================ Gridsome:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Статический генератор сверхбыстрых сайтов на основе Vue.js с поддержкой GraphQL.<br>
      <br>

      <span class="v3"><strong>npm install -g @gridsome/cli</strong></span> - установка генератора.<br />
      <span class="v3"><strong>gridsome create site-name</strong></span> - генерация проекта.<br />
      <span class="v3"><strong>gridsome develop</strong></span> - запуск режима разработки.<br />
      <span class="v3"><strong>grisdome build</strong></span> - сборка проекта.<br />
      <br>

      <span class="v"><strong># Пакеты</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для работы с Sass нужны пакеты - <strong>node-sass</strong>, <strong>sass-loader</strong>, <strong>style-resources-loader</strong> + настройка конфигурации.<br>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pa">
  <p>
    <em>============================ Pages:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Аналогично Nuxt. Имя компонента-страницы будет соответствовать аналогичному пути (автоматический роутинг)<br>
      <br>

      <span class="v3"><strong>metaInfo: { title: 'name' }</strong></span> - метаинформация страницы (имя вкладки).<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="La">
  <p>
    <em>============================ Layouts:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Задание шаблона страницы.<br>
      <br>

      <code>
        <strong>
          1. Создание щаблона-компонента.<br>
          2. slot - место для контента.<br>
          3. В main.js - импорт компонента-шаблона и регистрация его как глобальный компонент - Vue.component('Имя_тега', шаблон-компонент).<br>
          4. Оборачивание разметки этим тегом-шаблоном.<br>
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Шаблоны могут принимать <strong>props</strong>.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Co">
  <p>
    <em>============================ Компоненты:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В main.js можно регистрировать компоненты глобально.<br>
      <br>

      <span class="v"><strong># Загрузка изображений:</strong></span><br />
      <span class="v3"><strong>g-image(src="~/путь")</strong></span> - может принимать props - параметры рендера изображения.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Rou">
  <p>
    <em>============================ Роутинг:</em><br />
      <span class="v3"><strong>g-link(to="путь") Text</strong></span> - навигационная ссылка.<br />
      <br>

      <code>
        <strong>
          // Переход к посту<br>
          :to="`/posts/${edge.node.slug}`"<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pla">
  <p>
    <em>============================ Плагины / Трансформеры:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Расширение функционала Gridsome. Подключаются в <strong>gridsome.config.js</strong><br>
      <br>

      <span class="v3"><strong>@gridsome/source-filesystem</strong></span> - трансформирует файлы в контент, что позволяет быть доступными с GraphQL в компонентах.<br />
      <span class="v3"><strong>@gridsome/transformer-remark</strong></span> - трансформирует файлы с расширением <strong>.md</strong> в посты.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Que">
  <p>
    <em>============================ GraphQL-запросы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Получение данных.<br>
      <br>

      <span class="v"><strong># Статические запросы</strong></span><br />
      <code>
        <strong>
          // Разметка<br>
          article(v-for="edge in $static.allBlogPost.edges" :key="edge.node.id")<br>
            &nbsp;div(v-html="edge.node.content")<br>
          <br>

          // GraphQL<br>
          &lt;static-query&gt;<br>
            &nbsp;query имя_компонента {<br>
              &nbsp;&nbsp;allBlogPost {<br>
                &nbsp;&nbsp;&nbsp;edges {<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;node {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;}<br>
              &nbsp;&nbsp;}<br>
            &nbsp;}<br>
          &lt;/static-query&gt;<br>
        </strong>
      </code><br>

      <span class="v"><strong># Фильтры запросов:</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Параметры и фильтры указываются в ().<br>
      <br>
      <span class="v3"><strong>perpage: n</strong></span> - количество обрабатываемых документов.<br />
      <span class="v3"><strong>sortBy: "date"</strong></span> - сортировка по дате.<br />
      <span class="v3"><strong>order: ASC / DESC</strong></span> - порядок следования.<br />
      <span class="v3"><strong>filter: { date: { it: "2018" } }</strong></span> - фильтр, отобразить те документы, у которых есть дата 2018.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Tem">
  <p>
    <em>============================ Templates:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Автоматическое создание постов.<br>
      <br>

      <code>
        <strong>
          // 1. Создание компонента, ~ BlogPost.vue<br>
          // 2. В конфигурации настройка пути - route: '/posts/:slug'<br>
          // Шаблон содержит page-query, вместо static query<br>
          <br>

          // Запрос (содержит входящий параметр + его типизацию):<br>
          query Post ($path: String!) {<br>
            &nbsp;blogPost (path: $path) {<br>
              &nbsp;&nbsp;title,<br>
              &nbsp;&nbsp;content,<br>
              &nbsp;&nbsp;date (format: "Do MMM YYYY")<br>
              &nbsp;&nbsp;tags,<br>
              &nbsp;&nbsp;image (height: 400 width: 1000)<br>
            &nbsp;}<br>
          }<br>
          <br>

          // Вывод информации<br>
          Layout<br>
            &nbsp;article<br>
              &nbsp;h1 {{ $page.blogPost.title }}<br>
              &nbsp;&nbsp;g-image(:src="$page.blogPost.image")<br>
              &nbsp;&nbsp;div(v-html="$page.blogPost.content")<br>
              &nbsp;&nbsp;p {{ $page.blogPost.date }}<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="For">
  <p>
    <em>============================ Форматирование:</em><br />
      <span class="v"><strong># Файлы расширения .md</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Файлы, содержащие документацию (обычно используется на GitHub).<br>
      <br>

      <code>
        <strong>
          // Метаинформация (в самом начале файла указывается)<br>
          ---<br>
          title: text<br>
          date: 2019-03-01<br>
          tags: ['1', '2']<br>
          slug: text<br>
          property: value<br>
          image: ./images/.png<br>
          ---<br>
          <br>

          // Обработка в page-query<br>
          // В запросе дату можно форматировать - date (format: "D")<br>
          // Если в документе есть ![имя](путь) - такое изображение будет в контенте<br>
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
