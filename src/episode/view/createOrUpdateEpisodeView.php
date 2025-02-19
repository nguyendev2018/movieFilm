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
