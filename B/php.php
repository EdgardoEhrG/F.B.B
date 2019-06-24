<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>PHP</title>

<link rel="shortcut icon" href="../Images/I/php.png" type="image/x-icon">

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
        <a class="navbar-brand">PHP</a>
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
    <h3 class="panel-title">Сценарный серверный язык</h3>
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
          <a href="https://ru.wikipedia.org/wiki/PHP">* PHP</a><br />
          <br />

          <span class="v"><strong># Материалы</strong></span><br />
          <a href="http://www.php-s.ru/self-teacher/3_2/">* Профессиональная вставка</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://php.net/manual/ru/intro-whatis.php">* PHP Docs</a><br />
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
          <span class="v2"><strong>&lt;?php...?&gt;</strong></span> - начало и конец PHP-скрипта.<br />
          <br />

          <i class="fa fa-minus-square" aria-hidden="true"></i> Недостатки:<br />
          - При размещении HTML-разметки внутрь PHP-кода, код начинает работать медленнее.<br />
          <br />

          <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> Особенности:<br />
          -  Не работает на Windows 95.<br />
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
<button class="button" id="RedB">ReDirect</button>
<button class="button" id="CommB">Комментарии</button>
<button class="button" id="ComB">Команды</button>
<button class="button" id="PerB">Переменные</button>
<button class="button" id="ConB">Константы</button>
<button class="button" id="TypB">Типы данных</button>
<button class="button" id="OpeB">Операторы</button>
<button class="button" id="LogB">Логические операторы</button>
<button class="button" id="StrB">Строки</button>
<button class="button" id="UslB">Условия</button>
<button class="button" id="SwiB">Switch</button>
<button class="button" id="CycB">Циклы</button>
<button class="button" id="FunB">Функции</button>
<button class="button" id="MasB">Массивы</button>
<button class="button" id="RegB">Регулярные выражения</button>
<button class="button" id="CooB">Cookies</button>
<button class="button" id="SesB">Session</button>

<!-- The Article -->

<div class="textblock" id="Pod">
  <p>
    <em>============================ Подключение PHP-файлов:</em><br />
    <span class="v2"><strong>include()</strong></span> - подключение и выполнение указанного файла во время выполнения PHP-сценария. Возвращает WARNING, если файл не найден.<br />
    <span class="v2"><strong>require()</strong></span> - включение файла в PHP-сценарий до выполнения сценария PHP. Вставляет фрагмент кода / текста указанного файла при запуске.
    Используется, когда часто исп. функции, константы и переменные лучше хранить в отдельном файле, исп. для сокращения кода. Шаблонизация. Возвращает FATAL ERROR, если файл не найден.<br />
    <span class="v2"><strong>require_once()</strong></span> - подключение PHP-файла. Перед включением файла интерпретатор проверяет, включен ли указанный файл ранее или нет. Если да, то файл не будет включен вновь.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Red">
  <p>
    <em>============================ Переадресация:</em><br />
      <span class="v2"><strong>header('Location: http://www.example.com/');</strong></span><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Comm">
  <p>
    <em>============================ Комментарии:</em><br />
      <span class="v2"><strong>//</strong></span> и <span class="v2"><strong>#</strong></span> - однострочные комментарии.<br />
      <span class="v2"><strong>/*...*/</strong></span> - многострочный комментарий.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Com">
  <p>
    <em>============================ Команды:</em><br />
      <span class="v2"><strong>phpinfo()</strong></span> - информация о php.<br />
      <br />

      <span class="v"><strong># Вывод</strong></span><br />
      <span class="v2"><strong>echo ""</strong></span> - вывод информации, строки. Можно и без "". Может выводить несколько сообщений.<br />
      <span class="v2"><strong>echo "&lt;br&gt;"</strong></span> - перенос строки.<br />
      <span class="v2"><strong>print()</strong></span> - функция вывода.<br />
      <span class="v2"><strong>printf()</strong></span> - функция вывода с форматом.<br />
      <br />

      <span class="v"><strong># Время</strong></span><br />
      <span class="v2"><strong>echo time("")</strong></span> - вывод времени, которое идет с 1970 года. В "" - формат.<br />
      <span class="v2"><strong>echo date("F j, Y, g:i:s a")</strong></span> - вывод текущей даты.
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Компоненты:<br />
  <strong>F</strong> - полное название месяца.<br />
  <strong>j</strong> - день без начальных нулей.<br />
  <strong>Y</strong> - год из 4-х цифр.<br />
  <strong>g</strong> - двенадцатичасовой формат.<br />
  <strong>i</strong> - минуты с начальными нулями.<br />
  <strong>s</strong> - секунды с начальными нулями.<br />
  <strong>a</strong> - am / pm в нижнем регистре.<br />
</div>

  <p>
    <span class="v2"><strong>date_default_timezone_set('America/Houston')</strong></span> - задание часового пояса.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
    <em>============================ Переменные:</em><br />
      <span class="v2"><strong>$d = 8;</strong></span> - объявление и присваивание значения переменной. В PHP нет <strong>var</strong>.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Любое имя переменной должно начинаться со знака <span class="v2"><strong>$</strong></span>. После него может идти
  буква или <strong>"_"</strong>, но не цифра. Знак пробела недопустим. Регистр имеет значение. Большие слова разделяются знаком <strong>"_"</strong>.
  Использование символов нижнего регистра.
</div>

  <p>
    <span class="v2"><strong>$button = "&lt;button&gt;Reset&lt;/button&gt;"</strong></span> - присвоение переменной HTML-кода.<br />
    <br />

    <span class="v"><strong># Ссылка на переменную</strong></span><br />
    1) <span class="v2"><strong>$d = 8;</strong></span><br />
    <span class="v2"><strong>$c = $d;</strong></span> - вторая переменная копирует первоначальное значение переменной <strong>$d</strong>.<br />
    2) <span class="v2"><strong>$c = &$d;</strong></span> - значения этих переменных постоянно будут равны друг другу. <strong>&</strong> -
    задает ссылку. <br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Если создать переменную и присвоить ей значение, а затем создать еще одну переменную
  и установить ее как ссылка на первую переменную, то она будет ссылаться не на саму переменную, а на ее значение. Если удалить первую переменную,
  то вторая продолжит свое существование с этим же значением.
