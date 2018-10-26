<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Cmd</title>

<link rel="shortcut icon" href="../Images/I/Cmd.png" type="image/x-icon">

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
   <a class="navbar-brand"><i class="fa fa-terminal colored" aria-hidden="true"></i> Cmd</a>
  </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
       <li class="active"><a href="../add.php"><i class="fa fa-undo" aria-hidden="true"></i> Back</a></li>

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

<!-- Panel Block -->

<div class="panel panel-warning" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Командная строка</h3>
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
            <a href="https://ru.wikipedia.org/wiki/Cmd.exe">* Cmd</a><br />
            <a href="https://ru.wikipedia.org/wiki/Windows_PowerShell">* PowerShell</a><br />
            <br />

            <span class="v"><strong># Элементы</strong></span><br />
            <a href="https://ru.wikipedia.org/wiki/%D0%9E%D0%B1%D0%BE%D0%BB%D0%BE%D1%87%D0%BA%D0%B0_%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%BE%D0%B9_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B">* Оболочка ОС</a><br />
            <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BD%D1%81%D0%BE%D0%BB%D1%8C">* Консоль</a><br />
            <br />

            <span class="v"><strong># Документация</strong></span><br />
            <a href="https://ss64.com/">* Команды</a><br />
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

<button class="button5" id="BazB">Базовые команды</button>
<button class="button5" id="GorB">Горячие клавиши</button>
<button class="button5" id="PerB">Перенаправление ввода / вывода</button>
<button class="button5" id="IspB">Переменные среды</button>
<button class="button5" id="ZapB">Группа команд</button>
<button class="button5" id="ZavB">Завершение процессов</button>

<!-- The Article -->

<div class="textblock" id="Baz">
  <p>
    <em>============================ Базовые команды:</em><br />
      <strong>systeminfo</strong> - информация о системе.<br />
      <strong>ipconfig</strong> - сетевая информация.<br />
      <strong>msconfig</strong> - конфигурация системы.<br />
      <strong>ping</strong> - информация об обмене пакетами.<br />
      <strong>shutdown</strong> - команды для ОС + показ запланированных выключений.<br />
      <strong>help</strong> - список всех команд + справка. + элемент - справка о команде.<br />
      <strong>cls</strong> - очистка экрана.<br />
      <strong>exit</strong> - закрыть окно.<br />
      <strong>dir</strong> - список каталогов/файлов.<br />
      <strong>cd</strong> - изменить каталог.<br />
      <strong>mkdir</strong> - создать каталог.<br />
      <strong>rmdir</strong> - удалить каталог.<br />
      <strong>del</strong> - удалить каталог/файл.<br />
      <strong>copy</strong> - копировать каталог/файл.<br />
      <strong>move</strong> - переместить каталог/файл.<br />
      <strong>attrib</strong> - отобразить/изменить атрибуты файлов.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Gor">
  <p>
    <em>============================ Горячие клавишы:</em><br />
      <strong>Ctrl + C</strong> - завершение выполнения команды.<br />
      <strong>Ctrl + A</strong> - выделить строку.<br />
      <strong>F11</strong> - развернуть на весь экран.<br />
      <strong>Alt + F7</strong> - очистить историю команд.<br />
      <strong>F7</strong> - диалоговое окно, содержащее историю команд.<br />
      <strong>F5</strong> - вывод последних веденых команд.<br />
      <strong>F3</strong> - вывод последней команды.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Per">
  <p>
    <em>============================ Перенаправление ввода / вывода:</em><br />
     <strong>Команда > имя файла</strong> -
     если заданный для вывода файл уже существовал, то он перезаписывается, если не существовал - создастся.<br />
     <strong>Команда >> имя файла</strong> - дописывает информацию, выводимую командой в конец сущ. файла.
     <br />
     <strong>Команда < имя файла</strong> - читает входные данные для заданной команды не с клавиатуры, а из
     определенного сущ. файла.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Isp">
  <p>
    <em>============================ Использование переменных среды:</em><br />
      <strong>echo переменная</strong> - вывод переменной.<br />
      <strong>%cd%</strong> - возвращает путь к текущей папке.<br />
      <strong>%computername%</strong> - возвращает имя компьютера.<br />
      <strong>%comspec%</strong> - возвращает путь к исп. командной оболочке.<br />
      <strong>%date%</strong> - возвращает текущие данные.<br />
      <strong>%random%</strong> - возвращает произвольное десятичное число от 0 до 32767.<br />
      <strong>%windir%</strong> - возвращает размещение каталога ОС.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Zap">
  <p>
    <em>============================ Запуск нескольких команд:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Ставятся между командами:<br />
      <br />

      <strong>&</strong> - запуск первой, а затем второй команды.<br />
      <strong>&&</strong> - запуск последующих команд, если первая команда была выполнена успешно.<br />
      <strong>|</strong> - выход одной программы идет на вход другой без использования промежуточных временных файлов.<br />
      <strong>||</strong> - запуск второй команды, если первая не была выполнена.<br />
      <strong>()</strong> - группировка / вложение команд.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Zav">
  <p>
    <em>============================ Завершение процессов:</em><br />
      <strong>tasklist</strong> - отображение всех процессов.<br />
      <strong>tasklist /v</strong> - более подробная информация о процессах.<br />
      <strong>tasklist /v /fo list</strong> - в виде списка.<br />
      <br />

      <strong>taskkill /pid id или pin процесса</strong> - отправка запроса на завершение процесса.<br />
      <strong>taskkill /f /pid id или pin процесса /t</strong> - принудительно завершить процесс.<br />
  </p>
    </div>

  </div>
</div>

</body>
</html>
