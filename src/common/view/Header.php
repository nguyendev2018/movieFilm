<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Fiveflix</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<<<<<<< HEAD
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
=======
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta author="David Baqueiro">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website xem phim PHP</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/www/dist/src.css?v=<?php echo $this->cache_version; ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
<body>
<?php
    // Custom CSS/JS
    foreach ($this->output_styles as $style_file) {
        echo $style_file;
    }
    foreach ($this->output_scripts as $script_file) {
        echo $script_file;
    }

?>
<<<<<<< HEAD
 <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
     <header>
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="/" >
                                            <img src="img/logo/logo.png" alt="Logo" style="width: 56px;">
                                            <span class="logo-text">IVEFLIX</span>
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active "><a href="/">Trang chủ</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Thể loại</a>
                                                <ul class="submenu">
                                                <?php if (!empty($_SESSION["genres"])): ?>
                                                    <?php foreach ($_SESSION["genres"] as $genre): ?>
                                                        <li>
                                                        <a  href="/filmGenres?genre_id=<?php echo htmlspecialchars($genre['genre_id'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                                                            <?php echo htmlspecialchars($genre['genre_name'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                                                        </a>
                                                        </li>

                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Quốc Gia</a>
                                                <ul class="submenu">
                                                <?php if (!empty($_SESSION["country"])): ?>
                                                    <?php foreach ($_SESSION["country"] as $countries): ?>
                                                        <li>
                                                            <a href="/filmCountry?country_id=<?php echo htmlspecialchars($countries['country_id'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                                                                <?php echo htmlspecialchars($countries['country_name'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                </ul>
                                            </li>
                                            <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] && isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                                            <li class="menu-item-has-children"><a href="#">Quản lý</a>
                                                <ul class="submenu">
                                                <li><a  href="/banner">Banner</a></li>
                                                <li><a  href="/film">Phim</a></li>
                                                <li><a  href="/episode">Tập phim</a></li>
                                                <li><a  href="/genres">Thể loại</a></li>
                                                <li><a  href="/category">Danh mục</a></li>
                                                <li><a  href="/country">Quốc gia</a></li>
                                                <li><a  href="/account">Tài khoản</a></li>
                                                <li><a  href="/filmChart">Biểu đồ(Phim)</a></li>
                                                </ul>
                                            </li>
                                            <?php endif; ?>

      <?php if (isset($_SESSION['logged']) && $_SESSION['logged']): ?>
    <li class="nav-item"><a class="nav-link" href="/logout">ĐĂNG XUẤT</a></li>
<?php else: ?>
    <li class="nav-item"><a class="nav-link" href="/login">ĐĂNG NHẬP</a></li>
<?php endif; ?>

                                        </ul>
                                    </div>

                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="/"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                            <!-- Modal Search -->
                            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form>
                                            <input type="text" placeholder="Search here...">
                                            <button><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Search-end -->

                        </div>
                    </div>
                </div>
            </div>
        </header>

=======
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
  <a class="navbar-brand" href="/">FiveFix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Thể loại
        </a>
        <div class="dropdown-menu">
        <?php foreach ($_SESSION["genres"] as $genre): ?>
                    <a class="dropdown-item" href="/filmGenres?genre_id=<?php echo htmlspecialchars($genre['genre_id'])?>" class="text-dark">
                        <?php echo htmlspecialchars($genre['genre_name'])?>
                    </a>
            <?php endforeach; ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Quốc gia
        </a>
        <div class="dropdown-menu">
        <?php foreach ($_SESSION["country"] as $countries): ?>
                    <a class="dropdown-item" href="/filmCountry?country_id=<?php echo htmlspecialchars($countries['country_id'])?>" class="text-dark">
                            <?php echo htmlspecialchars($countries['country_name'])?>
                    </a>
                <?php endforeach; ?>
        </div>
      </li>
    <li class="nav-item"><a class="nav-link" href="/login" >Đăng nhập</a></li>
    <?php if (isset($_SESSION['logged']) && $_SESSION['logged']): ?>
    <li><a  href="/logout">Đăng xuất</a></li>
    <?php endif; ?>

    </ul>
  </div>
</nav>


<div class="container">
    <div id="main" class="main">
    </div>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
