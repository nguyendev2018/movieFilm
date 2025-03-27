<<<<<<< HEAD


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
        <?php foreach ($data["banners"] as $index => $banner) : ?>
            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                <img src="images/<?= htmlspecialchars($banner['image']) ?>" class="d-block w-100" alt="<?= htmlspecialchars($banner['banner_name'] ?? 'Banner Image') ?>">
            </div>
        <?php endforeach; ?>
    </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
</div>
<section class="ucm-area ucm-bg2" data-background="img/bg/ucm_bg02.jpg">
<div class="container">
<div class="section-title title-style-three text-center text-lg-left mb-30">
<h2 class="title">Danh sách</h2>

</div>

<div class="row">
<?php foreach ($data["films"] as $film): ?>
    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                <img src="images/<?php echo htmlspecialchars($film['image']); ?>"alt="">
                                <ul class="overlay-btn">
                                        <li><a href="/filmDetail?film_id=<?php echo $film['film_id']; ?>" class="btn">Xem chi tiết</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                <div class="top">
                                        <h5 class="title"><a href="/filmDetail?film_id=<?php echo $film['film_id']; ?>"><?php echo htmlspecialchars($film['film_name']); ?></a></h5>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="date"><?php echo htmlspecialchars($film['release_year']); ?></span></li>
                                            <li><span class="quality"><?php echo htmlspecialchars($film['language']); ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php endforeach; ?>
</div>
</div>
=======
<div class="row">
<?php foreach ($data["films"] as $film): ?>
        <div class="col-lg-3 col-md-4 col-6 mb-3 ">
            <div class="card">
            <img src="images/<?php echo htmlspecialchars($film['image']); ?>" class="card-img-top">

<div class="card-body">
<h5 class="card-title"><?php echo htmlspecialchars($film['film_name']); ?></h5>
    <a href="/filmDetail?film_id=<?php echo $film['film_id']; ?>" class="btn btn-primary">Xem chi tiết</a>
            </div>
        </div>
        </div>
<?php endforeach; ?>
</div>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a

