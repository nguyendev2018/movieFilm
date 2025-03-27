<div class="container">
<h2 class="admin-title text-dark">Danh mục phim</h2>
<div class="d-flex align-items-center mt-20 mb-20">
<a class="btn btn-add text-white" href="/createOrUpdateCategory" >Thêm</a>
    <form method="GET" action="/category" class="w-100 pl-10 pr-10">
        <div class="form-search">
            <input type="text" name="keyword" placeholder="Nhập id, tên danh mục" class="search-input form-control">
            <button type="submit" class="search-button admin">Tìm kiếm</button>
        </div>
    </form>
</div>
</div>
<div class="table-responsive">

<table class="table table-striped table-dark table-bordered text-center">
    <!-- Tìm kiế m -->

    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Hành động</th>
    </tr>
    <?php if (!empty($categories)): ?>
        <?php foreach ($categories as $category): ?>

            <tr>
                <td><?php echo htmlspecialchars($category['category_id']); ?></td>
                <td><?php echo htmlspecialchars($category['category_name']); ?></td>
                <td>
                    <a class="btn-action btn-success mb-20" href="/createOrUpdateCategory?id=<?php echo $category['category_id']; ?>" >Sửa</a>
                    <!-- <a href="#">Xóa</a> -->
                    <form action="" method="POST" style="display:inline;">
                        <input type="hidden" name="category_id" value="<?php echo htmlspecialchars($category['category_id']); ?>">
                        <!-- Thẻ A làm nút xóa -->
                    <a href="#" class="btn-action btn-danger" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
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
                    <a href="/category?page=<?php echo $i; ?>"
                       class="<?php echo ($currentPage == $i) ? 'active' : ''; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

  </div>

<!-- TH05 -->
 <!-- Hiển thị thông báo nế u có -->
<?php if (isset($_SESSION['message'])): ?>
    <script>
        // Chạy function JS showNotification() trong file Notify.js
        showNotification('<?php echo $_SESSION['message']; ?>', 'success');
        // Unset thông báo sau khi hiển thị
        <?php unset($_SESSION['message']); ?>
    </script>
    <?php endif; ?>
<!-- Hiển thị lỗi nế u có -->
<?php if (isset($_SESSION['error'])): ?>
    <script>
        // Chạy function JS showNotification() trong file Notify.js
        showNotification('<?php echo $_SESSION['error']; ?>', 'error');
        // Unset lỗi sau khi hiển thị
        <?php unset($_SESSION['error']); ?>
    </script>
<?php endif; ?>