</div>

  <p>
    <span class="v"><strong># Динамические переменные</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Переменные, имена которых содержат другие переменные. Применяются если требуется в ходе выполнения программы создавать много переменных:<br />
    <span class="v2"><strong>$ar = 45;</strong></span> - переменная со значением.<br />
    <span class="v2"><strong>$n = "ar";</strong></span> - присваивание имени переменной другой переменной.<br />
    <span class="v2"><strong>echo $$n</strong></span> - вызов этой переменной. Выведет 45.<br />
    <br />

    <span class="v"><strong># Функции</strong></span><br />
    <span class="v2"><strong>isset()</strong></span> - проверка на инициализацию переменной.<br />
    <span class="v2"><strong>unset()</strong></span> - удаление переменной.<br />
    <span class="v2"><strong>static()</strong></span> - сохранение значения переменной.<br />
    <br />

    <span class="v"><strong># Суперглобальные переменные</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Встроенные переменные, которые всегда доступны во всех областях видимости.<br />
    <br />
    <span class="v2"><strong>$GLOBALS</strong></span> - ссылки на все переменные глобальной области видимости.<br />
    <span class="v2"><strong>$_SERVER</strong></span> - информация о сервере и среде исполнения.<br />
    <span class="v2"><strong>$_GET</strong></span> - GET-переменные HTTP.<br />
    <span class="v2"><strong>$_POST</strong></span> - POST-переменные HTTP.<br />
    <span class="v2"><strong>$_FILES</strong></span> - переменные файлов, загруженных по HTTP.<br />
    <span class="v2"><strong>$_COOKIE</strong></span> - HTTP Куки.<br />
    <span class="v2"><strong>$_SESSION</strong></span> - переменные сессии.<br />
    <span class="v2"><strong>$_REQUEST</strong></span> - переменные HTTP-запроса.<br />
    <span class="v2"><strong>$_ENV</strong></span> - переменные окружения.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Con">
  <p>
    <em>============================ Константы:</em><br />
      <span class="v2"><strong>define("имя_константы", значение)</strong></span> - задание константы.
      <span class="v2"><strong>bool defined()</strong></span> - проверка существования константы.<br />
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Особенности:</strong><br />
  - У констант нет приставки <span class="v2"><strong>$</strong></span>.<br />
  - Константа определяется только с помощью <span class="v2"><strong>define()</strong></span>.<br />
  - Константы могут иметь только скалярные значения.<br />
  - Принято называть константы буквами верхнего регистра.<br />
  - У <span class="v2"><strong>define()</strong></span> есть 3-й аргумент - true / false. При true регистр константы не учитывается, а при
  false учитывается (стоит по умолчанию).
</div>

  <p>
    <span class="v2"><strong>defined("имя_константы")</strong></span> - проверка существующей константы (прим. для того, чтобы избежать именования с зарезервированным именем).
    Если константа уже определена, то вернет <strong>1</strong>, в противном случае <strong>0</strong>.<br /><br />

    <span class="v"><strong># Предопределенные константы</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Константы, которые уже заранее определены. Их назначение - хранить инф. Можно писать как заглавными, так и прописными буквами.<br />
    <span class="v2"><strong>PHP_VERSION</strong></span> - версия PHP.<br />
    <span class="v2"><strong>PHP_OS</strong></span> - название ОС.<br />
    <span class="v2"><strong>_LINE_</strong></span> - номер строки в коде.<br />
    <span class="v2"><strong>_FILE_</strong></span> - имя файла, сценария, а также его путь.<br />
    <span class="v2"><strong>_DIR_</strong></span> - каталог текущего файла.<br />
    <span class="v2"><strong>_FUNCTION_</strong></span> - название обрабатываемой функции.<br />
    <span class="v2"><strong>_CLASS_</strong></span> - текущий класс.<br />
    <span class="v2"><strong>_METHOD_</strong></span> - название обрабатываемого метода.<br />
    <span class="v2"><strong>_NAMESPACE_</strong></span> - текущее пространство имен.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Typ">
  <p>
    <em>============================ Типы данных:</em><br />
      <strong>integer</strong> - целые числа и могут быть представлены в восьмеричной, десятичной и шестнадцатеричной системах счисления.<br />
      <strong>double</strong> - числа с плавающей точкой. Для расчетов высокой точности.<br />
      <strong>boolean</strong> - логический тип данных - true/false.<br />
      <strong>string</strong> - строка в "". Поддерживаются пустые строки. Можно и в ''.<br />
      <strong>array</strong> - массив (набор элементов).<br />
      <strong>object</strong> - объект.<br />
      <strong>resource</strong> - спецпеременная, содержащая ссылку на внешний ресурс (файл или подключение к БД).<br />
      <strong>NULL</strong> - значение переменной не определено.<br />
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Тип данных можно менять на лету.
</div>

  <p>
    <span class="v2"><strong>gettype(переменная)</strong></span> - тип данных.<br />
    <span class="v2"><strong>is_тип данных(переменная)</strong></span> - проверка переменной на соответствие определенному типу данных - 1/0.<br />
    <span class="v2"><strong>settype(переменная, тип данных)</strong></span> - изменяет тип переменной.<br />
    <span class="v2"><strong>var_dump()</strong></span> - инф. о переменной.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Если строка начинается не с цифры, то => 0 (integer), у вещественных отбрасывается дробная часть (integer),
  false => "" (string), true => "1" (string). Любые числа преобразуются в строку, содержащую эти цифры, включая их
  степень (string).
</div>

  <p>
    <span class="v2"><strong>(тип данных) переменная</strong></span> - приведение типов данных.
    Используется, когда изменение типа переменной не требуется. Создастся временная копия требуемого типа.
  </p>

