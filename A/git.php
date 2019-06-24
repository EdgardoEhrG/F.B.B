<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Git</title>

<link rel="shortcut icon" href="../Images/I/git.png" type="image/x-icon">

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
      <a class="navbar-brand"><i class="fa fa-git colored" aria-hidden="true"></i> Git</a>
  </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../other.php"><i class="fa fa-undo" aria-hidden="true"></i> Back</a></li>

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
    <h3 class="panel-title">Инструмент командной разработки</h3>
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
            <a href="https://ru.wikipedia.org/wiki/Git">* Git</a> <br />
            <a href="https://ru.wikipedia.org/wiki/SmartGit/Hg">* SmartGit</a><br />
            <br />

            <span class="v"><strong># Документация</strong></span><br />
            <a href="http://www.syntevo.com/smartgit/">* Установка SmartGit</a><br />
            <a href="https://git-scm.com/">* Git Docs</a><br />
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
              <span class="v"><strong># Инструкция</strong></span><br />
              1) Регистрация на GitHub (заведение репозитория).<br />
              2) В SmartGit (клиент-программа) - Repository => Clone => вставка url => next... (репозиторий открыт на клиенте).<br />
              3) Размещение файлов в папку Git.<br />
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

<button class="button5" id="OtpB">Отправка / получение файлов</button>
<button class="button5" id="OtkB">Откат изменений</button>
<button class="button5" id="VetB">Ветки</button>
<button class="button5" id="SliB">Слияние веток</button>
<button class="button5" id="UstB">Конфликты</button>

<!-- The Article -->

<div class="textblock" id="Otp">
  <p>
    <em>============================ Отправка / Получение файлов:</em><br />
      <strong>Commit</strong> - сохранение данных в локальный репозиторий + сообщение о том, что было сделано.<br /><br />
      <strong>Push => configure => login/password</strong> - сохранение / отправка файлов с приложения на сайт
      (удаленный репозиторий). Для общего доступа.<br /><br />
      <strong>Pull</strong> - получение изменений с сайта на приложение. Обновление файлов, если таковые имеются.<br /><br />
      <strong>Delete</strong> - удаление файла.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Сообщение Commit можно редактировать.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Otk">
  <p>
    <em>============================ Откат изменений:</em><br />
      <strong>Discard</strong> - отказ от изменений, то есть откат кода до того момента, пока не нажал <strong>Commit</strong>.<br /><br />
      <strong>Log => (cm) Revert => Revert & Commit</strong> - откат на шаг назад.<br /><br />
      <span class="v"><strong># Пометки</strong></span><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Оранжевый кружок - файлы на локальном репозитории.<br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Черный кружок - файлы на сайте.<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Черный кружок <strong>(cm) => Reset => Set the index and working tree... => Reset</strong> - приведение репозитория в
      изначальное состояние.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Vet">
  <p>
    <em>============================ Ветки:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Параллельные версии программы (1 - стабильная, остальные - экспериментальные - может быть несколько ветвей).<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В окне "Branches" => <strong>Local Branches (cm) => Add Branch => имя, класс, данные о ветке => Add</strong> -
      добавить ветвь.<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Щелчок по ветке <strong>(cm) => Check Out</strong> - переход на эту ветвь.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Sli">
  <p>
    <em>============================ Слияние:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Щелчок по тому, откуда перенести <strong>(cm) => Merge => Create-Merge-Commit</strong> - слияние из основного в вспомогательный.
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Не забывать про переходы ветвей (в какой ветви находишься).
</div>

  <p>
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Выделить обе ветви - кликнуть на нужный <strong>Commit</strong> => <strong>Cherry-Pick-C-P&C</strong> - перенос в основную ветвь из вспомогательной.
    <br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> <strong>Fast - Forward - Merge</strong> - если удаленный на 1 Commit опережает локальный.
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Ust">
  <p>
    <em>============================ Конфликты:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Конфликт при слиянии:<br />
      - Возникает при разнице в 2-х файлах или при редактировании в нескольких ветках + в главной.<br />
      <br>

      <span class="v"><strong># Решение</strong></span><br />
      1) <strong>Merge</strong> => <strong>abort Merge</strong> - отменить слияние.<br />
      2) Двойное нажатие на выделенный красным файл <strong>=> Conflict Solver (окно конфликта, в котором показан код) => в середине
      результирующий код => редактирование => Save => Stage => Commit</strong>.<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> .exe файлы (папка bin) и .obj не будут добавляться, отправляться в репозиторий и вообще затрагиваться:
      <strong>(cm) => Ignore.</strong><br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Если удалить файлы из одной ветки, а затем слить ее с главной, то находящиеся там файлы удалятся.<br /><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> В Log если не нравится элемент дерева - <strong>Revert => R-C.</strong><br />
      Не делать огромные <strong>Commit</strong> - откатить будет почти невозможно.
  </p>
</div>

 </div>
</div>

</body>
</html>
