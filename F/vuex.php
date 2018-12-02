<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Vuex</title>

<link rel="shortcut icon" href="../Images/I/Vuex.png" type="image/x-icon">

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
        <a class="navbar-brand">Vuex</a>
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
    <h3 class="panel-title">Центральное хранилище данных</h3>
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
          <a href="https://vuex.vuejs.org/ru/">* Vuex</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://vuex.vuejs.org/ru/">* Vuex Docs</a>
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

<hr />

<!-- Buttons -->

<button class="button5" id="VxB">Vuex</button>
<button class="button5" id="StaB">State</button>
<button class="button5" id="GetB">Getters</button>
<button class="button5" id="MutB">Mutations</button>
<button class="button5" id="ActB">Actions</button>
<button class="button5" id="ModB">Модули</button>

<!-- The Article -->

<div class="textblock" id="Vx">
  <p>
    <em>============================ О Vuex:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Установка и подключение:<br>
      <code>
        <strong>
          1. npm install vuex<br>
          <br>

          2. Создать папку store и файл index.js<br>
          <br>

          3. В файле:<br>
          import Vue from 'vue'<br>
          import Vuex from 'vuex'<br>
          Vue.use(Vuex)<br><br>

          export default new Vuex.Store({<br>
            &nbsp;...<br>
          })<br>
          <br>

          4. В главном файле:<br>
          import store from './store' + добавить store в Vue
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sta">
  <p>
    <em>============================ State:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Состояние.<br>
      <code>
        <strong>
          state: {<br>
            &nbsp;property: value<br>
          }<br><br>

          // Получить значение (рекомендуется использовать геттеры)<br>
          computed: {<br>
            &nbsp;name () {<br>
              &nbsp;&nbsp;return this.$store.state.property<br>
            &nbsp;}<br>
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Get">
  <p>
    <em>============================ Getters:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Доступ к данным / модифицированные данные:<br>
      <code>
        <strong>
          getters: {<br>
            &nbsp;name (state) {<br>
              &nbsp;&nbsp;return state.property // Вернуть все данные (или можно изменить)<br>
            &nbsp;}<br>
          }<br><br>

          // Получение (в computed)<br>
          this.$store.getters.name
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mut">
  <p>
    <em>============================ Mutations:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Изменение state.<br>
      <code>
        <strong>
          mutations: {<br>
            &nbsp;name (state, payload) {<br>
              &nbsp;&nbsp;state.property = payload<br>
            &nbsp;}<br>
          }<br><br>

          // Использование<br>
          this.$store.commit('name', payload)
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>payload</strong> - можно передать только 1 параметр, если их несколько, то он должен быть объектом.<br>
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> В мутацию нельзя передавать асинхронный код / обращение к API.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Act">
  <p>
    <em>============================ Actions:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Подходит, для действий с API, действия с задержкой.<br>
      <code>
          <strong>
            actions: {<br>
              &nbsp;имя_функции ({commit}, payload) {<br>
                &nbsp;&nbsp;setTimeout(() => {<br>
                  &nbsp;&nbsp;&nbsp;commit('имя_мутации', payload);<br>
                &nbsp;&nbsp;}, 1000)<br>
              &nbsp;}<br>
            }<br><br>

            // Использование<br>
            this.$store.dispatch('имя_функции', payload)
          </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mod">
  <p>
    <em>============================ Модули:</em><br />
      <code>
        <strong>
          1. Создать отдельный файл (модуль) в папке store.<br>
          <br>

          2. Содержимое модуля:<br>
          export default {<br>
            &nbsp;state: {},<br>
            &nbsp;mutations: {},<br>
            &nbsp;actions: {},<br>
            &nbsp;getters: {}<br>
          }<br>
          <br>

          3. Главный файл stor'а:<br>
          import имя_модуля from './.js'<br>
          <br>

          modules: {<br>
            &nbsp;имя_модуля<br>
          }
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
