<<<<<<< HEAD
<section class="tv-series-area tv-series-bg" data-background="img/bg/tv_series_bg02.jpg">
    <div class="container">
    <div class="row align-items-center position-relative">
                        <div class="col-xl-3 col-lg-4">
                            <div class="movie-details-img">
                                <img class="film-image" src="images/<?php echo htmlspecialchars($film["image"]); ?>" alt="<?php echo htmlspecialchars($film["film_name"]); ?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="movie-details-content">
                            <h1><?php echo htmlspecialchars($film["film_name"]); ?></h1>
                                <div class="banner-meta">
                                    <ul>
                                        <li class="quality">
                                            <span> <?php echo htmlspecialchars($film['release_year']); ?></span>
                                            <span> <?php echo htmlspecialchars($film['language']); ?></span>
                                        </li>
                                        <li class="category text-white">
                                            <span>
                                            <?php echo nl2br(htmlspecialchars($filmGenre['genre_name'])); ?>,
                                            </span>
                                            <span>
                                                <?php echo nl2br(htmlspecialchars($filmCategory['category_name'])); ?>

                                            </span>
                                        </li>
                                        <li class="text-white">
                                            Quốc Gia :
                                        <?php echo nl2br(htmlspecialchars($filmCountry['country_name'])); ?>
                                        </li>
                                    </ul>
                                </div>

                                <div class="text-white">
                                    <?php echo nl2br(htmlspecialchars($film['description'])); ?>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
    </div>
</section>

<section class="episode-area episode-bg" data-background="img/bg/episode_bg.jpg">
                <div class="container">
                            <div class="movie-episode-wrap">
                                <div class="episode-top-wrap">
                                    <div class="section-title">
                                        <h2 class="title">TẬP PHIM</h2>
                                    </div>
                                </div>
                                <div class="episode-watch-wrap">
                                        <div class="card">
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <?php foreach ($episodes as $episode): ?>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#videoModal"
                                                                data-video="<?php echo htmlspecialchars($episode['video_url']); ?>">
                                                                <?php echo htmlspecialchars($episode['episode_name']); ?>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                </div>
            </section>

<!--binh luan-->
            <div class="comment-section">
    <h3>💬 Bình luận</h3>
    <div class="fb-comments" 
        data-href="<?php echo 'http://yourwebsite.com/film.php?id=' . $film["film_id"]; ?>" 
        data-width="100%" 
        data-numposts="5" 
        data-order-by="reverse_time">
    </div>
</div>

<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>




<!-- Bootstrap Modal -->
=======
<?php if (isset($film)): ?>
    <h1><?php echo htmlspecialchars($film["film_name"]); ?></h1>
    <img src="images/<?php echo htmlspecialchars($film["image"]); ?>" alt="<?php echo htmlspecialchars($film["film_name"]); ?>">
    <p><strong>Mô tả:</strong> <?php echo nl2br(htmlspecialchars($film['description'])); ?></p>
    <p><strong>Ngày phát hành:</strong> <?php echo htmlspecialchars($film['release_year']); ?></p>

    <p><strong>Danh sách tập phim:</strong></p>
    <ul>
        <?php foreach ($episodes as $episode): ?>
            <li>
            <a href="#" data-toggle="modal" data-target="#videoModal"
            data-video="<?php echo htmlspecialchars($episode['video_url']); ?>">
            <?php echo htmlspecialchars($episode['episode_name']); ?>

        </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="/">Quay lại danh sách</a>
<?php else: ?>
    <p>Không tìm thấy thông tin phim.</p>
<?php endif; ?>


<!-- Bootstrap Modal -->

>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Xem Tập Phim</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<<<<<<< HEAD
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="400px" id="videoPlayer"
                src=""
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
=======
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
            <iframe width="100%" height="400px" id="videoPlayer"
    src=""
    title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
</iframe>

>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD

<!-- jQuery + Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        $("#videoModal").on("show.bs.modal", function (event) {
            let button = $(event.relatedTarget); // Lấy nút được nhấn
            let videoUrl = button.data("video"); // Lấy URL video

            // Cập nhật src của iframe video
            let videoPlayer = $("#videoPlayer");
            videoPlayer.attr("src", videoUrl);
        });

        $("#videoModal").on("hide.bs.modal", function () {
            let videoPlayer = $("#videoPlayer");

            // Xóa src để dừng video khi đóng modal
            videoPlayer.attr("src", "");
        });
    });
=======
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function () {
    $("#videoModal").on("show.bs.modal", function (event) {
        let button = $(event.relatedTarget); // Lấy nút được nhấn
        let videoUrl = button.data("video"); // Lấy URL video

        // Cập nhật src của iframe video
        let videoPlayer = $("#videoPlayer");
        videoPlayer.attr("src", videoUrl);
    });

    $("#videoModal").on("hide.bs.modal", function () {
        let videoPlayer = $("#videoPlayer");

        // Xóa src để dừng video khi đóng modal
        videoPlayer.attr("src", "");
    });
});

>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
</script>
