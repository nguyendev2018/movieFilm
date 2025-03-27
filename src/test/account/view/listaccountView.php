<h2 class="admin-title">Quản lý Tài Khoản</h2>
<table border="1" style="width: 100%; border-collapse: collapse;">
    <form method="GET" action="/account">
        <input type="text" name="keyword" placeholder="Nhập ID hoặc tên tài khoản" class="search-input">
        <button type="submit" class="search-button">Tìm kiếm</button>
   
    </form>
    <tr>
        <th>ID</th>
        <th>Tên người dùng</th>
        <th>Vai trò</th>
        <th>Hành động</th>
    </tr>
    <?php if (!empty($accounts)): ?>
        <?php foreach ($accounts as $account): ?>
            <tr>
            <td><?php echo htmlspecialchars($account['user_id']); ?></td>
                <td><?php echo htmlspecialchars($account['username']); ?></td>
                <td><?php echo htmlspecialchars($account['role']); ?></td>
                <td>
                    <a class="btn cyan" href="/createOrUpdateAccount?user_id=<?php echo $account['user_id']; ?>">Sửa</a>
                    <form action="" method="POST" style="display:inline;">
                        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($account['user_id']); ?>">
                        <a href="#" class="btn deep-orange" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">Không có dữ liệu tài khoản.</td>
        </tr>
    <?php endif; ?>
</table>

<!-- Phân trang -->
<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="/account?page=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php endfor; ?>
</div>

<style>
    /* Tổng thể */
body {
    font-family: Arial, sans-serif;
    background-color: #0d0d0d;
    padding: 20px;
}

/* Tiêu đề */
h2 {
    color: white;
    font-size: 24px;
    font-weight: bold;
}

/* Ô tìm kiếm */
.search-input {
    padding: 8px;
    border: 1px solid rgb(202, 91, 247);
    border-radius: 5px;
    margin-right: 10px;
    width: 250px;
    background-color: #1a1a1a;
}

/* Nút tìm kiếm */
.search-button {
    background-image: linear-gradient(to right, rgb(151, 40, 216), rgb(204, 110, 241));
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: 0.3s;
}

.search-button:hover {
    background-image: linear-gradient(to right, rgb(204, 110, 241), rgb(151, 40, 216));
}

/* Bảng */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #1a1a1a;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
}

th {
    background-image: linear-gradient(to right, rgb(151, 40, 216), rgb(204, 110, 241));
    color: white;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #0d0d0d;
}

td{
    color: white;
}

/* Nút hành động */
.btn {
    text-decoration: none;
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 14px;
    margin: 2px;
    display: inline-block;
}

.light-blue {
    background-color:rgb(186, 53, 248);
    color: white;
}

.cyan {
    background-color:rgb(156, 22, 209);
    color: white;
}

.deep-orange {
    background-color: #ff7043;
    color: white;
}

.btn:hover {
    opacity: 0.8;
}

/* Phân trang */
.pagination {
    margin-top: 15px;
    text-align: center;
}

.pagination a {
    text-decoration: none;
    padding: 8px 12px;
    margin: 2px;
    background-color:rgb(148, 19, 235);
    color: white;
    border-radius: 4px;
    transition: 0.3s;
}

.pagination a:hover {
    background-color:rgb(169, 66, 209);
}

</style>

<!-- Hiển thị thông báo -->
<?php if (isset($_SESSION['message'])): ?>
    <script>
        showNotification('<?php echo $_SESSION['message']; ?>', 'success');
        <?php unset($_SESSION['message']); ?>
    </script>
<?php endif; ?>
<?php if (isset($_SESSION['error'])): ?>
    <script>
        showNotification('<?php echo $_SESSION['error']; ?>', 'error');
        <?php unset($_SESSION['error']); ?>
    </script>
<?php endif; ?>
