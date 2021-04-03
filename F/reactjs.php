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
              виртуальный DOM (где меняет, добавляет, удаляет элементы), чтобы в реальный DOM за раз добавить все изменения. Virtual DOM хранится в памяти и синхронизируется с настоящим DOM.<br />
              - Создает легковесные объекты.<br>
              <br />

              <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
              - Вне сервера не может работать.<br />
              <br />

              <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
              - Имеет специальный плагин для отладки - React Developer Tools.<br />
              - Используется JSX (JS + разметка). Также необходим babel.<br>
              - <strong>create-react-app</strong> работает только с Sass. Чтобы использовать less / stylus - нужно дописывать конфигурацию webpack'а.<br>
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
<button class="button" id="TsxB">TSX</button>
<button class="button" id="CompB">Компоненты</button>
<button class="button" id="RefB">Refs</button>
<button class="button" id="PreB">Предохранители</button>
<button class="button" id="PropB">Props</button>
<button class="button" id="StaB">State</button>
<button class="button" id="SobB">События</button>
<button class="button" id="CycB">Жизненный цикл компонента</button>
<button class="button" id="HoB">Хуки</button>
<button class="button" id="ReB">Рендеринг</button>
<button class="button" id="HocB">HOC</button>
<button class="button" id="ConB">Контекст</button>
<button class="button" id="PorB">Порталы</button>
<button class="button" id="RouB">Роутинг</button>
<button class="button" id="ProfB">Profiler</button>
<button class="button" id="OptB">Оптимизация</button>

<!-- The Article -->

