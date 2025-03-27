<<<<<<< HEAD

<section class="movie-area movie-bg" data-background="img/bg/movie_bg.jpg">

<div class="container">

        <div class="row tr-movie-active">
            <?php foreach ($films as $film): ?> <!-- Duyệt danh sách phim -->
                <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                    <div class="movie-item movie-item-three mb-50">
                        <div class="movie-poster">
                            <img src="images/<?php echo htmlspecialchars($film['image']); ?>" alt="">
                            <ul class="overlay-btn">
                                <li><a href="/filmDetail?film_id=<?php echo $film['film_id']; ?>" class="btn">Xem Chi Tiết</a></li>
                            </ul>
                        </div>
                        <div class="movie-content">
                            <div class="top">
                                <h5 class="title">
                                    <a href="/filmDetail?film_id=<?php echo $film['film_id']; ?>">
                                        <?php echo htmlspecialchars($film['film_name']); ?>
                                    </a>
                                </h5>
                                <span class="date"><?php echo htmlspecialchars($film['release_year']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
=======
<h2>Phim theo quốc gia</h2>
<div class="row">
<?php foreach ($films as $film): ?>
    <div class=" col-lg-3 col-md-4 col-6 mb-3 ">
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
