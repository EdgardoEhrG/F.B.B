<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Nuxt</title>

<link rel="shortcut icon" href="../Images/I/Nuxt.png" type="image/x-icon">

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
        <a class="navbar-brand">Nuxt</a>
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
    <h3 class="panel-title">Vue SSR</h3>
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
          <a href="https://ru.nuxtjs.org/">* Nuxt</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://ru.nuxtjs.org/guide">* Nuxt Docs</a>
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
            <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br>
            - Подходит для Universal App / SPA / Static App<br>
            - Рендеринг UI на стороне сервера (также может выполнять пререндер страниц).<br>
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

<button class="button5" id="NuB">Nuxt</button>
<button class="button5" id="PaB">Pages</button>
<button class="button5" id="CoB">Components</button>
<button class="button5" id="LaB">Layouts</button>
<button class="button5" id="PlB">Plugins</button>
<button class="button5" id="MidB">Middleware</button>
<button class="button5" id="VxB">Vuex</button>
<button class="button5" id="ConfB">nuxt.config.js</button>

<!-- The Article -->

<div class="textblock" id="Nu">
  <p>
    <em>============================ Nuxt:</em><br />
      <span class="v"><strong># Установка</strong></span><br />
      <span class="v3"><strong>npm install -g create-nuxt-app</strong></span> - установка cli.<br />
      <span class="v3"><strong>create-nuxt-app имя_проекта</strong></span> - генерация нового проекта.<br />
      <br>
      <span class="v3"><strong>pug-plain-loader, pug</strong></span> - пакеты для компиляции Pug -> HTML.<br />
      <span class="v3"><strong>node-sass, sass-loader</strong></span> - пакеты для компиляции Sass -> CSS.<br />
      <br>

      <span class="v"><strong># Структура</strong></span><br />
      <span class="v3"><strong>store</strong></span> - для Vuex.<br />
      <span class="v3"><strong>assets</strong></span> - стили + шрифты.<br />
      <span class="v3"><strong>components</strong></span> - компоненты.<br />
      <span class="v3"><strong>layouts</strong></span> - шаблоны страниц.<br />
      <span class="v3"><strong>middleware</strong></span> - промежуточное ПО.<br />
      <span class="v3"><strong>pages</strong></span> - представления и маршруты.<br />
      <span class="v3"><strong>plugins</strong></span> - плагины.<br />
      <span class="v3"><strong>static</strong></span> - картинки и прочее статическое.<br />
      <span class="v3"><strong>nuxt.config.js</strong></span> - конфигурация приложения.<br />

  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pa">
  <p>
    <em>============================ Pages:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Роутинг на основе папок / компонентов-страниц. Nuxt автоматически генерит конфигурацию роутинга согласно структуре
      файлов в папке pages.<br>
      <br>

      <code>
        <strong>
          index.vue - главная страница<br>
          users.vue - страница с путем "/users"<br>
          <br>

          <span class="v"><strong># Структура</strong></span><br />
          admin/<br>
            &nbsp;index.vue<br>
          index.vue<br>
          <br>

          routes: [<br>
            &nbsp;{<br>
              &nbsp;&nbsp;name: 'index',<br>
              &nbsp;&nbsp;path: '/',<br>
              &nbsp;&nbsp;component: 'pages/index.vue'<br>
            &nbsp;},<br>
            &nbsp;{<br>
              &nbsp;&nbsp;name: 'admin',<br>
              &nbsp;&nbsp;path: '/admin',<br>
              &nbsp;&nbsp;component: 'pages/admin/index.vue'<br>
            &nbsp;}<br>
          ]<br>
          <br>

          <span class="v"><strong># Динамический роутинг</strong></span><br />
          pages/<br>
            &nbsp;users/<br>
              &nbsp;&nbsp;_id.vue<br>
          <br>

          {<br>
            &nbsp;name: ' user-id',<br>
            &nbsp;path: '/users/:id',<br>
            &nbsp;component: 'pages/users/_id.vue'<br>
          }<br>
          <br>

          // Валидация параметров в маршрутизации:<br>
          <br>

          validate ({ params }) {<br>
            &nbsp;return регулярное_выражение.test(params.id)  // Если не будет true - редирект на страницу 404<br>
          }<br>
          <br>

          <span class="v"><strong># Вложенные маршруты</strong></span><br />
          // В родительском компоненте указать - nuxt-child (в разметке)<br>
          <br>

          pages/<br>
            &nbsp;users/<br>
              &nbsp;&nbsp;_id.vue<br>
            &nbsp;users.vue<br>
          <br>

          {<br>
            &nbsp;path: '/users',<br>
            &nbsp;component: 'pages/users.vue',<br>
            &nbsp;children: [<br>
              &nbsp;&nbsp;{<br>
                &nbsp;&nbsp;&nbsp;path: ':id',<br>
                &nbsp;&nbsp;&nbsp;name: 'user-id',<br>
                &nbsp;&nbsp;&nbsp;component: 'pages/users/_id.vue'<br>
                &nbsp;&nbsp;&nbsp;}<br>
              &nbsp;&nbsp;]<br>
          }
        </strong>
      </code>
      <br><br>

      <span class="v"><strong># Навигация</strong></span><br />
      <span class="v3"><strong>nuxt-link(to="путь")</strong></span> - роут-ссылка.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Co">
  <p>
    <em>============================ Components:</em><br />
      <span class="v"><strong># Настройки (script)</strong></span><br />
      <span class="v3"><strong>head: { title: 'название вкладки' }</strong></span> - название страницы.<br />
      <span class="v3"><strong>layout: 'имя_шаблона'</strong></span> - задание шаблона страницы.<br />
      <br>

      <span class="v3"><strong>'@/components/имя.vue'</strong></span> - импорт компонентов.<br />
      <br>

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Передача src изображения дочернему компоненту:<br>
      <br>
      <code>
        <strong>
          Component(imageUrl="File.jpg")<br>
          <br>

          img(:src="require('../static/images' + imageUrl)")
        </strong>
      </code><br>
      <br>

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Объект по умолчанию:<br>
      <br>
      <span class="v3"><strong>default: function() { return { props: value } }</strong></span> - если компонент не получает объект, то задается пустой объект по умолчанию в валидации props.<br />
      <br>

      <span class="v"><strong># Асинхронные данные</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Вызывается перед рендерингом компонента.<br>
      <br>
      <code>
        <strong>
          asyncData({ params }) {<br>
            &nbsp;return axios.get(`https://my-api/posts/${params.id}`)<br>
              &nbsp;&nbsp;.then((res) => {<br>
                &nbsp;&nbsp;&nbsp;return {<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;title: res.data.title<br>
                &nbsp;&nbsp;&nbsp;}<br>
              &nbsp;&nbsp;})<br>
          }<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="La">
  <p>
    <em>============================ Layouts:</em><br />
      <span class="v3"><strong>error.vue</strong></span> - компонент-страница ошибки. При ошибке приложения (или неверном роутинге) будет происходить редирект на эту страницу.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pl">
  <p>
    <em>============================ Plugins:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Components.js - глобальное использование компонентов без надобности импорта:<br>
      <br>
      <code>
        <strong>
          import Vue from 'vue';<br>
          <br>

          import Компонент from 'путь';<br>
          <br>

          Vue.component('имя_компонента', имя_компонента);<br>
          <br>

          // nuxt.config.js<br>
          plugins: [<br>
            &nbsp;'~plugins/Components.js'<br>
          ]
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mid">
  <p>
    <em>============================ Middleware:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Промежуточное ПО. Работает до перехода на следующие страницы. Подходит для аутентификации.
      Существует также Server-Side Middleware.<br>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Vx">
  <p>
    <em>============================ Vuex:</em><br />
      <span class="v"><strong># Classic Mode (old)</strong></span><br />
        <code>
          <strong>
            import Vuex from 'vuex'<br />
            <br />

            Vue.use(Vuex)<br />
            <br />

            const store = () => new Vuew.Store({<br />
              &nbsp;state: {},<br />
              &nbsp;mutations: {},<br />
              &nbsp;...<br />
            })<br />
            <br />

            export default store
          </strong>
        </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Conf">
  <p>
    <em>============================ nuxt.config.js:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Настройка конфигурации приложения:<br>
      <br>

      <code>
        <strong>
          // Env<br>
          env: {<br>
            &nbsp;baseUrl: 'https://...'<br>
          }<br>
          <br>

          // Использование (доступ)<br>
          process.env.baseUrl
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
