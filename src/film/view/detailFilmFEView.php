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

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Xem Tập Phim</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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

            </div>
        </div>
    </div>
</div>
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

</script>
