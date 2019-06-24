<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>GoLang</title>

<link rel="shortcut icon" href="../Images/I/Go.png" type="image/x-icon">

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
        <a class="navbar-brand">GoLang</a>
    </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../backend.php"><i class="fa fa-undo" aria-hidden="true"></i> Back</a></li>

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
    <h3 class="panel-title">Компилируемый многопоточный ЯП</h3>
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
          <a href="https://ru.wikipedia.org/wiki/Go">* GoLang</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="https://golang.org/">* GoLang Docs</a><br />
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
              - Расширение файлов <strong>.go</strong><br />
              - Статически типизируемый язык.<br />
              <br>

              <strong>go run file.go</strong> - запуск файла.<br />
              <strong>go run build file.go</strong> - сборка файла.<br />
              <br />

              <i class="fa fa-plus-circle" aria-hidden="true"></i> Достоинства:<br />
              - Присутствует сборщик мусора, который автоматически очищает память.<br />
              - Поддержка работы с сетевыми протоколами.<br />
              - Поддержка многопоточности и параллельного программирования.<br />
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

<!-- buttons -->

<button class="button" id="StrB">Структура</button>
<button class="button" id="CommB">Комментарии</button>
<button class="button" id="PerB">Переменные</button>
<button class="button" id="TypB">Типы данных</button>
<button class="button" id="ConB">Константы</button>
<button class="button" id="UslB">Условия</button>
<button class="button" id="SwiB">Switch</button>
<button class="button" id="CycB">Циклы</button>
<button class="button" id="FunB">Функции</button>
<button class="button" id="MasB">Массивы</button>

<!-- The Article -->

<div class="textblock" id="Str">
  <p>
    <em>============================ Структура:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Программа разбивается на пакеты. Ниже - главный пакет, в котором происходит выполнение программы. Загрузка
      других пакетов осуществляется через импорт. Исполнение (вызов функций) - в главной функции. Описание пользовательских функций - после главной функции.<br />
      <br />
      <code>
        <strong>
          package main<br /><br />

          import "fmt" //Пакет для вывода данных.<br /><br />

          func main() {<br />
            &nbsp;fmt.Println("text")<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v3"><strong>//</strong></span> - однострочный комментарий.<br />
      <span class="v3"><strong>/* ... */</strong></span> - многострочный комментарий.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
    <em>============================ Переменные:</em><br />
      <span class="v3"><strong>var имя тип = значение</strong></span> - объявление переменной.<br />
      <span class="v3"><strong>var a, b, c string</strong></span> - объявление нескольких переменных.<br />
      <span class="v3"><strong>имя = значение</strong></span> - автотипизация.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Другой вариант объявления нескольких переменных:<br />
      <code>
        <strong>
          var(<br />
            &nbsp;имя тип = значение<br />
            &nbsp;имя2 тип = значение<br />
          )<br />
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Имя переменной должно начинаться с алфавитного символа или с "_".<br />
</div>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Операции:<br />
  <strong>+ | - | * | / | % | ++ | --</strong> - математические операции.<br />
  <strong>== | < | > | <= | >= | != | ! | && | ||</strong> - логические операции.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Typ">
  <p>
    <em>============================ Типы данных:</em><br />
      <strong>int8 | int16 | int32 | int64</strong> - целые (от отрицательных до положительных).<br />
      <strong>uint8 | uint16 | uint32 | uint64</strong> - целые (от 0, без отрицательных).<br />
      <strong>byte => uint8 | rune => int32 | int => int64</strong> - альтернативные названия типов (=> соответствие).<br />
      <strong>float32 | float64</strong> - число, с плавающей точкой.<br />
      <strong>complex64 | complex128</strong> - комплекстные числа.<br />
      <strong>bool</strong> - логический тип.<br />
      <strong>string</strong> - строка.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Если значение не указано, то для числовых по умолчанию 0, для bool - false, string - "".<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>var s</strong> - так нельзя указывать, должен быть или тип, или значение.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Con">
  <p>
    <em>============================ Константы:</em><br />
      <span class="v3"><strong>const имя тип = значение</strong></span> - определение константы.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Можно определять несколько констант через <strong>const()</strong><br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Константа обязательно должна инициализироваться значением.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Можно инициализировать другой константой, а переменной - нельзя.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Usl">
  <p>
    <em>============================ Условия:</em><br />
      <code>
        <strong>
          if условие {<br />
            &nbsp;...<br />
          } else if условие {<br />
            &nbsp;...<br />
          } else {<br />
            &nbsp;...<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Swi">
  <p>
    <em>============================ Switch:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> "Просаживание" - аналогично в JS.<br />
      <code>
        <strong>
          switch (выражение) {<br />
            &nbsp;case значение:<br />
              &nbsp;&nbsp;действие<br />
            &nbsp;case значение2:<br />
              &nbsp;&nbsp;действие2<br />
            &nbsp;default:<br />
              &nbsp;&nbsp;действие по умолчанию<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Cyc">
  <p>
    <em>============================ Циклы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл с шагом:<br />
      <code>
        <strong>
          for i = 1; i < n; i++ {<br />
            &nbsp;...<br />
          }<br />
        </strong>
      </code><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Перебор массива:<br />
      <code>
        <strong>
          for index, value := range массив {<br />
            &nbsp;...<br />
          }<br />
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Оператор <strong>continue</strong> - пропуск итерации, а <strong>break</strong> - прерывание цикла.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
      <code>
        <strong>
          func имя (параметры) (тип/ы возвращаемых значений) {<br />
            &nbsp;...<br />
          }<br /><br />

          имя() //Вызов функции<br />
        </strong>
      </code><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Функция может принимать неопределенное кол-во параметров определенного типа:<br />
      <code>
        <strong>
          func add(numbers ...int) {<br />
            &nbsp;var sum = 0<br />
            &nbsp;for _, number := range numbers {<br />
              &nbsp;&nbsp;sum += number<br />
            &nbsp;}<br />
            &nbsp;fmt.Println(sum)<br />
          }<br /><br />

          add(16, 32, 8, 20)
        </strong>
      </code>
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Параметры типа <strong>(x int, y int)</strong> можно заменить (сокращение) на <strong>(x, y int)</strong><br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Mas">
  <p>
    <em>============================ Массивы:</em><br />
      <span class="v3"><strong>var имя[кол-во_эл-в]тип</strong></span> - объявление массива.<br />
      <span class="v3"><strong>var arr = [5]int{1, 2, 3, 4, 5}</strong></span> - заполнение массива.<br />
      <span class="v3"><strong>var arr = [...]int{1, 2...}</strong></span> - динамический массив.<br />
      <span class="v3"><strong>var arr = [...]string{0: "text1", 1: "text2"}</strong></span> - ассоциативный массив.<br />
      <br />

      <span class="v"><strong># Операции с массивом</strong></span><br />
      <span class="v3"><strong>arr[index]</strong></span> - обращение к элементу массива по индексу.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Нельзя определить большее число элементов массива, чем указанное в размерности. А меньшее - можно,
  оставшиеся элементы будут равны 0.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <strong>len()</strong> - длина массива.<br />
</div>

</div>

  </div>
</div>

</body>
</html>
