<h1>Danh sách tập phim</h1>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Tên phim</th>
        <th>Số tập</th>
        <th>Tên tập</th>
        <th>URL video</th>
        <th>Thời gian tạo</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($episodes as $episode): ?>
        <tr>
            <td><?php echo htmlspecialchars($episode['episode_id']); ?></td>
            <td><?php echo htmlspecialchars($episode['film_name']); ?></td>
            <td><?php echo htmlspecialchars($episode['episode_number']); ?></td>
            <td><?php echo htmlspecialchars($episode['episode_name']); ?></td>
            <td><?php echo htmlspecialchars($episode['video_url']); ?></td>
            <td><?php echo htmlspecialchars($episode['created_at']); ?></td>
            <td>
                <a href="/createOrUpdateEpisode?episode_id=<?php echo $episode['episode_id']; ?>&film_id=<?php echo $_GET['film_id']; ?>">Sửa</a>
                <form action="" method="POST" style="display: inline;">
                    <input type="hidden" name="episode_id" value="<?php echo $episode['episode_id']; ?>">
                    <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="/createOrUpdateEpisode?film_id=<?php echo $_GET['film_id']; ?>">Thêm tập phim</a>
<a href="/">Quay lại</a>
