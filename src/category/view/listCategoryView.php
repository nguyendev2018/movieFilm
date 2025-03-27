<<<<<<< HEAD
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

=======
<h2>Danh mục phim</h2>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <!-- Tìm kiế m -->
    <form method="GET" action="/category">
        <input type="text" name="keyword" placeholder="Nhập id, tên danh mục" class="search-input">
        <button type="submit" class="search-button">Tìm kiếm</button>
    </form>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Hành động</th>
    </tr>
    <?php if (!empty($categories)): ?>
        <?php foreach ($categories as $category): ?>
<<<<<<< HEAD

=======
            
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
            <tr>
                <td><?php echo htmlspecialchars($category['category_id']); ?></td>
                <td><?php echo htmlspecialchars($category['category_name']); ?></td>
                <td>
<<<<<<< HEAD
                    <a class="btn-action btn-success mb-20" href="/createOrUpdateCategory?id=<?php echo $category['category_id']; ?>" >Sửa</a>
=======
                    <a class="btn light-blue" href="/createOrUpdateCategory" >Thêm</a>
                    <a class="btn cyan" href="/createOrUpdateCategory?id=<?php echo $category['category_id']; ?>" >Sửa</a>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
                    <!-- <a href="#">Xóa</a> -->
                    <form action="" method="POST" style="display:inline;">
                        <input type="hidden" name="category_id" value="<?php echo htmlspecialchars($category['category_id']); ?>">
                        <!-- Thẻ A làm nút xóa -->
<<<<<<< HEAD
                    <a href="#" class="btn-action btn-danger" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
=======
                    <a href="#" class="btn deep-orange" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
                    </form>

                </td>
            </tr>
<<<<<<< HEAD

=======
            
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Không có dữ liệu nào cho danh mục phim.</td>
        </tr>
<<<<<<< HEAD
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
=======
    <?php endif; ?>    
</table>

<!-- Phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="/category?page=<?php echo $i; ?>"><?php echo $i; ?></a>

    <?php endfor; ?>
</div>

<style>
    .search-button {
        background-image: linear-gradient(to right,rgb(55, 73, 236),rgb(81, 187, 236));
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .search-button:hover {
        /* background-color: #45a049; */
        background-image: linear-gradient(to right,rgb(55, 73, 236),rgb(81, 187, 236));
        color: white;
    }

</style>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a

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
<<<<<<< HEAD
<?php endif; ?>
=======
<?php endif; ?>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