<div class="alert alert-info">
 <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>\</strong> - экранирование символов.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Ope">
  <p>
    <em>============================ Операторы:</em><br />
      <span class="v2"><strong>-</strong></span> - минус, также меняет знак числа на противоположный.<br />
      <span class="v2"><strong>+</strong></span> - плюс.<br />
      <span class="v2"><strong>*</strong></span> - умножение.<br />
      <span class="v2"><strong>/</strong></span> - деление.<br />
      <span class="v2"><strong>%</strong></span> - остаток от деления.<br />
      <span class="v2"><strong>**</strong></span> - возведение в степень.<br />
      <span class="v2"><strong>++</strong></span> - инкремент, увеличивает на 1.<br />
      <span class="v2"><strong>--</strong></span> - декремент, уменьшает на 1.<br />
      <span class="v2"><strong>.</strong></span> - оператор соединяющий строки (конкатенация). Всегда будет значение типа <strong>string</strong>, даже если операнды различных типов.<br />
      <span class="v2"><strong>@</strong></span> - оператор подавления ошибок (ставится перед выражением). Применяется для отладки PHP-сценариев. Любые возникающие ошибки или предупреждения не будут выводится в окне браузера.<br /><br />

      <span class="v"><strong># Совмещенный оператор</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Запись типа <span class="v2"><strong>n += 5</strong></span> аналогична <strong>n = n + 5</strong>. Используется для краткости кода.
      Сначала выполнится арифметическое действие, а затем присваивание. Имеет тот же приоритет, что и присваивание.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Log">
  <p>
    <em>============================ Логические операторы:</em><br />
      <span class="v2"><strong>></strong></span> - больше.<br />
      <span class="v2"><strong><</strong></span> - меньше.<br />
      <span class="v2"><strong>>=</strong></span> - больше или равно.<br />
      <span class="v2"><strong><=</strong></span> - меньше или равно.<br />
      <span class="v2"><strong>==</strong></span> - равно.<br />
      <span class="v2"><strong>!=</strong></span> - не равно.<br />
      <span class="v2"><strong>!==</strong></span> - не равно без приведения типов.<br />
      <span class="v2"><strong>&&</strong></span> - логическое и.<br />
      <span class="v2"><strong>and</strong></span> - логическое и.<br />
      <span class="v2"><strong>||</strong></span> - логическое или.<br />
      <span class="v2"><strong>or</strong></span> - логическое или.<br />
      <span class="v2"><strong>XOR</strong></span> - исключающее или.<br />
      <span class="v2"><strong>!</strong></span> - логическое не.<br />
      <span class="v2"><strong>===</strong></span> - строгое равенство по значению и по типу.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Str">
  <p>
    <em>============================ Строки:</em><br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Строка задается как с помощью одинарных кавычек, так с помощью двойных.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> В одинарных кавычках спецсимволы не распознаются.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> В двойных кавычках переменные обрабатываются (+ с помощью фигурных скобок).<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Строку можно воспринимать как массив символов, проиндексированный целыми числами, начиная с нуля.<br />
