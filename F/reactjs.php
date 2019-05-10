<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>React.js</title>

<link rel="shortcut icon" href="../Images/I/reactjs.png" type="image/x-icon">

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
        <a class="navbar-brand">ReactJS</a>
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
    <h3 class="panel-title">Создание пользовательских интерфейсов / UI-библиотека</h3>
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
          <a href="https://en.wikipedia.org/wiki/React_(JavaScript_library)">* ReactJS</a><br />
          <br />

          <span class="v"><strong># Элементы</strong></span><br />
          <a href="https://ru.wikipedia.org/wiki/Flux-%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D0%B0">* Flux-архитектура</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://facebook.github.io/react/">* ReactJS Docs</a><br />
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
              - React при изменениях DOM-дерева старается использовать минимально возможные воздействия. Использует
              виртуальный DOM (где меняет, добавляет, удаляет элементы), чтобы в реальный DOM за раз добавить все изменения.<br />
              - Создает легковесные объекты.<br>
              <br />

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
              - Вне сервера не может работать.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Имеет специальный плагин для отладки - React Developer Tools.<br />
              - Используется JSX (JS + разметка). Также необходим babel.<br>
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
<button class="button" id="CommB">Комментарии</button>
<button class="button" id="GenB">Генерация</button>
<button class="button" id="JsxB">JSX</button>
<button class="button" id="CompB">Компоненты</button>
<button class="button" id="PropB">Props</button>
<button class="button" id="StaB">State</button>
<button class="button" id="SobB">События</button>
<button class="button" id="CycB">Жизненный цикл компонента</button>

<!-- The Article -->

<div class="textblock" id="Pod">
  <p>
    <em>============================ Подключение:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В начале файла указать:<br />
      <code>
        <strong>
          'use strict';<br /><br />

          import React, { Component } from 'react';<br />
          import ReactDOM from 'react-dom';<br />
          <br />

          import './style.css'; //импорт стилей для компонентов<br />
          <br>

          import imgName from './.png'; //импорт изображения<br>
        </strong>
      </code><br />

      <a href="https://reactjs.org/docs/add-react-to-an-existing-app.html" class="btn btn-primary" role="button">Подключение</a><br />
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v3"><strong>{/*...*/}</strong></span> - однострочный и многострочный комментарий.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Gen">
  <p>
    <em>============================ Генерация компонентов:</em><br />
      <span class="v3"><strong>ReactDOM.render()</strong></span> - генерирует на странице HTML-элемент. Имеет 2 аргумента
      - React-компонент (что генерировать) и элемент DOM-дерева, куда будет добавляться компонент.<br /><br />

      <span class="v"><strong># Простой компонент</strong></span><br />

<code>
<pre>
<strong>
import React, { Component } from 'react';

class HelloMessage extends Component {
  const { name } = this.props;
  render() {
    return (
      &lt;div&gt;
        Hello {name}
      &lt;/div&gt;
    );
  }
}

