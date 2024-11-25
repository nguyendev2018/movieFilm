<h2>Danh sách phim</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Tên Phim</th>
        <th>Mô Tả</th>
        <th>Hình Ảnh</th>
        <th>Ngày Phát Hành</th>
        <th>Ngôn ngữ</th>
        <th>created_at</th>
        <th>country_id</th>
        <th>category_id</th>
    </tr>
 <?php foreach ($films as $film): ?>
    <tr>
        <td><?php echo htmlspecialchars($film['film_id']); ?></td>
        <td><?php echo htmlspecialchars($film['film_name']); ?></td>
        <td><?php echo htmlspecialchars($film['description']); ?></td>
        <td><?php echo htmlspecialchars($film['image']); ?></td>
        <td><?php echo htmlspecialchars($film['release_year']); ?></td>
        <td><?php echo htmlspecialchars($film['language']); ?></td>
        <td><?php echo htmlspecialchars($film['created_at']); ?></td>
        <td><?php echo htmlspecialchars($film['country_id']); ?></td>
        <td><?php echo htmlspecialchars($film['category_id']); ?></td>
        <td>
            <!-- Nút Thêm-->
            <a href="/create">Thêm</a> |
            <!-- Nút Sửa-->
            <a href="#">Sửa</a> |
            <!-- Nút Xóa-->
            <a href="#">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
 </table>
