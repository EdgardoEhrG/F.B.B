<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>F. B. B.</title>

<link rel="shortcut icon" href="Images/I/booklet.png" type="image/x-icon">

<script src="JS/jquery-3.3.1.min.js"></script>
<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<script src="Bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="FA/css/font-awesome.min.css">

<link href="CSS/Reset.css" rel="stylesheet">
<link href="Build/Main.min.css" rel="stylesheet">
<link href="CSS/Global.css" rel="stylesheet">
<script src="JS/Animations.js"></script>

<!-- Project "Ariba" -->
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<!--<script src="./JS/Ariba.js" defer></script> -->

</head>

<body>

<header>
  <h1><i class="fa fa-code leftico" aria-hidden="true"></i>Web Programming <i class="fa fa-code rightico" aria-hidden="true"></i></h1>
</header>

<div id="Answer">
  <p id="Result"></p>
</div>

<div class="MenueD" id="MenueD">
  <div id="ContainerD">
    <a href="https://github.com/EdgardoEhrG"><img src="Images/I/GH.png" class="MenueI" /></a>
    <a href="https://jsfiddle.net/"><img src="Images/I/JSF.png" class="MenueI" /></a>
    <a href="https://csscolor.ru/"><img src="Images/I/rainbow.png" class="MenueI" /></a>
    <a href="https://pixlr.com/editor/?loc=ru?loc=ru"><img src="Images/I/PE.png" class="MenueI" /></a>
    <a href="https://assets.adobe.com/assets/recent"><img src="Images/I/AA.png" class="MenueI" /></a>
    <a href="http://www.20minutemail.com/"><img src="Images/I/MM.png" class="MenueI" /></a>
    <a href="https://www.upwork.com/"><img src="Images/I/Up.png" class="MenueI" /></a>
  </div>
</div>

<button class="MenueB" onclick="new Audio('Media/Sounds/1.mp3').play(); return false;">
  <i class="fa fa-lock" id="Show"></i>
</button>

<button class="AribaB"><i class="fa fa-commenting" aria-hidden="true" id="Ariba"></i></button>

<div class="container">

<div class="col-lg-4">
  <a href="frontend.php" class="thumbnail">
   <img src="Images/Fr.jpg" />
  </a>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 44%;">
      44%
    </div>
  </div>
</div>

<div class="col-lg-4">
  <a href="backend.php" class="thumbnail">
   <img src="Images/B.jpg"  />
  </a>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 11%;">
      11%
    </div>
  </div>
</div>

<div class="col-lg-4">
  <a href="other.php" class="thumbnail">
   <img src="Images/IT.jpg"/>
  </a>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 8%;">
      8%
    </div>
  </div>
</div>

</div>

<div class="flex-container">

<div class="col-lg-3">
  <a href="devops.php" class="thumbnail">
   <img src="Images/DevOps.png" />
  </a>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 1%;">
      1%
    </div>
  </div>
</div>

<div class="col-lg-3">
  <a href="qa.php" class="thumbnail">
   <img src="Images/QA.png"  />
  </a>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
      10%
    </div>
  </div>
</div>

<div class="col-lg-3">
  <a href="ba.php" class="thumbnail">
   <img src="Images/BA.png"  />
  </a>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 1%;">
      1%
    </div>
  </div>
</div>

</div>

<footer>

<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3">
  <i class="fa fa-bookmark" aria-hidden="true"></i> Sites
</button>

<!-- Modal -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Сайты</h4>
     </div>
     <div class="modal-body">
       <a href="http://paletton.com/#uid=10m0u0kllllaFw0g0qFqFg0w0aF">* Цветовой круг</a><br />
       <a href="https://fonts.google.com/">* Google Fonts</a><br />
       <br />

       <a href="http://validator.w3.org/">* W3C-Валидатор</a><br />
       <a href="https://caniuse.com/">* Поддержка технологий браузерами</a><br />
       <a href="https://codepen.io/">* Frontend-разработка</a><br />
       <a href="https://www.invisionapp.com/">* Прототипирование App</a><br />
       <br />

       <a href="https://www.powtoon.com/">* Создание анимированных видео</a><br />
       <br />

       <a href="https://hootsuite.com/">* Управление SMM</a><br />
       <a href="https://coschedule.com/">* Аналитика SMM</a><br />
       <a href="https://smmplanner.com/">* Отложенная публикация в сети</a><br />
       <br />

       <a href="https://itv.te-st.ru/">* IT-волонтерство</a><br />
     </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
       </div>
   </div>
 </div>
</div>

<br /><br /><br />

<p class="fo">
  &copy; <?php echo date("Y"); ?> San Antonio, Texas, USA
</p>

<br /><br />

</footer>

</body>
</html>