ReactDOM.render(
  &lt;HelloMessage name="Taylor" /&gt;,
  document.getElementById('root')
);
</strong>
</pre>
</code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Jsx">
  <p>
    <em>============================ JSX:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Способ описания визуального кода посредством комбинации JS и XML. В <strong>{}</strong>
      можно размещать JS-код. Атрибуты пишутся в стиле camelCase. Расширение файлов - <strong>.jsx</strong><br />

      <span class="v3"><strong>className={'класс1 ' + 'класс2'}</strong></span> - добавление нескольких классов.<br />
      <span class="v3"><strong>условие ? действие : действие2</strong></span> - в JSX нельзя использовать <strong>if / else</strong>, только тернарный оператор.<br />
      <span class="v3"><strong>htmlFor</strong></span> - вместо атрибута <strong>for</strong><br>
  </p>

  <p>
      <span class="v"><strong># Массив элементов</strong></span><br />
      <code>
        <strong>
          const List = ({ массив }) => {<br />
            &nbsp;const elements = массив.map((item) => {<br />
              &nbsp;&nbsp;return (<br />
                &nbsp;&nbsp;&nbsp;&lt;li key={item.id}&gt;&lt;/li &gt;<br />
              &nbsp;&nbsp;);<br />
            &nbsp;});<br />
            &nbsp;return (<br />
            &nbsp;&nbsp;&lt;ul&gt; { elements } &lt;/ul&gt;<br />
            &nbsp;)<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> У родительского элемента есть атрибут "ключ" - для ReactJS
  необходима уникальность, чтобы все механизмы работали корректно. По "ключу" ReactJS будет понимать с каким именно
  дочерним узлом работает и к какому родителю он принадлежит.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> React использует ключи, чтобы сравнивать элементы при обновлении данных / состояния.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Comp">
  <p>
    <em>============================ Компоненты:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Создание компонента (React-элемент):<br />
      <code>
        <strong>
          import React, { Component } from 'react';<br /><br />

          export default class App extends Component{<br /><br />

            /* Props */<br /><br />

            /* States */<br /><br />

            /* LifeCycle */<br /><br />

            /* Events */<br /><br />

            &nbsp;render() {<br />
              &nbsp;&nbsp;return(<br />
              &nbsp;&nbsp;&nbsp;&lt;div className="..."&gt;<br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br />
              &nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
              &nbsp;&nbsp;);<br />
              &nbsp;}<br />
            }
          </strong>
        </code><br /><br />

        <span class="v"><strong># Функциональный подход</strong></span><br />
        <code>
          <strong>
            function имя() {<br />
              &nbsp;return (разметка);<br />
            }
          </strong>
        </code><br /><br />

        <span class="v"><strong># ES6</strong></span><br />
        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Только класс имеет state и ЖЦ.<br>
        <code>
          <strong>
            export default class имя extends React.Component {<br />
              &nbsp;render() {<br />
                &nbsp;&nbsp;return (разметка);<br />
              &nbsp;}<br />
            }
          </strong>
        </code><br /><br />

        <span class="v"><strong># Arrow function</strong></span><br />
        <code>
          <strong>
            let имя =() => {<br />
              &nbsp;return (разметка);<br />
            }<br><br>

            export default имя;
          </strong>
        </code><br><br>

        <span class="v"><strong># Фрагмент</strong></span><br />
        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Обертка для нескольких элементов, чтобы не создавать лишний блок и не вносить изменения в DOM.<br>
        <code>
          <strong>
            &lt;React.Fragment&gt; элементы &lt;/React.Fragment&gt;
          </strong>
        </code>
  </p>

  <p>
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Генерация компонета:<br />
    <code>
      <strong>
        ReactDOM.render(<br />
          &nbsp;&lt;имя /&gt;,<br />
          &nbsp;document.getElementById('id');<br />
        );
      </strong>
    </code>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> В JS <strong>class</strong> зарезервированно, так что для задания класса элемента нужно использовать - <strong>className=""</strong>.
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> 1 компонент может содержать другие компоненты (вложенность компонентов - родитель / дочерний элемент).<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> В каждом компоненте должен быть импорт библиотеки React.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Имя компонента должно начинаться с заглавной буквы.<br>
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Для данных из API:<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Компонент не должен знать откуда именно берутся данные (упрощает тестирование / поддержку кода).<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Обновлять данные в конструкторе, в <strong>.then</strong> - обновление state.<br>

</div>

</div>

<!-- The Article -->

<div class="textblock" id="Prop">
  <p>
    <em>============================ Свойства:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Коллекция значений, которые ассоциированы с компонентом. У каждого компонента могут быть свойства. Эти свойства
      хранятся в <strong>this.props</strong> и передаются компонентам в качестве атрибутов.<br />
      <br />

      <span class="v"><strong># Создание свойства</strong></span><br />
      <code>
        <strong>
          const text = "text";<br />
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> В свойство можно передать любой JS-примитив, объект, переменную
   и даже выражение или массив.<br />
   <i class="fa fa-chevron-right" aria-hidden="true"></i> Значение свойства должно быть в <strong>{}</strong>.<br />
   <i class="fa fa-chevron-right" aria-hidden="true"></i> Значения доступны через <strong>this.props.имя_свойства</strong>.<br />
   <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>this.props</strong> исп. только для чтения и не могут быть динамически изменены.<br />
   <i class="fa fa-chevron-right" aria-hidden="true"></i> Атрибут компонента может иметь произвольное имя.<br />
   <i class="fa fa-chevron-right" aria-hidden="true"></i> Содержимое свойств можно прочесть в отладчике.<br />
</div>

  <p>
    <span class="v"><strong># Чтение свойств и их запись в компонент</strong></span><br />

<code>
<pre>
<strong>

// Родительский компонент
&lt;Component name="Jensen" /&gt;

//Дочерний компонент + извлечение props'а
class Greeting extends React.Component {
  const { name } = this.props;
  render() {
    return (
      &lt;h1&gt;Hello, {name}&lt;/h1&gt;
    );
  }
}
</strong>
</pre>
</code><br /><br />

    <span class="v"><strong># Функциональный подход</strong></span><br />
    <code>
      <strong>
        function имя (props) {<br />
          &nbsp;return тег<br />
            &nbsp;&nbsp;тег Text: {props.имя_свойства} тег<br />
          &nbsp;тег;<br />
        }
      </strong>
    </code><br /><br />

    <span class="v"><strong># ES6</strong></span><br />
    <code>
      <strong>
        class имя extends React.Component {<br />
          const { property } = this.props;<br>
          &nbsp;render() {<br />
            &nbsp;&nbsp;return тег<br />
              &nbsp;&nbsp;&nbsp;тег Text: {property} тег<br />
            &nbsp;&nbsp;тег;<br />
          &nbsp;}<br />
        }
      </strong>
    </code><br /><br />

    <span class="v"><strong># Свойства по умолчанию</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для значений, которые не передаются извне. При рендере компонета, props не нужно указывать,
    если не нужно что-то переопределить. После создания компонента:<br />
    <code>
      <strong>
        имя.defaultProps = { свойство: "значение" };
      </strong>
    </code><br>
    <br>

    <span class="v"><strong># Использование</strong></span><br />
    <code>
      <strong>
        ReactDOM.render (
          <имя имя_свойства="значение" />
        )
      </strong>
    </code><br>
    <br>

    <span class="v"><strong># Валидация Props</strong></span><br />
    <code>
      <strong>
          npm install --save-dev prop-types<br />
          <br />

          import PropTypes from 'prop-types';<br />
          <br />

          // После класса<br />
          Имя_класса.propTypes = {<br />
            имя_props: PropTypes.тип.isRequired // Последнее - обязательный ли пропс<br />
          }<br />
      </strong>
    </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sta">
  <p>
    <em>============================ State (состояния):</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Описывают внутреннее состояние компонента. Доступно только внутри компонента. Свойства, которые можно
      менять динамически.<br />

<code>
<pre>
<strong>

class имя extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      property: "значение"
    };
  }
  render() {
    const { property } = this.state;
    return тег { property };
  }
}

