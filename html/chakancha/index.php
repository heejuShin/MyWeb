<!DOCTYPE html>
<html>
<head>
  <title>Chakancha</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" type="text/css" href="./mainstyle.css">



</head>

<body>
  <header>
    <navigation-header id="header1" class="navigation_header">
      <div class="navigation_header_logo">
        <a href="./index.php"><i class="fas fa-heart" id="logo"></i></a>
      </div>

      <nav class="navigation_header_mainnav">
        <ul class="main_menu">
          <li><a class="main_menu" href="./index.php" id="m1">Mission statement <i class="fas fa-heart"></i></a>
            <ul class="s1_mission">
              <li><a class="s1_mission" href="./index.php">차칸차란?</a></li>
              <li><a class="s1_mission" href="./index.php">목표</a></li>
              <li><a class="s1_mission" href="./index.php">차별점</a></li>
              <li><a class="s1_mission" href="./index.php">사명</a></li>
            </ul>
          </li>
          <li><a class="main_menu" href="./index.php" id="m2">Product <i class="fas fa-heart"></i></a>
            <ul class="s2_mission" id="m2">
              <li><a class="s2_mission" href="./index.php">차칸차란?</a></li>
              <li><a class="s2_mission" href="./index.php">목표</a></li>
              <li><a class="s2_mission" href="./index.php">차별점</a></li>
              <li><a class="s2_mission" href="./index.php">사명</a></li>
            </ul>
          </li>
          <li><a class="main_menu" href="./index.php" id="m1">Out Story <i class="fas fa-heart"></i></a>
            <ul class="s3_mission" id="m3">
              <li><a class="s3_mission" href="./index.php">차칸차란?</a></li>
              <li><a class="s3_mission" href="./index.php">목표</a></li>
              <li><a class="s3_mission" href="./index.php">차별점</a></li>
              <li><a class="s3_mission" href="./index.php">사명</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <div class="navigation_header_personalnav">
        <ul class="personal">
          <li><a class="personal" id="personal" href="./index.php">개인정보<i class="fas fa-heart" id="personal"></i></a></li>
          <li><a class="personal" id="cart" href="./index.php">카트<i class="fas fa-heart" id="cart"></i></a></li>
        </ul>
      </div>

    </navigation-header>
  </header>

  <main>
    <div id="margin"></div>
    <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/tea1.jpg" alt="Tea1" width="800" height="500">
      </div>
      <div class="carousel-item">
        <img src="./img/tea2.jpg" alt="Tea2" width="800" height="500">
      </div>
      <div class="carousel-item">
        <img src="./img/tea3.jpg" alt="Tea3" width="800" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  </main>

  <footer>
  </footer>



</body>
</html>
