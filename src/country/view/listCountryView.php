<<<<<<< HEAD
<div class="container">
<h2 class="admin-title text-dark">Danh sách Quốc Gia</h2>
<div class="d-flex align-items-center mt-20 mb-20">
<a class="btn btn-add text-white" href="/createOrUpdateCountry" >Thêm</a>
<form method="GET" action="/country" class="w-100 pl-10 pr-10">
    <div class="form-search">
    <input type="text" name="keyword" placeholder="Nhập id, tên quốc gia" class="search-input form-control">
    <button type="submit" class="search-button admin">Tìm kiếm</button>
    </div>
</form>
</div>

<div class="table-responsive">

<table  class="table table-striped table-dark table-bordered text-center">

=======
<h2>Quốc gia</h2>
<table border="1" style="width: 100%; border-collapse: collapse;">
<form method="GET" action="/country">
<!-- <-- Tìm kiếm --> 
<input type="text" name="keyword" placeholder="Nhập id, tên quốc gia" class="search-input">
        <button type="submit" class="search-button">Tìm kiếm</button>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
    <tr>
        <th>ID</th>
        <th>Tên quốc gia</th>
        <th>Hành động</th>
    </tr>
    <?php if (!empty($countries)): ?>

        <?php foreach ($countries as $country): ?>
<<<<<<< HEAD

=======
        
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
        <tr>
            <td><?php echo htmlspecialchars($country['country_id']); ?></td>
            <td><?php echo htmlspecialchars($country['country_name']); ?></td>
            <td>
<<<<<<< HEAD
                <a class="btn-action btn-success mb-20" href="/createOrUpdateCountry?id=<?php echo $country['country_id']; ?>" >Sửa</a>
=======
                <a class="btn light-blue" href="/createOrUpdateCountry" >Thêm</a>
                <a class="btn cyan" href="/createOrUpdateCountry?id=<?php echo $country['country_id']; ?>" >Sửa</a>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
                <!-- <a href="#">Xóa</a> -->
                <form action="" method="POST" style="display:inline;">
                    <input type="hidden" name="country_id" value="<?php echo htmlspecialchars($country['country_id']); ?>">
                    <!-- Thẻ A làm nút xóa -->
<<<<<<< HEAD
                <a href="#" class="btn-action btn-danger" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
=======
                <a href="#" class="btn deep-orange" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
</form>

            </td>
        </tr>
    <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Không có dữ liệu nào cho danh mục phim.</td>
        </tr>
<<<<<<< HEAD
    <?php endif; ?>
</table>
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
                    <a href="/country?page=<?php echo $i; ?>"
                       class="<?php echo ($currentPage == $i) ? 'active' : ''; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

  </div>
  </div>


=======
    <?php endif; ?>    
</table>
<!-- Phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="/country?page=<?php echo $i; ?>"><?php echo $i; ?></a>

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