// ES7+

state = {
  property: value
}

Извлечение - const { stateProps } = this.state;

</strong>
</pre>
</code>

    <span class="v"><strong># Обновление состояния</strong></span><br />
    <code>
      <strong>
        this.setState({ имя_свойства: "новое_значение"} );
      </strong>
    </code>

  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Изменение state вызывает повторный render компонента.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> setState() не изменяет this.state немедленно, а создает очередь изменений состояния. Доступ к this.State после вызова метода,
  потенциально может вернуть имеющееся значение (бывшее).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> React игнорирует значение <strong>null</strong>.<br>
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> setState нельзя вызывать в render. Также setState не должен менять текущий state.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Вызов setState родителя перерисует все дочерние элементы.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Методы, которые меняют массив - использовать нельзя. Можно лишь создать новый и присвоить его.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Sob">
  <p>
    <em>============================ События:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Названия событий пишутся в стиле camelCase. Все тоже, что и в JS.<br />

      <span class="v"><strong># В constructor</strong></span><br />
      <code>
        <strong>
          this.имя_функции = this.имя_функции.bind(this); //Связывание с компонентом
        </strong>
      </code><br /><br />

      <span class="v"><strong># Создание</strong></span><br />
      <code>
        <strong>
          имя_функции() {<br />
            &nbsp;let переменная = (this.state.свойство === "значение") ? "1_значение" : "2_значение";<br />
            &nbsp;this.setState({свойство: переменная});<br />
          }<br />
          <br />

          // -------------------------------- Или (ES6+, без конструктора и без привязки)<br>
          имя_функции = () => {<br />
            &nbsp;...<br />
          }
        </strong>
      </code><br /><br />

      <span class="v"><strong># В разметке</strong></span><br />
      <code>
        <strong>
          тег onClick={this.имя_функции} className={this.state.свойство}
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Любой компонент может генерить свои события. Достаточно передать callback как props, затем вызвать ее из компонента, когда наступило событие.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Cyc">
  <p>
    <em>============================ Жизненный цикл компонента:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Заметки:<br />
      <span class="v2"><strong>constructor(props)</strong></span> - конструктор, в котором происходит начальная инициализация компонента.<br />
      <span class="v2"><strong>render()</strong></span> - рендер компонента.<br />
      <br />

      <span class="v"><strong># Циклы</strong></span><br />
      <span class="v3"><strong>componentWillMount()</strong></span> - вызывается перед рендерингом компонента.<br />
      <span class="v3"><strong>componentDidMount()</strong></span> - вызывается после рендеринга компонента. Можно выполнять запросы к удаленным ресурсам (для создания русурсов).<br />
      <span class="v3"><strong>componentWillUnmount()</strong></span> - вызывается перед удалением компонента из DOM (для удаления используемых ресурсов).<br />
      <span class="v3"><strong>shouldComponentUpdate()</strong></span> - вызывается каждый раз при обновлении объектов props / state (для оптимизации приложения).<br />
      <span class="v3"><strong>componentWillUpdate()</strong></span> - вызывается перед обновлением компонента.<br />
      <span class="v3"><strong>componentDidUpdate()</strong></span> - вызывается после обновления компонента.<br />
      <span class="v3"><strong>componentWillReceiveProps()</strong></span> - вызывается при обновлении props.<br />
      <br />

      <code>
        <strong>
          componentWillUpdate() {<br />
            &nbsp;console.log("Text");<br />
          }
        </strong>
      </code><br /><br />

      <span class="v"><strong># Управление ресурсами</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В React-приложениях при удалении компонентов важно освобождать русурсы,
      которые используются этим компонентом.<br />
      <br />

<code>
<pre>
<strong>
# Пример с часами

class Clock extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      date: new Date(),
      name: "Tom"
    }
  }

  componentDidMount {
    this.timerId = setInterval(() => this.tick(), 1000);
  }

  componentWillUnmount() {
    clearInterval(this.timerId);
  }

  tick() {
    this.setState({
      date: new Date()
    });
  }

  render() {
    return(
      тег {this.state.date.toLocaleTimeString()} тег
    )
  }
}
</strong>
</pre>
</code>

  </p>
</div>

  </div>
</div>

</body>
</html>
