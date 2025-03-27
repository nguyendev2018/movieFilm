
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
