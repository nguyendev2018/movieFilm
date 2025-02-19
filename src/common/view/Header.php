<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta author="David Baqueiro">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website xem phim PHP</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/www/dist/src.css?v=<?php echo $this->cache_version; ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
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
