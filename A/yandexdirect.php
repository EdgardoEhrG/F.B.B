<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>Yandex Direct</title>

<link rel="shortcut icon" href="../Images/I/Ya2.png" type="image/x-icon">

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
        <a class="navbar-brand">Yandex Direct</a>
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

<!-- Panel -->

<div class="panel panel-warning" id="DS">
  <div class="panel-heading">
    <h3 class="panel-title">Контекстная реклама</h3>
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
          <a href="https://ru.wikipedia.org/wiki/%D0%AF%D0%BD%D0%B4%D0%B5%D0%BA%D1%81.%D0%94%D0%B8%D1%80%D0%B5%D0%BA%D1%82">* Yandex Direct</a> <br />
          <a href="https://direct.yandex.ru/commander/">* Yandex Direct Commander</a><br />
          <a href="https://direct.yandex.ru/">* Яндекс Директ</a><br />
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
              - Минимальный бюджет - 300 руб.<br />
              <br />
              <i class="fa fa-magic" aria-hidden="true"></i> Инструменты:<br />
              1) <strong>Wordstat</strong> - инструмент подбора ключевых слов. Для поиска слов - всегда указывать регион, где будет проходить
              рекламная кампания. Нужны те ключевые слова/фразы, которые используются в нужном регионе. Показатель запросов -
              50-500 в месяц.<br />
              2) <strong>Yandex Wordstat Assistant</strong> - виджет, помогоющий при сборе ключевых слов в <strong>Wordstat</strong>.<br />
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

<button class="button5" id="PolB">Полотно запросов</button>
<button class="button5" id="SpeB">Спецоператоры</button>
<button class="button5" id="AukB">Аукцион</button>
<button class="button5" id="ObyB">Объявления</button>

<!-- The Article -->

<div class="textblock" id="Pol">
  <p>
    <em>============================ Полотно запросов:</em><br />
      1) Парсинг ключевых слов в <strong>Wordstat</strong> + добавка:<br />
      - холодильник купить.<br />
      - холодильник заказать.<br />
      - холодильник цена.<br />
      2) Перенос фраз с помощью <strong>YWA</strong> и далее в <strong>Excel</strong>.<br />
      3) Фильтровка нецелевых запросов + добавление минус-слов в <strong>Excel</strong> файле. Расставить 0 (не подходит) => фильтр по столбцам => из 0 составить
      минус-слова => удалить где фразы с 0 => проработать все полотно.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Spe">
  <p>
    <em>============================ Специальные операторы:</em><br />
      <strong>+</strong> - принудительно учитывает предлоги, местоимения и другие стоп-слова, которые обычно игнорируются поисковой
      системой из-за слишком высокой частотности.<br /><br />
      <strong>""</strong> - позволяет показывать объявление только тем пользователям, чей поисковый запрос совпадает с ключевой
      фразой - те же слова, но возможно в другом порядке и в других формах. Стоп-слова тоже учитываются.<br /><br />
      <strong>!</strong> - строго закрепляет написание слова из ключевой фразы ровно в том виде, как она используется в рекламной
      кампании.<br /><br />
      <strong>[]</strong> - фиксирует порядок слов в поисковом запросе. Стоп-слова тоже учитываются.<br />
  </p>
</div>

<!-- The Article -->

<div class="textblock" id="Auk">
  <p>
    <em>============================ Аукцион:</em><br />
      <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Яндекс Директ зарабатывает на показах. Чем больше показов, и чем больше <strong>CRT</strong> - тем лучше место.
      Позиция зависит от качества напрямую. Яндекс ставит то объявление, где больше вероятность клика.<br />
  </p>

<div class="alert alert-success">
  <i class="fa fa-circle" aria-hidden="true"></i> Чем больше кликнуло - тем меньше стоимость клика.
</div>

</div>

<!-- The Article -->

<div class="textblock" id="Oby">
  <p>
    <em>============================ Объявления:</em>
  </p>

<div class="alert alert-info">
  <i class="fa fa-info-circle" aria-hidden="true"></i> Длина заголовка - 32 символа, а текст объявления - 75 символов.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> Обязательно должны быть уточнения - дополнительные выгоды, визуально больше выглядят.<br />
  <i class="fa fa-chevron-right" aria-hidden="true"></i> 1 запрос - 1 объявление.
</div>

  <p>
    <span class="v"><strong># Временной таргетинг</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Лучше отключить показ объявлений с 2 ночи до 7 утра. В это время <strong>CTR</strong> наименьший.<br /><br />
    <span class="v"><strong># Показатели качества</strong></span><br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Наличие ключевого слова в заголовке.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Наличие ключевого слова на странице, куда идет трафик.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Чем меньше длина объявления, тем выше показатель качества.<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Карма домена (если пользователи заходят на сайт, но никаких действий - карма ухудшается).<br />
    <i class="fa fa-thumb-tack rojo" aria-hidden="true"></i> Внутренние эмпирические данные Яндекса о тексте слов.<br />
  </p>
</div>

  </div>
</div>

</body>
</html>
