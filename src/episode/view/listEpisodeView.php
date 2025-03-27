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
        <tr>
            <td><?php echo htmlspecialchars($episode['episode_id']); ?></td>
            <td><?php echo htmlspecialchars($episode['film_name']); ?></td>
            <td><?php echo htmlspecialchars($episode['episode_number']); ?></td>
            <td><?php echo htmlspecialchars($episode['episode_name']); ?></td>
            <td><a href="<?php echo htmlspecialchars($episode['video_url']); ?>" target="_blank">Xem</a></td>
            <td><?php echo htmlspecialchars($episode['created_at']); ?></td>
            <td>
                <a class="btn-action btn-success mb-20" href="/createOrUpdateEpisode?episode_id=<?php echo $episode['episode_id']; ?>">Sửa</a>
                <form action="" method="POST" style="display:inline;">
                    <input type="hidden" name="episode_id" value="<?php echo htmlspecialchars($episode['episode_id']); ?>">
                    <button href="#" class="btn-action btn-danger" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
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
