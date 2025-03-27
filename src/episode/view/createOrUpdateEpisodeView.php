<<<<<<< HEAD
<section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
    <div class="container">
        <div class="row justify-content-center mb-40">
            <div class="col-xl-8 col-lg-7">
                <div class="contact-form">
                    <form action="" method="POST"  enctype="multipart/form-data">
                        <h2 class="admin-title"><?php echo isset($episode['episode_id']) ? 'Cập Nhật' : 'Thêm'; ?> Tập Phim</h2>

                        <!-- Hiển thị lỗi nếu có -->
                        <?php if (!empty($error_message)): ?>
                            <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
                        <?php endif; ?>

                        <input type="hidden" name="episode_id" value="<?php echo htmlspecialchars($episode['episode_id'] ?? ''); ?>">
                            <div class="form-group">
                            <label for="film_id">Phim:</label>
                        <select name="film_id" id="film_id" class="form-control" required>
                            <option value="">-- Chọn phim --</option>
                            <?php foreach ($ds_film as $film): ?>
                                <option value="<?php echo $film['film_id']; ?>"
                                    <?php echo ($episode['film_id'] ?? '') == $film['film_id'] ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($film['film_name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                            </div>


                        <label for="episode_number">Số Tập:</label>
                        <input type="number" id="episode_number" name="episode_number"
                            value="<?php echo htmlspecialchars($episode['episode_number'] ?? ''); ?>" required>

                        <label for="episode_name">Tên Tập:</label>
                        <input type="text" id="episode_name" name="episode_name"
                            value="<?php echo htmlspecialchars($episode['episode_name'] ?? ''); ?>" required>

                        <label for="video_url">URL Video:</label>
                        <input type="url" id="video_url" name="video_url"
                            value="<?php echo htmlspecialchars($episode['video_url'] ?? ''); ?>" required>
                            <div class="d-flex justify-content-between align-items-baseline mt-30">

                        <button type="submit" class="btn">
                            <?php echo !empty($episode['episode_id']) ? 'CẬP NHẬT' : 'THÊM PHIM'; ?>
                        </button>
                        <a href="/episode">Quay lại danh sách tập phim</a>
                        </div>
                    </form>

                </div>
            </div>
</section>
=======
<h1><?php echo isset($_GET['episode_id']) ? "Sửa tập phim" : "Thêm tập phim"; ?></h1>
<form action="" method="POST">
    <input type="hidden" name="film_id" value="<?php echo $film_id; ?>">
    <div class="form-group">
        <label for="episode_number">Số tập:</label>
        <input type="number" name="episode_number" value="<?php echo htmlspecialchars($episode['episode_number']); ?>" required>
    </div>
    <div class="form-group">
        <label for="episode_name">Tên tập:</label>
        <input type="text" name="episode_name" value="<?php echo htmlspecialchars($episode['episode_name']); ?>" required>
    </div>
    <div class="form-group">
        <label for="video_url">URL Video:</label>
        <input type="text" name="video_url" value="<?php echo htmlspecialchars($episode['video_url']); ?>" required>
    </div>
    <button type="submit">Lưu</button>
</form>
<a href="/episode?film_id=<?php echo $film_id; ?>">Quay lại</a>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
