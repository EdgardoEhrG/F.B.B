<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>jQuery</title>

<link rel="shortcut icon" href="../Images/I/jq.png" type="image/x-icon">

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
        <a class="navbar-brand">jQuery</a>
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
    <h3 class="panel-title">Библиотека JS, фокусирующаяся на взаимодействии JS и HTML - "Пиши меньше, делай больше"</h3>
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
          <a href="https://ru.wikipedia.org/wiki/JQuery">* jQuery</a> <br />
          <a href="https://ru.wikipedia.org/wiki/JQuery_UI">* jQuery UI</a> <br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://jquery-docs.ru/">* jQuery Docs</a><br />
          <a href="http://ruseller.com/jquery.php?id=61">* jQuery.noConflict</a><br />
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
              - Обеспечивает межбраузерную совместимость.<br />
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

<button class="button" id="jQB">jQ-функция</button>
<button class="button" id="SelB">Селекторы</button>
<button class="button" id="FilB">Фильтры</button>
<button class="button" id="Met1B">Методы</button>
<button class="button" id="SobB">События</button>
<button class="button" id="FunB">Функции</button>
<button class="button" id="AniB">Анимация</button>
<button class="button" id="ConB">Консоль браузера</button>
<button class="button" id="LocB">Local Storage</button>

<!-- The Article -->

<div class="textblock" id="jQ">
  <p>
    <em>============================ jQ-функция:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Основная функция в библиотеке, которая позволяет производить поиск элементов
      на Web-странице, создавать новые элементы, манипулировать ими и многое другое. В качестве аргумента принимает селектор.<br />
      <br />
      <span class="v"><strong># Подключение</strong></span><br />
      <span class="v2"><strong>&lt;script scr="jquery-3.1.0.js"&gt;&lt;/script&gt;</strong></span><br /><br />

      <span class="v"><strong># jQ-функция</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Отслеживает полную загрузку документа и только после начинает работать. Внутри и писать jQ-код.
      jQ-код как и JS-код состоит из последовательно идущих команд (являются структурной единицей).<br />
      <code>
        <strong>
          $(document).ready(function(){<br />
            &nbsp; ...<br />
          });
        </strong>
      </code>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> <span class="v2"><strong>$()</strong></span> - всегда возвращает объект jQ и он всегда <strong>true</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Если в <span class="v2"><strong>$()</strong></span> указать анонимную функцию с методами, то она будет
  выполнена сразу после формирования структуры документа.<br />
</div>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Полная запись <span class="v2"><strong>jQuery()</strong></span> вместо <span class="v2"><strong>$()</strong></span> позволит избежать
  конфликты имен при работе с другими языками / плагинами на стороне клиента.
</div>

  <p>
    <span class="v"><strong># Структура команды</strong></span><br />
    <code>
      <strong>
        $('селектор').метод();
      </strong>
    </code><br /><br />

    <span class="v"><strong># Пример jQ-команды</strong></span><br />
    <code><strong>
    $('#main').css({<br />
      &nbsp;color: 'green',<br />
      &nbsp;border: '2px solid black'<br />
    });
    </strong></code><br /><br />

    <span class="v"><strong># Цепочка команд</strong></span><br />
    <code>
      <strong>
        $('селектор').метод().метод();
      </strong>
    </code><br /><br />

    <span class="v"><strong># Указатель</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Ссылка на селектор, чтобы лишний раз не писать. Также работа с текущим элементом.<br />
    <code>
      <strong>
        $('селектор').событие(function(){<br />
          &nbsp;$(this).метод();<br />
        });
      </strong>
    </code><br /><br />

    <span class="v"><strong># Использование переменных</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Переменной можно присвоить селектор и вместо него писать ее имя.<br />
    <span class="v2"><strong>var dom = "&lt;p&gt;...&lt;/p&gt;";</strong></span> - присваивание переменной HTML-элемента.<br />
    <code>
      <strong>
        var m = $('img');  =>  m.метод();
      </strong>
    </code>
  </p>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Сделанная выборка будет содержать только те элементы, которые существуют в момент выбора - если создать переменную
  с селектором, а затем позже добавть этот же элемент на страницу, то переменная не будет содержать этот элемент.
