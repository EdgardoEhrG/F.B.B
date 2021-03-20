<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Chai.js</title>

<link rel="shortcut icon" href="../Images/I/Chai.png" type="image/x-icon">

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
        <a class="navbar-brand">ChaiJS</a>
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
    <h3 class="panel-title">Библиотека функции для проверок</h3>
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
          <a href="https://learn.javascript.ru/testing">* ChaiJS</a><br />
          <br />

          <span class="v"><strong># Документация</strong></span><br />
          <a href="http://chaijs.com/">* ChaiJS Docs</a>
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

<button class="button5" id="NachB">Начало работы с Chai</button>
<button class="button5" id="FunB">Функции</button>

<!-- The Article -->

<div class="textblock" id="Nach">
  <p>
    <em>============================ Начало работы с Chai:</em><br />
      <code>
        <strong>
          // Установка и подключение:<br>
          npm install chai<br>
          <br>

          Утверждение - const assert = require('chai').assert;<br>
          Ожидание - const expect = require('chai').expect;<br>
          Долженствование - const should = require('chai').should;<br>
        </strong>
      </code>
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Fun">
  <p>
    <em>============================ Функции:</em><br />
      <span class="v3"><strong>assert(выражение);</strong></span> - выдаст ошибку, если значение выражения при приведении к логическому типу не <strong>true</strong>.<br />
      <span class="v3"><strong>assert.equal(v1, v2);</strong></span> - сравнивает первый аргумент со вторым и выдает ошибку, если они не равны.<br />
      <span class="v3"><strong>assert.strictEqual(v1, v2);</strong></span> - строгое сравнение первого аргумента со вторым.<br />
      <span class="v3"><strong>assert.notEqual(v1, v2);</strong></span> - сравнивает на несоответствие первого аргумента со вторым.<br />
      <span class="v3"><strong>assert.notStrictEqual(v1, v2);</strong></span> - проверяет на строгое неравенство.<br />
      <span class="v3"><strong>assert.isTrue(выражение)</strong></span> - проверка на истинность.<br />
      <span class="v3"><strong>assert.isFalse(выражение)</strong></span> - проверка на ложность.<br />
      <span class="v3"><strong>assert.isNaN(выражение)</strong></span> - проверка на NaN.<br />
      <span class="v3"><strong>assert.include(data, что_должно_содержаться, 'text')</strong></span> - проверка на содержание.<br />
      <span class="v3"><strong>assert.lengthOf(data, число, 'text')</strong></span> - проверка на длину.<br />
      <br>

      <span class="v3"><strong>expect(data).to.be.an('тип')</strong></span> - ожидание типа.<br />
      <span class="v3"><strong>expect(data).that.includes(value)</strong></span> - ожидание, что содержится определенное значение.<br />
      <span class="v3"><strong>expect(data).to.have.lengthOf(число)</strong></span> - ожидание определенной длины.<br />
      <br>

      <span class="v3"><strong>data.should.be.an('тип')</strong></span> - должен быть определенного типа.<br />
      <span class="v3"><strong>data.should.that.includes(value)</strong></span> - должен содержать определенное значение.<br />
      <span class="v3"><strong>data.should.have.lengthOf(число)</strong></span> - должен иметь определенную длину.<br />
  </p>

<div class="alert alert-success" role="alert">
  <i class="fa fa-circle" aria-hidden="true"></i> Все вызовы <strong>assert</strong> позволяют дополнительным последним аргументом
  указать строку с описанием ошибки, которая выводится если <strong>assert</strong> не проходит.
</div>

<div class="alert alert-info" role="alert">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Необходимо использовать ту проверку, которая максимально соответствует задаче.<br />
</div>

</div>

  </div>
</div>

</body>
</html>
