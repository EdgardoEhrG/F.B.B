<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Redux.js</title>

<link rel="shortcut icon" href="../Images/I/Redux.png" type="image/x-icon">

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
        <a class="navbar-brand">ReduxJS</a>
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
    <h3 class="panel-title">Центральное хранилище данных для приложения</h3>
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
          <a href="http://monsterlessons.com/project/series/redux-js-dlya-nachinayushih">* ReduxJS</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://redux.js.org/">* ReduxJS Docs</a>
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
              - Решает проблему управления состояния приложения.<br>
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

<button class="button5" id="ReB">Redux</button>
<button class="button5" id="RedB">Reducer</button>
<button class="button5" id="ActB">Actions</button>
<button class="button5" id="ConB">Контейнеры</button>
<button class="button5" id="MidB">Middleware</button>

<!-- The Article -->

<div class="textblock" id="Re">
  <p>
    <em>============================ Redux:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> <strong>npm install redux react-redux</strong><br>
      <br>

      <code>
        <strong>
          // Простое хранилище:<br>
          import { createStore } from 'redux';<br>
          <br>

          const reducer = (state = 0, action) => {<br>
            &nbsp;switch (action.type) {<br>
              &nbsp;&nbsp;case 'INC': return state + 1;<br>
              &nbsp;&nbsp;default: return state;<br>
            &nbsp;}<br>
          }<br>
          <br>

          const store = createStore(reducer); // Инициализация хранилища<br>
          store.getState(); - получить состояние.<br>
          store.dispatch({type: 'INC'}); - вызов action.<br>
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> В Redux нельзя модифицировать state, только присвоить новое значение.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Запросы в хранилище должны исходить только из компонентов-контейнеров.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Каждый контейнер с данными должен содержать свойство error и компонент ошибки.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Red">
  <p>
    <em>============================ Reducer:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> обновляет главный <strong>state</strong> в ответ на <strong>actions</strong>.<br>
      <br>

      <code>
        <strong>
        const collection = (state, action) => {<br>
        <br>

          if (state === undefined) {<br>
            &nbsp;return {<br>
              &nbsp;&nbsp;items: [],<br>
              &nbsp;&nbsp;loading: true,<br>
              &nbsp;&nbsp;error: null<br>
            &nbsp;}<br>
          }<br>
          <br>

          switch (action.type) {<br>
            &nbsp;case 'ИМЯ':<br>
              &nbsp;&nbsp;return {<br>
                &nbsp;&nbsp;&nbsp;item: action.payload,<br>
                &nbsp;&nbsp;&nbsp;loading: false,<br>
                &nbsp;&nbsp;&nbsp;error: null<br>
              &nbsp;&nbsp;};<br>
          <br>

            &nbsp;default:<br>
              &nbsp;&nbsp;return state.bookList;<br>
          &nbsp;}<br>
        };<br>
        <br>
        </strong>
      </code>

      <span class="v"><strong># Чистая функция (Pure function)</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Reducer должен быть чистой функцией. Возвращаемое значение зависит только от аргументов, не должно быть побочных эффектов и только локальное состояние должно быть изменено.<br>

  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Если <strong>state</strong> undefined, то нужно вернуть <strong>initialState</strong>.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если тип <strong>action</strong> неизвестен, то нужно вернуть <strong>state</strong> без изменений.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Act">
  <p>
    <em>============================ Actions:</em><br />
      <span class="v"><strong># Действия с параметрами</strong></span><br />
      <code>
        <strong>
          const payload = value;<br>
          <br>

          const имя_функции = (payload) => {<br>
            &nbsp;return {<br>
              &nbsp;&nbsp;type: 'ИМЯ',<br>
              &nbsp;&nbsp;payload<br>
            &nbsp;};<br>
          };<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Con">
  <p>
    <em>============================ Контейнеры:</em><br />
    <code>
      <strong>
        // utils.js<br>
        <br>

        const compose = ( ...funcs ) => (component) => {<br>
          &nbsp;return funcs.reduceRight((Wrapped, f) => f(Wrapped), component);<br>
        };<br>
        <br>

        export default compose;<br>
        <br>

        // helpers/ with-service.js<br>
        <br>

        const withService = () => (Wrapped) => {<br>
          &nbsp;return (props) => {<br>
            &nbsp;&nbsp;return (<br>
              &nbsp;&nbsp;&nbsp;&lt;Consumer&gt;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(service) => {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;Wrapped {... props} service={service} /&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
              &nbsp;&nbsp;&nbsp;&lt;/Consumer&gt;<br>
            &nbsp;&nbsp;)<br>
          &nbsp;}<br>
        }<br>
        <br>

        export default withService;<br>
        <br>

        // Component-container<br>
        <br>

        import { connect } from 'react-redux';<br>
        import withService from '../../helpers/with-service';<br>
        import { action_name } from '../../store/actions';<br>
        import compose from '../../utils/compose';<br>
        <br>

        ...<br>
        <br>

        // Запрос свойств из хранилища<br>
        const mapStateToProps = ({ itemList: { items, loading, error } }) => {<br>
          &nbsp;return { items, loading, error }<br>
        }<br>
        <br>

        // Использование actions<br>
        const mapDispatchToProps = (dispatch, { service }) => {<br>
          &nbsp;return {<br>
            &nbsp;&nbsp;fetchItems: fetchItems(service, dispatch),<br>
          &nbsp;}<br>
        };<br>
      </strong>
    </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Mid">
  <p>
    <em>============================ Middleware:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Модификация <strong>dispatch</strong>.
      <code>
        <strong>
          // Redux-Thunk. Для асинхронных actions, так как Redux по умолчанию имеет синхронные actions.<br>
          <br>

          npm i redux-thunk<br>
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

</body>
</html>
