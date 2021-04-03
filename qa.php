<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />

<title>QA</title>

<link rel="shortcut icon" href="Images/I/check.png" type="image/x-icon">

<script src="JS/jquery-3.3.1.min.js"></script>
<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<script src="Bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="FA/css/font-awesome.min.css">

<link href="Build/Decor.min.css" rel="stylesheet">

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
          <a class="navbar-brand">QA</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

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

<!-- T. Blocks -->

<div class="container" id="D">

  <div class="col-6 col-sm-6 col-lg-4">
    <h5>Testing & Debugging</h5>
    <p>
      <a href="QA/testing.php" class="thumbnail">
       <img src="Images/Test.png" class="DSH" />
      </a>
    </p>
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
      2%
    </div>
      </div>
  </div>

</div>

<!-- T. Blocks -->

<div class="container" id="D">

  <div class="col-6 col-sm-6 col-lg-4">
    <h5>Тестирование (JasmineJS)</h5>
    <p>
      <a href="QA/jasminejs.php" class="thumbnail">
       <img src="Images/JasmineJS.png" width="343px" height="360px" />
      </a>
    </p>
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 1%;">
      1%
    </div>
      </div>
  </div>

  <div class="col-6 col-sm-6 col-lg-4">
    <h5>Тестирование (MochaJS)</h5>
    <p>
      <a href="QA/mocha.php" class="thumbnail">
       <img src="Images/Mocha.png" width="343px" height="360px" />
      </a>
    </p>
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
      30%
    </div>
      </div>
  </div>

  <div class="col-6 col-sm-6 col-lg-4">
    <h5 class="of">Запуск тестов (KarmaJS)</h5>
    <p>
      <a href="QA/karma.php" class="thumbnail">
       <img src="Images/Karma.jpg" width="343px" height="360px" />
      </a>
    </p>
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 1%;">
      1%
    </div>
      </div>
  </div>

  <div class="col-6 col-sm-6 col-lg-4">
    <h5 class="of">Mocha-функции (ChaiJS)</h5>
    <p>
      <a href="QA/chai.php" class="thumbnail">
       <img src="Images/ChaiJS.png" width="343px" height="360px" />
      </a>
    </p>
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 28%;">
      28%
    </div>
      </div>
  </div>

  <div class="col-6 col-sm-6 col-lg-4">
    <h5 class="of">Mocha-заглушки (SinonJS)</h5>
    <p>
      <a href="QA/sinonjs.php" class="thumbnail">
       <img src="Images/SinonJS.png" width="343px" height="360px" />
      </a>
    </p>
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 1%;">
      1%
    </div>
      </div>
  </div>

  <div class="col-6 col-sm-6 col-lg-4">
    <h5>Тестирование (JestJS)</h5>
    <p>
      <a href="QA/jest.php" class="thumbnail">
       <img src="Images/Jest.png" width="343px" height="360px" />
      </a>
    </p>
      <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="00" aria-valuemin="0" aria-valuemax="100" style="width: 1%;">
      1%
    </div>
      </div>
  </div>

</div>

<footer>
  <div>
    <p>&copy; <?php echo date("Y"); ?> San Antonio, Texas, USA</p>
  </div>
</footer>

</body>
</html>
