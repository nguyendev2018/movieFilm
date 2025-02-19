<h2>Thể loại phim</h2>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <!-- Tìm kiế m -->
    <form method="GET" action="/genres">
        <input type="text" name="keyword" placeholder="Nhập id, tên" class="search-input">
        <button type="submit"class="search-button">Tìm kiếm</button>
    </form>
    <tr>
        <th>ID</th>
        <th>Tên thể loại</th>
        <th>Hành động</th>
    </tr>
    <?php if (!empty($genres)): ?>
        <?php foreach ($genres as $genres): ?>
            <tr>
                <td><?php echo htmlspecialchars($genres['genre_id']); ?></td>
                <td><?php echo htmlspecialchars($genres['genre_name']); ?></td>
                <td>
                    <a class="btn light-blue" href="/createOrUpdateGenres" >Thêm</a>
                    <a class="btn cyan" href="/createOrUpdateGenres?id=<?php echo $genres['genre_id']; ?>" >Sửa</a>
                    <!-- <a href="#">Xóa</a> -->
                    <form action="" method="POST" style="display:inline;">
                        <input type="hidden" name="genre_id" value="<?php echo htmlspecialchars($genres['genre_id']); ?>">
                        <!-- Thẻ A làm nút xóa -->
                    <a href="#" class="btn deep-orange" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">Không có dữ liệu nào cho thể loại phim.</td>
        </tr>
    <?php endif; ?>    
</table>

<!-- Phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="/genres?page=<?php echo $i; ?>"><?php echo $i; ?></a>

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