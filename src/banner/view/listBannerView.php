<div class="container">



<h2 class="admin-title text-dark">Quản Lý Banner</h2>
<div class="mb-20 mt-20">
<a class="btn btn-add text-white" href="/bannerCreateOrUpdate" >Thêm banner
</a>
</div>

<table class="table table-striped table-dark table-bordered text-center">
    <tr>

        <th>Tên Banner</th>
        <th>Mô tả</th>
        <th>Hình Ảnh</th>
        <th>Hành Động</th>
    </tr>
 <?php foreach ($banners as $banner): ?>
    <tr>
        <td>
        <?php echo htmlspecialchars($banner['banner_name']); ?></td>
        <td><?php echo htmlspecialchars($banner['banner_desc']); ?></td>
        <td>
        <img src="images/<?php echo htmlspecialchars($banner['image']); ?>" class="img-trailer">
        </td>
        <td>
            <!-- Nút Sửa-->
            <a class="btn-action btn-success mb-20" href="/bannerCreateOrUpdate?banner_id=<?php echo $banner['banner_id'];?>">Sửa</a>
            <!-- Nút Xóa-->
             <!-- <a href="#">Xóa</a> -->
            <form action="" method="POST" style="display:inline;">

            <input type="hidden" name="banner_id" value="<?php echo htmlspecialchars($banner['banner_id']); ?>">
            <button class="btn-action btn-danger" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</button>
            </form>

        </td>
    </tr>
    <?php endforeach; ?>

</table>

 <!-- Phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="/film?page=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php endfor; ?>
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