</div>

  <p>
    <span class="v"><strong># Условия</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Условие выполнится, если на странице есть данный элемент:<br />
    <code>
      <strong>
        if ($('селектор').lenght > 0) {<br />
          &nbsp;...<br />
        }
      </strong>
    </code><br /><br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Проверка на содержание элемента:<br />
    <code>
      <strong>
        $.contains(this, document.getElementById('id элемента'))
      </strong>
    </code>
  </p>

  <p>
    <span class="v"><strong># Перебор элементов</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Выполнение операций с каждым элементом, входящим в группу определенного селектора.<br />
    <code>
      <strong>
        $('селектор').each(function(){<br />
          &nbsp;$(this).метод();<br />
        })
      </strong>
    </code>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Имеет аргумент <span class="v2"><strong>index</strong></span> - текущая позиция элемента в цикле.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Sel">
  <p>
    <em>============================ Селекторы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Позволяют выбрать элемент на странице.<br />
      <span class="v2"><strong>$('p')</strong></span> - селектор тега. Будут выбраны все теги абзаца.<br />
      <span class="v2"><strong>$('.class')</strong></span> - селектор класса. Будут выбранны те элементы, у которых имеется данный класс.<br />
      <span class="v2"><strong>$('#id')</strong></span> - селектор идентификатора.<br />
      <span class="v2"><strong>$('*')</strong></span> - выбирает все элементы.<br />
      <br />

      <span class="v"><strong># Селекторы атрибутов</strong></span><br />
      <span class="v2"><strong>$('[src]')</strong></span> - селектор атрибута. Будут выбранны все элементы, у которых есть данный атрибут.<br />
      <span class="v2"><strong>$("[параметр!='значение']")</strong></span> - селектор атрибута для элементов, которые не содержат данный атрибут со значением.<br />
      <span class="v2"><strong>$("[параметр^='значение']")</strong></span> - селектор атрибута для элементов, у которых параметр начинается с указанного значения.<br />
      <span class="v2"><strong>$("[src$='.png']")</strong></span> - селектор атрибута с оканчивающимся указанным значением.<br />
      <span class="v2"><strong>$("[параметр*='значение']")</strong></span> - селектор атрибута для элементов, которые содержат указанный фрагмент значения.<br />
      <span class="v2"><strong>$("[attr|='value']")</strong></span> - выборка всех элементов, у которых значение атрибута представляет либо значение value, либо список значений, разделенных дефисами, и первое значение в этом списке равно value.<br />
      <span class="v2"><strong>$("[attr~='value']")</strong></span> - выборка всех элементов, у которых атрибут имеет список значений, разделенных пробелом, и одно из этих значений равно value.<br />
      <br />

      <span class="v"><strong># Родственные селекторы</strong></span><br />
      <span class="v2"><strong>$('p.class')</strong></span> - селектор тега с классом.<br />
      <span class="v2"><strong>$('a:hover')</strong></span> - селектор тега с псевдоклассом.<br />
      <span class="v2"><strong>$('p#id')</strong></span> - селектор тега с идентификатором. Если элемент с одинаковым идентификатором находится в другом теге, то он
      будет проигнорирован.<br />
      <span class="v2"><strong>$('div > p')</strong></span> - селектор дочернего элемента (родитель > дочерний).<br />
      <span class="v2"><strong>$('div + p')</strong></span> - селектор соседнего элемента (сосед + следующий после него сосед).<br />
      <span class="v2"><strong>$('div ~ p')</strong></span> - селектор следующего элемента после первого, причем необязательно сразу соседское следование. Элементы, которые являются
      для кого-то дочерними - проигнорируются.<br />
      <span class="v2"><strong>$('div span p')</strong></span> - селектор вложенного элемента в другие элементы.<br />
      <span class="v2"><strong>$('.class, .class2')</strong></span> - перечисление селекторов.<br />
      <span class="v2"><strong>$('p').eq(номер элемента в коллекции)</strong></span> - по номеру элемента в коллекции.<br />
      <br />

      <span class="v"><strong># Прочее</strong></span><br />
      <span class="v2"><strong>$('селектор').lenght</strong></span> - количество выбранных селекторов.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fil">
  <p>
    <em>============================ Фильтры:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Позволяют сократить выбранное множество элементов для решения каких-либо задач. Уточняют методы обхода дерева DOM. Фильтры можно комбинировать.<br />
      <br />

      <span class="v2"><strong>$('селектор:even')</strong></span> - соответствует элементам с четными номерами позиций, в наборе выбранных элементов.<br />
      <span class="v2"><strong>:odd</strong></span> - соответствует элементам с нечетными номерами позиций, в наборе выбранных элементов.<br />
      <span class="v2"><strong>:gt(n)</strong></span> - выбирает все элементы с номером, большим n.<br />
      <span class="v2"><strong>:lt(n)</strong></span> - выбирает все элементы с номером, меньшим n.<br />
      <span class="v2"><strong>:contains('text')</strong></span> - Получает все элементы, которые содержат текст text.<br />
      <span class="v2"><strong>:empty</strong></span> - получает все элементы, которые не имеют дочерних элементов.<br />
      <span class="v2"><strong>:first-child</strong></span> - получает все элементы, которые являются первыми дочерними элементами в своих родителях.<br />
      <span class="v2"><strong>:last-child</strong></span> - получает все элементы, которые являются последними дочерними элементами в своих родителях.<br />
      <span class="v2"><strong>:nth-child(n)</strong></span> - получает все элементы, которые являются n-ными элементами в своих родителях (нумерация идет с единицы).<br />
      <span class="v2"><strong>:nth-child(even)</strong></span> - получает все элементы, которые являются четными элементами в своих родителях (нумерация идет с единицы).<br />
      <span class="v2"><strong>:nth-child(odd)</strong></span> - получает все элементы, которые являются нечетными элементами в своих родителях (нумерация идет с единицы).<br />
      <span class="v2"><strong>:only-child</strong></span> - получает все элементы, которые являются единственными дочерними элементами в своих родителях.<br />
      <span class="v2"><strong>:parent</strong></span> - получает все элементы, которые имеют, как минимум, один дочерний элемент.<br />
      <br />

      <span class="v2"><strong>.first();</strong></span> - выбирает первый элемент выборки.<br />
      <span class="v2"><strong>.last();</strong></span> - выбирает последний элемент выборки.<br />
      <span class="v2"><strong>.eq(число);</strong></span> - исключает все элементы, кроме элемента, индекс которого равен заданному числу.<br />
      <span class="v2"><strong>.slice(число, число);</strong></span> - оставляет в выбранном подмножестве только те элементы, индексы которых лежат в указанном диапазоне. Если указать отрицательные числа, то отсчет будет происходить от конца.<br />
      <span class="v2"><strong>.filter('селектор');</strong></span> - оставляет только то, что соответствует указанному селектору.<br />
      <span class="v2"><strong>.not('селектор');</strong></span> - оставляет только то, что не соответствует указанному селектору.<br />
      <span class="v2"><strong>.has();</strong></span> - фильтрует набор выбранных элементов, оставляя только те, которые имеют определенных потомков.<br />
      <span class="v2"><strong>.find();</strong></span> - поиск потомков внутри каждого элемента в текущем наборе соотвествующих элементов с фильтрацией по селектору, объекту jQuery или элементу.<br />
      <br />

      <span class="v"><strong># Методы обхода дерева DOM</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Позволяют найти элемент и выбрать другие элементы, находящиеся снизу / сверху или на одном уровне. Можно сцеплять методы.<br />
      <br />
      <span class="v2"><strong>.parent();</strong></span> - переход к родителю элемента.<br />
      <span class="v2"><strong>.children();</strong></span> - переход к дочернему элементу.<br />
      <span class="v2"><strong>.prev();</strong></span> - переход слева к дочернему элементу с тем же родителем.<br />
      <span class="v2"><strong>.next();</strong></span> - переход справа к дочернему элементу с тем же родителем.<br />
      <span class="v2"><strong>.parents();</strong></span> - переход ко всем предкам.<br />
      <span class="v2"><strong>.closest();</strong></span> - для каждого элемента в наборе, получает первый элемент, который совпадает с селектором при движении вверху по DOM дереву элементов.<br />
      <span class="v2"><strong>.siblings();</strong></span> - осуществляет поиск элементов, являющихся соседними для выбранных элементов (под соседними понимаются элементы, которые имеют общего родителя). При этом, сами выбранные элементы в результат не включаются.<br />
      <br />

      <span class="v"><strong># Прочее</strong></span><br />
      <span class="v2"><strong>.selector</strong></span> - селектор выборки.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Met1">
  <p>
    <em>============================ Методы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Добавление нового поведения. Все изменения хранятся в памяти браузера - при обновлении страницы, все становится на свои места.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Метод без значений просто считывает информацию элемента.
  </p>

  <p>
    <span class="v"><strong># Массивы</strong></span><br />
    <span class="v2"><strong>$.inArray(value, array);</strong></span> - ищет заданный элемент в массиве. Возвращает индекс этого элемента или -1 в случае его отсутствия. <strong>value</strong> - искомое значение,
    <strong>array</strong> - имя массива, где необходим поиск. Не требует передачи селектора.<br />
    <br />

    <span class="v"><strong># HTML</strong></span><br />
    <span class="v2"><strong>.html("содержимое");</strong></span> - меняет содержимое элемента. Можно вставлять теги.<br />
    <span class="v2"><strong>.append();</strong></span> - добавить содержимое после внутреннего содержимого элемента.<br />
    <span class="v2"><strong>.prepend();</strong></span> - добавить содержимое перед внутренним содержимым элемента.<br />
    <span class="v2"><strong>.empty();</strong></span> - удаление содержимого элемента.<br />
    <span class="v2"><strong>.attr("атрибут", "значение");</strong></span> - добавить атрибут к элементу.<br />
    <span class="v2"><strong>.removeAttr("атрибут");</strong></span> - удалить атрибут у элемента.<br />
    <span class="v2"><strong>.text();</strong></span> - возвращает или изменяет текстовое содержимое выбранных элементов страницы.<br />
    <span class="v2"><strong>.load();</strong></span> - получение данных (результатов) с сервера и загрузка их в какой-либо элемент. Указывается PHP-файл или любой другой скриптовый.<br />
    <span class="v2"><strong>.addClass('имя класса');</strong></span> - добавить класс к элементу.<br />
    <span class="v2"><strong>.removeClass('имя класса');</strong></span> - удалить класс у элемента.<br />
    <span class="v2"><strong>.hasClass("имя класса");</strong></span> - проверяет наличие класса у элементов страницы.<br />
    <span class="v2"><strong>.toggleClass();</strong></span> - добавляет или удаляет заданный класс(ы) по принципу переключателя (добавляет, если элемент не содержит класса, и удаляет, если класс есть).<br />
    <br />

    <span class="v"><strong># CSS</strong></span><br />
    <span class="v2"><strong>.css('свойство', 'значение');</strong></span> - меняет CSS-стили у определенного элемента.<br />
    <span class="v2"><strong>.width();</strong></span> - функция возвращает ширину элемента. Кроме этого, можно установить новое значение ширины.<br />
    <span class="v2"><strong>.height();</strong></span> - функция возвращает высоту элемента. Кроме этого, можно установить новое значение высоты.<br />
    <span class="v2"><strong>.offset();</strong></span> - получение / изменение координатов элемента.<br />
    <span class="v2"><strong>.position();</strong></span> - получает значение позиции элемента <strong>top</strong> и <strong>left</strong> относительно отступов его родителя.<br />
    <br />

    <span class="v"><strong># Формы</strong></span><br />
    <span class="v2"><strong>.val();</strong></span> - позволяет получать и изменять значения элементов форм.<br />
    <span class="v2"><strong>.prop();</strong></span> - возвращает или изменяет значение свойств выбранных элементов страницы.<br />
    <br />

    <span class="v"><strong># Операции с DOM</strong></span><br />
    <span class="v2"><strong>.before();</strong></span> - помещает заданное содержимое перед определенными элементами страницы.<br />
    <span class="v2"><strong>.after();</strong></span> - вставляет заданное содержимое сразу после определенных элементов страницы.<br />
    <span class="v2"><strong>.remove();</strong></span> - удаление элемента из дерева DOM. Также разрывает связанные с элементом события.<br />
    <span class="v2"><strong>.detach();</strong></span> - изымает элемент из дерева DOM и хранит его в памяти для возвращения. Можно присвоить переменной типа <strong>$имя_переменной = </strong>.<br />
    <span class="v2"><strong>.insertAfter();</strong></span> - функция вставляет заданное содержимое сразу после определенных элементов страницы.<br />
    <span class="v2"><strong>.replaceWith();</strong></span> - замена элемента другим элементом. Замена по принципу 1 к 1. Также разрывает связанные с элементом события.<br />
    <span class="v2"><strong>.wrap();</strong></span> - помещает заданное содержимое вокруг выбранных элементов (как бы "обертывая" их).<br />
    <span class="v2"><strong>.unwrap();</strong></span> - удаляет родительские элементы у выбранных элементов, при этом, их содержимое останется на своих местах.<br />
    <span class="v2"><strong>.add();</strong></span> - добавляет заданные элементы в уже существующий набор элементов.<br />
    <span class="v2"><strong>.clone();</strong></span> - метод создает копии выбранных элементов страницы и возвращает их в виде объекта jQuery. Элементы копируются вместе со всеми содержащимися внутри них элементами. Необходимо удалять <strong>id</strong>.<br />
    <span class="v2"><strong>.size();</strong></span> - возвращает количество выбранных элементов.<br />
    <br />

    <span class="v"><strong># Появление / исчезание</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> У элемента должны быть заданы свойства <strong>display : none;</strong> или <strong>height : 0px;</strong><br />
    <br />
    <span class="v2"><strong>.hide();</strong></span> - скрывает элемент. В () можно задать скорость - <strong>"fast"</strong>, <strong>"slow"</strong>, <strong>"normal"</strong>.<br />
    <span class="v2"><strong>.show();</strong></span> - показывает элемент. Аналогично со скоростью показа.<br />
    <span class="v2"><strong>.toggle();</strong></span> - показывает / скрывает элемент.<br />
    <span class="v2"><strong>.slideUp();</strong></span> - плавное сворачивание элемента вверх.<br />
    <span class="v2"><strong>.slideDown();</strong></span> - плавное разворачивание элемента.<br />
    <span class="v2"><strong>.slideToggle();</strong></span> - разворачивание / сворачивание.<br />
    <span class="v2"><strong>.fadeOut();</strong></span> - растворение элемента. Скорость растворения указывается числом (миллисекунды). Растворяет элемент, но он остается на странице.<br />
    <span class="v2"><strong>.fadeIn();</strong></span> - появление элемента.<br />
    <span class="v2"><strong>.fadeTo();</strong></span> - изменение уровня прозрачности у элемента.<br />
    <span class="v2"><strong>.fadeToggle();</strong></span> - растворение / появление.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Методы <strong>.hide()</strong>, <strong>.show()</strong> и <strong>.toggle()</strong> изменяют свойство <strong>display</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Методы группы <strong>.fade()</strong> изменяют свойство <strong>opacity</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Методы группы <strong>.slide()</strong> изменяют свойства <strong>height</strong> и <strong>display</strong>.