</div>

  <p>
    <span class="v"><strong># Строковые функции</strong></span><br />
    <span class="v2"><strong>strlen()</strong></span> - длина строки.<br />
    <span class="v2"><strong>strpos()</strong></span> - поиск позиции символа в строке.<br />
    <span class="v2"><strong>substr()</strong></span> - вырезать определенный участок текста.<br />
    <span class="v2"><strong>explode()</strong></span> - разбивает строку с помощью разделителя.<br />
    <span class="v2"><strong>parse_str()</strong></span> - разбивает строку в переменные.<br />
    <span class="v2"><strong>str_repeat()</strong></span> - вывод строки определенное количество раз.<br />
    <span class="v2"><strong>substr_count()</strong></span> - определение сколько раз встречается текст или его фрагмент.<br />
    <span class="v2"><strong>str_replace()</strong></span> - замена строки другой строкой.<br />
    <span class="v2"><strong>str_split()</strong></span> - преобразование строки в массив.<br />
    <span class="v2"><strong>strpos()</strong></span> - позиция фрагмента текста без учета регистра.<br />
    <span class="v2"><strong>strrev()</strong></span> - переворачивает строку задом наперед.<br />
    <span class="v2"><strong>substr_replace()</strong></span> - замена части строки.<br />
    <span class="v2"><strong>trim()</strong></span> - удаление пробелов и других символов из начала и конца строки.<br />
    <span class="v2"><strong>strstr()</strong></span> - поиск подстроки в строке.<br />
  </p>

  <p>
    <span class="v"><strong># Функции безопасности</strong></span><br />
    <span class="v2"><strong>md5()</strong></span> - MD5-хэш строки. Для шифрования пароля.<br />
    <span class="v2"><strong>htmlspecialchars()</strong></span> - преобразует спецсимволы в HTML-сущности. Вывод разметки на экран.<br />
    <span class="v2"><strong>strip_tags()</strong></span> - удаление HTML и PHP-тегов из строки.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Usl">
  <p>
    <em>============================ Условия:</em><br />
      <code>
        <strong>
          if (условие) {<br />
            &nbsp;действие;<br />
          } elseif (второе условие, если первое ложно) {<br />
            &nbsp;альтернативное действие;<br />
          } else {<br />
            &nbsp;действие, если оба условия не верны;<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Блок с <span class="v2"><strong>else</strong></span> необязателен. В верху 3 в 1 - условие, условие с альтернативой, несколько условий.
</div>

  <p>
    <span class="v"><strong># Тернарный оператор</strong></span><br />
    <span class="v2"><strong>(условие) ? действие 1 : действие 2;</strong></span>
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="Swi">
  <p>
    <em>============================ Switch (оператор выбора):</em><br />
      <code>
        <strong>
          switch (выражение) {<br />
            &nbsp;case вариант_1 : действие_1;<br />
            &nbsp;break;<br />
            &nbsp;case вариант_2 : действие_2;<br />
            &nbsp;break;<br />
            &nbsp;default: действие;<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Особенности:</strong><br />
  - Выражение может быть не только логического типа, но и целочисленного, с плавающей точкой и строковым. Или просто переменной.<br />
  - Вариант - для сравнения.<br />
  - Действие - любой скалярный тип данных.<br />
  - <span class="v2"><strong>break</strong></span> - выход из конструкции.<br />
  - <span class="v2"><strong>default</strong></span> - если совпадений не было.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Cyc">
  <p>
    <em>============================ Циклы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл <span class="v2"><strong>while</strong></span> (блок выполняется, пока условие истинно):<br />
      <code>
        <strong>
          while (условие) {<br />
            &nbsp;действие;<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл <span class="v2"><strong>do...while</strong></span> (выполнение блока перед проверкой):<br />
      <code>
        <strong>
          do {<br />
            &nbsp;действие;<br />
          } while (условие);
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл <span class="v2"><strong>for</strong></span> (цикл со счетчиком):<br />
      <code>
        <strong>
          for (точка начала; условие; изменение) {<br />
            &nbsp;действия;<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Цикл перебора массива:<br />
      <code>
        <strong>
          foreach (массив as $value) {<br />
           &nbsp;echo $value;<br />
         }<br />
        </strong>
      </code><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В многомерном массиве обход происходит с помощью вложенных циклов.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если условие оставить пустым, то получится бесконечный цикл. Циклы не могут состоять из подвыражений.<br /><br />

      <span class="v"><strong># Безусловные операторы</strong></span><br />
      <span class="v2"><strong>break</strong></span> - прекращение выполнения цикла.<br />
      <span class="v2"><strong>continue</strong></span> - незамедлительный переход к следующей итерации.<br />
      <span class="v2"><strong>exit</strong></span> - прекращение работы цикла (когда уже нет смысла) + должно быть сообщение с ошибкой.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
    <span class="v2"><strong>function имя функции(аргументы) { return аргументы;}</strong></span> - объявление функции.<br />
    <br />

    <span class="v2"><strong>имя функции();</strong></span> - вызов функции.<br />
    <br />

    <span class="v2"><strong>global $n = 44;</strong></span> - объявление глобальной переменной в теле функции, которая доступна извне.<br />
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> <strong>Особенности:</strong><br />
  - Описание функции может располагаться в любом месте программы.<br />
  - <span class="v2"><strong>return</strong></span> - возвращает аргументы и исп. для завершения работы функции.<br />
  - Рекомендуется писать имена нижнего регистра и разделять слова при помощи "_".<br />
  - Если функция что-то возвращает, то ее имя следует начинать с <strong>get_</strong>.<br />
  - Для вывода элемента (переменной) лучше использовать ссылки. При передаче аргументов по ссылке нельзя использовать литералы, константы
  и другие значения, которые не могут изменяться.<br />
  - Лучше размещать параметры функции по умолчанию в конце списка аргументов, так как могут возникнуть некоторые проблемы при их вызове.<br />
  - Локальные переменные, находящиеся в теле функции недоступны извне.<br />
  - Не ставить глобальных задач функции.<br />
  - Проверка встроенных на наличие уже готовых решений.
</div>

  <p>
    <span class="v"><strong># Математические функции</strong></span><br />
    <span class="v2"><strong>sin()</strong></span> - расчет синуса.<br />
    <span class="v2"><strong>cos()</strong></span> - расчет косинуса.<br />
    <span class="v2"><strong>abs()</strong></span> - модуль числа.<br />
    <span class="v2"><strong>log()</strong></span> - расчет логарифма.<br />
    <span class="v2"><strong>round()</strong></span> - округление числа.<br />
    <span class="v2"><strong>ceil()</strong></span> - округление дробного числа в большую сторону.<br />
    <span class="v2"><strong>floor()</strong></span> - возвращает ближайшее меньшее целое от значения. Остается числом с плавающей точкой.<br />
    <span class="v2"><strong>min()</strong></span> - возвращает наименьшее значение.<br />
    <span class="v2"><strong>max()</strong></span> - возвращает наибольшее значение.<br />
    <span class="v2"><strong>pow()</strong></span> - возведение в степень.<br />
    <span class="v2"><strong>intval()</strong></span> - целое значение переменной.<br />
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="Mas">
  <p>
    <em>============================ Массивы:</em><br />
      <span class="v"><strong># Особенности</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если присвоить значению элементу массива <span class="v2"><strong>$a[]</strong></span> - то по умолчанию ключом этого элемента будет 0.
      Если элементов больше, то индекс +1 (не реком. к исп.)<br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> 1-й вариант:<br />
      <span class="v2"><strong>$a = array(1 => "Drake", "k" => "Kendrick Lamar");</strong></span> - создание массива. Первое (может быть как целочисленным, так и строковым) - ключ, а второе (любой тип) -
      значение.<br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> 2-й вариант:<br />
      <span class="v2"><strong>$a = ["t" => "The Weeknd", "a" => "Ariana Grande"];</strong></span><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> 3-й вариант:<br />
      <span class="v2"><strong>$a = array();</strong></span> - пустой массив.<br />
      <span class="v2"><strong>$a[2]</strong></span> - обращение к элементу с индексом 2.<br />
      <span class="v2"><strong>$a[0] = "Big Sean";</strong></span> - присвоение значения первому элементу массива. Индекс первого элемента в массиве - 0.<br />
      <span class="v2"><strong>$a[] = "..."</strong></span> - динамический массив и присвоение значения.<br />
      <br />

      <span class="v"><strong># Многомерный массив</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Массив, содержащий в себе другие массивы:<br />
      <code>
        <strong>
          $a = array(<br />
            &nbsp;array("", "", ""),<br />
            &nbsp;array("", "", "")<br />
          );
        </strong>
      </code><br />

      <span class="v2"><strong>$a[0][0]</strong></span> - Обращение к первому элементу первого массива. Ряд / ячейка.<br />
      <span class="v2"><strong>$a[0][1]</strong></span> - Обращение к второму элементу первого массива.<br />
      <span class="v2"><strong>$a[1][0]</strong></span> - Обращение к первому элементу второго массива.<br />
      <br />

      <span class="v"><strong># Операции над массивом</strong></span><br />
      <span class="v2"><strong>array_push(массив, элемент)</strong></span> - добавление элемента в конец массива.<br />
      <span class="v2"><strong>unset(массив[i])</strong></span> - удаление элемента из массива.<br />
      <span class="v2"><strong>array_pop(массив)</strong></span> - удаление последнего элемента из массива.<br />
      <span class="v2"><strong>print_r()</strong></span> - выводит значения массива с ключами. Позволяет посмотреть на массив целиком.<br />
      <span class="v2"><strong>reset()</strong></span> - устанавливает указатель на первый элемент массива, который является для нее входным параметром.
      Возвращает значение первого элемента массива.<br />
      <span class="v2"><strong>each()</strong></span> - возвращает массив, который содержит ключ и значение элемента, на который указывает курсор.
      Ключ индексируется числом 0, а значение - 1, затем указатель смещается на один элемент вправо.<br />
      <span class="v2"><strong>count()</strong></span> - подсчитывает количество элементов массива.<br />
      <span class="v2"><strong>is_array()</strong></span> - проверка переменной - является ли массивом?<br />
      <span class="v2"><strong>implode()</strong></span> - объединяет элементы массива в строку.<br />
      <span class="v2"><strong>array_fill()</strong></span> - заполняет массив значениями.<br />
      <span class="v2"><strong>array_filter()</strong></span> - фильтрация элементов массива с помощью пользовательской функции.<br />
      <span class="v2"><strong>list()</strong></span> - позволяет записать значения элементов ассоциативного массива в переменные. Работает только с проиндексированными
      элементами, причем начиная строго с нуля, иначе переменные будут пустыми.<br />
      <br />

      <span class="v"><strong># Слияние массивов</strong></span><br />
      <span class="v2"><strong>$a + $b;</strong></span> - первый массив поглотит другой.<br />
      <br />

      <span class="v"><strong># Сравнение массивов</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При обычном сравнении - массивы считаются равными, если есть совпадения
      ключа и значения, а порядок расположения элементов не имеет значения.<br />
      <br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> При строгом сравнении - порядок расположения имеет значение - должно быть одинаковое следование
      в обоих массивах.<br />
      <br />

      <span class="v"><strong># Сортировка массивов</strong></span><br />
      <span class="v2"><strong>sort()</strong></span> - сортировка массива в алфавитном порядке. Если ключ - строка, то станет числом. Не подходит для массивов, где значение ключа
      необходимо сохранять.<br />
      <span class="v2"><strong>rsort()</strong></span> - сортировка массива в обратном порядке.<br />
      <span class="v2"><strong>usort()</strong></span> - сортировка массива по значениям, используя пользовательскую функцию для сравнения элементов.<br />
      <span class="v2"><strong>asort()</strong></span> - сортировка элементов массива в алфавитном порядке без изменений ключей.<br />
      <span class="v2"><strong>arsort()</strong></span> - обратная сортировка элементов массива без изменений ключей.<br />
      <span class="v2"><strong>ksort()</strong></span> - сортировка элементов массива по ключам в алфавитном порядке.<br />
      <span class="v2"><strong>krsort()</strong></span> - обратная сортировка элементов массива по ключам.<br />
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Если задать отрицательный индекс, то следующий будет 0 и пойдет в порядке возрастания.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Reg">
  <p>
    <em>============================ Регулярные выражения:</em><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Coo">
  <p>
    <em>============================ Cookies:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Небольшой набор данных с помощью которых веб-сайт может сохранить на компьютере пользователя любую информацию.
      С помощью куки можно отслеживать активность пользователя на сайте: залогинен пользователь на сайте или нет, отслеживать историю его визитов и т.д.<br />
      <br />

      <span class="v2"><strong>setcookie(string $name, string $value, int $expire,
      string $path, string $domain, bool $secure, bool $httponly)</strong></span> - сохранение cookie.<br />
      <strong>name</strong> - имя cookie, которое будет использоваться для доступа к его значению.<br />
      <strong>value</strong> - значение или содержимое cookie - любой алфавитно-цифровой текст не более 4 Кб.<br />
      <strong>expire</strong> - (необязательный параметр): срок действия, после которого cookie уничтожаются. Если данный параметр не установлен или равен 0, то уничтожение cookie происходит после закрытия браузера.<br />
      <strong>path</strong> - (необязательный параметр): путь к каталогу на сервере, для которого будут доступны cookie.<br />
      <strong>domain</strong> - (необязательный параметр): задает домен, для которого будут доступны cookie.<br />
      <strong>secure</strong> - (необязательный параметр): указывает на то, что значение cookie должно передаваться по протоколу HTTPS.<br />
      <strong>httponly</strong> - (необязательный параметр): если равно true, cookie будут доступны только через HTTP-протокол.<br />
      <br />

<code>
<pre>
<strong>
  $value1 = "Сингапур";
  $value2 = "китайский";
  setcookie("city", $value1);
  setcookie("language", $value2, time()+3600);  //срок действия 1 час

  //получение Cookies
  if (isset($_COOKIE['city'])) echo "Город: " . $_COOKIE["city"] . "&lt;br&gt;";
  if (isset($_COOKIE['language'])) echo "Язык: " . $_COOKIE["language"];

  //удаление
  setcookie ("city", "", time() - 3600);
</strong>
</pre>
</code>

  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Ses">
  <p>
    <em>============================ Session:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Набор переменных, которые хранятся на сервере и которые относятся только к текущему пользователю.<br />

<code>
<pre>
<strong>
  session_start();  &nbsp;&nbsp;//запуск сессии - располагается в самом начале

  $_SESSION['имя_переменной'] = $переменная;  &nbsp;&nbsp;//сохранение переменной в сессии

  $переменная = $_SESSION['имя_переменной'];  &nbsp;&nbsp;//получение сохраненного значения

  //уничтожение куки с идентификатором сессии
  $_SESSION = array();
  if (session_id() != "" || isset($_COOKIE[session_name()]))
  setcookie(session_name(), '', time()-2592000, '/');

  session_destroy():  &nbsp;&nbsp;//сессия уничтожается с закрытием браузера, или с помощью этой функции.
</strong>
</pre>
</code>

  </p>
</div>

  </div>
</div>

<div class="panel panel-info" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">ООП</h3>
  </div>
    <div class="panel-body">

<!-- Buttons -->

<button class="button2" id="ClB">Класс</button>
<button class="button2" id="ConstrB">Конструктор / деструктор</button>
<button class="button2" id="StatB">Статические методы / свойства</button>
<button class="button2" id="NasB">Наследование</button>
<button class="button2" id="AbsB">Абстрактный класс</button>
<button class="button2" id="InterB">Интерфейсы</button>
<button class="button2" id="TreiB">Трейты</button>
<button class="button2" id="MagB">Магические методы</button>
<button class="button2" id="ProB">Пространство имен</button>
<button class="button2" id="ErrB">Обработка ошибок</button>
<button class="button2" id="IskB">Исключения</button>

<!-- The Article -->

<div class="textblock" id="Cl">
  <p>
    <em>============================ Класс:</em><br />
      <code>
        <strong>
          class имя {<br />
            &nbsp;спецификатор $переменная = "...";  &nbsp;&nbsp;//свойство + задание значения по умолчанию<br /><br />

            &nbsp;спецификатор function имя($n) {<br />
              &nbsp;&nbsp;$this->свойство = $n;<br />
              &nbsp;&nbsp;echo $this->свойство;<br />
            &nbsp;}<br />
          }<br /><br />

          $obj = new имя_класса();  &nbsp;&nbsp;//создание экземпляра класса (объект)<br /><br />

          $obj->переменная;  &nbsp;&nbsp;//обращение к свойству<br />
          $obj->переменная = "...";  &nbsp;&nbsp;//задание нового значения свойства у объекта<br />
          $obj->имя_функции();  &nbsp;&nbsp;//обращение к методу
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Каждый объект имеет свой внутренний идентификатор.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Свойства можно добавлять объекту динамически - жобавятся в экземпляр класса.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> <span class="v2"><strong>$this</strong></span> - доступ к свойству / методу внутри класса. Нельзя ничего присвоить.<br />
</div>

  <p>
    <span class="v"><strong># Спецификаторы</strong></span><br />
    <span class="v2"><strong>public</strong></span> - открытый доступ. К свойствам и методам, можно получить доступ из любого контекста.<br />
    <span class="v2"><strong>private</strong></span> - доступ только из методов класса. К свойствам и методам можно получить доступ только из того класса, в котором они объявлены. Даже подклассы данного класса не имеют доступа к таким данным.<br />
    <span class="v2"><strong>protected</strong></span> - защищенный доступ. Запрещает доступ к данным объекта извне, но позволяет обращаться к данным не только из методов своего класса, но также и из методов подкласса.<br />
    <br />

    <span class="v"><strong># Константы класса</strong></span><br />
    <code>
      <strong>
        class MyClass {<br />
          &nbsp;const N = "...";<br /><br />

          &nbsp;public function V() {<br />
            &nbsp;&nbsp;echo self::N;<br />
          &nbsp;}<br />
        }
      </strong>
    </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Константа всегда в открытом доступе.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Нельзя присвоить объект.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Нельзя менять значение.<br />
</div>

  <p>
    <span class="v"><strong># Функции</strong></span><br />
    <span class="v2"><strong>var_dump($obj instanceof имя_класса)</strong></span> - проверка на то, что объект является экземпляром конкретного класса.<br />
  </p>

</div>

<!-- The Article -->

<div class="textblock" id="Constr">
  <p>
    <em>============================ Конструктор / деструктор:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Писать внутри класса!<br />
      <code>
        <strong>
          function __construct(аргументы) {<br />
            &nbsp;$this->свойство = "...";<br />
          }<br /><br />

          ...<br /><br />

          $obj = new имя_класса(аргументы);
        </strong>
      </code><br /><br />

      <span class="v"><strong># Деструктор</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Уничтожение конструктора при завершении PHP-скрипта. Писать внутри класса!<br />
      <code>
        <strong>
          function __destruct() {
            &nbsp;...
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Stat">
  <p>
    <em>============================ Статические методы / свойства:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Работа с самим классом.<br />
      <code>
        <strong>
          class MyClass {<br />
            &nbsp;public static $n;  &nbsp;&nbsp;//доступ через класс<br /><br />

            &nbsp;public static function S() {<br />
              &nbsp;&nbsp;echo "..." .self::$n;  &nbsp;&nbsp;//обращение к свойству этого же класса<br />
            &nbsp;}<br />
          }<br /><br />

          MyClass::$n = "...";  //задание свойства
        </strong>
      </code><br /><br />

      <span class="v"><strong># self</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Обращение к внутреннему содержимому класса. Работа с самим классом.<br />
      <code>
        <strong>
          class MyClass {<br />
            &nbsp;private static $n;<br /><br />

            &nbsp;public static function S($n1) {<br />
              &nbsp;&nbsp;self::$n = $n1;<br />
            &nbsp;}<br /><br />

            &nbsp;public static function C() {<br />
              &nbsp;&nbsp;return self::$n;<br />
            &nbsp;}<br />
          }<br /><br />

          $obj = new MyClass();<br />
          $obj::S('...');<br />
          echo $obj::C();
        </strong>
      </code>
  </p>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> В статическом методе нельзя использовать <span class="v2"><strong>$this</strong></span>, только <span class="v2"><strong>self</strong></span>.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Nas">
  <p>
    <em>============================ Наследование:</em><br />
      <code>
        <strong>
          class MyClass2 extends MyClass {<br />
            &nbsp;...<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для того, чтобы использовать конструктор в дочернем классе используется запись:<br />
      <code>
        <strong>
          function __construct() {<br />
            &nbsp;parent::__construct();<br />
          }
        </strong>
      </code><br /><br />

      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Получение метода у родителя:<br />
      <code>
        <strong>
          $n = parent::метод();
        </strong>
      </code><br /><br />

      <span class="v"><strong># Запрещение наследования</strong></span><br />
      <code>
        <strong>
          final class MyClass {<br />
            &nbsp;...<br />
          }
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Abs">
  <p>
    <em>============================ Абстрактный класс:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Класс, для которого не могут быть созданы экземпляры класса. Используются для моделирования сущностей или как
      заготовка для классов.<br />

      <code>
        <strong>
          abstract class MyClass {<br />
            &nbsp;...<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Методы тоже могут быть <span class="v2"><strong>abstract</strong></span>.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Inter">
  <p>
    <em>============================ Интерфейсы:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Заготовка для классов. Также не может быть создан экземпляр класса.<br />
      <code>
        <strong>
          interface имя {<br />
            &nbsp;свойства;<br />
            &nbsp;спецификатор function F();<br />
          }<br /><br />

          class MyClass implements имя_интерфейса {<br />
            &nbsp;...<br />
          }
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Методы в классе при использовании интерфейса должны быть реализованы.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Интерфейсов может быть несколько - перечисление через запятую.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Интерфейс может наследоваться.<br />
</div>

<div class="alert alert-danger" role="alert">
  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Интерфейс не должен содержать тела методов.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Trei">
  <p>
    <em>============================ Трейты:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Для повторного использования свойств / методов.<br />
      <code>
        <strong>
          class MyClass {<br />
            &nbsp;public function F() {<br />
              &nbsp;&nbsp;...<br />
            &nbsp;}<br />
          }<br /><br />

          trait S {<br />
            &nbsp;public function F() {<br />
              &nbsp;&nbsp;parent::F();<br />
              &nbsp;&nbsp;...  &nbsp;&nbsp;//нововведения<br />
            &nbsp;}<br />
          }<br /><br />

          class MyClass2 extends MyClass {<br />
            &nbsp;use S;<br />
          }<br /><br />

          $obj = new MyClass2();<br />
          $obj->F();
        </strong>
      </code>
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Используемых трейтов может быть несколько - разделяются запятой.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Трейт не может быть вставлен дважды.<br />
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Mag">
  <p>
    <em>============================ Магические методы:</em><br />
      <span class="v"><strong># Клонирование</strong></span><br />
      <code>
        <strong>
          class MyClass {<br />
            &nbsp;public function __clone() {<br />
              &nbsp;&nbsp;...<br />
            &nbsp;}<br />
          }<br /><br />

          $obj = new MyClass();<br />
          $obj2 = clone $obj;
        </strong>
      </code><br /><br />

      <span class="v"><strong># Геттер / Сеттер</strong></span><br />
      <code>
        <strong>
          class MyClass {<br />
            &nbsp;private $n = 1;<br /><br />

            &nbsp;public function __get($s) {<br />
              &nbsp;&nbsp;echo "{$s}";<br />
            &nbsp;}<br /><br />

            &nbsp;public function __set($s, $r) {<br />
              &nbsp;&nbsp;echo "{$s}" . "{$r}";<br />
            &nbsp;}<br />
          }<br /><br />

          $obj = new MyClass();<br />
          echo $obj->n;<br />
          echo $obj->n = "s";
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Pro">
  <p>
    <em>============================ Пространство имен:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Используется для организации кода в файловую систему. Изолирует переменные, функции для избежания конфликтов.<br />
      <br />

      <span class="v2"><strong>namespace имя;</strong></span> - задание пространства имен. Ставится в самом начале скрипта, вернее даже в самом начале файла, до разметки.<br />
      <br />

      <code>
        <strong>
          require_once ".php";<br />
          $obj = new \имя_пространства\имя_класса();  //создание объекта из другого пространства
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Err">
  <p>
    <em>============================ Обработка ошибок:</em><br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Isk">
  <p>
    <em>============================ Исключения:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Перехват и корректная обработка ошибок.<br />
      <br />

      <code>
        <strong>
          $f = "test.php";<br /><br />

          try {<br />
            &nbsp;if (!file_exists($f)) {<br />
              &nbsp;&nbsp;throw new Exception('File not found');<br />
            &nbsp;}<br />
          }<br /><br />

          catch (Exception $e) {<br />
            &nbsp;echo $e->getMessage();<br />
          }
        </strong>
      </code>
  </p>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-primary" id="DS">
 <div class="panel-heading">
   <h3 class="panel-title">Сервер</h3>
 </div>
  <div class="panel-body">

<!-- Buttons -->

<button class="button3" id="PolB">Обработка формы</button>
<button class="button3" id="HtaB">.htaccess</button>
<button class="button3" id="FilB">Работа с файлами</button>

<!-- The Article -->

<div class="textblock" id="Pol">
  <p>
    <em>============================ Получение данных из форм:</em><br />
        <span class="v2"><strong>$n = $_GET['name элемента'];</strong></span> - данные переданные PHP-скрипту через элемент интерфейса. Извлечение данных в переменную.<br />
        <br />

        <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Глобальный массив. В этот массив помещаются данные, передаваемые извне (например пользовательский ввод). Никогда
        не стоит доверять данным полученным извне. Все элементы массива должны проверяться на допустимые значения.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Атрибут <span class="v4"><strong>name</strong></span>
  создан специально для PHP. Исп. как ориентир изъятия данных.
</div>

  <p>
    <span class="v"><strong># Избежание SQL-инъекций</strong></span><br />
    <span class="v2"><strong>$_GET</strong></span> может содержать значение любого типа, так что необходимо приведение к числовому (или какому-то конкретному) типу.<br />

    <code>
      <strong>
        if(isset($_GET['name'])) {<br />
          &nbsp;$переменная = (int) $_GET['name'];<br />
        }
      </strong>
    </code>
    <br /><br />

    <span class="v"><strong># Проверка на содержание</strong></span><br />

    <code>
     <strong>
      if(count($_POST['name'] > 0)) {<br />
        &nbsp;$переменная = $_POST['name'];<br />
      }
     </strong>
    </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Hta">
  <p>
    <em>============================ .htaccess:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Файл для авторизации. Содержит:<br /><br />

      <strong>AuthType Bacic</strong><br />
      <strong>AuthName ""</strong><br />
      <strong>AuthUserFile путь этого файла .htpasswd</strong><br />
      <strong>Require valid-user</strong><br /><br />

      - Далее зайти в Apache (Cmd):<br />
      <strong>cd ../../xampp/apache/bin => htpasswd.exe -c .passwd admin</strong><br />
      - Задать пароль и логин.<br />
      - Пароль зашифрован и скопировать в папку с проектом (при добавлении на хостинг - изменить путь, также перенастроить файл подключения к БД).<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fil">
  <p>
    <em>============================ Работа с файлами:</em><br />
      <span class="v"><strong># Действия</strong></span><br />
      <span class="v2"><strong>fopen("файл", "режим")</strong></span> - открытие файла. Также позволяет открывать файлы находящиеся на других серверах с помощью протоколов HTTP (только
      чтение) и FTP (или чтение, или запись, но не одновременно).<br />
      <span class="v2"><strong>fclose(п)</strong></span> - закрытие файла.<br />
      <span class="v2"><strong>or die("Ошибка")</strong></span> - безусловный оператор выхода.<br />
  </p>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Режимы:<br />
  <strong>r</strong> - только для чтения.<br />
  <strong>r+</strong> - для чтения и записи. Запись в файл будет происходить поверх существующих данных в файле.<br />
  <strong>w</strong> - для записи. Существующие записи будут стерты. Если файл не существует - создастся.<br />
  <strong>w+</strong> - для чтения и записи. То же, что и предыдущий режим.<br />
  <strong>a</strong> - для записи. Запись будет происходить после существующих элементов в файле. Если файла нет - ошибка.<br />
  <strong>a+</strong> - для чтения и записи. То же, что и предыдущий режим, но если файла нет - создастся.<br />
</div>

  <p>
    <span class="v2"><strong>fread("файл", кол-во_символов)</strong></span> - считает необходимое количество символов из файла.<br />
    <span class="v2"><strong>fgets("файл", кол-во_символов)</strong></span> - для чтения по строкам.<br />
    <span class="v2"><strong>fwrite(п, "...")</strong></span> - запись в файл.<br />
    <span class="v2"><strong>copy(файл, имя_копии)</strong></span> - копирование файла. Если файл с указанным именем копии существует - перезапись файла.<br />
    <span class="v2"><strong>unlink(файл)</strong></span> - удаление файла.<br />
    <span class="v2"><strong>rename(файл, новое_имя)</strong></span> - переименовывание файла. Если файл с новым указанным именем существует - ошибка.<br />
    <span class="v2"><strong>file_exists(файл)</strong></span> - проверка на существование файла.<br />
    <span class="v2"><strong>is_file(файл)</strong></span> - проверка, что файл - файл.<br />
    <span class="v2"><strong>is_writable(файл)</strong></span> - проверка на возможность записи.<br />
    <span class="v2"><strong>is_readable(файл)</strong></span> - проверка на возможность чтения.<br />
    <br />

    <span class="v"><strong># Каталоги</strong></span><br />
    <span class="v2"><strong>opendir("путь")</strong></span> - открытие каталога.<br />
    <span class="v2"><strong>closedir("путь")</strong></span> - закрытие каталога.<br />
    <span class="v2"><strong>scandir("путь")</strong></span> - массив с содержимым каталога.<br />
    <span class="v2"><strong>mkdir("...")</strong></span> - создание каталога.<br />
    <span class="v2"><strong>rmdir("...")</strong></span> - удаление пустого каталога.<br />
    <br />

    <span class="v"><strong># Файловый указатель</strong></span><br />
    <span class="v2"><strong>rewind()</strong></span> - установка указателя в начало файла.<br />
    <span class="v2"><strong>fseek(число)</strong></span> - установка указателя в конкретное место.<br />
    <span class="v2"><strong>ftell()</strong></span> - текущая позиция файлового указателя.<br />
    <span class="v2"><strong>feof()</strong></span> - положение указателя от конца файла.<br />
  </p>
</div>

  </div>
</div>

<!-- Panel -->

<div class="panel panel-danger" id="DS">
 <div class="panel-heading">
   <h3 class="panel-title">Взаимодействие с БД</h3>
 </div>
<div class="panel-body">

<!-- Buttons -->

<button class="button4" id="RabB">Работа с БД</button>

<!-- The Article -->

<div class="textblock" id="Rab">
  <p>
   <em>============================ Работа с БД:</em><br />
    <span class="v"><strong># Правило</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Установить соединение с сервером и выбрать БД => Выполнить необходимые операции => Закрыть соединение, так как их
    число ограниченно, по истечении которого не будет подключения к БД. Запрос к БД пишется после открытия подключения и до
    закрытия подключения.<br />
    <br />

    <span class="v"><strong># Подключение / отключение</strong></span><br />

<code>
<pre>
<strong>
  1. Файл с параметрами - connect.php:
  $host = 'localhost'; //Адрес сервера
  $database = 'Имя_БД';
  $user = 'root';
  $password = '...';
  

  2. Основной файл:
  require_once 'connect.php';

  $link = mysqli_connect($host, $user, $password, $database) or die ("Error " . mysqli_error($link)); //Подключение

  $query = "SQL-запрос";

  $result = mysqli_query($link, $query) or die ("Error " . mysqli_error($link));
  if ($result) {...} else {...}

  mysqli_close($link); //Закрытие соединения
</strong>
</pre>
</code>

 </p>
</div>

 </div>
</div>

</body>
</html>