<div class="textblock" id="Pod">
  <p>
    <em>============================ Подключение:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В начале файла указать:<br />
      <code>
        <strong>
          import React, { Component } from 'react';<br />
          import ReactDOM from 'react-dom';<br />
          <br />

          import './style.css'; //импорт стилей для компонентов<br />
          <br>

          import imgName from './.png'; //импорт изображения<br>
        </strong><br>
      </code>

      <span class="v"><strong># Генерация проекта</strong></span><br />
        <code>
          <strong>
            npm install -g create-react-app - установка cli<br>
            <br>

            create-react-app project - инициализация проекта<br>
            <br>

            npm run eject - доступ к конфигурационным файлам<br>
          </strong>
        </code>
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

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> После отрисовки компонента нельзя изменять его потомков и атрибуты.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Jsx">
  <p>
    <em>============================ JSX:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Способ описания визуального кода посредством комбинации JS и XML. В <strong>{}</strong>
      можно размещать JS-код. Атрибуты пишутся в стиле camelCase. Расширение файлов - <strong>.jsx</strong><br />

      <span class="v3"><strong>className={'класс1 ' + 'класс2'}</strong></span> - добавление нескольких классов.<br />
      <span class="v3"><strong>условие ? действие : действие2</strong></span> - в JSX нельзя использовать <strong>if / else</strong>, только тернарный оператор.<br />
      <span class="v3"><strong>htmlFor</strong></span> - вместо атрибута <strong>for.</strong><br>
      <span class="v3"><strong>{ property && ( разметка ) }</strong></span> - отображение разметки если свойство существует.</strong><br>
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
  <i class="fa fa-chevron-right" aria-hidden="true"></i> React использует ключи, чтобы сравнивать элементы при обновлении данных / состояния. Не рекомендуется использовать index как ключ в массиве элементов, так как при изменении порядка элементов будет страдать производительность.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Tsx">
  <p>
    <em>============================ TypeScript in React:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Помогает в - 1) Обнаружение небезопасных методов в ЖЦ, 2) Обнаружение неожиданных побочных эффектов. Расширение файлов - .tsx<br>
      <br>

      <code>
        <strong>
          // Генерация tsx проекта:<br>
          create-react-app name --template typescript<br>
          npm i --save-dev @types/react<br>
        </strong>
      </code>
  </p>
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
            }<br>
            <br>

            // Оптимизированный компонент (использовать только где поверхностное сравнение)
            export default class имя extends React.PureComponent {<br />
              &nbsp;render() {<br />
                &nbsp;&nbsp;return (разметка);<br />
              &nbsp;}<br />
          </strong>
        </code><br /><br />

        <span class="v"><strong># Arrow function</strong></span><br />
        <code>
          <strong>
            const имя = () => {<br />
              &nbsp;return (разметка);<br />
            }<br><br>

            export default имя;
          </strong>
        </code><br><br>

        <span class="v"><strong># Фрагмент</strong></span><br />
        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Обертка для нескольких элементов, чтобы не создавать лишний блок и не вносить изменения в DOM.<br>
        <code>
          <strong>
            &lt;React.Fragment&gt; элементы &lt;/React.Fragment&gt;<br>
            <br>

            Или... Сокращенный вариант (не поддерживает ключи и атрибуты):<br>
            <br>

            &lt;&gt; элементы &lt;/&gt;<br>
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

<div class="textblock" id="Ref">
  <p>
    <em>============================ Refs:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Императивное изменение потомка вне потока.<br>
      <br>

      <code>
        <strong>
          // Доступ к элементу:<br>
          const node = this.myRef,current;<br>
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Подходит для: управление фокусом, выделение текста, воспроизведение медиа, вызов анимаций.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если задачу можно решить декларативным методом, то ref'ы лучше не использовать.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Подходит для работы с <strong>input.type="file"</strong>.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Pre">
  <p>
    <em>============================ Предохранители:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Компоненты, которые отлавливают JS-ошибки в любом месте деревьев их дочерних компонентов, сохраняются в журнале ошибок и выводят запасной UI.<br>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Отлавливают ошибки при рендере и в МЖЦ.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Не ловят ошибку в обработчике события, асинхронном коде, SSR и в самом предохранителе.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Ошибка сохраняется в componentDidCatch.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Только классовый компонент может быть предохранителем.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> try / catch - для отлова ошибок в событиях.<br>
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
   и даже выражение, массив или компонент.<br />
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
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если у компонента есть значение по умолчанию, ставить <strong>isRequired</strong> не нужно.<br>
    <br>

    <code>
      <strong>
          npm install --save-dev prop-types<br />
          <br />

          import PropTypes from 'prop-types';<br />
          <br />

          // После класса:<br />
          Имя_класса.propTypes = {<br />
            имя_props: PropTypes.тип.isRequired // Последнее - обязательный ли пропс<br />
          }<br />
          <br />

          // Внутри класса:<br>
          static propTypes = {<br>
            &nbsp;props: PropTypes.тип.isRequired<br>
          }<br>
      </strong>
    </code><br>

    <span class="v"><strong># defaultProps</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Значения по умолчанию.<br>
    <br>

    <code>
      <strong>
        // После компонента и до экспорта:<br>
        Имя_компонента.defaultProps = {<br>
          &nbsp;props: value;<br>
        }<br>
        <br>

        // Внутри компонента до рендера:<br>
        static defaultProps = {<br>
          &nbsp;props: value;<br>
        }<br>
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
        this.setState((state, props) => ({ имя_свойства: props.newValue}));<br>
        <br>

        Или...<br>
        <br>

        this.setState((state) => { return { property: newValue } });
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
          this.имя_функции = this.имя_функции.bind(this); //Связывание с компонентом.<br>
          <br>

          // onClick={this.func.bind(this)} - вызывает проблемы с производительностью, так как создается новая функция каждый раз при рендере
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
          }<br />
          <br />

          // -------------------------------- Если нужно обрабатывать несколько input<br />
          const handleInput = (e) => {<br />
            &nbsp;const name = e.target.name;<br />
            &nbsp;this.setState({<br />
              &nbsp;&nbsp;[name]: value<br />
            &nbsp;});<br />
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
      <span class="v3"><strong>componentDidUpdate()</strong></span> - вызывается после обновления свойств компонента (обязательная проверка prevProps).<br />
      <span class="v3"><strong>componentWillReceiveProps()</strong></span> - вызывается при обновлении props.<br />
      <span class="v3"><strong>componentDidCatch()</strong></span> - отлавливание ошибки в компоненте (используется для рендера компонента ошибки, но не обрабатывает ошибки в событиях / асинхронном коде).<br />
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

<!-- The Article -->

<div class="textblock" id="Ho">
  <p>
    <em>============================ React-Хуки:</em><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Переиспользование логики. Добавление функциональности классовых компонентов функциональным. Доступны в версии 16.8 и выше. Хуки не должны вызываться внутри условий и циклов, а также в вложенных функциях. Могут вызываться только внутри функциональных компонентов
    или внутри пользовательских хуков.<br>
    <br>

    <span class="v"><strong># useState</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Состояние. Значение заменяется, а не сливается.<br>
    <br>
    <code>
      <strong>
        import React, { useState } from 'react';<br />
        <br />

        const [value, setValue] = useState(начальное_значение);<br />
        <br />

        setValue(новое_значение); - изменение состояния.<br />
      </strong>
    </code><br />

    <span class="v"><strong># useRef</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Управление элементом.<br>
    <br>
    <code>
      <strong>
        import .. { useRef } ...<br>
        <br>

        const myRef = useRef(null);<br>
        <br>

        тег ref={myRef}<br>
        <br>

        myRef.current - доступ<br>
      </strong>
    </code>
    <br>

    <span class="v"><strong># useContext</strong></span><br />
    <br>

    <span class="v"><strong># useCallback</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Мемоизация callback'а.<br />
    <code>
      <strong>
        const memozedCb = useCallback(() => {<br />
          &nbsp;func(a, b);<br />
        }, [a, b]);<br />
      </strong>
    </code>
    <br>

    <span class="v"><strong># useMemo</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Возвращает мемоизированное значение (результат выполнения функции будет сохранен во избежание повторных вычислений, как оптимизация).
    Повторное вычисление будет выполнено только при изменении какого-либо значения или зависимости. Запускается во время рендера.<br>
    <strong>
      <code>
        const memozedValue = useMemo(() => {<br />
          &nbsp;func(a, b);<br />
        }, [a, b]);<br />
      </code>
    </strong>
    <br>

    <span class="v"><strong># useReducer</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Альтернатива useState. Для работы с сложной логикой и глубокими обновлениями.
    <br>

    <span class="v"><strong># useEffect</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> ЖЦ для функционального компонента. Задачи - загрузка данных, подписка, изменение DOM вручную. Запускается после каждого рендера. useEffect откладывается до тех пор, пока браузер не выполнит отрисовку компонента.<br>
    <br>
    <code>
      <strong>
        // Хук эффекта с подпиской / отпиской. Аналог componentDidMount / componentWillUnmount
        useEffect(() => {<br>
          &nbsp;Service.subscribe();<br>
          &nbsp;return () => {<br>
            &nbsp;&nbsp;Service.unsubscribe();<br>
          &nbsp;};<br>
        }, []);<br>
        <br>

        // 1) [] - массив зависимостей. Пустой массив - сработает лишь раз после рендера. Без массива - бесконечный рендер. Массив с зависимостью - эффект сработает лишь при изменении зависимости.<br>
        <br>
        // 2) Функции, которые нужны useEffect должны быть внутри.
      </strong>
    </code>

    <span class="v"><strong># useLayoutEffect</strong></span><br />
    <br>

    <span class="v"><strong># useSelector</strong></span><br />
    <br>

    <span class="v"><strong># useDispatch</strong></span><br />
    <br>

    <span class="v"><strong># Custom hoocks</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Хранить в специальной папке hoocks. Хук должен начинатся с "use".<br>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Re">
  <p>
    <em>============================ Рендеринг:</em><br />
      <span class="v"><strong># Рендер-функция</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Компонент принимает функцию, которая рендерит часть компонента или весь компонент целиком (или вместо собственного render'а). Не использовать в Pure-компонентах.<br>
      <br>

      <code>
        <strong>
          &lt;Component<br>
            &nbsp;render={() => разметка} /&gt;<br>
        </strong>
      </code><br>

      <span class="v"><strong># Children (#Слот)</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Компонент может принимать целый JSX-элемент:<br>

      <code>
        <strong>
            &lt;Component props&gt;<br>
              &nbsp;Вложенный_компонент<br>
            &lt;/Component&gt;<br>
            <br>

            // Компонент-родитель (отрисовка вложенного компонента):<br>
            тег { this.props.children }<br>
        </strong>
      </code><br>

      <span class="v"><strong># Клонирование</strong></span><br />
      <span class="v3"><strong>React.cloneElement(child, { obj })</strong></span> - создается клон компонента.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Hoc">
  <p>
    <em>============================ HOC:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Компонент высшего порядка. Одна функция поверх другой - первая принимает сам компонент, вторая - параметры компонента.<br>
      <br>

      <code>
        <strong>
          // Пример HOC (математический - функция принимает часть аргументов и возвращает новую функцию с меньшим числом аргументов):<br>
          const add = (a) => (b) => return a + b;
        </strong>
      </code>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> HOC должна быть чистой, то есть не менять входные данные.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Имя HOC должно начинаться с with.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Con">
  <p>
    <em>============================ Context API:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Решает проблему с пробрасыванием props от верхнего компонента к нижнему. Подходит для смены языка / темы. Значение в Context API можно обновлять как любое другое свойство
      компонента.<br>
      <br>
      <span class="v3"><strong>const { Provider, Consumer } = React.createContext()</strong></span> - создание контекста (вынести в отдельный файл и экспортировать).<br />
      <br>

      <code>
        <strong>
          // App.jsx<br>
          1. import Provider'а и сервиса<br>
          2. Оборачивание элементов + передача Provider'у value={ сервис }<br>
          <br>

          // Контейнер<br>
          1. import Consumer'а<br>
          <br>
          &lt;Consumer&gt;<br>
            &nbsp;{<br>
              &nbsp;&nbsp;({ методы }) => {<br>
                &nbsp;&nbsp;&nbsp;return (<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;разметка<br>
                &nbsp;&nbsp;&nbsp;)<br>
              &nbsp;&nbsp;}<br>
            &nbsp;}<br>
          &lt;/Consumer&gt;<br>
        </strong>
      </code>
      <br>

      <span class="v"><strong># Обновление контекста</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Отслеживание изменений (какие props изменились):<br>
      <br>

      <code>
        <strong>
          componentDidUpdate (prevProps) {<br>
            &nbsp;if (this.props.property !== prevProps.property) {<br>
              &nbsp;...<br>
            &nbsp;}<br>
          }<br>
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> HOC может преобразовывать props перед тем как передавать их компоненту.<br>
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Por">
  <p>
    <em>============================ Порталы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Рендер дочерних элементов в DOM-узлы, которые находятся вне DOM-иерархии родительского компонента.<br>
      <br>

      <code>
        <strong>
          React.createPortal(Child, Container);
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Rou">
  <p>
    <em>============================ Роутинг:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> <strong>npm install --save-dev react-router-dom</strong><br>
      <br>

      <code>
        <strong>
          import { BrowserRouter as Router, Route } from 'react-router-dom';<br>
          <br>

          // app.jsx<br>
          &lt;Router&gt;<br>
            &nbsp;&lt;Route path="/" component={component} /&gt;<br>
          &lt;/Router&gt;<br>
          <br>

          <span class="v"><strong># Ссылка</strong></span><br />
          import { Link } from 'react-router-dom';<br>
          <br>

          &lt;Link to="путь"&gt;Text&lt;/Link&gt;<br>
          <br>

          <span class="v"><strong># Рендеринг</strong></span><br />
          // При переходе будет отрендерен компонент.<br>
          &nbsp;&lt;Route path="/" render={() => Имя_компонента} /&gt;<br>
          <br>

          <span class="v"><strong># Соответсвие пути</strong></span><br />
          exact={true} - сравнение на полное соответствие пути.<br>
          <br>

          <span class="v"><strong># Динамический роутинг</strong></span><br />
          &lt;Route path="/путь/:id" component={component} /&gt;<br>
          const id = this.props.match.params.id; // Извлечение id из url, должно происходить в componentDidMount<br>
          <br>

          <span class="v"><strong># Использование withRouter</strong></span><br />
          <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> HOC, который передает компоненту объекты react-router.<br>
          import { withRouter } from 'react-router-dom';<br>
          <br>

          const myComponent = ({ match, location, history }) => {<br>
            &nbsp;return (<br>
              &nbsp;&nbsp;&lt;Button<br>
                &nbsp;&nbsp;&nbsp;onClick={() => history.push('/путь')}<br>
              &nbsp;&nbsp;&gt;<br>
                &nbsp;&nbsp;&nbsp;Click<br>
              &nbsp;&nbsp;&lt;/Button&gt;<br>
            &nbsp;);<br>
          };<br>
          <br>

          export default withRouter(MyComponent);<br>
          <br>

          <span class="v"><strong># Переадресация</strong></span><br />
          import { Redirect } from 'react-router-dom';<br>
          <br>

          if (условие) {<br>
            &nbsp;return &lt;Redirect to="путь" /&gt;<br>
          }<br>
          <br>

          <span class="v"><strong># Обработка несуществующих адресов</strong></span><br />
          import { Switch, Redirect } from 'react-router-dom';<br>
          <br>

          &lt;Switch&gt;<br>
            &nbsp;&lt;Route path="путь" /&gt;<br>
            &nbsp;&lt;Redirect to="/" /&gt;<br>
            &nbsp;&lt;Route component={ErrorComponent} /&gt;<br>
          &lt;/Switch&gt;<br>
          <br>

          // Если ни один из роутов не сработает - переадресация на главную / или отображение компонента ошибки
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Prof">
  <p>
    <em>============================ Profiler:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Измеряет то, как часто рендерится приложение и какова "стоимость" этого. Его задача - найти медленые части приложения, которые можно оптимизировать.<br>

      <code>
        <strong>
          App
            &nbsp;Profiler id="Navigation" onRender={callback}
              &nbsp;&nbsp;Navigation {...props}
            &nbsp;/Profiler
          /App
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> В Prod-режиме должно быть отключено.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Принимает ID и callback, который React вызывает каждый раз, когда компонент внутри дерева фиксирует обнрвление.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Может быть использован несколько раз и быть вложенным.<br>
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Каждое его использование увеличивает нагрузку на CPU и память.<br>
</div>

</div>

<div class="textblock" id="Opt">
  <p>
    <em>============================ Оптимизация:</em><br />
  </p>
</div>

  </div>
</div>

</body>
</html>