</div>

<div class="alert alert-danger">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Нельзя вызывать методы jQ для исходных элементов DOM.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Sob">
  <p>
    <em>============================ События:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Срабатывание jQ-функции при определенном событии. Источник события - все происходящее в браузере. Использование анонимной функции:<br />
      <code>
        <strong>
          $('селектор').событие(function(){<br />
            &nbsp;...<br />
          })
        </strong>
      </code><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Или... (можно привязать несколько событий одновременно, разделенных пробелом) Однократное событие:<br />
      <code>
        <strong>
          $('селектор').on('событие', function(){<br />
            &nbsp;...<br />
          })
        </strong>
      </code>

      <br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Задание пользовательской функции:<br />
      <code>
        <strong>
          $('селектор').событие(имя_функции);
        </strong>
      </code>

      <br /><br />

      <span class="v"><strong># "Слушатель"</strong></span><br />
      <span class="v2"><strong>$('селектор').bind('событие', function(){...});</strong></span><br />
      <br />

      <span class="v"><strong># Инициализация события</strong></span><br />
      <span class="v2"><strong>$('селектор').trigger('событие');</strong></span> - вызывает событие у выбранных элементов, что приводит к запуску обработчиков этого события.<br />
      <span class="v2"><strong>$('селектор').bind('событие');</strong></span> - устанавливает обработчик события на выбранные элементы страницы (не работает с динамически добавляемыми элементами).<br />
      <span class="v2"><strong>$('селектор').live('событие');</strong></span> - устанавливает обработчик событий на выбранные элементы страницы. Метод имеет одну важную особенность, отличающую его от <span class="v2"><strong>.bind();</strong></span>:
      если на страницу будут вставлены новые элементы, которые соответствуют текущему селектору, то они также
      будут реагировать на заданные события.<br />
      <span class="v2"><strong>.delegate('селектор', 'событие', function(){})</strong></span> - создание обработчика события для элементов, которых еще нет в DOM-дереве.<br />
      <br />

      <span class="v"><strong># Удаления события</strong></span><br />
      <span class="v2"><strong>$('селектор').unbind('событие');</strong></span> - удаляет конкретное событие. Если оставить скобки пустыми, то удалит все события селектора.<br />
      Или...<br />
      <span class="v2"><strong>$('селектор').off('событие');</strong></span> - удаляет с выбранных элементов страницы обработчики событий, установленные с помощью метода <strong>.on();</strong>.<br />
      <span class="v2"><strong>.undelegate('селектор', 'событие')</strong></span> - отмена регистрации обработчика.<br />
      <br />

      <span class="v"><strong># Объект события</strong></span><br />
      <code>
        <strong>
          $('селектор').click(function(event){<br />
            &nbsp;...<br />
          });<br />
        </strong>
      </code><br />

      <span class="v2"><strong>.currentTarget</strong></span> - текущий объект события.<br />
      <span class="v2"><strong>.data</strong></span> - передаваемая информация.<br />
      <code>
        <strong>
          var message = "text";<br />
          $('селектор').bind('click', message, function(e){<br />
            &nbsp;console.log(e.data);<br />
          });<br />
        </strong>
      </code>
      <br />

      <span class="v2"><strong>event.preventDefault();</strong></span> - отключение события по умолчанию.<br />
      <span class="v2"><strong>event.stopPropagation();</strong></span> - остановка погружения / всплытия события.<br />
      <span class="v2"><strong>event.isPropagationStopped()</strong></span> - возвращает логический результат - была ли отменена остановка погружения / всплытия.<br />

      <br /><hr />

      <span class="v"><strong># Мышь</strong></span><br />
      <span class="v2"><strong>.click()</strong></span> - при нажатии на кнопку мыши.<br />
      <span class="v2"><strong>.dbclick()</strong></span> - двойной клик мыши.<br />
      <span class="v2"><strong>.mouseover()</strong></span> - наведение курсора на элемент.<br />
      <span class="v2"><strong>.mouseout()</strong></span> - при потере курсора с элемента.<br />
      <span class="v2"><strong>.mouseenter();</strong></span> - устанавливает обработчик появления курсора над элементом, либо, запускает это событие.<br />
      <span class="v2"><strong>.mouseleave();</strong></span> - устанавливает обработчик выхода курсора из области элемента, либо, запускает это событие.<br />
      <br />

      <span class="v"><strong># Форма</strong></span><br />
      <span class="v2"><strong>.focus();</strong></span> - устанавливает обработчик получения фокуса, либо, запускает это событие.<br />
      <span class="v2"><strong>.blur();</strong></span> - устанавливает обработчик потери фокуса, либо, запускает это событие.<br />
      <span class="v2"><strong>.change()</strong></span> - устанавливает обработчик изменения заданного элемента формы, либо, запускает это событие.<br />
      <span class="v2"><strong>.submit()</strong></span> - отправка данных на сервер.<br />
      <span class="v2"><strong>.select()</strong></span> - выделение текста.<br />
      <br />

      <span class="v"><strong># Клавиатура</strong></span><br />
      <span class="v2"><strong>.keyup();</strong></span> - устанавливает обработчик возвращения клавиши клавиатуры в ненажатое состояние, либо, запускает это событие.<br />
      <span class="v2"><strong>.keydown();</strong></span> - устанавливает обработчик перехода клавиши клавиатуры в нажатое состояние, либо, запускает это событие.<br />
      <span class="v2"><strong>.keypress();</strong></span> - устанавливает обработчик ввода символа с клавиатуры, либо, запускает это событие.<br />
      <br />

      <span class="v"><strong># Документ</strong></span><br />
      <span class="v2"><strong>.load()</strong></span> - при полной загрузке чего-то.<br />
      <span class="v2"><strong>.scroll();</strong></span> - устанавливает обработчик "прокрутки" элементов документа, либо, запускает это событие.<br />
      <br />

      <span class="v"><strong># Браузер</strong></span><br />
      <span class="v2"><strong>.resize();</strong></span> - устанавливает обработчик изменения размеров окна браузера, либо, запускает это событие.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> 1-й вариант задания функции:<br />
      <code>
        <strong>
          function имя_функции() {<br />
            &nbsp;$('селектор').метод();<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> 2-й вариант задания функции:<br />
      <code>
        <strong>
          var переменная = function() {<br />
            &nbsp;$('селектор').метод();<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> <span class="v2"><strong>return</strong></span> возвращает число, строку, текст, элемент DOM.
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Функция может вызываться при щелчке на элемент, принадлежащему какому-то классу.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Без <strong>return</strong> функция возвращает <strong>undefined</strong>.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Функции можно передать объект, элемент, переменную или значение.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Лишние параметры игнорируются, а при малом числе параметров - недостающим параметрам автоматически присваивается <strong>undefined</strong>.<br />
</div>

</div>

<div class="textblock" id="Ani">
  <p>
    <em>============================ Анимация:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Чтобы элементу задать анимацию следует использовать CSS свойство <strong>position</strong> со значениями
      <strong>absolute</strong>, <strong>fixed</strong> или <strong>relative</strong>.
  </p>

  <p>
    <span class="v3"><strong>.animate();</strong></span> - произвольная анимация набора свойств CSS. Позволяет динамически изменять свойства
    (возможна одновременная анимация нескольких свойств CSS при одном вызове). Изменяет текищие свойства CSS до указанных в методе. <strong>t</strong> - продолжительность анимации (в миллисекундах).<br />
    <code>
      <strong>
        $('селектор').animate({<br />
          &nbsp;CSS-свойство : "значение",<br />
          &nbsp;CSS-свойство : "значение"<br />
        }, t);
      </strong>
    </code>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Работает только со свойствами CSS, которые имеют числовые значения.<br />
  <i class="fa fa-circle" aria-hidden="true"></i> Для цветовых переходов используется jQuery UI.
</div>

  <p>
    <span class="v"><strong># Задержка</strong></span><br />
    <span class="v2"><strong>.delay();</strong></span> - устанавливает задержку следующей функции в очереди функций. Для запланированных функций не подходит.<br />
    <span class="v2"><strong>.stop();</strong></span> - останавливает выполнение текущей анимации.<br />
  </p>

  <p>
    <span class="v"><strong># Движение объектов</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Абсолютное перемещение (плавно - от одной позиции к другой - работает при <strong>position : relative</strong>):<br />
    <code>
      <strong>
        $('селектор').animate({ left: "200px"});
      </strong>
    </code><br /><br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Пошаговое перемещение:<br />
    <code>
      <strong>
        $('селектор').animate({ left: "+=20"});
      </strong>
    </code><br /><br />

    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Возвращение в исходную позицию:<br />
    <code>
      <strong>
        $('селектор').animate({ left: "0"});
      </strong>
    </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Con">
  <p>
    <em>============================ Отправка сообщений в консоль браузера:</em><br />
      <strong>console.log()</strong> - для общих сообщений.<br />
      <strong>console.dir()</strong> - для объектов браузера.<br />
      <strong>console.warn()</strong>- для предупреждений.<br />
      <strong>console.error()</strong> - для ошибок.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Loc">
  <p>
    <em>============================ Использование Local Storage:</em><br />
      <span class="v"><strong># Вывод имени и фамилии (пример)</strong></span><br />
      <code>
        <strong>
          &lt;p id="name"&gt;&lt;/p&gt;<br />
          <br />

          var names = new Array();<br />
          names[0] = prompt("What's your name?", "");<br />
          names[1] = prompt("What's your last name?", "");<br />
          localStorage.setItem("names", names.join(""));<br />
          $('#name').html(localStorage.getItem("names"));<br />
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Локальные данные. F12 => Application => Local Storage. Подходит для браузерных игр.
  </p>

</div>

  </div>
</div>

</body>
</html>
