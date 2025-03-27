<div class="container">
<h2 class="admin-title text-dark">Quản lý Tài Khoản</h2>
<div class="d-flex align-items-center mt-20 mb-20">

<form method="GET" action="/account" class="w-100 pl-10 pr-10">
    <div class="form-search" >
    <input type="text" name="keyword" placeholder="Nhập ID hoặc tên tài khoản" class="search-input form-control">
    <button type="submit" class="search-button admin">Tìm kiếm</button>
    </div>


    </form>
</div>

<div class="table-responsive">

<table  class="table table-striped table-dark table-bordered text-center">

    <tr>
        <th>ID</th>
        <th>Tên người dùng</th>
        <th>Vai trò</th>
        <th>Hành động</th>
    </tr>
    <?php if (!empty($users)): ?>
        <?php foreach ($users as $account): ?>
            <tr>
            <td><?php echo htmlspecialchars($account['user_id']); ?></td>
                <td><?php echo htmlspecialchars($account['username']); ?></td>
                <td><?php echo htmlspecialchars($account['role']); ?></td>
                <td>
                    <a class="btn-action btn-success mb-20" href="/createOrUpdateAccount?user_id=<?php echo $account['user_id']; ?>">Sửa</a>
                    <form action="" method="POST" style="display:inline;">
                        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($account['user_id']); ?>">
                        <a href="#" class="btn-action btn-danger" onclick="this.closest('form').submit(); return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
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
<div class="pagination-wrap">
    <nav>
    <ul>
            <?php
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Mặc định là trang 1
            for ($i = 1; $i <= $totalPages; $i++):
            ?>
                <li>
                    <a href="/account?page=<?php echo $i; ?>"
                       class="<?php echo ($currentPage == $i) ? 'active' : ''; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>


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
