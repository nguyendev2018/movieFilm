<<<<<<< HEAD
<div class="container">
<h2 class="admin-title text-dark">Danh sách Tập Phim</h2>
<div class="d-flex align-items-center mt-20 mb-20">

<a class="btn btn-add text-white" href="/createOrUpdateEpisode">Thêm Tập Phim</a>

    <form method="GET" action="/episode" class="w-100 pl-10 pr-10">
        <div class="form-search">
            <input type="text" name="keyword" placeholder="Nhập id, tên tập phim" class="search-input form-control">
            <button type="submit" class="search-button admin">Tìm kiếm</button>
        </div>
    </form>
    </div>
    <div class="table-responsive">
    <table  class="table table-striped table-dark table-bordered text-center">

    <tr>
        <th>ID</th>
        <th>Tên phim</th>
        <th>Số Tập</th>
        <th>Tên Tập</th>
        <th>URL</th>
        <th>Ngày Tạo</th>
        <th>Hành động</th>
    </tr>
    <?php if (! empty($episodes)): ?>
<?php foreach ($episodes as $episode): ?>
=======
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
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
        <tr>
            <td><?php echo htmlspecialchars($episode['episode_id']); ?></td>
            <td><?php echo htmlspecialchars($episode['film_name']); ?></td>
            <td><?php echo htmlspecialchars($episode['episode_number']); ?></td>
            <td><?php echo htmlspecialchars($episode['episode_name']); ?></td>
<<<<<<< HEAD
            <td><a href="<?php echo htmlspecialchars($episode['video_url']); ?>" target="_blank">Xem</a></td>
            <td><?php echo htmlspecialchars($episode['created_at']); ?></td>
            <td>
                <a class="btn-action btn-success mb-20" href="/createOrUpdateEpisode?episode_id=<?php echo $episode['episode_id']; ?>">Sửa</a>
                <form action="" method="POST" style="display:inline;">
                    <input type="hidden" name="episode_id" value="<?php echo htmlspecialchars($episode['episode_id']); ?>">
                    <button href="#" class="btn-action btn-danger" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</button>
=======
            <td><?php echo htmlspecialchars($episode['video_url']); ?></td>
            <td><?php echo htmlspecialchars($episode['created_at']); ?></td>
            <td>
                <a href="/createOrUpdateEpisode?episode_id=<?php echo $episode['episode_id']; ?>&film_id=<?php echo $_GET['film_id']; ?>">Sửa</a>
                <form action="" method="POST" style="display: inline;">
                    <input type="hidden" name="episode_id" value="<?php echo $episode['episode_id']; ?>">
                    <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</button>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
<<<<<<< HEAD
<?php else: ?>
        <tr>
            <td colspan="8">Không có dữ liệu nào cho danh mục phim.</td>
        </tr>
    <?php endif; ?>
</table>
</div>
<!-- Phân trang -->
<div class="col-12">
<div class="pagination-wrap">
    <nav>
        <ul>
            <?php
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Mặc định là trang 1
            for ($i = 1; $i <= $totalPages; $i++):
            ?>
                <li>
                    <a href="/episode?page=<?php echo $i; ?>"
                       class="<?php echo ($currentPage == $i) ? 'active' : ''; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

</div>
=======
</table>
<a href="/createOrUpdateEpisode?film_id=<?php echo $_GET['film_id']; ?>">Thêm tập phim</a>
<a href="/">Quay lại</a>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
